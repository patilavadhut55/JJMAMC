<?php
	/**
	 * The abstract AppApprovalHasRemarkGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AppApprovalHasRemark subclass which
	 * extends this AppApprovalHasRemarkGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AppApprovalHasRemark class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $AppApprovalIdappApproval the value for intAppApprovalIdappApproval (PK)
	 * @property integer $RemarkIdremark the value for intRemarkIdremark (PK)
	 * @property AppApproval $AppApprovalIdappApprovalObject the value for the AppApproval object referenced by intAppApprovalIdappApproval (PK)
	 * @property Remark $RemarkIdremarkObject the value for the Remark object referenced by intRemarkIdremark (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AppApprovalHasRemarkGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column app_approval_has_remark.app_approval_idapp_approval
		 * @var integer intAppApprovalIdappApproval
		 */
		protected $intAppApprovalIdappApproval;
		const AppApprovalIdappApprovalDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intAppApprovalIdappApproval;
		 */
		protected $__intAppApprovalIdappApproval;

		/**
		 * Protected member variable that maps to the database PK column app_approval_has_remark.remark_idremark
		 * @var integer intRemarkIdremark
		 */
		protected $intRemarkIdremark;
		const RemarkIdremarkDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intRemarkIdremark;
		 */
		protected $__intRemarkIdremark;

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
		 * in the database column app_approval_has_remark.app_approval_idapp_approval.
		 *
		 * NOTE: Always use the AppApprovalIdappApprovalObject property getter to correctly retrieve this AppApproval object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AppApproval objAppApprovalIdappApprovalObject
		 */
		protected $objAppApprovalIdappApprovalObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column app_approval_has_remark.remark_idremark.
		 *
		 * NOTE: Always use the RemarkIdremarkObject property getter to correctly retrieve this Remark object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Remark objRemarkIdremarkObject
		 */
		protected $objRemarkIdremarkObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intAppApprovalIdappApproval = AppApprovalHasRemark::AppApprovalIdappApprovalDefault;
			$this->intRemarkIdremark = AppApprovalHasRemark::RemarkIdremarkDefault;
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
		 * Load a AppApprovalHasRemark from PK Info
		 * @param integer $intAppApprovalIdappApproval		 * @param integer $intRemarkIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark
		 */
		public static function Load($intAppApprovalIdappApproval, $intRemarkIdremark, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppApprovalHasRemark', $intAppApprovalIdappApproval, $intRemarkIdremark);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AppApprovalHasRemark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppApprovalHasRemark()->AppApprovalIdappApproval, $intAppApprovalIdappApproval),
					QQ::Equal(QQN::AppApprovalHasRemark()->RemarkIdremark, $intRemarkIdremark)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AppApprovalHasRemarks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AppApprovalHasRemark::QueryArray to perform the LoadAll query
			try {
				return AppApprovalHasRemark::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AppApprovalHasRemarks
		 * @return int
		 */
		public static function CountAll() {
			// Call AppApprovalHasRemark::QueryCount to perform the CountAll query
			return AppApprovalHasRemark::QueryCount(QQ::All());
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
			$objDatabase = AppApprovalHasRemark::GetDatabase();

			// Create/Build out the QueryBuilder object with AppApprovalHasRemark-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'app_approval_has_remark');

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
				AppApprovalHasRemark::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('app_approval_has_remark');

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
		 * Static Qcubed Query method to query for a single AppApprovalHasRemark object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppApprovalHasRemark the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppApprovalHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AppApprovalHasRemark object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AppApprovalHasRemark::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AppApprovalHasRemark::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AppApprovalHasRemark objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppApprovalHasRemark[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppApprovalHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AppApprovalHasRemark::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AppApprovalHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AppApprovalHasRemark objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppApprovalHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AppApprovalHasRemark::GetDatabase();

			$strQuery = AppApprovalHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/appapprovalhasremark', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AppApprovalHasRemark::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AppApprovalHasRemark
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'app_approval_has_remark';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'app_approval_idapp_approval', $strAliasPrefix . 'app_approval_idapp_approval');
			    $objBuilder->AddSelectItem($strTableName, 'remark_idremark', $strAliasPrefix . 'remark_idremark');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'app_approval_idapp_approval', $strAliasPrefix . 'app_approval_idapp_approval');
			    $objBuilder->AddSelectItem($strTableName, 'remark_idremark', $strAliasPrefix . 'remark_idremark');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AppApprovalHasRemark from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AppApprovalHasRemark::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AppApprovalHasRemark
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the AppApprovalHasRemark object
			$objToReturn = new AppApprovalHasRemark();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'app_approval_idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAppApprovalIdappApproval = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intAppApprovalIdappApproval = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'remark_idremark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRemarkIdremark = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intRemarkIdremark = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->AppApprovalIdappApproval != $objPreviousItem->AppApprovalIdappApproval) {
						continue;
					}
					if ($objToReturn->RemarkIdremark != $objPreviousItem->RemarkIdremark) {
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
				$strAliasPrefix = 'app_approval_has_remark__';

			// Check for AppApprovalIdappApprovalObject Early Binding
			$strAlias = $strAliasPrefix . 'app_approval_idapp_approval__idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAppApprovalIdappApprovalObject = AppApproval::InstantiateDbRow($objDbRow, $strAliasPrefix . 'app_approval_idapp_approval__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RemarkIdremarkObject Early Binding
			$strAlias = $strAliasPrefix . 'remark_idremark__idremark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRemarkIdremarkObject = Remark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'remark_idremark__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of AppApprovalHasRemarks from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AppApprovalHasRemark[]
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
					$objItem = AppApprovalHasRemark::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AppApprovalHasRemark::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AppApprovalHasRemark object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AppApprovalHasRemark next row resulting from the query
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
			return AppApprovalHasRemark::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AppApprovalHasRemark object,
		 * by AppApprovalIdappApproval, RemarkIdremark Index(es)
		 * @param integer $intAppApprovalIdappApproval
		 * @param integer $intRemarkIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark
		*/
		public static function LoadByAppApprovalIdappApprovalRemarkIdremark($intAppApprovalIdappApproval, $intRemarkIdremark, $objOptionalClauses = null) {
			return AppApprovalHasRemark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppApprovalHasRemark()->AppApprovalIdappApproval, $intAppApprovalIdappApproval),
					QQ::Equal(QQN::AppApprovalHasRemark()->RemarkIdremark, $intRemarkIdremark)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of AppApprovalHasRemark objects,
		 * by RemarkIdremark Index(es)
		 * @param integer $intRemarkIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark[]
		*/
		public static function LoadArrayByRemarkIdremark($intRemarkIdremark, $objOptionalClauses = null) {
			// Call AppApprovalHasRemark::QueryArray to perform the LoadArrayByRemarkIdremark query
			try {
				return AppApprovalHasRemark::QueryArray(
					QQ::Equal(QQN::AppApprovalHasRemark()->RemarkIdremark, $intRemarkIdremark),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppApprovalHasRemarks
		 * by RemarkIdremark Index(es)
		 * @param integer $intRemarkIdremark
		 * @return int
		*/
		public static function CountByRemarkIdremark($intRemarkIdremark) {
			// Call AppApprovalHasRemark::QueryCount to perform the CountByRemarkIdremark query
			return AppApprovalHasRemark::QueryCount(
				QQ::Equal(QQN::AppApprovalHasRemark()->RemarkIdremark, $intRemarkIdremark)
			);
		}

		/**
		 * Load an array of AppApprovalHasRemark objects,
		 * by AppApprovalIdappApproval Index(es)
		 * @param integer $intAppApprovalIdappApproval
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark[]
		*/
		public static function LoadArrayByAppApprovalIdappApproval($intAppApprovalIdappApproval, $objOptionalClauses = null) {
			// Call AppApprovalHasRemark::QueryArray to perform the LoadArrayByAppApprovalIdappApproval query
			try {
				return AppApprovalHasRemark::QueryArray(
					QQ::Equal(QQN::AppApprovalHasRemark()->AppApprovalIdappApproval, $intAppApprovalIdappApproval),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppApprovalHasRemarks
		 * by AppApprovalIdappApproval Index(es)
		 * @param integer $intAppApprovalIdappApproval
		 * @return int
		*/
		public static function CountByAppApprovalIdappApproval($intAppApprovalIdappApproval) {
			// Call AppApprovalHasRemark::QueryCount to perform the CountByAppApprovalIdappApproval query
			return AppApprovalHasRemark::QueryCount(
				QQ::Equal(QQN::AppApprovalHasRemark()->AppApprovalIdappApproval, $intAppApprovalIdappApproval)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this AppApprovalHasRemark
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AppApprovalHasRemark::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `app_approval_has_remark` (
							`app_approval_idapp_approval`,
							`remark_idremark`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intAppApprovalIdappApproval) . ',
							' . $objDatabase->SqlVariable($this->intRemarkIdremark) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`app_approval_has_remark`
						SET
							`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intAppApprovalIdappApproval) . ',
							`remark_idremark` = ' . $objDatabase->SqlVariable($this->intRemarkIdremark) . '
						WHERE
							`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->__intAppApprovalIdappApproval) . ' AND 
							`remark_idremark` = ' . $objDatabase->SqlVariable($this->__intRemarkIdremark) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intAppApprovalIdappApproval = $this->intAppApprovalIdappApproval;
			$this->__intRemarkIdremark = $this->intRemarkIdremark;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this AppApprovalHasRemark
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intAppApprovalIdappApproval)) || (is_null($this->intRemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AppApprovalHasRemark with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AppApprovalHasRemark::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval_has_remark`
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intAppApprovalIdappApproval) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intRemarkIdremark) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AppApprovalHasRemark ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppApprovalHasRemark', $this->intAppApprovalIdappApproval, $this->intRemarkIdremark);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AppApprovalHasRemarks
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AppApprovalHasRemark::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval_has_remark`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate app_approval_has_remark table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AppApprovalHasRemark::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `app_approval_has_remark`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AppApprovalHasRemark from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AppApprovalHasRemark object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AppApprovalHasRemark::Load($this->intAppApprovalIdappApproval, $this->intRemarkIdremark);

			// Update $this's local variables to match
			$this->AppApprovalIdappApproval = $objReloaded->AppApprovalIdappApproval;
			$this->__intAppApprovalIdappApproval = $this->intAppApprovalIdappApproval;
			$this->RemarkIdremark = $objReloaded->RemarkIdremark;
			$this->__intRemarkIdremark = $this->intRemarkIdremark;
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
				case 'AppApprovalIdappApproval':
					/**
					 * Gets the value for intAppApprovalIdappApproval (PK)
					 * @return integer
					 */
					return $this->intAppApprovalIdappApproval;

				case 'RemarkIdremark':
					/**
					 * Gets the value for intRemarkIdremark (PK)
					 * @return integer
					 */
					return $this->intRemarkIdremark;


				///////////////////
				// Member Objects
				///////////////////
				case 'AppApprovalIdappApprovalObject':
					/**
					 * Gets the value for the AppApproval object referenced by intAppApprovalIdappApproval (PK)
					 * @return AppApproval
					 */
					try {
						if ((!$this->objAppApprovalIdappApprovalObject) && (!is_null($this->intAppApprovalIdappApproval)))
							$this->objAppApprovalIdappApprovalObject = AppApproval::Load($this->intAppApprovalIdappApproval);
						return $this->objAppApprovalIdappApprovalObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RemarkIdremarkObject':
					/**
					 * Gets the value for the Remark object referenced by intRemarkIdremark (PK)
					 * @return Remark
					 */
					try {
						if ((!$this->objRemarkIdremarkObject) && (!is_null($this->intRemarkIdremark)))
							$this->objRemarkIdremarkObject = Remark::Load($this->intRemarkIdremark);
						return $this->objRemarkIdremarkObject;
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
				case 'AppApprovalIdappApproval':
					/**
					 * Sets the value for intAppApprovalIdappApproval (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAppApprovalIdappApprovalObject = null;
						return ($this->intAppApprovalIdappApproval = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RemarkIdremark':
					/**
					 * Sets the value for intRemarkIdremark (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRemarkIdremarkObject = null;
						return ($this->intRemarkIdremark = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'AppApprovalIdappApprovalObject':
					/**
					 * Sets the value for the AppApproval object referenced by intAppApprovalIdappApproval (PK)
					 * @param AppApproval $mixValue
					 * @return AppApproval
					 */
					if (is_null($mixValue)) {
						$this->intAppApprovalIdappApproval = null;
						$this->objAppApprovalIdappApprovalObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AppApproval object
						try {
							$mixValue = QType::Cast($mixValue, 'AppApproval');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AppApproval object
						if (is_null($mixValue->IdappApproval))
							throw new QCallerException('Unable to set an unsaved AppApprovalIdappApprovalObject for this AppApprovalHasRemark');

						// Update Local Member Variables
						$this->objAppApprovalIdappApprovalObject = $mixValue;
						$this->intAppApprovalIdappApproval = $mixValue->IdappApproval;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RemarkIdremarkObject':
					/**
					 * Sets the value for the Remark object referenced by intRemarkIdremark (PK)
					 * @param Remark $mixValue
					 * @return Remark
					 */
					if (is_null($mixValue)) {
						$this->intRemarkIdremark = null;
						$this->objRemarkIdremarkObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Remark object
						try {
							$mixValue = QType::Cast($mixValue, 'Remark');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Remark object
						if (is_null($mixValue->Idremark))
							throw new QCallerException('Unable to set an unsaved RemarkIdremarkObject for this AppApprovalHasRemark');

						// Update Local Member Variables
						$this->objRemarkIdremarkObject = $mixValue;
						$this->intRemarkIdremark = $mixValue->Idremark;

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
			return "app_approval_has_remark";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AppApprovalHasRemark::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AppApprovalHasRemark"><sequence>';
			$strToReturn .= '<element name="AppApprovalIdappApprovalObject" type="xsd1:AppApproval"/>';
			$strToReturn .= '<element name="RemarkIdremarkObject" type="xsd1:Remark"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AppApprovalHasRemark', $strComplexTypeArray)) {
				$strComplexTypeArray['AppApprovalHasRemark'] = AppApprovalHasRemark::GetSoapComplexTypeXml();
				AppApproval::AlterSoapComplexTypeArray($strComplexTypeArray);
				Remark::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AppApprovalHasRemark::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AppApprovalHasRemark();
			if ((property_exists($objSoapObject, 'AppApprovalIdappApprovalObject')) &&
				($objSoapObject->AppApprovalIdappApprovalObject))
				$objToReturn->AppApprovalIdappApprovalObject = AppApproval::GetObjectFromSoapObject($objSoapObject->AppApprovalIdappApprovalObject);
			if ((property_exists($objSoapObject, 'RemarkIdremarkObject')) &&
				($objSoapObject->RemarkIdremarkObject))
				$objToReturn->RemarkIdremarkObject = Remark::GetObjectFromSoapObject($objSoapObject->RemarkIdremarkObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AppApprovalHasRemark::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objAppApprovalIdappApprovalObject)
				$objObject->objAppApprovalIdappApprovalObject = AppApproval::GetSoapObjectFromObject($objObject->objAppApprovalIdappApprovalObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAppApprovalIdappApproval = null;
			if ($objObject->objRemarkIdremarkObject)
				$objObject->objRemarkIdremarkObject = Remark::GetSoapObjectFromObject($objObject->objRemarkIdremarkObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRemarkIdremark = null;
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
			$iArray['AppApprovalIdappApproval'] = $this->intAppApprovalIdappApproval;
			$iArray['RemarkIdremark'] = $this->intRemarkIdremark;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  array( $this->intAppApprovalIdappApproval,  $this->intRemarkIdremark) ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $AppApprovalIdappApproval
     * @property-read QQNodeAppApproval $AppApprovalIdappApprovalObject
     * @property-read QQNode $RemarkIdremark
     * @property-read QQNodeRemark $RemarkIdremarkObject
     *
     *

     * @property-read QQNodeAppApproval $_PrimaryKeyNode
     **/
	class QQNodeAppApprovalHasRemark extends QQNode {
		protected $strTableName = 'app_approval_has_remark';
		protected $strPrimaryKey = 'app_approval_idapp_approval';
		protected $strClassName = 'AppApprovalHasRemark';
		public function __get($strName) {
			switch ($strName) {
				case 'AppApprovalIdappApproval':
					return new QQNode('app_approval_idapp_approval', 'AppApprovalIdappApproval', 'Integer', $this);
				case 'AppApprovalIdappApprovalObject':
					return new QQNodeAppApproval('app_approval_idapp_approval', 'AppApprovalIdappApprovalObject', 'Integer', $this);
				case 'RemarkIdremark':
					return new QQNode('remark_idremark', 'RemarkIdremark', 'Integer', $this);
				case 'RemarkIdremarkObject':
					return new QQNodeRemark('remark_idremark', 'RemarkIdremarkObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeAppApproval('app_approval_idapp_approval', 'AppApprovalIdappApproval', 'Integer', $this);
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
     * @property-read QQNode $AppApprovalIdappApproval
     * @property-read QQNodeAppApproval $AppApprovalIdappApprovalObject
     * @property-read QQNode $RemarkIdremark
     * @property-read QQNodeRemark $RemarkIdremarkObject
     *
     *

     * @property-read QQNodeAppApproval $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAppApprovalHasRemark extends QQReverseReferenceNode {
		protected $strTableName = 'app_approval_has_remark';
		protected $strPrimaryKey = 'app_approval_idapp_approval';
		protected $strClassName = 'AppApprovalHasRemark';
		public function __get($strName) {
			switch ($strName) {
				case 'AppApprovalIdappApproval':
					return new QQNode('app_approval_idapp_approval', 'AppApprovalIdappApproval', 'integer', $this);
				case 'AppApprovalIdappApprovalObject':
					return new QQNodeAppApproval('app_approval_idapp_approval', 'AppApprovalIdappApprovalObject', 'integer', $this);
				case 'RemarkIdremark':
					return new QQNode('remark_idremark', 'RemarkIdremark', 'integer', $this);
				case 'RemarkIdremarkObject':
					return new QQNodeRemark('remark_idremark', 'RemarkIdremarkObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeAppApproval('app_approval_idapp_approval', 'AppApprovalIdappApproval', 'integer', $this);
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
