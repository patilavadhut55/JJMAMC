<?php
	/**
	 * The abstract StaffAttendenceGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the StaffAttendence subclass which
	 * extends this StaffAttendenceGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the StaffAttendence class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdstaffAttendence the value for intIdstaffAttendence (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate 
	 * @property QDateTime $InTime the value for dttInTime 
	 * @property QDateTime $OutTime the value for dttOutTime 
	 * @property integer $Staff the value for intStaff 
	 * @property boolean $Present the value for blnPresent 
	 * @property Login $StaffObject the value for the Login object referenced by intStaff 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class StaffAttendenceGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column staff_attendence.idstaff_attendence
		 * @var integer intIdstaffAttendence
		 */
		protected $intIdstaffAttendence;
		const IdstaffAttendenceDefault = null;


		/**
		 * Protected member variable that maps to the database column staff_attendence.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column staff_attendence.in_time
		 * @var QDateTime dttInTime
		 */
		protected $dttInTime;
		const InTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column staff_attendence.out_time
		 * @var QDateTime dttOutTime
		 */
		protected $dttOutTime;
		const OutTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column staff_attendence.staff
		 * @var integer intStaff
		 */
		protected $intStaff;
		const StaffDefault = null;


		/**
		 * Protected member variable that maps to the database column staff_attendence.present
		 * @var boolean blnPresent
		 */
		protected $blnPresent;
		const PresentDefault = null;


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
		 * in the database column staff_attendence.staff.
		 *
		 * NOTE: Always use the StaffObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objStaffObject
		 */
		protected $objStaffObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdstaffAttendence = StaffAttendence::IdstaffAttendenceDefault;
			$this->dttDate = (StaffAttendence::DateDefault === null)?null:new QDateTime(StaffAttendence::DateDefault);
			$this->dttInTime = (StaffAttendence::InTimeDefault === null)?null:new QDateTime(StaffAttendence::InTimeDefault);
			$this->dttOutTime = (StaffAttendence::OutTimeDefault === null)?null:new QDateTime(StaffAttendence::OutTimeDefault);
			$this->intStaff = StaffAttendence::StaffDefault;
			$this->blnPresent = StaffAttendence::PresentDefault;
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
		 * Load a StaffAttendence from PK Info
		 * @param integer $intIdstaffAttendence
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StaffAttendence
		 */
		public static function Load($intIdstaffAttendence, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'StaffAttendence', $intIdstaffAttendence);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = StaffAttendence::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StaffAttendence()->IdstaffAttendence, $intIdstaffAttendence)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all StaffAttendences
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StaffAttendence[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call StaffAttendence::QueryArray to perform the LoadAll query
			try {
				return StaffAttendence::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all StaffAttendences
		 * @return int
		 */
		public static function CountAll() {
			// Call StaffAttendence::QueryCount to perform the CountAll query
			return StaffAttendence::QueryCount(QQ::All());
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
			$objDatabase = StaffAttendence::GetDatabase();

			// Create/Build out the QueryBuilder object with StaffAttendence-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'staff_attendence');

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
				StaffAttendence::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('staff_attendence');

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
		 * Static Qcubed Query method to query for a single StaffAttendence object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return StaffAttendence the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StaffAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new StaffAttendence object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = StaffAttendence::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return StaffAttendence::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of StaffAttendence objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return StaffAttendence[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StaffAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return StaffAttendence::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = StaffAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of StaffAttendence objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StaffAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = StaffAttendence::GetDatabase();

			$strQuery = StaffAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/staffattendence', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = StaffAttendence::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this StaffAttendence
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'staff_attendence';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idstaff_attendence', $strAliasPrefix . 'idstaff_attendence');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idstaff_attendence', $strAliasPrefix . 'idstaff_attendence');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'in_time', $strAliasPrefix . 'in_time');
			    $objBuilder->AddSelectItem($strTableName, 'out_time', $strAliasPrefix . 'out_time');
			    $objBuilder->AddSelectItem($strTableName, 'staff', $strAliasPrefix . 'staff');
			    $objBuilder->AddSelectItem($strTableName, 'present', $strAliasPrefix . 'present');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a StaffAttendence from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this StaffAttendence::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return StaffAttendence
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the StaffAttendence object
			$objToReturn = new StaffAttendence();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idstaff_attendence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdstaffAttendence = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'in_time';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttInTime = $objDbRow->GetColumn($strAliasName, 'Time');
			$strAlias = $strAliasPrefix . 'out_time';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttOutTime = $objDbRow->GetColumn($strAliasName, 'Time');
			$strAlias = $strAliasPrefix . 'staff';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStaff = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'present';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnPresent = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdstaffAttendence != $objPreviousItem->IdstaffAttendence) {
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
				$strAliasPrefix = 'staff_attendence__';

			// Check for StaffObject Early Binding
			$strAlias = $strAliasPrefix . 'staff__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStaffObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of StaffAttendences from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return StaffAttendence[]
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
					$objItem = StaffAttendence::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = StaffAttendence::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single StaffAttendence object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return StaffAttendence next row resulting from the query
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
			return StaffAttendence::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single StaffAttendence object,
		 * by IdstaffAttendence Index(es)
		 * @param integer $intIdstaffAttendence
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StaffAttendence
		*/
		public static function LoadByIdstaffAttendence($intIdstaffAttendence, $objOptionalClauses = null) {
			return StaffAttendence::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StaffAttendence()->IdstaffAttendence, $intIdstaffAttendence)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of StaffAttendence objects,
		 * by Staff Index(es)
		 * @param integer $intStaff
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StaffAttendence[]
		*/
		public static function LoadArrayByStaff($intStaff, $objOptionalClauses = null) {
			// Call StaffAttendence::QueryArray to perform the LoadArrayByStaff query
			try {
				return StaffAttendence::QueryArray(
					QQ::Equal(QQN::StaffAttendence()->Staff, $intStaff),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count StaffAttendences
		 * by Staff Index(es)
		 * @param integer $intStaff
		 * @return int
		*/
		public static function CountByStaff($intStaff) {
			// Call StaffAttendence::QueryCount to perform the CountByStaff query
			return StaffAttendence::QueryCount(
				QQ::Equal(QQN::StaffAttendence()->Staff, $intStaff)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this StaffAttendence
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = StaffAttendence::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `staff_attendence` (
							`date`,
							`in_time`,
							`out_time`,
							`staff`,
							`present`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->dttInTime) . ',
							' . $objDatabase->SqlVariable($this->dttOutTime) . ',
							' . $objDatabase->SqlVariable($this->intStaff) . ',
							' . $objDatabase->SqlVariable($this->blnPresent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdstaffAttendence = $objDatabase->InsertId('staff_attendence', 'idstaff_attendence');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`staff_attendence`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`in_time` = ' . $objDatabase->SqlVariable($this->dttInTime) . ',
							`out_time` = ' . $objDatabase->SqlVariable($this->dttOutTime) . ',
							`staff` = ' . $objDatabase->SqlVariable($this->intStaff) . ',
							`present` = ' . $objDatabase->SqlVariable($this->blnPresent) . '
						WHERE
							`idstaff_attendence` = ' . $objDatabase->SqlVariable($this->intIdstaffAttendence) . '
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
		 * Delete this StaffAttendence
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdstaffAttendence)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this StaffAttendence with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = StaffAttendence::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`staff_attendence`
				WHERE
					`idstaff_attendence` = ' . $objDatabase->SqlVariable($this->intIdstaffAttendence) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this StaffAttendence ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'StaffAttendence', $this->intIdstaffAttendence);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all StaffAttendences
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = StaffAttendence::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`staff_attendence`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate staff_attendence table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = StaffAttendence::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `staff_attendence`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this StaffAttendence from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved StaffAttendence object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = StaffAttendence::Load($this->intIdstaffAttendence);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->dttInTime = $objReloaded->dttInTime;
			$this->dttOutTime = $objReloaded->dttOutTime;
			$this->Staff = $objReloaded->Staff;
			$this->blnPresent = $objReloaded->blnPresent;
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
				case 'IdstaffAttendence':
					/**
					 * Gets the value for intIdstaffAttendence (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdstaffAttendence;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'InTime':
					/**
					 * Gets the value for dttInTime 
					 * @return QDateTime
					 */
					return $this->dttInTime;

				case 'OutTime':
					/**
					 * Gets the value for dttOutTime 
					 * @return QDateTime
					 */
					return $this->dttOutTime;

				case 'Staff':
					/**
					 * Gets the value for intStaff 
					 * @return integer
					 */
					return $this->intStaff;

				case 'Present':
					/**
					 * Gets the value for blnPresent 
					 * @return boolean
					 */
					return $this->blnPresent;


				///////////////////
				// Member Objects
				///////////////////
				case 'StaffObject':
					/**
					 * Gets the value for the Login object referenced by intStaff 
					 * @return Login
					 */
					try {
						if ((!$this->objStaffObject) && (!is_null($this->intStaff)))
							$this->objStaffObject = Login::Load($this->intStaff);
						return $this->objStaffObject;
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
					 * Sets the value for dttDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InTime':
					/**
					 * Sets the value for dttInTime 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttInTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OutTime':
					/**
					 * Sets the value for dttOutTime 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttOutTime = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Staff':
					/**
					 * Sets the value for intStaff 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStaffObject = null;
						return ($this->intStaff = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Present':
					/**
					 * Sets the value for blnPresent 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnPresent = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'StaffObject':
					/**
					 * Sets the value for the Login object referenced by intStaff 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intStaff = null;
						$this->objStaffObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Login object
						try {
							$mixValue = QType::Cast($mixValue, 'Login');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Login object
						if (is_null($mixValue->Idlogin))
							throw new QCallerException('Unable to set an unsaved StaffObject for this StaffAttendence');

						// Update Local Member Variables
						$this->objStaffObject = $mixValue;
						$this->intStaff = $mixValue->Idlogin;

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
			return "staff_attendence";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[StaffAttendence::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="StaffAttendence"><sequence>';
			$strToReturn .= '<element name="IdstaffAttendence" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="InTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="OutTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="StaffObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Present" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('StaffAttendence', $strComplexTypeArray)) {
				$strComplexTypeArray['StaffAttendence'] = StaffAttendence::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, StaffAttendence::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new StaffAttendence();
			if (property_exists($objSoapObject, 'IdstaffAttendence'))
				$objToReturn->intIdstaffAttendence = $objSoapObject->IdstaffAttendence;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'InTime'))
				$objToReturn->dttInTime = new QDateTime($objSoapObject->InTime);
			if (property_exists($objSoapObject, 'OutTime'))
				$objToReturn->dttOutTime = new QDateTime($objSoapObject->OutTime);
			if ((property_exists($objSoapObject, 'StaffObject')) &&
				($objSoapObject->StaffObject))
				$objToReturn->StaffObject = Login::GetObjectFromSoapObject($objSoapObject->StaffObject);
			if (property_exists($objSoapObject, 'Present'))
				$objToReturn->blnPresent = $objSoapObject->Present;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, StaffAttendence::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttInTime)
				$objObject->dttInTime = $objObject->dttInTime->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttOutTime)
				$objObject->dttOutTime = $objObject->dttOutTime->qFormat(QDateTime::FormatSoap);
			if ($objObject->objStaffObject)
				$objObject->objStaffObject = Login::GetSoapObjectFromObject($objObject->objStaffObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStaff = null;
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
			$iArray['IdstaffAttendence'] = $this->intIdstaffAttendence;
			$iArray['Date'] = $this->dttDate;
			$iArray['InTime'] = $this->dttInTime;
			$iArray['OutTime'] = $this->dttOutTime;
			$iArray['Staff'] = $this->intStaff;
			$iArray['Present'] = $this->blnPresent;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdstaffAttendence ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdstaffAttendence
     * @property-read QQNode $Date
     * @property-read QQNode $InTime
     * @property-read QQNode $OutTime
     * @property-read QQNode $Staff
     * @property-read QQNodeLogin $StaffObject
     * @property-read QQNode $Present
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeStaffAttendence extends QQNode {
		protected $strTableName = 'staff_attendence';
		protected $strPrimaryKey = 'idstaff_attendence';
		protected $strClassName = 'StaffAttendence';
		public function __get($strName) {
			switch ($strName) {
				case 'IdstaffAttendence':
					return new QQNode('idstaff_attendence', 'IdstaffAttendence', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'Date', $this);
				case 'InTime':
					return new QQNode('in_time', 'InTime', 'Time', $this);
				case 'OutTime':
					return new QQNode('out_time', 'OutTime', 'Time', $this);
				case 'Staff':
					return new QQNode('staff', 'Staff', 'Integer', $this);
				case 'StaffObject':
					return new QQNodeLogin('staff', 'StaffObject', 'Integer', $this);
				case 'Present':
					return new QQNode('present', 'Present', 'Bit', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idstaff_attendence', 'IdstaffAttendence', 'Integer', $this);
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
     * @property-read QQNode $IdstaffAttendence
     * @property-read QQNode $Date
     * @property-read QQNode $InTime
     * @property-read QQNode $OutTime
     * @property-read QQNode $Staff
     * @property-read QQNodeLogin $StaffObject
     * @property-read QQNode $Present
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeStaffAttendence extends QQReverseReferenceNode {
		protected $strTableName = 'staff_attendence';
		protected $strPrimaryKey = 'idstaff_attendence';
		protected $strClassName = 'StaffAttendence';
		public function __get($strName) {
			switch ($strName) {
				case 'IdstaffAttendence':
					return new QQNode('idstaff_attendence', 'IdstaffAttendence', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'InTime':
					return new QQNode('in_time', 'InTime', 'QDateTime', $this);
				case 'OutTime':
					return new QQNode('out_time', 'OutTime', 'QDateTime', $this);
				case 'Staff':
					return new QQNode('staff', 'Staff', 'integer', $this);
				case 'StaffObject':
					return new QQNodeLogin('staff', 'StaffObject', 'integer', $this);
				case 'Present':
					return new QQNode('present', 'Present', 'boolean', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idstaff_attendence', 'IdstaffAttendence', 'integer', $this);
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
