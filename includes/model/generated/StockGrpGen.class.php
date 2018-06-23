<?php
	/**
	 * The abstract StockGrpGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the StockGrp subclass which
	 * extends this StockGrpGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the StockGrp class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdstockGrp the value for intIdstockGrp (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property integer $Parrent the value for intParrent 
	 * @property string $VatRate the value for strVatRate 
	 * @property string $DutiesRate the value for strDutiesRate 
	 * @property string $Depreciation the value for strDepreciation 
	 * @property StockGrp $ParrentObject the value for the StockGrp object referenced by intParrent 
	 * @property-read LedgerDetails $_LedgerDetailsAsBrand the value for the private _objLedgerDetailsAsBrand (Read-Only) if set due to an expansion on the ledger_details.brand reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsBrandArray the value for the private _objLedgerDetailsAsBrandArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.brand reverse relationship
	 * @property-read LedgerDetails $_LedgerDetails the value for the private _objLedgerDetails (Read-Only) if set due to an expansion on the ledger_details.stock_grp reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsArray the value for the private _objLedgerDetailsArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.stock_grp reverse relationship
	 * @property-read StockGrp $_StockGrpAsParrent the value for the private _objStockGrpAsParrent (Read-Only) if set due to an expansion on the stock_grp.parrent reverse relationship
	 * @property-read StockGrp[] $_StockGrpAsParrentArray the value for the private _objStockGrpAsParrentArray (Read-Only) if set due to an ExpandAsArray on the stock_grp.parrent reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class StockGrpGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column stock_grp.idstock_grp
		 * @var integer intIdstockGrp
		 */
		protected $intIdstockGrp;
		const IdstockGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column stock_grp.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column stock_grp.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Protected member variable that maps to the database column stock_grp.vat_rate
		 * @var string strVatRate
		 */
		protected $strVatRate;
		const VatRateDefault = null;


		/**
		 * Protected member variable that maps to the database column stock_grp.duties_rate
		 * @var string strDutiesRate
		 */
		protected $strDutiesRate;
		const DutiesRateDefault = null;


		/**
		 * Protected member variable that maps to the database column stock_grp.depreciation
		 * @var string strDepreciation
		 */
		protected $strDepreciation;
		const DepreciationDefault = null;


		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsBrand object
		 * (of type LedgerDetails), if this StockGrp object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsBrand;
		 */
		private $_objLedgerDetailsAsBrand;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsBrand objects
		 * (of type LedgerDetails[]), if this StockGrp object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsBrandArray;
		 */
		private $_objLedgerDetailsAsBrandArray = null;

		/**
		 * Private member variable that stores a reference to a single LedgerDetails object
		 * (of type LedgerDetails), if this StockGrp object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetails;
		 */
		private $_objLedgerDetails;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetails objects
		 * (of type LedgerDetails[]), if this StockGrp object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsArray;
		 */
		private $_objLedgerDetailsArray = null;

		/**
		 * Private member variable that stores a reference to a single StockGrpAsParrent object
		 * (of type StockGrp), if this StockGrp object was restored with
		 * an expansion on the stock_grp association table.
		 * @var StockGrp _objStockGrpAsParrent;
		 */
		private $_objStockGrpAsParrent;

		/**
		 * Private member variable that stores a reference to an array of StockGrpAsParrent objects
		 * (of type StockGrp[]), if this StockGrp object was restored with
		 * an ExpandAsArray on the stock_grp association table.
		 * @var StockGrp[] _objStockGrpAsParrentArray;
		 */
		private $_objStockGrpAsParrentArray = null;

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
		 * in the database column stock_grp.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this StockGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var StockGrp objParrentObject
		 */
		protected $objParrentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdstockGrp = StockGrp::IdstockGrpDefault;
			$this->strName = StockGrp::NameDefault;
			$this->intParrent = StockGrp::ParrentDefault;
			$this->strVatRate = StockGrp::VatRateDefault;
			$this->strDutiesRate = StockGrp::DutiesRateDefault;
			$this->strDepreciation = StockGrp::DepreciationDefault;
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
		 * Load a StockGrp from PK Info
		 * @param integer $intIdstockGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StockGrp
		 */
		public static function Load($intIdstockGrp, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'StockGrp', $intIdstockGrp);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = StockGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StockGrp()->IdstockGrp, $intIdstockGrp)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all StockGrps
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StockGrp[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call StockGrp::QueryArray to perform the LoadAll query
			try {
				return StockGrp::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all StockGrps
		 * @return int
		 */
		public static function CountAll() {
			// Call StockGrp::QueryCount to perform the CountAll query
			return StockGrp::QueryCount(QQ::All());
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
			$objDatabase = StockGrp::GetDatabase();

			// Create/Build out the QueryBuilder object with StockGrp-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'stock_grp');

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
				StockGrp::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('stock_grp');

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
		 * Static Qcubed Query method to query for a single StockGrp object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return StockGrp the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StockGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new StockGrp object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = StockGrp::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return StockGrp::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of StockGrp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return StockGrp[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StockGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return StockGrp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = StockGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of StockGrp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StockGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = StockGrp::GetDatabase();

			$strQuery = StockGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/stockgrp', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = StockGrp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this StockGrp
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'stock_grp';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idstock_grp', $strAliasPrefix . 'idstock_grp');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idstock_grp', $strAliasPrefix . 'idstock_grp');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
			    $objBuilder->AddSelectItem($strTableName, 'vat_rate', $strAliasPrefix . 'vat_rate');
			    $objBuilder->AddSelectItem($strTableName, 'duties_rate', $strAliasPrefix . 'duties_rate');
			    $objBuilder->AddSelectItem($strTableName, 'depreciation', $strAliasPrefix . 'depreciation');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a StockGrp from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this StockGrp::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return StockGrp
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idstock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdstockGrp == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'stock_grp__';


						// Expanding reverse references: LedgerDetailsAsBrand
						$strAlias = $strAliasPrefix . 'ledgerdetailsasbrand__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsBrandArray)
								$objPreviousItem->_objLedgerDetailsAsBrandArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsBrandArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsBrandArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasbrand__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsBrandArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsBrandArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasbrand__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

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

						// Expanding reverse references: StockGrpAsParrent
						$strAlias = $strAliasPrefix . 'stockgrpasparrent__idstock_grp';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStockGrpAsParrentArray)
								$objPreviousItem->_objStockGrpAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStockGrpAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStockGrpAsParrentArray;
								$objChildItem = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockgrpasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStockGrpAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStockGrpAsParrentArray[] = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockgrpasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'stock_grp__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the StockGrp object
			$objToReturn = new StockGrp();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idstock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdstockGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'vat_rate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strVatRate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'duties_rate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDutiesRate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'depreciation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDepreciation = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdstockGrp != $objPreviousItem->IdstockGrp) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsBrandArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsBrandArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsBrandArray, $objToReturn->_objLedgerDetailsAsBrandArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLedgerDetailsArray);
					$cnt = count($objToReturn->_objLedgerDetailsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsArray, $objToReturn->_objLedgerDetailsArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objStockGrpAsParrentArray);
					$cnt = count($objToReturn->_objStockGrpAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStockGrpAsParrentArray, $objToReturn->_objStockGrpAsParrentArray)) {
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
				$strAliasPrefix = 'stock_grp__';

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idstock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for LedgerDetailsAsBrand Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsasbrand__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsBrandArray)
				$objToReturn->_objLedgerDetailsAsBrandArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsBrandArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasbrand__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsBrand = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsasbrand__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

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

			// Check for StockGrpAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'stockgrpasparrent__idstock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStockGrpAsParrentArray)
				$objToReturn->_objStockGrpAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStockGrpAsParrentArray[] = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockgrpasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStockGrpAsParrent = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockgrpasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of StockGrps from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return StockGrp[]
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
					$objItem = StockGrp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = StockGrp::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single StockGrp object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return StockGrp next row resulting from the query
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
			return StockGrp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single StockGrp object,
		 * by IdstockGrp Index(es)
		 * @param integer $intIdstockGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StockGrp
		*/
		public static function LoadByIdstockGrp($intIdstockGrp, $objOptionalClauses = null) {
			return StockGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StockGrp()->IdstockGrp, $intIdstockGrp)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single StockGrp object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StockGrp
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return StockGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StockGrp()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of StockGrp objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StockGrp[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call StockGrp::QueryArray to perform the LoadArrayByParrent query
			try {
				return StockGrp::QueryArray(
					QQ::Equal(QQN::StockGrp()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count StockGrps
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call StockGrp::QueryCount to perform the CountByParrent query
			return StockGrp::QueryCount(
				QQ::Equal(QQN::StockGrp()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this StockGrp
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `stock_grp` (
							`name`,
							`parrent`,
							`vat_rate`,
							`duties_rate`,
							`depreciation`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . ',
							' . $objDatabase->SqlVariable($this->strVatRate) . ',
							' . $objDatabase->SqlVariable($this->strDutiesRate) . ',
							' . $objDatabase->SqlVariable($this->strDepreciation) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdstockGrp = $objDatabase->InsertId('stock_grp', 'idstock_grp');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`stock_grp`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . ',
							`vat_rate` = ' . $objDatabase->SqlVariable($this->strVatRate) . ',
							`duties_rate` = ' . $objDatabase->SqlVariable($this->strDutiesRate) . ',
							`depreciation` = ' . $objDatabase->SqlVariable($this->strDepreciation) . '
						WHERE
							`idstock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
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
		 * Delete this StockGrp
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this StockGrp with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock_grp`
				WHERE
					`idstock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this StockGrp ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'StockGrp', $this->intIdstockGrp);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all StockGrps
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock_grp`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate stock_grp table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `stock_grp`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this StockGrp from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved StockGrp object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = StockGrp::Load($this->intIdstockGrp);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->Parrent = $objReloaded->Parrent;
			$this->strVatRate = $objReloaded->strVatRate;
			$this->strDutiesRate = $objReloaded->strDutiesRate;
			$this->strDepreciation = $objReloaded->strDepreciation;
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
				case 'IdstockGrp':
					/**
					 * Gets the value for intIdstockGrp (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdstockGrp;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;

				case 'VatRate':
					/**
					 * Gets the value for strVatRate 
					 * @return string
					 */
					return $this->strVatRate;

				case 'DutiesRate':
					/**
					 * Gets the value for strDutiesRate 
					 * @return string
					 */
					return $this->strDutiesRate;

				case 'Depreciation':
					/**
					 * Gets the value for strDepreciation 
					 * @return string
					 */
					return $this->strDepreciation;


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Gets the value for the StockGrp object referenced by intParrent 
					 * @return StockGrp
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = StockGrp::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_LedgerDetailsAsBrand':
					/**
					 * Gets the value for the private _objLedgerDetailsAsBrand (Read-Only)
					 * if set due to an expansion on the ledger_details.brand reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsBrand;

				case '_LedgerDetailsAsBrandArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsBrandArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.brand reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsBrandArray;

				case '_LedgerDetails':
					/**
					 * Gets the value for the private _objLedgerDetails (Read-Only)
					 * if set due to an expansion on the ledger_details.stock_grp reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetails;

				case '_LedgerDetailsArray':
					/**
					 * Gets the value for the private _objLedgerDetailsArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.stock_grp reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsArray;

				case '_StockGrpAsParrent':
					/**
					 * Gets the value for the private _objStockGrpAsParrent (Read-Only)
					 * if set due to an expansion on the stock_grp.parrent reverse relationship
					 * @return StockGrp
					 */
					return $this->_objStockGrpAsParrent;

				case '_StockGrpAsParrentArray':
					/**
					 * Gets the value for the private _objStockGrpAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the stock_grp.parrent reverse relationship
					 * @return StockGrp[]
					 */
					return $this->_objStockGrpAsParrentArray;


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

				case 'Parrent':
					/**
					 * Sets the value for intParrent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParrentObject = null;
						return ($this->intParrent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VatRate':
					/**
					 * Sets the value for strVatRate 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strVatRate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DutiesRate':
					/**
					 * Sets the value for strDutiesRate 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDutiesRate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Depreciation':
					/**
					 * Sets the value for strDepreciation 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDepreciation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Sets the value for the StockGrp object referenced by intParrent 
					 * @param StockGrp $mixValue
					 * @return StockGrp
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a StockGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'StockGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED StockGrp object
						if (is_null($mixValue->IdstockGrp))
							throw new QCallerException('Unable to set an unsaved ParrentObject for this StockGrp');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->IdstockGrp;

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



		// Related Objects' Methods for LedgerDetailsAsBrand
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsBrand as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsBrandArray($objOptionalClauses = null) {
			if ((is_null($this->intIdstockGrp)))
				return array();

			try {
				return LedgerDetails::LoadArrayByBrand($this->intIdstockGrp, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsBrand
		 * @return int
		*/
		public function CountLedgerDetailsesAsBrand() {
			if ((is_null($this->intIdstockGrp)))
				return 0;

			return LedgerDetails::CountByBrand($this->intIdstockGrp);
		}

		/**
		 * Associates a LedgerDetailsAsBrand
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsBrand(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsBrand on this unsaved StockGrp.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsBrand on this StockGrp with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`brand` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsBrand
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsBrand(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsBrand on this unsaved StockGrp.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsBrand on this StockGrp with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`brand` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`brand` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsBrand
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsBrand() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsBrand on this unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`brand` = null
				WHERE
					`brand` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsBrand
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsBrand(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsBrand on this unsaved StockGrp.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsBrand on this StockGrp with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`brand` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsBrand
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsBrand() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsBrand on this unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`brand` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}


		// Related Objects' Methods for LedgerDetails
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailses as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsArray($objOptionalClauses = null) {
			if ((is_null($this->intIdstockGrp)))
				return array();

			try {
				return LedgerDetails::LoadArrayByStockGrp($this->intIdstockGrp, $objOptionalClauses);
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
			if ((is_null($this->intIdstockGrp)))
				return 0;

			return LedgerDetails::CountByStockGrp($this->intIdstockGrp);
		}

		/**
		 * Associates a LedgerDetails
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetails(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetails on this unsaved StockGrp.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetails on this StockGrp with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`stock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
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
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved StockGrp.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this StockGrp with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`stock_grp` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`stock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailses
		 * @return void
		*/
		public function UnassociateAllLedgerDetailses() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`stock_grp` = null
				WHERE
					`stock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetails
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetails(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved StockGrp.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this StockGrp with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`stock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailses
		 * @return void
		*/
		public function DeleteAllLedgerDetailses() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetails on this unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`stock_grp` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}


		// Related Objects' Methods for StockGrpAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StockGrpsAsParrent as an array of StockGrp objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StockGrp[]
		*/
		public function GetStockGrpAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdstockGrp)))
				return array();

			try {
				return StockGrp::LoadArrayByParrent($this->intIdstockGrp, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StockGrpsAsParrent
		 * @return int
		*/
		public function CountStockGrpsAsParrent() {
			if ((is_null($this->intIdstockGrp)))
				return 0;

			return StockGrp::CountByParrent($this->intIdstockGrp);
		}

		/**
		 * Associates a StockGrpAsParrent
		 * @param StockGrp $objStockGrp
		 * @return void
		*/
		public function AssociateStockGrpAsParrent(StockGrp $objStockGrp) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStockGrpAsParrent on this unsaved StockGrp.');
			if ((is_null($objStockGrp->IdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStockGrpAsParrent on this StockGrp with an unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock_grp`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
				WHERE
					`idstock_grp` = ' . $objDatabase->SqlVariable($objStockGrp->IdstockGrp) . '
			');
		}

		/**
		 * Unassociates a StockGrpAsParrent
		 * @param StockGrp $objStockGrp
		 * @return void
		*/
		public function UnassociateStockGrpAsParrent(StockGrp $objStockGrp) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockGrpAsParrent on this unsaved StockGrp.');
			if ((is_null($objStockGrp->IdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockGrpAsParrent on this StockGrp with an unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock_grp`
				SET
					`parrent` = null
				WHERE
					`idstock_grp` = ' . $objDatabase->SqlVariable($objStockGrp->IdstockGrp) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Unassociates all StockGrpsAsParrent
		 * @return void
		*/
		public function UnassociateAllStockGrpsAsParrent() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockGrpAsParrent on this unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock_grp`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Deletes an associated StockGrpAsParrent
		 * @param StockGrp $objStockGrp
		 * @return void
		*/
		public function DeleteAssociatedStockGrpAsParrent(StockGrp $objStockGrp) {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockGrpAsParrent on this unsaved StockGrp.');
			if ((is_null($objStockGrp->IdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockGrpAsParrent on this StockGrp with an unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock_grp`
				WHERE
					`idstock_grp` = ' . $objDatabase->SqlVariable($objStockGrp->IdstockGrp) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
			');
		}

		/**
		 * Deletes all associated StockGrpsAsParrent
		 * @return void
		*/
		public function DeleteAllStockGrpsAsParrent() {
			if ((is_null($this->intIdstockGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockGrpAsParrent on this unsaved StockGrp.');

			// Get the Database Object for this Class
			$objDatabase = StockGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock_grp`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdstockGrp) . '
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
			return "stock_grp";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[StockGrp::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="StockGrp"><sequence>';
			$strToReturn .= '<element name="IdstockGrp" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:StockGrp"/>';
			$strToReturn .= '<element name="VatRate" type="xsd:string"/>';
			$strToReturn .= '<element name="DutiesRate" type="xsd:string"/>';
			$strToReturn .= '<element name="Depreciation" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('StockGrp', $strComplexTypeArray)) {
				$strComplexTypeArray['StockGrp'] = StockGrp::GetSoapComplexTypeXml();
				StockGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, StockGrp::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new StockGrp();
			if (property_exists($objSoapObject, 'IdstockGrp'))
				$objToReturn->intIdstockGrp = $objSoapObject->IdstockGrp;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = StockGrp::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, 'VatRate'))
				$objToReturn->strVatRate = $objSoapObject->VatRate;
			if (property_exists($objSoapObject, 'DutiesRate'))
				$objToReturn->strDutiesRate = $objSoapObject->DutiesRate;
			if (property_exists($objSoapObject, 'Depreciation'))
				$objToReturn->strDepreciation = $objSoapObject->Depreciation;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, StockGrp::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = StockGrp::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
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
			$iArray['IdstockGrp'] = $this->intIdstockGrp;
			$iArray['Name'] = $this->strName;
			$iArray['Parrent'] = $this->intParrent;
			$iArray['VatRate'] = $this->strVatRate;
			$iArray['DutiesRate'] = $this->strDutiesRate;
			$iArray['Depreciation'] = $this->strDepreciation;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdstockGrp ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdstockGrp
     * @property-read QQNode $Name
     * @property-read QQNode $Parrent
     * @property-read QQNodeStockGrp $ParrentObject
     * @property-read QQNode $VatRate
     * @property-read QQNode $DutiesRate
     * @property-read QQNode $Depreciation
     *
     *
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsBrand
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetails
     * @property-read QQReverseReferenceNodeStockGrp $StockGrpAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeStockGrp extends QQNode {
		protected $strTableName = 'stock_grp';
		protected $strPrimaryKey = 'idstock_grp';
		protected $strClassName = 'StockGrp';
		public function __get($strName) {
			switch ($strName) {
				case 'IdstockGrp':
					return new QQNode('idstock_grp', 'IdstockGrp', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeStockGrp('parrent', 'ParrentObject', 'Integer', $this);
				case 'VatRate':
					return new QQNode('vat_rate', 'VatRate', 'VarChar', $this);
				case 'DutiesRate':
					return new QQNode('duties_rate', 'DutiesRate', 'VarChar', $this);
				case 'Depreciation':
					return new QQNode('depreciation', 'Depreciation', 'VarChar', $this);
				case 'LedgerDetailsAsBrand':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasbrand', 'reverse_reference', 'brand');
				case 'LedgerDetails':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetails', 'reverse_reference', 'stock_grp');
				case 'StockGrpAsParrent':
					return new QQReverseReferenceNodeStockGrp($this, 'stockgrpasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idstock_grp', 'IdstockGrp', 'Integer', $this);
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
     * @property-read QQNode $IdstockGrp
     * @property-read QQNode $Name
     * @property-read QQNode $Parrent
     * @property-read QQNodeStockGrp $ParrentObject
     * @property-read QQNode $VatRate
     * @property-read QQNode $DutiesRate
     * @property-read QQNode $Depreciation
     *
     *
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsBrand
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetails
     * @property-read QQReverseReferenceNodeStockGrp $StockGrpAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeStockGrp extends QQReverseReferenceNode {
		protected $strTableName = 'stock_grp';
		protected $strPrimaryKey = 'idstock_grp';
		protected $strClassName = 'StockGrp';
		public function __get($strName) {
			switch ($strName) {
				case 'IdstockGrp':
					return new QQNode('idstock_grp', 'IdstockGrp', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeStockGrp('parrent', 'ParrentObject', 'integer', $this);
				case 'VatRate':
					return new QQNode('vat_rate', 'VatRate', 'string', $this);
				case 'DutiesRate':
					return new QQNode('duties_rate', 'DutiesRate', 'string', $this);
				case 'Depreciation':
					return new QQNode('depreciation', 'Depreciation', 'string', $this);
				case 'LedgerDetailsAsBrand':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsasbrand', 'reverse_reference', 'brand');
				case 'LedgerDetails':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetails', 'reverse_reference', 'stock_grp');
				case 'StockGrpAsParrent':
					return new QQReverseReferenceNodeStockGrp($this, 'stockgrpasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idstock_grp', 'IdstockGrp', 'integer', $this);
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
