<?php
	/**
	 * The abstract MarrialStatusGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the MarrialStatus subclass which
	 * extends this MarrialStatusGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the MarrialStatus class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdmarrialStatus the value for intIdmarrialStatus (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property-read Address $_AddressAsMarritalStatus the value for the private _objAddressAsMarritalStatus (Read-Only) if set due to an expansion on the address.marrital_status reverse relationship
	 * @property-read Address[] $_AddressAsMarritalStatusArray the value for the private _objAddressAsMarritalStatusArray (Read-Only) if set due to an ExpandAsArray on the address.marrital_status reverse relationship
	 * @property-read Profile $_ProfileAsMarrtialStatus the value for the private _objProfileAsMarrtialStatus (Read-Only) if set due to an expansion on the profile.marrtial_status reverse relationship
	 * @property-read Profile[] $_ProfileAsMarrtialStatusArray the value for the private _objProfileAsMarrtialStatusArray (Read-Only) if set due to an ExpandAsArray on the profile.marrtial_status reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MarrialStatusGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column marrial_status.idmarrial_status
		 * @var integer intIdmarrialStatus
		 */
		protected $intIdmarrialStatus;
		const IdmarrialStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column marrial_status.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsMarritalStatus object
		 * (of type Address), if this MarrialStatus object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsMarritalStatus;
		 */
		private $_objAddressAsMarritalStatus;

		/**
		 * Private member variable that stores a reference to an array of AddressAsMarritalStatus objects
		 * (of type Address[]), if this MarrialStatus object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsMarritalStatusArray;
		 */
		private $_objAddressAsMarritalStatusArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsMarrtialStatus object
		 * (of type Profile), if this MarrialStatus object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsMarrtialStatus;
		 */
		private $_objProfileAsMarrtialStatus;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsMarrtialStatus objects
		 * (of type Profile[]), if this MarrialStatus object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsMarrtialStatusArray;
		 */
		private $_objProfileAsMarrtialStatusArray = null;

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
			$this->intIdmarrialStatus = MarrialStatus::IdmarrialStatusDefault;
			$this->strName = MarrialStatus::NameDefault;
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
		 * Load a MarrialStatus from PK Info
		 * @param integer $intIdmarrialStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarrialStatus
		 */
		public static function Load($intIdmarrialStatus, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MarrialStatus', $intIdmarrialStatus);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = MarrialStatus::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MarrialStatus()->IdmarrialStatus, $intIdmarrialStatus)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all MarrialStatuses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarrialStatus[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call MarrialStatus::QueryArray to perform the LoadAll query
			try {
				return MarrialStatus::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all MarrialStatuses
		 * @return int
		 */
		public static function CountAll() {
			// Call MarrialStatus::QueryCount to perform the CountAll query
			return MarrialStatus::QueryCount(QQ::All());
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
			$objDatabase = MarrialStatus::GetDatabase();

			// Create/Build out the QueryBuilder object with MarrialStatus-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'marrial_status');

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
				MarrialStatus::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('marrial_status');

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
		 * Static Qcubed Query method to query for a single MarrialStatus object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MarrialStatus the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MarrialStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new MarrialStatus object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = MarrialStatus::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return MarrialStatus::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of MarrialStatus objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MarrialStatus[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MarrialStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return MarrialStatus::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = MarrialStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of MarrialStatus objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MarrialStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = MarrialStatus::GetDatabase();

			$strQuery = MarrialStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/marrialstatus', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = MarrialStatus::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this MarrialStatus
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'marrial_status';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idmarrial_status', $strAliasPrefix . 'idmarrial_status');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idmarrial_status', $strAliasPrefix . 'idmarrial_status');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a MarrialStatus from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this MarrialStatus::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return MarrialStatus
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idmarrial_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdmarrialStatus == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'marrial_status__';


						// Expanding reverse references: AddressAsMarritalStatus
						$strAlias = $strAliasPrefix . 'addressasmarritalstatus__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsMarritalStatusArray)
								$objPreviousItem->_objAddressAsMarritalStatusArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsMarritalStatusArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsMarritalStatusArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasmarritalstatus__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsMarritalStatusArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsMarritalStatusArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasmarritalstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsMarrtialStatus
						$strAlias = $strAliasPrefix . 'profileasmarrtialstatus__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsMarrtialStatusArray)
								$objPreviousItem->_objProfileAsMarrtialStatusArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsMarrtialStatusArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsMarrtialStatusArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasmarrtialstatus__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsMarrtialStatusArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsMarrtialStatusArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasmarrtialstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'marrial_status__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the MarrialStatus object
			$objToReturn = new MarrialStatus();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idmarrial_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdmarrialStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdmarrialStatus != $objPreviousItem->IdmarrialStatus) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsMarritalStatusArray);
					$cnt = count($objToReturn->_objAddressAsMarritalStatusArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsMarritalStatusArray, $objToReturn->_objAddressAsMarritalStatusArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsMarrtialStatusArray);
					$cnt = count($objToReturn->_objProfileAsMarrtialStatusArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsMarrtialStatusArray, $objToReturn->_objProfileAsMarrtialStatusArray)) {
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
				$strAliasPrefix = 'marrial_status__';




			// Check for AddressAsMarritalStatus Virtual Binding
			$strAlias = $strAliasPrefix . 'addressasmarritalstatus__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsMarritalStatusArray)
				$objToReturn->_objAddressAsMarritalStatusArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsMarritalStatusArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasmarritalstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsMarritalStatus = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressasmarritalstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsMarrtialStatus Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasmarrtialstatus__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsMarrtialStatusArray)
				$objToReturn->_objProfileAsMarrtialStatusArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsMarrtialStatusArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasmarrtialstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsMarrtialStatus = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasmarrtialstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of MarrialStatuses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return MarrialStatus[]
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
					$objItem = MarrialStatus::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = MarrialStatus::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single MarrialStatus object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return MarrialStatus next row resulting from the query
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
			return MarrialStatus::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single MarrialStatus object,
		 * by IdmarrialStatus Index(es)
		 * @param integer $intIdmarrialStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarrialStatus
		*/
		public static function LoadByIdmarrialStatus($intIdmarrialStatus, $objOptionalClauses = null) {
			return MarrialStatus::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MarrialStatus()->IdmarrialStatus, $intIdmarrialStatus)
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
		 * Save this MarrialStatus
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `marrial_status` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdmarrialStatus = $objDatabase->InsertId('marrial_status', 'idmarrial_status');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`marrial_status`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idmarrial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
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
		 * Delete this MarrialStatus
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this MarrialStatus with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marrial_status`
				WHERE
					`idmarrial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this MarrialStatus ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MarrialStatus', $this->intIdmarrialStatus);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all MarrialStatuses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marrial_status`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate marrial_status table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `marrial_status`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this MarrialStatus from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved MarrialStatus object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = MarrialStatus::Load($this->intIdmarrialStatus);

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
				case 'IdmarrialStatus':
					/**
					 * Gets the value for intIdmarrialStatus (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdmarrialStatus;

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

				case '_AddressAsMarritalStatus':
					/**
					 * Gets the value for the private _objAddressAsMarritalStatus (Read-Only)
					 * if set due to an expansion on the address.marrital_status reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsMarritalStatus;

				case '_AddressAsMarritalStatusArray':
					/**
					 * Gets the value for the private _objAddressAsMarritalStatusArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.marrital_status reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsMarritalStatusArray;

				case '_ProfileAsMarrtialStatus':
					/**
					 * Gets the value for the private _objProfileAsMarrtialStatus (Read-Only)
					 * if set due to an expansion on the profile.marrtial_status reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsMarrtialStatus;

				case '_ProfileAsMarrtialStatusArray':
					/**
					 * Gets the value for the private _objProfileAsMarrtialStatusArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.marrtial_status reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsMarrtialStatusArray;


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



		// Related Objects' Methods for AddressAsMarritalStatus
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsMarritalStatus as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsMarritalStatusArray($objOptionalClauses = null) {
			if ((is_null($this->intIdmarrialStatus)))
				return array();

			try {
				return Address::LoadArrayByMarritalStatus($this->intIdmarrialStatus, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsMarritalStatus
		 * @return int
		*/
		public function CountAddressesAsMarritalStatus() {
			if ((is_null($this->intIdmarrialStatus)))
				return 0;

			return Address::CountByMarritalStatus($this->intIdmarrialStatus);
		}

		/**
		 * Associates a AddressAsMarritalStatus
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsMarritalStatus(Address $objAddress) {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsMarritalStatus on this unsaved MarrialStatus.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsMarritalStatus on this MarrialStatus with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`marrital_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsMarritalStatus
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsMarritalStatus(Address $objAddress) {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsMarritalStatus on this unsaved MarrialStatus.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsMarritalStatus on this MarrialStatus with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`marrital_status` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`marrital_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}

		/**
		 * Unassociates all AddressesAsMarritalStatus
		 * @return void
		*/
		public function UnassociateAllAddressesAsMarritalStatus() {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsMarritalStatus on this unsaved MarrialStatus.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`marrital_status` = null
				WHERE
					`marrital_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}

		/**
		 * Deletes an associated AddressAsMarritalStatus
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsMarritalStatus(Address $objAddress) {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsMarritalStatus on this unsaved MarrialStatus.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsMarritalStatus on this MarrialStatus with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`marrital_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsMarritalStatus
		 * @return void
		*/
		public function DeleteAllAddressesAsMarritalStatus() {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsMarritalStatus on this unsaved MarrialStatus.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`marrital_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}


		// Related Objects' Methods for ProfileAsMarrtialStatus
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsMarrtialStatus as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsMarrtialStatusArray($objOptionalClauses = null) {
			if ((is_null($this->intIdmarrialStatus)))
				return array();

			try {
				return Profile::LoadArrayByMarrtialStatus($this->intIdmarrialStatus, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsMarrtialStatus
		 * @return int
		*/
		public function CountProfilesAsMarrtialStatus() {
			if ((is_null($this->intIdmarrialStatus)))
				return 0;

			return Profile::CountByMarrtialStatus($this->intIdmarrialStatus);
		}

		/**
		 * Associates a ProfileAsMarrtialStatus
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsMarrtialStatus(Profile $objProfile) {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsMarrtialStatus on this unsaved MarrialStatus.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsMarrtialStatus on this MarrialStatus with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`marrtial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsMarrtialStatus
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsMarrtialStatus(Profile $objProfile) {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsMarrtialStatus on this unsaved MarrialStatus.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsMarrtialStatus on this MarrialStatus with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`marrtial_status` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`marrtial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsMarrtialStatus
		 * @return void
		*/
		public function UnassociateAllProfilesAsMarrtialStatus() {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsMarrtialStatus on this unsaved MarrialStatus.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`marrtial_status` = null
				WHERE
					`marrtial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsMarrtialStatus
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsMarrtialStatus(Profile $objProfile) {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsMarrtialStatus on this unsaved MarrialStatus.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsMarrtialStatus on this MarrialStatus with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`marrtial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsMarrtialStatus
		 * @return void
		*/
		public function DeleteAllProfilesAsMarrtialStatus() {
			if ((is_null($this->intIdmarrialStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsMarrtialStatus on this unsaved MarrialStatus.');

			// Get the Database Object for this Class
			$objDatabase = MarrialStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`marrtial_status` = ' . $objDatabase->SqlVariable($this->intIdmarrialStatus) . '
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
			return "marrial_status";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[MarrialStatus::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="MarrialStatus"><sequence>';
			$strToReturn .= '<element name="IdmarrialStatus" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('MarrialStatus', $strComplexTypeArray)) {
				$strComplexTypeArray['MarrialStatus'] = MarrialStatus::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, MarrialStatus::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new MarrialStatus();
			if (property_exists($objSoapObject, 'IdmarrialStatus'))
				$objToReturn->intIdmarrialStatus = $objSoapObject->IdmarrialStatus;
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
				array_push($objArrayToReturn, MarrialStatus::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdmarrialStatus'] = $this->intIdmarrialStatus;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdmarrialStatus ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdmarrialStatus
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsMarritalStatus
     * @property-read QQReverseReferenceNodeProfile $ProfileAsMarrtialStatus

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeMarrialStatus extends QQNode {
		protected $strTableName = 'marrial_status';
		protected $strPrimaryKey = 'idmarrial_status';
		protected $strClassName = 'MarrialStatus';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmarrialStatus':
					return new QQNode('idmarrial_status', 'IdmarrialStatus', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'AddressAsMarritalStatus':
					return new QQReverseReferenceNodeAddress($this, 'addressasmarritalstatus', 'reverse_reference', 'marrital_status');
				case 'ProfileAsMarrtialStatus':
					return new QQReverseReferenceNodeProfile($this, 'profileasmarrtialstatus', 'reverse_reference', 'marrtial_status');

				case '_PrimaryKeyNode':
					return new QQNode('idmarrial_status', 'IdmarrialStatus', 'Integer', $this);
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
     * @property-read QQNode $IdmarrialStatus
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsMarritalStatus
     * @property-read QQReverseReferenceNodeProfile $ProfileAsMarrtialStatus

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeMarrialStatus extends QQReverseReferenceNode {
		protected $strTableName = 'marrial_status';
		protected $strPrimaryKey = 'idmarrial_status';
		protected $strClassName = 'MarrialStatus';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmarrialStatus':
					return new QQNode('idmarrial_status', 'IdmarrialStatus', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'AddressAsMarritalStatus':
					return new QQReverseReferenceNodeAddress($this, 'addressasmarritalstatus', 'reverse_reference', 'marrital_status');
				case 'ProfileAsMarrtialStatus':
					return new QQReverseReferenceNodeProfile($this, 'profileasmarrtialstatus', 'reverse_reference', 'marrtial_status');

				case '_PrimaryKeyNode':
					return new QQNode('idmarrial_status', 'IdmarrialStatus', 'integer', $this);
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
