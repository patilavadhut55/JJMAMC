<?php
	/**
	 * The abstract UnitGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Unit subclass which
	 * extends this UnitGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Unit class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idunit the value for intIdunit (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $Description the value for strDescription 
	 * @property integer $DecimalPlaces the value for intDecimalPlaces 
	 * @property string $QtyInvolved the value for strQtyInvolved 
	 * @property-read LedgerDetails $_LedgerDetails the value for the private _objLedgerDetails (Read-Only) if set due to an expansion on the ledger_details.unit reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsArray the value for the private _objLedgerDetailsArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.unit reverse relationship
	 * @property-read VoucherHasItem $_VoucherHasItemAsPer the value for the private _objVoucherHasItemAsPer (Read-Only) if set due to an expansion on the voucher_has_item.per reverse relationship
	 * @property-read VoucherHasItem[] $_VoucherHasItemAsPerArray the value for the private _objVoucherHasItemAsPerArray (Read-Only) if set due to an ExpandAsArray on the voucher_has_item.per reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class UnitGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column unit.idunit
		 * @var integer intIdunit
		 */
		protected $intIdunit;
		const IdunitDefault = null;


		/**
		 * Protected member variable that maps to the database column unit.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column unit.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column unit.decimal_places
		 * @var integer intDecimalPlaces
		 */
		protected $intDecimalPlaces;
		const DecimalPlacesDefault = null;


		/**
		 * Protected member variable that maps to the database column unit.qty_involved
		 * @var string strQtyInvolved
		 */
		protected $strQtyInvolved;
		const QtyInvolvedDefault = null;


		/**
		 * Private member variable that stores a reference to a single LedgerDetails object
		 * (of type LedgerDetails), if this Unit object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetails;
		 */
		private $_objLedgerDetails;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetails objects
		 * (of type LedgerDetails[]), if this Unit object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsArray;
		 */
		private $_objLedgerDetailsArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherHasItemAsPer object
		 * (of type VoucherHasItem), if this Unit object was restored with
		 * an expansion on the voucher_has_item association table.
		 * @var VoucherHasItem _objVoucherHasItemAsPer;
		 */
		private $_objVoucherHasItemAsPer;

		/**
		 * Private member variable that stores a reference to an array of VoucherHasItemAsPer objects
		 * (of type VoucherHasItem[]), if this Unit object was restored with
		 * an ExpandAsArray on the voucher_has_item association table.
		 * @var VoucherHasItem[] _objVoucherHasItemAsPerArray;
		 */
		private $_objVoucherHasItemAsPerArray = null;

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
			$this->intIdunit = Unit::IdunitDefault;
			$this->strName = Unit::NameDefault;
			$this->strDescription = Unit::DescriptionDefault;
			$this->intDecimalPlaces = Unit::DecimalPlacesDefault;
			$this->strQtyInvolved = Unit::QtyInvolvedDefault;
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
		 * Load a Unit from PK Info
		 * @param integer $intIdunit
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unit
		 */
		public static function Load($intIdunit, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Unit', $intIdunit);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Unit::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Unit()->Idunit, $intIdunit)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Units
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unit[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Unit::QueryArray to perform the LoadAll query
			try {
				return Unit::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Units
		 * @return int
		 */
		public static function CountAll() {
			// Call Unit::QueryCount to perform the CountAll query
			return Unit::QueryCount(QQ::All());
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
			$objDatabase = Unit::GetDatabase();

			// Create/Build out the QueryBuilder object with Unit-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'unit');

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
				Unit::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('unit');

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
		 * Static Qcubed Query method to query for a single Unit object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Unit the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Unit::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Unit object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Unit::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Unit::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Unit objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Unit[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Unit::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Unit::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Unit::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Unit objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Unit::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Unit::GetDatabase();

			$strQuery = Unit::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/unit', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Unit::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Unit
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'unit';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idunit', $strAliasPrefix . 'idunit');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idunit', $strAliasPrefix . 'idunit');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'decimal_places', $strAliasPrefix . 'decimal_places');
			    $objBuilder->AddSelectItem($strTableName, 'qty_involved', $strAliasPrefix . 'qty_involved');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Unit from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Unit::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Unit
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idunit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdunit == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'unit__';


						// Expanding reverse references: LedgerDetails
						$strAlias = $strAliasPrefix . 'ledgerdetails__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsArray)
								$objPreviousItem->_objLedgerDetailsArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetails__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetails__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherHasItemAsPer
						$strAlias = $strAliasPrefix . 'voucherhasitemasper__idvoucher_has_item';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherHasItemAsPerArray)
								$objPreviousItem->_objVoucherHasItemAsPerArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherHasItemAsPerArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherHasItemAsPerArray;
								$objChildItem = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasper__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherHasItemAsPerArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherHasItemAsPerArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasper__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'unit__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Unit object
			$objToReturn = new Unit();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idunit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdunit = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'decimal_places';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDecimalPlaces = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'qty_involved';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strQtyInvolved = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idunit != $objPreviousItem->Idunit) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objLedgerDetailsArray);
					$cnt = count($objToReturn->_objLedgerDetailsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsArray, $objToReturn->_objLedgerDetailsArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherHasItemAsPerArray);
					$cnt = count($objToReturn->_objVoucherHasItemAsPerArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherHasItemAsPerArray, $objToReturn->_objVoucherHasItemAsPerArray)) {
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
				$strAliasPrefix = 'unit__';




			// Check for LedgerDetails Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetails__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsArray)
				$objToReturn->_objLedgerDetailsArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetails__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetails = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetails__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherHasItemAsPer Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherhasitemasper__idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherHasItemAsPerArray)
				$objToReturn->_objVoucherHasItemAsPerArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherHasItemAsPerArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasper__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherHasItemAsPer = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasper__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Units from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Unit[]
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
					$objItem = Unit::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Unit::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Unit object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Unit next row resulting from the query
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
			return Unit::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Unit object,
		 * by Idunit Index(es)
		 * @param integer $intIdunit
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unit
		*/
		public static function LoadByIdunit($intIdunit, $objOptionalClauses = null) {
			return Unit::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Unit()->Idunit, $intIdunit)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Unit object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Unit
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Unit::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Unit()->Name, $strName)
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
		 * Save this Unit
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `unit` (
							`name`,
							`description`,
							`decimal_places`,
							`qty_involved`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intDecimalPlaces) . ',
							' . $objDatabase->SqlVariable($this->strQtyInvolved) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdunit = $objDatabase->InsertId('unit', 'idunit');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`unit`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`decimal_places` = ' . $objDatabase->SqlVariable($this->intDecimalPlaces) . ',
							`qty_involved` = ' . $objDatabase->SqlVariable($this->strQtyInvolved) . '
						WHERE
							`idunit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
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
		 * Delete this Unit
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Unit with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`unit`
				WHERE
					`idunit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Unit ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Unit', $this->intIdunit);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Units
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`unit`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate unit table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `unit`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Unit from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Unit object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Unit::Load($this->intIdunit);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
			$this->intDecimalPlaces = $objReloaded->intDecimalPlaces;
			$this->strQtyInvolved = $objReloaded->strQtyInvolved;
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
				case 'Idunit':
					/**
					 * Gets the value for intIdunit (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdunit;

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

				case 'DecimalPlaces':
					/**
					 * Gets the value for intDecimalPlaces 
					 * @return integer
					 */
					return $this->intDecimalPlaces;

				case 'QtyInvolved':
					/**
					 * Gets the value for strQtyInvolved 
					 * @return string
					 */
					return $this->strQtyInvolved;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_LedgerDetails':
					/**
					 * Gets the value for the private _objLedgerDetails (Read-Only)
					 * if set due to an expansion on the ledger_details.unit reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetails;

				case '_LedgerDetailsArray':
					/**
					 * Gets the value for the private _objLedgerDetailsArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.unit reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsArray;

				case '_VoucherHasItemAsPer':
					/**
					 * Gets the value for the private _objVoucherHasItemAsPer (Read-Only)
					 * if set due to an expansion on the voucher_has_item.per reverse relationship
					 * @return VoucherHasItem
					 */
					return $this->_objVoucherHasItemAsPer;

				case '_VoucherHasItemAsPerArray':
					/**
					 * Gets the value for the private _objVoucherHasItemAsPerArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher_has_item.per reverse relationship
					 * @return VoucherHasItem[]
					 */
					return $this->_objVoucherHasItemAsPerArray;


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

				case 'DecimalPlaces':
					/**
					 * Sets the value for intDecimalPlaces 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intDecimalPlaces = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'QtyInvolved':
					/**
					 * Sets the value for strQtyInvolved 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strQtyInvolved = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for LedgerDetails
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailses as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsArray($objOptionalClauses = null) {
			if ((is_null($this->intIdunit)))
				return array();

			try {
				return LedgerDetails::LoadArrayByUnit($this->intIdunit, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailses
		 * @return int
		*/
		public function CountLedgerDetailses() {
			if ((is_null($this->intIdunit)))
				return 0;

			return LedgerDetails::CountByUnit($this->intIdunit);
		}

		/**
		 * Associates a LedgerDetails
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetails(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetails on this unsaved Unit.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetails on this Unit with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`unit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetails
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetails(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved Unit.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this Unit with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`unit` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`unit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailses
		 * @return void
		*/
		public function UnassociateAllLedgerDetailses() {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved Unit.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`unit` = null
				WHERE
					`unit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetails
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetails(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved Unit.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this Unit with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`unit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailses
		 * @return void
		*/
		public function DeleteAllLedgerDetailses() {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved Unit.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`unit` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}


		// Related Objects' Methods for VoucherHasItemAsPer
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VoucherHasItemsAsPer as an array of VoucherHasItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public function GetVoucherHasItemAsPerArray($objOptionalClauses = null) {
			if ((is_null($this->intIdunit)))
				return array();

			try {
				return VoucherHasItem::LoadArrayByPer($this->intIdunit, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VoucherHasItemsAsPer
		 * @return int
		*/
		public function CountVoucherHasItemsAsPer() {
			if ((is_null($this->intIdunit)))
				return 0;

			return VoucherHasItem::CountByPer($this->intIdunit);
		}

		/**
		 * Associates a VoucherHasItemAsPer
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function AssociateVoucherHasItemAsPer(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItemAsPer on this unsaved Unit.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItemAsPer on this Unit with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`per` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . '
			');
		}

		/**
		 * Unassociates a VoucherHasItemAsPer
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function UnassociateVoucherHasItemAsPer(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsPer on this unsaved Unit.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsPer on this Unit with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`per` = null
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`per` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}

		/**
		 * Unassociates all VoucherHasItemsAsPer
		 * @return void
		*/
		public function UnassociateAllVoucherHasItemsAsPer() {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsPer on this unsaved Unit.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`per` = null
				WHERE
					`per` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}

		/**
		 * Deletes an associated VoucherHasItemAsPer
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function DeleteAssociatedVoucherHasItemAsPer(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsPer on this unsaved Unit.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsPer on this Unit with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`per` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
			');
		}

		/**
		 * Deletes all associated VoucherHasItemsAsPer
		 * @return void
		*/
		public function DeleteAllVoucherHasItemsAsPer() {
			if ((is_null($this->intIdunit)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsPer on this unsaved Unit.');

			// Get the Database Object for this Class
			$objDatabase = Unit::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`per` = ' . $objDatabase->SqlVariable($this->intIdunit) . '
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
			return "unit";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Unit::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Unit"><sequence>';
			$strToReturn .= '<element name="Idunit" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="DecimalPlaces" type="xsd:int"/>';
			$strToReturn .= '<element name="QtyInvolved" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Unit', $strComplexTypeArray)) {
				$strComplexTypeArray['Unit'] = Unit::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Unit::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Unit();
			if (property_exists($objSoapObject, 'Idunit'))
				$objToReturn->intIdunit = $objSoapObject->Idunit;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'DecimalPlaces'))
				$objToReturn->intDecimalPlaces = $objSoapObject->DecimalPlaces;
			if (property_exists($objSoapObject, 'QtyInvolved'))
				$objToReturn->strQtyInvolved = $objSoapObject->QtyInvolved;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Unit::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Idunit'] = $this->intIdunit;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
			$iArray['DecimalPlaces'] = $this->intDecimalPlaces;
			$iArray['QtyInvolved'] = $this->strQtyInvolved;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdunit ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idunit
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $DecimalPlaces
     * @property-read QQNode $QtyInvolved
     *
     *
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetails
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItemAsPer

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeUnit extends QQNode {
		protected $strTableName = 'unit';
		protected $strPrimaryKey = 'idunit';
		protected $strClassName = 'Unit';
		public function __get($strName) {
			switch ($strName) {
				case 'Idunit':
					return new QQNode('idunit', 'Idunit', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'DecimalPlaces':
					return new QQNode('decimal_places', 'DecimalPlaces', 'Integer', $this);
				case 'QtyInvolved':
					return new QQNode('qty_involved', 'QtyInvolved', 'VarChar', $this);
				case 'LedgerDetails':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetails', 'reverse_reference', 'unit');
				case 'VoucherHasItemAsPer':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitemasper', 'reverse_reference', 'per');

				case '_PrimaryKeyNode':
					return new QQNode('idunit', 'Idunit', 'Integer', $this);
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
     * @property-read QQNode $Idunit
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $DecimalPlaces
     * @property-read QQNode $QtyInvolved
     *
     *
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetails
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItemAsPer

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeUnit extends QQReverseReferenceNode {
		protected $strTableName = 'unit';
		protected $strPrimaryKey = 'idunit';
		protected $strClassName = 'Unit';
		public function __get($strName) {
			switch ($strName) {
				case 'Idunit':
					return new QQNode('idunit', 'Idunit', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'DecimalPlaces':
					return new QQNode('decimal_places', 'DecimalPlaces', 'integer', $this);
				case 'QtyInvolved':
					return new QQNode('qty_involved', 'QtyInvolved', 'string', $this);
				case 'LedgerDetails':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetails', 'reverse_reference', 'unit');
				case 'VoucherHasItemAsPer':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitemasper', 'reverse_reference', 'per');

				case '_PrimaryKeyNode':
					return new QQNode('idunit', 'Idunit', 'integer', $this);
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
