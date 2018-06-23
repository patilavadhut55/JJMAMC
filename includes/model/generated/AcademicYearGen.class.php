<?php
	/**
	 * The abstract AcademicYearGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AcademicYear subclass which
	 * extends this AcademicYearGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AcademicYear class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdacademicYear the value for intIdacademicYear (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $Description the value for strDescription 
	 * @property integer $Parrent the value for intParrent 
	 * @property AcademicYear $ParrentObject the value for the AcademicYear object referenced by intParrent 
	 * @property-read AcademicYear $_AcademicYearAsParrent the value for the private _objAcademicYearAsParrent (Read-Only) if set due to an expansion on the academic_year.parrent reverse relationship
	 * @property-read AcademicYear[] $_AcademicYearAsParrentArray the value for the private _objAcademicYearAsParrentArray (Read-Only) if set due to an ExpandAsArray on the academic_year.parrent reverse relationship
	 * @property-read Application $_ApplicationAsSemister the value for the private _objApplicationAsSemister (Read-Only) if set due to an expansion on the application.semister reverse relationship
	 * @property-read Application[] $_ApplicationAsSemisterArray the value for the private _objApplicationAsSemisterArray (Read-Only) if set due to an ExpandAsArray on the application.semister reverse relationship
	 * @property-read CurrentStatus $_CurrentStatusAsSemister the value for the private _objCurrentStatusAsSemister (Read-Only) if set due to an expansion on the current_status.semister reverse relationship
	 * @property-read CurrentStatus[] $_CurrentStatusAsSemisterArray the value for the private _objCurrentStatusAsSemisterArray (Read-Only) if set due to an ExpandAsArray on the current_status.semister reverse relationship
	 * @property-read Fees $_Fees the value for the private _objFees (Read-Only) if set due to an expansion on the fees.academic_year reverse relationship
	 * @property-read Fees[] $_FeesArray the value for the private _objFeesArray (Read-Only) if set due to an ExpandAsArray on the fees.academic_year reverse relationship
	 * @property-read LoginHasRole $_LoginHasRoleAsSemister the value for the private _objLoginHasRoleAsSemister (Read-Only) if set due to an expansion on the login_has_role.semister reverse relationship
	 * @property-read LoginHasRole[] $_LoginHasRoleAsSemisterArray the value for the private _objLoginHasRoleAsSemisterArray (Read-Only) if set due to an ExpandAsArray on the login_has_role.semister reverse relationship
	 * @property-read Profile $_ProfileAsYear the value for the private _objProfileAsYear (Read-Only) if set due to an expansion on the profile.year reverse relationship
	 * @property-read Profile[] $_ProfileAsYearArray the value for the private _objProfileAsYearArray (Read-Only) if set due to an ExpandAsArray on the profile.year reverse relationship
	 * @property-read Voucher $_Voucher the value for the private _objVoucher (Read-Only) if set due to an expansion on the voucher.academic_year reverse relationship
	 * @property-read Voucher[] $_VoucherArray the value for the private _objVoucherArray (Read-Only) if set due to an ExpandAsArray on the voucher.academic_year reverse relationship
	 * @property-read YearSubject $_YearSubjectAsSemester the value for the private _objYearSubjectAsSemester (Read-Only) if set due to an expansion on the year_subject.semester reverse relationship
	 * @property-read YearSubject[] $_YearSubjectAsSemesterArray the value for the private _objYearSubjectAsSemesterArray (Read-Only) if set due to an ExpandAsArray on the year_subject.semester reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AcademicYearGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column academic_year.idacademic_year
		 * @var integer intIdacademicYear
		 */
		protected $intIdacademicYear;
		const IdacademicYearDefault = null;


		/**
		 * Protected member variable that maps to the database column academic_year.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column academic_year.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column academic_year.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Private member variable that stores a reference to a single AcademicYearAsParrent object
		 * (of type AcademicYear), if this AcademicYear object was restored with
		 * an expansion on the academic_year association table.
		 * @var AcademicYear _objAcademicYearAsParrent;
		 */
		private $_objAcademicYearAsParrent;

		/**
		 * Private member variable that stores a reference to an array of AcademicYearAsParrent objects
		 * (of type AcademicYear[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the academic_year association table.
		 * @var AcademicYear[] _objAcademicYearAsParrentArray;
		 */
		private $_objAcademicYearAsParrentArray = null;

		/**
		 * Private member variable that stores a reference to a single ApplicationAsSemister object
		 * (of type Application), if this AcademicYear object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsSemister;
		 */
		private $_objApplicationAsSemister;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsSemister objects
		 * (of type Application[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsSemisterArray;
		 */
		private $_objApplicationAsSemisterArray = null;

		/**
		 * Private member variable that stores a reference to a single CurrentStatusAsSemister object
		 * (of type CurrentStatus), if this AcademicYear object was restored with
		 * an expansion on the current_status association table.
		 * @var CurrentStatus _objCurrentStatusAsSemister;
		 */
		private $_objCurrentStatusAsSemister;

		/**
		 * Private member variable that stores a reference to an array of CurrentStatusAsSemister objects
		 * (of type CurrentStatus[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the current_status association table.
		 * @var CurrentStatus[] _objCurrentStatusAsSemisterArray;
		 */
		private $_objCurrentStatusAsSemisterArray = null;

		/**
		 * Private member variable that stores a reference to a single Fees object
		 * (of type Fees), if this AcademicYear object was restored with
		 * an expansion on the fees association table.
		 * @var Fees _objFees;
		 */
		private $_objFees;

		/**
		 * Private member variable that stores a reference to an array of Fees objects
		 * (of type Fees[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the fees association table.
		 * @var Fees[] _objFeesArray;
		 */
		private $_objFeesArray = null;

		/**
		 * Private member variable that stores a reference to a single LoginHasRoleAsSemister object
		 * (of type LoginHasRole), if this AcademicYear object was restored with
		 * an expansion on the login_has_role association table.
		 * @var LoginHasRole _objLoginHasRoleAsSemister;
		 */
		private $_objLoginHasRoleAsSemister;

		/**
		 * Private member variable that stores a reference to an array of LoginHasRoleAsSemister objects
		 * (of type LoginHasRole[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the login_has_role association table.
		 * @var LoginHasRole[] _objLoginHasRoleAsSemisterArray;
		 */
		private $_objLoginHasRoleAsSemisterArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsYear object
		 * (of type Profile), if this AcademicYear object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsYear;
		 */
		private $_objProfileAsYear;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsYear objects
		 * (of type Profile[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsYearArray;
		 */
		private $_objProfileAsYearArray = null;

		/**
		 * Private member variable that stores a reference to a single Voucher object
		 * (of type Voucher), if this AcademicYear object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucher;
		 */
		private $_objVoucher;

		/**
		 * Private member variable that stores a reference to an array of Voucher objects
		 * (of type Voucher[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherArray;
		 */
		private $_objVoucherArray = null;

		/**
		 * Private member variable that stores a reference to a single YearSubjectAsSemester object
		 * (of type YearSubject), if this AcademicYear object was restored with
		 * an expansion on the year_subject association table.
		 * @var YearSubject _objYearSubjectAsSemester;
		 */
		private $_objYearSubjectAsSemester;

		/**
		 * Private member variable that stores a reference to an array of YearSubjectAsSemester objects
		 * (of type YearSubject[]), if this AcademicYear object was restored with
		 * an ExpandAsArray on the year_subject association table.
		 * @var YearSubject[] _objYearSubjectAsSemesterArray;
		 */
		private $_objYearSubjectAsSemesterArray = null;

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
		 * in the database column academic_year.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objParrentObject
		 */
		protected $objParrentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdacademicYear = AcademicYear::IdacademicYearDefault;
			$this->strName = AcademicYear::NameDefault;
			$this->strDescription = AcademicYear::DescriptionDefault;
			$this->intParrent = AcademicYear::ParrentDefault;
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
		 * Load a AcademicYear from PK Info
		 * @param integer $intIdacademicYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AcademicYear
		 */
		public static function Load($intIdacademicYear, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AcademicYear', $intIdacademicYear);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AcademicYear::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AcademicYear()->IdacademicYear, $intIdacademicYear)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AcademicYears
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AcademicYear[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AcademicYear::QueryArray to perform the LoadAll query
			try {
				return AcademicYear::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AcademicYears
		 * @return int
		 */
		public static function CountAll() {
			// Call AcademicYear::QueryCount to perform the CountAll query
			return AcademicYear::QueryCount(QQ::All());
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
			$objDatabase = AcademicYear::GetDatabase();

			// Create/Build out the QueryBuilder object with AcademicYear-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'academic_year');

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
				AcademicYear::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('academic_year');

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
		 * Static Qcubed Query method to query for a single AcademicYear object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AcademicYear the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AcademicYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AcademicYear object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AcademicYear::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AcademicYear::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AcademicYear objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AcademicYear[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AcademicYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AcademicYear::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AcademicYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AcademicYear objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AcademicYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AcademicYear::GetDatabase();

			$strQuery = AcademicYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/academicyear', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AcademicYear::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AcademicYear
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'academic_year';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idacademic_year', $strAliasPrefix . 'idacademic_year');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idacademic_year', $strAliasPrefix . 'idacademic_year');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AcademicYear from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AcademicYear::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AcademicYear
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdacademicYear == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'academic_year__';


						// Expanding reverse references: AcademicYearAsParrent
						$strAlias = $strAliasPrefix . 'academicyearasparrent__idacademic_year';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAcademicYearAsParrentArray)
								$objPreviousItem->_objAcademicYearAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAcademicYearAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAcademicYearAsParrentArray;
								$objChildItem = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academicyearasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAcademicYearAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAcademicYearAsParrentArray[] = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academicyearasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ApplicationAsSemister
						$strAlias = $strAliasPrefix . 'applicationassemister__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsSemisterArray)
								$objPreviousItem->_objApplicationAsSemisterArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsSemisterArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsSemisterArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassemister__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsSemisterArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsSemisterArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CurrentStatusAsSemister
						$strAlias = $strAliasPrefix . 'currentstatusassemister__idcurrent_status';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCurrentStatusAsSemisterArray)
								$objPreviousItem->_objCurrentStatusAsSemisterArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCurrentStatusAsSemisterArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCurrentStatusAsSemisterArray;
								$objChildItem = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusassemister__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCurrentStatusAsSemisterArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCurrentStatusAsSemisterArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Fees
						$strAlias = $strAliasPrefix . 'fees__idfees_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objFeesArray)
								$objPreviousItem->_objFeesArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFeesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFeesArray;
								$objChildItem = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFeesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFeesArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LoginHasRoleAsSemister
						$strAlias = $strAliasPrefix . 'loginhasroleassemister__login_idlogin';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLoginHasRoleAsSemisterArray)
								$objPreviousItem->_objLoginHasRoleAsSemisterArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLoginHasRoleAsSemisterArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLoginHasRoleAsSemisterArray;
								$objChildItem = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleassemister__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLoginHasRoleAsSemisterArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLoginHasRoleAsSemisterArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsYear
						$strAlias = $strAliasPrefix . 'profileasyear__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsYearArray)
								$objPreviousItem->_objProfileAsYearArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsYearArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsYearArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasyear__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsYearArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsYearArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasyear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Voucher
						$strAlias = $strAliasPrefix . 'voucher__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherArray)
								$objPreviousItem->_objVoucherArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: YearSubjectAsSemester
						$strAlias = $strAliasPrefix . 'yearsubjectassemester__idyear_subject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objYearSubjectAsSemesterArray)
								$objPreviousItem->_objYearSubjectAsSemesterArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objYearSubjectAsSemesterArray)) {
								$objPreviousChildItems = $objPreviousItem->_objYearSubjectAsSemesterArray;
								$objChildItem = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectassemester__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objYearSubjectAsSemesterArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objYearSubjectAsSemesterArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectassemester__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'academic_year__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AcademicYear object
			$objToReturn = new AcademicYear();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdacademicYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdacademicYear != $objPreviousItem->IdacademicYear) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAcademicYearAsParrentArray);
					$cnt = count($objToReturn->_objAcademicYearAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAcademicYearAsParrentArray, $objToReturn->_objAcademicYearAsParrentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApplicationAsSemisterArray);
					$cnt = count($objToReturn->_objApplicationAsSemisterArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsSemisterArray, $objToReturn->_objApplicationAsSemisterArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCurrentStatusAsSemisterArray);
					$cnt = count($objToReturn->_objCurrentStatusAsSemisterArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCurrentStatusAsSemisterArray, $objToReturn->_objCurrentStatusAsSemisterArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objFeesArray);
					$cnt = count($objToReturn->_objFeesArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objFeesArray, $objToReturn->_objFeesArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLoginHasRoleAsSemisterArray);
					$cnt = count($objToReturn->_objLoginHasRoleAsSemisterArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLoginHasRoleAsSemisterArray, $objToReturn->_objLoginHasRoleAsSemisterArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsYearArray);
					$cnt = count($objToReturn->_objProfileAsYearArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsYearArray, $objToReturn->_objProfileAsYearArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherArray);
					$cnt = count($objToReturn->_objVoucherArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherArray, $objToReturn->_objVoucherArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objYearSubjectAsSemesterArray);
					$cnt = count($objToReturn->_objYearSubjectAsSemesterArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objYearSubjectAsSemesterArray, $objToReturn->_objYearSubjectAsSemesterArray)) {
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
				$strAliasPrefix = 'academic_year__';

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for AcademicYearAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'academicyearasparrent__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAcademicYearAsParrentArray)
				$objToReturn->_objAcademicYearAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAcademicYearAsParrentArray[] = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academicyearasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAcademicYearAsParrent = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academicyearasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ApplicationAsSemister Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationassemister__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsSemisterArray)
				$objToReturn->_objApplicationAsSemisterArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsSemisterArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsSemister = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CurrentStatusAsSemister Virtual Binding
			$strAlias = $strAliasPrefix . 'currentstatusassemister__idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCurrentStatusAsSemisterArray)
				$objToReturn->_objCurrentStatusAsSemisterArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCurrentStatusAsSemisterArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCurrentStatusAsSemister = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatusassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Fees Virtual Binding
			$strAlias = $strAliasPrefix . 'fees__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objFeesArray)
				$objToReturn->_objFeesArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objFeesArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFees = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LoginHasRoleAsSemister Virtual Binding
			$strAlias = $strAliasPrefix . 'loginhasroleassemister__login_idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLoginHasRoleAsSemisterArray)
				$objToReturn->_objLoginHasRoleAsSemisterArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLoginHasRoleAsSemisterArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLoginHasRoleAsSemister = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasroleassemister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsYear Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasyear__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsYearArray)
				$objToReturn->_objProfileAsYearArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsYearArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasyear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsYear = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasyear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Voucher Virtual Binding
			$strAlias = $strAliasPrefix . 'voucher__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherArray)
				$objToReturn->_objVoucherArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucher = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for YearSubjectAsSemester Virtual Binding
			$strAlias = $strAliasPrefix . 'yearsubjectassemester__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objYearSubjectAsSemesterArray)
				$objToReturn->_objYearSubjectAsSemesterArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objYearSubjectAsSemesterArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectassemester__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objYearSubjectAsSemester = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectassemester__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AcademicYears from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AcademicYear[]
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
					$objItem = AcademicYear::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AcademicYear::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AcademicYear object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AcademicYear next row resulting from the query
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
			return AcademicYear::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AcademicYear object,
		 * by IdacademicYear Index(es)
		 * @param integer $intIdacademicYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AcademicYear
		*/
		public static function LoadByIdacademicYear($intIdacademicYear, $objOptionalClauses = null) {
			return AcademicYear::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AcademicYear()->IdacademicYear, $intIdacademicYear)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single AcademicYear object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AcademicYear
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return AcademicYear::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AcademicYear()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of AcademicYear objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AcademicYear[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call AcademicYear::QueryArray to perform the LoadArrayByParrent query
			try {
				return AcademicYear::QueryArray(
					QQ::Equal(QQN::AcademicYear()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AcademicYears
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call AcademicYear::QueryCount to perform the CountByParrent query
			return AcademicYear::QueryCount(
				QQ::Equal(QQN::AcademicYear()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this AcademicYear
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `academic_year` (
							`name`,
							`description`,
							`parrent`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdacademicYear = $objDatabase->InsertId('academic_year', 'idacademic_year');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`academic_year`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . '
						WHERE
							`idacademic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
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
		 * Delete this AcademicYear
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AcademicYear with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`academic_year`
				WHERE
					`idacademic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AcademicYear ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AcademicYear', $this->intIdacademicYear);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AcademicYears
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`academic_year`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate academic_year table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `academic_year`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AcademicYear from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AcademicYear object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AcademicYear::Load($this->intIdacademicYear);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
			$this->Parrent = $objReloaded->Parrent;
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
				case 'IdacademicYear':
					/**
					 * Gets the value for intIdacademicYear (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdacademicYear;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intParrent 
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = AcademicYear::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AcademicYearAsParrent':
					/**
					 * Gets the value for the private _objAcademicYearAsParrent (Read-Only)
					 * if set due to an expansion on the academic_year.parrent reverse relationship
					 * @return AcademicYear
					 */
					return $this->_objAcademicYearAsParrent;

				case '_AcademicYearAsParrentArray':
					/**
					 * Gets the value for the private _objAcademicYearAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the academic_year.parrent reverse relationship
					 * @return AcademicYear[]
					 */
					return $this->_objAcademicYearAsParrentArray;

				case '_ApplicationAsSemister':
					/**
					 * Gets the value for the private _objApplicationAsSemister (Read-Only)
					 * if set due to an expansion on the application.semister reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsSemister;

				case '_ApplicationAsSemisterArray':
					/**
					 * Gets the value for the private _objApplicationAsSemisterArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.semister reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsSemisterArray;

				case '_CurrentStatusAsSemister':
					/**
					 * Gets the value for the private _objCurrentStatusAsSemister (Read-Only)
					 * if set due to an expansion on the current_status.semister reverse relationship
					 * @return CurrentStatus
					 */
					return $this->_objCurrentStatusAsSemister;

				case '_CurrentStatusAsSemisterArray':
					/**
					 * Gets the value for the private _objCurrentStatusAsSemisterArray (Read-Only)
					 * if set due to an ExpandAsArray on the current_status.semister reverse relationship
					 * @return CurrentStatus[]
					 */
					return $this->_objCurrentStatusAsSemisterArray;

				case '_Fees':
					/**
					 * Gets the value for the private _objFees (Read-Only)
					 * if set due to an expansion on the fees.academic_year reverse relationship
					 * @return Fees
					 */
					return $this->_objFees;

				case '_FeesArray':
					/**
					 * Gets the value for the private _objFeesArray (Read-Only)
					 * if set due to an ExpandAsArray on the fees.academic_year reverse relationship
					 * @return Fees[]
					 */
					return $this->_objFeesArray;

				case '_LoginHasRoleAsSemister':
					/**
					 * Gets the value for the private _objLoginHasRoleAsSemister (Read-Only)
					 * if set due to an expansion on the login_has_role.semister reverse relationship
					 * @return LoginHasRole
					 */
					return $this->_objLoginHasRoleAsSemister;

				case '_LoginHasRoleAsSemisterArray':
					/**
					 * Gets the value for the private _objLoginHasRoleAsSemisterArray (Read-Only)
					 * if set due to an ExpandAsArray on the login_has_role.semister reverse relationship
					 * @return LoginHasRole[]
					 */
					return $this->_objLoginHasRoleAsSemisterArray;

				case '_ProfileAsYear':
					/**
					 * Gets the value for the private _objProfileAsYear (Read-Only)
					 * if set due to an expansion on the profile.year reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsYear;

				case '_ProfileAsYearArray':
					/**
					 * Gets the value for the private _objProfileAsYearArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.year reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsYearArray;

				case '_Voucher':
					/**
					 * Gets the value for the private _objVoucher (Read-Only)
					 * if set due to an expansion on the voucher.academic_year reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucher;

				case '_VoucherArray':
					/**
					 * Gets the value for the private _objVoucherArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.academic_year reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherArray;

				case '_YearSubjectAsSemester':
					/**
					 * Gets the value for the private _objYearSubjectAsSemester (Read-Only)
					 * if set due to an expansion on the year_subject.semester reverse relationship
					 * @return YearSubject
					 */
					return $this->_objYearSubjectAsSemester;

				case '_YearSubjectAsSemesterArray':
					/**
					 * Gets the value for the private _objYearSubjectAsSemesterArray (Read-Only)
					 * if set due to an ExpandAsArray on the year_subject.semester reverse relationship
					 * @return YearSubject[]
					 */
					return $this->_objYearSubjectAsSemesterArray;


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


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intParrent 
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
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
							throw new QCallerException('Unable to set an unsaved ParrentObject for this AcademicYear');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->IdacademicYear;

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



		// Related Objects' Methods for AcademicYearAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AcademicYearsAsParrent as an array of AcademicYear objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AcademicYear[]
		*/
		public function GetAcademicYearAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return AcademicYear::LoadArrayByParrent($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AcademicYearsAsParrent
		 * @return int
		*/
		public function CountAcademicYearsAsParrent() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return AcademicYear::CountByParrent($this->intIdacademicYear);
		}

		/**
		 * Associates a AcademicYearAsParrent
		 * @param AcademicYear $objAcademicYear
		 * @return void
		*/
		public function AssociateAcademicYearAsParrent(AcademicYear $objAcademicYear) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAcademicYearAsParrent on this unsaved AcademicYear.');
			if ((is_null($objAcademicYear->IdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAcademicYearAsParrent on this AcademicYear with an unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`academic_year`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idacademic_year` = ' . $objDatabase->SqlVariable($objAcademicYear->IdacademicYear) . '
			');
		}

		/**
		 * Unassociates a AcademicYearAsParrent
		 * @param AcademicYear $objAcademicYear
		 * @return void
		*/
		public function UnassociateAcademicYearAsParrent(AcademicYear $objAcademicYear) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAcademicYearAsParrent on this unsaved AcademicYear.');
			if ((is_null($objAcademicYear->IdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAcademicYearAsParrent on this AcademicYear with an unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`academic_year`
				SET
					`parrent` = null
				WHERE
					`idacademic_year` = ' . $objDatabase->SqlVariable($objAcademicYear->IdacademicYear) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all AcademicYearsAsParrent
		 * @return void
		*/
		public function UnassociateAllAcademicYearsAsParrent() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAcademicYearAsParrent on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`academic_year`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated AcademicYearAsParrent
		 * @param AcademicYear $objAcademicYear
		 * @return void
		*/
		public function DeleteAssociatedAcademicYearAsParrent(AcademicYear $objAcademicYear) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAcademicYearAsParrent on this unsaved AcademicYear.');
			if ((is_null($objAcademicYear->IdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAcademicYearAsParrent on this AcademicYear with an unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`academic_year`
				WHERE
					`idacademic_year` = ' . $objDatabase->SqlVariable($objAcademicYear->IdacademicYear) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated AcademicYearsAsParrent
		 * @return void
		*/
		public function DeleteAllAcademicYearsAsParrent() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAcademicYearAsParrent on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`academic_year`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for ApplicationAsSemister
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsSemister as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsSemisterArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return Application::LoadArrayBySemister($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsSemister
		 * @return int
		*/
		public function CountApplicationsAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return Application::CountBySemister($this->intIdacademicYear);
		}

		/**
		 * Associates a ApplicationAsSemister
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsSemister(Application $objApplication) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsSemister on this unsaved AcademicYear.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsSemister on this AcademicYear with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsSemister
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsSemister(Application $objApplication) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSemister on this unsaved AcademicYear.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSemister on this AcademicYear with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`semister` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsSemister
		 * @return void
		*/
		public function UnassociateAllApplicationsAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSemister on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`semister` = null
				WHERE
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsSemister
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsSemister(Application $objApplication) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSemister on this unsaved AcademicYear.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSemister on this AcademicYear with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsSemister
		 * @return void
		*/
		public function DeleteAllApplicationsAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsSemister on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for CurrentStatusAsSemister
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CurrentStatusesAsSemister as an array of CurrentStatus objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public function GetCurrentStatusAsSemisterArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return CurrentStatus::LoadArrayBySemister($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CurrentStatusesAsSemister
		 * @return int
		*/
		public function CountCurrentStatusesAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return CurrentStatus::CountBySemister($this->intIdacademicYear);
		}

		/**
		 * Associates a CurrentStatusAsSemister
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function AssociateCurrentStatusAsSemister(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatusAsSemister on this unsaved AcademicYear.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatusAsSemister on this AcademicYear with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . '
			');
		}

		/**
		 * Unassociates a CurrentStatusAsSemister
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function UnassociateCurrentStatusAsSemister(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsSemister on this unsaved AcademicYear.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsSemister on this AcademicYear with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`semister` = null
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all CurrentStatusesAsSemister
		 * @return void
		*/
		public function UnassociateAllCurrentStatusesAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsSemister on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`semister` = null
				WHERE
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated CurrentStatusAsSemister
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function DeleteAssociatedCurrentStatusAsSemister(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsSemister on this unsaved AcademicYear.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsSemister on this AcademicYear with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated CurrentStatusesAsSemister
		 * @return void
		*/
		public function DeleteAllCurrentStatusesAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatusAsSemister on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for Fees
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Feeses as an array of Fees objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public function GetFeesArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return Fees::LoadArrayByAcademicYear($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Feeses
		 * @return int
		*/
		public function CountFeeses() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return Fees::CountByAcademicYear($this->intIdacademicYear);
		}

		/**
		 * Associates a Fees
		 * @param Fees $objFees
		 * @return void
		*/
		public function AssociateFees(Fees $objFees) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFees on this unsaved AcademicYear.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFees on this AcademicYear with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates a Fees
		 * @param Fees $objFees
		 * @return void
		*/
		public function UnassociateFees(Fees $objFees) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved AcademicYear.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this AcademicYear with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`academic_year` = null
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all Feeses
		 * @return void
		*/
		public function UnassociateAllFeeses() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`academic_year` = null
				WHERE
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated Fees
		 * @param Fees $objFees
		 * @return void
		*/
		public function DeleteAssociatedFees(Fees $objFees) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved AcademicYear.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this AcademicYear with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated Feeses
		 * @return void
		*/
		public function DeleteAllFeeses() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for LoginHasRoleAsSemister
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LoginHasRolesAsSemister as an array of LoginHasRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public function GetLoginHasRoleAsSemisterArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return LoginHasRole::LoadArrayBySemister($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LoginHasRolesAsSemister
		 * @return int
		*/
		public function CountLoginHasRolesAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return LoginHasRole::CountBySemister($this->intIdacademicYear);
		}

		/**
		 * Associates a LoginHasRoleAsSemister
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function AssociateLoginHasRoleAsSemister(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsSemister on this unsaved AcademicYear.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRoleAsSemister on this AcademicYear with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . '
			');
		}

		/**
		 * Unassociates a LoginHasRoleAsSemister
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function UnassociateLoginHasRoleAsSemister(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsSemister on this unsaved AcademicYear.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsSemister on this AcademicYear with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`semister` = null
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all LoginHasRolesAsSemister
		 * @return void
		*/
		public function UnassociateAllLoginHasRolesAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsSemister on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`semister` = null
				WHERE
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated LoginHasRoleAsSemister
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function DeleteAssociatedLoginHasRoleAsSemister(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsSemister on this unsaved AcademicYear.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsSemister on this AcademicYear with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated LoginHasRolesAsSemister
		 * @return void
		*/
		public function DeleteAllLoginHasRolesAsSemister() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRoleAsSemister on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`semister` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for ProfileAsYear
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsYear as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsYearArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return Profile::LoadArrayByYear($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsYear
		 * @return int
		*/
		public function CountProfilesAsYear() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return Profile::CountByYear($this->intIdacademicYear);
		}

		/**
		 * Associates a ProfileAsYear
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsYear(Profile $objProfile) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsYear on this unsaved AcademicYear.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsYear on this AcademicYear with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsYear
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsYear(Profile $objProfile) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsYear on this unsaved AcademicYear.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsYear on this AcademicYear with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`year` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsYear
		 * @return void
		*/
		public function UnassociateAllProfilesAsYear() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsYear on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`year` = null
				WHERE
					`year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsYear
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsYear(Profile $objProfile) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsYear on this unsaved AcademicYear.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsYear on this AcademicYear with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsYear
		 * @return void
		*/
		public function DeleteAllProfilesAsYear() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsYear on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for Voucher
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Vouchers as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return Voucher::LoadArrayByAcademicYear($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Vouchers
		 * @return int
		*/
		public function CountVouchers() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return Voucher::CountByAcademicYear($this->intIdacademicYear);
		}

		/**
		 * Associates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this unsaved AcademicYear.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this AcademicYear with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved AcademicYear.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this AcademicYear with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`academic_year` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all Vouchers
		 * @return void
		*/
		public function UnassociateAllVouchers() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`academic_year` = null
				WHERE
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved AcademicYear.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this AcademicYear with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated Vouchers
		 * @return void
		*/
		public function DeleteAllVouchers() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}


		// Related Objects' Methods for YearSubjectAsSemester
		//-------------------------------------------------------------------

		/**
		 * Gets all associated YearSubjectsAsSemester as an array of YearSubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public function GetYearSubjectAsSemesterArray($objOptionalClauses = null) {
			if ((is_null($this->intIdacademicYear)))
				return array();

			try {
				return YearSubject::LoadArrayBySemester($this->intIdacademicYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated YearSubjectsAsSemester
		 * @return int
		*/
		public function CountYearSubjectsAsSemester() {
			if ((is_null($this->intIdacademicYear)))
				return 0;

			return YearSubject::CountBySemester($this->intIdacademicYear);
		}

		/**
		 * Associates a YearSubjectAsSemester
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function AssociateYearSubjectAsSemester(YearSubject $objYearSubject) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsSemester on this unsaved AcademicYear.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsSemester on this AcademicYear with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`semester` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . '
			');
		}

		/**
		 * Unassociates a YearSubjectAsSemester
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function UnassociateYearSubjectAsSemester(YearSubject $objYearSubject) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsSemester on this unsaved AcademicYear.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsSemester on this AcademicYear with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`semester` = null
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`semester` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Unassociates all YearSubjectsAsSemester
		 * @return void
		*/
		public function UnassociateAllYearSubjectsAsSemester() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsSemester on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`semester` = null
				WHERE
					`semester` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes an associated YearSubjectAsSemester
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function DeleteAssociatedYearSubjectAsSemester(YearSubject $objYearSubject) {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsSemester on this unsaved AcademicYear.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsSemester on this AcademicYear with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`semester` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
			');
		}

		/**
		 * Deletes all associated YearSubjectsAsSemester
		 * @return void
		*/
		public function DeleteAllYearSubjectsAsSemester() {
			if ((is_null($this->intIdacademicYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsSemester on this unsaved AcademicYear.');

			// Get the Database Object for this Class
			$objDatabase = AcademicYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`semester` = ' . $objDatabase->SqlVariable($this->intIdacademicYear) . '
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
			return "academic_year";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AcademicYear::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AcademicYear"><sequence>';
			$strToReturn .= '<element name="IdacademicYear" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AcademicYear', $strComplexTypeArray)) {
				$strComplexTypeArray['AcademicYear'] = AcademicYear::GetSoapComplexTypeXml();
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AcademicYear::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AcademicYear();
			if (property_exists($objSoapObject, 'IdacademicYear'))
				$objToReturn->intIdacademicYear = $objSoapObject->IdacademicYear;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AcademicYear::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = AcademicYear::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
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
			$iArray['IdacademicYear'] = $this->intIdacademicYear;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
			$iArray['Parrent'] = $this->intParrent;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdacademicYear ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdacademicYear
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $Parrent
     * @property-read QQNodeAcademicYear $ParrentObject
     *
     *
     * @property-read QQReverseReferenceNodeAcademicYear $AcademicYearAsParrent
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsSemister
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatusAsSemister
     * @property-read QQReverseReferenceNodeFees $Fees
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsSemister
     * @property-read QQReverseReferenceNodeProfile $ProfileAsYear
     * @property-read QQReverseReferenceNodeVoucher $Voucher
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsSemester

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAcademicYear extends QQNode {
		protected $strTableName = 'academic_year';
		protected $strPrimaryKey = 'idacademic_year';
		protected $strClassName = 'AcademicYear';
		public function __get($strName) {
			switch ($strName) {
				case 'IdacademicYear':
					return new QQNode('idacademic_year', 'IdacademicYear', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeAcademicYear('parrent', 'ParrentObject', 'Integer', $this);
				case 'AcademicYearAsParrent':
					return new QQReverseReferenceNodeAcademicYear($this, 'academicyearasparrent', 'reverse_reference', 'parrent');
				case 'ApplicationAsSemister':
					return new QQReverseReferenceNodeApplication($this, 'applicationassemister', 'reverse_reference', 'semister');
				case 'CurrentStatusAsSemister':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatusassemister', 'reverse_reference', 'semister');
				case 'Fees':
					return new QQReverseReferenceNodeFees($this, 'fees', 'reverse_reference', 'academic_year');
				case 'LoginHasRoleAsSemister':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleassemister', 'reverse_reference', 'semister');
				case 'ProfileAsYear':
					return new QQReverseReferenceNodeProfile($this, 'profileasyear', 'reverse_reference', 'year');
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'academic_year');
				case 'YearSubjectAsSemester':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectassemester', 'reverse_reference', 'semester');

				case '_PrimaryKeyNode':
					return new QQNode('idacademic_year', 'IdacademicYear', 'Integer', $this);
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
     * @property-read QQNode $IdacademicYear
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $Parrent
     * @property-read QQNodeAcademicYear $ParrentObject
     *
     *
     * @property-read QQReverseReferenceNodeAcademicYear $AcademicYearAsParrent
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsSemister
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatusAsSemister
     * @property-read QQReverseReferenceNodeFees $Fees
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRoleAsSemister
     * @property-read QQReverseReferenceNodeProfile $ProfileAsYear
     * @property-read QQReverseReferenceNodeVoucher $Voucher
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsSemester

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAcademicYear extends QQReverseReferenceNode {
		protected $strTableName = 'academic_year';
		protected $strPrimaryKey = 'idacademic_year';
		protected $strClassName = 'AcademicYear';
		public function __get($strName) {
			switch ($strName) {
				case 'IdacademicYear':
					return new QQNode('idacademic_year', 'IdacademicYear', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeAcademicYear('parrent', 'ParrentObject', 'integer', $this);
				case 'AcademicYearAsParrent':
					return new QQReverseReferenceNodeAcademicYear($this, 'academicyearasparrent', 'reverse_reference', 'parrent');
				case 'ApplicationAsSemister':
					return new QQReverseReferenceNodeApplication($this, 'applicationassemister', 'reverse_reference', 'semister');
				case 'CurrentStatusAsSemister':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatusassemister', 'reverse_reference', 'semister');
				case 'Fees':
					return new QQReverseReferenceNodeFees($this, 'fees', 'reverse_reference', 'academic_year');
				case 'LoginHasRoleAsSemister':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasroleassemister', 'reverse_reference', 'semister');
				case 'ProfileAsYear':
					return new QQReverseReferenceNodeProfile($this, 'profileasyear', 'reverse_reference', 'year');
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'academic_year');
				case 'YearSubjectAsSemester':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectassemester', 'reverse_reference', 'semester');

				case '_PrimaryKeyNode':
					return new QQNode('idacademic_year', 'IdacademicYear', 'integer', $this);
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
