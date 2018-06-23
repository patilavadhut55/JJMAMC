<?php
	/**
	 * The abstract LedgerDetailsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the LedgerDetails subclass which
	 * extends this LedgerDetailsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the LedgerDetails class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $IdledgerDetails the value for intIdledgerDetails (PK)
	 * @property string $DisplayName the value for strDisplayName (Unique)
	 * @property integer $Brand the value for intBrand 
	 * @property integer $StockGrp the value for intStockGrp 
	 * @property integer $Unit the value for intUnit (Not Null)
	 * @property string $Cost the value for strCost 
	 * @property string $Dp the value for strDp 
	 * @property string $Mrp the value for strMrp (Not Null)
	 * @property string $MinStock the value for strMinStock 
	 * @property string $VatRate the value for strVatRate 
	 * @property string $DutiesRate the value for strDutiesRate 
	 * @property boolean $Batch the value for blnBatch 
	 * @property boolean $Expiry the value for blnExpiry 
	 * @property boolean $BarcodePrint the value for blnBarcodePrint 
	 * @property integer $Auther the value for intAuther 
	 * @property integer $Publisher the value for intPublisher 
	 * @property integer $Edition the value for intEdition 
	 * @property integer $Rack the value for intRack 
	 * @property integer $Subject the value for intSubject 
	 * @property integer $Series the value for intSeries 
	 * @property string $Isbn the value for strIsbn 
	 * @property string $Pages the value for strPages 
	 * @property integer $Category the value for intCategory 
	 * @property Ledger $IdledgerDetailsObject the value for the Ledger object referenced by intIdledgerDetails (PK)
	 * @property StockGrp $BrandObject the value for the StockGrp object referenced by intBrand 
	 * @property StockGrp $StockGrpObject the value for the StockGrp object referenced by intStockGrp 
	 * @property Unit $UnitObject the value for the Unit object referenced by intUnit (Not Null)
	 * @property Ledger $AutherObject the value for the Ledger object referenced by intAuther 
	 * @property Ledger $PublisherObject the value for the Ledger object referenced by intPublisher 
	 * @property Ledger $EditionObject the value for the Ledger object referenced by intEdition 
	 * @property Ledger $RackObject the value for the Ledger object referenced by intRack 
	 * @property Ledger $SubjectObject the value for the Ledger object referenced by intSubject 
	 * @property Ledger $SeriesObject the value for the Ledger object referenced by intSeries 
	 * @property AccessionCat $CategoryObject the value for the AccessionCat object referenced by intCategory 
	 * @property-read DeptTransfer $_DeptTransferAsItem the value for the private _objDeptTransferAsItem (Read-Only) if set due to an expansion on the dept_transfer.item reverse relationship
	 * @property-read DeptTransfer[] $_DeptTransferAsItemArray the value for the private _objDeptTransferAsItemArray (Read-Only) if set due to an ExpandAsArray on the dept_transfer.item reverse relationship
	 * @property-read IssuedItems $_IssuedItemsAsItem the value for the private _objIssuedItemsAsItem (Read-Only) if set due to an expansion on the issued_items.item reverse relationship
	 * @property-read IssuedItems[] $_IssuedItemsAsItemArray the value for the private _objIssuedItemsAsItemArray (Read-Only) if set due to an ExpandAsArray on the issued_items.item reverse relationship
	 * @property-read PriceHistory $_PriceHistoryAsItem the value for the private _objPriceHistoryAsItem (Read-Only) if set due to an expansion on the price_history.item reverse relationship
	 * @property-read PriceHistory[] $_PriceHistoryAsItemArray the value for the private _objPriceHistoryAsItemArray (Read-Only) if set due to an ExpandAsArray on the price_history.item reverse relationship
	 * @property-read Serials $_SerialsAsItem the value for the private _objSerialsAsItem (Read-Only) if set due to an expansion on the serials.item reverse relationship
	 * @property-read Serials[] $_SerialsAsItemArray the value for the private _objSerialsAsItemArray (Read-Only) if set due to an ExpandAsArray on the serials.item reverse relationship
	 * @property-read Stock $_StockAsItem the value for the private _objStockAsItem (Read-Only) if set due to an expansion on the stock.item reverse relationship
	 * @property-read Stock[] $_StockAsItemArray the value for the private _objStockAsItemArray (Read-Only) if set due to an ExpandAsArray on the stock.item reverse relationship
	 * @property-read VoucherHasItem $_VoucherHasItemAsItem the value for the private _objVoucherHasItemAsItem (Read-Only) if set due to an expansion on the voucher_has_item.item reverse relationship
	 * @property-read VoucherHasItem[] $_VoucherHasItemAsItemArray the value for the private _objVoucherHasItemAsItemArray (Read-Only) if set due to an ExpandAsArray on the voucher_has_item.item reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class LedgerDetailsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column ledger_details.idledger_details
		 * @var integer intIdledgerDetails
		 */
		protected $intIdledgerDetails;
		const IdledgerDetailsDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intIdledgerDetails;
		 */
		protected $__intIdledgerDetails;

		/**
		 * Protected member variable that maps to the database column ledger_details.display_name
		 * @var string strDisplayName
		 */
		protected $strDisplayName;
		const DisplayNameMaxLength = 45;
		const DisplayNameDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.brand
		 * @var integer intBrand
		 */
		protected $intBrand;
		const BrandDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.stock_grp
		 * @var integer intStockGrp
		 */
		protected $intStockGrp;
		const StockGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.unit
		 * @var integer intUnit
		 */
		protected $intUnit;
		const UnitDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.cost
		 * @var string strCost
		 */
		protected $strCost;
		const CostDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.dp
		 * @var string strDp
		 */
		protected $strDp;
		const DpDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.mrp
		 * @var string strMrp
		 */
		protected $strMrp;
		const MrpDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.min_stock
		 * @var string strMinStock
		 */
		protected $strMinStock;
		const MinStockDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.vat_rate
		 * @var string strVatRate
		 */
		protected $strVatRate;
		const VatRateDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.duties_rate
		 * @var string strDutiesRate
		 */
		protected $strDutiesRate;
		const DutiesRateDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.batch
		 * @var boolean blnBatch
		 */
		protected $blnBatch;
		const BatchDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.expiry
		 * @var boolean blnExpiry
		 */
		protected $blnExpiry;
		const ExpiryDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.barcode_print
		 * @var boolean blnBarcodePrint
		 */
		protected $blnBarcodePrint;
		const BarcodePrintDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.auther
		 * @var integer intAuther
		 */
		protected $intAuther;
		const AutherDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.publisher
		 * @var integer intPublisher
		 */
		protected $intPublisher;
		const PublisherDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.edition
		 * @var integer intEdition
		 */
		protected $intEdition;
		const EditionDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.rack
		 * @var integer intRack
		 */
		protected $intRack;
		const RackDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.subject
		 * @var integer intSubject
		 */
		protected $intSubject;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.series
		 * @var integer intSeries
		 */
		protected $intSeries;
		const SeriesDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.isbn
		 * @var string strIsbn
		 */
		protected $strIsbn;
		const IsbnMaxLength = 255;
		const IsbnDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.pages
		 * @var string strPages
		 */
		protected $strPages;
		const PagesMaxLength = 45;
		const PagesDefault = null;


		/**
		 * Protected member variable that maps to the database column ledger_details.category
		 * @var integer intCategory
		 */
		protected $intCategory;
		const CategoryDefault = null;


		/**
		 * Private member variable that stores a reference to a single DeptTransferAsItem object
		 * (of type DeptTransfer), if this LedgerDetails object was restored with
		 * an expansion on the dept_transfer association table.
		 * @var DeptTransfer _objDeptTransferAsItem;
		 */
		private $_objDeptTransferAsItem;

		/**
		 * Private member variable that stores a reference to an array of DeptTransferAsItem objects
		 * (of type DeptTransfer[]), if this LedgerDetails object was restored with
		 * an ExpandAsArray on the dept_transfer association table.
		 * @var DeptTransfer[] _objDeptTransferAsItemArray;
		 */
		private $_objDeptTransferAsItemArray = null;

		/**
		 * Private member variable that stores a reference to a single IssuedItemsAsItem object
		 * (of type IssuedItems), if this LedgerDetails object was restored with
		 * an expansion on the issued_items association table.
		 * @var IssuedItems _objIssuedItemsAsItem;
		 */
		private $_objIssuedItemsAsItem;

		/**
		 * Private member variable that stores a reference to an array of IssuedItemsAsItem objects
		 * (of type IssuedItems[]), if this LedgerDetails object was restored with
		 * an ExpandAsArray on the issued_items association table.
		 * @var IssuedItems[] _objIssuedItemsAsItemArray;
		 */
		private $_objIssuedItemsAsItemArray = null;

		/**
		 * Private member variable that stores a reference to a single PriceHistoryAsItem object
		 * (of type PriceHistory), if this LedgerDetails object was restored with
		 * an expansion on the price_history association table.
		 * @var PriceHistory _objPriceHistoryAsItem;
		 */
		private $_objPriceHistoryAsItem;

		/**
		 * Private member variable that stores a reference to an array of PriceHistoryAsItem objects
		 * (of type PriceHistory[]), if this LedgerDetails object was restored with
		 * an ExpandAsArray on the price_history association table.
		 * @var PriceHistory[] _objPriceHistoryAsItemArray;
		 */
		private $_objPriceHistoryAsItemArray = null;

		/**
		 * Private member variable that stores a reference to a single SerialsAsItem object
		 * (of type Serials), if this LedgerDetails object was restored with
		 * an expansion on the serials association table.
		 * @var Serials _objSerialsAsItem;
		 */
		private $_objSerialsAsItem;

		/**
		 * Private member variable that stores a reference to an array of SerialsAsItem objects
		 * (of type Serials[]), if this LedgerDetails object was restored with
		 * an ExpandAsArray on the serials association table.
		 * @var Serials[] _objSerialsAsItemArray;
		 */
		private $_objSerialsAsItemArray = null;

		/**
		 * Private member variable that stores a reference to a single StockAsItem object
		 * (of type Stock), if this LedgerDetails object was restored with
		 * an expansion on the stock association table.
		 * @var Stock _objStockAsItem;
		 */
		private $_objStockAsItem;

		/**
		 * Private member variable that stores a reference to an array of StockAsItem objects
		 * (of type Stock[]), if this LedgerDetails object was restored with
		 * an ExpandAsArray on the stock association table.
		 * @var Stock[] _objStockAsItemArray;
		 */
		private $_objStockAsItemArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherHasItemAsItem object
		 * (of type VoucherHasItem), if this LedgerDetails object was restored with
		 * an expansion on the voucher_has_item association table.
		 * @var VoucherHasItem _objVoucherHasItemAsItem;
		 */
		private $_objVoucherHasItemAsItem;

		/**
		 * Private member variable that stores a reference to an array of VoucherHasItemAsItem objects
		 * (of type VoucherHasItem[]), if this LedgerDetails object was restored with
		 * an ExpandAsArray on the voucher_has_item association table.
		 * @var VoucherHasItem[] _objVoucherHasItemAsItemArray;
		 */
		private $_objVoucherHasItemAsItemArray = null;

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
		 * in the database column ledger_details.idledger_details.
		 *
		 * NOTE: Always use the IdledgerDetailsObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objIdledgerDetailsObject
		 */
		protected $objIdledgerDetailsObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.brand.
		 *
		 * NOTE: Always use the BrandObject property getter to correctly retrieve this StockGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var StockGrp objBrandObject
		 */
		protected $objBrandObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.stock_grp.
		 *
		 * NOTE: Always use the StockGrpObject property getter to correctly retrieve this StockGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var StockGrp objStockGrpObject
		 */
		protected $objStockGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.unit.
		 *
		 * NOTE: Always use the UnitObject property getter to correctly retrieve this Unit object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Unit objUnitObject
		 */
		protected $objUnitObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.auther.
		 *
		 * NOTE: Always use the AutherObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objAutherObject
		 */
		protected $objAutherObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.publisher.
		 *
		 * NOTE: Always use the PublisherObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objPublisherObject
		 */
		protected $objPublisherObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.edition.
		 *
		 * NOTE: Always use the EditionObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objEditionObject
		 */
		protected $objEditionObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.rack.
		 *
		 * NOTE: Always use the RackObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objRackObject
		 */
		protected $objRackObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.subject.
		 *
		 * NOTE: Always use the SubjectObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objSubjectObject
		 */
		protected $objSubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.series.
		 *
		 * NOTE: Always use the SeriesObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objSeriesObject
		 */
		protected $objSeriesObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ledger_details.category.
		 *
		 * NOTE: Always use the CategoryObject property getter to correctly retrieve this AccessionCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AccessionCat objCategoryObject
		 */
		protected $objCategoryObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdledgerDetails = LedgerDetails::IdledgerDetailsDefault;
			$this->strDisplayName = LedgerDetails::DisplayNameDefault;
			$this->intBrand = LedgerDetails::BrandDefault;
			$this->intStockGrp = LedgerDetails::StockGrpDefault;
			$this->intUnit = LedgerDetails::UnitDefault;
			$this->strCost = LedgerDetails::CostDefault;
			$this->strDp = LedgerDetails::DpDefault;
			$this->strMrp = LedgerDetails::MrpDefault;
			$this->strMinStock = LedgerDetails::MinStockDefault;
			$this->strVatRate = LedgerDetails::VatRateDefault;
			$this->strDutiesRate = LedgerDetails::DutiesRateDefault;
			$this->blnBatch = LedgerDetails::BatchDefault;
			$this->blnExpiry = LedgerDetails::ExpiryDefault;
			$this->blnBarcodePrint = LedgerDetails::BarcodePrintDefault;
			$this->intAuther = LedgerDetails::AutherDefault;
			$this->intPublisher = LedgerDetails::PublisherDefault;
			$this->intEdition = LedgerDetails::EditionDefault;
			$this->intRack = LedgerDetails::RackDefault;
			$this->intSubject = LedgerDetails::SubjectDefault;
			$this->intSeries = LedgerDetails::SeriesDefault;
			$this->strIsbn = LedgerDetails::IsbnDefault;
			$this->strPages = LedgerDetails::PagesDefault;
			$this->intCategory = LedgerDetails::CategoryDefault;
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
		 * Load a LedgerDetails from PK Info
		 * @param integer $intIdledgerDetails
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails
		 */
		public static function Load($intIdledgerDetails, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'LedgerDetails', $intIdledgerDetails);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = LedgerDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::LedgerDetails()->IdledgerDetails, $intIdledgerDetails)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all LedgerDetailses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call LedgerDetails::QueryArray to perform the LoadAll query
			try {
				return LedgerDetails::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all LedgerDetailses
		 * @return int
		 */
		public static function CountAll() {
			// Call LedgerDetails::QueryCount to perform the CountAll query
			return LedgerDetails::QueryCount(QQ::All());
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
			$objDatabase = LedgerDetails::GetDatabase();

			// Create/Build out the QueryBuilder object with LedgerDetails-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ledger_details');

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
				LedgerDetails::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('ledger_details');

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
		 * Static Qcubed Query method to query for a single LedgerDetails object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return LedgerDetails the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = LedgerDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new LedgerDetails object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = LedgerDetails::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return LedgerDetails::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of LedgerDetails objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return LedgerDetails[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = LedgerDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return LedgerDetails::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = LedgerDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of LedgerDetails objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = LedgerDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = LedgerDetails::GetDatabase();

			$strQuery = LedgerDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/ledgerdetails', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = LedgerDetails::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this LedgerDetails
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ledger_details';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idledger_details', $strAliasPrefix . 'idledger_details');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idledger_details', $strAliasPrefix . 'idledger_details');
			    $objBuilder->AddSelectItem($strTableName, 'display_name', $strAliasPrefix . 'display_name');
			    $objBuilder->AddSelectItem($strTableName, 'brand', $strAliasPrefix . 'brand');
			    $objBuilder->AddSelectItem($strTableName, 'stock_grp', $strAliasPrefix . 'stock_grp');
			    $objBuilder->AddSelectItem($strTableName, 'unit', $strAliasPrefix . 'unit');
			    $objBuilder->AddSelectItem($strTableName, 'cost', $strAliasPrefix . 'cost');
			    $objBuilder->AddSelectItem($strTableName, 'dp', $strAliasPrefix . 'dp');
			    $objBuilder->AddSelectItem($strTableName, 'mrp', $strAliasPrefix . 'mrp');
			    $objBuilder->AddSelectItem($strTableName, 'min_stock', $strAliasPrefix . 'min_stock');
			    $objBuilder->AddSelectItem($strTableName, 'vat_rate', $strAliasPrefix . 'vat_rate');
			    $objBuilder->AddSelectItem($strTableName, 'duties_rate', $strAliasPrefix . 'duties_rate');
			    $objBuilder->AddSelectItem($strTableName, 'batch', $strAliasPrefix . 'batch');
			    $objBuilder->AddSelectItem($strTableName, 'expiry', $strAliasPrefix . 'expiry');
			    $objBuilder->AddSelectItem($strTableName, 'barcode_print', $strAliasPrefix . 'barcode_print');
			    $objBuilder->AddSelectItem($strTableName, 'auther', $strAliasPrefix . 'auther');
			    $objBuilder->AddSelectItem($strTableName, 'publisher', $strAliasPrefix . 'publisher');
			    $objBuilder->AddSelectItem($strTableName, 'edition', $strAliasPrefix . 'edition');
			    $objBuilder->AddSelectItem($strTableName, 'rack', $strAliasPrefix . 'rack');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			    $objBuilder->AddSelectItem($strTableName, 'series', $strAliasPrefix . 'series');
			    $objBuilder->AddSelectItem($strTableName, 'isbn', $strAliasPrefix . 'isbn');
			    $objBuilder->AddSelectItem($strTableName, 'pages', $strAliasPrefix . 'pages');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a LedgerDetails from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this LedgerDetails::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return LedgerDetails
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdledgerDetails == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ledger_details__';


						// Expanding reverse references: DeptTransferAsItem
						$strAlias = $strAliasPrefix . 'depttransferasitem__iddept_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDeptTransferAsItemArray)
								$objPreviousItem->_objDeptTransferAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDeptTransferAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDeptTransferAsItemArray;
								$objChildItem = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDeptTransferAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDeptTransferAsItemArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IssuedItemsAsItem
						$strAlias = $strAliasPrefix . 'issueditemsasitem__idissued_items';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIssuedItemsAsItemArray)
								$objPreviousItem->_objIssuedItemsAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIssuedItemsAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIssuedItemsAsItemArray;
								$objChildItem = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIssuedItemsAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIssuedItemsAsItemArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: PriceHistoryAsItem
						$strAlias = $strAliasPrefix . 'pricehistoryasitem__idprice_history';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objPriceHistoryAsItemArray)
								$objPreviousItem->_objPriceHistoryAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objPriceHistoryAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objPriceHistoryAsItemArray;
								$objChildItem = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objPriceHistoryAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objPriceHistoryAsItemArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SerialsAsItem
						$strAlias = $strAliasPrefix . 'serialsasitem__idserials';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSerialsAsItemArray)
								$objPreviousItem->_objSerialsAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSerialsAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSerialsAsItemArray;
								$objChildItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSerialsAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSerialsAsItemArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: StockAsItem
						$strAlias = $strAliasPrefix . 'stockasitem__idstock';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStockAsItemArray)
								$objPreviousItem->_objStockAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStockAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStockAsItemArray;
								$objChildItem = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStockAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStockAsItemArray[] = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherHasItemAsItem
						$strAlias = $strAliasPrefix . 'voucherhasitemasitem__idvoucher_has_item';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherHasItemAsItemArray)
								$objPreviousItem->_objVoucherHasItemAsItemArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherHasItemAsItemArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherHasItemAsItemArray;
								$objChildItem = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasitem__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherHasItemAsItemArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherHasItemAsItemArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ledger_details__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the LedgerDetails object
			$objToReturn = new LedgerDetails();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdledgerDetails = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intIdledgerDetails = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'display_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDisplayName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'brand';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBrand = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'stock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStockGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'unit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intUnit = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'cost';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCost = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'dp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'mrp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMrp = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'min_stock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMinStock = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'vat_rate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strVatRate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'duties_rate';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDutiesRate = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'batch';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnBatch = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'expiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnExpiry = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'barcode_print';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnBarcodePrint = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'auther';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAuther = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'publisher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPublisher = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'edition';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intEdition = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'rack';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRack = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'series';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeries = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'isbn';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strIsbn = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'pages';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPages = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCategory = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdledgerDetails != $objPreviousItem->IdledgerDetails) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objDeptTransferAsItemArray);
					$cnt = count($objToReturn->_objDeptTransferAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDeptTransferAsItemArray, $objToReturn->_objDeptTransferAsItemArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIssuedItemsAsItemArray);
					$cnt = count($objToReturn->_objIssuedItemsAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIssuedItemsAsItemArray, $objToReturn->_objIssuedItemsAsItemArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objPriceHistoryAsItemArray);
					$cnt = count($objToReturn->_objPriceHistoryAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objPriceHistoryAsItemArray, $objToReturn->_objPriceHistoryAsItemArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSerialsAsItemArray);
					$cnt = count($objToReturn->_objSerialsAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSerialsAsItemArray, $objToReturn->_objSerialsAsItemArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objStockAsItemArray);
					$cnt = count($objToReturn->_objStockAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStockAsItemArray, $objToReturn->_objStockAsItemArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherHasItemAsItemArray);
					$cnt = count($objToReturn->_objVoucherHasItemAsItemArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherHasItemAsItemArray, $objToReturn->_objVoucherHasItemAsItemArray)) {
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
				$strAliasPrefix = 'ledger_details__';

			// Check for IdledgerDetailsObject Early Binding
			$strAlias = $strAliasPrefix . 'idledger_details__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIdledgerDetailsObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'idledger_details__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BrandObject Early Binding
			$strAlias = $strAliasPrefix . 'brand__idstock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBrandObject = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'brand__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StockGrpObject Early Binding
			$strAlias = $strAliasPrefix . 'stock_grp__idstock_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStockGrpObject = StockGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stock_grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for UnitObject Early Binding
			$strAlias = $strAliasPrefix . 'unit__idunit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objUnitObject = Unit::InstantiateDbRow($objDbRow, $strAliasPrefix . 'unit__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AutherObject Early Binding
			$strAlias = $strAliasPrefix . 'auther__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAutherObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'auther__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PublisherObject Early Binding
			$strAlias = $strAliasPrefix . 'publisher__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPublisherObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'publisher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for EditionObject Early Binding
			$strAlias = $strAliasPrefix . 'edition__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEditionObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'edition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RackObject Early Binding
			$strAlias = $strAliasPrefix . 'rack__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRackObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'rack__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'subject__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubjectObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SeriesObject Early Binding
			$strAlias = $strAliasPrefix . 'series__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSeriesObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'series__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CategoryObject Early Binding
			$strAlias = $strAliasPrefix . 'category__idaccession_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCategoryObject = AccessionCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'category__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for DeptTransferAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'depttransferasitem__iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDeptTransferAsItemArray)
				$objToReturn->_objDeptTransferAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDeptTransferAsItemArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeptTransferAsItem = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransferasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IssuedItemsAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'issueditemsasitem__idissued_items';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIssuedItemsAsItemArray)
				$objToReturn->_objIssuedItemsAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIssuedItemsAsItemArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssuedItemsAsItem = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditemsasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for PriceHistoryAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'pricehistoryasitem__idprice_history';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objPriceHistoryAsItemArray)
				$objToReturn->_objPriceHistoryAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objPriceHistoryAsItemArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objPriceHistoryAsItem = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SerialsAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'serialsasitem__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSerialsAsItemArray)
				$objToReturn->_objSerialsAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSerialsAsItemArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSerialsAsItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for StockAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'stockasitem__idstock';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStockAsItemArray)
				$objToReturn->_objStockAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStockAsItemArray[] = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStockAsItem = Stock::InstantiateDbRow($objDbRow, $strAliasPrefix . 'stockasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherHasItemAsItem Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherhasitemasitem__idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherHasItemAsItemArray)
				$objToReturn->_objVoucherHasItemAsItemArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherHasItemAsItemArray[] = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherHasItemAsItem = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherhasitemasitem__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of LedgerDetailses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return LedgerDetails[]
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
					$objItem = LedgerDetails::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = LedgerDetails::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single LedgerDetails object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return LedgerDetails next row resulting from the query
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
			return LedgerDetails::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single LedgerDetails object,
		 * by IdledgerDetails Index(es)
		 * @param integer $intIdledgerDetails
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails
		*/
		public static function LoadByIdledgerDetails($intIdledgerDetails, $objOptionalClauses = null) {
			return LedgerDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::LedgerDetails()->IdledgerDetails, $intIdledgerDetails)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single LedgerDetails object,
		 * by DisplayName Index(es)
		 * @param string $strDisplayName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails
		*/
		public static function LoadByDisplayName($strDisplayName, $objOptionalClauses = null) {
			return LedgerDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::LedgerDetails()->DisplayName, $strDisplayName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Brand Index(es)
		 * @param integer $intBrand
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByBrand($intBrand, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByBrand query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Brand, $intBrand),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Brand Index(es)
		 * @param integer $intBrand
		 * @return int
		*/
		public static function CountByBrand($intBrand) {
			// Call LedgerDetails::QueryCount to perform the CountByBrand query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Brand, $intBrand)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by StockGrp Index(es)
		 * @param integer $intStockGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByStockGrp($intStockGrp, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByStockGrp query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->StockGrp, $intStockGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by StockGrp Index(es)
		 * @param integer $intStockGrp
		 * @return int
		*/
		public static function CountByStockGrp($intStockGrp) {
			// Call LedgerDetails::QueryCount to perform the CountByStockGrp query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->StockGrp, $intStockGrp)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Unit Index(es)
		 * @param integer $intUnit
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByUnit($intUnit, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByUnit query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Unit, $intUnit),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Unit Index(es)
		 * @param integer $intUnit
		 * @return int
		*/
		public static function CountByUnit($intUnit) {
			// Call LedgerDetails::QueryCount to perform the CountByUnit query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Unit, $intUnit)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Auther Index(es)
		 * @param integer $intAuther
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByAuther($intAuther, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByAuther query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Auther, $intAuther),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Auther Index(es)
		 * @param integer $intAuther
		 * @return int
		*/
		public static function CountByAuther($intAuther) {
			// Call LedgerDetails::QueryCount to perform the CountByAuther query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Auther, $intAuther)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Publisher Index(es)
		 * @param integer $intPublisher
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByPublisher($intPublisher, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByPublisher query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Publisher, $intPublisher),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Publisher Index(es)
		 * @param integer $intPublisher
		 * @return int
		*/
		public static function CountByPublisher($intPublisher) {
			// Call LedgerDetails::QueryCount to perform the CountByPublisher query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Publisher, $intPublisher)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Edition Index(es)
		 * @param integer $intEdition
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByEdition($intEdition, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByEdition query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Edition, $intEdition),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Edition Index(es)
		 * @param integer $intEdition
		 * @return int
		*/
		public static function CountByEdition($intEdition) {
			// Call LedgerDetails::QueryCount to perform the CountByEdition query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Edition, $intEdition)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayBySubject($intSubject, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayBySubject query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Subject, $intSubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @return int
		*/
		public static function CountBySubject($intSubject) {
			// Call LedgerDetails::QueryCount to perform the CountBySubject query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Subject, $intSubject)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByCategory($intCategory, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByCategory query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Category, $intCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @return int
		*/
		public static function CountByCategory($intCategory) {
			// Call LedgerDetails::QueryCount to perform the CountByCategory query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Category, $intCategory)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Rack Index(es)
		 * @param integer $intRack
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayByRack($intRack, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayByRack query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Rack, $intRack),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Rack Index(es)
		 * @param integer $intRack
		 * @return int
		*/
		public static function CountByRack($intRack) {
			// Call LedgerDetails::QueryCount to perform the CountByRack query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Rack, $intRack)
			);
		}

		/**
		 * Load an array of LedgerDetails objects,
		 * by Series Index(es)
		 * @param integer $intSeries
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public static function LoadArrayBySeries($intSeries, $objOptionalClauses = null) {
			// Call LedgerDetails::QueryArray to perform the LoadArrayBySeries query
			try {
				return LedgerDetails::QueryArray(
					QQ::Equal(QQN::LedgerDetails()->Series, $intSeries),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count LedgerDetailses
		 * by Series Index(es)
		 * @param integer $intSeries
		 * @return int
		*/
		public static function CountBySeries($intSeries) {
			// Call LedgerDetails::QueryCount to perform the CountBySeries query
			return LedgerDetails::QueryCount(
				QQ::Equal(QQN::LedgerDetails()->Series, $intSeries)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this LedgerDetails
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ledger_details` (
							`idledger_details`,
							`display_name`,
							`brand`,
							`stock_grp`,
							`unit`,
							`cost`,
							`dp`,
							`mrp`,
							`min_stock`,
							`vat_rate`,
							`duties_rate`,
							`batch`,
							`expiry`,
							`barcode_print`,
							`auther`,
							`publisher`,
							`edition`,
							`rack`,
							`subject`,
							`series`,
							`isbn`,
							`pages`,
							`category`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intIdledgerDetails) . ',
							' . $objDatabase->SqlVariable($this->strDisplayName) . ',
							' . $objDatabase->SqlVariable($this->intBrand) . ',
							' . $objDatabase->SqlVariable($this->intStockGrp) . ',
							' . $objDatabase->SqlVariable($this->intUnit) . ',
							' . $objDatabase->SqlVariable($this->strCost) . ',
							' . $objDatabase->SqlVariable($this->strDp) . ',
							' . $objDatabase->SqlVariable($this->strMrp) . ',
							' . $objDatabase->SqlVariable($this->strMinStock) . ',
							' . $objDatabase->SqlVariable($this->strVatRate) . ',
							' . $objDatabase->SqlVariable($this->strDutiesRate) . ',
							' . $objDatabase->SqlVariable($this->blnBatch) . ',
							' . $objDatabase->SqlVariable($this->blnExpiry) . ',
							' . $objDatabase->SqlVariable($this->blnBarcodePrint) . ',
							' . $objDatabase->SqlVariable($this->intAuther) . ',
							' . $objDatabase->SqlVariable($this->intPublisher) . ',
							' . $objDatabase->SqlVariable($this->intEdition) . ',
							' . $objDatabase->SqlVariable($this->intRack) . ',
							' . $objDatabase->SqlVariable($this->intSubject) . ',
							' . $objDatabase->SqlVariable($this->intSeries) . ',
							' . $objDatabase->SqlVariable($this->strIsbn) . ',
							' . $objDatabase->SqlVariable($this->strPages) . ',
							' . $objDatabase->SqlVariable($this->intCategory) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ledger_details`
						SET
							`idledger_details` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . ',
							`display_name` = ' . $objDatabase->SqlVariable($this->strDisplayName) . ',
							`brand` = ' . $objDatabase->SqlVariable($this->intBrand) . ',
							`stock_grp` = ' . $objDatabase->SqlVariable($this->intStockGrp) . ',
							`unit` = ' . $objDatabase->SqlVariable($this->intUnit) . ',
							`cost` = ' . $objDatabase->SqlVariable($this->strCost) . ',
							`dp` = ' . $objDatabase->SqlVariable($this->strDp) . ',
							`mrp` = ' . $objDatabase->SqlVariable($this->strMrp) . ',
							`min_stock` = ' . $objDatabase->SqlVariable($this->strMinStock) . ',
							`vat_rate` = ' . $objDatabase->SqlVariable($this->strVatRate) . ',
							`duties_rate` = ' . $objDatabase->SqlVariable($this->strDutiesRate) . ',
							`batch` = ' . $objDatabase->SqlVariable($this->blnBatch) . ',
							`expiry` = ' . $objDatabase->SqlVariable($this->blnExpiry) . ',
							`barcode_print` = ' . $objDatabase->SqlVariable($this->blnBarcodePrint) . ',
							`auther` = ' . $objDatabase->SqlVariable($this->intAuther) . ',
							`publisher` = ' . $objDatabase->SqlVariable($this->intPublisher) . ',
							`edition` = ' . $objDatabase->SqlVariable($this->intEdition) . ',
							`rack` = ' . $objDatabase->SqlVariable($this->intRack) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->intSubject) . ',
							`series` = ' . $objDatabase->SqlVariable($this->intSeries) . ',
							`isbn` = ' . $objDatabase->SqlVariable($this->strIsbn) . ',
							`pages` = ' . $objDatabase->SqlVariable($this->strPages) . ',
							`category` = ' . $objDatabase->SqlVariable($this->intCategory) . '
						WHERE
							`idledger_details` = ' . $objDatabase->SqlVariable($this->__intIdledgerDetails) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intIdledgerDetails = $this->intIdledgerDetails;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this LedgerDetails
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this LedgerDetails with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this LedgerDetails ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'LedgerDetails', $this->intIdledgerDetails);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all LedgerDetailses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate ledger_details table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ledger_details`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this LedgerDetails from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved LedgerDetails object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = LedgerDetails::Load($this->intIdledgerDetails);

			// Update $this's local variables to match
			$this->IdledgerDetails = $objReloaded->IdledgerDetails;
			$this->__intIdledgerDetails = $this->intIdledgerDetails;
			$this->strDisplayName = $objReloaded->strDisplayName;
			$this->Brand = $objReloaded->Brand;
			$this->StockGrp = $objReloaded->StockGrp;
			$this->Unit = $objReloaded->Unit;
			$this->strCost = $objReloaded->strCost;
			$this->strDp = $objReloaded->strDp;
			$this->strMrp = $objReloaded->strMrp;
			$this->strMinStock = $objReloaded->strMinStock;
			$this->strVatRate = $objReloaded->strVatRate;
			$this->strDutiesRate = $objReloaded->strDutiesRate;
			$this->blnBatch = $objReloaded->blnBatch;
			$this->blnExpiry = $objReloaded->blnExpiry;
			$this->blnBarcodePrint = $objReloaded->blnBarcodePrint;
			$this->Auther = $objReloaded->Auther;
			$this->Publisher = $objReloaded->Publisher;
			$this->Edition = $objReloaded->Edition;
			$this->Rack = $objReloaded->Rack;
			$this->Subject = $objReloaded->Subject;
			$this->Series = $objReloaded->Series;
			$this->strIsbn = $objReloaded->strIsbn;
			$this->strPages = $objReloaded->strPages;
			$this->Category = $objReloaded->Category;
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
				case 'IdledgerDetails':
					/**
					 * Gets the value for intIdledgerDetails (PK)
					 * @return integer
					 */
					return $this->intIdledgerDetails;

				case 'DisplayName':
					/**
					 * Gets the value for strDisplayName (Unique)
					 * @return string
					 */
					return $this->strDisplayName;

				case 'Brand':
					/**
					 * Gets the value for intBrand 
					 * @return integer
					 */
					return $this->intBrand;

				case 'StockGrp':
					/**
					 * Gets the value for intStockGrp 
					 * @return integer
					 */
					return $this->intStockGrp;

				case 'Unit':
					/**
					 * Gets the value for intUnit (Not Null)
					 * @return integer
					 */
					return $this->intUnit;

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
					 * Gets the value for strMrp (Not Null)
					 * @return string
					 */
					return $this->strMrp;

				case 'MinStock':
					/**
					 * Gets the value for strMinStock 
					 * @return string
					 */
					return $this->strMinStock;

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

				case 'Batch':
					/**
					 * Gets the value for blnBatch 
					 * @return boolean
					 */
					return $this->blnBatch;

				case 'Expiry':
					/**
					 * Gets the value for blnExpiry 
					 * @return boolean
					 */
					return $this->blnExpiry;

				case 'BarcodePrint':
					/**
					 * Gets the value for blnBarcodePrint 
					 * @return boolean
					 */
					return $this->blnBarcodePrint;

				case 'Auther':
					/**
					 * Gets the value for intAuther 
					 * @return integer
					 */
					return $this->intAuther;

				case 'Publisher':
					/**
					 * Gets the value for intPublisher 
					 * @return integer
					 */
					return $this->intPublisher;

				case 'Edition':
					/**
					 * Gets the value for intEdition 
					 * @return integer
					 */
					return $this->intEdition;

				case 'Rack':
					/**
					 * Gets the value for intRack 
					 * @return integer
					 */
					return $this->intRack;

				case 'Subject':
					/**
					 * Gets the value for intSubject 
					 * @return integer
					 */
					return $this->intSubject;

				case 'Series':
					/**
					 * Gets the value for intSeries 
					 * @return integer
					 */
					return $this->intSeries;

				case 'Isbn':
					/**
					 * Gets the value for strIsbn 
					 * @return string
					 */
					return $this->strIsbn;

				case 'Pages':
					/**
					 * Gets the value for strPages 
					 * @return string
					 */
					return $this->strPages;

				case 'Category':
					/**
					 * Gets the value for intCategory 
					 * @return integer
					 */
					return $this->intCategory;


				///////////////////
				// Member Objects
				///////////////////
				case 'IdledgerDetailsObject':
					/**
					 * Gets the value for the Ledger object referenced by intIdledgerDetails (PK)
					 * @return Ledger
					 */
					try {
						if ((!$this->objIdledgerDetailsObject) && (!is_null($this->intIdledgerDetails)))
							$this->objIdledgerDetailsObject = Ledger::Load($this->intIdledgerDetails);
						return $this->objIdledgerDetailsObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BrandObject':
					/**
					 * Gets the value for the StockGrp object referenced by intBrand 
					 * @return StockGrp
					 */
					try {
						if ((!$this->objBrandObject) && (!is_null($this->intBrand)))
							$this->objBrandObject = StockGrp::Load($this->intBrand);
						return $this->objBrandObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StockGrpObject':
					/**
					 * Gets the value for the StockGrp object referenced by intStockGrp 
					 * @return StockGrp
					 */
					try {
						if ((!$this->objStockGrpObject) && (!is_null($this->intStockGrp)))
							$this->objStockGrpObject = StockGrp::Load($this->intStockGrp);
						return $this->objStockGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UnitObject':
					/**
					 * Gets the value for the Unit object referenced by intUnit (Not Null)
					 * @return Unit
					 */
					try {
						if ((!$this->objUnitObject) && (!is_null($this->intUnit)))
							$this->objUnitObject = Unit::Load($this->intUnit);
						return $this->objUnitObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AutherObject':
					/**
					 * Gets the value for the Ledger object referenced by intAuther 
					 * @return Ledger
					 */
					try {
						if ((!$this->objAutherObject) && (!is_null($this->intAuther)))
							$this->objAutherObject = Ledger::Load($this->intAuther);
						return $this->objAutherObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PublisherObject':
					/**
					 * Gets the value for the Ledger object referenced by intPublisher 
					 * @return Ledger
					 */
					try {
						if ((!$this->objPublisherObject) && (!is_null($this->intPublisher)))
							$this->objPublisherObject = Ledger::Load($this->intPublisher);
						return $this->objPublisherObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EditionObject':
					/**
					 * Gets the value for the Ledger object referenced by intEdition 
					 * @return Ledger
					 */
					try {
						if ((!$this->objEditionObject) && (!is_null($this->intEdition)))
							$this->objEditionObject = Ledger::Load($this->intEdition);
						return $this->objEditionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RackObject':
					/**
					 * Gets the value for the Ledger object referenced by intRack 
					 * @return Ledger
					 */
					try {
						if ((!$this->objRackObject) && (!is_null($this->intRack)))
							$this->objRackObject = Ledger::Load($this->intRack);
						return $this->objRackObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubjectObject':
					/**
					 * Gets the value for the Ledger object referenced by intSubject 
					 * @return Ledger
					 */
					try {
						if ((!$this->objSubjectObject) && (!is_null($this->intSubject)))
							$this->objSubjectObject = Ledger::Load($this->intSubject);
						return $this->objSubjectObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SeriesObject':
					/**
					 * Gets the value for the Ledger object referenced by intSeries 
					 * @return Ledger
					 */
					try {
						if ((!$this->objSeriesObject) && (!is_null($this->intSeries)))
							$this->objSeriesObject = Ledger::Load($this->intSeries);
						return $this->objSeriesObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CategoryObject':
					/**
					 * Gets the value for the AccessionCat object referenced by intCategory 
					 * @return AccessionCat
					 */
					try {
						if ((!$this->objCategoryObject) && (!is_null($this->intCategory)))
							$this->objCategoryObject = AccessionCat::Load($this->intCategory);
						return $this->objCategoryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DeptTransferAsItem':
					/**
					 * Gets the value for the private _objDeptTransferAsItem (Read-Only)
					 * if set due to an expansion on the dept_transfer.item reverse relationship
					 * @return DeptTransfer
					 */
					return $this->_objDeptTransferAsItem;

				case '_DeptTransferAsItemArray':
					/**
					 * Gets the value for the private _objDeptTransferAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the dept_transfer.item reverse relationship
					 * @return DeptTransfer[]
					 */
					return $this->_objDeptTransferAsItemArray;

				case '_IssuedItemsAsItem':
					/**
					 * Gets the value for the private _objIssuedItemsAsItem (Read-Only)
					 * if set due to an expansion on the issued_items.item reverse relationship
					 * @return IssuedItems
					 */
					return $this->_objIssuedItemsAsItem;

				case '_IssuedItemsAsItemArray':
					/**
					 * Gets the value for the private _objIssuedItemsAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the issued_items.item reverse relationship
					 * @return IssuedItems[]
					 */
					return $this->_objIssuedItemsAsItemArray;

				case '_PriceHistoryAsItem':
					/**
					 * Gets the value for the private _objPriceHistoryAsItem (Read-Only)
					 * if set due to an expansion on the price_history.item reverse relationship
					 * @return PriceHistory
					 */
					return $this->_objPriceHistoryAsItem;

				case '_PriceHistoryAsItemArray':
					/**
					 * Gets the value for the private _objPriceHistoryAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the price_history.item reverse relationship
					 * @return PriceHistory[]
					 */
					return $this->_objPriceHistoryAsItemArray;

				case '_SerialsAsItem':
					/**
					 * Gets the value for the private _objSerialsAsItem (Read-Only)
					 * if set due to an expansion on the serials.item reverse relationship
					 * @return Serials
					 */
					return $this->_objSerialsAsItem;

				case '_SerialsAsItemArray':
					/**
					 * Gets the value for the private _objSerialsAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the serials.item reverse relationship
					 * @return Serials[]
					 */
					return $this->_objSerialsAsItemArray;

				case '_StockAsItem':
					/**
					 * Gets the value for the private _objStockAsItem (Read-Only)
					 * if set due to an expansion on the stock.item reverse relationship
					 * @return Stock
					 */
					return $this->_objStockAsItem;

				case '_StockAsItemArray':
					/**
					 * Gets the value for the private _objStockAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the stock.item reverse relationship
					 * @return Stock[]
					 */
					return $this->_objStockAsItemArray;

				case '_VoucherHasItemAsItem':
					/**
					 * Gets the value for the private _objVoucherHasItemAsItem (Read-Only)
					 * if set due to an expansion on the voucher_has_item.item reverse relationship
					 * @return VoucherHasItem
					 */
					return $this->_objVoucherHasItemAsItem;

				case '_VoucherHasItemAsItemArray':
					/**
					 * Gets the value for the private _objVoucherHasItemAsItemArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher_has_item.item reverse relationship
					 * @return VoucherHasItem[]
					 */
					return $this->_objVoucherHasItemAsItemArray;


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
				case 'IdledgerDetails':
					/**
					 * Sets the value for intIdledgerDetails (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIdledgerDetailsObject = null;
						return ($this->intIdledgerDetails = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DisplayName':
					/**
					 * Sets the value for strDisplayName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDisplayName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Brand':
					/**
					 * Sets the value for intBrand 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBrandObject = null;
						return ($this->intBrand = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StockGrp':
					/**
					 * Sets the value for intStockGrp 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStockGrpObject = null;
						return ($this->intStockGrp = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Unit':
					/**
					 * Sets the value for intUnit (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objUnitObject = null;
						return ($this->intUnit = QType::Cast($mixValue, QType::Integer));
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
					 * Sets the value for strMrp (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMrp = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MinStock':
					/**
					 * Sets the value for strMinStock 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMinStock = QType::Cast($mixValue, QType::String));
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

				case 'Batch':
					/**
					 * Sets the value for blnBatch 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnBatch = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Expiry':
					/**
					 * Sets the value for blnExpiry 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnExpiry = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BarcodePrint':
					/**
					 * Sets the value for blnBarcodePrint 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnBarcodePrint = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Auther':
					/**
					 * Sets the value for intAuther 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAutherObject = null;
						return ($this->intAuther = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Publisher':
					/**
					 * Sets the value for intPublisher 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPublisherObject = null;
						return ($this->intPublisher = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Edition':
					/**
					 * Sets the value for intEdition 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objEditionObject = null;
						return ($this->intEdition = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Rack':
					/**
					 * Sets the value for intRack 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRackObject = null;
						return ($this->intRack = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Subject':
					/**
					 * Sets the value for intSubject 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSubjectObject = null;
						return ($this->intSubject = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Series':
					/**
					 * Sets the value for intSeries 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSeriesObject = null;
						return ($this->intSeries = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Isbn':
					/**
					 * Sets the value for strIsbn 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIsbn = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pages':
					/**
					 * Sets the value for strPages 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPages = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Category':
					/**
					 * Sets the value for intCategory 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCategoryObject = null;
						return ($this->intCategory = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'IdledgerDetailsObject':
					/**
					 * Sets the value for the Ledger object referenced by intIdledgerDetails (PK)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intIdledgerDetails = null;
						$this->objIdledgerDetailsObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved IdledgerDetailsObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objIdledgerDetailsObject = $mixValue;
						$this->intIdledgerDetails = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BrandObject':
					/**
					 * Sets the value for the StockGrp object referenced by intBrand 
					 * @param StockGrp $mixValue
					 * @return StockGrp
					 */
					if (is_null($mixValue)) {
						$this->intBrand = null;
						$this->objBrandObject = null;
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
							throw new QCallerException('Unable to set an unsaved BrandObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objBrandObject = $mixValue;
						$this->intBrand = $mixValue->IdstockGrp;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StockGrpObject':
					/**
					 * Sets the value for the StockGrp object referenced by intStockGrp 
					 * @param StockGrp $mixValue
					 * @return StockGrp
					 */
					if (is_null($mixValue)) {
						$this->intStockGrp = null;
						$this->objStockGrpObject = null;
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
							throw new QCallerException('Unable to set an unsaved StockGrpObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objStockGrpObject = $mixValue;
						$this->intStockGrp = $mixValue->IdstockGrp;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'UnitObject':
					/**
					 * Sets the value for the Unit object referenced by intUnit (Not Null)
					 * @param Unit $mixValue
					 * @return Unit
					 */
					if (is_null($mixValue)) {
						$this->intUnit = null;
						$this->objUnitObject = null;
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
							throw new QCallerException('Unable to set an unsaved UnitObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objUnitObject = $mixValue;
						$this->intUnit = $mixValue->Idunit;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AutherObject':
					/**
					 * Sets the value for the Ledger object referenced by intAuther 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intAuther = null;
						$this->objAutherObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved AutherObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objAutherObject = $mixValue;
						$this->intAuther = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PublisherObject':
					/**
					 * Sets the value for the Ledger object referenced by intPublisher 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intPublisher = null;
						$this->objPublisherObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved PublisherObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objPublisherObject = $mixValue;
						$this->intPublisher = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'EditionObject':
					/**
					 * Sets the value for the Ledger object referenced by intEdition 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intEdition = null;
						$this->objEditionObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved EditionObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objEditionObject = $mixValue;
						$this->intEdition = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RackObject':
					/**
					 * Sets the value for the Ledger object referenced by intRack 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intRack = null;
						$this->objRackObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved RackObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objRackObject = $mixValue;
						$this->intRack = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SubjectObject':
					/**
					 * Sets the value for the Ledger object referenced by intSubject 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intSubject = null;
						$this->objSubjectObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved SubjectObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objSubjectObject = $mixValue;
						$this->intSubject = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SeriesObject':
					/**
					 * Sets the value for the Ledger object referenced by intSeries 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intSeries = null;
						$this->objSeriesObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved SeriesObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objSeriesObject = $mixValue;
						$this->intSeries = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CategoryObject':
					/**
					 * Sets the value for the AccessionCat object referenced by intCategory 
					 * @param AccessionCat $mixValue
					 * @return AccessionCat
					 */
					if (is_null($mixValue)) {
						$this->intCategory = null;
						$this->objCategoryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AccessionCat object
						try {
							$mixValue = QType::Cast($mixValue, 'AccessionCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AccessionCat object
						if (is_null($mixValue->IdaccessionCat))
							throw new QCallerException('Unable to set an unsaved CategoryObject for this LedgerDetails');

						// Update Local Member Variables
						$this->objCategoryObject = $mixValue;
						$this->intCategory = $mixValue->IdaccessionCat;

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



		// Related Objects' Methods for DeptTransferAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeptTransfersAsItem as an array of DeptTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public function GetDeptTransferAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledgerDetails)))
				return array();

			try {
				return DeptTransfer::LoadArrayByItem($this->intIdledgerDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeptTransfersAsItem
		 * @return int
		*/
		public function CountDeptTransfersAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				return 0;

			return DeptTransfer::CountByItem($this->intIdledgerDetails);
		}

		/**
		 * Associates a DeptTransferAsItem
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function AssociateDeptTransferAsItem(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsItem on this unsaved LedgerDetails.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransferAsItem on this LedgerDetails with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . '
			');
		}

		/**
		 * Unassociates a DeptTransferAsItem
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function UnassociateDeptTransferAsItem(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsItem on this unsaved LedgerDetails.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsItem on this LedgerDetails with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`item` = null
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Unassociates all DeptTransfersAsItem
		 * @return void
		*/
		public function UnassociateAllDeptTransfersAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes an associated DeptTransferAsItem
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function DeleteAssociatedDeptTransferAsItem(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsItem on this unsaved LedgerDetails.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsItem on this LedgerDetails with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes all associated DeptTransfersAsItem
		 * @return void
		*/
		public function DeleteAllDeptTransfersAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransferAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}


		// Related Objects' Methods for IssuedItemsAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssuedItemsesAsItem as an array of IssuedItems objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public function GetIssuedItemsAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledgerDetails)))
				return array();

			try {
				return IssuedItems::LoadArrayByItem($this->intIdledgerDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssuedItemsesAsItem
		 * @return int
		*/
		public function CountIssuedItemsesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				return 0;

			return IssuedItems::CountByItem($this->intIdledgerDetails);
		}

		/**
		 * Associates a IssuedItemsAsItem
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function AssociateIssuedItemsAsItem(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsItem on this unsaved LedgerDetails.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItemsAsItem on this LedgerDetails with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . '
			');
		}

		/**
		 * Unassociates a IssuedItemsAsItem
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function UnassociateIssuedItemsAsItem(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsItem on this unsaved LedgerDetails.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsItem on this LedgerDetails with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`item` = null
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Unassociates all IssuedItemsesAsItem
		 * @return void
		*/
		public function UnassociateAllIssuedItemsesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes an associated IssuedItemsAsItem
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function DeleteAssociatedIssuedItemsAsItem(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsItem on this unsaved LedgerDetails.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsItem on this LedgerDetails with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes all associated IssuedItemsesAsItem
		 * @return void
		*/
		public function DeleteAllIssuedItemsesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItemsAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}


		// Related Objects' Methods for PriceHistoryAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated PriceHistoriesAsItem as an array of PriceHistory objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public function GetPriceHistoryAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledgerDetails)))
				return array();

			try {
				return PriceHistory::LoadArrayByItem($this->intIdledgerDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated PriceHistoriesAsItem
		 * @return int
		*/
		public function CountPriceHistoriesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				return 0;

			return PriceHistory::CountByItem($this->intIdledgerDetails);
		}

		/**
		 * Associates a PriceHistoryAsItem
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function AssociatePriceHistoryAsItem(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsItem on this unsaved LedgerDetails.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsItem on this LedgerDetails with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . '
			');
		}

		/**
		 * Unassociates a PriceHistoryAsItem
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function UnassociatePriceHistoryAsItem(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsItem on this unsaved LedgerDetails.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsItem on this LedgerDetails with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`item` = null
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Unassociates all PriceHistoriesAsItem
		 * @return void
		*/
		public function UnassociateAllPriceHistoriesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes an associated PriceHistoryAsItem
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function DeleteAssociatedPriceHistoryAsItem(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsItem on this unsaved LedgerDetails.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsItem on this LedgerDetails with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes all associated PriceHistoriesAsItem
		 * @return void
		*/
		public function DeleteAllPriceHistoriesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}


		// Related Objects' Methods for SerialsAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SerialsesAsItem as an array of Serials objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public function GetSerialsAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledgerDetails)))
				return array();

			try {
				return Serials::LoadArrayByItem($this->intIdledgerDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SerialsesAsItem
		 * @return int
		*/
		public function CountSerialsesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				return 0;

			return Serials::CountByItem($this->intIdledgerDetails);
		}

		/**
		 * Associates a SerialsAsItem
		 * @param Serials $objSerials
		 * @return void
		*/
		public function AssociateSerialsAsItem(Serials $objSerials) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsItem on this unsaved LedgerDetails.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsItem on this LedgerDetails with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . '
			');
		}

		/**
		 * Unassociates a SerialsAsItem
		 * @param Serials $objSerials
		 * @return void
		*/
		public function UnassociateSerialsAsItem(Serials $objSerials) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsItem on this unsaved LedgerDetails.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsItem on this LedgerDetails with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`item` = null
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Unassociates all SerialsesAsItem
		 * @return void
		*/
		public function UnassociateAllSerialsesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes an associated SerialsAsItem
		 * @param Serials $objSerials
		 * @return void
		*/
		public function DeleteAssociatedSerialsAsItem(Serials $objSerials) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsItem on this unsaved LedgerDetails.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsItem on this LedgerDetails with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes all associated SerialsesAsItem
		 * @return void
		*/
		public function DeleteAllSerialsesAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}


		// Related Objects' Methods for StockAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StocksAsItem as an array of Stock objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Stock[]
		*/
		public function GetStockAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledgerDetails)))
				return array();

			try {
				return Stock::LoadArrayByItem($this->intIdledgerDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StocksAsItem
		 * @return int
		*/
		public function CountStocksAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				return 0;

			return Stock::CountByItem($this->intIdledgerDetails);
		}

		/**
		 * Associates a StockAsItem
		 * @param Stock $objStock
		 * @return void
		*/
		public function AssociateStockAsItem(Stock $objStock) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStockAsItem on this unsaved LedgerDetails.');
			if ((is_null($objStock->Idstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStockAsItem on this LedgerDetails with an unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($objStock->Idstock) . '
			');
		}

		/**
		 * Unassociates a StockAsItem
		 * @param Stock $objStock
		 * @return void
		*/
		public function UnassociateStockAsItem(Stock $objStock) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsItem on this unsaved LedgerDetails.');
			if ((is_null($objStock->Idstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsItem on this LedgerDetails with an unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock`
				SET
					`item` = null
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($objStock->Idstock) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Unassociates all StocksAsItem
		 * @return void
		*/
		public function UnassociateAllStocksAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stock`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes an associated StockAsItem
		 * @param Stock $objStock
		 * @return void
		*/
		public function DeleteAssociatedStockAsItem(Stock $objStock) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsItem on this unsaved LedgerDetails.');
			if ((is_null($objStock->Idstock)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsItem on this LedgerDetails with an unsaved Stock.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock`
				WHERE
					`idstock` = ' . $objDatabase->SqlVariable($objStock->Idstock) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes all associated StocksAsItem
		 * @return void
		*/
		public function DeleteAllStocksAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStockAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stock`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}


		// Related Objects' Methods for VoucherHasItemAsItem
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VoucherHasItemsAsItem as an array of VoucherHasItem objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherHasItem[]
		*/
		public function GetVoucherHasItemAsItemArray($objOptionalClauses = null) {
			if ((is_null($this->intIdledgerDetails)))
				return array();

			try {
				return VoucherHasItem::LoadArrayByItem($this->intIdledgerDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VoucherHasItemsAsItem
		 * @return int
		*/
		public function CountVoucherHasItemsAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				return 0;

			return VoucherHasItem::CountByItem($this->intIdledgerDetails);
		}

		/**
		 * Associates a VoucherHasItemAsItem
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function AssociateVoucherHasItemAsItem(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItemAsItem on this unsaved LedgerDetails.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherHasItemAsItem on this LedgerDetails with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . '
			');
		}

		/**
		 * Unassociates a VoucherHasItemAsItem
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function UnassociateVoucherHasItemAsItem(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsItem on this unsaved LedgerDetails.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsItem on this LedgerDetails with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`item` = null
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Unassociates all VoucherHasItemsAsItem
		 * @return void
		*/
		public function UnassociateAllVoucherHasItemsAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_has_item`
				SET
					`item` = null
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes an associated VoucherHasItemAsItem
		 * @param VoucherHasItem $objVoucherHasItem
		 * @return void
		*/
		public function DeleteAssociatedVoucherHasItemAsItem(VoucherHasItem $objVoucherHasItem) {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsItem on this unsaved LedgerDetails.');
			if ((is_null($objVoucherHasItem->IdvoucherHasItem)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsItem on this LedgerDetails with an unsaved VoucherHasItem.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`idvoucher_has_item` = ' . $objDatabase->SqlVariable($objVoucherHasItem->IdvoucherHasItem) . ' AND
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
			');
		}

		/**
		 * Deletes all associated VoucherHasItemsAsItem
		 * @return void
		*/
		public function DeleteAllVoucherHasItemsAsItem() {
			if ((is_null($this->intIdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherHasItemAsItem on this unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = LedgerDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_has_item`
				WHERE
					`item` = ' . $objDatabase->SqlVariable($this->intIdledgerDetails) . '
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
			return "ledger_details";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[LedgerDetails::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="LedgerDetails"><sequence>';
			$strToReturn .= '<element name="IdledgerDetailsObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="DisplayName" type="xsd:string"/>';
			$strToReturn .= '<element name="BrandObject" type="xsd1:StockGrp"/>';
			$strToReturn .= '<element name="StockGrpObject" type="xsd1:StockGrp"/>';
			$strToReturn .= '<element name="UnitObject" type="xsd1:Unit"/>';
			$strToReturn .= '<element name="Cost" type="xsd:string"/>';
			$strToReturn .= '<element name="Dp" type="xsd:string"/>';
			$strToReturn .= '<element name="Mrp" type="xsd:string"/>';
			$strToReturn .= '<element name="MinStock" type="xsd:string"/>';
			$strToReturn .= '<element name="VatRate" type="xsd:string"/>';
			$strToReturn .= '<element name="DutiesRate" type="xsd:string"/>';
			$strToReturn .= '<element name="Batch" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Expiry" type="xsd:boolean"/>';
			$strToReturn .= '<element name="BarcodePrint" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AutherObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="PublisherObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="EditionObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="RackObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="SubjectObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="SeriesObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Isbn" type="xsd:string"/>';
			$strToReturn .= '<element name="Pages" type="xsd:string"/>';
			$strToReturn .= '<element name="CategoryObject" type="xsd1:AccessionCat"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('LedgerDetails', $strComplexTypeArray)) {
				$strComplexTypeArray['LedgerDetails'] = LedgerDetails::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				StockGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				StockGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
				Unit::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				AccessionCat::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, LedgerDetails::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new LedgerDetails();
			if ((property_exists($objSoapObject, 'IdledgerDetailsObject')) &&
				($objSoapObject->IdledgerDetailsObject))
				$objToReturn->IdledgerDetailsObject = Ledger::GetObjectFromSoapObject($objSoapObject->IdledgerDetailsObject);
			if (property_exists($objSoapObject, 'DisplayName'))
				$objToReturn->strDisplayName = $objSoapObject->DisplayName;
			if ((property_exists($objSoapObject, 'BrandObject')) &&
				($objSoapObject->BrandObject))
				$objToReturn->BrandObject = StockGrp::GetObjectFromSoapObject($objSoapObject->BrandObject);
			if ((property_exists($objSoapObject, 'StockGrpObject')) &&
				($objSoapObject->StockGrpObject))
				$objToReturn->StockGrpObject = StockGrp::GetObjectFromSoapObject($objSoapObject->StockGrpObject);
			if ((property_exists($objSoapObject, 'UnitObject')) &&
				($objSoapObject->UnitObject))
				$objToReturn->UnitObject = Unit::GetObjectFromSoapObject($objSoapObject->UnitObject);
			if (property_exists($objSoapObject, 'Cost'))
				$objToReturn->strCost = $objSoapObject->Cost;
			if (property_exists($objSoapObject, 'Dp'))
				$objToReturn->strDp = $objSoapObject->Dp;
			if (property_exists($objSoapObject, 'Mrp'))
				$objToReturn->strMrp = $objSoapObject->Mrp;
			if (property_exists($objSoapObject, 'MinStock'))
				$objToReturn->strMinStock = $objSoapObject->MinStock;
			if (property_exists($objSoapObject, 'VatRate'))
				$objToReturn->strVatRate = $objSoapObject->VatRate;
			if (property_exists($objSoapObject, 'DutiesRate'))
				$objToReturn->strDutiesRate = $objSoapObject->DutiesRate;
			if (property_exists($objSoapObject, 'Batch'))
				$objToReturn->blnBatch = $objSoapObject->Batch;
			if (property_exists($objSoapObject, 'Expiry'))
				$objToReturn->blnExpiry = $objSoapObject->Expiry;
			if (property_exists($objSoapObject, 'BarcodePrint'))
				$objToReturn->blnBarcodePrint = $objSoapObject->BarcodePrint;
			if ((property_exists($objSoapObject, 'AutherObject')) &&
				($objSoapObject->AutherObject))
				$objToReturn->AutherObject = Ledger::GetObjectFromSoapObject($objSoapObject->AutherObject);
			if ((property_exists($objSoapObject, 'PublisherObject')) &&
				($objSoapObject->PublisherObject))
				$objToReturn->PublisherObject = Ledger::GetObjectFromSoapObject($objSoapObject->PublisherObject);
			if ((property_exists($objSoapObject, 'EditionObject')) &&
				($objSoapObject->EditionObject))
				$objToReturn->EditionObject = Ledger::GetObjectFromSoapObject($objSoapObject->EditionObject);
			if ((property_exists($objSoapObject, 'RackObject')) &&
				($objSoapObject->RackObject))
				$objToReturn->RackObject = Ledger::GetObjectFromSoapObject($objSoapObject->RackObject);
			if ((property_exists($objSoapObject, 'SubjectObject')) &&
				($objSoapObject->SubjectObject))
				$objToReturn->SubjectObject = Ledger::GetObjectFromSoapObject($objSoapObject->SubjectObject);
			if ((property_exists($objSoapObject, 'SeriesObject')) &&
				($objSoapObject->SeriesObject))
				$objToReturn->SeriesObject = Ledger::GetObjectFromSoapObject($objSoapObject->SeriesObject);
			if (property_exists($objSoapObject, 'Isbn'))
				$objToReturn->strIsbn = $objSoapObject->Isbn;
			if (property_exists($objSoapObject, 'Pages'))
				$objToReturn->strPages = $objSoapObject->Pages;
			if ((property_exists($objSoapObject, 'CategoryObject')) &&
				($objSoapObject->CategoryObject))
				$objToReturn->CategoryObject = AccessionCat::GetObjectFromSoapObject($objSoapObject->CategoryObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, LedgerDetails::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objIdledgerDetailsObject)
				$objObject->objIdledgerDetailsObject = Ledger::GetSoapObjectFromObject($objObject->objIdledgerDetailsObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIdledgerDetails = null;
			if ($objObject->objBrandObject)
				$objObject->objBrandObject = StockGrp::GetSoapObjectFromObject($objObject->objBrandObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBrand = null;
			if ($objObject->objStockGrpObject)
				$objObject->objStockGrpObject = StockGrp::GetSoapObjectFromObject($objObject->objStockGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStockGrp = null;
			if ($objObject->objUnitObject)
				$objObject->objUnitObject = Unit::GetSoapObjectFromObject($objObject->objUnitObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intUnit = null;
			if ($objObject->objAutherObject)
				$objObject->objAutherObject = Ledger::GetSoapObjectFromObject($objObject->objAutherObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAuther = null;
			if ($objObject->objPublisherObject)
				$objObject->objPublisherObject = Ledger::GetSoapObjectFromObject($objObject->objPublisherObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPublisher = null;
			if ($objObject->objEditionObject)
				$objObject->objEditionObject = Ledger::GetSoapObjectFromObject($objObject->objEditionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEdition = null;
			if ($objObject->objRackObject)
				$objObject->objRackObject = Ledger::GetSoapObjectFromObject($objObject->objRackObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRack = null;
			if ($objObject->objSubjectObject)
				$objObject->objSubjectObject = Ledger::GetSoapObjectFromObject($objObject->objSubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubject = null;
			if ($objObject->objSeriesObject)
				$objObject->objSeriesObject = Ledger::GetSoapObjectFromObject($objObject->objSeriesObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSeries = null;
			if ($objObject->objCategoryObject)
				$objObject->objCategoryObject = AccessionCat::GetSoapObjectFromObject($objObject->objCategoryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCategory = null;
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
			$iArray['IdledgerDetails'] = $this->intIdledgerDetails;
			$iArray['DisplayName'] = $this->strDisplayName;
			$iArray['Brand'] = $this->intBrand;
			$iArray['StockGrp'] = $this->intStockGrp;
			$iArray['Unit'] = $this->intUnit;
			$iArray['Cost'] = $this->strCost;
			$iArray['Dp'] = $this->strDp;
			$iArray['Mrp'] = $this->strMrp;
			$iArray['MinStock'] = $this->strMinStock;
			$iArray['VatRate'] = $this->strVatRate;
			$iArray['DutiesRate'] = $this->strDutiesRate;
			$iArray['Batch'] = $this->blnBatch;
			$iArray['Expiry'] = $this->blnExpiry;
			$iArray['BarcodePrint'] = $this->blnBarcodePrint;
			$iArray['Auther'] = $this->intAuther;
			$iArray['Publisher'] = $this->intPublisher;
			$iArray['Edition'] = $this->intEdition;
			$iArray['Rack'] = $this->intRack;
			$iArray['Subject'] = $this->intSubject;
			$iArray['Series'] = $this->intSeries;
			$iArray['Isbn'] = $this->strIsbn;
			$iArray['Pages'] = $this->strPages;
			$iArray['Category'] = $this->intCategory;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdledgerDetails ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdledgerDetails
     * @property-read QQNodeLedger $IdledgerDetailsObject
     * @property-read QQNode $DisplayName
     * @property-read QQNode $Brand
     * @property-read QQNodeStockGrp $BrandObject
     * @property-read QQNode $StockGrp
     * @property-read QQNodeStockGrp $StockGrpObject
     * @property-read QQNode $Unit
     * @property-read QQNodeUnit $UnitObject
     * @property-read QQNode $Cost
     * @property-read QQNode $Dp
     * @property-read QQNode $Mrp
     * @property-read QQNode $MinStock
     * @property-read QQNode $VatRate
     * @property-read QQNode $DutiesRate
     * @property-read QQNode $Batch
     * @property-read QQNode $Expiry
     * @property-read QQNode $BarcodePrint
     * @property-read QQNode $Auther
     * @property-read QQNodeLedger $AutherObject
     * @property-read QQNode $Publisher
     * @property-read QQNodeLedger $PublisherObject
     * @property-read QQNode $Edition
     * @property-read QQNodeLedger $EditionObject
     * @property-read QQNode $Rack
     * @property-read QQNodeLedger $RackObject
     * @property-read QQNode $Subject
     * @property-read QQNodeLedger $SubjectObject
     * @property-read QQNode $Series
     * @property-read QQNodeLedger $SeriesObject
     * @property-read QQNode $Isbn
     * @property-read QQNode $Pages
     * @property-read QQNode $Category
     * @property-read QQNodeAccessionCat $CategoryObject
     *
     *
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsItem
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsItem
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsItem
     * @property-read QQReverseReferenceNodeSerials $SerialsAsItem
     * @property-read QQReverseReferenceNodeStock $StockAsItem
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItemAsItem

     * @property-read QQNodeLedger $_PrimaryKeyNode
     **/
	class QQNodeLedgerDetails extends QQNode {
		protected $strTableName = 'ledger_details';
		protected $strPrimaryKey = 'idledger_details';
		protected $strClassName = 'LedgerDetails';
		public function __get($strName) {
			switch ($strName) {
				case 'IdledgerDetails':
					return new QQNode('idledger_details', 'IdledgerDetails', 'Integer', $this);
				case 'IdledgerDetailsObject':
					return new QQNodeLedger('idledger_details', 'IdledgerDetailsObject', 'Integer', $this);
				case 'DisplayName':
					return new QQNode('display_name', 'DisplayName', 'VarChar', $this);
				case 'Brand':
					return new QQNode('brand', 'Brand', 'Integer', $this);
				case 'BrandObject':
					return new QQNodeStockGrp('brand', 'BrandObject', 'Integer', $this);
				case 'StockGrp':
					return new QQNode('stock_grp', 'StockGrp', 'Integer', $this);
				case 'StockGrpObject':
					return new QQNodeStockGrp('stock_grp', 'StockGrpObject', 'Integer', $this);
				case 'Unit':
					return new QQNode('unit', 'Unit', 'Integer', $this);
				case 'UnitObject':
					return new QQNodeUnit('unit', 'UnitObject', 'Integer', $this);
				case 'Cost':
					return new QQNode('cost', 'Cost', 'VarChar', $this);
				case 'Dp':
					return new QQNode('dp', 'Dp', 'VarChar', $this);
				case 'Mrp':
					return new QQNode('mrp', 'Mrp', 'VarChar', $this);
				case 'MinStock':
					return new QQNode('min_stock', 'MinStock', 'VarChar', $this);
				case 'VatRate':
					return new QQNode('vat_rate', 'VatRate', 'VarChar', $this);
				case 'DutiesRate':
					return new QQNode('duties_rate', 'DutiesRate', 'VarChar', $this);
				case 'Batch':
					return new QQNode('batch', 'Batch', 'Bit', $this);
				case 'Expiry':
					return new QQNode('expiry', 'Expiry', 'Bit', $this);
				case 'BarcodePrint':
					return new QQNode('barcode_print', 'BarcodePrint', 'Bit', $this);
				case 'Auther':
					return new QQNode('auther', 'Auther', 'Integer', $this);
				case 'AutherObject':
					return new QQNodeLedger('auther', 'AutherObject', 'Integer', $this);
				case 'Publisher':
					return new QQNode('publisher', 'Publisher', 'Integer', $this);
				case 'PublisherObject':
					return new QQNodeLedger('publisher', 'PublisherObject', 'Integer', $this);
				case 'Edition':
					return new QQNode('edition', 'Edition', 'Integer', $this);
				case 'EditionObject':
					return new QQNodeLedger('edition', 'EditionObject', 'Integer', $this);
				case 'Rack':
					return new QQNode('rack', 'Rack', 'Integer', $this);
				case 'RackObject':
					return new QQNodeLedger('rack', 'RackObject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Integer', $this);
				case 'SubjectObject':
					return new QQNodeLedger('subject', 'SubjectObject', 'Integer', $this);
				case 'Series':
					return new QQNode('series', 'Series', 'Integer', $this);
				case 'SeriesObject':
					return new QQNodeLedger('series', 'SeriesObject', 'Integer', $this);
				case 'Isbn':
					return new QQNode('isbn', 'Isbn', 'VarChar', $this);
				case 'Pages':
					return new QQNode('pages', 'Pages', 'VarChar', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'Integer', $this);
				case 'CategoryObject':
					return new QQNodeAccessionCat('category', 'CategoryObject', 'Integer', $this);
				case 'DeptTransferAsItem':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferasitem', 'reverse_reference', 'item');
				case 'IssuedItemsAsItem':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasitem', 'reverse_reference', 'item');
				case 'PriceHistoryAsItem':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasitem', 'reverse_reference', 'item');
				case 'SerialsAsItem':
					return new QQReverseReferenceNodeSerials($this, 'serialsasitem', 'reverse_reference', 'item');
				case 'StockAsItem':
					return new QQReverseReferenceNodeStock($this, 'stockasitem', 'reverse_reference', 'item');
				case 'VoucherHasItemAsItem':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitemasitem', 'reverse_reference', 'item');

				case '_PrimaryKeyNode':
					return new QQNodeLedger('idledger_details', 'IdledgerDetails', 'Integer', $this);
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
     * @property-read QQNode $IdledgerDetails
     * @property-read QQNodeLedger $IdledgerDetailsObject
     * @property-read QQNode $DisplayName
     * @property-read QQNode $Brand
     * @property-read QQNodeStockGrp $BrandObject
     * @property-read QQNode $StockGrp
     * @property-read QQNodeStockGrp $StockGrpObject
     * @property-read QQNode $Unit
     * @property-read QQNodeUnit $UnitObject
     * @property-read QQNode $Cost
     * @property-read QQNode $Dp
     * @property-read QQNode $Mrp
     * @property-read QQNode $MinStock
     * @property-read QQNode $VatRate
     * @property-read QQNode $DutiesRate
     * @property-read QQNode $Batch
     * @property-read QQNode $Expiry
     * @property-read QQNode $BarcodePrint
     * @property-read QQNode $Auther
     * @property-read QQNodeLedger $AutherObject
     * @property-read QQNode $Publisher
     * @property-read QQNodeLedger $PublisherObject
     * @property-read QQNode $Edition
     * @property-read QQNodeLedger $EditionObject
     * @property-read QQNode $Rack
     * @property-read QQNodeLedger $RackObject
     * @property-read QQNode $Subject
     * @property-read QQNodeLedger $SubjectObject
     * @property-read QQNode $Series
     * @property-read QQNodeLedger $SeriesObject
     * @property-read QQNode $Isbn
     * @property-read QQNode $Pages
     * @property-read QQNode $Category
     * @property-read QQNodeAccessionCat $CategoryObject
     *
     *
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransferAsItem
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItemsAsItem
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsItem
     * @property-read QQReverseReferenceNodeSerials $SerialsAsItem
     * @property-read QQReverseReferenceNodeStock $StockAsItem
     * @property-read QQReverseReferenceNodeVoucherHasItem $VoucherHasItemAsItem

     * @property-read QQNodeLedger $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeLedgerDetails extends QQReverseReferenceNode {
		protected $strTableName = 'ledger_details';
		protected $strPrimaryKey = 'idledger_details';
		protected $strClassName = 'LedgerDetails';
		public function __get($strName) {
			switch ($strName) {
				case 'IdledgerDetails':
					return new QQNode('idledger_details', 'IdledgerDetails', 'integer', $this);
				case 'IdledgerDetailsObject':
					return new QQNodeLedger('idledger_details', 'IdledgerDetailsObject', 'integer', $this);
				case 'DisplayName':
					return new QQNode('display_name', 'DisplayName', 'string', $this);
				case 'Brand':
					return new QQNode('brand', 'Brand', 'integer', $this);
				case 'BrandObject':
					return new QQNodeStockGrp('brand', 'BrandObject', 'integer', $this);
				case 'StockGrp':
					return new QQNode('stock_grp', 'StockGrp', 'integer', $this);
				case 'StockGrpObject':
					return new QQNodeStockGrp('stock_grp', 'StockGrpObject', 'integer', $this);
				case 'Unit':
					return new QQNode('unit', 'Unit', 'integer', $this);
				case 'UnitObject':
					return new QQNodeUnit('unit', 'UnitObject', 'integer', $this);
				case 'Cost':
					return new QQNode('cost', 'Cost', 'string', $this);
				case 'Dp':
					return new QQNode('dp', 'Dp', 'string', $this);
				case 'Mrp':
					return new QQNode('mrp', 'Mrp', 'string', $this);
				case 'MinStock':
					return new QQNode('min_stock', 'MinStock', 'string', $this);
				case 'VatRate':
					return new QQNode('vat_rate', 'VatRate', 'string', $this);
				case 'DutiesRate':
					return new QQNode('duties_rate', 'DutiesRate', 'string', $this);
				case 'Batch':
					return new QQNode('batch', 'Batch', 'boolean', $this);
				case 'Expiry':
					return new QQNode('expiry', 'Expiry', 'boolean', $this);
				case 'BarcodePrint':
					return new QQNode('barcode_print', 'BarcodePrint', 'boolean', $this);
				case 'Auther':
					return new QQNode('auther', 'Auther', 'integer', $this);
				case 'AutherObject':
					return new QQNodeLedger('auther', 'AutherObject', 'integer', $this);
				case 'Publisher':
					return new QQNode('publisher', 'Publisher', 'integer', $this);
				case 'PublisherObject':
					return new QQNodeLedger('publisher', 'PublisherObject', 'integer', $this);
				case 'Edition':
					return new QQNode('edition', 'Edition', 'integer', $this);
				case 'EditionObject':
					return new QQNodeLedger('edition', 'EditionObject', 'integer', $this);
				case 'Rack':
					return new QQNode('rack', 'Rack', 'integer', $this);
				case 'RackObject':
					return new QQNodeLedger('rack', 'RackObject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'integer', $this);
				case 'SubjectObject':
					return new QQNodeLedger('subject', 'SubjectObject', 'integer', $this);
				case 'Series':
					return new QQNode('series', 'Series', 'integer', $this);
				case 'SeriesObject':
					return new QQNodeLedger('series', 'SeriesObject', 'integer', $this);
				case 'Isbn':
					return new QQNode('isbn', 'Isbn', 'string', $this);
				case 'Pages':
					return new QQNode('pages', 'Pages', 'string', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'integer', $this);
				case 'CategoryObject':
					return new QQNodeAccessionCat('category', 'CategoryObject', 'integer', $this);
				case 'DeptTransferAsItem':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransferasitem', 'reverse_reference', 'item');
				case 'IssuedItemsAsItem':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditemsasitem', 'reverse_reference', 'item');
				case 'PriceHistoryAsItem':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasitem', 'reverse_reference', 'item');
				case 'SerialsAsItem':
					return new QQReverseReferenceNodeSerials($this, 'serialsasitem', 'reverse_reference', 'item');
				case 'StockAsItem':
					return new QQReverseReferenceNodeStock($this, 'stockasitem', 'reverse_reference', 'item');
				case 'VoucherHasItemAsItem':
					return new QQReverseReferenceNodeVoucherHasItem($this, 'voucherhasitemasitem', 'reverse_reference', 'item');

				case '_PrimaryKeyNode':
					return new QQNodeLedger('idledger_details', 'IdledgerDetails', 'integer', $this);
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
