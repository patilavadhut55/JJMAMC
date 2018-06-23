<?php
	/**
	 * The abstract SubjectToughtGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the SubjectTought subclass which
	 * extends this SubjectToughtGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the SubjectTought class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdsubjectTought the value for intIdsubjectTought (Read-Only PK)
	 * @property integer $Login the value for intLogin (Not Null)
	 * @property integer $Role the value for intRole (Not Null)
	 * @property integer $Subject the value for intSubject (Not Null)
	 * @property boolean $Qualifiedpaperset the value for blnQualifiedpaperset 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property Login $LoginObject the value for the Login object referenced by intLogin (Not Null)
	 * @property Role $RoleObject the value for the Role object referenced by intRole (Not Null)
	 * @property YearSubject $SubjectObject the value for the YearSubject object referenced by intSubject (Not Null)
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SubjectToughtGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column subject_tought.idsubject_tought
		 * @var integer intIdsubjectTought
		 */
		protected $intIdsubjectTought;
		const IdsubjectToughtDefault = null;


		/**
		 * Protected member variable that maps to the database column subject_tought.login
		 * @var integer intLogin
		 */
		protected $intLogin;
		const LoginDefault = null;


		/**
		 * Protected member variable that maps to the database column subject_tought.role
		 * @var integer intRole
		 */
		protected $intRole;
		const RoleDefault = null;


		/**
		 * Protected member variable that maps to the database column subject_tought.subject
		 * @var integer intSubject
		 */
		protected $intSubject;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column subject_tought.qualifiedpaperset
		 * @var boolean blnQualifiedpaperset
		 */
		protected $blnQualifiedpaperset;
		const QualifiedpapersetDefault = null;


		/**
		 * Protected member variable that maps to the database column subject_tought.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


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
		 * in the database column subject_tought.login.
		 *
		 * NOTE: Always use the LoginObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objLoginObject
		 */
		protected $objLoginObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column subject_tought.role.
		 *
		 * NOTE: Always use the RoleObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoleObject
		 */
		protected $objRoleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column subject_tought.subject.
		 *
		 * NOTE: Always use the SubjectObject property getter to correctly retrieve this YearSubject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var YearSubject objSubjectObject
		 */
		protected $objSubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column subject_tought.calender_year.
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
			$this->intIdsubjectTought = SubjectTought::IdsubjectToughtDefault;
			$this->intLogin = SubjectTought::LoginDefault;
			$this->intRole = SubjectTought::RoleDefault;
			$this->intSubject = SubjectTought::SubjectDefault;
			$this->blnQualifiedpaperset = SubjectTought::QualifiedpapersetDefault;
			$this->intCalenderYear = SubjectTought::CalenderYearDefault;
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
		 * Load a SubjectTought from PK Info
		 * @param integer $intIdsubjectTought
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought
		 */
		public static function Load($intIdsubjectTought, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'SubjectTought', $intIdsubjectTought);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = SubjectTought::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::SubjectTought()->IdsubjectTought, $intIdsubjectTought)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all SubjectToughts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call SubjectTought::QueryArray to perform the LoadAll query
			try {
				return SubjectTought::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all SubjectToughts
		 * @return int
		 */
		public static function CountAll() {
			// Call SubjectTought::QueryCount to perform the CountAll query
			return SubjectTought::QueryCount(QQ::All());
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
			$objDatabase = SubjectTought::GetDatabase();

			// Create/Build out the QueryBuilder object with SubjectTought-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'subject_tought');

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
				SubjectTought::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('subject_tought');

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
		 * Static Qcubed Query method to query for a single SubjectTought object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return SubjectTought the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SubjectTought::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new SubjectTought object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = SubjectTought::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return SubjectTought::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of SubjectTought objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return SubjectTought[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SubjectTought::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return SubjectTought::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = SubjectTought::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of SubjectTought objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = SubjectTought::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = SubjectTought::GetDatabase();

			$strQuery = SubjectTought::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/subjecttought', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = SubjectTought::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this SubjectTought
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'subject_tought';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idsubject_tought', $strAliasPrefix . 'idsubject_tought');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idsubject_tought', $strAliasPrefix . 'idsubject_tought');
			    $objBuilder->AddSelectItem($strTableName, 'login', $strAliasPrefix . 'login');
			    $objBuilder->AddSelectItem($strTableName, 'role', $strAliasPrefix . 'role');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			    $objBuilder->AddSelectItem($strTableName, 'qualifiedpaperset', $strAliasPrefix . 'qualifiedpaperset');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a SubjectTought from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this SubjectTought::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return SubjectTought
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the SubjectTought object
			$objToReturn = new SubjectTought();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idsubject_tought';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdsubjectTought = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'login';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLogin = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'role';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'qualifiedpaperset';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnQualifiedpaperset = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdsubjectTought != $objPreviousItem->IdsubjectTought) {
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
				$strAliasPrefix = 'subject_tought__';

			// Check for LoginObject Early Binding
			$strAlias = $strAliasPrefix . 'login__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLoginObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'login__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RoleObject Early Binding
			$strAlias = $strAliasPrefix . 'role__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoleObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'subject__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubjectObject = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of SubjectToughts from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return SubjectTought[]
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
					$objItem = SubjectTought::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = SubjectTought::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single SubjectTought object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return SubjectTought next row resulting from the query
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
			return SubjectTought::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single SubjectTought object,
		 * by IdsubjectTought Index(es)
		 * @param integer $intIdsubjectTought
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought
		*/
		public static function LoadByIdsubjectTought($intIdsubjectTought, $objOptionalClauses = null) {
			return SubjectTought::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::SubjectTought()->IdsubjectTought, $intIdsubjectTought)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of SubjectTought objects,
		 * by Role Index(es)
		 * @param integer $intRole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public static function LoadArrayByRole($intRole, $objOptionalClauses = null) {
			// Call SubjectTought::QueryArray to perform the LoadArrayByRole query
			try {
				return SubjectTought::QueryArray(
					QQ::Equal(QQN::SubjectTought()->Role, $intRole),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count SubjectToughts
		 * by Role Index(es)
		 * @param integer $intRole
		 * @return int
		*/
		public static function CountByRole($intRole) {
			// Call SubjectTought::QueryCount to perform the CountByRole query
			return SubjectTought::QueryCount(
				QQ::Equal(QQN::SubjectTought()->Role, $intRole)
			);
		}

		/**
		 * Load an array of SubjectTought objects,
		 * by Login Index(es)
		 * @param integer $intLogin
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public static function LoadArrayByLogin($intLogin, $objOptionalClauses = null) {
			// Call SubjectTought::QueryArray to perform the LoadArrayByLogin query
			try {
				return SubjectTought::QueryArray(
					QQ::Equal(QQN::SubjectTought()->Login, $intLogin),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count SubjectToughts
		 * by Login Index(es)
		 * @param integer $intLogin
		 * @return int
		*/
		public static function CountByLogin($intLogin) {
			// Call SubjectTought::QueryCount to perform the CountByLogin query
			return SubjectTought::QueryCount(
				QQ::Equal(QQN::SubjectTought()->Login, $intLogin)
			);
		}

		/**
		 * Load an array of SubjectTought objects,
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public static function LoadArrayBySubject($intSubject, $objOptionalClauses = null) {
			// Call SubjectTought::QueryArray to perform the LoadArrayBySubject query
			try {
				return SubjectTought::QueryArray(
					QQ::Equal(QQN::SubjectTought()->Subject, $intSubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count SubjectToughts
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @return int
		*/
		public static function CountBySubject($intSubject) {
			// Call SubjectTought::QueryCount to perform the CountBySubject query
			return SubjectTought::QueryCount(
				QQ::Equal(QQN::SubjectTought()->Subject, $intSubject)
			);
		}

		/**
		 * Load an array of SubjectTought objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call SubjectTought::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return SubjectTought::QueryArray(
					QQ::Equal(QQN::SubjectTought()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count SubjectToughts
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call SubjectTought::QueryCount to perform the CountByCalenderYear query
			return SubjectTought::QueryCount(
				QQ::Equal(QQN::SubjectTought()->CalenderYear, $intCalenderYear)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this SubjectTought
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = SubjectTought::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `subject_tought` (
							`login`,
							`role`,
							`subject`,
							`qualifiedpaperset`,
							`calender_year`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLogin) . ',
							' . $objDatabase->SqlVariable($this->intRole) . ',
							' . $objDatabase->SqlVariable($this->intSubject) . ',
							' . $objDatabase->SqlVariable($this->blnQualifiedpaperset) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdsubjectTought = $objDatabase->InsertId('subject_tought', 'idsubject_tought');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`subject_tought`
						SET
							`login` = ' . $objDatabase->SqlVariable($this->intLogin) . ',
							`role` = ' . $objDatabase->SqlVariable($this->intRole) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->intSubject) . ',
							`qualifiedpaperset` = ' . $objDatabase->SqlVariable($this->blnQualifiedpaperset) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . '
						WHERE
							`idsubject_tought` = ' . $objDatabase->SqlVariable($this->intIdsubjectTought) . '
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
		 * Delete this SubjectTought
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this SubjectTought with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = SubjectTought::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($this->intIdsubjectTought) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this SubjectTought ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'SubjectTought', $this->intIdsubjectTought);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all SubjectToughts
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = SubjectTought::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate subject_tought table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = SubjectTought::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `subject_tought`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this SubjectTought from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved SubjectTought object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = SubjectTought::Load($this->intIdsubjectTought);

			// Update $this's local variables to match
			$this->Login = $objReloaded->Login;
			$this->Role = $objReloaded->Role;
			$this->Subject = $objReloaded->Subject;
			$this->blnQualifiedpaperset = $objReloaded->blnQualifiedpaperset;
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
				case 'IdsubjectTought':
					/**
					 * Gets the value for intIdsubjectTought (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdsubjectTought;

				case 'Login':
					/**
					 * Gets the value for intLogin (Not Null)
					 * @return integer
					 */
					return $this->intLogin;

				case 'Role':
					/**
					 * Gets the value for intRole (Not Null)
					 * @return integer
					 */
					return $this->intRole;

				case 'Subject':
					/**
					 * Gets the value for intSubject (Not Null)
					 * @return integer
					 */
					return $this->intSubject;

				case 'Qualifiedpaperset':
					/**
					 * Gets the value for blnQualifiedpaperset 
					 * @return boolean
					 */
					return $this->blnQualifiedpaperset;

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;


				///////////////////
				// Member Objects
				///////////////////
				case 'LoginObject':
					/**
					 * Gets the value for the Login object referenced by intLogin (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objLoginObject) && (!is_null($this->intLogin)))
							$this->objLoginObject = Login::Load($this->intLogin);
						return $this->objLoginObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RoleObject':
					/**
					 * Gets the value for the Role object referenced by intRole (Not Null)
					 * @return Role
					 */
					try {
						if ((!$this->objRoleObject) && (!is_null($this->intRole)))
							$this->objRoleObject = Role::Load($this->intRole);
						return $this->objRoleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubjectObject':
					/**
					 * Gets the value for the YearSubject object referenced by intSubject (Not Null)
					 * @return YearSubject
					 */
					try {
						if ((!$this->objSubjectObject) && (!is_null($this->intSubject)))
							$this->objSubjectObject = YearSubject::Load($this->intSubject);
						return $this->objSubjectObject;
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
				case 'Login':
					/**
					 * Sets the value for intLogin (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objLoginObject = null;
						return ($this->intLogin = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Role':
					/**
					 * Sets the value for intRole (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRoleObject = null;
						return ($this->intRole = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Subject':
					/**
					 * Sets the value for intSubject (Not Null)
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

				case 'Qualifiedpaperset':
					/**
					 * Sets the value for blnQualifiedpaperset 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnQualifiedpaperset = QType::Cast($mixValue, QType::Boolean));
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
				case 'LoginObject':
					/**
					 * Sets the value for the Login object referenced by intLogin (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intLogin = null;
						$this->objLoginObject = null;
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
							throw new QCallerException('Unable to set an unsaved LoginObject for this SubjectTought');

						// Update Local Member Variables
						$this->objLoginObject = $mixValue;
						$this->intLogin = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RoleObject':
					/**
					 * Sets the value for the Role object referenced by intRole (Not Null)
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRole = null;
						$this->objRoleObject = null;
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
							throw new QCallerException('Unable to set an unsaved RoleObject for this SubjectTought');

						// Update Local Member Variables
						$this->objRoleObject = $mixValue;
						$this->intRole = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SubjectObject':
					/**
					 * Sets the value for the YearSubject object referenced by intSubject (Not Null)
					 * @param YearSubject $mixValue
					 * @return YearSubject
					 */
					if (is_null($mixValue)) {
						$this->intSubject = null;
						$this->objSubjectObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a YearSubject object
						try {
							$mixValue = QType::Cast($mixValue, 'YearSubject');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED YearSubject object
						if (is_null($mixValue->IdyearSubject))
							throw new QCallerException('Unable to set an unsaved SubjectObject for this SubjectTought');

						// Update Local Member Variables
						$this->objSubjectObject = $mixValue;
						$this->intSubject = $mixValue->IdyearSubject;

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
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this SubjectTought');

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



		
		///////////////////////////////
		// METHODS TO EXTRACT INFO ABOUT THE CLASS
		///////////////////////////////

		/**
		 * Static method to retrieve the Database object that owns this class.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetTableName() {
			return "subject_tought";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[SubjectTought::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="SubjectTought"><sequence>';
			$strToReturn .= '<element name="IdsubjectTought" type="xsd:int"/>';
			$strToReturn .= '<element name="LoginObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="RoleObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="SubjectObject" type="xsd1:YearSubject"/>';
			$strToReturn .= '<element name="Qualifiedpaperset" type="xsd:boolean"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('SubjectTought', $strComplexTypeArray)) {
				$strComplexTypeArray['SubjectTought'] = SubjectTought::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				YearSubject::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, SubjectTought::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new SubjectTought();
			if (property_exists($objSoapObject, 'IdsubjectTought'))
				$objToReturn->intIdsubjectTought = $objSoapObject->IdsubjectTought;
			if ((property_exists($objSoapObject, 'LoginObject')) &&
				($objSoapObject->LoginObject))
				$objToReturn->LoginObject = Login::GetObjectFromSoapObject($objSoapObject->LoginObject);
			if ((property_exists($objSoapObject, 'RoleObject')) &&
				($objSoapObject->RoleObject))
				$objToReturn->RoleObject = Role::GetObjectFromSoapObject($objSoapObject->RoleObject);
			if ((property_exists($objSoapObject, 'SubjectObject')) &&
				($objSoapObject->SubjectObject))
				$objToReturn->SubjectObject = YearSubject::GetObjectFromSoapObject($objSoapObject->SubjectObject);
			if (property_exists($objSoapObject, 'Qualifiedpaperset'))
				$objToReturn->blnQualifiedpaperset = $objSoapObject->Qualifiedpaperset;
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
				array_push($objArrayToReturn, SubjectTought::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLoginObject)
				$objObject->objLoginObject = Login::GetSoapObjectFromObject($objObject->objLoginObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLogin = null;
			if ($objObject->objRoleObject)
				$objObject->objRoleObject = Role::GetSoapObjectFromObject($objObject->objRoleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRole = null;
			if ($objObject->objSubjectObject)
				$objObject->objSubjectObject = YearSubject::GetSoapObjectFromObject($objObject->objSubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubject = null;
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
			$iArray['IdsubjectTought'] = $this->intIdsubjectTought;
			$iArray['Login'] = $this->intLogin;
			$iArray['Role'] = $this->intRole;
			$iArray['Subject'] = $this->intSubject;
			$iArray['Qualifiedpaperset'] = $this->blnQualifiedpaperset;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdsubjectTought ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdsubjectTought
     * @property-read QQNode $Login
     * @property-read QQNodeLogin $LoginObject
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     * @property-read QQNode $Subject
     * @property-read QQNodeYearSubject $SubjectObject
     * @property-read QQNode $Qualifiedpaperset
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeSubjectTought extends QQNode {
		protected $strTableName = 'subject_tought';
		protected $strPrimaryKey = 'idsubject_tought';
		protected $strClassName = 'SubjectTought';
		public function __get($strName) {
			switch ($strName) {
				case 'IdsubjectTought':
					return new QQNode('idsubject_tought', 'IdsubjectTought', 'Integer', $this);
				case 'Login':
					return new QQNode('login', 'Login', 'Integer', $this);
				case 'LoginObject':
					return new QQNodeLogin('login', 'LoginObject', 'Integer', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'Integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Integer', $this);
				case 'SubjectObject':
					return new QQNodeYearSubject('subject', 'SubjectObject', 'Integer', $this);
				case 'Qualifiedpaperset':
					return new QQNode('qualifiedpaperset', 'Qualifiedpaperset', 'Bit', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idsubject_tought', 'IdsubjectTought', 'Integer', $this);
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
     * @property-read QQNode $IdsubjectTought
     * @property-read QQNode $Login
     * @property-read QQNodeLogin $LoginObject
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     * @property-read QQNode $Subject
     * @property-read QQNodeYearSubject $SubjectObject
     * @property-read QQNode $Qualifiedpaperset
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeSubjectTought extends QQReverseReferenceNode {
		protected $strTableName = 'subject_tought';
		protected $strPrimaryKey = 'idsubject_tought';
		protected $strClassName = 'SubjectTought';
		public function __get($strName) {
			switch ($strName) {
				case 'IdsubjectTought':
					return new QQNode('idsubject_tought', 'IdsubjectTought', 'integer', $this);
				case 'Login':
					return new QQNode('login', 'Login', 'integer', $this);
				case 'LoginObject':
					return new QQNodeLogin('login', 'LoginObject', 'integer', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'integer', $this);
				case 'SubjectObject':
					return new QQNodeYearSubject('subject', 'SubjectObject', 'integer', $this);
				case 'Qualifiedpaperset':
					return new QQNode('qualifiedpaperset', 'Qualifiedpaperset', 'boolean', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idsubject_tought', 'IdsubjectTought', 'integer', $this);
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
