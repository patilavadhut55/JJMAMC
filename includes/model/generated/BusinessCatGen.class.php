<?php
	/**
	 * The abstract BusinessCatGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the BusinessCat subclass which
	 * extends this BusinessCatGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the BusinessCat class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdbusinessCat the value for intIdbusinessCat (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property-read Address $_AddressAsBusinessType the value for the private _objAddressAsBusinessType (Read-Only) if set due to an expansion on the address.business_type reverse relationship
	 * @property-read Address[] $_AddressAsBusinessTypeArray the value for the private _objAddressAsBusinessTypeArray (Read-Only) if set due to an ExpandAsArray on the address.business_type reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class BusinessCatGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column business_cat.idbusiness_cat
		 * @var integer intIdbusinessCat
		 */
		protected $intIdbusinessCat;
		const IdbusinessCatDefault = null;


		/**
		 * Protected member variable that maps to the database column business_cat.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsBusinessType object
		 * (of type Address), if this BusinessCat object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsBusinessType;
		 */
		private $_objAddressAsBusinessType;

		/**
		 * Private member variable that stores a reference to an array of AddressAsBusinessType objects
		 * (of type Address[]), if this BusinessCat object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsBusinessTypeArray;
		 */
		private $_objAddressAsBusinessTypeArray = null;

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
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdbusinessCat = BusinessCat::IdbusinessCatDefault;
			$this->strName = BusinessCat::NameDefault;
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
		 * Load a BusinessCat from PK Info
		 * @param integer $intIdbusinessCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BusinessCat
		 */
		public static function Load($intIdbusinessCat, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'BusinessCat', $intIdbusinessCat);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = BusinessCat::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::BusinessCat()->IdbusinessCat, $intIdbusinessCat)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all BusinessCats
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BusinessCat[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call BusinessCat::QueryArray to perform the LoadAll query
			try {
				return BusinessCat::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all BusinessCats
		 * @return int
		 */
		public static function CountAll() {
			// Call BusinessCat::QueryCount to perform the CountAll query
			return BusinessCat::QueryCount(QQ::All());
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
			$objDatabase = BusinessCat::GetDatabase();

			// Create/Build out the QueryBuilder object with BusinessCat-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'business_cat');

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
				BusinessCat::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('business_cat');

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
		 * Static Qcubed Query method to query for a single BusinessCat object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BusinessCat the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BusinessCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new BusinessCat object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = BusinessCat::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return BusinessCat::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of BusinessCat objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return BusinessCat[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BusinessCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return BusinessCat::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = BusinessCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of BusinessCat objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = BusinessCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = BusinessCat::GetDatabase();

			$strQuery = BusinessCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/businesscat', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = BusinessCat::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this BusinessCat
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'business_cat';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idbusiness_cat', $strAliasPrefix . 'idbusiness_cat');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idbusiness_cat', $strAliasPrefix . 'idbusiness_cat');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a BusinessCat from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this BusinessCat::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return BusinessCat
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idbusiness_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdbusinessCat == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'business_cat__';


						// Expanding reverse references: AddressAsBusinessType
						$strAlias = $strAliasPrefix . 'addressasbusinesstype__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsBusinessTypeArray)
								$objPreviousItem->_objAddressAsBusinessTypeArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsBusinessTypeArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsBusinessTypeArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasbusinesstype__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsBusinessTypeArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsBusinessTypeArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasbusinesstype__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'business_cat__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the BusinessCat object
			$objToReturn = new BusinessCat();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idbusiness_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdbusinessCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdbusinessCat != $objPreviousItem->IdbusinessCat) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsBusinessTypeArray);
					$cnt = count($objToReturn->_objAddressAsBusinessTypeArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsBusinessTypeArray, $objToReturn->_objAddressAsBusinessTypeArray)) {
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
				$strAliasPrefix = 'business_cat__';




			// Check for AddressAsBusinessType Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasbusinesstype__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsBusinessTypeArray)
				$objToReturn->_objAddressAsBusinessTypeArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsBusinessTypeArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasbusinesstype__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsBusinessType = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasbusinesstype__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of BusinessCats from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return BusinessCat[]
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
					$objItem = BusinessCat::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = BusinessCat::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single BusinessCat object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return BusinessCat next row resulting from the query
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
			return BusinessCat::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single BusinessCat object,
		 * by IdbusinessCat Index(es)
		 * @param integer $intIdbusinessCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return BusinessCat
		*/
		public static function LoadByIdbusinessCat($intIdbusinessCat, $objOptionalClauses = null) {
			return BusinessCat::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::BusinessCat()->IdbusinessCat, $intIdbusinessCat)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this BusinessCat
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `business_cat` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdbusinessCat = $objDatabase->InsertId('business_cat', 'idbusiness_cat');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`business_cat`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idbusiness_cat` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '
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
		 * Delete this BusinessCat
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdbusinessCat)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this BusinessCat with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`business_cat`
				WHERE
					`idbusiness_cat` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this BusinessCat ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'BusinessCat', $this->intIdbusinessCat);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all BusinessCats
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`business_cat`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate business_cat table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `business_cat`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this BusinessCat from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved BusinessCat object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = BusinessCat::Load($this->intIdbusinessCat);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
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
				case 'IdbusinessCat':
					/**
					 * Gets the value for intIdbusinessCat (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdbusinessCat;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsBusinessType':
					/**
					 * Gets the value for the private _objAddressAsBusinessType (Read-Only)
					 * if set due to an expansion on the address.business_type reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsBusinessType;

				case '_AddressAsBusinessTypeArray':
					/**
					 * Gets the value for the private _objAddressAsBusinessTypeArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.business_type reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsBusinessTypeArray;


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
					 * Sets the value for strName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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



		// Related Objects' Methods for AddressAsBusinessType
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsBusinessType as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsBusinessTypeArray($objOptionalClauses = null) {
			if ((is_null($this->intIdbusinessCat)))
				return array();

			try {
				return Address::LoadArrayByBusinessType($this->intIdbusinessCat, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsBusinessType
		 * @return int
		*/
		public function CountAddressesAsBusinessType() {
			if ((is_null($this->intIdbusinessCat)))
				return 0;

			return Address::CountByBusinessType($this->intIdbusinessCat);
		}

		/**
		 * Associates a AddressAsBusinessType
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsBusinessType(Address $objAddress) {
			if ((is_null($this->intIdbusinessCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsBusinessType on this unsaved BusinessCat.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsBusinessType on this BusinessCat with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`business_type` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsBusinessType
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsBusinessType(Address $objAddress) {
			if ((is_null($this->intIdbusinessCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsBusinessType on this unsaved BusinessCat.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsBusinessType on this BusinessCat with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`business_type` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`business_type` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '
			');
		}

		/**
		 * Unassociates all AddressesAsBusinessType
		 * @return void
		*/
		public function UnassociateAllAddressesAsBusinessType() {
			if ((is_null($this->intIdbusinessCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsBusinessType on this unsaved BusinessCat.');

			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`business_type` = null
				WHERE
					`business_type` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '
			');
		}

		/**
		 * Deletes an associated AddressAsBusinessType
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsBusinessType(Address $objAddress) {
			if ((is_null($this->intIdbusinessCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsBusinessType on this unsaved BusinessCat.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsBusinessType on this BusinessCat with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`business_type` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsBusinessType
		 * @return void
		*/
		public function DeleteAllAddressesAsBusinessType() {
			if ((is_null($this->intIdbusinessCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsBusinessType on this unsaved BusinessCat.');

			// Get the Database Object for this Class
			$objDatabase = BusinessCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`business_type` = ' . $objDatabase->SqlVariable($this->intIdbusinessCat) . '
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
			return "business_cat";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[BusinessCat::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="BusinessCat"><sequence>';
			$strToReturn .= '<element name="IdbusinessCat" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('BusinessCat', $strComplexTypeArray)) {
				$strComplexTypeArray['BusinessCat'] = BusinessCat::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, BusinessCat::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new BusinessCat();
			if (property_exists($objSoapObject, 'IdbusinessCat'))
				$objToReturn->intIdbusinessCat = $objSoapObject->IdbusinessCat;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, BusinessCat::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
			$iArray['IdbusinessCat'] = $this->intIdbusinessCat;
			$iArray['Name'] = $this->strName;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdbusinessCat ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdbusinessCat
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsBusinessType

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeBusinessCat extends QQNode {
		protected $strTableName = 'business_cat';
		protected $strPrimaryKey = 'idbusiness_cat';
		protected $strClassName = 'BusinessCat';
		public function __get($strName) {
			switch ($strName) {
				case 'IdbusinessCat':
					return new QQNode('idbusiness_cat', 'IdbusinessCat', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'AddressAsBusinessType':
					return new QQReverseReferenceNodeAddress($this, 'addressasbusinesstype', 'reverse_reference', 'business_type');

				case '_PrimaryKeyNode':
					return new QQNode('idbusiness_cat', 'IdbusinessCat', 'Integer', $this);
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
     * @property-read QQNode $IdbusinessCat
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsBusinessType

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeBusinessCat extends QQReverseReferenceNode {
		protected $strTableName = 'business_cat';
		protected $strPrimaryKey = 'idbusiness_cat';
		protected $strClassName = 'BusinessCat';
		public function __get($strName) {
			switch ($strName) {
				case 'IdbusinessCat':
					return new QQNode('idbusiness_cat', 'IdbusinessCat', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'AddressAsBusinessType':
					return new QQReverseReferenceNodeAddress($this, 'addressasbusinesstype', 'reverse_reference', 'business_type');

				case '_PrimaryKeyNode':
					return new QQNode('idbusiness_cat', 'IdbusinessCat', 'integer', $this);
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
