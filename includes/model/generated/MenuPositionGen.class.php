<?php
	/**
	 * The abstract MenuPositionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the MenuPosition subclass which
	 * extends this MenuPositionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the MenuPosition class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdmenuPosition the value for intIdmenuPosition (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $ShortName the value for strShortName 
	 * @property integer $Counter the value for intCounter 
	 * @property-read Menu $_MenuAsPosition the value for the private _objMenuAsPosition (Read-Only) if set due to an expansion on the menu.position reverse relationship
	 * @property-read Menu[] $_MenuAsPositionArray the value for the private _objMenuAsPositionArray (Read-Only) if set due to an ExpandAsArray on the menu.position reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MenuPositionGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column menu_position.idmenu_position
		 * @var integer intIdmenuPosition
		 */
		protected $intIdmenuPosition;
		const IdmenuPositionDefault = null;


		/**
		 * Protected member variable that maps to the database column menu_position.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column menu_position.short_name
		 * @var string strShortName
		 */
		protected $strShortName;
		const ShortNameMaxLength = 45;
		const ShortNameDefault = null;


		/**
		 * Protected member variable that maps to the database column menu_position.counter
		 * @var integer intCounter
		 */
		protected $intCounter;
		const CounterDefault = null;


		/**
		 * Private member variable that stores a reference to a single MenuAsPosition object
		 * (of type Menu), if this MenuPosition object was restored with
		 * an expansion on the menu association table.
		 * @var Menu _objMenuAsPosition;
		 */
		private $_objMenuAsPosition;

		/**
		 * Private member variable that stores a reference to an array of MenuAsPosition objects
		 * (of type Menu[]), if this MenuPosition object was restored with
		 * an ExpandAsArray on the menu association table.
		 * @var Menu[] _objMenuAsPositionArray;
		 */
		private $_objMenuAsPositionArray = null;

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
			$this->intIdmenuPosition = MenuPosition::IdmenuPositionDefault;
			$this->strName = MenuPosition::NameDefault;
			$this->strShortName = MenuPosition::ShortNameDefault;
			$this->intCounter = MenuPosition::CounterDefault;
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
		 * Load a MenuPosition from PK Info
		 * @param integer $intIdmenuPosition
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MenuPosition
		 */
		public static function Load($intIdmenuPosition, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MenuPosition', $intIdmenuPosition);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = MenuPosition::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MenuPosition()->IdmenuPosition, $intIdmenuPosition)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all MenuPositions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MenuPosition[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call MenuPosition::QueryArray to perform the LoadAll query
			try {
				return MenuPosition::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all MenuPositions
		 * @return int
		 */
		public static function CountAll() {
			// Call MenuPosition::QueryCount to perform the CountAll query
			return MenuPosition::QueryCount(QQ::All());
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
			$objDatabase = MenuPosition::GetDatabase();

			// Create/Build out the QueryBuilder object with MenuPosition-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'menu_position');

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
				MenuPosition::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('menu_position');

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
		 * Static Qcubed Query method to query for a single MenuPosition object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MenuPosition the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MenuPosition::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new MenuPosition object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = MenuPosition::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return MenuPosition::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of MenuPosition objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MenuPosition[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MenuPosition::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return MenuPosition::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = MenuPosition::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of MenuPosition objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MenuPosition::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = MenuPosition::GetDatabase();

			$strQuery = MenuPosition::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/menuposition', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = MenuPosition::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this MenuPosition
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'menu_position';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idmenu_position', $strAliasPrefix . 'idmenu_position');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idmenu_position', $strAliasPrefix . 'idmenu_position');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'short_name', $strAliasPrefix . 'short_name');
			    $objBuilder->AddSelectItem($strTableName, 'counter', $strAliasPrefix . 'counter');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a MenuPosition from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this MenuPosition::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return MenuPosition
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idmenu_position';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdmenuPosition == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'menu_position__';


						// Expanding reverse references: MenuAsPosition
						$strAlias = $strAliasPrefix . 'menuasposition__idmenu';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMenuAsPositionArray)
								$objPreviousItem->_objMenuAsPositionArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMenuAsPositionArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMenuAsPositionArray;
								$objChildItem = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasposition__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMenuAsPositionArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMenuAsPositionArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasposition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'menu_position__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the MenuPosition object
			$objToReturn = new MenuPosition();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idmenu_position';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdmenuPosition = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'short_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'counter';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCounter = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdmenuPosition != $objPreviousItem->IdmenuPosition) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objMenuAsPositionArray);
					$cnt = count($objToReturn->_objMenuAsPositionArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMenuAsPositionArray, $objToReturn->_objMenuAsPositionArray)) {
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
				$strAliasPrefix = 'menu_position__';




			// Check for MenuAsPosition Virtual Binding
			$strAlias = $strAliasPrefix . 'menuasposition__idmenu';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMenuAsPositionArray)
				$objToReturn->_objMenuAsPositionArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMenuAsPositionArray[] = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasposition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMenuAsPosition = Menu::InstantiateDbRow($objDbRow, $strAliasPrefix . 'menuasposition__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of MenuPositions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return MenuPosition[]
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
					$objItem = MenuPosition::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = MenuPosition::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single MenuPosition object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return MenuPosition next row resulting from the query
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
			return MenuPosition::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single MenuPosition object,
		 * by IdmenuPosition Index(es)
		 * @param integer $intIdmenuPosition
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MenuPosition
		*/
		public static function LoadByIdmenuPosition($intIdmenuPosition, $objOptionalClauses = null) {
			return MenuPosition::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MenuPosition()->IdmenuPosition, $intIdmenuPosition)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single MenuPosition object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MenuPosition
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return MenuPosition::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MenuPosition()->Name, $strName)
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
		 * Save this MenuPosition
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `menu_position` (
							`name`,
							`short_name`,
							`counter`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strShortName) . ',
							' . $objDatabase->SqlVariable($this->intCounter) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdmenuPosition = $objDatabase->InsertId('menu_position', 'idmenu_position');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`menu_position`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`short_name` = ' . $objDatabase->SqlVariable($this->strShortName) . ',
							`counter` = ' . $objDatabase->SqlVariable($this->intCounter) . '
						WHERE
							`idmenu_position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '
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
		 * Delete this MenuPosition
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdmenuPosition)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this MenuPosition with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu_position`
				WHERE
					`idmenu_position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this MenuPosition ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MenuPosition', $this->intIdmenuPosition);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all MenuPositions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu_position`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate menu_position table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `menu_position`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this MenuPosition from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved MenuPosition object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = MenuPosition::Load($this->intIdmenuPosition);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strShortName = $objReloaded->strShortName;
			$this->intCounter = $objReloaded->intCounter;
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
				case 'IdmenuPosition':
					/**
					 * Gets the value for intIdmenuPosition (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdmenuPosition;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'ShortName':
					/**
					 * Gets the value for strShortName 
					 * @return string
					 */
					return $this->strShortName;

				case 'Counter':
					/**
					 * Gets the value for intCounter 
					 * @return integer
					 */
					return $this->intCounter;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_MenuAsPosition':
					/**
					 * Gets the value for the private _objMenuAsPosition (Read-Only)
					 * if set due to an expansion on the menu.position reverse relationship
					 * @return Menu
					 */
					return $this->_objMenuAsPosition;

				case '_MenuAsPositionArray':
					/**
					 * Gets the value for the private _objMenuAsPositionArray (Read-Only)
					 * if set due to an ExpandAsArray on the menu.position reverse relationship
					 * @return Menu[]
					 */
					return $this->_objMenuAsPositionArray;


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

				case 'ShortName':
					/**
					 * Sets the value for strShortName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShortName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Counter':
					/**
					 * Sets the value for intCounter 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCounter = QType::Cast($mixValue, QType::Integer));
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



		// Related Objects' Methods for MenuAsPosition
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MenusAsPosition as an array of Menu objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Menu[]
		*/
		public function GetMenuAsPositionArray($objOptionalClauses = null) {
			if ((is_null($this->intIdmenuPosition)))
				return array();

			try {
				return Menu::LoadArrayByPosition($this->intIdmenuPosition, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MenusAsPosition
		 * @return int
		*/
		public function CountMenusAsPosition() {
			if ((is_null($this->intIdmenuPosition)))
				return 0;

			return Menu::CountByPosition($this->intIdmenuPosition);
		}

		/**
		 * Associates a MenuAsPosition
		 * @param Menu $objMenu
		 * @return void
		*/
		public function AssociateMenuAsPosition(Menu $objMenu) {
			if ((is_null($this->intIdmenuPosition)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuAsPosition on this unsaved MenuPosition.');
			if ((is_null($objMenu->Idmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMenuAsPosition on this MenuPosition with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($objMenu->Idmenu) . '
			');
		}

		/**
		 * Unassociates a MenuAsPosition
		 * @param Menu $objMenu
		 * @return void
		*/
		public function UnassociateMenuAsPosition(Menu $objMenu) {
			if ((is_null($this->intIdmenuPosition)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsPosition on this unsaved MenuPosition.');
			if ((is_null($objMenu->Idmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsPosition on this MenuPosition with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`position` = null
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($objMenu->Idmenu) . ' AND
					`position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '
			');
		}

		/**
		 * Unassociates all MenusAsPosition
		 * @return void
		*/
		public function UnassociateAllMenusAsPosition() {
			if ((is_null($this->intIdmenuPosition)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsPosition on this unsaved MenuPosition.');

			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`menu`
				SET
					`position` = null
				WHERE
					`position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '
			');
		}

		/**
		 * Deletes an associated MenuAsPosition
		 * @param Menu $objMenu
		 * @return void
		*/
		public function DeleteAssociatedMenuAsPosition(Menu $objMenu) {
			if ((is_null($this->intIdmenuPosition)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsPosition on this unsaved MenuPosition.');
			if ((is_null($objMenu->Idmenu)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsPosition on this MenuPosition with an unsaved Menu.');

			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`idmenu` = ' . $objDatabase->SqlVariable($objMenu->Idmenu) . ' AND
					`position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '
			');
		}

		/**
		 * Deletes all associated MenusAsPosition
		 * @return void
		*/
		public function DeleteAllMenusAsPosition() {
			if ((is_null($this->intIdmenuPosition)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMenuAsPosition on this unsaved MenuPosition.');

			// Get the Database Object for this Class
			$objDatabase = MenuPosition::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`menu`
				WHERE
					`position` = ' . $objDatabase->SqlVariable($this->intIdmenuPosition) . '
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
			return "menu_position";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[MenuPosition::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="MenuPosition"><sequence>';
			$strToReturn .= '<element name="IdmenuPosition" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="ShortName" type="xsd:string"/>';
			$strToReturn .= '<element name="Counter" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('MenuPosition', $strComplexTypeArray)) {
				$strComplexTypeArray['MenuPosition'] = MenuPosition::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, MenuPosition::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new MenuPosition();
			if (property_exists($objSoapObject, 'IdmenuPosition'))
				$objToReturn->intIdmenuPosition = $objSoapObject->IdmenuPosition;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'ShortName'))
				$objToReturn->strShortName = $objSoapObject->ShortName;
			if (property_exists($objSoapObject, 'Counter'))
				$objToReturn->intCounter = $objSoapObject->Counter;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, MenuPosition::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdmenuPosition'] = $this->intIdmenuPosition;
			$iArray['Name'] = $this->strName;
			$iArray['ShortName'] = $this->strShortName;
			$iArray['Counter'] = $this->intCounter;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdmenuPosition ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdmenuPosition
     * @property-read QQNode $Name
     * @property-read QQNode $ShortName
     * @property-read QQNode $Counter
     *
     *
     * @property-read QQReverseReferenceNodeMenu $MenuAsPosition

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeMenuPosition extends QQNode {
		protected $strTableName = 'menu_position';
		protected $strPrimaryKey = 'idmenu_position';
		protected $strClassName = 'MenuPosition';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmenuPosition':
					return new QQNode('idmenu_position', 'IdmenuPosition', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'VarChar', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'Integer', $this);
				case 'MenuAsPosition':
					return new QQReverseReferenceNodeMenu($this, 'menuasposition', 'reverse_reference', 'position');

				case '_PrimaryKeyNode':
					return new QQNode('idmenu_position', 'IdmenuPosition', 'Integer', $this);
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
     * @property-read QQNode $IdmenuPosition
     * @property-read QQNode $Name
     * @property-read QQNode $ShortName
     * @property-read QQNode $Counter
     *
     *
     * @property-read QQReverseReferenceNodeMenu $MenuAsPosition

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeMenuPosition extends QQReverseReferenceNode {
		protected $strTableName = 'menu_position';
		protected $strPrimaryKey = 'idmenu_position';
		protected $strClassName = 'MenuPosition';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmenuPosition':
					return new QQNode('idmenu_position', 'IdmenuPosition', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'string', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'integer', $this);
				case 'MenuAsPosition':
					return new QQReverseReferenceNodeMenu($this, 'menuasposition', 'reverse_reference', 'position');

				case '_PrimaryKeyNode':
					return new QQNode('idmenu_position', 'IdmenuPosition', 'integer', $this);
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
