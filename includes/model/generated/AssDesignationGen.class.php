<?php
	/**
	 * The abstract AssDesignationGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AssDesignation subclass which
	 * extends this AssDesignationGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AssDesignation class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdassDesignation the value for intIdassDesignation (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property-read AssMember $_AssMemberAsDesignation the value for the private _objAssMemberAsDesignation (Read-Only) if set due to an expansion on the ass_member.designation reverse relationship
	 * @property-read AssMember[] $_AssMemberAsDesignationArray the value for the private _objAssMemberAsDesignationArray (Read-Only) if set due to an ExpandAsArray on the ass_member.designation reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AssDesignationGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column ass_designation.idass_designation
		 * @var integer intIdassDesignation
		 */
		protected $intIdassDesignation;
		const IdassDesignationDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_designation.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single AssMemberAsDesignation object
		 * (of type AssMember), if this AssDesignation object was restored with
		 * an expansion on the ass_member association table.
		 * @var AssMember _objAssMemberAsDesignation;
		 */
		private $_objAssMemberAsDesignation;

		/**
		 * Private member variable that stores a reference to an array of AssMemberAsDesignation objects
		 * (of type AssMember[]), if this AssDesignation object was restored with
		 * an ExpandAsArray on the ass_member association table.
		 * @var AssMember[] _objAssMemberAsDesignationArray;
		 */
		private $_objAssMemberAsDesignationArray = null;

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
			$this->intIdassDesignation = AssDesignation::IdassDesignationDefault;
			$this->strName = AssDesignation::NameDefault;
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
		 * Load a AssDesignation from PK Info
		 * @param integer $intIdassDesignation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssDesignation
		 */
		public static function Load($intIdassDesignation, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AssDesignation', $intIdassDesignation);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AssDesignation::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssDesignation()->IdassDesignation, $intIdassDesignation)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AssDesignations
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssDesignation[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AssDesignation::QueryArray to perform the LoadAll query
			try {
				return AssDesignation::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AssDesignations
		 * @return int
		 */
		public static function CountAll() {
			// Call AssDesignation::QueryCount to perform the CountAll query
			return AssDesignation::QueryCount(QQ::All());
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
			$objDatabase = AssDesignation::GetDatabase();

			// Create/Build out the QueryBuilder object with AssDesignation-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ass_designation');

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
				AssDesignation::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('ass_designation');

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
		 * Static Qcubed Query method to query for a single AssDesignation object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AssDesignation the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssDesignation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AssDesignation object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AssDesignation::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AssDesignation::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AssDesignation objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AssDesignation[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssDesignation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AssDesignation::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AssDesignation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AssDesignation objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssDesignation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AssDesignation::GetDatabase();

			$strQuery = AssDesignation::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/assdesignation', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AssDesignation::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AssDesignation
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ass_designation';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idass_designation', $strAliasPrefix . 'idass_designation');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idass_designation', $strAliasPrefix . 'idass_designation');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AssDesignation from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AssDesignation::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AssDesignation
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idass_designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdassDesignation == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ass_designation__';


						// Expanding reverse references: AssMemberAsDesignation
						$strAlias = $strAliasPrefix . 'assmemberasdesignation__idass_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAssMemberAsDesignationArray)
								$objPreviousItem->_objAssMemberAsDesignationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAssMemberAsDesignationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAssMemberAsDesignationArray;
								$objChildItem = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasdesignation__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAssMemberAsDesignationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAssMemberAsDesignationArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ass_designation__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AssDesignation object
			$objToReturn = new AssDesignation();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idass_designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdassDesignation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdassDesignation != $objPreviousItem->IdassDesignation) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAssMemberAsDesignationArray);
					$cnt = count($objToReturn->_objAssMemberAsDesignationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAssMemberAsDesignationArray, $objToReturn->_objAssMemberAsDesignationArray)) {
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
				$strAliasPrefix = 'ass_designation__';




			// Check for AssMemberAsDesignation Virtual Binding
			$strAlias = $strAliasPrefix . 'assmemberasdesignation__idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAssMemberAsDesignationArray)
				$objToReturn->_objAssMemberAsDesignationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAssMemberAsDesignationArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAssMemberAsDesignation = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasdesignation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AssDesignations from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AssDesignation[]
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
					$objItem = AssDesignation::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AssDesignation::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AssDesignation object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AssDesignation next row resulting from the query
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
			return AssDesignation::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AssDesignation object,
		 * by IdassDesignation Index(es)
		 * @param integer $intIdassDesignation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssDesignation
		*/
		public static function LoadByIdassDesignation($intIdassDesignation, $objOptionalClauses = null) {
			return AssDesignation::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssDesignation()->IdassDesignation, $intIdassDesignation)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single AssDesignation object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssDesignation
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return AssDesignation::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssDesignation()->Name, $strName)
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
		 * Save this AssDesignation
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ass_designation` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdassDesignation = $objDatabase->InsertId('ass_designation', 'idass_designation');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ass_designation`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idass_designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '
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
		 * Delete this AssDesignation
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdassDesignation)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AssDesignation with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_designation`
				WHERE
					`idass_designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AssDesignation ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AssDesignation', $this->intIdassDesignation);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AssDesignations
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_designation`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate ass_designation table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ass_designation`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AssDesignation from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AssDesignation object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AssDesignation::Load($this->intIdassDesignation);

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
				case 'IdassDesignation':
					/**
					 * Gets the value for intIdassDesignation (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdassDesignation;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
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

				case '_AssMemberAsDesignation':
					/**
					 * Gets the value for the private _objAssMemberAsDesignation (Read-Only)
					 * if set due to an expansion on the ass_member.designation reverse relationship
					 * @return AssMember
					 */
					return $this->_objAssMemberAsDesignation;

				case '_AssMemberAsDesignationArray':
					/**
					 * Gets the value for the private _objAssMemberAsDesignationArray (Read-Only)
					 * if set due to an ExpandAsArray on the ass_member.designation reverse relationship
					 * @return AssMember[]
					 */
					return $this->_objAssMemberAsDesignationArray;


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



		// Related Objects' Methods for AssMemberAsDesignation
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AssMembersAsDesignation as an array of AssMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public function GetAssMemberAsDesignationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdassDesignation)))
				return array();

			try {
				return AssMember::LoadArrayByDesignation($this->intIdassDesignation, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AssMembersAsDesignation
		 * @return int
		*/
		public function CountAssMembersAsDesignation() {
			if ((is_null($this->intIdassDesignation)))
				return 0;

			return AssMember::CountByDesignation($this->intIdassDesignation);
		}

		/**
		 * Associates a AssMemberAsDesignation
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function AssociateAssMemberAsDesignation(AssMember $objAssMember) {
			if ((is_null($this->intIdassDesignation)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsDesignation on this unsaved AssDesignation.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsDesignation on this AssDesignation with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . '
			');
		}

		/**
		 * Unassociates a AssMemberAsDesignation
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function UnassociateAssMemberAsDesignation(AssMember $objAssMember) {
			if ((is_null($this->intIdassDesignation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsDesignation on this unsaved AssDesignation.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsDesignation on this AssDesignation with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`designation` = null
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '
			');
		}

		/**
		 * Unassociates all AssMembersAsDesignation
		 * @return void
		*/
		public function UnassociateAllAssMembersAsDesignation() {
			if ((is_null($this->intIdassDesignation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsDesignation on this unsaved AssDesignation.');

			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`designation` = null
				WHERE
					`designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '
			');
		}

		/**
		 * Deletes an associated AssMemberAsDesignation
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function DeleteAssociatedAssMemberAsDesignation(AssMember $objAssMember) {
			if ((is_null($this->intIdassDesignation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsDesignation on this unsaved AssDesignation.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsDesignation on this AssDesignation with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '
			');
		}

		/**
		 * Deletes all associated AssMembersAsDesignation
		 * @return void
		*/
		public function DeleteAllAssMembersAsDesignation() {
			if ((is_null($this->intIdassDesignation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsDesignation on this unsaved AssDesignation.');

			// Get the Database Object for this Class
			$objDatabase = AssDesignation::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`designation` = ' . $objDatabase->SqlVariable($this->intIdassDesignation) . '
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
			return "ass_designation";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AssDesignation::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AssDesignation"><sequence>';
			$strToReturn .= '<element name="IdassDesignation" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AssDesignation', $strComplexTypeArray)) {
				$strComplexTypeArray['AssDesignation'] = AssDesignation::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AssDesignation::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AssDesignation();
			if (property_exists($objSoapObject, 'IdassDesignation'))
				$objToReturn->intIdassDesignation = $objSoapObject->IdassDesignation;
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
				array_push($objArrayToReturn, AssDesignation::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdassDesignation'] = $this->intIdassDesignation;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdassDesignation ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdassDesignation
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsDesignation

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAssDesignation extends QQNode {
		protected $strTableName = 'ass_designation';
		protected $strPrimaryKey = 'idass_designation';
		protected $strClassName = 'AssDesignation';
		public function __get($strName) {
			switch ($strName) {
				case 'IdassDesignation':
					return new QQNode('idass_designation', 'IdassDesignation', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'AssMemberAsDesignation':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasdesignation', 'reverse_reference', 'designation');

				case '_PrimaryKeyNode':
					return new QQNode('idass_designation', 'IdassDesignation', 'Integer', $this);
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
     * @property-read QQNode $IdassDesignation
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsDesignation

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAssDesignation extends QQReverseReferenceNode {
		protected $strTableName = 'ass_designation';
		protected $strPrimaryKey = 'idass_designation';
		protected $strClassName = 'AssDesignation';
		public function __get($strName) {
			switch ($strName) {
				case 'IdassDesignation':
					return new QQNode('idass_designation', 'IdassDesignation', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'AssMemberAsDesignation':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasdesignation', 'reverse_reference', 'designation');

				case '_PrimaryKeyNode':
					return new QQNode('idass_designation', 'IdassDesignation', 'integer', $this);
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
