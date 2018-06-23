<?php
	/**
	 * The abstract SubjectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Subject subclass which
	 * extends this SubjectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Subject class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idsubject the value for intIdsubject (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property string $Description the value for strDescription 
	 * @property integer $Parrent the value for intParrent 
	 * @property Subject $ParrentObject the value for the Subject object referenced by intParrent 
	 * @property-read Marks $_Marks the value for the private _objMarks (Read-Only) if set due to an expansion on the marks.subject reverse relationship
	 * @property-read Marks[] $_MarksArray the value for the private _objMarksArray (Read-Only) if set due to an ExpandAsArray on the marks.subject reverse relationship
	 * @property-read ProfileHasQualifiedsubject $_ProfileHasQualifiedsubject the value for the private _objProfileHasQualifiedsubject (Read-Only) if set due to an expansion on the profile_has_qualifiedsubject.subject reverse relationship
	 * @property-read ProfileHasQualifiedsubject[] $_ProfileHasQualifiedsubjectArray the value for the private _objProfileHasQualifiedsubjectArray (Read-Only) if set due to an ExpandAsArray on the profile_has_qualifiedsubject.subject reverse relationship
	 * @property-read Subject $_SubjectAsParrent the value for the private _objSubjectAsParrent (Read-Only) if set due to an expansion on the subject.parrent reverse relationship
	 * @property-read Subject[] $_SubjectAsParrentArray the value for the private _objSubjectAsParrentArray (Read-Only) if set due to an ExpandAsArray on the subject.parrent reverse relationship
	 * @property-read YearSubject $_YearSubject the value for the private _objYearSubject (Read-Only) if set due to an expansion on the year_subject.subject reverse relationship
	 * @property-read YearSubject[] $_YearSubjectArray the value for the private _objYearSubjectArray (Read-Only) if set due to an ExpandAsArray on the year_subject.subject reverse relationship
	 * @property-read YearsubjectHasTopic $_YearsubjectHasTopicAsTopic the value for the private _objYearsubjectHasTopicAsTopic (Read-Only) if set due to an expansion on the yearsubject_has_topic.topic reverse relationship
	 * @property-read YearsubjectHasTopic[] $_YearsubjectHasTopicAsTopicArray the value for the private _objYearsubjectHasTopicAsTopicArray (Read-Only) if set due to an ExpandAsArray on the yearsubject_has_topic.topic reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SubjectGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column subject.idsubject
		 * @var integer intIdsubject
		 */
		protected $intIdsubject;
		const IdsubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column subject.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column subject.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column subject.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Private member variable that stores a reference to a single Marks object
		 * (of type Marks), if this Subject object was restored with
		 * an expansion on the marks association table.
		 * @var Marks _objMarks;
		 */
		private $_objMarks;

		/**
		 * Private member variable that stores a reference to an array of Marks objects
		 * (of type Marks[]), if this Subject object was restored with
		 * an ExpandAsArray on the marks association table.
		 * @var Marks[] _objMarksArray;
		 */
		private $_objMarksArray = null;

		/**
		 * Private member variable that stores a reference to a single ProfileHasQualifiedsubject object
		 * (of type ProfileHasQualifiedsubject), if this Subject object was restored with
		 * an expansion on the profile_has_qualifiedsubject association table.
		 * @var ProfileHasQualifiedsubject _objProfileHasQualifiedsubject;
		 */
		private $_objProfileHasQualifiedsubject;

		/**
		 * Private member variable that stores a reference to an array of ProfileHasQualifiedsubject objects
		 * (of type ProfileHasQualifiedsubject[]), if this Subject object was restored with
		 * an ExpandAsArray on the profile_has_qualifiedsubject association table.
		 * @var ProfileHasQualifiedsubject[] _objProfileHasQualifiedsubjectArray;
		 */
		private $_objProfileHasQualifiedsubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single SubjectAsParrent object
		 * (of type Subject), if this Subject object was restored with
		 * an expansion on the subject association table.
		 * @var Subject _objSubjectAsParrent;
		 */
		private $_objSubjectAsParrent;

		/**
		 * Private member variable that stores a reference to an array of SubjectAsParrent objects
		 * (of type Subject[]), if this Subject object was restored with
		 * an ExpandAsArray on the subject association table.
		 * @var Subject[] _objSubjectAsParrentArray;
		 */
		private $_objSubjectAsParrentArray = null;

		/**
		 * Private member variable that stores a reference to a single YearSubject object
		 * (of type YearSubject), if this Subject object was restored with
		 * an expansion on the year_subject association table.
		 * @var YearSubject _objYearSubject;
		 */
		private $_objYearSubject;

		/**
		 * Private member variable that stores a reference to an array of YearSubject objects
		 * (of type YearSubject[]), if this Subject object was restored with
		 * an ExpandAsArray on the year_subject association table.
		 * @var YearSubject[] _objYearSubjectArray;
		 */
		private $_objYearSubjectArray = null;

		/**
		 * Private member variable that stores a reference to a single YearsubjectHasTopicAsTopic object
		 * (of type YearsubjectHasTopic), if this Subject object was restored with
		 * an expansion on the yearsubject_has_topic association table.
		 * @var YearsubjectHasTopic _objYearsubjectHasTopicAsTopic;
		 */
		private $_objYearsubjectHasTopicAsTopic;

		/**
		 * Private member variable that stores a reference to an array of YearsubjectHasTopicAsTopic objects
		 * (of type YearsubjectHasTopic[]), if this Subject object was restored with
		 * an ExpandAsArray on the yearsubject_has_topic association table.
		 * @var YearsubjectHasTopic[] _objYearsubjectHasTopicAsTopicArray;
		 */
		private $_objYearsubjectHasTopicAsTopicArray = null;

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
		 * in the database column subject.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Subject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Subject objParrentObject
		 */
		protected $objParrentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdsubject = Subject::IdsubjectDefault;
			$this->strName = Subject::NameDefault;
			$this->strDescription = Subject::DescriptionDefault;
			$this->intParrent = Subject::ParrentDefault;
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
		 * Load a Subject from PK Info
		 * @param integer $intIdsubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Subject
		 */
		public static function Load($intIdsubject, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Subject', $intIdsubject);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Subject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Subject()->Idsubject, $intIdsubject)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Subjects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Subject[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Subject::QueryArray to perform the LoadAll query
			try {
				return Subject::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Subjects
		 * @return int
		 */
		public static function CountAll() {
			// Call Subject::QueryCount to perform the CountAll query
			return Subject::QueryCount(QQ::All());
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
			$objDatabase = Subject::GetDatabase();

			// Create/Build out the QueryBuilder object with Subject-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'subject');

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
				Subject::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('subject');

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
		 * Static Qcubed Query method to query for a single Subject object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Subject the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Subject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Subject object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Subject::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Subject::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Subject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Subject[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Subject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Subject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Subject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Subject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Subject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Subject::GetDatabase();

			$strQuery = Subject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/subject', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Subject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Subject
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'subject';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idsubject', $strAliasPrefix . 'idsubject');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idsubject', $strAliasPrefix . 'idsubject');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Subject from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Subject::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Subject
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdsubject == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'subject__';


						// Expanding reverse references: Marks
						$strAlias = $strAliasPrefix . 'marks__idmarks';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarksArray)
								$objPreviousItem->_objMarksArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarksArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarksArray;
								$objChildItem = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarksArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarksArray[] = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ProfileHasQualifiedsubject
						$strAlias = $strAliasPrefix . 'profilehasqualifiedsubject__idprofile_has_qualifiedsubject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileHasQualifiedsubjectArray)
								$objPreviousItem->_objProfileHasQualifiedsubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileHasQualifiedsubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileHasQualifiedsubjectArray;
								$objChildItem = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileHasQualifiedsubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileHasQualifiedsubjectArray[] = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SubjectAsParrent
						$strAlias = $strAliasPrefix . 'subjectasparrent__idsubject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSubjectAsParrentArray)
								$objPreviousItem->_objSubjectAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSubjectAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSubjectAsParrentArray;
								$objChildItem = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjectasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSubjectAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSubjectAsParrentArray[] = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjectasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: YearSubject
						$strAlias = $strAliasPrefix . 'yearsubject__idyear_subject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objYearSubjectArray)
								$objPreviousItem->_objYearSubjectArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objYearSubjectArray)) {
								$objPreviousChildItems = $objPreviousItem->_objYearSubjectArray;
								$objChildItem = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubject__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objYearSubjectArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objYearSubjectArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: YearsubjectHasTopicAsTopic
						$strAlias = $strAliasPrefix . 'yearsubjecthastopicastopic__idyearsubject_has_topic';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objYearsubjectHasTopicAsTopicArray)
								$objPreviousItem->_objYearsubjectHasTopicAsTopicArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objYearsubjectHasTopicAsTopicArray)) {
								$objPreviousChildItems = $objPreviousItem->_objYearsubjectHasTopicAsTopicArray;
								$objChildItem = YearsubjectHasTopic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjecthastopicastopic__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objYearsubjectHasTopicAsTopicArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objYearsubjectHasTopicAsTopicArray[] = YearsubjectHasTopic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjecthastopicastopic__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'subject__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Subject object
			$objToReturn = new Subject();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdsubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idsubject != $objPreviousItem->Idsubject) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objMarksArray);
					$cnt = count($objToReturn->_objMarksArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarksArray, $objToReturn->_objMarksArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileHasQualifiedsubjectArray);
					$cnt = count($objToReturn->_objProfileHasQualifiedsubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileHasQualifiedsubjectArray, $objToReturn->_objProfileHasQualifiedsubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSubjectAsParrentArray);
					$cnt = count($objToReturn->_objSubjectAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSubjectAsParrentArray, $objToReturn->_objSubjectAsParrentArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objYearSubjectArray);
					$cnt = count($objToReturn->_objYearSubjectArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objYearSubjectArray, $objToReturn->_objYearSubjectArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objYearsubjectHasTopicAsTopicArray);
					$cnt = count($objToReturn->_objYearsubjectHasTopicAsTopicArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objYearsubjectHasTopicAsTopicArray, $objToReturn->_objYearsubjectHasTopicAsTopicArray)) {
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
				$strAliasPrefix = 'subject__';

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for Marks Virtual Binding
			$strAlias = $strAliasPrefix . 'marks__idmarks';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarksArray)
				$objToReturn->_objMarksArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarksArray[] = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarks = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ProfileHasQualifiedsubject Virtual Binding
			$strAlias = $strAliasPrefix . 'profilehasqualifiedsubject__idprofile_has_qualifiedsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileHasQualifiedsubjectArray)
				$objToReturn->_objProfileHasQualifiedsubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileHasQualifiedsubjectArray[] = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfileHasQualifiedsubject = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profilehasqualifiedsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SubjectAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'subjectasparrent__idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSubjectAsParrentArray)
				$objToReturn->_objSubjectAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSubjectAsParrentArray[] = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjectasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSubjectAsParrent = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjectasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for YearSubject Virtual Binding
			$strAlias = $strAliasPrefix . 'yearsubject__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objYearSubjectArray)
				$objToReturn->_objYearSubjectArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objYearSubjectArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objYearSubject = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for YearsubjectHasTopicAsTopic Virtual Binding
			$strAlias = $strAliasPrefix . 'yearsubjecthastopicastopic__idyearsubject_has_topic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objYearsubjectHasTopicAsTopicArray)
				$objToReturn->_objYearsubjectHasTopicAsTopicArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objYearsubjectHasTopicAsTopicArray[] = YearsubjectHasTopic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjecthastopicastopic__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objYearsubjectHasTopicAsTopic = YearsubjectHasTopic::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjecthastopicastopic__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Subjects from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Subject[]
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
					$objItem = Subject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Subject::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Subject object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Subject next row resulting from the query
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
			return Subject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Subject object,
		 * by Idsubject Index(es)
		 * @param integer $intIdsubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Subject
		*/
		public static function LoadByIdsubject($intIdsubject, $objOptionalClauses = null) {
			return Subject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Subject()->Idsubject, $intIdsubject)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Subject object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Subject
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Subject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Subject()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Subject objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Subject[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Subject::QueryArray to perform the LoadArrayByParrent query
			try {
				return Subject::QueryArray(
					QQ::Equal(QQN::Subject()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Subjects
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Subject::QueryCount to perform the CountByParrent query
			return Subject::QueryCount(
				QQ::Equal(QQN::Subject()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Subject
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `subject` (
							`name`,
							`description`,
							`parrent`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdsubject = $objDatabase->InsertId('subject', 'idsubject');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`subject`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . '
						WHERE
							`idsubject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
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
		 * Delete this Subject
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Subject with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject`
				WHERE
					`idsubject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Subject ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Subject', $this->intIdsubject);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Subjects
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate subject table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `subject`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Subject from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Subject object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Subject::Load($this->intIdsubject);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strDescription = $objReloaded->strDescription;
			$this->Parrent = $objReloaded->Parrent;
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
				case 'Idsubject':
					/**
					 * Gets the value for intIdsubject (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdsubject;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Gets the value for the Subject object referenced by intParrent 
					 * @return Subject
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Subject::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Marks':
					/**
					 * Gets the value for the private _objMarks (Read-Only)
					 * if set due to an expansion on the marks.subject reverse relationship
					 * @return Marks
					 */
					return $this->_objMarks;

				case '_MarksArray':
					/**
					 * Gets the value for the private _objMarksArray (Read-Only)
					 * if set due to an ExpandAsArray on the marks.subject reverse relationship
					 * @return Marks[]
					 */
					return $this->_objMarksArray;

				case '_ProfileHasQualifiedsubject':
					/**
					 * Gets the value for the private _objProfileHasQualifiedsubject (Read-Only)
					 * if set due to an expansion on the profile_has_qualifiedsubject.subject reverse relationship
					 * @return ProfileHasQualifiedsubject
					 */
					return $this->_objProfileHasQualifiedsubject;

				case '_ProfileHasQualifiedsubjectArray':
					/**
					 * Gets the value for the private _objProfileHasQualifiedsubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile_has_qualifiedsubject.subject reverse relationship
					 * @return ProfileHasQualifiedsubject[]
					 */
					return $this->_objProfileHasQualifiedsubjectArray;

				case '_SubjectAsParrent':
					/**
					 * Gets the value for the private _objSubjectAsParrent (Read-Only)
					 * if set due to an expansion on the subject.parrent reverse relationship
					 * @return Subject
					 */
					return $this->_objSubjectAsParrent;

				case '_SubjectAsParrentArray':
					/**
					 * Gets the value for the private _objSubjectAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the subject.parrent reverse relationship
					 * @return Subject[]
					 */
					return $this->_objSubjectAsParrentArray;

				case '_YearSubject':
					/**
					 * Gets the value for the private _objYearSubject (Read-Only)
					 * if set due to an expansion on the year_subject.subject reverse relationship
					 * @return YearSubject
					 */
					return $this->_objYearSubject;

				case '_YearSubjectArray':
					/**
					 * Gets the value for the private _objYearSubjectArray (Read-Only)
					 * if set due to an ExpandAsArray on the year_subject.subject reverse relationship
					 * @return YearSubject[]
					 */
					return $this->_objYearSubjectArray;

				case '_YearsubjectHasTopicAsTopic':
					/**
					 * Gets the value for the private _objYearsubjectHasTopicAsTopic (Read-Only)
					 * if set due to an expansion on the yearsubject_has_topic.topic reverse relationship
					 * @return YearsubjectHasTopic
					 */
					return $this->_objYearsubjectHasTopicAsTopic;

				case '_YearsubjectHasTopicAsTopicArray':
					/**
					 * Gets the value for the private _objYearsubjectHasTopicAsTopicArray (Read-Only)
					 * if set due to an ExpandAsArray on the yearsubject_has_topic.topic reverse relationship
					 * @return YearsubjectHasTopic[]
					 */
					return $this->_objYearsubjectHasTopicAsTopicArray;


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

				case 'Description':
					/**
					 * Sets the value for strDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parrent':
					/**
					 * Sets the value for intParrent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParrentObject = null;
						return ($this->intParrent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ParrentObject':
					/**
					 * Sets the value for the Subject object referenced by intParrent 
					 * @param Subject $mixValue
					 * @return Subject
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
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
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Subject');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->Idsubject;

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



		// Related Objects' Methods for Marks
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Markses as an array of Marks objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		*/
		public function GetMarksArray($objOptionalClauses = null) {
			if ((is_null($this->intIdsubject)))
				return array();

			try {
				return Marks::LoadArrayBySubject($this->intIdsubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Markses
		 * @return int
		*/
		public function CountMarkses() {
			if ((is_null($this->intIdsubject)))
				return 0;

			return Marks::CountBySubject($this->intIdsubject);
		}

		/**
		 * Associates a Marks
		 * @param Marks $objMarks
		 * @return void
		*/
		public function AssociateMarks(Marks $objMarks) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarks on this unsaved Subject.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarks on this Subject with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . '
			');
		}

		/**
		 * Unassociates a Marks
		 * @param Marks $objMarks
		 * @return void
		*/
		public function UnassociateMarks(Marks $objMarks) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Subject.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this Subject with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`subject` = null
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Unassociates all Markses
		 * @return void
		*/
		public function UnassociateAllMarkses() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`subject` = null
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes an associated Marks
		 * @param Marks $objMarks
		 * @return void
		*/
		public function DeleteAssociatedMarks(Marks $objMarks) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Subject.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this Subject with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes all associated Markses
		 * @return void
		*/
		public function DeleteAllMarkses() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}


		// Related Objects' Methods for ProfileHasQualifiedsubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProfileHasQualifiedsubjects as an array of ProfileHasQualifiedsubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject[]
		*/
		public function GetProfileHasQualifiedsubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdsubject)))
				return array();

			try {
				return ProfileHasQualifiedsubject::LoadArrayBySubject($this->intIdsubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProfileHasQualifiedsubjects
		 * @return int
		*/
		public function CountProfileHasQualifiedsubjects() {
			if ((is_null($this->intIdsubject)))
				return 0;

			return ProfileHasQualifiedsubject::CountBySubject($this->intIdsubject);
		}

		/**
		 * Associates a ProfileHasQualifiedsubject
		 * @param ProfileHasQualifiedsubject $objProfileHasQualifiedsubject
		 * @return void
		*/
		public function AssociateProfileHasQualifiedsubject(ProfileHasQualifiedsubject $objProfileHasQualifiedsubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileHasQualifiedsubject on this unsaved Subject.');
			if ((is_null($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfileHasQualifiedsubject on this Subject with an unsaved ProfileHasQualifiedsubject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile_has_qualifiedsubject`
				SET
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject) . '
			');
		}

		/**
		 * Unassociates a ProfileHasQualifiedsubject
		 * @param ProfileHasQualifiedsubject $objProfileHasQualifiedsubject
		 * @return void
		*/
		public function UnassociateProfileHasQualifiedsubject(ProfileHasQualifiedsubject $objProfileHasQualifiedsubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Subject.');
			if ((is_null($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this Subject with an unsaved ProfileHasQualifiedsubject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile_has_qualifiedsubject`
				SET
					`subject` = null
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Unassociates all ProfileHasQualifiedsubjects
		 * @return void
		*/
		public function UnassociateAllProfileHasQualifiedsubjects() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile_has_qualifiedsubject`
				SET
					`subject` = null
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes an associated ProfileHasQualifiedsubject
		 * @param ProfileHasQualifiedsubject $objProfileHasQualifiedsubject
		 * @return void
		*/
		public function DeleteAssociatedProfileHasQualifiedsubject(ProfileHasQualifiedsubject $objProfileHasQualifiedsubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Subject.');
			if ((is_null($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this Subject with an unsaved ProfileHasQualifiedsubject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile_has_qualifiedsubject`
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($objProfileHasQualifiedsubject->IdprofileHasQualifiedsubject) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes all associated ProfileHasQualifiedsubjects
		 * @return void
		*/
		public function DeleteAllProfileHasQualifiedsubjects() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfileHasQualifiedsubject on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile_has_qualifiedsubject`
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}


		// Related Objects' Methods for SubjectAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SubjectsAsParrent as an array of Subject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Subject[]
		*/
		public function GetSubjectAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdsubject)))
				return array();

			try {
				return Subject::LoadArrayByParrent($this->intIdsubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SubjectsAsParrent
		 * @return int
		*/
		public function CountSubjectsAsParrent() {
			if ((is_null($this->intIdsubject)))
				return 0;

			return Subject::CountByParrent($this->intIdsubject);
		}

		/**
		 * Associates a SubjectAsParrent
		 * @param Subject $objSubject
		 * @return void
		*/
		public function AssociateSubjectAsParrent(Subject $objSubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectAsParrent on this unsaved Subject.');
			if ((is_null($objSubject->Idsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectAsParrent on this Subject with an unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
				WHERE
					`idsubject` = ' . $objDatabase->SqlVariable($objSubject->Idsubject) . '
			');
		}

		/**
		 * Unassociates a SubjectAsParrent
		 * @param Subject $objSubject
		 * @return void
		*/
		public function UnassociateSubjectAsParrent(Subject $objSubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectAsParrent on this unsaved Subject.');
			if ((is_null($objSubject->Idsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectAsParrent on this Subject with an unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject`
				SET
					`parrent` = null
				WHERE
					`idsubject` = ' . $objDatabase->SqlVariable($objSubject->Idsubject) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Unassociates all SubjectsAsParrent
		 * @return void
		*/
		public function UnassociateAllSubjectsAsParrent() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectAsParrent on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes an associated SubjectAsParrent
		 * @param Subject $objSubject
		 * @return void
		*/
		public function DeleteAssociatedSubjectAsParrent(Subject $objSubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectAsParrent on this unsaved Subject.');
			if ((is_null($objSubject->Idsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectAsParrent on this Subject with an unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject`
				WHERE
					`idsubject` = ' . $objDatabase->SqlVariable($objSubject->Idsubject) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes all associated SubjectsAsParrent
		 * @return void
		*/
		public function DeleteAllSubjectsAsParrent() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectAsParrent on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}


		// Related Objects' Methods for YearSubject
		//-------------------------------------------------------------------

		/**
		 * Gets all associated YearSubjects as an array of YearSubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public function GetYearSubjectArray($objOptionalClauses = null) {
			if ((is_null($this->intIdsubject)))
				return array();

			try {
				return YearSubject::LoadArrayBySubject($this->intIdsubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated YearSubjects
		 * @return int
		*/
		public function CountYearSubjects() {
			if ((is_null($this->intIdsubject)))
				return 0;

			return YearSubject::CountBySubject($this->intIdsubject);
		}

		/**
		 * Associates a YearSubject
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function AssociateYearSubject(YearSubject $objYearSubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubject on this unsaved Subject.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubject on this Subject with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . '
			');
		}

		/**
		 * Unassociates a YearSubject
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function UnassociateYearSubject(YearSubject $objYearSubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubject on this unsaved Subject.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubject on this Subject with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`subject` = null
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Unassociates all YearSubjects
		 * @return void
		*/
		public function UnassociateAllYearSubjects() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubject on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`subject` = null
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes an associated YearSubject
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function DeleteAssociatedYearSubject(YearSubject $objYearSubject) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubject on this unsaved Subject.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubject on this Subject with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes all associated YearSubjects
		 * @return void
		*/
		public function DeleteAllYearSubjects() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubject on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`subject` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}


		// Related Objects' Methods for YearsubjectHasTopicAsTopic
		//-------------------------------------------------------------------

		/**
		 * Gets all associated YearsubjectHasTopicsAsTopic as an array of YearsubjectHasTopic objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearsubjectHasTopic[]
		*/
		public function GetYearsubjectHasTopicAsTopicArray($objOptionalClauses = null) {
			if ((is_null($this->intIdsubject)))
				return array();

			try {
				return YearsubjectHasTopic::LoadArrayByTopic($this->intIdsubject, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated YearsubjectHasTopicsAsTopic
		 * @return int
		*/
		public function CountYearsubjectHasTopicsAsTopic() {
			if ((is_null($this->intIdsubject)))
				return 0;

			return YearsubjectHasTopic::CountByTopic($this->intIdsubject);
		}

		/**
		 * Associates a YearsubjectHasTopicAsTopic
		 * @param YearsubjectHasTopic $objYearsubjectHasTopic
		 * @return void
		*/
		public function AssociateYearsubjectHasTopicAsTopic(YearsubjectHasTopic $objYearsubjectHasTopic) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearsubjectHasTopicAsTopic on this unsaved Subject.');
			if ((is_null($objYearsubjectHasTopic->IdyearsubjectHasTopic)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearsubjectHasTopicAsTopic on this Subject with an unsaved YearsubjectHasTopic.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`yearsubject_has_topic`
				SET
					`topic` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
				WHERE
					`idyearsubject_has_topic` = ' . $objDatabase->SqlVariable($objYearsubjectHasTopic->IdyearsubjectHasTopic) . '
			');
		}

		/**
		 * Unassociates a YearsubjectHasTopicAsTopic
		 * @param YearsubjectHasTopic $objYearsubjectHasTopic
		 * @return void
		*/
		public function UnassociateYearsubjectHasTopicAsTopic(YearsubjectHasTopic $objYearsubjectHasTopic) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearsubjectHasTopicAsTopic on this unsaved Subject.');
			if ((is_null($objYearsubjectHasTopic->IdyearsubjectHasTopic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearsubjectHasTopicAsTopic on this Subject with an unsaved YearsubjectHasTopic.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`yearsubject_has_topic`
				SET
					`topic` = null
				WHERE
					`idyearsubject_has_topic` = ' . $objDatabase->SqlVariable($objYearsubjectHasTopic->IdyearsubjectHasTopic) . ' AND
					`topic` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Unassociates all YearsubjectHasTopicsAsTopic
		 * @return void
		*/
		public function UnassociateAllYearsubjectHasTopicsAsTopic() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearsubjectHasTopicAsTopic on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`yearsubject_has_topic`
				SET
					`topic` = null
				WHERE
					`topic` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes an associated YearsubjectHasTopicAsTopic
		 * @param YearsubjectHasTopic $objYearsubjectHasTopic
		 * @return void
		*/
		public function DeleteAssociatedYearsubjectHasTopicAsTopic(YearsubjectHasTopic $objYearsubjectHasTopic) {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearsubjectHasTopicAsTopic on this unsaved Subject.');
			if ((is_null($objYearsubjectHasTopic->IdyearsubjectHasTopic)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearsubjectHasTopicAsTopic on this Subject with an unsaved YearsubjectHasTopic.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`yearsubject_has_topic`
				WHERE
					`idyearsubject_has_topic` = ' . $objDatabase->SqlVariable($objYearsubjectHasTopic->IdyearsubjectHasTopic) . ' AND
					`topic` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
			');
		}

		/**
		 * Deletes all associated YearsubjectHasTopicsAsTopic
		 * @return void
		*/
		public function DeleteAllYearsubjectHasTopicsAsTopic() {
			if ((is_null($this->intIdsubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearsubjectHasTopicAsTopic on this unsaved Subject.');

			// Get the Database Object for this Class
			$objDatabase = Subject::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`yearsubject_has_topic`
				WHERE
					`topic` = ' . $objDatabase->SqlVariable($this->intIdsubject) . '
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
			return "subject";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Subject::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Subject"><sequence>';
			$strToReturn .= '<element name="Idsubject" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Subject"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Subject', $strComplexTypeArray)) {
				$strComplexTypeArray['Subject'] = Subject::GetSoapComplexTypeXml();
				Subject::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Subject::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Subject();
			if (property_exists($objSoapObject, 'Idsubject'))
				$objToReturn->intIdsubject = $objSoapObject->Idsubject;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Subject::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Subject::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Subject::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
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
			$iArray['Idsubject'] = $this->intIdsubject;
			$iArray['Name'] = $this->strName;
			$iArray['Description'] = $this->strDescription;
			$iArray['Parrent'] = $this->intParrent;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdsubject ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idsubject
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $Parrent
     * @property-read QQNodeSubject $ParrentObject
     *
     *
     * @property-read QQReverseReferenceNodeMarks $Marks
     * @property-read QQReverseReferenceNodeProfileHasQualifiedsubject $ProfileHasQualifiedsubject
     * @property-read QQReverseReferenceNodeSubject $SubjectAsParrent
     * @property-read QQReverseReferenceNodeYearSubject $YearSubject
     * @property-read QQReverseReferenceNodeYearsubjectHasTopic $YearsubjectHasTopicAsTopic

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeSubject extends QQNode {
		protected $strTableName = 'subject';
		protected $strPrimaryKey = 'idsubject';
		protected $strClassName = 'Subject';
		public function __get($strName) {
			switch ($strName) {
				case 'Idsubject':
					return new QQNode('idsubject', 'Idsubject', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeSubject('parrent', 'ParrentObject', 'Integer', $this);
				case 'Marks':
					return new QQReverseReferenceNodeMarks($this, 'marks', 'reverse_reference', 'subject');
				case 'ProfileHasQualifiedsubject':
					return new QQReverseReferenceNodeProfileHasQualifiedsubject($this, 'profilehasqualifiedsubject', 'reverse_reference', 'subject');
				case 'SubjectAsParrent':
					return new QQReverseReferenceNodeSubject($this, 'subjectasparrent', 'reverse_reference', 'parrent');
				case 'YearSubject':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubject', 'reverse_reference', 'subject');
				case 'YearsubjectHasTopicAsTopic':
					return new QQReverseReferenceNodeYearsubjectHasTopic($this, 'yearsubjecthastopicastopic', 'reverse_reference', 'topic');

				case '_PrimaryKeyNode':
					return new QQNode('idsubject', 'Idsubject', 'Integer', $this);
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
     * @property-read QQNode $Idsubject
     * @property-read QQNode $Name
     * @property-read QQNode $Description
     * @property-read QQNode $Parrent
     * @property-read QQNodeSubject $ParrentObject
     *
     *
     * @property-read QQReverseReferenceNodeMarks $Marks
     * @property-read QQReverseReferenceNodeProfileHasQualifiedsubject $ProfileHasQualifiedsubject
     * @property-read QQReverseReferenceNodeSubject $SubjectAsParrent
     * @property-read QQReverseReferenceNodeYearSubject $YearSubject
     * @property-read QQReverseReferenceNodeYearsubjectHasTopic $YearsubjectHasTopicAsTopic

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeSubject extends QQReverseReferenceNode {
		protected $strTableName = 'subject';
		protected $strPrimaryKey = 'idsubject';
		protected $strClassName = 'Subject';
		public function __get($strName) {
			switch ($strName) {
				case 'Idsubject':
					return new QQNode('idsubject', 'Idsubject', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeSubject('parrent', 'ParrentObject', 'integer', $this);
				case 'Marks':
					return new QQReverseReferenceNodeMarks($this, 'marks', 'reverse_reference', 'subject');
				case 'ProfileHasQualifiedsubject':
					return new QQReverseReferenceNodeProfileHasQualifiedsubject($this, 'profilehasqualifiedsubject', 'reverse_reference', 'subject');
				case 'SubjectAsParrent':
					return new QQReverseReferenceNodeSubject($this, 'subjectasparrent', 'reverse_reference', 'parrent');
				case 'YearSubject':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubject', 'reverse_reference', 'subject');
				case 'YearsubjectHasTopicAsTopic':
					return new QQReverseReferenceNodeYearsubjectHasTopic($this, 'yearsubjecthastopicastopic', 'reverse_reference', 'topic');

				case '_PrimaryKeyNode':
					return new QQNode('idsubject', 'Idsubject', 'integer', $this);
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
