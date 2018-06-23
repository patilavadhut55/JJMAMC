<?php
	/**
	 * The abstract BudgetGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Budget subclass which
	 * extends this BudgetGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Budget class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idbudget the value for intIdbudget (Read-Only PK)
	 * @property integer $BudgetGrp the value for intBudgetGrp (Not Null)
	 * @property integer $AcademicYear the value for intAcademicYear (Not Null)
	 * @property string $Amount the value for strAmount 
	 * @property integer $BudgetCat the value for intBudgetCat 
	 * @property Ledger $BudgetGrpObject the value for the Ledger object referenced by intBudgetGrp (Not Null)
	 * @property CalenderYear $AcademicYearObject the value for the CalenderYear object referenced by intAcademicYear (Not Null)
	 * @property BudgetCat $BudgetCatObject the value for the BudgetCat object referenced by intBudgetCat 
	 * @property-read Voucher $_Voucher the value for the private _objVoucher (Read-Only) if set due to an expansion on the voucher.budget reverse relationship
	 * @property-read Voucher[] $_VoucherArray the value for the private _objVoucherArray (Read-Only) if set due to an ExpandAsArray on the voucher.budget reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class BudgetGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column budget.idbudget
		 * @var integer intIdbudget
		 */
		protected $intIdbudget;
		const IdbudgetDefault = null;


		/**
		 * Protected member variable that maps to the database column budget.budget_grp
		 * @var integer intBudgetGrp
		 */
		protected $intBudgetGrp;
		const BudgetGrpDefault = null;


		/**
		 * Protected member variable that maps to the database column budget.academic_year
		 * @var integer intAcademicYear
		 */
		protected $intAcademicYear;
		const AcademicYearDefault = null;


		/**
		 * Protected member variable that maps to the database column budget.amount
		 * @var string strAmount
		 */
		protected $strAmount;
		const AmountDefault = null;


		/**
		 * Protected member variable that maps to the database column budget.budget_cat
		 * @var integer intBudgetCat
		 */
		protected $intBudgetCat;
		const BudgetCatDefault = null;


		/**
		 * Private member variable that stores a reference to a single Voucher object
		 * (of type Voucher), if this Budget object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucher;
		 */
		private $_objVoucher;

		/**
		 * Private member variable that stores a reference to an array of Voucher objects
		 * (of type Voucher[]), if this Budget object was restored with
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
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column budget.budget_grp.
		 *
		 * NOTE: Always use the BudgetGrpObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objBudgetGrpObject
		 */
		protected $objBudgetGrpObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column budget.academic_year.
		 *
		 * NOTE: Always use the AcademicYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objAcademicYearObject
		 */
		protected $objAcademicYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column budget.budget_cat.
		 *
		 * NOTE: Always use the BudgetCatObject property getter to correctly retrieve this BudgetCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var BudgetCat objBudgetCatObject
		 */
		protected $objBudgetCatObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdbudget = Budget::IdbudgetDefault;
			$this->intBudgetGrp = Budget::BudgetGrpDefault;
			$this->intAcademicYear = Budget::AcademicYearDefault;
			$this->strAmount = Budget::AmountDefault;
			$this->intBudgetCat = Budget::BudgetCatDefault;
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
		 * Load a Budget from PK Info
		 * @param integer $intIdbudget
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget
		 */
		public static function Load($intIdbudget, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Budget', $intIdbudget);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Budget::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Budget()->Idbudget, $intIdbudget)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Budgets
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Budget::QueryArray to perform the LoadAll query
			try {
				return Budget::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Budgets
		 * @return int
		 */
		public static function CountAll() {
			// Call Budget::QueryCount to perform the CountAll query
			return Budget::QueryCount(QQ::All());
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
			$objDatabase = Budget::GetDatabase();

			// Create/Build out the QueryBuilder object with Budget-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'budget');

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
				Budget::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('budget');

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
		 * Static Qcubed Query method to query for a single Budget object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Budget the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Budget::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Budget object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Budget::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Budget::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Budget objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Budget[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Budget::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Budget::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Budget::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Budget objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Budget::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Budget::GetDatabase();

			$strQuery = Budget::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/budget', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Budget::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Budget
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'budget';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idbudget', $strAliasPrefix . 'idbudget');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idbudget', $strAliasPrefix . 'idbudget');
			    $objBuilder->AddSelectItem($strTableName, 'budget_grp', $strAliasPrefix . 'budget_grp');
			    $objBuilder->AddSelectItem($strTableName, 'academic_year', $strAliasPrefix . 'academic_year');
			    $objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
			    $objBuilder->AddSelectItem($strTableName, 'budget_cat', $strAliasPrefix . 'budget_cat');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Budget from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Budget::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Budget
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idbudget';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdbudget == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'budget__';


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
						} else if ($strAliasPrefix == 'budget__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Budget object
			$objToReturn = new Budget();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idbudget';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdbudget = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'budget_grp';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBudgetGrp = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'academic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAcademicYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'amount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAmount = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'budget_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBudgetCat = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idbudget != $objPreviousItem->Idbudget) {
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
				$strAliasPrefix = 'budget__';

			// Check for BudgetGrpObject Early Binding
			$strAlias = $strAliasPrefix . 'budget_grp__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBudgetGrpObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budget_grp__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AcademicYearObject Early Binding
			$strAlias = $strAliasPrefix . 'academic_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAcademicYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academic_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BudgetCatObject Early Binding
			$strAlias = $strAliasPrefix . 'budget_cat__idbudget_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBudgetCatObject = BudgetCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budget_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




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
		 * Instantiate an array of Budgets from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Budget[]
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
					$objItem = Budget::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Budget::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Budget object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Budget next row resulting from the query
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
			return Budget::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Budget object,
		 * by Idbudget Index(es)
		 * @param integer $intIdbudget
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget
		*/
		public static function LoadByIdbudget($intIdbudget, $objOptionalClauses = null) {
			return Budget::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Budget()->Idbudget, $intIdbudget)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Budget objects,
		 * by AcademicYear Index(es)
		 * @param integer $intAcademicYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget[]
		*/
		public static function LoadArrayByAcademicYear($intAcademicYear, $objOptionalClauses = null) {
			// Call Budget::QueryArray to perform the LoadArrayByAcademicYear query
			try {
				return Budget::QueryArray(
					QQ::Equal(QQN::Budget()->AcademicYear, $intAcademicYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Budgets
		 * by AcademicYear Index(es)
		 * @param integer $intAcademicYear
		 * @return int
		*/
		public static function CountByAcademicYear($intAcademicYear) {
			// Call Budget::QueryCount to perform the CountByAcademicYear query
			return Budget::QueryCount(
				QQ::Equal(QQN::Budget()->AcademicYear, $intAcademicYear)
			);
		}

		/**
		 * Load an array of Budget objects,
		 * by BudgetGrp Index(es)
		 * @param integer $intBudgetGrp
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget[]
		*/
		public static function LoadArrayByBudgetGrp($intBudgetGrp, $objOptionalClauses = null) {
			// Call Budget::QueryArray to perform the LoadArrayByBudgetGrp query
			try {
				return Budget::QueryArray(
					QQ::Equal(QQN::Budget()->BudgetGrp, $intBudgetGrp),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Budgets
		 * by BudgetGrp Index(es)
		 * @param integer $intBudgetGrp
		 * @return int
		*/
		public static function CountByBudgetGrp($intBudgetGrp) {
			// Call Budget::QueryCount to perform the CountByBudgetGrp query
			return Budget::QueryCount(
				QQ::Equal(QQN::Budget()->BudgetGrp, $intBudgetGrp)
			);
		}

		/**
		 * Load an array of Budget objects,
		 * by BudgetCat Index(es)
		 * @param integer $intBudgetCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget[]
		*/
		public static function LoadArrayByBudgetCat($intBudgetCat, $objOptionalClauses = null) {
			// Call Budget::QueryArray to perform the LoadArrayByBudgetCat query
			try {
				return Budget::QueryArray(
					QQ::Equal(QQN::Budget()->BudgetCat, $intBudgetCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Budgets
		 * by BudgetCat Index(es)
		 * @param integer $intBudgetCat
		 * @return int
		*/
		public static function CountByBudgetCat($intBudgetCat) {
			// Call Budget::QueryCount to perform the CountByBudgetCat query
			return Budget::QueryCount(
				QQ::Equal(QQN::Budget()->BudgetCat, $intBudgetCat)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Budget
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `budget` (
							`budget_grp`,
							`academic_year`,
							`amount`,
							`budget_cat`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intBudgetGrp) . ',
							' . $objDatabase->SqlVariable($this->intAcademicYear) . ',
							' . $objDatabase->SqlVariable($this->strAmount) . ',
							' . $objDatabase->SqlVariable($this->intBudgetCat) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdbudget = $objDatabase->InsertId('budget', 'idbudget');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`budget`
						SET
							`budget_grp` = ' . $objDatabase->SqlVariable($this->intBudgetGrp) . ',
							`academic_year` = ' . $objDatabase->SqlVariable($this->intAcademicYear) . ',
							`amount` = ' . $objDatabase->SqlVariable($this->strAmount) . ',
							`budget_cat` = ' . $objDatabase->SqlVariable($this->intBudgetCat) . '
						WHERE
							`idbudget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '
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
		 * Delete this Budget
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdbudget)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Budget with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`budget`
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Budget ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Budget', $this->intIdbudget);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Budgets
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`budget`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate budget table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `budget`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Budget from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Budget object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Budget::Load($this->intIdbudget);

			// Update $this's local variables to match
			$this->BudgetGrp = $objReloaded->BudgetGrp;
			$this->AcademicYear = $objReloaded->AcademicYear;
			$this->strAmount = $objReloaded->strAmount;
			$this->BudgetCat = $objReloaded->BudgetCat;
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
				case 'Idbudget':
					/**
					 * Gets the value for intIdbudget (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdbudget;

				case 'BudgetGrp':
					/**
					 * Gets the value for intBudgetGrp (Not Null)
					 * @return integer
					 */
					return $this->intBudgetGrp;

				case 'AcademicYear':
					/**
					 * Gets the value for intAcademicYear (Not Null)
					 * @return integer
					 */
					return $this->intAcademicYear;

				case 'Amount':
					/**
					 * Gets the value for strAmount 
					 * @return string
					 */
					return $this->strAmount;

				case 'BudgetCat':
					/**
					 * Gets the value for intBudgetCat 
					 * @return integer
					 */
					return $this->intBudgetCat;


				///////////////////
				// Member Objects
				///////////////////
				case 'BudgetGrpObject':
					/**
					 * Gets the value for the Ledger object referenced by intBudgetGrp (Not Null)
					 * @return Ledger
					 */
					try {
						if ((!$this->objBudgetGrpObject) && (!is_null($this->intBudgetGrp)))
							$this->objBudgetGrpObject = Ledger::Load($this->intBudgetGrp);
						return $this->objBudgetGrpObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcademicYearObject':
					/**
					 * Gets the value for the CalenderYear object referenced by intAcademicYear (Not Null)
					 * @return CalenderYear
					 */
					try {
						if ((!$this->objAcademicYearObject) && (!is_null($this->intAcademicYear)))
							$this->objAcademicYearObject = CalenderYear::Load($this->intAcademicYear);
						return $this->objAcademicYearObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BudgetCatObject':
					/**
					 * Gets the value for the BudgetCat object referenced by intBudgetCat 
					 * @return BudgetCat
					 */
					try {
						if ((!$this->objBudgetCatObject) && (!is_null($this->intBudgetCat)))
							$this->objBudgetCatObject = BudgetCat::Load($this->intBudgetCat);
						return $this->objBudgetCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Voucher':
					/**
					 * Gets the value for the private _objVoucher (Read-Only)
					 * if set due to an expansion on the voucher.budget reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucher;

				case '_VoucherArray':
					/**
					 * Gets the value for the private _objVoucherArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.budget reverse relationship
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
				case 'BudgetGrp':
					/**
					 * Sets the value for intBudgetGrp (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBudgetGrpObject = null;
						return ($this->intBudgetGrp = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcademicYear':
					/**
					 * Sets the value for intAcademicYear (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAcademicYearObject = null;
						return ($this->intAcademicYear = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Amount':
					/**
					 * Sets the value for strAmount 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAmount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BudgetCat':
					/**
					 * Sets the value for intBudgetCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBudgetCatObject = null;
						return ($this->intBudgetCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'BudgetGrpObject':
					/**
					 * Sets the value for the Ledger object referenced by intBudgetGrp (Not Null)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intBudgetGrp = null;
						$this->objBudgetGrpObject = null;
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
							throw new QCallerException('Unable to set an unsaved BudgetGrpObject for this Budget');

						// Update Local Member Variables
						$this->objBudgetGrpObject = $mixValue;
						$this->intBudgetGrp = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AcademicYearObject':
					/**
					 * Sets the value for the CalenderYear object referenced by intAcademicYear (Not Null)
					 * @param CalenderYear $mixValue
					 * @return CalenderYear
					 */
					if (is_null($mixValue)) {
						$this->intAcademicYear = null;
						$this->objAcademicYearObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CalenderYear object
						try {
							$mixValue = QType::Cast($mixValue, 'CalenderYear');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CalenderYear object
						if (is_null($mixValue->IdcalenderYear))
							throw new QCallerException('Unable to set an unsaved AcademicYearObject for this Budget');

						// Update Local Member Variables
						$this->objAcademicYearObject = $mixValue;
						$this->intAcademicYear = $mixValue->IdcalenderYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BudgetCatObject':
					/**
					 * Sets the value for the BudgetCat object referenced by intBudgetCat 
					 * @param BudgetCat $mixValue
					 * @return BudgetCat
					 */
					if (is_null($mixValue)) {
						$this->intBudgetCat = null;
						$this->objBudgetCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a BudgetCat object
						try {
							$mixValue = QType::Cast($mixValue, 'BudgetCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED BudgetCat object
						if (is_null($mixValue->IdbudgetCat))
							throw new QCallerException('Unable to set an unsaved BudgetCatObject for this Budget');

						// Update Local Member Variables
						$this->objBudgetCatObject = $mixValue;
						$this->intBudgetCat = $mixValue->IdbudgetCat;

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



		// Related Objects' Methods for Voucher
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Vouchers as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdbudget)))
				return array();

			try {
				return Voucher::LoadArrayByBudget($this->intIdbudget, $objOptionalClauses);
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
			if ((is_null($this->intIdbudget)))
				return 0;

			return Voucher::CountByBudget($this->intIdbudget);
		}

		/**
		 * Associates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this unsaved Budget.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this Budget with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`budget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '
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
			if ((is_null($this->intIdbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved Budget.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this Budget with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`budget` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`budget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '
			');
		}

		/**
		 * Unassociates all Vouchers
		 * @return void
		*/
		public function UnassociateAllVouchers() {
			if ((is_null($this->intIdbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`budget` = null
				WHERE
					`budget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '
			');
		}

		/**
		 * Deletes an associated Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved Budget.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this Budget with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`budget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '
			');
		}

		/**
		 * Deletes all associated Vouchers
		 * @return void
		*/
		public function DeleteAllVouchers() {
			if ((is_null($this->intIdbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = Budget::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`budget` = ' . $objDatabase->SqlVariable($this->intIdbudget) . '
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
			return "budget";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Budget::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Budget"><sequence>';
			$strToReturn .= '<element name="Idbudget" type="xsd:int"/>';
			$strToReturn .= '<element name="BudgetGrpObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="AcademicYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="Amount" type="xsd:string"/>';
			$strToReturn .= '<element name="BudgetCatObject" type="xsd1:BudgetCat"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Budget', $strComplexTypeArray)) {
				$strComplexTypeArray['Budget'] = Budget::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				BudgetCat::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Budget::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Budget();
			if (property_exists($objSoapObject, 'Idbudget'))
				$objToReturn->intIdbudget = $objSoapObject->Idbudget;
			if ((property_exists($objSoapObject, 'BudgetGrpObject')) &&
				($objSoapObject->BudgetGrpObject))
				$objToReturn->BudgetGrpObject = Ledger::GetObjectFromSoapObject($objSoapObject->BudgetGrpObject);
			if ((property_exists($objSoapObject, 'AcademicYearObject')) &&
				($objSoapObject->AcademicYearObject))
				$objToReturn->AcademicYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->AcademicYearObject);
			if (property_exists($objSoapObject, 'Amount'))
				$objToReturn->strAmount = $objSoapObject->Amount;
			if ((property_exists($objSoapObject, 'BudgetCatObject')) &&
				($objSoapObject->BudgetCatObject))
				$objToReturn->BudgetCatObject = BudgetCat::GetObjectFromSoapObject($objSoapObject->BudgetCatObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Budget::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objBudgetGrpObject)
				$objObject->objBudgetGrpObject = Ledger::GetSoapObjectFromObject($objObject->objBudgetGrpObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBudgetGrp = null;
			if ($objObject->objAcademicYearObject)
				$objObject->objAcademicYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objAcademicYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAcademicYear = null;
			if ($objObject->objBudgetCatObject)
				$objObject->objBudgetCatObject = BudgetCat::GetSoapObjectFromObject($objObject->objBudgetCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBudgetCat = null;
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
			$iArray['Idbudget'] = $this->intIdbudget;
			$iArray['BudgetGrp'] = $this->intBudgetGrp;
			$iArray['AcademicYear'] = $this->intAcademicYear;
			$iArray['Amount'] = $this->strAmount;
			$iArray['BudgetCat'] = $this->intBudgetCat;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdbudget ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idbudget
     * @property-read QQNode $BudgetGrp
     * @property-read QQNodeLedger $BudgetGrpObject
     * @property-read QQNode $AcademicYear
     * @property-read QQNodeCalenderYear $AcademicYearObject
     * @property-read QQNode $Amount
     * @property-read QQNode $BudgetCat
     * @property-read QQNodeBudgetCat $BudgetCatObject
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $Voucher

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeBudget extends QQNode {
		protected $strTableName = 'budget';
		protected $strPrimaryKey = 'idbudget';
		protected $strClassName = 'Budget';
		public function __get($strName) {
			switch ($strName) {
				case 'Idbudget':
					return new QQNode('idbudget', 'Idbudget', 'Integer', $this);
				case 'BudgetGrp':
					return new QQNode('budget_grp', 'BudgetGrp', 'Integer', $this);
				case 'BudgetGrpObject':
					return new QQNodeLedger('budget_grp', 'BudgetGrpObject', 'Integer', $this);
				case 'AcademicYear':
					return new QQNode('academic_year', 'AcademicYear', 'Integer', $this);
				case 'AcademicYearObject':
					return new QQNodeCalenderYear('academic_year', 'AcademicYearObject', 'Integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'VarChar', $this);
				case 'BudgetCat':
					return new QQNode('budget_cat', 'BudgetCat', 'Integer', $this);
				case 'BudgetCatObject':
					return new QQNodeBudgetCat('budget_cat', 'BudgetCatObject', 'Integer', $this);
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'budget');

				case '_PrimaryKeyNode':
					return new QQNode('idbudget', 'Idbudget', 'Integer', $this);
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
     * @property-read QQNode $Idbudget
     * @property-read QQNode $BudgetGrp
     * @property-read QQNodeLedger $BudgetGrpObject
     * @property-read QQNode $AcademicYear
     * @property-read QQNodeCalenderYear $AcademicYearObject
     * @property-read QQNode $Amount
     * @property-read QQNode $BudgetCat
     * @property-read QQNodeBudgetCat $BudgetCatObject
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $Voucher

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeBudget extends QQReverseReferenceNode {
		protected $strTableName = 'budget';
		protected $strPrimaryKey = 'idbudget';
		protected $strClassName = 'Budget';
		public function __get($strName) {
			switch ($strName) {
				case 'Idbudget':
					return new QQNode('idbudget', 'Idbudget', 'integer', $this);
				case 'BudgetGrp':
					return new QQNode('budget_grp', 'BudgetGrp', 'integer', $this);
				case 'BudgetGrpObject':
					return new QQNodeLedger('budget_grp', 'BudgetGrpObject', 'integer', $this);
				case 'AcademicYear':
					return new QQNode('academic_year', 'AcademicYear', 'integer', $this);
				case 'AcademicYearObject':
					return new QQNodeCalenderYear('academic_year', 'AcademicYearObject', 'integer', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'string', $this);
				case 'BudgetCat':
					return new QQNode('budget_cat', 'BudgetCat', 'integer', $this);
				case 'BudgetCatObject':
					return new QQNodeBudgetCat('budget_cat', 'BudgetCatObject', 'integer', $this);
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'budget');

				case '_PrimaryKeyNode':
					return new QQNode('idbudget', 'Idbudget', 'integer', $this);
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
