<?php
	/**
	 * The abstract YearsubjectHasTopicGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the YearsubjectHasTopic subclass which
	 * extends this YearsubjectHasTopicGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the YearsubjectHasTopic class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdyearsubjectHasTopic the value for intIdyearsubjectHasTopic (Read-Only PK)
	 * @property integer $YearlySubject the value for intYearlySubject (Not Null)
	 * @property integer $Lab the value for intLab 
	 * @property integer $Theroy the value for intTheroy 
	 * @property integer $Practical the value for intPractical 
	 * @property integer $Credit the value for intCredit 
	 * @property integer $Topic the value for intTopic (Not Null)
	 * @property Subject $TopicObject the value for the Subject object referenced by intTopic (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class YearsubjectHasTopicGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column yearsubject_has_topic.idyearsubject_has_topic
		 * @var integer intIdyearsubjectHasTopic
		 */
		protected $intIdyearsubjectHasTopic;
		const IdyearsubjectHasTopicDefault = null;


		/**
		 * Protected member variable that maps to the database column yearsubject_has_topic.yearly_subject
		 * @var integer intYearlySubject
		 */
		protected $intYearlySubject;
		const YearlySubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column yearsubject_has_topic.lab
		 * @var integer intLab
		 */
		protected $intLab;
		const LabDefault = null;


		/**
		 * Protected member variable that maps to the database column yearsubject_has_topic.theroy
		 * @var integer intTheroy
		 */
		protected $intTheroy;
		const TheroyDefault = null;


		/**
		 * Protected member variable that maps to the database column yearsubject_has_topic.practical
		 * @var integer intPractical
		 */
		protected $intPractical;
		const PracticalDefault = null;


		/**
		 * Protected member variable that maps to the database column yearsubject_has_topic.credit
		 * @var integer intCredit
		 */
		protected $intCredit;
		const CreditDefault = null;


		/**
		 * Protected member variable that maps to the database column yearsubject_has_topic.topic
		 * @var integer intTopic
		 */
		protected $intTopic;
		const TopicDefault = null;


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
		 * in the database column yearsubject_has_topic.topic.
		 *
		 * NOTE: Always use the TopicObject property getter to correctly retrieve this Subject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Subject objTopicObject
		 */
		protected $objTopicObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdyearsubjectHasTopic = YearsubjectHasTopic::IdyearsubjectHasTopicDefault;
			$this->intYearlySubject = YearsubjectHasTopic::YearlySubjectDefault;
			$this->intLab = YearsubjectHasTopic::LabDefault;
			$this->intTheroy = YearsubjectHasTopic::TheroyDefault;
			$this->intPractical = YearsubjectHasTopic::PracticalDefault;
			$this->intCredit = YearsubjectHasTopic::CreditDefault;
			$this->intTopic = YearsubjectHasTopic::TopicDefault;
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
		 * Load a YearsubjectHasTopic from PK Info
		 * @param integer $intIdyearsubjectHasTopic
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearsubjectHasTopic
		 */
		public static function Load($intIdyearsubjectHasTopic, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'YearsubjectHasTopic', $intIdyearsubjectHasTopic);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = YearsubjectHasTopic::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::YearsubjectHasTopic()->IdyearsubjectHasTopic, $intIdyearsubjectHasTopic)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all YearsubjectHasTopics
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearsubjectHasTopic[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call YearsubjectHasTopic::QueryArray to perform the LoadAll query
			try {
				return YearsubjectHasTopic::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all YearsubjectHasTopics
		 * @return int
		 */
		public static function CountAll() {
			// Call YearsubjectHasTopic::QueryCount to perform the CountAll query
			return YearsubjectHasTopic::QueryCount(QQ::All());
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
			$objDatabase = YearsubjectHasTopic::GetDatabase();

			// Create/Build out the QueryBuilder object with YearsubjectHasTopic-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'yearsubject_has_topic');

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
				YearsubjectHasTopic::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('yearsubject_has_topic');

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
		 * Static Qcubed Query method to query for a single YearsubjectHasTopic object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return YearsubjectHasTopic the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = YearsubjectHasTopic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new YearsubjectHasTopic object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = YearsubjectHasTopic::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return YearsubjectHasTopic::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of YearsubjectHasTopic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return YearsubjectHasTopic[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = YearsubjectHasTopic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return YearsubjectHasTopic::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = YearsubjectHasTopic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of YearsubjectHasTopic objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = YearsubjectHasTopic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = YearsubjectHasTopic::GetDatabase();

			$strQuery = YearsubjectHasTopic::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/yearsubjecthastopic', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = YearsubjectHasTopic::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this YearsubjectHasTopic
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'yearsubject_has_topic';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idyearsubject_has_topic', $strAliasPrefix . 'idyearsubject_has_topic');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idyearsubject_has_topic', $strAliasPrefix . 'idyearsubject_has_topic');
			    $objBuilder->AddSelectItem($strTableName, 'yearly_subject', $strAliasPrefix . 'yearly_subject');
			    $objBuilder->AddSelectItem($strTableName, 'lab', $strAliasPrefix . 'lab');
			    $objBuilder->AddSelectItem($strTableName, 'theroy', $strAliasPrefix . 'theroy');
			    $objBuilder->AddSelectItem($strTableName, 'practical', $strAliasPrefix . 'practical');
			    $objBuilder->AddSelectItem($strTableName, 'credit', $strAliasPrefix . 'credit');
			    $objBuilder->AddSelectItem($strTableName, 'topic', $strAliasPrefix . 'topic');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a YearsubjectHasTopic from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this YearsubjectHasTopic::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return YearsubjectHasTopic
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the YearsubjectHasTopic object
			$objToReturn = new YearsubjectHasTopic();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idyearsubject_has_topic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdyearsubjectHasTopic = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'yearly_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intYearlySubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'lab';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLab = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'theroy';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTheroy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'practical';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPractical = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'credit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCredit = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'topic';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTopic = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdyearsubjectHasTopic != $objPreviousItem->IdyearsubjectHasTopic) {
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
				$strAliasPrefix = 'yearsubject_has_topic__';

			// Check for TopicObject Early Binding
			$strAlias = $strAliasPrefix . 'topic__idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTopicObject = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'topic__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of YearsubjectHasTopics from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return YearsubjectHasTopic[]
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
					$objItem = YearsubjectHasTopic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = YearsubjectHasTopic::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single YearsubjectHasTopic object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return YearsubjectHasTopic next row resulting from the query
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
			return YearsubjectHasTopic::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single YearsubjectHasTopic object,
		 * by IdyearsubjectHasTopic Index(es)
		 * @param integer $intIdyearsubjectHasTopic
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearsubjectHasTopic
		*/
		public static function LoadByIdyearsubjectHasTopic($intIdyearsubjectHasTopic, $objOptionalClauses = null) {
			return YearsubjectHasTopic::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::YearsubjectHasTopic()->IdyearsubjectHasTopic, $intIdyearsubjectHasTopic)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of YearsubjectHasTopic objects,
		 * by Topic Index(es)
		 * @param integer $intTopic
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearsubjectHasTopic[]
		*/
		public static function LoadArrayByTopic($intTopic, $objOptionalClauses = null) {
			// Call YearsubjectHasTopic::QueryArray to perform the LoadArrayByTopic query
			try {
				return YearsubjectHasTopic::QueryArray(
					QQ::Equal(QQN::YearsubjectHasTopic()->Topic, $intTopic),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count YearsubjectHasTopics
		 * by Topic Index(es)
		 * @param integer $intTopic
		 * @return int
		*/
		public static function CountByTopic($intTopic) {
			// Call YearsubjectHasTopic::QueryCount to perform the CountByTopic query
			return YearsubjectHasTopic::QueryCount(
				QQ::Equal(QQN::YearsubjectHasTopic()->Topic, $intTopic)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this YearsubjectHasTopic
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = YearsubjectHasTopic::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `yearsubject_has_topic` (
							`yearly_subject`,
							`lab`,
							`theroy`,
							`practical`,
							`credit`,
							`topic`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							' . $objDatabase->SqlVariable($this->intLab) . ',
							' . $objDatabase->SqlVariable($this->intTheroy) . ',
							' . $objDatabase->SqlVariable($this->intPractical) . ',
							' . $objDatabase->SqlVariable($this->intCredit) . ',
							' . $objDatabase->SqlVariable($this->intTopic) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdyearsubjectHasTopic = $objDatabase->InsertId('yearsubject_has_topic', 'idyearsubject_has_topic');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`yearsubject_has_topic`
						SET
							`yearly_subject` = ' . $objDatabase->SqlVariable($this->intYearlySubject) . ',
							`lab` = ' . $objDatabase->SqlVariable($this->intLab) . ',
							`theroy` = ' . $objDatabase->SqlVariable($this->intTheroy) . ',
							`practical` = ' . $objDatabase->SqlVariable($this->intPractical) . ',
							`credit` = ' . $objDatabase->SqlVariable($this->intCredit) . ',
							`topic` = ' . $objDatabase->SqlVariable($this->intTopic) . '
						WHERE
							`idyearsubject_has_topic` = ' . $objDatabase->SqlVariable($this->intIdyearsubjectHasTopic) . '
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
		 * Delete this YearsubjectHasTopic
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdyearsubjectHasTopic)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this YearsubjectHasTopic with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = YearsubjectHasTopic::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`yearsubject_has_topic`
				WHERE
					`idyearsubject_has_topic` = ' . $objDatabase->SqlVariable($this->intIdyearsubjectHasTopic) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this YearsubjectHasTopic ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'YearsubjectHasTopic', $this->intIdyearsubjectHasTopic);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all YearsubjectHasTopics
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = YearsubjectHasTopic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`yearsubject_has_topic`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate yearsubject_has_topic table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = YearsubjectHasTopic::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `yearsubject_has_topic`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this YearsubjectHasTopic from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved YearsubjectHasTopic object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = YearsubjectHasTopic::Load($this->intIdyearsubjectHasTopic);

			// Update $this's local variables to match
			$this->intYearlySubject = $objReloaded->intYearlySubject;
			$this->intLab = $objReloaded->intLab;
			$this->intTheroy = $objReloaded->intTheroy;
			$this->intPractical = $objReloaded->intPractical;
			$this->intCredit = $objReloaded->intCredit;
			$this->Topic = $objReloaded->Topic;
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
				case 'IdyearsubjectHasTopic':
					/**
					 * Gets the value for intIdyearsubjectHasTopic (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdyearsubjectHasTopic;

				case 'YearlySubject':
					/**
					 * Gets the value for intYearlySubject (Not Null)
					 * @return integer
					 */
					return $this->intYearlySubject;

				case 'Lab':
					/**
					 * Gets the value for intLab 
					 * @return integer
					 */
					return $this->intLab;

				case 'Theroy':
					/**
					 * Gets the value for intTheroy 
					 * @return integer
					 */
					return $this->intTheroy;

				case 'Practical':
					/**
					 * Gets the value for intPractical 
					 * @return integer
					 */
					return $this->intPractical;

				case 'Credit':
					/**
					 * Gets the value for intCredit 
					 * @return integer
					 */
					return $this->intCredit;

				case 'Topic':
					/**
					 * Gets the value for intTopic (Not Null)
					 * @return integer
					 */
					return $this->intTopic;


				///////////////////
				// Member Objects
				///////////////////
				case 'TopicObject':
					/**
					 * Gets the value for the Subject object referenced by intTopic (Not Null)
					 * @return Subject
					 */
					try {
						if ((!$this->objTopicObject) && (!is_null($this->intTopic)))
							$this->objTopicObject = Subject::Load($this->intTopic);
						return $this->objTopicObject;
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
					 * Sets the value for intYearlySubject (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intYearlySubject = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Lab':
					/**
					 * Sets the value for intLab 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intLab = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Theroy':
					/**
					 * Sets the value for intTheroy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTheroy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Practical':
					/**
					 * Sets the value for intPractical 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPractical = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Credit':
					/**
					 * Sets the value for intCredit 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCredit = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Topic':
					/**
					 * Sets the value for intTopic (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTopicObject = null;
						return ($this->intTopic = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'TopicObject':
					/**
					 * Sets the value for the Subject object referenced by intTopic (Not Null)
					 * @param Subject $mixValue
					 * @return Subject
					 */
					if (is_null($mixValue)) {
						$this->intTopic = null;
						$this->objTopicObject = null;
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
							throw new QCallerException('Unable to set an unsaved TopicObject for this YearsubjectHasTopic');

						// Update Local Member Variables
						$this->objTopicObject = $mixValue;
						$this->intTopic = $mixValue->Idsubject;

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
			return "yearsubject_has_topic";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[YearsubjectHasTopic::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="YearsubjectHasTopic"><sequence>';
			$strToReturn .= '<element name="IdyearsubjectHasTopic" type="xsd:int"/>';
			$strToReturn .= '<element name="YearlySubject" type="xsd:int"/>';
			$strToReturn .= '<element name="Lab" type="xsd:int"/>';
			$strToReturn .= '<element name="Theroy" type="xsd:int"/>';
			$strToReturn .= '<element name="Practical" type="xsd:int"/>';
			$strToReturn .= '<element name="Credit" type="xsd:int"/>';
			$strToReturn .= '<element name="TopicObject" type="xsd1:Subject"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('YearsubjectHasTopic', $strComplexTypeArray)) {
				$strComplexTypeArray['YearsubjectHasTopic'] = YearsubjectHasTopic::GetSoapComplexTypeXml();
				Subject::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, YearsubjectHasTopic::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new YearsubjectHasTopic();
			if (property_exists($objSoapObject, 'IdyearsubjectHasTopic'))
				$objToReturn->intIdyearsubjectHasTopic = $objSoapObject->IdyearsubjectHasTopic;
			if (property_exists($objSoapObject, 'YearlySubject'))
				$objToReturn->intYearlySubject = $objSoapObject->YearlySubject;
			if (property_exists($objSoapObject, 'Lab'))
				$objToReturn->intLab = $objSoapObject->Lab;
			if (property_exists($objSoapObject, 'Theroy'))
				$objToReturn->intTheroy = $objSoapObject->Theroy;
			if (property_exists($objSoapObject, 'Practical'))
				$objToReturn->intPractical = $objSoapObject->Practical;
			if (property_exists($objSoapObject, 'Credit'))
				$objToReturn->intCredit = $objSoapObject->Credit;
			if ((property_exists($objSoapObject, 'TopicObject')) &&
				($objSoapObject->TopicObject))
				$objToReturn->TopicObject = Subject::GetObjectFromSoapObject($objSoapObject->TopicObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, YearsubjectHasTopic::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objTopicObject)
				$objObject->objTopicObject = Subject::GetSoapObjectFromObject($objObject->objTopicObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTopic = null;
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
			$iArray['IdyearsubjectHasTopic'] = $this->intIdyearsubjectHasTopic;
			$iArray['YearlySubject'] = $this->intYearlySubject;
			$iArray['Lab'] = $this->intLab;
			$iArray['Theroy'] = $this->intTheroy;
			$iArray['Practical'] = $this->intPractical;
			$iArray['Credit'] = $this->intCredit;
			$iArray['Topic'] = $this->intTopic;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdyearsubjectHasTopic ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdyearsubjectHasTopic
     * @property-read QQNode $YearlySubject
     * @property-read QQNode $Lab
     * @property-read QQNode $Theroy
     * @property-read QQNode $Practical
     * @property-read QQNode $Credit
     * @property-read QQNode $Topic
     * @property-read QQNodeSubject $TopicObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeYearsubjectHasTopic extends QQNode {
		protected $strTableName = 'yearsubject_has_topic';
		protected $strPrimaryKey = 'idyearsubject_has_topic';
		protected $strClassName = 'YearsubjectHasTopic';
		public function __get($strName) {
			switch ($strName) {
				case 'IdyearsubjectHasTopic':
					return new QQNode('idyearsubject_has_topic', 'IdyearsubjectHasTopic', 'Integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'Integer', $this);
				case 'Lab':
					return new QQNode('lab', 'Lab', 'Integer', $this);
				case 'Theroy':
					return new QQNode('theroy', 'Theroy', 'Integer', $this);
				case 'Practical':
					return new QQNode('practical', 'Practical', 'Integer', $this);
				case 'Credit':
					return new QQNode('credit', 'Credit', 'Integer', $this);
				case 'Topic':
					return new QQNode('topic', 'Topic', 'Integer', $this);
				case 'TopicObject':
					return new QQNodeSubject('topic', 'TopicObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idyearsubject_has_topic', 'IdyearsubjectHasTopic', 'Integer', $this);
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
     * @property-read QQNode $IdyearsubjectHasTopic
     * @property-read QQNode $YearlySubject
     * @property-read QQNode $Lab
     * @property-read QQNode $Theroy
     * @property-read QQNode $Practical
     * @property-read QQNode $Credit
     * @property-read QQNode $Topic
     * @property-read QQNodeSubject $TopicObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeYearsubjectHasTopic extends QQReverseReferenceNode {
		protected $strTableName = 'yearsubject_has_topic';
		protected $strPrimaryKey = 'idyearsubject_has_topic';
		protected $strClassName = 'YearsubjectHasTopic';
		public function __get($strName) {
			switch ($strName) {
				case 'IdyearsubjectHasTopic':
					return new QQNode('idyearsubject_has_topic', 'IdyearsubjectHasTopic', 'integer', $this);
				case 'YearlySubject':
					return new QQNode('yearly_subject', 'YearlySubject', 'integer', $this);
				case 'Lab':
					return new QQNode('lab', 'Lab', 'integer', $this);
				case 'Theroy':
					return new QQNode('theroy', 'Theroy', 'integer', $this);
				case 'Practical':
					return new QQNode('practical', 'Practical', 'integer', $this);
				case 'Credit':
					return new QQNode('credit', 'Credit', 'integer', $this);
				case 'Topic':
					return new QQNode('topic', 'Topic', 'integer', $this);
				case 'TopicObject':
					return new QQNodeSubject('topic', 'TopicObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idyearsubject_has_topic', 'IdyearsubjectHasTopic', 'integer', $this);
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
