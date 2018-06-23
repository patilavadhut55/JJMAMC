<?php
	/**
	 * The abstract RequirementGrpGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the RequirementGrp subclass which
	 * extends this RequirementGrpGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the RequirementGrp class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdrequirementGrp the value for intIdrequirementGrp (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property-read Voucher $_Voucher the value for the private _objVoucher (Read-Only) if set due to an expansion on the voucher.requirement_grp reverse relationship
	 * @property-read Voucher[] $_VoucherArray the value for the private _objVoucherArray (Read-Only) if set due to an ExpandAsArray on the voucher.requirement_grp reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RequirementGrpGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column requirement_grp.idrequirement_grp
		 * @var integer intIdrequirementGrp
		 */
		protected $intIdrequirementGrp;
		const IdrequirementGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column requirement_grp.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single Voucher object
		 * (of type Voucher), if this RequirementGrp object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucher;
		 */
		private $_objVoucher;

		/**
		 * Private member variable that stores a reference to an array of Voucher objects
		 * (of type Voucher[]), if this RequirementGrp object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherArray;
		 */
		private $_objVoucherArray = null;

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
			$this->intIdrequirementGrp = RequirementGrp::IdrequirementGrpDefault;
			$this->strName = RequirementGrp::NameDefault;
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
		 * Load a RequirementGrp from PK Info
		 * @param integer $intIdrequirementGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RequirementGrp
		 */
		public static function Load($intIdrequirementGrp, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'RequirementGrp', $intIdrequirementGrp);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = RequirementGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::RequirementGrp()->IdrequirementGrp, $intIdrequirementGrp)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all RequirementGrps
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RequirementGrp[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call RequirementGrp::QueryArray to perform the LoadAll query
			try {
				return RequirementGrp::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all RequirementGrps
		 * @return int
		 */
		public static function CountAll() {
			// Call RequirementGrp::QueryCount to perform the CountAll query
			return RequirementGrp::QueryCount(QQ::All());
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
			$objDatabase = RequirementGrp::GetDatabase();

			// Create/Build out the QueryBuilder object with RequirementGrp-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'requirement_grp');

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
				RequirementGrp::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('requirement_grp');

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
		 * Static Qcubed Query method to query for a single RequirementGrp object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return RequirementGrp the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RequirementGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new RequirementGrp object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = RequirementGrp::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return RequirementGrp::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of RequirementGrp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return RequirementGrp[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RequirementGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return RequirementGrp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = RequirementGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of RequirementGrp objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = RequirementGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = RequirementGrp::GetDatabase();

			$strQuery = RequirementGrp::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/requirementgrp', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = RequirementGrp::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this RequirementGrp
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'requirement_grp';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idrequirement_grp', $strAliasPrefix . 'idrequirement_grp');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idrequirement_grp', $strAliasPrefix . 'idrequirement_grp');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a RequirementGrp from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this RequirementGrp::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return RequirementGrp
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idrequirement_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdrequirementGrp == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'requirement_grp__';


						// Expanding reverse references: Voucher
						$strAlias = $strAliasPrefix . 'voucher__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherArray)
								$objPreviousItem->_objVoucherArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'requirement_grp__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the RequirementGrp object
			$objToReturn = new RequirementGrp();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idrequirement_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdrequirementGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdrequirementGrp != $objPreviousItem->IdrequirementGrp) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objVoucherArray);
					$cnt = count($objToReturn->_objVoucherArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherArray, $objToReturn->_objVoucherArray)) {
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
				$strAliasPrefix = 'requirement_grp__';




			// Check for Voucher Virtual Binding
			$strAlias = $strAliasPrefix . 'voucher__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherArray)
				$objToReturn->_objVoucherArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucher = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of RequirementGrps from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return RequirementGrp[]
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
					$objItem = RequirementGrp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = RequirementGrp::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single RequirementGrp object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return RequirementGrp next row resulting from the query
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
			return RequirementGrp::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single RequirementGrp object,
		 * by IdrequirementGrp Index(es)
		 * @param integer $intIdrequirementGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RequirementGrp
		*/
		public static function LoadByIdrequirementGrp($intIdrequirementGrp, $objOptionalClauses = null) {
			return RequirementGrp::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::RequirementGrp()->IdrequirementGrp, $intIdrequirementGrp)
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
		 * Save this RequirementGrp
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `requirement_grp` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdrequirementGrp = $objDatabase->InsertId('requirement_grp', 'idrequirement_grp');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`requirement_grp`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idrequirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '
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
		 * Delete this RequirementGrp
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdrequirementGrp)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this RequirementGrp with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`requirement_grp`
				WHERE
					`idrequirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this RequirementGrp ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'RequirementGrp', $this->intIdrequirementGrp);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all RequirementGrps
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`requirement_grp`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate requirement_grp table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `requirement_grp`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this RequirementGrp from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved RequirementGrp object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = RequirementGrp::Load($this->intIdrequirementGrp);

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
				case 'IdrequirementGrp':
					/**
					 * Gets the value for intIdrequirementGrp (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdrequirementGrp;

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

				case '_Voucher':
					/**
					 * Gets the value for the private _objVoucher (Read-Only)
					 * if set due to an expansion on the voucher.requirement_grp reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucher;

				case '_VoucherArray':
					/**
					 * Gets the value for the private _objVoucherArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.requirement_grp reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherArray;


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



		// Related Objects' Methods for Voucher
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Vouchers as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdrequirementGrp)))
				return array();

			try {
				return Voucher::LoadArrayByRequirementGrp($this->intIdrequirementGrp, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Vouchers
		 * @return int
		*/
		public function CountVouchers() {
			if ((is_null($this->intIdrequirementGrp)))
				return 0;

			return Voucher::CountByRequirementGrp($this->intIdrequirementGrp);
		}

		/**
		 * Associates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdrequirementGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this unsaved RequirementGrp.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this RequirementGrp with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`requirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdrequirementGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved RequirementGrp.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this RequirementGrp with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`requirement_grp` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`requirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '
			');
		}

		/**
		 * Unassociates all Vouchers
		 * @return void
		*/
		public function UnassociateAllVouchers() {
			if ((is_null($this->intIdrequirementGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved RequirementGrp.');

			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`requirement_grp` = null
				WHERE
					`requirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '
			');
		}

		/**
		 * Deletes an associated Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdrequirementGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved RequirementGrp.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this RequirementGrp with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`requirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '
			');
		}

		/**
		 * Deletes all associated Vouchers
		 * @return void
		*/
		public function DeleteAllVouchers() {
			if ((is_null($this->intIdrequirementGrp)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved RequirementGrp.');

			// Get the Database Object for this Class
			$objDatabase = RequirementGrp::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`requirement_grp` = ' . $objDatabase->SqlVariable($this->intIdrequirementGrp) . '
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
			return "requirement_grp";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[RequirementGrp::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="RequirementGrp"><sequence>';
			$strToReturn .= '<element name="IdrequirementGrp" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('RequirementGrp', $strComplexTypeArray)) {
				$strComplexTypeArray['RequirementGrp'] = RequirementGrp::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, RequirementGrp::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new RequirementGrp();
			if (property_exists($objSoapObject, 'IdrequirementGrp'))
				$objToReturn->intIdrequirementGrp = $objSoapObject->IdrequirementGrp;
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
				array_push($objArrayToReturn, RequirementGrp::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdrequirementGrp'] = $this->intIdrequirementGrp;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdrequirementGrp ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdrequirementGrp
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $Voucher

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeRequirementGrp extends QQNode {
		protected $strTableName = 'requirement_grp';
		protected $strPrimaryKey = 'idrequirement_grp';
		protected $strClassName = 'RequirementGrp';
		public function __get($strName) {
			switch ($strName) {
				case 'IdrequirementGrp':
					return new QQNode('idrequirement_grp', 'IdrequirementGrp', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'requirement_grp');

				case '_PrimaryKeyNode':
					return new QQNode('idrequirement_grp', 'IdrequirementGrp', 'Integer', $this);
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
     * @property-read QQNode $IdrequirementGrp
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $Voucher

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeRequirementGrp extends QQReverseReferenceNode {
		protected $strTableName = 'requirement_grp';
		protected $strPrimaryKey = 'idrequirement_grp';
		protected $strClassName = 'RequirementGrp';
		public function __get($strName) {
			switch ($strName) {
				case 'IdrequirementGrp':
					return new QQNode('idrequirement_grp', 'IdrequirementGrp', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'requirement_grp');

				case '_PrimaryKeyNode':
					return new QQNode('idrequirement_grp', 'IdrequirementGrp', 'integer', $this);
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
