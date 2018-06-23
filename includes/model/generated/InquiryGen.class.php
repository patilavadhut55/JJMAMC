<?php
	/**
	 * The abstract InquiryGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Inquiry subclass which
	 * extends this InquiryGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Inquiry class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idinquiry the value for intIdinquiry (Read-Only PK)
	 * @property string $Code the value for strCode (Unique)
	 * @property integer $Prefix the value for intPrefix 
	 * @property string $FirstName the value for strFirstName (Not Null)
	 * @property string $MiddleName the value for strMiddleName (Not Null)
	 * @property string $LastName the value for strLastName (Not Null)
	 * @property string $FatherMiddleName the value for strFatherMiddleName 
	 * @property QDateTime $Dob the value for dttDob 
	 * @property QDateTime $AdmissionDate the value for dttAdmissionDate 
	 * @property integer $AdmissionMode the value for intAdmissionMode 
	 * @property integer $Category the value for intCategory 
	 * @property integer $Caste the value for intCaste 
	 * @property integer $Age the value for intAge 
	 * @property string $Contact the value for strContact 
	 * @property string $Coontact2 the value for strCoontact2 
	 * @property string $Address the value for strAddress 
	 * @property boolean $Finalized the value for blnFinalized 
	 * @property boolean $Admitted the value for blnAdmitted 
	 * @property integer $Course the value for intCourse 
	 * @property integer $DataBy the value for intDataBy 
	 * @property integer $Subject the value for intSubject 
	 * @property string $Web the value for strWeb 
	 * @property boolean $IsTakeForm the value for blnIsTakeForm 
	 * @property string $FormFee the value for strFormFee 
	 * @property Prefix $PrefixObject the value for the Prefix object referenced by intPrefix 
	 * @property AdmissionMode $AdmissionModeObject the value for the AdmissionMode object referenced by intAdmissionMode 
	 * @property FeesConcession $CategoryObject the value for the FeesConcession object referenced by intCategory 
	 * @property Cast $CasteObject the value for the Cast object referenced by intCaste 
	 * @property Role $CourseObject the value for the Role object referenced by intCourse 
	 * @property Ledger $DataByObject the value for the Ledger object referenced by intDataBy 
	 * @property Role $SubjectObject the value for the Role object referenced by intSubject 
	 * @property-read Education $_Education the value for the private _objEducation (Read-Only) if set due to an expansion on the education.inquiry reverse relationship
	 * @property-read Education[] $_EducationArray the value for the private _objEducationArray (Read-Only) if set due to an ExpandAsArray on the education.inquiry reverse relationship
	 * @property-read Profile $_Profile the value for the private _objProfile (Read-Only) if set due to an expansion on the profile.inquiry reverse relationship
	 * @property-read Profile[] $_ProfileArray the value for the private _objProfileArray (Read-Only) if set due to an ExpandAsArray on the profile.inquiry reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class InquiryGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column inquiry.idinquiry
		 * @var integer intIdinquiry
		 */
		protected $intIdinquiry;
		const IdinquiryDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.prefix
		 * @var integer intPrefix
		 */
		protected $intPrefix;
		const PrefixDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.first_name
		 * @var string strFirstName
		 */
		protected $strFirstName;
		const FirstNameMaxLength = 45;
		const FirstNameDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.middle_name
		 * @var string strMiddleName
		 */
		protected $strMiddleName;
		const MiddleNameMaxLength = 45;
		const MiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.last_name
		 * @var string strLastName
		 */
		protected $strLastName;
		const LastNameMaxLength = 45;
		const LastNameDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.father_middle_name
		 * @var string strFatherMiddleName
		 */
		protected $strFatherMiddleName;
		const FatherMiddleNameMaxLength = 45;
		const FatherMiddleNameDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.dob
		 * @var QDateTime dttDob
		 */
		protected $dttDob;
		const DobDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.admission_date
		 * @var QDateTime dttAdmissionDate
		 */
		protected $dttAdmissionDate;
		const AdmissionDateDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.admission_mode
		 * @var integer intAdmissionMode
		 */
		protected $intAdmissionMode;
		const AdmissionModeDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.category
		 * @var integer intCategory
		 */
		protected $intCategory;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.caste
		 * @var integer intCaste
		 */
		protected $intCaste;
		const CasteDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.age
		 * @var integer intAge
		 */
		protected $intAge;
		const AgeDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.contact
		 * @var string strContact
		 */
		protected $strContact;
		const ContactMaxLength = 45;
		const ContactDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.coontact2
		 * @var string strCoontact2
		 */
		protected $strCoontact2;
		const Coontact2MaxLength = 45;
		const Coontact2Default = null;


		/**
		 * Protected member variable that maps to the database column inquiry.address
		 * @var string strAddress
		 */
		protected $strAddress;
		const AddressDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.finalized
		 * @var boolean blnFinalized
		 */
		protected $blnFinalized;
		const FinalizedDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.admitted
		 * @var boolean blnAdmitted
		 */
		protected $blnAdmitted;
		const AdmittedDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.course
		 * @var integer intCourse
		 */
		protected $intCourse;
		const CourseDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.data_by
		 * @var integer intDataBy
		 */
		protected $intDataBy;
		const DataByDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.subject
		 * @var integer intSubject
		 */
		protected $intSubject;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.web
		 * @var string strWeb
		 */
		protected $strWeb;
		const WebDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.is_take_form
		 * @var boolean blnIsTakeForm
		 */
		protected $blnIsTakeForm;
		const IsTakeFormDefault = null;


		/**
		 * Protected member variable that maps to the database column inquiry.form_fee
		 * @var string strFormFee
		 */
		protected $strFormFee;
		const FormFeeDefault = null;


		/**
		 * Private member variable that stores a reference to a single Education object
		 * (of type Education), if this Inquiry object was restored with
		 * an expansion on the education association table.
		 * @var Education _objEducation;
		 */
		private $_objEducation;

		/**
		 * Private member variable that stores a reference to an array of Education objects
		 * (of type Education[]), if this Inquiry object was restored with
		 * an ExpandAsArray on the education association table.
		 * @var Education[] _objEducationArray;
		 */
		private $_objEducationArray = null;

		/**
		 * Private member variable that stores a reference to a single Profile object
		 * (of type Profile), if this Inquiry object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfile;
		 */
		private $_objProfile;

		/**
		 * Private member variable that stores a reference to an array of Profile objects
		 * (of type Profile[]), if this Inquiry object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileArray;
		 */
		private $_objProfileArray = null;

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
		 * in the database column inquiry.prefix.
		 *
		 * NOTE: Always use the PrefixObject property getter to correctly retrieve this Prefix object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Prefix objPrefixObject
		 */
		protected $objPrefixObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column inquiry.admission_mode.
		 *
		 * NOTE: Always use the AdmissionModeObject property getter to correctly retrieve this AdmissionMode object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AdmissionMode objAdmissionModeObject
		 */
		protected $objAdmissionModeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column inquiry.category.
		 *
		 * NOTE: Always use the CategoryObject property getter to correctly retrieve this FeesConcession object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FeesConcession objCategoryObject
		 */
		protected $objCategoryObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column inquiry.caste.
		 *
		 * NOTE: Always use the CasteObject property getter to correctly retrieve this Cast object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cast objCasteObject
		 */
		protected $objCasteObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column inquiry.course.
		 *
		 * NOTE: Always use the CourseObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objCourseObject
		 */
		protected $objCourseObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column inquiry.data_by.
		 *
		 * NOTE: Always use the DataByObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objDataByObject
		 */
		protected $objDataByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column inquiry.subject.
		 *
		 * NOTE: Always use the SubjectObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objSubjectObject
		 */
		protected $objSubjectObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdinquiry = Inquiry::IdinquiryDefault;
			$this->strCode = Inquiry::CodeDefault;
			$this->intPrefix = Inquiry::PrefixDefault;
			$this->strFirstName = Inquiry::FirstNameDefault;
			$this->strMiddleName = Inquiry::MiddleNameDefault;
			$this->strLastName = Inquiry::LastNameDefault;
			$this->strFatherMiddleName = Inquiry::FatherMiddleNameDefault;
			$this->dttDob = (Inquiry::DobDefault === null)?null:new QDateTime(Inquiry::DobDefault);
			$this->dttAdmissionDate = (Inquiry::AdmissionDateDefault === null)?null:new QDateTime(Inquiry::AdmissionDateDefault);
			$this->intAdmissionMode = Inquiry::AdmissionModeDefault;
			$this->intCategory = Inquiry::CategoryDefault;
			$this->intCaste = Inquiry::CasteDefault;
			$this->intAge = Inquiry::AgeDefault;
			$this->strContact = Inquiry::ContactDefault;
			$this->strCoontact2 = Inquiry::Coontact2Default;
			$this->strAddress = Inquiry::AddressDefault;
			$this->blnFinalized = Inquiry::FinalizedDefault;
			$this->blnAdmitted = Inquiry::AdmittedDefault;
			$this->intCourse = Inquiry::CourseDefault;
			$this->intDataBy = Inquiry::DataByDefault;
			$this->intSubject = Inquiry::SubjectDefault;
			$this->strWeb = Inquiry::WebDefault;
			$this->blnIsTakeForm = Inquiry::IsTakeFormDefault;
			$this->strFormFee = Inquiry::FormFeeDefault;
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
		 * Load a Inquiry from PK Info
		 * @param integer $intIdinquiry
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry
		 */
		public static function Load($intIdinquiry, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Inquiry', $intIdinquiry);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Inquiry::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Inquiry()->Idinquiry, $intIdinquiry)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Inquiries
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Inquiry::QueryArray to perform the LoadAll query
			try {
				return Inquiry::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Inquiries
		 * @return int
		 */
		public static function CountAll() {
			// Call Inquiry::QueryCount to perform the CountAll query
			return Inquiry::QueryCount(QQ::All());
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
			$objDatabase = Inquiry::GetDatabase();

			// Create/Build out the QueryBuilder object with Inquiry-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'inquiry');

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
				Inquiry::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('inquiry');

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
		 * Static Qcubed Query method to query for a single Inquiry object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Inquiry the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Inquiry::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Inquiry object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Inquiry::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Inquiry::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Inquiry objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Inquiry[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Inquiry::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Inquiry::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Inquiry::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Inquiry objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Inquiry::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Inquiry::GetDatabase();

			$strQuery = Inquiry::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/inquiry', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Inquiry::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Inquiry
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'inquiry';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idinquiry', $strAliasPrefix . 'idinquiry');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idinquiry', $strAliasPrefix . 'idinquiry');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'prefix', $strAliasPrefix . 'prefix');
			    $objBuilder->AddSelectItem($strTableName, 'first_name', $strAliasPrefix . 'first_name');
			    $objBuilder->AddSelectItem($strTableName, 'middle_name', $strAliasPrefix . 'middle_name');
			    $objBuilder->AddSelectItem($strTableName, 'last_name', $strAliasPrefix . 'last_name');
			    $objBuilder->AddSelectItem($strTableName, 'father_middle_name', $strAliasPrefix . 'father_middle_name');
			    $objBuilder->AddSelectItem($strTableName, 'dob', $strAliasPrefix . 'dob');
			    $objBuilder->AddSelectItem($strTableName, 'admission_date', $strAliasPrefix . 'admission_date');
			    $objBuilder->AddSelectItem($strTableName, 'admission_mode', $strAliasPrefix . 'admission_mode');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'caste', $strAliasPrefix . 'caste');
			    $objBuilder->AddSelectItem($strTableName, 'age', $strAliasPrefix . 'age');
			    $objBuilder->AddSelectItem($strTableName, 'contact', $strAliasPrefix . 'contact');
			    $objBuilder->AddSelectItem($strTableName, 'coontact2', $strAliasPrefix . 'coontact2');
			    $objBuilder->AddSelectItem($strTableName, 'address', $strAliasPrefix . 'address');
			    $objBuilder->AddSelectItem($strTableName, 'finalized', $strAliasPrefix . 'finalized');
			    $objBuilder->AddSelectItem($strTableName, 'admitted', $strAliasPrefix . 'admitted');
			    $objBuilder->AddSelectItem($strTableName, 'course', $strAliasPrefix . 'course');
			    $objBuilder->AddSelectItem($strTableName, 'data_by', $strAliasPrefix . 'data_by');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			    $objBuilder->AddSelectItem($strTableName, 'web', $strAliasPrefix . 'web');
			    $objBuilder->AddSelectItem($strTableName, 'is_take_form', $strAliasPrefix . 'is_take_form');
			    $objBuilder->AddSelectItem($strTableName, 'form_fee', $strAliasPrefix . 'form_fee');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Inquiry from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Inquiry::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Inquiry
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdinquiry == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'inquiry__';


						// Expanding reverse references: Education
						$strAlias = $strAliasPrefix . 'education__ideducation';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objEducationArray)
								$objPreviousItem->_objEducationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEducationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEducationArray;
								$objChildItem = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'education__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEducationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEducationArray[] = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'education__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Profile
						$strAlias = $strAliasPrefix . 'profile__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileArray)
								$objPreviousItem->_objProfileArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'inquiry__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Inquiry object
			$objToReturn = new Inquiry();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdinquiry = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
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
			$strAlias = $strAliasPrefix . 'father_middle_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFatherMiddleName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'dob';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDob = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'admission_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttAdmissionDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'admission_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAdmissionMode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCategory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'caste';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCaste = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'age';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAge = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'contact';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strContact = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'coontact2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCoontact2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'address';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'finalized';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnFinalized = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admitted';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAdmitted = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'course';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCourse = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'data_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDataBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'web';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strWeb = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'is_take_form';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnIsTakeForm = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'form_fee';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFormFee = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idinquiry != $objPreviousItem->Idinquiry) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objEducationArray);
					$cnt = count($objToReturn->_objEducationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objEducationArray, $objToReturn->_objEducationArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileArray);
					$cnt = count($objToReturn->_objProfileArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileArray, $objToReturn->_objProfileArray)) {
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
				$strAliasPrefix = 'inquiry__';

			// Check for PrefixObject Early Binding
			$strAlias = $strAliasPrefix . 'prefix__idprefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPrefixObject = Prefix::InstantiateDbRow($objDbRow, $strAliasPrefix . 'prefix__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AdmissionModeObject Early Binding
			$strAlias = $strAliasPrefix . 'admission_mode__idadmission_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAdmissionModeObject = AdmissionMode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'admission_mode__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CategoryObject Early Binding
			$strAlias = $strAliasPrefix . 'category__idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCategoryObject = FeesConcession::InstantiateDbRow($objDbRow, $strAliasPrefix . 'category__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CasteObject Early Binding
			$strAlias = $strAliasPrefix . 'caste__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCasteObject = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'caste__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CourseObject Early Binding
			$strAlias = $strAliasPrefix . 'course__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourseObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'course__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DataByObject Early Binding
			$strAlias = $strAliasPrefix . 'data_by__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDataByObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'data_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'subject__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubjectObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for Education Virtual Binding
			$strAlias = $strAliasPrefix . 'education__ideducation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objEducationArray)
				$objToReturn->_objEducationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objEducationArray[] = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'education__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEducation = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'education__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Profile Virtual Binding
			$strAlias = $strAliasPrefix . 'profile__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileArray)
				$objToReturn->_objProfileArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfile = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Inquiries from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Inquiry[]
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
					$objItem = Inquiry::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Inquiry::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Inquiry object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Inquiry next row resulting from the query
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
			return Inquiry::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Inquiry object,
		 * by Idinquiry Index(es)
		 * @param integer $intIdinquiry
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry
		*/
		public static function LoadByIdinquiry($intIdinquiry, $objOptionalClauses = null) {
			return Inquiry::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Inquiry()->Idinquiry, $intIdinquiry)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Inquiry object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Inquiry::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Inquiry()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by AdmissionMode Index(es)
		 * @param integer $intAdmissionMode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayByAdmissionMode($intAdmissionMode, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayByAdmissionMode query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->AdmissionMode, $intAdmissionMode),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by AdmissionMode Index(es)
		 * @param integer $intAdmissionMode
		 * @return int
		*/
		public static function CountByAdmissionMode($intAdmissionMode) {
			// Call Inquiry::QueryCount to perform the CountByAdmissionMode query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->AdmissionMode, $intAdmissionMode)
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayByDataBy($intDataBy, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayByDataBy query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->DataBy, $intDataBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @return int
		*/
		public static function CountByDataBy($intDataBy) {
			// Call Inquiry::QueryCount to perform the CountByDataBy query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->DataBy, $intDataBy)
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayByCourse($intCourse, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayByCourse query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->Course, $intCourse),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @return int
		*/
		public static function CountByCourse($intCourse) {
			// Call Inquiry::QueryCount to perform the CountByCourse query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->Course, $intCourse)
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayBySubject($intSubject, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayBySubject query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->Subject, $intSubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @return int
		*/
		public static function CountBySubject($intSubject) {
			// Call Inquiry::QueryCount to perform the CountBySubject query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->Subject, $intSubject)
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by Caste Index(es)
		 * @param integer $intCaste
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayByCaste($intCaste, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayByCaste query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->Caste, $intCaste),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by Caste Index(es)
		 * @param integer $intCaste
		 * @return int
		*/
		public static function CountByCaste($intCaste) {
			// Call Inquiry::QueryCount to perform the CountByCaste query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->Caste, $intCaste)
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayByCategory($intCategory, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayByCategory query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->Category, $intCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @return int
		*/
		public static function CountByCategory($intCategory) {
			// Call Inquiry::QueryCount to perform the CountByCategory query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->Category, $intCategory)
			);
		}

		/**
		 * Load an array of Inquiry objects,
		 * by Prefix Index(es)
		 * @param integer $intPrefix
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public static function LoadArrayByPrefix($intPrefix, $objOptionalClauses = null) {
			// Call Inquiry::QueryArray to perform the LoadArrayByPrefix query
			try {
				return Inquiry::QueryArray(
					QQ::Equal(QQN::Inquiry()->Prefix, $intPrefix),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Inquiries
		 * by Prefix Index(es)
		 * @param integer $intPrefix
		 * @return int
		*/
		public static function CountByPrefix($intPrefix) {
			// Call Inquiry::QueryCount to perform the CountByPrefix query
			return Inquiry::QueryCount(
				QQ::Equal(QQN::Inquiry()->Prefix, $intPrefix)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Inquiry
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `inquiry` (
							`code`,
							`prefix`,
							`first_name`,
							`middle_name`,
							`last_name`,
							`father_middle_name`,
							`dob`,
							`admission_date`,
							`admission_mode`,
							`category`,
							`caste`,
							`age`,
							`contact`,
							`coontact2`,
							`address`,
							`finalized`,
							`admitted`,
							`course`,
							`data_by`,
							`subject`,
							`web`,
							`is_take_form`,
							`form_fee`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->intPrefix) . ',
							' . $objDatabase->SqlVariable($this->strFirstName) . ',
							' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							' . $objDatabase->SqlVariable($this->strLastName) . ',
							' . $objDatabase->SqlVariable($this->strFatherMiddleName) . ',
							' . $objDatabase->SqlVariable($this->dttDob) . ',
							' . $objDatabase->SqlVariable($this->dttAdmissionDate) . ',
							' . $objDatabase->SqlVariable($this->intAdmissionMode) . ',
							' . $objDatabase->SqlVariable($this->intCategory) . ',
							' . $objDatabase->SqlVariable($this->intCaste) . ',
							' . $objDatabase->SqlVariable($this->intAge) . ',
							' . $objDatabase->SqlVariable($this->strContact) . ',
							' . $objDatabase->SqlVariable($this->strCoontact2) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->blnFinalized) . ',
							' . $objDatabase->SqlVariable($this->blnAdmitted) . ',
							' . $objDatabase->SqlVariable($this->intCourse) . ',
							' . $objDatabase->SqlVariable($this->intDataBy) . ',
							' . $objDatabase->SqlVariable($this->intSubject) . ',
							' . $objDatabase->SqlVariable($this->strWeb) . ',
							' . $objDatabase->SqlVariable($this->blnIsTakeForm) . ',
							' . $objDatabase->SqlVariable($this->strFormFee) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdinquiry = $objDatabase->InsertId('inquiry', 'idinquiry');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`inquiry`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`prefix` = ' . $objDatabase->SqlVariable($this->intPrefix) . ',
							`first_name` = ' . $objDatabase->SqlVariable($this->strFirstName) . ',
							`middle_name` = ' . $objDatabase->SqlVariable($this->strMiddleName) . ',
							`last_name` = ' . $objDatabase->SqlVariable($this->strLastName) . ',
							`father_middle_name` = ' . $objDatabase->SqlVariable($this->strFatherMiddleName) . ',
							`dob` = ' . $objDatabase->SqlVariable($this->dttDob) . ',
							`admission_date` = ' . $objDatabase->SqlVariable($this->dttAdmissionDate) . ',
							`admission_mode` = ' . $objDatabase->SqlVariable($this->intAdmissionMode) . ',
							`category` = ' . $objDatabase->SqlVariable($this->intCategory) . ',
							`caste` = ' . $objDatabase->SqlVariable($this->intCaste) . ',
							`age` = ' . $objDatabase->SqlVariable($this->intAge) . ',
							`contact` = ' . $objDatabase->SqlVariable($this->strContact) . ',
							`coontact2` = ' . $objDatabase->SqlVariable($this->strCoontact2) . ',
							`address` = ' . $objDatabase->SqlVariable($this->strAddress) . ',
							`finalized` = ' . $objDatabase->SqlVariable($this->blnFinalized) . ',
							`admitted` = ' . $objDatabase->SqlVariable($this->blnAdmitted) . ',
							`course` = ' . $objDatabase->SqlVariable($this->intCourse) . ',
							`data_by` = ' . $objDatabase->SqlVariable($this->intDataBy) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->intSubject) . ',
							`web` = ' . $objDatabase->SqlVariable($this->strWeb) . ',
							`is_take_form` = ' . $objDatabase->SqlVariable($this->blnIsTakeForm) . ',
							`form_fee` = ' . $objDatabase->SqlVariable($this->strFormFee) . '
						WHERE
							`idinquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
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
		 * Delete this Inquiry
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Inquiry with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Inquiry ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Inquiry', $this->intIdinquiry);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Inquiries
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate inquiry table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `inquiry`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Inquiry from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Inquiry object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Inquiry::Load($this->intIdinquiry);

			// Update $this's local variables to match
			$this->strCode = $objReloaded->strCode;
			$this->Prefix = $objReloaded->Prefix;
			$this->strFirstName = $objReloaded->strFirstName;
			$this->strMiddleName = $objReloaded->strMiddleName;
			$this->strLastName = $objReloaded->strLastName;
			$this->strFatherMiddleName = $objReloaded->strFatherMiddleName;
			$this->dttDob = $objReloaded->dttDob;
			$this->dttAdmissionDate = $objReloaded->dttAdmissionDate;
			$this->AdmissionMode = $objReloaded->AdmissionMode;
			$this->Category = $objReloaded->Category;
			$this->Caste = $objReloaded->Caste;
			$this->intAge = $objReloaded->intAge;
			$this->strContact = $objReloaded->strContact;
			$this->strCoontact2 = $objReloaded->strCoontact2;
			$this->strAddress = $objReloaded->strAddress;
			$this->blnFinalized = $objReloaded->blnFinalized;
			$this->blnAdmitted = $objReloaded->blnAdmitted;
			$this->Course = $objReloaded->Course;
			$this->DataBy = $objReloaded->DataBy;
			$this->Subject = $objReloaded->Subject;
			$this->strWeb = $objReloaded->strWeb;
			$this->blnIsTakeForm = $objReloaded->blnIsTakeForm;
			$this->strFormFee = $objReloaded->strFormFee;
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
				case 'Idinquiry':
					/**
					 * Gets the value for intIdinquiry (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdinquiry;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'Prefix':
					/**
					 * Gets the value for intPrefix 
					 * @return integer
					 */
					return $this->intPrefix;

				case 'FirstName':
					/**
					 * Gets the value for strFirstName (Not Null)
					 * @return string
					 */
					return $this->strFirstName;

				case 'MiddleName':
					/**
					 * Gets the value for strMiddleName (Not Null)
					 * @return string
					 */
					return $this->strMiddleName;

				case 'LastName':
					/**
					 * Gets the value for strLastName (Not Null)
					 * @return string
					 */
					return $this->strLastName;

				case 'FatherMiddleName':
					/**
					 * Gets the value for strFatherMiddleName 
					 * @return string
					 */
					return $this->strFatherMiddleName;

				case 'Dob':
					/**
					 * Gets the value for dttDob 
					 * @return QDateTime
					 */
					return $this->dttDob;

				case 'AdmissionDate':
					/**
					 * Gets the value for dttAdmissionDate 
					 * @return QDateTime
					 */
					return $this->dttAdmissionDate;

				case 'AdmissionMode':
					/**
					 * Gets the value for intAdmissionMode 
					 * @return integer
					 */
					return $this->intAdmissionMode;

				case 'Category':
					/**
					 * Gets the value for intCategory 
					 * @return integer
					 */
					return $this->intCategory;

				case 'Caste':
					/**
					 * Gets the value for intCaste 
					 * @return integer
					 */
					return $this->intCaste;

				case 'Age':
					/**
					 * Gets the value for intAge 
					 * @return integer
					 */
					return $this->intAge;

				case 'Contact':
					/**
					 * Gets the value for strContact 
					 * @return string
					 */
					return $this->strContact;

				case 'Coontact2':
					/**
					 * Gets the value for strCoontact2 
					 * @return string
					 */
					return $this->strCoontact2;

				case 'Address':
					/**
					 * Gets the value for strAddress 
					 * @return string
					 */
					return $this->strAddress;

				case 'Finalized':
					/**
					 * Gets the value for blnFinalized 
					 * @return boolean
					 */
					return $this->blnFinalized;

				case 'Admitted':
					/**
					 * Gets the value for blnAdmitted 
					 * @return boolean
					 */
					return $this->blnAdmitted;

				case 'Course':
					/**
					 * Gets the value for intCourse 
					 * @return integer
					 */
					return $this->intCourse;

				case 'DataBy':
					/**
					 * Gets the value for intDataBy 
					 * @return integer
					 */
					return $this->intDataBy;

				case 'Subject':
					/**
					 * Gets the value for intSubject 
					 * @return integer
					 */
					return $this->intSubject;

				case 'Web':
					/**
					 * Gets the value for strWeb 
					 * @return string
					 */
					return $this->strWeb;

				case 'IsTakeForm':
					/**
					 * Gets the value for blnIsTakeForm 
					 * @return boolean
					 */
					return $this->blnIsTakeForm;

				case 'FormFee':
					/**
					 * Gets the value for strFormFee 
					 * @return string
					 */
					return $this->strFormFee;


				///////////////////
				// Member Objects
				///////////////////
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

				case 'CategoryObject':
					/**
					 * Gets the value for the FeesConcession object referenced by intCategory 
					 * @return FeesConcession
					 */
					try {
						if ((!$this->objCategoryObject) && (!is_null($this->intCategory)))
							$this->objCategoryObject = FeesConcession::Load($this->intCategory);
						return $this->objCategoryObject;
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

				case 'SubjectObject':
					/**
					 * Gets the value for the Role object referenced by intSubject 
					 * @return Role
					 */
					try {
						if ((!$this->objSubjectObject) && (!is_null($this->intSubject)))
							$this->objSubjectObject = Role::Load($this->intSubject);
						return $this->objSubjectObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Education':
					/**
					 * Gets the value for the private _objEducation (Read-Only)
					 * if set due to an expansion on the education.inquiry reverse relationship
					 * @return Education
					 */
					return $this->_objEducation;

				case '_EducationArray':
					/**
					 * Gets the value for the private _objEducationArray (Read-Only)
					 * if set due to an ExpandAsArray on the education.inquiry reverse relationship
					 * @return Education[]
					 */
					return $this->_objEducationArray;

				case '_Profile':
					/**
					 * Gets the value for the private _objProfile (Read-Only)
					 * if set due to an expansion on the profile.inquiry reverse relationship
					 * @return Profile
					 */
					return $this->_objProfile;

				case '_ProfileArray':
					/**
					 * Gets the value for the private _objProfileArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.inquiry reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileArray;


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
					 * Sets the value for strFirstName (Not Null)
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
					 * Sets the value for strMiddleName (Not Null)
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
					 * Sets the value for strLastName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLastName = QType::Cast($mixValue, QType::String));
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

				case 'AdmissionDate':
					/**
					 * Sets the value for dttAdmissionDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttAdmissionDate = QType::Cast($mixValue, QType::DateTime));
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

				case 'Category':
					/**
					 * Sets the value for intCategory 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCategoryObject = null;
						return ($this->intCategory = QType::Cast($mixValue, QType::Integer));
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

				case 'Age':
					/**
					 * Sets the value for intAge 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intAge = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Contact':
					/**
					 * Sets the value for strContact 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContact = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Coontact2':
					/**
					 * Sets the value for strCoontact2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCoontact2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address':
					/**
					 * Sets the value for strAddress 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddress = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Finalized':
					/**
					 * Sets the value for blnFinalized 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnFinalized = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Admitted':
					/**
					 * Sets the value for blnAdmitted 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAdmitted = QType::Cast($mixValue, QType::Boolean));
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

				case 'Subject':
					/**
					 * Sets the value for intSubject 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSubjectObject = null;
						return ($this->intSubject = QType::Cast($mixValue, QType::Integer));
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

				case 'IsTakeForm':
					/**
					 * Sets the value for blnIsTakeForm 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnIsTakeForm = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FormFee':
					/**
					 * Sets the value for strFormFee 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFormFee = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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
							throw new QCallerException('Unable to set an unsaved PrefixObject for this Inquiry');

						// Update Local Member Variables
						$this->objPrefixObject = $mixValue;
						$this->intPrefix = $mixValue->Idprefix;

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
							throw new QCallerException('Unable to set an unsaved AdmissionModeObject for this Inquiry');

						// Update Local Member Variables
						$this->objAdmissionModeObject = $mixValue;
						$this->intAdmissionMode = $mixValue->IdadmissionMode;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CategoryObject':
					/**
					 * Sets the value for the FeesConcession object referenced by intCategory 
					 * @param FeesConcession $mixValue
					 * @return FeesConcession
					 */
					if (is_null($mixValue)) {
						$this->intCategory = null;
						$this->objCategoryObject = null;
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
							throw new QCallerException('Unable to set an unsaved CategoryObject for this Inquiry');

						// Update Local Member Variables
						$this->objCategoryObject = $mixValue;
						$this->intCategory = $mixValue->IdfeesConcession;

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
							throw new QCallerException('Unable to set an unsaved CasteObject for this Inquiry');

						// Update Local Member Variables
						$this->objCasteObject = $mixValue;
						$this->intCaste = $mixValue->Idcast;

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
							throw new QCallerException('Unable to set an unsaved CourseObject for this Inquiry');

						// Update Local Member Variables
						$this->objCourseObject = $mixValue;
						$this->intCourse = $mixValue->Idrole;

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
							throw new QCallerException('Unable to set an unsaved DataByObject for this Inquiry');

						// Update Local Member Variables
						$this->objDataByObject = $mixValue;
						$this->intDataBy = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SubjectObject':
					/**
					 * Sets the value for the Role object referenced by intSubject 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intSubject = null;
						$this->objSubjectObject = null;
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
							throw new QCallerException('Unable to set an unsaved SubjectObject for this Inquiry');

						// Update Local Member Variables
						$this->objSubjectObject = $mixValue;
						$this->intSubject = $mixValue->Idrole;

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



		// Related Objects' Methods for Education
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Educations as an array of Education objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education[]
		*/
		public function GetEducationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdinquiry)))
				return array();

			try {
				return Education::LoadArrayByInquiry($this->intIdinquiry, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Educations
		 * @return int
		*/
		public function CountEducations() {
			if ((is_null($this->intIdinquiry)))
				return 0;

			return Education::CountByInquiry($this->intIdinquiry);
		}

		/**
		 * Associates a Education
		 * @param Education $objEducation
		 * @return void
		*/
		public function AssociateEducation(Education $objEducation) {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEducation on this unsaved Inquiry.');
			if ((is_null($objEducation->Ideducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEducation on this Inquiry with an unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education`
				SET
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($objEducation->Ideducation) . '
			');
		}

		/**
		 * Unassociates a Education
		 * @param Education $objEducation
		 * @return void
		*/
		public function UnassociateEducation(Education $objEducation) {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducation on this unsaved Inquiry.');
			if ((is_null($objEducation->Ideducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducation on this Inquiry with an unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education`
				SET
					`inquiry` = null
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($objEducation->Ideducation) . ' AND
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}

		/**
		 * Unassociates all Educations
		 * @return void
		*/
		public function UnassociateAllEducations() {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducation on this unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`education`
				SET
					`inquiry` = null
				WHERE
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}

		/**
		 * Deletes an associated Education
		 * @param Education $objEducation
		 * @return void
		*/
		public function DeleteAssociatedEducation(Education $objEducation) {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducation on this unsaved Inquiry.');
			if ((is_null($objEducation->Ideducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducation on this Inquiry with an unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education`
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($objEducation->Ideducation) . ' AND
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}

		/**
		 * Deletes all associated Educations
		 * @return void
		*/
		public function DeleteAllEducations() {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEducation on this unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education`
				WHERE
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}


		// Related Objects' Methods for Profile
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Profiles as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileArray($objOptionalClauses = null) {
			if ((is_null($this->intIdinquiry)))
				return array();

			try {
				return Profile::LoadArrayByInquiry($this->intIdinquiry, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Profiles
		 * @return int
		*/
		public function CountProfiles() {
			if ((is_null($this->intIdinquiry)))
				return 0;

			return Profile::CountByInquiry($this->intIdinquiry);
		}

		/**
		 * Associates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this unsaved Inquiry.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this Inquiry with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Inquiry.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this Inquiry with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`inquiry` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}

		/**
		 * Unassociates all Profiles
		 * @return void
		*/
		public function UnassociateAllProfiles() {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`inquiry` = null
				WHERE
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}

		/**
		 * Deletes an associated Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfile(Profile $objProfile) {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Inquiry.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this Inquiry with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
			');
		}

		/**
		 * Deletes all associated Profiles
		 * @return void
		*/
		public function DeleteAllProfiles() {
			if ((is_null($this->intIdinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Inquiry::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`inquiry` = ' . $objDatabase->SqlVariable($this->intIdinquiry) . '
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
			return "inquiry";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Inquiry::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Inquiry"><sequence>';
			$strToReturn .= '<element name="Idinquiry" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="PrefixObject" type="xsd1:Prefix"/>';
			$strToReturn .= '<element name="FirstName" type="xsd:string"/>';
			$strToReturn .= '<element name="MiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="LastName" type="xsd:string"/>';
			$strToReturn .= '<element name="FatherMiddleName" type="xsd:string"/>';
			$strToReturn .= '<element name="Dob" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="AdmissionDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="AdmissionModeObject" type="xsd1:AdmissionMode"/>';
			$strToReturn .= '<element name="CategoryObject" type="xsd1:FeesConcession"/>';
			$strToReturn .= '<element name="CasteObject" type="xsd1:Cast"/>';
			$strToReturn .= '<element name="Age" type="xsd:int"/>';
			$strToReturn .= '<element name="Contact" type="xsd:string"/>';
			$strToReturn .= '<element name="Coontact2" type="xsd:string"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="Finalized" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Admitted" type="xsd:boolean"/>';
			$strToReturn .= '<element name="CourseObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="DataByObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="SubjectObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Web" type="xsd:string"/>';
			$strToReturn .= '<element name="IsTakeForm" type="xsd:boolean"/>';
			$strToReturn .= '<element name="FormFee" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Inquiry', $strComplexTypeArray)) {
				$strComplexTypeArray['Inquiry'] = Inquiry::GetSoapComplexTypeXml();
				Prefix::AlterSoapComplexTypeArray($strComplexTypeArray);
				AdmissionMode::AlterSoapComplexTypeArray($strComplexTypeArray);
				FeesConcession::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cast::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Inquiry::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Inquiry();
			if (property_exists($objSoapObject, 'Idinquiry'))
				$objToReturn->intIdinquiry = $objSoapObject->Idinquiry;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if ((property_exists($objSoapObject, 'PrefixObject')) &&
				($objSoapObject->PrefixObject))
				$objToReturn->PrefixObject = Prefix::GetObjectFromSoapObject($objSoapObject->PrefixObject);
			if (property_exists($objSoapObject, 'FirstName'))
				$objToReturn->strFirstName = $objSoapObject->FirstName;
			if (property_exists($objSoapObject, 'MiddleName'))
				$objToReturn->strMiddleName = $objSoapObject->MiddleName;
			if (property_exists($objSoapObject, 'LastName'))
				$objToReturn->strLastName = $objSoapObject->LastName;
			if (property_exists($objSoapObject, 'FatherMiddleName'))
				$objToReturn->strFatherMiddleName = $objSoapObject->FatherMiddleName;
			if (property_exists($objSoapObject, 'Dob'))
				$objToReturn->dttDob = new QDateTime($objSoapObject->Dob);
			if (property_exists($objSoapObject, 'AdmissionDate'))
				$objToReturn->dttAdmissionDate = new QDateTime($objSoapObject->AdmissionDate);
			if ((property_exists($objSoapObject, 'AdmissionModeObject')) &&
				($objSoapObject->AdmissionModeObject))
				$objToReturn->AdmissionModeObject = AdmissionMode::GetObjectFromSoapObject($objSoapObject->AdmissionModeObject);
			if ((property_exists($objSoapObject, 'CategoryObject')) &&
				($objSoapObject->CategoryObject))
				$objToReturn->CategoryObject = FeesConcession::GetObjectFromSoapObject($objSoapObject->CategoryObject);
			if ((property_exists($objSoapObject, 'CasteObject')) &&
				($objSoapObject->CasteObject))
				$objToReturn->CasteObject = Cast::GetObjectFromSoapObject($objSoapObject->CasteObject);
			if (property_exists($objSoapObject, 'Age'))
				$objToReturn->intAge = $objSoapObject->Age;
			if (property_exists($objSoapObject, 'Contact'))
				$objToReturn->strContact = $objSoapObject->Contact;
			if (property_exists($objSoapObject, 'Coontact2'))
				$objToReturn->strCoontact2 = $objSoapObject->Coontact2;
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'Finalized'))
				$objToReturn->blnFinalized = $objSoapObject->Finalized;
			if (property_exists($objSoapObject, 'Admitted'))
				$objToReturn->blnAdmitted = $objSoapObject->Admitted;
			if ((property_exists($objSoapObject, 'CourseObject')) &&
				($objSoapObject->CourseObject))
				$objToReturn->CourseObject = Role::GetObjectFromSoapObject($objSoapObject->CourseObject);
			if ((property_exists($objSoapObject, 'DataByObject')) &&
				($objSoapObject->DataByObject))
				$objToReturn->DataByObject = Ledger::GetObjectFromSoapObject($objSoapObject->DataByObject);
			if ((property_exists($objSoapObject, 'SubjectObject')) &&
				($objSoapObject->SubjectObject))
				$objToReturn->SubjectObject = Role::GetObjectFromSoapObject($objSoapObject->SubjectObject);
			if (property_exists($objSoapObject, 'Web'))
				$objToReturn->strWeb = $objSoapObject->Web;
			if (property_exists($objSoapObject, 'IsTakeForm'))
				$objToReturn->blnIsTakeForm = $objSoapObject->IsTakeForm;
			if (property_exists($objSoapObject, 'FormFee'))
				$objToReturn->strFormFee = $objSoapObject->FormFee;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Inquiry::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPrefixObject)
				$objObject->objPrefixObject = Prefix::GetSoapObjectFromObject($objObject->objPrefixObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPrefix = null;
			if ($objObject->dttDob)
				$objObject->dttDob = $objObject->dttDob->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttAdmissionDate)
				$objObject->dttAdmissionDate = $objObject->dttAdmissionDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objAdmissionModeObject)
				$objObject->objAdmissionModeObject = AdmissionMode::GetSoapObjectFromObject($objObject->objAdmissionModeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAdmissionMode = null;
			if ($objObject->objCategoryObject)
				$objObject->objCategoryObject = FeesConcession::GetSoapObjectFromObject($objObject->objCategoryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCategory = null;
			if ($objObject->objCasteObject)
				$objObject->objCasteObject = Cast::GetSoapObjectFromObject($objObject->objCasteObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCaste = null;
			if ($objObject->objCourseObject)
				$objObject->objCourseObject = Role::GetSoapObjectFromObject($objObject->objCourseObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourse = null;
			if ($objObject->objDataByObject)
				$objObject->objDataByObject = Ledger::GetSoapObjectFromObject($objObject->objDataByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDataBy = null;
			if ($objObject->objSubjectObject)
				$objObject->objSubjectObject = Role::GetSoapObjectFromObject($objObject->objSubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubject = null;
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
			$iArray['Idinquiry'] = $this->intIdinquiry;
			$iArray['Code'] = $this->strCode;
			$iArray['Prefix'] = $this->intPrefix;
			$iArray['FirstName'] = $this->strFirstName;
			$iArray['MiddleName'] = $this->strMiddleName;
			$iArray['LastName'] = $this->strLastName;
			$iArray['FatherMiddleName'] = $this->strFatherMiddleName;
			$iArray['Dob'] = $this->dttDob;
			$iArray['AdmissionDate'] = $this->dttAdmissionDate;
			$iArray['AdmissionMode'] = $this->intAdmissionMode;
			$iArray['Category'] = $this->intCategory;
			$iArray['Caste'] = $this->intCaste;
			$iArray['Age'] = $this->intAge;
			$iArray['Contact'] = $this->strContact;
			$iArray['Coontact2'] = $this->strCoontact2;
			$iArray['Address'] = $this->strAddress;
			$iArray['Finalized'] = $this->blnFinalized;
			$iArray['Admitted'] = $this->blnAdmitted;
			$iArray['Course'] = $this->intCourse;
			$iArray['DataBy'] = $this->intDataBy;
			$iArray['Subject'] = $this->intSubject;
			$iArray['Web'] = $this->strWeb;
			$iArray['IsTakeForm'] = $this->blnIsTakeForm;
			$iArray['FormFee'] = $this->strFormFee;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdinquiry ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idinquiry
     * @property-read QQNode $Code
     * @property-read QQNode $Prefix
     * @property-read QQNodePrefix $PrefixObject
     * @property-read QQNode $FirstName
     * @property-read QQNode $MiddleName
     * @property-read QQNode $LastName
     * @property-read QQNode $FatherMiddleName
     * @property-read QQNode $Dob
     * @property-read QQNode $AdmissionDate
     * @property-read QQNode $AdmissionMode
     * @property-read QQNodeAdmissionMode $AdmissionModeObject
     * @property-read QQNode $Category
     * @property-read QQNodeFeesConcession $CategoryObject
     * @property-read QQNode $Caste
     * @property-read QQNodeCast $CasteObject
     * @property-read QQNode $Age
     * @property-read QQNode $Contact
     * @property-read QQNode $Coontact2
     * @property-read QQNode $Address
     * @property-read QQNode $Finalized
     * @property-read QQNode $Admitted
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLedger $DataByObject
     * @property-read QQNode $Subject
     * @property-read QQNodeRole $SubjectObject
     * @property-read QQNode $Web
     * @property-read QQNode $IsTakeForm
     * @property-read QQNode $FormFee
     *
     *
     * @property-read QQReverseReferenceNodeEducation $Education
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeInquiry extends QQNode {
		protected $strTableName = 'inquiry';
		protected $strPrimaryKey = 'idinquiry';
		protected $strClassName = 'Inquiry';
		public function __get($strName) {
			switch ($strName) {
				case 'Idinquiry':
					return new QQNode('idinquiry', 'Idinquiry', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
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
				case 'FatherMiddleName':
					return new QQNode('father_middle_name', 'FatherMiddleName', 'VarChar', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'Date', $this);
				case 'AdmissionDate':
					return new QQNode('admission_date', 'AdmissionDate', 'Date', $this);
				case 'AdmissionMode':
					return new QQNode('admission_mode', 'AdmissionMode', 'Integer', $this);
				case 'AdmissionModeObject':
					return new QQNodeAdmissionMode('admission_mode', 'AdmissionModeObject', 'Integer', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'Integer', $this);
				case 'CategoryObject':
					return new QQNodeFeesConcession('category', 'CategoryObject', 'Integer', $this);
				case 'Caste':
					return new QQNode('caste', 'Caste', 'Integer', $this);
				case 'CasteObject':
					return new QQNodeCast('caste', 'CasteObject', 'Integer', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'Integer', $this);
				case 'Contact':
					return new QQNode('contact', 'Contact', 'VarChar', $this);
				case 'Coontact2':
					return new QQNode('coontact2', 'Coontact2', 'VarChar', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'Blob', $this);
				case 'Finalized':
					return new QQNode('finalized', 'Finalized', 'Bit', $this);
				case 'Admitted':
					return new QQNode('admitted', 'Admitted', 'Bit', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'Integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'Integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'Integer', $this);
				case 'DataByObject':
					return new QQNodeLedger('data_by', 'DataByObject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Integer', $this);
				case 'SubjectObject':
					return new QQNodeRole('subject', 'SubjectObject', 'Integer', $this);
				case 'Web':
					return new QQNode('web', 'Web', 'Blob', $this);
				case 'IsTakeForm':
					return new QQNode('is_take_form', 'IsTakeForm', 'Bit', $this);
				case 'FormFee':
					return new QQNode('form_fee', 'FormFee', 'VarChar', $this);
				case 'Education':
					return new QQReverseReferenceNodeEducation($this, 'education', 'reverse_reference', 'inquiry');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'inquiry');

				case '_PrimaryKeyNode':
					return new QQNode('idinquiry', 'Idinquiry', 'Integer', $this);
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
     * @property-read QQNode $Idinquiry
     * @property-read QQNode $Code
     * @property-read QQNode $Prefix
     * @property-read QQNodePrefix $PrefixObject
     * @property-read QQNode $FirstName
     * @property-read QQNode $MiddleName
     * @property-read QQNode $LastName
     * @property-read QQNode $FatherMiddleName
     * @property-read QQNode $Dob
     * @property-read QQNode $AdmissionDate
     * @property-read QQNode $AdmissionMode
     * @property-read QQNodeAdmissionMode $AdmissionModeObject
     * @property-read QQNode $Category
     * @property-read QQNodeFeesConcession $CategoryObject
     * @property-read QQNode $Caste
     * @property-read QQNodeCast $CasteObject
     * @property-read QQNode $Age
     * @property-read QQNode $Contact
     * @property-read QQNode $Coontact2
     * @property-read QQNode $Address
     * @property-read QQNode $Finalized
     * @property-read QQNode $Admitted
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLedger $DataByObject
     * @property-read QQNode $Subject
     * @property-read QQNodeRole $SubjectObject
     * @property-read QQNode $Web
     * @property-read QQNode $IsTakeForm
     * @property-read QQNode $FormFee
     *
     *
     * @property-read QQReverseReferenceNodeEducation $Education
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeInquiry extends QQReverseReferenceNode {
		protected $strTableName = 'inquiry';
		protected $strPrimaryKey = 'idinquiry';
		protected $strClassName = 'Inquiry';
		public function __get($strName) {
			switch ($strName) {
				case 'Idinquiry':
					return new QQNode('idinquiry', 'Idinquiry', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
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
				case 'FatherMiddleName':
					return new QQNode('father_middle_name', 'FatherMiddleName', 'string', $this);
				case 'Dob':
					return new QQNode('dob', 'Dob', 'QDateTime', $this);
				case 'AdmissionDate':
					return new QQNode('admission_date', 'AdmissionDate', 'QDateTime', $this);
				case 'AdmissionMode':
					return new QQNode('admission_mode', 'AdmissionMode', 'integer', $this);
				case 'AdmissionModeObject':
					return new QQNodeAdmissionMode('admission_mode', 'AdmissionModeObject', 'integer', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'integer', $this);
				case 'CategoryObject':
					return new QQNodeFeesConcession('category', 'CategoryObject', 'integer', $this);
				case 'Caste':
					return new QQNode('caste', 'Caste', 'integer', $this);
				case 'CasteObject':
					return new QQNodeCast('caste', 'CasteObject', 'integer', $this);
				case 'Age':
					return new QQNode('age', 'Age', 'integer', $this);
				case 'Contact':
					return new QQNode('contact', 'Contact', 'string', $this);
				case 'Coontact2':
					return new QQNode('coontact2', 'Coontact2', 'string', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'string', $this);
				case 'Finalized':
					return new QQNode('finalized', 'Finalized', 'boolean', $this);
				case 'Admitted':
					return new QQNode('admitted', 'Admitted', 'boolean', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'integer', $this);
				case 'DataByObject':
					return new QQNodeLedger('data_by', 'DataByObject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'integer', $this);
				case 'SubjectObject':
					return new QQNodeRole('subject', 'SubjectObject', 'integer', $this);
				case 'Web':
					return new QQNode('web', 'Web', 'string', $this);
				case 'IsTakeForm':
					return new QQNode('is_take_form', 'IsTakeForm', 'boolean', $this);
				case 'FormFee':
					return new QQNode('form_fee', 'FormFee', 'string', $this);
				case 'Education':
					return new QQReverseReferenceNodeEducation($this, 'education', 'reverse_reference', 'inquiry');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'inquiry');

				case '_PrimaryKeyNode':
					return new QQNode('idinquiry', 'Idinquiry', 'integer', $this);
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
