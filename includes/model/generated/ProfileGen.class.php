<?php
	/**
	 * The abstract ProfileGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Profile subclass which
	 * extends this ProfileGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Profile class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $Idprofile the value for intIdprofile (PK)
	 * @property integer $Prefix the value for intPrefix 
	 * @property string $FirstName the value for strFirstName 
	 * @property string $MiddleName the value for strMiddleName 
	 * @property string $LastName the value for strLastName 
	 * @property QDateTime $LeaveDate the value for dttLeaveDate 
	 * @property integer $MarrtialStatus the value for intMarrtialStatus 
	 * @property string $Handicaped the value for strHandicaped 
	 * @property string $AdharNo the value for strAdharNo 
	 * @property string $AnnualFamilyIncome the value for strAnnualFamilyIncome 
	 * @property integer $BloodGroup the value for intBloodGroup 
	 * @property integer $MotherTongue the value for intMotherTongue 
	 * @property integer $Religion the value for intReligion 
	 * @property string $Domicile the value for strDomicile 
	 * @property integer $Nationality the value for intNationality 
	 * @property integer $CourseOfAddmission the value for intCourseOfAddmission 
	 * @property integer $HandicapedCat the value for intHandicapedCat 
	 * @property integer $CasteCat the value for intCasteCat 
	 * @property integer $Caste the value for intCaste 
	 * @property integer $EducationTitle the value for intEducationTitle 
	 * @property integer $FeeConcession the value for intFeeConcession 
	 * @property QDateTime $AdmittedDate the value for dttAdmittedDate 
	 * @property string $MfirstName the value for strMfirstName 
	 * @property string $MmiddleName the value for strMmiddleName 
	 * @property string $MlastName the value for strMlastName 
	 * @property string $OldName the value for strOldName 
	 * @property string $ReasonOfNameChange the value for strReasonOfNameChange 
	 * @property integer $UniversityReservation the value for intUniversityReservation 
	 * @property string $FatherFirstName the value for strFatherFirstName 
	 * @property string $FatherMiddleName the value for strFatherMiddleName 
	 * @property string $FatherLastName the value for strFatherLastName 
	 * @property string $MotherFirstName the value for strMotherFirstName 
	 * @property string $MotherMiddleName the value for strMotherMiddleName 
	 * @property string $MotherLastName the value for strMotherLastName 
	 * @property integer $AdmissionMode the value for intAdmissionMode 
	 * @property integer $Inquiry the value for intInquiry 
	 * @property string $AddressLine1 the value for strAddressLine1 
	 * @property string $AddressLine2 the value for strAddressLine2 
	 * @property integer $Gender the value for intGender 
	 * @property integer $State the value for intState 
	 * @property integer $State1 the value for intState1 
	 * @property integer $District the value for intDistrict 
	 * @property integer $District1 the value for intDistrict1 
	 * @property integer $Taluka the value for intTaluka 
	 * @property integer $Taluka1 the value for intTaluka1 
	 * @property string $City the value for strCity 
	 * @property string $City1 the value for strCity1 
	 * @property string $Zipcode the value for strZipcode 
	 * @property string $Contact1 the value for strContact1 
	 * @property string $Contact2 the value for strContact2 
	 * @property string $Email1 the value for strEmail1 
	 * @property string $Email2 the value for strEmail2 
	 * @property QDateTime $Dob the value for dttDob 
	 * @property string $Age the value for strAge 
	 * @property string $BirthPlace the value for strBirthPlace 
	 * @property string $GuardianAnnualIncome the value for strGuardianAnnualIncome 
	 * @property string $Occupation the value for strOccupation 
	 * @property string $RelationOfApplicantWithGuardian the value for strRelationOfApplicantWithGuardian 
	 * @property boolean $Cvc the value for blnCvc 
	 * @property boolean $Ncl the value for blnNcl 
	 * @property integer $Year the value for intYear 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property Ledger $IdprofileObject the value for the Ledger object referenced by intIdprofile (PK)
	 * @property Prefix $PrefixObject the value for the Prefix object referenced by intPrefix 
	 * @property MarrialStatus $MarrtialStatusObject the value for the MarrialStatus object referenced by intMarrtialStatus 
	 * @property BloodGroup $BloodGroupObject the value for the BloodGroup object referenced by intBloodGroup 
	 * @property MotherTongue $MotherTongueObject the value for the MotherTongue object referenced by intMotherTongue 
	 * @property Religion $ReligionObject the value for the Religion object referenced by intReligion 
	 * @property Nationality $NationalityObject the value for the Nationality object referenced by intNationality 
	 * @property Role $CourseOfAddmissionObject the value for the Role object referenced by intCourseOfAddmission 
	 * @property HandicapedCat $HandicapedCatObject the value for the HandicapedCat object referenced by intHandicapedCat 
	 * @property Cast $CasteCatObject the value for the Cast object referenced by intCasteCat 
	 * @property Cast $CasteObject the value for the Cast object referenced by intCaste 
	 * @property EducationTitle $EducationTitleObject the value for the EducationTitle object referenced by intEducationTitle 
	 * @property FeesConcession $FeeConcessionObject the value for the FeesConcession object referenced by intFeeConcession 
	 * @property UniversityReservation $UniversityReservationObject the value for the UniversityReservation object referenced by intUniversityReservation 
	 * @property AdmissionMode $AdmissionModeObject the value for the AdmissionMode object referenced by intAdmissionMode 
	 * @property Inquiry $InquiryObject the value for the Inquiry object referenced by intInquiry 
	 * @property Gender $GenderObject the value for the Gender object referenced by intGender 
	 * @property Place $StateObject the value for the Place object referenced by intState 
	 * @property Place $State1Object the value for the Place object referenced by intState1 
	 * @property Place $DistrictObject the value for the Place object referenced by intDistrict 
	 * @property Place $District1Object the value for the Place object referenced by intDistrict1 
	 * @property Place $TalukaObject the value for the Place object referenced by intTaluka 
	 * @property Place $Taluka1Object the value for the Place object referenced by intTaluka1 
	 * @property AcademicYear $YearObject the value for the AcademicYear object referenced by intYear 
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property-read ProfileHasQualifiedsubject $_ProfileHasQualifiedsubject the value for the private _objProfileHasQualifiedsubject (Read-Only) if set due to an expansion on the profile_has_qualifiedsubject.profile reverse relationship
	 * @property-read ProfileHasQualifiedsubject[] $_ProfileHasQualifiedsubjectArray the value for the private _objProfileHasQualifiedsubjectArray (Read-Only) if set due to an ExpandAsArray on the profile_has_qualifiedsubject.profile reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProfileGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column profile.idprofile
		 * @var integer intIdprofile
		 */
		protected $intIdprofile;
		const IdprofileDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intIdprofile;
		 */
		protected $__intIdprofile;

		/**
		 * Protected member variable that maps to the database column profile.prefix
		 * @var integer intPrefix
		 */
		protected $intPrefix;
		const PrefixDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.first_name
		 * @var string strFirstName
		 */
		protected $strFirstName;
		const FirstNameMaxLength = 255;
		const FirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.middle_name
		 * @var string strMiddleName
		 */
		protected $strMiddleName;
		const MiddleNameMaxLength = 255;
		const MiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.last_name
		 * @var string strLastName
		 */
		protected $strLastName;
		const LastNameMaxLength = 255;
		const LastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.leave_date
		 * @var QDateTime dttLeaveDate
		 */
		protected $dttLeaveDate;
		const LeaveDateDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.marrtial_status
		 * @var integer intMarrtialStatus
		 */
		protected $intMarrtialStatus;
		const MarrtialStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.handicaped
		 * @var string strHandicaped
		 */
		protected $strHandicaped;
		const HandicapedMaxLength = 255;
		const HandicapedDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.adhar_no
		 * @var string strAdharNo
		 */
		protected $strAdharNo;
		const AdharNoMaxLength = 45;
		const AdharNoDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.annual_family_income
		 * @var string strAnnualFamilyIncome
		 */
		protected $strAnnualFamilyIncome;
		const AnnualFamilyIncomeDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.blood_group
		 * @var integer intBloodGroup
		 */
		protected $intBloodGroup;
		const BloodGroupDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mother_tongue
		 * @var integer intMotherTongue
		 */
		protected $intMotherTongue;
		const MotherTongueDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.religion
		 * @var integer intReligion
		 */
		protected $intReligion;
		const ReligionDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.domicile
		 * @var string strDomicile
		 */
		protected $strDomicile;
		const DomicileMaxLength = 45;
		const DomicileDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.nationality
		 * @var integer intNationality
		 */
		protected $intNationality;
		const NationalityDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.course_of_addmission
		 * @var integer intCourseOfAddmission
		 */
		protected $intCourseOfAddmission;
		const CourseOfAddmissionDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.handicaped_cat
		 * @var integer intHandicapedCat
		 */
		protected $intHandicapedCat;
		const HandicapedCatDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.caste_cat
		 * @var integer intCasteCat
		 */
		protected $intCasteCat;
		const CasteCatDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.caste
		 * @var integer intCaste
		 */
		protected $intCaste;
		const CasteDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.education_title
		 * @var integer intEducationTitle
		 */
		protected $intEducationTitle;
		const EducationTitleDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.fee_concession
		 * @var integer intFeeConcession
		 */
		protected $intFeeConcession;
		const FeeConcessionDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.admitted_date
		 * @var QDateTime dttAdmittedDate
		 */
		protected $dttAdmittedDate;
		const AdmittedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mfirst_name
		 * @var string strMfirstName
		 */
		protected $strMfirstName;
		const MfirstNameMaxLength = 255;
		const MfirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mmiddle_name
		 * @var string strMmiddleName
		 */
		protected $strMmiddleName;
		const MmiddleNameMaxLength = 255;
		const MmiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mlast_name
		 * @var string strMlastName
		 */
		protected $strMlastName;
		const MlastNameMaxLength = 255;
		const MlastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.old_name
		 * @var string strOldName
		 */
		protected $strOldName;
		const OldNameMaxLength = 45;
		const OldNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.reason_of_name_change
		 * @var string strReasonOfNameChange
		 */
		protected $strReasonOfNameChange;
		const ReasonOfNameChangeDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.university_reservation
		 * @var integer intUniversityReservation
		 */
		protected $intUniversityReservation;
		const UniversityReservationDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.father_first_name
		 * @var string strFatherFirstName
		 */
		protected $strFatherFirstName;
		const FatherFirstNameMaxLength = 255;
		const FatherFirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.father_middle_name
		 * @var string strFatherMiddleName
		 */
		protected $strFatherMiddleName;
		const FatherMiddleNameMaxLength = 255;
		const FatherMiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.father_last_name
		 * @var string strFatherLastName
		 */
		protected $strFatherLastName;
		const FatherLastNameMaxLength = 255;
		const FatherLastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mother_first_name
		 * @var string strMotherFirstName
		 */
		protected $strMotherFirstName;
		const MotherFirstNameMaxLength = 255;
		const MotherFirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mother_middle_name
		 * @var string strMotherMiddleName
		 */
		protected $strMotherMiddleName;
		const MotherMiddleNameMaxLength = 255;
		const MotherMiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.mother_last_name
		 * @var string strMotherLastName
		 */
		protected $strMotherLastName;
		const MotherLastNameMaxLength = 255;
		const MotherLastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.admission_mode
		 * @var integer intAdmissionMode
		 */
		protected $intAdmissionMode;
		const AdmissionModeDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.inquiry
		 * @var integer intInquiry
		 */
		protected $intInquiry;
		const InquiryDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.address_line1
		 * @var string strAddressLine1
		 */
		protected $strAddressLine1;
		const AddressLine1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.address_line2
		 * @var string strAddressLine2
		 */
		protected $strAddressLine2;
		const AddressLine2Default = null;


		/**
		 * Protected member variable that maps to the database column profile.gender
		 * @var integer intGender
		 */
		protected $intGender;
		const GenderDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.state
		 * @var integer intState
		 */
		protected $intState;
		const StateDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.state1
		 * @var integer intState1
		 */
		protected $intState1;
		const State1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.district
		 * @var integer intDistrict
		 */
		protected $intDistrict;
		const DistrictDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.district1
		 * @var integer intDistrict1
		 */
		protected $intDistrict1;
		const District1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.taluka
		 * @var integer intTaluka
		 */
		protected $intTaluka;
		const TalukaDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.taluka1
		 * @var integer intTaluka1
		 */
		protected $intTaluka1;
		const Taluka1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 255;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.city1
		 * @var string strCity1
		 */
		protected $strCity1;
		const City1MaxLength = 255;
		const City1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.zipcode
		 * @var string strZipcode
		 */
		protected $strZipcode;
		const ZipcodeMaxLength = 45;
		const ZipcodeDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.contact1
		 * @var string strContact1
		 */
		protected $strContact1;
		const Contact1MaxLength = 45;
		const Contact1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.contact2
		 * @var string strContact2
		 */
		protected $strContact2;
		const Contact2MaxLength = 45;
		const Contact2Default = null;


		/**
		 * Protected member variable that maps to the database column profile.email1
		 * @var string strEmail1
		 */
		protected $strEmail1;
		const Email1MaxLength = 45;
		const Email1Default = null;


		/**
		 * Protected member variable that maps to the database column profile.email2
		 * @var string strEmail2
		 */
		protected $strEmail2;
		const Email2MaxLength = 45;
		const Email2Default = null;


		/**
		 * Protected member variable that maps to the database column profile.dob
		 * @var QDateTime dttDob
		 */
		protected $dttDob;
		const DobDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.age
		 * @var string strAge
		 */
		protected $strAge;
		const AgeMaxLength = 45;
		const AgeDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.birth_place
		 * @var string strBirthPlace
		 */
		protected $strBirthPlace;
		const BirthPlaceMaxLength = 255;
		const BirthPlaceDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.guardian_annual_income
		 * @var string strGuardianAnnualIncome
		 */
		protected $strGuardianAnnualIncome;
		const GuardianAnnualIncomeMaxLength = 45;
		const GuardianAnnualIncomeDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.occupation
		 * @var string strOccupation
		 */
		protected $strOccupation;
		const OccupationMaxLength = 45;
		const OccupationDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.relation_of_applicant_with_guardian
		 * @var string strRelationOfApplicantWithGuardian
		 */
		protected $strRelationOfApplicantWithGuardian;
		const RelationOfApplicantWithGuardianMaxLength = 45;
		const RelationOfApplicantWithGuardianDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.cvc
		 * @var boolean blnCvc
		 */
		protected $blnCvc;
		const CvcDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.ncl
		 * @var boolean blnNcl
		 */
		protected $blnNcl;
		const NclDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.year
		 * @var integer intYear
		 */
		protected $intYear;
		const YearDefault = null;


		/**
		 * Protected member variable that maps to the database column profile.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


		/**
		 * Private member variable that stores a reference to a single ProfileHasQualifiedsubject object
		 * (of type ProfileHasQualifiedsubject), if this Profile object was restored with
		 * an expansion on the profile_has_qualifiedsubject association table.
		 * @var ProfileHasQualifiedsubject _objProfileHasQualifiedsubject;
		 */
		private $_objProfileHasQualifiedsubject;

		/**
		 * Private member variable that stores a reference to an array of ProfileHasQualifiedsubject objects
		 * (of type ProfileHasQualifiedsubject[]), if this Profile object was restored with
		 * an ExpandAsArray on the profile_has_qualifiedsubject association table.
		 * @var ProfileHasQualifiedsubject[] _objProfileHasQualifiedsubjectArray;
		 */
		private $_objProfileHasQualifiedsubjectArray = null;

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
		 * in the database column profile.idprofile.
		 *
		 * NOTE: Always use the IdprofileObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objIdprofileObject
		 */
		protected $objIdprofileObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.prefix.
		 *
		 * NOTE: Always use the PrefixObject property getter to correctly retrieve this Prefix object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Prefix objPrefixObject
		 */
		protected $objPrefixObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.marrtial_status.
		 *
		 * NOTE: Always use the MarrtialStatusObject property getter to correctly retrieve this MarrialStatus object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var MarrialStatus objMarrtialStatusObject
		 */
		protected $objMarrtialStatusObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.blood_group.
		 *
		 * NOTE: Always use the BloodGroupObject property getter to correctly retrieve this BloodGroup object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BloodGroup objBloodGroupObject
		 */
		protected $objBloodGroupObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.mother_tongue.
		 *
		 * NOTE: Always use the MotherTongueObject property getter to correctly retrieve this MotherTongue object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var MotherTongue objMotherTongueObject
		 */
		protected $objMotherTongueObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.religion.
		 *
		 * NOTE: Always use the ReligionObject property getter to correctly retrieve this Religion object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Religion objReligionObject
		 */
		protected $objReligionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.nationality.
		 *
		 * NOTE: Always use the NationalityObject property getter to correctly retrieve this Nationality object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Nationality objNationalityObject
		 */
		protected $objNationalityObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.course_of_addmission.
		 *
		 * NOTE: Always use the CourseOfAddmissionObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objCourseOfAddmissionObject
		 */
		protected $objCourseOfAddmissionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.handicaped_cat.
		 *
		 * NOTE: Always use the HandicapedCatObject property getter to correctly retrieve this HandicapedCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var HandicapedCat objHandicapedCatObject
		 */
		protected $objHandicapedCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.caste_cat.
		 *
		 * NOTE: Always use the CasteCatObject property getter to correctly retrieve this Cast object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cast objCasteCatObject
		 */
		protected $objCasteCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.caste.
		 *
		 * NOTE: Always use the CasteObject property getter to correctly retrieve this Cast object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cast objCasteObject
		 */
		protected $objCasteObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.education_title.
		 *
		 * NOTE: Always use the EducationTitleObject property getter to correctly retrieve this EducationTitle object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var EducationTitle objEducationTitleObject
		 */
		protected $objEducationTitleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.fee_concession.
		 *
		 * NOTE: Always use the FeeConcessionObject property getter to correctly retrieve this FeesConcession object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FeesConcession objFeeConcessionObject
		 */
		protected $objFeeConcessionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.university_reservation.
		 *
		 * NOTE: Always use the UniversityReservationObject property getter to correctly retrieve this UniversityReservation object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var UniversityReservation objUniversityReservationObject
		 */
		protected $objUniversityReservationObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.admission_mode.
		 *
		 * NOTE: Always use the AdmissionModeObject property getter to correctly retrieve this AdmissionMode object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AdmissionMode objAdmissionModeObject
		 */
		protected $objAdmissionModeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.inquiry.
		 *
		 * NOTE: Always use the InquiryObject property getter to correctly retrieve this Inquiry object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Inquiry objInquiryObject
		 */
		protected $objInquiryObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.gender.
		 *
		 * NOTE: Always use the GenderObject property getter to correctly retrieve this Gender object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Gender objGenderObject
		 */
		protected $objGenderObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.state.
		 *
		 * NOTE: Always use the StateObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objStateObject
		 */
		protected $objStateObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.state1.
		 *
		 * NOTE: Always use the State1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objState1Object
		 */
		protected $objState1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.district.
		 *
		 * NOTE: Always use the DistrictObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objDistrictObject
		 */
		protected $objDistrictObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.district1.
		 *
		 * NOTE: Always use the District1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objDistrict1Object
		 */
		protected $objDistrict1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.taluka.
		 *
		 * NOTE: Always use the TalukaObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objTalukaObject
		 */
		protected $objTalukaObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.taluka1.
		 *
		 * NOTE: Always use the Taluka1Object property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objTaluka1Object
		 */
		protected $objTaluka1Object;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.year.
		 *
		 * NOTE: Always use the YearObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objYearObject
		 */
		protected $objYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile.calender_year.
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
			$this->intIdprofile = Profile::IdprofileDefault;
			$this->intPrefix = Profile::PrefixDefault;
			$this->strFirstName = Profile::FirstNameDefault;
			$this->strMiddleName = Profile::MiddleNameDefault;
			$this->strLastName = Profile::LastNameDefault;
			$this->dttLeaveDate = (Profile::LeaveDateDefault === null)?null:new QDateTime(Profile::LeaveDateDefault);
			$this->intMarrtialStatus = Profile::MarrtialStatusDefault;
			$this->strHandicaped = Profile::HandicapedDefault;
			$this->strAdharNo = Profile::AdharNoDefault;
			$this->strAnnualFamilyIncome = Profile::AnnualFamilyIncomeDefault;
			$this->intBloodGroup = Profile::BloodGroupDefault;
			$this->intMotherTongue = Profile::MotherTongueDefault;
			$this->intReligion = Profile::ReligionDefault;
			$this->strDomicile = Profile::DomicileDefault;
			$this->intNationality = Profile::NationalityDefault;
			$this->intCourseOfAddmission = Profile::CourseOfAddmissionDefault;
			$this->intHandicapedCat = Profile::HandicapedCatDefault;
			$this->intCasteCat = Profile::CasteCatDefault;
			$this->intCaste = Profile::CasteDefault;
			$this->intEducationTitle = Profile::EducationTitleDefault;
			$this->intFeeConcession = Profile::FeeConcessionDefault;
			$this->dttAdmittedDate = (Profile::AdmittedDateDefault === null)?null:new QDateTime(Profile::AdmittedDateDefault);
			$this->strMfirstName = Profile::MfirstNameDefault;
			$this->strMmiddleName = Profile::MmiddleNameDefault;
			$this->strMlastName = Profile::MlastNameDefault;
			$this->strOldName = Profile::OldNameDefault;
			$this->strReasonOfNameChange = Profile::ReasonOfNameChangeDefault;
			$this->intUniversityReservation = Profile::UniversityReservationDefault;
			$this->strFatherFirstName = Profile::FatherFirstNameDefault;
			$this->strFatherMiddleName = Profile::FatherMiddleNameDefault;
			$this->strFatherLastName = Profile::FatherLastNameDefault;
			$this->strMotherFirstName = Profile::MotherFirstNameDefault;
			$this->strMotherMiddleName = Profile::MotherMiddleNameDefault;
			$this->strMotherLastName = Profile::MotherLastNameDefault;
			$this->intAdmissionMode = Profile::AdmissionModeDefault;
			$this->intInquiry = Profile::InquiryDefault;
			$this->strAddressLine1 = Profile::AddressLine1Default;
			$this->strAddressLine2 = Profile::AddressLine2Default;
			$this->intGender = Profile::GenderDefault;
			$this->intState = Profile::StateDefault;
			$this->intState1 = Profile::State1Default;
			$this->intDistrict = Profile::DistrictDefault;
			$this->intDistrict1 = Profile::District1Default;
			$this->intTaluka = Profile::TalukaDefault;
			$this->intTaluka1 = Profile::Taluka1Default;
			$this->strCity = Profile::CityDefault;
			$this->strCity1 = Profile::City1Default;
			$this->strZipcode = Profile::ZipcodeDefault;
			$this->strContact1 = Profile::Contact1Default;
			$this->strContact2 = Profile::Contact2Default;
			$this->strEmail1 = Profile::Email1Default;
			$this->strEmail2 = Profile::Email2Default;
			$this->dttDob = (Profile::DobDefault === null)?null:new QDateTime(Profile::DobDefault);
			$this->strAge = Profile::AgeDefault;
			$this->strBirthPlace = Profile::BirthPlaceDefault;
			$this->strGuardianAnnualIncome = Profile::GuardianAnnualIncomeDefault;
			$this->strOccupation = Profile::OccupationDefault;
			$this->strRelationOfApplicantWithGuardian = Profile::RelationOfApplicantWithGuardianDefault;
			$this->blnCvc = Profile::CvcDefault;
			$this->blnNcl = Profile::NclDefault;
			$this->intYear = Profile::YearDefault;
			$this->intCalenderYear = Profile::CalenderYearDefault;
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
		 * Load a Profile from PK Info
		 * @param integer $intIdprofile
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile
		 */
		public static function Load($intIdprofile, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Profile', $intIdprofile);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Profile::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Profile()->Idprofile, $intIdprofile)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Profiles
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Profile::QueryArray to perform the LoadAll query
			try {
				return Profile::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Profiles
		 * @return int
		 */
		public static function CountAll() {
			// Call Profile::QueryCount to perform the CountAll query
			return Profile::QueryCount(QQ::All());
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
			$objDatabase = Profile::GetDatabase();

			// Create/Build out the QueryBuilder object with Profile-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'profile');

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
				Profile::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('profile');

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
		 * Static Qcubed Query method to query for a single Profile object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Profile the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Profile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Profile object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Profile::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Profile::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Profile objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Profile[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Profile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Profile::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Profile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Profile objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Profile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Profile::GetDatabase();

			$strQuery = Profile::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/profile', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Profile::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Profile
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'profile';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idprofile', $strAliasPrefix . 'idprofile');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idprofile', $strAliasPrefix . 'idprofile');
			    $objBuilder->AddSelectItem($strTableName, 'prefix', $strAliasPrefix . 'prefix');
			    $objBuilder->AddSelectItem($strTableName, 'first_name', $strAliasPrefix . 'first_name');
			    $objBuilder->AddSelectItem($strTableName, 'middle_name', $strAliasPrefix . 'middle_name');
			    $objBuilder->AddSelectItem($strTableName, 'last_name', $strAliasPrefix . 'last_name');
			    $objBuilder->AddSelectItem($strTableName, 'leave_date', $strAliasPrefix . 'leave_date');
			    $objBuilder->AddSelectItem($strTableName, 'marrtial_status', $strAliasPrefix . 'marrtial_status');
			    $objBuilder->AddSelectItem($strTableName, 'handicaped', $strAliasPrefix . 'handicaped');
			    $objBuilder->AddSelectItem($strTableName, 'adhar_no', $strAliasPrefix . 'adhar_no');
			    $objBuilder->AddSelectItem($strTableName, 'annual_family_income', $strAliasPrefix . 'annual_family_income');
			    $objBuilder->AddSelectItem($strTableName, 'blood_group', $strAliasPrefix . 'blood_group');
			    $objBuilder->AddSelectItem($strTableName, 'mother_tongue', $strAliasPrefix . 'mother_tongue');
			    $objBuilder->AddSelectItem($strTableName, 'religion', $strAliasPrefix . 'religion');
			    $objBuilder->AddSelectItem($strTableName, 'domicile', $strAliasPrefix . 'domicile');
			    $objBuilder->AddSelectItem($strTableName, 'nationality', $strAliasPrefix . 'nationality');
			    $objBuilder->AddSelectItem($strTableName, 'course_of_addmission', $strAliasPrefix . 'course_of_addmission');
			    $objBuilder->AddSelectItem($strTableName, 'handicaped_cat', $strAliasPrefix . 'handicaped_cat');
			    $objBuilder->AddSelectItem($strTableName, 'caste_cat', $strAliasPrefix . 'caste_cat');
			    $objBuilder->AddSelectItem($strTableName, 'caste', $strAliasPrefix . 'caste');
			    $objBuilder->AddSelectItem($strTableName, 'education_title', $strAliasPrefix . 'education_title');
			    $objBuilder->AddSelectItem($strTableName, 'fee_concession', $strAliasPrefix . 'fee_concession');
			    $objBuilder->AddSelectItem($strTableName, 'admitted_date', $strAliasPrefix . 'admitted_date');
			    $objBuilder->AddSelectItem($strTableName, 'mfirst_name', $strAliasPrefix . 'mfirst_name');
			    $objBuilder->AddSelectItem($strTableName, 'mmiddle_name', $strAliasPrefix . 'mmiddle_name');
			    $objBuilder->AddSelectItem($strTableName, 'mlast_name', $strAliasPrefix . 'mlast_name');
			    $objBuilder->AddSelectItem($strTableName, 'old_name', $strAliasPrefix . 'old_name');
			    $objBuilder->AddSelectItem($strTableName, 'reason_of_name_change', $strAliasPrefix . 'reason_of_name_change');
			    $objBuilder->AddSelectItem($strTableName, 'university_reservation', $strAliasPrefix . 'university_reservation');
			    $objBuilder->AddSelectItem($strTableName, 'father_first_name', $strAliasPrefix . 'father_first_name');
			    $objBuilder->AddSelectItem($strTableName, 'father_middle_name', $strAliasPrefix . 'father_middle_name');
			    $objBuilder->AddSelectItem($strTableName, 'father_last_name', $strAliasPrefix . 'father_last_name');
			    $objBuilder->AddSelectItem($strTableName, 'mother_first_name', $strAliasPrefix . 'mother_first_name');
			    $objBuilder->AddSelectItem($strTableName, 'mother_middle_name', $strAliasPrefix . 'mother_middle_name');
			    $objBuilder->AddSelectItem($strTableName, 'mother_last_name', $strAliasPrefix . 'mother_last_name');
			    $objBuilder->AddSelectItem($strTableName, 'admission_mode', $strAliasPrefix . 'admission_mode');
			    $objBuilder->AddSelectItem($strTableName, 'inquiry', $strAliasPrefix . 'inquiry');
			    $objBuilder->AddSelectItem($strTableName, 'address_line1', $strAliasPrefix . 'address_line1');
			    $objBuilder->AddSelectItem($strTableName, 'address_line2', $strAliasPrefix . 'address_line2');
			    $objBuilder->AddSelectItem($strTableName, 'gender', $strAliasPrefix . 'gender');
			    $objBuilder->AddSelectItem($strTableName, 'state', $strAliasPrefix . 'state');
			    $objBuilder->AddSelectItem($strTableName, 'state1', $strAliasPrefix . 'state1');
			    $objBuilder->AddSelectItem($strTableName, 'district', $strAliasPrefix . 'district');
			    $objBuilder->AddSelectItem($strTableName, 'district1', $strAliasPrefix . 'district1');
			    $objBuilder->AddSelectItem($strTableName, 'taluka', $strAliasPrefix . 'taluka');
			    $objBuilder->AddSelectItem($strTableName, 'taluka1', $strAliasPrefix . 'taluka1');
			    $objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			    $objBuilder->AddSelectItem($strTableName, 'city1', $strAliasPrefix . 'city1');
			    $objBuilder->AddSelectItem($strTableName, 'zipcode', $strAliasPrefix . 'zipcode');
			    $objBuilder->AddSelectItem($strTableName, 'contact1', $strAliasPrefix . 'contact1');
			    $objBuilder->AddSelectItem($strTableName, 'contact2', $strAliasPrefix . 'contact2');
			    $objBuilder->AddSelectItem($strTableName, 'email1', $strAliasPrefix . 'email1');
			    $objBuilder->AddSelectItem($strTableName, 'email2', $strAliasPrefix . 'email2');
			    $objBuilder->AddSelectItem($strTableName, 'dob', $strAliasPrefix . 'dob');
			    $objBuilder->AddSelectItem($strTableName, 'age', $strAliasPrefix . 'age');
			    $objBuilder->AddSelectItem($strTableName, 'birth_place', $strAliasPrefix . 'birth_place');
			    $objBuilder->AddSelectItem($strTableName, 'guardian_annual_income', $strAliasPrefix . 'guardian_annual_income');
			    $objBuilder->AddSelectItem($strTableName, 'occupation', $strAliasPrefix . 'occupation');
			    $objBuilder->AddSelectItem($strTableName, 'relation_of_applicant_with_guardian', $strAliasPrefix . 'relation_of_applicant_with_guardian');
			    $objBuilder->AddSelectItem($strTableName, 'cvc', $strAliasPrefix . 'cvc');
			    $objBuilder->AddSelectItem($strTableName, 'ncl', $strAliasPrefix . 'ncl');
			    $objBuilder->AddSelectItem($strTableName, 'year', $strAliasPrefix . 'year');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Profile from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Profile::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Profile
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdprofile == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'profile__';


						// Expanding reverse references: ProfileHasQualifiedsubject
						$strAlias = $strAliasPrefix . 'profilehasqualifiedsubject__idprofile_has_qualifiedsubject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileHasQualifiedsubjectArray)
								$objPreviousItem->_objProfileHasQualifiedsubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileHasQualifiedsubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileHasQualifiedsubjectArray;
								$objChildItem = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileHasQualifiedsubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileHasQualifiedsubjectArray[] = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'profile__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Profile object
			$objToReturn = new Profile();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdprofile = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intIdprofile = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'prefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPrefix = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'first_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'middle_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'last_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'leave_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttLeaveDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'marrtial_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMarrtialStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'handicaped';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strHandicaped = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'adhar_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAdharNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'annual_family_income';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAnnualFamilyIncome = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'blood_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBloodGroup = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'mother_tongue';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMotherTongue = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'religion';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intReligion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'domicile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDomicile = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'nationality';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intNationality = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'course_of_addmission';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCourseOfAddmission = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'handicaped_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intHandicapedCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'caste_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCasteCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'caste';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCaste = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'education_title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intEducationTitle = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fee_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFeeConcession = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'admitted_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttAdmittedDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'mfirst_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMfirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mmiddle_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMmiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mlast_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMlastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'old_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOldName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'reason_of_name_change';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strReasonOfNameChange = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'university_reservation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUniversityReservation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'father_first_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFatherFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'father_middle_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFatherMiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'father_last_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFatherLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mother_first_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMotherFirstName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mother_middle_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMotherMiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mother_last_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMotherLastName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'admission_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAdmissionMode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'inquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intInquiry = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'address_line1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddressLine1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'address_line2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddressLine2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'gender';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGender = $objDbRow->GetColumn($strAliasName, 'Integer');
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
			$strAlias = $strAliasPrefix . 'zipcode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strZipcode = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
			$strAlias = $strAliasPrefix . 'dob';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDob = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'age';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAge = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'birth_place';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBirthPlace = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'guardian_annual_income';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGuardianAnnualIncome = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'occupation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOccupation = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'relation_of_applicant_with_guardian';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRelationOfApplicantWithGuardian = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'cvc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCvc = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'ncl';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnNcl = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idprofile != $objPreviousItem->Idprofile) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objProfileHasQualifiedsubjectArray);
					$cnt = count($objToReturn->_objProfileHasQualifiedsubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileHasQualifiedsubjectArray, $objToReturn->_objProfileHasQualifiedsubjectArray)) {
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
				$strAliasPrefix = 'profile__';

			// Check for IdprofileObject Early Binding
			$strAlias = $strAliasPrefix . 'idprofile__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdprofileObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'idprofile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PrefixObject Early Binding
			$strAlias = $strAliasPrefix . 'prefix__idprefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPrefixObject = Prefix::InstantiateDbRow($objDbRow, $strAliasPrefix . 'prefix__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for MarrtialStatusObject Early Binding
			$strAlias = $strAliasPrefix . 'marrtial_status__idmarrial_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMarrtialStatusObject = MarrialStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marrtial_status__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BloodGroupObject Early Binding
			$strAlias = $strAliasPrefix . 'blood_group__idblood_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBloodGroupObject = BloodGroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'blood_group__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for MotherTongueObject Early Binding
			$strAlias = $strAliasPrefix . 'mother_tongue__idmother_tongue';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMotherTongueObject = MotherTongue::InstantiateDbRow($objDbRow, $strAliasPrefix . 'mother_tongue__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ReligionObject Early Binding
			$strAlias = $strAliasPrefix . 'religion__idreligion';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReligionObject = Religion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'religion__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for NationalityObject Early Binding
			$strAlias = $strAliasPrefix . 'nationality__idnationality';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objNationalityObject = Nationality::InstantiateDbRow($objDbRow, $strAliasPrefix . 'nationality__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CourseOfAddmissionObject Early Binding
			$strAlias = $strAliasPrefix . 'course_of_addmission__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourseOfAddmissionObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'course_of_addmission__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for HandicapedCatObject Early Binding
			$strAlias = $strAliasPrefix . 'handicaped_cat__idhandicaped_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objHandicapedCatObject = HandicapedCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'handicaped_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CasteCatObject Early Binding
			$strAlias = $strAliasPrefix . 'caste_cat__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCasteCatObject = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'caste_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CasteObject Early Binding
			$strAlias = $strAliasPrefix . 'caste__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCasteObject = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'caste__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for EducationTitleObject Early Binding
			$strAlias = $strAliasPrefix . 'education_title__ideducation_title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEducationTitleObject = EducationTitle::InstantiateDbRow($objDbRow, $strAliasPrefix . 'education_title__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FeeConcessionObject Early Binding
			$strAlias = $strAliasPrefix . 'fee_concession__idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFeeConcessionObject = FeesConcession::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fee_concession__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for UniversityReservationObject Early Binding
			$strAlias = $strAliasPrefix . 'university_reservation__iduniversity_reservation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUniversityReservationObject = UniversityReservation::InstantiateDbRow($objDbRow, $strAliasPrefix . 'university_reservation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AdmissionModeObject Early Binding
			$strAlias = $strAliasPrefix . 'admission_mode__idadmission_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAdmissionModeObject = AdmissionMode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'admission_mode__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for InquiryObject Early Binding
			$strAlias = $strAliasPrefix . 'inquiry__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objInquiryObject = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for GenderObject Early Binding
			$strAlias = $strAliasPrefix . 'gender__idgender';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGenderObject = Gender::InstantiateDbRow($objDbRow, $strAliasPrefix . 'gender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

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

			// Check for YearObject Early Binding
			$strAlias = $strAliasPrefix . 'year__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objYearObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for ProfileHasQualifiedsubject Virtual Binding
			$strAlias = $strAliasPrefix . 'profilehasqualifiedsubject__idprofile_has_qualifiedsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileHasQualifiedsubjectArray)
				$objToReturn->_objProfileHasQualifiedsubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileHasQualifiedsubjectArray[] = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileHasQualifiedsubject = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Profiles from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Profile[]
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
					$objItem = Profile::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Profile::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Profile object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Profile next row resulting from the query
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
			return Profile::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Profile object,
		 * by Idprofile Index(es)
		 * @param integer $intIdprofile
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile
		*/
		public static function LoadByIdprofile($intIdprofile, $objOptionalClauses = null) {
			return Profile::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Profile()->Idprofile, $intIdprofile)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by MotherTongue Index(es)
		 * @param integer $intMotherTongue
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByMotherTongue($intMotherTongue, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByMotherTongue query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->MotherTongue, $intMotherTongue),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by MotherTongue Index(es)
		 * @param integer $intMotherTongue
		 * @return int
		*/
		public static function CountByMotherTongue($intMotherTongue) {
			// Call Profile::QueryCount to perform the CountByMotherTongue query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->MotherTongue, $intMotherTongue)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by BloodGroup Index(es)
		 * @param integer $intBloodGroup
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByBloodGroup($intBloodGroup, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByBloodGroup query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->BloodGroup, $intBloodGroup),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by BloodGroup Index(es)
		 * @param integer $intBloodGroup
		 * @return int
		*/
		public static function CountByBloodGroup($intBloodGroup) {
			// Call Profile::QueryCount to perform the CountByBloodGroup query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->BloodGroup, $intBloodGroup)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Religion Index(es)
		 * @param integer $intReligion
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByReligion($intReligion, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByReligion query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Religion, $intReligion),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Religion Index(es)
		 * @param integer $intReligion
		 * @return int
		*/
		public static function CountByReligion($intReligion) {
			// Call Profile::QueryCount to perform the CountByReligion query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Religion, $intReligion)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Nationality Index(es)
		 * @param integer $intNationality
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByNationality($intNationality, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByNationality query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Nationality, $intNationality),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Nationality Index(es)
		 * @param integer $intNationality
		 * @return int
		*/
		public static function CountByNationality($intNationality) {
			// Call Profile::QueryCount to perform the CountByNationality query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Nationality, $intNationality)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by MarrtialStatus Index(es)
		 * @param integer $intMarrtialStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByMarrtialStatus($intMarrtialStatus, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByMarrtialStatus query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->MarrtialStatus, $intMarrtialStatus),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by MarrtialStatus Index(es)
		 * @param integer $intMarrtialStatus
		 * @return int
		*/
		public static function CountByMarrtialStatus($intMarrtialStatus) {
			// Call Profile::QueryCount to perform the CountByMarrtialStatus query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->MarrtialStatus, $intMarrtialStatus)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by CourseOfAddmission Index(es)
		 * @param integer $intCourseOfAddmission
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByCourseOfAddmission($intCourseOfAddmission, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByCourseOfAddmission query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->CourseOfAddmission, $intCourseOfAddmission),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by CourseOfAddmission Index(es)
		 * @param integer $intCourseOfAddmission
		 * @return int
		*/
		public static function CountByCourseOfAddmission($intCourseOfAddmission) {
			// Call Profile::QueryCount to perform the CountByCourseOfAddmission query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->CourseOfAddmission, $intCourseOfAddmission)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by HandicapedCat Index(es)
		 * @param integer $intHandicapedCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByHandicapedCat($intHandicapedCat, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByHandicapedCat query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->HandicapedCat, $intHandicapedCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by HandicapedCat Index(es)
		 * @param integer $intHandicapedCat
		 * @return int
		*/
		public static function CountByHandicapedCat($intHandicapedCat) {
			// Call Profile::QueryCount to perform the CountByHandicapedCat query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->HandicapedCat, $intHandicapedCat)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Caste Index(es)
		 * @param integer $intCaste
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByCaste($intCaste, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByCaste query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Caste, $intCaste),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Caste Index(es)
		 * @param integer $intCaste
		 * @return int
		*/
		public static function CountByCaste($intCaste) {
			// Call Profile::QueryCount to perform the CountByCaste query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Caste, $intCaste)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by CasteCat Index(es)
		 * @param integer $intCasteCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByCasteCat($intCasteCat, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByCasteCat query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->CasteCat, $intCasteCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by CasteCat Index(es)
		 * @param integer $intCasteCat
		 * @return int
		*/
		public static function CountByCasteCat($intCasteCat) {
			// Call Profile::QueryCount to perform the CountByCasteCat query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->CasteCat, $intCasteCat)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by EducationTitle Index(es)
		 * @param integer $intEducationTitle
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByEducationTitle($intEducationTitle, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByEducationTitle query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->EducationTitle, $intEducationTitle),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by EducationTitle Index(es)
		 * @param integer $intEducationTitle
		 * @return int
		*/
		public static function CountByEducationTitle($intEducationTitle) {
			// Call Profile::QueryCount to perform the CountByEducationTitle query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->EducationTitle, $intEducationTitle)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by FeeConcession Index(es)
		 * @param integer $intFeeConcession
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByFeeConcession($intFeeConcession, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByFeeConcession query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->FeeConcession, $intFeeConcession),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by FeeConcession Index(es)
		 * @param integer $intFeeConcession
		 * @return int
		*/
		public static function CountByFeeConcession($intFeeConcession) {
			// Call Profile::QueryCount to perform the CountByFeeConcession query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->FeeConcession, $intFeeConcession)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by AdmissionMode Index(es)
		 * @param integer $intAdmissionMode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByAdmissionMode($intAdmissionMode, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByAdmissionMode query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->AdmissionMode, $intAdmissionMode),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by AdmissionMode Index(es)
		 * @param integer $intAdmissionMode
		 * @return int
		*/
		public static function CountByAdmissionMode($intAdmissionMode) {
			// Call Profile::QueryCount to perform the CountByAdmissionMode query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->AdmissionMode, $intAdmissionMode)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by UniversityReservation Index(es)
		 * @param integer $intUniversityReservation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByUniversityReservation($intUniversityReservation, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByUniversityReservation query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->UniversityReservation, $intUniversityReservation),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by UniversityReservation Index(es)
		 * @param integer $intUniversityReservation
		 * @return int
		*/
		public static function CountByUniversityReservation($intUniversityReservation) {
			// Call Profile::QueryCount to perform the CountByUniversityReservation query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->UniversityReservation, $intUniversityReservation)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Prefix Index(es)
		 * @param integer $intPrefix
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByPrefix($intPrefix, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByPrefix query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Prefix, $intPrefix),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Prefix Index(es)
		 * @param integer $intPrefix
		 * @return int
		*/
		public static function CountByPrefix($intPrefix) {
			// Call Profile::QueryCount to perform the CountByPrefix query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Prefix, $intPrefix)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Inquiry Index(es)
		 * @param integer $intInquiry
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByInquiry($intInquiry, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByInquiry query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Inquiry, $intInquiry),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Inquiry Index(es)
		 * @param integer $intInquiry
		 * @return int
		*/
		public static function CountByInquiry($intInquiry) {
			// Call Profile::QueryCount to perform the CountByInquiry query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Inquiry, $intInquiry)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Gender Index(es)
		 * @param integer $intGender
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByGender($intGender, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByGender query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Gender, $intGender),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Gender Index(es)
		 * @param integer $intGender
		 * @return int
		*/
		public static function CountByGender($intGender) {
			// Call Profile::QueryCount to perform the CountByGender query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Gender, $intGender)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by State Index(es)
		 * @param integer $intState
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByState($intState, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByState query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->State, $intState),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by State Index(es)
		 * @param integer $intState
		 * @return int
		*/
		public static function CountByState($intState) {
			// Call Profile::QueryCount to perform the CountByState query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->State, $intState)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by State1 Index(es)
		 * @param integer $intState1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByState1($intState1, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByState1 query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->State1, $intState1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by State1 Index(es)
		 * @param integer $intState1
		 * @return int
		*/
		public static function CountByState1($intState1) {
			// Call Profile::QueryCount to perform the CountByState1 query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->State1, $intState1)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by District Index(es)
		 * @param integer $intDistrict
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByDistrict($intDistrict, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByDistrict query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->District, $intDistrict),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by District Index(es)
		 * @param integer $intDistrict
		 * @return int
		*/
		public static function CountByDistrict($intDistrict) {
			// Call Profile::QueryCount to perform the CountByDistrict query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->District, $intDistrict)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by District1 Index(es)
		 * @param integer $intDistrict1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByDistrict1($intDistrict1, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByDistrict1 query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->District1, $intDistrict1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by District1 Index(es)
		 * @param integer $intDistrict1
		 * @return int
		*/
		public static function CountByDistrict1($intDistrict1) {
			// Call Profile::QueryCount to perform the CountByDistrict1 query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->District1, $intDistrict1)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Taluka Index(es)
		 * @param integer $intTaluka
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByTaluka($intTaluka, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByTaluka query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Taluka, $intTaluka),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Taluka Index(es)
		 * @param integer $intTaluka
		 * @return int
		*/
		public static function CountByTaluka($intTaluka) {
			// Call Profile::QueryCount to perform the CountByTaluka query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Taluka, $intTaluka)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Taluka1 Index(es)
		 * @param integer $intTaluka1
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByTaluka1($intTaluka1, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByTaluka1 query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Taluka1, $intTaluka1),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Taluka1 Index(es)
		 * @param integer $intTaluka1
		 * @return int
		*/
		public static function CountByTaluka1($intTaluka1) {
			// Call Profile::QueryCount to perform the CountByTaluka1 query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Taluka1, $intTaluka1)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by Year Index(es)
		 * @param integer $intYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByYear($intYear, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByYear query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->Year, $intYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by Year Index(es)
		 * @param integer $intYear
		 * @return int
		*/
		public static function CountByYear($intYear) {
			// Call Profile::QueryCount to perform the CountByYear query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->Year, $intYear)
			);
		}

		/**
		 * Load an array of Profile objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call Profile::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return Profile::QueryArray(
					QQ::Equal(QQN::Profile()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Profiles
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call Profile::QueryCount to perform the CountByCalenderYear query
			return Profile::QueryCount(
				QQ::Equal(QQN::Profile()->CalenderYear, $intCalenderYear)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Profile
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `profile` (
							`idprofile`,
							`prefix`,
							`first_name`,
							`middle_name`,
							`last_name`,
							`leave_date`,
							`marrtial_status`,
							`handicaped`,
							`adhar_no`,
							`annual_family_income`,
							`blood_group`,
							`mother_tongue`,
							`religion`,
							`domicile`,
							`nationality`,
							`course_of_addmission`,
							`handicaped_cat`,
							`caste_cat`,
							`caste`,
							`education_title`,
							`fee_concession`,
							`admitted_date`,
							`mfirst_name`,
							`mmiddle_name`,
							`mlast_name`,
							`old_name`,
							`reason_of_name_change`,
							`university_reservation`,
							`father_first_name`,
							`father_middle_name`,
							`father_last_name`,
							`mother_first_name`,
							`mother_middle_name`,
							`mother_last_name`,
							`admission_mode`,
							`inquiry`,
							`address_line1`,
							`address_line2`,
							`gender`,
							`state`,
							`state1`,
							`district`,
							`district1`,
							`taluka`,
							`taluka1`,
							`city`,
							`city1`,
							`zipcode`,
							`contact1`,
							`contact2`,
							`email1`,
							`email2`,
							`dob`,
							`age`,
							`birth_place`,
							`guardian_annual_income`,
							`occupation`,
							`relation_of_applicant_with_guardian`,
							`cvc`,
							`ncl`,
							`year`,
							`calender_year`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdprofile) . ',
							' . $objDatabase->SqlVariable($this->intPrefix) . ',
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->dttLeaveDate) . ',
							' . $objDatabase->SqlVariable($this->intMarrtialStatus) . ',
							' . $objDatabase->SqlVariable($this->strHandicaped) . ',
							' . $objDatabase->SqlVariable($this->strAdharNo) . ',
							' . $objDatabase->SqlVariable($this->strAnnualFamilyIncome) . ',
							' . $objDatabase->SqlVariable($this->intBloodGroup) . ',
							' . $objDatabase->SqlVariable($this->intMotherTongue) . ',
							' . $objDatabase->SqlVariable($this->intReligion) . ',
							' . $objDatabase->SqlVariable($this->strDomicile) . ',
							' . $objDatabase->SqlVariable($this->intNationality) . ',
							' . $objDatabase->SqlVariable($this->intCourseOfAddmission) . ',
							' . $objDatabase->SqlVariable($this->intHandicapedCat) . ',
							' . $objDatabase->SqlVariable($this->intCasteCat) . ',
							' . $objDatabase->SqlVariable($this->intCaste) . ',
							' . $objDatabase->SqlVariable($this->intEducationTitle) . ',
							' . $objDatabase->SqlVariable($this->intFeeConcession) . ',
							' . $objDatabase->SqlVariable($this->dttAdmittedDate) . ',
							' . $objDatabase->SqlVariable($this->strMfirstName) . ',
							' . $objDatabase->SqlVariable($this->strMmiddleName) . ',
							' . $objDatabase->SqlVariable($this->strMlastName) . ',
							' . $objDatabase->SqlVariable($this->strOldName) . ',
							' . $objDatabase->SqlVariable($this->strReasonOfNameChange) . ',
							' . $objDatabase->SqlVariable($this->intUniversityReservation) . ',
							' . $objDatabase->SqlVariable($this->strFatherFirstName) . ',
							' . $objDatabase->SqlVariable($this->strFatherMiddleName) . ',
							' . $objDatabase->SqlVariable($this->strFatherLastName) . ',
							' . $objDatabase->SqlVariable($this->strMotherFirstName) . ',
							' . $objDatabase->SqlVariable($this->strMotherMiddleName) . ',
							' . $objDatabase->SqlVariable($this->strMotherLastName) . ',
							' . $objDatabase->SqlVariable($this->intAdmissionMode) . ',
							' . $objDatabase->SqlVariable($this->intInquiry) . ',
							' . $objDatabase->SqlVariable($this->strAddressLine1) . ',
							' . $objDatabase->SqlVariable($this->strAddressLine2) . ',
							' . $objDatabase->SqlVariable($this->intGender) . ',
							' . $objDatabase->SqlVariable($this->intState) . ',
							' . $objDatabase->SqlVariable($this->intState1) . ',
							' . $objDatabase->SqlVariable($this->intDistrict) . ',
							' . $objDatabase->SqlVariable($this->intDistrict1) . ',
							' . $objDatabase->SqlVariable($this->intTaluka) . ',
							' . $objDatabase->SqlVariable($this->intTaluka1) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strCity1) . ',
							' . $objDatabase->SqlVariable($this->strZipcode) . ',
							' . $objDatabase->SqlVariable($this->strContact1) . ',
							' . $objDatabase->SqlVariable($this->strContact2) . ',
							' . $objDatabase->SqlVariable($this->strEmail1) . ',
							' . $objDatabase->SqlVariable($this->strEmail2) . ',
							' . $objDatabase->SqlVariable($this->dttDob) . ',
							' . $objDatabase->SqlVariable($this->strAge) . ',
							' . $objDatabase->SqlVariable($this->strBirthPlace) . ',
							' . $objDatabase->SqlVariable($this->strGuardianAnnualIncome) . ',
							' . $objDatabase->SqlVariable($this->strOccupation) . ',
							' . $objDatabase->SqlVariable($this->strRelationOfApplicantWithGuardian) . ',
							' . $objDatabase->SqlVariable($this->blnCvc) . ',
							' . $objDatabase->SqlVariable($this->blnNcl) . ',
							' . $objDatabase->SqlVariable($this->intYear) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`profile`
						SET
							`idprofile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . ',
							`prefix` = ' . $objDatabase->SqlVariable($this->intPrefix) . ',
							`first_name` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`middle_name` = ' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							`last_name` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
							`leave_date` = ' . $objDatabase->SqlVariable($this->dttLeaveDate) . ',
							`marrtial_status` = ' . $objDatabase->SqlVariable($this->intMarrtialStatus) . ',
							`handicaped` = ' . $objDatabase->SqlVariable($this->strHandicaped) . ',
							`adhar_no` = ' . $objDatabase->SqlVariable($this->strAdharNo) . ',
							`annual_family_income` = ' . $objDatabase->SqlVariable($this->strAnnualFamilyIncome) . ',
							`blood_group` = ' . $objDatabase->SqlVariable($this->intBloodGroup) . ',
							`mother_tongue` = ' . $objDatabase->SqlVariable($this->intMotherTongue) . ',
							`religion` = ' . $objDatabase->SqlVariable($this->intReligion) . ',
							`domicile` = ' . $objDatabase->SqlVariable($this->strDomicile) . ',
							`nationality` = ' . $objDatabase->SqlVariable($this->intNationality) . ',
							`course_of_addmission` = ' . $objDatabase->SqlVariable($this->intCourseOfAddmission) . ',
							`handicaped_cat` = ' . $objDatabase->SqlVariable($this->intHandicapedCat) . ',
							`caste_cat` = ' . $objDatabase->SqlVariable($this->intCasteCat) . ',
							`caste` = ' . $objDatabase->SqlVariable($this->intCaste) . ',
							`education_title` = ' . $objDatabase->SqlVariable($this->intEducationTitle) . ',
							`fee_concession` = ' . $objDatabase->SqlVariable($this->intFeeConcession) . ',
							`admitted_date` = ' . $objDatabase->SqlVariable($this->dttAdmittedDate) . ',
							`mfirst_name` = ' . $objDatabase->SqlVariable($this->strMfirstName) . ',
							`mmiddle_name` = ' . $objDatabase->SqlVariable($this->strMmiddleName) . ',
							`mlast_name` = ' . $objDatabase->SqlVariable($this->strMlastName) . ',
							`old_name` = ' . $objDatabase->SqlVariable($this->strOldName) . ',
							`reason_of_name_change` = ' . $objDatabase->SqlVariable($this->strReasonOfNameChange) . ',
							`university_reservation` = ' . $objDatabase->SqlVariable($this->intUniversityReservation) . ',
							`father_first_name` = ' . $objDatabase->SqlVariable($this->strFatherFirstName) . ',
							`father_middle_name` = ' . $objDatabase->SqlVariable($this->strFatherMiddleName) . ',
							`father_last_name` = ' . $objDatabase->SqlVariable($this->strFatherLastName) . ',
							`mother_first_name` = ' . $objDatabase->SqlVariable($this->strMotherFirstName) . ',
							`mother_middle_name` = ' . $objDatabase->SqlVariable($this->strMotherMiddleName) . ',
							`mother_last_name` = ' . $objDatabase->SqlVariable($this->strMotherLastName) . ',
							`admission_mode` = ' . $objDatabase->SqlVariable($this->intAdmissionMode) . ',
							`inquiry` = ' . $objDatabase->SqlVariable($this->intInquiry) . ',
							`address_line1` = ' . $objDatabase->SqlVariable($this->strAddressLine1) . ',
							`address_line2` = ' . $objDatabase->SqlVariable($this->strAddressLine2) . ',
							`gender` = ' . $objDatabase->SqlVariable($this->intGender) . ',
							`state` = ' . $objDatabase->SqlVariable($this->intState) . ',
							`state1` = ' . $objDatabase->SqlVariable($this->intState1) . ',
							`district` = ' . $objDatabase->SqlVariable($this->intDistrict) . ',
							`district1` = ' . $objDatabase->SqlVariable($this->intDistrict1) . ',
							`taluka` = ' . $objDatabase->SqlVariable($this->intTaluka) . ',
							`taluka1` = ' . $objDatabase->SqlVariable($this->intTaluka1) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`city1` = ' . $objDatabase->SqlVariable($this->strCity1) . ',
							`zipcode` = ' . $objDatabase->SqlVariable($this->strZipcode) . ',
							`contact1` = ' . $objDatabase->SqlVariable($this->strContact1) . ',
							`contact2` = ' . $objDatabase->SqlVariable($this->strContact2) . ',
							`email1` = ' . $objDatabase->SqlVariable($this->strEmail1) . ',
							`email2` = ' . $objDatabase->SqlVariable($this->strEmail2) . ',
							`dob` = ' . $objDatabase->SqlVariable($this->dttDob) . ',
							`age` = ' . $objDatabase->SqlVariable($this->strAge) . ',
							`birth_place` = ' . $objDatabase->SqlVariable($this->strBirthPlace) . ',
							`guardian_annual_income` = ' . $objDatabase->SqlVariable($this->strGuardianAnnualIncome) . ',
							`occupation` = ' . $objDatabase->SqlVariable($this->strOccupation) . ',
							`relation_of_applicant_with_guardian` = ' . $objDatabase->SqlVariable($this->strRelationOfApplicantWithGuardian) . ',
							`cvc` = ' . $objDatabase->SqlVariable($this->blnCvc) . ',
							`ncl` = ' . $objDatabase->SqlVariable($this->blnNcl) . ',
							`year` = ' . $objDatabase->SqlVariable($this->intYear) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . '
						WHERE
							`idprofile` = ' . $objDatabase->SqlVariable($this->__intIdprofile) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intIdprofile = $this->intIdprofile;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this Profile
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdprofile)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Profile with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Profile ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Profile', $this->intIdprofile);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Profiles
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate profile table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `profile`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Profile from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Profile object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Profile::Load($this->intIdprofile);

			// Update $this's local variables to match
			$this->Idprofile = $objReloaded->Idprofile;
			$this->__intIdprofile = $this->intIdprofile;
			$this->Prefix = $objReloaded->Prefix;
			$this->strFirstName = $objReloaded->strFirstName;
			$this->strMiddleName = $objReloaded->strMiddleName;
			$this->strLastName = $objReloaded->strLastName;
			$this->dttLeaveDate = $objReloaded->dttLeaveDate;
			$this->MarrtialStatus = $objReloaded->MarrtialStatus;
			$this->strHandicaped = $objReloaded->strHandicaped;
			$this->strAdharNo = $objReloaded->strAdharNo;
			$this->strAnnualFamilyIncome = $objReloaded->strAnnualFamilyIncome;
			$this->BloodGroup = $objReloaded->BloodGroup;
			$this->MotherTongue = $objReloaded->MotherTongue;
			$this->Religion = $objReloaded->Religion;
			$this->strDomicile = $objReloaded->strDomicile;
			$this->Nationality = $objReloaded->Nationality;
			$this->CourseOfAddmission = $objReloaded->CourseOfAddmission;
			$this->HandicapedCat = $objReloaded->HandicapedCat;
			$this->CasteCat = $objReloaded->CasteCat;
			$this->Caste = $objReloaded->Caste;
			$this->EducationTitle = $objReloaded->EducationTitle;
			$this->FeeConcession = $objReloaded->FeeConcession;
			$this->dttAdmittedDate = $objReloaded->dttAdmittedDate;
			$this->strMfirstName = $objReloaded->strMfirstName;
			$this->strMmiddleName = $objReloaded->strMmiddleName;
			$this->strMlastName = $objReloaded->strMlastName;
			$this->strOldName = $objReloaded->strOldName;
			$this->strReasonOfNameChange = $objReloaded->strReasonOfNameChange;
			$this->UniversityReservation = $objReloaded->UniversityReservation;
			$this->strFatherFirstName = $objReloaded->strFatherFirstName;
			$this->strFatherMiddleName = $objReloaded->strFatherMiddleName;
			$this->strFatherLastName = $objReloaded->strFatherLastName;
			$this->strMotherFirstName = $objReloaded->strMotherFirstName;
			$this->strMotherMiddleName = $objReloaded->strMotherMiddleName;
			$this->strMotherLastName = $objReloaded->strMotherLastName;
			$this->AdmissionMode = $objReloaded->AdmissionMode;
			$this->Inquiry = $objReloaded->Inquiry;
			$this->strAddressLine1 = $objReloaded->strAddressLine1;
			$this->strAddressLine2 = $objReloaded->strAddressLine2;
			$this->Gender = $objReloaded->Gender;
			$this->State = $objReloaded->State;
			$this->State1 = $objReloaded->State1;
			$this->District = $objReloaded->District;
			$this->District1 = $objReloaded->District1;
			$this->Taluka = $objReloaded->Taluka;
			$this->Taluka1 = $objReloaded->Taluka1;
			$this->strCity = $objReloaded->strCity;
			$this->strCity1 = $objReloaded->strCity1;
			$this->strZipcode = $objReloaded->strZipcode;
			$this->strContact1 = $objReloaded->strContact1;
			$this->strContact2 = $objReloaded->strContact2;
			$this->strEmail1 = $objReloaded->strEmail1;
			$this->strEmail2 = $objReloaded->strEmail2;
			$this->dttDob = $objReloaded->dttDob;
			$this->strAge = $objReloaded->strAge;
			$this->strBirthPlace = $objReloaded->strBirthPlace;
			$this->strGuardianAnnualIncome = $objReloaded->strGuardianAnnualIncome;
			$this->strOccupation = $objReloaded->strOccupation;
			$this->strRelationOfApplicantWithGuardian = $objReloaded->strRelationOfApplicantWithGuardian;
			$this->blnCvc = $objReloaded->blnCvc;
			$this->blnNcl = $objReloaded->blnNcl;
			$this->Year = $objReloaded->Year;
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
				case 'Idprofile':
					/**
					 * Gets the value for intIdprofile (PK)
					 * @return integer
					 */
					return $this->intIdprofile;

				case 'Prefix':
					/**
					 * Gets the value for intPrefix 
					 * @return integer
					 */
					return $this->intPrefix;

				case 'FirstName':
					/**
					 * Gets the value for strFirstName 
					 * @return string
					 */
					return $this->strFirstName;

				case 'MiddleName':
					/**
					 * Gets the value for strMiddleName 
					 * @return string
					 */
					return $this->strMiddleName;

				case 'LastName':
					/**
					 * Gets the value for strLastName 
					 * @return string
					 */
					return $this->strLastName;

				case 'LeaveDate':
					/**
					 * Gets the value for dttLeaveDate 
					 * @return QDateTime
					 */
					return $this->dttLeaveDate;

				case 'MarrtialStatus':
					/**
					 * Gets the value for intMarrtialStatus 
					 * @return integer
					 */
					return $this->intMarrtialStatus;

				case 'Handicaped':
					/**
					 * Gets the value for strHandicaped 
					 * @return string
					 */
					return $this->strHandicaped;

				case 'AdharNo':
					/**
					 * Gets the value for strAdharNo 
					 * @return string
					 */
					return $this->strAdharNo;

				case 'AnnualFamilyIncome':
					/**
					 * Gets the value for strAnnualFamilyIncome 
					 * @return string
					 */
					return $this->strAnnualFamilyIncome;

				case 'BloodGroup':
					/**
					 * Gets the value for intBloodGroup 
					 * @return integer
					 */
					return $this->intBloodGroup;

				case 'MotherTongue':
					/**
					 * Gets the value for intMotherTongue 
					 * @return integer
					 */
					return $this->intMotherTongue;

				case 'Religion':
					/**
					 * Gets the value for intReligion 
					 * @return integer
					 */
					return $this->intReligion;

				case 'Domicile':
					/**
					 * Gets the value for strDomicile 
					 * @return string
					 */
					return $this->strDomicile;

				case 'Nationality':
					/**
					 * Gets the value for intNationality 
					 * @return integer
					 */
					return $this->intNationality;

				case 'CourseOfAddmission':
					/**
					 * Gets the value for intCourseOfAddmission 
					 * @return integer
					 */
					return $this->intCourseOfAddmission;

				case 'HandicapedCat':
					/**
					 * Gets the value for intHandicapedCat 
					 * @return integer
					 */
					return $this->intHandicapedCat;

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

				case 'EducationTitle':
					/**
					 * Gets the value for intEducationTitle 
					 * @return integer
					 */
					return $this->intEducationTitle;

				case 'FeeConcession':
					/**
					 * Gets the value for intFeeConcession 
					 * @return integer
					 */
					return $this->intFeeConcession;

				case 'AdmittedDate':
					/**
					 * Gets the value for dttAdmittedDate 
					 * @return QDateTime
					 */
					return $this->dttAdmittedDate;

				case 'MfirstName':
					/**
					 * Gets the value for strMfirstName 
					 * @return string
					 */
					return $this->strMfirstName;

				case 'MmiddleName':
					/**
					 * Gets the value for strMmiddleName 
					 * @return string
					 */
					return $this->strMmiddleName;

				case 'MlastName':
					/**
					 * Gets the value for strMlastName 
					 * @return string
					 */
					return $this->strMlastName;

				case 'OldName':
					/**
					 * Gets the value for strOldName 
					 * @return string
					 */
					return $this->strOldName;

				case 'ReasonOfNameChange':
					/**
					 * Gets the value for strReasonOfNameChange 
					 * @return string
					 */
					return $this->strReasonOfNameChange;

				case 'UniversityReservation':
					/**
					 * Gets the value for intUniversityReservation 
					 * @return integer
					 */
					return $this->intUniversityReservation;

				case 'FatherFirstName':
					/**
					 * Gets the value for strFatherFirstName 
					 * @return string
					 */
					return $this->strFatherFirstName;

				case 'FatherMiddleName':
					/**
					 * Gets the value for strFatherMiddleName 
					 * @return string
					 */
					return $this->strFatherMiddleName;

				case 'FatherLastName':
					/**
					 * Gets the value for strFatherLastName 
					 * @return string
					 */
					return $this->strFatherLastName;

				case 'MotherFirstName':
					/**
					 * Gets the value for strMotherFirstName 
					 * @return string
					 */
					return $this->strMotherFirstName;

				case 'MotherMiddleName':
					/**
					 * Gets the value for strMotherMiddleName 
					 * @return string
					 */
					return $this->strMotherMiddleName;

				case 'MotherLastName':
					/**
					 * Gets the value for strMotherLastName 
					 * @return string
					 */
					return $this->strMotherLastName;

				case 'AdmissionMode':
					/**
					 * Gets the value for intAdmissionMode 
					 * @return integer
					 */
					return $this->intAdmissionMode;

				case 'Inquiry':
					/**
					 * Gets the value for intInquiry 
					 * @return integer
					 */
					return $this->intInquiry;

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

				case 'Gender':
					/**
					 * Gets the value for intGender 
					 * @return integer
					 */
					return $this->intGender;

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

				case 'Zipcode':
					/**
					 * Gets the value for strZipcode 
					 * @return string
					 */
					return $this->strZipcode;

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

				case 'BirthPlace':
					/**
					 * Gets the value for strBirthPlace 
					 * @return string
					 */
					return $this->strBirthPlace;

				case 'GuardianAnnualIncome':
					/**
					 * Gets the value for strGuardianAnnualIncome 
					 * @return string
					 */
					return $this->strGuardianAnnualIncome;

				case 'Occupation':
					/**
					 * Gets the value for strOccupation 
					 * @return string
					 */
					return $this->strOccupation;

				case 'RelationOfApplicantWithGuardian':
					/**
					 * Gets the value for strRelationOfApplicantWithGuardian 
					 * @return string
					 */
					return $this->strRelationOfApplicantWithGuardian;

				case 'Cvc':
					/**
					 * Gets the value for blnCvc 
					 * @return boolean
					 */
					return $this->blnCvc;

				case 'Ncl':
					/**
					 * Gets the value for blnNcl 
					 * @return boolean
					 */
					return $this->blnNcl;

				case 'Year':
					/**
					 * Gets the value for intYear 
					 * @return integer
					 */
					return $this->intYear;

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdprofileObject':
					/**
					 * Gets the value for the Ledger object referenced by intIdprofile (PK)
					 * @return Ledger
					 */
					try {
						if ((!$this->objIdprofileObject) && (!is_null($this->intIdprofile)))
							$this->objIdprofileObject = Ledger::Load($this->intIdprofile);
						return $this->objIdprofileObject;
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

				case 'MarrtialStatusObject':
					/**
					 * Gets the value for the MarrialStatus object referenced by intMarrtialStatus 
					 * @return MarrialStatus
					 */
					try {
						if ((!$this->objMarrtialStatusObject) && (!is_null($this->intMarrtialStatus)))
							$this->objMarrtialStatusObject = MarrialStatus::Load($this->intMarrtialStatus);
						return $this->objMarrtialStatusObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BloodGroupObject':
					/**
					 * Gets the value for the BloodGroup object referenced by intBloodGroup 
					 * @return BloodGroup
					 */
					try {
						if ((!$this->objBloodGroupObject) && (!is_null($this->intBloodGroup)))
							$this->objBloodGroupObject = BloodGroup::Load($this->intBloodGroup);
						return $this->objBloodGroupObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MotherTongueObject':
					/**
					 * Gets the value for the MotherTongue object referenced by intMotherTongue 
					 * @return MotherTongue
					 */
					try {
						if ((!$this->objMotherTongueObject) && (!is_null($this->intMotherTongue)))
							$this->objMotherTongueObject = MotherTongue::Load($this->intMotherTongue);
						return $this->objMotherTongueObject;
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

				case 'NationalityObject':
					/**
					 * Gets the value for the Nationality object referenced by intNationality 
					 * @return Nationality
					 */
					try {
						if ((!$this->objNationalityObject) && (!is_null($this->intNationality)))
							$this->objNationalityObject = Nationality::Load($this->intNationality);
						return $this->objNationalityObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CourseOfAddmissionObject':
					/**
					 * Gets the value for the Role object referenced by intCourseOfAddmission 
					 * @return Role
					 */
					try {
						if ((!$this->objCourseOfAddmissionObject) && (!is_null($this->intCourseOfAddmission)))
							$this->objCourseOfAddmissionObject = Role::Load($this->intCourseOfAddmission);
						return $this->objCourseOfAddmissionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'HandicapedCatObject':
					/**
					 * Gets the value for the HandicapedCat object referenced by intHandicapedCat 
					 * @return HandicapedCat
					 */
					try {
						if ((!$this->objHandicapedCatObject) && (!is_null($this->intHandicapedCat)))
							$this->objHandicapedCatObject = HandicapedCat::Load($this->intHandicapedCat);
						return $this->objHandicapedCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CasteCatObject':
					/**
					 * Gets the value for the Cast object referenced by intCasteCat 
					 * @return Cast
					 */
					try {
						if ((!$this->objCasteCatObject) && (!is_null($this->intCasteCat)))
							$this->objCasteCatObject = Cast::Load($this->intCasteCat);
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

				case 'EducationTitleObject':
					/**
					 * Gets the value for the EducationTitle object referenced by intEducationTitle 
					 * @return EducationTitle
					 */
					try {
						if ((!$this->objEducationTitleObject) && (!is_null($this->intEducationTitle)))
							$this->objEducationTitleObject = EducationTitle::Load($this->intEducationTitle);
						return $this->objEducationTitleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FeeConcessionObject':
					/**
					 * Gets the value for the FeesConcession object referenced by intFeeConcession 
					 * @return FeesConcession
					 */
					try {
						if ((!$this->objFeeConcessionObject) && (!is_null($this->intFeeConcession)))
							$this->objFeeConcessionObject = FeesConcession::Load($this->intFeeConcession);
						return $this->objFeeConcessionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UniversityReservationObject':
					/**
					 * Gets the value for the UniversityReservation object referenced by intUniversityReservation 
					 * @return UniversityReservation
					 */
					try {
						if ((!$this->objUniversityReservationObject) && (!is_null($this->intUniversityReservation)))
							$this->objUniversityReservationObject = UniversityReservation::Load($this->intUniversityReservation);
						return $this->objUniversityReservationObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdmissionModeObject':
					/**
					 * Gets the value for the AdmissionMode object referenced by intAdmissionMode 
					 * @return AdmissionMode
					 */
					try {
						if ((!$this->objAdmissionModeObject) && (!is_null($this->intAdmissionMode)))
							$this->objAdmissionModeObject = AdmissionMode::Load($this->intAdmissionMode);
						return $this->objAdmissionModeObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InquiryObject':
					/**
					 * Gets the value for the Inquiry object referenced by intInquiry 
					 * @return Inquiry
					 */
					try {
						if ((!$this->objInquiryObject) && (!is_null($this->intInquiry)))
							$this->objInquiryObject = Inquiry::Load($this->intInquiry);
						return $this->objInquiryObject;
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

				case 'YearObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intYear 
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objYearObject) && (!is_null($this->intYear)))
							$this->objYearObject = AcademicYear::Load($this->intYear);
						return $this->objYearObject;
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

				case '_ProfileHasQualifiedsubject':
					/**
					 * Gets the value for the private _objProfileHasQualifiedsubject (Read-Only)
					 * if set due to an expansion on the profile_has_qualifiedsubject.profile reverse relationship
					 * @return ProfileHasQualifiedsubject
					 */
					return $this->_objProfileHasQualifiedsubject;

				case '_ProfileHasQualifiedsubjectArray':
					/**
					 * Gets the value for the private _objProfileHasQualifiedsubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile_has_qualifiedsubject.profile reverse relationship
					 * @return ProfileHasQualifiedsubject[]
					 */
					return $this->_objProfileHasQualifiedsubjectArray;


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
				case 'Idprofile':
					/**
					 * Sets the value for intIdprofile (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdprofileObject = null;
						return ($this->intIdprofile = QType::Cast($mixValue, QType::Integer));
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

				case 'FirstName':
					/**
					 * Sets the value for strFirstName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MiddleName':
					/**
					 * Sets the value for strMiddleName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMiddleName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LastName':
					/**
					 * Sets the value for strLastName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LeaveDate':
					/**
					 * Sets the value for dttLeaveDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttLeaveDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MarrtialStatus':
					/**
					 * Sets the value for intMarrtialStatus 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMarrtialStatusObject = null;
						return ($this->intMarrtialStatus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Handicaped':
					/**
					 * Sets the value for strHandicaped 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strHandicaped = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdharNo':
					/**
					 * Sets the value for strAdharNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAdharNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AnnualFamilyIncome':
					/**
					 * Sets the value for strAnnualFamilyIncome 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAnnualFamilyIncome = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BloodGroup':
					/**
					 * Sets the value for intBloodGroup 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBloodGroupObject = null;
						return ($this->intBloodGroup = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MotherTongue':
					/**
					 * Sets the value for intMotherTongue 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMotherTongueObject = null;
						return ($this->intMotherTongue = QType::Cast($mixValue, QType::Integer));
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

				case 'Domicile':
					/**
					 * Sets the value for strDomicile 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDomicile = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Nationality':
					/**
					 * Sets the value for intNationality 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objNationalityObject = null;
						return ($this->intNationality = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CourseOfAddmission':
					/**
					 * Sets the value for intCourseOfAddmission 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCourseOfAddmissionObject = null;
						return ($this->intCourseOfAddmission = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'HandicapedCat':
					/**
					 * Sets the value for intHandicapedCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objHandicapedCatObject = null;
						return ($this->intHandicapedCat = QType::Cast($mixValue, QType::Integer));
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

				case 'EducationTitle':
					/**
					 * Sets the value for intEducationTitle 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objEducationTitleObject = null;
						return ($this->intEducationTitle = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FeeConcession':
					/**
					 * Sets the value for intFeeConcession 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFeeConcessionObject = null;
						return ($this->intFeeConcession = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdmittedDate':
					/**
					 * Sets the value for dttAdmittedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttAdmittedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MfirstName':
					/**
					 * Sets the value for strMfirstName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMfirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MmiddleName':
					/**
					 * Sets the value for strMmiddleName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMmiddleName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MlastName':
					/**
					 * Sets the value for strMlastName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMlastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OldName':
					/**
					 * Sets the value for strOldName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOldName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReasonOfNameChange':
					/**
					 * Sets the value for strReasonOfNameChange 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReasonOfNameChange = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UniversityReservation':
					/**
					 * Sets the value for intUniversityReservation 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUniversityReservationObject = null;
						return ($this->intUniversityReservation = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FatherFirstName':
					/**
					 * Sets the value for strFatherFirstName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFatherFirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FatherMiddleName':
					/**
					 * Sets the value for strFatherMiddleName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFatherMiddleName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FatherLastName':
					/**
					 * Sets the value for strFatherLastName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFatherLastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MotherFirstName':
					/**
					 * Sets the value for strMotherFirstName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMotherFirstName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MotherMiddleName':
					/**
					 * Sets the value for strMotherMiddleName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMotherMiddleName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MotherLastName':
					/**
					 * Sets the value for strMotherLastName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMotherLastName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdmissionMode':
					/**
					 * Sets the value for intAdmissionMode 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAdmissionModeObject = null;
						return ($this->intAdmissionMode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Inquiry':
					/**
					 * Sets the value for intInquiry 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objInquiryObject = null;
						return ($this->intInquiry = QType::Cast($mixValue, QType::Integer));
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

				case 'Zipcode':
					/**
					 * Sets the value for strZipcode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strZipcode = QType::Cast($mixValue, QType::String));
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

				case 'GuardianAnnualIncome':
					/**
					 * Sets the value for strGuardianAnnualIncome 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGuardianAnnualIncome = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Occupation':
					/**
					 * Sets the value for strOccupation 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOccupation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RelationOfApplicantWithGuardian':
					/**
					 * Sets the value for strRelationOfApplicantWithGuardian 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRelationOfApplicantWithGuardian = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cvc':
					/**
					 * Sets the value for blnCvc 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCvc = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ncl':
					/**
					 * Sets the value for blnNcl 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnNcl = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Year':
					/**
					 * Sets the value for intYear 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objYearObject = null;
						return ($this->intYear = QType::Cast($mixValue, QType::Integer));
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
				case 'IdprofileObject':
					/**
					 * Sets the value for the Ledger object referenced by intIdprofile (PK)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intIdprofile = null;
						$this->objIdprofileObject = null;
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
							throw new QCallerException('Unable to set an unsaved IdprofileObject for this Profile');

						// Update Local Member Variables
						$this->objIdprofileObject = $mixValue;
						$this->intIdprofile = $mixValue->Idledger;

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
							throw new QCallerException('Unable to set an unsaved PrefixObject for this Profile');

						// Update Local Member Variables
						$this->objPrefixObject = $mixValue;
						$this->intPrefix = $mixValue->Idprefix;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'MarrtialStatusObject':
					/**
					 * Sets the value for the MarrialStatus object referenced by intMarrtialStatus 
					 * @param MarrialStatus $mixValue
					 * @return MarrialStatus
					 */
					if (is_null($mixValue)) {
						$this->intMarrtialStatus = null;
						$this->objMarrtialStatusObject = null;
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
							throw new QCallerException('Unable to set an unsaved MarrtialStatusObject for this Profile');

						// Update Local Member Variables
						$this->objMarrtialStatusObject = $mixValue;
						$this->intMarrtialStatus = $mixValue->IdmarrialStatus;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BloodGroupObject':
					/**
					 * Sets the value for the BloodGroup object referenced by intBloodGroup 
					 * @param BloodGroup $mixValue
					 * @return BloodGroup
					 */
					if (is_null($mixValue)) {
						$this->intBloodGroup = null;
						$this->objBloodGroupObject = null;
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
							throw new QCallerException('Unable to set an unsaved BloodGroupObject for this Profile');

						// Update Local Member Variables
						$this->objBloodGroupObject = $mixValue;
						$this->intBloodGroup = $mixValue->IdbloodGroup;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'MotherTongueObject':
					/**
					 * Sets the value for the MotherTongue object referenced by intMotherTongue 
					 * @param MotherTongue $mixValue
					 * @return MotherTongue
					 */
					if (is_null($mixValue)) {
						$this->intMotherTongue = null;
						$this->objMotherTongueObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a MotherTongue object
						try {
							$mixValue = QType::Cast($mixValue, 'MotherTongue');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED MotherTongue object
						if (is_null($mixValue->IdmotherTongue))
							throw new QCallerException('Unable to set an unsaved MotherTongueObject for this Profile');

						// Update Local Member Variables
						$this->objMotherTongueObject = $mixValue;
						$this->intMotherTongue = $mixValue->IdmotherTongue;

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
							throw new QCallerException('Unable to set an unsaved ReligionObject for this Profile');

						// Update Local Member Variables
						$this->objReligionObject = $mixValue;
						$this->intReligion = $mixValue->Idreligion;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'NationalityObject':
					/**
					 * Sets the value for the Nationality object referenced by intNationality 
					 * @param Nationality $mixValue
					 * @return Nationality
					 */
					if (is_null($mixValue)) {
						$this->intNationality = null;
						$this->objNationalityObject = null;
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
							throw new QCallerException('Unable to set an unsaved NationalityObject for this Profile');

						// Update Local Member Variables
						$this->objNationalityObject = $mixValue;
						$this->intNationality = $mixValue->Idnationality;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CourseOfAddmissionObject':
					/**
					 * Sets the value for the Role object referenced by intCourseOfAddmission 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intCourseOfAddmission = null;
						$this->objCourseOfAddmissionObject = null;
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
							throw new QCallerException('Unable to set an unsaved CourseOfAddmissionObject for this Profile');

						// Update Local Member Variables
						$this->objCourseOfAddmissionObject = $mixValue;
						$this->intCourseOfAddmission = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'HandicapedCatObject':
					/**
					 * Sets the value for the HandicapedCat object referenced by intHandicapedCat 
					 * @param HandicapedCat $mixValue
					 * @return HandicapedCat
					 */
					if (is_null($mixValue)) {
						$this->intHandicapedCat = null;
						$this->objHandicapedCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a HandicapedCat object
						try {
							$mixValue = QType::Cast($mixValue, 'HandicapedCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED HandicapedCat object
						if (is_null($mixValue->IdhandicapedCat))
							throw new QCallerException('Unable to set an unsaved HandicapedCatObject for this Profile');

						// Update Local Member Variables
						$this->objHandicapedCatObject = $mixValue;
						$this->intHandicapedCat = $mixValue->IdhandicapedCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CasteCatObject':
					/**
					 * Sets the value for the Cast object referenced by intCasteCat 
					 * @param Cast $mixValue
					 * @return Cast
					 */
					if (is_null($mixValue)) {
						$this->intCasteCat = null;
						$this->objCasteCatObject = null;
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
							throw new QCallerException('Unable to set an unsaved CasteCatObject for this Profile');

						// Update Local Member Variables
						$this->objCasteCatObject = $mixValue;
						$this->intCasteCat = $mixValue->Idcast;

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
							throw new QCallerException('Unable to set an unsaved CasteObject for this Profile');

						// Update Local Member Variables
						$this->objCasteObject = $mixValue;
						$this->intCaste = $mixValue->Idcast;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'EducationTitleObject':
					/**
					 * Sets the value for the EducationTitle object referenced by intEducationTitle 
					 * @param EducationTitle $mixValue
					 * @return EducationTitle
					 */
					if (is_null($mixValue)) {
						$this->intEducationTitle = null;
						$this->objEducationTitleObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a EducationTitle object
						try {
							$mixValue = QType::Cast($mixValue, 'EducationTitle');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED EducationTitle object
						if (is_null($mixValue->IdeducationTitle))
							throw new QCallerException('Unable to set an unsaved EducationTitleObject for this Profile');

						// Update Local Member Variables
						$this->objEducationTitleObject = $mixValue;
						$this->intEducationTitle = $mixValue->IdeducationTitle;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FeeConcessionObject':
					/**
					 * Sets the value for the FeesConcession object referenced by intFeeConcession 
					 * @param FeesConcession $mixValue
					 * @return FeesConcession
					 */
					if (is_null($mixValue)) {
						$this->intFeeConcession = null;
						$this->objFeeConcessionObject = null;
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
							throw new QCallerException('Unable to set an unsaved FeeConcessionObject for this Profile');

						// Update Local Member Variables
						$this->objFeeConcessionObject = $mixValue;
						$this->intFeeConcession = $mixValue->IdfeesConcession;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'UniversityReservationObject':
					/**
					 * Sets the value for the UniversityReservation object referenced by intUniversityReservation 
					 * @param UniversityReservation $mixValue
					 * @return UniversityReservation
					 */
					if (is_null($mixValue)) {
						$this->intUniversityReservation = null;
						$this->objUniversityReservationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a UniversityReservation object
						try {
							$mixValue = QType::Cast($mixValue, 'UniversityReservation');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED UniversityReservation object
						if (is_null($mixValue->IduniversityReservation))
							throw new QCallerException('Unable to set an unsaved UniversityReservationObject for this Profile');

						// Update Local Member Variables
						$this->objUniversityReservationObject = $mixValue;
						$this->intUniversityReservation = $mixValue->IduniversityReservation;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AdmissionModeObject':
					/**
					 * Sets the value for the AdmissionMode object referenced by intAdmissionMode 
					 * @param AdmissionMode $mixValue
					 * @return AdmissionMode
					 */
					if (is_null($mixValue)) {
						$this->intAdmissionMode = null;
						$this->objAdmissionModeObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AdmissionMode object
						try {
							$mixValue = QType::Cast($mixValue, 'AdmissionMode');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AdmissionMode object
						if (is_null($mixValue->IdadmissionMode))
							throw new QCallerException('Unable to set an unsaved AdmissionModeObject for this Profile');

						// Update Local Member Variables
						$this->objAdmissionModeObject = $mixValue;
						$this->intAdmissionMode = $mixValue->IdadmissionMode;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'InquiryObject':
					/**
					 * Sets the value for the Inquiry object referenced by intInquiry 
					 * @param Inquiry $mixValue
					 * @return Inquiry
					 */
					if (is_null($mixValue)) {
						$this->intInquiry = null;
						$this->objInquiryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Inquiry object
						try {
							$mixValue = QType::Cast($mixValue, 'Inquiry');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Inquiry object
						if (is_null($mixValue->Idinquiry))
							throw new QCallerException('Unable to set an unsaved InquiryObject for this Profile');

						// Update Local Member Variables
						$this->objInquiryObject = $mixValue;
						$this->intInquiry = $mixValue->Idinquiry;

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
							throw new QCallerException('Unable to set an unsaved GenderObject for this Profile');

						// Update Local Member Variables
						$this->objGenderObject = $mixValue;
						$this->intGender = $mixValue->Idgender;

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
							throw new QCallerException('Unable to set an unsaved StateObject for this Profile');

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
							throw new QCallerException('Unable to set an unsaved State1Object for this Profile');

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
							throw new QCallerException('Unable to set an unsaved DistrictObject for this Profile');

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
							throw new QCallerException('Unable to set an unsaved District1Object for this Profile');

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
							throw new QCallerException('Unable to set an unsaved TalukaObject for this Profile');

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
							throw new QCallerException('Unable to set an unsaved Taluka1Object for this Profile');

						// Update Local Member Variables
						$this->objTaluka1Object = $mixValue;
						$this->intTaluka1 = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'YearObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intYear 
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intYear = null;
						$this->objYearObject = null;
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
							throw new QCallerException('Unable to set an unsaved YearObject for this Profile');

						// Update Local Member Variables
						$this->objYearObject = $mixValue;
						$this->intYear = $mixValue->IdacademicYear;

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
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this Profile');

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



		// Related Objects' Methods for ProfileHasQualifiedsubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfileHasQualifiedsubjects as an array of ProfileHasQualifiedsubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject[]
		*/
		public function GetProfileHasQualifiedsubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdprofile)))
				return array();

			try {
				return ProfileHasQualifiedsubject::LoadArrayByProfile($this->intIdprofile, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfileHasQualifiedsubjects
		 * @return int
		*/
		public function CountProfileHasQualifiedsubjects() {
			if ((is_null($this->intIdprofile)))
				return 0;

			return ProfileHasQualifiedsubject::CountByProfile($this->intIdprofile);
		}

		/**
		 * Associates a ProfileHasQualifiedsubject
		 * @param ProfileHasQualifiedsubject $objProfileHasQualifiedsubject
		 * @return void
		*/
		public function AssociateProfileHasQualifiedsubject(ProfileHasQualifiedsubject $objProfileHasQualifiedsubject) {
			if ((is_null($this->intIdprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileHasQualifiedsubject on this unsaved Profile.');
			if ((is_null($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileHasQualifiedsubject on this Profile with an unsaved ProfileHasQualifiedsubject.');

			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile_has_qualifiedsubject`
				SET
					`profile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . '
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject) . '
			');
		}

		/**
		 * Unassociates a ProfileHasQualifiedsubject
		 * @param ProfileHasQualifiedsubject $objProfileHasQualifiedsubject
		 * @return void
		*/
		public function UnassociateProfileHasQualifiedsubject(ProfileHasQualifiedsubject $objProfileHasQualifiedsubject) {
			if ((is_null($this->intIdprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Profile.');
			if ((is_null($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this Profile with an unsaved ProfileHasQualifiedsubject.');

			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile_has_qualifiedsubject`
				SET
					`profile` = null
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject) . ' AND
					`profile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . '
			');
		}

		/**
		 * Unassociates all ProfileHasQualifiedsubjects
		 * @return void
		*/
		public function UnassociateAllProfileHasQualifiedsubjects() {
			if ((is_null($this->intIdprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile_has_qualifiedsubject`
				SET
					`profile` = null
				WHERE
					`profile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . '
			');
		}

		/**
		 * Deletes an associated ProfileHasQualifiedsubject
		 * @param ProfileHasQualifiedsubject $objProfileHasQualifiedsubject
		 * @return void
		*/
		public function DeleteAssociatedProfileHasQualifiedsubject(ProfileHasQualifiedsubject $objProfileHasQualifiedsubject) {
			if ((is_null($this->intIdprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Profile.');
			if ((is_null($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this Profile with an unsaved ProfileHasQualifiedsubject.');

			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile_has_qualifiedsubject`
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject) . ' AND
					`profile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . '
			');
		}

		/**
		 * Deletes all associated ProfileHasQualifiedsubjects
		 * @return void
		*/
		public function DeleteAllProfileHasQualifiedsubjects() {
			if ((is_null($this->intIdprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Profile::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile_has_qualifiedsubject`
				WHERE
					`profile` = ' . $objDatabase->SqlVariable($this->intIdprofile) . '
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
			return "profile";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Profile::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Profile"><sequence>';
			$strToReturn .= '<element name="IdprofileObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="PrefixObject" type="xsd1:Prefix"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="MiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="LeaveDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="MarrtialStatusObject" type="xsd1:MarrialStatus"/>';
			$strToReturn .= '<element name="Handicaped" type="xsd:string"/>';
			$strToReturn .= '<element name="AdharNo" type="xsd:string"/>';
			$strToReturn .= '<element name="AnnualFamilyIncome" type="xsd:string"/>';
			$strToReturn .= '<element name="BloodGroupObject" type="xsd1:BloodGroup"/>';
			$strToReturn .= '<element name="MotherTongueObject" type="xsd1:MotherTongue"/>';
			$strToReturn .= '<element name="ReligionObject" type="xsd1:Religion"/>';
			$strToReturn .= '<element name="Domicile" type="xsd:string"/>';
			$strToReturn .= '<element name="NationalityObject" type="xsd1:Nationality"/>';
			$strToReturn .= '<element name="CourseOfAddmissionObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="HandicapedCatObject" type="xsd1:HandicapedCat"/>';
			$strToReturn .= '<element name="CasteCatObject" type="xsd1:Cast"/>';
			$strToReturn .= '<element name="CasteObject" type="xsd1:Cast"/>';
			$strToReturn .= '<element name="EducationTitleObject" type="xsd1:EducationTitle"/>';
			$strToReturn .= '<element name="FeeConcessionObject" type="xsd1:FeesConcession"/>';
			$strToReturn .= '<element name="AdmittedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="MfirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="MmiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="MlastName" type="xsd:string"/>';
			$strToReturn .= '<element name="OldName" type="xsd:string"/>';
			$strToReturn .= '<element name="ReasonOfNameChange" type="xsd:string"/>';
			$strToReturn .= '<element name="UniversityReservationObject" type="xsd1:UniversityReservation"/>';
			$strToReturn .= '<element name="FatherFirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="FatherMiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="FatherLastName" type="xsd:string"/>';
			$strToReturn .= '<element name="MotherFirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="MotherMiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="MotherLastName" type="xsd:string"/>';
			$strToReturn .= '<element name="AdmissionModeObject" type="xsd1:AdmissionMode"/>';
			$strToReturn .= '<element name="InquiryObject" type="xsd1:Inquiry"/>';
			$strToReturn .= '<element name="AddressLine1" type="xsd:string"/>';
			$strToReturn .= '<element name="AddressLine2" type="xsd:string"/>';
			$strToReturn .= '<element name="GenderObject" type="xsd1:Gender"/>';
			$strToReturn .= '<element name="StateObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="State1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="DistrictObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="District1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="TalukaObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="Taluka1Object" type="xsd1:Place"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="City1" type="xsd:string"/>';
			$strToReturn .= '<element name="Zipcode" type="xsd:string"/>';
			$strToReturn .= '<element name="Contact1" type="xsd:string"/>';
			$strToReturn .= '<element name="Contact2" type="xsd:string"/>';
			$strToReturn .= '<element name="Email1" type="xsd:string"/>';
			$strToReturn .= '<element name="Email2" type="xsd:string"/>';
			$strToReturn .= '<element name="Dob" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Age" type="xsd:string"/>';
			$strToReturn .= '<element name="BirthPlace" type="xsd:string"/>';
			$strToReturn .= '<element name="GuardianAnnualIncome" type="xsd:string"/>';
			$strToReturn .= '<element name="Occupation" type="xsd:string"/>';
			$strToReturn .= '<element name="RelationOfApplicantWithGuardian" type="xsd:string"/>';
			$strToReturn .= '<element name="Cvc" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Ncl" type="xsd:boolean"/>';
			$strToReturn .= '<element name="YearObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Profile', $strComplexTypeArray)) {
				$strComplexTypeArray['Profile'] = Profile::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Prefix::AlterSoapComplexTypeArray($strComplexTypeArray);
				MarrialStatus::AlterSoapComplexTypeArray($strComplexTypeArray);
				BloodGroup::AlterSoapComplexTypeArray($strComplexTypeArray);
				MotherTongue::AlterSoapComplexTypeArray($strComplexTypeArray);
				Religion::AlterSoapComplexTypeArray($strComplexTypeArray);
				Nationality::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				HandicapedCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cast::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cast::AlterSoapComplexTypeArray($strComplexTypeArray);
				EducationTitle::AlterSoapComplexTypeArray($strComplexTypeArray);
				FeesConcession::AlterSoapComplexTypeArray($strComplexTypeArray);
				UniversityReservation::AlterSoapComplexTypeArray($strComplexTypeArray);
				AdmissionMode::AlterSoapComplexTypeArray($strComplexTypeArray);
				Inquiry::AlterSoapComplexTypeArray($strComplexTypeArray);
				Gender::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Profile::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Profile();
			if ((property_exists($objSoapObject, 'IdprofileObject')) &&
				($objSoapObject->IdprofileObject))
				$objToReturn->IdprofileObject = Ledger::GetObjectFromSoapObject($objSoapObject->IdprofileObject);
			if ((property_exists($objSoapObject, 'PrefixObject')) &&
				($objSoapObject->PrefixObject))
				$objToReturn->PrefixObject = Prefix::GetObjectFromSoapObject($objSoapObject->PrefixObject);
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'MiddleName'))
				$objToReturn->strMiddleName = $objSoapObject->MiddleName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'LeaveDate'))
				$objToReturn->dttLeaveDate = new QDateTime($objSoapObject->LeaveDate);
			if ((property_exists($objSoapObject, 'MarrtialStatusObject')) &&
				($objSoapObject->MarrtialStatusObject))
				$objToReturn->MarrtialStatusObject = MarrialStatus::GetObjectFromSoapObject($objSoapObject->MarrtialStatusObject);
			if (property_exists($objSoapObject, 'Handicaped'))
				$objToReturn->strHandicaped = $objSoapObject->Handicaped;
			if (property_exists($objSoapObject, 'AdharNo'))
				$objToReturn->strAdharNo = $objSoapObject->AdharNo;
			if (property_exists($objSoapObject, 'AnnualFamilyIncome'))
				$objToReturn->strAnnualFamilyIncome = $objSoapObject->AnnualFamilyIncome;
			if ((property_exists($objSoapObject, 'BloodGroupObject')) &&
				($objSoapObject->BloodGroupObject))
				$objToReturn->BloodGroupObject = BloodGroup::GetObjectFromSoapObject($objSoapObject->BloodGroupObject);
			if ((property_exists($objSoapObject, 'MotherTongueObject')) &&
				($objSoapObject->MotherTongueObject))
				$objToReturn->MotherTongueObject = MotherTongue::GetObjectFromSoapObject($objSoapObject->MotherTongueObject);
			if ((property_exists($objSoapObject, 'ReligionObject')) &&
				($objSoapObject->ReligionObject))
				$objToReturn->ReligionObject = Religion::GetObjectFromSoapObject($objSoapObject->ReligionObject);
			if (property_exists($objSoapObject, 'Domicile'))
				$objToReturn->strDomicile = $objSoapObject->Domicile;
			if ((property_exists($objSoapObject, 'NationalityObject')) &&
				($objSoapObject->NationalityObject))
				$objToReturn->NationalityObject = Nationality::GetObjectFromSoapObject($objSoapObject->NationalityObject);
			if ((property_exists($objSoapObject, 'CourseOfAddmissionObject')) &&
				($objSoapObject->CourseOfAddmissionObject))
				$objToReturn->CourseOfAddmissionObject = Role::GetObjectFromSoapObject($objSoapObject->CourseOfAddmissionObject);
			if ((property_exists($objSoapObject, 'HandicapedCatObject')) &&
				($objSoapObject->HandicapedCatObject))
				$objToReturn->HandicapedCatObject = HandicapedCat::GetObjectFromSoapObject($objSoapObject->HandicapedCatObject);
			if ((property_exists($objSoapObject, 'CasteCatObject')) &&
				($objSoapObject->CasteCatObject))
				$objToReturn->CasteCatObject = Cast::GetObjectFromSoapObject($objSoapObject->CasteCatObject);
			if ((property_exists($objSoapObject, 'CasteObject')) &&
				($objSoapObject->CasteObject))
				$objToReturn->CasteObject = Cast::GetObjectFromSoapObject($objSoapObject->CasteObject);
			if ((property_exists($objSoapObject, 'EducationTitleObject')) &&
				($objSoapObject->EducationTitleObject))
				$objToReturn->EducationTitleObject = EducationTitle::GetObjectFromSoapObject($objSoapObject->EducationTitleObject);
			if ((property_exists($objSoapObject, 'FeeConcessionObject')) &&
				($objSoapObject->FeeConcessionObject))
				$objToReturn->FeeConcessionObject = FeesConcession::GetObjectFromSoapObject($objSoapObject->FeeConcessionObject);
			if (property_exists($objSoapObject, 'AdmittedDate'))
				$objToReturn->dttAdmittedDate = new QDateTime($objSoapObject->AdmittedDate);
			if (property_exists($objSoapObject, 'MfirstName'))
				$objToReturn->strMfirstName = $objSoapObject->MfirstName;
			if (property_exists($objSoapObject, 'MmiddleName'))
				$objToReturn->strMmiddleName = $objSoapObject->MmiddleName;
			if (property_exists($objSoapObject, 'MlastName'))
				$objToReturn->strMlastName = $objSoapObject->MlastName;
			if (property_exists($objSoapObject, 'OldName'))
				$objToReturn->strOldName = $objSoapObject->OldName;
			if (property_exists($objSoapObject, 'ReasonOfNameChange'))
				$objToReturn->strReasonOfNameChange = $objSoapObject->ReasonOfNameChange;
			if ((property_exists($objSoapObject, 'UniversityReservationObject')) &&
				($objSoapObject->UniversityReservationObject))
				$objToReturn->UniversityReservationObject = UniversityReservation::GetObjectFromSoapObject($objSoapObject->UniversityReservationObject);
			if (property_exists($objSoapObject, 'FatherFirstName'))
				$objToReturn->strFatherFirstName = $objSoapObject->FatherFirstName;
			if (property_exists($objSoapObject, 'FatherMiddleName'))
				$objToReturn->strFatherMiddleName = $objSoapObject->FatherMiddleName;
			if (property_exists($objSoapObject, 'FatherLastName'))
				$objToReturn->strFatherLastName = $objSoapObject->FatherLastName;
			if (property_exists($objSoapObject, 'MotherFirstName'))
				$objToReturn->strMotherFirstName = $objSoapObject->MotherFirstName;
			if (property_exists($objSoapObject, 'MotherMiddleName'))
				$objToReturn->strMotherMiddleName = $objSoapObject->MotherMiddleName;
			if (property_exists($objSoapObject, 'MotherLastName'))
				$objToReturn->strMotherLastName = $objSoapObject->MotherLastName;
			if ((property_exists($objSoapObject, 'AdmissionModeObject')) &&
				($objSoapObject->AdmissionModeObject))
				$objToReturn->AdmissionModeObject = AdmissionMode::GetObjectFromSoapObject($objSoapObject->AdmissionModeObject);
			if ((property_exists($objSoapObject, 'InquiryObject')) &&
				($objSoapObject->InquiryObject))
				$objToReturn->InquiryObject = Inquiry::GetObjectFromSoapObject($objSoapObject->InquiryObject);
			if (property_exists($objSoapObject, 'AddressLine1'))
				$objToReturn->strAddressLine1 = $objSoapObject->AddressLine1;
			if (property_exists($objSoapObject, 'AddressLine2'))
				$objToReturn->strAddressLine2 = $objSoapObject->AddressLine2;
			if ((property_exists($objSoapObject, 'GenderObject')) &&
				($objSoapObject->GenderObject))
				$objToReturn->GenderObject = Gender::GetObjectFromSoapObject($objSoapObject->GenderObject);
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
			if (property_exists($objSoapObject, 'Zipcode'))
				$objToReturn->strZipcode = $objSoapObject->Zipcode;
			if (property_exists($objSoapObject, 'Contact1'))
				$objToReturn->strContact1 = $objSoapObject->Contact1;
			if (property_exists($objSoapObject, 'Contact2'))
				$objToReturn->strContact2 = $objSoapObject->Contact2;
			if (property_exists($objSoapObject, 'Email1'))
				$objToReturn->strEmail1 = $objSoapObject->Email1;
			if (property_exists($objSoapObject, 'Email2'))
				$objToReturn->strEmail2 = $objSoapObject->Email2;
			if (property_exists($objSoapObject, 'Dob'))
				$objToReturn->dttDob = new QDateTime($objSoapObject->Dob);
			if (property_exists($objSoapObject, 'Age'))
				$objToReturn->strAge = $objSoapObject->Age;
			if (property_exists($objSoapObject, 'BirthPlace'))
				$objToReturn->strBirthPlace = $objSoapObject->BirthPlace;
			if (property_exists($objSoapObject, 'GuardianAnnualIncome'))
				$objToReturn->strGuardianAnnualIncome = $objSoapObject->GuardianAnnualIncome;
			if (property_exists($objSoapObject, 'Occupation'))
				$objToReturn->strOccupation = $objSoapObject->Occupation;
			if (property_exists($objSoapObject, 'RelationOfApplicantWithGuardian'))
				$objToReturn->strRelationOfApplicantWithGuardian = $objSoapObject->RelationOfApplicantWithGuardian;
			if (property_exists($objSoapObject, 'Cvc'))
				$objToReturn->blnCvc = $objSoapObject->Cvc;
			if (property_exists($objSoapObject, 'Ncl'))
				$objToReturn->blnNcl = $objSoapObject->Ncl;
			if ((property_exists($objSoapObject, 'YearObject')) &&
				($objSoapObject->YearObject))
				$objToReturn->YearObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->YearObject);
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
				array_push($objArrayToReturn, Profile::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdprofileObject)
				$objObject->objIdprofileObject = Ledger::GetSoapObjectFromObject($objObject->objIdprofileObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdprofile = null;
			if ($objObject->objPrefixObject)
				$objObject->objPrefixObject = Prefix::GetSoapObjectFromObject($objObject->objPrefixObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPrefix = null;
			if ($objObject->dttLeaveDate)
				$objObject->dttLeaveDate = $objObject->dttLeaveDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objMarrtialStatusObject)
				$objObject->objMarrtialStatusObject = MarrialStatus::GetSoapObjectFromObject($objObject->objMarrtialStatusObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMarrtialStatus = null;
			if ($objObject->objBloodGroupObject)
				$objObject->objBloodGroupObject = BloodGroup::GetSoapObjectFromObject($objObject->objBloodGroupObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBloodGroup = null;
			if ($objObject->objMotherTongueObject)
				$objObject->objMotherTongueObject = MotherTongue::GetSoapObjectFromObject($objObject->objMotherTongueObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMotherTongue = null;
			if ($objObject->objReligionObject)
				$objObject->objReligionObject = Religion::GetSoapObjectFromObject($objObject->objReligionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReligion = null;
			if ($objObject->objNationalityObject)
				$objObject->objNationalityObject = Nationality::GetSoapObjectFromObject($objObject->objNationalityObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intNationality = null;
			if ($objObject->objCourseOfAddmissionObject)
				$objObject->objCourseOfAddmissionObject = Role::GetSoapObjectFromObject($objObject->objCourseOfAddmissionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourseOfAddmission = null;
			if ($objObject->objHandicapedCatObject)
				$objObject->objHandicapedCatObject = HandicapedCat::GetSoapObjectFromObject($objObject->objHandicapedCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intHandicapedCat = null;
			if ($objObject->objCasteCatObject)
				$objObject->objCasteCatObject = Cast::GetSoapObjectFromObject($objObject->objCasteCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCasteCat = null;
			if ($objObject->objCasteObject)
				$objObject->objCasteObject = Cast::GetSoapObjectFromObject($objObject->objCasteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCaste = null;
			if ($objObject->objEducationTitleObject)
				$objObject->objEducationTitleObject = EducationTitle::GetSoapObjectFromObject($objObject->objEducationTitleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEducationTitle = null;
			if ($objObject->objFeeConcessionObject)
				$objObject->objFeeConcessionObject = FeesConcession::GetSoapObjectFromObject($objObject->objFeeConcessionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFeeConcession = null;
			if ($objObject->dttAdmittedDate)
				$objObject->dttAdmittedDate = $objObject->dttAdmittedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objUniversityReservationObject)
				$objObject->objUniversityReservationObject = UniversityReservation::GetSoapObjectFromObject($objObject->objUniversityReservationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUniversityReservation = null;
			if ($objObject->objAdmissionModeObject)
				$objObject->objAdmissionModeObject = AdmissionMode::GetSoapObjectFromObject($objObject->objAdmissionModeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAdmissionMode = null;
			if ($objObject->objInquiryObject)
				$objObject->objInquiryObject = Inquiry::GetSoapObjectFromObject($objObject->objInquiryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intInquiry = null;
			if ($objObject->objGenderObject)
				$objObject->objGenderObject = Gender::GetSoapObjectFromObject($objObject->objGenderObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGender = null;
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
			if ($objObject->objYearObject)
				$objObject->objYearObject = AcademicYear::GetSoapObjectFromObject($objObject->objYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intYear = null;
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
			$iArray['Idprofile'] = $this->intIdprofile;
			$iArray['Prefix'] = $this->intPrefix;
			$iArray['FirstName'] = $this->strFirstName;
			$iArray['MiddleName'] = $this->strMiddleName;
			$iArray['LastName'] = $this->strLastName;
			$iArray['LeaveDate'] = $this->dttLeaveDate;
			$iArray['MarrtialStatus'] = $this->intMarrtialStatus;
			$iArray['Handicaped'] = $this->strHandicaped;
			$iArray['AdharNo'] = $this->strAdharNo;
			$iArray['AnnualFamilyIncome'] = $this->strAnnualFamilyIncome;
			$iArray['BloodGroup'] = $this->intBloodGroup;
			$iArray['MotherTongue'] = $this->intMotherTongue;
			$iArray['Religion'] = $this->intReligion;
			$iArray['Domicile'] = $this->strDomicile;
			$iArray['Nationality'] = $this->intNationality;
			$iArray['CourseOfAddmission'] = $this->intCourseOfAddmission;
			$iArray['HandicapedCat'] = $this->intHandicapedCat;
			$iArray['CasteCat'] = $this->intCasteCat;
			$iArray['Caste'] = $this->intCaste;
			$iArray['EducationTitle'] = $this->intEducationTitle;
			$iArray['FeeConcession'] = $this->intFeeConcession;
			$iArray['AdmittedDate'] = $this->dttAdmittedDate;
			$iArray['MfirstName'] = $this->strMfirstName;
			$iArray['MmiddleName'] = $this->strMmiddleName;
			$iArray['MlastName'] = $this->strMlastName;
			$iArray['OldName'] = $this->strOldName;
			$iArray['ReasonOfNameChange'] = $this->strReasonOfNameChange;
			$iArray['UniversityReservation'] = $this->intUniversityReservation;
			$iArray['FatherFirstName'] = $this->strFatherFirstName;
			$iArray['FatherMiddleName'] = $this->strFatherMiddleName;
			$iArray['FatherLastName'] = $this->strFatherLastName;
			$iArray['MotherFirstName'] = $this->strMotherFirstName;
			$iArray['MotherMiddleName'] = $this->strMotherMiddleName;
			$iArray['MotherLastName'] = $this->strMotherLastName;
			$iArray['AdmissionMode'] = $this->intAdmissionMode;
			$iArray['Inquiry'] = $this->intInquiry;
			$iArray['AddressLine1'] = $this->strAddressLine1;
			$iArray['AddressLine2'] = $this->strAddressLine2;
			$iArray['Gender'] = $this->intGender;
			$iArray['State'] = $this->intState;
			$iArray['State1'] = $this->intState1;
			$iArray['District'] = $this->intDistrict;
			$iArray['District1'] = $this->intDistrict1;
			$iArray['Taluka'] = $this->intTaluka;
			$iArray['Taluka1'] = $this->intTaluka1;
			$iArray['City'] = $this->strCity;
			$iArray['City1'] = $this->strCity1;
			$iArray['Zipcode'] = $this->strZipcode;
			$iArray['Contact1'] = $this->strContact1;
			$iArray['Contact2'] = $this->strContact2;
			$iArray['Email1'] = $this->strEmail1;
			$iArray['Email2'] = $this->strEmail2;
			$iArray['Dob'] = $this->dttDob;
			$iArray['Age'] = $this->strAge;
			$iArray['BirthPlace'] = $this->strBirthPlace;
			$iArray['GuardianAnnualIncome'] = $this->strGuardianAnnualIncome;
			$iArray['Occupation'] = $this->strOccupation;
			$iArray['RelationOfApplicantWithGuardian'] = $this->strRelationOfApplicantWithGuardian;
			$iArray['Cvc'] = $this->blnCvc;
			$iArray['Ncl'] = $this->blnNcl;
			$iArray['Year'] = $this->intYear;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdprofile ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idprofile
     * @property-read QQNodeLedger $IdprofileObject
     * @property-read QQNode $Prefix
     * @property-read QQNodePrefix $PrefixObject
     * @property-read QQNode $FirstName
     * @property-read QQNode $MiddleName
     * @property-read QQNode $LastName
     * @property-read QQNode $LeaveDate
     * @property-read QQNode $MarrtialStatus
     * @property-read QQNodeMarrialStatus $MarrtialStatusObject
     * @property-read QQNode $Handicaped
     * @property-read QQNode $AdharNo
     * @property-read QQNode $AnnualFamilyIncome
     * @property-read QQNode $BloodGroup
     * @property-read QQNodeBloodGroup $BloodGroupObject
     * @property-read QQNode $MotherTongue
     * @property-read QQNodeMotherTongue $MotherTongueObject
     * @property-read QQNode $Religion
     * @property-read QQNodeReligion $ReligionObject
     * @property-read QQNode $Domicile
     * @property-read QQNode $Nationality
     * @property-read QQNodeNationality $NationalityObject
     * @property-read QQNode $CourseOfAddmission
     * @property-read QQNodeRole $CourseOfAddmissionObject
     * @property-read QQNode $HandicapedCat
     * @property-read QQNodeHandicapedCat $HandicapedCatObject
     * @property-read QQNode $CasteCat
     * @property-read QQNodeCast $CasteCatObject
     * @property-read QQNode $Caste
     * @property-read QQNodeCast $CasteObject
     * @property-read QQNode $EducationTitle
     * @property-read QQNodeEducationTitle $EducationTitleObject
     * @property-read QQNode $FeeConcession
     * @property-read QQNodeFeesConcession $FeeConcessionObject
     * @property-read QQNode $AdmittedDate
     * @property-read QQNode $MfirstName
     * @property-read QQNode $MmiddleName
     * @property-read QQNode $MlastName
     * @property-read QQNode $OldName
     * @property-read QQNode $ReasonOfNameChange
     * @property-read QQNode $UniversityReservation
     * @property-read QQNodeUniversityReservation $UniversityReservationObject
     * @property-read QQNode $FatherFirstName
     * @property-read QQNode $FatherMiddleName
     * @property-read QQNode $FatherLastName
     * @property-read QQNode $MotherFirstName
     * @property-read QQNode $MotherMiddleName
     * @property-read QQNode $MotherLastName
     * @property-read QQNode $AdmissionMode
     * @property-read QQNodeAdmissionMode $AdmissionModeObject
     * @property-read QQNode $Inquiry
     * @property-read QQNodeInquiry $InquiryObject
     * @property-read QQNode $AddressLine1
     * @property-read QQNode $AddressLine2
     * @property-read QQNode $Gender
     * @property-read QQNodeGender $GenderObject
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
     * @property-read QQNode $Zipcode
     * @property-read QQNode $Contact1
     * @property-read QQNode $Contact2
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $Dob
     * @property-read QQNode $Age
     * @property-read QQNode $BirthPlace
     * @property-read QQNode $GuardianAnnualIncome
     * @property-read QQNode $Occupation
     * @property-read QQNode $RelationOfApplicantWithGuardian
     * @property-read QQNode $Cvc
     * @property-read QQNode $Ncl
     * @property-read QQNode $Year
     * @property-read QQNodeAcademicYear $YearObject
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     *
     *
     * @property-read QQReverseReferenceNodeProfileHasQualifiedsubject $ProfileHasQualifiedsubject

     * @property-read QQNodeLedger $_PrimaryKeyNode
     **/
	class QQNodeProfile extends QQNode {
		protected $strTableName = 'profile';
		protected $strPrimaryKey = 'idprofile';
		protected $strClassName = 'Profile';
		public function __get($strName) {
			switch ($strName) {
				case 'Idprofile':
					return new QQNode('idprofile', 'Idprofile', 'Integer', $this);
				case 'IdprofileObject':
					return new QQNodeLedger('idprofile', 'IdprofileObject', 'Integer', $this);
				case 'Prefix':
					return new QQNode('prefix', 'Prefix', 'Integer', $this);
				case 'PrefixObject':
					return new QQNodePrefix('prefix', 'PrefixObject', 'Integer', $this);
				case 'FirstName':
					return new QQNode('first_name', 'FirstName', 'VarChar', $this);
				case 'MiddleName':
					return new QQNode('middle_name', 'MiddleName', 'VarChar', $this);
				case 'LastName':
					return new QQNode('last_name', 'LastName', 'VarChar', $this);
				case 'LeaveDate':
					return new QQNode('leave_date', 'LeaveDate', 'DateTime', $this);
				case 'MarrtialStatus':
					return new QQNode('marrtial_status', 'MarrtialStatus', 'Integer', $this);
				case 'MarrtialStatusObject':
					return new QQNodeMarrialStatus('marrtial_status', 'MarrtialStatusObject', 'Integer', $this);
				case 'Handicaped':
					return new QQNode('handicaped', 'Handicaped', 'VarChar', $this);
				case 'AdharNo':
					return new QQNode('adhar_no', 'AdharNo', 'VarChar', $this);
				case 'AnnualFamilyIncome':
					return new QQNode('annual_family_income', 'AnnualFamilyIncome', 'VarChar', $this);
				case 'BloodGroup':
					return new QQNode('blood_group', 'BloodGroup', 'Integer', $this);
				case 'BloodGroupObject':
					return new QQNodeBloodGroup('blood_group', 'BloodGroupObject', 'Integer', $this);
				case 'MotherTongue':
					return new QQNode('mother_tongue', 'MotherTongue', 'Integer', $this);
				case 'MotherTongueObject':
					return new QQNodeMotherTongue('mother_tongue', 'MotherTongueObject', 'Integer', $this);
				case 'Religion':
					return new QQNode('religion', 'Religion', 'Integer', $this);
				case 'ReligionObject':
					return new QQNodeReligion('religion', 'ReligionObject', 'Integer', $this);
				case 'Domicile':
					return new QQNode('domicile', 'Domicile', 'VarChar', $this);
				case 'Nationality':
					return new QQNode('nationality', 'Nationality', 'Integer', $this);
				case 'NationalityObject':
					return new QQNodeNationality('nationality', 'NationalityObject', 'Integer', $this);
				case 'CourseOfAddmission':
					return new QQNode('course_of_addmission', 'CourseOfAddmission', 'Integer', $this);
				case 'CourseOfAddmissionObject':
					return new QQNodeRole('course_of_addmission', 'CourseOfAddmissionObject', 'Integer', $this);
				case 'HandicapedCat':
					return new QQNode('handicaped_cat', 'HandicapedCat', 'Integer', $this);
				case 'HandicapedCatObject':
					return new QQNodeHandicapedCat('handicaped_cat', 'HandicapedCatObject', 'Integer', $this);
				case 'CasteCat':
					return new QQNode('caste_cat', 'CasteCat', 'Integer', $this);
				case 'CasteCatObject':
					return new QQNodeCast('caste_cat', 'CasteCatObject', 'Integer', $this);
				case 'Caste':
					return new QQNode('caste', 'Caste', 'Integer', $this);
				case 'CasteObject':
					return new QQNodeCast('caste', 'CasteObject', 'Integer', $this);
				case 'EducationTitle':
					return new QQNode('education_title', 'EducationTitle', 'Integer', $this);
				case 'EducationTitleObject':
					return new QQNodeEducationTitle('education_title', 'EducationTitleObject', 'Integer', $this);
				case 'FeeConcession':
					return new QQNode('fee_concession', 'FeeConcession', 'Integer', $this);
				case 'FeeConcessionObject':
					return new QQNodeFeesConcession('fee_concession', 'FeeConcessionObject', 'Integer', $this);
				case 'AdmittedDate':
					return new QQNode('admitted_date', 'AdmittedDate', 'DateTime', $this);
				case 'MfirstName':
					return new QQNode('mfirst_name', 'MfirstName', 'VarChar', $this);
				case 'MmiddleName':
					return new QQNode('mmiddle_name', 'MmiddleName', 'VarChar', $this);
				case 'MlastName':
					return new QQNode('mlast_name', 'MlastName', 'VarChar', $this);
				case 'OldName':
					return new QQNode('old_name', 'OldName', 'VarChar', $this);
				case 'ReasonOfNameChange':
					return new QQNode('reason_of_name_change', 'ReasonOfNameChange', 'Blob', $this);
				case 'UniversityReservation':
					return new QQNode('university_reservation', 'UniversityReservation', 'Integer', $this);
				case 'UniversityReservationObject':
					return new QQNodeUniversityReservation('university_reservation', 'UniversityReservationObject', 'Integer', $this);
				case 'FatherFirstName':
					return new QQNode('father_first_name', 'FatherFirstName', 'VarChar', $this);
				case 'FatherMiddleName':
					return new QQNode('father_middle_name', 'FatherMiddleName', 'VarChar', $this);
				case 'FatherLastName':
					return new QQNode('father_last_name', 'FatherLastName', 'VarChar', $this);
				case 'MotherFirstName':
					return new QQNode('mother_first_name', 'MotherFirstName', 'VarChar', $this);
				case 'MotherMiddleName':
					return new QQNode('mother_middle_name', 'MotherMiddleName', 'VarChar', $this);
				case 'MotherLastName':
					return new QQNode('mother_last_name', 'MotherLastName', 'VarChar', $this);
				case 'AdmissionMode':
					return new QQNode('admission_mode', 'AdmissionMode', 'Integer', $this);
				case 'AdmissionModeObject':
					return new QQNodeAdmissionMode('admission_mode', 'AdmissionModeObject', 'Integer', $this);
				case 'Inquiry':
					return new QQNode('inquiry', 'Inquiry', 'Integer', $this);
				case 'InquiryObject':
					return new QQNodeInquiry('inquiry', 'InquiryObject', 'Integer', $this);
				case 'AddressLine1':
					return new QQNode('address_line1', 'AddressLine1', 'Blob', $this);
				case 'AddressLine2':
					return new QQNode('address_line2', 'AddressLine2', 'Blob', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'Integer', $this);
				case 'GenderObject':
					return new QQNodeGender('gender', 'GenderObject', 'Integer', $this);
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
				case 'Zipcode':
					return new QQNode('zipcode', 'Zipcode', 'VarChar', $this);
				case 'Contact1':
					return new QQNode('contact1', 'Contact1', 'VarChar', $this);
				case 'Contact2':
					return new QQNode('contact2', 'Contact2', 'VarChar', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'VarChar', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'VarChar', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'Date', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'VarChar', $this);
				case 'BirthPlace':
					return new QQNode('birth_place', 'BirthPlace', 'VarChar', $this);
				case 'GuardianAnnualIncome':
					return new QQNode('guardian_annual_income', 'GuardianAnnualIncome', 'VarChar', $this);
				case 'Occupation':
					return new QQNode('occupation', 'Occupation', 'VarChar', $this);
				case 'RelationOfApplicantWithGuardian':
					return new QQNode('relation_of_applicant_with_guardian', 'RelationOfApplicantWithGuardian', 'VarChar', $this);
				case 'Cvc':
					return new QQNode('cvc', 'Cvc', 'Bit', $this);
				case 'Ncl':
					return new QQNode('ncl', 'Ncl', 'Bit', $this);
				case 'Year':
					return new QQNode('year', 'Year', 'Integer', $this);
				case 'YearObject':
					return new QQNodeAcademicYear('year', 'YearObject', 'Integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);
				case 'ProfileHasQualifiedsubject':
					return new QQReverseReferenceNodeProfileHasQualifiedsubject($this, 'profilehasqualifiedsubject', 'reverse_reference', 'profile');

				case '_PrimaryKeyNode':
					return new QQNodeLedger('idprofile', 'Idprofile', 'Integer', $this);
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
     * @property-read QQNode $Idprofile
     * @property-read QQNodeLedger $IdprofileObject
     * @property-read QQNode $Prefix
     * @property-read QQNodePrefix $PrefixObject
     * @property-read QQNode $FirstName
     * @property-read QQNode $MiddleName
     * @property-read QQNode $LastName
     * @property-read QQNode $LeaveDate
     * @property-read QQNode $MarrtialStatus
     * @property-read QQNodeMarrialStatus $MarrtialStatusObject
     * @property-read QQNode $Handicaped
     * @property-read QQNode $AdharNo
     * @property-read QQNode $AnnualFamilyIncome
     * @property-read QQNode $BloodGroup
     * @property-read QQNodeBloodGroup $BloodGroupObject
     * @property-read QQNode $MotherTongue
     * @property-read QQNodeMotherTongue $MotherTongueObject
     * @property-read QQNode $Religion
     * @property-read QQNodeReligion $ReligionObject
     * @property-read QQNode $Domicile
     * @property-read QQNode $Nationality
     * @property-read QQNodeNationality $NationalityObject
     * @property-read QQNode $CourseOfAddmission
     * @property-read QQNodeRole $CourseOfAddmissionObject
     * @property-read QQNode $HandicapedCat
     * @property-read QQNodeHandicapedCat $HandicapedCatObject
     * @property-read QQNode $CasteCat
     * @property-read QQNodeCast $CasteCatObject
     * @property-read QQNode $Caste
     * @property-read QQNodeCast $CasteObject
     * @property-read QQNode $EducationTitle
     * @property-read QQNodeEducationTitle $EducationTitleObject
     * @property-read QQNode $FeeConcession
     * @property-read QQNodeFeesConcession $FeeConcessionObject
     * @property-read QQNode $AdmittedDate
     * @property-read QQNode $MfirstName
     * @property-read QQNode $MmiddleName
     * @property-read QQNode $MlastName
     * @property-read QQNode $OldName
     * @property-read QQNode $ReasonOfNameChange
     * @property-read QQNode $UniversityReservation
     * @property-read QQNodeUniversityReservation $UniversityReservationObject
     * @property-read QQNode $FatherFirstName
     * @property-read QQNode $FatherMiddleName
     * @property-read QQNode $FatherLastName
     * @property-read QQNode $MotherFirstName
     * @property-read QQNode $MotherMiddleName
     * @property-read QQNode $MotherLastName
     * @property-read QQNode $AdmissionMode
     * @property-read QQNodeAdmissionMode $AdmissionModeObject
     * @property-read QQNode $Inquiry
     * @property-read QQNodeInquiry $InquiryObject
     * @property-read QQNode $AddressLine1
     * @property-read QQNode $AddressLine2
     * @property-read QQNode $Gender
     * @property-read QQNodeGender $GenderObject
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
     * @property-read QQNode $Zipcode
     * @property-read QQNode $Contact1
     * @property-read QQNode $Contact2
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $Dob
     * @property-read QQNode $Age
     * @property-read QQNode $BirthPlace
     * @property-read QQNode $GuardianAnnualIncome
     * @property-read QQNode $Occupation
     * @property-read QQNode $RelationOfApplicantWithGuardian
     * @property-read QQNode $Cvc
     * @property-read QQNode $Ncl
     * @property-read QQNode $Year
     * @property-read QQNodeAcademicYear $YearObject
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     *
     *
     * @property-read QQReverseReferenceNodeProfileHasQualifiedsubject $ProfileHasQualifiedsubject

     * @property-read QQNodeLedger $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProfile extends QQReverseReferenceNode {
		protected $strTableName = 'profile';
		protected $strPrimaryKey = 'idprofile';
		protected $strClassName = 'Profile';
		public function __get($strName) {
			switch ($strName) {
				case 'Idprofile':
					return new QQNode('idprofile', 'Idprofile', 'integer', $this);
				case 'IdprofileObject':
					return new QQNodeLedger('idprofile', 'IdprofileObject', 'integer', $this);
				case 'Prefix':
					return new QQNode('prefix', 'Prefix', 'integer', $this);
				case 'PrefixObject':
					return new QQNodePrefix('prefix', 'PrefixObject', 'integer', $this);
				case 'FirstName':
					return new QQNode('first_name', 'FirstName', 'string', $this);
				case 'MiddleName':
					return new QQNode('middle_name', 'MiddleName', 'string', $this);
				case 'LastName':
					return new QQNode('last_name', 'LastName', 'string', $this);
				case 'LeaveDate':
					return new QQNode('leave_date', 'LeaveDate', 'QDateTime', $this);
				case 'MarrtialStatus':
					return new QQNode('marrtial_status', 'MarrtialStatus', 'integer', $this);
				case 'MarrtialStatusObject':
					return new QQNodeMarrialStatus('marrtial_status', 'MarrtialStatusObject', 'integer', $this);
				case 'Handicaped':
					return new QQNode('handicaped', 'Handicaped', 'string', $this);
				case 'AdharNo':
					return new QQNode('adhar_no', 'AdharNo', 'string', $this);
				case 'AnnualFamilyIncome':
					return new QQNode('annual_family_income', 'AnnualFamilyIncome', 'string', $this);
				case 'BloodGroup':
					return new QQNode('blood_group', 'BloodGroup', 'integer', $this);
				case 'BloodGroupObject':
					return new QQNodeBloodGroup('blood_group', 'BloodGroupObject', 'integer', $this);
				case 'MotherTongue':
					return new QQNode('mother_tongue', 'MotherTongue', 'integer', $this);
				case 'MotherTongueObject':
					return new QQNodeMotherTongue('mother_tongue', 'MotherTongueObject', 'integer', $this);
				case 'Religion':
					return new QQNode('religion', 'Religion', 'integer', $this);
				case 'ReligionObject':
					return new QQNodeReligion('religion', 'ReligionObject', 'integer', $this);
				case 'Domicile':
					return new QQNode('domicile', 'Domicile', 'string', $this);
				case 'Nationality':
					return new QQNode('nationality', 'Nationality', 'integer', $this);
				case 'NationalityObject':
					return new QQNodeNationality('nationality', 'NationalityObject', 'integer', $this);
				case 'CourseOfAddmission':
					return new QQNode('course_of_addmission', 'CourseOfAddmission', 'integer', $this);
				case 'CourseOfAddmissionObject':
					return new QQNodeRole('course_of_addmission', 'CourseOfAddmissionObject', 'integer', $this);
				case 'HandicapedCat':
					return new QQNode('handicaped_cat', 'HandicapedCat', 'integer', $this);
				case 'HandicapedCatObject':
					return new QQNodeHandicapedCat('handicaped_cat', 'HandicapedCatObject', 'integer', $this);
				case 'CasteCat':
					return new QQNode('caste_cat', 'CasteCat', 'integer', $this);
				case 'CasteCatObject':
					return new QQNodeCast('caste_cat', 'CasteCatObject', 'integer', $this);
				case 'Caste':
					return new QQNode('caste', 'Caste', 'integer', $this);
				case 'CasteObject':
					return new QQNodeCast('caste', 'CasteObject', 'integer', $this);
				case 'EducationTitle':
					return new QQNode('education_title', 'EducationTitle', 'integer', $this);
				case 'EducationTitleObject':
					return new QQNodeEducationTitle('education_title', 'EducationTitleObject', 'integer', $this);
				case 'FeeConcession':
					return new QQNode('fee_concession', 'FeeConcession', 'integer', $this);
				case 'FeeConcessionObject':
					return new QQNodeFeesConcession('fee_concession', 'FeeConcessionObject', 'integer', $this);
				case 'AdmittedDate':
					return new QQNode('admitted_date', 'AdmittedDate', 'QDateTime', $this);
				case 'MfirstName':
					return new QQNode('mfirst_name', 'MfirstName', 'string', $this);
				case 'MmiddleName':
					return new QQNode('mmiddle_name', 'MmiddleName', 'string', $this);
				case 'MlastName':
					return new QQNode('mlast_name', 'MlastName', 'string', $this);
				case 'OldName':
					return new QQNode('old_name', 'OldName', 'string', $this);
				case 'ReasonOfNameChange':
					return new QQNode('reason_of_name_change', 'ReasonOfNameChange', 'string', $this);
				case 'UniversityReservation':
					return new QQNode('university_reservation', 'UniversityReservation', 'integer', $this);
				case 'UniversityReservationObject':
					return new QQNodeUniversityReservation('university_reservation', 'UniversityReservationObject', 'integer', $this);
				case 'FatherFirstName':
					return new QQNode('father_first_name', 'FatherFirstName', 'string', $this);
				case 'FatherMiddleName':
					return new QQNode('father_middle_name', 'FatherMiddleName', 'string', $this);
				case 'FatherLastName':
					return new QQNode('father_last_name', 'FatherLastName', 'string', $this);
				case 'MotherFirstName':
					return new QQNode('mother_first_name', 'MotherFirstName', 'string', $this);
				case 'MotherMiddleName':
					return new QQNode('mother_middle_name', 'MotherMiddleName', 'string', $this);
				case 'MotherLastName':
					return new QQNode('mother_last_name', 'MotherLastName', 'string', $this);
				case 'AdmissionMode':
					return new QQNode('admission_mode', 'AdmissionMode', 'integer', $this);
				case 'AdmissionModeObject':
					return new QQNodeAdmissionMode('admission_mode', 'AdmissionModeObject', 'integer', $this);
				case 'Inquiry':
					return new QQNode('inquiry', 'Inquiry', 'integer', $this);
				case 'InquiryObject':
					return new QQNodeInquiry('inquiry', 'InquiryObject', 'integer', $this);
				case 'AddressLine1':
					return new QQNode('address_line1', 'AddressLine1', 'string', $this);
				case 'AddressLine2':
					return new QQNode('address_line2', 'AddressLine2', 'string', $this);
				case 'Gender':
					return new QQNode('gender', 'Gender', 'integer', $this);
				case 'GenderObject':
					return new QQNodeGender('gender', 'GenderObject', 'integer', $this);
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
				case 'Zipcode':
					return new QQNode('zipcode', 'Zipcode', 'string', $this);
				case 'Contact1':
					return new QQNode('contact1', 'Contact1', 'string', $this);
				case 'Contact2':
					return new QQNode('contact2', 'Contact2', 'string', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'string', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'string', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'QDateTime', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'string', $this);
				case 'BirthPlace':
					return new QQNode('birth_place', 'BirthPlace', 'string', $this);
				case 'GuardianAnnualIncome':
					return new QQNode('guardian_annual_income', 'GuardianAnnualIncome', 'string', $this);
				case 'Occupation':
					return new QQNode('occupation', 'Occupation', 'string', $this);
				case 'RelationOfApplicantWithGuardian':
					return new QQNode('relation_of_applicant_with_guardian', 'RelationOfApplicantWithGuardian', 'string', $this);
				case 'Cvc':
					return new QQNode('cvc', 'Cvc', 'boolean', $this);
				case 'Ncl':
					return new QQNode('ncl', 'Ncl', 'boolean', $this);
				case 'Year':
					return new QQNode('year', 'Year', 'integer', $this);
				case 'YearObject':
					return new QQNodeAcademicYear('year', 'YearObject', 'integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);
				case 'ProfileHasQualifiedsubject':
					return new QQReverseReferenceNodeProfileHasQualifiedsubject($this, 'profilehasqualifiedsubject', 'reverse_reference', 'profile');

				case '_PrimaryKeyNode':
					return new QQNodeLedger('idprofile', 'Idprofile', 'integer', $this);
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
