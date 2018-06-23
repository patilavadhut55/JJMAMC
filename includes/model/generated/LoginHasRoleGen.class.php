<?php
	/**
	 * The abstract LoginHasRoleGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the LoginHasRole subclass which
	 * extends this LoginHasRoleGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the LoginHasRole class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $LoginIdlogin the value for intLoginIdlogin (PK)
	 * @property integer $RoleIdrole the value for intRoleIdrole (PK)
	 * @property boolean $Active the value for blnActive 
	 * @property QDateTime $From the value for dttFrom 
	 * @property QDateTime $To the value for dttTo 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property integer $Semister the value for intSemister 
	 * @property integer $Department the value for intDepartment 
	 * @property Login $LoginIdloginObject the value for the Login object referenced by intLoginIdlogin (PK)
	 * @property Role $RoleIdroleObject the value for the Role object referenced by intRoleIdrole (PK)
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property AcademicYear $SemisterObject the value for the AcademicYear object referenced by intSemister 
	 * @property Role $DepartmentObject the value for the Role object referenced by intDepartment 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class LoginHasRoleGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column login_has_role.login_idlogin
		 * @var integer intLoginIdlogin
		 */
		protected $intLoginIdlogin;
		const LoginIdloginDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intLoginIdlogin;
		 */
		protected $__intLoginIdlogin;

		/**
		 * Protected member variable that maps to the database PK column login_has_role.role_idrole
		 * @var integer intRoleIdrole
		 */
		protected $intRoleIdrole;
		const RoleIdroleDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intRoleIdrole;
		 */
		protected $__intRoleIdrole;

		/**
		 * Protected member variable that maps to the database column login_has_role.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Protected member variable that maps to the database column login_has_role.from
		 * @var QDateTime dttFrom
		 */
		protected $dttFrom;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column login_has_role.to
		 * @var QDateTime dttTo
		 */
		protected $dttTo;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column login_has_role.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


		/**
		 * Protected member variable that maps to the database column login_has_role.semister
		 * @var integer intSemister
		 */
		protected $intSemister;
		const SemisterDefault = null;


		/**
		 * Protected member variable that maps to the database column login_has_role.department
		 * @var integer intDepartment
		 */
		protected $intDepartment;
		const DepartmentDefault = null;


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
		 * in the database column login_has_role.login_idlogin.
		 *
		 * NOTE: Always use the LoginIdloginObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objLoginIdloginObject
		 */
		protected $objLoginIdloginObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column login_has_role.role_idrole.
		 *
		 * NOTE: Always use the RoleIdroleObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoleIdroleObject
		 */
		protected $objRoleIdroleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column login_has_role.calender_year.
		 *
		 * NOTE: Always use the CalenderYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalenderYearObject
		 */
		protected $objCalenderYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column login_has_role.semister.
		 *
		 * NOTE: Always use the SemisterObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objSemisterObject
		 */
		protected $objSemisterObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column login_has_role.department.
		 *
		 * NOTE: Always use the DepartmentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDepartmentObject
		 */
		protected $objDepartmentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intLoginIdlogin = LoginHasRole::LoginIdloginDefault;
			$this->intRoleIdrole = LoginHasRole::RoleIdroleDefault;
			$this->blnActive = LoginHasRole::ActiveDefault;
			$this->dttFrom = (LoginHasRole::FromDefault === null)?null:new QDateTime(LoginHasRole::FromDefault);
			$this->dttTo = (LoginHasRole::ToDefault === null)?null:new QDateTime(LoginHasRole::ToDefault);
			$this->intCalenderYear = LoginHasRole::CalenderYearDefault;
			$this->intSemister = LoginHasRole::SemisterDefault;
			$this->intDepartment = LoginHasRole::DepartmentDefault;
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
		 * Load a LoginHasRole from PK Info
		 * @param integer $intLoginIdlogin		 * @param integer $intRoleIdrole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole
		 */
		public static function Load($intLoginIdlogin, $intRoleIdrole, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'LoginHasRole', $intLoginIdlogin, $intRoleIdrole);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = LoginHasRole::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $intLoginIdlogin),
					QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $intRoleIdrole)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all LoginHasRoles
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call LoginHasRole::QueryArray to perform the LoadAll query
			try {
				return LoginHasRole::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all LoginHasRoles
		 * @return int
		 */
		public static function CountAll() {
			// Call LoginHasRole::QueryCount to perform the CountAll query
			return LoginHasRole::QueryCount(QQ::All());
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
			$objDatabase = LoginHasRole::GetDatabase();

			// Create/Build out the QueryBuilder object with LoginHasRole-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'login_has_role');

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
				LoginHasRole::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('login_has_role');

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
		 * Static Qcubed Query method to query for a single LoginHasRole object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return LoginHasRole the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = LoginHasRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new LoginHasRole object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = LoginHasRole::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return LoginHasRole::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of LoginHasRole objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return LoginHasRole[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = LoginHasRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return LoginHasRole::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = LoginHasRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of LoginHasRole objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = LoginHasRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = LoginHasRole::GetDatabase();

			$strQuery = LoginHasRole::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/loginhasrole', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = LoginHasRole::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this LoginHasRole
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'login_has_role';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'login_idlogin', $strAliasPrefix . 'login_idlogin');
			    $objBuilder->AddSelectItem($strTableName, 'role_idrole', $strAliasPrefix . 'role_idrole');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'login_idlogin', $strAliasPrefix . 'login_idlogin');
			    $objBuilder->AddSelectItem($strTableName, 'role_idrole', $strAliasPrefix . 'role_idrole');
			    $objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
			    $objBuilder->AddSelectItem($strTableName, 'semister', $strAliasPrefix . 'semister');
			    $objBuilder->AddSelectItem($strTableName, 'department', $strAliasPrefix . 'department');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a LoginHasRole from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this LoginHasRole::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return LoginHasRole
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the LoginHasRole object
			$objToReturn = new LoginHasRole();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'login_idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLoginIdlogin = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLoginIdlogin = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'role_idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRoleIdrole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intRoleIdrole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'active';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFrom = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttTo = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'semister';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSemister = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDepartment = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LoginIdlogin != $objPreviousItem->LoginIdlogin) {
						continue;
					}
					if ($objToReturn->RoleIdrole != $objPreviousItem->RoleIdrole) {
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
				$strAliasPrefix = 'login_has_role__';

			// Check for LoginIdloginObject Early Binding
			$strAlias = $strAliasPrefix . 'login_idlogin__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLoginIdloginObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'login_idlogin__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RoleIdroleObject Early Binding
			$strAlias = $strAliasPrefix . 'role_idrole__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoleIdroleObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role_idrole__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SemisterObject Early Binding
			$strAlias = $strAliasPrefix . 'semister__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSemisterObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'semister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DepartmentObject Early Binding
			$strAlias = $strAliasPrefix . 'department__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDepartmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'department__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of LoginHasRoles from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return LoginHasRole[]
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
					$objItem = LoginHasRole::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = LoginHasRole::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single LoginHasRole object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return LoginHasRole next row resulting from the query
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
			return LoginHasRole::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single LoginHasRole object,
		 * by LoginIdlogin, RoleIdrole Index(es)
		 * @param integer $intLoginIdlogin
		 * @param integer $intRoleIdrole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole
		*/
		public static function LoadByLoginIdloginRoleIdrole($intLoginIdlogin, $intRoleIdrole, $objOptionalClauses = null) {
			return LoginHasRole::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $intLoginIdlogin),
					QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $intRoleIdrole)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of LoginHasRole objects,
		 * by RoleIdrole Index(es)
		 * @param integer $intRoleIdrole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public static function LoadArrayByRoleIdrole($intRoleIdrole, $objOptionalClauses = null) {
			// Call LoginHasRole::QueryArray to perform the LoadArrayByRoleIdrole query
			try {
				return LoginHasRole::QueryArray(
					QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $intRoleIdrole),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LoginHasRoles
		 * by RoleIdrole Index(es)
		 * @param integer $intRoleIdrole
		 * @return int
		*/
		public static function CountByRoleIdrole($intRoleIdrole) {
			// Call LoginHasRole::QueryCount to perform the CountByRoleIdrole query
			return LoginHasRole::QueryCount(
				QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $intRoleIdrole)
			);
		}

		/**
		 * Load an array of LoginHasRole objects,
		 * by LoginIdlogin Index(es)
		 * @param integer $intLoginIdlogin
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public static function LoadArrayByLoginIdlogin($intLoginIdlogin, $objOptionalClauses = null) {
			// Call LoginHasRole::QueryArray to perform the LoadArrayByLoginIdlogin query
			try {
				return LoginHasRole::QueryArray(
					QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $intLoginIdlogin),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LoginHasRoles
		 * by LoginIdlogin Index(es)
		 * @param integer $intLoginIdlogin
		 * @return int
		*/
		public static function CountByLoginIdlogin($intLoginIdlogin) {
			// Call LoginHasRole::QueryCount to perform the CountByLoginIdlogin query
			return LoginHasRole::QueryCount(
				QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $intLoginIdlogin)
			);
		}

		/**
		 * Load an array of LoginHasRole objects,
		 * by Semister Index(es)
		 * @param integer $intSemister
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public static function LoadArrayBySemister($intSemister, $objOptionalClauses = null) {
			// Call LoginHasRole::QueryArray to perform the LoadArrayBySemister query
			try {
				return LoginHasRole::QueryArray(
					QQ::Equal(QQN::LoginHasRole()->Semister, $intSemister),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LoginHasRoles
		 * by Semister Index(es)
		 * @param integer $intSemister
		 * @return int
		*/
		public static function CountBySemister($intSemister) {
			// Call LoginHasRole::QueryCount to perform the CountBySemister query
			return LoginHasRole::QueryCount(
				QQ::Equal(QQN::LoginHasRole()->Semister, $intSemister)
			);
		}

		/**
		 * Load an array of LoginHasRole objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call LoginHasRole::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return LoginHasRole::QueryArray(
					QQ::Equal(QQN::LoginHasRole()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LoginHasRoles
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call LoginHasRole::QueryCount to perform the CountByCalenderYear query
			return LoginHasRole::QueryCount(
				QQ::Equal(QQN::LoginHasRole()->CalenderYear, $intCalenderYear)
			);
		}

		/**
		 * Load an array of LoginHasRole objects,
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public static function LoadArrayByDepartment($intDepartment, $objOptionalClauses = null) {
			// Call LoginHasRole::QueryArray to perform the LoadArrayByDepartment query
			try {
				return LoginHasRole::QueryArray(
					QQ::Equal(QQN::LoginHasRole()->Department, $intDepartment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LoginHasRoles
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @return int
		*/
		public static function CountByDepartment($intDepartment) {
			// Call LoginHasRole::QueryCount to perform the CountByDepartment query
			return LoginHasRole::QueryCount(
				QQ::Equal(QQN::LoginHasRole()->Department, $intDepartment)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this LoginHasRole
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = LoginHasRole::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `login_has_role` (
							`login_idlogin`,
							`role_idrole`,
							`active`,
							`from`,
							`to`,
							`calender_year`,
							`semister`,
							`department`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLoginIdlogin) . ',
							' . $objDatabase->SqlVariable($this->intRoleIdrole) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . ',
							' . $objDatabase->SqlVariable($this->dttFrom) . ',
							' . $objDatabase->SqlVariable($this->dttTo) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							' . $objDatabase->SqlVariable($this->intSemister) . ',
							' . $objDatabase->SqlVariable($this->intDepartment) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`login_has_role`
						SET
							`login_idlogin` = ' . $objDatabase->SqlVariable($this->intLoginIdlogin) . ',
							`role_idrole` = ' . $objDatabase->SqlVariable($this->intRoleIdrole) . ',
							`active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
							`from` = ' . $objDatabase->SqlVariable($this->dttFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->dttTo) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							`semister` = ' . $objDatabase->SqlVariable($this->intSemister) . ',
							`department` = ' . $objDatabase->SqlVariable($this->intDepartment) . '
						WHERE
							`login_idlogin` = ' . $objDatabase->SqlVariable($this->__intLoginIdlogin) . ' AND 
							`role_idrole` = ' . $objDatabase->SqlVariable($this->__intRoleIdrole) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intLoginIdlogin = $this->intLoginIdlogin;
			$this->__intRoleIdrole = $this->intRoleIdrole;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this LoginHasRole
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLoginIdlogin)) || (is_null($this->intRoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this LoginHasRole with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = LoginHasRole::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($this->intLoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($this->intRoleIdrole) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this LoginHasRole ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'LoginHasRole', $this->intLoginIdlogin, $this->intRoleIdrole);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all LoginHasRoles
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = LoginHasRole::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate login_has_role table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = LoginHasRole::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `login_has_role`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this LoginHasRole from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved LoginHasRole object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = LoginHasRole::Load($this->intLoginIdlogin, $this->intRoleIdrole);

			// Update $this's local variables to match
			$this->LoginIdlogin = $objReloaded->LoginIdlogin;
			$this->__intLoginIdlogin = $this->intLoginIdlogin;
			$this->RoleIdrole = $objReloaded->RoleIdrole;
			$this->__intRoleIdrole = $this->intRoleIdrole;
			$this->blnActive = $objReloaded->blnActive;
			$this->dttFrom = $objReloaded->dttFrom;
			$this->dttTo = $objReloaded->dttTo;
			$this->CalenderYear = $objReloaded->CalenderYear;
			$this->Semister = $objReloaded->Semister;
			$this->Department = $objReloaded->Department;
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
				case 'LoginIdlogin':
					/**
					 * Gets the value for intLoginIdlogin (PK)
					 * @return integer
					 */
					return $this->intLoginIdlogin;

				case 'RoleIdrole':
					/**
					 * Gets the value for intRoleIdrole (PK)
					 * @return integer
					 */
					return $this->intRoleIdrole;

				case 'Active':
					/**
					 * Gets the value for blnActive 
					 * @return boolean
					 */
					return $this->blnActive;

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

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;

				case 'Semister':
					/**
					 * Gets the value for intSemister 
					 * @return integer
					 */
					return $this->intSemister;

				case 'Department':
					/**
					 * Gets the value for intDepartment 
					 * @return integer
					 */
					return $this->intDepartment;


				///////////////////
				// Member Objects
				///////////////////
				case 'LoginIdloginObject':
					/**
					 * Gets the value for the Login object referenced by intLoginIdlogin (PK)
					 * @return Login
					 */
					try {
						if ((!$this->objLoginIdloginObject) && (!is_null($this->intLoginIdlogin)))
							$this->objLoginIdloginObject = Login::Load($this->intLoginIdlogin);
						return $this->objLoginIdloginObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RoleIdroleObject':
					/**
					 * Gets the value for the Role object referenced by intRoleIdrole (PK)
					 * @return Role
					 */
					try {
						if ((!$this->objRoleIdroleObject) && (!is_null($this->intRoleIdrole)))
							$this->objRoleIdroleObject = Role::Load($this->intRoleIdrole);
						return $this->objRoleIdroleObject;
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
				case 'LoginIdlogin':
					/**
					 * Sets the value for intLoginIdlogin (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objLoginIdloginObject = null;
						return ($this->intLoginIdlogin = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RoleIdrole':
					/**
					 * Sets the value for intRoleIdrole (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRoleIdroleObject = null;
						return ($this->intRoleIdrole = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Active':
					/**
					 * Sets the value for blnActive 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnActive = QType::Cast($mixValue, QType::Boolean));
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


				///////////////////
				// Member Objects
				///////////////////
				case 'LoginIdloginObject':
					/**
					 * Sets the value for the Login object referenced by intLoginIdlogin (PK)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intLoginIdlogin = null;
						$this->objLoginIdloginObject = null;
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
							throw new QCallerException('Unable to set an unsaved LoginIdloginObject for this LoginHasRole');

						// Update Local Member Variables
						$this->objLoginIdloginObject = $mixValue;
						$this->intLoginIdlogin = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RoleIdroleObject':
					/**
					 * Sets the value for the Role object referenced by intRoleIdrole (PK)
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRoleIdrole = null;
						$this->objRoleIdroleObject = null;
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
							throw new QCallerException('Unable to set an unsaved RoleIdroleObject for this LoginHasRole');

						// Update Local Member Variables
						$this->objRoleIdroleObject = $mixValue;
						$this->intRoleIdrole = $mixValue->Idrole;

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
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this LoginHasRole');

						// Update Local Member Variables
						$this->objCalenderYearObject = $mixValue;
						$this->intCalenderYear = $mixValue->IdcalenderYear;

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
							throw new QCallerException('Unable to set an unsaved SemisterObject for this LoginHasRole');

						// Update Local Member Variables
						$this->objSemisterObject = $mixValue;
						$this->intSemister = $mixValue->IdacademicYear;

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
							throw new QCallerException('Unable to set an unsaved DepartmentObject for this LoginHasRole');

						// Update Local Member Variables
						$this->objDepartmentObject = $mixValue;
						$this->intDepartment = $mixValue->Idrole;

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
			return "login_has_role";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[LoginHasRole::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="LoginHasRole"><sequence>';
			$strToReturn .= '<element name="LoginIdloginObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="RoleIdroleObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="From" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="To" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="SemisterObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="DepartmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('LoginHasRole', $strComplexTypeArray)) {
				$strComplexTypeArray['LoginHasRole'] = LoginHasRole::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, LoginHasRole::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new LoginHasRole();
			if ((property_exists($objSoapObject, 'LoginIdloginObject')) &&
				($objSoapObject->LoginIdloginObject))
				$objToReturn->LoginIdloginObject = Login::GetObjectFromSoapObject($objSoapObject->LoginIdloginObject);
			if ((property_exists($objSoapObject, 'RoleIdroleObject')) &&
				($objSoapObject->RoleIdroleObject))
				$objToReturn->RoleIdroleObject = Role::GetObjectFromSoapObject($objSoapObject->RoleIdroleObject);
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->blnActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, 'From'))
				$objToReturn->dttFrom = new QDateTime($objSoapObject->From);
			if (property_exists($objSoapObject, 'To'))
				$objToReturn->dttTo = new QDateTime($objSoapObject->To);
			if ((property_exists($objSoapObject, 'CalenderYearObject')) &&
				($objSoapObject->CalenderYearObject))
				$objToReturn->CalenderYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalenderYearObject);
			if ((property_exists($objSoapObject, 'SemisterObject')) &&
				($objSoapObject->SemisterObject))
				$objToReturn->SemisterObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->SemisterObject);
			if ((property_exists($objSoapObject, 'DepartmentObject')) &&
				($objSoapObject->DepartmentObject))
				$objToReturn->DepartmentObject = Role::GetObjectFromSoapObject($objSoapObject->DepartmentObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, LoginHasRole::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLoginIdloginObject)
				$objObject->objLoginIdloginObject = Login::GetSoapObjectFromObject($objObject->objLoginIdloginObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLoginIdlogin = null;
			if ($objObject->objRoleIdroleObject)
				$objObject->objRoleIdroleObject = Role::GetSoapObjectFromObject($objObject->objRoleIdroleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoleIdrole = null;
			if ($objObject->dttFrom)
				$objObject->dttFrom = $objObject->dttFrom->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTo)
				$objObject->dttTo = $objObject->dttTo->qFormat(QDateTime::FormatSoap);
			if ($objObject->objCalenderYearObject)
				$objObject->objCalenderYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalenderYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalenderYear = null;
			if ($objObject->objSemisterObject)
				$objObject->objSemisterObject = AcademicYear::GetSoapObjectFromObject($objObject->objSemisterObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSemister = null;
			if ($objObject->objDepartmentObject)
				$objObject->objDepartmentObject = Role::GetSoapObjectFromObject($objObject->objDepartmentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDepartment = null;
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
			$iArray['LoginIdlogin'] = $this->intLoginIdlogin;
			$iArray['RoleIdrole'] = $this->intRoleIdrole;
			$iArray['Active'] = $this->blnActive;
			$iArray['From'] = $this->dttFrom;
			$iArray['To'] = $this->dttTo;
			$iArray['CalenderYear'] = $this->intCalenderYear;
			$iArray['Semister'] = $this->intSemister;
			$iArray['Department'] = $this->intDepartment;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  array( $this->intLoginIdlogin,  $this->intRoleIdrole) ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $LoginIdlogin
     * @property-read QQNodeLogin $LoginIdloginObject
     * @property-read QQNode $RoleIdrole
     * @property-read QQNodeRole $RoleIdroleObject
     * @property-read QQNode $Active
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $Semister
     * @property-read QQNodeAcademicYear $SemisterObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     *
     *

     * @property-read QQNodeLogin $_PrimaryKeyNode
     **/
	class QQNodeLoginHasRole extends QQNode {
		protected $strTableName = 'login_has_role';
		protected $strPrimaryKey = 'login_idlogin';
		protected $strClassName = 'LoginHasRole';
		public function __get($strName) {
			switch ($strName) {
				case 'LoginIdlogin':
					return new QQNode('login_idlogin', 'LoginIdlogin', 'Integer', $this);
				case 'LoginIdloginObject':
					return new QQNodeLogin('login_idlogin', 'LoginIdloginObject', 'Integer', $this);
				case 'RoleIdrole':
					return new QQNode('role_idrole', 'RoleIdrole', 'Integer', $this);
				case 'RoleIdroleObject':
					return new QQNodeRole('role_idrole', 'RoleIdroleObject', 'Integer', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'Bit', $this);
				case 'From':
					return new QQNode('from', 'From', 'DateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'DateTime', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);
				case 'Semister':
					return new QQNode('semister', 'Semister', 'Integer', $this);
				case 'SemisterObject':
					return new QQNodeAcademicYear('semister', 'SemisterObject', 'Integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'Integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeLogin('login_idlogin', 'LoginIdlogin', 'Integer', $this);
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
     * @property-read QQNode $LoginIdlogin
     * @property-read QQNodeLogin $LoginIdloginObject
     * @property-read QQNode $RoleIdrole
     * @property-read QQNodeRole $RoleIdroleObject
     * @property-read QQNode $Active
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $Semister
     * @property-read QQNodeAcademicYear $SemisterObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     *
     *

     * @property-read QQNodeLogin $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeLoginHasRole extends QQReverseReferenceNode {
		protected $strTableName = 'login_has_role';
		protected $strPrimaryKey = 'login_idlogin';
		protected $strClassName = 'LoginHasRole';
		public function __get($strName) {
			switch ($strName) {
				case 'LoginIdlogin':
					return new QQNode('login_idlogin', 'LoginIdlogin', 'integer', $this);
				case 'LoginIdloginObject':
					return new QQNodeLogin('login_idlogin', 'LoginIdloginObject', 'integer', $this);
				case 'RoleIdrole':
					return new QQNode('role_idrole', 'RoleIdrole', 'integer', $this);
				case 'RoleIdroleObject':
					return new QQNodeRole('role_idrole', 'RoleIdroleObject', 'integer', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'boolean', $this);
				case 'From':
					return new QQNode('from', 'From', 'QDateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'QDateTime', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);
				case 'Semister':
					return new QQNode('semister', 'Semister', 'integer', $this);
				case 'SemisterObject':
					return new QQNodeAcademicYear('semister', 'SemisterObject', 'integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeLogin('login_idlogin', 'LoginIdlogin', 'integer', $this);
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
