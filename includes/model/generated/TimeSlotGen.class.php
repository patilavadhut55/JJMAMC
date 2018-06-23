<?php
	/**
	 * The abstract TimeSlotGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TimeSlot subclass which
	 * extends this TimeSlotGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TimeSlot class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdtimeSlot the value for intIdtimeSlot (Read-Only PK)
	 * @property string $Name the value for strName 
	 * @property QDateTime $From the value for dttFrom 
	 * @property QDateTime $To the value for dttTo 
	 * @property string $Note the value for strNote 
	 * @property-read ProgramHasTimeslot $_ProgramHasTimeslot the value for the private _objProgramHasTimeslot (Read-Only) if set due to an expansion on the program_has_timeslot.time_slot reverse relationship
	 * @property-read ProgramHasTimeslot[] $_ProgramHasTimeslotArray the value for the private _objProgramHasTimeslotArray (Read-Only) if set due to an ExpandAsArray on the program_has_timeslot.time_slot reverse relationship
	 * @property-read TeachingPlain $_TeachingPlain the value for the private _objTeachingPlain (Read-Only) if set due to an expansion on the teaching_plain.time_slot reverse relationship
	 * @property-read TeachingPlain[] $_TeachingPlainArray the value for the private _objTeachingPlainArray (Read-Only) if set due to an ExpandAsArray on the teaching_plain.time_slot reverse relationship
	 * @property-read Timetable $_Timetable the value for the private _objTimetable (Read-Only) if set due to an expansion on the timetable.time_slot reverse relationship
	 * @property-read Timetable[] $_TimetableArray the value for the private _objTimetableArray (Read-Only) if set due to an ExpandAsArray on the timetable.time_slot reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TimeSlotGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column time_slot.idtime_slot
		 * @var integer intIdtimeSlot
		 */
		protected $intIdtimeSlot;
		const IdtimeSlotDefault = null;


		/**
		 * Protected member variable that maps to the database column time_slot.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column time_slot.from
		 * @var QDateTime dttFrom
		 */
		protected $dttFrom;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column time_slot.to
		 * @var QDateTime dttTo
		 */
		protected $dttTo;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column time_slot.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


		/**
		 * Private member variable that stores a reference to a single ProgramHasTimeslot object
		 * (of type ProgramHasTimeslot), if this TimeSlot object was restored with
		 * an expansion on the program_has_timeslot association table.
		 * @var ProgramHasTimeslot _objProgramHasTimeslot;
		 */
		private $_objProgramHasTimeslot;

		/**
		 * Private member variable that stores a reference to an array of ProgramHasTimeslot objects
		 * (of type ProgramHasTimeslot[]), if this TimeSlot object was restored with
		 * an ExpandAsArray on the program_has_timeslot association table.
		 * @var ProgramHasTimeslot[] _objProgramHasTimeslotArray;
		 */
		private $_objProgramHasTimeslotArray = null;

		/**
		 * Private member variable that stores a reference to a single TeachingPlain object
		 * (of type TeachingPlain), if this TimeSlot object was restored with
		 * an expansion on the teaching_plain association table.
		 * @var TeachingPlain _objTeachingPlain;
		 */
		private $_objTeachingPlain;

		/**
		 * Private member variable that stores a reference to an array of TeachingPlain objects
		 * (of type TeachingPlain[]), if this TimeSlot object was restored with
		 * an ExpandAsArray on the teaching_plain association table.
		 * @var TeachingPlain[] _objTeachingPlainArray;
		 */
		private $_objTeachingPlainArray = null;

		/**
		 * Private member variable that stores a reference to a single Timetable object
		 * (of type Timetable), if this TimeSlot object was restored with
		 * an expansion on the timetable association table.
		 * @var Timetable _objTimetable;
		 */
		private $_objTimetable;

		/**
		 * Private member variable that stores a reference to an array of Timetable objects
		 * (of type Timetable[]), if this TimeSlot object was restored with
		 * an ExpandAsArray on the timetable association table.
		 * @var Timetable[] _objTimetableArray;
		 */
		private $_objTimetableArray = null;

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
			$this->intIdtimeSlot = TimeSlot::IdtimeSlotDefault;
			$this->strName = TimeSlot::NameDefault;
			$this->dttFrom = (TimeSlot::FromDefault === null)?null:new QDateTime(TimeSlot::FromDefault);
			$this->dttTo = (TimeSlot::ToDefault === null)?null:new QDateTime(TimeSlot::ToDefault);
			$this->strNote = TimeSlot::NoteDefault;
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
		 * Load a TimeSlot from PK Info
		 * @param integer $intIdtimeSlot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TimeSlot
		 */
		public static function Load($intIdtimeSlot, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TimeSlot', $intIdtimeSlot);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = TimeSlot::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TimeSlot()->IdtimeSlot, $intIdtimeSlot)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all TimeSlots
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TimeSlot[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TimeSlot::QueryArray to perform the LoadAll query
			try {
				return TimeSlot::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TimeSlots
		 * @return int
		 */
		public static function CountAll() {
			// Call TimeSlot::QueryCount to perform the CountAll query
			return TimeSlot::QueryCount(QQ::All());
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
			$objDatabase = TimeSlot::GetDatabase();

			// Create/Build out the QueryBuilder object with TimeSlot-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'time_slot');

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
				TimeSlot::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('time_slot');

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
		 * Static Qcubed Query method to query for a single TimeSlot object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TimeSlot the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TimeSlot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new TimeSlot object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TimeSlot::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TimeSlot::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of TimeSlot objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TimeSlot[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TimeSlot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TimeSlot::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = TimeSlot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of TimeSlot objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TimeSlot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TimeSlot::GetDatabase();

			$strQuery = TimeSlot::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/timeslot', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = TimeSlot::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TimeSlot
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'time_slot';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idtime_slot', $strAliasPrefix . 'idtime_slot');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idtime_slot', $strAliasPrefix . 'idtime_slot');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TimeSlot from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TimeSlot::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TimeSlot
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idtime_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdtimeSlot == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'time_slot__';


						// Expanding reverse references: ProgramHasTimeslot
						$strAlias = $strAliasPrefix . 'programhastimeslot__idprogram_has_timeslot';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProgramHasTimeslotArray)
								$objPreviousItem->_objProgramHasTimeslotArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProgramHasTimeslotArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProgramHasTimeslotArray;
								$objChildItem = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProgramHasTimeslotArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProgramHasTimeslotArray[] = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TeachingPlain
						$strAlias = $strAliasPrefix . 'teachingplain__idteaching_plain';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTeachingPlainArray)
								$objPreviousItem->_objTeachingPlainArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTeachingPlainArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTeachingPlainArray;
								$objChildItem = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplain__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTeachingPlainArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTeachingPlainArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplain__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Timetable
						$strAlias = $strAliasPrefix . 'timetable__idtimetable';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTimetableArray)
								$objPreviousItem->_objTimetableArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTimetableArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTimetableArray;
								$objChildItem = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetable__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTimetableArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTimetableArray[] = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetable__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'time_slot__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the TimeSlot object
			$objToReturn = new TimeSlot();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idtime_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdtimeSlot = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFrom = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttTo = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdtimeSlot != $objPreviousItem->IdtimeSlot) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objProgramHasTimeslotArray);
					$cnt = count($objToReturn->_objProgramHasTimeslotArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProgramHasTimeslotArray, $objToReturn->_objProgramHasTimeslotArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTeachingPlainArray);
					$cnt = count($objToReturn->_objTeachingPlainArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTeachingPlainArray, $objToReturn->_objTeachingPlainArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTimetableArray);
					$cnt = count($objToReturn->_objTimetableArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTimetableArray, $objToReturn->_objTimetableArray)) {
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
				$strAliasPrefix = 'time_slot__';




			// Check for ProgramHasTimeslot Virtual Binding
			$strAlias = $strAliasPrefix . 'programhastimeslot__idprogram_has_timeslot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProgramHasTimeslotArray)
				$objToReturn->_objProgramHasTimeslotArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProgramHasTimeslotArray[] = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProgramHasTimeslot = ProgramHasTimeslot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'programhastimeslot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TeachingPlain Virtual Binding
			$strAlias = $strAliasPrefix . 'teachingplain__idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTeachingPlainArray)
				$objToReturn->_objTeachingPlainArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTeachingPlainArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplain__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTeachingPlain = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplain__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Timetable Virtual Binding
			$strAlias = $strAliasPrefix . 'timetable__idtimetable';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTimetableArray)
				$objToReturn->_objTimetableArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTimetableArray[] = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetable__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTimetable = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetable__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of TimeSlots from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TimeSlot[]
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
					$objItem = TimeSlot::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TimeSlot::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single TimeSlot object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TimeSlot next row resulting from the query
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
			return TimeSlot::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single TimeSlot object,
		 * by IdtimeSlot Index(es)
		 * @param integer $intIdtimeSlot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TimeSlot
		*/
		public static function LoadByIdtimeSlot($intIdtimeSlot, $objOptionalClauses = null) {
			return TimeSlot::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TimeSlot()->IdtimeSlot, $intIdtimeSlot)
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
		 * Save this TimeSlot
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `time_slot` (
							`name`,
							`from`,
							`to`,
							`note`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->dttFrom) . ',
							' . $objDatabase->SqlVariable($this->dttTo) . ',
							' . $objDatabase->SqlVariable($this->strNote) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdtimeSlot = $objDatabase->InsertId('time_slot', 'idtime_slot');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`time_slot`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`from` = ' . $objDatabase->SqlVariable($this->dttFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->dttTo) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . '
						WHERE
							`idtime_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
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
		 * Delete this TimeSlot
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TimeSlot with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`time_slot`
				WHERE
					`idtime_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this TimeSlot ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TimeSlot', $this->intIdtimeSlot);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all TimeSlots
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`time_slot`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate time_slot table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `time_slot`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this TimeSlot from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TimeSlot object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = TimeSlot::Load($this->intIdtimeSlot);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->dttFrom = $objReloaded->dttFrom;
			$this->dttTo = $objReloaded->dttTo;
			$this->strNote = $objReloaded->strNote;
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
				case 'IdtimeSlot':
					/**
					 * Gets the value for intIdtimeSlot (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdtimeSlot;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;

				case 'From':
					/**
					 * Gets the value for dttFrom 
					 * @return QDateTime
					 */
					return $this->dttFrom;

				case 'To':
					/**
					 * Gets the value for dttTo 
					 * @return QDateTime
					 */
					return $this->dttTo;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ProgramHasTimeslot':
					/**
					 * Gets the value for the private _objProgramHasTimeslot (Read-Only)
					 * if set due to an expansion on the program_has_timeslot.time_slot reverse relationship
					 * @return ProgramHasTimeslot
					 */
					return $this->_objProgramHasTimeslot;

				case '_ProgramHasTimeslotArray':
					/**
					 * Gets the value for the private _objProgramHasTimeslotArray (Read-Only)
					 * if set due to an ExpandAsArray on the program_has_timeslot.time_slot reverse relationship
					 * @return ProgramHasTimeslot[]
					 */
					return $this->_objProgramHasTimeslotArray;

				case '_TeachingPlain':
					/**
					 * Gets the value for the private _objTeachingPlain (Read-Only)
					 * if set due to an expansion on the teaching_plain.time_slot reverse relationship
					 * @return TeachingPlain
					 */
					return $this->_objTeachingPlain;

				case '_TeachingPlainArray':
					/**
					 * Gets the value for the private _objTeachingPlainArray (Read-Only)
					 * if set due to an ExpandAsArray on the teaching_plain.time_slot reverse relationship
					 * @return TeachingPlain[]
					 */
					return $this->_objTeachingPlainArray;

				case '_Timetable':
					/**
					 * Gets the value for the private _objTimetable (Read-Only)
					 * if set due to an expansion on the timetable.time_slot reverse relationship
					 * @return Timetable
					 */
					return $this->_objTimetable;

				case '_TimetableArray':
					/**
					 * Gets the value for the private _objTimetableArray (Read-Only)
					 * if set due to an ExpandAsArray on the timetable.time_slot reverse relationship
					 * @return Timetable[]
					 */
					return $this->_objTimetableArray;


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

				case 'From':
					/**
					 * Sets the value for dttFrom 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFrom = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'To':
					/**
					 * Sets the value for dttTo 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTo = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Note':
					/**
					 * Sets the value for strNote 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNote = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for ProgramHasTimeslot
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProgramHasTimeslots as an array of ProgramHasTimeslot objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProgramHasTimeslot[]
		*/
		public function GetProgramHasTimeslotArray($objOptionalClauses = null) {
			if ((is_null($this->intIdtimeSlot)))
				return array();

			try {
				return ProgramHasTimeslot::LoadArrayByTimeSlot($this->intIdtimeSlot, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProgramHasTimeslots
		 * @return int
		*/
		public function CountProgramHasTimeslots() {
			if ((is_null($this->intIdtimeSlot)))
				return 0;

			return ProgramHasTimeslot::CountByTimeSlot($this->intIdtimeSlot);
		}

		/**
		 * Associates a ProgramHasTimeslot
		 * @param ProgramHasTimeslot $objProgramHasTimeslot
		 * @return void
		*/
		public function AssociateProgramHasTimeslot(ProgramHasTimeslot $objProgramHasTimeslot) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProgramHasTimeslot on this unsaved TimeSlot.');
			if ((is_null($objProgramHasTimeslot->IdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProgramHasTimeslot on this TimeSlot with an unsaved ProgramHasTimeslot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`program_has_timeslot`
				SET
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($objProgramHasTimeslot->IdprogramHasTimeslot) . '
			');
		}

		/**
		 * Unassociates a ProgramHasTimeslot
		 * @param ProgramHasTimeslot $objProgramHasTimeslot
		 * @return void
		*/
		public function UnassociateProgramHasTimeslot(ProgramHasTimeslot $objProgramHasTimeslot) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved TimeSlot.');
			if ((is_null($objProgramHasTimeslot->IdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this TimeSlot with an unsaved ProgramHasTimeslot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`program_has_timeslot`
				SET
					`time_slot` = null
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($objProgramHasTimeslot->IdprogramHasTimeslot) . ' AND
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Unassociates all ProgramHasTimeslots
		 * @return void
		*/
		public function UnassociateAllProgramHasTimeslots() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved TimeSlot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`program_has_timeslot`
				SET
					`time_slot` = null
				WHERE
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Deletes an associated ProgramHasTimeslot
		 * @param ProgramHasTimeslot $objProgramHasTimeslot
		 * @return void
		*/
		public function DeleteAssociatedProgramHasTimeslot(ProgramHasTimeslot $objProgramHasTimeslot) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved TimeSlot.');
			if ((is_null($objProgramHasTimeslot->IdprogramHasTimeslot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this TimeSlot with an unsaved ProgramHasTimeslot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`program_has_timeslot`
				WHERE
					`idprogram_has_timeslot` = ' . $objDatabase->SqlVariable($objProgramHasTimeslot->IdprogramHasTimeslot) . ' AND
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Deletes all associated ProgramHasTimeslots
		 * @return void
		*/
		public function DeleteAllProgramHasTimeslots() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProgramHasTimeslot on this unsaved TimeSlot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`program_has_timeslot`
				WHERE
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}


		// Related Objects' Methods for TeachingPlain
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TeachingPlains as an array of TeachingPlain objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public function GetTeachingPlainArray($objOptionalClauses = null) {
			if ((is_null($this->intIdtimeSlot)))
				return array();

			try {
				return TeachingPlain::LoadArrayByTimeSlot($this->intIdtimeSlot, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TeachingPlains
		 * @return int
		*/
		public function CountTeachingPlains() {
			if ((is_null($this->intIdtimeSlot)))
				return 0;

			return TeachingPlain::CountByTimeSlot($this->intIdtimeSlot);
		}

		/**
		 * Associates a TeachingPlain
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function AssociateTeachingPlain(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlain on this unsaved TimeSlot.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlain on this TimeSlot with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . '
			');
		}

		/**
		 * Unassociates a TeachingPlain
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function UnassociateTeachingPlain(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlain on this unsaved TimeSlot.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlain on this TimeSlot with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`time_slot` = null
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Unassociates all TeachingPlains
		 * @return void
		*/
		public function UnassociateAllTeachingPlains() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlain on this unsaved TimeSlot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`time_slot` = null
				WHERE
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Deletes an associated TeachingPlain
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function DeleteAssociatedTeachingPlain(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlain on this unsaved TimeSlot.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlain on this TimeSlot with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Deletes all associated TeachingPlains
		 * @return void
		*/
		public function DeleteAllTeachingPlains() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlain on this unsaved TimeSlot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}


		// Related Objects' Methods for Timetable
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Timetables as an array of Timetable objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		*/
		public function GetTimetableArray($objOptionalClauses = null) {
			if ((is_null($this->intIdtimeSlot)))
				return array();

			try {
				return Timetable::LoadArrayByTimeSlot($this->intIdtimeSlot, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Timetables
		 * @return int
		*/
		public function CountTimetables() {
			if ((is_null($this->intIdtimeSlot)))
				return 0;

			return Timetable::CountByTimeSlot($this->intIdtimeSlot);
		}

		/**
		 * Associates a Timetable
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function AssociateTimetable(Timetable $objTimetable) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTimetable on this unsaved TimeSlot.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTimetable on this TimeSlot with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . '
			');
		}

		/**
		 * Unassociates a Timetable
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function UnassociateTimetable(Timetable $objTimetable) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetable on this unsaved TimeSlot.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetable on this TimeSlot with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`time_slot` = null
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . ' AND
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Unassociates all Timetables
		 * @return void
		*/
		public function UnassociateAllTimetables() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetable on this unsaved TimeSlot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`time_slot` = null
				WHERE
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Deletes an associated Timetable
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function DeleteAssociatedTimetable(Timetable $objTimetable) {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetable on this unsaved TimeSlot.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetable on this TimeSlot with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . ' AND
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
			');
		}

		/**
		 * Deletes all associated Timetables
		 * @return void
		*/
		public function DeleteAllTimetables() {
			if ((is_null($this->intIdtimeSlot)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetable on this unsaved TimeSlot.');

			// Get the Database Object for this Class
			$objDatabase = TimeSlot::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`time_slot` = ' . $objDatabase->SqlVariable($this->intIdtimeSlot) . '
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
			return "time_slot";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[TimeSlot::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="TimeSlot"><sequence>';
			$strToReturn .= '<element name="IdtimeSlot" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="From" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="To" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TimeSlot', $strComplexTypeArray)) {
				$strComplexTypeArray['TimeSlot'] = TimeSlot::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TimeSlot::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TimeSlot();
			if (property_exists($objSoapObject, 'IdtimeSlot'))
				$objToReturn->intIdtimeSlot = $objSoapObject->IdtimeSlot;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'From'))
				$objToReturn->dttFrom = new QDateTime($objSoapObject->From);
			if (property_exists($objSoapObject, 'To'))
				$objToReturn->dttTo = new QDateTime($objSoapObject->To);
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TimeSlot::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFrom)
				$objObject->dttFrom = $objObject->dttFrom->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTo)
				$objObject->dttTo = $objObject->dttTo->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdtimeSlot'] = $this->intIdtimeSlot;
			$iArray['Name'] = $this->strName;
			$iArray['From'] = $this->dttFrom;
			$iArray['To'] = $this->dttTo;
			$iArray['Note'] = $this->strNote;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdtimeSlot ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdtimeSlot
     * @property-read QQNode $Name
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Note
     *
     *
     * @property-read QQReverseReferenceNodeProgramHasTimeslot $ProgramHasTimeslot
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlain
     * @property-read QQReverseReferenceNodeTimetable $Timetable

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTimeSlot extends QQNode {
		protected $strTableName = 'time_slot';
		protected $strPrimaryKey = 'idtime_slot';
		protected $strClassName = 'TimeSlot';
		public function __get($strName) {
			switch ($strName) {
				case 'IdtimeSlot':
					return new QQNode('idtime_slot', 'IdtimeSlot', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'From':
					return new QQNode('from', 'From', 'DateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'DateTime', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);
				case 'ProgramHasTimeslot':
					return new QQReverseReferenceNodeProgramHasTimeslot($this, 'programhastimeslot', 'reverse_reference', 'time_slot');
				case 'TeachingPlain':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplain', 'reverse_reference', 'time_slot');
				case 'Timetable':
					return new QQReverseReferenceNodeTimetable($this, 'timetable', 'reverse_reference', 'time_slot');

				case '_PrimaryKeyNode':
					return new QQNode('idtime_slot', 'IdtimeSlot', 'Integer', $this);
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
     * @property-read QQNode $IdtimeSlot
     * @property-read QQNode $Name
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Note
     *
     *
     * @property-read QQReverseReferenceNodeProgramHasTimeslot $ProgramHasTimeslot
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlain
     * @property-read QQReverseReferenceNodeTimetable $Timetable

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTimeSlot extends QQReverseReferenceNode {
		protected $strTableName = 'time_slot';
		protected $strPrimaryKey = 'idtime_slot';
		protected $strClassName = 'TimeSlot';
		public function __get($strName) {
			switch ($strName) {
				case 'IdtimeSlot':
					return new QQNode('idtime_slot', 'IdtimeSlot', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'From':
					return new QQNode('from', 'From', 'QDateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'QDateTime', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'ProgramHasTimeslot':
					return new QQReverseReferenceNodeProgramHasTimeslot($this, 'programhastimeslot', 'reverse_reference', 'time_slot');
				case 'TeachingPlain':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplain', 'reverse_reference', 'time_slot');
				case 'Timetable':
					return new QQReverseReferenceNodeTimetable($this, 'timetable', 'reverse_reference', 'time_slot');

				case '_PrimaryKeyNode':
					return new QQNode('idtime_slot', 'IdtimeSlot', 'integer', $this);
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
