<?php
	/**
	 * The abstract TempTransferGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TempTransfer subclass which
	 * extends this TempTransferGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TempTransfer class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdtempTransfer the value for intIdtempTransfer (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate 
	 * @property integer $IddeptTransfer the value for intIddeptTransfer (Not Null)
	 * @property integer $FromDept the value for intFromDept 
	 * @property integer $ToDept the value for intToDept 
	 * @property integer $ReturnBy the value for intReturnBy 
	 * @property QDateTime $ReturnDate the value for dttReturnDate 
	 * @property DeptTransfer $IddeptTransferObject the value for the DeptTransfer object referenced by intIddeptTransfer (Not Null)
	 * @property Role $FromDeptObject the value for the Role object referenced by intFromDept 
	 * @property Role $ToDeptObject the value for the Role object referenced by intToDept 
	 * @property Login $ReturnByObject the value for the Login object referenced by intReturnBy 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TempTransferGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column temp_transfer.idtemp_transfer
		 * @var integer intIdtempTransfer
		 */
		protected $intIdtempTransfer;
		const IdtempTransferDefault = null;


		/**
		 * Protected member variable that maps to the database column temp_transfer.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column temp_transfer.iddept_transfer
		 * @var integer intIddeptTransfer
		 */
		protected $intIddeptTransfer;
		const IddeptTransferDefault = null;


		/**
		 * Protected member variable that maps to the database column temp_transfer.from_dept
		 * @var integer intFromDept
		 */
		protected $intFromDept;
		const FromDeptDefault = null;


		/**
		 * Protected member variable that maps to the database column temp_transfer.to_dept
		 * @var integer intToDept
		 */
		protected $intToDept;
		const ToDeptDefault = null;


		/**
		 * Protected member variable that maps to the database column temp_transfer.return_by
		 * @var integer intReturnBy
		 */
		protected $intReturnBy;
		const ReturnByDefault = null;


		/**
		 * Protected member variable that maps to the database column temp_transfer.return_date
		 * @var QDateTime dttReturnDate
		 */
		protected $dttReturnDate;
		const ReturnDateDefault = null;


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
		 * in the database column temp_transfer.iddept_transfer.
		 *
		 * NOTE: Always use the IddeptTransferObject property getter to correctly retrieve this DeptTransfer object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DeptTransfer objIddeptTransferObject
		 */
		protected $objIddeptTransferObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column temp_transfer.from_dept.
		 *
		 * NOTE: Always use the FromDeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objFromDeptObject
		 */
		protected $objFromDeptObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column temp_transfer.to_dept.
		 *
		 * NOTE: Always use the ToDeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objToDeptObject
		 */
		protected $objToDeptObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column temp_transfer.return_by.
		 *
		 * NOTE: Always use the ReturnByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objReturnByObject
		 */
		protected $objReturnByObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdtempTransfer = TempTransfer::IdtempTransferDefault;
			$this->dttDate = (TempTransfer::DateDefault === null)?null:new QDateTime(TempTransfer::DateDefault);
			$this->intIddeptTransfer = TempTransfer::IddeptTransferDefault;
			$this->intFromDept = TempTransfer::FromDeptDefault;
			$this->intToDept = TempTransfer::ToDeptDefault;
			$this->intReturnBy = TempTransfer::ReturnByDefault;
			$this->dttReturnDate = (TempTransfer::ReturnDateDefault === null)?null:new QDateTime(TempTransfer::ReturnDateDefault);
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
		 * Load a TempTransfer from PK Info
		 * @param integer $intIdtempTransfer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer
		 */
		public static function Load($intIdtempTransfer, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TempTransfer', $intIdtempTransfer);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = TempTransfer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TempTransfer()->IdtempTransfer, $intIdtempTransfer)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all TempTransfers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TempTransfer::QueryArray to perform the LoadAll query
			try {
				return TempTransfer::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TempTransfers
		 * @return int
		 */
		public static function CountAll() {
			// Call TempTransfer::QueryCount to perform the CountAll query
			return TempTransfer::QueryCount(QQ::All());
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
			$objDatabase = TempTransfer::GetDatabase();

			// Create/Build out the QueryBuilder object with TempTransfer-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'temp_transfer');

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
				TempTransfer::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('temp_transfer');

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
		 * Static Qcubed Query method to query for a single TempTransfer object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TempTransfer the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TempTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new TempTransfer object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TempTransfer::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TempTransfer::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of TempTransfer objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TempTransfer[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TempTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TempTransfer::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = TempTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of TempTransfer objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TempTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TempTransfer::GetDatabase();

			$strQuery = TempTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/temptransfer', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = TempTransfer::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TempTransfer
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'temp_transfer';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idtemp_transfer', $strAliasPrefix . 'idtemp_transfer');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idtemp_transfer', $strAliasPrefix . 'idtemp_transfer');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'iddept_transfer', $strAliasPrefix . 'iddept_transfer');
			    $objBuilder->AddSelectItem($strTableName, 'from_dept', $strAliasPrefix . 'from_dept');
			    $objBuilder->AddSelectItem($strTableName, 'to_dept', $strAliasPrefix . 'to_dept');
			    $objBuilder->AddSelectItem($strTableName, 'return_by', $strAliasPrefix . 'return_by');
			    $objBuilder->AddSelectItem($strTableName, 'return_date', $strAliasPrefix . 'return_date');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TempTransfer from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TempTransfer::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TempTransfer
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the TempTransfer object
			$objToReturn = new TempTransfer();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idtemp_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdtempTransfer = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIddeptTransfer = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'from_dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFromDept = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'to_dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intToDept = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'return_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intReturnBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'return_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttReturnDate = $objDbRow->GetColumn($strAliasName, 'DateTime');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdtempTransfer != $objPreviousItem->IdtempTransfer) {
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
				$strAliasPrefix = 'temp_transfer__';

			// Check for IddeptTransferObject Early Binding
			$strAlias = $strAliasPrefix . 'iddept_transfer__iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIddeptTransferObject = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iddept_transfer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FromDeptObject Early Binding
			$strAlias = $strAliasPrefix . 'from_dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFromDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'from_dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ToDeptObject Early Binding
			$strAlias = $strAliasPrefix . 'to_dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objToDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'to_dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ReturnByObject Early Binding
			$strAlias = $strAliasPrefix . 'return_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objReturnByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'return_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of TempTransfers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TempTransfer[]
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
					$objItem = TempTransfer::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TempTransfer::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single TempTransfer object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TempTransfer next row resulting from the query
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
			return TempTransfer::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single TempTransfer object,
		 * by IdtempTransfer Index(es)
		 * @param integer $intIdtempTransfer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer
		*/
		public static function LoadByIdtempTransfer($intIdtempTransfer, $objOptionalClauses = null) {
			return TempTransfer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TempTransfer()->IdtempTransfer, $intIdtempTransfer)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of TempTransfer objects,
		 * by IddeptTransfer Index(es)
		 * @param integer $intIddeptTransfer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public static function LoadArrayByIddeptTransfer($intIddeptTransfer, $objOptionalClauses = null) {
			// Call TempTransfer::QueryArray to perform the LoadArrayByIddeptTransfer query
			try {
				return TempTransfer::QueryArray(
					QQ::Equal(QQN::TempTransfer()->IddeptTransfer, $intIddeptTransfer),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TempTransfers
		 * by IddeptTransfer Index(es)
		 * @param integer $intIddeptTransfer
		 * @return int
		*/
		public static function CountByIddeptTransfer($intIddeptTransfer) {
			// Call TempTransfer::QueryCount to perform the CountByIddeptTransfer query
			return TempTransfer::QueryCount(
				QQ::Equal(QQN::TempTransfer()->IddeptTransfer, $intIddeptTransfer)
			);
		}

		/**
		 * Load an array of TempTransfer objects,
		 * by FromDept Index(es)
		 * @param integer $intFromDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public static function LoadArrayByFromDept($intFromDept, $objOptionalClauses = null) {
			// Call TempTransfer::QueryArray to perform the LoadArrayByFromDept query
			try {
				return TempTransfer::QueryArray(
					QQ::Equal(QQN::TempTransfer()->FromDept, $intFromDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TempTransfers
		 * by FromDept Index(es)
		 * @param integer $intFromDept
		 * @return int
		*/
		public static function CountByFromDept($intFromDept) {
			// Call TempTransfer::QueryCount to perform the CountByFromDept query
			return TempTransfer::QueryCount(
				QQ::Equal(QQN::TempTransfer()->FromDept, $intFromDept)
			);
		}

		/**
		 * Load an array of TempTransfer objects,
		 * by ToDept Index(es)
		 * @param integer $intToDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public static function LoadArrayByToDept($intToDept, $objOptionalClauses = null) {
			// Call TempTransfer::QueryArray to perform the LoadArrayByToDept query
			try {
				return TempTransfer::QueryArray(
					QQ::Equal(QQN::TempTransfer()->ToDept, $intToDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TempTransfers
		 * by ToDept Index(es)
		 * @param integer $intToDept
		 * @return int
		*/
		public static function CountByToDept($intToDept) {
			// Call TempTransfer::QueryCount to perform the CountByToDept query
			return TempTransfer::QueryCount(
				QQ::Equal(QQN::TempTransfer()->ToDept, $intToDept)
			);
		}

		/**
		 * Load an array of TempTransfer objects,
		 * by ReturnBy Index(es)
		 * @param integer $intReturnBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public static function LoadArrayByReturnBy($intReturnBy, $objOptionalClauses = null) {
			// Call TempTransfer::QueryArray to perform the LoadArrayByReturnBy query
			try {
				return TempTransfer::QueryArray(
					QQ::Equal(QQN::TempTransfer()->ReturnBy, $intReturnBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TempTransfers
		 * by ReturnBy Index(es)
		 * @param integer $intReturnBy
		 * @return int
		*/
		public static function CountByReturnBy($intReturnBy) {
			// Call TempTransfer::QueryCount to perform the CountByReturnBy query
			return TempTransfer::QueryCount(
				QQ::Equal(QQN::TempTransfer()->ReturnBy, $intReturnBy)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this TempTransfer
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TempTransfer::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `temp_transfer` (
							`date`,
							`iddept_transfer`,
							`from_dept`,
							`to_dept`,
							`return_by`,
							`return_date`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intIddeptTransfer) . ',
							' . $objDatabase->SqlVariable($this->intFromDept) . ',
							' . $objDatabase->SqlVariable($this->intToDept) . ',
							' . $objDatabase->SqlVariable($this->intReturnBy) . ',
							' . $objDatabase->SqlVariable($this->dttReturnDate) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdtempTransfer = $objDatabase->InsertId('temp_transfer', 'idtemp_transfer');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`temp_transfer`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . ',
							`from_dept` = ' . $objDatabase->SqlVariable($this->intFromDept) . ',
							`to_dept` = ' . $objDatabase->SqlVariable($this->intToDept) . ',
							`return_by` = ' . $objDatabase->SqlVariable($this->intReturnBy) . ',
							`return_date` = ' . $objDatabase->SqlVariable($this->dttReturnDate) . '
						WHERE
							`idtemp_transfer` = ' . $objDatabase->SqlVariable($this->intIdtempTransfer) . '
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
		 * Delete this TempTransfer
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TempTransfer with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TempTransfer::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($this->intIdtempTransfer) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this TempTransfer ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TempTransfer', $this->intIdtempTransfer);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all TempTransfers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TempTransfer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate temp_transfer table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TempTransfer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `temp_transfer`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this TempTransfer from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TempTransfer object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = TempTransfer::Load($this->intIdtempTransfer);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->IddeptTransfer = $objReloaded->IddeptTransfer;
			$this->FromDept = $objReloaded->FromDept;
			$this->ToDept = $objReloaded->ToDept;
			$this->ReturnBy = $objReloaded->ReturnBy;
			$this->dttReturnDate = $objReloaded->dttReturnDate;
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
				case 'IdtempTransfer':
					/**
					 * Gets the value for intIdtempTransfer (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdtempTransfer;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'IddeptTransfer':
					/**
					 * Gets the value for intIddeptTransfer (Not Null)
					 * @return integer
					 */
					return $this->intIddeptTransfer;

				case 'FromDept':
					/**
					 * Gets the value for intFromDept 
					 * @return integer
					 */
					return $this->intFromDept;

				case 'ToDept':
					/**
					 * Gets the value for intToDept 
					 * @return integer
					 */
					return $this->intToDept;

				case 'ReturnBy':
					/**
					 * Gets the value for intReturnBy 
					 * @return integer
					 */
					return $this->intReturnBy;

				case 'ReturnDate':
					/**
					 * Gets the value for dttReturnDate 
					 * @return QDateTime
					 */
					return $this->dttReturnDate;


				///////////////////
				// Member Objects
				///////////////////
				case 'IddeptTransferObject':
					/**
					 * Gets the value for the DeptTransfer object referenced by intIddeptTransfer (Not Null)
					 * @return DeptTransfer
					 */
					try {
						if ((!$this->objIddeptTransferObject) && (!is_null($this->intIddeptTransfer)))
							$this->objIddeptTransferObject = DeptTransfer::Load($this->intIddeptTransfer);
						return $this->objIddeptTransferObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromDeptObject':
					/**
					 * Gets the value for the Role object referenced by intFromDept 
					 * @return Role
					 */
					try {
						if ((!$this->objFromDeptObject) && (!is_null($this->intFromDept)))
							$this->objFromDeptObject = Role::Load($this->intFromDept);
						return $this->objFromDeptObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToDeptObject':
					/**
					 * Gets the value for the Role object referenced by intToDept 
					 * @return Role
					 */
					try {
						if ((!$this->objToDeptObject) && (!is_null($this->intToDept)))
							$this->objToDeptObject = Role::Load($this->intToDept);
						return $this->objToDeptObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReturnByObject':
					/**
					 * Gets the value for the Login object referenced by intReturnBy 
					 * @return Login
					 */
					try {
						if ((!$this->objReturnByObject) && (!is_null($this->intReturnBy)))
							$this->objReturnByObject = Login::Load($this->intReturnBy);
						return $this->objReturnByObject;
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

				case 'IddeptTransfer':
					/**
					 * Sets the value for intIddeptTransfer (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIddeptTransferObject = null;
						return ($this->intIddeptTransfer = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromDept':
					/**
					 * Sets the value for intFromDept 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFromDeptObject = null;
						return ($this->intFromDept = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToDept':
					/**
					 * Sets the value for intToDept 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objToDeptObject = null;
						return ($this->intToDept = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReturnBy':
					/**
					 * Sets the value for intReturnBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objReturnByObject = null;
						return ($this->intReturnBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReturnDate':
					/**
					 * Sets the value for dttReturnDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttReturnDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IddeptTransferObject':
					/**
					 * Sets the value for the DeptTransfer object referenced by intIddeptTransfer (Not Null)
					 * @param DeptTransfer $mixValue
					 * @return DeptTransfer
					 */
					if (is_null($mixValue)) {
						$this->intIddeptTransfer = null;
						$this->objIddeptTransferObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DeptTransfer object
						try {
							$mixValue = QType::Cast($mixValue, 'DeptTransfer');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DeptTransfer object
						if (is_null($mixValue->IddeptTransfer))
							throw new QCallerException('Unable to set an unsaved IddeptTransferObject for this TempTransfer');

						// Update Local Member Variables
						$this->objIddeptTransferObject = $mixValue;
						$this->intIddeptTransfer = $mixValue->IddeptTransfer;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FromDeptObject':
					/**
					 * Sets the value for the Role object referenced by intFromDept 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intFromDept = null;
						$this->objFromDeptObject = null;
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
							throw new QCallerException('Unable to set an unsaved FromDeptObject for this TempTransfer');

						// Update Local Member Variables
						$this->objFromDeptObject = $mixValue;
						$this->intFromDept = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ToDeptObject':
					/**
					 * Sets the value for the Role object referenced by intToDept 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intToDept = null;
						$this->objToDeptObject = null;
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
							throw new QCallerException('Unable to set an unsaved ToDeptObject for this TempTransfer');

						// Update Local Member Variables
						$this->objToDeptObject = $mixValue;
						$this->intToDept = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ReturnByObject':
					/**
					 * Sets the value for the Login object referenced by intReturnBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intReturnBy = null;
						$this->objReturnByObject = null;
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
							throw new QCallerException('Unable to set an unsaved ReturnByObject for this TempTransfer');

						// Update Local Member Variables
						$this->objReturnByObject = $mixValue;
						$this->intReturnBy = $mixValue->Idlogin;

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
			return "temp_transfer";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[TempTransfer::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="TempTransfer"><sequence>';
			$strToReturn .= '<element name="IdtempTransfer" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="IddeptTransferObject" type="xsd1:DeptTransfer"/>';
			$strToReturn .= '<element name="FromDeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="ToDeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="ReturnByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="ReturnDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TempTransfer', $strComplexTypeArray)) {
				$strComplexTypeArray['TempTransfer'] = TempTransfer::GetSoapComplexTypeXml();
				DeptTransfer::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TempTransfer::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TempTransfer();
			if (property_exists($objSoapObject, 'IdtempTransfer'))
				$objToReturn->intIdtempTransfer = $objSoapObject->IdtempTransfer;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'IddeptTransferObject')) &&
				($objSoapObject->IddeptTransferObject))
				$objToReturn->IddeptTransferObject = DeptTransfer::GetObjectFromSoapObject($objSoapObject->IddeptTransferObject);
			if ((property_exists($objSoapObject, 'FromDeptObject')) &&
				($objSoapObject->FromDeptObject))
				$objToReturn->FromDeptObject = Role::GetObjectFromSoapObject($objSoapObject->FromDeptObject);
			if ((property_exists($objSoapObject, 'ToDeptObject')) &&
				($objSoapObject->ToDeptObject))
				$objToReturn->ToDeptObject = Role::GetObjectFromSoapObject($objSoapObject->ToDeptObject);
			if ((property_exists($objSoapObject, 'ReturnByObject')) &&
				($objSoapObject->ReturnByObject))
				$objToReturn->ReturnByObject = Login::GetObjectFromSoapObject($objSoapObject->ReturnByObject);
			if (property_exists($objSoapObject, 'ReturnDate'))
				$objToReturn->dttReturnDate = new QDateTime($objSoapObject->ReturnDate);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TempTransfer::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objIddeptTransferObject)
				$objObject->objIddeptTransferObject = DeptTransfer::GetSoapObjectFromObject($objObject->objIddeptTransferObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIddeptTransfer = null;
			if ($objObject->objFromDeptObject)
				$objObject->objFromDeptObject = Role::GetSoapObjectFromObject($objObject->objFromDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFromDept = null;
			if ($objObject->objToDeptObject)
				$objObject->objToDeptObject = Role::GetSoapObjectFromObject($objObject->objToDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intToDept = null;
			if ($objObject->objReturnByObject)
				$objObject->objReturnByObject = Login::GetSoapObjectFromObject($objObject->objReturnByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intReturnBy = null;
			if ($objObject->dttReturnDate)
				$objObject->dttReturnDate = $objObject->dttReturnDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdtempTransfer'] = $this->intIdtempTransfer;
			$iArray['Date'] = $this->dttDate;
			$iArray['IddeptTransfer'] = $this->intIddeptTransfer;
			$iArray['FromDept'] = $this->intFromDept;
			$iArray['ToDept'] = $this->intToDept;
			$iArray['ReturnBy'] = $this->intReturnBy;
			$iArray['ReturnDate'] = $this->dttReturnDate;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdtempTransfer ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdtempTransfer
     * @property-read QQNode $Date
     * @property-read QQNode $IddeptTransfer
     * @property-read QQNodeDeptTransfer $IddeptTransferObject
     * @property-read QQNode $FromDept
     * @property-read QQNodeRole $FromDeptObject
     * @property-read QQNode $ToDept
     * @property-read QQNodeRole $ToDeptObject
     * @property-read QQNode $ReturnBy
     * @property-read QQNodeLogin $ReturnByObject
     * @property-read QQNode $ReturnDate
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTempTransfer extends QQNode {
		protected $strTableName = 'temp_transfer';
		protected $strPrimaryKey = 'idtemp_transfer';
		protected $strClassName = 'TempTransfer';
		public function __get($strName) {
			switch ($strName) {
				case 'IdtempTransfer':
					return new QQNode('idtemp_transfer', 'IdtempTransfer', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'IddeptTransfer':
					return new QQNode('iddept_transfer', 'IddeptTransfer', 'Integer', $this);
				case 'IddeptTransferObject':
					return new QQNodeDeptTransfer('iddept_transfer', 'IddeptTransferObject', 'Integer', $this);
				case 'FromDept':
					return new QQNode('from_dept', 'FromDept', 'Integer', $this);
				case 'FromDeptObject':
					return new QQNodeRole('from_dept', 'FromDeptObject', 'Integer', $this);
				case 'ToDept':
					return new QQNode('to_dept', 'ToDept', 'Integer', $this);
				case 'ToDeptObject':
					return new QQNodeRole('to_dept', 'ToDeptObject', 'Integer', $this);
				case 'ReturnBy':
					return new QQNode('return_by', 'ReturnBy', 'Integer', $this);
				case 'ReturnByObject':
					return new QQNodeLogin('return_by', 'ReturnByObject', 'Integer', $this);
				case 'ReturnDate':
					return new QQNode('return_date', 'ReturnDate', 'DateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtemp_transfer', 'IdtempTransfer', 'Integer', $this);
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
     * @property-read QQNode $IdtempTransfer
     * @property-read QQNode $Date
     * @property-read QQNode $IddeptTransfer
     * @property-read QQNodeDeptTransfer $IddeptTransferObject
     * @property-read QQNode $FromDept
     * @property-read QQNodeRole $FromDeptObject
     * @property-read QQNode $ToDept
     * @property-read QQNodeRole $ToDeptObject
     * @property-read QQNode $ReturnBy
     * @property-read QQNodeLogin $ReturnByObject
     * @property-read QQNode $ReturnDate
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTempTransfer extends QQReverseReferenceNode {
		protected $strTableName = 'temp_transfer';
		protected $strPrimaryKey = 'idtemp_transfer';
		protected $strClassName = 'TempTransfer';
		public function __get($strName) {
			switch ($strName) {
				case 'IdtempTransfer':
					return new QQNode('idtemp_transfer', 'IdtempTransfer', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'IddeptTransfer':
					return new QQNode('iddept_transfer', 'IddeptTransfer', 'integer', $this);
				case 'IddeptTransferObject':
					return new QQNodeDeptTransfer('iddept_transfer', 'IddeptTransferObject', 'integer', $this);
				case 'FromDept':
					return new QQNode('from_dept', 'FromDept', 'integer', $this);
				case 'FromDeptObject':
					return new QQNodeRole('from_dept', 'FromDeptObject', 'integer', $this);
				case 'ToDept':
					return new QQNode('to_dept', 'ToDept', 'integer', $this);
				case 'ToDeptObject':
					return new QQNodeRole('to_dept', 'ToDeptObject', 'integer', $this);
				case 'ReturnBy':
					return new QQNode('return_by', 'ReturnBy', 'integer', $this);
				case 'ReturnByObject':
					return new QQNodeLogin('return_by', 'ReturnByObject', 'integer', $this);
				case 'ReturnDate':
					return new QQNode('return_date', 'ReturnDate', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtemp_transfer', 'IdtempTransfer', 'integer', $this);
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
