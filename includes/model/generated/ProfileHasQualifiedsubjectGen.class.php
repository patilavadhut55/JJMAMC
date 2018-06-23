<?php
	/**
	 * The abstract ProfileHasQualifiedsubjectGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ProfileHasQualifiedsubject subclass which
	 * extends this ProfileHasQualifiedsubjectGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ProfileHasQualifiedsubject class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdprofileHasQualifiedsubject the value for intIdprofileHasQualifiedsubject (Read-Only PK)
	 * @property integer $Profile the value for intProfile 
	 * @property integer $Subject the value for intSubject 
	 * @property Profile $ProfileObject the value for the Profile object referenced by intProfile 
	 * @property Subject $SubjectObject the value for the Subject object referenced by intSubject 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProfileHasQualifiedsubjectGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column profile_has_qualifiedsubject.idprofile_has_qualifiedsubject
		 * @var integer intIdprofileHasQualifiedsubject
		 */
		protected $intIdprofileHasQualifiedsubject;
		const IdprofileHasQualifiedsubjectDefault = null;


		/**
		 * Protected member variable that maps to the database column profile_has_qualifiedsubject.profile
		 * @var integer intProfile
		 */
		protected $intProfile;
		const ProfileDefault = null;


		/**
		 * Protected member variable that maps to the database column profile_has_qualifiedsubject.subject
		 * @var integer intSubject
		 */
		protected $intSubject;
		const SubjectDefault = null;


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
		 * in the database column profile_has_qualifiedsubject.profile.
		 *
		 * NOTE: Always use the ProfileObject property getter to correctly retrieve this Profile object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Profile objProfileObject
		 */
		protected $objProfileObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column profile_has_qualifiedsubject.subject.
		 *
		 * NOTE: Always use the SubjectObject property getter to correctly retrieve this Subject object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Subject objSubjectObject
		 */
		protected $objSubjectObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdprofileHasQualifiedsubject = ProfileHasQualifiedsubject::IdprofileHasQualifiedsubjectDefault;
			$this->intProfile = ProfileHasQualifiedsubject::ProfileDefault;
			$this->intSubject = ProfileHasQualifiedsubject::SubjectDefault;
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
		 * Load a ProfileHasQualifiedsubject from PK Info
		 * @param integer $intIdprofileHasQualifiedsubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject
		 */
		public static function Load($intIdprofileHasQualifiedsubject, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'ProfileHasQualifiedsubject', $intIdprofileHasQualifiedsubject);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = ProfileHasQualifiedsubject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ProfileHasQualifiedsubject()->IdprofileHasQualifiedsubject, $intIdprofileHasQualifiedsubject)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all ProfileHasQualifiedsubjects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call ProfileHasQualifiedsubject::QueryArray to perform the LoadAll query
			try {
				return ProfileHasQualifiedsubject::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ProfileHasQualifiedsubjects
		 * @return int
		 */
		public static function CountAll() {
			// Call ProfileHasQualifiedsubject::QueryCount to perform the CountAll query
			return ProfileHasQualifiedsubject::QueryCount(QQ::All());
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
			$objDatabase = ProfileHasQualifiedsubject::GetDatabase();

			// Create/Build out the QueryBuilder object with ProfileHasQualifiedsubject-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'profile_has_qualifiedsubject');

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
				ProfileHasQualifiedsubject::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('profile_has_qualifiedsubject');

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
		 * Static Qcubed Query method to query for a single ProfileHasQualifiedsubject object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ProfileHasQualifiedsubject the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ProfileHasQualifiedsubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new ProfileHasQualifiedsubject object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of ProfileHasQualifiedsubject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ProfileHasQualifiedsubject[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ProfileHasQualifiedsubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ProfileHasQualifiedsubject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = ProfileHasQualifiedsubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of ProfileHasQualifiedsubject objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ProfileHasQualifiedsubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ProfileHasQualifiedsubject::GetDatabase();

			$strQuery = ProfileHasQualifiedsubject::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/profilehasqualifiedsubject', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = ProfileHasQualifiedsubject::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ProfileHasQualifiedsubject
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'profile_has_qualifiedsubject';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idprofile_has_qualifiedsubject', $strAliasPrefix . 'idprofile_has_qualifiedsubject');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idprofile_has_qualifiedsubject', $strAliasPrefix . 'idprofile_has_qualifiedsubject');
			    $objBuilder->AddSelectItem($strTableName, 'profile', $strAliasPrefix . 'profile');
			    $objBuilder->AddSelectItem($strTableName, 'subject', $strAliasPrefix . 'subject');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ProfileHasQualifiedsubject from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ProfileHasQualifiedsubject::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ProfileHasQualifiedsubject
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the ProfileHasQualifiedsubject object
			$objToReturn = new ProfileHasQualifiedsubject();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idprofile_has_qualifiedsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdprofileHasQualifiedsubject = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'profile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intProfile = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSubject = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdprofileHasQualifiedsubject != $objPreviousItem->IdprofileHasQualifiedsubject) {
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
				$strAliasPrefix = 'profile_has_qualifiedsubject__';

			// Check for ProfileObject Early Binding
			$strAlias = $strAliasPrefix . 'profile__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objProfileObject = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SubjectObject Early Binding
			$strAlias = $strAliasPrefix . 'subject__idsubject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSubjectObject = Subject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subject__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of ProfileHasQualifiedsubjects from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ProfileHasQualifiedsubject[]
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
					$objItem = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single ProfileHasQualifiedsubject object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return ProfileHasQualifiedsubject next row resulting from the query
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
			return ProfileHasQualifiedsubject::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single ProfileHasQualifiedsubject object,
		 * by IdprofileHasQualifiedsubject Index(es)
		 * @param integer $intIdprofileHasQualifiedsubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject
		*/
		public static function LoadByIdprofileHasQualifiedsubject($intIdprofileHasQualifiedsubject, $objOptionalClauses = null) {
			return ProfileHasQualifiedsubject::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ProfileHasQualifiedsubject()->IdprofileHasQualifiedsubject, $intIdprofileHasQualifiedsubject)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of ProfileHasQualifiedsubject objects,
		 * by Profile Index(es)
		 * @param integer $intProfile
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject[]
		*/
		public static function LoadArrayByProfile($intProfile, $objOptionalClauses = null) {
			// Call ProfileHasQualifiedsubject::QueryArray to perform the LoadArrayByProfile query
			try {
				return ProfileHasQualifiedsubject::QueryArray(
					QQ::Equal(QQN::ProfileHasQualifiedsubject()->Profile, $intProfile),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ProfileHasQualifiedsubjects
		 * by Profile Index(es)
		 * @param integer $intProfile
		 * @return int
		*/
		public static function CountByProfile($intProfile) {
			// Call ProfileHasQualifiedsubject::QueryCount to perform the CountByProfile query
			return ProfileHasQualifiedsubject::QueryCount(
				QQ::Equal(QQN::ProfileHasQualifiedsubject()->Profile, $intProfile)
			);
		}

		/**
		 * Load an array of ProfileHasQualifiedsubject objects,
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ProfileHasQualifiedsubject[]
		*/
		public static function LoadArrayBySubject($intSubject, $objOptionalClauses = null) {
			// Call ProfileHasQualifiedsubject::QueryArray to perform the LoadArrayBySubject query
			try {
				return ProfileHasQualifiedsubject::QueryArray(
					QQ::Equal(QQN::ProfileHasQualifiedsubject()->Subject, $intSubject),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ProfileHasQualifiedsubjects
		 * by Subject Index(es)
		 * @param integer $intSubject
		 * @return int
		*/
		public static function CountBySubject($intSubject) {
			// Call ProfileHasQualifiedsubject::QueryCount to perform the CountBySubject query
			return ProfileHasQualifiedsubject::QueryCount(
				QQ::Equal(QQN::ProfileHasQualifiedsubject()->Subject, $intSubject)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this ProfileHasQualifiedsubject
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ProfileHasQualifiedsubject::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `profile_has_qualifiedsubject` (
							`profile`,
							`subject`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intProfile) . ',
							' . $objDatabase->SqlVariable($this->intSubject) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdprofileHasQualifiedsubject = $objDatabase->InsertId('profile_has_qualifiedsubject', 'idprofile_has_qualifiedsubject');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`profile_has_qualifiedsubject`
						SET
							`profile` = ' . $objDatabase->SqlVariable($this->intProfile) . ',
							`subject` = ' . $objDatabase->SqlVariable($this->intSubject) . '
						WHERE
							`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($this->intIdprofileHasQualifiedsubject) . '
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
		 * Delete this ProfileHasQualifiedsubject
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdprofileHasQualifiedsubject)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ProfileHasQualifiedsubject with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ProfileHasQualifiedsubject::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile_has_qualifiedsubject`
				WHERE
					`idprofile_has_qualifiedsubject` = ' . $objDatabase->SqlVariable($this->intIdprofileHasQualifiedsubject) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this ProfileHasQualifiedsubject ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'ProfileHasQualifiedsubject', $this->intIdprofileHasQualifiedsubject);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all ProfileHasQualifiedsubjects
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ProfileHasQualifiedsubject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile_has_qualifiedsubject`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate profile_has_qualifiedsubject table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ProfileHasQualifiedsubject::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `profile_has_qualifiedsubject`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this ProfileHasQualifiedsubject from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ProfileHasQualifiedsubject object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = ProfileHasQualifiedsubject::Load($this->intIdprofileHasQualifiedsubject);

			// Update $this's local variables to match
			$this->Profile = $objReloaded->Profile;
			$this->Subject = $objReloaded->Subject;
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
				case 'IdprofileHasQualifiedsubject':
					/**
					 * Gets the value for intIdprofileHasQualifiedsubject (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdprofileHasQualifiedsubject;

				case 'Profile':
					/**
					 * Gets the value for intProfile 
					 * @return integer
					 */
					return $this->intProfile;

				case 'Subject':
					/**
					 * Gets the value for intSubject 
					 * @return integer
					 */
					return $this->intSubject;


				///////////////////
				// Member Objects
				///////////////////
				case 'ProfileObject':
					/**
					 * Gets the value for the Profile object referenced by intProfile 
					 * @return Profile
					 */
					try {
						if ((!$this->objProfileObject) && (!is_null($this->intProfile)))
							$this->objProfileObject = Profile::Load($this->intProfile);
						return $this->objProfileObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SubjectObject':
					/**
					 * Gets the value for the Subject object referenced by intSubject 
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
				case 'Profile':
					/**
					 * Sets the value for intProfile 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objProfileObject = null;
						return ($this->intProfile = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Subject':
					/**
					 * Sets the value for intSubject 
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


				///////////////////
				// Member Objects
				///////////////////
				case 'ProfileObject':
					/**
					 * Sets the value for the Profile object referenced by intProfile 
					 * @param Profile $mixValue
					 * @return Profile
					 */
					if (is_null($mixValue)) {
						$this->intProfile = null;
						$this->objProfileObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Profile object
						try {
							$mixValue = QType::Cast($mixValue, 'Profile');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Profile object
						if (is_null($mixValue->Idprofile))
							throw new QCallerException('Unable to set an unsaved ProfileObject for this ProfileHasQualifiedsubject');

						// Update Local Member Variables
						$this->objProfileObject = $mixValue;
						$this->intProfile = $mixValue->Idprofile;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SubjectObject':
					/**
					 * Sets the value for the Subject object referenced by intSubject 
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
							throw new QCallerException('Unable to set an unsaved SubjectObject for this ProfileHasQualifiedsubject');

						// Update Local Member Variables
						$this->objSubjectObject = $mixValue;
						$this->intSubject = $mixValue->Idsubject;

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
			return "profile_has_qualifiedsubject";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[ProfileHasQualifiedsubject::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="ProfileHasQualifiedsubject"><sequence>';
			$strToReturn .= '<element name="IdprofileHasQualifiedsubject" type="xsd:int"/>';
			$strToReturn .= '<element name="ProfileObject" type="xsd1:Profile"/>';
			$strToReturn .= '<element name="SubjectObject" type="xsd1:Subject"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ProfileHasQualifiedsubject', $strComplexTypeArray)) {
				$strComplexTypeArray['ProfileHasQualifiedsubject'] = ProfileHasQualifiedsubject::GetSoapComplexTypeXml();
				Profile::AlterSoapComplexTypeArray($strComplexTypeArray);
				Subject::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ProfileHasQualifiedsubject::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ProfileHasQualifiedsubject();
			if (property_exists($objSoapObject, 'IdprofileHasQualifiedsubject'))
				$objToReturn->intIdprofileHasQualifiedsubject = $objSoapObject->IdprofileHasQualifiedsubject;
			if ((property_exists($objSoapObject, 'ProfileObject')) &&
				($objSoapObject->ProfileObject))
				$objToReturn->ProfileObject = Profile::GetObjectFromSoapObject($objSoapObject->ProfileObject);
			if ((property_exists($objSoapObject, 'SubjectObject')) &&
				($objSoapObject->SubjectObject))
				$objToReturn->SubjectObject = Subject::GetObjectFromSoapObject($objSoapObject->SubjectObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ProfileHasQualifiedsubject::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objProfileObject)
				$objObject->objProfileObject = Profile::GetSoapObjectFromObject($objObject->objProfileObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intProfile = null;
			if ($objObject->objSubjectObject)
				$objObject->objSubjectObject = Subject::GetSoapObjectFromObject($objObject->objSubjectObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSubject = null;
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
			$iArray['IdprofileHasQualifiedsubject'] = $this->intIdprofileHasQualifiedsubject;
			$iArray['Profile'] = $this->intProfile;
			$iArray['Subject'] = $this->intSubject;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdprofileHasQualifiedsubject ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdprofileHasQualifiedsubject
     * @property-read QQNode $Profile
     * @property-read QQNodeProfile $ProfileObject
     * @property-read QQNode $Subject
     * @property-read QQNodeSubject $SubjectObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeProfileHasQualifiedsubject extends QQNode {
		protected $strTableName = 'profile_has_qualifiedsubject';
		protected $strPrimaryKey = 'idprofile_has_qualifiedsubject';
		protected $strClassName = 'ProfileHasQualifiedsubject';
		public function __get($strName) {
			switch ($strName) {
				case 'IdprofileHasQualifiedsubject':
					return new QQNode('idprofile_has_qualifiedsubject', 'IdprofileHasQualifiedsubject', 'Integer', $this);
				case 'Profile':
					return new QQNode('profile', 'Profile', 'Integer', $this);
				case 'ProfileObject':
					return new QQNodeProfile('profile', 'ProfileObject', 'Integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'Integer', $this);
				case 'SubjectObject':
					return new QQNodeSubject('subject', 'SubjectObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idprofile_has_qualifiedsubject', 'IdprofileHasQualifiedsubject', 'Integer', $this);
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
     * @property-read QQNode $IdprofileHasQualifiedsubject
     * @property-read QQNode $Profile
     * @property-read QQNodeProfile $ProfileObject
     * @property-read QQNode $Subject
     * @property-read QQNodeSubject $SubjectObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProfileHasQualifiedsubject extends QQReverseReferenceNode {
		protected $strTableName = 'profile_has_qualifiedsubject';
		protected $strPrimaryKey = 'idprofile_has_qualifiedsubject';
		protected $strClassName = 'ProfileHasQualifiedsubject';
		public function __get($strName) {
			switch ($strName) {
				case 'IdprofileHasQualifiedsubject':
					return new QQNode('idprofile_has_qualifiedsubject', 'IdprofileHasQualifiedsubject', 'integer', $this);
				case 'Profile':
					return new QQNode('profile', 'Profile', 'integer', $this);
				case 'ProfileObject':
					return new QQNodeProfile('profile', 'ProfileObject', 'integer', $this);
				case 'Subject':
					return new QQNode('subject', 'Subject', 'integer', $this);
				case 'SubjectObject':
					return new QQNodeSubject('subject', 'SubjectObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idprofile_has_qualifiedsubject', 'IdprofileHasQualifiedsubject', 'integer', $this);
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
