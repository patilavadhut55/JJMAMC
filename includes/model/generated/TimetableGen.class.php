<?php
	/**
	 * The abstract TimetableGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Timetable subclass which
	 * extends this TimetableGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Timetable class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idtimetable the value for intIdtimetable (Read-Only PK)
	 * @property integer $YearlySubject the value for intYearlySubject 
	 * @property integer $Day the value for intDay 
	 * @property integer $TimeSlot the value for intTimeSlot 
	 * @property integer $Attendant the value for intAttendant 
	 * @property string $Note the value for strNote 
	 * @property YearSubject $YearlySubjectObject the value for the YearSubject object referenced by intYearlySubject 
	 * @property TimeSlot $TimeSlotObject the value for the TimeSlot object referenced by intTimeSlot 
	 * @property Login $AttendantObject the value for the Login object referenced by intAttendant 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TimetableGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column timetable.idtimetable
		 * @var integer intIdtimetable
		 */
		protected $intIdtimetable;
		const IdtimetableDefault = null;


		/**
		 * Protected member variable that maps to the database column timetable.yearly_subject
		 * @var integer intYearlySubject
		 */
		protected $intYearlySubject;
		const YearlySubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column timetable.day
		 * @var integer intDay
		 */
		protected $intDay;
		const DayDefault = null;


		/**
		 * Protected member variable that maps to the database column timetable.time_slot
		 * @var integer intTimeSlot
		 */
		protected $intTimeSlot;
		const TimeSlotDefault = null;


		/**
		 * Protected member variable that maps to the database column timetable.attendant
		 * @var integer intAttendant
		 */
		protected $intAttendant;
		const AttendantDefault = null;


		/**
		 * Protected member variable that maps to the database column timetable.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


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
		 * in the database column timetable.yearly_subject.
		 *
		 * NOTE: Always use the YearlySubjectObject property getter to correctly retrieve this YearSubject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var YearSubject objYearlySubjectObject
		 */
		protected $objYearlySubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column timetable.time_slot.
		 *
		 * NOTE: Always use the TimeSlotObject property getter to correctly retrieve this TimeSlot object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TimeSlot objTimeSlotObject
		 */
		protected $objTimeSlotObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column timetable.attendant.
		 *
		 * NOTE: Always use the AttendantObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objAttendantObject
		 */
		protected $objAttendantObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdtimetable = Timetable::IdtimetableDefault;
			$this->intYearlySubject = Timetable::YearlySubjectDefault;
			$this->intDay = Timetable::DayDefault;
			$this->intTimeSlot = Timetable::TimeSlotDefault;
			$this->intAttendant = Timetable::AttendantDefault;
			$this->strNote = Timetable::NoteDefault;
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
		 * Load a Timetable from PK Info
		 * @param integer $intIdtimetable
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable
		 */
		public static function Load($intIdtimetable, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Timetable', $intIdtimetable);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Timetable::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Timetable()->Idtimetable, $intIdtimetable)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Timetables
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Timetable::QueryArray to perform the LoadAll query
			try {
				return Timetable::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Timetables
		 * @return int
		 */
		public static function CountAll() {
			// Call Timetable::QueryCount to perform the CountAll query
			return Timetable::QueryCount(QQ::All());
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
			$objDatabase = Timetable::GetDatabase();

			// Create/Build out the QueryBuilder object with Timetable-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'timetable');

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
				Timetable::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('timetable');

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
		 * Static Qcubed Query method to query for a single Timetable object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Timetable the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Timetable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Timetable object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Timetable::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Timetable::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Timetable objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Timetable[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Timetable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Timetable::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Timetable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Timetable objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Timetable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Timetable::GetDatabase();

			$strQuery = Timetable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/timetable', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Timetable::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Timetable
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'timetable';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idtimetable', $strAliasPrefix . 'idtimetable');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idtimetable', $strAliasPrefix . 'idtimetable');
			    $objBuilder->AddSelectItem($strTableName, 'yearly_subject', $strAliasPrefix . 'yearly_subject');
			    $objBuilder->AddSelectItem($strTableName, 'day', $strAliasPrefix . 'day');
			    $objBuilder->AddSelectItem($strTableName, 'time_slot', $strAliasPrefix . 'time_slot');
			    $objBuilder->AddSelectItem($strTableName, 'attendant', $strAliasPrefix . 'attendant');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Timetable from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Timetable::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Timetable
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Timetable object
			$objToReturn = new Timetable();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idtimetable';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdtimetable = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'yearly_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intYearlySubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'day';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDay = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'time_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTimeSlot = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'attendant';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAttendant = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idtimetable != $objPreviousItem->Idtimetable) {
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
				$strAliasPrefix = 'timetable__';

			// Check for YearlySubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'yearly_subject__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objYearlySubjectObject = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearly_subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TimeSlotObject Early Binding
			$strAlias = $strAliasPrefix . 'time_slot__idtime_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTimeSlotObject = TimeSlot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'time_slot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AttendantObject Early Binding
			$strAlias = $strAliasPrefix . 'attendant__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAttendantObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'attendant__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Timetables from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Timetable[]
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
					$objItem = Timetable::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Timetable::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Timetable object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Timetable next row resulting from the query
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
			return Timetable::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Timetable object,
		 * by Idtimetable Index(es)
		 * @param integer $intIdtimetable
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable
		*/
		public static function LoadByIdtimetable($intIdtimetable, $objOptionalClauses = null) {
			return Timetable::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Timetable()->Idtimetable, $intIdtimetable)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Timetable objects,
		 * by Attendant Index(es)
		 * @param integer $intAttendant
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		*/
		public static function LoadArrayByAttendant($intAttendant, $objOptionalClauses = null) {
			// Call Timetable::QueryArray to perform the LoadArrayByAttendant query
			try {
				return Timetable::QueryArray(
					QQ::Equal(QQN::Timetable()->Attendant, $intAttendant),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Timetables
		 * by Attendant Index(es)
		 * @param integer $intAttendant
		 * @return int
		*/
		public static function CountByAttendant($intAttendant) {
			// Call Timetable::QueryCount to perform the CountByAttendant query
			return Timetable::QueryCount(
				QQ::Equal(QQN::Timetable()->Attendant, $intAttendant)
			);
		}

		/**
		 * Load an array of Timetable objects,
		 * by TimeSlot Index(es)
		 * @param integer $intTimeSlot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		*/
		public static function LoadArrayByTimeSlot($intTimeSlot, $objOptionalClauses = null) {
			// Call Timetable::QueryArray to perform the LoadArrayByTimeSlot query
			try {
				return Timetable::QueryArray(
					QQ::Equal(QQN::Timetable()->TimeSlot, $intTimeSlot),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Timetables
		 * by TimeSlot Index(es)
		 * @param integer $intTimeSlot
		 * @return int
		*/
		public static function CountByTimeSlot($intTimeSlot) {
			// Call Timetable::QueryCount to perform the CountByTimeSlot query
			return Timetable::QueryCount(
				QQ::Equal(QQN::Timetable()->TimeSlot, $intTimeSlot)
			);
		}

		/**
		 * Load an array of Timetable objects,
		 * by YearlySubject Index(es)
		 * @param integer $intYearlySubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		*/
		public static function LoadArrayByYearlySubject($intYearlySubject, $objOptionalClauses = null) {
			// Call Timetable::QueryArray to perform the LoadArrayByYearlySubject query
			try {
				return Timetable::QueryArray(
					QQ::Equal(QQN::Timetable()->YearlySubject, $intYearlySubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Timetables
		 * by YearlySubject Index(es)
		 * @param integer $intYearlySubject
		 * @return int
		*/
		public static function CountByYearlySubject($intYearlySubject) {
			// Call Timetable::QueryCount to perform the CountByYearlySubject query
			return Timetable::QueryCount(
				QQ::Equal(QQN::Timetable()->YearlySubject, $intYearlySubject)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Timetable
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Timetable::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `timetable` (
							`yearly_subject`,
							`day`,
							`time_slot`,
							`attendant`,
							`note`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							' . $objDatabase->SqlVariable($this->intDay) . ',
							' . $objDatabase->SqlVariable($this->intTimeSlot) . ',
							' . $objDatabase->SqlVariable($this->intAttendant) . ',
							' . $objDatabase->SqlVariable($this->strNote) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdtimetable = $objDatabase->InsertId('timetable', 'idtimetable');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`timetable`
						SET
							`yearly_subject` = ' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							`day` = ' . $objDatabase->SqlVariable($this->intDay) . ',
							`time_slot` = ' . $objDatabase->SqlVariable($this->intTimeSlot) . ',
							`attendant` = ' . $objDatabase->SqlVariable($this->intAttendant) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . '
						WHERE
							`idtimetable` = ' . $objDatabase->SqlVariable($this->intIdtimetable) . '
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
		 * Delete this Timetable
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdtimetable)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Timetable with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Timetable::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($this->intIdtimetable) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Timetable ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Timetable', $this->intIdtimetable);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Timetables
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Timetable::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate timetable table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Timetable::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `timetable`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Timetable from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Timetable object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Timetable::Load($this->intIdtimetable);

			// Update $this's local variables to match
			$this->YearlySubject = $objReloaded->YearlySubject;
			$this->intDay = $objReloaded->intDay;
			$this->TimeSlot = $objReloaded->TimeSlot;
			$this->Attendant = $objReloaded->Attendant;
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
				case 'Idtimetable':
					/**
					 * Gets the value for intIdtimetable (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdtimetable;

				case 'YearlySubject':
					/**
					 * Gets the value for intYearlySubject 
					 * @return integer
					 */
					return $this->intYearlySubject;

				case 'Day':
					/**
					 * Gets the value for intDay 
					 * @return integer
					 */
					return $this->intDay;

				case 'TimeSlot':
					/**
					 * Gets the value for intTimeSlot 
					 * @return integer
					 */
					return $this->intTimeSlot;

				case 'Attendant':
					/**
					 * Gets the value for intAttendant 
					 * @return integer
					 */
					return $this->intAttendant;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;


				///////////////////
				// Member Objects
				///////////////////
				case 'YearlySubjectObject':
					/**
					 * Gets the value for the YearSubject object referenced by intYearlySubject 
					 * @return YearSubject
					 */
					try {
						if ((!$this->objYearlySubjectObject) && (!is_null($this->intYearlySubject)))
							$this->objYearlySubjectObject = YearSubject::Load($this->intYearlySubject);
						return $this->objYearlySubjectObject;
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

				case 'AttendantObject':
					/**
					 * Gets the value for the Login object referenced by intAttendant 
					 * @return Login
					 */
					try {
						if ((!$this->objAttendantObject) && (!is_null($this->intAttendant)))
							$this->objAttendantObject = Login::Load($this->intAttendant);
						return $this->objAttendantObject;
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
				case 'YearlySubject':
					/**
					 * Sets the value for intYearlySubject 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objYearlySubjectObject = null;
						return ($this->intYearlySubject = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Day':
					/**
					 * Sets the value for intDay 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intDay = QType::Cast($mixValue, QType::Integer));
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

				case 'Attendant':
					/**
					 * Sets the value for intAttendant 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAttendantObject = null;
						return ($this->intAttendant = QType::Cast($mixValue, QType::Integer));
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
				case 'YearlySubjectObject':
					/**
					 * Sets the value for the YearSubject object referenced by intYearlySubject 
					 * @param YearSubject $mixValue
					 * @return YearSubject
					 */
					if (is_null($mixValue)) {
						$this->intYearlySubject = null;
						$this->objYearlySubjectObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a YearSubject object
						try {
							$mixValue = QType::Cast($mixValue, 'YearSubject');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED YearSubject object
						if (is_null($mixValue->IdyearSubject))
							throw new QCallerException('Unable to set an unsaved YearlySubjectObject for this Timetable');

						// Update Local Member Variables
						$this->objYearlySubjectObject = $mixValue;
						$this->intYearlySubject = $mixValue->IdyearSubject;

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
							throw new QCallerException('Unable to set an unsaved TimeSlotObject for this Timetable');

						// Update Local Member Variables
						$this->objTimeSlotObject = $mixValue;
						$this->intTimeSlot = $mixValue->IdtimeSlot;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AttendantObject':
					/**
					 * Sets the value for the Login object referenced by intAttendant 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intAttendant = null;
						$this->objAttendantObject = null;
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
							throw new QCallerException('Unable to set an unsaved AttendantObject for this Timetable');

						// Update Local Member Variables
						$this->objAttendantObject = $mixValue;
						$this->intAttendant = $mixValue->Idlogin;

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
			return "timetable";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Timetable::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Timetable"><sequence>';
			$strToReturn .= '<element name="Idtimetable" type="xsd:int"/>';
			$strToReturn .= '<element name="YearlySubjectObject" type="xsd1:YearSubject"/>';
			$strToReturn .= '<element name="Day" type="xsd:int"/>';
			$strToReturn .= '<element name="TimeSlotObject" type="xsd1:TimeSlot"/>';
			$strToReturn .= '<element name="AttendantObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Timetable', $strComplexTypeArray)) {
				$strComplexTypeArray['Timetable'] = Timetable::GetSoapComplexTypeXml();
				YearSubject::AlterSoapComplexTypeArray($strComplexTypeArray);
				TimeSlot::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Timetable::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Timetable();
			if (property_exists($objSoapObject, 'Idtimetable'))
				$objToReturn->intIdtimetable = $objSoapObject->Idtimetable;
			if ((property_exists($objSoapObject, 'YearlySubjectObject')) &&
				($objSoapObject->YearlySubjectObject))
				$objToReturn->YearlySubjectObject = YearSubject::GetObjectFromSoapObject($objSoapObject->YearlySubjectObject);
			if (property_exists($objSoapObject, 'Day'))
				$objToReturn->intDay = $objSoapObject->Day;
			if ((property_exists($objSoapObject, 'TimeSlotObject')) &&
				($objSoapObject->TimeSlotObject))
				$objToReturn->TimeSlotObject = TimeSlot::GetObjectFromSoapObject($objSoapObject->TimeSlotObject);
			if ((property_exists($objSoapObject, 'AttendantObject')) &&
				($objSoapObject->AttendantObject))
				$objToReturn->AttendantObject = Login::GetObjectFromSoapObject($objSoapObject->AttendantObject);
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
				array_push($objArrayToReturn, Timetable::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objYearlySubjectObject)
				$objObject->objYearlySubjectObject = YearSubject::GetSoapObjectFromObject($objObject->objYearlySubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intYearlySubject = null;
			if ($objObject->objTimeSlotObject)
				$objObject->objTimeSlotObject = TimeSlot::GetSoapObjectFromObject($objObject->objTimeSlotObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTimeSlot = null;
			if ($objObject->objAttendantObject)
				$objObject->objAttendantObject = Login::GetSoapObjectFromObject($objObject->objAttendantObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAttendant = null;
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
			$iArray['Idtimetable'] = $this->intIdtimetable;
			$iArray['YearlySubject'] = $this->intYearlySubject;
			$iArray['Day'] = $this->intDay;
			$iArray['TimeSlot'] = $this->intTimeSlot;
			$iArray['Attendant'] = $this->intAttendant;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdtimetable ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idtimetable
     * @property-read QQNode $YearlySubject
     * @property-read QQNodeYearSubject $YearlySubjectObject
     * @property-read QQNode $Day
     * @property-read QQNode $TimeSlot
     * @property-read QQNodeTimeSlot $TimeSlotObject
     * @property-read QQNode $Attendant
     * @property-read QQNodeLogin $AttendantObject
     * @property-read QQNode $Note
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTimetable extends QQNode {
		protected $strTableName = 'timetable';
		protected $strPrimaryKey = 'idtimetable';
		protected $strClassName = 'Timetable';
		public function __get($strName) {
			switch ($strName) {
				case 'Idtimetable':
					return new QQNode('idtimetable', 'Idtimetable', 'Integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'Integer', $this);
				case 'YearlySubjectObject':
					return new QQNodeYearSubject('yearly_subject', 'YearlySubjectObject', 'Integer', $this);
				case 'Day':
					return new QQNode('day', 'Day', 'Integer', $this);
				case 'TimeSlot':
					return new QQNode('time_slot', 'TimeSlot', 'Integer', $this);
				case 'TimeSlotObject':
					return new QQNodeTimeSlot('time_slot', 'TimeSlotObject', 'Integer', $this);
				case 'Attendant':
					return new QQNode('attendant', 'Attendant', 'Integer', $this);
				case 'AttendantObject':
					return new QQNodeLogin('attendant', 'AttendantObject', 'Integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtimetable', 'Idtimetable', 'Integer', $this);
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
     * @property-read QQNode $Idtimetable
     * @property-read QQNode $YearlySubject
     * @property-read QQNodeYearSubject $YearlySubjectObject
     * @property-read QQNode $Day
     * @property-read QQNode $TimeSlot
     * @property-read QQNodeTimeSlot $TimeSlotObject
     * @property-read QQNode $Attendant
     * @property-read QQNodeLogin $AttendantObject
     * @property-read QQNode $Note
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTimetable extends QQReverseReferenceNode {
		protected $strTableName = 'timetable';
		protected $strPrimaryKey = 'idtimetable';
		protected $strClassName = 'Timetable';
		public function __get($strName) {
			switch ($strName) {
				case 'Idtimetable':
					return new QQNode('idtimetable', 'Idtimetable', 'integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'integer', $this);
				case 'YearlySubjectObject':
					return new QQNodeYearSubject('yearly_subject', 'YearlySubjectObject', 'integer', $this);
				case 'Day':
					return new QQNode('day', 'Day', 'integer', $this);
				case 'TimeSlot':
					return new QQNode('time_slot', 'TimeSlot', 'integer', $this);
				case 'TimeSlotObject':
					return new QQNodeTimeSlot('time_slot', 'TimeSlotObject', 'integer', $this);
				case 'Attendant':
					return new QQNode('attendant', 'Attendant', 'integer', $this);
				case 'AttendantObject':
					return new QQNodeLogin('attendant', 'AttendantObject', 'integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idtimetable', 'Idtimetable', 'integer', $this);
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
