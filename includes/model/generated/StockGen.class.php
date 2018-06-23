<?php
	/**
	 * The abstract StockGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Stock subclass which
	 * extends this StockGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Stock class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idstock the value for intIdstock (Read-Only PK)
	 * @property integer $Item the value for intItem (Not Null)
	 * @property integer $Department the value for intDepartment (Not Null)
	 * @property string $Qty the value for strQty (Not Null)
	 * @property LedgerDetails $ItemObject the value for the LedgerDetails object referenced by intItem (Not Null)
	 * @property Role $DepartmentObject the value for the Role object referenced by intDepartment (Not Null)
	 * @property-read VoucherHasItem $_VoucherHasItemAsRef the value for the private _objVoucherHasItemAsRef (Read-Only) if set due to an expansion on the voucher_has_item.ref_stock reverse relationship
	 * @property-read VoucherHasItem[] $_VoucherHasItemAsRefArray the value for the private _objVoucherHasItemAsRefArray (Read-Only) if set due to an ExpandAsArray on the voucher_has_item.ref_stock reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class StockGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column stock.idstock
		 * @var integer intIdstock
		 */
		protected $intIdstock;
		const IdstockDefault = null;


		/**
		 * Protected member variable that maps to the database column stock.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column stock.department
		 * @var integer intDepartment
		 */
		protected $intDepartment;
		const DepartmentDefault = null;


		/**
		 * Protected member variable that maps to the database column stock.qty
		 * @var string strQty
		 */
		protected $strQty;
		const QtyDefault = null;


		/**
		 * Private member variable that stores a reference to a single VoucherHasItemAsRef object
		 * (of type VoucherHasItem), if this Stock object was restored with
		 * an expansion on the voucher_has_item association table.
		 * @var VoucherHasItem _objVoucherHasItemAsRef;
		 */
		private $_objVoucherHasItemAsRef;

		/**
		 * Private member variable that stores a reference to an array of VoucherHasItemAsRef objects
		 * (of type VoucherHasItem[]), if this Stock object was restored with
		 * an ExpandAsArray on the voucher_has_item association table.
		 * @var VoucherHasItem[] _objVoucherHasItemAsRefArray;
		 */
		private $_objVoucherHasItemAsRefArray = null;

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
		 * in the database column stock.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column stock.department.
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
			$this->intIdstock = Stock::IdstockDefault;
			$this->intItem = Stock::ItemDefault;
			$this->intDepartment = Stock::DepartmentDefault;
			$this->strQty = Stock::QtyDefault;
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
		 * Load a Stock from PK Info
		 * @param integer $intIdstock
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock
		 */
		public static function Load($intIdstock, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Stock', $intIdstock);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Stock::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Stock()->Idstock, $intIdstock)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Stocks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Stock::QueryArray to perform the LoadAll query
			try {
				return Stock::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Stocks
		 * @return int
		 */
		public static function CountAll() {
			// Call Stock::QueryCount to perform the CountAll query
			return Stock::QueryCount(QQ::All());
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
			$objDatabase = Stock::GetDatabase();

			// Create/Build out the QueryBuilder object with Stock-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'stock');

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
				Stock::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('stock');

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
		 * Static Qcubed Query method to query for a single Stock object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Stock the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Stock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Stock object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Stock::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Stock::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Stock objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Stock[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Stock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Stock::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Stock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Stock objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Stock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Stock::GetDatabase();

			$strQuery = Stock::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/stock', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Stock::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Stock
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'stock';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idstock', $strAliasPrefix . 'idstock');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idstock', $strAliasPrefix . 'idstock');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'department', $strAliasPrefix . 'department');
			    $objBuilder->AddSelectItem($strTableName, 'qty', $strAliasPrefix . 'qty');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Stock from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Stock::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Stock
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idstock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdstock == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'stock__';


						// Expanding reverse references: VoucherHasItemAsRef
						$strAlias = $strAliasPrefix . 'voucherhasitemasref__idvoucher_has_item';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherHasItemAsRefArray)
								$objPreviousItem->_objVoucherHasItemAsRefArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherHasItemAsRefArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherHasItemAsRefArray;
								$objChildItem = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasref__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherHasItemAsRefArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherHasItemAsRefArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'stock__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Stock object
			$objToReturn = new Stock();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idstock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdstock = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDepartment = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'qty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strQty = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idstock != $objPreviousItem->Idstock) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objVoucherHasItemAsRefArray);
					$cnt = count($objToReturn->_objVoucherHasItemAsRefArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherHasItemAsRefArray, $objToReturn->_objVoucherHasItemAsRefArray)) {
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
				$strAliasPrefix = 'stock__';

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DepartmentObject Early Binding
			$strAlias = $strAliasPrefix . 'department__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDepartmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'department__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for VoucherHasItemAsRef Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherhasitemasref__idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherHasItemAsRefArray)
				$objToReturn->_objVoucherHasItemAsRefArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherHasItemAsRefArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherHasItemAsRef = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Stocks from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Stock[]
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
					$objItem = Stock::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Stock::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Stock object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Stock next row resulting from the query
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
			return Stock::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Stock object,
		 * by Idstock Index(es)
		 * @param integer $intIdstock
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock
		*/
		public static function LoadByIdstock($intIdstock, $objOptionalClauses = null) {
			return Stock::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Stock()->Idstock, $intIdstock)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Stock objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call Stock::QueryArray to perform the LoadArrayByItem query
			try {
				return Stock::QueryArray(
					QQ::Equal(QQN::Stock()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Stocks
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call Stock::QueryCount to perform the CountByItem query
			return Stock::QueryCount(
				QQ::Equal(QQN::Stock()->Item, $intItem)
			);
		}

		/**
		 * Load an array of Stock objects,
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock[]
		*/
		public static function LoadArrayByDepartment($intDepartment, $objOptionalClauses = null) {
			// Call Stock::QueryArray to perform the LoadArrayByDepartment query
			try {
				return Stock::QueryArray(
					QQ::Equal(QQN::Stock()->Department, $intDepartment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Stocks
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @return int
		*/
		public static function CountByDepartment($intDepartment) {
			// Call Stock::QueryCount to perform the CountByDepartment query
			return Stock::QueryCount(
				QQ::Equal(QQN::Stock()->Department, $intDepartment)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Stock
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `stock` (
							`item`,
							`department`,
							`qty`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->intDepartment) . ',
							' . $objDatabase->SqlVariable($this->strQty) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdstock = $objDatabase->InsertId('stock', 'idstock');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`stock`
						SET
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`department` = ' . $objDatabase->SqlVariable($this->intDepartment) . ',
							`qty` = ' . $objDatabase->SqlVariable($this->strQty) . '
						WHERE
							`idstock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '
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
		 * Delete this Stock
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdstock)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Stock with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock`
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Stock ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Stock', $this->intIdstock);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Stocks
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate stock table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `stock`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Stock from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Stock object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Stock::Load($this->intIdstock);

			// Update $this's local variables to match
			$this->Item = $objReloaded->Item;
			$this->Department = $objReloaded->Department;
			$this->strQty = $objReloaded->strQty;
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
				case 'Idstock':
					/**
					 * Gets the value for intIdstock (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdstock;

				case 'Item':
					/**
					 * Gets the value for intItem (Not Null)
					 * @return integer
					 */
					return $this->intItem;

				case 'Department':
					/**
					 * Gets the value for intDepartment (Not Null)
					 * @return integer
					 */
					return $this->intDepartment;

				case 'Qty':
					/**
					 * Gets the value for strQty (Not Null)
					 * @return string
					 */
					return $this->strQty;


				///////////////////
				// Member Objects
				///////////////////
				case 'ItemObject':
					/**
					 * Gets the value for the LedgerDetails object referenced by intItem (Not Null)
					 * @return LedgerDetails
					 */
					try {
						if ((!$this->objItemObject) && (!is_null($this->intItem)))
							$this->objItemObject = LedgerDetails::Load($this->intItem);
						return $this->objItemObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DepartmentObject':
					/**
					 * Gets the value for the Role object referenced by intDepartment (Not Null)
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

				case '_VoucherHasItemAsRef':
					/**
					 * Gets the value for the private _objVoucherHasItemAsRef (Read-Only)
					 * if set due to an expansion on the voucher_has_item.ref_stock reverse relationship
					 * @return VoucherHasItem
					 */
					return $this->_objVoucherHasItemAsRef;

				case '_VoucherHasItemAsRefArray':
					/**
					 * Gets the value for the private _objVoucherHasItemAsRefArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher_has_item.ref_stock reverse relationship
					 * @return VoucherHasItem[]
					 */
					return $this->_objVoucherHasItemAsRefArray;


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
				case 'Item':
					/**
					 * Sets the value for intItem (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objItemObject = null;
						return ($this->intItem = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Department':
					/**
					 * Sets the value for intDepartment (Not Null)
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

				case 'Qty':
					/**
					 * Sets the value for strQty (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strQty = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ItemObject':
					/**
					 * Sets the value for the LedgerDetails object referenced by intItem (Not Null)
					 * @param LedgerDetails $mixValue
					 * @return LedgerDetails
					 */
					if (is_null($mixValue)) {
						$this->intItem = null;
						$this->objItemObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a LedgerDetails object
						try {
							$mixValue = QType::Cast($mixValue, 'LedgerDetails');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED LedgerDetails object
						if (is_null($mixValue->IdledgerDetails))
							throw new QCallerException('Unable to set an unsaved ItemObject for this Stock');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->IdledgerDetails;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DepartmentObject':
					/**
					 * Sets the value for the Role object referenced by intDepartment (Not Null)
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
							throw new QCallerException('Unable to set an unsaved DepartmentObject for this Stock');

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



		// Related Objects' Methods for VoucherHasItemAsRef
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VoucherHasItemsAsRef as an array of VoucherHasItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public function GetVoucherHasItemAsRefArray($objOptionalClauses = null) {
			if ((is_null($this->intIdstock)))
				return array();

			try {
				return VoucherHasItem::LoadArrayByRefStock($this->intIdstock, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VoucherHasItemsAsRef
		 * @return int
		*/
		public function CountVoucherHasItemsAsRef() {
			if ((is_null($this->intIdstock)))
				return 0;

			return VoucherHasItem::CountByRefStock($this->intIdstock);
		}

		/**
		 * Associates a VoucherHasItemAsRef
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function AssociateVoucherHasItemAsRef(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItemAsRef on this unsaved Stock.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItemAsRef on this Stock with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`ref_stock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . '
			');
		}

		/**
		 * Unassociates a VoucherHasItemAsRef
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function UnassociateVoucherHasItemAsRef(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsRef on this unsaved Stock.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsRef on this Stock with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`ref_stock` = null
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`ref_stock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '
			');
		}

		/**
		 * Unassociates all VoucherHasItemsAsRef
		 * @return void
		*/
		public function UnassociateAllVoucherHasItemsAsRef() {
			if ((is_null($this->intIdstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsRef on this unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`ref_stock` = null
				WHERE
					`ref_stock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '
			');
		}

		/**
		 * Deletes an associated VoucherHasItemAsRef
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function DeleteAssociatedVoucherHasItemAsRef(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsRef on this unsaved Stock.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsRef on this Stock with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`ref_stock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '
			');
		}

		/**
		 * Deletes all associated VoucherHasItemsAsRef
		 * @return void
		*/
		public function DeleteAllVoucherHasItemsAsRef() {
			if ((is_null($this->intIdstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsRef on this unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = Stock::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`ref_stock` = ' . $objDatabase->SqlVariable($this->intIdstock) . '
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
			return "stock";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Stock::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Stock"><sequence>';
			$strToReturn .= '<element name="Idstock" type="xsd:int"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:LedgerDetails"/>';
			$strToReturn .= '<element name="DepartmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Qty" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Stock', $strComplexTypeArray)) {
				$strComplexTypeArray['Stock'] = Stock::GetSoapComplexTypeXml();
				LedgerDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Stock::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Stock();
			if (property_exists($objSoapObject, 'Idstock'))
				$objToReturn->intIdstock = $objSoapObject->Idstock;
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = LedgerDetails::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if ((property_exists($objSoapObject, 'DepartmentObject')) &&
				($objSoapObject->DepartmentObject))
				$objToReturn->DepartmentObject = Role::GetObjectFromSoapObject($objSoapObject->DepartmentObject);
			if (property_exists($objSoapObject, 'Qty'))
				$objToReturn->strQty = $objSoapObject->Qty;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Stock::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objItemObject)
				$objObject->objItemObject = LedgerDetails::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
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
			$iArray['Idstock'] = $this->intIdstock;
			$iArray['Item'] = $this->intItem;
			$iArray['Department'] = $this->intDepartment;
			$iArray['Qty'] = $this->strQty;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdstock ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idstock
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $Qty
     *
     *
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItemAsRef

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeStock extends QQNode {
		protected $strTableName = 'stock';
		protected $strPrimaryKey = 'idstock';
		protected $strClassName = 'Stock';
		public function __get($strName) {
			switch ($strName) {
				case 'Idstock':
					return new QQNode('idstock', 'Idstock', 'Integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'Integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'Integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'Integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'VarChar', $this);
				case 'VoucherHasItemAsRef':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitemasref', 'reverse_reference', 'ref_stock');

				case '_PrimaryKeyNode':
					return new QQNode('idstock', 'Idstock', 'Integer', $this);
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
     * @property-read QQNode $Idstock
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $Qty
     *
     *
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItemAsRef

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeStock extends QQReverseReferenceNode {
		protected $strTableName = 'stock';
		protected $strPrimaryKey = 'idstock';
		protected $strClassName = 'Stock';
		public function __get($strName) {
			switch ($strName) {
				case 'Idstock':
					return new QQNode('idstock', 'Idstock', 'integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'integer', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'string', $this);
				case 'VoucherHasItemAsRef':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitemasref', 'reverse_reference', 'ref_stock');

				case '_PrimaryKeyNode':
					return new QQNode('idstock', 'Idstock', 'integer', $this);
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
