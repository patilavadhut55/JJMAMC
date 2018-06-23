<?php
	/**
	 * The abstract ProgramHasTimeslotGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ProgramHasTimeslot subclass which
	 * extends this ProgramHasTimeslotGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ProgramHasTimeslot class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdprogramHasTimeslot the value for intIdprogramHasTimeslot (Read-Only PK)
	 * @property integer $Role the value for intRole 
	 * @property integer $TimeSlot the value for intTimeSlot 
	 * @property integer $Seq the value for intSeq 
	 * @property Role $RoleObject the value for the Role object referenced by intRole 
	 * @property TimeSlot $TimeSlotObject the value for the TimeSlot object referenced by intTimeSlot 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProgramHasTimeslotGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column program_has_timeslot.idprogram_has_timeslot
		 * @var integer intIdprogramHasTimeslot
		 */
		protected $intIdprogramHasTimeslot;
		const IdprogramHasTimeslotDefault = null;


		/**
		 * Protected member variable that maps to the database column program_has_timeslot.role
		 * @var integer intRole
		 */
		protected $intRole;
		const RoleDefault = null;


		/**
		 * Protected member variable that maps to the database column program_has_timeslot.time_slot
		 * @var integer intTimeSlot
		 */
		protected $intTimeSlot;
		const TimeSlotDefault = null;


		/**
		 * Protected member variable that maps to the database column program_has_timeslot.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


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
		 * in the database column program_has_timeslot.role.
		 *
		 * NOTE: Always use the RoleObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoleObject
		 */
		protected $objRoleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column program_has_timeslot.time_slot.
		 *
		 * NOTE: Always use the TimeSlotObject property getter to correctly retrieve this TimeSlot object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TimeSlot objTimeSlotObject
		 */
		protected $objTimeSlotObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdprogramHasTimeslot = ProgramHasTimeslot::IdprogramHasTimeslotDefault;
			$this->intRole = ProgramHasTimeslot::RoleDefault;
			$this->intTimeSlot = ProgramHasTimeslot::TimeSlotDefault;
			$this->intSeq = ProgramHasTimeslot::SeqDefault;
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
		 * Load a ProgramHasTimeslot from PK Info
		 * @param integer $intIdprogramHasTimeslot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot
		 */
		public static function Load($intIdprogramHasTimeslot, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'ProgramHasTimeslot', $intIdprogramHasTimeslot);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = ProgramHasTimeslot::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ProgramHasTimeslot()->IdprogramHasTimeslot, $intIdprogramHasTimeslot)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all ProgramHasTimeslots
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call ProgramHasTimeslot::QueryArray to perform the LoadAll query
			try {
				return ProgramHasTimeslot::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ProgramHasTimeslots
		 * @return int
		 */
		public static function CountAll() {
			// Call ProgramHasTimeslot::QueryCount to perform the CountAll query
			return ProgramHasTimeslot::QueryCount(QQ::All());
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
			$objDatabase = ProgramHasTimeslot::GetDatabase();

			// Create/Build out the QueryBuilder object with ProgramHasTimeslot-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'program_has_timeslot');

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
				ProgramHasTimeslot::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('program_has_timeslot');

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
		 * Static Qcubed Query method to query for a single ProgramHasTimeslot object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ProgramHasTimeslot the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ProgramHasTimeslot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new ProgramHasTimeslot object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ProgramHasTimeslot::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ProgramHasTimeslot::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of ProgramHasTimeslot objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ProgramHasTimeslot[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ProgramHasTimeslot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ProgramHasTimeslot::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = ProgramHasTimeslot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of ProgramHasTimeslot objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ProgramHasTimeslot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ProgramHasTimeslot::GetDatabase();

			$strQuery = ProgramHasTimeslot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/programhastimeslot', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = ProgramHasTimeslot::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ProgramHasTimeslot
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'program_has_timeslot';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idprogram_has_timeslot', $strAliasPrefix . 'idprogram_has_timeslot');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idprogram_has_timeslot', $strAliasPrefix . 'idprogram_has_timeslot');
			    $objBuilder->AddSelectItem($strTableName, 'role', $strAliasPrefix . 'role');
			    $objBuilder->AddSelectItem($strTableName, 'time_slot', $strAliasPrefix . 'time_slot');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ProgramHasTimeslot from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ProgramHasTimeslot::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ProgramHasTimeslot
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the ProgramHasTimeslot object
			$objToReturn = new ProgramHasTimeslot();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idprogram_has_timeslot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdprogramHasTimeslot = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'role';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'time_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTimeSlot = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdprogramHasTimeslot != $objPreviousItem->IdprogramHasTimeslot) {
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
				$strAliasPrefix = 'program_has_timeslot__';

			// Check for RoleObject Early Binding
			$strAlias = $strAliasPrefix . 'role__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoleObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TimeSlotObject Early Binding
			$strAlias = $strAliasPrefix . 'time_slot__idtime_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTimeSlotObject = TimeSlot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'time_slot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of ProgramHasTimeslots from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ProgramHasTimeslot[]
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
					$objItem = ProgramHasTimeslot::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ProgramHasTimeslot::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single ProgramHasTimeslot object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ProgramHasTimeslot next row resulting from the query
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
			return ProgramHasTimeslot::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single ProgramHasTimeslot object,
		 * by IdprogramHasTimeslot Index(es)
		 * @param integer $intIdprogramHasTimeslot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot
		*/
		public static function LoadByIdprogramHasTimeslot($intIdprogramHasTimeslot, $objOptionalClauses = null) {
			return ProgramHasTimeslot::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ProgramHasTimeslot()->IdprogramHasTimeslot, $intIdprogramHasTimeslot)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of ProgramHasTimeslot objects,
		 * by Role Index(es)
		 * @param integer $intRole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot[]
		*/
		public static function LoadArrayByRole($intRole, $objOptionalClauses = null) {
			// Call ProgramHasTimeslot::QueryArray to perform the LoadArrayByRole query
			try {
				return ProgramHasTimeslot::QueryArray(
					QQ::Equal(QQN::ProgramHasTimeslot()->Role, $intRole),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ProgramHasTimeslots
		 * by Role Index(es)
		 * @param integer $intRole
		 * @return int
		*/
		public static function CountByRole($intRole) {
			// Call ProgramHasTimeslot::QueryCount to perform the CountByRole query
			return ProgramHasTimeslot::QueryCount(
				QQ::Equal(QQN::ProgramHasTimeslot()->Role, $intRole)
			);
		}

		/**
		 * Load an array of ProgramHasTimeslot objects,
		 * by TimeSlot Index(es)
		 * @param integer $intTimeSlot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot[]
		*/
		public static function LoadArrayByTimeSlot($intTimeSlot, $objOptionalClauses = null) {
			// Call ProgramHasTimeslot::QueryArray to perform the LoadArrayByTimeSlot query
			try {
				return ProgramHasTimeslot::QueryArray(
					QQ::Equal(QQN::ProgramHasTimeslot()->TimeSlot, $intTimeSlot),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ProgramHasTimeslots
		 * by TimeSlot Index(es)
		 * @param integer $intTimeSlot
		 * @return int
		*/
		public static function CountByTimeSlot($intTimeSlot) {
			// Call ProgramHasTimeslot::QueryCount to perform the CountByTimeSlot query
			return ProgramHasTimeslot::QueryCount(
				QQ::Equal(QQN::ProgramHasTimeslot()->TimeSlot, $intTimeSlot)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this ProgramHasTimeslot
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ProgramHasTimeslot::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `program_has_timeslot` (
							`role`,
							`time_slot`,
							`seq`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intRole) . ',
							' . $objDatabase->SqlVariable($this->intTimeSlot) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdprogramHasTimeslot = $objDatabase->InsertId('program_has_timeslot', 'idprogram_has_timeslot');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`program_has_timeslot`
						SET
							`role` = ' . $objDatabase->SqlVariable($this->intRole) . ',
							`time_slot` = ' . $objDatabase->SqlVariable($this->intTimeSlot) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . '
						WHERE
							`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($this->intIdprogramHasTimeslot) . '
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
		 * Delete this ProgramHasTimeslot
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ProgramHasTimeslot with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ProgramHasTimeslot::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`program_has_timeslot`
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($this->intIdprogramHasTimeslot) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this ProgramHasTimeslot ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'ProgramHasTimeslot', $this->intIdprogramHasTimeslot);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all ProgramHasTimeslots
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ProgramHasTimeslot::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`program_has_timeslot`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate program_has_timeslot table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ProgramHasTimeslot::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `program_has_timeslot`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this ProgramHasTimeslot from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ProgramHasTimeslot object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = ProgramHasTimeslot::Load($this->intIdprogramHasTimeslot);

			// Update $this's local variables to match
			$this->Role = $objReloaded->Role;
			$this->TimeSlot = $objReloaded->TimeSlot;
			$this->intSeq = $objReloaded->intSeq;
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
				case 'IdprogramHasTimeslot':
					/**
					 * Gets the value for intIdprogramHasTimeslot (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdprogramHasTimeslot;

				case 'Role':
					/**
					 * Gets the value for intRole 
					 * @return integer
					 */
					return $this->intRole;

				case 'TimeSlot':
					/**
					 * Gets the value for intTimeSlot 
					 * @return integer
					 */
					return $this->intTimeSlot;

				case 'Seq':
					/**
					 * Gets the value for intSeq 
					 * @return integer
					 */
					return $this->intSeq;


				///////////////////
				// Member Objects
				///////////////////
				case 'RoleObject':
					/**
					 * Gets the value for the Role object referenced by intRole 
					 * @return Role
					 */
					try {
						if ((!$this->objRoleObject) && (!is_null($this->intRole)))
							$this->objRoleObject = Role::Load($this->intRole);
						return $this->objRoleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TimeSlotObject':
					/**
					 * Gets the value for the TimeSlot object referenced by intTimeSlot 
					 * @return TimeSlot
					 */
					try {
						if ((!$this->objTimeSlotObject) && (!is_null($this->intTimeSlot)))
							$this->objTimeSlotObject = TimeSlot::Load($this->intTimeSlot);
						return $this->objTimeSlotObject;
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
				case 'Role':
					/**
					 * Sets the value for intRole 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRoleObject = null;
						return ($this->intRole = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TimeSlot':
					/**
					 * Sets the value for intTimeSlot 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTimeSlotObject = null;
						return ($this->intTimeSlot = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Seq':
					/**
					 * Sets the value for intSeq 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSeq = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'RoleObject':
					/**
					 * Sets the value for the Role object referenced by intRole 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRole = null;
						$this->objRoleObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Role object
						try {
							$mixValue = QType::Cast($mixValue, 'Role');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Role object
						if (is_null($mixValue->Idrole))
							throw new QCallerException('Unable to set an unsaved RoleObject for this ProgramHasTimeslot');

						// Update Local Member Variables
						$this->objRoleObject = $mixValue;
						$this->intRole = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TimeSlotObject':
					/**
					 * Sets the value for the TimeSlot object referenced by intTimeSlot 
					 * @param TimeSlot $mixValue
					 * @return TimeSlot
					 */
					if (is_null($mixValue)) {
						$this->intTimeSlot = null;
						$this->objTimeSlotObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a TimeSlot object
						try {
							$mixValue = QType::Cast($mixValue, 'TimeSlot');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED TimeSlot object
						if (is_null($mixValue->IdtimeSlot))
							throw new QCallerException('Unable to set an unsaved TimeSlotObject for this ProgramHasTimeslot');

						// Update Local Member Variables
						$this->objTimeSlotObject = $mixValue;
						$this->intTimeSlot = $mixValue->IdtimeSlot;

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
			return "program_has_timeslot";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[ProgramHasTimeslot::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="ProgramHasTimeslot"><sequence>';
			$strToReturn .= '<element name="IdprogramHasTimeslot" type="xsd:int"/>';
			$strToReturn .= '<element name="RoleObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="TimeSlotObject" type="xsd1:TimeSlot"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ProgramHasTimeslot', $strComplexTypeArray)) {
				$strComplexTypeArray['ProgramHasTimeslot'] = ProgramHasTimeslot::GetSoapComplexTypeXml();
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				TimeSlot::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ProgramHasTimeslot::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ProgramHasTimeslot();
			if (property_exists($objSoapObject, 'IdprogramHasTimeslot'))
				$objToReturn->intIdprogramHasTimeslot = $objSoapObject->IdprogramHasTimeslot;
			if ((property_exists($objSoapObject, 'RoleObject')) &&
				($objSoapObject->RoleObject))
				$objToReturn->RoleObject = Role::GetObjectFromSoapObject($objSoapObject->RoleObject);
			if ((property_exists($objSoapObject, 'TimeSlotObject')) &&
				($objSoapObject->TimeSlotObject))
				$objToReturn->TimeSlotObject = TimeSlot::GetObjectFromSoapObject($objSoapObject->TimeSlotObject);
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ProgramHasTimeslot::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objRoleObject)
				$objObject->objRoleObject = Role::GetSoapObjectFromObject($objObject->objRoleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRole = null;
			if ($objObject->objTimeSlotObject)
				$objObject->objTimeSlotObject = TimeSlot::GetSoapObjectFromObject($objObject->objTimeSlotObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTimeSlot = null;
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
			$iArray['IdprogramHasTimeslot'] = $this->intIdprogramHasTimeslot;
			$iArray['Role'] = $this->intRole;
			$iArray['TimeSlot'] = $this->intTimeSlot;
			$iArray['Seq'] = $this->intSeq;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdprogramHasTimeslot ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdprogramHasTimeslot
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     * @property-read QQNode $TimeSlot
     * @property-read QQNodeTimeSlot $TimeSlotObject
     * @property-read QQNode $Seq
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeProgramHasTimeslot extends QQNode {
		protected $strTableName = 'program_has_timeslot';
		protected $strPrimaryKey = 'idprogram_has_timeslot';
		protected $strClassName = 'ProgramHasTimeslot';
		public function __get($strName) {
			switch ($strName) {
				case 'IdprogramHasTimeslot':
					return new QQNode('idprogram_has_timeslot', 'IdprogramHasTimeslot', 'Integer', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'Integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'Integer', $this);
				case 'TimeSlot':
					return new QQNode('time_slot', 'TimeSlot', 'Integer', $this);
				case 'TimeSlotObject':
					return new QQNodeTimeSlot('time_slot', 'TimeSlotObject', 'Integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idprogram_has_timeslot', 'IdprogramHasTimeslot', 'Integer', $this);
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
     * @property-read QQNode $IdprogramHasTimeslot
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     * @property-read QQNode $TimeSlot
     * @property-read QQNodeTimeSlot $TimeSlotObject
     * @property-read QQNode $Seq
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProgramHasTimeslot extends QQReverseReferenceNode {
		protected $strTableName = 'program_has_timeslot';
		protected $strPrimaryKey = 'idprogram_has_timeslot';
		protected $strClassName = 'ProgramHasTimeslot';
		public function __get($strName) {
			switch ($strName) {
				case 'IdprogramHasTimeslot':
					return new QQNode('idprogram_has_timeslot', 'IdprogramHasTimeslot', 'integer', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'integer', $this);
				case 'TimeSlot':
					return new QQNode('time_slot', 'TimeSlot', 'integer', $this);
				case 'TimeSlotObject':
					return new QQNodeTimeSlot('time_slot', 'TimeSlotObject', 'integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idprogram_has_timeslot', 'IdprogramHasTimeslot', 'integer', $this);
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
