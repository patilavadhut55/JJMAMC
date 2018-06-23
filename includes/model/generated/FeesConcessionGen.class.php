<?php
	/**
	 * The abstract FeesConcessionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FeesConcession subclass which
	 * extends this FeesConcessionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FeesConcession class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdfeesConcession the value for intIdfeesConcession (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property string $Description the value for strDescription 
	 * @property-read Address $_AddressAsCasteCat the value for the private _objAddressAsCasteCat (Read-Only) if set due to an expansion on the address.caste_cat reverse relationship
	 * @property-read Address[] $_AddressAsCasteCatArray the value for the private _objAddressAsCasteCatArray (Read-Only) if set due to an ExpandAsArray on the address.caste_cat reverse relationship
	 * @property-read Fees $_FeesAsCategory the value for the private _objFeesAsCategory (Read-Only) if set due to an expansion on the fees.category reverse relationship
	 * @property-read Fees[] $_FeesAsCategoryArray the value for the private _objFeesAsCategoryArray (Read-Only) if set due to an ExpandAsArray on the fees.category reverse relationship
	 * @property-read Inquiry $_InquiryAsCategory the value for the private _objInquiryAsCategory (Read-Only) if set due to an expansion on the inquiry.category reverse relationship
	 * @property-read Inquiry[] $_InquiryAsCategoryArray the value for the private _objInquiryAsCategoryArray (Read-Only) if set due to an ExpandAsArray on the inquiry.category reverse relationship
	 * @property-read Profile $_ProfileAsFeeConcession the value for the private _objProfileAsFeeConcession (Read-Only) if set due to an expansion on the profile.fee_concession reverse relationship
	 * @property-read Profile[] $_ProfileAsFeeConcessionArray the value for the private _objProfileAsFeeConcessionArray (Read-Only) if set due to an ExpandAsArray on the profile.fee_concession reverse relationship
	 * @property-read Voucher $_VoucherAsFeeConcessionCat the value for the private _objVoucherAsFeeConcessionCat (Read-Only) if set due to an expansion on the voucher.fee_concession_cat reverse relationship
	 * @property-read Voucher[] $_VoucherAsFeeConcessionCatArray the value for the private _objVoucherAsFeeConcessionCatArray (Read-Only) if set due to an ExpandAsArray on the voucher.fee_concession_cat reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FeesConcessionGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column fees_concession.idfees_concession
		 * @var integer intIdfeesConcession
		 */
		protected $intIdfeesConcession;
		const IdfeesConcessionDefault = null;


		/**
		 * Protected member variable that maps to the database column fees_concession.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column fees_concession.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 45;
		const DescriptionDefault = null;


		/**
		 * Private member variable that stores a reference to a single AddressAsCasteCat object
		 * (of type Address), if this FeesConcession object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddressAsCasteCat;
		 */
		private $_objAddressAsCasteCat;

		/**
		 * Private member variable that stores a reference to an array of AddressAsCasteCat objects
		 * (of type Address[]), if this FeesConcession object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressAsCasteCatArray;
		 */
		private $_objAddressAsCasteCatArray = null;

		/**
		 * Private member variable that stores a reference to a single FeesAsCategory object
		 * (of type Fees), if this FeesConcession object was restored with
		 * an expansion on the fees association table.
		 * @var Fees _objFeesAsCategory;
		 */
		private $_objFeesAsCategory;

		/**
		 * Private member variable that stores a reference to an array of FeesAsCategory objects
		 * (of type Fees[]), if this FeesConcession object was restored with
		 * an ExpandAsArray on the fees association table.
		 * @var Fees[] _objFeesAsCategoryArray;
		 */
		private $_objFeesAsCategoryArray = null;

		/**
		 * Private member variable that stores a reference to a single InquiryAsCategory object
		 * (of type Inquiry), if this FeesConcession object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiryAsCategory;
		 */
		private $_objInquiryAsCategory;

		/**
		 * Private member variable that stores a reference to an array of InquiryAsCategory objects
		 * (of type Inquiry[]), if this FeesConcession object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryAsCategoryArray;
		 */
		private $_objInquiryAsCategoryArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileAsFeeConcession object
		 * (of type Profile), if this FeesConcession object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfileAsFeeConcession;
		 */
		private $_objProfileAsFeeConcession;

		/**
		 * Private member variable that stores a reference to an array of ProfileAsFeeConcession objects
		 * (of type Profile[]), if this FeesConcession object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileAsFeeConcessionArray;
		 */
		private $_objProfileAsFeeConcessionArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherAsFeeConcessionCat object
		 * (of type Voucher), if this FeesConcession object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsFeeConcessionCat;
		 */
		private $_objVoucherAsFeeConcessionCat;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsFeeConcessionCat objects
		 * (of type Voucher[]), if this FeesConcession object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsFeeConcessionCatArray;
		 */
		private $_objVoucherAsFeeConcessionCatArray = null;

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
			$this->intIdfeesConcession = FeesConcession::IdfeesConcessionDefault;
			$this->strName = FeesConcession::NameDefault;
			$this->strDescription = FeesConcession::DescriptionDefault;
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
		 * Load a FeesConcession from PK Info
		 * @param integer $intIdfeesConcession
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FeesConcession
		 */
		public static function Load($intIdfeesConcession, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'FeesConcession', $intIdfeesConcession);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = FeesConcession::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FeesConcession()->IdfeesConcession, $intIdfeesConcession)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all FeesConcessions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FeesConcession[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FeesConcession::QueryArray to perform the LoadAll query
			try {
				return FeesConcession::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FeesConcessions
		 * @return int
		 */
		public static function CountAll() {
			// Call FeesConcession::QueryCount to perform the CountAll query
			return FeesConcession::QueryCount(QQ::All());
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
			$objDatabase = FeesConcession::GetDatabase();

			// Create/Build out the QueryBuilder object with FeesConcession-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fees_concession');

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
				FeesConcession::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('fees_concession');

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
		 * Static Qcubed Query method to query for a single FeesConcession object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FeesConcession the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FeesConcession::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new FeesConcession object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FeesConcession::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FeesConcession::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FeesConcession objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FeesConcession[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FeesConcession::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FeesConcession::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = FeesConcession::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of FeesConcession objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FeesConcession::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FeesConcession::GetDatabase();

			$strQuery = FeesConcession::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/feesconcession', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FeesConcession::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FeesConcession
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fees_concession';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idfees_concession', $strAliasPrefix . 'idfees_concession');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idfees_concession', $strAliasPrefix . 'idfees_concession');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FeesConcession from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FeesConcession::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FeesConcession
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdfeesConcession == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'fees_concession__';


						// Expanding reverse references: AddressAsCasteCat
						$strAlias = $strAliasPrefix . 'addressascastecat__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressAsCasteCatArray)
								$objPreviousItem->_objAddressAsCasteCatArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressAsCasteCatArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressAsCasteCatArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascastecat__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressAsCasteCatArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressAsCasteCatArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascastecat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: FeesAsCategory
						$strAlias = $strAliasPrefix . 'feesascategory__idfees_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objFeesAsCategoryArray)
								$objPreviousItem->_objFeesAsCategoryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFeesAsCategoryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFeesAsCategoryArray;
								$objChildItem = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascategory__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFeesAsCategoryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFeesAsCategoryArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: InquiryAsCategory
						$strAlias = $strAliasPrefix . 'inquiryascategory__idinquiry';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objInquiryAsCategoryArray)
								$objPreviousItem->_objInquiryAsCategoryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objInquiryAsCategoryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objInquiryAsCategoryArray;
								$objChildItem = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascategory__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objInquiryAsCategoryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objInquiryAsCategoryArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileAsFeeConcession
						$strAlias = $strAliasPrefix . 'profileasfeeconcession__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileAsFeeConcessionArray)
								$objPreviousItem->_objProfileAsFeeConcessionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileAsFeeConcessionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileAsFeeConcessionArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasfeeconcession__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileAsFeeConcessionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileAsFeeConcessionArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasfeeconcession__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherAsFeeConcessionCat
						$strAlias = $strAliasPrefix . 'voucherasfeeconcessioncat__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsFeeConcessionCatArray)
								$objPreviousItem->_objVoucherAsFeeConcessionCatArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsFeeConcessionCatArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsFeeConcessionCatArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasfeeconcessioncat__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsFeeConcessionCatArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsFeeConcessionCatArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasfeeconcessioncat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'fees_concession__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the FeesConcession object
			$objToReturn = new FeesConcession();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdfeesConcession = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdfeesConcession != $objPreviousItem->IdfeesConcession) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressAsCasteCatArray);
					$cnt = count($objToReturn->_objAddressAsCasteCatArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressAsCasteCatArray, $objToReturn->_objAddressAsCasteCatArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objFeesAsCategoryArray);
					$cnt = count($objToReturn->_objFeesAsCategoryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objFeesAsCategoryArray, $objToReturn->_objFeesAsCategoryArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objInquiryAsCategoryArray);
					$cnt = count($objToReturn->_objInquiryAsCategoryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objInquiryAsCategoryArray, $objToReturn->_objInquiryAsCategoryArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileAsFeeConcessionArray);
					$cnt = count($objToReturn->_objProfileAsFeeConcessionArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileAsFeeConcessionArray, $objToReturn->_objProfileAsFeeConcessionArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherAsFeeConcessionCatArray);
					$cnt = count($objToReturn->_objVoucherAsFeeConcessionCatArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsFeeConcessionCatArray, $objToReturn->_objVoucherAsFeeConcessionCatArray)) {
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
				$strAliasPrefix = 'fees_concession__';




			// Check for AddressAsCasteCat Virtual Binding
			$strAlias = $strAliasPrefix . 'addressascastecat__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressAsCasteCatArray)
				$objToReturn->_objAddressAsCasteCatArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressAsCasteCatArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascastecat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddressAsCasteCat = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'addressascastecat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for FeesAsCategory Virtual Binding
			$strAlias = $strAliasPrefix . 'feesascategory__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objFeesAsCategoryArray)
				$objToReturn->_objFeesAsCategoryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objFeesAsCategoryArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFeesAsCategory = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for InquiryAsCategory Virtual Binding
			$strAlias = $strAliasPrefix . 'inquiryascategory__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objInquiryAsCategoryArray)
				$objToReturn->_objInquiryAsCategoryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objInquiryAsCategoryArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objInquiryAsCategory = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiryascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileAsFeeConcession Virtual Binding
			$strAlias = $strAliasPrefix . 'profileasfeeconcession__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileAsFeeConcessionArray)
				$objToReturn->_objProfileAsFeeConcessionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileAsFeeConcessionArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasfeeconcession__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileAsFeeConcession = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profileasfeeconcession__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherAsFeeConcessionCat Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasfeeconcessioncat__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsFeeConcessionCatArray)
				$objToReturn->_objVoucherAsFeeConcessionCatArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsFeeConcessionCatArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasfeeconcessioncat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsFeeConcessionCat = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasfeeconcessioncat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of FeesConcessions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FeesConcession[]
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
					$objItem = FeesConcession::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FeesConcession::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single FeesConcession object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return FeesConcession next row resulting from the query
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
			return FeesConcession::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single FeesConcession object,
		 * by IdfeesConcession Index(es)
		 * @param integer $intIdfeesConcession
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FeesConcession
		*/
		public static function LoadByIdfeesConcession($intIdfeesConcession, $objOptionalClauses = null) {
			return FeesConcession::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FeesConcession()->IdfeesConcession, $intIdfeesConcession)
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
		 * Save this FeesConcession
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fees_concession` (
							`name`,
							`description`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdfeesConcession = $objDatabase->InsertId('fees_concession', 'idfees_concession');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fees_concession`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . '
						WHERE
							`idfees_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
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
		 * Delete this FeesConcession
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FeesConcession with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees_concession`
				WHERE
					`idfees_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this FeesConcession ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'FeesConcession', $this->intIdfeesConcession);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all FeesConcessions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees_concession`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate fees_concession table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fees_concession`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this FeesConcession from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FeesConcession object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = FeesConcession::Load($this->intIdfeesConcession);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
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
				case 'IdfeesConcession':
					/**
					 * Gets the value for intIdfeesConcession (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdfeesConcession;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AddressAsCasteCat':
					/**
					 * Gets the value for the private _objAddressAsCasteCat (Read-Only)
					 * if set due to an expansion on the address.caste_cat reverse relationship
					 * @return Address
					 */
					return $this->_objAddressAsCasteCat;

				case '_AddressAsCasteCatArray':
					/**
					 * Gets the value for the private _objAddressAsCasteCatArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.caste_cat reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressAsCasteCatArray;

				case '_FeesAsCategory':
					/**
					 * Gets the value for the private _objFeesAsCategory (Read-Only)
					 * if set due to an expansion on the fees.category reverse relationship
					 * @return Fees
					 */
					return $this->_objFeesAsCategory;

				case '_FeesAsCategoryArray':
					/**
					 * Gets the value for the private _objFeesAsCategoryArray (Read-Only)
					 * if set due to an ExpandAsArray on the fees.category reverse relationship
					 * @return Fees[]
					 */
					return $this->_objFeesAsCategoryArray;

				case '_InquiryAsCategory':
					/**
					 * Gets the value for the private _objInquiryAsCategory (Read-Only)
					 * if set due to an expansion on the inquiry.category reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiryAsCategory;

				case '_InquiryAsCategoryArray':
					/**
					 * Gets the value for the private _objInquiryAsCategoryArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.category reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryAsCategoryArray;

				case '_ProfileAsFeeConcession':
					/**
					 * Gets the value for the private _objProfileAsFeeConcession (Read-Only)
					 * if set due to an expansion on the profile.fee_concession reverse relationship
					 * @return Profile
					 */
					return $this->_objProfileAsFeeConcession;

				case '_ProfileAsFeeConcessionArray':
					/**
					 * Gets the value for the private _objProfileAsFeeConcessionArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.fee_concession reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileAsFeeConcessionArray;

				case '_VoucherAsFeeConcessionCat':
					/**
					 * Gets the value for the private _objVoucherAsFeeConcessionCat (Read-Only)
					 * if set due to an expansion on the voucher.fee_concession_cat reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsFeeConcessionCat;

				case '_VoucherAsFeeConcessionCatArray':
					/**
					 * Gets the value for the private _objVoucherAsFeeConcessionCatArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.fee_concession_cat reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsFeeConcessionCatArray;


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



		// Related Objects' Methods for AddressAsCasteCat
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AddressesAsCasteCat as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressAsCasteCatArray($objOptionalClauses = null) {
			if ((is_null($this->intIdfeesConcession)))
				return array();

			try {
				return Address::LoadArrayByCasteCat($this->intIdfeesConcession, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AddressesAsCasteCat
		 * @return int
		*/
		public function CountAddressesAsCasteCat() {
			if ((is_null($this->intIdfeesConcession)))
				return 0;

			return Address::CountByCasteCat($this->intIdfeesConcession);
		}

		/**
		 * Associates a AddressAsCasteCat
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddressAsCasteCat(Address $objAddress) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsCasteCat on this unsaved FeesConcession.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddressAsCasteCat on this FeesConcession with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a AddressAsCasteCat
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddressAsCasteCat(Address $objAddress) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCasteCat on this unsaved FeesConcession.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCasteCat on this FeesConcession with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`caste_cat` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Unassociates all AddressesAsCasteCat
		 * @return void
		*/
		public function UnassociateAllAddressesAsCasteCat() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCasteCat on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`caste_cat` = null
				WHERE
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes an associated AddressAsCasteCat
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddressAsCasteCat(Address $objAddress) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCasteCat on this unsaved FeesConcession.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCasteCat on this FeesConcession with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes all associated AddressesAsCasteCat
		 * @return void
		*/
		public function DeleteAllAddressesAsCasteCat() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddressAsCasteCat on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`caste_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}


		// Related Objects' Methods for FeesAsCategory
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FeesesAsCategory as an array of Fees objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public function GetFeesAsCategoryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdfeesConcession)))
				return array();

			try {
				return Fees::LoadArrayByCategory($this->intIdfeesConcession, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FeesesAsCategory
		 * @return int
		*/
		public function CountFeesesAsCategory() {
			if ((is_null($this->intIdfeesConcession)))
				return 0;

			return Fees::CountByCategory($this->intIdfeesConcession);
		}

		/**
		 * Associates a FeesAsCategory
		 * @param Fees $objFees
		 * @return void
		*/
		public function AssociateFeesAsCategory(Fees $objFees) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsCategory on this unsaved FeesConcession.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsCategory on this FeesConcession with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates a FeesAsCategory
		 * @param Fees $objFees
		 * @return void
		*/
		public function UnassociateFeesAsCategory(Fees $objFees) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCategory on this unsaved FeesConcession.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCategory on this FeesConcession with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`category` = null
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Unassociates all FeesesAsCategory
		 * @return void
		*/
		public function UnassociateAllFeesesAsCategory() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCategory on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`category` = null
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes an associated FeesAsCategory
		 * @param Fees $objFees
		 * @return void
		*/
		public function DeleteAssociatedFeesAsCategory(Fees $objFees) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCategory on this unsaved FeesConcession.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCategory on this FeesConcession with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes all associated FeesesAsCategory
		 * @return void
		*/
		public function DeleteAllFeesesAsCategory() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsCategory on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}


		// Related Objects' Methods for InquiryAsCategory
		//-------------------------------------------------------------------

		/**
		 * Gets all associated InquiriesAsCategory as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryAsCategoryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdfeesConcession)))
				return array();

			try {
				return Inquiry::LoadArrayByCategory($this->intIdfeesConcession, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated InquiriesAsCategory
		 * @return int
		*/
		public function CountInquiriesAsCategory() {
			if ((is_null($this->intIdfeesConcession)))
				return 0;

			return Inquiry::CountByCategory($this->intIdfeesConcession);
		}

		/**
		 * Associates a InquiryAsCategory
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiryAsCategory(Inquiry $objInquiry) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsCategory on this unsaved FeesConcession.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiryAsCategory on this FeesConcession with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . '
			');
		}

		/**
		 * Unassociates a InquiryAsCategory
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function UnassociateInquiryAsCategory(Inquiry $objInquiry) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCategory on this unsaved FeesConcession.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCategory on this FeesConcession with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`category` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Unassociates all InquiriesAsCategory
		 * @return void
		*/
		public function UnassociateAllInquiriesAsCategory() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCategory on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`category` = null
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes an associated InquiryAsCategory
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiryAsCategory(Inquiry $objInquiry) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCategory on this unsaved FeesConcession.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCategory on this FeesConcession with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes all associated InquiriesAsCategory
		 * @return void
		*/
		public function DeleteAllInquiriesAsCategory() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiryAsCategory on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}


		// Related Objects' Methods for ProfileAsFeeConcession
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfilesAsFeeConcession as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileAsFeeConcessionArray($objOptionalClauses = null) {
			if ((is_null($this->intIdfeesConcession)))
				return array();

			try {
				return Profile::LoadArrayByFeeConcession($this->intIdfeesConcession, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfilesAsFeeConcession
		 * @return int
		*/
		public function CountProfilesAsFeeConcession() {
			if ((is_null($this->intIdfeesConcession)))
				return 0;

			return Profile::CountByFeeConcession($this->intIdfeesConcession);
		}

		/**
		 * Associates a ProfileAsFeeConcession
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfileAsFeeConcession(Profile $objProfile) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsFeeConcession on this unsaved FeesConcession.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileAsFeeConcession on this FeesConcession with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`fee_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a ProfileAsFeeConcession
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfileAsFeeConcession(Profile $objProfile) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsFeeConcession on this unsaved FeesConcession.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsFeeConcession on this FeesConcession with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`fee_concession` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`fee_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Unassociates all ProfilesAsFeeConcession
		 * @return void
		*/
		public function UnassociateAllProfilesAsFeeConcession() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsFeeConcession on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`fee_concession` = null
				WHERE
					`fee_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes an associated ProfileAsFeeConcession
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfileAsFeeConcession(Profile $objProfile) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsFeeConcession on this unsaved FeesConcession.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsFeeConcession on this FeesConcession with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`fee_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes all associated ProfilesAsFeeConcession
		 * @return void
		*/
		public function DeleteAllProfilesAsFeeConcession() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileAsFeeConcession on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`fee_concession` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}


		// Related Objects' Methods for VoucherAsFeeConcessionCat
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsFeeConcessionCat as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsFeeConcessionCatArray($objOptionalClauses = null) {
			if ((is_null($this->intIdfeesConcession)))
				return array();

			try {
				return Voucher::LoadArrayByFeeConcessionCat($this->intIdfeesConcession, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsFeeConcessionCat
		 * @return int
		*/
		public function CountVouchersAsFeeConcessionCat() {
			if ((is_null($this->intIdfeesConcession)))
				return 0;

			return Voucher::CountByFeeConcessionCat($this->intIdfeesConcession);
		}

		/**
		 * Associates a VoucherAsFeeConcessionCat
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsFeeConcessionCat(Voucher $objVoucher) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsFeeConcessionCat on this unsaved FeesConcession.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsFeeConcessionCat on this FeesConcession with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`fee_concession_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsFeeConcessionCat
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsFeeConcessionCat(Voucher $objVoucher) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsFeeConcessionCat on this unsaved FeesConcession.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsFeeConcessionCat on this FeesConcession with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`fee_concession_cat` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`fee_concession_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Unassociates all VouchersAsFeeConcessionCat
		 * @return void
		*/
		public function UnassociateAllVouchersAsFeeConcessionCat() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsFeeConcessionCat on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`fee_concession_cat` = null
				WHERE
					`fee_concession_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsFeeConcessionCat
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsFeeConcessionCat(Voucher $objVoucher) {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsFeeConcessionCat on this unsaved FeesConcession.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsFeeConcessionCat on this FeesConcession with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`fee_concession_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsFeeConcessionCat
		 * @return void
		*/
		public function DeleteAllVouchersAsFeeConcessionCat() {
			if ((is_null($this->intIdfeesConcession)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsFeeConcessionCat on this unsaved FeesConcession.');

			// Get the Database Object for this Class
			$objDatabase = FeesConcession::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`fee_concession_cat` = ' . $objDatabase->SqlVariable($this->intIdfeesConcession) . '
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
			return "fees_concession";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[FeesConcession::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="FeesConcession"><sequence>';
			$strToReturn .= '<element name="IdfeesConcession" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FeesConcession', $strComplexTypeArray)) {
				$strComplexTypeArray['FeesConcession'] = FeesConcession::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FeesConcession::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FeesConcession();
			if (property_exists($objSoapObject, 'IdfeesConcession'))
				$objToReturn->intIdfeesConcession = $objSoapObject->IdfeesConcession;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FeesConcession::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdfeesConcession'] = $this->intIdfeesConcession;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdfeesConcession ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdfeesConcession
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsCasteCat
     * @property-read QQReverseReferenceNodeFees $FeesAsCategory
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsCategory
     * @property-read QQReverseReferenceNodeProfile $ProfileAsFeeConcession
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsFeeConcessionCat

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeFeesConcession extends QQNode {
		protected $strTableName = 'fees_concession';
		protected $strPrimaryKey = 'idfees_concession';
		protected $strClassName = 'FeesConcession';
		public function __get($strName) {
			switch ($strName) {
				case 'IdfeesConcession':
					return new QQNode('idfees_concession', 'IdfeesConcession', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'VarChar', $this);
				case 'AddressAsCasteCat':
					return new QQReverseReferenceNodeAddress($this, 'addressascastecat', 'reverse_reference', 'caste_cat');
				case 'FeesAsCategory':
					return new QQReverseReferenceNodeFees($this, 'feesascategory', 'reverse_reference', 'category');
				case 'InquiryAsCategory':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryascategory', 'reverse_reference', 'category');
				case 'ProfileAsFeeConcession':
					return new QQReverseReferenceNodeProfile($this, 'profileasfeeconcession', 'reverse_reference', 'fee_concession');
				case 'VoucherAsFeeConcessionCat':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasfeeconcessioncat', 'reverse_reference', 'fee_concession_cat');

				case '_PrimaryKeyNode':
					return new QQNode('idfees_concession', 'IdfeesConcession', 'Integer', $this);
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
     * @property-read QQNode $IdfeesConcession
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     *
     *
     * @property-read QQReverseReferenceNodeAddress $AddressAsCasteCat
     * @property-read QQReverseReferenceNodeFees $FeesAsCategory
     * @property-read QQReverseReferenceNodeInquiry $InquiryAsCategory
     * @property-read QQReverseReferenceNodeProfile $ProfileAsFeeConcession
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsFeeConcessionCat

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeFeesConcession extends QQReverseReferenceNode {
		protected $strTableName = 'fees_concession';
		protected $strPrimaryKey = 'idfees_concession';
		protected $strClassName = 'FeesConcession';
		public function __get($strName) {
			switch ($strName) {
				case 'IdfeesConcession':
					return new QQNode('idfees_concession', 'IdfeesConcession', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'AddressAsCasteCat':
					return new QQReverseReferenceNodeAddress($this, 'addressascastecat', 'reverse_reference', 'caste_cat');
				case 'FeesAsCategory':
					return new QQReverseReferenceNodeFees($this, 'feesascategory', 'reverse_reference', 'category');
				case 'InquiryAsCategory':
					return new QQReverseReferenceNodeInquiry($this, 'inquiryascategory', 'reverse_reference', 'category');
				case 'ProfileAsFeeConcession':
					return new QQReverseReferenceNodeProfile($this, 'profileasfeeconcession', 'reverse_reference', 'fee_concession');
				case 'VoucherAsFeeConcessionCat':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasfeeconcessioncat', 'reverse_reference', 'fee_concession_cat');

				case '_PrimaryKeyNode':
					return new QQNode('idfees_concession', 'IdfeesConcession', 'integer', $this);
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
