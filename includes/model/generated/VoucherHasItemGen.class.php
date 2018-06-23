<?php
	/**
	 * The abstract VoucherHasItemGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the VoucherHasItem subclass which
	 * extends this VoucherHasItemGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the VoucherHasItem class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdvoucherHasItem the value for intIdvoucherHasItem (Read-Only PK)
	 * @property integer $Voucher the value for intVoucher (Not Null)
	 * @property integer $Item the value for intItem (Not Null)
	 * @property string $Qty the value for strQty (Not Null)
	 * @property string $Rate the value for strRate (Not Null)
	 * @property integer $Per the value for intPer (Not Null)
	 * @property string $DiscPer the value for strDiscPer (Not Null)
	 * @property string $DiscAmt the value for strDiscAmt (Not Null)
	 * @property string $Amount the value for strAmount (Not Null)
	 * @property string $TaxPer the value for strTaxPer 
	 * @property string $TaxAmt the value for strTaxAmt 
	 * @property integer $RefStock the value for intRefStock 
	 * @property integer $Batch the value for intBatch 
	 * @property string $NetAmount the value for strNetAmount 
	 * @property string $Remark the value for strRemark 
	 * @property string $PackSize the value for strPackSize 
	 * @property Voucher $VoucherObject the value for the Voucher object referenced by intVoucher (Not Null)
	 * @property LedgerDetails $ItemObject the value for the LedgerDetails object referenced by intItem (Not Null)
	 * @property Unit $PerObject the value for the Unit object referenced by intPer (Not Null)
	 * @property Stock $RefStockObject the value for the Stock object referenced by intRefStock 
	 * @property-read PriceHistory $_PriceHistoryAsRefVov the value for the private _objPriceHistoryAsRefVov (Read-Only) if set due to an expansion on the price_history.ref_vov reverse relationship
	 * @property-read PriceHistory[] $_PriceHistoryAsRefVovArray the value for the private _objPriceHistoryAsRefVovArray (Read-Only) if set due to an ExpandAsArray on the price_history.ref_vov reverse relationship
	 * @property-read Serials $_SerialsAsRefVou the value for the private _objSerialsAsRefVou (Read-Only) if set due to an expansion on the serials.ref_vou reverse relationship
	 * @property-read Serials[] $_SerialsAsRefVouArray the value for the private _objSerialsAsRefVouArray (Read-Only) if set due to an ExpandAsArray on the serials.ref_vou reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class VoucherHasItemGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column voucher_has_item.idvoucher_has_item
		 * @var integer intIdvoucherHasItem
		 */
		protected $intIdvoucherHasItem;
		const IdvoucherHasItemDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.voucher
		 * @var integer intVoucher
		 */
		protected $intVoucher;
		const VoucherDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.qty
		 * @var string strQty
		 */
		protected $strQty;
		const QtyDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.rate
		 * @var string strRate
		 */
		protected $strRate;
		const RateDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.per
		 * @var integer intPer
		 */
		protected $intPer;
		const PerDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.disc_per
		 * @var string strDiscPer
		 */
		protected $strDiscPer;
		const DiscPerDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.disc_amt
		 * @var string strDiscAmt
		 */
		protected $strDiscAmt;
		const DiscAmtDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.amount
		 * @var string strAmount
		 */
		protected $strAmount;
		const AmountDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.tax_per
		 * @var string strTaxPer
		 */
		protected $strTaxPer;
		const TaxPerDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.tax_amt
		 * @var string strTaxAmt
		 */
		protected $strTaxAmt;
		const TaxAmtDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.ref_stock
		 * @var integer intRefStock
		 */
		protected $intRefStock;
		const RefStockDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.batch
		 * @var integer intBatch
		 */
		protected $intBatch;
		const BatchDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.net_amount
		 * @var string strNetAmount
		 */
		protected $strNetAmount;
		const NetAmountDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.remark
		 * @var string strRemark
		 */
		protected $strRemark;
		const RemarkDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_has_item.pack_size
		 * @var string strPackSize
		 */
		protected $strPackSize;
		const PackSizeMaxLength = 45;
		const PackSizeDefault = null;


		/**
		 * Private member variable that stores a reference to a single PriceHistoryAsRefVov object
		 * (of type PriceHistory), if this VoucherHasItem object was restored with
		 * an expansion on the price_history association table.
		 * @var PriceHistory _objPriceHistoryAsRefVov;
		 */
		private $_objPriceHistoryAsRefVov;

		/**
		 * Private member variable that stores a reference to an array of PriceHistoryAsRefVov objects
		 * (of type PriceHistory[]), if this VoucherHasItem object was restored with
		 * an ExpandAsArray on the price_history association table.
		 * @var PriceHistory[] _objPriceHistoryAsRefVovArray;
		 */
		private $_objPriceHistoryAsRefVovArray = null;

		/**
		 * Private member variable that stores a reference to a single SerialsAsRefVou object
		 * (of type Serials), if this VoucherHasItem object was restored with
		 * an expansion on the serials association table.
		 * @var Serials _objSerialsAsRefVou;
		 */
		private $_objSerialsAsRefVou;

		/**
		 * Private member variable that stores a reference to an array of SerialsAsRefVou objects
		 * (of type Serials[]), if this VoucherHasItem object was restored with
		 * an ExpandAsArray on the serials association table.
		 * @var Serials[] _objSerialsAsRefVouArray;
		 */
		private $_objSerialsAsRefVouArray = null;

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
		 * in the database column voucher_has_item.voucher.
		 *
		 * NOTE: Always use the VoucherObject property getter to correctly retrieve this Voucher object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Voucher objVoucherObject
		 */
		protected $objVoucherObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher_has_item.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher_has_item.per.
		 *
		 * NOTE: Always use the PerObject property getter to correctly retrieve this Unit object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Unit objPerObject
		 */
		protected $objPerObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column voucher_has_item.ref_stock.
		 *
		 * NOTE: Always use the RefStockObject property getter to correctly retrieve this Stock object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Stock objRefStockObject
		 */
		protected $objRefStockObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdvoucherHasItem = VoucherHasItem::IdvoucherHasItemDefault;
			$this->intVoucher = VoucherHasItem::VoucherDefault;
			$this->intItem = VoucherHasItem::ItemDefault;
			$this->strQty = VoucherHasItem::QtyDefault;
			$this->strRate = VoucherHasItem::RateDefault;
			$this->intPer = VoucherHasItem::PerDefault;
			$this->strDiscPer = VoucherHasItem::DiscPerDefault;
			$this->strDiscAmt = VoucherHasItem::DiscAmtDefault;
			$this->strAmount = VoucherHasItem::AmountDefault;
			$this->strTaxPer = VoucherHasItem::TaxPerDefault;
			$this->strTaxAmt = VoucherHasItem::TaxAmtDefault;
			$this->intRefStock = VoucherHasItem::RefStockDefault;
			$this->intBatch = VoucherHasItem::BatchDefault;
			$this->strNetAmount = VoucherHasItem::NetAmountDefault;
			$this->strRemark = VoucherHasItem::RemarkDefault;
			$this->strPackSize = VoucherHasItem::PackSizeDefault;
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
		 * Load a VoucherHasItem from PK Info
		 * @param integer $intIdvoucherHasItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem
		 */
		public static function Load($intIdvoucherHasItem, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'VoucherHasItem', $intIdvoucherHasItem);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = VoucherHasItem::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VoucherHasItem()->IdvoucherHasItem, $intIdvoucherHasItem)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all VoucherHasItems
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call VoucherHasItem::QueryArray to perform the LoadAll query
			try {
				return VoucherHasItem::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all VoucherHasItems
		 * @return int
		 */
		public static function CountAll() {
			// Call VoucherHasItem::QueryCount to perform the CountAll query
			return VoucherHasItem::QueryCount(QQ::All());
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
			$objDatabase = VoucherHasItem::GetDatabase();

			// Create/Build out the QueryBuilder object with VoucherHasItem-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'voucher_has_item');

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
				VoucherHasItem::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('voucher_has_item');

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
		 * Static Qcubed Query method to query for a single VoucherHasItem object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return VoucherHasItem the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VoucherHasItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new VoucherHasItem object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = VoucherHasItem::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return VoucherHasItem::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of VoucherHasItem objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return VoucherHasItem[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VoucherHasItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return VoucherHasItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = VoucherHasItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of VoucherHasItem objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VoucherHasItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = VoucherHasItem::GetDatabase();

			$strQuery = VoucherHasItem::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/voucherhasitem', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = VoucherHasItem::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this VoucherHasItem
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'voucher_has_item';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idvoucher_has_item', $strAliasPrefix . 'idvoucher_has_item');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idvoucher_has_item', $strAliasPrefix . 'idvoucher_has_item');
			    $objBuilder->AddSelectItem($strTableName, 'voucher', $strAliasPrefix . 'voucher');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'qty', $strAliasPrefix . 'qty');
			    $objBuilder->AddSelectItem($strTableName, 'rate', $strAliasPrefix . 'rate');
			    $objBuilder->AddSelectItem($strTableName, 'per', $strAliasPrefix . 'per');
			    $objBuilder->AddSelectItem($strTableName, 'disc_per', $strAliasPrefix . 'disc_per');
			    $objBuilder->AddSelectItem($strTableName, 'disc_amt', $strAliasPrefix . 'disc_amt');
			    $objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
			    $objBuilder->AddSelectItem($strTableName, 'tax_per', $strAliasPrefix . 'tax_per');
			    $objBuilder->AddSelectItem($strTableName, 'tax_amt', $strAliasPrefix . 'tax_amt');
			    $objBuilder->AddSelectItem($strTableName, 'ref_stock', $strAliasPrefix . 'ref_stock');
			    $objBuilder->AddSelectItem($strTableName, 'batch', $strAliasPrefix . 'batch');
			    $objBuilder->AddSelectItem($strTableName, 'net_amount', $strAliasPrefix . 'net_amount');
			    $objBuilder->AddSelectItem($strTableName, 'remark', $strAliasPrefix . 'remark');
			    $objBuilder->AddSelectItem($strTableName, 'pack_size', $strAliasPrefix . 'pack_size');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a VoucherHasItem from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this VoucherHasItem::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return VoucherHasItem
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdvoucherHasItem == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'voucher_has_item__';


						// Expanding reverse references: PriceHistoryAsRefVov
						$strAlias = $strAliasPrefix . 'pricehistoryasrefvov__idprice_history';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objPriceHistoryAsRefVovArray)
								$objPreviousItem->_objPriceHistoryAsRefVovArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objPriceHistoryAsRefVovArray)) {
								$objPreviousChildItems = $objPreviousItem->_objPriceHistoryAsRefVovArray;
								$objChildItem = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasrefvov__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objPriceHistoryAsRefVovArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objPriceHistoryAsRefVovArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasrefvov__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SerialsAsRefVou
						$strAlias = $strAliasPrefix . 'serialsasrefvou__idserials';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSerialsAsRefVouArray)
								$objPreviousItem->_objSerialsAsRefVouArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSerialsAsRefVouArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSerialsAsRefVouArray;
								$objChildItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasrefvou__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSerialsAsRefVouArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSerialsAsRefVouArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasrefvou__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'voucher_has_item__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the VoucherHasItem object
			$objToReturn = new VoucherHasItem();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdvoucherHasItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'voucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intVoucher = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'qty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strQty = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'rate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'per';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPer = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'disc_per';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDiscPer = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'disc_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDiscAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'amount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAmount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'tax_per';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTaxPer = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'tax_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTaxAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'ref_stock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefStock = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'batch';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBatch = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'net_amount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNetAmount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'remark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRemark = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'pack_size';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPackSize = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdvoucherHasItem != $objPreviousItem->IdvoucherHasItem) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objPriceHistoryAsRefVovArray);
					$cnt = count($objToReturn->_objPriceHistoryAsRefVovArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objPriceHistoryAsRefVovArray, $objToReturn->_objPriceHistoryAsRefVovArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSerialsAsRefVouArray);
					$cnt = count($objToReturn->_objSerialsAsRefVouArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSerialsAsRefVouArray, $objToReturn->_objSerialsAsRefVouArray)) {
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
				$strAliasPrefix = 'voucher_has_item__';

			// Check for VoucherObject Early Binding
			$strAlias = $strAliasPrefix . 'voucher__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objVoucherObject = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PerObject Early Binding
			$strAlias = $strAliasPrefix . 'per__idunit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPerObject = Unit::InstantiateDbRow($objDbRow, $strAliasPrefix . 'per__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefStockObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_stock__idstock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefStockObject = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_stock__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for PriceHistoryAsRefVov Virtual Binding
			$strAlias = $strAliasPrefix . 'pricehistoryasrefvov__idprice_history';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objPriceHistoryAsRefVovArray)
				$objToReturn->_objPriceHistoryAsRefVovArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objPriceHistoryAsRefVovArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasrefvov__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objPriceHistoryAsRefVov = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasrefvov__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SerialsAsRefVou Virtual Binding
			$strAlias = $strAliasPrefix . 'serialsasrefvou__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSerialsAsRefVouArray)
				$objToReturn->_objSerialsAsRefVouArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSerialsAsRefVouArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasrefvou__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSerialsAsRefVou = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasrefvou__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of VoucherHasItems from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return VoucherHasItem[]
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
					$objItem = VoucherHasItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = VoucherHasItem::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single VoucherHasItem object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return VoucherHasItem next row resulting from the query
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
			return VoucherHasItem::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single VoucherHasItem object,
		 * by IdvoucherHasItem Index(es)
		 * @param integer $intIdvoucherHasItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem
		*/
		public static function LoadByIdvoucherHasItem($intIdvoucherHasItem, $objOptionalClauses = null) {
			return VoucherHasItem::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VoucherHasItem()->IdvoucherHasItem, $intIdvoucherHasItem)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of VoucherHasItem objects,
		 * by Voucher Index(es)
		 * @param integer $intVoucher
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public static function LoadArrayByVoucher($intVoucher, $objOptionalClauses = null) {
			// Call VoucherHasItem::QueryArray to perform the LoadArrayByVoucher query
			try {
				return VoucherHasItem::QueryArray(
					QQ::Equal(QQN::VoucherHasItem()->Voucher, $intVoucher),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VoucherHasItems
		 * by Voucher Index(es)
		 * @param integer $intVoucher
		 * @return int
		*/
		public static function CountByVoucher($intVoucher) {
			// Call VoucherHasItem::QueryCount to perform the CountByVoucher query
			return VoucherHasItem::QueryCount(
				QQ::Equal(QQN::VoucherHasItem()->Voucher, $intVoucher)
			);
		}

		/**
		 * Load an array of VoucherHasItem objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call VoucherHasItem::QueryArray to perform the LoadArrayByItem query
			try {
				return VoucherHasItem::QueryArray(
					QQ::Equal(QQN::VoucherHasItem()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VoucherHasItems
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call VoucherHasItem::QueryCount to perform the CountByItem query
			return VoucherHasItem::QueryCount(
				QQ::Equal(QQN::VoucherHasItem()->Item, $intItem)
			);
		}

		/**
		 * Load an array of VoucherHasItem objects,
		 * by Per Index(es)
		 * @param integer $intPer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public static function LoadArrayByPer($intPer, $objOptionalClauses = null) {
			// Call VoucherHasItem::QueryArray to perform the LoadArrayByPer query
			try {
				return VoucherHasItem::QueryArray(
					QQ::Equal(QQN::VoucherHasItem()->Per, $intPer),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VoucherHasItems
		 * by Per Index(es)
		 * @param integer $intPer
		 * @return int
		*/
		public static function CountByPer($intPer) {
			// Call VoucherHasItem::QueryCount to perform the CountByPer query
			return VoucherHasItem::QueryCount(
				QQ::Equal(QQN::VoucherHasItem()->Per, $intPer)
			);
		}

		/**
		 * Load an array of VoucherHasItem objects,
		 * by RefStock Index(es)
		 * @param integer $intRefStock
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public static function LoadArrayByRefStock($intRefStock, $objOptionalClauses = null) {
			// Call VoucherHasItem::QueryArray to perform the LoadArrayByRefStock query
			try {
				return VoucherHasItem::QueryArray(
					QQ::Equal(QQN::VoucherHasItem()->RefStock, $intRefStock),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VoucherHasItems
		 * by RefStock Index(es)
		 * @param integer $intRefStock
		 * @return int
		*/
		public static function CountByRefStock($intRefStock) {
			// Call VoucherHasItem::QueryCount to perform the CountByRefStock query
			return VoucherHasItem::QueryCount(
				QQ::Equal(QQN::VoucherHasItem()->RefStock, $intRefStock)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this VoucherHasItem
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `voucher_has_item` (
							`voucher`,
							`item`,
							`qty`,
							`rate`,
							`per`,
							`disc_per`,
							`disc_amt`,
							`amount`,
							`tax_per`,
							`tax_amt`,
							`ref_stock`,
							`batch`,
							`net_amount`,
							`remark`,
							`pack_size`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intVoucher) . ',
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->strQty) . ',
							' . $objDatabase->SqlVariable($this->strRate) . ',
							' . $objDatabase->SqlVariable($this->intPer) . ',
							' . $objDatabase->SqlVariable($this->strDiscPer) . ',
							' . $objDatabase->SqlVariable($this->strDiscAmt) . ',
							' . $objDatabase->SqlVariable($this->strAmount) . ',
							' . $objDatabase->SqlVariable($this->strTaxPer) . ',
							' . $objDatabase->SqlVariable($this->strTaxAmt) . ',
							' . $objDatabase->SqlVariable($this->intRefStock) . ',
							' . $objDatabase->SqlVariable($this->intBatch) . ',
							' . $objDatabase->SqlVariable($this->strNetAmount) . ',
							' . $objDatabase->SqlVariable($this->strRemark) . ',
							' . $objDatabase->SqlVariable($this->strPackSize) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdvoucherHasItem = $objDatabase->InsertId('voucher_has_item', 'idvoucher_has_item');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`voucher_has_item`
						SET
							`voucher` = ' . $objDatabase->SqlVariable($this->intVoucher) . ',
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`qty` = ' . $objDatabase->SqlVariable($this->strQty) . ',
							`rate` = ' . $objDatabase->SqlVariable($this->strRate) . ',
							`per` = ' . $objDatabase->SqlVariable($this->intPer) . ',
							`disc_per` = ' . $objDatabase->SqlVariable($this->strDiscPer) . ',
							`disc_amt` = ' . $objDatabase->SqlVariable($this->strDiscAmt) . ',
							`amount` = ' . $objDatabase->SqlVariable($this->strAmount) . ',
							`tax_per` = ' . $objDatabase->SqlVariable($this->strTaxPer) . ',
							`tax_amt` = ' . $objDatabase->SqlVariable($this->strTaxAmt) . ',
							`ref_stock` = ' . $objDatabase->SqlVariable($this->intRefStock) . ',
							`batch` = ' . $objDatabase->SqlVariable($this->intBatch) . ',
							`net_amount` = ' . $objDatabase->SqlVariable($this->strNetAmount) . ',
							`remark` = ' . $objDatabase->SqlVariable($this->strRemark) . ',
							`pack_size` = ' . $objDatabase->SqlVariable($this->strPackSize) . '
						WHERE
							`idvoucher_has_item` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
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
		 * Delete this VoucherHasItem
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this VoucherHasItem with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this VoucherHasItem ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'VoucherHasItem', $this->intIdvoucherHasItem);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all VoucherHasItems
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate voucher_has_item table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `voucher_has_item`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this VoucherHasItem from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved VoucherHasItem object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = VoucherHasItem::Load($this->intIdvoucherHasItem);

			// Update $this's local variables to match
			$this->Voucher = $objReloaded->Voucher;
			$this->Item = $objReloaded->Item;
			$this->strQty = $objReloaded->strQty;
			$this->strRate = $objReloaded->strRate;
			$this->Per = $objReloaded->Per;
			$this->strDiscPer = $objReloaded->strDiscPer;
			$this->strDiscAmt = $objReloaded->strDiscAmt;
			$this->strAmount = $objReloaded->strAmount;
			$this->strTaxPer = $objReloaded->strTaxPer;
			$this->strTaxAmt = $objReloaded->strTaxAmt;
			$this->RefStock = $objReloaded->RefStock;
			$this->intBatch = $objReloaded->intBatch;
			$this->strNetAmount = $objReloaded->strNetAmount;
			$this->strRemark = $objReloaded->strRemark;
			$this->strPackSize = $objReloaded->strPackSize;
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
				case 'IdvoucherHasItem':
					/**
					 * Gets the value for intIdvoucherHasItem (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdvoucherHasItem;

				case 'Voucher':
					/**
					 * Gets the value for intVoucher (Not Null)
					 * @return integer
					 */
					return $this->intVoucher;

				case 'Item':
					/**
					 * Gets the value for intItem (Not Null)
					 * @return integer
					 */
					return $this->intItem;

				case 'Qty':
					/**
					 * Gets the value for strQty (Not Null)
					 * @return string
					 */
					return $this->strQty;

				case 'Rate':
					/**
					 * Gets the value for strRate (Not Null)
					 * @return string
					 */
					return $this->strRate;

				case 'Per':
					/**
					 * Gets the value for intPer (Not Null)
					 * @return integer
					 */
					return $this->intPer;

				case 'DiscPer':
					/**
					 * Gets the value for strDiscPer (Not Null)
					 * @return string
					 */
					return $this->strDiscPer;

				case 'DiscAmt':
					/**
					 * Gets the value for strDiscAmt (Not Null)
					 * @return string
					 */
					return $this->strDiscAmt;

				case 'Amount':
					/**
					 * Gets the value for strAmount (Not Null)
					 * @return string
					 */
					return $this->strAmount;

				case 'TaxPer':
					/**
					 * Gets the value for strTaxPer 
					 * @return string
					 */
					return $this->strTaxPer;

				case 'TaxAmt':
					/**
					 * Gets the value for strTaxAmt 
					 * @return string
					 */
					return $this->strTaxAmt;

				case 'RefStock':
					/**
					 * Gets the value for intRefStock 
					 * @return integer
					 */
					return $this->intRefStock;

				case 'Batch':
					/**
					 * Gets the value for intBatch 
					 * @return integer
					 */
					return $this->intBatch;

				case 'NetAmount':
					/**
					 * Gets the value for strNetAmount 
					 * @return string
					 */
					return $this->strNetAmount;

				case 'Remark':
					/**
					 * Gets the value for strRemark 
					 * @return string
					 */
					return $this->strRemark;

				case 'PackSize':
					/**
					 * Gets the value for strPackSize 
					 * @return string
					 */
					return $this->strPackSize;


				///////////////////
				// Member Objects
				///////////////////
				case 'VoucherObject':
					/**
					 * Gets the value for the Voucher object referenced by intVoucher (Not Null)
					 * @return Voucher
					 */
					try {
						if ((!$this->objVoucherObject) && (!is_null($this->intVoucher)))
							$this->objVoucherObject = Voucher::Load($this->intVoucher);
						return $this->objVoucherObject;
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

				case 'PerObject':
					/**
					 * Gets the value for the Unit object referenced by intPer (Not Null)
					 * @return Unit
					 */
					try {
						if ((!$this->objPerObject) && (!is_null($this->intPer)))
							$this->objPerObject = Unit::Load($this->intPer);
						return $this->objPerObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefStockObject':
					/**
					 * Gets the value for the Stock object referenced by intRefStock 
					 * @return Stock
					 */
					try {
						if ((!$this->objRefStockObject) && (!is_null($this->intRefStock)))
							$this->objRefStockObject = Stock::Load($this->intRefStock);
						return $this->objRefStockObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_PriceHistoryAsRefVov':
					/**
					 * Gets the value for the private _objPriceHistoryAsRefVov (Read-Only)
					 * if set due to an expansion on the price_history.ref_vov reverse relationship
					 * @return PriceHistory
					 */
					return $this->_objPriceHistoryAsRefVov;

				case '_PriceHistoryAsRefVovArray':
					/**
					 * Gets the value for the private _objPriceHistoryAsRefVovArray (Read-Only)
					 * if set due to an ExpandAsArray on the price_history.ref_vov reverse relationship
					 * @return PriceHistory[]
					 */
					return $this->_objPriceHistoryAsRefVovArray;

				case '_SerialsAsRefVou':
					/**
					 * Gets the value for the private _objSerialsAsRefVou (Read-Only)
					 * if set due to an expansion on the serials.ref_vou reverse relationship
					 * @return Serials
					 */
					return $this->_objSerialsAsRefVou;

				case '_SerialsAsRefVouArray':
					/**
					 * Gets the value for the private _objSerialsAsRefVouArray (Read-Only)
					 * if set due to an ExpandAsArray on the serials.ref_vou reverse relationship
					 * @return Serials[]
					 */
					return $this->_objSerialsAsRefVouArray;


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
				case 'Voucher':
					/**
					 * Sets the value for intVoucher (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objVoucherObject = null;
						return ($this->intVoucher = QType::Cast($mixValue, QType::Integer));
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

				case 'Rate':
					/**
					 * Sets the value for strRate (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRate = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Per':
					/**
					 * Sets the value for intPer (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPerObject = null;
						return ($this->intPer = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DiscPer':
					/**
					 * Sets the value for strDiscPer (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDiscPer = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DiscAmt':
					/**
					 * Sets the value for strDiscAmt (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDiscAmt = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Amount':
					/**
					 * Sets the value for strAmount (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAmount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TaxPer':
					/**
					 * Sets the value for strTaxPer 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTaxPer = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TaxAmt':
					/**
					 * Sets the value for strTaxAmt 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTaxAmt = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefStock':
					/**
					 * Sets the value for intRefStock 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefStockObject = null;
						return ($this->intRefStock = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Batch':
					/**
					 * Sets the value for intBatch 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intBatch = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NetAmount':
					/**
					 * Sets the value for strNetAmount 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNetAmount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Remark':
					/**
					 * Sets the value for strRemark 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRemark = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PackSize':
					/**
					 * Sets the value for strPackSize 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPackSize = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'VoucherObject':
					/**
					 * Sets the value for the Voucher object referenced by intVoucher (Not Null)
					 * @param Voucher $mixValue
					 * @return Voucher
					 */
					if (is_null($mixValue)) {
						$this->intVoucher = null;
						$this->objVoucherObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Voucher object
						try {
							$mixValue = QType::Cast($mixValue, 'Voucher');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Voucher object
						if (is_null($mixValue->Idvoucher))
							throw new QCallerException('Unable to set an unsaved VoucherObject for this VoucherHasItem');

						// Update Local Member Variables
						$this->objVoucherObject = $mixValue;
						$this->intVoucher = $mixValue->Idvoucher;

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
							throw new QCallerException('Unable to set an unsaved ItemObject for this VoucherHasItem');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->IdledgerDetails;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PerObject':
					/**
					 * Sets the value for the Unit object referenced by intPer (Not Null)
					 * @param Unit $mixValue
					 * @return Unit
					 */
					if (is_null($mixValue)) {
						$this->intPer = null;
						$this->objPerObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Unit object
						try {
							$mixValue = QType::Cast($mixValue, 'Unit');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Unit object
						if (is_null($mixValue->Idunit))
							throw new QCallerException('Unable to set an unsaved PerObject for this VoucherHasItem');

						// Update Local Member Variables
						$this->objPerObject = $mixValue;
						$this->intPer = $mixValue->Idunit;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefStockObject':
					/**
					 * Sets the value for the Stock object referenced by intRefStock 
					 * @param Stock $mixValue
					 * @return Stock
					 */
					if (is_null($mixValue)) {
						$this->intRefStock = null;
						$this->objRefStockObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Stock object
						try {
							$mixValue = QType::Cast($mixValue, 'Stock');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Stock object
						if (is_null($mixValue->Idstock))
							throw new QCallerException('Unable to set an unsaved RefStockObject for this VoucherHasItem');

						// Update Local Member Variables
						$this->objRefStockObject = $mixValue;
						$this->intRefStock = $mixValue->Idstock;

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



		// Related Objects' Methods for PriceHistoryAsRefVov
		//-------------------------------------------------------------------

		/**
		 * Gets all associated PriceHistoriesAsRefVov as an array of PriceHistory objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public function GetPriceHistoryAsRefVovArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucherHasItem)))
				return array();

			try {
				return PriceHistory::LoadArrayByRefVov($this->intIdvoucherHasItem, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated PriceHistoriesAsRefVov
		 * @return int
		*/
		public function CountPriceHistoriesAsRefVov() {
			if ((is_null($this->intIdvoucherHasItem)))
				return 0;

			return PriceHistory::CountByRefVov($this->intIdvoucherHasItem);
		}

		/**
		 * Associates a PriceHistoryAsRefVov
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function AssociatePriceHistoryAsRefVov(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsRefVov on this unsaved VoucherHasItem.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsRefVov on this VoucherHasItem with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`ref_vov` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . '
			');
		}

		/**
		 * Unassociates a PriceHistoryAsRefVov
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function UnassociatePriceHistoryAsRefVov(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRefVov on this unsaved VoucherHasItem.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRefVov on this VoucherHasItem with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`ref_vov` = null
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`ref_vov` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}

		/**
		 * Unassociates all PriceHistoriesAsRefVov
		 * @return void
		*/
		public function UnassociateAllPriceHistoriesAsRefVov() {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRefVov on this unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`ref_vov` = null
				WHERE
					`ref_vov` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}

		/**
		 * Deletes an associated PriceHistoryAsRefVov
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function DeleteAssociatedPriceHistoryAsRefVov(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRefVov on this unsaved VoucherHasItem.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRefVov on this VoucherHasItem with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`ref_vov` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}

		/**
		 * Deletes all associated PriceHistoriesAsRefVov
		 * @return void
		*/
		public function DeleteAllPriceHistoriesAsRefVov() {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRefVov on this unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`ref_vov` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}


		// Related Objects' Methods for SerialsAsRefVou
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SerialsesAsRefVou as an array of Serials objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public function GetSerialsAsRefVouArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucherHasItem)))
				return array();

			try {
				return Serials::LoadArrayByRefVou($this->intIdvoucherHasItem, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SerialsesAsRefVou
		 * @return int
		*/
		public function CountSerialsesAsRefVou() {
			if ((is_null($this->intIdvoucherHasItem)))
				return 0;

			return Serials::CountByRefVou($this->intIdvoucherHasItem);
		}

		/**
		 * Associates a SerialsAsRefVou
		 * @param Serials $objSerials
		 * @return void
		*/
		public function AssociateSerialsAsRefVou(Serials $objSerials) {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsRefVou on this unsaved VoucherHasItem.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsRefVou on this VoucherHasItem with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`ref_vou` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . '
			');
		}

		/**
		 * Unassociates a SerialsAsRefVou
		 * @param Serials $objSerials
		 * @return void
		*/
		public function UnassociateSerialsAsRefVou(Serials $objSerials) {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRefVou on this unsaved VoucherHasItem.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRefVou on this VoucherHasItem with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`ref_vou` = null
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`ref_vou` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}

		/**
		 * Unassociates all SerialsesAsRefVou
		 * @return void
		*/
		public function UnassociateAllSerialsesAsRefVou() {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRefVou on this unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`ref_vou` = null
				WHERE
					`ref_vou` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}

		/**
		 * Deletes an associated SerialsAsRefVou
		 * @param Serials $objSerials
		 * @return void
		*/
		public function DeleteAssociatedSerialsAsRefVou(Serials $objSerials) {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRefVou on this unsaved VoucherHasItem.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRefVou on this VoucherHasItem with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`ref_vou` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
			');
		}

		/**
		 * Deletes all associated SerialsesAsRefVou
		 * @return void
		*/
		public function DeleteAllSerialsesAsRefVou() {
			if ((is_null($this->intIdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRefVou on this unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = VoucherHasItem::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`ref_vou` = ' . $objDatabase->SqlVariable($this->intIdvoucherHasItem) . '
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
			return "voucher_has_item";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[VoucherHasItem::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="VoucherHasItem"><sequence>';
			$strToReturn .= '<element name="IdvoucherHasItem" type="xsd:int"/>';
			$strToReturn .= '<element name="VoucherObject" type="xsd1:Voucher"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:LedgerDetails"/>';
			$strToReturn .= '<element name="Qty" type="xsd:string"/>';
			$strToReturn .= '<element name="Rate" type="xsd:string"/>';
			$strToReturn .= '<element name="PerObject" type="xsd1:Unit"/>';
			$strToReturn .= '<element name="DiscPer" type="xsd:string"/>';
			$strToReturn .= '<element name="DiscAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="Amount" type="xsd:string"/>';
			$strToReturn .= '<element name="TaxPer" type="xsd:string"/>';
			$strToReturn .= '<element name="TaxAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="RefStockObject" type="xsd1:Stock"/>';
			$strToReturn .= '<element name="Batch" type="xsd:int"/>';
			$strToReturn .= '<element name="NetAmount" type="xsd:string"/>';
			$strToReturn .= '<element name="Remark" type="xsd:string"/>';
			$strToReturn .= '<element name="PackSize" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('VoucherHasItem', $strComplexTypeArray)) {
				$strComplexTypeArray['VoucherHasItem'] = VoucherHasItem::GetSoapComplexTypeXml();
				Voucher::AlterSoapComplexTypeArray($strComplexTypeArray);
				LedgerDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				Unit::AlterSoapComplexTypeArray($strComplexTypeArray);
				Stock::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, VoucherHasItem::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new VoucherHasItem();
			if (property_exists($objSoapObject, 'IdvoucherHasItem'))
				$objToReturn->intIdvoucherHasItem = $objSoapObject->IdvoucherHasItem;
			if ((property_exists($objSoapObject, 'VoucherObject')) &&
				($objSoapObject->VoucherObject))
				$objToReturn->VoucherObject = Voucher::GetObjectFromSoapObject($objSoapObject->VoucherObject);
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = LedgerDetails::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if (property_exists($objSoapObject, 'Qty'))
				$objToReturn->strQty = $objSoapObject->Qty;
			if (property_exists($objSoapObject, 'Rate'))
				$objToReturn->strRate = $objSoapObject->Rate;
			if ((property_exists($objSoapObject, 'PerObject')) &&
				($objSoapObject->PerObject))
				$objToReturn->PerObject = Unit::GetObjectFromSoapObject($objSoapObject->PerObject);
			if (property_exists($objSoapObject, 'DiscPer'))
				$objToReturn->strDiscPer = $objSoapObject->DiscPer;
			if (property_exists($objSoapObject, 'DiscAmt'))
				$objToReturn->strDiscAmt = $objSoapObject->DiscAmt;
			if (property_exists($objSoapObject, 'Amount'))
				$objToReturn->strAmount = $objSoapObject->Amount;
			if (property_exists($objSoapObject, 'TaxPer'))
				$objToReturn->strTaxPer = $objSoapObject->TaxPer;
			if (property_exists($objSoapObject, 'TaxAmt'))
				$objToReturn->strTaxAmt = $objSoapObject->TaxAmt;
			if ((property_exists($objSoapObject, 'RefStockObject')) &&
				($objSoapObject->RefStockObject))
				$objToReturn->RefStockObject = Stock::GetObjectFromSoapObject($objSoapObject->RefStockObject);
			if (property_exists($objSoapObject, 'Batch'))
				$objToReturn->intBatch = $objSoapObject->Batch;
			if (property_exists($objSoapObject, 'NetAmount'))
				$objToReturn->strNetAmount = $objSoapObject->NetAmount;
			if (property_exists($objSoapObject, 'Remark'))
				$objToReturn->strRemark = $objSoapObject->Remark;
			if (property_exists($objSoapObject, 'PackSize'))
				$objToReturn->strPackSize = $objSoapObject->PackSize;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, VoucherHasItem::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objVoucherObject)
				$objObject->objVoucherObject = Voucher::GetSoapObjectFromObject($objObject->objVoucherObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intVoucher = null;
			if ($objObject->objItemObject)
				$objObject->objItemObject = LedgerDetails::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
			if ($objObject->objPerObject)
				$objObject->objPerObject = Unit::GetSoapObjectFromObject($objObject->objPerObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPer = null;
			if ($objObject->objRefStockObject)
				$objObject->objRefStockObject = Stock::GetSoapObjectFromObject($objObject->objRefStockObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefStock = null;
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
			$iArray['IdvoucherHasItem'] = $this->intIdvoucherHasItem;
			$iArray['Voucher'] = $this->intVoucher;
			$iArray['Item'] = $this->intItem;
			$iArray['Qty'] = $this->strQty;
			$iArray['Rate'] = $this->strRate;
			$iArray['Per'] = $this->intPer;
			$iArray['DiscPer'] = $this->strDiscPer;
			$iArray['DiscAmt'] = $this->strDiscAmt;
			$iArray['Amount'] = $this->strAmount;
			$iArray['TaxPer'] = $this->strTaxPer;
			$iArray['TaxAmt'] = $this->strTaxAmt;
			$iArray['RefStock'] = $this->intRefStock;
			$iArray['Batch'] = $this->intBatch;
			$iArray['NetAmount'] = $this->strNetAmount;
			$iArray['Remark'] = $this->strRemark;
			$iArray['PackSize'] = $this->strPackSize;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdvoucherHasItem ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdvoucherHasItem
     * @property-read QQNode $Voucher
     * @property-read QQNodeVoucher $VoucherObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Qty
     * @property-read QQNode $Rate
     * @property-read QQNode $Per
     * @property-read QQNodeUnit $PerObject
     * @property-read QQNode $DiscPer
     * @property-read QQNode $DiscAmt
     * @property-read QQNode $Amount
     * @property-read QQNode $TaxPer
     * @property-read QQNode $TaxAmt
     * @property-read QQNode $RefStock
     * @property-read QQNodeStock $RefStockObject
     * @property-read QQNode $Batch
     * @property-read QQNode $NetAmount
     * @property-read QQNode $Remark
     * @property-read QQNode $PackSize
     *
     *
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsRefVov
     * @property-read QQReverseReferenceNodeSerials $SerialsAsRefVou

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeVoucherHasItem extends QQNode {
		protected $strTableName = 'voucher_has_item';
		protected $strPrimaryKey = 'idvoucher_has_item';
		protected $strClassName = 'VoucherHasItem';
		public function __get($strName) {
			switch ($strName) {
				case 'IdvoucherHasItem':
					return new QQNode('idvoucher_has_item', 'IdvoucherHasItem', 'Integer', $this);
				case 'Voucher':
					return new QQNode('voucher', 'Voucher', 'Integer', $this);
				case 'VoucherObject':
					return new QQNodeVoucher('voucher', 'VoucherObject', 'Integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'Integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'VarChar', $this);
				case 'Rate':
					return new QQNode('rate', 'Rate', 'VarChar', $this);
				case 'Per':
					return new QQNode('per', 'Per', 'Integer', $this);
				case 'PerObject':
					return new QQNodeUnit('per', 'PerObject', 'Integer', $this);
				case 'DiscPer':
					return new QQNode('disc_per', 'DiscPer', 'VarChar', $this);
				case 'DiscAmt':
					return new QQNode('disc_amt', 'DiscAmt', 'VarChar', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'VarChar', $this);
				case 'TaxPer':
					return new QQNode('tax_per', 'TaxPer', 'VarChar', $this);
				case 'TaxAmt':
					return new QQNode('tax_amt', 'TaxAmt', 'VarChar', $this);
				case 'RefStock':
					return new QQNode('ref_stock', 'RefStock', 'Integer', $this);
				case 'RefStockObject':
					return new QQNodeStock('ref_stock', 'RefStockObject', 'Integer', $this);
				case 'Batch':
					return new QQNode('batch', 'Batch', 'Integer', $this);
				case 'NetAmount':
					return new QQNode('net_amount', 'NetAmount', 'VarChar', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'Blob', $this);
				case 'PackSize':
					return new QQNode('pack_size', 'PackSize', 'VarChar', $this);
				case 'PriceHistoryAsRefVov':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasrefvov', 'reverse_reference', 'ref_vov');
				case 'SerialsAsRefVou':
					return new QQReverseReferenceNodeSerials($this, 'serialsasrefvou', 'reverse_reference', 'ref_vou');

				case '_PrimaryKeyNode':
					return new QQNode('idvoucher_has_item', 'IdvoucherHasItem', 'Integer', $this);
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
     * @property-read QQNode $IdvoucherHasItem
     * @property-read QQNode $Voucher
     * @property-read QQNodeVoucher $VoucherObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Qty
     * @property-read QQNode $Rate
     * @property-read QQNode $Per
     * @property-read QQNodeUnit $PerObject
     * @property-read QQNode $DiscPer
     * @property-read QQNode $DiscAmt
     * @property-read QQNode $Amount
     * @property-read QQNode $TaxPer
     * @property-read QQNode $TaxAmt
     * @property-read QQNode $RefStock
     * @property-read QQNodeStock $RefStockObject
     * @property-read QQNode $Batch
     * @property-read QQNode $NetAmount
     * @property-read QQNode $Remark
     * @property-read QQNode $PackSize
     *
     *
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsRefVov
     * @property-read QQReverseReferenceNodeSerials $SerialsAsRefVou

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeVoucherHasItem extends QQReverseReferenceNode {
		protected $strTableName = 'voucher_has_item';
		protected $strPrimaryKey = 'idvoucher_has_item';
		protected $strClassName = 'VoucherHasItem';
		public function __get($strName) {
			switch ($strName) {
				case 'IdvoucherHasItem':
					return new QQNode('idvoucher_has_item', 'IdvoucherHasItem', 'integer', $this);
				case 'Voucher':
					return new QQNode('voucher', 'Voucher', 'integer', $this);
				case 'VoucherObject':
					return new QQNodeVoucher('voucher', 'VoucherObject', 'integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'string', $this);
				case 'Rate':
					return new QQNode('rate', 'Rate', 'string', $this);
				case 'Per':
					return new QQNode('per', 'Per', 'integer', $this);
				case 'PerObject':
					return new QQNodeUnit('per', 'PerObject', 'integer', $this);
				case 'DiscPer':
					return new QQNode('disc_per', 'DiscPer', 'string', $this);
				case 'DiscAmt':
					return new QQNode('disc_amt', 'DiscAmt', 'string', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'string', $this);
				case 'TaxPer':
					return new QQNode('tax_per', 'TaxPer', 'string', $this);
				case 'TaxAmt':
					return new QQNode('tax_amt', 'TaxAmt', 'string', $this);
				case 'RefStock':
					return new QQNode('ref_stock', 'RefStock', 'integer', $this);
				case 'RefStockObject':
					return new QQNodeStock('ref_stock', 'RefStockObject', 'integer', $this);
				case 'Batch':
					return new QQNode('batch', 'Batch', 'integer', $this);
				case 'NetAmount':
					return new QQNode('net_amount', 'NetAmount', 'string', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'string', $this);
				case 'PackSize':
					return new QQNode('pack_size', 'PackSize', 'string', $this);
				case 'PriceHistoryAsRefVov':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasrefvov', 'reverse_reference', 'ref_vov');
				case 'SerialsAsRefVou':
					return new QQReverseReferenceNodeSerials($this, 'serialsasrefvou', 'reverse_reference', 'ref_vou');

				case '_PrimaryKeyNode':
					return new QQNode('idvoucher_has_item', 'IdvoucherHasItem', 'integer', $this);
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
