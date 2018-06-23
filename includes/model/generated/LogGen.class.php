<?php
	/**
	 * The abstract LogGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Log subclass which
	 * extends this LogGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Log class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idlog the value for intIdlog (Read-Only PK)
	 * @property string $Filename the value for strFilename (Not Null)
	 * @property QDateTime $Date the value for dttDate 
	 * @property string $Status the value for strStatus 
	 * @property integer $LogGrp the value for intLogGrp 
	 * @property integer $DataBy the value for intDataBy 
	 * @property integer $RefGrade the value for intRefGrade 
	 * @property LogGrp $LogGrpObject the value for the LogGrp object referenced by intLogGrp 
	 * @property Login $DataByObject the value for the Login object referenced by intDataBy 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class LogGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column log.idlog
		 * @var integer intIdlog
		 */
		protected $intIdlog;
		const IdlogDefault = null;


		/**
		 * Protected member variable that maps to the database column log.filename
		 * @var string strFilename
		 */
		protected $strFilename;
		const FilenameMaxLength = 255;
		const FilenameDefault = null;


		/**
		 * Protected member variable that maps to the database column log.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column log.status
		 * @var string strStatus
		 */
		protected $strStatus;
		const StatusMaxLength = 255;
		const StatusDefault = null;


		/**
		 * Protected member variable that maps to the database column log.log_grp
		 * @var integer intLogGrp
		 */
		protected $intLogGrp;
		const LogGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column log.data_by
		 * @var integer intDataBy
		 */
		protected $intDataBy;
		const DataByDefault = null;


		/**
		 * Protected member variable that maps to the database column log.ref_grade
		 * @var integer intRefGrade
		 */
		protected $intRefGrade;
		const RefGradeDefault = null;


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
		 * in the database column log.log_grp.
		 *
		 * NOTE: Always use the LogGrpObject property getter to correctly retrieve this LogGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LogGrp objLogGrpObject
		 */
		protected $objLogGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column log.data_by.
		 *
		 * NOTE: Always use the DataByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objDataByObject
		 */
		protected $objDataByObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdlog = Log::IdlogDefault;
			$this->strFilename = Log::FilenameDefault;
			$this->dttDate = (Log::DateDefault === null)?null:new QDateTime(Log::DateDefault);
			$this->strStatus = Log::StatusDefault;
			$this->intLogGrp = Log::LogGrpDefault;
			$this->intDataBy = Log::DataByDefault;
			$this->intRefGrade = Log::RefGradeDefault;
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
		 * Load a Log from PK Info
		 * @param integer $intIdlog
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Log
		 */
		public static function Load($intIdlog, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Log', $intIdlog);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Log::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Log()->Idlog, $intIdlog)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Logs
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Log[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Log::QueryArray to perform the LoadAll query
			try {
				return Log::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Logs
		 * @return int
		 */
		public static function CountAll() {
			// Call Log::QueryCount to perform the CountAll query
			return Log::QueryCount(QQ::All());
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
			$objDatabase = Log::GetDatabase();

			// Create/Build out the QueryBuilder object with Log-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'log');

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
				Log::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('log');

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
		 * Static Qcubed Query method to query for a single Log object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Log the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Log::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Log object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Log::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Log::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Log objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Log[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Log::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Log::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Log::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Log objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Log::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Log::GetDatabase();

			$strQuery = Log::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/log', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Log::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Log
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'log';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idlog', $strAliasPrefix . 'idlog');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idlog', $strAliasPrefix . 'idlog');
			    $objBuilder->AddSelectItem($strTableName, 'filename', $strAliasPrefix . 'filename');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'status', $strAliasPrefix . 'status');
			    $objBuilder->AddSelectItem($strTableName, 'log_grp', $strAliasPrefix . 'log_grp');
			    $objBuilder->AddSelectItem($strTableName, 'data_by', $strAliasPrefix . 'data_by');
			    $objBuilder->AddSelectItem($strTableName, 'ref_grade', $strAliasPrefix . 'ref_grade');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Log from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Log::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Log
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Log object
			$objToReturn = new Log();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idlog';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdlog = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'filename';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFilename = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'log_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLogGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'data_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDataBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ref_grade';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefGrade = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idlog != $objPreviousItem->Idlog) {
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
				$strAliasPrefix = 'log__';

			// Check for LogGrpObject Early Binding
			$strAlias = $strAliasPrefix . 'log_grp__idlog_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLogGrpObject = LogGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'log_grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DataByObject Early Binding
			$strAlias = $strAliasPrefix . 'data_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDataByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'data_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Logs from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Log[]
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
					$objItem = Log::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Log::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Log object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Log next row resulting from the query
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
			return Log::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Log object,
		 * by Idlog Index(es)
		 * @param integer $intIdlog
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Log
		*/
		public static function LoadByIdlog($intIdlog, $objOptionalClauses = null) {
			return Log::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Log()->Idlog, $intIdlog)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Log objects,
		 * by LogGrp Index(es)
		 * @param integer $intLogGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Log[]
		*/
		public static function LoadArrayByLogGrp($intLogGrp, $objOptionalClauses = null) {
			// Call Log::QueryArray to perform the LoadArrayByLogGrp query
			try {
				return Log::QueryArray(
					QQ::Equal(QQN::Log()->LogGrp, $intLogGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Logs
		 * by LogGrp Index(es)
		 * @param integer $intLogGrp
		 * @return int
		*/
		public static function CountByLogGrp($intLogGrp) {
			// Call Log::QueryCount to perform the CountByLogGrp query
			return Log::QueryCount(
				QQ::Equal(QQN::Log()->LogGrp, $intLogGrp)
			);
		}

		/**
		 * Load an array of Log objects,
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Log[]
		*/
		public static function LoadArrayByDataBy($intDataBy, $objOptionalClauses = null) {
			// Call Log::QueryArray to perform the LoadArrayByDataBy query
			try {
				return Log::QueryArray(
					QQ::Equal(QQN::Log()->DataBy, $intDataBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Logs
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @return int
		*/
		public static function CountByDataBy($intDataBy) {
			// Call Log::QueryCount to perform the CountByDataBy query
			return Log::QueryCount(
				QQ::Equal(QQN::Log()->DataBy, $intDataBy)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Log
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Log::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `log` (
							`filename`,
							`date`,
							`status`,
							`log_grp`,
							`data_by`,
							`ref_grade`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strFilename) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->strStatus) . ',
							' . $objDatabase->SqlVariable($this->intLogGrp) . ',
							' . $objDatabase->SqlVariable($this->intDataBy) . ',
							' . $objDatabase->SqlVariable($this->intRefGrade) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdlog = $objDatabase->InsertId('log', 'idlog');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`log`
						SET
							`filename` = ' . $objDatabase->SqlVariable($this->strFilename) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`status` = ' . $objDatabase->SqlVariable($this->strStatus) . ',
							`log_grp` = ' . $objDatabase->SqlVariable($this->intLogGrp) . ',
							`data_by` = ' . $objDatabase->SqlVariable($this->intDataBy) . ',
							`ref_grade` = ' . $objDatabase->SqlVariable($this->intRefGrade) . '
						WHERE
							`idlog` = ' . $objDatabase->SqlVariable($this->intIdlog) . '
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
		 * Delete this Log
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdlog)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Log with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Log::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`log`
				WHERE
					`idlog` = ' . $objDatabase->SqlVariable($this->intIdlog) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Log ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Log', $this->intIdlog);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Logs
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Log::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`log`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate log table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Log::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `log`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Log from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Log object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Log::Load($this->intIdlog);

			// Update $this's local variables to match
			$this->strFilename = $objReloaded->strFilename;
			$this->dttDate = $objReloaded->dttDate;
			$this->strStatus = $objReloaded->strStatus;
			$this->LogGrp = $objReloaded->LogGrp;
			$this->DataBy = $objReloaded->DataBy;
			$this->intRefGrade = $objReloaded->intRefGrade;
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
				case 'Idlog':
					/**
					 * Gets the value for intIdlog (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdlog;

				case 'Filename':
					/**
					 * Gets the value for strFilename (Not Null)
					 * @return string
					 */
					return $this->strFilename;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Status':
					/**
					 * Gets the value for strStatus 
					 * @return string
					 */
					return $this->strStatus;

				case 'LogGrp':
					/**
					 * Gets the value for intLogGrp 
					 * @return integer
					 */
					return $this->intLogGrp;

				case 'DataBy':
					/**
					 * Gets the value for intDataBy 
					 * @return integer
					 */
					return $this->intDataBy;

				case 'RefGrade':
					/**
					 * Gets the value for intRefGrade 
					 * @return integer
					 */
					return $this->intRefGrade;


				///////////////////
				// Member Objects
				///////////////////
				case 'LogGrpObject':
					/**
					 * Gets the value for the LogGrp object referenced by intLogGrp 
					 * @return LogGrp
					 */
					try {
						if ((!$this->objLogGrpObject) && (!is_null($this->intLogGrp)))
							$this->objLogGrpObject = LogGrp::Load($this->intLogGrp);
						return $this->objLogGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DataByObject':
					/**
					 * Gets the value for the Login object referenced by intDataBy 
					 * @return Login
					 */
					try {
						if ((!$this->objDataByObject) && (!is_null($this->intDataBy)))
							$this->objDataByObject = Login::Load($this->intDataBy);
						return $this->objDataByObject;
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
				case 'Filename':
					/**
					 * Sets the value for strFilename (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFilename = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for dttDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Status':
					/**
					 * Sets the value for strStatus 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strStatus = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LogGrp':
					/**
					 * Sets the value for intLogGrp 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objLogGrpObject = null;
						return ($this->intLogGrp = QType::Cast($mixValue, QType::Integer));
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

				case 'RefGrade':
					/**
					 * Sets the value for intRefGrade 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intRefGrade = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'LogGrpObject':
					/**
					 * Sets the value for the LogGrp object referenced by intLogGrp 
					 * @param LogGrp $mixValue
					 * @return LogGrp
					 */
					if (is_null($mixValue)) {
						$this->intLogGrp = null;
						$this->objLogGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a LogGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'LogGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED LogGrp object
						if (is_null($mixValue->IdlogGrp))
							throw new QCallerException('Unable to set an unsaved LogGrpObject for this Log');

						// Update Local Member Variables
						$this->objLogGrpObject = $mixValue;
						$this->intLogGrp = $mixValue->IdlogGrp;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataByObject':
					/**
					 * Sets the value for the Login object referenced by intDataBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intDataBy = null;
						$this->objDataByObject = null;
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
							throw new QCallerException('Unable to set an unsaved DataByObject for this Log');

						// Update Local Member Variables
						$this->objDataByObject = $mixValue;
						$this->intDataBy = $mixValue->Idlogin;

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
			return "log";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Log::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Log"><sequence>';
			$strToReturn .= '<element name="Idlog" type="xsd:int"/>';
			$strToReturn .= '<element name="Filename" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Status" type="xsd:string"/>';
			$strToReturn .= '<element name="LogGrpObject" type="xsd1:LogGrp"/>';
			$strToReturn .= '<element name="DataByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="RefGrade" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Log', $strComplexTypeArray)) {
				$strComplexTypeArray['Log'] = Log::GetSoapComplexTypeXml();
				LogGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Log::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Log();
			if (property_exists($objSoapObject, 'Idlog'))
				$objToReturn->intIdlog = $objSoapObject->Idlog;
			if (property_exists($objSoapObject, 'Filename'))
				$objToReturn->strFilename = $objSoapObject->Filename;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'Status'))
				$objToReturn->strStatus = $objSoapObject->Status;
			if ((property_exists($objSoapObject, 'LogGrpObject')) &&
				($objSoapObject->LogGrpObject))
				$objToReturn->LogGrpObject = LogGrp::GetObjectFromSoapObject($objSoapObject->LogGrpObject);
			if ((property_exists($objSoapObject, 'DataByObject')) &&
				($objSoapObject->DataByObject))
				$objToReturn->DataByObject = Login::GetObjectFromSoapObject($objSoapObject->DataByObject);
			if (property_exists($objSoapObject, 'RefGrade'))
				$objToReturn->intRefGrade = $objSoapObject->RefGrade;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Log::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objLogGrpObject)
				$objObject->objLogGrpObject = LogGrp::GetSoapObjectFromObject($objObject->objLogGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLogGrp = null;
			if ($objObject->objDataByObject)
				$objObject->objDataByObject = Login::GetSoapObjectFromObject($objObject->objDataByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDataBy = null;
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
			$iArray['Idlog'] = $this->intIdlog;
			$iArray['Filename'] = $this->strFilename;
			$iArray['Date'] = $this->dttDate;
			$iArray['Status'] = $this->strStatus;
			$iArray['LogGrp'] = $this->intLogGrp;
			$iArray['DataBy'] = $this->intDataBy;
			$iArray['RefGrade'] = $this->intRefGrade;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdlog ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idlog
     * @property-read QQNode $Filename
     * @property-read QQNode $Date
     * @property-read QQNode $Status
     * @property-read QQNode $LogGrp
     * @property-read QQNodeLogGrp $LogGrpObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLogin $DataByObject
     * @property-read QQNode $RefGrade
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeLog extends QQNode {
		protected $strTableName = 'log';
		protected $strPrimaryKey = 'idlog';
		protected $strClassName = 'Log';
		public function __get($strName) {
			switch ($strName) {
				case 'Idlog':
					return new QQNode('idlog', 'Idlog', 'Integer', $this);
				case 'Filename':
					return new QQNode('filename', 'Filename', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'VarChar', $this);
				case 'LogGrp':
					return new QQNode('log_grp', 'LogGrp', 'Integer', $this);
				case 'LogGrpObject':
					return new QQNodeLogGrp('log_grp', 'LogGrpObject', 'Integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'Integer', $this);
				case 'DataByObject':
					return new QQNodeLogin('data_by', 'DataByObject', 'Integer', $this);
				case 'RefGrade':
					return new QQNode('ref_grade', 'RefGrade', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idlog', 'Idlog', 'Integer', $this);
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
     * @property-read QQNode $Idlog
     * @property-read QQNode $Filename
     * @property-read QQNode $Date
     * @property-read QQNode $Status
     * @property-read QQNode $LogGrp
     * @property-read QQNodeLogGrp $LogGrpObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLogin $DataByObject
     * @property-read QQNode $RefGrade
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeLog extends QQReverseReferenceNode {
		protected $strTableName = 'log';
		protected $strPrimaryKey = 'idlog';
		protected $strClassName = 'Log';
		public function __get($strName) {
			switch ($strName) {
				case 'Idlog':
					return new QQNode('idlog', 'Idlog', 'integer', $this);
				case 'Filename':
					return new QQNode('filename', 'Filename', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'string', $this);
				case 'LogGrp':
					return new QQNode('log_grp', 'LogGrp', 'integer', $this);
				case 'LogGrpObject':
					return new QQNodeLogGrp('log_grp', 'LogGrpObject', 'integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'integer', $this);
				case 'DataByObject':
					return new QQNodeLogin('data_by', 'DataByObject', 'integer', $this);
				case 'RefGrade':
					return new QQNode('ref_grade', 'RefGrade', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idlog', 'Idlog', 'integer', $this);
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
