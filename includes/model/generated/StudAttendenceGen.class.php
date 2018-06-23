<?php
	/**
	 * The abstract StudAttendenceGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the StudAttendence subclass which
	 * extends this StudAttendenceGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the StudAttendence class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdstudAttendence the value for intIdstudAttendence (Read-Only PK)
	 * @property integer $Student the value for intStudent (Not Null)
	 * @property integer $YearlySubject the value for intYearlySubject (Not Null)
	 * @property integer $Staff the value for intStaff (Not Null)
	 * @property boolean $Presenty the value for blnPresenty 
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property QDateTime $InTime the value for dttInTime 
	 * @property QDateTime $OutTime the value for dttOutTime 
	 * @property Login $StudentObject the value for the Login object referenced by intStudent (Not Null)
	 * @property YearSubject $YearlySubjectObject the value for the YearSubject object referenced by intYearlySubject (Not Null)
	 * @property Login $StaffObject the value for the Login object referenced by intStaff (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class StudAttendenceGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column stud_attendence.idstud_attendence
		 * @var integer intIdstudAttendence
		 */
		protected $intIdstudAttendence;
		const IdstudAttendenceDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.student
		 * @var integer intStudent
		 */
		protected $intStudent;
		const StudentDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.yearly_subject
		 * @var integer intYearlySubject
		 */
		protected $intYearlySubject;
		const YearlySubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.staff
		 * @var integer intStaff
		 */
		protected $intStaff;
		const StaffDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.presenty
		 * @var boolean blnPresenty
		 */
		protected $blnPresenty;
		const PresentyDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.in_time
		 * @var QDateTime dttInTime
		 */
		protected $dttInTime;
		const InTimeDefault = null;


		/**
		 * Protected member variable that maps to the database column stud_attendence.out_time
		 * @var QDateTime dttOutTime
		 */
		protected $dttOutTime;
		const OutTimeDefault = null;


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
		 * in the database column stud_attendence.student.
		 *
		 * NOTE: Always use the StudentObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objStudentObject
		 */
		protected $objStudentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column stud_attendence.yearly_subject.
		 *
		 * NOTE: Always use the YearlySubjectObject property getter to correctly retrieve this YearSubject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var YearSubject objYearlySubjectObject
		 */
		protected $objYearlySubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column stud_attendence.staff.
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
			$this->intIdstudAttendence = StudAttendence::IdstudAttendenceDefault;
			$this->intStudent = StudAttendence::StudentDefault;
			$this->intYearlySubject = StudAttendence::YearlySubjectDefault;
			$this->intStaff = StudAttendence::StaffDefault;
			$this->blnPresenty = StudAttendence::PresentyDefault;
			$this->dttDate = (StudAttendence::DateDefault === null)?null:new QDateTime(StudAttendence::DateDefault);
			$this->dttInTime = (StudAttendence::InTimeDefault === null)?null:new QDateTime(StudAttendence::InTimeDefault);
			$this->dttOutTime = (StudAttendence::OutTimeDefault === null)?null:new QDateTime(StudAttendence::OutTimeDefault);
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
		 * Load a StudAttendence from PK Info
		 * @param integer $intIdstudAttendence
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence
		 */
		public static function Load($intIdstudAttendence, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'StudAttendence', $intIdstudAttendence);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = StudAttendence::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StudAttendence()->IdstudAttendence, $intIdstudAttendence)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all StudAttendences
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call StudAttendence::QueryArray to perform the LoadAll query
			try {
				return StudAttendence::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all StudAttendences
		 * @return int
		 */
		public static function CountAll() {
			// Call StudAttendence::QueryCount to perform the CountAll query
			return StudAttendence::QueryCount(QQ::All());
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
			$objDatabase = StudAttendence::GetDatabase();

			// Create/Build out the QueryBuilder object with StudAttendence-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'stud_attendence');

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
				StudAttendence::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('stud_attendence');

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
		 * Static Qcubed Query method to query for a single StudAttendence object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return StudAttendence the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StudAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new StudAttendence object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = StudAttendence::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return StudAttendence::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of StudAttendence objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return StudAttendence[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StudAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return StudAttendence::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = StudAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of StudAttendence objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = StudAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = StudAttendence::GetDatabase();

			$strQuery = StudAttendence::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/studattendence', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = StudAttendence::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this StudAttendence
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'stud_attendence';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idstud_attendence', $strAliasPrefix . 'idstud_attendence');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idstud_attendence', $strAliasPrefix . 'idstud_attendence');
			    $objBuilder->AddSelectItem($strTableName, 'student', $strAliasPrefix . 'student');
			    $objBuilder->AddSelectItem($strTableName, 'yearly_subject', $strAliasPrefix . 'yearly_subject');
			    $objBuilder->AddSelectItem($strTableName, 'staff', $strAliasPrefix . 'staff');
			    $objBuilder->AddSelectItem($strTableName, 'presenty', $strAliasPrefix . 'presenty');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'in_time', $strAliasPrefix . 'in_time');
			    $objBuilder->AddSelectItem($strTableName, 'out_time', $strAliasPrefix . 'out_time');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a StudAttendence from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this StudAttendence::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return StudAttendence
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the StudAttendence object
			$objToReturn = new StudAttendence();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idstud_attendence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdstudAttendence = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'student';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStudent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'yearly_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intYearlySubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'staff';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStaff = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'presenty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnPresenty = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'in_time';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttInTime = $objDbRow->GetColumn($strAliasName, 'Time');
			$strAlias = $strAliasPrefix . 'out_time';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttOutTime = $objDbRow->GetColumn($strAliasName, 'Time');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdstudAttendence != $objPreviousItem->IdstudAttendence) {
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
				$strAliasPrefix = 'stud_attendence__';

			// Check for StudentObject Early Binding
			$strAlias = $strAliasPrefix . 'student__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStudentObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'student__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for YearlySubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'yearly_subject__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objYearlySubjectObject = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearly_subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StaffObject Early Binding
			$strAlias = $strAliasPrefix . 'staff__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStaffObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'staff__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of StudAttendences from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return StudAttendence[]
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
					$objItem = StudAttendence::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = StudAttendence::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single StudAttendence object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return StudAttendence next row resulting from the query
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
			return StudAttendence::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single StudAttendence object,
		 * by IdstudAttendence Index(es)
		 * @param integer $intIdstudAttendence
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence
		*/
		public static function LoadByIdstudAttendence($intIdstudAttendence, $objOptionalClauses = null) {
			return StudAttendence::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::StudAttendence()->IdstudAttendence, $intIdstudAttendence)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of StudAttendence objects,
		 * by Student Index(es)
		 * @param integer $intStudent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		*/
		public static function LoadArrayByStudent($intStudent, $objOptionalClauses = null) {
			// Call StudAttendence::QueryArray to perform the LoadArrayByStudent query
			try {
				return StudAttendence::QueryArray(
					QQ::Equal(QQN::StudAttendence()->Student, $intStudent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count StudAttendences
		 * by Student Index(es)
		 * @param integer $intStudent
		 * @return int
		*/
		public static function CountByStudent($intStudent) {
			// Call StudAttendence::QueryCount to perform the CountByStudent query
			return StudAttendence::QueryCount(
				QQ::Equal(QQN::StudAttendence()->Student, $intStudent)
			);
		}

		/**
		 * Load an array of StudAttendence objects,
		 * by Staff Index(es)
		 * @param integer $intStaff
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		*/
		public static function LoadArrayByStaff($intStaff, $objOptionalClauses = null) {
			// Call StudAttendence::QueryArray to perform the LoadArrayByStaff query
			try {
				return StudAttendence::QueryArray(
					QQ::Equal(QQN::StudAttendence()->Staff, $intStaff),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count StudAttendences
		 * by Staff Index(es)
		 * @param integer $intStaff
		 * @return int
		*/
		public static function CountByStaff($intStaff) {
			// Call StudAttendence::QueryCount to perform the CountByStaff query
			return StudAttendence::QueryCount(
				QQ::Equal(QQN::StudAttendence()->Staff, $intStaff)
			);
		}

		/**
		 * Load an array of StudAttendence objects,
		 * by YearlySubject Index(es)
		 * @param integer $intYearlySubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return StudAttendence[]
		*/
		public static function LoadArrayByYearlySubject($intYearlySubject, $objOptionalClauses = null) {
			// Call StudAttendence::QueryArray to perform the LoadArrayByYearlySubject query
			try {
				return StudAttendence::QueryArray(
					QQ::Equal(QQN::StudAttendence()->YearlySubject, $intYearlySubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count StudAttendences
		 * by YearlySubject Index(es)
		 * @param integer $intYearlySubject
		 * @return int
		*/
		public static function CountByYearlySubject($intYearlySubject) {
			// Call StudAttendence::QueryCount to perform the CountByYearlySubject query
			return StudAttendence::QueryCount(
				QQ::Equal(QQN::StudAttendence()->YearlySubject, $intYearlySubject)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this StudAttendence
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = StudAttendence::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `stud_attendence` (
							`student`,
							`yearly_subject`,
							`staff`,
							`presenty`,
							`date`,
							`in_time`,
							`out_time`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intStudent) . ',
							' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							' . $objDatabase->SqlVariable($this->intStaff) . ',
							' . $objDatabase->SqlVariable($this->blnPresenty) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->dttInTime) . ',
							' . $objDatabase->SqlVariable($this->dttOutTime) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdstudAttendence = $objDatabase->InsertId('stud_attendence', 'idstud_attendence');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`stud_attendence`
						SET
							`student` = ' . $objDatabase->SqlVariable($this->intStudent) . ',
							`yearly_subject` = ' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							`staff` = ' . $objDatabase->SqlVariable($this->intStaff) . ',
							`presenty` = ' . $objDatabase->SqlVariable($this->blnPresenty) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`in_time` = ' . $objDatabase->SqlVariable($this->dttInTime) . ',
							`out_time` = ' . $objDatabase->SqlVariable($this->dttOutTime) . '
						WHERE
							`idstud_attendence` = ' . $objDatabase->SqlVariable($this->intIdstudAttendence) . '
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
		 * Delete this StudAttendence
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdstudAttendence)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this StudAttendence with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = StudAttendence::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`
				WHERE
					`idstud_attendence` = ' . $objDatabase->SqlVariable($this->intIdstudAttendence) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this StudAttendence ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'StudAttendence', $this->intIdstudAttendence);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all StudAttendences
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = StudAttendence::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`stud_attendence`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate stud_attendence table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = StudAttendence::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `stud_attendence`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this StudAttendence from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved StudAttendence object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = StudAttendence::Load($this->intIdstudAttendence);

			// Update $this's local variables to match
			$this->Student = $objReloaded->Student;
			$this->YearlySubject = $objReloaded->YearlySubject;
			$this->Staff = $objReloaded->Staff;
			$this->blnPresenty = $objReloaded->blnPresenty;
			$this->dttDate = $objReloaded->dttDate;
			$this->dttInTime = $objReloaded->dttInTime;
			$this->dttOutTime = $objReloaded->dttOutTime;
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
				case 'IdstudAttendence':
					/**
					 * Gets the value for intIdstudAttendence (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdstudAttendence;

				case 'Student':
					/**
					 * Gets the value for intStudent (Not Null)
					 * @return integer
					 */
					return $this->intStudent;

				case 'YearlySubject':
					/**
					 * Gets the value for intYearlySubject (Not Null)
					 * @return integer
					 */
					return $this->intYearlySubject;

				case 'Staff':
					/**
					 * Gets the value for intStaff (Not Null)
					 * @return integer
					 */
					return $this->intStaff;

				case 'Presenty':
					/**
					 * Gets the value for blnPresenty 
					 * @return boolean
					 */
					return $this->blnPresenty;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
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


				///////////////////
				// Member Objects
				///////////////////
				case 'StudentObject':
					/**
					 * Gets the value for the Login object referenced by intStudent (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objStudentObject) && (!is_null($this->intStudent)))
							$this->objStudentObject = Login::Load($this->intStudent);
						return $this->objStudentObject;
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

				case 'StaffObject':
					/**
					 * Gets the value for the Login object referenced by intStaff (Not Null)
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
				case 'Student':
					/**
					 * Sets the value for intStudent (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStudentObject = null;
						return ($this->intStudent = QType::Cast($mixValue, QType::Integer));
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

				case 'Staff':
					/**
					 * Sets the value for intStaff (Not Null)
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

				case 'Presenty':
					/**
					 * Sets the value for blnPresenty 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnPresenty = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Date':
					/**
					 * Sets the value for dttDate (Not Null)
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


				///////////////////
				// Member Objects
				///////////////////
				case 'StudentObject':
					/**
					 * Sets the value for the Login object referenced by intStudent (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intStudent = null;
						$this->objStudentObject = null;
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
							throw new QCallerException('Unable to set an unsaved StudentObject for this StudAttendence');

						// Update Local Member Variables
						$this->objStudentObject = $mixValue;
						$this->intStudent = $mixValue->Idlogin;

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
							throw new QCallerException('Unable to set an unsaved YearlySubjectObject for this StudAttendence');

						// Update Local Member Variables
						$this->objYearlySubjectObject = $mixValue;
						$this->intYearlySubject = $mixValue->IdyearSubject;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StaffObject':
					/**
					 * Sets the value for the Login object referenced by intStaff (Not Null)
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
							throw new QCallerException('Unable to set an unsaved StaffObject for this StudAttendence');

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
			return "stud_attendence";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[StudAttendence::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="StudAttendence"><sequence>';
			$strToReturn .= '<element name="IdstudAttendence" type="xsd:int"/>';
			$strToReturn .= '<element name="StudentObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="YearlySubjectObject" type="xsd1:YearSubject"/>';
			$strToReturn .= '<element name="StaffObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Presenty" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="InTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="OutTime" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('StudAttendence', $strComplexTypeArray)) {
				$strComplexTypeArray['StudAttendence'] = StudAttendence::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				YearSubject::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, StudAttendence::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new StudAttendence();
			if (property_exists($objSoapObject, 'IdstudAttendence'))
				$objToReturn->intIdstudAttendence = $objSoapObject->IdstudAttendence;
			if ((property_exists($objSoapObject, 'StudentObject')) &&
				($objSoapObject->StudentObject))
				$objToReturn->StudentObject = Login::GetObjectFromSoapObject($objSoapObject->StudentObject);
			if ((property_exists($objSoapObject, 'YearlySubjectObject')) &&
				($objSoapObject->YearlySubjectObject))
				$objToReturn->YearlySubjectObject = YearSubject::GetObjectFromSoapObject($objSoapObject->YearlySubjectObject);
			if ((property_exists($objSoapObject, 'StaffObject')) &&
				($objSoapObject->StaffObject))
				$objToReturn->StaffObject = Login::GetObjectFromSoapObject($objSoapObject->StaffObject);
			if (property_exists($objSoapObject, 'Presenty'))
				$objToReturn->blnPresenty = $objSoapObject->Presenty;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'InTime'))
				$objToReturn->dttInTime = new QDateTime($objSoapObject->InTime);
			if (property_exists($objSoapObject, 'OutTime'))
				$objToReturn->dttOutTime = new QDateTime($objSoapObject->OutTime);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, StudAttendence::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objStudentObject)
				$objObject->objStudentObject = Login::GetSoapObjectFromObject($objObject->objStudentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStudent = null;
			if ($objObject->objYearlySubjectObject)
				$objObject->objYearlySubjectObject = YearSubject::GetSoapObjectFromObject($objObject->objYearlySubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intYearlySubject = null;
			if ($objObject->objStaffObject)
				$objObject->objStaffObject = Login::GetSoapObjectFromObject($objObject->objStaffObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStaff = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttInTime)
				$objObject->dttInTime = $objObject->dttInTime->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttOutTime)
				$objObject->dttOutTime = $objObject->dttOutTime->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdstudAttendence'] = $this->intIdstudAttendence;
			$iArray['Student'] = $this->intStudent;
			$iArray['YearlySubject'] = $this->intYearlySubject;
			$iArray['Staff'] = $this->intStaff;
			$iArray['Presenty'] = $this->blnPresenty;
			$iArray['Date'] = $this->dttDate;
			$iArray['InTime'] = $this->dttInTime;
			$iArray['OutTime'] = $this->dttOutTime;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdstudAttendence ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdstudAttendence
     * @property-read QQNode $Student
     * @property-read QQNodeLogin $StudentObject
     * @property-read QQNode $YearlySubject
     * @property-read QQNodeYearSubject $YearlySubjectObject
     * @property-read QQNode $Staff
     * @property-read QQNodeLogin $StaffObject
     * @property-read QQNode $Presenty
     * @property-read QQNode $Date
     * @property-read QQNode $InTime
     * @property-read QQNode $OutTime
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeStudAttendence extends QQNode {
		protected $strTableName = 'stud_attendence';
		protected $strPrimaryKey = 'idstud_attendence';
		protected $strClassName = 'StudAttendence';
		public function __get($strName) {
			switch ($strName) {
				case 'IdstudAttendence':
					return new QQNode('idstud_attendence', 'IdstudAttendence', 'Integer', $this);
				case 'Student':
					return new QQNode('student', 'Student', 'Integer', $this);
				case 'StudentObject':
					return new QQNodeLogin('student', 'StudentObject', 'Integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'Integer', $this);
				case 'YearlySubjectObject':
					return new QQNodeYearSubject('yearly_subject', 'YearlySubjectObject', 'Integer', $this);
				case 'Staff':
					return new QQNode('staff', 'Staff', 'Integer', $this);
				case 'StaffObject':
					return new QQNodeLogin('staff', 'StaffObject', 'Integer', $this);
				case 'Presenty':
					return new QQNode('presenty', 'Presenty', 'Bit', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'Date', $this);
				case 'InTime':
					return new QQNode('in_time', 'InTime', 'Time', $this);
				case 'OutTime':
					return new QQNode('out_time', 'OutTime', 'Time', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idstud_attendence', 'IdstudAttendence', 'Integer', $this);
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
     * @property-read QQNode $IdstudAttendence
     * @property-read QQNode $Student
     * @property-read QQNodeLogin $StudentObject
     * @property-read QQNode $YearlySubject
     * @property-read QQNodeYearSubject $YearlySubjectObject
     * @property-read QQNode $Staff
     * @property-read QQNodeLogin $StaffObject
     * @property-read QQNode $Presenty
     * @property-read QQNode $Date
     * @property-read QQNode $InTime
     * @property-read QQNode $OutTime
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeStudAttendence extends QQReverseReferenceNode {
		protected $strTableName = 'stud_attendence';
		protected $strPrimaryKey = 'idstud_attendence';
		protected $strClassName = 'StudAttendence';
		public function __get($strName) {
			switch ($strName) {
				case 'IdstudAttendence':
					return new QQNode('idstud_attendence', 'IdstudAttendence', 'integer', $this);
				case 'Student':
					return new QQNode('student', 'Student', 'integer', $this);
				case 'StudentObject':
					return new QQNodeLogin('student', 'StudentObject', 'integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'integer', $this);
				case 'YearlySubjectObject':
					return new QQNodeYearSubject('yearly_subject', 'YearlySubjectObject', 'integer', $this);
				case 'Staff':
					return new QQNode('staff', 'Staff', 'integer', $this);
				case 'StaffObject':
					return new QQNodeLogin('staff', 'StaffObject', 'integer', $this);
				case 'Presenty':
					return new QQNode('presenty', 'Presenty', 'boolean', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'InTime':
					return new QQNode('in_time', 'InTime', 'QDateTime', $this);
				case 'OutTime':
					return new QQNode('out_time', 'OutTime', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idstud_attendence', 'IdstudAttendence', 'integer', $this);
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
