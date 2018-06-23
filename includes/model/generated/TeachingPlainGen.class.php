<?php
	/**
	 * The abstract TeachingPlainGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TeachingPlain subclass which
	 * extends this TeachingPlainGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TeachingPlain class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdteachingPlain the value for intIdteachingPlain (Read-Only PK)
	 * @property integer $Teacher the value for intTeacher (Not Null)
	 * @property integer $Course the value for intCourse 
	 * @property integer $YearlySubject the value for intYearlySubject (Not Null)
	 * @property integer $CalendarYear the value for intCalendarYear 
	 * @property string $Content the value for strContent 
	 * @property QDateTime $PlainedDate the value for dttPlainedDate 
	 * @property QDateTime $ExecutionDate the value for dttExecutionDate 
	 * @property string $Reason the value for strReason 
	 * @property string $CorrectiveStep the value for strCorrectiveStep 
	 * @property QDateTime $PostponeDate the value for dttPostponeDate 
	 * @property boolean $Completed the value for blnCompleted 
	 * @property integer $Days the value for intDays 
	 * @property integer $TimeSlot the value for intTimeSlot 
	 * @property integer $DataBy the value for intDataBy 
	 * @property QDateTime $Date the value for dttDate 
	 * @property Login $TeacherObject the value for the Login object referenced by intTeacher (Not Null)
	 * @property Role $CourseObject the value for the Role object referenced by intCourse 
	 * @property YearSubject $YearlySubjectObject the value for the YearSubject object referenced by intYearlySubject (Not Null)
	 * @property CalenderYear $CalendarYearObject the value for the CalenderYear object referenced by intCalendarYear 
	 * @property TimeSlot $TimeSlotObject the value for the TimeSlot object referenced by intTimeSlot 
	 * @property Login $DataByObject the value for the Login object referenced by intDataBy 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TeachingPlainGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column teaching_plain.idteaching_plain
		 * @var integer intIdteachingPlain
		 */
		protected $intIdteachingPlain;
		const IdteachingPlainDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.teacher
		 * @var integer intTeacher
		 */
		protected $intTeacher;
		const TeacherDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.course
		 * @var integer intCourse
		 */
		protected $intCourse;
		const CourseDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.yearly_subject
		 * @var integer intYearlySubject
		 */
		protected $intYearlySubject;
		const YearlySubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.calendar_year
		 * @var integer intCalendarYear
		 */
		protected $intCalendarYear;
		const CalendarYearDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.content
		 * @var string strContent
		 */
		protected $strContent;
		const ContentDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.plained_date
		 * @var QDateTime dttPlainedDate
		 */
		protected $dttPlainedDate;
		const PlainedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.execution_date
		 * @var QDateTime dttExecutionDate
		 */
		protected $dttExecutionDate;
		const ExecutionDateDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.reason
		 * @var string strReason
		 */
		protected $strReason;
		const ReasonDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.corrective_step
		 * @var string strCorrectiveStep
		 */
		protected $strCorrectiveStep;
		const CorrectiveStepDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.postpone_date
		 * @var QDateTime dttPostponeDate
		 */
		protected $dttPostponeDate;
		const PostponeDateDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.completed
		 * @var boolean blnCompleted
		 */
		protected $blnCompleted;
		const CompletedDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.days
		 * @var integer intDays
		 */
		protected $intDays;
		const DaysDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.time_slot
		 * @var integer intTimeSlot
		 */
		protected $intTimeSlot;
		const TimeSlotDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.data_by
		 * @var integer intDataBy
		 */
		protected $intDataBy;
		const DataByDefault = null;


		/**
		 * Protected member variable that maps to the database column teaching_plain.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


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
		 * in the database column teaching_plain.teacher.
		 *
		 * NOTE: Always use the TeacherObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objTeacherObject
		 */
		protected $objTeacherObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column teaching_plain.course.
		 *
		 * NOTE: Always use the CourseObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objCourseObject
		 */
		protected $objCourseObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column teaching_plain.yearly_subject.
		 *
		 * NOTE: Always use the YearlySubjectObject property getter to correctly retrieve this YearSubject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var YearSubject objYearlySubjectObject
		 */
		protected $objYearlySubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column teaching_plain.calendar_year.
		 *
		 * NOTE: Always use the CalendarYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalendarYearObject
		 */
		protected $objCalendarYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column teaching_plain.time_slot.
		 *
		 * NOTE: Always use the TimeSlotObject property getter to correctly retrieve this TimeSlot object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TimeSlot objTimeSlotObject
		 */
		protected $objTimeSlotObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column teaching_plain.data_by.
		 *
		 * NOTE: Always use the DataByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objDataByObject
		 */
		protected $objDataByObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdteachingPlain = TeachingPlain::IdteachingPlainDefault;
			$this->intTeacher = TeachingPlain::TeacherDefault;
			$this->intCourse = TeachingPlain::CourseDefault;
			$this->intYearlySubject = TeachingPlain::YearlySubjectDefault;
			$this->intCalendarYear = TeachingPlain::CalendarYearDefault;
			$this->strContent = TeachingPlain::ContentDefault;
			$this->dttPlainedDate = (TeachingPlain::PlainedDateDefault === null)?null:new QDateTime(TeachingPlain::PlainedDateDefault);
			$this->dttExecutionDate = (TeachingPlain::ExecutionDateDefault === null)?null:new QDateTime(TeachingPlain::ExecutionDateDefault);
			$this->strReason = TeachingPlain::ReasonDefault;
			$this->strCorrectiveStep = TeachingPlain::CorrectiveStepDefault;
			$this->dttPostponeDate = (TeachingPlain::PostponeDateDefault === null)?null:new QDateTime(TeachingPlain::PostponeDateDefault);
			$this->blnCompleted = TeachingPlain::CompletedDefault;
			$this->intDays = TeachingPlain::DaysDefault;
			$this->intTimeSlot = TeachingPlain::TimeSlotDefault;
			$this->intDataBy = TeachingPlain::DataByDefault;
			$this->dttDate = (TeachingPlain::DateDefault === null)?null:new QDateTime(TeachingPlain::DateDefault);
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
		 * Load a TeachingPlain from PK Info
		 * @param integer $intIdteachingPlain
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain
		 */
		public static function Load($intIdteachingPlain, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TeachingPlain', $intIdteachingPlain);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = TeachingPlain::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TeachingPlain()->IdteachingPlain, $intIdteachingPlain)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all TeachingPlains
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TeachingPlain::QueryArray to perform the LoadAll query
			try {
				return TeachingPlain::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TeachingPlains
		 * @return int
		 */
		public static function CountAll() {
			// Call TeachingPlain::QueryCount to perform the CountAll query
			return TeachingPlain::QueryCount(QQ::All());
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
			$objDatabase = TeachingPlain::GetDatabase();

			// Create/Build out the QueryBuilder object with TeachingPlain-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'teaching_plain');

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
				TeachingPlain::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('teaching_plain');

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
		 * Static Qcubed Query method to query for a single TeachingPlain object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TeachingPlain the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TeachingPlain::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new TeachingPlain object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TeachingPlain::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TeachingPlain::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of TeachingPlain objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TeachingPlain[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TeachingPlain::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TeachingPlain::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = TeachingPlain::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of TeachingPlain objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TeachingPlain::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TeachingPlain::GetDatabase();

			$strQuery = TeachingPlain::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/teachingplain', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = TeachingPlain::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TeachingPlain
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'teaching_plain';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idteaching_plain', $strAliasPrefix . 'idteaching_plain');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idteaching_plain', $strAliasPrefix . 'idteaching_plain');
			    $objBuilder->AddSelectItem($strTableName, 'teacher', $strAliasPrefix . 'teacher');
			    $objBuilder->AddSelectItem($strTableName, 'course', $strAliasPrefix . 'course');
			    $objBuilder->AddSelectItem($strTableName, 'yearly_subject', $strAliasPrefix . 'yearly_subject');
			    $objBuilder->AddSelectItem($strTableName, 'calendar_year', $strAliasPrefix . 'calendar_year');
			    $objBuilder->AddSelectItem($strTableName, 'content', $strAliasPrefix . 'content');
			    $objBuilder->AddSelectItem($strTableName, 'plained_date', $strAliasPrefix . 'plained_date');
			    $objBuilder->AddSelectItem($strTableName, 'execution_date', $strAliasPrefix . 'execution_date');
			    $objBuilder->AddSelectItem($strTableName, 'reason', $strAliasPrefix . 'reason');
			    $objBuilder->AddSelectItem($strTableName, 'corrective_step', $strAliasPrefix . 'corrective_step');
			    $objBuilder->AddSelectItem($strTableName, 'postpone_date', $strAliasPrefix . 'postpone_date');
			    $objBuilder->AddSelectItem($strTableName, 'completed', $strAliasPrefix . 'completed');
			    $objBuilder->AddSelectItem($strTableName, 'days', $strAliasPrefix . 'days');
			    $objBuilder->AddSelectItem($strTableName, 'time_slot', $strAliasPrefix . 'time_slot');
			    $objBuilder->AddSelectItem($strTableName, 'data_by', $strAliasPrefix . 'data_by');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TeachingPlain from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TeachingPlain::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TeachingPlain
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the TeachingPlain object
			$objToReturn = new TeachingPlain();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdteachingPlain = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'teacher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTeacher = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'course';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCourse = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'yearly_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intYearlySubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'calendar_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalendarYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'content';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strContent = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'plained_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPlainedDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'execution_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttExecutionDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'reason';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strReason = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'corrective_step';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCorrectiveStep = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'postpone_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttPostponeDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'completed';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCompleted = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'days';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDays = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'time_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTimeSlot = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'data_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDataBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdteachingPlain != $objPreviousItem->IdteachingPlain) {
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
				$strAliasPrefix = 'teaching_plain__';

			// Check for TeacherObject Early Binding
			$strAlias = $strAliasPrefix . 'teacher__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTeacherObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teacher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CourseObject Early Binding
			$strAlias = $strAliasPrefix . 'course__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourseObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'course__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for YearlySubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'yearly_subject__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objYearlySubjectObject = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearly_subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalendarYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calendar_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalendarYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calendar_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TimeSlotObject Early Binding
			$strAlias = $strAliasPrefix . 'time_slot__idtime_slot';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTimeSlotObject = TimeSlot::InstantiateDbRow($objDbRow, $strAliasPrefix . 'time_slot__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DataByObject Early Binding
			$strAlias = $strAliasPrefix . 'data_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDataByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'data_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of TeachingPlains from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TeachingPlain[]
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
					$objItem = TeachingPlain::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TeachingPlain::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single TeachingPlain object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return TeachingPlain next row resulting from the query
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
			return TeachingPlain::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single TeachingPlain object,
		 * by IdteachingPlain Index(es)
		 * @param integer $intIdteachingPlain
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain
		*/
		public static function LoadByIdteachingPlain($intIdteachingPlain, $objOptionalClauses = null) {
			return TeachingPlain::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TeachingPlain()->IdteachingPlain, $intIdteachingPlain)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of TeachingPlain objects,
		 * by Teacher Index(es)
		 * @param integer $intTeacher
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public static function LoadArrayByTeacher($intTeacher, $objOptionalClauses = null) {
			// Call TeachingPlain::QueryArray to perform the LoadArrayByTeacher query
			try {
				return TeachingPlain::QueryArray(
					QQ::Equal(QQN::TeachingPlain()->Teacher, $intTeacher),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TeachingPlains
		 * by Teacher Index(es)
		 * @param integer $intTeacher
		 * @return int
		*/
		public static function CountByTeacher($intTeacher) {
			// Call TeachingPlain::QueryCount to perform the CountByTeacher query
			return TeachingPlain::QueryCount(
				QQ::Equal(QQN::TeachingPlain()->Teacher, $intTeacher)
			);
		}

		/**
		 * Load an array of TeachingPlain objects,
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public static function LoadArrayByCourse($intCourse, $objOptionalClauses = null) {
			// Call TeachingPlain::QueryArray to perform the LoadArrayByCourse query
			try {
				return TeachingPlain::QueryArray(
					QQ::Equal(QQN::TeachingPlain()->Course, $intCourse),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TeachingPlains
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @return int
		*/
		public static function CountByCourse($intCourse) {
			// Call TeachingPlain::QueryCount to perform the CountByCourse query
			return TeachingPlain::QueryCount(
				QQ::Equal(QQN::TeachingPlain()->Course, $intCourse)
			);
		}

		/**
		 * Load an array of TeachingPlain objects,
		 * by YearlySubject Index(es)
		 * @param integer $intYearlySubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public static function LoadArrayByYearlySubject($intYearlySubject, $objOptionalClauses = null) {
			// Call TeachingPlain::QueryArray to perform the LoadArrayByYearlySubject query
			try {
				return TeachingPlain::QueryArray(
					QQ::Equal(QQN::TeachingPlain()->YearlySubject, $intYearlySubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TeachingPlains
		 * by YearlySubject Index(es)
		 * @param integer $intYearlySubject
		 * @return int
		*/
		public static function CountByYearlySubject($intYearlySubject) {
			// Call TeachingPlain::QueryCount to perform the CountByYearlySubject query
			return TeachingPlain::QueryCount(
				QQ::Equal(QQN::TeachingPlain()->YearlySubject, $intYearlySubject)
			);
		}

		/**
		 * Load an array of TeachingPlain objects,
		 * by CalendarYear Index(es)
		 * @param integer $intCalendarYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public static function LoadArrayByCalendarYear($intCalendarYear, $objOptionalClauses = null) {
			// Call TeachingPlain::QueryArray to perform the LoadArrayByCalendarYear query
			try {
				return TeachingPlain::QueryArray(
					QQ::Equal(QQN::TeachingPlain()->CalendarYear, $intCalendarYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TeachingPlains
		 * by CalendarYear Index(es)
		 * @param integer $intCalendarYear
		 * @return int
		*/
		public static function CountByCalendarYear($intCalendarYear) {
			// Call TeachingPlain::QueryCount to perform the CountByCalendarYear query
			return TeachingPlain::QueryCount(
				QQ::Equal(QQN::TeachingPlain()->CalendarYear, $intCalendarYear)
			);
		}

		/**
		 * Load an array of TeachingPlain objects,
		 * by TimeSlot Index(es)
		 * @param integer $intTimeSlot
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public static function LoadArrayByTimeSlot($intTimeSlot, $objOptionalClauses = null) {
			// Call TeachingPlain::QueryArray to perform the LoadArrayByTimeSlot query
			try {
				return TeachingPlain::QueryArray(
					QQ::Equal(QQN::TeachingPlain()->TimeSlot, $intTimeSlot),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TeachingPlains
		 * by TimeSlot Index(es)
		 * @param integer $intTimeSlot
		 * @return int
		*/
		public static function CountByTimeSlot($intTimeSlot) {
			// Call TeachingPlain::QueryCount to perform the CountByTimeSlot query
			return TeachingPlain::QueryCount(
				QQ::Equal(QQN::TeachingPlain()->TimeSlot, $intTimeSlot)
			);
		}

		/**
		 * Load an array of TeachingPlain objects,
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public static function LoadArrayByDataBy($intDataBy, $objOptionalClauses = null) {
			// Call TeachingPlain::QueryArray to perform the LoadArrayByDataBy query
			try {
				return TeachingPlain::QueryArray(
					QQ::Equal(QQN::TeachingPlain()->DataBy, $intDataBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count TeachingPlains
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @return int
		*/
		public static function CountByDataBy($intDataBy) {
			// Call TeachingPlain::QueryCount to perform the CountByDataBy query
			return TeachingPlain::QueryCount(
				QQ::Equal(QQN::TeachingPlain()->DataBy, $intDataBy)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this TeachingPlain
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TeachingPlain::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `teaching_plain` (
							`teacher`,
							`course`,
							`yearly_subject`,
							`calendar_year`,
							`content`,
							`plained_date`,
							`execution_date`,
							`reason`,
							`corrective_step`,
							`postpone_date`,
							`completed`,
							`days`,
							`time_slot`,
							`data_by`,
							`date`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTeacher) . ',
							' . $objDatabase->SqlVariable($this->intCourse) . ',
							' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							' . $objDatabase->SqlVariable($this->intCalendarYear) . ',
							' . $objDatabase->SqlVariable($this->strContent) . ',
							' . $objDatabase->SqlVariable($this->dttPlainedDate) . ',
							' . $objDatabase->SqlVariable($this->dttExecutionDate) . ',
							' . $objDatabase->SqlVariable($this->strReason) . ',
							' . $objDatabase->SqlVariable($this->strCorrectiveStep) . ',
							' . $objDatabase->SqlVariable($this->dttPostponeDate) . ',
							' . $objDatabase->SqlVariable($this->blnCompleted) . ',
							' . $objDatabase->SqlVariable($this->intDays) . ',
							' . $objDatabase->SqlVariable($this->intTimeSlot) . ',
							' . $objDatabase->SqlVariable($this->intDataBy) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdteachingPlain = $objDatabase->InsertId('teaching_plain', 'idteaching_plain');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`teaching_plain`
						SET
							`teacher` = ' . $objDatabase->SqlVariable($this->intTeacher) . ',
							`course` = ' . $objDatabase->SqlVariable($this->intCourse) . ',
							`yearly_subject` = ' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							`calendar_year` = ' . $objDatabase->SqlVariable($this->intCalendarYear) . ',
							`content` = ' . $objDatabase->SqlVariable($this->strContent) . ',
							`plained_date` = ' . $objDatabase->SqlVariable($this->dttPlainedDate) . ',
							`execution_date` = ' . $objDatabase->SqlVariable($this->dttExecutionDate) . ',
							`reason` = ' . $objDatabase->SqlVariable($this->strReason) . ',
							`corrective_step` = ' . $objDatabase->SqlVariable($this->strCorrectiveStep) . ',
							`postpone_date` = ' . $objDatabase->SqlVariable($this->dttPostponeDate) . ',
							`completed` = ' . $objDatabase->SqlVariable($this->blnCompleted) . ',
							`days` = ' . $objDatabase->SqlVariable($this->intDays) . ',
							`time_slot` = ' . $objDatabase->SqlVariable($this->intTimeSlot) . ',
							`data_by` = ' . $objDatabase->SqlVariable($this->intDataBy) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . '
						WHERE
							`idteaching_plain` = ' . $objDatabase->SqlVariable($this->intIdteachingPlain) . '
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
		 * Delete this TeachingPlain
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TeachingPlain with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TeachingPlain::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($this->intIdteachingPlain) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this TeachingPlain ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'TeachingPlain', $this->intIdteachingPlain);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all TeachingPlains
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TeachingPlain::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate teaching_plain table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TeachingPlain::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `teaching_plain`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this TeachingPlain from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TeachingPlain object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = TeachingPlain::Load($this->intIdteachingPlain);

			// Update $this's local variables to match
			$this->Teacher = $objReloaded->Teacher;
			$this->Course = $objReloaded->Course;
			$this->YearlySubject = $objReloaded->YearlySubject;
			$this->CalendarYear = $objReloaded->CalendarYear;
			$this->strContent = $objReloaded->strContent;
			$this->dttPlainedDate = $objReloaded->dttPlainedDate;
			$this->dttExecutionDate = $objReloaded->dttExecutionDate;
			$this->strReason = $objReloaded->strReason;
			$this->strCorrectiveStep = $objReloaded->strCorrectiveStep;
			$this->dttPostponeDate = $objReloaded->dttPostponeDate;
			$this->blnCompleted = $objReloaded->blnCompleted;
			$this->intDays = $objReloaded->intDays;
			$this->TimeSlot = $objReloaded->TimeSlot;
			$this->DataBy = $objReloaded->DataBy;
			$this->dttDate = $objReloaded->dttDate;
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
				case 'IdteachingPlain':
					/**
					 * Gets the value for intIdteachingPlain (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdteachingPlain;

				case 'Teacher':
					/**
					 * Gets the value for intTeacher (Not Null)
					 * @return integer
					 */
					return $this->intTeacher;

				case 'Course':
					/**
					 * Gets the value for intCourse 
					 * @return integer
					 */
					return $this->intCourse;

				case 'YearlySubject':
					/**
					 * Gets the value for intYearlySubject (Not Null)
					 * @return integer
					 */
					return $this->intYearlySubject;

				case 'CalendarYear':
					/**
					 * Gets the value for intCalendarYear 
					 * @return integer
					 */
					return $this->intCalendarYear;

				case 'Content':
					/**
					 * Gets the value for strContent 
					 * @return string
					 */
					return $this->strContent;

				case 'PlainedDate':
					/**
					 * Gets the value for dttPlainedDate 
					 * @return QDateTime
					 */
					return $this->dttPlainedDate;

				case 'ExecutionDate':
					/**
					 * Gets the value for dttExecutionDate 
					 * @return QDateTime
					 */
					return $this->dttExecutionDate;

				case 'Reason':
					/**
					 * Gets the value for strReason 
					 * @return string
					 */
					return $this->strReason;

				case 'CorrectiveStep':
					/**
					 * Gets the value for strCorrectiveStep 
					 * @return string
					 */
					return $this->strCorrectiveStep;

				case 'PostponeDate':
					/**
					 * Gets the value for dttPostponeDate 
					 * @return QDateTime
					 */
					return $this->dttPostponeDate;

				case 'Completed':
					/**
					 * Gets the value for blnCompleted 
					 * @return boolean
					 */
					return $this->blnCompleted;

				case 'Days':
					/**
					 * Gets the value for intDays 
					 * @return integer
					 */
					return $this->intDays;

				case 'TimeSlot':
					/**
					 * Gets the value for intTimeSlot 
					 * @return integer
					 */
					return $this->intTimeSlot;

				case 'DataBy':
					/**
					 * Gets the value for intDataBy 
					 * @return integer
					 */
					return $this->intDataBy;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;


				///////////////////
				// Member Objects
				///////////////////
				case 'TeacherObject':
					/**
					 * Gets the value for the Login object referenced by intTeacher (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objTeacherObject) && (!is_null($this->intTeacher)))
							$this->objTeacherObject = Login::Load($this->intTeacher);
						return $this->objTeacherObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CourseObject':
					/**
					 * Gets the value for the Role object referenced by intCourse 
					 * @return Role
					 */
					try {
						if ((!$this->objCourseObject) && (!is_null($this->intCourse)))
							$this->objCourseObject = Role::Load($this->intCourse);
						return $this->objCourseObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'YearlySubjectObject':
					/**
					 * Gets the value for the YearSubject object referenced by intYearlySubject (Not Null)
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

				case 'CalendarYearObject':
					/**
					 * Gets the value for the CalenderYear object referenced by intCalendarYear 
					 * @return CalenderYear
					 */
					try {
						if ((!$this->objCalendarYearObject) && (!is_null($this->intCalendarYear)))
							$this->objCalendarYearObject = CalenderYear::Load($this->intCalendarYear);
						return $this->objCalendarYearObject;
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

				case 'DataByObject':
					/**
					 * Gets the value for the Login object referenced by intDataBy 
					 * @return Login
					 */
					try {
						if ((!$this->objDataByObject) && (!is_null($this->intDataBy)))
							$this->objDataByObject = Login::Load($this->intDataBy);
						return $this->objDataByObject;
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
				case 'Teacher':
					/**
					 * Sets the value for intTeacher (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTeacherObject = null;
						return ($this->intTeacher = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Course':
					/**
					 * Sets the value for intCourse 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCourseObject = null;
						return ($this->intCourse = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'YearlySubject':
					/**
					 * Sets the value for intYearlySubject (Not Null)
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

				case 'CalendarYear':
					/**
					 * Sets the value for intCalendarYear 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCalendarYearObject = null;
						return ($this->intCalendarYear = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Content':
					/**
					 * Sets the value for strContent 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strContent = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PlainedDate':
					/**
					 * Sets the value for dttPlainedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPlainedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExecutionDate':
					/**
					 * Sets the value for dttExecutionDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttExecutionDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Reason':
					/**
					 * Sets the value for strReason 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strReason = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CorrectiveStep':
					/**
					 * Sets the value for strCorrectiveStep 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCorrectiveStep = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PostponeDate':
					/**
					 * Sets the value for dttPostponeDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttPostponeDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Completed':
					/**
					 * Sets the value for blnCompleted 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCompleted = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Days':
					/**
					 * Sets the value for intDays 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intDays = QType::Cast($mixValue, QType::Integer));
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

				case 'DataBy':
					/**
					 * Sets the value for intDataBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDataByObject = null;
						return ($this->intDataBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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


				///////////////////
				// Member Objects
				///////////////////
				case 'TeacherObject':
					/**
					 * Sets the value for the Login object referenced by intTeacher (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intTeacher = null;
						$this->objTeacherObject = null;
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
							throw new QCallerException('Unable to set an unsaved TeacherObject for this TeachingPlain');

						// Update Local Member Variables
						$this->objTeacherObject = $mixValue;
						$this->intTeacher = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CourseObject':
					/**
					 * Sets the value for the Role object referenced by intCourse 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intCourse = null;
						$this->objCourseObject = null;
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
							throw new QCallerException('Unable to set an unsaved CourseObject for this TeachingPlain');

						// Update Local Member Variables
						$this->objCourseObject = $mixValue;
						$this->intCourse = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'YearlySubjectObject':
					/**
					 * Sets the value for the YearSubject object referenced by intYearlySubject (Not Null)
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
							throw new QCallerException('Unable to set an unsaved YearlySubjectObject for this TeachingPlain');

						// Update Local Member Variables
						$this->objYearlySubjectObject = $mixValue;
						$this->intYearlySubject = $mixValue->IdyearSubject;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CalendarYearObject':
					/**
					 * Sets the value for the CalenderYear object referenced by intCalendarYear 
					 * @param CalenderYear $mixValue
					 * @return CalenderYear
					 */
					if (is_null($mixValue)) {
						$this->intCalendarYear = null;
						$this->objCalendarYearObject = null;
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
							throw new QCallerException('Unable to set an unsaved CalendarYearObject for this TeachingPlain');

						// Update Local Member Variables
						$this->objCalendarYearObject = $mixValue;
						$this->intCalendarYear = $mixValue->IdcalenderYear;

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
							throw new QCallerException('Unable to set an unsaved TimeSlotObject for this TeachingPlain');

						// Update Local Member Variables
						$this->objTimeSlotObject = $mixValue;
						$this->intTimeSlot = $mixValue->IdtimeSlot;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataByObject':
					/**
					 * Sets the value for the Login object referenced by intDataBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intDataBy = null;
						$this->objDataByObject = null;
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
							throw new QCallerException('Unable to set an unsaved DataByObject for this TeachingPlain');

						// Update Local Member Variables
						$this->objDataByObject = $mixValue;
						$this->intDataBy = $mixValue->Idlogin;

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
			return "teaching_plain";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[TeachingPlain::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="TeachingPlain"><sequence>';
			$strToReturn .= '<element name="IdteachingPlain" type="xsd:int"/>';
			$strToReturn .= '<element name="TeacherObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="CourseObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="YearlySubjectObject" type="xsd1:YearSubject"/>';
			$strToReturn .= '<element name="CalendarYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="Content" type="xsd:string"/>';
			$strToReturn .= '<element name="PlainedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ExecutionDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Reason" type="xsd:string"/>';
			$strToReturn .= '<element name="CorrectiveStep" type="xsd:string"/>';
			$strToReturn .= '<element name="PostponeDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Completed" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Days" type="xsd:int"/>';
			$strToReturn .= '<element name="TimeSlotObject" type="xsd1:TimeSlot"/>';
			$strToReturn .= '<element name="DataByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TeachingPlain', $strComplexTypeArray)) {
				$strComplexTypeArray['TeachingPlain'] = TeachingPlain::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				YearSubject::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				TimeSlot::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TeachingPlain::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TeachingPlain();
			if (property_exists($objSoapObject, 'IdteachingPlain'))
				$objToReturn->intIdteachingPlain = $objSoapObject->IdteachingPlain;
			if ((property_exists($objSoapObject, 'TeacherObject')) &&
				($objSoapObject->TeacherObject))
				$objToReturn->TeacherObject = Login::GetObjectFromSoapObject($objSoapObject->TeacherObject);
			if ((property_exists($objSoapObject, 'CourseObject')) &&
				($objSoapObject->CourseObject))
				$objToReturn->CourseObject = Role::GetObjectFromSoapObject($objSoapObject->CourseObject);
			if ((property_exists($objSoapObject, 'YearlySubjectObject')) &&
				($objSoapObject->YearlySubjectObject))
				$objToReturn->YearlySubjectObject = YearSubject::GetObjectFromSoapObject($objSoapObject->YearlySubjectObject);
			if ((property_exists($objSoapObject, 'CalendarYearObject')) &&
				($objSoapObject->CalendarYearObject))
				$objToReturn->CalendarYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalendarYearObject);
			if (property_exists($objSoapObject, 'Content'))
				$objToReturn->strContent = $objSoapObject->Content;
			if (property_exists($objSoapObject, 'PlainedDate'))
				$objToReturn->dttPlainedDate = new QDateTime($objSoapObject->PlainedDate);
			if (property_exists($objSoapObject, 'ExecutionDate'))
				$objToReturn->dttExecutionDate = new QDateTime($objSoapObject->ExecutionDate);
			if (property_exists($objSoapObject, 'Reason'))
				$objToReturn->strReason = $objSoapObject->Reason;
			if (property_exists($objSoapObject, 'CorrectiveStep'))
				$objToReturn->strCorrectiveStep = $objSoapObject->CorrectiveStep;
			if (property_exists($objSoapObject, 'PostponeDate'))
				$objToReturn->dttPostponeDate = new QDateTime($objSoapObject->PostponeDate);
			if (property_exists($objSoapObject, 'Completed'))
				$objToReturn->blnCompleted = $objSoapObject->Completed;
			if (property_exists($objSoapObject, 'Days'))
				$objToReturn->intDays = $objSoapObject->Days;
			if ((property_exists($objSoapObject, 'TimeSlotObject')) &&
				($objSoapObject->TimeSlotObject))
				$objToReturn->TimeSlotObject = TimeSlot::GetObjectFromSoapObject($objSoapObject->TimeSlotObject);
			if ((property_exists($objSoapObject, 'DataByObject')) &&
				($objSoapObject->DataByObject))
				$objToReturn->DataByObject = Login::GetObjectFromSoapObject($objSoapObject->DataByObject);
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TeachingPlain::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objTeacherObject)
				$objObject->objTeacherObject = Login::GetSoapObjectFromObject($objObject->objTeacherObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTeacher = null;
			if ($objObject->objCourseObject)
				$objObject->objCourseObject = Role::GetSoapObjectFromObject($objObject->objCourseObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourse = null;
			if ($objObject->objYearlySubjectObject)
				$objObject->objYearlySubjectObject = YearSubject::GetSoapObjectFromObject($objObject->objYearlySubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intYearlySubject = null;
			if ($objObject->objCalendarYearObject)
				$objObject->objCalendarYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalendarYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalendarYear = null;
			if ($objObject->dttPlainedDate)
				$objObject->dttPlainedDate = $objObject->dttPlainedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttExecutionDate)
				$objObject->dttExecutionDate = $objObject->dttExecutionDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttPostponeDate)
				$objObject->dttPostponeDate = $objObject->dttPostponeDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objTimeSlotObject)
				$objObject->objTimeSlotObject = TimeSlot::GetSoapObjectFromObject($objObject->objTimeSlotObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTimeSlot = null;
			if ($objObject->objDataByObject)
				$objObject->objDataByObject = Login::GetSoapObjectFromObject($objObject->objDataByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDataBy = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdteachingPlain'] = $this->intIdteachingPlain;
			$iArray['Teacher'] = $this->intTeacher;
			$iArray['Course'] = $this->intCourse;
			$iArray['YearlySubject'] = $this->intYearlySubject;
			$iArray['CalendarYear'] = $this->intCalendarYear;
			$iArray['Content'] = $this->strContent;
			$iArray['PlainedDate'] = $this->dttPlainedDate;
			$iArray['ExecutionDate'] = $this->dttExecutionDate;
			$iArray['Reason'] = $this->strReason;
			$iArray['CorrectiveStep'] = $this->strCorrectiveStep;
			$iArray['PostponeDate'] = $this->dttPostponeDate;
			$iArray['Completed'] = $this->blnCompleted;
			$iArray['Days'] = $this->intDays;
			$iArray['TimeSlot'] = $this->intTimeSlot;
			$iArray['DataBy'] = $this->intDataBy;
			$iArray['Date'] = $this->dttDate;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdteachingPlain ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdteachingPlain
     * @property-read QQNode $Teacher
     * @property-read QQNodeLogin $TeacherObject
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $YearlySubject
     * @property-read QQNodeYearSubject $YearlySubjectObject
     * @property-read QQNode $CalendarYear
     * @property-read QQNodeCalenderYear $CalendarYearObject
     * @property-read QQNode $Content
     * @property-read QQNode $PlainedDate
     * @property-read QQNode $ExecutionDate
     * @property-read QQNode $Reason
     * @property-read QQNode $CorrectiveStep
     * @property-read QQNode $PostponeDate
     * @property-read QQNode $Completed
     * @property-read QQNode $Days
     * @property-read QQNode $TimeSlot
     * @property-read QQNodeTimeSlot $TimeSlotObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLogin $DataByObject
     * @property-read QQNode $Date
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTeachingPlain extends QQNode {
		protected $strTableName = 'teaching_plain';
		protected $strPrimaryKey = 'idteaching_plain';
		protected $strClassName = 'TeachingPlain';
		public function __get($strName) {
			switch ($strName) {
				case 'IdteachingPlain':
					return new QQNode('idteaching_plain', 'IdteachingPlain', 'Integer', $this);
				case 'Teacher':
					return new QQNode('teacher', 'Teacher', 'Integer', $this);
				case 'TeacherObject':
					return new QQNodeLogin('teacher', 'TeacherObject', 'Integer', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'Integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'Integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'Integer', $this);
				case 'YearlySubjectObject':
					return new QQNodeYearSubject('yearly_subject', 'YearlySubjectObject', 'Integer', $this);
				case 'CalendarYear':
					return new QQNode('calendar_year', 'CalendarYear', 'Integer', $this);
				case 'CalendarYearObject':
					return new QQNodeCalenderYear('calendar_year', 'CalendarYearObject', 'Integer', $this);
				case 'Content':
					return new QQNode('content', 'Content', 'Blob', $this);
				case 'PlainedDate':
					return new QQNode('plained_date', 'PlainedDate', 'Date', $this);
				case 'ExecutionDate':
					return new QQNode('execution_date', 'ExecutionDate', 'Date', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'Blob', $this);
				case 'CorrectiveStep':
					return new QQNode('corrective_step', 'CorrectiveStep', 'Blob', $this);
				case 'PostponeDate':
					return new QQNode('postpone_date', 'PostponeDate', 'Date', $this);
				case 'Completed':
					return new QQNode('completed', 'Completed', 'Bit', $this);
				case 'Days':
					return new QQNode('days', 'Days', 'Integer', $this);
				case 'TimeSlot':
					return new QQNode('time_slot', 'TimeSlot', 'Integer', $this);
				case 'TimeSlotObject':
					return new QQNodeTimeSlot('time_slot', 'TimeSlotObject', 'Integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'Integer', $this);
				case 'DataByObject':
					return new QQNodeLogin('data_by', 'DataByObject', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idteaching_plain', 'IdteachingPlain', 'Integer', $this);
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
     * @property-read QQNode $IdteachingPlain
     * @property-read QQNode $Teacher
     * @property-read QQNodeLogin $TeacherObject
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $YearlySubject
     * @property-read QQNodeYearSubject $YearlySubjectObject
     * @property-read QQNode $CalendarYear
     * @property-read QQNodeCalenderYear $CalendarYearObject
     * @property-read QQNode $Content
     * @property-read QQNode $PlainedDate
     * @property-read QQNode $ExecutionDate
     * @property-read QQNode $Reason
     * @property-read QQNode $CorrectiveStep
     * @property-read QQNode $PostponeDate
     * @property-read QQNode $Completed
     * @property-read QQNode $Days
     * @property-read QQNode $TimeSlot
     * @property-read QQNodeTimeSlot $TimeSlotObject
     * @property-read QQNode $DataBy
     * @property-read QQNodeLogin $DataByObject
     * @property-read QQNode $Date
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTeachingPlain extends QQReverseReferenceNode {
		protected $strTableName = 'teaching_plain';
		protected $strPrimaryKey = 'idteaching_plain';
		protected $strClassName = 'TeachingPlain';
		public function __get($strName) {
			switch ($strName) {
				case 'IdteachingPlain':
					return new QQNode('idteaching_plain', 'IdteachingPlain', 'integer', $this);
				case 'Teacher':
					return new QQNode('teacher', 'Teacher', 'integer', $this);
				case 'TeacherObject':
					return new QQNodeLogin('teacher', 'TeacherObject', 'integer', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'integer', $this);
				case 'YearlySubjectObject':
					return new QQNodeYearSubject('yearly_subject', 'YearlySubjectObject', 'integer', $this);
				case 'CalendarYear':
					return new QQNode('calendar_year', 'CalendarYear', 'integer', $this);
				case 'CalendarYearObject':
					return new QQNodeCalenderYear('calendar_year', 'CalendarYearObject', 'integer', $this);
				case 'Content':
					return new QQNode('content', 'Content', 'string', $this);
				case 'PlainedDate':
					return new QQNode('plained_date', 'PlainedDate', 'QDateTime', $this);
				case 'ExecutionDate':
					return new QQNode('execution_date', 'ExecutionDate', 'QDateTime', $this);
				case 'Reason':
					return new QQNode('reason', 'Reason', 'string', $this);
				case 'CorrectiveStep':
					return new QQNode('corrective_step', 'CorrectiveStep', 'string', $this);
				case 'PostponeDate':
					return new QQNode('postpone_date', 'PostponeDate', 'QDateTime', $this);
				case 'Completed':
					return new QQNode('completed', 'Completed', 'boolean', $this);
				case 'Days':
					return new QQNode('days', 'Days', 'integer', $this);
				case 'TimeSlot':
					return new QQNode('time_slot', 'TimeSlot', 'integer', $this);
				case 'TimeSlotObject':
					return new QQNodeTimeSlot('time_slot', 'TimeSlotObject', 'integer', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'integer', $this);
				case 'DataByObject':
					return new QQNodeLogin('data_by', 'DataByObject', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idteaching_plain', 'IdteachingPlain', 'integer', $this);
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
