<?php
	/**
	 * The abstract YearSubjectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the YearSubject subclass which
	 * extends this YearSubjectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the YearSubject class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdyearSubject the value for intIdyearSubject (Read-Only PK)
	 * @property integer $Subject the value for intSubject (Not Null)
	 * @property integer $PeriodPerWeek the value for intPeriodPerWeek 
	 * @property string $Credits the value for strCredits 
	 * @property integer $Course the value for intCourse 
	 * @property integer $Semester the value for intSemester (Not Null)
	 * @property integer $Staff the value for intStaff 
	 * @property integer $Calender the value for intCalender 
	 * @property Subject $SubjectObject the value for the Subject object referenced by intSubject (Not Null)
	 * @property Role $CourseObject the value for the Role object referenced by intCourse 
	 * @property AcademicYear $SemesterObject the value for the AcademicYear object referenced by intSemester (Not Null)
	 * @property Login $StaffObject the value for the Login object referenced by intStaff 
	 * @property CalenderYear $CalenderObject the value for the CalenderYear object referenced by intCalender 
	 * @property-read StudAttendence $_StudAttendenceAsYearlySubject the value for the private _objStudAttendenceAsYearlySubject (Read-Only) if set due to an expansion on the stud_attendence.yearly_subject reverse relationship
	 * @property-read StudAttendence[] $_StudAttendenceAsYearlySubjectArray the value for the private _objStudAttendenceAsYearlySubjectArray (Read-Only) if set due to an ExpandAsArray on the stud_attendence.yearly_subject reverse relationship
	 * @property-read SubjectTought $_SubjectToughtAsSubject the value for the private _objSubjectToughtAsSubject (Read-Only) if set due to an expansion on the subject_tought.subject reverse relationship
	 * @property-read SubjectTought[] $_SubjectToughtAsSubjectArray the value for the private _objSubjectToughtAsSubjectArray (Read-Only) if set due to an ExpandAsArray on the subject_tought.subject reverse relationship
	 * @property-read TeachingPlain $_TeachingPlainAsYearlySubject the value for the private _objTeachingPlainAsYearlySubject (Read-Only) if set due to an expansion on the teaching_plain.yearly_subject reverse relationship
	 * @property-read TeachingPlain[] $_TeachingPlainAsYearlySubjectArray the value for the private _objTeachingPlainAsYearlySubjectArray (Read-Only) if set due to an ExpandAsArray on the teaching_plain.yearly_subject reverse relationship
	 * @property-read Timetable $_TimetableAsYearlySubject the value for the private _objTimetableAsYearlySubject (Read-Only) if set due to an expansion on the timetable.yearly_subject reverse relationship
	 * @property-read Timetable[] $_TimetableAsYearlySubjectArray the value for the private _objTimetableAsYearlySubjectArray (Read-Only) if set due to an ExpandAsArray on the timetable.yearly_subject reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class YearSubjectGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column year_subject.idyear_subject
		 * @var integer intIdyearSubject
		 */
		protected $intIdyearSubject;
		const IdyearSubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.subject
		 * @var integer intSubject
		 */
		protected $intSubject;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.period_per_week
		 * @var integer intPeriodPerWeek
		 */
		protected $intPeriodPerWeek;
		const PeriodPerWeekDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.credits
		 * @var string strCredits
		 */
		protected $strCredits;
		const CreditsDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.course
		 * @var integer intCourse
		 */
		protected $intCourse;
		const CourseDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.semester
		 * @var integer intSemester
		 */
		protected $intSemester;
		const SemesterDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.staff
		 * @var integer intStaff
		 */
		protected $intStaff;
		const StaffDefault = null;


		/**
		 * Protected member variable that maps to the database column year_subject.calender
		 * @var integer intCalender
		 */
		protected $intCalender;
		const CalenderDefault = null;


		/**
		 * Private member variable that stores a reference to a single StudAttendenceAsYearlySubject object
		 * (of type StudAttendence), if this YearSubject object was restored with
		 * an expansion on the stud_attendence association table.
		 * @var StudAttendence _objStudAttendenceAsYearlySubject;
		 */
		private $_objStudAttendenceAsYearlySubject;

		/**
		 * Private member variable that stores a reference to an array of StudAttendenceAsYearlySubject objects
		 * (of type StudAttendence[]), if this YearSubject object was restored with
		 * an ExpandAsArray on the stud_attendence association table.
		 * @var StudAttendence[] _objStudAttendenceAsYearlySubjectArray;
		 */
		private $_objStudAttendenceAsYearlySubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single SubjectToughtAsSubject object
		 * (of type SubjectTought), if this YearSubject object was restored with
		 * an expansion on the subject_tought association table.
		 * @var SubjectTought _objSubjectToughtAsSubject;
		 */
		private $_objSubjectToughtAsSubject;

		/**
		 * Private member variable that stores a reference to an array of SubjectToughtAsSubject objects
		 * (of type SubjectTought[]), if this YearSubject object was restored with
		 * an ExpandAsArray on the subject_tought association table.
		 * @var SubjectTought[] _objSubjectToughtAsSubjectArray;
		 */
		private $_objSubjectToughtAsSubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single TeachingPlainAsYearlySubject object
		 * (of type TeachingPlain), if this YearSubject object was restored with
		 * an expansion on the teaching_plain association table.
		 * @var TeachingPlain _objTeachingPlainAsYearlySubject;
		 */
		private $_objTeachingPlainAsYearlySubject;

		/**
		 * Private member variable that stores a reference to an array of TeachingPlainAsYearlySubject objects
		 * (of type TeachingPlain[]), if this YearSubject object was restored with
		 * an ExpandAsArray on the teaching_plain association table.
		 * @var TeachingPlain[] _objTeachingPlainAsYearlySubjectArray;
		 */
		private $_objTeachingPlainAsYearlySubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single TimetableAsYearlySubject object
		 * (of type Timetable), if this YearSubject object was restored with
		 * an expansion on the timetable association table.
		 * @var Timetable _objTimetableAsYearlySubject;
		 */
		private $_objTimetableAsYearlySubject;

		/**
		 * Private member variable that stores a reference to an array of TimetableAsYearlySubject objects
		 * (of type Timetable[]), if this YearSubject object was restored with
		 * an ExpandAsArray on the timetable association table.
		 * @var Timetable[] _objTimetableAsYearlySubjectArray;
		 */
		private $_objTimetableAsYearlySubjectArray = null;

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
		 * in the database column year_subject.subject.
		 *
		 * NOTE: Always use the SubjectObject property getter to correctly retrieve this Subject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Subject objSubjectObject
		 */
		protected $objSubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column year_subject.course.
		 *
		 * NOTE: Always use the CourseObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objCourseObject
		 */
		protected $objCourseObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column year_subject.semester.
		 *
		 * NOTE: Always use the SemesterObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objSemesterObject
		 */
		protected $objSemesterObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column year_subject.staff.
		 *
		 * NOTE: Always use the StaffObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objStaffObject
		 */
		protected $objStaffObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column year_subject.calender.
		 *
		 * NOTE: Always use the CalenderObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalenderObject
		 */
		protected $objCalenderObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdyearSubject = YearSubject::IdyearSubjectDefault;
			$this->intSubject = YearSubject::SubjectDefault;
			$this->intPeriodPerWeek = YearSubject::PeriodPerWeekDefault;
			$this->strCredits = YearSubject::CreditsDefault;
			$this->intCourse = YearSubject::CourseDefault;
			$this->intSemester = YearSubject::SemesterDefault;
			$this->intStaff = YearSubject::StaffDefault;
			$this->intCalender = YearSubject::CalenderDefault;
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
		 * Load a YearSubject from PK Info
		 * @param integer $intIdyearSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject
		 */
		public static function Load($intIdyearSubject, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'YearSubject', $intIdyearSubject);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = YearSubject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::YearSubject()->IdyearSubject, $intIdyearSubject)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all YearSubjects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call YearSubject::QueryArray to perform the LoadAll query
			try {
				return YearSubject::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all YearSubjects
		 * @return int
		 */
		public static function CountAll() {
			// Call YearSubject::QueryCount to perform the CountAll query
			return YearSubject::QueryCount(QQ::All());
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
			$objDatabase = YearSubject::GetDatabase();

			// Create/Build out the QueryBuilder object with YearSubject-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'year_subject');

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
				YearSubject::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('year_subject');

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
		 * Static Qcubed Query method to query for a single YearSubject object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return YearSubject the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = YearSubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new YearSubject object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = YearSubject::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return YearSubject::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of YearSubject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return YearSubject[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = YearSubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return YearSubject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = YearSubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of YearSubject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = YearSubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = YearSubject::GetDatabase();

			$strQuery = YearSubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/yearsubject', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = YearSubject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this YearSubject
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'year_subject';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idyear_subject', $strAliasPrefix . 'idyear_subject');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idyear_subject', $strAliasPrefix . 'idyear_subject');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			    $objBuilder->AddSelectItem($strTableName, 'period_per_week', $strAliasPrefix . 'period_per_week');
			    $objBuilder->AddSelectItem($strTableName, 'credits', $strAliasPrefix . 'credits');
			    $objBuilder->AddSelectItem($strTableName, 'course', $strAliasPrefix . 'course');
			    $objBuilder->AddSelectItem($strTableName, 'semester', $strAliasPrefix . 'semester');
			    $objBuilder->AddSelectItem($strTableName, 'staff', $strAliasPrefix . 'staff');
			    $objBuilder->AddSelectItem($strTableName, 'calender', $strAliasPrefix . 'calender');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a YearSubject from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this YearSubject::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return YearSubject
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdyearSubject == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'year_subject__';


						// Expanding reverse references: StudAttendenceAsYearlySubject
						$strAlias = $strAliasPrefix . 'studattendenceasyearlysubject__idstud_attendence';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objStudAttendenceAsYearlySubjectArray)
								$objPreviousItem->_objStudAttendenceAsYearlySubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objStudAttendenceAsYearlySubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objStudAttendenceAsYearlySubjectArray;
								$objChildItem = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasyearlysubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objStudAttendenceAsYearlySubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objStudAttendenceAsYearlySubjectArray[] = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SubjectToughtAsSubject
						$strAlias = $strAliasPrefix . 'subjecttoughtassubject__idsubject_tought';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSubjectToughtAsSubjectArray)
								$objPreviousItem->_objSubjectToughtAsSubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSubjectToughtAsSubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSubjectToughtAsSubjectArray;
								$objChildItem = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttoughtassubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSubjectToughtAsSubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSubjectToughtAsSubjectArray[] = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttoughtassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TeachingPlainAsYearlySubject
						$strAlias = $strAliasPrefix . 'teachingplainasyearlysubject__idteaching_plain';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTeachingPlainAsYearlySubjectArray)
								$objPreviousItem->_objTeachingPlainAsYearlySubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTeachingPlainAsYearlySubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTeachingPlainAsYearlySubjectArray;
								$objChildItem = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasyearlysubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTeachingPlainAsYearlySubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTeachingPlainAsYearlySubjectArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TimetableAsYearlySubject
						$strAlias = $strAliasPrefix . 'timetableasyearlysubject__idtimetable';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTimetableAsYearlySubjectArray)
								$objPreviousItem->_objTimetableAsYearlySubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTimetableAsYearlySubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTimetableAsYearlySubjectArray;
								$objChildItem = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasyearlysubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTimetableAsYearlySubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTimetableAsYearlySubjectArray[] = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'year_subject__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the YearSubject object
			$objToReturn = new YearSubject();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdyearSubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'period_per_week';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPeriodPerWeek = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'credits';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCredits = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'course';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCourse = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'semester';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSemester = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'staff';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStaff = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'calender';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalender = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdyearSubject != $objPreviousItem->IdyearSubject) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objStudAttendenceAsYearlySubjectArray);
					$cnt = count($objToReturn->_objStudAttendenceAsYearlySubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objStudAttendenceAsYearlySubjectArray, $objToReturn->_objStudAttendenceAsYearlySubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSubjectToughtAsSubjectArray);
					$cnt = count($objToReturn->_objSubjectToughtAsSubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSubjectToughtAsSubjectArray, $objToReturn->_objSubjectToughtAsSubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTeachingPlainAsYearlySubjectArray);
					$cnt = count($objToReturn->_objTeachingPlainAsYearlySubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTeachingPlainAsYearlySubjectArray, $objToReturn->_objTeachingPlainAsYearlySubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTimetableAsYearlySubjectArray);
					$cnt = count($objToReturn->_objTimetableAsYearlySubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTimetableAsYearlySubjectArray, $objToReturn->_objTimetableAsYearlySubjectArray)) {
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
				$strAliasPrefix = 'year_subject__';

			// Check for SubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'subject__idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubjectObject = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CourseObject Early Binding
			$strAlias = $strAliasPrefix . 'course__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourseObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'course__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SemesterObject Early Binding
			$strAlias = $strAliasPrefix . 'semester__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSemesterObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'semester__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StaffObject Early Binding
			$strAlias = $strAliasPrefix . 'staff__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStaffObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderObject Early Binding
			$strAlias = $strAliasPrefix . 'calender__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for StudAttendenceAsYearlySubject Virtual Binding
			$strAlias = $strAliasPrefix . 'studattendenceasyearlysubject__idstud_attendence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objStudAttendenceAsYearlySubjectArray)
				$objToReturn->_objStudAttendenceAsYearlySubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objStudAttendenceAsYearlySubjectArray[] = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objStudAttendenceAsYearlySubject = StudAttendence::InstantiateDbRow($objDbRow, $strAliasPrefix . 'studattendenceasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SubjectToughtAsSubject Virtual Binding
			$strAlias = $strAliasPrefix . 'subjecttoughtassubject__idsubject_tought';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSubjectToughtAsSubjectArray)
				$objToReturn->_objSubjectToughtAsSubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSubjectToughtAsSubjectArray[] = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttoughtassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSubjectToughtAsSubject = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttoughtassubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TeachingPlainAsYearlySubject Virtual Binding
			$strAlias = $strAliasPrefix . 'teachingplainasyearlysubject__idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTeachingPlainAsYearlySubjectArray)
				$objToReturn->_objTeachingPlainAsYearlySubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTeachingPlainAsYearlySubjectArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTeachingPlainAsYearlySubject = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TimetableAsYearlySubject Virtual Binding
			$strAlias = $strAliasPrefix . 'timetableasyearlysubject__idtimetable';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTimetableAsYearlySubjectArray)
				$objToReturn->_objTimetableAsYearlySubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTimetableAsYearlySubjectArray[] = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTimetableAsYearlySubject = Timetable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'timetableasyearlysubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of YearSubjects from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return YearSubject[]
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
					$objItem = YearSubject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = YearSubject::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single YearSubject object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return YearSubject next row resulting from the query
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
			return YearSubject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single YearSubject object,
		 * by IdyearSubject Index(es)
		 * @param integer $intIdyearSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject
		*/
		public static function LoadByIdyearSubject($intIdyearSubject, $objOptionalClauses = null) {
			return YearSubject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::YearSubject()->IdyearSubject, $intIdyearSubject)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of YearSubject objects,
		 * by Staff Index(es)
		 * @param integer $intStaff
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public static function LoadArrayByStaff($intStaff, $objOptionalClauses = null) {
			// Call YearSubject::QueryArray to perform the LoadArrayByStaff query
			try {
				return YearSubject::QueryArray(
					QQ::Equal(QQN::YearSubject()->Staff, $intStaff),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count YearSubjects
		 * by Staff Index(es)
		 * @param integer $intStaff
		 * @return int
		*/
		public static function CountByStaff($intStaff) {
			// Call YearSubject::QueryCount to perform the CountByStaff query
			return YearSubject::QueryCount(
				QQ::Equal(QQN::YearSubject()->Staff, $intStaff)
			);
		}

		/**
		 * Load an array of YearSubject objects,
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public static function LoadArrayBySubject($intSubject, $objOptionalClauses = null) {
			// Call YearSubject::QueryArray to perform the LoadArrayBySubject query
			try {
				return YearSubject::QueryArray(
					QQ::Equal(QQN::YearSubject()->Subject, $intSubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count YearSubjects
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @return int
		*/
		public static function CountBySubject($intSubject) {
			// Call YearSubject::QueryCount to perform the CountBySubject query
			return YearSubject::QueryCount(
				QQ::Equal(QQN::YearSubject()->Subject, $intSubject)
			);
		}

		/**
		 * Load an array of YearSubject objects,
		 * by Semester Index(es)
		 * @param integer $intSemester
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public static function LoadArrayBySemester($intSemester, $objOptionalClauses = null) {
			// Call YearSubject::QueryArray to perform the LoadArrayBySemester query
			try {
				return YearSubject::QueryArray(
					QQ::Equal(QQN::YearSubject()->Semester, $intSemester),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count YearSubjects
		 * by Semester Index(es)
		 * @param integer $intSemester
		 * @return int
		*/
		public static function CountBySemester($intSemester) {
			// Call YearSubject::QueryCount to perform the CountBySemester query
			return YearSubject::QueryCount(
				QQ::Equal(QQN::YearSubject()->Semester, $intSemester)
			);
		}

		/**
		 * Load an array of YearSubject objects,
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public static function LoadArrayByCourse($intCourse, $objOptionalClauses = null) {
			// Call YearSubject::QueryArray to perform the LoadArrayByCourse query
			try {
				return YearSubject::QueryArray(
					QQ::Equal(QQN::YearSubject()->Course, $intCourse),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count YearSubjects
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @return int
		*/
		public static function CountByCourse($intCourse) {
			// Call YearSubject::QueryCount to perform the CountByCourse query
			return YearSubject::QueryCount(
				QQ::Equal(QQN::YearSubject()->Course, $intCourse)
			);
		}

		/**
		 * Load an array of YearSubject objects,
		 * by Calender Index(es)
		 * @param integer $intCalender
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public static function LoadArrayByCalender($intCalender, $objOptionalClauses = null) {
			// Call YearSubject::QueryArray to perform the LoadArrayByCalender query
			try {
				return YearSubject::QueryArray(
					QQ::Equal(QQN::YearSubject()->Calender, $intCalender),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count YearSubjects
		 * by Calender Index(es)
		 * @param integer $intCalender
		 * @return int
		*/
		public static function CountByCalender($intCalender) {
			// Call YearSubject::QueryCount to perform the CountByCalender query
			return YearSubject::QueryCount(
				QQ::Equal(QQN::YearSubject()->Calender, $intCalender)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this YearSubject
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `year_subject` (
							`subject`,
							`period_per_week`,
							`credits`,
							`course`,
							`semester`,
							`staff`,
							`calender`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intSubject) . ',
							' . $objDatabase->SqlVariable($this->intPeriodPerWeek) . ',
							' . $objDatabase->SqlVariable($this->strCredits) . ',
							' . $objDatabase->SqlVariable($this->intCourse) . ',
							' . $objDatabase->SqlVariable($this->intSemester) . ',
							' . $objDatabase->SqlVariable($this->intStaff) . ',
							' . $objDatabase->SqlVariable($this->intCalender) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdyearSubject = $objDatabase->InsertId('year_subject', 'idyear_subject');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`year_subject`
						SET
							`subject` = ' . $objDatabase->SqlVariable($this->intSubject) . ',
							`period_per_week` = ' . $objDatabase->SqlVariable($this->intPeriodPerWeek) . ',
							`credits` = ' . $objDatabase->SqlVariable($this->strCredits) . ',
							`course` = ' . $objDatabase->SqlVariable($this->intCourse) . ',
							`semester` = ' . $objDatabase->SqlVariable($this->intSemester) . ',
							`staff` = ' . $objDatabase->SqlVariable($this->intStaff) . ',
							`calender` = ' . $objDatabase->SqlVariable($this->intCalender) . '
						WHERE
							`idyear_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
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
		 * Delete this YearSubject
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this YearSubject with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this YearSubject ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'YearSubject', $this->intIdyearSubject);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all YearSubjects
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate year_subject table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `year_subject`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this YearSubject from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved YearSubject object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = YearSubject::Load($this->intIdyearSubject);

			// Update $this's local variables to match
			$this->Subject = $objReloaded->Subject;
			$this->intPeriodPerWeek = $objReloaded->intPeriodPerWeek;
			$this->strCredits = $objReloaded->strCredits;
			$this->Course = $objReloaded->Course;
			$this->Semester = $objReloaded->Semester;
			$this->Staff = $objReloaded->Staff;
			$this->Calender = $objReloaded->Calender;
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
				case 'IdyearSubject':
					/**
					 * Gets the value for intIdyearSubject (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdyearSubject;

				case 'Subject':
					/**
					 * Gets the value for intSubject (Not Null)
					 * @return integer
					 */
					return $this->intSubject;

				case 'PeriodPerWeek':
					/**
					 * Gets the value for intPeriodPerWeek 
					 * @return integer
					 */
					return $this->intPeriodPerWeek;

				case 'Credits':
					/**
					 * Gets the value for strCredits 
					 * @return string
					 */
					return $this->strCredits;

				case 'Course':
					/**
					 * Gets the value for intCourse 
					 * @return integer
					 */
					return $this->intCourse;

				case 'Semester':
					/**
					 * Gets the value for intSemester (Not Null)
					 * @return integer
					 */
					return $this->intSemester;

				case 'Staff':
					/**
					 * Gets the value for intStaff 
					 * @return integer
					 */
					return $this->intStaff;

				case 'Calender':
					/**
					 * Gets the value for intCalender 
					 * @return integer
					 */
					return $this->intCalender;


				///////////////////
				// Member Objects
				///////////////////
				case 'SubjectObject':
					/**
					 * Gets the value for the Subject object referenced by intSubject (Not Null)
					 * @return Subject
					 */
					try {
						if ((!$this->objSubjectObject) && (!is_null($this->intSubject)))
							$this->objSubjectObject = Subject::Load($this->intSubject);
						return $this->objSubjectObject;
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

				case 'SemesterObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intSemester (Not Null)
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objSemesterObject) && (!is_null($this->intSemester)))
							$this->objSemesterObject = AcademicYear::Load($this->intSemester);
						return $this->objSemesterObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'CalenderObject':
					/**
					 * Gets the value for the CalenderYear object referenced by intCalender 
					 * @return CalenderYear
					 */
					try {
						if ((!$this->objCalenderObject) && (!is_null($this->intCalender)))
							$this->objCalenderObject = CalenderYear::Load($this->intCalender);
						return $this->objCalenderObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_StudAttendenceAsYearlySubject':
					/**
					 * Gets the value for the private _objStudAttendenceAsYearlySubject (Read-Only)
					 * if set due to an expansion on the stud_attendence.yearly_subject reverse relationship
					 * @return StudAttendence
					 */
					return $this->_objStudAttendenceAsYearlySubject;

				case '_StudAttendenceAsYearlySubjectArray':
					/**
					 * Gets the value for the private _objStudAttendenceAsYearlySubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the stud_attendence.yearly_subject reverse relationship
					 * @return StudAttendence[]
					 */
					return $this->_objStudAttendenceAsYearlySubjectArray;

				case '_SubjectToughtAsSubject':
					/**
					 * Gets the value for the private _objSubjectToughtAsSubject (Read-Only)
					 * if set due to an expansion on the subject_tought.subject reverse relationship
					 * @return SubjectTought
					 */
					return $this->_objSubjectToughtAsSubject;

				case '_SubjectToughtAsSubjectArray':
					/**
					 * Gets the value for the private _objSubjectToughtAsSubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the subject_tought.subject reverse relationship
					 * @return SubjectTought[]
					 */
					return $this->_objSubjectToughtAsSubjectArray;

				case '_TeachingPlainAsYearlySubject':
					/**
					 * Gets the value for the private _objTeachingPlainAsYearlySubject (Read-Only)
					 * if set due to an expansion on the teaching_plain.yearly_subject reverse relationship
					 * @return TeachingPlain
					 */
					return $this->_objTeachingPlainAsYearlySubject;

				case '_TeachingPlainAsYearlySubjectArray':
					/**
					 * Gets the value for the private _objTeachingPlainAsYearlySubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the teaching_plain.yearly_subject reverse relationship
					 * @return TeachingPlain[]
					 */
					return $this->_objTeachingPlainAsYearlySubjectArray;

				case '_TimetableAsYearlySubject':
					/**
					 * Gets the value for the private _objTimetableAsYearlySubject (Read-Only)
					 * if set due to an expansion on the timetable.yearly_subject reverse relationship
					 * @return Timetable
					 */
					return $this->_objTimetableAsYearlySubject;

				case '_TimetableAsYearlySubjectArray':
					/**
					 * Gets the value for the private _objTimetableAsYearlySubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the timetable.yearly_subject reverse relationship
					 * @return Timetable[]
					 */
					return $this->_objTimetableAsYearlySubjectArray;


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
				case 'Subject':
					/**
					 * Sets the value for intSubject (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSubjectObject = null;
						return ($this->intSubject = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PeriodPerWeek':
					/**
					 * Sets the value for intPeriodPerWeek 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPeriodPerWeek = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Credits':
					/**
					 * Sets the value for strCredits 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCredits = QType::Cast($mixValue, QType::String));
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

				case 'Semester':
					/**
					 * Sets the value for intSemester (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSemesterObject = null;
						return ($this->intSemester = QType::Cast($mixValue, QType::Integer));
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

				case 'Calender':
					/**
					 * Sets the value for intCalender 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCalenderObject = null;
						return ($this->intCalender = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'SubjectObject':
					/**
					 * Sets the value for the Subject object referenced by intSubject (Not Null)
					 * @param Subject $mixValue
					 * @return Subject
					 */
					if (is_null($mixValue)) {
						$this->intSubject = null;
						$this->objSubjectObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Subject object
						try {
							$mixValue = QType::Cast($mixValue, 'Subject');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Subject object
						if (is_null($mixValue->Idsubject))
							throw new QCallerException('Unable to set an unsaved SubjectObject for this YearSubject');

						// Update Local Member Variables
						$this->objSubjectObject = $mixValue;
						$this->intSubject = $mixValue->Idsubject;

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
							throw new QCallerException('Unable to set an unsaved CourseObject for this YearSubject');

						// Update Local Member Variables
						$this->objCourseObject = $mixValue;
						$this->intCourse = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SemesterObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intSemester (Not Null)
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intSemester = null;
						$this->objSemesterObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AcademicYear object
						try {
							$mixValue = QType::Cast($mixValue, 'AcademicYear');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AcademicYear object
						if (is_null($mixValue->IdacademicYear))
							throw new QCallerException('Unable to set an unsaved SemesterObject for this YearSubject');

						// Update Local Member Variables
						$this->objSemesterObject = $mixValue;
						$this->intSemester = $mixValue->IdacademicYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved StaffObject for this YearSubject');

						// Update Local Member Variables
						$this->objStaffObject = $mixValue;
						$this->intStaff = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CalenderObject':
					/**
					 * Sets the value for the CalenderYear object referenced by intCalender 
					 * @param CalenderYear $mixValue
					 * @return CalenderYear
					 */
					if (is_null($mixValue)) {
						$this->intCalender = null;
						$this->objCalenderObject = null;
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
							throw new QCallerException('Unable to set an unsaved CalenderObject for this YearSubject');

						// Update Local Member Variables
						$this->objCalenderObject = $mixValue;
						$this->intCalender = $mixValue->IdcalenderYear;

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



		// Related Objects' Methods for StudAttendenceAsYearlySubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated StudAttendencesAsYearlySubject as an array of StudAttendence objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		*/
		public function GetStudAttendenceAsYearlySubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdyearSubject)))
				return array();

			try {
				return StudAttendence::LoadArrayByYearlySubject($this->intIdyearSubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated StudAttendencesAsYearlySubject
		 * @return int
		*/
		public function CountStudAttendencesAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				return 0;

			return StudAttendence::CountByYearlySubject($this->intIdyearSubject);
		}

		/**
		 * Associates a StudAttendenceAsYearlySubject
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function AssociateStudAttendenceAsYearlySubject(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStudAttendenceAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateStudAttendenceAsYearlySubject on this YearSubject with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . '
			');
		}

		/**
		 * Unassociates a StudAttendenceAsYearlySubject
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function UnassociateStudAttendenceAsYearlySubject(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsYearlySubject on this YearSubject with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`yearly_subject` = null
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . ' AND
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Unassociates all StudAttendencesAsYearlySubject
		 * @return void
		*/
		public function UnassociateAllStudAttendencesAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsYearlySubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`stud_attendence`
				SET
					`yearly_subject` = null
				WHERE
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes an associated StudAttendenceAsYearlySubject
		 * @param StudAttendence $objStudAttendence
		 * @return void
		*/
		public function DeleteAssociatedStudAttendenceAsYearlySubject(StudAttendence $objStudAttendence) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objStudAttendence->IdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsYearlySubject on this YearSubject with an unsaved StudAttendence.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($objStudAttendence->IdstudAttendence) . ' AND
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes all associated StudAttendencesAsYearlySubject
		 * @return void
		*/
		public function DeleteAllStudAttendencesAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateStudAttendenceAsYearlySubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}


		// Related Objects' Methods for SubjectToughtAsSubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SubjectToughtsAsSubject as an array of SubjectTought objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public function GetSubjectToughtAsSubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdyearSubject)))
				return array();

			try {
				return SubjectTought::LoadArrayBySubject($this->intIdyearSubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SubjectToughtsAsSubject
		 * @return int
		*/
		public function CountSubjectToughtsAsSubject() {
			if ((is_null($this->intIdyearSubject)))
				return 0;

			return SubjectTought::CountBySubject($this->intIdyearSubject);
		}

		/**
		 * Associates a SubjectToughtAsSubject
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function AssociateSubjectToughtAsSubject(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectToughtAsSubject on this unsaved YearSubject.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectToughtAsSubject on this YearSubject with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . '
			');
		}

		/**
		 * Unassociates a SubjectToughtAsSubject
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function UnassociateSubjectToughtAsSubject(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectToughtAsSubject on this unsaved YearSubject.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectToughtAsSubject on this YearSubject with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`subject` = null
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Unassociates all SubjectToughtsAsSubject
		 * @return void
		*/
		public function UnassociateAllSubjectToughtsAsSubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectToughtAsSubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`subject` = null
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes an associated SubjectToughtAsSubject
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function DeleteAssociatedSubjectToughtAsSubject(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectToughtAsSubject on this unsaved YearSubject.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectToughtAsSubject on this YearSubject with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes all associated SubjectToughtsAsSubject
		 * @return void
		*/
		public function DeleteAllSubjectToughtsAsSubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectToughtAsSubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}


		// Related Objects' Methods for TeachingPlainAsYearlySubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TeachingPlainsAsYearlySubject as an array of TeachingPlain objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public function GetTeachingPlainAsYearlySubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdyearSubject)))
				return array();

			try {
				return TeachingPlain::LoadArrayByYearlySubject($this->intIdyearSubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TeachingPlainsAsYearlySubject
		 * @return int
		*/
		public function CountTeachingPlainsAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				return 0;

			return TeachingPlain::CountByYearlySubject($this->intIdyearSubject);
		}

		/**
		 * Associates a TeachingPlainAsYearlySubject
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function AssociateTeachingPlainAsYearlySubject(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsYearlySubject on this YearSubject with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . '
			');
		}

		/**
		 * Unassociates a TeachingPlainAsYearlySubject
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function UnassociateTeachingPlainAsYearlySubject(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsYearlySubject on this YearSubject with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`yearly_subject` = null
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Unassociates all TeachingPlainsAsYearlySubject
		 * @return void
		*/
		public function UnassociateAllTeachingPlainsAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsYearlySubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`yearly_subject` = null
				WHERE
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes an associated TeachingPlainAsYearlySubject
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function DeleteAssociatedTeachingPlainAsYearlySubject(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsYearlySubject on this YearSubject with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes all associated TeachingPlainsAsYearlySubject
		 * @return void
		*/
		public function DeleteAllTeachingPlainsAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsYearlySubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}


		// Related Objects' Methods for TimetableAsYearlySubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TimetablesAsYearlySubject as an array of Timetable objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Timetable[]
		*/
		public function GetTimetableAsYearlySubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdyearSubject)))
				return array();

			try {
				return Timetable::LoadArrayByYearlySubject($this->intIdyearSubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TimetablesAsYearlySubject
		 * @return int
		*/
		public function CountTimetablesAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				return 0;

			return Timetable::CountByYearlySubject($this->intIdyearSubject);
		}

		/**
		 * Associates a TimetableAsYearlySubject
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function AssociateTimetableAsYearlySubject(Timetable $objTimetable) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTimetableAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTimetableAsYearlySubject on this YearSubject with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . '
			');
		}

		/**
		 * Unassociates a TimetableAsYearlySubject
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function UnassociateTimetableAsYearlySubject(Timetable $objTimetable) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsYearlySubject on this YearSubject with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`yearly_subject` = null
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . ' AND
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Unassociates all TimetablesAsYearlySubject
		 * @return void
		*/
		public function UnassociateAllTimetablesAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsYearlySubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`timetable`
				SET
					`yearly_subject` = null
				WHERE
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes an associated TimetableAsYearlySubject
		 * @param Timetable $objTimetable
		 * @return void
		*/
		public function DeleteAssociatedTimetableAsYearlySubject(Timetable $objTimetable) {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsYearlySubject on this unsaved YearSubject.');
			if ((is_null($objTimetable->Idtimetable)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsYearlySubject on this YearSubject with an unsaved Timetable.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`idtimetable` = ' . $objDatabase->SqlVariable($objTimetable->Idtimetable) . ' AND
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
			');
		}

		/**
		 * Deletes all associated TimetablesAsYearlySubject
		 * @return void
		*/
		public function DeleteAllTimetablesAsYearlySubject() {
			if ((is_null($this->intIdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTimetableAsYearlySubject on this unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = YearSubject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`timetable`
				WHERE
					`yearly_subject` = ' . $objDatabase->SqlVariable($this->intIdyearSubject) . '
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
			return "year_subject";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[YearSubject::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="YearSubject"><sequence>';
			$strToReturn .= '<element name="IdyearSubject" type="xsd:int"/>';
			$strToReturn .= '<element name="SubjectObject" type="xsd1:Subject"/>';
			$strToReturn .= '<element name="PeriodPerWeek" type="xsd:int"/>';
			$strToReturn .= '<element name="Credits" type="xsd:string"/>';
			$strToReturn .= '<element name="CourseObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="SemesterObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="StaffObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="CalenderObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('YearSubject', $strComplexTypeArray)) {
				$strComplexTypeArray['YearSubject'] = YearSubject::GetSoapComplexTypeXml();
				Subject::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, YearSubject::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new YearSubject();
			if (property_exists($objSoapObject, 'IdyearSubject'))
				$objToReturn->intIdyearSubject = $objSoapObject->IdyearSubject;
			if ((property_exists($objSoapObject, 'SubjectObject')) &&
				($objSoapObject->SubjectObject))
				$objToReturn->SubjectObject = Subject::GetObjectFromSoapObject($objSoapObject->SubjectObject);
			if (property_exists($objSoapObject, 'PeriodPerWeek'))
				$objToReturn->intPeriodPerWeek = $objSoapObject->PeriodPerWeek;
			if (property_exists($objSoapObject, 'Credits'))
				$objToReturn->strCredits = $objSoapObject->Credits;
			if ((property_exists($objSoapObject, 'CourseObject')) &&
				($objSoapObject->CourseObject))
				$objToReturn->CourseObject = Role::GetObjectFromSoapObject($objSoapObject->CourseObject);
			if ((property_exists($objSoapObject, 'SemesterObject')) &&
				($objSoapObject->SemesterObject))
				$objToReturn->SemesterObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->SemesterObject);
			if ((property_exists($objSoapObject, 'StaffObject')) &&
				($objSoapObject->StaffObject))
				$objToReturn->StaffObject = Login::GetObjectFromSoapObject($objSoapObject->StaffObject);
			if ((property_exists($objSoapObject, 'CalenderObject')) &&
				($objSoapObject->CalenderObject))
				$objToReturn->CalenderObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalenderObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, YearSubject::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objSubjectObject)
				$objObject->objSubjectObject = Subject::GetSoapObjectFromObject($objObject->objSubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubject = null;
			if ($objObject->objCourseObject)
				$objObject->objCourseObject = Role::GetSoapObjectFromObject($objObject->objCourseObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourse = null;
			if ($objObject->objSemesterObject)
				$objObject->objSemesterObject = AcademicYear::GetSoapObjectFromObject($objObject->objSemesterObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSemester = null;
			if ($objObject->objStaffObject)
				$objObject->objStaffObject = Login::GetSoapObjectFromObject($objObject->objStaffObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStaff = null;
			if ($objObject->objCalenderObject)
				$objObject->objCalenderObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalenderObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalender = null;
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
			$iArray['IdyearSubject'] = $this->intIdyearSubject;
			$iArray['Subject'] = $this->intSubject;
			$iArray['PeriodPerWeek'] = $this->intPeriodPerWeek;
			$iArray['Credits'] = $this->strCredits;
			$iArray['Course'] = $this->intCourse;
			$iArray['Semester'] = $this->intSemester;
			$iArray['Staff'] = $this->intStaff;
			$iArray['Calender'] = $this->intCalender;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdyearSubject ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdyearSubject
     * @property-read QQNode $Subject
     * @property-read QQNodeSubject $SubjectObject
     * @property-read QQNode $PeriodPerWeek
     * @property-read QQNode $Credits
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $Semester
     * @property-read QQNodeAcademicYear $SemesterObject
     * @property-read QQNode $Staff
     * @property-read QQNodeLogin $StaffObject
     * @property-read QQNode $Calender
     * @property-read QQNodeCalenderYear $CalenderObject
     *
     *
     * @property-read QQReverseReferenceNodeStudAttendence $StudAttendenceAsYearlySubject
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectToughtAsSubject
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsYearlySubject
     * @property-read QQReverseReferenceNodeTimetable $TimetableAsYearlySubject

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeYearSubject extends QQNode {
		protected $strTableName = 'year_subject';
		protected $strPrimaryKey = 'idyear_subject';
		protected $strClassName = 'YearSubject';
		public function __get($strName) {
			switch ($strName) {
				case 'IdyearSubject':
					return new QQNode('idyear_subject', 'IdyearSubject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Integer', $this);
				case 'SubjectObject':
					return new QQNodeSubject('subject', 'SubjectObject', 'Integer', $this);
				case 'PeriodPerWeek':
					return new QQNode('period_per_week', 'PeriodPerWeek', 'Integer', $this);
				case 'Credits':
					return new QQNode('credits', 'Credits', 'VarChar', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'Integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'Integer', $this);
				case 'Semester':
					return new QQNode('semester', 'Semester', 'Integer', $this);
				case 'SemesterObject':
					return new QQNodeAcademicYear('semester', 'SemesterObject', 'Integer', $this);
				case 'Staff':
					return new QQNode('staff', 'Staff', 'Integer', $this);
				case 'StaffObject':
					return new QQNodeLogin('staff', 'StaffObject', 'Integer', $this);
				case 'Calender':
					return new QQNode('calender', 'Calender', 'Integer', $this);
				case 'CalenderObject':
					return new QQNodeCalenderYear('calender', 'CalenderObject', 'Integer', $this);
				case 'StudAttendenceAsYearlySubject':
					return new QQReverseReferenceNodeStudAttendence($this, 'studattendenceasyearlysubject', 'reverse_reference', 'yearly_subject');
				case 'SubjectToughtAsSubject':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttoughtassubject', 'reverse_reference', 'subject');
				case 'TeachingPlainAsYearlySubject':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainasyearlysubject', 'reverse_reference', 'yearly_subject');
				case 'TimetableAsYearlySubject':
					return new QQReverseReferenceNodeTimetable($this, 'timetableasyearlysubject', 'reverse_reference', 'yearly_subject');

				case '_PrimaryKeyNode':
					return new QQNode('idyear_subject', 'IdyearSubject', 'Integer', $this);
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
     * @property-read QQNode $IdyearSubject
     * @property-read QQNode $Subject
     * @property-read QQNodeSubject $SubjectObject
     * @property-read QQNode $PeriodPerWeek
     * @property-read QQNode $Credits
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $Semester
     * @property-read QQNodeAcademicYear $SemesterObject
     * @property-read QQNode $Staff
     * @property-read QQNodeLogin $StaffObject
     * @property-read QQNode $Calender
     * @property-read QQNodeCalenderYear $CalenderObject
     *
     *
     * @property-read QQReverseReferenceNodeStudAttendence $StudAttendenceAsYearlySubject
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectToughtAsSubject
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsYearlySubject
     * @property-read QQReverseReferenceNodeTimetable $TimetableAsYearlySubject

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeYearSubject extends QQReverseReferenceNode {
		protected $strTableName = 'year_subject';
		protected $strPrimaryKey = 'idyear_subject';
		protected $strClassName = 'YearSubject';
		public function __get($strName) {
			switch ($strName) {
				case 'IdyearSubject':
					return new QQNode('idyear_subject', 'IdyearSubject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'integer', $this);
				case 'SubjectObject':
					return new QQNodeSubject('subject', 'SubjectObject', 'integer', $this);
				case 'PeriodPerWeek':
					return new QQNode('period_per_week', 'PeriodPerWeek', 'integer', $this);
				case 'Credits':
					return new QQNode('credits', 'Credits', 'string', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'integer', $this);
				case 'Semester':
					return new QQNode('semester', 'Semester', 'integer', $this);
				case 'SemesterObject':
					return new QQNodeAcademicYear('semester', 'SemesterObject', 'integer', $this);
				case 'Staff':
					return new QQNode('staff', 'Staff', 'integer', $this);
				case 'StaffObject':
					return new QQNodeLogin('staff', 'StaffObject', 'integer', $this);
				case 'Calender':
					return new QQNode('calender', 'Calender', 'integer', $this);
				case 'CalenderObject':
					return new QQNodeCalenderYear('calender', 'CalenderObject', 'integer', $this);
				case 'StudAttendenceAsYearlySubject':
					return new QQReverseReferenceNodeStudAttendence($this, 'studattendenceasyearlysubject', 'reverse_reference', 'yearly_subject');
				case 'SubjectToughtAsSubject':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttoughtassubject', 'reverse_reference', 'subject');
				case 'TeachingPlainAsYearlySubject':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainasyearlysubject', 'reverse_reference', 'yearly_subject');
				case 'TimetableAsYearlySubject':
					return new QQReverseReferenceNodeTimetable($this, 'timetableasyearlysubject', 'reverse_reference', 'yearly_subject');

				case '_PrimaryKeyNode':
					return new QQNode('idyear_subject', 'IdyearSubject', 'integer', $this);
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
