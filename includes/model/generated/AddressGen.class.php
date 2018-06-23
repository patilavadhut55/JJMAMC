<?php
	/**
	 * The abstract AddressGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Address subclass which
	 * extends this AddressGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Address class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idaddress the value for intIdaddress (Read-Only PK)
	 * @property integer $Of the value for intOf 
	 * @property integer $Roll the value for intRoll 
	 * @property string $AddressLine1 the value for strAddressLine1 
	 * @property string $AddressLine2 the value for strAddressLine2 
	 * @property integer $Country the value for intCountry 
	 * @property integer $Country1 the value for intCountry1 
	 * @property integer $State the value for intState 
	 * @property integer $State1 the value for intState1 
	 * @property integer $District the value for intDistrict 
	 * @property integer $District1 the value for intDistrict1 
	 * @property integer $Taluka the value for intTaluka 
	 * @property integer $Taluka1 the value for intTaluka1 
	 * @property string $City the value for strCity 
	 * @property string $City1 the value for strCity1 
	 * @property string $ZipCode the value for strZipCode 
	 * @property string $Zipcode1 the value for strZipcode1 
	 * @property string $Contact1 the value for strContact1 
	 * @property string $Contact2 the value for strContact2 
	 * @property string $Email1 the value for strEmail1 
	 * @property string $Email2 the value for strEmail2 
	 * @property string $TinSalesTaxNo the value for strTinSalesTaxNo 
	 * @property string $CstNo the value for strCstNo 
	 * @property QDateTime $Dob the value for dttDob 
	 * @property string $Age the value for strAge 
	 * @property integer $Gender the value for intGender 
	 * @property string $BirthPlace the value for strBirthPlace 
	 * @property QDateTime $AppoinmentDate the value for dttAppoinmentDate 
	 * @property integer $BusinessType the value for intBusinessType 
	 * @property integer $SupplierType the value for intSupplierType 
	 * @property string $SupplierOf the value for strSupplierOf 
	 * @property integer $SupplierCategory the value for intSupplierCategory 
	 * @property string $VatNo the value for strVatNo 
	 * @property string $GstNo the value for strGstNo 
	 * @property string $BankName the value for strBankName 
	 * @property string $BankAccNo the value for strBankAccNo 
	 * @property string $Branch the value for strBranch 
	 * @property string $NiftIfscWireTransferNo the value for strNiftIfscWireTransferNo 
	 * @property string $PanNo the value for strPanNo 
	 * @property string $AdharCardNo the value for strAdharCardNo 
	 * @property string $RegFee the value for strRegFee 
	 * @property string $ShopActLicensNo the value for strShopActLicensNo 
	 * @property QDateTime $ShopActDate the value for dttShopActDate 
	 * @property string $TurnoverInr the value for strTurnoverInr 
	 * @property integer $PhNo1 the value for intPhNo1 
	 * @property string $FaxNo the value for strFaxNo 
	 * @property string $TanNo the value for strTanNo 
	 * @property integer $Bank the value for intBank 
	 * @property integer $AppointmentCat the value for intAppointmentCat 
	 * @property QDateTime $JoiningDate the value for dttJoiningDate 
	 * @property integer $Designation the value for intDesignation 
	 * @property integer $Department the value for intDepartment 
	 * @property integer $Prefix the value for intPrefix 
	 * @property string $Fname the value for strFname 
	 * @property string $Mname the value for strMname 
	 * @property string $Lname the value for strLname 
	 * @property string $Fatherfname the value for strFatherfname 
	 * @property string $Fathermname the value for strFathermname 
	 * @property string $Fatherlname the value for strFatherlname 
	 * @property integer $MarritalStatus the value for intMarritalStatus 
	 * @property integer $BloodGrp the value for intBloodGrp 
	 * @property integer $Religion the value for intReligion 
	 * @property integer $CasteCat the value for intCasteCat 
	 * @property integer $Caste the value for intCaste 
	 * @property string $IfscCode the value for strIfscCode 
	 * @property integer $Payscale the value for intPayscale 
	 * @property string $Web the value for strWeb 
	 * @property Ledger $OfObject the value for the Ledger object referenced by intOf 
	 * @property Role $RollObject the value for the Role object referenced by intRoll 
	 * @property Place $CountryObject the value for the Place object referenced by intCountry 
	 * @property Place $Country1Object the value for the Place object referenced by intCountry1 
	 * @property Place $StateObject the value for the Place object referenced by intState 
	 * @property Place $State1Object the value for the Place object referenced by intState1 
	 * @property Place $DistrictObject the value for the Place object referenced by intDistrict 
	 * @property Place $District1Object the value for the Place object referenced by intDistrict1 
	 * @property Place $TalukaObject the value for the Place object referenced by intTaluka 
	 * @property Place $Taluka1Object the value for the Place object referenced by intTaluka1 
	 * @property Gender $GenderObject the value for the Gender object referenced by intGender 
	 * @property BusinessCat $BusinessTypeObject the value for the BusinessCat object referenced by intBusinessType 
	 * @property SupplierGrp $SupplierTypeObject the value for the SupplierGrp object referenced by intSupplierType 
	 * @property SupplierCat $SupplierCategoryObject the value for the SupplierCat object referenced by intSupplierCategory 
	 * @property AppoinmentCat $AppointmentCatObject the value for the AppoinmentCat object referenced by intAppointmentCat 
	 * @property Role $DesignationObject the value for the Role object referenced by intDesignation 
	 * @property Role $DepartmentObject the value for the Role object referenced by intDepartment 
	 * @property Prefix $PrefixObject the value for the Prefix object referenced by intPrefix 
	 * @property MarrialStatus $MarritalStatusObject the value for the MarrialStatus object referenced by intMarritalStatus 
	 * @property BloodGroup $BloodGrpObject the value for the BloodGroup object referenced by intBloodGrp 
	 * @property Religion $ReligionObject the value for the Religion object referenced by intReligion 
	 * @property FeesConcession $CasteCatObject the value for the FeesConcession object referenced by intCasteCat 
	 * @property Cast $CasteObject the value for the Cast object referenced by intCaste 
	 * @property PayScale $PayscaleObject the value for the PayScale object referenced by intPayscale 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AddressGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column address.idaddress
		 * @var integer intIdaddress
		 */
		protected $intIdaddress;
		const IdaddressDefault = null;


		/**
		 * Protected member variable that maps to the database column address.of
		 * @var integer intOf
		 */
		protected $intOf;
		const OfDefault = null;


		/**
		 * Protected member variable that maps to the database column address.roll
		 * @var integer intRoll
		 */
		protected $intRoll;
		const RollDefault = null;


		/**
		 * Protected member variable that maps to the database column address.address_line1
		 * @var string strAddressLine1
		 */
		protected $strAddressLine1;
		const AddressLine1Default = null;


		/**
		 * Protected member variable that maps to the database column address.address_line2
		 * @var string strAddressLine2
		 */
		protected $strAddressLine2;
		const AddressLine2Default = null;


		/**
		 * Protected member variable that maps to the database column address.country
		 * @var integer intCountry
		 */
		protected $intCountry;
		const CountryDefault = null;


		/**
		 * Protected member variable that maps to the database column address.country1
		 * @var integer intCountry1
		 */
		protected $intCountry1;
		const Country1Default = null;


		/**
		 * Protected member variable that maps to the database column address.state
		 * @var integer intState
		 */
		protected $intState;
		const StateDefault = null;


		/**
		 * Protected member variable that maps to the database column address.state1
		 * @var integer intState1
		 */
		protected $intState1;
		const State1Default = null;


		/**
		 * Protected member variable that maps to the database column address.district
		 * @var integer intDistrict
		 */
		protected $intDistrict;
		const DistrictDefault = null;


		/**
		 * Protected member variable that maps to the database column address.district1
		 * @var integer intDistrict1
		 */
		protected $intDistrict1;
		const District1Default = null;


		/**
		 * Protected member variable that maps to the database column address.taluka
		 * @var integer intTaluka
		 */
		protected $intTaluka;
		const TalukaDefault = null;


		/**
		 * Protected member variable that maps to the database column address.taluka1
		 * @var integer intTaluka1
		 */
		protected $intTaluka1;
		const Taluka1Default = null;


		/**
		 * Protected member variable that maps to the database column address.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 255;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column address.city1
		 * @var string strCity1
		 */
		protected $strCity1;
		const City1MaxLength = 255;
		const City1Default = null;


		/**
		 * Protected member variable that maps to the database column address.zip_code
		 * @var string strZipCode
		 */
		protected $strZipCode;
		const ZipCodeMaxLength = 45;
		const ZipCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.zipcode1
		 * @var string strZipcode1
		 */
		protected $strZipcode1;
		const Zipcode1MaxLength = 45;
		const Zipcode1Default = null;


		/**
		 * Protected member variable that maps to the database column address.contact1
		 * @var string strContact1
		 */
		protected $strContact1;
		const Contact1MaxLength = 45;
		const Contact1Default = null;


		/**
		 * Protected member variable that maps to the database column address.contact2
		 * @var string strContact2
		 */
		protected $strContact2;
		const Contact2MaxLength = 45;
		const Contact2Default = null;


		/**
		 * Protected member variable that maps to the database column address.email1
		 * @var string strEmail1
		 */
		protected $strEmail1;
		const Email1MaxLength = 45;
		const Email1Default = null;


		/**
		 * Protected member variable that maps to the database column address.email2
		 * @var string strEmail2
		 */
		protected $strEmail2;
		const Email2MaxLength = 45;
		const Email2Default = null;


		/**
		 * Protected member variable that maps to the database column address.tin_sales_tax_no
		 * @var string strTinSalesTaxNo
		 */
		protected $strTinSalesTaxNo;
		const TinSalesTaxNoMaxLength = 45;
		const TinSalesTaxNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.cst_no
		 * @var string strCstNo
		 */
		protected $strCstNo;
		const CstNoMaxLength = 45;
		const CstNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.dob
		 * @var QDateTime dttDob
		 */
		protected $dttDob;
		const DobDefault = null;


		/**
		 * Protected member variable that maps to the database column address.age
		 * @var string strAge
		 */
		protected $strAge;
		const AgeMaxLength = 45;
		const AgeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.gender
		 * @var integer intGender
		 */
		protected $intGender;
		const GenderDefault = null;


		/**
		 * Protected member variable that maps to the database column address.birth_place
		 * @var string strBirthPlace
		 */
		protected $strBirthPlace;
		const BirthPlaceMaxLength = 25;
		const BirthPlaceDefault = null;


		/**
		 * Protected member variable that maps to the database column address.appoinment_date
		 * @var QDateTime dttAppoinmentDate
		 */
		protected $dttAppoinmentDate;
		const AppoinmentDateDefault = null;


		/**
		 * Protected member variable that maps to the database column address.business_type
		 * @var integer intBusinessType
		 */
		protected $intBusinessType;
		const BusinessTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.supplier_type
		 * @var integer intSupplierType
		 */
		protected $intSupplierType;
		const SupplierTypeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.supplier_of
		 * @var string strSupplierOf
		 */
		protected $strSupplierOf;
		const SupplierOfDefault = null;


		/**
		 * Protected member variable that maps to the database column address.supplier_category
		 * @var integer intSupplierCategory
		 */
		protected $intSupplierCategory;
		const SupplierCategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column address.vat_no
		 * @var string strVatNo
		 */
		protected $strVatNo;
		const VatNoMaxLength = 45;
		const VatNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.gst_no
		 * @var string strGstNo
		 */
		protected $strGstNo;
		const GstNoMaxLength = 45;
		const GstNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.bank_name
		 * @var string strBankName
		 */
		protected $strBankName;
		const BankNameMaxLength = 255;
		const BankNameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.bank_acc_no
		 * @var string strBankAccNo
		 */
		protected $strBankAccNo;
		const BankAccNoMaxLength = 45;
		const BankAccNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.branch
		 * @var string strBranch
		 */
		protected $strBranch;
		const BranchMaxLength = 245;
		const BranchDefault = null;


		/**
		 * Protected member variable that maps to the database column address.nift_ifsc_wire_transfer_no
		 * @var string strNiftIfscWireTransferNo
		 */
		protected $strNiftIfscWireTransferNo;
		const NiftIfscWireTransferNoMaxLength = 255;
		const NiftIfscWireTransferNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.pan_no
		 * @var string strPanNo
		 */
		protected $strPanNo;
		const PanNoMaxLength = 45;
		const PanNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.adhar_card_no
		 * @var string strAdharCardNo
		 */
		protected $strAdharCardNo;
		const AdharCardNoMaxLength = 45;
		const AdharCardNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.reg_fee
		 * @var string strRegFee
		 */
		protected $strRegFee;
		const RegFeeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.shop_act_licens_no
		 * @var string strShopActLicensNo
		 */
		protected $strShopActLicensNo;
		const ShopActLicensNoMaxLength = 45;
		const ShopActLicensNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.shop_act_date
		 * @var QDateTime dttShopActDate
		 */
		protected $dttShopActDate;
		const ShopActDateDefault = null;


		/**
		 * Protected member variable that maps to the database column address.turnover_inr
		 * @var string strTurnoverInr
		 */
		protected $strTurnoverInr;
		const TurnoverInrDefault = null;


		/**
		 * Protected member variable that maps to the database column address.ph_no1
		 * @var integer intPhNo1
		 */
		protected $intPhNo1;
		const PhNo1Default = null;


		/**
		 * Protected member variable that maps to the database column address.fax_no
		 * @var string strFaxNo
		 */
		protected $strFaxNo;
		const FaxNoMaxLength = 45;
		const FaxNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.tan_no
		 * @var string strTanNo
		 */
		protected $strTanNo;
		const TanNoMaxLength = 45;
		const TanNoDefault = null;


		/**
		 * Protected member variable that maps to the database column address.bank
		 * @var integer intBank
		 */
		protected $intBank;
		const BankDefault = null;


		/**
		 * Protected member variable that maps to the database column address.appointment_cat
		 * @var integer intAppointmentCat
		 */
		protected $intAppointmentCat;
		const AppointmentCatDefault = null;


		/**
		 * Protected member variable that maps to the database column address.joining_date
		 * @var QDateTime dttJoiningDate
		 */
		protected $dttJoiningDate;
		const JoiningDateDefault = null;


		/**
		 * Protected member variable that maps to the database column address.designation
		 * @var integer intDesignation
		 */
		protected $intDesignation;
		const DesignationDefault = null;


		/**
		 * Protected member variable that maps to the database column address.department
		 * @var integer intDepartment
		 */
		protected $intDepartment;
		const DepartmentDefault = null;


		/**
		 * Protected member variable that maps to the database column address.prefix
		 * @var integer intPrefix
		 */
		protected $intPrefix;
		const PrefixDefault = null;


		/**
		 * Protected member variable that maps to the database column address.fname
		 * @var string strFname
		 */
		protected $strFname;
		const FnameMaxLength = 255;
		const FnameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.mname
		 * @var string strMname
		 */
		protected $strMname;
		const MnameMaxLength = 255;
		const MnameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.lname
		 * @var string strLname
		 */
		protected $strLname;
		const LnameMaxLength = 255;
		const LnameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.fatherfname
		 * @var string strFatherfname
		 */
		protected $strFatherfname;
		const FatherfnameMaxLength = 255;
		const FatherfnameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.fathermname
		 * @var string strFathermname
		 */
		protected $strFathermname;
		const FathermnameMaxLength = 255;
		const FathermnameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.fatherlname
		 * @var string strFatherlname
		 */
		protected $strFatherlname;
		const FatherlnameMaxLength = 255;
		const FatherlnameDefault = null;


		/**
		 * Protected member variable that maps to the database column address.marrital_status
		 * @var integer intMarritalStatus
		 */
		protected $intMarritalStatus;
		const MarritalStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column address.blood_grp
		 * @var integer intBloodGrp
		 */
		protected $intBloodGrp;
		const BloodGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column address.religion
		 * @var integer intReligion
		 */
		protected $intReligion;
		const ReligionDefault = null;


		/**
		 * Protected member variable that maps to the database column address.caste_cat
		 * @var integer intCasteCat
		 */
		protected $intCasteCat;
		const CasteCatDefault = null;


		/**
		 * Protected member variable that maps to the database column address.caste
		 * @var integer intCaste
		 */
		protected $intCaste;
		const CasteDefault = null;


		/**
		 * Protected member variable that maps to the database column address.ifsc_code
		 * @var string strIfscCode
		 */
		protected $strIfscCode;
		const IfscCodeMaxLength = 255;
		const IfscCodeDefault = null;


		/**
		 * Protected member variable that maps to the database column address.payscale
		 * @var integer intPayscale
		 */
		protected $intPayscale;
		const PayscaleDefault = null;


		/**
		 * Protected member variable that maps to the database column address.web
		 * @var string strWeb
		 */
		protected $strWeb;
		const WebDefault = null;


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
		 * in the database column address.of.
		 *
		 * NOTE: Always use the OfObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objOfObject
		 */
		protected $objOfObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.roll.
		 *
		 * NOTE: Always use the RollObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRollObject
		 */
		protected $objRollObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.country.
		 *
		 * NOTE: Always use the CountryObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objCountryObject
		 */
		protected $objCountryObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.country1.
		 *
		 * NOTE: Always use the Country1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objCountry1Object
		 */
		protected $objCountry1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.state.
		 *
		 * NOTE: Always use the StateObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objStateObject
		 */
		protected $objStateObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.state1.
		 *
		 * NOTE: Always use the State1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objState1Object
		 */
		protected $objState1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.district.
		 *
		 * NOTE: Always use the DistrictObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objDistrictObject
		 */
		protected $objDistrictObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.district1.
		 *
		 * NOTE: Always use the District1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objDistrict1Object
		 */
		protected $objDistrict1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.taluka.
		 *
		 * NOTE: Always use the TalukaObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objTalukaObject
		 */
		protected $objTalukaObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.taluka1.
		 *
		 * NOTE: Always use the Taluka1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objTaluka1Object
		 */
		protected $objTaluka1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.gender.
		 *
		 * NOTE: Always use the GenderObject property getter to correctly retrieve this Gender object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Gender objGenderObject
		 */
		protected $objGenderObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.business_type.
		 *
		 * NOTE: Always use the BusinessTypeObject property getter to correctly retrieve this BusinessCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BusinessCat objBusinessTypeObject
		 */
		protected $objBusinessTypeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.supplier_type.
		 *
		 * NOTE: Always use the SupplierTypeObject property getter to correctly retrieve this SupplierGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var SupplierGrp objSupplierTypeObject
		 */
		protected $objSupplierTypeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.supplier_category.
		 *
		 * NOTE: Always use the SupplierCategoryObject property getter to correctly retrieve this SupplierCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var SupplierCat objSupplierCategoryObject
		 */
		protected $objSupplierCategoryObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.appointment_cat.
		 *
		 * NOTE: Always use the AppointmentCatObject property getter to correctly retrieve this AppoinmentCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AppoinmentCat objAppointmentCatObject
		 */
		protected $objAppointmentCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.designation.
		 *
		 * NOTE: Always use the DesignationObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDesignationObject
		 */
		protected $objDesignationObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.department.
		 *
		 * NOTE: Always use the DepartmentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDepartmentObject
		 */
		protected $objDepartmentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.prefix.
		 *
		 * NOTE: Always use the PrefixObject property getter to correctly retrieve this Prefix object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Prefix objPrefixObject
		 */
		protected $objPrefixObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.marrital_status.
		 *
		 * NOTE: Always use the MarritalStatusObject property getter to correctly retrieve this MarrialStatus object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var MarrialStatus objMarritalStatusObject
		 */
		protected $objMarritalStatusObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.blood_grp.
		 *
		 * NOTE: Always use the BloodGrpObject property getter to correctly retrieve this BloodGroup object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BloodGroup objBloodGrpObject
		 */
		protected $objBloodGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.religion.
		 *
		 * NOTE: Always use the ReligionObject property getter to correctly retrieve this Religion object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Religion objReligionObject
		 */
		protected $objReligionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.caste_cat.
		 *
		 * NOTE: Always use the CasteCatObject property getter to correctly retrieve this FeesConcession object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FeesConcession objCasteCatObject
		 */
		protected $objCasteCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.caste.
		 *
		 * NOTE: Always use the CasteObject property getter to correctly retrieve this Cast object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cast objCasteObject
		 */
		protected $objCasteObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column address.payscale.
		 *
		 * NOTE: Always use the PayscaleObject property getter to correctly retrieve this PayScale object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var PayScale objPayscaleObject
		 */
		protected $objPayscaleObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdaddress = Address::IdaddressDefault;
			$this->intOf = Address::OfDefault;
			$this->intRoll = Address::RollDefault;
			$this->strAddressLine1 = Address::AddressLine1Default;
			$this->strAddressLine2 = Address::AddressLine2Default;
			$this->intCountry = Address::CountryDefault;
			$this->intCountry1 = Address::Country1Default;
			$this->intState = Address::StateDefault;
			$this->intState1 = Address::State1Default;
			$this->intDistrict = Address::DistrictDefault;
			$this->intDistrict1 = Address::District1Default;
			$this->intTaluka = Address::TalukaDefault;
			$this->intTaluka1 = Address::Taluka1Default;
			$this->strCity = Address::CityDefault;
			$this->strCity1 = Address::City1Default;
			$this->strZipCode = Address::ZipCodeDefault;
			$this->strZipcode1 = Address::Zipcode1Default;
			$this->strContact1 = Address::Contact1Default;
			$this->strContact2 = Address::Contact2Default;
			$this->strEmail1 = Address::Email1Default;
			$this->strEmail2 = Address::Email2Default;
			$this->strTinSalesTaxNo = Address::TinSalesTaxNoDefault;
			$this->strCstNo = Address::CstNoDefault;
			$this->dttDob = (Address::DobDefault === null)?null:new QDateTime(Address::DobDefault);
			$this->strAge = Address::AgeDefault;
			$this->intGender = Address::GenderDefault;
			$this->strBirthPlace = Address::BirthPlaceDefault;
			$this->dttAppoinmentDate = (Address::AppoinmentDateDefault === null)?null:new QDateTime(Address::AppoinmentDateDefault);
			$this->intBusinessType = Address::BusinessTypeDefault;
			$this->intSupplierType = Address::SupplierTypeDefault;
			$this->strSupplierOf = Address::SupplierOfDefault;
			$this->intSupplierCategory = Address::SupplierCategoryDefault;
			$this->strVatNo = Address::VatNoDefault;
			$this->strGstNo = Address::GstNoDefault;
			$this->strBankName = Address::BankNameDefault;
			$this->strBankAccNo = Address::BankAccNoDefault;
			$this->strBranch = Address::BranchDefault;
			$this->strNiftIfscWireTransferNo = Address::NiftIfscWireTransferNoDefault;
			$this->strPanNo = Address::PanNoDefault;
			$this->strAdharCardNo = Address::AdharCardNoDefault;
			$this->strRegFee = Address::RegFeeDefault;
			$this->strShopActLicensNo = Address::ShopActLicensNoDefault;
			$this->dttShopActDate = (Address::ShopActDateDefault === null)?null:new QDateTime(Address::ShopActDateDefault);
			$this->strTurnoverInr = Address::TurnoverInrDefault;
			$this->intPhNo1 = Address::PhNo1Default;
			$this->strFaxNo = Address::FaxNoDefault;
			$this->strTanNo = Address::TanNoDefault;
			$this->intBank = Address::BankDefault;
			$this->intAppointmentCat = Address::AppointmentCatDefault;
			$this->dttJoiningDate = (Address::JoiningDateDefault === null)?null:new QDateTime(Address::JoiningDateDefault);
			$this->intDesignation = Address::DesignationDefault;
			$this->intDepartment = Address::DepartmentDefault;
			$this->intPrefix = Address::PrefixDefault;
			$this->strFname = Address::FnameDefault;
			$this->strMname = Address::MnameDefault;
			$this->strLname = Address::LnameDefault;
			$this->strFatherfname = Address::FatherfnameDefault;
			$this->strFathermname = Address::FathermnameDefault;
			$this->strFatherlname = Address::FatherlnameDefault;
			$this->intMarritalStatus = Address::MarritalStatusDefault;
			$this->intBloodGrp = Address::BloodGrpDefault;
			$this->intReligion = Address::ReligionDefault;
			$this->intCasteCat = Address::CasteCatDefault;
			$this->intCaste = Address::CasteDefault;
			$this->strIfscCode = Address::IfscCodeDefault;
			$this->intPayscale = Address::PayscaleDefault;
			$this->strWeb = Address::WebDefault;
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
		 * Load a Address from PK Info
		 * @param integer $intIdaddress
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address
		 */
		public static function Load($intIdaddress, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Address', $intIdaddress);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Address::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Address()->Idaddress, $intIdaddress)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Addresses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Address::QueryArray to perform the LoadAll query
			try {
				return Address::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Addresses
		 * @return int
		 */
		public static function CountAll() {
			// Call Address::QueryCount to perform the CountAll query
			return Address::QueryCount(QQ::All());
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
			$objDatabase = Address::GetDatabase();

			// Create/Build out the QueryBuilder object with Address-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'address');

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
				Address::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('address');

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
		 * Static Qcubed Query method to query for a single Address object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Address the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Address object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Address::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Address::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Address objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Address[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Address::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Address objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Address::GetDatabase();

			$strQuery = Address::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/address', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Address::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Address
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'address';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idaddress', $strAliasPrefix . 'idaddress');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idaddress', $strAliasPrefix . 'idaddress');
			    $objBuilder->AddSelectItem($strTableName, 'of', $strAliasPrefix . 'of');
			    $objBuilder->AddSelectItem($strTableName, 'roll', $strAliasPrefix . 'roll');
			    $objBuilder->AddSelectItem($strTableName, 'address_line1', $strAliasPrefix . 'address_line1');
			    $objBuilder->AddSelectItem($strTableName, 'address_line2', $strAliasPrefix . 'address_line2');
			    $objBuilder->AddSelectItem($strTableName, 'country', $strAliasPrefix . 'country');
			    $objBuilder->AddSelectItem($strTableName, 'country1', $strAliasPrefix . 'country1');
			    $objBuilder->AddSelectItem($strTableName, 'state', $strAliasPrefix . 'state');
			    $objBuilder->AddSelectItem($strTableName, 'state1', $strAliasPrefix . 'state1');
			    $objBuilder->AddSelectItem($strTableName, 'district', $strAliasPrefix . 'district');
			    $objBuilder->AddSelectItem($strTableName, 'district1', $strAliasPrefix . 'district1');
			    $objBuilder->AddSelectItem($strTableName, 'taluka', $strAliasPrefix . 'taluka');
			    $objBuilder->AddSelectItem($strTableName, 'taluka1', $strAliasPrefix . 'taluka1');
			    $objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			    $objBuilder->AddSelectItem($strTableName, 'city1', $strAliasPrefix . 'city1');
			    $objBuilder->AddSelectItem($strTableName, 'zip_code', $strAliasPrefix . 'zip_code');
			    $objBuilder->AddSelectItem($strTableName, 'zipcode1', $strAliasPrefix . 'zipcode1');
			    $objBuilder->AddSelectItem($strTableName, 'contact1', $strAliasPrefix . 'contact1');
			    $objBuilder->AddSelectItem($strTableName, 'contact2', $strAliasPrefix . 'contact2');
			    $objBuilder->AddSelectItem($strTableName, 'email1', $strAliasPrefix . 'email1');
			    $objBuilder->AddSelectItem($strTableName, 'email2', $strAliasPrefix . 'email2');
			    $objBuilder->AddSelectItem($strTableName, 'tin_sales_tax_no', $strAliasPrefix . 'tin_sales_tax_no');
			    $objBuilder->AddSelectItem($strTableName, 'cst_no', $strAliasPrefix . 'cst_no');
			    $objBuilder->AddSelectItem($strTableName, 'dob', $strAliasPrefix . 'dob');
			    $objBuilder->AddSelectItem($strTableName, 'age', $strAliasPrefix . 'age');
			    $objBuilder->AddSelectItem($strTableName, 'gender', $strAliasPrefix . 'gender');
			    $objBuilder->AddSelectItem($strTableName, 'birth_place', $strAliasPrefix . 'birth_place');
			    $objBuilder->AddSelectItem($strTableName, 'appoinment_date', $strAliasPrefix . 'appoinment_date');
			    $objBuilder->AddSelectItem($strTableName, 'business_type', $strAliasPrefix . 'business_type');
			    $objBuilder->AddSelectItem($strTableName, 'supplier_type', $strAliasPrefix . 'supplier_type');
			    $objBuilder->AddSelectItem($strTableName, 'supplier_of', $strAliasPrefix . 'supplier_of');
			    $objBuilder->AddSelectItem($strTableName, 'supplier_category', $strAliasPrefix . 'supplier_category');
			    $objBuilder->AddSelectItem($strTableName, 'vat_no', $strAliasPrefix . 'vat_no');
			    $objBuilder->AddSelectItem($strTableName, 'gst_no', $strAliasPrefix . 'gst_no');
			    $objBuilder->AddSelectItem($strTableName, 'bank_name', $strAliasPrefix . 'bank_name');
			    $objBuilder->AddSelectItem($strTableName, 'bank_acc_no', $strAliasPrefix . 'bank_acc_no');
			    $objBuilder->AddSelectItem($strTableName, 'branch', $strAliasPrefix . 'branch');
			    $objBuilder->AddSelectItem($strTableName, 'nift_ifsc_wire_transfer_no', $strAliasPrefix . 'nift_ifsc_wire_transfer_no');
			    $objBuilder->AddSelectItem($strTableName, 'pan_no', $strAliasPrefix . 'pan_no');
			    $objBuilder->AddSelectItem($strTableName, 'adhar_card_no', $strAliasPrefix . 'adhar_card_no');
			    $objBuilder->AddSelectItem($strTableName, 'reg_fee', $strAliasPrefix . 'reg_fee');
			    $objBuilder->AddSelectItem($strTableName, 'shop_act_licens_no', $strAliasPrefix . 'shop_act_licens_no');
			    $objBuilder->AddSelectItem($strTableName, 'shop_act_date', $strAliasPrefix . 'shop_act_date');
			    $objBuilder->AddSelectItem($strTableName, 'turnover_inr', $strAliasPrefix . 'turnover_inr');
			    $objBuilder->AddSelectItem($strTableName, 'ph_no1', $strAliasPrefix . 'ph_no1');
			    $objBuilder->AddSelectItem($strTableName, 'fax_no', $strAliasPrefix . 'fax_no');
			    $objBuilder->AddSelectItem($strTableName, 'tan_no', $strAliasPrefix . 'tan_no');
			    $objBuilder->AddSelectItem($strTableName, 'bank', $strAliasPrefix . 'bank');
			    $objBuilder->AddSelectItem($strTableName, 'appointment_cat', $strAliasPrefix . 'appointment_cat');
			    $objBuilder->AddSelectItem($strTableName, 'joining_date', $strAliasPrefix . 'joining_date');
			    $objBuilder->AddSelectItem($strTableName, 'designation', $strAliasPrefix . 'designation');
			    $objBuilder->AddSelectItem($strTableName, 'department', $strAliasPrefix . 'department');
			    $objBuilder->AddSelectItem($strTableName, 'prefix', $strAliasPrefix . 'prefix');
			    $objBuilder->AddSelectItem($strTableName, 'fname', $strAliasPrefix . 'fname');
			    $objBuilder->AddSelectItem($strTableName, 'mname', $strAliasPrefix . 'mname');
			    $objBuilder->AddSelectItem($strTableName, 'lname', $strAliasPrefix . 'lname');
			    $objBuilder->AddSelectItem($strTableName, 'fatherfname', $strAliasPrefix . 'fatherfname');
			    $objBuilder->AddSelectItem($strTableName, 'fathermname', $strAliasPrefix . 'fathermname');
			    $objBuilder->AddSelectItem($strTableName, 'fatherlname', $strAliasPrefix . 'fatherlname');
			    $objBuilder->AddSelectItem($strTableName, 'marrital_status', $strAliasPrefix . 'marrital_status');
			    $objBuilder->AddSelectItem($strTableName, 'blood_grp', $strAliasPrefix . 'blood_grp');
			    $objBuilder->AddSelectItem($strTableName, 'religion', $strAliasPrefix . 'religion');
			    $objBuilder->AddSelectItem($strTableName, 'caste_cat', $strAliasPrefix . 'caste_cat');
			    $objBuilder->AddSelectItem($strTableName, 'caste', $strAliasPrefix . 'caste');
			    $objBuilder->AddSelectItem($strTableName, 'ifsc_code', $strAliasPrefix . 'ifsc_code');
			    $objBuilder->AddSelectItem($strTableName, 'payscale', $strAliasPrefix . 'payscale');
			    $objBuilder->AddSelectItem($strTableName, 'web', $strAliasPrefix . 'web');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Address from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Address::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Address
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Address object
			$objToReturn = new Address();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdaddress = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'of';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intOf = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'roll';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRoll = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'address_line1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddressLine1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'address_line2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddressLine2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'country';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCountry = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'country1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCountry1 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'state';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intState = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'state1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intState1 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'district';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDistrict = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'district1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDistrict1 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'taluka';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTaluka = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'taluka1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTaluka1 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'city';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'city1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCity1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'zip_code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strZipCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'zipcode1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strZipcode1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'contact1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strContact1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'contact2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strContact2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'tin_sales_tax_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTinSalesTaxNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'cst_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCstNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'dob';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDob = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'age';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAge = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'gender';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGender = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'birth_place';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBirthPlace = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'appoinment_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttAppoinmentDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'business_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBusinessType = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'supplier_type';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSupplierType = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'supplier_of';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSupplierOf = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'supplier_category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSupplierCategory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'vat_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strVatNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'gst_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGstNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'bank_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBankName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'bank_acc_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBankAccNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'branch';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBranch = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'nift_ifsc_wire_transfer_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNiftIfscWireTransferNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pan_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPanNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'adhar_card_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAdharCardNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'reg_fee';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRegFee = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'shop_act_licens_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShopActLicensNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'shop_act_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttShopActDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'turnover_inr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTurnoverInr = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'ph_no1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPhNo1 = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fax_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFaxNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'tan_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTanNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'bank';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBank = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'appointment_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAppointmentCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'joining_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttJoiningDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDesignation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDepartment = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'prefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPrefix = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'lname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'fatherfname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFatherfname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'fathermname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFathermname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'fatherlname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFatherlname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'marrital_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMarritalStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'blood_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBloodGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'religion';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intReligion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'caste_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCasteCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'caste';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCaste = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ifsc_code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIfscCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'payscale';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPayscale = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'web';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strWeb = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idaddress != $objPreviousItem->Idaddress) {
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
				$strAliasPrefix = 'address__';

			// Check for OfObject Early Binding
			$strAlias = $strAliasPrefix . 'of__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objOfObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'of__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RollObject Early Binding
			$strAlias = $strAliasPrefix . 'roll__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRollObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CountryObject Early Binding
			$strAlias = $strAliasPrefix . 'country__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCountryObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'country__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Country1Object Early Binding
			$strAlias = $strAliasPrefix . 'country1__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCountry1Object = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'country1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StateObject Early Binding
			$strAlias = $strAliasPrefix . 'state__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStateObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'state__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for State1Object Early Binding
			$strAlias = $strAliasPrefix . 'state1__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objState1Object = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'state1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DistrictObject Early Binding
			$strAlias = $strAliasPrefix . 'district__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDistrictObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'district__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for District1Object Early Binding
			$strAlias = $strAliasPrefix . 'district1__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDistrict1Object = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'district1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TalukaObject Early Binding
			$strAlias = $strAliasPrefix . 'taluka__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTalukaObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'taluka__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Taluka1Object Early Binding
			$strAlias = $strAliasPrefix . 'taluka1__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTaluka1Object = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'taluka1__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for GenderObject Early Binding
			$strAlias = $strAliasPrefix . 'gender__idgender';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGenderObject = Gender::InstantiateDbRow($objDbRow, $strAliasPrefix . 'gender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BusinessTypeObject Early Binding
			$strAlias = $strAliasPrefix . 'business_type__idbusiness_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBusinessTypeObject = BusinessCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'business_type__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SupplierTypeObject Early Binding
			$strAlias = $strAliasPrefix . 'supplier_type__idsupplier_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSupplierTypeObject = SupplierGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'supplier_type__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SupplierCategoryObject Early Binding
			$strAlias = $strAliasPrefix . 'supplier_category__idsupplier_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSupplierCategoryObject = SupplierCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'supplier_category__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AppointmentCatObject Early Binding
			$strAlias = $strAliasPrefix . 'appointment_cat__idappoinment_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAppointmentCatObject = AppoinmentCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appointment_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DesignationObject Early Binding
			$strAlias = $strAliasPrefix . 'designation__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDesignationObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'designation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DepartmentObject Early Binding
			$strAlias = $strAliasPrefix . 'department__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDepartmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'department__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PrefixObject Early Binding
			$strAlias = $strAliasPrefix . 'prefix__idprefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPrefixObject = Prefix::InstantiateDbRow($objDbRow, $strAliasPrefix . 'prefix__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for MarritalStatusObject Early Binding
			$strAlias = $strAliasPrefix . 'marrital_status__idmarrial_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMarritalStatusObject = MarrialStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marrital_status__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BloodGrpObject Early Binding
			$strAlias = $strAliasPrefix . 'blood_grp__idblood_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBloodGrpObject = BloodGroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'blood_grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ReligionObject Early Binding
			$strAlias = $strAliasPrefix . 'religion__idreligion';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReligionObject = Religion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'religion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CasteCatObject Early Binding
			$strAlias = $strAliasPrefix . 'caste_cat__idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCasteCatObject = FeesConcession::InstantiateDbRow($objDbRow, $strAliasPrefix . 'caste_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CasteObject Early Binding
			$strAlias = $strAliasPrefix . 'caste__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCasteObject = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'caste__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PayscaleObject Early Binding
			$strAlias = $strAliasPrefix . 'payscale__idpay_scale';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPayscaleObject = PayScale::InstantiateDbRow($objDbRow, $strAliasPrefix . 'payscale__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Addresses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Address[]
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
					$objItem = Address::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Address::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Address object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Address next row resulting from the query
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
			return Address::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Address object,
		 * by Idaddress Index(es)
		 * @param integer $intIdaddress
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address
		*/
		public static function LoadByIdaddress($intIdaddress, $objOptionalClauses = null) {
			return Address::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Address()->Idaddress, $intIdaddress)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Of Index(es)
		 * @param integer $intOf
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByOf($intOf, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByOf query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Of, $intOf),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Of Index(es)
		 * @param integer $intOf
		 * @return int
		*/
		public static function CountByOf($intOf) {
			// Call Address::QueryCount to perform the CountByOf query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Of, $intOf)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Country Index(es)
		 * @param integer $intCountry
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByCountry($intCountry, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByCountry query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Country, $intCountry),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Country Index(es)
		 * @param integer $intCountry
		 * @return int
		*/
		public static function CountByCountry($intCountry) {
			// Call Address::QueryCount to perform the CountByCountry query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Country, $intCountry)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by State Index(es)
		 * @param integer $intState
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByState($intState, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByState query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->State, $intState),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by State Index(es)
		 * @param integer $intState
		 * @return int
		*/
		public static function CountByState($intState) {
			// Call Address::QueryCount to perform the CountByState query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->State, $intState)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by District Index(es)
		 * @param integer $intDistrict
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByDistrict($intDistrict, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByDistrict query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->District, $intDistrict),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by District Index(es)
		 * @param integer $intDistrict
		 * @return int
		*/
		public static function CountByDistrict($intDistrict) {
			// Call Address::QueryCount to perform the CountByDistrict query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->District, $intDistrict)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Taluka Index(es)
		 * @param integer $intTaluka
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByTaluka($intTaluka, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByTaluka query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Taluka, $intTaluka),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Taluka Index(es)
		 * @param integer $intTaluka
		 * @return int
		*/
		public static function CountByTaluka($intTaluka) {
			// Call Address::QueryCount to perform the CountByTaluka query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Taluka, $intTaluka)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Gender Index(es)
		 * @param integer $intGender
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByGender($intGender, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByGender query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Gender, $intGender),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Gender Index(es)
		 * @param integer $intGender
		 * @return int
		*/
		public static function CountByGender($intGender) {
			// Call Address::QueryCount to perform the CountByGender query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Gender, $intGender)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Country1 Index(es)
		 * @param integer $intCountry1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByCountry1($intCountry1, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByCountry1 query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Country1, $intCountry1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Country1 Index(es)
		 * @param integer $intCountry1
		 * @return int
		*/
		public static function CountByCountry1($intCountry1) {
			// Call Address::QueryCount to perform the CountByCountry1 query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Country1, $intCountry1)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by State1 Index(es)
		 * @param integer $intState1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByState1($intState1, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByState1 query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->State1, $intState1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by State1 Index(es)
		 * @param integer $intState1
		 * @return int
		*/
		public static function CountByState1($intState1) {
			// Call Address::QueryCount to perform the CountByState1 query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->State1, $intState1)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by District1 Index(es)
		 * @param integer $intDistrict1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByDistrict1($intDistrict1, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByDistrict1 query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->District1, $intDistrict1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by District1 Index(es)
		 * @param integer $intDistrict1
		 * @return int
		*/
		public static function CountByDistrict1($intDistrict1) {
			// Call Address::QueryCount to perform the CountByDistrict1 query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->District1, $intDistrict1)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Taluka1 Index(es)
		 * @param integer $intTaluka1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByTaluka1($intTaluka1, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByTaluka1 query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Taluka1, $intTaluka1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Taluka1 Index(es)
		 * @param integer $intTaluka1
		 * @return int
		*/
		public static function CountByTaluka1($intTaluka1) {
			// Call Address::QueryCount to perform the CountByTaluka1 query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Taluka1, $intTaluka1)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by SupplierCategory Index(es)
		 * @param integer $intSupplierCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayBySupplierCategory($intSupplierCategory, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayBySupplierCategory query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->SupplierCategory, $intSupplierCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by SupplierCategory Index(es)
		 * @param integer $intSupplierCategory
		 * @return int
		*/
		public static function CountBySupplierCategory($intSupplierCategory) {
			// Call Address::QueryCount to perform the CountBySupplierCategory query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->SupplierCategory, $intSupplierCategory)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by SupplierType Index(es)
		 * @param integer $intSupplierType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayBySupplierType($intSupplierType, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayBySupplierType query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->SupplierType, $intSupplierType),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by SupplierType Index(es)
		 * @param integer $intSupplierType
		 * @return int
		*/
		public static function CountBySupplierType($intSupplierType) {
			// Call Address::QueryCount to perform the CountBySupplierType query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->SupplierType, $intSupplierType)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by BusinessType Index(es)
		 * @param integer $intBusinessType
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByBusinessType($intBusinessType, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByBusinessType query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->BusinessType, $intBusinessType),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by BusinessType Index(es)
		 * @param integer $intBusinessType
		 * @return int
		*/
		public static function CountByBusinessType($intBusinessType) {
			// Call Address::QueryCount to perform the CountByBusinessType query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->BusinessType, $intBusinessType)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Designation Index(es)
		 * @param integer $intDesignation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByDesignation($intDesignation, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByDesignation query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Designation, $intDesignation),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Designation Index(es)
		 * @param integer $intDesignation
		 * @return int
		*/
		public static function CountByDesignation($intDesignation) {
			// Call Address::QueryCount to perform the CountByDesignation query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Designation, $intDesignation)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByDepartment($intDepartment, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByDepartment query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Department, $intDepartment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @return int
		*/
		public static function CountByDepartment($intDepartment) {
			// Call Address::QueryCount to perform the CountByDepartment query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Department, $intDepartment)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by MarritalStatus Index(es)
		 * @param integer $intMarritalStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByMarritalStatus($intMarritalStatus, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByMarritalStatus query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->MarritalStatus, $intMarritalStatus),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by MarritalStatus Index(es)
		 * @param integer $intMarritalStatus
		 * @return int
		*/
		public static function CountByMarritalStatus($intMarritalStatus) {
			// Call Address::QueryCount to perform the CountByMarritalStatus query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->MarritalStatus, $intMarritalStatus)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by BloodGrp Index(es)
		 * @param integer $intBloodGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByBloodGrp($intBloodGrp, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByBloodGrp query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->BloodGrp, $intBloodGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by BloodGrp Index(es)
		 * @param integer $intBloodGrp
		 * @return int
		*/
		public static function CountByBloodGrp($intBloodGrp) {
			// Call Address::QueryCount to perform the CountByBloodGrp query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->BloodGrp, $intBloodGrp)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Religion Index(es)
		 * @param integer $intReligion
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByReligion($intReligion, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByReligion query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Religion, $intReligion),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Religion Index(es)
		 * @param integer $intReligion
		 * @return int
		*/
		public static function CountByReligion($intReligion) {
			// Call Address::QueryCount to perform the CountByReligion query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Religion, $intReligion)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by CasteCat Index(es)
		 * @param integer $intCasteCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByCasteCat($intCasteCat, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByCasteCat query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->CasteCat, $intCasteCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by CasteCat Index(es)
		 * @param integer $intCasteCat
		 * @return int
		*/
		public static function CountByCasteCat($intCasteCat) {
			// Call Address::QueryCount to perform the CountByCasteCat query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->CasteCat, $intCasteCat)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Caste Index(es)
		 * @param integer $intCaste
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByCaste($intCaste, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByCaste query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Caste, $intCaste),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Caste Index(es)
		 * @param integer $intCaste
		 * @return int
		*/
		public static function CountByCaste($intCaste) {
			// Call Address::QueryCount to perform the CountByCaste query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Caste, $intCaste)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Payscale Index(es)
		 * @param integer $intPayscale
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByPayscale($intPayscale, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByPayscale query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Payscale, $intPayscale),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Payscale Index(es)
		 * @param integer $intPayscale
		 * @return int
		*/
		public static function CountByPayscale($intPayscale) {
			// Call Address::QueryCount to perform the CountByPayscale query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Payscale, $intPayscale)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Prefix Index(es)
		 * @param integer $intPrefix
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByPrefix($intPrefix, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByPrefix query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Prefix, $intPrefix),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Prefix Index(es)
		 * @param integer $intPrefix
		 * @return int
		*/
		public static function CountByPrefix($intPrefix) {
			// Call Address::QueryCount to perform the CountByPrefix query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Prefix, $intPrefix)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by AppointmentCat Index(es)
		 * @param integer $intAppointmentCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByAppointmentCat($intAppointmentCat, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByAppointmentCat query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->AppointmentCat, $intAppointmentCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by AppointmentCat Index(es)
		 * @param integer $intAppointmentCat
		 * @return int
		*/
		public static function CountByAppointmentCat($intAppointmentCat) {
			// Call Address::QueryCount to perform the CountByAppointmentCat query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->AppointmentCat, $intAppointmentCat)
			);
		}

		/**
		 * Load an array of Address objects,
		 * by Roll Index(es)
		 * @param integer $intRoll
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public static function LoadArrayByRoll($intRoll, $objOptionalClauses = null) {
			// Call Address::QueryArray to perform the LoadArrayByRoll query
			try {
				return Address::QueryArray(
					QQ::Equal(QQN::Address()->Roll, $intRoll),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Addresses
		 * by Roll Index(es)
		 * @param integer $intRoll
		 * @return int
		*/
		public static function CountByRoll($intRoll) {
			// Call Address::QueryCount to perform the CountByRoll query
			return Address::QueryCount(
				QQ::Equal(QQN::Address()->Roll, $intRoll)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Address
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `address` (
							`of`,
							`roll`,
							`address_line1`,
							`address_line2`,
							`country`,
							`country1`,
							`state`,
							`state1`,
							`district`,
							`district1`,
							`taluka`,
							`taluka1`,
							`city`,
							`city1`,
							`zip_code`,
							`zipcode1`,
							`contact1`,
							`contact2`,
							`email1`,
							`email2`,
							`tin_sales_tax_no`,
							`cst_no`,
							`dob`,
							`age`,
							`gender`,
							`birth_place`,
							`appoinment_date`,
							`business_type`,
							`supplier_type`,
							`supplier_of`,
							`supplier_category`,
							`vat_no`,
							`gst_no`,
							`bank_name`,
							`bank_acc_no`,
							`branch`,
							`nift_ifsc_wire_transfer_no`,
							`pan_no`,
							`adhar_card_no`,
							`reg_fee`,
							`shop_act_licens_no`,
							`shop_act_date`,
							`turnover_inr`,
							`ph_no1`,
							`fax_no`,
							`tan_no`,
							`bank`,
							`appointment_cat`,
							`joining_date`,
							`designation`,
							`department`,
							`prefix`,
							`fname`,
							`mname`,
							`lname`,
							`fatherfname`,
							`fathermname`,
							`fatherlname`,
							`marrital_status`,
							`blood_grp`,
							`religion`,
							`caste_cat`,
							`caste`,
							`ifsc_code`,
							`payscale`,
							`web`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intOf) . ',
							' . $objDatabase->SqlVariable($this->intRoll) . ',
							' . $objDatabase->SqlVariable($this->strAddressLine1) . ',
							' . $objDatabase->SqlVariable($this->strAddressLine2) . ',
							' . $objDatabase->SqlVariable($this->intCountry) . ',
							' . $objDatabase->SqlVariable($this->intCountry1) . ',
							' . $objDatabase->SqlVariable($this->intState) . ',
							' . $objDatabase->SqlVariable($this->intState1) . ',
							' . $objDatabase->SqlVariable($this->intDistrict) . ',
							' . $objDatabase->SqlVariable($this->intDistrict1) . ',
							' . $objDatabase->SqlVariable($this->intTaluka) . ',
							' . $objDatabase->SqlVariable($this->intTaluka1) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strCity1) . ',
							' . $objDatabase->SqlVariable($this->strZipCode) . ',
							' . $objDatabase->SqlVariable($this->strZipcode1) . ',
							' . $objDatabase->SqlVariable($this->strContact1) . ',
							' . $objDatabase->SqlVariable($this->strContact2) . ',
							' . $objDatabase->SqlVariable($this->strEmail1) . ',
							' . $objDatabase->SqlVariable($this->strEmail2) . ',
							' . $objDatabase->SqlVariable($this->strTinSalesTaxNo) . ',
							' . $objDatabase->SqlVariable($this->strCstNo) . ',
							' . $objDatabase->SqlVariable($this->dttDob) . ',
							' . $objDatabase->SqlVariable($this->strAge) . ',
							' . $objDatabase->SqlVariable($this->intGender) . ',
							' . $objDatabase->SqlVariable($this->strBirthPlace) . ',
							' . $objDatabase->SqlVariable($this->dttAppoinmentDate) . ',
							' . $objDatabase->SqlVariable($this->intBusinessType) . ',
							' . $objDatabase->SqlVariable($this->intSupplierType) . ',
							' . $objDatabase->SqlVariable($this->strSupplierOf) . ',
							' . $objDatabase->SqlVariable($this->intSupplierCategory) . ',
							' . $objDatabase->SqlVariable($this->strVatNo) . ',
							' . $objDatabase->SqlVariable($this->strGstNo) . ',
							' . $objDatabase->SqlVariable($this->strBankName) . ',
							' . $objDatabase->SqlVariable($this->strBankAccNo) . ',
							' . $objDatabase->SqlVariable($this->strBranch) . ',
							' . $objDatabase->SqlVariable($this->strNiftIfscWireTransferNo) . ',
							' . $objDatabase->SqlVariable($this->strPanNo) . ',
							' . $objDatabase->SqlVariable($this->strAdharCardNo) . ',
							' . $objDatabase->SqlVariable($this->strRegFee) . ',
							' . $objDatabase->SqlVariable($this->strShopActLicensNo) . ',
							' . $objDatabase->SqlVariable($this->dttShopActDate) . ',
							' . $objDatabase->SqlVariable($this->strTurnoverInr) . ',
							' . $objDatabase->SqlVariable($this->intPhNo1) . ',
							' . $objDatabase->SqlVariable($this->strFaxNo) . ',
							' . $objDatabase->SqlVariable($this->strTanNo) . ',
							' . $objDatabase->SqlVariable($this->intBank) . ',
							' . $objDatabase->SqlVariable($this->intAppointmentCat) . ',
							' . $objDatabase->SqlVariable($this->dttJoiningDate) . ',
							' . $objDatabase->SqlVariable($this->intDesignation) . ',
							' . $objDatabase->SqlVariable($this->intDepartment) . ',
							' . $objDatabase->SqlVariable($this->intPrefix) . ',
							' . $objDatabase->SqlVariable($this->strFname) . ',
							' . $objDatabase->SqlVariable($this->strMname) . ',
							' . $objDatabase->SqlVariable($this->strLname) . ',
							' . $objDatabase->SqlVariable($this->strFatherfname) . ',
							' . $objDatabase->SqlVariable($this->strFathermname) . ',
							' . $objDatabase->SqlVariable($this->strFatherlname) . ',
							' . $objDatabase->SqlVariable($this->intMarritalStatus) . ',
							' . $objDatabase->SqlVariable($this->intBloodGrp) . ',
							' . $objDatabase->SqlVariable($this->intReligion) . ',
							' . $objDatabase->SqlVariable($this->intCasteCat) . ',
							' . $objDatabase->SqlVariable($this->intCaste) . ',
							' . $objDatabase->SqlVariable($this->strIfscCode) . ',
							' . $objDatabase->SqlVariable($this->intPayscale) . ',
							' . $objDatabase->SqlVariable($this->strWeb) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdaddress = $objDatabase->InsertId('address', 'idaddress');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`address`
						SET
							`of` = ' . $objDatabase->SqlVariable($this->intOf) . ',
							`roll` = ' . $objDatabase->SqlVariable($this->intRoll) . ',
							`address_line1` = ' . $objDatabase->SqlVariable($this->strAddressLine1) . ',
							`address_line2` = ' . $objDatabase->SqlVariable($this->strAddressLine2) . ',
							`country` = ' . $objDatabase->SqlVariable($this->intCountry) . ',
							`country1` = ' . $objDatabase->SqlVariable($this->intCountry1) . ',
							`state` = ' . $objDatabase->SqlVariable($this->intState) . ',
							`state1` = ' . $objDatabase->SqlVariable($this->intState1) . ',
							`district` = ' . $objDatabase->SqlVariable($this->intDistrict) . ',
							`district1` = ' . $objDatabase->SqlVariable($this->intDistrict1) . ',
							`taluka` = ' . $objDatabase->SqlVariable($this->intTaluka) . ',
							`taluka1` = ' . $objDatabase->SqlVariable($this->intTaluka1) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`city1` = ' . $objDatabase->SqlVariable($this->strCity1) . ',
							`zip_code` = ' . $objDatabase->SqlVariable($this->strZipCode) . ',
							`zipcode1` = ' . $objDatabase->SqlVariable($this->strZipcode1) . ',
							`contact1` = ' . $objDatabase->SqlVariable($this->strContact1) . ',
							`contact2` = ' . $objDatabase->SqlVariable($this->strContact2) . ',
							`email1` = ' . $objDatabase->SqlVariable($this->strEmail1) . ',
							`email2` = ' . $objDatabase->SqlVariable($this->strEmail2) . ',
							`tin_sales_tax_no` = ' . $objDatabase->SqlVariable($this->strTinSalesTaxNo) . ',
							`cst_no` = ' . $objDatabase->SqlVariable($this->strCstNo) . ',
							`dob` = ' . $objDatabase->SqlVariable($this->dttDob) . ',
							`age` = ' . $objDatabase->SqlVariable($this->strAge) . ',
							`gender` = ' . $objDatabase->SqlVariable($this->intGender) . ',
							`birth_place` = ' . $objDatabase->SqlVariable($this->strBirthPlace) . ',
							`appoinment_date` = ' . $objDatabase->SqlVariable($this->dttAppoinmentDate) . ',
							`business_type` = ' . $objDatabase->SqlVariable($this->intBusinessType) . ',
							`supplier_type` = ' . $objDatabase->SqlVariable($this->intSupplierType) . ',
							`supplier_of` = ' . $objDatabase->SqlVariable($this->strSupplierOf) . ',
							`supplier_category` = ' . $objDatabase->SqlVariable($this->intSupplierCategory) . ',
							`vat_no` = ' . $objDatabase->SqlVariable($this->strVatNo) . ',
							`gst_no` = ' . $objDatabase->SqlVariable($this->strGstNo) . ',
							`bank_name` = ' . $objDatabase->SqlVariable($this->strBankName) . ',
							`bank_acc_no` = ' . $objDatabase->SqlVariable($this->strBankAccNo) . ',
							`branch` = ' . $objDatabase->SqlVariable($this->strBranch) . ',
							`nift_ifsc_wire_transfer_no` = ' . $objDatabase->SqlVariable($this->strNiftIfscWireTransferNo) . ',
							`pan_no` = ' . $objDatabase->SqlVariable($this->strPanNo) . ',
							`adhar_card_no` = ' . $objDatabase->SqlVariable($this->strAdharCardNo) . ',
							`reg_fee` = ' . $objDatabase->SqlVariable($this->strRegFee) . ',
							`shop_act_licens_no` = ' . $objDatabase->SqlVariable($this->strShopActLicensNo) . ',
							`shop_act_date` = ' . $objDatabase->SqlVariable($this->dttShopActDate) . ',
							`turnover_inr` = ' . $objDatabase->SqlVariable($this->strTurnoverInr) . ',
							`ph_no1` = ' . $objDatabase->SqlVariable($this->intPhNo1) . ',
							`fax_no` = ' . $objDatabase->SqlVariable($this->strFaxNo) . ',
							`tan_no` = ' . $objDatabase->SqlVariable($this->strTanNo) . ',
							`bank` = ' . $objDatabase->SqlVariable($this->intBank) . ',
							`appointment_cat` = ' . $objDatabase->SqlVariable($this->intAppointmentCat) . ',
							`joining_date` = ' . $objDatabase->SqlVariable($this->dttJoiningDate) . ',
							`designation` = ' . $objDatabase->SqlVariable($this->intDesignation) . ',
							`department` = ' . $objDatabase->SqlVariable($this->intDepartment) . ',
							`prefix` = ' . $objDatabase->SqlVariable($this->intPrefix) . ',
							`fname` = ' . $objDatabase->SqlVariable($this->strFname) . ',
							`mname` = ' . $objDatabase->SqlVariable($this->strMname) . ',
							`lname` = ' . $objDatabase->SqlVariable($this->strLname) . ',
							`fatherfname` = ' . $objDatabase->SqlVariable($this->strFatherfname) . ',
							`fathermname` = ' . $objDatabase->SqlVariable($this->strFathermname) . ',
							`fatherlname` = ' . $objDatabase->SqlVariable($this->strFatherlname) . ',
							`marrital_status` = ' . $objDatabase->SqlVariable($this->intMarritalStatus) . ',
							`blood_grp` = ' . $objDatabase->SqlVariable($this->intBloodGrp) . ',
							`religion` = ' . $objDatabase->SqlVariable($this->intReligion) . ',
							`caste_cat` = ' . $objDatabase->SqlVariable($this->intCasteCat) . ',
							`caste` = ' . $objDatabase->SqlVariable($this->intCaste) . ',
							`ifsc_code` = ' . $objDatabase->SqlVariable($this->strIfscCode) . ',
							`payscale` = ' . $objDatabase->SqlVariable($this->intPayscale) . ',
							`web` = ' . $objDatabase->SqlVariable($this->strWeb) . '
						WHERE
							`idaddress` = ' . $objDatabase->SqlVariable($this->intIdaddress) . '
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
		 * Delete this Address
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdaddress)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Address with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($this->intIdaddress) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Address ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Address', $this->intIdaddress);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Addresses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate address table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Address::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `address`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Address from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Address object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Address::Load($this->intIdaddress);

			// Update $this's local variables to match
			$this->Of = $objReloaded->Of;
			$this->Roll = $objReloaded->Roll;
			$this->strAddressLine1 = $objReloaded->strAddressLine1;
			$this->strAddressLine2 = $objReloaded->strAddressLine2;
			$this->Country = $objReloaded->Country;
			$this->Country1 = $objReloaded->Country1;
			$this->State = $objReloaded->State;
			$this->State1 = $objReloaded->State1;
			$this->District = $objReloaded->District;
			$this->District1 = $objReloaded->District1;
			$this->Taluka = $objReloaded->Taluka;
			$this->Taluka1 = $objReloaded->Taluka1;
			$this->strCity = $objReloaded->strCity;
			$this->strCity1 = $objReloaded->strCity1;
			$this->strZipCode = $objReloaded->strZipCode;
			$this->strZipcode1 = $objReloaded->strZipcode1;
			$this->strContact1 = $objReloaded->strContact1;
			$this->strContact2 = $objReloaded->strContact2;
			$this->strEmail1 = $objReloaded->strEmail1;
			$this->strEmail2 = $objReloaded->strEmail2;
			$this->strTinSalesTaxNo = $objReloaded->strTinSalesTaxNo;
			$this->strCstNo = $objReloaded->strCstNo;
			$this->dttDob = $objReloaded->dttDob;
			$this->strAge = $objReloaded->strAge;
			$this->Gender = $objReloaded->Gender;
			$this->strBirthPlace = $objReloaded->strBirthPlace;
			$this->dttAppoinmentDate = $objReloaded->dttAppoinmentDate;
			$this->BusinessType = $objReloaded->BusinessType;
			$this->SupplierType = $objReloaded->SupplierType;
			$this->strSupplierOf = $objReloaded->strSupplierOf;
			$this->SupplierCategory = $objReloaded->SupplierCategory;
			$this->strVatNo = $objReloaded->strVatNo;
			$this->strGstNo = $objReloaded->strGstNo;
			$this->strBankName = $objReloaded->strBankName;
			$this->strBankAccNo = $objReloaded->strBankAccNo;
			$this->strBranch = $objReloaded->strBranch;
			$this->strNiftIfscWireTransferNo = $objReloaded->strNiftIfscWireTransferNo;
			$this->strPanNo = $objReloaded->strPanNo;
			$this->strAdharCardNo = $objReloaded->strAdharCardNo;
			$this->strRegFee = $objReloaded->strRegFee;
			$this->strShopActLicensNo = $objReloaded->strShopActLicensNo;
			$this->dttShopActDate = $objReloaded->dttShopActDate;
			$this->strTurnoverInr = $objReloaded->strTurnoverInr;
			$this->intPhNo1 = $objReloaded->intPhNo1;
			$this->strFaxNo = $objReloaded->strFaxNo;
			$this->strTanNo = $objReloaded->strTanNo;
			$this->intBank = $objReloaded->intBank;
			$this->AppointmentCat = $objReloaded->AppointmentCat;
			$this->dttJoiningDate = $objReloaded->dttJoiningDate;
			$this->Designation = $objReloaded->Designation;
			$this->Department = $objReloaded->Department;
			$this->Prefix = $objReloaded->Prefix;
			$this->strFname = $objReloaded->strFname;
			$this->strMname = $objReloaded->strMname;
			$this->strLname = $objReloaded->strLname;
			$this->strFatherfname = $objReloaded->strFatherfname;
			$this->strFathermname = $objReloaded->strFathermname;
			$this->strFatherlname = $objReloaded->strFatherlname;
			$this->MarritalStatus = $objReloaded->MarritalStatus;
			$this->BloodGrp = $objReloaded->BloodGrp;
			$this->Religion = $objReloaded->Religion;
			$this->CasteCat = $objReloaded->CasteCat;
			$this->Caste = $objReloaded->Caste;
			$this->strIfscCode = $objReloaded->strIfscCode;
			$this->Payscale = $objReloaded->Payscale;
			$this->strWeb = $objReloaded->strWeb;
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
				case 'Idaddress':
					/**
					 * Gets the value for intIdaddress (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdaddress;

				case 'Of':
					/**
					 * Gets the value for intOf 
					 * @return integer
					 */
					return $this->intOf;

				case 'Roll':
					/**
					 * Gets the value for intRoll 
					 * @return integer
					 */
					return $this->intRoll;

				case 'AddressLine1':
					/**
					 * Gets the value for strAddressLine1 
					 * @return string
					 */
					return $this->strAddressLine1;

				case 'AddressLine2':
					/**
					 * Gets the value for strAddressLine2 
					 * @return string
					 */
					return $this->strAddressLine2;

				case 'Country':
					/**
					 * Gets the value for intCountry 
					 * @return integer
					 */
					return $this->intCountry;

				case 'Country1':
					/**
					 * Gets the value for intCountry1 
					 * @return integer
					 */
					return $this->intCountry1;

				case 'State':
					/**
					 * Gets the value for intState 
					 * @return integer
					 */
					return $this->intState;

				case 'State1':
					/**
					 * Gets the value for intState1 
					 * @return integer
					 */
					return $this->intState1;

				case 'District':
					/**
					 * Gets the value for intDistrict 
					 * @return integer
					 */
					return $this->intDistrict;

				case 'District1':
					/**
					 * Gets the value for intDistrict1 
					 * @return integer
					 */
					return $this->intDistrict1;

				case 'Taluka':
					/**
					 * Gets the value for intTaluka 
					 * @return integer
					 */
					return $this->intTaluka;

				case 'Taluka1':
					/**
					 * Gets the value for intTaluka1 
					 * @return integer
					 */
					return $this->intTaluka1;

				case 'City':
					/**
					 * Gets the value for strCity 
					 * @return string
					 */
					return $this->strCity;

				case 'City1':
					/**
					 * Gets the value for strCity1 
					 * @return string
					 */
					return $this->strCity1;

				case 'ZipCode':
					/**
					 * Gets the value for strZipCode 
					 * @return string
					 */
					return $this->strZipCode;

				case 'Zipcode1':
					/**
					 * Gets the value for strZipcode1 
					 * @return string
					 */
					return $this->strZipcode1;

				case 'Contact1':
					/**
					 * Gets the value for strContact1 
					 * @return string
					 */
					return $this->strContact1;

				case 'Contact2':
					/**
					 * Gets the value for strContact2 
					 * @return string
					 */
					return $this->strContact2;

				case 'Email1':
					/**
					 * Gets the value for strEmail1 
					 * @return string
					 */
					return $this->strEmail1;

				case 'Email2':
					/**
					 * Gets the value for strEmail2 
					 * @return string
					 */
					return $this->strEmail2;

				case 'TinSalesTaxNo':
					/**
					 * Gets the value for strTinSalesTaxNo 
					 * @return string
					 */
					return $this->strTinSalesTaxNo;

				case 'CstNo':
					/**
					 * Gets the value for strCstNo 
					 * @return string
					 */
					return $this->strCstNo;

				case 'Dob':
					/**
					 * Gets the value for dttDob 
					 * @return QDateTime
					 */
					return $this->dttDob;

				case 'Age':
					/**
					 * Gets the value for strAge 
					 * @return string
					 */
					return $this->strAge;

				case 'Gender':
					/**
					 * Gets the value for intGender 
					 * @return integer
					 */
					return $this->intGender;

				case 'BirthPlace':
					/**
					 * Gets the value for strBirthPlace 
					 * @return string
					 */
					return $this->strBirthPlace;

				case 'AppoinmentDate':
					/**
					 * Gets the value for dttAppoinmentDate 
					 * @return QDateTime
					 */
					return $this->dttAppoinmentDate;

				case 'BusinessType':
					/**
					 * Gets the value for intBusinessType 
					 * @return integer
					 */
					return $this->intBusinessType;

				case 'SupplierType':
					/**
					 * Gets the value for intSupplierType 
					 * @return integer
					 */
					return $this->intSupplierType;

				case 'SupplierOf':
					/**
					 * Gets the value for strSupplierOf 
					 * @return string
					 */
					return $this->strSupplierOf;

				case 'SupplierCategory':
					/**
					 * Gets the value for intSupplierCategory 
					 * @return integer
					 */
					return $this->intSupplierCategory;

				case 'VatNo':
					/**
					 * Gets the value for strVatNo 
					 * @return string
					 */
					return $this->strVatNo;

				case 'GstNo':
					/**
					 * Gets the value for strGstNo 
					 * @return string
					 */
					return $this->strGstNo;

				case 'BankName':
					/**
					 * Gets the value for strBankName 
					 * @return string
					 */
					return $this->strBankName;

				case 'BankAccNo':
					/**
					 * Gets the value for strBankAccNo 
					 * @return string
					 */
					return $this->strBankAccNo;

				case 'Branch':
					/**
					 * Gets the value for strBranch 
					 * @return string
					 */
					return $this->strBranch;

				case 'NiftIfscWireTransferNo':
					/**
					 * Gets the value for strNiftIfscWireTransferNo 
					 * @return string
					 */
					return $this->strNiftIfscWireTransferNo;

				case 'PanNo':
					/**
					 * Gets the value for strPanNo 
					 * @return string
					 */
					return $this->strPanNo;

				case 'AdharCardNo':
					/**
					 * Gets the value for strAdharCardNo 
					 * @return string
					 */
					return $this->strAdharCardNo;

				case 'RegFee':
					/**
					 * Gets the value for strRegFee 
					 * @return string
					 */
					return $this->strRegFee;

				case 'ShopActLicensNo':
					/**
					 * Gets the value for strShopActLicensNo 
					 * @return string
					 */
					return $this->strShopActLicensNo;

				case 'ShopActDate':
					/**
					 * Gets the value for dttShopActDate 
					 * @return QDateTime
					 */
					return $this->dttShopActDate;

				case 'TurnoverInr':
					/**
					 * Gets the value for strTurnoverInr 
					 * @return string
					 */
					return $this->strTurnoverInr;

				case 'PhNo1':
					/**
					 * Gets the value for intPhNo1 
					 * @return integer
					 */
					return $this->intPhNo1;

				case 'FaxNo':
					/**
					 * Gets the value for strFaxNo 
					 * @return string
					 */
					return $this->strFaxNo;

				case 'TanNo':
					/**
					 * Gets the value for strTanNo 
					 * @return string
					 */
					return $this->strTanNo;

				case 'Bank':
					/**
					 * Gets the value for intBank 
					 * @return integer
					 */
					return $this->intBank;

				case 'AppointmentCat':
					/**
					 * Gets the value for intAppointmentCat 
					 * @return integer
					 */
					return $this->intAppointmentCat;

				case 'JoiningDate':
					/**
					 * Gets the value for dttJoiningDate 
					 * @return QDateTime
					 */
					return $this->dttJoiningDate;

				case 'Designation':
					/**
					 * Gets the value for intDesignation 
					 * @return integer
					 */
					return $this->intDesignation;

				case 'Department':
					/**
					 * Gets the value for intDepartment 
					 * @return integer
					 */
					return $this->intDepartment;

				case 'Prefix':
					/**
					 * Gets the value for intPrefix 
					 * @return integer
					 */
					return $this->intPrefix;

				case 'Fname':
					/**
					 * Gets the value for strFname 
					 * @return string
					 */
					return $this->strFname;

				case 'Mname':
					/**
					 * Gets the value for strMname 
					 * @return string
					 */
					return $this->strMname;

				case 'Lname':
					/**
					 * Gets the value for strLname 
					 * @return string
					 */
					return $this->strLname;

				case 'Fatherfname':
					/**
					 * Gets the value for strFatherfname 
					 * @return string
					 */
					return $this->strFatherfname;

				case 'Fathermname':
					/**
					 * Gets the value for strFathermname 
					 * @return string
					 */
					return $this->strFathermname;

				case 'Fatherlname':
					/**
					 * Gets the value for strFatherlname 
					 * @return string
					 */
					return $this->strFatherlname;

				case 'MarritalStatus':
					/**
					 * Gets the value for intMarritalStatus 
					 * @return integer
					 */
					return $this->intMarritalStatus;

				case 'BloodGrp':
					/**
					 * Gets the value for intBloodGrp 
					 * @return integer
					 */
					return $this->intBloodGrp;

				case 'Religion':
					/**
					 * Gets the value for intReligion 
					 * @return integer
					 */
					return $this->intReligion;

				case 'CasteCat':
					/**
					 * Gets the value for intCasteCat 
					 * @return integer
					 */
					return $this->intCasteCat;

				case 'Caste':
					/**
					 * Gets the value for intCaste 
					 * @return integer
					 */
					return $this->intCaste;

				case 'IfscCode':
					/**
					 * Gets the value for strIfscCode 
					 * @return string
					 */
					return $this->strIfscCode;

				case 'Payscale':
					/**
					 * Gets the value for intPayscale 
					 * @return integer
					 */
					return $this->intPayscale;

				case 'Web':
					/**
					 * Gets the value for strWeb 
					 * @return string
					 */
					return $this->strWeb;


				///////////////////
				// Member Objects
				///////////////////
				case 'OfObject':
					/**
					 * Gets the value for the Ledger object referenced by intOf 
					 * @return Ledger
					 */
					try {
						if ((!$this->objOfObject) && (!is_null($this->intOf)))
							$this->objOfObject = Ledger::Load($this->intOf);
						return $this->objOfObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RollObject':
					/**
					 * Gets the value for the Role object referenced by intRoll 
					 * @return Role
					 */
					try {
						if ((!$this->objRollObject) && (!is_null($this->intRoll)))
							$this->objRollObject = Role::Load($this->intRoll);
						return $this->objRollObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CountryObject':
					/**
					 * Gets the value for the Place object referenced by intCountry 
					 * @return Place
					 */
					try {
						if ((!$this->objCountryObject) && (!is_null($this->intCountry)))
							$this->objCountryObject = Place::Load($this->intCountry);
						return $this->objCountryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Country1Object':
					/**
					 * Gets the value for the Place object referenced by intCountry1 
					 * @return Place
					 */
					try {
						if ((!$this->objCountry1Object) && (!is_null($this->intCountry1)))
							$this->objCountry1Object = Place::Load($this->intCountry1);
						return $this->objCountry1Object;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateObject':
					/**
					 * Gets the value for the Place object referenced by intState 
					 * @return Place
					 */
					try {
						if ((!$this->objStateObject) && (!is_null($this->intState)))
							$this->objStateObject = Place::Load($this->intState);
						return $this->objStateObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'State1Object':
					/**
					 * Gets the value for the Place object referenced by intState1 
					 * @return Place
					 */
					try {
						if ((!$this->objState1Object) && (!is_null($this->intState1)))
							$this->objState1Object = Place::Load($this->intState1);
						return $this->objState1Object;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DistrictObject':
					/**
					 * Gets the value for the Place object referenced by intDistrict 
					 * @return Place
					 */
					try {
						if ((!$this->objDistrictObject) && (!is_null($this->intDistrict)))
							$this->objDistrictObject = Place::Load($this->intDistrict);
						return $this->objDistrictObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'District1Object':
					/**
					 * Gets the value for the Place object referenced by intDistrict1 
					 * @return Place
					 */
					try {
						if ((!$this->objDistrict1Object) && (!is_null($this->intDistrict1)))
							$this->objDistrict1Object = Place::Load($this->intDistrict1);
						return $this->objDistrict1Object;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TalukaObject':
					/**
					 * Gets the value for the Place object referenced by intTaluka 
					 * @return Place
					 */
					try {
						if ((!$this->objTalukaObject) && (!is_null($this->intTaluka)))
							$this->objTalukaObject = Place::Load($this->intTaluka);
						return $this->objTalukaObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Taluka1Object':
					/**
					 * Gets the value for the Place object referenced by intTaluka1 
					 * @return Place
					 */
					try {
						if ((!$this->objTaluka1Object) && (!is_null($this->intTaluka1)))
							$this->objTaluka1Object = Place::Load($this->intTaluka1);
						return $this->objTaluka1Object;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GenderObject':
					/**
					 * Gets the value for the Gender object referenced by intGender 
					 * @return Gender
					 */
					try {
						if ((!$this->objGenderObject) && (!is_null($this->intGender)))
							$this->objGenderObject = Gender::Load($this->intGender);
						return $this->objGenderObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BusinessTypeObject':
					/**
					 * Gets the value for the BusinessCat object referenced by intBusinessType 
					 * @return BusinessCat
					 */
					try {
						if ((!$this->objBusinessTypeObject) && (!is_null($this->intBusinessType)))
							$this->objBusinessTypeObject = BusinessCat::Load($this->intBusinessType);
						return $this->objBusinessTypeObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SupplierTypeObject':
					/**
					 * Gets the value for the SupplierGrp object referenced by intSupplierType 
					 * @return SupplierGrp
					 */
					try {
						if ((!$this->objSupplierTypeObject) && (!is_null($this->intSupplierType)))
							$this->objSupplierTypeObject = SupplierGrp::Load($this->intSupplierType);
						return $this->objSupplierTypeObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SupplierCategoryObject':
					/**
					 * Gets the value for the SupplierCat object referenced by intSupplierCategory 
					 * @return SupplierCat
					 */
					try {
						if ((!$this->objSupplierCategoryObject) && (!is_null($this->intSupplierCategory)))
							$this->objSupplierCategoryObject = SupplierCat::Load($this->intSupplierCategory);
						return $this->objSupplierCategoryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppointmentCatObject':
					/**
					 * Gets the value for the AppoinmentCat object referenced by intAppointmentCat 
					 * @return AppoinmentCat
					 */
					try {
						if ((!$this->objAppointmentCatObject) && (!is_null($this->intAppointmentCat)))
							$this->objAppointmentCatObject = AppoinmentCat::Load($this->intAppointmentCat);
						return $this->objAppointmentCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DesignationObject':
					/**
					 * Gets the value for the Role object referenced by intDesignation 
					 * @return Role
					 */
					try {
						if ((!$this->objDesignationObject) && (!is_null($this->intDesignation)))
							$this->objDesignationObject = Role::Load($this->intDesignation);
						return $this->objDesignationObject;
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

				case 'PrefixObject':
					/**
					 * Gets the value for the Prefix object referenced by intPrefix 
					 * @return Prefix
					 */
					try {
						if ((!$this->objPrefixObject) && (!is_null($this->intPrefix)))
							$this->objPrefixObject = Prefix::Load($this->intPrefix);
						return $this->objPrefixObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MarritalStatusObject':
					/**
					 * Gets the value for the MarrialStatus object referenced by intMarritalStatus 
					 * @return MarrialStatus
					 */
					try {
						if ((!$this->objMarritalStatusObject) && (!is_null($this->intMarritalStatus)))
							$this->objMarritalStatusObject = MarrialStatus::Load($this->intMarritalStatus);
						return $this->objMarritalStatusObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BloodGrpObject':
					/**
					 * Gets the value for the BloodGroup object referenced by intBloodGrp 
					 * @return BloodGroup
					 */
					try {
						if ((!$this->objBloodGrpObject) && (!is_null($this->intBloodGrp)))
							$this->objBloodGrpObject = BloodGroup::Load($this->intBloodGrp);
						return $this->objBloodGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReligionObject':
					/**
					 * Gets the value for the Religion object referenced by intReligion 
					 * @return Religion
					 */
					try {
						if ((!$this->objReligionObject) && (!is_null($this->intReligion)))
							$this->objReligionObject = Religion::Load($this->intReligion);
						return $this->objReligionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CasteCatObject':
					/**
					 * Gets the value for the FeesConcession object referenced by intCasteCat 
					 * @return FeesConcession
					 */
					try {
						if ((!$this->objCasteCatObject) && (!is_null($this->intCasteCat)))
							$this->objCasteCatObject = FeesConcession::Load($this->intCasteCat);
						return $this->objCasteCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CasteObject':
					/**
					 * Gets the value for the Cast object referenced by intCaste 
					 * @return Cast
					 */
					try {
						if ((!$this->objCasteObject) && (!is_null($this->intCaste)))
							$this->objCasteObject = Cast::Load($this->intCaste);
						return $this->objCasteObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PayscaleObject':
					/**
					 * Gets the value for the PayScale object referenced by intPayscale 
					 * @return PayScale
					 */
					try {
						if ((!$this->objPayscaleObject) && (!is_null($this->intPayscale)))
							$this->objPayscaleObject = PayScale::Load($this->intPayscale);
						return $this->objPayscaleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'Of':
					/**
					 * Sets the value for intOf 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objOfObject = null;
						return ($this->intOf = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Roll':
					/**
					 * Sets the value for intRoll 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRollObject = null;
						return ($this->intRoll = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AddressLine1':
					/**
					 * Sets the value for strAddressLine1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddressLine1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AddressLine2':
					/**
					 * Sets the value for strAddressLine2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddressLine2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Country':
					/**
					 * Sets the value for intCountry 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCountryObject = null;
						return ($this->intCountry = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Country1':
					/**
					 * Sets the value for intCountry1 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCountry1Object = null;
						return ($this->intCountry1 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'State':
					/**
					 * Sets the value for intState 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStateObject = null;
						return ($this->intState = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'State1':
					/**
					 * Sets the value for intState1 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objState1Object = null;
						return ($this->intState1 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'District':
					/**
					 * Sets the value for intDistrict 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDistrictObject = null;
						return ($this->intDistrict = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'District1':
					/**
					 * Sets the value for intDistrict1 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDistrict1Object = null;
						return ($this->intDistrict1 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Taluka':
					/**
					 * Sets the value for intTaluka 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTalukaObject = null;
						return ($this->intTaluka = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Taluka1':
					/**
					 * Sets the value for intTaluka1 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTaluka1Object = null;
						return ($this->intTaluka1 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City':
					/**
					 * Sets the value for strCity 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City1':
					/**
					 * Sets the value for strCity1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCity1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ZipCode':
					/**
					 * Sets the value for strZipCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strZipCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Zipcode1':
					/**
					 * Sets the value for strZipcode1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strZipcode1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Contact1':
					/**
					 * Sets the value for strContact1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContact1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Contact2':
					/**
					 * Sets the value for strContact2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContact2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email1':
					/**
					 * Sets the value for strEmail1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email2':
					/**
					 * Sets the value for strEmail2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TinSalesTaxNo':
					/**
					 * Sets the value for strTinSalesTaxNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTinSalesTaxNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CstNo':
					/**
					 * Sets the value for strCstNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCstNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Dob':
					/**
					 * Sets the value for dttDob 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDob = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Age':
					/**
					 * Sets the value for strAge 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAge = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Gender':
					/**
					 * Sets the value for intGender 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objGenderObject = null;
						return ($this->intGender = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BirthPlace':
					/**
					 * Sets the value for strBirthPlace 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBirthPlace = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppoinmentDate':
					/**
					 * Sets the value for dttAppoinmentDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttAppoinmentDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BusinessType':
					/**
					 * Sets the value for intBusinessType 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBusinessTypeObject = null;
						return ($this->intBusinessType = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SupplierType':
					/**
					 * Sets the value for intSupplierType 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSupplierTypeObject = null;
						return ($this->intSupplierType = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SupplierOf':
					/**
					 * Sets the value for strSupplierOf 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSupplierOf = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SupplierCategory':
					/**
					 * Sets the value for intSupplierCategory 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSupplierCategoryObject = null;
						return ($this->intSupplierCategory = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VatNo':
					/**
					 * Sets the value for strVatNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strVatNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GstNo':
					/**
					 * Sets the value for strGstNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGstNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BankName':
					/**
					 * Sets the value for strBankName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBankName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BankAccNo':
					/**
					 * Sets the value for strBankAccNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBankAccNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Branch':
					/**
					 * Sets the value for strBranch 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBranch = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NiftIfscWireTransferNo':
					/**
					 * Sets the value for strNiftIfscWireTransferNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNiftIfscWireTransferNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PanNo':
					/**
					 * Sets the value for strPanNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPanNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdharCardNo':
					/**
					 * Sets the value for strAdharCardNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAdharCardNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RegFee':
					/**
					 * Sets the value for strRegFee 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRegFee = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShopActLicensNo':
					/**
					 * Sets the value for strShopActLicensNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShopActLicensNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShopActDate':
					/**
					 * Sets the value for dttShopActDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttShopActDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TurnoverInr':
					/**
					 * Sets the value for strTurnoverInr 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTurnoverInr = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PhNo1':
					/**
					 * Sets the value for intPhNo1 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPhNo1 = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FaxNo':
					/**
					 * Sets the value for strFaxNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFaxNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TanNo':
					/**
					 * Sets the value for strTanNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTanNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Bank':
					/**
					 * Sets the value for intBank 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intBank = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppointmentCat':
					/**
					 * Sets the value for intAppointmentCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAppointmentCatObject = null;
						return ($this->intAppointmentCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'JoiningDate':
					/**
					 * Sets the value for dttJoiningDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttJoiningDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Designation':
					/**
					 * Sets the value for intDesignation 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDesignationObject = null;
						return ($this->intDesignation = QType::Cast($mixValue, QType::Integer));
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

				case 'Prefix':
					/**
					 * Sets the value for intPrefix 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPrefixObject = null;
						return ($this->intPrefix = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fname':
					/**
					 * Sets the value for strFname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFname = QType::Cast($mixValue, QType::String));
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

				case 'Lname':
					/**
					 * Sets the value for strLname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fatherfname':
					/**
					 * Sets the value for strFatherfname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFatherfname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fathermname':
					/**
					 * Sets the value for strFathermname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFathermname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fatherlname':
					/**
					 * Sets the value for strFatherlname 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFatherlname = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MarritalStatus':
					/**
					 * Sets the value for intMarritalStatus 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMarritalStatusObject = null;
						return ($this->intMarritalStatus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BloodGrp':
					/**
					 * Sets the value for intBloodGrp 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBloodGrpObject = null;
						return ($this->intBloodGrp = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Religion':
					/**
					 * Sets the value for intReligion 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objReligionObject = null;
						return ($this->intReligion = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CasteCat':
					/**
					 * Sets the value for intCasteCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCasteCatObject = null;
						return ($this->intCasteCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Caste':
					/**
					 * Sets the value for intCaste 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCasteObject = null;
						return ($this->intCaste = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IfscCode':
					/**
					 * Sets the value for strIfscCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIfscCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Payscale':
					/**
					 * Sets the value for intPayscale 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPayscaleObject = null;
						return ($this->intPayscale = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Web':
					/**
					 * Sets the value for strWeb 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strWeb = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'OfObject':
					/**
					 * Sets the value for the Ledger object referenced by intOf 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intOf = null;
						$this->objOfObject = null;
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
							throw new QCallerException('Unable to set an unsaved OfObject for this Address');

						// Update Local Member Variables
						$this->objOfObject = $mixValue;
						$this->intOf = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RollObject':
					/**
					 * Sets the value for the Role object referenced by intRoll 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRoll = null;
						$this->objRollObject = null;
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
							throw new QCallerException('Unable to set an unsaved RollObject for this Address');

						// Update Local Member Variables
						$this->objRollObject = $mixValue;
						$this->intRoll = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CountryObject':
					/**
					 * Sets the value for the Place object referenced by intCountry 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intCountry = null;
						$this->objCountryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved CountryObject for this Address');

						// Update Local Member Variables
						$this->objCountryObject = $mixValue;
						$this->intCountry = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Country1Object':
					/**
					 * Sets the value for the Place object referenced by intCountry1 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intCountry1 = null;
						$this->objCountry1Object = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved Country1Object for this Address');

						// Update Local Member Variables
						$this->objCountry1Object = $mixValue;
						$this->intCountry1 = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StateObject':
					/**
					 * Sets the value for the Place object referenced by intState 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intState = null;
						$this->objStateObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved StateObject for this Address');

						// Update Local Member Variables
						$this->objStateObject = $mixValue;
						$this->intState = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'State1Object':
					/**
					 * Sets the value for the Place object referenced by intState1 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intState1 = null;
						$this->objState1Object = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved State1Object for this Address');

						// Update Local Member Variables
						$this->objState1Object = $mixValue;
						$this->intState1 = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DistrictObject':
					/**
					 * Sets the value for the Place object referenced by intDistrict 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intDistrict = null;
						$this->objDistrictObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved DistrictObject for this Address');

						// Update Local Member Variables
						$this->objDistrictObject = $mixValue;
						$this->intDistrict = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'District1Object':
					/**
					 * Sets the value for the Place object referenced by intDistrict1 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intDistrict1 = null;
						$this->objDistrict1Object = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved District1Object for this Address');

						// Update Local Member Variables
						$this->objDistrict1Object = $mixValue;
						$this->intDistrict1 = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TalukaObject':
					/**
					 * Sets the value for the Place object referenced by intTaluka 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intTaluka = null;
						$this->objTalukaObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved TalukaObject for this Address');

						// Update Local Member Variables
						$this->objTalukaObject = $mixValue;
						$this->intTaluka = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Taluka1Object':
					/**
					 * Sets the value for the Place object referenced by intTaluka1 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intTaluka1 = null;
						$this->objTaluka1Object = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved Taluka1Object for this Address');

						// Update Local Member Variables
						$this->objTaluka1Object = $mixValue;
						$this->intTaluka1 = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'GenderObject':
					/**
					 * Sets the value for the Gender object referenced by intGender 
					 * @param Gender $mixValue
					 * @return Gender
					 */
					if (is_null($mixValue)) {
						$this->intGender = null;
						$this->objGenderObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Gender object
						try {
							$mixValue = QType::Cast($mixValue, 'Gender');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Gender object
						if (is_null($mixValue->Idgender))
							throw new QCallerException('Unable to set an unsaved GenderObject for this Address');

						// Update Local Member Variables
						$this->objGenderObject = $mixValue;
						$this->intGender = $mixValue->Idgender;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BusinessTypeObject':
					/**
					 * Sets the value for the BusinessCat object referenced by intBusinessType 
					 * @param BusinessCat $mixValue
					 * @return BusinessCat
					 */
					if (is_null($mixValue)) {
						$this->intBusinessType = null;
						$this->objBusinessTypeObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a BusinessCat object
						try {
							$mixValue = QType::Cast($mixValue, 'BusinessCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED BusinessCat object
						if (is_null($mixValue->IdbusinessCat))
							throw new QCallerException('Unable to set an unsaved BusinessTypeObject for this Address');

						// Update Local Member Variables
						$this->objBusinessTypeObject = $mixValue;
						$this->intBusinessType = $mixValue->IdbusinessCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SupplierTypeObject':
					/**
					 * Sets the value for the SupplierGrp object referenced by intSupplierType 
					 * @param SupplierGrp $mixValue
					 * @return SupplierGrp
					 */
					if (is_null($mixValue)) {
						$this->intSupplierType = null;
						$this->objSupplierTypeObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a SupplierGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'SupplierGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED SupplierGrp object
						if (is_null($mixValue->IdsupplierGrp))
							throw new QCallerException('Unable to set an unsaved SupplierTypeObject for this Address');

						// Update Local Member Variables
						$this->objSupplierTypeObject = $mixValue;
						$this->intSupplierType = $mixValue->IdsupplierGrp;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SupplierCategoryObject':
					/**
					 * Sets the value for the SupplierCat object referenced by intSupplierCategory 
					 * @param SupplierCat $mixValue
					 * @return SupplierCat
					 */
					if (is_null($mixValue)) {
						$this->intSupplierCategory = null;
						$this->objSupplierCategoryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a SupplierCat object
						try {
							$mixValue = QType::Cast($mixValue, 'SupplierCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED SupplierCat object
						if (is_null($mixValue->IdsupplierCat))
							throw new QCallerException('Unable to set an unsaved SupplierCategoryObject for this Address');

						// Update Local Member Variables
						$this->objSupplierCategoryObject = $mixValue;
						$this->intSupplierCategory = $mixValue->IdsupplierCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AppointmentCatObject':
					/**
					 * Sets the value for the AppoinmentCat object referenced by intAppointmentCat 
					 * @param AppoinmentCat $mixValue
					 * @return AppoinmentCat
					 */
					if (is_null($mixValue)) {
						$this->intAppointmentCat = null;
						$this->objAppointmentCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AppoinmentCat object
						try {
							$mixValue = QType::Cast($mixValue, 'AppoinmentCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AppoinmentCat object
						if (is_null($mixValue->IdappoinmentCat))
							throw new QCallerException('Unable to set an unsaved AppointmentCatObject for this Address');

						// Update Local Member Variables
						$this->objAppointmentCatObject = $mixValue;
						$this->intAppointmentCat = $mixValue->IdappoinmentCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DesignationObject':
					/**
					 * Sets the value for the Role object referenced by intDesignation 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intDesignation = null;
						$this->objDesignationObject = null;
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
							throw new QCallerException('Unable to set an unsaved DesignationObject for this Address');

						// Update Local Member Variables
						$this->objDesignationObject = $mixValue;
						$this->intDesignation = $mixValue->Idrole;

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
							throw new QCallerException('Unable to set an unsaved DepartmentObject for this Address');

						// Update Local Member Variables
						$this->objDepartmentObject = $mixValue;
						$this->intDepartment = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PrefixObject':
					/**
					 * Sets the value for the Prefix object referenced by intPrefix 
					 * @param Prefix $mixValue
					 * @return Prefix
					 */
					if (is_null($mixValue)) {
						$this->intPrefix = null;
						$this->objPrefixObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Prefix object
						try {
							$mixValue = QType::Cast($mixValue, 'Prefix');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Prefix object
						if (is_null($mixValue->Idprefix))
							throw new QCallerException('Unable to set an unsaved PrefixObject for this Address');

						// Update Local Member Variables
						$this->objPrefixObject = $mixValue;
						$this->intPrefix = $mixValue->Idprefix;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'MarritalStatusObject':
					/**
					 * Sets the value for the MarrialStatus object referenced by intMarritalStatus 
					 * @param MarrialStatus $mixValue
					 * @return MarrialStatus
					 */
					if (is_null($mixValue)) {
						$this->intMarritalStatus = null;
						$this->objMarritalStatusObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a MarrialStatus object
						try {
							$mixValue = QType::Cast($mixValue, 'MarrialStatus');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED MarrialStatus object
						if (is_null($mixValue->IdmarrialStatus))
							throw new QCallerException('Unable to set an unsaved MarritalStatusObject for this Address');

						// Update Local Member Variables
						$this->objMarritalStatusObject = $mixValue;
						$this->intMarritalStatus = $mixValue->IdmarrialStatus;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BloodGrpObject':
					/**
					 * Sets the value for the BloodGroup object referenced by intBloodGrp 
					 * @param BloodGroup $mixValue
					 * @return BloodGroup
					 */
					if (is_null($mixValue)) {
						$this->intBloodGrp = null;
						$this->objBloodGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a BloodGroup object
						try {
							$mixValue = QType::Cast($mixValue, 'BloodGroup');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED BloodGroup object
						if (is_null($mixValue->IdbloodGroup))
							throw new QCallerException('Unable to set an unsaved BloodGrpObject for this Address');

						// Update Local Member Variables
						$this->objBloodGrpObject = $mixValue;
						$this->intBloodGrp = $mixValue->IdbloodGroup;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ReligionObject':
					/**
					 * Sets the value for the Religion object referenced by intReligion 
					 * @param Religion $mixValue
					 * @return Religion
					 */
					if (is_null($mixValue)) {
						$this->intReligion = null;
						$this->objReligionObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Religion object
						try {
							$mixValue = QType::Cast($mixValue, 'Religion');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Religion object
						if (is_null($mixValue->Idreligion))
							throw new QCallerException('Unable to set an unsaved ReligionObject for this Address');

						// Update Local Member Variables
						$this->objReligionObject = $mixValue;
						$this->intReligion = $mixValue->Idreligion;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CasteCatObject':
					/**
					 * Sets the value for the FeesConcession object referenced by intCasteCat 
					 * @param FeesConcession $mixValue
					 * @return FeesConcession
					 */
					if (is_null($mixValue)) {
						$this->intCasteCat = null;
						$this->objCasteCatObject = null;
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
							throw new QCallerException('Unable to set an unsaved CasteCatObject for this Address');

						// Update Local Member Variables
						$this->objCasteCatObject = $mixValue;
						$this->intCasteCat = $mixValue->IdfeesConcession;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CasteObject':
					/**
					 * Sets the value for the Cast object referenced by intCaste 
					 * @param Cast $mixValue
					 * @return Cast
					 */
					if (is_null($mixValue)) {
						$this->intCaste = null;
						$this->objCasteObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Cast object
						try {
							$mixValue = QType::Cast($mixValue, 'Cast');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Cast object
						if (is_null($mixValue->Idcast))
							throw new QCallerException('Unable to set an unsaved CasteObject for this Address');

						// Update Local Member Variables
						$this->objCasteObject = $mixValue;
						$this->intCaste = $mixValue->Idcast;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PayscaleObject':
					/**
					 * Sets the value for the PayScale object referenced by intPayscale 
					 * @param PayScale $mixValue
					 * @return PayScale
					 */
					if (is_null($mixValue)) {
						$this->intPayscale = null;
						$this->objPayscaleObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a PayScale object
						try {
							$mixValue = QType::Cast($mixValue, 'PayScale');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED PayScale object
						if (is_null($mixValue->IdpayScale))
							throw new QCallerException('Unable to set an unsaved PayscaleObject for this Address');

						// Update Local Member Variables
						$this->objPayscaleObject = $mixValue;
						$this->intPayscale = $mixValue->IdpayScale;

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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "address";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Address::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Address"><sequence>';
			$strToReturn .= '<element name="Idaddress" type="xsd:int"/>';
			$strToReturn .= '<element name="OfObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="RollObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="AddressLine1" type="xsd:string"/>';
			$strToReturn .= '<element name="AddressLine2" type="xsd:string"/>';
			$strToReturn .= '<element name="CountryObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="Country1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="StateObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="State1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="DistrictObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="District1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="TalukaObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="Taluka1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="City1" type="xsd:string"/>';
			$strToReturn .= '<element name="ZipCode" type="xsd:string"/>';
			$strToReturn .= '<element name="Zipcode1" type="xsd:string"/>';
			$strToReturn .= '<element name="Contact1" type="xsd:string"/>';
			$strToReturn .= '<element name="Contact2" type="xsd:string"/>';
			$strToReturn .= '<element name="Email1" type="xsd:string"/>';
			$strToReturn .= '<element name="Email2" type="xsd:string"/>';
			$strToReturn .= '<element name="TinSalesTaxNo" type="xsd:string"/>';
			$strToReturn .= '<element name="CstNo" type="xsd:string"/>';
			$strToReturn .= '<element name="Dob" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Age" type="xsd:string"/>';
			$strToReturn .= '<element name="GenderObject" type="xsd1:Gender"/>';
			$strToReturn .= '<element name="BirthPlace" type="xsd:string"/>';
			$strToReturn .= '<element name="AppoinmentDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="BusinessTypeObject" type="xsd1:BusinessCat"/>';
			$strToReturn .= '<element name="SupplierTypeObject" type="xsd1:SupplierGrp"/>';
			$strToReturn .= '<element name="SupplierOf" type="xsd:string"/>';
			$strToReturn .= '<element name="SupplierCategoryObject" type="xsd1:SupplierCat"/>';
			$strToReturn .= '<element name="VatNo" type="xsd:string"/>';
			$strToReturn .= '<element name="GstNo" type="xsd:string"/>';
			$strToReturn .= '<element name="BankName" type="xsd:string"/>';
			$strToReturn .= '<element name="BankAccNo" type="xsd:string"/>';
			$strToReturn .= '<element name="Branch" type="xsd:string"/>';
			$strToReturn .= '<element name="NiftIfscWireTransferNo" type="xsd:string"/>';
			$strToReturn .= '<element name="PanNo" type="xsd:string"/>';
			$strToReturn .= '<element name="AdharCardNo" type="xsd:string"/>';
			$strToReturn .= '<element name="RegFee" type="xsd:string"/>';
			$strToReturn .= '<element name="ShopActLicensNo" type="xsd:string"/>';
			$strToReturn .= '<element name="ShopActDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="TurnoverInr" type="xsd:string"/>';
			$strToReturn .= '<element name="PhNo1" type="xsd:int"/>';
			$strToReturn .= '<element name="FaxNo" type="xsd:string"/>';
			$strToReturn .= '<element name="TanNo" type="xsd:string"/>';
			$strToReturn .= '<element name="Bank" type="xsd:int"/>';
			$strToReturn .= '<element name="AppointmentCatObject" type="xsd1:AppoinmentCat"/>';
			$strToReturn .= '<element name="JoiningDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="DesignationObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="DepartmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="PrefixObject" type="xsd1:Prefix"/>';
			$strToReturn .= '<element name="Fname" type="xsd:string"/>';
			$strToReturn .= '<element name="Mname" type="xsd:string"/>';
			$strToReturn .= '<element name="Lname" type="xsd:string"/>';
			$strToReturn .= '<element name="Fatherfname" type="xsd:string"/>';
			$strToReturn .= '<element name="Fathermname" type="xsd:string"/>';
			$strToReturn .= '<element name="Fatherlname" type="xsd:string"/>';
			$strToReturn .= '<element name="MarritalStatusObject" type="xsd1:MarrialStatus"/>';
			$strToReturn .= '<element name="BloodGrpObject" type="xsd1:BloodGroup"/>';
			$strToReturn .= '<element name="ReligionObject" type="xsd1:Religion"/>';
			$strToReturn .= '<element name="CasteCatObject" type="xsd1:FeesConcession"/>';
			$strToReturn .= '<element name="CasteObject" type="xsd1:Cast"/>';
			$strToReturn .= '<element name="IfscCode" type="xsd:string"/>';
			$strToReturn .= '<element name="PayscaleObject" type="xsd1:PayScale"/>';
			$strToReturn .= '<element name="Web" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Address', $strComplexTypeArray)) {
				$strComplexTypeArray['Address'] = Address::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Gender::AlterSoapComplexTypeArray($strComplexTypeArray);
				BusinessCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				SupplierGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				SupplierCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				AppoinmentCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Prefix::AlterSoapComplexTypeArray($strComplexTypeArray);
				MarrialStatus::AlterSoapComplexTypeArray($strComplexTypeArray);
				BloodGroup::AlterSoapComplexTypeArray($strComplexTypeArray);
				Religion::AlterSoapComplexTypeArray($strComplexTypeArray);
				FeesConcession::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cast::AlterSoapComplexTypeArray($strComplexTypeArray);
				PayScale::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Address::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Address();
			if (property_exists($objSoapObject, 'Idaddress'))
				$objToReturn->intIdaddress = $objSoapObject->Idaddress;
			if ((property_exists($objSoapObject, 'OfObject')) &&
				($objSoapObject->OfObject))
				$objToReturn->OfObject = Ledger::GetObjectFromSoapObject($objSoapObject->OfObject);
			if ((property_exists($objSoapObject, 'RollObject')) &&
				($objSoapObject->RollObject))
				$objToReturn->RollObject = Role::GetObjectFromSoapObject($objSoapObject->RollObject);
			if (property_exists($objSoapObject, 'AddressLine1'))
				$objToReturn->strAddressLine1 = $objSoapObject->AddressLine1;
			if (property_exists($objSoapObject, 'AddressLine2'))
				$objToReturn->strAddressLine2 = $objSoapObject->AddressLine2;
			if ((property_exists($objSoapObject, 'CountryObject')) &&
				($objSoapObject->CountryObject))
				$objToReturn->CountryObject = Place::GetObjectFromSoapObject($objSoapObject->CountryObject);
			if ((property_exists($objSoapObject, 'Country1Object')) &&
				($objSoapObject->Country1Object))
				$objToReturn->Country1Object = Place::GetObjectFromSoapObject($objSoapObject->Country1Object);
			if ((property_exists($objSoapObject, 'StateObject')) &&
				($objSoapObject->StateObject))
				$objToReturn->StateObject = Place::GetObjectFromSoapObject($objSoapObject->StateObject);
			if ((property_exists($objSoapObject, 'State1Object')) &&
				($objSoapObject->State1Object))
				$objToReturn->State1Object = Place::GetObjectFromSoapObject($objSoapObject->State1Object);
			if ((property_exists($objSoapObject, 'DistrictObject')) &&
				($objSoapObject->DistrictObject))
				$objToReturn->DistrictObject = Place::GetObjectFromSoapObject($objSoapObject->DistrictObject);
			if ((property_exists($objSoapObject, 'District1Object')) &&
				($objSoapObject->District1Object))
				$objToReturn->District1Object = Place::GetObjectFromSoapObject($objSoapObject->District1Object);
			if ((property_exists($objSoapObject, 'TalukaObject')) &&
				($objSoapObject->TalukaObject))
				$objToReturn->TalukaObject = Place::GetObjectFromSoapObject($objSoapObject->TalukaObject);
			if ((property_exists($objSoapObject, 'Taluka1Object')) &&
				($objSoapObject->Taluka1Object))
				$objToReturn->Taluka1Object = Place::GetObjectFromSoapObject($objSoapObject->Taluka1Object);
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'City1'))
				$objToReturn->strCity1 = $objSoapObject->City1;
			if (property_exists($objSoapObject, 'ZipCode'))
				$objToReturn->strZipCode = $objSoapObject->ZipCode;
			if (property_exists($objSoapObject, 'Zipcode1'))
				$objToReturn->strZipcode1 = $objSoapObject->Zipcode1;
			if (property_exists($objSoapObject, 'Contact1'))
				$objToReturn->strContact1 = $objSoapObject->Contact1;
			if (property_exists($objSoapObject, 'Contact2'))
				$objToReturn->strContact2 = $objSoapObject->Contact2;
			if (property_exists($objSoapObject, 'Email1'))
				$objToReturn->strEmail1 = $objSoapObject->Email1;
			if (property_exists($objSoapObject, 'Email2'))
				$objToReturn->strEmail2 = $objSoapObject->Email2;
			if (property_exists($objSoapObject, 'TinSalesTaxNo'))
				$objToReturn->strTinSalesTaxNo = $objSoapObject->TinSalesTaxNo;
			if (property_exists($objSoapObject, 'CstNo'))
				$objToReturn->strCstNo = $objSoapObject->CstNo;
			if (property_exists($objSoapObject, 'Dob'))
				$objToReturn->dttDob = new QDateTime($objSoapObject->Dob);
			if (property_exists($objSoapObject, 'Age'))
				$objToReturn->strAge = $objSoapObject->Age;
			if ((property_exists($objSoapObject, 'GenderObject')) &&
				($objSoapObject->GenderObject))
				$objToReturn->GenderObject = Gender::GetObjectFromSoapObject($objSoapObject->GenderObject);
			if (property_exists($objSoapObject, 'BirthPlace'))
				$objToReturn->strBirthPlace = $objSoapObject->BirthPlace;
			if (property_exists($objSoapObject, 'AppoinmentDate'))
				$objToReturn->dttAppoinmentDate = new QDateTime($objSoapObject->AppoinmentDate);
			if ((property_exists($objSoapObject, 'BusinessTypeObject')) &&
				($objSoapObject->BusinessTypeObject))
				$objToReturn->BusinessTypeObject = BusinessCat::GetObjectFromSoapObject($objSoapObject->BusinessTypeObject);
			if ((property_exists($objSoapObject, 'SupplierTypeObject')) &&
				($objSoapObject->SupplierTypeObject))
				$objToReturn->SupplierTypeObject = SupplierGrp::GetObjectFromSoapObject($objSoapObject->SupplierTypeObject);
			if (property_exists($objSoapObject, 'SupplierOf'))
				$objToReturn->strSupplierOf = $objSoapObject->SupplierOf;
			if ((property_exists($objSoapObject, 'SupplierCategoryObject')) &&
				($objSoapObject->SupplierCategoryObject))
				$objToReturn->SupplierCategoryObject = SupplierCat::GetObjectFromSoapObject($objSoapObject->SupplierCategoryObject);
			if (property_exists($objSoapObject, 'VatNo'))
				$objToReturn->strVatNo = $objSoapObject->VatNo;
			if (property_exists($objSoapObject, 'GstNo'))
				$objToReturn->strGstNo = $objSoapObject->GstNo;
			if (property_exists($objSoapObject, 'BankName'))
				$objToReturn->strBankName = $objSoapObject->BankName;
			if (property_exists($objSoapObject, 'BankAccNo'))
				$objToReturn->strBankAccNo = $objSoapObject->BankAccNo;
			if (property_exists($objSoapObject, 'Branch'))
				$objToReturn->strBranch = $objSoapObject->Branch;
			if (property_exists($objSoapObject, 'NiftIfscWireTransferNo'))
				$objToReturn->strNiftIfscWireTransferNo = $objSoapObject->NiftIfscWireTransferNo;
			if (property_exists($objSoapObject, 'PanNo'))
				$objToReturn->strPanNo = $objSoapObject->PanNo;
			if (property_exists($objSoapObject, 'AdharCardNo'))
				$objToReturn->strAdharCardNo = $objSoapObject->AdharCardNo;
			if (property_exists($objSoapObject, 'RegFee'))
				$objToReturn->strRegFee = $objSoapObject->RegFee;
			if (property_exists($objSoapObject, 'ShopActLicensNo'))
				$objToReturn->strShopActLicensNo = $objSoapObject->ShopActLicensNo;
			if (property_exists($objSoapObject, 'ShopActDate'))
				$objToReturn->dttShopActDate = new QDateTime($objSoapObject->ShopActDate);
			if (property_exists($objSoapObject, 'TurnoverInr'))
				$objToReturn->strTurnoverInr = $objSoapObject->TurnoverInr;
			if (property_exists($objSoapObject, 'PhNo1'))
				$objToReturn->intPhNo1 = $objSoapObject->PhNo1;
			if (property_exists($objSoapObject, 'FaxNo'))
				$objToReturn->strFaxNo = $objSoapObject->FaxNo;
			if (property_exists($objSoapObject, 'TanNo'))
				$objToReturn->strTanNo = $objSoapObject->TanNo;
			if (property_exists($objSoapObject, 'Bank'))
				$objToReturn->intBank = $objSoapObject->Bank;
			if ((property_exists($objSoapObject, 'AppointmentCatObject')) &&
				($objSoapObject->AppointmentCatObject))
				$objToReturn->AppointmentCatObject = AppoinmentCat::GetObjectFromSoapObject($objSoapObject->AppointmentCatObject);
			if (property_exists($objSoapObject, 'JoiningDate'))
				$objToReturn->dttJoiningDate = new QDateTime($objSoapObject->JoiningDate);
			if ((property_exists($objSoapObject, 'DesignationObject')) &&
				($objSoapObject->DesignationObject))
				$objToReturn->DesignationObject = Role::GetObjectFromSoapObject($objSoapObject->DesignationObject);
			if ((property_exists($objSoapObject, 'DepartmentObject')) &&
				($objSoapObject->DepartmentObject))
				$objToReturn->DepartmentObject = Role::GetObjectFromSoapObject($objSoapObject->DepartmentObject);
			if ((property_exists($objSoapObject, 'PrefixObject')) &&
				($objSoapObject->PrefixObject))
				$objToReturn->PrefixObject = Prefix::GetObjectFromSoapObject($objSoapObject->PrefixObject);
			if (property_exists($objSoapObject, 'Fname'))
				$objToReturn->strFname = $objSoapObject->Fname;
			if (property_exists($objSoapObject, 'Mname'))
				$objToReturn->strMname = $objSoapObject->Mname;
			if (property_exists($objSoapObject, 'Lname'))
				$objToReturn->strLname = $objSoapObject->Lname;
			if (property_exists($objSoapObject, 'Fatherfname'))
				$objToReturn->strFatherfname = $objSoapObject->Fatherfname;
			if (property_exists($objSoapObject, 'Fathermname'))
				$objToReturn->strFathermname = $objSoapObject->Fathermname;
			if (property_exists($objSoapObject, 'Fatherlname'))
				$objToReturn->strFatherlname = $objSoapObject->Fatherlname;
			if ((property_exists($objSoapObject, 'MarritalStatusObject')) &&
				($objSoapObject->MarritalStatusObject))
				$objToReturn->MarritalStatusObject = MarrialStatus::GetObjectFromSoapObject($objSoapObject->MarritalStatusObject);
			if ((property_exists($objSoapObject, 'BloodGrpObject')) &&
				($objSoapObject->BloodGrpObject))
				$objToReturn->BloodGrpObject = BloodGroup::GetObjectFromSoapObject($objSoapObject->BloodGrpObject);
			if ((property_exists($objSoapObject, 'ReligionObject')) &&
				($objSoapObject->ReligionObject))
				$objToReturn->ReligionObject = Religion::GetObjectFromSoapObject($objSoapObject->ReligionObject);
			if ((property_exists($objSoapObject, 'CasteCatObject')) &&
				($objSoapObject->CasteCatObject))
				$objToReturn->CasteCatObject = FeesConcession::GetObjectFromSoapObject($objSoapObject->CasteCatObject);
			if ((property_exists($objSoapObject, 'CasteObject')) &&
				($objSoapObject->CasteObject))
				$objToReturn->CasteObject = Cast::GetObjectFromSoapObject($objSoapObject->CasteObject);
			if (property_exists($objSoapObject, 'IfscCode'))
				$objToReturn->strIfscCode = $objSoapObject->IfscCode;
			if ((property_exists($objSoapObject, 'PayscaleObject')) &&
				($objSoapObject->PayscaleObject))
				$objToReturn->PayscaleObject = PayScale::GetObjectFromSoapObject($objSoapObject->PayscaleObject);
			if (property_exists($objSoapObject, 'Web'))
				$objToReturn->strWeb = $objSoapObject->Web;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Address::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objOfObject)
				$objObject->objOfObject = Ledger::GetSoapObjectFromObject($objObject->objOfObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intOf = null;
			if ($objObject->objRollObject)
				$objObject->objRollObject = Role::GetSoapObjectFromObject($objObject->objRollObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoll = null;
			if ($objObject->objCountryObject)
				$objObject->objCountryObject = Place::GetSoapObjectFromObject($objObject->objCountryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCountry = null;
			if ($objObject->objCountry1Object)
				$objObject->objCountry1Object = Place::GetSoapObjectFromObject($objObject->objCountry1Object, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCountry1 = null;
			if ($objObject->objStateObject)
				$objObject->objStateObject = Place::GetSoapObjectFromObject($objObject->objStateObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intState = null;
			if ($objObject->objState1Object)
				$objObject->objState1Object = Place::GetSoapObjectFromObject($objObject->objState1Object, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intState1 = null;
			if ($objObject->objDistrictObject)
				$objObject->objDistrictObject = Place::GetSoapObjectFromObject($objObject->objDistrictObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDistrict = null;
			if ($objObject->objDistrict1Object)
				$objObject->objDistrict1Object = Place::GetSoapObjectFromObject($objObject->objDistrict1Object, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDistrict1 = null;
			if ($objObject->objTalukaObject)
				$objObject->objTalukaObject = Place::GetSoapObjectFromObject($objObject->objTalukaObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTaluka = null;
			if ($objObject->objTaluka1Object)
				$objObject->objTaluka1Object = Place::GetSoapObjectFromObject($objObject->objTaluka1Object, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTaluka1 = null;
			if ($objObject->dttDob)
				$objObject->dttDob = $objObject->dttDob->qFormat(QDateTime::FormatSoap);
			if ($objObject->objGenderObject)
				$objObject->objGenderObject = Gender::GetSoapObjectFromObject($objObject->objGenderObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGender = null;
			if ($objObject->dttAppoinmentDate)
				$objObject->dttAppoinmentDate = $objObject->dttAppoinmentDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objBusinessTypeObject)
				$objObject->objBusinessTypeObject = BusinessCat::GetSoapObjectFromObject($objObject->objBusinessTypeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBusinessType = null;
			if ($objObject->objSupplierTypeObject)
				$objObject->objSupplierTypeObject = SupplierGrp::GetSoapObjectFromObject($objObject->objSupplierTypeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSupplierType = null;
			if ($objObject->objSupplierCategoryObject)
				$objObject->objSupplierCategoryObject = SupplierCat::GetSoapObjectFromObject($objObject->objSupplierCategoryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSupplierCategory = null;
			if ($objObject->dttShopActDate)
				$objObject->dttShopActDate = $objObject->dttShopActDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objAppointmentCatObject)
				$objObject->objAppointmentCatObject = AppoinmentCat::GetSoapObjectFromObject($objObject->objAppointmentCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAppointmentCat = null;
			if ($objObject->dttJoiningDate)
				$objObject->dttJoiningDate = $objObject->dttJoiningDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objDesignationObject)
				$objObject->objDesignationObject = Role::GetSoapObjectFromObject($objObject->objDesignationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDesignation = null;
			if ($objObject->objDepartmentObject)
				$objObject->objDepartmentObject = Role::GetSoapObjectFromObject($objObject->objDepartmentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDepartment = null;
			if ($objObject->objPrefixObject)
				$objObject->objPrefixObject = Prefix::GetSoapObjectFromObject($objObject->objPrefixObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPrefix = null;
			if ($objObject->objMarritalStatusObject)
				$objObject->objMarritalStatusObject = MarrialStatus::GetSoapObjectFromObject($objObject->objMarritalStatusObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMarritalStatus = null;
			if ($objObject->objBloodGrpObject)
				$objObject->objBloodGrpObject = BloodGroup::GetSoapObjectFromObject($objObject->objBloodGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBloodGrp = null;
			if ($objObject->objReligionObject)
				$objObject->objReligionObject = Religion::GetSoapObjectFromObject($objObject->objReligionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReligion = null;
			if ($objObject->objCasteCatObject)
				$objObject->objCasteCatObject = FeesConcession::GetSoapObjectFromObject($objObject->objCasteCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCasteCat = null;
			if ($objObject->objCasteObject)
				$objObject->objCasteObject = Cast::GetSoapObjectFromObject($objObject->objCasteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCaste = null;
			if ($objObject->objPayscaleObject)
				$objObject->objPayscaleObject = PayScale::GetSoapObjectFromObject($objObject->objPayscaleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPayscale = null;
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
			$iArray['Idaddress'] = $this->intIdaddress;
			$iArray['Of'] = $this->intOf;
			$iArray['Roll'] = $this->intRoll;
			$iArray['AddressLine1'] = $this->strAddressLine1;
			$iArray['AddressLine2'] = $this->strAddressLine2;
			$iArray['Country'] = $this->intCountry;
			$iArray['Country1'] = $this->intCountry1;
			$iArray['State'] = $this->intState;
			$iArray['State1'] = $this->intState1;
			$iArray['District'] = $this->intDistrict;
			$iArray['District1'] = $this->intDistrict1;
			$iArray['Taluka'] = $this->intTaluka;
			$iArray['Taluka1'] = $this->intTaluka1;
			$iArray['City'] = $this->strCity;
			$iArray['City1'] = $this->strCity1;
			$iArray['ZipCode'] = $this->strZipCode;
			$iArray['Zipcode1'] = $this->strZipcode1;
			$iArray['Contact1'] = $this->strContact1;
			$iArray['Contact2'] = $this->strContact2;
			$iArray['Email1'] = $this->strEmail1;
			$iArray['Email2'] = $this->strEmail2;
			$iArray['TinSalesTaxNo'] = $this->strTinSalesTaxNo;
			$iArray['CstNo'] = $this->strCstNo;
			$iArray['Dob'] = $this->dttDob;
			$iArray['Age'] = $this->strAge;
			$iArray['Gender'] = $this->intGender;
			$iArray['BirthPlace'] = $this->strBirthPlace;
			$iArray['AppoinmentDate'] = $this->dttAppoinmentDate;
			$iArray['BusinessType'] = $this->intBusinessType;
			$iArray['SupplierType'] = $this->intSupplierType;
			$iArray['SupplierOf'] = $this->strSupplierOf;
			$iArray['SupplierCategory'] = $this->intSupplierCategory;
			$iArray['VatNo'] = $this->strVatNo;
			$iArray['GstNo'] = $this->strGstNo;
			$iArray['BankName'] = $this->strBankName;
			$iArray['BankAccNo'] = $this->strBankAccNo;
			$iArray['Branch'] = $this->strBranch;
			$iArray['NiftIfscWireTransferNo'] = $this->strNiftIfscWireTransferNo;
			$iArray['PanNo'] = $this->strPanNo;
			$iArray['AdharCardNo'] = $this->strAdharCardNo;
			$iArray['RegFee'] = $this->strRegFee;
			$iArray['ShopActLicensNo'] = $this->strShopActLicensNo;
			$iArray['ShopActDate'] = $this->dttShopActDate;
			$iArray['TurnoverInr'] = $this->strTurnoverInr;
			$iArray['PhNo1'] = $this->intPhNo1;
			$iArray['FaxNo'] = $this->strFaxNo;
			$iArray['TanNo'] = $this->strTanNo;
			$iArray['Bank'] = $this->intBank;
			$iArray['AppointmentCat'] = $this->intAppointmentCat;
			$iArray['JoiningDate'] = $this->dttJoiningDate;
			$iArray['Designation'] = $this->intDesignation;
			$iArray['Department'] = $this->intDepartment;
			$iArray['Prefix'] = $this->intPrefix;
			$iArray['Fname'] = $this->strFname;
			$iArray['Mname'] = $this->strMname;
			$iArray['Lname'] = $this->strLname;
			$iArray['Fatherfname'] = $this->strFatherfname;
			$iArray['Fathermname'] = $this->strFathermname;
			$iArray['Fatherlname'] = $this->strFatherlname;
			$iArray['MarritalStatus'] = $this->intMarritalStatus;
			$iArray['BloodGrp'] = $this->intBloodGrp;
			$iArray['Religion'] = $this->intReligion;
			$iArray['CasteCat'] = $this->intCasteCat;
			$iArray['Caste'] = $this->intCaste;
			$iArray['IfscCode'] = $this->strIfscCode;
			$iArray['Payscale'] = $this->intPayscale;
			$iArray['Web'] = $this->strWeb;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdaddress ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idaddress
     * @property-read QQNode $Of
     * @property-read QQNodeLedger $OfObject
     * @property-read QQNode $Roll
     * @property-read QQNodeRole $RollObject
     * @property-read QQNode $AddressLine1
     * @property-read QQNode $AddressLine2
     * @property-read QQNode $Country
     * @property-read QQNodePlace $CountryObject
     * @property-read QQNode $Country1
     * @property-read QQNodePlace $Country1Object
     * @property-read QQNode $State
     * @property-read QQNodePlace $StateObject
     * @property-read QQNode $State1
     * @property-read QQNodePlace $State1Object
     * @property-read QQNode $District
     * @property-read QQNodePlace $DistrictObject
     * @property-read QQNode $District1
     * @property-read QQNodePlace $District1Object
     * @property-read QQNode $Taluka
     * @property-read QQNodePlace $TalukaObject
     * @property-read QQNode $Taluka1
     * @property-read QQNodePlace $Taluka1Object
     * @property-read QQNode $City
     * @property-read QQNode $City1
     * @property-read QQNode $ZipCode
     * @property-read QQNode $Zipcode1
     * @property-read QQNode $Contact1
     * @property-read QQNode $Contact2
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $TinSalesTaxNo
     * @property-read QQNode $CstNo
     * @property-read QQNode $Dob
     * @property-read QQNode $Age
     * @property-read QQNode $Gender
     * @property-read QQNodeGender $GenderObject
     * @property-read QQNode $BirthPlace
     * @property-read QQNode $AppoinmentDate
     * @property-read QQNode $BusinessType
     * @property-read QQNodeBusinessCat $BusinessTypeObject
     * @property-read QQNode $SupplierType
     * @property-read QQNodeSupplierGrp $SupplierTypeObject
     * @property-read QQNode $SupplierOf
     * @property-read QQNode $SupplierCategory
     * @property-read QQNodeSupplierCat $SupplierCategoryObject
     * @property-read QQNode $VatNo
     * @property-read QQNode $GstNo
     * @property-read QQNode $BankName
     * @property-read QQNode $BankAccNo
     * @property-read QQNode $Branch
     * @property-read QQNode $NiftIfscWireTransferNo
     * @property-read QQNode $PanNo
     * @property-read QQNode $AdharCardNo
     * @property-read QQNode $RegFee
     * @property-read QQNode $ShopActLicensNo
     * @property-read QQNode $ShopActDate
     * @property-read QQNode $TurnoverInr
     * @property-read QQNode $PhNo1
     * @property-read QQNode $FaxNo
     * @property-read QQNode $TanNo
     * @property-read QQNode $Bank
     * @property-read QQNode $AppointmentCat
     * @property-read QQNodeAppoinmentCat $AppointmentCatObject
     * @property-read QQNode $JoiningDate
     * @property-read QQNode $Designation
     * @property-read QQNodeRole $DesignationObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $Prefix
     * @property-read QQNodePrefix $PrefixObject
     * @property-read QQNode $Fname
     * @property-read QQNode $Mname
     * @property-read QQNode $Lname
     * @property-read QQNode $Fatherfname
     * @property-read QQNode $Fathermname
     * @property-read QQNode $Fatherlname
     * @property-read QQNode $MarritalStatus
     * @property-read QQNodeMarrialStatus $MarritalStatusObject
     * @property-read QQNode $BloodGrp
     * @property-read QQNodeBloodGroup $BloodGrpObject
     * @property-read QQNode $Religion
     * @property-read QQNodeReligion $ReligionObject
     * @property-read QQNode $CasteCat
     * @property-read QQNodeFeesConcession $CasteCatObject
     * @property-read QQNode $Caste
     * @property-read QQNodeCast $CasteObject
     * @property-read QQNode $IfscCode
     * @property-read QQNode $Payscale
     * @property-read QQNodePayScale $PayscaleObject
     * @property-read QQNode $Web
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAddress extends QQNode {
		protected $strTableName = 'address';
		protected $strPrimaryKey = 'idaddress';
		protected $strClassName = 'Address';
		public function __get($strName) {
			switch ($strName) {
				case 'Idaddress':
					return new QQNode('idaddress', 'Idaddress', 'Integer', $this);
				case 'Of':
					return new QQNode('of', 'Of', 'Integer', $this);
				case 'OfObject':
					return new QQNodeLedger('of', 'OfObject', 'Integer', $this);
				case 'Roll':
					return new QQNode('roll', 'Roll', 'Integer', $this);
				case 'RollObject':
					return new QQNodeRole('roll', 'RollObject', 'Integer', $this);
				case 'AddressLine1':
					return new QQNode('address_line1', 'AddressLine1', 'Blob', $this);
				case 'AddressLine2':
					return new QQNode('address_line2', 'AddressLine2', 'Blob', $this);
				case 'Country':
					return new QQNode('country', 'Country', 'Integer', $this);
				case 'CountryObject':
					return new QQNodePlace('country', 'CountryObject', 'Integer', $this);
				case 'Country1':
					return new QQNode('country1', 'Country1', 'Integer', $this);
				case 'Country1Object':
					return new QQNodePlace('country1', 'Country1Object', 'Integer', $this);
				case 'State':
					return new QQNode('state', 'State', 'Integer', $this);
				case 'StateObject':
					return new QQNodePlace('state', 'StateObject', 'Integer', $this);
				case 'State1':
					return new QQNode('state1', 'State1', 'Integer', $this);
				case 'State1Object':
					return new QQNodePlace('state1', 'State1Object', 'Integer', $this);
				case 'District':
					return new QQNode('district', 'District', 'Integer', $this);
				case 'DistrictObject':
					return new QQNodePlace('district', 'DistrictObject', 'Integer', $this);
				case 'District1':
					return new QQNode('district1', 'District1', 'Integer', $this);
				case 'District1Object':
					return new QQNodePlace('district1', 'District1Object', 'Integer', $this);
				case 'Taluka':
					return new QQNode('taluka', 'Taluka', 'Integer', $this);
				case 'TalukaObject':
					return new QQNodePlace('taluka', 'TalukaObject', 'Integer', $this);
				case 'Taluka1':
					return new QQNode('taluka1', 'Taluka1', 'Integer', $this);
				case 'Taluka1Object':
					return new QQNodePlace('taluka1', 'Taluka1Object', 'Integer', $this);
				case 'City':
					return new QQNode('city', 'City', 'VarChar', $this);
				case 'City1':
					return new QQNode('city1', 'City1', 'VarChar', $this);
				case 'ZipCode':
					return new QQNode('zip_code', 'ZipCode', 'VarChar', $this);
				case 'Zipcode1':
					return new QQNode('zipcode1', 'Zipcode1', 'VarChar', $this);
				case 'Contact1':
					return new QQNode('contact1', 'Contact1', 'VarChar', $this);
				case 'Contact2':
					return new QQNode('contact2', 'Contact2', 'VarChar', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'VarChar', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'VarChar', $this);
				case 'TinSalesTaxNo':
					return new QQNode('tin_sales_tax_no', 'TinSalesTaxNo', 'VarChar', $this);
				case 'CstNo':
					return new QQNode('cst_no', 'CstNo', 'VarChar', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'Date', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'VarChar', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'Integer', $this);
				case 'GenderObject':
					return new QQNodeGender('gender', 'GenderObject', 'Integer', $this);
				case 'BirthPlace':
					return new QQNode('birth_place', 'BirthPlace', 'VarChar', $this);
				case 'AppoinmentDate':
					return new QQNode('appoinment_date', 'AppoinmentDate', 'DateTime', $this);
				case 'BusinessType':
					return new QQNode('business_type', 'BusinessType', 'Integer', $this);
				case 'BusinessTypeObject':
					return new QQNodeBusinessCat('business_type', 'BusinessTypeObject', 'Integer', $this);
				case 'SupplierType':
					return new QQNode('supplier_type', 'SupplierType', 'Integer', $this);
				case 'SupplierTypeObject':
					return new QQNodeSupplierGrp('supplier_type', 'SupplierTypeObject', 'Integer', $this);
				case 'SupplierOf':
					return new QQNode('supplier_of', 'SupplierOf', 'Blob', $this);
				case 'SupplierCategory':
					return new QQNode('supplier_category', 'SupplierCategory', 'Integer', $this);
				case 'SupplierCategoryObject':
					return new QQNodeSupplierCat('supplier_category', 'SupplierCategoryObject', 'Integer', $this);
				case 'VatNo':
					return new QQNode('vat_no', 'VatNo', 'VarChar', $this);
				case 'GstNo':
					return new QQNode('gst_no', 'GstNo', 'VarChar', $this);
				case 'BankName':
					return new QQNode('bank_name', 'BankName', 'VarChar', $this);
				case 'BankAccNo':
					return new QQNode('bank_acc_no', 'BankAccNo', 'VarChar', $this);
				case 'Branch':
					return new QQNode('branch', 'Branch', 'VarChar', $this);
				case 'NiftIfscWireTransferNo':
					return new QQNode('nift_ifsc_wire_transfer_no', 'NiftIfscWireTransferNo', 'VarChar', $this);
				case 'PanNo':
					return new QQNode('pan_no', 'PanNo', 'VarChar', $this);
				case 'AdharCardNo':
					return new QQNode('adhar_card_no', 'AdharCardNo', 'VarChar', $this);
				case 'RegFee':
					return new QQNode('reg_fee', 'RegFee', 'VarChar', $this);
				case 'ShopActLicensNo':
					return new QQNode('shop_act_licens_no', 'ShopActLicensNo', 'VarChar', $this);
				case 'ShopActDate':
					return new QQNode('shop_act_date', 'ShopActDate', 'Date', $this);
				case 'TurnoverInr':
					return new QQNode('turnover_inr', 'TurnoverInr', 'Blob', $this);
				case 'PhNo1':
					return new QQNode('ph_no1', 'PhNo1', 'Integer', $this);
				case 'FaxNo':
					return new QQNode('fax_no', 'FaxNo', 'VarChar', $this);
				case 'TanNo':
					return new QQNode('tan_no', 'TanNo', 'VarChar', $this);
				case 'Bank':
					return new QQNode('bank', 'Bank', 'Integer', $this);
				case 'AppointmentCat':
					return new QQNode('appointment_cat', 'AppointmentCat', 'Integer', $this);
				case 'AppointmentCatObject':
					return new QQNodeAppoinmentCat('appointment_cat', 'AppointmentCatObject', 'Integer', $this);
				case 'JoiningDate':
					return new QQNode('joining_date', 'JoiningDate', 'Date', $this);
				case 'Designation':
					return new QQNode('designation', 'Designation', 'Integer', $this);
				case 'DesignationObject':
					return new QQNodeRole('designation', 'DesignationObject', 'Integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'Integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'Integer', $this);
				case 'Prefix':
					return new QQNode('prefix', 'Prefix', 'Integer', $this);
				case 'PrefixObject':
					return new QQNodePrefix('prefix', 'PrefixObject', 'Integer', $this);
				case 'Fname':
					return new QQNode('fname', 'Fname', 'VarChar', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'VarChar', $this);
				case 'Lname':
					return new QQNode('lname', 'Lname', 'VarChar', $this);
				case 'Fatherfname':
					return new QQNode('fatherfname', 'Fatherfname', 'VarChar', $this);
				case 'Fathermname':
					return new QQNode('fathermname', 'Fathermname', 'VarChar', $this);
				case 'Fatherlname':
					return new QQNode('fatherlname', 'Fatherlname', 'VarChar', $this);
				case 'MarritalStatus':
					return new QQNode('marrital_status', 'MarritalStatus', 'Integer', $this);
				case 'MarritalStatusObject':
					return new QQNodeMarrialStatus('marrital_status', 'MarritalStatusObject', 'Integer', $this);
				case 'BloodGrp':
					return new QQNode('blood_grp', 'BloodGrp', 'Integer', $this);
				case 'BloodGrpObject':
					return new QQNodeBloodGroup('blood_grp', 'BloodGrpObject', 'Integer', $this);
				case 'Religion':
					return new QQNode('religion', 'Religion', 'Integer', $this);
				case 'ReligionObject':
					return new QQNodeReligion('religion', 'ReligionObject', 'Integer', $this);
				case 'CasteCat':
					return new QQNode('caste_cat', 'CasteCat', 'Integer', $this);
				case 'CasteCatObject':
					return new QQNodeFeesConcession('caste_cat', 'CasteCatObject', 'Integer', $this);
				case 'Caste':
					return new QQNode('caste', 'Caste', 'Integer', $this);
				case 'CasteObject':
					return new QQNodeCast('caste', 'CasteObject', 'Integer', $this);
				case 'IfscCode':
					return new QQNode('ifsc_code', 'IfscCode', 'VarChar', $this);
				case 'Payscale':
					return new QQNode('payscale', 'Payscale', 'Integer', $this);
				case 'PayscaleObject':
					return new QQNodePayScale('payscale', 'PayscaleObject', 'Integer', $this);
				case 'Web':
					return new QQNode('web', 'Web', 'Blob', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idaddress', 'Idaddress', 'Integer', $this);
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
     * @property-read QQNode $Idaddress
     * @property-read QQNode $Of
     * @property-read QQNodeLedger $OfObject
     * @property-read QQNode $Roll
     * @property-read QQNodeRole $RollObject
     * @property-read QQNode $AddressLine1
     * @property-read QQNode $AddressLine2
     * @property-read QQNode $Country
     * @property-read QQNodePlace $CountryObject
     * @property-read QQNode $Country1
     * @property-read QQNodePlace $Country1Object
     * @property-read QQNode $State
     * @property-read QQNodePlace $StateObject
     * @property-read QQNode $State1
     * @property-read QQNodePlace $State1Object
     * @property-read QQNode $District
     * @property-read QQNodePlace $DistrictObject
     * @property-read QQNode $District1
     * @property-read QQNodePlace $District1Object
     * @property-read QQNode $Taluka
     * @property-read QQNodePlace $TalukaObject
     * @property-read QQNode $Taluka1
     * @property-read QQNodePlace $Taluka1Object
     * @property-read QQNode $City
     * @property-read QQNode $City1
     * @property-read QQNode $ZipCode
     * @property-read QQNode $Zipcode1
     * @property-read QQNode $Contact1
     * @property-read QQNode $Contact2
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $TinSalesTaxNo
     * @property-read QQNode $CstNo
     * @property-read QQNode $Dob
     * @property-read QQNode $Age
     * @property-read QQNode $Gender
     * @property-read QQNodeGender $GenderObject
     * @property-read QQNode $BirthPlace
     * @property-read QQNode $AppoinmentDate
     * @property-read QQNode $BusinessType
     * @property-read QQNodeBusinessCat $BusinessTypeObject
     * @property-read QQNode $SupplierType
     * @property-read QQNodeSupplierGrp $SupplierTypeObject
     * @property-read QQNode $SupplierOf
     * @property-read QQNode $SupplierCategory
     * @property-read QQNodeSupplierCat $SupplierCategoryObject
     * @property-read QQNode $VatNo
     * @property-read QQNode $GstNo
     * @property-read QQNode $BankName
     * @property-read QQNode $BankAccNo
     * @property-read QQNode $Branch
     * @property-read QQNode $NiftIfscWireTransferNo
     * @property-read QQNode $PanNo
     * @property-read QQNode $AdharCardNo
     * @property-read QQNode $RegFee
     * @property-read QQNode $ShopActLicensNo
     * @property-read QQNode $ShopActDate
     * @property-read QQNode $TurnoverInr
     * @property-read QQNode $PhNo1
     * @property-read QQNode $FaxNo
     * @property-read QQNode $TanNo
     * @property-read QQNode $Bank
     * @property-read QQNode $AppointmentCat
     * @property-read QQNodeAppoinmentCat $AppointmentCatObject
     * @property-read QQNode $JoiningDate
     * @property-read QQNode $Designation
     * @property-read QQNodeRole $DesignationObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $Prefix
     * @property-read QQNodePrefix $PrefixObject
     * @property-read QQNode $Fname
     * @property-read QQNode $Mname
     * @property-read QQNode $Lname
     * @property-read QQNode $Fatherfname
     * @property-read QQNode $Fathermname
     * @property-read QQNode $Fatherlname
     * @property-read QQNode $MarritalStatus
     * @property-read QQNodeMarrialStatus $MarritalStatusObject
     * @property-read QQNode $BloodGrp
     * @property-read QQNodeBloodGroup $BloodGrpObject
     * @property-read QQNode $Religion
     * @property-read QQNodeReligion $ReligionObject
     * @property-read QQNode $CasteCat
     * @property-read QQNodeFeesConcession $CasteCatObject
     * @property-read QQNode $Caste
     * @property-read QQNodeCast $CasteObject
     * @property-read QQNode $IfscCode
     * @property-read QQNode $Payscale
     * @property-read QQNodePayScale $PayscaleObject
     * @property-read QQNode $Web
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAddress extends QQReverseReferenceNode {
		protected $strTableName = 'address';
		protected $strPrimaryKey = 'idaddress';
		protected $strClassName = 'Address';
		public function __get($strName) {
			switch ($strName) {
				case 'Idaddress':
					return new QQNode('idaddress', 'Idaddress', 'integer', $this);
				case 'Of':
					return new QQNode('of', 'Of', 'integer', $this);
				case 'OfObject':
					return new QQNodeLedger('of', 'OfObject', 'integer', $this);
				case 'Roll':
					return new QQNode('roll', 'Roll', 'integer', $this);
				case 'RollObject':
					return new QQNodeRole('roll', 'RollObject', 'integer', $this);
				case 'AddressLine1':
					return new QQNode('address_line1', 'AddressLine1', 'string', $this);
				case 'AddressLine2':
					return new QQNode('address_line2', 'AddressLine2', 'string', $this);
				case 'Country':
					return new QQNode('country', 'Country', 'integer', $this);
				case 'CountryObject':
					return new QQNodePlace('country', 'CountryObject', 'integer', $this);
				case 'Country1':
					return new QQNode('country1', 'Country1', 'integer', $this);
				case 'Country1Object':
					return new QQNodePlace('country1', 'Country1Object', 'integer', $this);
				case 'State':
					return new QQNode('state', 'State', 'integer', $this);
				case 'StateObject':
					return new QQNodePlace('state', 'StateObject', 'integer', $this);
				case 'State1':
					return new QQNode('state1', 'State1', 'integer', $this);
				case 'State1Object':
					return new QQNodePlace('state1', 'State1Object', 'integer', $this);
				case 'District':
					return new QQNode('district', 'District', 'integer', $this);
				case 'DistrictObject':
					return new QQNodePlace('district', 'DistrictObject', 'integer', $this);
				case 'District1':
					return new QQNode('district1', 'District1', 'integer', $this);
				case 'District1Object':
					return new QQNodePlace('district1', 'District1Object', 'integer', $this);
				case 'Taluka':
					return new QQNode('taluka', 'Taluka', 'integer', $this);
				case 'TalukaObject':
					return new QQNodePlace('taluka', 'TalukaObject', 'integer', $this);
				case 'Taluka1':
					return new QQNode('taluka1', 'Taluka1', 'integer', $this);
				case 'Taluka1Object':
					return new QQNodePlace('taluka1', 'Taluka1Object', 'integer', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'City1':
					return new QQNode('city1', 'City1', 'string', $this);
				case 'ZipCode':
					return new QQNode('zip_code', 'ZipCode', 'string', $this);
				case 'Zipcode1':
					return new QQNode('zipcode1', 'Zipcode1', 'string', $this);
				case 'Contact1':
					return new QQNode('contact1', 'Contact1', 'string', $this);
				case 'Contact2':
					return new QQNode('contact2', 'Contact2', 'string', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'string', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'string', $this);
				case 'TinSalesTaxNo':
					return new QQNode('tin_sales_tax_no', 'TinSalesTaxNo', 'string', $this);
				case 'CstNo':
					return new QQNode('cst_no', 'CstNo', 'string', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'QDateTime', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'string', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'integer', $this);
				case 'GenderObject':
					return new QQNodeGender('gender', 'GenderObject', 'integer', $this);
				case 'BirthPlace':
					return new QQNode('birth_place', 'BirthPlace', 'string', $this);
				case 'AppoinmentDate':
					return new QQNode('appoinment_date', 'AppoinmentDate', 'QDateTime', $this);
				case 'BusinessType':
					return new QQNode('business_type', 'BusinessType', 'integer', $this);
				case 'BusinessTypeObject':
					return new QQNodeBusinessCat('business_type', 'BusinessTypeObject', 'integer', $this);
				case 'SupplierType':
					return new QQNode('supplier_type', 'SupplierType', 'integer', $this);
				case 'SupplierTypeObject':
					return new QQNodeSupplierGrp('supplier_type', 'SupplierTypeObject', 'integer', $this);
				case 'SupplierOf':
					return new QQNode('supplier_of', 'SupplierOf', 'string', $this);
				case 'SupplierCategory':
					return new QQNode('supplier_category', 'SupplierCategory', 'integer', $this);
				case 'SupplierCategoryObject':
					return new QQNodeSupplierCat('supplier_category', 'SupplierCategoryObject', 'integer', $this);
				case 'VatNo':
					return new QQNode('vat_no', 'VatNo', 'string', $this);
				case 'GstNo':
					return new QQNode('gst_no', 'GstNo', 'string', $this);
				case 'BankName':
					return new QQNode('bank_name', 'BankName', 'string', $this);
				case 'BankAccNo':
					return new QQNode('bank_acc_no', 'BankAccNo', 'string', $this);
				case 'Branch':
					return new QQNode('branch', 'Branch', 'string', $this);
				case 'NiftIfscWireTransferNo':
					return new QQNode('nift_ifsc_wire_transfer_no', 'NiftIfscWireTransferNo', 'string', $this);
				case 'PanNo':
					return new QQNode('pan_no', 'PanNo', 'string', $this);
				case 'AdharCardNo':
					return new QQNode('adhar_card_no', 'AdharCardNo', 'string', $this);
				case 'RegFee':
					return new QQNode('reg_fee', 'RegFee', 'string', $this);
				case 'ShopActLicensNo':
					return new QQNode('shop_act_licens_no', 'ShopActLicensNo', 'string', $this);
				case 'ShopActDate':
					return new QQNode('shop_act_date', 'ShopActDate', 'QDateTime', $this);
				case 'TurnoverInr':
					return new QQNode('turnover_inr', 'TurnoverInr', 'string', $this);
				case 'PhNo1':
					return new QQNode('ph_no1', 'PhNo1', 'integer', $this);
				case 'FaxNo':
					return new QQNode('fax_no', 'FaxNo', 'string', $this);
				case 'TanNo':
					return new QQNode('tan_no', 'TanNo', 'string', $this);
				case 'Bank':
					return new QQNode('bank', 'Bank', 'integer', $this);
				case 'AppointmentCat':
					return new QQNode('appointment_cat', 'AppointmentCat', 'integer', $this);
				case 'AppointmentCatObject':
					return new QQNodeAppoinmentCat('appointment_cat', 'AppointmentCatObject', 'integer', $this);
				case 'JoiningDate':
					return new QQNode('joining_date', 'JoiningDate', 'QDateTime', $this);
				case 'Designation':
					return new QQNode('designation', 'Designation', 'integer', $this);
				case 'DesignationObject':
					return new QQNodeRole('designation', 'DesignationObject', 'integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'integer', $this);
				case 'Prefix':
					return new QQNode('prefix', 'Prefix', 'integer', $this);
				case 'PrefixObject':
					return new QQNodePrefix('prefix', 'PrefixObject', 'integer', $this);
				case 'Fname':
					return new QQNode('fname', 'Fname', 'string', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'string', $this);
				case 'Lname':
					return new QQNode('lname', 'Lname', 'string', $this);
				case 'Fatherfname':
					return new QQNode('fatherfname', 'Fatherfname', 'string', $this);
				case 'Fathermname':
					return new QQNode('fathermname', 'Fathermname', 'string', $this);
				case 'Fatherlname':
					return new QQNode('fatherlname', 'Fatherlname', 'string', $this);
				case 'MarritalStatus':
					return new QQNode('marrital_status', 'MarritalStatus', 'integer', $this);
				case 'MarritalStatusObject':
					return new QQNodeMarrialStatus('marrital_status', 'MarritalStatusObject', 'integer', $this);
				case 'BloodGrp':
					return new QQNode('blood_grp', 'BloodGrp', 'integer', $this);
				case 'BloodGrpObject':
					return new QQNodeBloodGroup('blood_grp', 'BloodGrpObject', 'integer', $this);
				case 'Religion':
					return new QQNode('religion', 'Religion', 'integer', $this);
				case 'ReligionObject':
					return new QQNodeReligion('religion', 'ReligionObject', 'integer', $this);
				case 'CasteCat':
					return new QQNode('caste_cat', 'CasteCat', 'integer', $this);
				case 'CasteCatObject':
					return new QQNodeFeesConcession('caste_cat', 'CasteCatObject', 'integer', $this);
				case 'Caste':
					return new QQNode('caste', 'Caste', 'integer', $this);
				case 'CasteObject':
					return new QQNodeCast('caste', 'CasteObject', 'integer', $this);
				case 'IfscCode':
					return new QQNode('ifsc_code', 'IfscCode', 'string', $this);
				case 'Payscale':
					return new QQNode('payscale', 'Payscale', 'integer', $this);
				case 'PayscaleObject':
					return new QQNodePayScale('payscale', 'PayscaleObject', 'integer', $this);
				case 'Web':
					return new QQNode('web', 'Web', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idaddress', 'Idaddress', 'integer', $this);
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
