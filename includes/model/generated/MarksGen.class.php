<?php
	/**
	 * The abstract MarksGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Marks subclass which
	 * extends this MarksGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Marks class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idmarks the value for intIdmarks (Read-Only PK)
	 * @property integer $Education the value for intEducation 
	 * @property integer $Subject the value for intSubject (Not Null)
	 * @property string $MarksObtained the value for strMarksObtained (Not Null)
	 * @property string $OutOf the value for strOutOf (Not Null)
	 * @property string $Per the value for strPer (Not Null)
	 * @property integer $StudentEducation the value for intStudentEducation 
	 * @property Education $EducationObject the value for the Education object referenced by intEducation 
	 * @property Subject $SubjectObject the value for the Subject object referenced by intSubject (Not Null)
	 * @property EducationDetails $StudentEducationObject the value for the EducationDetails object referenced by intStudentEducation 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MarksGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column marks.idmarks
		 * @var integer intIdmarks
		 */
		protected $intIdmarks;
		const IdmarksDefault = null;


		/**
		 * Protected member variable that maps to the database column marks.education
		 * @var integer intEducation
		 */
		protected $intEducation;
		const EducationDefault = null;


		/**
		 * Protected member variable that maps to the database column marks.subject
		 * @var integer intSubject
		 */
		protected $intSubject;
		const SubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column marks.marks_obtained
		 * @var string strMarksObtained
		 */
		protected $strMarksObtained;
		const MarksObtainedDefault = null;


		/**
		 * Protected member variable that maps to the database column marks.out_of
		 * @var string strOutOf
		 */
		protected $strOutOf;
		const OutOfDefault = null;


		/**
		 * Protected member variable that maps to the database column marks.per
		 * @var string strPer
		 */
		protected $strPer;
		const PerDefault = null;


		/**
		 * Protected member variable that maps to the database column marks.student_education
		 * @var integer intStudentEducation
		 */
		protected $intStudentEducation;
		const StudentEducationDefault = null;


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
		 * in the database column marks.education.
		 *
		 * NOTE: Always use the EducationObject property getter to correctly retrieve this Education object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Education objEducationObject
		 */
		protected $objEducationObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column marks.subject.
		 *
		 * NOTE: Always use the SubjectObject property getter to correctly retrieve this Subject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Subject objSubjectObject
		 */
		protected $objSubjectObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column marks.student_education.
		 *
		 * NOTE: Always use the StudentEducationObject property getter to correctly retrieve this EducationDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var EducationDetails objStudentEducationObject
		 */
		protected $objStudentEducationObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdmarks = Marks::IdmarksDefault;
			$this->intEducation = Marks::EducationDefault;
			$this->intSubject = Marks::SubjectDefault;
			$this->strMarksObtained = Marks::MarksObtainedDefault;
			$this->strOutOf = Marks::OutOfDefault;
			$this->strPer = Marks::PerDefault;
			$this->intStudentEducation = Marks::StudentEducationDefault;
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
		 * Load a Marks from PK Info
		 * @param integer $intIdmarks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks
		 */
		public static function Load($intIdmarks, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Marks', $intIdmarks);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Marks::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Marks()->Idmarks, $intIdmarks)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Markses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Marks::QueryArray to perform the LoadAll query
			try {
				return Marks::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Markses
		 * @return int
		 */
		public static function CountAll() {
			// Call Marks::QueryCount to perform the CountAll query
			return Marks::QueryCount(QQ::All());
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
			$objDatabase = Marks::GetDatabase();

			// Create/Build out the QueryBuilder object with Marks-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'marks');

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
				Marks::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('marks');

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
		 * Static Qcubed Query method to query for a single Marks object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Marks the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Marks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Marks object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Marks::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Marks::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Marks objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Marks[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Marks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Marks::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Marks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Marks objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Marks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Marks::GetDatabase();

			$strQuery = Marks::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/marks', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Marks::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Marks
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'marks';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idmarks', $strAliasPrefix . 'idmarks');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idmarks', $strAliasPrefix . 'idmarks');
			    $objBuilder->AddSelectItem($strTableName, 'education', $strAliasPrefix . 'education');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
			    $objBuilder->AddSelectItem($strTableName, 'marks_obtained', $strAliasPrefix . 'marks_obtained');
			    $objBuilder->AddSelectItem($strTableName, 'out_of', $strAliasPrefix . 'out_of');
			    $objBuilder->AddSelectItem($strTableName, 'per', $strAliasPrefix . 'per');
			    $objBuilder->AddSelectItem($strTableName, 'student_education', $strAliasPrefix . 'student_education');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Marks from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Marks::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Marks
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Marks object
			$objToReturn = new Marks();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idmarks';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdmarks = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'education';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intEducation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'marks_obtained';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMarksObtained = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'out_of';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOutOf = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'per';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPer = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'student_education';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStudentEducation = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idmarks != $objPreviousItem->Idmarks) {
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
				$strAliasPrefix = 'marks__';

			// Check for EducationObject Early Binding
			$strAlias = $strAliasPrefix . 'education__ideducation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEducationObject = Education::InstantiateDbRow($objDbRow, $strAliasPrefix . 'education__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'subject__idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubjectObject = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StudentEducationObject Early Binding
			$strAlias = $strAliasPrefix . 'student_education__ideducation_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStudentEducationObject = EducationDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'student_education__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Markses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Marks[]
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
					$objItem = Marks::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Marks::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Marks object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Marks next row resulting from the query
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
			return Marks::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Marks object,
		 * by Idmarks Index(es)
		 * @param integer $intIdmarks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks
		*/
		public static function LoadByIdmarks($intIdmarks, $objOptionalClauses = null) {
			return Marks::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Marks()->Idmarks, $intIdmarks)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Marks objects,
		 * by Education Index(es)
		 * @param integer $intEducation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		*/
		public static function LoadArrayByEducation($intEducation, $objOptionalClauses = null) {
			// Call Marks::QueryArray to perform the LoadArrayByEducation query
			try {
				return Marks::QueryArray(
					QQ::Equal(QQN::Marks()->Education, $intEducation),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Markses
		 * by Education Index(es)
		 * @param integer $intEducation
		 * @return int
		*/
		public static function CountByEducation($intEducation) {
			// Call Marks::QueryCount to perform the CountByEducation query
			return Marks::QueryCount(
				QQ::Equal(QQN::Marks()->Education, $intEducation)
			);
		}

		/**
		 * Load an array of Marks objects,
		 * by StudentEducation Index(es)
		 * @param integer $intStudentEducation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		*/
		public static function LoadArrayByStudentEducation($intStudentEducation, $objOptionalClauses = null) {
			// Call Marks::QueryArray to perform the LoadArrayByStudentEducation query
			try {
				return Marks::QueryArray(
					QQ::Equal(QQN::Marks()->StudentEducation, $intStudentEducation),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Markses
		 * by StudentEducation Index(es)
		 * @param integer $intStudentEducation
		 * @return int
		*/
		public static function CountByStudentEducation($intStudentEducation) {
			// Call Marks::QueryCount to perform the CountByStudentEducation query
			return Marks::QueryCount(
				QQ::Equal(QQN::Marks()->StudentEducation, $intStudentEducation)
			);
		}

		/**
		 * Load an array of Marks objects,
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		*/
		public static function LoadArrayBySubject($intSubject, $objOptionalClauses = null) {
			// Call Marks::QueryArray to perform the LoadArrayBySubject query
			try {
				return Marks::QueryArray(
					QQ::Equal(QQN::Marks()->Subject, $intSubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Markses
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @return int
		*/
		public static function CountBySubject($intSubject) {
			// Call Marks::QueryCount to perform the CountBySubject query
			return Marks::QueryCount(
				QQ::Equal(QQN::Marks()->Subject, $intSubject)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Marks
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Marks::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `marks` (
							`education`,
							`subject`,
							`marks_obtained`,
							`out_of`,
							`per`,
							`student_education`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intEducation) . ',
							' . $objDatabase->SqlVariable($this->intSubject) . ',
							' . $objDatabase->SqlVariable($this->strMarksObtained) . ',
							' . $objDatabase->SqlVariable($this->strOutOf) . ',
							' . $objDatabase->SqlVariable($this->strPer) . ',
							' . $objDatabase->SqlVariable($this->intStudentEducation) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdmarks = $objDatabase->InsertId('marks', 'idmarks');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`marks`
						SET
							`education` = ' . $objDatabase->SqlVariable($this->intEducation) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->intSubject) . ',
							`marks_obtained` = ' . $objDatabase->SqlVariable($this->strMarksObtained) . ',
							`out_of` = ' . $objDatabase->SqlVariable($this->strOutOf) . ',
							`per` = ' . $objDatabase->SqlVariable($this->strPer) . ',
							`student_education` = ' . $objDatabase->SqlVariable($this->intStudentEducation) . '
						WHERE
							`idmarks` = ' . $objDatabase->SqlVariable($this->intIdmarks) . '
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
		 * Delete this Marks
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdmarks)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Marks with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Marks::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($this->intIdmarks) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Marks ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Marks', $this->intIdmarks);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Markses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Marks::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate marks table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Marks::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `marks`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Marks from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Marks object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Marks::Load($this->intIdmarks);

			// Update $this's local variables to match
			$this->Education = $objReloaded->Education;
			$this->Subject = $objReloaded->Subject;
			$this->strMarksObtained = $objReloaded->strMarksObtained;
			$this->strOutOf = $objReloaded->strOutOf;
			$this->strPer = $objReloaded->strPer;
			$this->StudentEducation = $objReloaded->StudentEducation;
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
				case 'Idmarks':
					/**
					 * Gets the value for intIdmarks (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdmarks;

				case 'Education':
					/**
					 * Gets the value for intEducation 
					 * @return integer
					 */
					return $this->intEducation;

				case 'Subject':
					/**
					 * Gets the value for intSubject (Not Null)
					 * @return integer
					 */
					return $this->intSubject;

				case 'MarksObtained':
					/**
					 * Gets the value for strMarksObtained (Not Null)
					 * @return string
					 */
					return $this->strMarksObtained;

				case 'OutOf':
					/**
					 * Gets the value for strOutOf (Not Null)
					 * @return string
					 */
					return $this->strOutOf;

				case 'Per':
					/**
					 * Gets the value for strPer (Not Null)
					 * @return string
					 */
					return $this->strPer;

				case 'StudentEducation':
					/**
					 * Gets the value for intStudentEducation 
					 * @return integer
					 */
					return $this->intStudentEducation;


				///////////////////
				// Member Objects
				///////////////////
				case 'EducationObject':
					/**
					 * Gets the value for the Education object referenced by intEducation 
					 * @return Education
					 */
					try {
						if ((!$this->objEducationObject) && (!is_null($this->intEducation)))
							$this->objEducationObject = Education::Load($this->intEducation);
						return $this->objEducationObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'StudentEducationObject':
					/**
					 * Gets the value for the EducationDetails object referenced by intStudentEducation 
					 * @return EducationDetails
					 */
					try {
						if ((!$this->objStudentEducationObject) && (!is_null($this->intStudentEducation)))
							$this->objStudentEducationObject = EducationDetails::Load($this->intStudentEducation);
						return $this->objStudentEducationObject;
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
				case 'Education':
					/**
					 * Sets the value for intEducation 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objEducationObject = null;
						return ($this->intEducation = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'MarksObtained':
					/**
					 * Sets the value for strMarksObtained (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMarksObtained = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OutOf':
					/**
					 * Sets the value for strOutOf (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOutOf = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Per':
					/**
					 * Sets the value for strPer (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPer = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StudentEducation':
					/**
					 * Sets the value for intStudentEducation 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStudentEducationObject = null;
						return ($this->intStudentEducation = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'EducationObject':
					/**
					 * Sets the value for the Education object referenced by intEducation 
					 * @param Education $mixValue
					 * @return Education
					 */
					if (is_null($mixValue)) {
						$this->intEducation = null;
						$this->objEducationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Education object
						try {
							$mixValue = QType::Cast($mixValue, 'Education');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Education object
						if (is_null($mixValue->Ideducation))
							throw new QCallerException('Unable to set an unsaved EducationObject for this Marks');

						// Update Local Member Variables
						$this->objEducationObject = $mixValue;
						$this->intEducation = $mixValue->Ideducation;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved SubjectObject for this Marks');

						// Update Local Member Variables
						$this->objSubjectObject = $mixValue;
						$this->intSubject = $mixValue->Idsubject;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StudentEducationObject':
					/**
					 * Sets the value for the EducationDetails object referenced by intStudentEducation 
					 * @param EducationDetails $mixValue
					 * @return EducationDetails
					 */
					if (is_null($mixValue)) {
						$this->intStudentEducation = null;
						$this->objStudentEducationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a EducationDetails object
						try {
							$mixValue = QType::Cast($mixValue, 'EducationDetails');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED EducationDetails object
						if (is_null($mixValue->IdeducationDetails))
							throw new QCallerException('Unable to set an unsaved StudentEducationObject for this Marks');

						// Update Local Member Variables
						$this->objStudentEducationObject = $mixValue;
						$this->intStudentEducation = $mixValue->IdeducationDetails;

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
			return "marks";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Marks::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Marks"><sequence>';
			$strToReturn .= '<element name="Idmarks" type="xsd:int"/>';
			$strToReturn .= '<element name="EducationObject" type="xsd1:Education"/>';
			$strToReturn .= '<element name="SubjectObject" type="xsd1:Subject"/>';
			$strToReturn .= '<element name="MarksObtained" type="xsd:string"/>';
			$strToReturn .= '<element name="OutOf" type="xsd:string"/>';
			$strToReturn .= '<element name="Per" type="xsd:string"/>';
			$strToReturn .= '<element name="StudentEducationObject" type="xsd1:EducationDetails"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Marks', $strComplexTypeArray)) {
				$strComplexTypeArray['Marks'] = Marks::GetSoapComplexTypeXml();
				Education::AlterSoapComplexTypeArray($strComplexTypeArray);
				Subject::AlterSoapComplexTypeArray($strComplexTypeArray);
				EducationDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Marks::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Marks();
			if (property_exists($objSoapObject, 'Idmarks'))
				$objToReturn->intIdmarks = $objSoapObject->Idmarks;
			if ((property_exists($objSoapObject, 'EducationObject')) &&
				($objSoapObject->EducationObject))
				$objToReturn->EducationObject = Education::GetObjectFromSoapObject($objSoapObject->EducationObject);
			if ((property_exists($objSoapObject, 'SubjectObject')) &&
				($objSoapObject->SubjectObject))
				$objToReturn->SubjectObject = Subject::GetObjectFromSoapObject($objSoapObject->SubjectObject);
			if (property_exists($objSoapObject, 'MarksObtained'))
				$objToReturn->strMarksObtained = $objSoapObject->MarksObtained;
			if (property_exists($objSoapObject, 'OutOf'))
				$objToReturn->strOutOf = $objSoapObject->OutOf;
			if (property_exists($objSoapObject, 'Per'))
				$objToReturn->strPer = $objSoapObject->Per;
			if ((property_exists($objSoapObject, 'StudentEducationObject')) &&
				($objSoapObject->StudentEducationObject))
				$objToReturn->StudentEducationObject = EducationDetails::GetObjectFromSoapObject($objSoapObject->StudentEducationObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Marks::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objEducationObject)
				$objObject->objEducationObject = Education::GetSoapObjectFromObject($objObject->objEducationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEducation = null;
			if ($objObject->objSubjectObject)
				$objObject->objSubjectObject = Subject::GetSoapObjectFromObject($objObject->objSubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubject = null;
			if ($objObject->objStudentEducationObject)
				$objObject->objStudentEducationObject = EducationDetails::GetSoapObjectFromObject($objObject->objStudentEducationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStudentEducation = null;
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
			$iArray['Idmarks'] = $this->intIdmarks;
			$iArray['Education'] = $this->intEducation;
			$iArray['Subject'] = $this->intSubject;
			$iArray['MarksObtained'] = $this->strMarksObtained;
			$iArray['OutOf'] = $this->strOutOf;
			$iArray['Per'] = $this->strPer;
			$iArray['StudentEducation'] = $this->intStudentEducation;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdmarks ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idmarks
     * @property-read QQNode $Education
     * @property-read QQNodeEducation $EducationObject
     * @property-read QQNode $Subject
     * @property-read QQNodeSubject $SubjectObject
     * @property-read QQNode $MarksObtained
     * @property-read QQNode $OutOf
     * @property-read QQNode $Per
     * @property-read QQNode $StudentEducation
     * @property-read QQNodeEducationDetails $StudentEducationObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeMarks extends QQNode {
		protected $strTableName = 'marks';
		protected $strPrimaryKey = 'idmarks';
		protected $strClassName = 'Marks';
		public function __get($strName) {
			switch ($strName) {
				case 'Idmarks':
					return new QQNode('idmarks', 'Idmarks', 'Integer', $this);
				case 'Education':
					return new QQNode('education', 'Education', 'Integer', $this);
				case 'EducationObject':
					return new QQNodeEducation('education', 'EducationObject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Integer', $this);
				case 'SubjectObject':
					return new QQNodeSubject('subject', 'SubjectObject', 'Integer', $this);
				case 'MarksObtained':
					return new QQNode('marks_obtained', 'MarksObtained', 'VarChar', $this);
				case 'OutOf':
					return new QQNode('out_of', 'OutOf', 'VarChar', $this);
				case 'Per':
					return new QQNode('per', 'Per', 'VarChar', $this);
				case 'StudentEducation':
					return new QQNode('student_education', 'StudentEducation', 'Integer', $this);
				case 'StudentEducationObject':
					return new QQNodeEducationDetails('student_education', 'StudentEducationObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idmarks', 'Idmarks', 'Integer', $this);
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
     * @property-read QQNode $Idmarks
     * @property-read QQNode $Education
     * @property-read QQNodeEducation $EducationObject
     * @property-read QQNode $Subject
     * @property-read QQNodeSubject $SubjectObject
     * @property-read QQNode $MarksObtained
     * @property-read QQNode $OutOf
     * @property-read QQNode $Per
     * @property-read QQNode $StudentEducation
     * @property-read QQNodeEducationDetails $StudentEducationObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeMarks extends QQReverseReferenceNode {
		protected $strTableName = 'marks';
		protected $strPrimaryKey = 'idmarks';
		protected $strClassName = 'Marks';
		public function __get($strName) {
			switch ($strName) {
				case 'Idmarks':
					return new QQNode('idmarks', 'Idmarks', 'integer', $this);
				case 'Education':
					return new QQNode('education', 'Education', 'integer', $this);
				case 'EducationObject':
					return new QQNodeEducation('education', 'EducationObject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'integer', $this);
				case 'SubjectObject':
					return new QQNodeSubject('subject', 'SubjectObject', 'integer', $this);
				case 'MarksObtained':
					return new QQNode('marks_obtained', 'MarksObtained', 'string', $this);
				case 'OutOf':
					return new QQNode('out_of', 'OutOf', 'string', $this);
				case 'Per':
					return new QQNode('per', 'Per', 'string', $this);
				case 'StudentEducation':
					return new QQNode('student_education', 'StudentEducation', 'integer', $this);
				case 'StudentEducationObject':
					return new QQNodeEducationDetails('student_education', 'StudentEducationObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idmarks', 'Idmarks', 'integer', $this);
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
