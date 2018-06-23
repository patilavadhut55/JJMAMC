<?php
	/**
	 * The abstract AppoinmentCatGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AppoinmentCat subclass which
	 * extends this AppoinmentCatGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AppoinmentCat class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdappoinmentCat the value for intIdappoinmentCat (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property string $Desc the value for strDesc 
	 * @property-read Address $_AddressAsAppointmentCat the value for the private _objAddressAsAppointmentCat (Read-Only) if set due to an expansion on the address.appointment_cat reverse relationship
	 * @property-read Address[] $_AddressAsAppointmentCatArray the value for the private _objAddressAsAppointmentCatArray (Read-Only) if set due to an ExpandAsArray on the address.appointment_cat reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AppoinmentCatGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column appoinment_cat.idappoinment_cat
		 * @var integer intIdappoinmentCat
		 */
		protected $intIdappoinmentCat;
		const IdappoinmentCatDefault = null;


		/**
		 * Protected member variable that maps to the database column appoinment_cat.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column appoinment_cat.desc
		 * @var string strDesc
		 */
		protected $strDesc;
		const DescDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsAppointmentCat object
		 * (of type Address), if this AppoinmentCat object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsAppointmentCat;
		 */
		private $_objAddressAsAppointmentCat;

		/**
		 * Private member variable that stores a reference to an array of AddressAsAppointmentCat objects
		 * (of type Address[]), if this AppoinmentCat object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsAppointmentCatArray;
		 */
		private $_objAddressAsAppointmentCatArray = null;

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
			$this->intIdappoinmentCat = AppoinmentCat::IdappoinmentCatDefault;
			$this->strName = AppoinmentCat::NameDefault;
			$this->strDesc = AppoinmentCat::DescDefault;
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
		 * Load a AppoinmentCat from PK Info
		 * @param integer $intIdappoinmentCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppoinmentCat
		 */
		public static function Load($intIdappoinmentCat, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppoinmentCat', $intIdappoinmentCat);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AppoinmentCat::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppoinmentCat()->IdappoinmentCat, $intIdappoinmentCat)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AppoinmentCats
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppoinmentCat[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AppoinmentCat::QueryArray to perform the LoadAll query
			try {
				return AppoinmentCat::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AppoinmentCats
		 * @return int
		 */
		public static function CountAll() {
			// Call AppoinmentCat::QueryCount to perform the CountAll query
			return AppoinmentCat::QueryCount(QQ::All());
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
			$objDatabase = AppoinmentCat::GetDatabase();

			// Create/Build out the QueryBuilder object with AppoinmentCat-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'appoinment_cat');

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
				AppoinmentCat::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('appoinment_cat');

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
		 * Static Qcubed Query method to query for a single AppoinmentCat object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppoinmentCat the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppoinmentCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AppoinmentCat object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AppoinmentCat::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AppoinmentCat::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AppoinmentCat objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppoinmentCat[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppoinmentCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AppoinmentCat::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AppoinmentCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AppoinmentCat objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppoinmentCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AppoinmentCat::GetDatabase();

			$strQuery = AppoinmentCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/appoinmentcat', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AppoinmentCat::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AppoinmentCat
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'appoinment_cat';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idappoinment_cat', $strAliasPrefix . 'idappoinment_cat');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idappoinment_cat', $strAliasPrefix . 'idappoinment_cat');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'desc', $strAliasPrefix . 'desc');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AppoinmentCat from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AppoinmentCat::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AppoinmentCat
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idappoinment_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdappoinmentCat == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'appoinment_cat__';


						// Expanding reverse references: AddressAsAppointmentCat
						$strAlias = $strAliasPrefix . 'addressasappointmentcat__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsAppointmentCatArray)
								$objPreviousItem->_objAddressAsAppointmentCatArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsAppointmentCatArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsAppointmentCatArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasappointmentcat__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsAppointmentCatArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsAppointmentCatArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasappointmentcat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'appoinment_cat__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AppoinmentCat object
			$objToReturn = new AppoinmentCat();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idappoinment_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdappoinmentCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'desc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDesc = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdappoinmentCat != $objPreviousItem->IdappoinmentCat) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsAppointmentCatArray);
					$cnt = count($objToReturn->_objAddressAsAppointmentCatArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsAppointmentCatArray, $objToReturn->_objAddressAsAppointmentCatArray)) {
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
				$strAliasPrefix = 'appoinment_cat__';




			// Check for AddressAsAppointmentCat Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasappointmentcat__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsAppointmentCatArray)
				$objToReturn->_objAddressAsAppointmentCatArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsAppointmentCatArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasappointmentcat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsAppointmentCat = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasappointmentcat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AppoinmentCats from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AppoinmentCat[]
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
					$objItem = AppoinmentCat::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AppoinmentCat::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AppoinmentCat object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AppoinmentCat next row resulting from the query
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
			return AppoinmentCat::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AppoinmentCat object,
		 * by IdappoinmentCat Index(es)
		 * @param integer $intIdappoinmentCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppoinmentCat
		*/
		public static function LoadByIdappoinmentCat($intIdappoinmentCat, $objOptionalClauses = null) {
			return AppoinmentCat::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppoinmentCat()->IdappoinmentCat, $intIdappoinmentCat)
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
		 * Save this AppoinmentCat
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `appoinment_cat` (
							`name`,
							`desc`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDesc) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdappoinmentCat = $objDatabase->InsertId('appoinment_cat', 'idappoinment_cat');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`appoinment_cat`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`desc` = ' . $objDatabase->SqlVariable($this->strDesc) . '
						WHERE
							`idappoinment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '
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
		 * Delete this AppoinmentCat
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdappoinmentCat)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AppoinmentCat with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`appoinment_cat`
				WHERE
					`idappoinment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AppoinmentCat ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppoinmentCat', $this->intIdappoinmentCat);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AppoinmentCats
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`appoinment_cat`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate appoinment_cat table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `appoinment_cat`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AppoinmentCat from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AppoinmentCat object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AppoinmentCat::Load($this->intIdappoinmentCat);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDesc = $objReloaded->strDesc;
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
				case 'IdappoinmentCat':
					/**
					 * Gets the value for intIdappoinmentCat (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdappoinmentCat;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;

				case 'Desc':
					/**
					 * Gets the value for strDesc 
					 * @return string
					 */
					return $this->strDesc;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsAppointmentCat':
					/**
					 * Gets the value for the private _objAddressAsAppointmentCat (Read-Only)
					 * if set due to an expansion on the address.appointment_cat reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsAppointmentCat;

				case '_AddressAsAppointmentCatArray':
					/**
					 * Gets the value for the private _objAddressAsAppointmentCatArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.appointment_cat reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsAppointmentCatArray;


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

				case 'Desc':
					/**
					 * Sets the value for strDesc 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDesc = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for AddressAsAppointmentCat
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsAppointmentCat as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsAppointmentCatArray($objOptionalClauses = null) {
			if ((is_null($this->intIdappoinmentCat)))
				return array();

			try {
				return Address::LoadArrayByAppointmentCat($this->intIdappoinmentCat, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsAppointmentCat
		 * @return int
		*/
		public function CountAddressesAsAppointmentCat() {
			if ((is_null($this->intIdappoinmentCat)))
				return 0;

			return Address::CountByAppointmentCat($this->intIdappoinmentCat);
		}

		/**
		 * Associates a AddressAsAppointmentCat
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsAppointmentCat(Address $objAddress) {
			if ((is_null($this->intIdappoinmentCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsAppointmentCat on this unsaved AppoinmentCat.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsAppointmentCat on this AppoinmentCat with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`appointment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsAppointmentCat
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsAppointmentCat(Address $objAddress) {
			if ((is_null($this->intIdappoinmentCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsAppointmentCat on this unsaved AppoinmentCat.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsAppointmentCat on this AppoinmentCat with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`appointment_cat` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`appointment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '
			');
		}

		/**
		 * Unassociates all AddressesAsAppointmentCat
		 * @return void
		*/
		public function UnassociateAllAddressesAsAppointmentCat() {
			if ((is_null($this->intIdappoinmentCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsAppointmentCat on this unsaved AppoinmentCat.');

			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`appointment_cat` = null
				WHERE
					`appointment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '
			');
		}

		/**
		 * Deletes an associated AddressAsAppointmentCat
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsAppointmentCat(Address $objAddress) {
			if ((is_null($this->intIdappoinmentCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsAppointmentCat on this unsaved AppoinmentCat.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsAppointmentCat on this AppoinmentCat with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`appointment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsAppointmentCat
		 * @return void
		*/
		public function DeleteAllAddressesAsAppointmentCat() {
			if ((is_null($this->intIdappoinmentCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsAppointmentCat on this unsaved AppoinmentCat.');

			// Get the Database Object for this Class
			$objDatabase = AppoinmentCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`appointment_cat` = ' . $objDatabase->SqlVariable($this->intIdappoinmentCat) . '
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
			return "appoinment_cat";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AppoinmentCat::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AppoinmentCat"><sequence>';
			$strToReturn .= '<element name="IdappoinmentCat" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Desc" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AppoinmentCat', $strComplexTypeArray)) {
				$strComplexTypeArray['AppoinmentCat'] = AppoinmentCat::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AppoinmentCat::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AppoinmentCat();
			if (property_exists($objSoapObject, 'IdappoinmentCat'))
				$objToReturn->intIdappoinmentCat = $objSoapObject->IdappoinmentCat;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Desc'))
				$objToReturn->strDesc = $objSoapObject->Desc;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AppoinmentCat::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdappoinmentCat'] = $this->intIdappoinmentCat;
			$iArray['Name'] = $this->strName;
			$iArray['Desc'] = $this->strDesc;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdappoinmentCat ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdappoinmentCat
     * @property-read QQNode $Name
     * @property-read QQNode $Desc
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsAppointmentCat

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAppoinmentCat extends QQNode {
		protected $strTableName = 'appoinment_cat';
		protected $strPrimaryKey = 'idappoinment_cat';
		protected $strClassName = 'AppoinmentCat';
		public function __get($strName) {
			switch ($strName) {
				case 'IdappoinmentCat':
					return new QQNode('idappoinment_cat', 'IdappoinmentCat', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Desc':
					return new QQNode('desc', 'Desc', 'Blob', $this);
				case 'AddressAsAppointmentCat':
					return new QQReverseReferenceNodeAddress($this, 'addressasappointmentcat', 'reverse_reference', 'appointment_cat');

				case '_PrimaryKeyNode':
					return new QQNode('idappoinment_cat', 'IdappoinmentCat', 'Integer', $this);
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
     * @property-read QQNode $IdappoinmentCat
     * @property-read QQNode $Name
     * @property-read QQNode $Desc
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsAppointmentCat

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAppoinmentCat extends QQReverseReferenceNode {
		protected $strTableName = 'appoinment_cat';
		protected $strPrimaryKey = 'idappoinment_cat';
		protected $strClassName = 'AppoinmentCat';
		public function __get($strName) {
			switch ($strName) {
				case 'IdappoinmentCat':
					return new QQNode('idappoinment_cat', 'IdappoinmentCat', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Desc':
					return new QQNode('desc', 'Desc', 'string', $this);
				case 'AddressAsAppointmentCat':
					return new QQReverseReferenceNodeAddress($this, 'addressasappointmentcat', 'reverse_reference', 'appointment_cat');

				case '_PrimaryKeyNode':
					return new QQNode('idappoinment_cat', 'IdappoinmentCat', 'integer', $this);
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
