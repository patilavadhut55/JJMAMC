<?php
	/**
	 * The abstract ExpiranceGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Expirance subclass which
	 * extends this ExpiranceGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Expirance class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idexpirance the value for intIdexpirance (Read-Only PK)
	 * @property integer $Member the value for intMember 
	 * @property QDateTime $From the value for dttFrom 
	 * @property QDateTime $To the value for dttTo 
	 * @property string $Company the value for strCompany 
	 * @property string $Department the value for strDepartment 
	 * @property string $Post the value for strPost 
	 * @property string $Note the value for strNote 
	 * @property string $ApprovalNo the value for strApprovalNo 
	 * @property QDateTime $ApprovalFromDate the value for dttApprovalFromDate 
	 * @property QDateTime $ApprovalToDate the value for dttApprovalToDate 
	 * @property integer $ExperianceAt the value for intExperianceAt 
	 * @property string $TotalExperiance the value for strTotalExperiance 
	 * @property boolean $ThisCollege the value for blnThisCollege 
	 * @property integer $Designation the value for intDesignation 
	 * @property Ledger $MemberObject the value for the Ledger object referenced by intMember 
	 * @property Role $DesignationObject the value for the Role object referenced by intDesignation 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ExpiranceGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column expirance.idexpirance
		 * @var integer intIdexpirance
		 */
		protected $intIdexpirance;
		const IdexpiranceDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.member
		 * @var integer intMember
		 */
		protected $intMember;
		const MemberDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.from
		 * @var QDateTime dttFrom
		 */
		protected $dttFrom;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.to
		 * @var QDateTime dttTo
		 */
		protected $dttTo;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.company
		 * @var string strCompany
		 */
		protected $strCompany;
		const CompanyMaxLength = 255;
		const CompanyDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.department
		 * @var string strDepartment
		 */
		protected $strDepartment;
		const DepartmentMaxLength = 255;
		const DepartmentDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.post
		 * @var string strPost
		 */
		protected $strPost;
		const PostMaxLength = 255;
		const PostDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.approval_no
		 * @var string strApprovalNo
		 */
		protected $strApprovalNo;
		const ApprovalNoMaxLength = 45;
		const ApprovalNoDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.approval_from_date
		 * @var QDateTime dttApprovalFromDate
		 */
		protected $dttApprovalFromDate;
		const ApprovalFromDateDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.approval_to_date
		 * @var QDateTime dttApprovalToDate
		 */
		protected $dttApprovalToDate;
		const ApprovalToDateDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.experiance_at
		 * @var integer intExperianceAt
		 */
		protected $intExperianceAt;
		const ExperianceAtDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.total_experiance
		 * @var string strTotalExperiance
		 */
		protected $strTotalExperiance;
		const TotalExperianceMaxLength = 45;
		const TotalExperianceDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.this_college
		 * @var boolean blnThisCollege
		 */
		protected $blnThisCollege;
		const ThisCollegeDefault = null;


		/**
		 * Protected member variable that maps to the database column expirance.designation
		 * @var integer intDesignation
		 */
		protected $intDesignation;
		const DesignationDefault = null;


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
		 * in the database column expirance.member.
		 *
		 * NOTE: Always use the MemberObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objMemberObject
		 */
		protected $objMemberObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column expirance.designation.
		 *
		 * NOTE: Always use the DesignationObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDesignationObject
		 */
		protected $objDesignationObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdexpirance = Expirance::IdexpiranceDefault;
			$this->intMember = Expirance::MemberDefault;
			$this->dttFrom = (Expirance::FromDefault === null)?null:new QDateTime(Expirance::FromDefault);
			$this->dttTo = (Expirance::ToDefault === null)?null:new QDateTime(Expirance::ToDefault);
			$this->strCompany = Expirance::CompanyDefault;
			$this->strDepartment = Expirance::DepartmentDefault;
			$this->strPost = Expirance::PostDefault;
			$this->strNote = Expirance::NoteDefault;
			$this->strApprovalNo = Expirance::ApprovalNoDefault;
			$this->dttApprovalFromDate = (Expirance::ApprovalFromDateDefault === null)?null:new QDateTime(Expirance::ApprovalFromDateDefault);
			$this->dttApprovalToDate = (Expirance::ApprovalToDateDefault === null)?null:new QDateTime(Expirance::ApprovalToDateDefault);
			$this->intExperianceAt = Expirance::ExperianceAtDefault;
			$this->strTotalExperiance = Expirance::TotalExperianceDefault;
			$this->blnThisCollege = Expirance::ThisCollegeDefault;
			$this->intDesignation = Expirance::DesignationDefault;
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
		 * Load a Expirance from PK Info
		 * @param integer $intIdexpirance
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance
		 */
		public static function Load($intIdexpirance, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Expirance', $intIdexpirance);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Expirance::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Expirance()->Idexpirance, $intIdexpirance)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Expirances
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Expirance::QueryArray to perform the LoadAll query
			try {
				return Expirance::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Expirances
		 * @return int
		 */
		public static function CountAll() {
			// Call Expirance::QueryCount to perform the CountAll query
			return Expirance::QueryCount(QQ::All());
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
			$objDatabase = Expirance::GetDatabase();

			// Create/Build out the QueryBuilder object with Expirance-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'expirance');

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
				Expirance::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('expirance');

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
		 * Static Qcubed Query method to query for a single Expirance object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Expirance the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Expirance::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Expirance object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Expirance::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Expirance::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Expirance objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Expirance[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Expirance::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Expirance::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Expirance::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Expirance objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Expirance::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Expirance::GetDatabase();

			$strQuery = Expirance::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/expirance', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Expirance::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Expirance
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'expirance';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idexpirance', $strAliasPrefix . 'idexpirance');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idexpirance', $strAliasPrefix . 'idexpirance');
			    $objBuilder->AddSelectItem($strTableName, 'member', $strAliasPrefix . 'member');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'company', $strAliasPrefix . 'company');
			    $objBuilder->AddSelectItem($strTableName, 'department', $strAliasPrefix . 'department');
			    $objBuilder->AddSelectItem($strTableName, 'post', $strAliasPrefix . 'post');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
			    $objBuilder->AddSelectItem($strTableName, 'approval_no', $strAliasPrefix . 'approval_no');
			    $objBuilder->AddSelectItem($strTableName, 'approval_from_date', $strAliasPrefix . 'approval_from_date');
			    $objBuilder->AddSelectItem($strTableName, 'approval_to_date', $strAliasPrefix . 'approval_to_date');
			    $objBuilder->AddSelectItem($strTableName, 'experiance_at', $strAliasPrefix . 'experiance_at');
			    $objBuilder->AddSelectItem($strTableName, 'total_experiance', $strAliasPrefix . 'total_experiance');
			    $objBuilder->AddSelectItem($strTableName, 'this_college', $strAliasPrefix . 'this_college');
			    $objBuilder->AddSelectItem($strTableName, 'designation', $strAliasPrefix . 'designation');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Expirance from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Expirance::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Expirance
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Expirance object
			$objToReturn = new Expirance();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idexpirance';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdexpirance = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFrom = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttTo = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'company';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCompany = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDepartment = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'post';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPost = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'approval_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strApprovalNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'approval_from_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttApprovalFromDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'approval_to_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttApprovalToDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'experiance_at';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intExperianceAt = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'total_experiance';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTotalExperiance = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'this_college';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnThisCollege = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDesignation = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idexpirance != $objPreviousItem->Idexpirance) {
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
				$strAliasPrefix = 'expirance__';

			// Check for MemberObject Early Binding
			$strAlias = $strAliasPrefix . 'member__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMemberObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DesignationObject Early Binding
			$strAlias = $strAliasPrefix . 'designation__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDesignationObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'designation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Expirances from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Expirance[]
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
					$objItem = Expirance::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Expirance::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Expirance object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Expirance next row resulting from the query
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
			return Expirance::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Expirance object,
		 * by Idexpirance Index(es)
		 * @param integer $intIdexpirance
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance
		*/
		public static function LoadByIdexpirance($intIdexpirance, $objOptionalClauses = null) {
			return Expirance::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Expirance()->Idexpirance, $intIdexpirance)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Expirance objects,
		 * by Member Index(es)
		 * @param integer $intMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance[]
		*/
		public static function LoadArrayByMember($intMember, $objOptionalClauses = null) {
			// Call Expirance::QueryArray to perform the LoadArrayByMember query
			try {
				return Expirance::QueryArray(
					QQ::Equal(QQN::Expirance()->Member, $intMember),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Expirances
		 * by Member Index(es)
		 * @param integer $intMember
		 * @return int
		*/
		public static function CountByMember($intMember) {
			// Call Expirance::QueryCount to perform the CountByMember query
			return Expirance::QueryCount(
				QQ::Equal(QQN::Expirance()->Member, $intMember)
			);
		}

		/**
		 * Load an array of Expirance objects,
		 * by Designation Index(es)
		 * @param integer $intDesignation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Expirance[]
		*/
		public static function LoadArrayByDesignation($intDesignation, $objOptionalClauses = null) {
			// Call Expirance::QueryArray to perform the LoadArrayByDesignation query
			try {
				return Expirance::QueryArray(
					QQ::Equal(QQN::Expirance()->Designation, $intDesignation),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Expirances
		 * by Designation Index(es)
		 * @param integer $intDesignation
		 * @return int
		*/
		public static function CountByDesignation($intDesignation) {
			// Call Expirance::QueryCount to perform the CountByDesignation query
			return Expirance::QueryCount(
				QQ::Equal(QQN::Expirance()->Designation, $intDesignation)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Expirance
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Expirance::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `expirance` (
							`member`,
							`from`,
							`to`,
							`company`,
							`department`,
							`post`,
							`note`,
							`approval_no`,
							`approval_from_date`,
							`approval_to_date`,
							`experiance_at`,
							`total_experiance`,
							`this_college`,
							`designation`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intMember) . ',
							' . $objDatabase->SqlVariable($this->dttFrom) . ',
							' . $objDatabase->SqlVariable($this->dttTo) . ',
							' . $objDatabase->SqlVariable($this->strCompany) . ',
							' . $objDatabase->SqlVariable($this->strDepartment) . ',
							' . $objDatabase->SqlVariable($this->strPost) . ',
							' . $objDatabase->SqlVariable($this->strNote) . ',
							' . $objDatabase->SqlVariable($this->strApprovalNo) . ',
							' . $objDatabase->SqlVariable($this->dttApprovalFromDate) . ',
							' . $objDatabase->SqlVariable($this->dttApprovalToDate) . ',
							' . $objDatabase->SqlVariable($this->intExperianceAt) . ',
							' . $objDatabase->SqlVariable($this->strTotalExperiance) . ',
							' . $objDatabase->SqlVariable($this->blnThisCollege) . ',
							' . $objDatabase->SqlVariable($this->intDesignation) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdexpirance = $objDatabase->InsertId('expirance', 'idexpirance');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`expirance`
						SET
							`member` = ' . $objDatabase->SqlVariable($this->intMember) . ',
							`from` = ' . $objDatabase->SqlVariable($this->dttFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->dttTo) . ',
							`company` = ' . $objDatabase->SqlVariable($this->strCompany) . ',
							`department` = ' . $objDatabase->SqlVariable($this->strDepartment) . ',
							`post` = ' . $objDatabase->SqlVariable($this->strPost) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . ',
							`approval_no` = ' . $objDatabase->SqlVariable($this->strApprovalNo) . ',
							`approval_from_date` = ' . $objDatabase->SqlVariable($this->dttApprovalFromDate) . ',
							`approval_to_date` = ' . $objDatabase->SqlVariable($this->dttApprovalToDate) . ',
							`experiance_at` = ' . $objDatabase->SqlVariable($this->intExperianceAt) . ',
							`total_experiance` = ' . $objDatabase->SqlVariable($this->strTotalExperiance) . ',
							`this_college` = ' . $objDatabase->SqlVariable($this->blnThisCollege) . ',
							`designation` = ' . $objDatabase->SqlVariable($this->intDesignation) . '
						WHERE
							`idexpirance` = ' . $objDatabase->SqlVariable($this->intIdexpirance) . '
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
		 * Delete this Expirance
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdexpirance)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Expirance with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Expirance::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`expirance`
				WHERE
					`idexpirance` = ' . $objDatabase->SqlVariable($this->intIdexpirance) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Expirance ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Expirance', $this->intIdexpirance);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Expirances
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Expirance::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`expirance`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate expirance table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Expirance::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `expirance`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Expirance from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Expirance object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Expirance::Load($this->intIdexpirance);

			// Update $this's local variables to match
			$this->Member = $objReloaded->Member;
			$this->dttFrom = $objReloaded->dttFrom;
			$this->dttTo = $objReloaded->dttTo;
			$this->strCompany = $objReloaded->strCompany;
			$this->strDepartment = $objReloaded->strDepartment;
			$this->strPost = $objReloaded->strPost;
			$this->strNote = $objReloaded->strNote;
			$this->strApprovalNo = $objReloaded->strApprovalNo;
			$this->dttApprovalFromDate = $objReloaded->dttApprovalFromDate;
			$this->dttApprovalToDate = $objReloaded->dttApprovalToDate;
			$this->intExperianceAt = $objReloaded->intExperianceAt;
			$this->strTotalExperiance = $objReloaded->strTotalExperiance;
			$this->blnThisCollege = $objReloaded->blnThisCollege;
			$this->Designation = $objReloaded->Designation;
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
				case 'Idexpirance':
					/**
					 * Gets the value for intIdexpirance (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdexpirance;

				case 'Member':
					/**
					 * Gets the value for intMember 
					 * @return integer
					 */
					return $this->intMember;

				case 'From':
					/**
					 * Gets the value for dttFrom 
					 * @return QDateTime
					 */
					return $this->dttFrom;

				case 'To':
					/**
					 * Gets the value for dttTo 
					 * @return QDateTime
					 */
					return $this->dttTo;

				case 'Company':
					/**
					 * Gets the value for strCompany 
					 * @return string
					 */
					return $this->strCompany;

				case 'Department':
					/**
					 * Gets the value for strDepartment 
					 * @return string
					 */
					return $this->strDepartment;

				case 'Post':
					/**
					 * Gets the value for strPost 
					 * @return string
					 */
					return $this->strPost;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;

				case 'ApprovalNo':
					/**
					 * Gets the value for strApprovalNo 
					 * @return string
					 */
					return $this->strApprovalNo;

				case 'ApprovalFromDate':
					/**
					 * Gets the value for dttApprovalFromDate 
					 * @return QDateTime
					 */
					return $this->dttApprovalFromDate;

				case 'ApprovalToDate':
					/**
					 * Gets the value for dttApprovalToDate 
					 * @return QDateTime
					 */
					return $this->dttApprovalToDate;

				case 'ExperianceAt':
					/**
					 * Gets the value for intExperianceAt 
					 * @return integer
					 */
					return $this->intExperianceAt;

				case 'TotalExperiance':
					/**
					 * Gets the value for strTotalExperiance 
					 * @return string
					 */
					return $this->strTotalExperiance;

				case 'ThisCollege':
					/**
					 * Gets the value for blnThisCollege 
					 * @return boolean
					 */
					return $this->blnThisCollege;

				case 'Designation':
					/**
					 * Gets the value for intDesignation 
					 * @return integer
					 */
					return $this->intDesignation;


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Gets the value for the Ledger object referenced by intMember 
					 * @return Ledger
					 */
					try {
						if ((!$this->objMemberObject) && (!is_null($this->intMember)))
							$this->objMemberObject = Ledger::Load($this->intMember);
						return $this->objMemberObject;
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
				case 'Member':
					/**
					 * Sets the value for intMember 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMemberObject = null;
						return ($this->intMember = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'From':
					/**
					 * Sets the value for dttFrom 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFrom = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'To':
					/**
					 * Sets the value for dttTo 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTo = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Company':
					/**
					 * Sets the value for strCompany 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCompany = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Department':
					/**
					 * Sets the value for strDepartment 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDepartment = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Post':
					/**
					 * Sets the value for strPost 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPost = QType::Cast($mixValue, QType::String));
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

				case 'ApprovalNo':
					/**
					 * Sets the value for strApprovalNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strApprovalNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovalFromDate':
					/**
					 * Sets the value for dttApprovalFromDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttApprovalFromDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ApprovalToDate':
					/**
					 * Sets the value for dttApprovalToDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttApprovalToDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExperianceAt':
					/**
					 * Sets the value for intExperianceAt 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intExperianceAt = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TotalExperiance':
					/**
					 * Sets the value for strTotalExperiance 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTotalExperiance = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ThisCollege':
					/**
					 * Sets the value for blnThisCollege 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnThisCollege = QType::Cast($mixValue, QType::Boolean));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Sets the value for the Ledger object referenced by intMember 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intMember = null;
						$this->objMemberObject = null;
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
							throw new QCallerException('Unable to set an unsaved MemberObject for this Expirance');

						// Update Local Member Variables
						$this->objMemberObject = $mixValue;
						$this->intMember = $mixValue->Idledger;

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
							throw new QCallerException('Unable to set an unsaved DesignationObject for this Expirance');

						// Update Local Member Variables
						$this->objDesignationObject = $mixValue;
						$this->intDesignation = $mixValue->Idrole;

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
			return "expirance";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Expirance::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Expirance"><sequence>';
			$strToReturn .= '<element name="Idexpirance" type="xsd:int"/>';
			$strToReturn .= '<element name="MemberObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="From" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="To" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Company" type="xsd:string"/>';
			$strToReturn .= '<element name="Department" type="xsd:string"/>';
			$strToReturn .= '<element name="Post" type="xsd:string"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="ApprovalNo" type="xsd:string"/>';
			$strToReturn .= '<element name="ApprovalFromDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ApprovalToDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ExperianceAt" type="xsd:int"/>';
			$strToReturn .= '<element name="TotalExperiance" type="xsd:string"/>';
			$strToReturn .= '<element name="ThisCollege" type="xsd:boolean"/>';
			$strToReturn .= '<element name="DesignationObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Expirance', $strComplexTypeArray)) {
				$strComplexTypeArray['Expirance'] = Expirance::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Expirance::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Expirance();
			if (property_exists($objSoapObject, 'Idexpirance'))
				$objToReturn->intIdexpirance = $objSoapObject->Idexpirance;
			if ((property_exists($objSoapObject, 'MemberObject')) &&
				($objSoapObject->MemberObject))
				$objToReturn->MemberObject = Ledger::GetObjectFromSoapObject($objSoapObject->MemberObject);
			if (property_exists($objSoapObject, 'From'))
				$objToReturn->dttFrom = new QDateTime($objSoapObject->From);
			if (property_exists($objSoapObject, 'To'))
				$objToReturn->dttTo = new QDateTime($objSoapObject->To);
			if (property_exists($objSoapObject, 'Company'))
				$objToReturn->strCompany = $objSoapObject->Company;
			if (property_exists($objSoapObject, 'Department'))
				$objToReturn->strDepartment = $objSoapObject->Department;
			if (property_exists($objSoapObject, 'Post'))
				$objToReturn->strPost = $objSoapObject->Post;
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if (property_exists($objSoapObject, 'ApprovalNo'))
				$objToReturn->strApprovalNo = $objSoapObject->ApprovalNo;
			if (property_exists($objSoapObject, 'ApprovalFromDate'))
				$objToReturn->dttApprovalFromDate = new QDateTime($objSoapObject->ApprovalFromDate);
			if (property_exists($objSoapObject, 'ApprovalToDate'))
				$objToReturn->dttApprovalToDate = new QDateTime($objSoapObject->ApprovalToDate);
			if (property_exists($objSoapObject, 'ExperianceAt'))
				$objToReturn->intExperianceAt = $objSoapObject->ExperianceAt;
			if (property_exists($objSoapObject, 'TotalExperiance'))
				$objToReturn->strTotalExperiance = $objSoapObject->TotalExperiance;
			if (property_exists($objSoapObject, 'ThisCollege'))
				$objToReturn->blnThisCollege = $objSoapObject->ThisCollege;
			if ((property_exists($objSoapObject, 'DesignationObject')) &&
				($objSoapObject->DesignationObject))
				$objToReturn->DesignationObject = Role::GetObjectFromSoapObject($objSoapObject->DesignationObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Expirance::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objMemberObject)
				$objObject->objMemberObject = Ledger::GetSoapObjectFromObject($objObject->objMemberObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMember = null;
			if ($objObject->dttFrom)
				$objObject->dttFrom = $objObject->dttFrom->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTo)
				$objObject->dttTo = $objObject->dttTo->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttApprovalFromDate)
				$objObject->dttApprovalFromDate = $objObject->dttApprovalFromDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttApprovalToDate)
				$objObject->dttApprovalToDate = $objObject->dttApprovalToDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objDesignationObject)
				$objObject->objDesignationObject = Role::GetSoapObjectFromObject($objObject->objDesignationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDesignation = null;
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
			$iArray['Idexpirance'] = $this->intIdexpirance;
			$iArray['Member'] = $this->intMember;
			$iArray['From'] = $this->dttFrom;
			$iArray['To'] = $this->dttTo;
			$iArray['Company'] = $this->strCompany;
			$iArray['Department'] = $this->strDepartment;
			$iArray['Post'] = $this->strPost;
			$iArray['Note'] = $this->strNote;
			$iArray['ApprovalNo'] = $this->strApprovalNo;
			$iArray['ApprovalFromDate'] = $this->dttApprovalFromDate;
			$iArray['ApprovalToDate'] = $this->dttApprovalToDate;
			$iArray['ExperianceAt'] = $this->intExperianceAt;
			$iArray['TotalExperiance'] = $this->strTotalExperiance;
			$iArray['ThisCollege'] = $this->blnThisCollege;
			$iArray['Designation'] = $this->intDesignation;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdexpirance ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idexpirance
     * @property-read QQNode $Member
     * @property-read QQNodeLedger $MemberObject
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Company
     * @property-read QQNode $Department
     * @property-read QQNode $Post
     * @property-read QQNode $Note
     * @property-read QQNode $ApprovalNo
     * @property-read QQNode $ApprovalFromDate
     * @property-read QQNode $ApprovalToDate
     * @property-read QQNode $ExperianceAt
     * @property-read QQNode $TotalExperiance
     * @property-read QQNode $ThisCollege
     * @property-read QQNode $Designation
     * @property-read QQNodeRole $DesignationObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeExpirance extends QQNode {
		protected $strTableName = 'expirance';
		protected $strPrimaryKey = 'idexpirance';
		protected $strClassName = 'Expirance';
		public function __get($strName) {
			switch ($strName) {
				case 'Idexpirance':
					return new QQNode('idexpirance', 'Idexpirance', 'Integer', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'Integer', $this);
				case 'MemberObject':
					return new QQNodeLedger('member', 'MemberObject', 'Integer', $this);
				case 'From':
					return new QQNode('from', 'From', 'Date', $this);
				case 'To':
					return new QQNode('to', 'To', 'Date', $this);
				case 'Company':
					return new QQNode('company', 'Company', 'VarChar', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'VarChar', $this);
				case 'Post':
					return new QQNode('post', 'Post', 'VarChar', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);
				case 'ApprovalNo':
					return new QQNode('approval_no', 'ApprovalNo', 'VarChar', $this);
				case 'ApprovalFromDate':
					return new QQNode('approval_from_date', 'ApprovalFromDate', 'Date', $this);
				case 'ApprovalToDate':
					return new QQNode('approval_to_date', 'ApprovalToDate', 'Date', $this);
				case 'ExperianceAt':
					return new QQNode('experiance_at', 'ExperianceAt', 'Integer', $this);
				case 'TotalExperiance':
					return new QQNode('total_experiance', 'TotalExperiance', 'VarChar', $this);
				case 'ThisCollege':
					return new QQNode('this_college', 'ThisCollege', 'Bit', $this);
				case 'Designation':
					return new QQNode('designation', 'Designation', 'Integer', $this);
				case 'DesignationObject':
					return new QQNodeRole('designation', 'DesignationObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idexpirance', 'Idexpirance', 'Integer', $this);
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
     * @property-read QQNode $Idexpirance
     * @property-read QQNode $Member
     * @property-read QQNodeLedger $MemberObject
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Company
     * @property-read QQNode $Department
     * @property-read QQNode $Post
     * @property-read QQNode $Note
     * @property-read QQNode $ApprovalNo
     * @property-read QQNode $ApprovalFromDate
     * @property-read QQNode $ApprovalToDate
     * @property-read QQNode $ExperianceAt
     * @property-read QQNode $TotalExperiance
     * @property-read QQNode $ThisCollege
     * @property-read QQNode $Designation
     * @property-read QQNodeRole $DesignationObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeExpirance extends QQReverseReferenceNode {
		protected $strTableName = 'expirance';
		protected $strPrimaryKey = 'idexpirance';
		protected $strClassName = 'Expirance';
		public function __get($strName) {
			switch ($strName) {
				case 'Idexpirance':
					return new QQNode('idexpirance', 'Idexpirance', 'integer', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'integer', $this);
				case 'MemberObject':
					return new QQNodeLedger('member', 'MemberObject', 'integer', $this);
				case 'From':
					return new QQNode('from', 'From', 'QDateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'QDateTime', $this);
				case 'Company':
					return new QQNode('company', 'Company', 'string', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'string', $this);
				case 'Post':
					return new QQNode('post', 'Post', 'string', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'ApprovalNo':
					return new QQNode('approval_no', 'ApprovalNo', 'string', $this);
				case 'ApprovalFromDate':
					return new QQNode('approval_from_date', 'ApprovalFromDate', 'QDateTime', $this);
				case 'ApprovalToDate':
					return new QQNode('approval_to_date', 'ApprovalToDate', 'QDateTime', $this);
				case 'ExperianceAt':
					return new QQNode('experiance_at', 'ExperianceAt', 'integer', $this);
				case 'TotalExperiance':
					return new QQNode('total_experiance', 'TotalExperiance', 'string', $this);
				case 'ThisCollege':
					return new QQNode('this_college', 'ThisCollege', 'boolean', $this);
				case 'Designation':
					return new QQNode('designation', 'Designation', 'integer', $this);
				case 'DesignationObject':
					return new QQNodeRole('designation', 'DesignationObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idexpirance', 'Idexpirance', 'integer', $this);
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
