<?php
	/**
	 * The abstract PayScaleGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the PayScale subclass which
	 * extends this PayScaleGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the PayScale class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdpayScale the value for intIdpayScale (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property string $FromAmt the value for strFromAmt 
	 * @property string $ToAmt the value for strToAmt 
	 * @property-read Address $_AddressAsPayscale the value for the private _objAddressAsPayscale (Read-Only) if set due to an expansion on the address.payscale reverse relationship
	 * @property-read Address[] $_AddressAsPayscaleArray the value for the private _objAddressAsPayscaleArray (Read-Only) if set due to an ExpandAsArray on the address.payscale reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PayScaleGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column pay_scale.idpay_scale
		 * @var integer intIdpayScale
		 */
		protected $intIdpayScale;
		const IdpayScaleDefault = null;


		/**
		 * Protected member variable that maps to the database column pay_scale.name
		 * @var string strName
		 */
		protected $strName;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column pay_scale.from_amt
		 * @var string strFromAmt
		 */
		protected $strFromAmt;
		const FromAmtMaxLength = 255;
		const FromAmtDefault = null;


		/**
		 * Protected member variable that maps to the database column pay_scale.to_amt
		 * @var string strToAmt
		 */
		protected $strToAmt;
		const ToAmtMaxLength = 255;
		const ToAmtDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsPayscale object
		 * (of type Address), if this PayScale object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsPayscale;
		 */
		private $_objAddressAsPayscale;

		/**
		 * Private member variable that stores a reference to an array of AddressAsPayscale objects
		 * (of type Address[]), if this PayScale object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsPayscaleArray;
		 */
		private $_objAddressAsPayscaleArray = null;

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
			$this->intIdpayScale = PayScale::IdpayScaleDefault;
			$this->strName = PayScale::NameDefault;
			$this->strFromAmt = PayScale::FromAmtDefault;
			$this->strToAmt = PayScale::ToAmtDefault;
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
		 * Load a PayScale from PK Info
		 * @param integer $intIdpayScale
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PayScale
		 */
		public static function Load($intIdpayScale, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'PayScale', $intIdpayScale);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = PayScale::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::PayScale()->IdpayScale, $intIdpayScale)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all PayScales
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PayScale[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call PayScale::QueryArray to perform the LoadAll query
			try {
				return PayScale::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all PayScales
		 * @return int
		 */
		public static function CountAll() {
			// Call PayScale::QueryCount to perform the CountAll query
			return PayScale::QueryCount(QQ::All());
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
			$objDatabase = PayScale::GetDatabase();

			// Create/Build out the QueryBuilder object with PayScale-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'pay_scale');

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
				PayScale::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('pay_scale');

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
		 * Static Qcubed Query method to query for a single PayScale object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return PayScale the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = PayScale::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new PayScale object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = PayScale::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return PayScale::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of PayScale objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return PayScale[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = PayScale::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return PayScale::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = PayScale::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of PayScale objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = PayScale::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = PayScale::GetDatabase();

			$strQuery = PayScale::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/payscale', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = PayScale::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this PayScale
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'pay_scale';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idpay_scale', $strAliasPrefix . 'idpay_scale');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idpay_scale', $strAliasPrefix . 'idpay_scale');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'from_amt', $strAliasPrefix . 'from_amt');
			    $objBuilder->AddSelectItem($strTableName, 'to_amt', $strAliasPrefix . 'to_amt');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a PayScale from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this PayScale::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return PayScale
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idpay_scale';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdpayScale == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'pay_scale__';


						// Expanding reverse references: AddressAsPayscale
						$strAlias = $strAliasPrefix . 'addressaspayscale__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsPayscaleArray)
								$objPreviousItem->_objAddressAsPayscaleArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsPayscaleArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsPayscaleArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressaspayscale__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsPayscaleArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsPayscaleArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressaspayscale__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'pay_scale__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the PayScale object
			$objToReturn = new PayScale();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idpay_scale';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdpayScale = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'from_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFromAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'to_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strToAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdpayScale != $objPreviousItem->IdpayScale) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsPayscaleArray);
					$cnt = count($objToReturn->_objAddressAsPayscaleArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsPayscaleArray, $objToReturn->_objAddressAsPayscaleArray)) {
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
				$strAliasPrefix = 'pay_scale__';




			// Check for AddressAsPayscale Virtual Binding
			$strAlias = $strAliasPrefix . 'addressaspayscale__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsPayscaleArray)
				$objToReturn->_objAddressAsPayscaleArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsPayscaleArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressaspayscale__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsPayscale = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressaspayscale__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of PayScales from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return PayScale[]
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
					$objItem = PayScale::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = PayScale::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single PayScale object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return PayScale next row resulting from the query
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
			return PayScale::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single PayScale object,
		 * by IdpayScale Index(es)
		 * @param integer $intIdpayScale
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PayScale
		*/
		public static function LoadByIdpayScale($intIdpayScale, $objOptionalClauses = null) {
			return PayScale::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::PayScale()->IdpayScale, $intIdpayScale)
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
		 * Save this PayScale
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `pay_scale` (
							`name`,
							`from_amt`,
							`to_amt`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strFromAmt) . ',
							' . $objDatabase->SqlVariable($this->strToAmt) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdpayScale = $objDatabase->InsertId('pay_scale', 'idpay_scale');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`pay_scale`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`from_amt` = ' . $objDatabase->SqlVariable($this->strFromAmt) . ',
							`to_amt` = ' . $objDatabase->SqlVariable($this->strToAmt) . '
						WHERE
							`idpay_scale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '
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
		 * Delete this PayScale
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdpayScale)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this PayScale with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pay_scale`
				WHERE
					`idpay_scale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this PayScale ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'PayScale', $this->intIdpayScale);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all PayScales
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`pay_scale`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate pay_scale table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `pay_scale`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this PayScale from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved PayScale object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = PayScale::Load($this->intIdpayScale);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strFromAmt = $objReloaded->strFromAmt;
			$this->strToAmt = $objReloaded->strToAmt;
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
				case 'IdpayScale':
					/**
					 * Gets the value for intIdpayScale (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdpayScale;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;

				case 'FromAmt':
					/**
					 * Gets the value for strFromAmt 
					 * @return string
					 */
					return $this->strFromAmt;

				case 'ToAmt':
					/**
					 * Gets the value for strToAmt 
					 * @return string
					 */
					return $this->strToAmt;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsPayscale':
					/**
					 * Gets the value for the private _objAddressAsPayscale (Read-Only)
					 * if set due to an expansion on the address.payscale reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsPayscale;

				case '_AddressAsPayscaleArray':
					/**
					 * Gets the value for the private _objAddressAsPayscaleArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.payscale reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsPayscaleArray;


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

				case 'FromAmt':
					/**
					 * Sets the value for strFromAmt 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFromAmt = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToAmt':
					/**
					 * Sets the value for strToAmt 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strToAmt = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for AddressAsPayscale
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsPayscale as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsPayscaleArray($objOptionalClauses = null) {
			if ((is_null($this->intIdpayScale)))
				return array();

			try {
				return Address::LoadArrayByPayscale($this->intIdpayScale, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsPayscale
		 * @return int
		*/
		public function CountAddressesAsPayscale() {
			if ((is_null($this->intIdpayScale)))
				return 0;

			return Address::CountByPayscale($this->intIdpayScale);
		}

		/**
		 * Associates a AddressAsPayscale
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsPayscale(Address $objAddress) {
			if ((is_null($this->intIdpayScale)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsPayscale on this unsaved PayScale.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsPayscale on this PayScale with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`payscale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsPayscale
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsPayscale(Address $objAddress) {
			if ((is_null($this->intIdpayScale)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsPayscale on this unsaved PayScale.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsPayscale on this PayScale with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`payscale` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`payscale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '
			');
		}

		/**
		 * Unassociates all AddressesAsPayscale
		 * @return void
		*/
		public function UnassociateAllAddressesAsPayscale() {
			if ((is_null($this->intIdpayScale)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsPayscale on this unsaved PayScale.');

			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`payscale` = null
				WHERE
					`payscale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '
			');
		}

		/**
		 * Deletes an associated AddressAsPayscale
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsPayscale(Address $objAddress) {
			if ((is_null($this->intIdpayScale)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsPayscale on this unsaved PayScale.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsPayscale on this PayScale with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`payscale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsPayscale
		 * @return void
		*/
		public function DeleteAllAddressesAsPayscale() {
			if ((is_null($this->intIdpayScale)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsPayscale on this unsaved PayScale.');

			// Get the Database Object for this Class
			$objDatabase = PayScale::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`payscale` = ' . $objDatabase->SqlVariable($this->intIdpayScale) . '
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
			return "pay_scale";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[PayScale::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="PayScale"><sequence>';
			$strToReturn .= '<element name="IdpayScale" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="FromAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="ToAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('PayScale', $strComplexTypeArray)) {
				$strComplexTypeArray['PayScale'] = PayScale::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, PayScale::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new PayScale();
			if (property_exists($objSoapObject, 'IdpayScale'))
				$objToReturn->intIdpayScale = $objSoapObject->IdpayScale;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'FromAmt'))
				$objToReturn->strFromAmt = $objSoapObject->FromAmt;
			if (property_exists($objSoapObject, 'ToAmt'))
				$objToReturn->strToAmt = $objSoapObject->ToAmt;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, PayScale::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdpayScale'] = $this->intIdpayScale;
			$iArray['Name'] = $this->strName;
			$iArray['FromAmt'] = $this->strFromAmt;
			$iArray['ToAmt'] = $this->strToAmt;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdpayScale ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdpayScale
     * @property-read QQNode $Name
     * @property-read QQNode $FromAmt
     * @property-read QQNode $ToAmt
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsPayscale

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePayScale extends QQNode {
		protected $strTableName = 'pay_scale';
		protected $strPrimaryKey = 'idpay_scale';
		protected $strClassName = 'PayScale';
		public function __get($strName) {
			switch ($strName) {
				case 'IdpayScale':
					return new QQNode('idpay_scale', 'IdpayScale', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'Blob', $this);
				case 'FromAmt':
					return new QQNode('from_amt', 'FromAmt', 'VarChar', $this);
				case 'ToAmt':
					return new QQNode('to_amt', 'ToAmt', 'VarChar', $this);
				case 'AddressAsPayscale':
					return new QQReverseReferenceNodeAddress($this, 'addressaspayscale', 'reverse_reference', 'payscale');

				case '_PrimaryKeyNode':
					return new QQNode('idpay_scale', 'IdpayScale', 'Integer', $this);
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
     * @property-read QQNode $IdpayScale
     * @property-read QQNode $Name
     * @property-read QQNode $FromAmt
     * @property-read QQNode $ToAmt
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsPayscale

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePayScale extends QQReverseReferenceNode {
		protected $strTableName = 'pay_scale';
		protected $strPrimaryKey = 'idpay_scale';
		protected $strClassName = 'PayScale';
		public function __get($strName) {
			switch ($strName) {
				case 'IdpayScale':
					return new QQNode('idpay_scale', 'IdpayScale', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'FromAmt':
					return new QQNode('from_amt', 'FromAmt', 'string', $this);
				case 'ToAmt':
					return new QQNode('to_amt', 'ToAmt', 'string', $this);
				case 'AddressAsPayscale':
					return new QQReverseReferenceNodeAddress($this, 'addressaspayscale', 'reverse_reference', 'payscale');

				case '_PrimaryKeyNode':
					return new QQNode('idpay_scale', 'IdpayScale', 'integer', $this);
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
