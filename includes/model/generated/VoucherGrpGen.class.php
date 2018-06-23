<?php
	/**
	 * The abstract VoucherGrpGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the VoucherGrp subclass which
	 * extends this VoucherGrpGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the VoucherGrp class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdvoucherGrp the value for intIdvoucherGrp (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property integer $Grp the value for intGrp 
	 * @property string $Abbrivation the value for strAbbrivation (Not Null)
	 * @property boolean $AutoNum the value for blnAutoNum (Not Null)
	 * @property integer $Counter the value for intCounter (Not Null)
	 * @property string $CommanNarration the value for strCommanNarration 
	 * @property boolean $Print the value for blnPrint 
	 * @property string $PrintContent the value for strPrintContent 
	 * @property VoucherGrp $GrpObject the value for the VoucherGrp object referenced by intGrp 
	 * @property-read Voucher $_VoucherAsGrp the value for the private _objVoucherAsGrp (Read-Only) if set due to an expansion on the voucher.grp reverse relationship
	 * @property-read Voucher[] $_VoucherAsGrpArray the value for the private _objVoucherAsGrpArray (Read-Only) if set due to an ExpandAsArray on the voucher.grp reverse relationship
	 * @property-read VoucherGrp $_VoucherGrpAsGrp the value for the private _objVoucherGrpAsGrp (Read-Only) if set due to an expansion on the voucher_grp.grp reverse relationship
	 * @property-read VoucherGrp[] $_VoucherGrpAsGrpArray the value for the private _objVoucherGrpAsGrpArray (Read-Only) if set due to an ExpandAsArray on the voucher_grp.grp reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class VoucherGrpGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column voucher_grp.idvoucher_grp
		 * @var integer intIdvoucherGrp
		 */
		protected $intIdvoucherGrp;
		const IdvoucherGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.grp
		 * @var integer intGrp
		 */
		protected $intGrp;
		const GrpDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.abbrivation
		 * @var string strAbbrivation
		 */
		protected $strAbbrivation;
		const AbbrivationMaxLength = 45;
		const AbbrivationDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.auto_num
		 * @var boolean blnAutoNum
		 */
		protected $blnAutoNum;
		const AutoNumDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.counter
		 * @var integer intCounter
		 */
		protected $intCounter;
		const CounterDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.comman_narration
		 * @var string strCommanNarration
		 */
		protected $strCommanNarration;
		const CommanNarrationDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.print
		 * @var boolean blnPrint
		 */
		protected $blnPrint;
		const PrintDefault = null;


		/**
		 * Protected member variable that maps to the database column voucher_grp.print_content
		 * @var string strPrintContent
		 */
		protected $strPrintContent;
		const PrintContentDefault = null;


		/**
		 * Private member variable that stores a reference to a single VoucherAsGrp object
		 * (of type Voucher), if this VoucherGrp object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsGrp;
		 */
		private $_objVoucherAsGrp;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsGrp objects
		 * (of type Voucher[]), if this VoucherGrp object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsGrpArray;
		 */
		private $_objVoucherAsGrpArray = null;

		/**
		 * Private member variable that stores a reference to a single VoucherGrpAsGrp object
		 * (of type VoucherGrp), if this VoucherGrp object was restored with
		 * an expansion on the voucher_grp association table.
		 * @var VoucherGrp _objVoucherGrpAsGrp;
		 */
		private $_objVoucherGrpAsGrp;

		/**
		 * Private member variable that stores a reference to an array of VoucherGrpAsGrp objects
		 * (of type VoucherGrp[]), if this VoucherGrp object was restored with
		 * an ExpandAsArray on the voucher_grp association table.
		 * @var VoucherGrp[] _objVoucherGrpAsGrpArray;
		 */
		private $_objVoucherGrpAsGrpArray = null;

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
		 * in the database column voucher_grp.grp.
		 *
		 * NOTE: Always use the GrpObject property getter to correctly retrieve this VoucherGrp object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var VoucherGrp objGrpObject
		 */
		protected $objGrpObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdvoucherGrp = VoucherGrp::IdvoucherGrpDefault;
			$this->strName = VoucherGrp::NameDefault;
			$this->intGrp = VoucherGrp::GrpDefault;
			$this->strAbbrivation = VoucherGrp::AbbrivationDefault;
			$this->blnAutoNum = VoucherGrp::AutoNumDefault;
			$this->intCounter = VoucherGrp::CounterDefault;
			$this->strCommanNarration = VoucherGrp::CommanNarrationDefault;
			$this->blnPrint = VoucherGrp::PrintDefault;
			$this->strPrintContent = VoucherGrp::PrintContentDefault;
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
		 * Load a VoucherGrp from PK Info
		 * @param integer $intIdvoucherGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherGrp
		 */
		public static function Load($intIdvoucherGrp, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'VoucherGrp', $intIdvoucherGrp);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = VoucherGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VoucherGrp()->IdvoucherGrp, $intIdvoucherGrp)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all VoucherGrps
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherGrp[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call VoucherGrp::QueryArray to perform the LoadAll query
			try {
				return VoucherGrp::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all VoucherGrps
		 * @return int
		 */
		public static function CountAll() {
			// Call VoucherGrp::QueryCount to perform the CountAll query
			return VoucherGrp::QueryCount(QQ::All());
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
			$objDatabase = VoucherGrp::GetDatabase();

			// Create/Build out the QueryBuilder object with VoucherGrp-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'voucher_grp');

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
				VoucherGrp::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('voucher_grp');

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
		 * Static Qcubed Query method to query for a single VoucherGrp object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return VoucherGrp the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VoucherGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new VoucherGrp object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = VoucherGrp::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return VoucherGrp::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of VoucherGrp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return VoucherGrp[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VoucherGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return VoucherGrp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = VoucherGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of VoucherGrp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VoucherGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = VoucherGrp::GetDatabase();

			$strQuery = VoucherGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/vouchergrp', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = VoucherGrp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this VoucherGrp
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'voucher_grp';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idvoucher_grp', $strAliasPrefix . 'idvoucher_grp');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idvoucher_grp', $strAliasPrefix . 'idvoucher_grp');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'grp', $strAliasPrefix . 'grp');
			    $objBuilder->AddSelectItem($strTableName, 'abbrivation', $strAliasPrefix . 'abbrivation');
			    $objBuilder->AddSelectItem($strTableName, 'auto_num', $strAliasPrefix . 'auto_num');
			    $objBuilder->AddSelectItem($strTableName, 'counter', $strAliasPrefix . 'counter');
			    $objBuilder->AddSelectItem($strTableName, 'comman_narration', $strAliasPrefix . 'comman_narration');
			    $objBuilder->AddSelectItem($strTableName, 'print', $strAliasPrefix . 'print');
			    $objBuilder->AddSelectItem($strTableName, 'print_content', $strAliasPrefix . 'print_content');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a VoucherGrp from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this VoucherGrp::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return VoucherGrp
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idvoucher_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdvoucherGrp == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'voucher_grp__';


						// Expanding reverse references: VoucherAsGrp
						$strAlias = $strAliasPrefix . 'voucherasgrp__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsGrpArray)
								$objPreviousItem->_objVoucherAsGrpArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsGrpArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsGrpArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasgrp__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsGrpArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsGrpArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VoucherGrpAsGrp
						$strAlias = $strAliasPrefix . 'vouchergrpasgrp__idvoucher_grp';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherGrpAsGrpArray)
								$objPreviousItem->_objVoucherGrpAsGrpArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherGrpAsGrpArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherGrpAsGrpArray;
								$objChildItem = VoucherGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vouchergrpasgrp__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherGrpAsGrpArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherGrpAsGrpArray[] = VoucherGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vouchergrpasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'voucher_grp__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the VoucherGrp object
			$objToReturn = new VoucherGrp();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idvoucher_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdvoucherGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'abbrivation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAbbrivation = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'auto_num';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAutoNum = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'counter';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCounter = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'comman_narration';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCommanNarration = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'print';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnPrint = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'print_content';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPrintContent = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdvoucherGrp != $objPreviousItem->IdvoucherGrp) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objVoucherAsGrpArray);
					$cnt = count($objToReturn->_objVoucherAsGrpArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsGrpArray, $objToReturn->_objVoucherAsGrpArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherGrpAsGrpArray);
					$cnt = count($objToReturn->_objVoucherGrpAsGrpArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherGrpAsGrpArray, $objToReturn->_objVoucherGrpAsGrpArray)) {
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
				$strAliasPrefix = 'voucher_grp__';

			// Check for GrpObject Early Binding
			$strAlias = $strAliasPrefix . 'grp__idvoucher_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGrpObject = VoucherGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for VoucherAsGrp Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasgrp__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsGrpArray)
				$objToReturn->_objVoucherAsGrpArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsGrpArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsGrp = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VoucherGrpAsGrp Virtual Binding
			$strAlias = $strAliasPrefix . 'vouchergrpasgrp__idvoucher_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherGrpAsGrpArray)
				$objToReturn->_objVoucherGrpAsGrpArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherGrpAsGrpArray[] = VoucherGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vouchergrpasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherGrpAsGrp = VoucherGrp::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vouchergrpasgrp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of VoucherGrps from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return VoucherGrp[]
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
					$objItem = VoucherGrp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = VoucherGrp::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single VoucherGrp object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return VoucherGrp next row resulting from the query
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
			return VoucherGrp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single VoucherGrp object,
		 * by IdvoucherGrp Index(es)
		 * @param integer $intIdvoucherGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherGrp
		*/
		public static function LoadByIdvoucherGrp($intIdvoucherGrp, $objOptionalClauses = null) {
			return VoucherGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VoucherGrp()->IdvoucherGrp, $intIdvoucherGrp)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single VoucherGrp object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherGrp
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return VoucherGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VoucherGrp()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of VoucherGrp objects,
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherGrp[]
		*/
		public static function LoadArrayByGrp($intGrp, $objOptionalClauses = null) {
			// Call VoucherGrp::QueryArray to perform the LoadArrayByGrp query
			try {
				return VoucherGrp::QueryArray(
					QQ::Equal(QQN::VoucherGrp()->Grp, $intGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VoucherGrps
		 * by Grp Index(es)
		 * @param integer $intGrp
		 * @return int
		*/
		public static function CountByGrp($intGrp) {
			// Call VoucherGrp::QueryCount to perform the CountByGrp query
			return VoucherGrp::QueryCount(
				QQ::Equal(QQN::VoucherGrp()->Grp, $intGrp)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this VoucherGrp
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `voucher_grp` (
							`name`,
							`grp`,
							`abbrivation`,
							`auto_num`,
							`counter`,
							`comman_narration`,
							`print`,
							`print_content`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intGrp) . ',
							' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							' . $objDatabase->SqlVariable($this->blnAutoNum) . ',
							' . $objDatabase->SqlVariable($this->intCounter) . ',
							' . $objDatabase->SqlVariable($this->strCommanNarration) . ',
							' . $objDatabase->SqlVariable($this->blnPrint) . ',
							' . $objDatabase->SqlVariable($this->strPrintContent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdvoucherGrp = $objDatabase->InsertId('voucher_grp', 'idvoucher_grp');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`voucher_grp`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`grp` = ' . $objDatabase->SqlVariable($this->intGrp) . ',
							`abbrivation` = ' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							`auto_num` = ' . $objDatabase->SqlVariable($this->blnAutoNum) . ',
							`counter` = ' . $objDatabase->SqlVariable($this->intCounter) . ',
							`comman_narration` = ' . $objDatabase->SqlVariable($this->strCommanNarration) . ',
							`print` = ' . $objDatabase->SqlVariable($this->blnPrint) . ',
							`print_content` = ' . $objDatabase->SqlVariable($this->strPrintContent) . '
						WHERE
							`idvoucher_grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
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
		 * Delete this VoucherGrp
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this VoucherGrp with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_grp`
				WHERE
					`idvoucher_grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this VoucherGrp ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'VoucherGrp', $this->intIdvoucherGrp);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all VoucherGrps
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_grp`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate voucher_grp table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `voucher_grp`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this VoucherGrp from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved VoucherGrp object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = VoucherGrp::Load($this->intIdvoucherGrp);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->Grp = $objReloaded->Grp;
			$this->strAbbrivation = $objReloaded->strAbbrivation;
			$this->blnAutoNum = $objReloaded->blnAutoNum;
			$this->intCounter = $objReloaded->intCounter;
			$this->strCommanNarration = $objReloaded->strCommanNarration;
			$this->blnPrint = $objReloaded->blnPrint;
			$this->strPrintContent = $objReloaded->strPrintContent;
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
				case 'IdvoucherGrp':
					/**
					 * Gets the value for intIdvoucherGrp (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdvoucherGrp;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Grp':
					/**
					 * Gets the value for intGrp 
					 * @return integer
					 */
					return $this->intGrp;

				case 'Abbrivation':
					/**
					 * Gets the value for strAbbrivation (Not Null)
					 * @return string
					 */
					return $this->strAbbrivation;

				case 'AutoNum':
					/**
					 * Gets the value for blnAutoNum (Not Null)
					 * @return boolean
					 */
					return $this->blnAutoNum;

				case 'Counter':
					/**
					 * Gets the value for intCounter (Not Null)
					 * @return integer
					 */
					return $this->intCounter;

				case 'CommanNarration':
					/**
					 * Gets the value for strCommanNarration 
					 * @return string
					 */
					return $this->strCommanNarration;

				case 'Print':
					/**
					 * Gets the value for blnPrint 
					 * @return boolean
					 */
					return $this->blnPrint;

				case 'PrintContent':
					/**
					 * Gets the value for strPrintContent 
					 * @return string
					 */
					return $this->strPrintContent;


				///////////////////
				// Member Objects
				///////////////////
				case 'GrpObject':
					/**
					 * Gets the value for the VoucherGrp object referenced by intGrp 
					 * @return VoucherGrp
					 */
					try {
						if ((!$this->objGrpObject) && (!is_null($this->intGrp)))
							$this->objGrpObject = VoucherGrp::Load($this->intGrp);
						return $this->objGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_VoucherAsGrp':
					/**
					 * Gets the value for the private _objVoucherAsGrp (Read-Only)
					 * if set due to an expansion on the voucher.grp reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsGrp;

				case '_VoucherAsGrpArray':
					/**
					 * Gets the value for the private _objVoucherAsGrpArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.grp reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsGrpArray;

				case '_VoucherGrpAsGrp':
					/**
					 * Gets the value for the private _objVoucherGrpAsGrp (Read-Only)
					 * if set due to an expansion on the voucher_grp.grp reverse relationship
					 * @return VoucherGrp
					 */
					return $this->_objVoucherGrpAsGrp;

				case '_VoucherGrpAsGrpArray':
					/**
					 * Gets the value for the private _objVoucherGrpAsGrpArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher_grp.grp reverse relationship
					 * @return VoucherGrp[]
					 */
					return $this->_objVoucherGrpAsGrpArray;


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

				case 'Grp':
					/**
					 * Sets the value for intGrp 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objGrpObject = null;
						return ($this->intGrp = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Abbrivation':
					/**
					 * Sets the value for strAbbrivation (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAbbrivation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AutoNum':
					/**
					 * Sets the value for blnAutoNum (Not Null)
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAutoNum = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Counter':
					/**
					 * Sets the value for intCounter (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCounter = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CommanNarration':
					/**
					 * Sets the value for strCommanNarration 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCommanNarration = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Print':
					/**
					 * Sets the value for blnPrint 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnPrint = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PrintContent':
					/**
					 * Sets the value for strPrintContent 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPrintContent = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'GrpObject':
					/**
					 * Sets the value for the VoucherGrp object referenced by intGrp 
					 * @param VoucherGrp $mixValue
					 * @return VoucherGrp
					 */
					if (is_null($mixValue)) {
						$this->intGrp = null;
						$this->objGrpObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a VoucherGrp object
						try {
							$mixValue = QType::Cast($mixValue, 'VoucherGrp');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED VoucherGrp object
						if (is_null($mixValue->IdvoucherGrp))
							throw new QCallerException('Unable to set an unsaved GrpObject for this VoucherGrp');

						// Update Local Member Variables
						$this->objGrpObject = $mixValue;
						$this->intGrp = $mixValue->IdvoucherGrp;

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



		// Related Objects' Methods for VoucherAsGrp
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsGrp as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsGrpArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucherGrp)))
				return array();

			try {
				return Voucher::LoadArrayByGrp($this->intIdvoucherGrp, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsGrp
		 * @return int
		*/
		public function CountVouchersAsGrp() {
			if ((is_null($this->intIdvoucherGrp)))
				return 0;

			return Voucher::CountByGrp($this->intIdvoucherGrp);
		}

		/**
		 * Associates a VoucherAsGrp
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsGrp(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsGrp on this unsaved VoucherGrp.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsGrp on this VoucherGrp with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsGrp
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsGrp(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsGrp on this unsaved VoucherGrp.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsGrp on this VoucherGrp with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`grp` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}

		/**
		 * Unassociates all VouchersAsGrp
		 * @return void
		*/
		public function UnassociateAllVouchersAsGrp() {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsGrp on this unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`grp` = null
				WHERE
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsGrp
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsGrp(Voucher $objVoucher) {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsGrp on this unsaved VoucherGrp.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsGrp on this VoucherGrp with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsGrp
		 * @return void
		*/
		public function DeleteAllVouchersAsGrp() {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsGrp on this unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}


		// Related Objects' Methods for VoucherGrpAsGrp
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VoucherGrpsAsGrp as an array of VoucherGrp objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VoucherGrp[]
		*/
		public function GetVoucherGrpAsGrpArray($objOptionalClauses = null) {
			if ((is_null($this->intIdvoucherGrp)))
				return array();

			try {
				return VoucherGrp::LoadArrayByGrp($this->intIdvoucherGrp, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VoucherGrpsAsGrp
		 * @return int
		*/
		public function CountVoucherGrpsAsGrp() {
			if ((is_null($this->intIdvoucherGrp)))
				return 0;

			return VoucherGrp::CountByGrp($this->intIdvoucherGrp);
		}

		/**
		 * Associates a VoucherGrpAsGrp
		 * @param VoucherGrp $objVoucherGrp
		 * @return void
		*/
		public function AssociateVoucherGrpAsGrp(VoucherGrp $objVoucherGrp) {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherGrpAsGrp on this unsaved VoucherGrp.');
			if ((is_null($objVoucherGrp->IdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherGrpAsGrp on this VoucherGrp with an unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_grp`
				SET
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
				WHERE
					`idvoucher_grp` = ' . $objDatabase->SqlVariable($objVoucherGrp->IdvoucherGrp) . '
			');
		}

		/**
		 * Unassociates a VoucherGrpAsGrp
		 * @param VoucherGrp $objVoucherGrp
		 * @return void
		*/
		public function UnassociateVoucherGrpAsGrp(VoucherGrp $objVoucherGrp) {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherGrpAsGrp on this unsaved VoucherGrp.');
			if ((is_null($objVoucherGrp->IdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherGrpAsGrp on this VoucherGrp with an unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_grp`
				SET
					`grp` = null
				WHERE
					`idvoucher_grp` = ' . $objDatabase->SqlVariable($objVoucherGrp->IdvoucherGrp) . ' AND
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}

		/**
		 * Unassociates all VoucherGrpsAsGrp
		 * @return void
		*/
		public function UnassociateAllVoucherGrpsAsGrp() {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherGrpAsGrp on this unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher_grp`
				SET
					`grp` = null
				WHERE
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}

		/**
		 * Deletes an associated VoucherGrpAsGrp
		 * @param VoucherGrp $objVoucherGrp
		 * @return void
		*/
		public function DeleteAssociatedVoucherGrpAsGrp(VoucherGrp $objVoucherGrp) {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherGrpAsGrp on this unsaved VoucherGrp.');
			if ((is_null($objVoucherGrp->IdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherGrpAsGrp on this VoucherGrp with an unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_grp`
				WHERE
					`idvoucher_grp` = ' . $objDatabase->SqlVariable($objVoucherGrp->IdvoucherGrp) . ' AND
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
			');
		}

		/**
		 * Deletes all associated VoucherGrpsAsGrp
		 * @return void
		*/
		public function DeleteAllVoucherGrpsAsGrp() {
			if ((is_null($this->intIdvoucherGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherGrpAsGrp on this unsaved VoucherGrp.');

			// Get the Database Object for this Class
			$objDatabase = VoucherGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher_grp`
				WHERE
					`grp` = ' . $objDatabase->SqlVariable($this->intIdvoucherGrp) . '
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
			return "voucher_grp";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[VoucherGrp::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="VoucherGrp"><sequence>';
			$strToReturn .= '<element name="IdvoucherGrp" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="GrpObject" type="xsd1:VoucherGrp"/>';
			$strToReturn .= '<element name="Abbrivation" type="xsd:string"/>';
			$strToReturn .= '<element name="AutoNum" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Counter" type="xsd:int"/>';
			$strToReturn .= '<element name="CommanNarration" type="xsd:string"/>';
			$strToReturn .= '<element name="Print" type="xsd:boolean"/>';
			$strToReturn .= '<element name="PrintContent" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('VoucherGrp', $strComplexTypeArray)) {
				$strComplexTypeArray['VoucherGrp'] = VoucherGrp::GetSoapComplexTypeXml();
				VoucherGrp::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, VoucherGrp::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new VoucherGrp();
			if (property_exists($objSoapObject, 'IdvoucherGrp'))
				$objToReturn->intIdvoucherGrp = $objSoapObject->IdvoucherGrp;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'GrpObject')) &&
				($objSoapObject->GrpObject))
				$objToReturn->GrpObject = VoucherGrp::GetObjectFromSoapObject($objSoapObject->GrpObject);
			if (property_exists($objSoapObject, 'Abbrivation'))
				$objToReturn->strAbbrivation = $objSoapObject->Abbrivation;
			if (property_exists($objSoapObject, 'AutoNum'))
				$objToReturn->blnAutoNum = $objSoapObject->AutoNum;
			if (property_exists($objSoapObject, 'Counter'))
				$objToReturn->intCounter = $objSoapObject->Counter;
			if (property_exists($objSoapObject, 'CommanNarration'))
				$objToReturn->strCommanNarration = $objSoapObject->CommanNarration;
			if (property_exists($objSoapObject, 'Print'))
				$objToReturn->blnPrint = $objSoapObject->Print;
			if (property_exists($objSoapObject, 'PrintContent'))
				$objToReturn->strPrintContent = $objSoapObject->PrintContent;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, VoucherGrp::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objGrpObject)
				$objObject->objGrpObject = VoucherGrp::GetSoapObjectFromObject($objObject->objGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGrp = null;
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
			$iArray['IdvoucherGrp'] = $this->intIdvoucherGrp;
			$iArray['Name'] = $this->strName;
			$iArray['Grp'] = $this->intGrp;
			$iArray['Abbrivation'] = $this->strAbbrivation;
			$iArray['AutoNum'] = $this->blnAutoNum;
			$iArray['Counter'] = $this->intCounter;
			$iArray['CommanNarration'] = $this->strCommanNarration;
			$iArray['Print'] = $this->blnPrint;
			$iArray['PrintContent'] = $this->strPrintContent;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdvoucherGrp ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdvoucherGrp
     * @property-read QQNode $Name
     * @property-read QQNode $Grp
     * @property-read QQNodeVoucherGrp $GrpObject
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $AutoNum
     * @property-read QQNode $Counter
     * @property-read QQNode $CommanNarration
     * @property-read QQNode $Print
     * @property-read QQNode $PrintContent
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsGrp
     * @property-read QQReverseReferenceNodeVoucherGrp $VoucherGrpAsGrp

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeVoucherGrp extends QQNode {
		protected $strTableName = 'voucher_grp';
		protected $strPrimaryKey = 'idvoucher_grp';
		protected $strClassName = 'VoucherGrp';
		public function __get($strName) {
			switch ($strName) {
				case 'IdvoucherGrp':
					return new QQNode('idvoucher_grp', 'IdvoucherGrp', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'Integer', $this);
				case 'GrpObject':
					return new QQNodeVoucherGrp('grp', 'GrpObject', 'Integer', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'VarChar', $this);
				case 'AutoNum':
					return new QQNode('auto_num', 'AutoNum', 'Bit', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'Integer', $this);
				case 'CommanNarration':
					return new QQNode('comman_narration', 'CommanNarration', 'Blob', $this);
				case 'Print':
					return new QQNode('print', 'Print', 'Bit', $this);
				case 'PrintContent':
					return new QQNode('print_content', 'PrintContent', 'Blob', $this);
				case 'VoucherAsGrp':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasgrp', 'reverse_reference', 'grp');
				case 'VoucherGrpAsGrp':
					return new QQReverseReferenceNodeVoucherGrp($this, 'vouchergrpasgrp', 'reverse_reference', 'grp');

				case '_PrimaryKeyNode':
					return new QQNode('idvoucher_grp', 'IdvoucherGrp', 'Integer', $this);
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
     * @property-read QQNode $IdvoucherGrp
     * @property-read QQNode $Name
     * @property-read QQNode $Grp
     * @property-read QQNodeVoucherGrp $GrpObject
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $AutoNum
     * @property-read QQNode $Counter
     * @property-read QQNode $CommanNarration
     * @property-read QQNode $Print
     * @property-read QQNode $PrintContent
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsGrp
     * @property-read QQReverseReferenceNodeVoucherGrp $VoucherGrpAsGrp

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeVoucherGrp extends QQReverseReferenceNode {
		protected $strTableName = 'voucher_grp';
		protected $strPrimaryKey = 'idvoucher_grp';
		protected $strClassName = 'VoucherGrp';
		public function __get($strName) {
			switch ($strName) {
				case 'IdvoucherGrp':
					return new QQNode('idvoucher_grp', 'IdvoucherGrp', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Grp':
					return new QQNode('grp', 'Grp', 'integer', $this);
				case 'GrpObject':
					return new QQNodeVoucherGrp('grp', 'GrpObject', 'integer', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'string', $this);
				case 'AutoNum':
					return new QQNode('auto_num', 'AutoNum', 'boolean', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'integer', $this);
				case 'CommanNarration':
					return new QQNode('comman_narration', 'CommanNarration', 'string', $this);
				case 'Print':
					return new QQNode('print', 'Print', 'boolean', $this);
				case 'PrintContent':
					return new QQNode('print_content', 'PrintContent', 'string', $this);
				case 'VoucherAsGrp':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasgrp', 'reverse_reference', 'grp');
				case 'VoucherGrpAsGrp':
					return new QQReverseReferenceNodeVoucherGrp($this, 'vouchergrpasgrp', 'reverse_reference', 'grp');

				case '_PrimaryKeyNode':
					return new QQNode('idvoucher_grp', 'IdvoucherGrp', 'integer', $this);
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
