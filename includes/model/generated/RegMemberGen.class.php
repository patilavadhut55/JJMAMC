<?php
	/**
	 * The abstract RegMemberGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the RegMember subclass which
	 * extends this RegMemberGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the RegMember class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdregMember the value for intIdregMember (Read-Only PK)
	 * @property string $Fname the value for strFname 
	 * @property string $Mname the value for strMname 
	 * @property string $Lname the value for strLname 
	 * @property integer $Batch the value for intBatch 
	 * @property integer $Course the value for intCourse 
	 * @property integer $Branch the value for intBranch 
	 * @property string $PrmtAddress1 the value for strPrmtAddress1 
	 * @property string $PrmtAddress2 the value for strPrmtAddress2 
	 * @property string $PrmtCity the value for strPrmtCity 
	 * @property integer $PrmtState the value for intPrmtState 
	 * @property string $PrmtPin the value for strPrmtPin 
	 * @property string $Email1 the value for strEmail1 
	 * @property string $Email2 the value for strEmail2 
	 * @property string $Phone1 the value for strPhone1 
	 * @property string $Phone2 the value for strPhone2 
	 * @property string $CoName the value for strCoName 
	 * @property string $CoDesignation the value for strCoDesignation 
	 * @property string $CoAddress1 the value for strCoAddress1 
	 * @property string $CoAddress2 the value for strCoAddress2 
	 * @property string $CoCity the value for strCoCity 
	 * @property integer $CoState the value for intCoState 
	 * @property string $CoPin the value for strCoPin 
	 * @property string $Interest the value for strInterest 
	 * @property string $Hobbies the value for strHobbies 
	 * @property string $HighQual the value for strHighQual 
	 * @property string $CoCountry the value for strCoCountry 
	 * @property string $ReceiptNo the value for strReceiptNo 
	 * @property string $ChapterName the value for strChapterName 
	 * @property string $MemberDues the value for strMemberDues 
	 * @property QDateTime $NextRenual the value for dttNextRenual 
	 * @property string $Bio the value for strBio 
	 * @property integer $BloodGroup the value for intBloodGroup 
	 * @property string $FamilyMembers the value for strFamilyMembers 
	 * @property QDateTime $Dob the value for dttDob 
	 * @property string $FbLink the value for strFbLink 
	 * @property string $LkdLink the value for strLkdLink 
	 * @property string $TwLink the value for strTwLink 
	 * @property string $PersonalLink the value for strPersonalLink 
	 * @property CalenderYear $BatchObject the value for the CalenderYear object referenced by intBatch 
	 * @property Role $CourseObject the value for the Role object referenced by intCourse 
	 * @property Role $BranchObject the value for the Role object referenced by intBranch 
	 * @property Place $PrmtStateObject the value for the Place object referenced by intPrmtState 
	 * @property Place $CoStateObject the value for the Place object referenced by intCoState 
	 * @property-read AssMember $_AssMemberAsMember the value for the private _objAssMemberAsMember (Read-Only) if set due to an expansion on the ass_member.member_id reverse relationship
	 * @property-read AssMember[] $_AssMemberAsMemberArray the value for the private _objAssMemberAsMemberArray (Read-Only) if set due to an ExpandAsArray on the ass_member.member_id reverse relationship
	 * @property-read Receipts $_Receipts the value for the private _objReceipts (Read-Only) if set due to an expansion on the receipts.reg_member reverse relationship
	 * @property-read Receipts[] $_ReceiptsArray the value for the private _objReceiptsArray (Read-Only) if set due to an ExpandAsArray on the receipts.reg_member reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RegMemberGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column reg_member.idreg_member
		 * @var integer intIdregMember
		 */
		protected $intIdregMember;
		const IdregMemberDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.fname
		 * @var string strFname
		 */
		protected $strFname;
		const FnameMaxLength = 45;
		const FnameDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.mname
		 * @var string strMname
		 */
		protected $strMname;
		const MnameMaxLength = 45;
		const MnameDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.lname
		 * @var string strLname
		 */
		protected $strLname;
		const LnameMaxLength = 45;
		const LnameDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.batch
		 * @var integer intBatch
		 */
		protected $intBatch;
		const BatchDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.course
		 * @var integer intCourse
		 */
		protected $intCourse;
		const CourseDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.branch
		 * @var integer intBranch
		 */
		protected $intBranch;
		const BranchDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.prmt_address1
		 * @var string strPrmtAddress1
		 */
		protected $strPrmtAddress1;
		const PrmtAddress1Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.prmt_address2
		 * @var string strPrmtAddress2
		 */
		protected $strPrmtAddress2;
		const PrmtAddress2Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.prmt_city
		 * @var string strPrmtCity
		 */
		protected $strPrmtCity;
		const PrmtCityMaxLength = 45;
		const PrmtCityDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.prmt_state
		 * @var integer intPrmtState
		 */
		protected $intPrmtState;
		const PrmtStateDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.prmt_pin
		 * @var string strPrmtPin
		 */
		protected $strPrmtPin;
		const PrmtPinMaxLength = 45;
		const PrmtPinDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.email1
		 * @var string strEmail1
		 */
		protected $strEmail1;
		const Email1MaxLength = 45;
		const Email1Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.email2
		 * @var string strEmail2
		 */
		protected $strEmail2;
		const Email2MaxLength = 45;
		const Email2Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.phone1
		 * @var string strPhone1
		 */
		protected $strPhone1;
		const Phone1MaxLength = 45;
		const Phone1Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.phone2
		 * @var string strPhone2
		 */
		protected $strPhone2;
		const Phone2MaxLength = 45;
		const Phone2Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_name
		 * @var string strCoName
		 */
		protected $strCoName;
		const CoNameMaxLength = 45;
		const CoNameDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_designation
		 * @var string strCoDesignation
		 */
		protected $strCoDesignation;
		const CoDesignationMaxLength = 45;
		const CoDesignationDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_address1
		 * @var string strCoAddress1
		 */
		protected $strCoAddress1;
		const CoAddress1Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_address2
		 * @var string strCoAddress2
		 */
		protected $strCoAddress2;
		const CoAddress2Default = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_city
		 * @var string strCoCity
		 */
		protected $strCoCity;
		const CoCityMaxLength = 45;
		const CoCityDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_state
		 * @var integer intCoState
		 */
		protected $intCoState;
		const CoStateDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_pin
		 * @var string strCoPin
		 */
		protected $strCoPin;
		const CoPinMaxLength = 45;
		const CoPinDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.interest
		 * @var string strInterest
		 */
		protected $strInterest;
		const InterestDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.hobbies
		 * @var string strHobbies
		 */
		protected $strHobbies;
		const HobbiesDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.high_qual
		 * @var string strHighQual
		 */
		protected $strHighQual;
		const HighQualDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.co_country
		 * @var string strCoCountry
		 */
		protected $strCoCountry;
		const CoCountryMaxLength = 45;
		const CoCountryDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.receipt_no
		 * @var string strReceiptNo
		 */
		protected $strReceiptNo;
		const ReceiptNoMaxLength = 45;
		const ReceiptNoDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.chapter_name
		 * @var string strChapterName
		 */
		protected $strChapterName;
		const ChapterNameMaxLength = 45;
		const ChapterNameDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.member_dues
		 * @var string strMemberDues
		 */
		protected $strMemberDues;
		const MemberDuesMaxLength = 45;
		const MemberDuesDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.next_renual
		 * @var QDateTime dttNextRenual
		 */
		protected $dttNextRenual;
		const NextRenualDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.bio
		 * @var string strBio
		 */
		protected $strBio;
		const BioDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.blood_group
		 * @var integer intBloodGroup
		 */
		protected $intBloodGroup;
		const BloodGroupDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.family_members
		 * @var string strFamilyMembers
		 */
		protected $strFamilyMembers;
		const FamilyMembersDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.dob
		 * @var QDateTime dttDob
		 */
		protected $dttDob;
		const DobDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.fb_link
		 * @var string strFbLink
		 */
		protected $strFbLink;
		const FbLinkDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.lkd_link
		 * @var string strLkdLink
		 */
		protected $strLkdLink;
		const LkdLinkDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.tw_link
		 * @var string strTwLink
		 */
		protected $strTwLink;
		const TwLinkDefault = null;


		/**
		 * Protected member variable that maps to the database column reg_member.personal_link
		 * @var string strPersonalLink
		 */
		protected $strPersonalLink;
		const PersonalLinkDefault = null;


		/**
		 * Private member variable that stores a reference to a single AssMemberAsMember object
		 * (of type AssMember), if this RegMember object was restored with
		 * an expansion on the ass_member association table.
		 * @var AssMember _objAssMemberAsMember;
		 */
		private $_objAssMemberAsMember;

		/**
		 * Private member variable that stores a reference to an array of AssMemberAsMember objects
		 * (of type AssMember[]), if this RegMember object was restored with
		 * an ExpandAsArray on the ass_member association table.
		 * @var AssMember[] _objAssMemberAsMemberArray;
		 */
		private $_objAssMemberAsMemberArray = null;

		/**
		 * Private member variable that stores a reference to a single Receipts object
		 * (of type Receipts), if this RegMember object was restored with
		 * an expansion on the receipts association table.
		 * @var Receipts _objReceipts;
		 */
		private $_objReceipts;

		/**
		 * Private member variable that stores a reference to an array of Receipts objects
		 * (of type Receipts[]), if this RegMember object was restored with
		 * an ExpandAsArray on the receipts association table.
		 * @var Receipts[] _objReceiptsArray;
		 */
		private $_objReceiptsArray = null;

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
		 * in the database column reg_member.batch.
		 *
		 * NOTE: Always use the BatchObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objBatchObject
		 */
		protected $objBatchObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column reg_member.course.
		 *
		 * NOTE: Always use the CourseObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objCourseObject
		 */
		protected $objCourseObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column reg_member.branch.
		 *
		 * NOTE: Always use the BranchObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objBranchObject
		 */
		protected $objBranchObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column reg_member.prmt_state.
		 *
		 * NOTE: Always use the PrmtStateObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objPrmtStateObject
		 */
		protected $objPrmtStateObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column reg_member.co_state.
		 *
		 * NOTE: Always use the CoStateObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objCoStateObject
		 */
		protected $objCoStateObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdregMember = RegMember::IdregMemberDefault;
			$this->strFname = RegMember::FnameDefault;
			$this->strMname = RegMember::MnameDefault;
			$this->strLname = RegMember::LnameDefault;
			$this->intBatch = RegMember::BatchDefault;
			$this->intCourse = RegMember::CourseDefault;
			$this->intBranch = RegMember::BranchDefault;
			$this->strPrmtAddress1 = RegMember::PrmtAddress1Default;
			$this->strPrmtAddress2 = RegMember::PrmtAddress2Default;
			$this->strPrmtCity = RegMember::PrmtCityDefault;
			$this->intPrmtState = RegMember::PrmtStateDefault;
			$this->strPrmtPin = RegMember::PrmtPinDefault;
			$this->strEmail1 = RegMember::Email1Default;
			$this->strEmail2 = RegMember::Email2Default;
			$this->strPhone1 = RegMember::Phone1Default;
			$this->strPhone2 = RegMember::Phone2Default;
			$this->strCoName = RegMember::CoNameDefault;
			$this->strCoDesignation = RegMember::CoDesignationDefault;
			$this->strCoAddress1 = RegMember::CoAddress1Default;
			$this->strCoAddress2 = RegMember::CoAddress2Default;
			$this->strCoCity = RegMember::CoCityDefault;
			$this->intCoState = RegMember::CoStateDefault;
			$this->strCoPin = RegMember::CoPinDefault;
			$this->strInterest = RegMember::InterestDefault;
			$this->strHobbies = RegMember::HobbiesDefault;
			$this->strHighQual = RegMember::HighQualDefault;
			$this->strCoCountry = RegMember::CoCountryDefault;
			$this->strReceiptNo = RegMember::ReceiptNoDefault;
			$this->strChapterName = RegMember::ChapterNameDefault;
			$this->strMemberDues = RegMember::MemberDuesDefault;
			$this->dttNextRenual = (RegMember::NextRenualDefault === null)?null:new QDateTime(RegMember::NextRenualDefault);
			$this->strBio = RegMember::BioDefault;
			$this->intBloodGroup = RegMember::BloodGroupDefault;
			$this->strFamilyMembers = RegMember::FamilyMembersDefault;
			$this->dttDob = (RegMember::DobDefault === null)?null:new QDateTime(RegMember::DobDefault);
			$this->strFbLink = RegMember::FbLinkDefault;
			$this->strLkdLink = RegMember::LkdLinkDefault;
			$this->strTwLink = RegMember::TwLinkDefault;
			$this->strPersonalLink = RegMember::PersonalLinkDefault;
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
		 * Load a RegMember from PK Info
		 * @param integer $intIdregMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember
		 */
		public static function Load($intIdregMember, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'RegMember', $intIdregMember);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = RegMember::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::RegMember()->IdregMember, $intIdregMember)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all RegMembers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call RegMember::QueryArray to perform the LoadAll query
			try {
				return RegMember::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all RegMembers
		 * @return int
		 */
		public static function CountAll() {
			// Call RegMember::QueryCount to perform the CountAll query
			return RegMember::QueryCount(QQ::All());
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
			$objDatabase = RegMember::GetDatabase();

			// Create/Build out the QueryBuilder object with RegMember-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'reg_member');

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
				RegMember::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('reg_member');

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
		 * Static Qcubed Query method to query for a single RegMember object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return RegMember the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RegMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new RegMember object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = RegMember::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return RegMember::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of RegMember objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return RegMember[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RegMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return RegMember::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = RegMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of RegMember objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RegMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = RegMember::GetDatabase();

			$strQuery = RegMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/regmember', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = RegMember::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this RegMember
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'reg_member';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idreg_member', $strAliasPrefix . 'idreg_member');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idreg_member', $strAliasPrefix . 'idreg_member');
			    $objBuilder->AddSelectItem($strTableName, 'fname', $strAliasPrefix . 'fname');
			    $objBuilder->AddSelectItem($strTableName, 'mname', $strAliasPrefix . 'mname');
			    $objBuilder->AddSelectItem($strTableName, 'lname', $strAliasPrefix . 'lname');
			    $objBuilder->AddSelectItem($strTableName, 'batch', $strAliasPrefix . 'batch');
			    $objBuilder->AddSelectItem($strTableName, 'course', $strAliasPrefix . 'course');
			    $objBuilder->AddSelectItem($strTableName, 'branch', $strAliasPrefix . 'branch');
			    $objBuilder->AddSelectItem($strTableName, 'prmt_address1', $strAliasPrefix . 'prmt_address1');
			    $objBuilder->AddSelectItem($strTableName, 'prmt_address2', $strAliasPrefix . 'prmt_address2');
			    $objBuilder->AddSelectItem($strTableName, 'prmt_city', $strAliasPrefix . 'prmt_city');
			    $objBuilder->AddSelectItem($strTableName, 'prmt_state', $strAliasPrefix . 'prmt_state');
			    $objBuilder->AddSelectItem($strTableName, 'prmt_pin', $strAliasPrefix . 'prmt_pin');
			    $objBuilder->AddSelectItem($strTableName, 'email1', $strAliasPrefix . 'email1');
			    $objBuilder->AddSelectItem($strTableName, 'email2', $strAliasPrefix . 'email2');
			    $objBuilder->AddSelectItem($strTableName, 'phone1', $strAliasPrefix . 'phone1');
			    $objBuilder->AddSelectItem($strTableName, 'phone2', $strAliasPrefix . 'phone2');
			    $objBuilder->AddSelectItem($strTableName, 'co_name', $strAliasPrefix . 'co_name');
			    $objBuilder->AddSelectItem($strTableName, 'co_designation', $strAliasPrefix . 'co_designation');
			    $objBuilder->AddSelectItem($strTableName, 'co_address1', $strAliasPrefix . 'co_address1');
			    $objBuilder->AddSelectItem($strTableName, 'co_address2', $strAliasPrefix . 'co_address2');
			    $objBuilder->AddSelectItem($strTableName, 'co_city', $strAliasPrefix . 'co_city');
			    $objBuilder->AddSelectItem($strTableName, 'co_state', $strAliasPrefix . 'co_state');
			    $objBuilder->AddSelectItem($strTableName, 'co_pin', $strAliasPrefix . 'co_pin');
			    $objBuilder->AddSelectItem($strTableName, 'interest', $strAliasPrefix . 'interest');
			    $objBuilder->AddSelectItem($strTableName, 'hobbies', $strAliasPrefix . 'hobbies');
			    $objBuilder->AddSelectItem($strTableName, 'high_qual', $strAliasPrefix . 'high_qual');
			    $objBuilder->AddSelectItem($strTableName, 'co_country', $strAliasPrefix . 'co_country');
			    $objBuilder->AddSelectItem($strTableName, 'receipt_no', $strAliasPrefix . 'receipt_no');
			    $objBuilder->AddSelectItem($strTableName, 'chapter_name', $strAliasPrefix . 'chapter_name');
			    $objBuilder->AddSelectItem($strTableName, 'member_dues', $strAliasPrefix . 'member_dues');
			    $objBuilder->AddSelectItem($strTableName, 'next_renual', $strAliasPrefix . 'next_renual');
			    $objBuilder->AddSelectItem($strTableName, 'bio', $strAliasPrefix . 'bio');
			    $objBuilder->AddSelectItem($strTableName, 'blood_group', $strAliasPrefix . 'blood_group');
			    $objBuilder->AddSelectItem($strTableName, 'family_members', $strAliasPrefix . 'family_members');
			    $objBuilder->AddSelectItem($strTableName, 'dob', $strAliasPrefix . 'dob');
			    $objBuilder->AddSelectItem($strTableName, 'fb_link', $strAliasPrefix . 'fb_link');
			    $objBuilder->AddSelectItem($strTableName, 'lkd_link', $strAliasPrefix . 'lkd_link');
			    $objBuilder->AddSelectItem($strTableName, 'tw_link', $strAliasPrefix . 'tw_link');
			    $objBuilder->AddSelectItem($strTableName, 'personal_link', $strAliasPrefix . 'personal_link');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a RegMember from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this RegMember::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return RegMember
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdregMember == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'reg_member__';


						// Expanding reverse references: AssMemberAsMember
						$strAlias = $strAliasPrefix . 'assmemberasmember__idass_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAssMemberAsMemberArray)
								$objPreviousItem->_objAssMemberAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAssMemberAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAssMemberAsMemberArray;
								$objChildItem = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAssMemberAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAssMemberAsMemberArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Receipts
						$strAlias = $strAliasPrefix . 'receipts__idreceipts';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objReceiptsArray)
								$objPreviousItem->_objReceiptsArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objReceiptsArray)) {
								$objPreviousChildItems = $objPreviousItem->_objReceiptsArray;
								$objChildItem = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receipts__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objReceiptsArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objReceiptsArray[] = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receipts__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'reg_member__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the RegMember object
			$objToReturn = new RegMember();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdregMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'lname';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLname = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'batch';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBatch = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'course';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCourse = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'branch';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBranch = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'prmt_address1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrmtAddress1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'prmt_address2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrmtAddress2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'prmt_city';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrmtCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'prmt_state';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPrmtState = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'prmt_pin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrmtPin = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'phone1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPhone1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'phone2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPhone2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'co_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'co_designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoDesignation = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'co_address1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoAddress1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'co_address2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoAddress2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'co_city';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'co_state';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCoState = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'co_pin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoPin = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'interest';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strInterest = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'hobbies';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strHobbies = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'high_qual';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strHighQual = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'co_country';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoCountry = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'receipt_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strReceiptNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'chapter_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strChapterName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'member_dues';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMemberDues = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'next_renual';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttNextRenual = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'bio';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strBio = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'blood_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBloodGroup = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'family_members';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFamilyMembers = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'dob';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDob = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'fb_link';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFbLink = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'lkd_link';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLkdLink = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'tw_link';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTwLink = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'personal_link';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPersonalLink = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdregMember != $objPreviousItem->IdregMember) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAssMemberAsMemberArray);
					$cnt = count($objToReturn->_objAssMemberAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAssMemberAsMemberArray, $objToReturn->_objAssMemberAsMemberArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objReceiptsArray);
					$cnt = count($objToReturn->_objReceiptsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objReceiptsArray, $objToReturn->_objReceiptsArray)) {
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
				$strAliasPrefix = 'reg_member__';

			// Check for BatchObject Early Binding
			$strAlias = $strAliasPrefix . 'batch__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBatchObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'batch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CourseObject Early Binding
			$strAlias = $strAliasPrefix . 'course__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourseObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'course__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BranchObject Early Binding
			$strAlias = $strAliasPrefix . 'branch__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBranchObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'branch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PrmtStateObject Early Binding
			$strAlias = $strAliasPrefix . 'prmt_state__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPrmtStateObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'prmt_state__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CoStateObject Early Binding
			$strAlias = $strAliasPrefix . 'co_state__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCoStateObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'co_state__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AssMemberAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'assmemberasmember__idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAssMemberAsMemberArray)
				$objToReturn->_objAssMemberAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAssMemberAsMemberArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAssMemberAsMember = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Receipts Virtual Binding
			$strAlias = $strAliasPrefix . 'receipts__idreceipts';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objReceiptsArray)
				$objToReturn->_objReceiptsArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objReceiptsArray[] = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receipts__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objReceipts = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receipts__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of RegMembers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return RegMember[]
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
					$objItem = RegMember::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = RegMember::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single RegMember object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return RegMember next row resulting from the query
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
			return RegMember::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single RegMember object,
		 * by IdregMember Index(es)
		 * @param integer $intIdregMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember
		*/
		public static function LoadByIdregMember($intIdregMember, $objOptionalClauses = null) {
			return RegMember::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::RegMember()->IdregMember, $intIdregMember)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of RegMember objects,
		 * by Batch Index(es)
		 * @param integer $intBatch
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public static function LoadArrayByBatch($intBatch, $objOptionalClauses = null) {
			// Call RegMember::QueryArray to perform the LoadArrayByBatch query
			try {
				return RegMember::QueryArray(
					QQ::Equal(QQN::RegMember()->Batch, $intBatch),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RegMembers
		 * by Batch Index(es)
		 * @param integer $intBatch
		 * @return int
		*/
		public static function CountByBatch($intBatch) {
			// Call RegMember::QueryCount to perform the CountByBatch query
			return RegMember::QueryCount(
				QQ::Equal(QQN::RegMember()->Batch, $intBatch)
			);
		}

		/**
		 * Load an array of RegMember objects,
		 * by Branch Index(es)
		 * @param integer $intBranch
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public static function LoadArrayByBranch($intBranch, $objOptionalClauses = null) {
			// Call RegMember::QueryArray to perform the LoadArrayByBranch query
			try {
				return RegMember::QueryArray(
					QQ::Equal(QQN::RegMember()->Branch, $intBranch),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RegMembers
		 * by Branch Index(es)
		 * @param integer $intBranch
		 * @return int
		*/
		public static function CountByBranch($intBranch) {
			// Call RegMember::QueryCount to perform the CountByBranch query
			return RegMember::QueryCount(
				QQ::Equal(QQN::RegMember()->Branch, $intBranch)
			);
		}

		/**
		 * Load an array of RegMember objects,
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public static function LoadArrayByCourse($intCourse, $objOptionalClauses = null) {
			// Call RegMember::QueryArray to perform the LoadArrayByCourse query
			try {
				return RegMember::QueryArray(
					QQ::Equal(QQN::RegMember()->Course, $intCourse),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RegMembers
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @return int
		*/
		public static function CountByCourse($intCourse) {
			// Call RegMember::QueryCount to perform the CountByCourse query
			return RegMember::QueryCount(
				QQ::Equal(QQN::RegMember()->Course, $intCourse)
			);
		}

		/**
		 * Load an array of RegMember objects,
		 * by PrmtState Index(es)
		 * @param integer $intPrmtState
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public static function LoadArrayByPrmtState($intPrmtState, $objOptionalClauses = null) {
			// Call RegMember::QueryArray to perform the LoadArrayByPrmtState query
			try {
				return RegMember::QueryArray(
					QQ::Equal(QQN::RegMember()->PrmtState, $intPrmtState),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RegMembers
		 * by PrmtState Index(es)
		 * @param integer $intPrmtState
		 * @return int
		*/
		public static function CountByPrmtState($intPrmtState) {
			// Call RegMember::QueryCount to perform the CountByPrmtState query
			return RegMember::QueryCount(
				QQ::Equal(QQN::RegMember()->PrmtState, $intPrmtState)
			);
		}

		/**
		 * Load an array of RegMember objects,
		 * by CoState Index(es)
		 * @param integer $intCoState
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public static function LoadArrayByCoState($intCoState, $objOptionalClauses = null) {
			// Call RegMember::QueryArray to perform the LoadArrayByCoState query
			try {
				return RegMember::QueryArray(
					QQ::Equal(QQN::RegMember()->CoState, $intCoState),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count RegMembers
		 * by CoState Index(es)
		 * @param integer $intCoState
		 * @return int
		*/
		public static function CountByCoState($intCoState) {
			// Call RegMember::QueryCount to perform the CountByCoState query
			return RegMember::QueryCount(
				QQ::Equal(QQN::RegMember()->CoState, $intCoState)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this RegMember
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `reg_member` (
							`fname`,
							`mname`,
							`lname`,
							`batch`,
							`course`,
							`branch`,
							`prmt_address1`,
							`prmt_address2`,
							`prmt_city`,
							`prmt_state`,
							`prmt_pin`,
							`email1`,
							`email2`,
							`phone1`,
							`phone2`,
							`co_name`,
							`co_designation`,
							`co_address1`,
							`co_address2`,
							`co_city`,
							`co_state`,
							`co_pin`,
							`interest`,
							`hobbies`,
							`high_qual`,
							`co_country`,
							`receipt_no`,
							`chapter_name`,
							`member_dues`,
							`next_renual`,
							`bio`,
							`blood_group`,
							`family_members`,
							`dob`,
							`fb_link`,
							`lkd_link`,
							`tw_link`,
							`personal_link`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFname) . ',
							' . $objDatabase->SqlVariable($this->strMname) . ',
							' . $objDatabase->SqlVariable($this->strLname) . ',
							' . $objDatabase->SqlVariable($this->intBatch) . ',
							' . $objDatabase->SqlVariable($this->intCourse) . ',
							' . $objDatabase->SqlVariable($this->intBranch) . ',
							' . $objDatabase->SqlVariable($this->strPrmtAddress1) . ',
							' . $objDatabase->SqlVariable($this->strPrmtAddress2) . ',
							' . $objDatabase->SqlVariable($this->strPrmtCity) . ',
							' . $objDatabase->SqlVariable($this->intPrmtState) . ',
							' . $objDatabase->SqlVariable($this->strPrmtPin) . ',
							' . $objDatabase->SqlVariable($this->strEmail1) . ',
							' . $objDatabase->SqlVariable($this->strEmail2) . ',
							' . $objDatabase->SqlVariable($this->strPhone1) . ',
							' . $objDatabase->SqlVariable($this->strPhone2) . ',
							' . $objDatabase->SqlVariable($this->strCoName) . ',
							' . $objDatabase->SqlVariable($this->strCoDesignation) . ',
							' . $objDatabase->SqlVariable($this->strCoAddress1) . ',
							' . $objDatabase->SqlVariable($this->strCoAddress2) . ',
							' . $objDatabase->SqlVariable($this->strCoCity) . ',
							' . $objDatabase->SqlVariable($this->intCoState) . ',
							' . $objDatabase->SqlVariable($this->strCoPin) . ',
							' . $objDatabase->SqlVariable($this->strInterest) . ',
							' . $objDatabase->SqlVariable($this->strHobbies) . ',
							' . $objDatabase->SqlVariable($this->strHighQual) . ',
							' . $objDatabase->SqlVariable($this->strCoCountry) . ',
							' . $objDatabase->SqlVariable($this->strReceiptNo) . ',
							' . $objDatabase->SqlVariable($this->strChapterName) . ',
							' . $objDatabase->SqlVariable($this->strMemberDues) . ',
							' . $objDatabase->SqlVariable($this->dttNextRenual) . ',
							' . $objDatabase->SqlVariable($this->strBio) . ',
							' . $objDatabase->SqlVariable($this->intBloodGroup) . ',
							' . $objDatabase->SqlVariable($this->strFamilyMembers) . ',
							' . $objDatabase->SqlVariable($this->dttDob) . ',
							' . $objDatabase->SqlVariable($this->strFbLink) . ',
							' . $objDatabase->SqlVariable($this->strLkdLink) . ',
							' . $objDatabase->SqlVariable($this->strTwLink) . ',
							' . $objDatabase->SqlVariable($this->strPersonalLink) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdregMember = $objDatabase->InsertId('reg_member', 'idreg_member');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`reg_member`
						SET
							`fname` = ' . $objDatabase->SqlVariable($this->strFname) . ',
							`mname` = ' . $objDatabase->SqlVariable($this->strMname) . ',
							`lname` = ' . $objDatabase->SqlVariable($this->strLname) . ',
							`batch` = ' . $objDatabase->SqlVariable($this->intBatch) . ',
							`course` = ' . $objDatabase->SqlVariable($this->intCourse) . ',
							`branch` = ' . $objDatabase->SqlVariable($this->intBranch) . ',
							`prmt_address1` = ' . $objDatabase->SqlVariable($this->strPrmtAddress1) . ',
							`prmt_address2` = ' . $objDatabase->SqlVariable($this->strPrmtAddress2) . ',
							`prmt_city` = ' . $objDatabase->SqlVariable($this->strPrmtCity) . ',
							`prmt_state` = ' . $objDatabase->SqlVariable($this->intPrmtState) . ',
							`prmt_pin` = ' . $objDatabase->SqlVariable($this->strPrmtPin) . ',
							`email1` = ' . $objDatabase->SqlVariable($this->strEmail1) . ',
							`email2` = ' . $objDatabase->SqlVariable($this->strEmail2) . ',
							`phone1` = ' . $objDatabase->SqlVariable($this->strPhone1) . ',
							`phone2` = ' . $objDatabase->SqlVariable($this->strPhone2) . ',
							`co_name` = ' . $objDatabase->SqlVariable($this->strCoName) . ',
							`co_designation` = ' . $objDatabase->SqlVariable($this->strCoDesignation) . ',
							`co_address1` = ' . $objDatabase->SqlVariable($this->strCoAddress1) . ',
							`co_address2` = ' . $objDatabase->SqlVariable($this->strCoAddress2) . ',
							`co_city` = ' . $objDatabase->SqlVariable($this->strCoCity) . ',
							`co_state` = ' . $objDatabase->SqlVariable($this->intCoState) . ',
							`co_pin` = ' . $objDatabase->SqlVariable($this->strCoPin) . ',
							`interest` = ' . $objDatabase->SqlVariable($this->strInterest) . ',
							`hobbies` = ' . $objDatabase->SqlVariable($this->strHobbies) . ',
							`high_qual` = ' . $objDatabase->SqlVariable($this->strHighQual) . ',
							`co_country` = ' . $objDatabase->SqlVariable($this->strCoCountry) . ',
							`receipt_no` = ' . $objDatabase->SqlVariable($this->strReceiptNo) . ',
							`chapter_name` = ' . $objDatabase->SqlVariable($this->strChapterName) . ',
							`member_dues` = ' . $objDatabase->SqlVariable($this->strMemberDues) . ',
							`next_renual` = ' . $objDatabase->SqlVariable($this->dttNextRenual) . ',
							`bio` = ' . $objDatabase->SqlVariable($this->strBio) . ',
							`blood_group` = ' . $objDatabase->SqlVariable($this->intBloodGroup) . ',
							`family_members` = ' . $objDatabase->SqlVariable($this->strFamilyMembers) . ',
							`dob` = ' . $objDatabase->SqlVariable($this->dttDob) . ',
							`fb_link` = ' . $objDatabase->SqlVariable($this->strFbLink) . ',
							`lkd_link` = ' . $objDatabase->SqlVariable($this->strLkdLink) . ',
							`tw_link` = ' . $objDatabase->SqlVariable($this->strTwLink) . ',
							`personal_link` = ' . $objDatabase->SqlVariable($this->strPersonalLink) . '
						WHERE
							`idreg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
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
		 * Delete this RegMember
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this RegMember with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this RegMember ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'RegMember', $this->intIdregMember);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all RegMembers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate reg_member table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `reg_member`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this RegMember from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved RegMember object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = RegMember::Load($this->intIdregMember);

			// Update $this's local variables to match
			$this->strFname = $objReloaded->strFname;
			$this->strMname = $objReloaded->strMname;
			$this->strLname = $objReloaded->strLname;
			$this->Batch = $objReloaded->Batch;
			$this->Course = $objReloaded->Course;
			$this->Branch = $objReloaded->Branch;
			$this->strPrmtAddress1 = $objReloaded->strPrmtAddress1;
			$this->strPrmtAddress2 = $objReloaded->strPrmtAddress2;
			$this->strPrmtCity = $objReloaded->strPrmtCity;
			$this->PrmtState = $objReloaded->PrmtState;
			$this->strPrmtPin = $objReloaded->strPrmtPin;
			$this->strEmail1 = $objReloaded->strEmail1;
			$this->strEmail2 = $objReloaded->strEmail2;
			$this->strPhone1 = $objReloaded->strPhone1;
			$this->strPhone2 = $objReloaded->strPhone2;
			$this->strCoName = $objReloaded->strCoName;
			$this->strCoDesignation = $objReloaded->strCoDesignation;
			$this->strCoAddress1 = $objReloaded->strCoAddress1;
			$this->strCoAddress2 = $objReloaded->strCoAddress2;
			$this->strCoCity = $objReloaded->strCoCity;
			$this->CoState = $objReloaded->CoState;
			$this->strCoPin = $objReloaded->strCoPin;
			$this->strInterest = $objReloaded->strInterest;
			$this->strHobbies = $objReloaded->strHobbies;
			$this->strHighQual = $objReloaded->strHighQual;
			$this->strCoCountry = $objReloaded->strCoCountry;
			$this->strReceiptNo = $objReloaded->strReceiptNo;
			$this->strChapterName = $objReloaded->strChapterName;
			$this->strMemberDues = $objReloaded->strMemberDues;
			$this->dttNextRenual = $objReloaded->dttNextRenual;
			$this->strBio = $objReloaded->strBio;
			$this->intBloodGroup = $objReloaded->intBloodGroup;
			$this->strFamilyMembers = $objReloaded->strFamilyMembers;
			$this->dttDob = $objReloaded->dttDob;
			$this->strFbLink = $objReloaded->strFbLink;
			$this->strLkdLink = $objReloaded->strLkdLink;
			$this->strTwLink = $objReloaded->strTwLink;
			$this->strPersonalLink = $objReloaded->strPersonalLink;
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
				case 'IdregMember':
					/**
					 * Gets the value for intIdregMember (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdregMember;

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

				case 'Batch':
					/**
					 * Gets the value for intBatch 
					 * @return integer
					 */
					return $this->intBatch;

				case 'Course':
					/**
					 * Gets the value for intCourse 
					 * @return integer
					 */
					return $this->intCourse;

				case 'Branch':
					/**
					 * Gets the value for intBranch 
					 * @return integer
					 */
					return $this->intBranch;

				case 'PrmtAddress1':
					/**
					 * Gets the value for strPrmtAddress1 
					 * @return string
					 */
					return $this->strPrmtAddress1;

				case 'PrmtAddress2':
					/**
					 * Gets the value for strPrmtAddress2 
					 * @return string
					 */
					return $this->strPrmtAddress2;

				case 'PrmtCity':
					/**
					 * Gets the value for strPrmtCity 
					 * @return string
					 */
					return $this->strPrmtCity;

				case 'PrmtState':
					/**
					 * Gets the value for intPrmtState 
					 * @return integer
					 */
					return $this->intPrmtState;

				case 'PrmtPin':
					/**
					 * Gets the value for strPrmtPin 
					 * @return string
					 */
					return $this->strPrmtPin;

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

				case 'Phone1':
					/**
					 * Gets the value for strPhone1 
					 * @return string
					 */
					return $this->strPhone1;

				case 'Phone2':
					/**
					 * Gets the value for strPhone2 
					 * @return string
					 */
					return $this->strPhone2;

				case 'CoName':
					/**
					 * Gets the value for strCoName 
					 * @return string
					 */
					return $this->strCoName;

				case 'CoDesignation':
					/**
					 * Gets the value for strCoDesignation 
					 * @return string
					 */
					return $this->strCoDesignation;

				case 'CoAddress1':
					/**
					 * Gets the value for strCoAddress1 
					 * @return string
					 */
					return $this->strCoAddress1;

				case 'CoAddress2':
					/**
					 * Gets the value for strCoAddress2 
					 * @return string
					 */
					return $this->strCoAddress2;

				case 'CoCity':
					/**
					 * Gets the value for strCoCity 
					 * @return string
					 */
					return $this->strCoCity;

				case 'CoState':
					/**
					 * Gets the value for intCoState 
					 * @return integer
					 */
					return $this->intCoState;

				case 'CoPin':
					/**
					 * Gets the value for strCoPin 
					 * @return string
					 */
					return $this->strCoPin;

				case 'Interest':
					/**
					 * Gets the value for strInterest 
					 * @return string
					 */
					return $this->strInterest;

				case 'Hobbies':
					/**
					 * Gets the value for strHobbies 
					 * @return string
					 */
					return $this->strHobbies;

				case 'HighQual':
					/**
					 * Gets the value for strHighQual 
					 * @return string
					 */
					return $this->strHighQual;

				case 'CoCountry':
					/**
					 * Gets the value for strCoCountry 
					 * @return string
					 */
					return $this->strCoCountry;

				case 'ReceiptNo':
					/**
					 * Gets the value for strReceiptNo 
					 * @return string
					 */
					return $this->strReceiptNo;

				case 'ChapterName':
					/**
					 * Gets the value for strChapterName 
					 * @return string
					 */
					return $this->strChapterName;

				case 'MemberDues':
					/**
					 * Gets the value for strMemberDues 
					 * @return string
					 */
					return $this->strMemberDues;

				case 'NextRenual':
					/**
					 * Gets the value for dttNextRenual 
					 * @return QDateTime
					 */
					return $this->dttNextRenual;

				case 'Bio':
					/**
					 * Gets the value for strBio 
					 * @return string
					 */
					return $this->strBio;

				case 'BloodGroup':
					/**
					 * Gets the value for intBloodGroup 
					 * @return integer
					 */
					return $this->intBloodGroup;

				case 'FamilyMembers':
					/**
					 * Gets the value for strFamilyMembers 
					 * @return string
					 */
					return $this->strFamilyMembers;

				case 'Dob':
					/**
					 * Gets the value for dttDob 
					 * @return QDateTime
					 */
					return $this->dttDob;

				case 'FbLink':
					/**
					 * Gets the value for strFbLink 
					 * @return string
					 */
					return $this->strFbLink;

				case 'LkdLink':
					/**
					 * Gets the value for strLkdLink 
					 * @return string
					 */
					return $this->strLkdLink;

				case 'TwLink':
					/**
					 * Gets the value for strTwLink 
					 * @return string
					 */
					return $this->strTwLink;

				case 'PersonalLink':
					/**
					 * Gets the value for strPersonalLink 
					 * @return string
					 */
					return $this->strPersonalLink;


				///////////////////
				// Member Objects
				///////////////////
				case 'BatchObject':
					/**
					 * Gets the value for the CalenderYear object referenced by intBatch 
					 * @return CalenderYear
					 */
					try {
						if ((!$this->objBatchObject) && (!is_null($this->intBatch)))
							$this->objBatchObject = CalenderYear::Load($this->intBatch);
						return $this->objBatchObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CourseObject':
					/**
					 * Gets the value for the Role object referenced by intCourse 
					 * @return Role
					 */
					try {
						if ((!$this->objCourseObject) && (!is_null($this->intCourse)))
							$this->objCourseObject = Role::Load($this->intCourse);
						return $this->objCourseObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BranchObject':
					/**
					 * Gets the value for the Role object referenced by intBranch 
					 * @return Role
					 */
					try {
						if ((!$this->objBranchObject) && (!is_null($this->intBranch)))
							$this->objBranchObject = Role::Load($this->intBranch);
						return $this->objBranchObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrmtStateObject':
					/**
					 * Gets the value for the Place object referenced by intPrmtState 
					 * @return Place
					 */
					try {
						if ((!$this->objPrmtStateObject) && (!is_null($this->intPrmtState)))
							$this->objPrmtStateObject = Place::Load($this->intPrmtState);
						return $this->objPrmtStateObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoStateObject':
					/**
					 * Gets the value for the Place object referenced by intCoState 
					 * @return Place
					 */
					try {
						if ((!$this->objCoStateObject) && (!is_null($this->intCoState)))
							$this->objCoStateObject = Place::Load($this->intCoState);
						return $this->objCoStateObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AssMemberAsMember':
					/**
					 * Gets the value for the private _objAssMemberAsMember (Read-Only)
					 * if set due to an expansion on the ass_member.member_id reverse relationship
					 * @return AssMember
					 */
					return $this->_objAssMemberAsMember;

				case '_AssMemberAsMemberArray':
					/**
					 * Gets the value for the private _objAssMemberAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the ass_member.member_id reverse relationship
					 * @return AssMember[]
					 */
					return $this->_objAssMemberAsMemberArray;

				case '_Receipts':
					/**
					 * Gets the value for the private _objReceipts (Read-Only)
					 * if set due to an expansion on the receipts.reg_member reverse relationship
					 * @return Receipts
					 */
					return $this->_objReceipts;

				case '_ReceiptsArray':
					/**
					 * Gets the value for the private _objReceiptsArray (Read-Only)
					 * if set due to an ExpandAsArray on the receipts.reg_member reverse relationship
					 * @return Receipts[]
					 */
					return $this->_objReceiptsArray;


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

				case 'Batch':
					/**
					 * Sets the value for intBatch 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBatchObject = null;
						return ($this->intBatch = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Course':
					/**
					 * Sets the value for intCourse 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCourseObject = null;
						return ($this->intCourse = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Branch':
					/**
					 * Sets the value for intBranch 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBranchObject = null;
						return ($this->intBranch = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrmtAddress1':
					/**
					 * Sets the value for strPrmtAddress1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrmtAddress1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrmtAddress2':
					/**
					 * Sets the value for strPrmtAddress2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrmtAddress2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrmtCity':
					/**
					 * Sets the value for strPrmtCity 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrmtCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrmtState':
					/**
					 * Sets the value for intPrmtState 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPrmtStateObject = null;
						return ($this->intPrmtState = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrmtPin':
					/**
					 * Sets the value for strPrmtPin 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrmtPin = QType::Cast($mixValue, QType::String));
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

				case 'Phone1':
					/**
					 * Sets the value for strPhone1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhone1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Phone2':
					/**
					 * Sets the value for strPhone2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhone2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoName':
					/**
					 * Sets the value for strCoName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoDesignation':
					/**
					 * Sets the value for strCoDesignation 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoDesignation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoAddress1':
					/**
					 * Sets the value for strCoAddress1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoAddress1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoAddress2':
					/**
					 * Sets the value for strCoAddress2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoAddress2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoCity':
					/**
					 * Sets the value for strCoCity 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoState':
					/**
					 * Sets the value for intCoState 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCoStateObject = null;
						return ($this->intCoState = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoPin':
					/**
					 * Sets the value for strCoPin 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoPin = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Interest':
					/**
					 * Sets the value for strInterest 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInterest = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Hobbies':
					/**
					 * Sets the value for strHobbies 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strHobbies = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'HighQual':
					/**
					 * Sets the value for strHighQual 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strHighQual = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CoCountry':
					/**
					 * Sets the value for strCoCountry 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoCountry = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReceiptNo':
					/**
					 * Sets the value for strReceiptNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReceiptNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ChapterName':
					/**
					 * Sets the value for strChapterName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strChapterName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MemberDues':
					/**
					 * Sets the value for strMemberDues 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMemberDues = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NextRenual':
					/**
					 * Sets the value for dttNextRenual 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttNextRenual = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Bio':
					/**
					 * Sets the value for strBio 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strBio = QType::Cast($mixValue, QType::String));
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
						return ($this->intBloodGroup = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FamilyMembers':
					/**
					 * Sets the value for strFamilyMembers 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFamilyMembers = QType::Cast($mixValue, QType::String));
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

				case 'FbLink':
					/**
					 * Sets the value for strFbLink 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFbLink = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LkdLink':
					/**
					 * Sets the value for strLkdLink 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLkdLink = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TwLink':
					/**
					 * Sets the value for strTwLink 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTwLink = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PersonalLink':
					/**
					 * Sets the value for strPersonalLink 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPersonalLink = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'BatchObject':
					/**
					 * Sets the value for the CalenderYear object referenced by intBatch 
					 * @param CalenderYear $mixValue
					 * @return CalenderYear
					 */
					if (is_null($mixValue)) {
						$this->intBatch = null;
						$this->objBatchObject = null;
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
							throw new QCallerException('Unable to set an unsaved BatchObject for this RegMember');

						// Update Local Member Variables
						$this->objBatchObject = $mixValue;
						$this->intBatch = $mixValue->IdcalenderYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CourseObject':
					/**
					 * Sets the value for the Role object referenced by intCourse 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intCourse = null;
						$this->objCourseObject = null;
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
							throw new QCallerException('Unable to set an unsaved CourseObject for this RegMember');

						// Update Local Member Variables
						$this->objCourseObject = $mixValue;
						$this->intCourse = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BranchObject':
					/**
					 * Sets the value for the Role object referenced by intBranch 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intBranch = null;
						$this->objBranchObject = null;
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
							throw new QCallerException('Unable to set an unsaved BranchObject for this RegMember');

						// Update Local Member Variables
						$this->objBranchObject = $mixValue;
						$this->intBranch = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PrmtStateObject':
					/**
					 * Sets the value for the Place object referenced by intPrmtState 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intPrmtState = null;
						$this->objPrmtStateObject = null;
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
							throw new QCallerException('Unable to set an unsaved PrmtStateObject for this RegMember');

						// Update Local Member Variables
						$this->objPrmtStateObject = $mixValue;
						$this->intPrmtState = $mixValue->Idplace;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CoStateObject':
					/**
					 * Sets the value for the Place object referenced by intCoState 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intCoState = null;
						$this->objCoStateObject = null;
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
							throw new QCallerException('Unable to set an unsaved CoStateObject for this RegMember');

						// Update Local Member Variables
						$this->objCoStateObject = $mixValue;
						$this->intCoState = $mixValue->Idplace;

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



		// Related Objects' Methods for AssMemberAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AssMembersAsMember as an array of AssMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public function GetAssMemberAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdregMember)))
				return array();

			try {
				return AssMember::LoadArrayByMemberId($this->intIdregMember, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AssMembersAsMember
		 * @return int
		*/
		public function CountAssMembersAsMember() {
			if ((is_null($this->intIdregMember)))
				return 0;

			return AssMember::CountByMemberId($this->intIdregMember);
		}

		/**
		 * Associates a AssMemberAsMember
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function AssociateAssMemberAsMember(AssMember $objAssMember) {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsMember on this unsaved RegMember.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsMember on this RegMember with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . '
			');
		}

		/**
		 * Unassociates a AssMemberAsMember
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function UnassociateAssMemberAsMember(AssMember $objAssMember) {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsMember on this unsaved RegMember.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsMember on this RegMember with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`member_id` = null
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}

		/**
		 * Unassociates all AssMembersAsMember
		 * @return void
		*/
		public function UnassociateAllAssMembersAsMember() {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsMember on this unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`member_id` = null
				WHERE
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}

		/**
		 * Deletes an associated AssMemberAsMember
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function DeleteAssociatedAssMemberAsMember(AssMember $objAssMember) {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsMember on this unsaved RegMember.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsMember on this RegMember with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}

		/**
		 * Deletes all associated AssMembersAsMember
		 * @return void
		*/
		public function DeleteAllAssMembersAsMember() {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsMember on this unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}


		// Related Objects' Methods for Receipts
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Receiptses as an array of Receipts objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		*/
		public function GetReceiptsArray($objOptionalClauses = null) {
			if ((is_null($this->intIdregMember)))
				return array();

			try {
				return Receipts::LoadArrayByRegMember($this->intIdregMember, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Receiptses
		 * @return int
		*/
		public function CountReceiptses() {
			if ((is_null($this->intIdregMember)))
				return 0;

			return Receipts::CountByRegMember($this->intIdregMember);
		}

		/**
		 * Associates a Receipts
		 * @param Receipts $objReceipts
		 * @return void
		*/
		public function AssociateReceipts(Receipts $objReceipts) {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReceipts on this unsaved RegMember.');
			if ((is_null($objReceipts->Idreceipts)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReceipts on this RegMember with an unsaved Receipts.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`receipts`
				SET
					`reg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($objReceipts->Idreceipts) . '
			');
		}

		/**
		 * Unassociates a Receipts
		 * @param Receipts $objReceipts
		 * @return void
		*/
		public function UnassociateReceipts(Receipts $objReceipts) {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceipts on this unsaved RegMember.');
			if ((is_null($objReceipts->Idreceipts)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceipts on this RegMember with an unsaved Receipts.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`receipts`
				SET
					`reg_member` = null
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($objReceipts->Idreceipts) . ' AND
					`reg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}

		/**
		 * Unassociates all Receiptses
		 * @return void
		*/
		public function UnassociateAllReceiptses() {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceipts on this unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`receipts`
				SET
					`reg_member` = null
				WHERE
					`reg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}

		/**
		 * Deletes an associated Receipts
		 * @param Receipts $objReceipts
		 * @return void
		*/
		public function DeleteAssociatedReceipts(Receipts $objReceipts) {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceipts on this unsaved RegMember.');
			if ((is_null($objReceipts->Idreceipts)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceipts on this RegMember with an unsaved Receipts.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`receipts`
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($objReceipts->Idreceipts) . ' AND
					`reg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
			');
		}

		/**
		 * Deletes all associated Receiptses
		 * @return void
		*/
		public function DeleteAllReceiptses() {
			if ((is_null($this->intIdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceipts on this unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = RegMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`receipts`
				WHERE
					`reg_member` = ' . $objDatabase->SqlVariable($this->intIdregMember) . '
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
			return "reg_member";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[RegMember::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="RegMember"><sequence>';
			$strToReturn .= '<element name="IdregMember" type="xsd:int"/>';
			$strToReturn .= '<element name="Fname" type="xsd:string"/>';
			$strToReturn .= '<element name="Mname" type="xsd:string"/>';
			$strToReturn .= '<element name="Lname" type="xsd:string"/>';
			$strToReturn .= '<element name="BatchObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="CourseObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="BranchObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="PrmtAddress1" type="xsd:string"/>';
			$strToReturn .= '<element name="PrmtAddress2" type="xsd:string"/>';
			$strToReturn .= '<element name="PrmtCity" type="xsd:string"/>';
			$strToReturn .= '<element name="PrmtStateObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="PrmtPin" type="xsd:string"/>';
			$strToReturn .= '<element name="Email1" type="xsd:string"/>';
			$strToReturn .= '<element name="Email2" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone1" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone2" type="xsd:string"/>';
			$strToReturn .= '<element name="CoName" type="xsd:string"/>';
			$strToReturn .= '<element name="CoDesignation" type="xsd:string"/>';
			$strToReturn .= '<element name="CoAddress1" type="xsd:string"/>';
			$strToReturn .= '<element name="CoAddress2" type="xsd:string"/>';
			$strToReturn .= '<element name="CoCity" type="xsd:string"/>';
			$strToReturn .= '<element name="CoStateObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="CoPin" type="xsd:string"/>';
			$strToReturn .= '<element name="Interest" type="xsd:string"/>';
			$strToReturn .= '<element name="Hobbies" type="xsd:string"/>';
			$strToReturn .= '<element name="HighQual" type="xsd:string"/>';
			$strToReturn .= '<element name="CoCountry" type="xsd:string"/>';
			$strToReturn .= '<element name="ReceiptNo" type="xsd:string"/>';
			$strToReturn .= '<element name="ChapterName" type="xsd:string"/>';
			$strToReturn .= '<element name="MemberDues" type="xsd:string"/>';
			$strToReturn .= '<element name="NextRenual" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Bio" type="xsd:string"/>';
			$strToReturn .= '<element name="BloodGroup" type="xsd:int"/>';
			$strToReturn .= '<element name="FamilyMembers" type="xsd:string"/>';
			$strToReturn .= '<element name="Dob" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FbLink" type="xsd:string"/>';
			$strToReturn .= '<element name="LkdLink" type="xsd:string"/>';
			$strToReturn .= '<element name="TwLink" type="xsd:string"/>';
			$strToReturn .= '<element name="PersonalLink" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('RegMember', $strComplexTypeArray)) {
				$strComplexTypeArray['RegMember'] = RegMember::GetSoapComplexTypeXml();
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, RegMember::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new RegMember();
			if (property_exists($objSoapObject, 'IdregMember'))
				$objToReturn->intIdregMember = $objSoapObject->IdregMember;
			if (property_exists($objSoapObject, 'Fname'))
				$objToReturn->strFname = $objSoapObject->Fname;
			if (property_exists($objSoapObject, 'Mname'))
				$objToReturn->strMname = $objSoapObject->Mname;
			if (property_exists($objSoapObject, 'Lname'))
				$objToReturn->strLname = $objSoapObject->Lname;
			if ((property_exists($objSoapObject, 'BatchObject')) &&
				($objSoapObject->BatchObject))
				$objToReturn->BatchObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->BatchObject);
			if ((property_exists($objSoapObject, 'CourseObject')) &&
				($objSoapObject->CourseObject))
				$objToReturn->CourseObject = Role::GetObjectFromSoapObject($objSoapObject->CourseObject);
			if ((property_exists($objSoapObject, 'BranchObject')) &&
				($objSoapObject->BranchObject))
				$objToReturn->BranchObject = Role::GetObjectFromSoapObject($objSoapObject->BranchObject);
			if (property_exists($objSoapObject, 'PrmtAddress1'))
				$objToReturn->strPrmtAddress1 = $objSoapObject->PrmtAddress1;
			if (property_exists($objSoapObject, 'PrmtAddress2'))
				$objToReturn->strPrmtAddress2 = $objSoapObject->PrmtAddress2;
			if (property_exists($objSoapObject, 'PrmtCity'))
				$objToReturn->strPrmtCity = $objSoapObject->PrmtCity;
			if ((property_exists($objSoapObject, 'PrmtStateObject')) &&
				($objSoapObject->PrmtStateObject))
				$objToReturn->PrmtStateObject = Place::GetObjectFromSoapObject($objSoapObject->PrmtStateObject);
			if (property_exists($objSoapObject, 'PrmtPin'))
				$objToReturn->strPrmtPin = $objSoapObject->PrmtPin;
			if (property_exists($objSoapObject, 'Email1'))
				$objToReturn->strEmail1 = $objSoapObject->Email1;
			if (property_exists($objSoapObject, 'Email2'))
				$objToReturn->strEmail2 = $objSoapObject->Email2;
			if (property_exists($objSoapObject, 'Phone1'))
				$objToReturn->strPhone1 = $objSoapObject->Phone1;
			if (property_exists($objSoapObject, 'Phone2'))
				$objToReturn->strPhone2 = $objSoapObject->Phone2;
			if (property_exists($objSoapObject, 'CoName'))
				$objToReturn->strCoName = $objSoapObject->CoName;
			if (property_exists($objSoapObject, 'CoDesignation'))
				$objToReturn->strCoDesignation = $objSoapObject->CoDesignation;
			if (property_exists($objSoapObject, 'CoAddress1'))
				$objToReturn->strCoAddress1 = $objSoapObject->CoAddress1;
			if (property_exists($objSoapObject, 'CoAddress2'))
				$objToReturn->strCoAddress2 = $objSoapObject->CoAddress2;
			if (property_exists($objSoapObject, 'CoCity'))
				$objToReturn->strCoCity = $objSoapObject->CoCity;
			if ((property_exists($objSoapObject, 'CoStateObject')) &&
				($objSoapObject->CoStateObject))
				$objToReturn->CoStateObject = Place::GetObjectFromSoapObject($objSoapObject->CoStateObject);
			if (property_exists($objSoapObject, 'CoPin'))
				$objToReturn->strCoPin = $objSoapObject->CoPin;
			if (property_exists($objSoapObject, 'Interest'))
				$objToReturn->strInterest = $objSoapObject->Interest;
			if (property_exists($objSoapObject, 'Hobbies'))
				$objToReturn->strHobbies = $objSoapObject->Hobbies;
			if (property_exists($objSoapObject, 'HighQual'))
				$objToReturn->strHighQual = $objSoapObject->HighQual;
			if (property_exists($objSoapObject, 'CoCountry'))
				$objToReturn->strCoCountry = $objSoapObject->CoCountry;
			if (property_exists($objSoapObject, 'ReceiptNo'))
				$objToReturn->strReceiptNo = $objSoapObject->ReceiptNo;
			if (property_exists($objSoapObject, 'ChapterName'))
				$objToReturn->strChapterName = $objSoapObject->ChapterName;
			if (property_exists($objSoapObject, 'MemberDues'))
				$objToReturn->strMemberDues = $objSoapObject->MemberDues;
			if (property_exists($objSoapObject, 'NextRenual'))
				$objToReturn->dttNextRenual = new QDateTime($objSoapObject->NextRenual);
			if (property_exists($objSoapObject, 'Bio'))
				$objToReturn->strBio = $objSoapObject->Bio;
			if (property_exists($objSoapObject, 'BloodGroup'))
				$objToReturn->intBloodGroup = $objSoapObject->BloodGroup;
			if (property_exists($objSoapObject, 'FamilyMembers'))
				$objToReturn->strFamilyMembers = $objSoapObject->FamilyMembers;
			if (property_exists($objSoapObject, 'Dob'))
				$objToReturn->dttDob = new QDateTime($objSoapObject->Dob);
			if (property_exists($objSoapObject, 'FbLink'))
				$objToReturn->strFbLink = $objSoapObject->FbLink;
			if (property_exists($objSoapObject, 'LkdLink'))
				$objToReturn->strLkdLink = $objSoapObject->LkdLink;
			if (property_exists($objSoapObject, 'TwLink'))
				$objToReturn->strTwLink = $objSoapObject->TwLink;
			if (property_exists($objSoapObject, 'PersonalLink'))
				$objToReturn->strPersonalLink = $objSoapObject->PersonalLink;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, RegMember::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objBatchObject)
				$objObject->objBatchObject = CalenderYear::GetSoapObjectFromObject($objObject->objBatchObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBatch = null;
			if ($objObject->objCourseObject)
				$objObject->objCourseObject = Role::GetSoapObjectFromObject($objObject->objCourseObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourse = null;
			if ($objObject->objBranchObject)
				$objObject->objBranchObject = Role::GetSoapObjectFromObject($objObject->objBranchObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBranch = null;
			if ($objObject->objPrmtStateObject)
				$objObject->objPrmtStateObject = Place::GetSoapObjectFromObject($objObject->objPrmtStateObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPrmtState = null;
			if ($objObject->objCoStateObject)
				$objObject->objCoStateObject = Place::GetSoapObjectFromObject($objObject->objCoStateObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCoState = null;
			if ($objObject->dttNextRenual)
				$objObject->dttNextRenual = $objObject->dttNextRenual->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttDob)
				$objObject->dttDob = $objObject->dttDob->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdregMember'] = $this->intIdregMember;
			$iArray['Fname'] = $this->strFname;
			$iArray['Mname'] = $this->strMname;
			$iArray['Lname'] = $this->strLname;
			$iArray['Batch'] = $this->intBatch;
			$iArray['Course'] = $this->intCourse;
			$iArray['Branch'] = $this->intBranch;
			$iArray['PrmtAddress1'] = $this->strPrmtAddress1;
			$iArray['PrmtAddress2'] = $this->strPrmtAddress2;
			$iArray['PrmtCity'] = $this->strPrmtCity;
			$iArray['PrmtState'] = $this->intPrmtState;
			$iArray['PrmtPin'] = $this->strPrmtPin;
			$iArray['Email1'] = $this->strEmail1;
			$iArray['Email2'] = $this->strEmail2;
			$iArray['Phone1'] = $this->strPhone1;
			$iArray['Phone2'] = $this->strPhone2;
			$iArray['CoName'] = $this->strCoName;
			$iArray['CoDesignation'] = $this->strCoDesignation;
			$iArray['CoAddress1'] = $this->strCoAddress1;
			$iArray['CoAddress2'] = $this->strCoAddress2;
			$iArray['CoCity'] = $this->strCoCity;
			$iArray['CoState'] = $this->intCoState;
			$iArray['CoPin'] = $this->strCoPin;
			$iArray['Interest'] = $this->strInterest;
			$iArray['Hobbies'] = $this->strHobbies;
			$iArray['HighQual'] = $this->strHighQual;
			$iArray['CoCountry'] = $this->strCoCountry;
			$iArray['ReceiptNo'] = $this->strReceiptNo;
			$iArray['ChapterName'] = $this->strChapterName;
			$iArray['MemberDues'] = $this->strMemberDues;
			$iArray['NextRenual'] = $this->dttNextRenual;
			$iArray['Bio'] = $this->strBio;
			$iArray['BloodGroup'] = $this->intBloodGroup;
			$iArray['FamilyMembers'] = $this->strFamilyMembers;
			$iArray['Dob'] = $this->dttDob;
			$iArray['FbLink'] = $this->strFbLink;
			$iArray['LkdLink'] = $this->strLkdLink;
			$iArray['TwLink'] = $this->strTwLink;
			$iArray['PersonalLink'] = $this->strPersonalLink;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdregMember ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdregMember
     * @property-read QQNode $Fname
     * @property-read QQNode $Mname
     * @property-read QQNode $Lname
     * @property-read QQNode $Batch
     * @property-read QQNodeCalenderYear $BatchObject
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $Branch
     * @property-read QQNodeRole $BranchObject
     * @property-read QQNode $PrmtAddress1
     * @property-read QQNode $PrmtAddress2
     * @property-read QQNode $PrmtCity
     * @property-read QQNode $PrmtState
     * @property-read QQNodePlace $PrmtStateObject
     * @property-read QQNode $PrmtPin
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $Phone1
     * @property-read QQNode $Phone2
     * @property-read QQNode $CoName
     * @property-read QQNode $CoDesignation
     * @property-read QQNode $CoAddress1
     * @property-read QQNode $CoAddress2
     * @property-read QQNode $CoCity
     * @property-read QQNode $CoState
     * @property-read QQNodePlace $CoStateObject
     * @property-read QQNode $CoPin
     * @property-read QQNode $Interest
     * @property-read QQNode $Hobbies
     * @property-read QQNode $HighQual
     * @property-read QQNode $CoCountry
     * @property-read QQNode $ReceiptNo
     * @property-read QQNode $ChapterName
     * @property-read QQNode $MemberDues
     * @property-read QQNode $NextRenual
     * @property-read QQNode $Bio
     * @property-read QQNode $BloodGroup
     * @property-read QQNode $FamilyMembers
     * @property-read QQNode $Dob
     * @property-read QQNode $FbLink
     * @property-read QQNode $LkdLink
     * @property-read QQNode $TwLink
     * @property-read QQNode $PersonalLink
     *
     *
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsMember
     * @property-read QQReverseReferenceNodeReceipts $Receipts

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeRegMember extends QQNode {
		protected $strTableName = 'reg_member';
		protected $strPrimaryKey = 'idreg_member';
		protected $strClassName = 'RegMember';
		public function __get($strName) {
			switch ($strName) {
				case 'IdregMember':
					return new QQNode('idreg_member', 'IdregMember', 'Integer', $this);
				case 'Fname':
					return new QQNode('fname', 'Fname', 'VarChar', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'VarChar', $this);
				case 'Lname':
					return new QQNode('lname', 'Lname', 'VarChar', $this);
				case 'Batch':
					return new QQNode('batch', 'Batch', 'Integer', $this);
				case 'BatchObject':
					return new QQNodeCalenderYear('batch', 'BatchObject', 'Integer', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'Integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'Integer', $this);
				case 'Branch':
					return new QQNode('branch', 'Branch', 'Integer', $this);
				case 'BranchObject':
					return new QQNodeRole('branch', 'BranchObject', 'Integer', $this);
				case 'PrmtAddress1':
					return new QQNode('prmt_address1', 'PrmtAddress1', 'Blob', $this);
				case 'PrmtAddress2':
					return new QQNode('prmt_address2', 'PrmtAddress2', 'Blob', $this);
				case 'PrmtCity':
					return new QQNode('prmt_city', 'PrmtCity', 'VarChar', $this);
				case 'PrmtState':
					return new QQNode('prmt_state', 'PrmtState', 'Integer', $this);
				case 'PrmtStateObject':
					return new QQNodePlace('prmt_state', 'PrmtStateObject', 'Integer', $this);
				case 'PrmtPin':
					return new QQNode('prmt_pin', 'PrmtPin', 'VarChar', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'VarChar', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'VarChar', $this);
				case 'Phone1':
					return new QQNode('phone1', 'Phone1', 'VarChar', $this);
				case 'Phone2':
					return new QQNode('phone2', 'Phone2', 'VarChar', $this);
				case 'CoName':
					return new QQNode('co_name', 'CoName', 'VarChar', $this);
				case 'CoDesignation':
					return new QQNode('co_designation', 'CoDesignation', 'VarChar', $this);
				case 'CoAddress1':
					return new QQNode('co_address1', 'CoAddress1', 'Blob', $this);
				case 'CoAddress2':
					return new QQNode('co_address2', 'CoAddress2', 'Blob', $this);
				case 'CoCity':
					return new QQNode('co_city', 'CoCity', 'VarChar', $this);
				case 'CoState':
					return new QQNode('co_state', 'CoState', 'Integer', $this);
				case 'CoStateObject':
					return new QQNodePlace('co_state', 'CoStateObject', 'Integer', $this);
				case 'CoPin':
					return new QQNode('co_pin', 'CoPin', 'VarChar', $this);
				case 'Interest':
					return new QQNode('interest', 'Interest', 'Blob', $this);
				case 'Hobbies':
					return new QQNode('hobbies', 'Hobbies', 'Blob', $this);
				case 'HighQual':
					return new QQNode('high_qual', 'HighQual', 'Blob', $this);
				case 'CoCountry':
					return new QQNode('co_country', 'CoCountry', 'VarChar', $this);
				case 'ReceiptNo':
					return new QQNode('receipt_no', 'ReceiptNo', 'VarChar', $this);
				case 'ChapterName':
					return new QQNode('chapter_name', 'ChapterName', 'VarChar', $this);
				case 'MemberDues':
					return new QQNode('member_dues', 'MemberDues', 'VarChar', $this);
				case 'NextRenual':
					return new QQNode('next_renual', 'NextRenual', 'Date', $this);
				case 'Bio':
					return new QQNode('bio', 'Bio', 'Blob', $this);
				case 'BloodGroup':
					return new QQNode('blood_group', 'BloodGroup', 'Integer', $this);
				case 'FamilyMembers':
					return new QQNode('family_members', 'FamilyMembers', 'Blob', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'Date', $this);
				case 'FbLink':
					return new QQNode('fb_link', 'FbLink', 'Blob', $this);
				case 'LkdLink':
					return new QQNode('lkd_link', 'LkdLink', 'Blob', $this);
				case 'TwLink':
					return new QQNode('tw_link', 'TwLink', 'Blob', $this);
				case 'PersonalLink':
					return new QQNode('personal_link', 'PersonalLink', 'Blob', $this);
				case 'AssMemberAsMember':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasmember', 'reverse_reference', 'member_id');
				case 'Receipts':
					return new QQReverseReferenceNodeReceipts($this, 'receipts', 'reverse_reference', 'reg_member');

				case '_PrimaryKeyNode':
					return new QQNode('idreg_member', 'IdregMember', 'Integer', $this);
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
     * @property-read QQNode $IdregMember
     * @property-read QQNode $Fname
     * @property-read QQNode $Mname
     * @property-read QQNode $Lname
     * @property-read QQNode $Batch
     * @property-read QQNodeCalenderYear $BatchObject
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $Branch
     * @property-read QQNodeRole $BranchObject
     * @property-read QQNode $PrmtAddress1
     * @property-read QQNode $PrmtAddress2
     * @property-read QQNode $PrmtCity
     * @property-read QQNode $PrmtState
     * @property-read QQNodePlace $PrmtStateObject
     * @property-read QQNode $PrmtPin
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $Phone1
     * @property-read QQNode $Phone2
     * @property-read QQNode $CoName
     * @property-read QQNode $CoDesignation
     * @property-read QQNode $CoAddress1
     * @property-read QQNode $CoAddress2
     * @property-read QQNode $CoCity
     * @property-read QQNode $CoState
     * @property-read QQNodePlace $CoStateObject
     * @property-read QQNode $CoPin
     * @property-read QQNode $Interest
     * @property-read QQNode $Hobbies
     * @property-read QQNode $HighQual
     * @property-read QQNode $CoCountry
     * @property-read QQNode $ReceiptNo
     * @property-read QQNode $ChapterName
     * @property-read QQNode $MemberDues
     * @property-read QQNode $NextRenual
     * @property-read QQNode $Bio
     * @property-read QQNode $BloodGroup
     * @property-read QQNode $FamilyMembers
     * @property-read QQNode $Dob
     * @property-read QQNode $FbLink
     * @property-read QQNode $LkdLink
     * @property-read QQNode $TwLink
     * @property-read QQNode $PersonalLink
     *
     *
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsMember
     * @property-read QQReverseReferenceNodeReceipts $Receipts

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeRegMember extends QQReverseReferenceNode {
		protected $strTableName = 'reg_member';
		protected $strPrimaryKey = 'idreg_member';
		protected $strClassName = 'RegMember';
		public function __get($strName) {
			switch ($strName) {
				case 'IdregMember':
					return new QQNode('idreg_member', 'IdregMember', 'integer', $this);
				case 'Fname':
					return new QQNode('fname', 'Fname', 'string', $this);
				case 'Mname':
					return new QQNode('mname', 'Mname', 'string', $this);
				case 'Lname':
					return new QQNode('lname', 'Lname', 'string', $this);
				case 'Batch':
					return new QQNode('batch', 'Batch', 'integer', $this);
				case 'BatchObject':
					return new QQNodeCalenderYear('batch', 'BatchObject', 'integer', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'integer', $this);
				case 'Branch':
					return new QQNode('branch', 'Branch', 'integer', $this);
				case 'BranchObject':
					return new QQNodeRole('branch', 'BranchObject', 'integer', $this);
				case 'PrmtAddress1':
					return new QQNode('prmt_address1', 'PrmtAddress1', 'string', $this);
				case 'PrmtAddress2':
					return new QQNode('prmt_address2', 'PrmtAddress2', 'string', $this);
				case 'PrmtCity':
					return new QQNode('prmt_city', 'PrmtCity', 'string', $this);
				case 'PrmtState':
					return new QQNode('prmt_state', 'PrmtState', 'integer', $this);
				case 'PrmtStateObject':
					return new QQNodePlace('prmt_state', 'PrmtStateObject', 'integer', $this);
				case 'PrmtPin':
					return new QQNode('prmt_pin', 'PrmtPin', 'string', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'string', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'string', $this);
				case 'Phone1':
					return new QQNode('phone1', 'Phone1', 'string', $this);
				case 'Phone2':
					return new QQNode('phone2', 'Phone2', 'string', $this);
				case 'CoName':
					return new QQNode('co_name', 'CoName', 'string', $this);
				case 'CoDesignation':
					return new QQNode('co_designation', 'CoDesignation', 'string', $this);
				case 'CoAddress1':
					return new QQNode('co_address1', 'CoAddress1', 'string', $this);
				case 'CoAddress2':
					return new QQNode('co_address2', 'CoAddress2', 'string', $this);
				case 'CoCity':
					return new QQNode('co_city', 'CoCity', 'string', $this);
				case 'CoState':
					return new QQNode('co_state', 'CoState', 'integer', $this);
				case 'CoStateObject':
					return new QQNodePlace('co_state', 'CoStateObject', 'integer', $this);
				case 'CoPin':
					return new QQNode('co_pin', 'CoPin', 'string', $this);
				case 'Interest':
					return new QQNode('interest', 'Interest', 'string', $this);
				case 'Hobbies':
					return new QQNode('hobbies', 'Hobbies', 'string', $this);
				case 'HighQual':
					return new QQNode('high_qual', 'HighQual', 'string', $this);
				case 'CoCountry':
					return new QQNode('co_country', 'CoCountry', 'string', $this);
				case 'ReceiptNo':
					return new QQNode('receipt_no', 'ReceiptNo', 'string', $this);
				case 'ChapterName':
					return new QQNode('chapter_name', 'ChapterName', 'string', $this);
				case 'MemberDues':
					return new QQNode('member_dues', 'MemberDues', 'string', $this);
				case 'NextRenual':
					return new QQNode('next_renual', 'NextRenual', 'QDateTime', $this);
				case 'Bio':
					return new QQNode('bio', 'Bio', 'string', $this);
				case 'BloodGroup':
					return new QQNode('blood_group', 'BloodGroup', 'integer', $this);
				case 'FamilyMembers':
					return new QQNode('family_members', 'FamilyMembers', 'string', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'QDateTime', $this);
				case 'FbLink':
					return new QQNode('fb_link', 'FbLink', 'string', $this);
				case 'LkdLink':
					return new QQNode('lkd_link', 'LkdLink', 'string', $this);
				case 'TwLink':
					return new QQNode('tw_link', 'TwLink', 'string', $this);
				case 'PersonalLink':
					return new QQNode('personal_link', 'PersonalLink', 'string', $this);
				case 'AssMemberAsMember':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasmember', 'reverse_reference', 'member_id');
				case 'Receipts':
					return new QQReverseReferenceNodeReceipts($this, 'receipts', 'reverse_reference', 'reg_member');

				case '_PrimaryKeyNode':
					return new QQNode('idreg_member', 'IdregMember', 'integer', $this);
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
