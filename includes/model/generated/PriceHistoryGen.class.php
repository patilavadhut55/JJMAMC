<?php
	/**
	 * The abstract PriceHistoryGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the PriceHistory subclass which
	 * extends this PriceHistoryGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the PriceHistory class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdpriceHistory the value for intIdpriceHistory (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $Godown the value for intGodown (Not Null)
	 * @property integer $Item the value for intItem (Not Null)
	 * @property string $Opening the value for strOpening 
	 * @property string $Inword the value for strInword 
	 * @property string $Outward the value for strOutward 
	 * @property string $Closing the value for strClosing 
	 * @property string $Cost the value for strCost 
	 * @property string $Dp the value for strDp 
	 * @property string $Mrp the value for strMrp 
	 * @property integer $RefVov the value for intRefVov 
	 * @property integer $RefIwow the value for intRefIwow 
	 * @property Role $GodownObject the value for the Role object referenced by intGodown (Not Null)
	 * @property LedgerDetails $ItemObject the value for the LedgerDetails object referenced by intItem (Not Null)
	 * @property VoucherHasItem $RefVovObject the value for the VoucherHasItem object referenced by intRefVov 
	 * @property Iwow $RefIwowObject the value for the Iwow object referenced by intRefIwow 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PriceHistoryGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column price_history.idprice_history
		 * @var integer intIdpriceHistory
		 */
		protected $intIdpriceHistory;
		const IdpriceHistoryDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.godown
		 * @var integer intGodown
		 */
		protected $intGodown;
		const GodownDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.opening
		 * @var string strOpening
		 */
		protected $strOpening;
		const OpeningDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.inword
		 * @var string strInword
		 */
		protected $strInword;
		const InwordDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.outward
		 * @var string strOutward
		 */
		protected $strOutward;
		const OutwardDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.closing
		 * @var string strClosing
		 */
		protected $strClosing;
		const ClosingDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.cost
		 * @var string strCost
		 */
		protected $strCost;
		const CostDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.dp
		 * @var string strDp
		 */
		protected $strDp;
		const DpDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.mrp
		 * @var string strMrp
		 */
		protected $strMrp;
		const MrpDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.ref_vov
		 * @var integer intRefVov
		 */
		protected $intRefVov;
		const RefVovDefault = null;


		/**
		 * Protected member variable that maps to the database column price_history.ref_iwow
		 * @var integer intRefIwow
		 */
		protected $intRefIwow;
		const RefIwowDefault = null;


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
		 * in the database column price_history.godown.
		 *
		 * NOTE: Always use the GodownObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objGodownObject
		 */
		protected $objGodownObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column price_history.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column price_history.ref_vov.
		 *
		 * NOTE: Always use the RefVovObject property getter to correctly retrieve this VoucherHasItem object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var VoucherHasItem objRefVovObject
		 */
		protected $objRefVovObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column price_history.ref_iwow.
		 *
		 * NOTE: Always use the RefIwowObject property getter to correctly retrieve this Iwow object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Iwow objRefIwowObject
		 */
		protected $objRefIwowObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdpriceHistory = PriceHistory::IdpriceHistoryDefault;
			$this->dttDate = (PriceHistory::DateDefault === null)?null:new QDateTime(PriceHistory::DateDefault);
			$this->intGodown = PriceHistory::GodownDefault;
			$this->intItem = PriceHistory::ItemDefault;
			$this->strOpening = PriceHistory::OpeningDefault;
			$this->strInword = PriceHistory::InwordDefault;
			$this->strOutward = PriceHistory::OutwardDefault;
			$this->strClosing = PriceHistory::ClosingDefault;
			$this->strCost = PriceHistory::CostDefault;
			$this->strDp = PriceHistory::DpDefault;
			$this->strMrp = PriceHistory::MrpDefault;
			$this->intRefVov = PriceHistory::RefVovDefault;
			$this->intRefIwow = PriceHistory::RefIwowDefault;
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
		 * Load a PriceHistory from PK Info
		 * @param integer $intIdpriceHistory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory
		 */
		public static function Load($intIdpriceHistory, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'PriceHistory', $intIdpriceHistory);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = PriceHistory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::PriceHistory()->IdpriceHistory, $intIdpriceHistory)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all PriceHistories
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call PriceHistory::QueryArray to perform the LoadAll query
			try {
				return PriceHistory::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all PriceHistories
		 * @return int
		 */
		public static function CountAll() {
			// Call PriceHistory::QueryCount to perform the CountAll query
			return PriceHistory::QueryCount(QQ::All());
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
			$objDatabase = PriceHistory::GetDatabase();

			// Create/Build out the QueryBuilder object with PriceHistory-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'price_history');

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
				PriceHistory::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('price_history');

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
		 * Static Qcubed Query method to query for a single PriceHistory object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return PriceHistory the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = PriceHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new PriceHistory object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = PriceHistory::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return PriceHistory::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of PriceHistory objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return PriceHistory[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = PriceHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return PriceHistory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = PriceHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of PriceHistory objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = PriceHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = PriceHistory::GetDatabase();

			$strQuery = PriceHistory::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/pricehistory', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = PriceHistory::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this PriceHistory
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'price_history';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idprice_history', $strAliasPrefix . 'idprice_history');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idprice_history', $strAliasPrefix . 'idprice_history');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'godown', $strAliasPrefix . 'godown');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'opening', $strAliasPrefix . 'opening');
			    $objBuilder->AddSelectItem($strTableName, 'inword', $strAliasPrefix . 'inword');
			    $objBuilder->AddSelectItem($strTableName, 'outward', $strAliasPrefix . 'outward');
			    $objBuilder->AddSelectItem($strTableName, 'closing', $strAliasPrefix . 'closing');
			    $objBuilder->AddSelectItem($strTableName, 'cost', $strAliasPrefix . 'cost');
			    $objBuilder->AddSelectItem($strTableName, 'dp', $strAliasPrefix . 'dp');
			    $objBuilder->AddSelectItem($strTableName, 'mrp', $strAliasPrefix . 'mrp');
			    $objBuilder->AddSelectItem($strTableName, 'ref_vov', $strAliasPrefix . 'ref_vov');
			    $objBuilder->AddSelectItem($strTableName, 'ref_iwow', $strAliasPrefix . 'ref_iwow');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a PriceHistory from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this PriceHistory::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return PriceHistory
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the PriceHistory object
			$objToReturn = new PriceHistory();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idprice_history';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdpriceHistory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'godown';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGodown = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'opening';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOpening = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'inword';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strInword = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'outward';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOutward = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'closing';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strClosing = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'cost';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCost = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'dp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mrp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMrp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'ref_vov';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefVov = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ref_iwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefIwow = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdpriceHistory != $objPreviousItem->IdpriceHistory) {
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
				$strAliasPrefix = 'price_history__';

			// Check for GodownObject Early Binding
			$strAlias = $strAliasPrefix . 'godown__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGodownObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'godown__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefVovObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_vov__idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefVovObject = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_vov__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefIwowObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_iwow__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefIwowObject = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_iwow__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of PriceHistories from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return PriceHistory[]
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
					$objItem = PriceHistory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = PriceHistory::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single PriceHistory object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return PriceHistory next row resulting from the query
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
			return PriceHistory::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single PriceHistory object,
		 * by IdpriceHistory Index(es)
		 * @param integer $intIdpriceHistory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory
		*/
		public static function LoadByIdpriceHistory($intIdpriceHistory, $objOptionalClauses = null) {
			return PriceHistory::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::PriceHistory()->IdpriceHistory, $intIdpriceHistory)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of PriceHistory objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call PriceHistory::QueryArray to perform the LoadArrayByItem query
			try {
				return PriceHistory::QueryArray(
					QQ::Equal(QQN::PriceHistory()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count PriceHistories
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call PriceHistory::QueryCount to perform the CountByItem query
			return PriceHistory::QueryCount(
				QQ::Equal(QQN::PriceHistory()->Item, $intItem)
			);
		}

		/**
		 * Load an array of PriceHistory objects,
		 * by Godown Index(es)
		 * @param integer $intGodown
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public static function LoadArrayByGodown($intGodown, $objOptionalClauses = null) {
			// Call PriceHistory::QueryArray to perform the LoadArrayByGodown query
			try {
				return PriceHistory::QueryArray(
					QQ::Equal(QQN::PriceHistory()->Godown, $intGodown),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count PriceHistories
		 * by Godown Index(es)
		 * @param integer $intGodown
		 * @return int
		*/
		public static function CountByGodown($intGodown) {
			// Call PriceHistory::QueryCount to perform the CountByGodown query
			return PriceHistory::QueryCount(
				QQ::Equal(QQN::PriceHistory()->Godown, $intGodown)
			);
		}

		/**
		 * Load an array of PriceHistory objects,
		 * by RefIwow Index(es)
		 * @param integer $intRefIwow
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public static function LoadArrayByRefIwow($intRefIwow, $objOptionalClauses = null) {
			// Call PriceHistory::QueryArray to perform the LoadArrayByRefIwow query
			try {
				return PriceHistory::QueryArray(
					QQ::Equal(QQN::PriceHistory()->RefIwow, $intRefIwow),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count PriceHistories
		 * by RefIwow Index(es)
		 * @param integer $intRefIwow
		 * @return int
		*/
		public static function CountByRefIwow($intRefIwow) {
			// Call PriceHistory::QueryCount to perform the CountByRefIwow query
			return PriceHistory::QueryCount(
				QQ::Equal(QQN::PriceHistory()->RefIwow, $intRefIwow)
			);
		}

		/**
		 * Load an array of PriceHistory objects,
		 * by RefVov Index(es)
		 * @param integer $intRefVov
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public static function LoadArrayByRefVov($intRefVov, $objOptionalClauses = null) {
			// Call PriceHistory::QueryArray to perform the LoadArrayByRefVov query
			try {
				return PriceHistory::QueryArray(
					QQ::Equal(QQN::PriceHistory()->RefVov, $intRefVov),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count PriceHistories
		 * by RefVov Index(es)
		 * @param integer $intRefVov
		 * @return int
		*/
		public static function CountByRefVov($intRefVov) {
			// Call PriceHistory::QueryCount to perform the CountByRefVov query
			return PriceHistory::QueryCount(
				QQ::Equal(QQN::PriceHistory()->RefVov, $intRefVov)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this PriceHistory
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = PriceHistory::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `price_history` (
							`date`,
							`godown`,
							`item`,
							`opening`,
							`inword`,
							`outward`,
							`closing`,
							`cost`,
							`dp`,
							`mrp`,
							`ref_vov`,
							`ref_iwow`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intGodown) . ',
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->strOpening) . ',
							' . $objDatabase->SqlVariable($this->strInword) . ',
							' . $objDatabase->SqlVariable($this->strOutward) . ',
							' . $objDatabase->SqlVariable($this->strClosing) . ',
							' . $objDatabase->SqlVariable($this->strCost) . ',
							' . $objDatabase->SqlVariable($this->strDp) . ',
							' . $objDatabase->SqlVariable($this->strMrp) . ',
							' . $objDatabase->SqlVariable($this->intRefVov) . ',
							' . $objDatabase->SqlVariable($this->intRefIwow) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdpriceHistory = $objDatabase->InsertId('price_history', 'idprice_history');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`price_history`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`godown` = ' . $objDatabase->SqlVariable($this->intGodown) . ',
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`opening` = ' . $objDatabase->SqlVariable($this->strOpening) . ',
							`inword` = ' . $objDatabase->SqlVariable($this->strInword) . ',
							`outward` = ' . $objDatabase->SqlVariable($this->strOutward) . ',
							`closing` = ' . $objDatabase->SqlVariable($this->strClosing) . ',
							`cost` = ' . $objDatabase->SqlVariable($this->strCost) . ',
							`dp` = ' . $objDatabase->SqlVariable($this->strDp) . ',
							`mrp` = ' . $objDatabase->SqlVariable($this->strMrp) . ',
							`ref_vov` = ' . $objDatabase->SqlVariable($this->intRefVov) . ',
							`ref_iwow` = ' . $objDatabase->SqlVariable($this->intRefIwow) . '
						WHERE
							`idprice_history` = ' . $objDatabase->SqlVariable($this->intIdpriceHistory) . '
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
		 * Delete this PriceHistory
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this PriceHistory with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = PriceHistory::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($this->intIdpriceHistory) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this PriceHistory ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'PriceHistory', $this->intIdpriceHistory);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all PriceHistories
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = PriceHistory::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate price_history table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = PriceHistory::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `price_history`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this PriceHistory from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved PriceHistory object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = PriceHistory::Load($this->intIdpriceHistory);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->Godown = $objReloaded->Godown;
			$this->Item = $objReloaded->Item;
			$this->strOpening = $objReloaded->strOpening;
			$this->strInword = $objReloaded->strInword;
			$this->strOutward = $objReloaded->strOutward;
			$this->strClosing = $objReloaded->strClosing;
			$this->strCost = $objReloaded->strCost;
			$this->strDp = $objReloaded->strDp;
			$this->strMrp = $objReloaded->strMrp;
			$this->RefVov = $objReloaded->RefVov;
			$this->RefIwow = $objReloaded->RefIwow;
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
				case 'IdpriceHistory':
					/**
					 * Gets the value for intIdpriceHistory (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdpriceHistory;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Godown':
					/**
					 * Gets the value for intGodown (Not Null)
					 * @return integer
					 */
					return $this->intGodown;

				case 'Item':
					/**
					 * Gets the value for intItem (Not Null)
					 * @return integer
					 */
					return $this->intItem;

				case 'Opening':
					/**
					 * Gets the value for strOpening 
					 * @return string
					 */
					return $this->strOpening;

				case 'Inword':
					/**
					 * Gets the value for strInword 
					 * @return string
					 */
					return $this->strInword;

				case 'Outward':
					/**
					 * Gets the value for strOutward 
					 * @return string
					 */
					return $this->strOutward;

				case 'Closing':
					/**
					 * Gets the value for strClosing 
					 * @return string
					 */
					return $this->strClosing;

				case 'Cost':
					/**
					 * Gets the value for strCost 
					 * @return string
					 */
					return $this->strCost;

				case 'Dp':
					/**
					 * Gets the value for strDp 
					 * @return string
					 */
					return $this->strDp;

				case 'Mrp':
					/**
					 * Gets the value for strMrp 
					 * @return string
					 */
					return $this->strMrp;

				case 'RefVov':
					/**
					 * Gets the value for intRefVov 
					 * @return integer
					 */
					return $this->intRefVov;

				case 'RefIwow':
					/**
					 * Gets the value for intRefIwow 
					 * @return integer
					 */
					return $this->intRefIwow;


				///////////////////
				// Member Objects
				///////////////////
				case 'GodownObject':
					/**
					 * Gets the value for the Role object referenced by intGodown (Not Null)
					 * @return Role
					 */
					try {
						if ((!$this->objGodownObject) && (!is_null($this->intGodown)))
							$this->objGodownObject = Role::Load($this->intGodown);
						return $this->objGodownObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'RefVovObject':
					/**
					 * Gets the value for the VoucherHasItem object referenced by intRefVov 
					 * @return VoucherHasItem
					 */
					try {
						if ((!$this->objRefVovObject) && (!is_null($this->intRefVov)))
							$this->objRefVovObject = VoucherHasItem::Load($this->intRefVov);
						return $this->objRefVovObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefIwowObject':
					/**
					 * Gets the value for the Iwow object referenced by intRefIwow 
					 * @return Iwow
					 */
					try {
						if ((!$this->objRefIwowObject) && (!is_null($this->intRefIwow)))
							$this->objRefIwowObject = Iwow::Load($this->intRefIwow);
						return $this->objRefIwowObject;
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
					 * Sets the value for dttDate (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Godown':
					/**
					 * Sets the value for intGodown (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objGodownObject = null;
						return ($this->intGodown = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'Opening':
					/**
					 * Sets the value for strOpening 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOpening = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Inword':
					/**
					 * Sets the value for strInword 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInword = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Outward':
					/**
					 * Sets the value for strOutward 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOutward = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Closing':
					/**
					 * Sets the value for strClosing 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strClosing = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cost':
					/**
					 * Sets the value for strCost 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCost = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Dp':
					/**
					 * Sets the value for strDp 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Mrp':
					/**
					 * Sets the value for strMrp 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMrp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefVov':
					/**
					 * Sets the value for intRefVov 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefVovObject = null;
						return ($this->intRefVov = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefIwow':
					/**
					 * Sets the value for intRefIwow 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefIwowObject = null;
						return ($this->intRefIwow = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'GodownObject':
					/**
					 * Sets the value for the Role object referenced by intGodown (Not Null)
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intGodown = null;
						$this->objGodownObject = null;
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
							throw new QCallerException('Unable to set an unsaved GodownObject for this PriceHistory');

						// Update Local Member Variables
						$this->objGodownObject = $mixValue;
						$this->intGodown = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved ItemObject for this PriceHistory');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->IdledgerDetails;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefVovObject':
					/**
					 * Sets the value for the VoucherHasItem object referenced by intRefVov 
					 * @param VoucherHasItem $mixValue
					 * @return VoucherHasItem
					 */
					if (is_null($mixValue)) {
						$this->intRefVov = null;
						$this->objRefVovObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a VoucherHasItem object
						try {
							$mixValue = QType::Cast($mixValue, 'VoucherHasItem');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED VoucherHasItem object
						if (is_null($mixValue->IdvoucherHasItem))
							throw new QCallerException('Unable to set an unsaved RefVovObject for this PriceHistory');

						// Update Local Member Variables
						$this->objRefVovObject = $mixValue;
						$this->intRefVov = $mixValue->IdvoucherHasItem;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefIwowObject':
					/**
					 * Sets the value for the Iwow object referenced by intRefIwow 
					 * @param Iwow $mixValue
					 * @return Iwow
					 */
					if (is_null($mixValue)) {
						$this->intRefIwow = null;
						$this->objRefIwowObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Iwow object
						try {
							$mixValue = QType::Cast($mixValue, 'Iwow');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Iwow object
						if (is_null($mixValue->Idiwow))
							throw new QCallerException('Unable to set an unsaved RefIwowObject for this PriceHistory');

						// Update Local Member Variables
						$this->objRefIwowObject = $mixValue;
						$this->intRefIwow = $mixValue->Idiwow;

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
			return "price_history";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[PriceHistory::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="PriceHistory"><sequence>';
			$strToReturn .= '<element name="IdpriceHistory" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="GodownObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:LedgerDetails"/>';
			$strToReturn .= '<element name="Opening" type="xsd:string"/>';
			$strToReturn .= '<element name="Inword" type="xsd:string"/>';
			$strToReturn .= '<element name="Outward" type="xsd:string"/>';
			$strToReturn .= '<element name="Closing" type="xsd:string"/>';
			$strToReturn .= '<element name="Cost" type="xsd:string"/>';
			$strToReturn .= '<element name="Dp" type="xsd:string"/>';
			$strToReturn .= '<element name="Mrp" type="xsd:string"/>';
			$strToReturn .= '<element name="RefVovObject" type="xsd1:VoucherHasItem"/>';
			$strToReturn .= '<element name="RefIwowObject" type="xsd1:Iwow"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('PriceHistory', $strComplexTypeArray)) {
				$strComplexTypeArray['PriceHistory'] = PriceHistory::GetSoapComplexTypeXml();
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				LedgerDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				VoucherHasItem::AlterSoapComplexTypeArray($strComplexTypeArray);
				Iwow::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, PriceHistory::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new PriceHistory();
			if (property_exists($objSoapObject, 'IdpriceHistory'))
				$objToReturn->intIdpriceHistory = $objSoapObject->IdpriceHistory;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'GodownObject')) &&
				($objSoapObject->GodownObject))
				$objToReturn->GodownObject = Role::GetObjectFromSoapObject($objSoapObject->GodownObject);
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = LedgerDetails::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if (property_exists($objSoapObject, 'Opening'))
				$objToReturn->strOpening = $objSoapObject->Opening;
			if (property_exists($objSoapObject, 'Inword'))
				$objToReturn->strInword = $objSoapObject->Inword;
			if (property_exists($objSoapObject, 'Outward'))
				$objToReturn->strOutward = $objSoapObject->Outward;
			if (property_exists($objSoapObject, 'Closing'))
				$objToReturn->strClosing = $objSoapObject->Closing;
			if (property_exists($objSoapObject, 'Cost'))
				$objToReturn->strCost = $objSoapObject->Cost;
			if (property_exists($objSoapObject, 'Dp'))
				$objToReturn->strDp = $objSoapObject->Dp;
			if (property_exists($objSoapObject, 'Mrp'))
				$objToReturn->strMrp = $objSoapObject->Mrp;
			if ((property_exists($objSoapObject, 'RefVovObject')) &&
				($objSoapObject->RefVovObject))
				$objToReturn->RefVovObject = VoucherHasItem::GetObjectFromSoapObject($objSoapObject->RefVovObject);
			if ((property_exists($objSoapObject, 'RefIwowObject')) &&
				($objSoapObject->RefIwowObject))
				$objToReturn->RefIwowObject = Iwow::GetObjectFromSoapObject($objSoapObject->RefIwowObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, PriceHistory::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objGodownObject)
				$objObject->objGodownObject = Role::GetSoapObjectFromObject($objObject->objGodownObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGodown = null;
			if ($objObject->objItemObject)
				$objObject->objItemObject = LedgerDetails::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
			if ($objObject->objRefVovObject)
				$objObject->objRefVovObject = VoucherHasItem::GetSoapObjectFromObject($objObject->objRefVovObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefVov = null;
			if ($objObject->objRefIwowObject)
				$objObject->objRefIwowObject = Iwow::GetSoapObjectFromObject($objObject->objRefIwowObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefIwow = null;
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
			$iArray['IdpriceHistory'] = $this->intIdpriceHistory;
			$iArray['Date'] = $this->dttDate;
			$iArray['Godown'] = $this->intGodown;
			$iArray['Item'] = $this->intItem;
			$iArray['Opening'] = $this->strOpening;
			$iArray['Inword'] = $this->strInword;
			$iArray['Outward'] = $this->strOutward;
			$iArray['Closing'] = $this->strClosing;
			$iArray['Cost'] = $this->strCost;
			$iArray['Dp'] = $this->strDp;
			$iArray['Mrp'] = $this->strMrp;
			$iArray['RefVov'] = $this->intRefVov;
			$iArray['RefIwow'] = $this->intRefIwow;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdpriceHistory ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdpriceHistory
     * @property-read QQNode $Date
     * @property-read QQNode $Godown
     * @property-read QQNodeRole $GodownObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Opening
     * @property-read QQNode $Inword
     * @property-read QQNode $Outward
     * @property-read QQNode $Closing
     * @property-read QQNode $Cost
     * @property-read QQNode $Dp
     * @property-read QQNode $Mrp
     * @property-read QQNode $RefVov
     * @property-read QQNodeVoucherHasItem $RefVovObject
     * @property-read QQNode $RefIwow
     * @property-read QQNodeIwow $RefIwowObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePriceHistory extends QQNode {
		protected $strTableName = 'price_history';
		protected $strPrimaryKey = 'idprice_history';
		protected $strClassName = 'PriceHistory';
		public function __get($strName) {
			switch ($strName) {
				case 'IdpriceHistory':
					return new QQNode('idprice_history', 'IdpriceHistory', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'Date', $this);
				case 'Godown':
					return new QQNode('godown', 'Godown', 'Integer', $this);
				case 'GodownObject':
					return new QQNodeRole('godown', 'GodownObject', 'Integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'Integer', $this);
				case 'Opening':
					return new QQNode('opening', 'Opening', 'VarChar', $this);
				case 'Inword':
					return new QQNode('inword', 'Inword', 'VarChar', $this);
				case 'Outward':
					return new QQNode('outward', 'Outward', 'VarChar', $this);
				case 'Closing':
					return new QQNode('closing', 'Closing', 'VarChar', $this);
				case 'Cost':
					return new QQNode('cost', 'Cost', 'VarChar', $this);
				case 'Dp':
					return new QQNode('dp', 'Dp', 'VarChar', $this);
				case 'Mrp':
					return new QQNode('mrp', 'Mrp', 'VarChar', $this);
				case 'RefVov':
					return new QQNode('ref_vov', 'RefVov', 'Integer', $this);
				case 'RefVovObject':
					return new QQNodeVoucherHasItem('ref_vov', 'RefVovObject', 'Integer', $this);
				case 'RefIwow':
					return new QQNode('ref_iwow', 'RefIwow', 'Integer', $this);
				case 'RefIwowObject':
					return new QQNodeIwow('ref_iwow', 'RefIwowObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idprice_history', 'IdpriceHistory', 'Integer', $this);
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
     * @property-read QQNode $IdpriceHistory
     * @property-read QQNode $Date
     * @property-read QQNode $Godown
     * @property-read QQNodeRole $GodownObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Opening
     * @property-read QQNode $Inword
     * @property-read QQNode $Outward
     * @property-read QQNode $Closing
     * @property-read QQNode $Cost
     * @property-read QQNode $Dp
     * @property-read QQNode $Mrp
     * @property-read QQNode $RefVov
     * @property-read QQNodeVoucherHasItem $RefVovObject
     * @property-read QQNode $RefIwow
     * @property-read QQNodeIwow $RefIwowObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePriceHistory extends QQReverseReferenceNode {
		protected $strTableName = 'price_history';
		protected $strPrimaryKey = 'idprice_history';
		protected $strClassName = 'PriceHistory';
		public function __get($strName) {
			switch ($strName) {
				case 'IdpriceHistory':
					return new QQNode('idprice_history', 'IdpriceHistory', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Godown':
					return new QQNode('godown', 'Godown', 'integer', $this);
				case 'GodownObject':
					return new QQNodeRole('godown', 'GodownObject', 'integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'integer', $this);
				case 'Opening':
					return new QQNode('opening', 'Opening', 'string', $this);
				case 'Inword':
					return new QQNode('inword', 'Inword', 'string', $this);
				case 'Outward':
					return new QQNode('outward', 'Outward', 'string', $this);
				case 'Closing':
					return new QQNode('closing', 'Closing', 'string', $this);
				case 'Cost':
					return new QQNode('cost', 'Cost', 'string', $this);
				case 'Dp':
					return new QQNode('dp', 'Dp', 'string', $this);
				case 'Mrp':
					return new QQNode('mrp', 'Mrp', 'string', $this);
				case 'RefVov':
					return new QQNode('ref_vov', 'RefVov', 'integer', $this);
				case 'RefVovObject':
					return new QQNodeVoucherHasItem('ref_vov', 'RefVovObject', 'integer', $this);
				case 'RefIwow':
					return new QQNode('ref_iwow', 'RefIwow', 'integer', $this);
				case 'RefIwowObject':
					return new QQNodeIwow('ref_iwow', 'RefIwowObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idprice_history', 'IdpriceHistory', 'integer', $this);
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
