<?php
	/**
	 * The abstract MarkToGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the MarkTo subclass which
	 * extends this MarkToGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the MarkTo class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdmarkTo the value for intIdmarkTo (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $From the value for intFrom (Not Null)
	 * @property integer $To the value for intTo (Not Null)
	 * @property string $Note the value for strNote 
	 * @property integer $DocInOut the value for intDocInOut (Not Null)
	 * @property QDateTime $OpenedDate the value for dttOpenedDate 
	 * @property integer $Role the value for intRole 
	 * @property Login $FromObject the value for the Login object referenced by intFrom (Not Null)
	 * @property Login $ToObject the value for the Login object referenced by intTo (Not Null)
	 * @property DocInOut $DocInOutObject the value for the DocInOut object referenced by intDocInOut (Not Null)
	 * @property Role $RoleObject the value for the Role object referenced by intRole 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class MarkToGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column mark_to.idmark_to
		 * @var integer intIdmarkTo
		 */
		protected $intIdmarkTo;
		const IdmarkToDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.from
		 * @var integer intFrom
		 */
		protected $intFrom;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.to
		 * @var integer intTo
		 */
		protected $intTo;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.doc_in_out
		 * @var integer intDocInOut
		 */
		protected $intDocInOut;
		const DocInOutDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.opened_date
		 * @var QDateTime dttOpenedDate
		 */
		protected $dttOpenedDate;
		const OpenedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column mark_to.role
		 * @var integer intRole
		 */
		protected $intRole;
		const RoleDefault = null;


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
		 * in the database column mark_to.from.
		 *
		 * NOTE: Always use the FromObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objFromObject
		 */
		protected $objFromObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column mark_to.to.
		 *
		 * NOTE: Always use the ToObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objToObject
		 */
		protected $objToObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column mark_to.doc_in_out.
		 *
		 * NOTE: Always use the DocInOutObject property getter to correctly retrieve this DocInOut object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DocInOut objDocInOutObject
		 */
		protected $objDocInOutObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column mark_to.role.
		 *
		 * NOTE: Always use the RoleObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoleObject
		 */
		protected $objRoleObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdmarkTo = MarkTo::IdmarkToDefault;
			$this->dttDate = (MarkTo::DateDefault === null)?null:new QDateTime(MarkTo::DateDefault);
			$this->intFrom = MarkTo::FromDefault;
			$this->intTo = MarkTo::ToDefault;
			$this->strNote = MarkTo::NoteDefault;
			$this->intDocInOut = MarkTo::DocInOutDefault;
			$this->dttOpenedDate = (MarkTo::OpenedDateDefault === null)?null:new QDateTime(MarkTo::OpenedDateDefault);
			$this->intRole = MarkTo::RoleDefault;
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
		 * Load a MarkTo from PK Info
		 * @param integer $intIdmarkTo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo
		 */
		public static function Load($intIdmarkTo, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MarkTo', $intIdmarkTo);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = MarkTo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MarkTo()->IdmarkTo, $intIdmarkTo)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all MarkTos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call MarkTo::QueryArray to perform the LoadAll query
			try {
				return MarkTo::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all MarkTos
		 * @return int
		 */
		public static function CountAll() {
			// Call MarkTo::QueryCount to perform the CountAll query
			return MarkTo::QueryCount(QQ::All());
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
			$objDatabase = MarkTo::GetDatabase();

			// Create/Build out the QueryBuilder object with MarkTo-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'mark_to');

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
				MarkTo::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('mark_to');

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
		 * Static Qcubed Query method to query for a single MarkTo object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MarkTo the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MarkTo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new MarkTo object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = MarkTo::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return MarkTo::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of MarkTo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return MarkTo[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MarkTo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return MarkTo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = MarkTo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of MarkTo objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = MarkTo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = MarkTo::GetDatabase();

			$strQuery = MarkTo::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/markto', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = MarkTo::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this MarkTo
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'mark_to';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idmark_to', $strAliasPrefix . 'idmark_to');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idmark_to', $strAliasPrefix . 'idmark_to');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
			    $objBuilder->AddSelectItem($strTableName, 'doc_in_out', $strAliasPrefix . 'doc_in_out');
			    $objBuilder->AddSelectItem($strTableName, 'opened_date', $strAliasPrefix . 'opened_date');
			    $objBuilder->AddSelectItem($strTableName, 'role', $strAliasPrefix . 'role');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a MarkTo from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this MarkTo::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return MarkTo
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the MarkTo object
			$objToReturn = new MarkTo();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idmark_to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdmarkTo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFrom = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'doc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDocInOut = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'opened_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttOpenedDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'role';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRole = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdmarkTo != $objPreviousItem->IdmarkTo) {
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
				$strAliasPrefix = 'mark_to__';

			// Check for FromObject Early Binding
			$strAlias = $strAliasPrefix . 'from__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFromObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'from__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ToObject Early Binding
			$strAlias = $strAliasPrefix . 'to__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objToObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'to__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DocInOutObject Early Binding
			$strAlias = $strAliasPrefix . 'doc_in_out__iddoc_in_out';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDocInOutObject = DocInOut::InstantiateDbRow($objDbRow, $strAliasPrefix . 'doc_in_out__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RoleObject Early Binding
			$strAlias = $strAliasPrefix . 'role__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoleObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of MarkTos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return MarkTo[]
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
					$objItem = MarkTo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = MarkTo::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single MarkTo object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return MarkTo next row resulting from the query
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
			return MarkTo::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single MarkTo object,
		 * by IdmarkTo Index(es)
		 * @param integer $intIdmarkTo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo
		*/
		public static function LoadByIdmarkTo($intIdmarkTo, $objOptionalClauses = null) {
			return MarkTo::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::MarkTo()->IdmarkTo, $intIdmarkTo)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of MarkTo objects,
		 * by DocInOut Index(es)
		 * @param integer $intDocInOut
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public static function LoadArrayByDocInOut($intDocInOut, $objOptionalClauses = null) {
			// Call MarkTo::QueryArray to perform the LoadArrayByDocInOut query
			try {
				return MarkTo::QueryArray(
					QQ::Equal(QQN::MarkTo()->DocInOut, $intDocInOut),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MarkTos
		 * by DocInOut Index(es)
		 * @param integer $intDocInOut
		 * @return int
		*/
		public static function CountByDocInOut($intDocInOut) {
			// Call MarkTo::QueryCount to perform the CountByDocInOut query
			return MarkTo::QueryCount(
				QQ::Equal(QQN::MarkTo()->DocInOut, $intDocInOut)
			);
		}

		/**
		 * Load an array of MarkTo objects,
		 * by To Index(es)
		 * @param integer $intTo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public static function LoadArrayByTo($intTo, $objOptionalClauses = null) {
			// Call MarkTo::QueryArray to perform the LoadArrayByTo query
			try {
				return MarkTo::QueryArray(
					QQ::Equal(QQN::MarkTo()->To, $intTo),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MarkTos
		 * by To Index(es)
		 * @param integer $intTo
		 * @return int
		*/
		public static function CountByTo($intTo) {
			// Call MarkTo::QueryCount to perform the CountByTo query
			return MarkTo::QueryCount(
				QQ::Equal(QQN::MarkTo()->To, $intTo)
			);
		}

		/**
		 * Load an array of MarkTo objects,
		 * by From Index(es)
		 * @param integer $intFrom
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public static function LoadArrayByFrom($intFrom, $objOptionalClauses = null) {
			// Call MarkTo::QueryArray to perform the LoadArrayByFrom query
			try {
				return MarkTo::QueryArray(
					QQ::Equal(QQN::MarkTo()->From, $intFrom),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MarkTos
		 * by From Index(es)
		 * @param integer $intFrom
		 * @return int
		*/
		public static function CountByFrom($intFrom) {
			// Call MarkTo::QueryCount to perform the CountByFrom query
			return MarkTo::QueryCount(
				QQ::Equal(QQN::MarkTo()->From, $intFrom)
			);
		}

		/**
		 * Load an array of MarkTo objects,
		 * by Role Index(es)
		 * @param integer $intRole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return MarkTo[]
		*/
		public static function LoadArrayByRole($intRole, $objOptionalClauses = null) {
			// Call MarkTo::QueryArray to perform the LoadArrayByRole query
			try {
				return MarkTo::QueryArray(
					QQ::Equal(QQN::MarkTo()->Role, $intRole),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count MarkTos
		 * by Role Index(es)
		 * @param integer $intRole
		 * @return int
		*/
		public static function CountByRole($intRole) {
			// Call MarkTo::QueryCount to perform the CountByRole query
			return MarkTo::QueryCount(
				QQ::Equal(QQN::MarkTo()->Role, $intRole)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this MarkTo
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = MarkTo::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `mark_to` (
							`date`,
							`from`,
							`to`,
							`note`,
							`doc_in_out`,
							`opened_date`,
							`role`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intFrom) . ',
							' . $objDatabase->SqlVariable($this->intTo) . ',
							' . $objDatabase->SqlVariable($this->strNote) . ',
							' . $objDatabase->SqlVariable($this->intDocInOut) . ',
							' . $objDatabase->SqlVariable($this->dttOpenedDate) . ',
							' . $objDatabase->SqlVariable($this->intRole) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdmarkTo = $objDatabase->InsertId('mark_to', 'idmark_to');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`mark_to`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`from` = ' . $objDatabase->SqlVariable($this->intFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->intTo) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . ',
							`doc_in_out` = ' . $objDatabase->SqlVariable($this->intDocInOut) . ',
							`opened_date` = ' . $objDatabase->SqlVariable($this->dttOpenedDate) . ',
							`role` = ' . $objDatabase->SqlVariable($this->intRole) . '
						WHERE
							`idmark_to` = ' . $objDatabase->SqlVariable($this->intIdmarkTo) . '
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
		 * Delete this MarkTo
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdmarkTo)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this MarkTo with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = MarkTo::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`
				WHERE
					`idmark_to` = ' . $objDatabase->SqlVariable($this->intIdmarkTo) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this MarkTo ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'MarkTo', $this->intIdmarkTo);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all MarkTos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = MarkTo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`mark_to`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate mark_to table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = MarkTo::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `mark_to`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this MarkTo from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved MarkTo object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = MarkTo::Load($this->intIdmarkTo);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->From = $objReloaded->From;
			$this->To = $objReloaded->To;
			$this->strNote = $objReloaded->strNote;
			$this->DocInOut = $objReloaded->DocInOut;
			$this->dttOpenedDate = $objReloaded->dttOpenedDate;
			$this->Role = $objReloaded->Role;
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
				case 'IdmarkTo':
					/**
					 * Gets the value for intIdmarkTo (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdmarkTo;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'From':
					/**
					 * Gets the value for intFrom (Not Null)
					 * @return integer
					 */
					return $this->intFrom;

				case 'To':
					/**
					 * Gets the value for intTo (Not Null)
					 * @return integer
					 */
					return $this->intTo;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;

				case 'DocInOut':
					/**
					 * Gets the value for intDocInOut (Not Null)
					 * @return integer
					 */
					return $this->intDocInOut;

				case 'OpenedDate':
					/**
					 * Gets the value for dttOpenedDate 
					 * @return QDateTime
					 */
					return $this->dttOpenedDate;

				case 'Role':
					/**
					 * Gets the value for intRole 
					 * @return integer
					 */
					return $this->intRole;


				///////////////////
				// Member Objects
				///////////////////
				case 'FromObject':
					/**
					 * Gets the value for the Login object referenced by intFrom (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objFromObject) && (!is_null($this->intFrom)))
							$this->objFromObject = Login::Load($this->intFrom);
						return $this->objFromObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToObject':
					/**
					 * Gets the value for the Login object referenced by intTo (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objToObject) && (!is_null($this->intTo)))
							$this->objToObject = Login::Load($this->intTo);
						return $this->objToObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DocInOutObject':
					/**
					 * Gets the value for the DocInOut object referenced by intDocInOut (Not Null)
					 * @return DocInOut
					 */
					try {
						if ((!$this->objDocInOutObject) && (!is_null($this->intDocInOut)))
							$this->objDocInOutObject = DocInOut::Load($this->intDocInOut);
						return $this->objDocInOutObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'From':
					/**
					 * Sets the value for intFrom (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFromObject = null;
						return ($this->intFrom = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'To':
					/**
					 * Sets the value for intTo (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objToObject = null;
						return ($this->intTo = QType::Cast($mixValue, QType::Integer));
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

				case 'DocInOut':
					/**
					 * Sets the value for intDocInOut (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDocInOutObject = null;
						return ($this->intDocInOut = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OpenedDate':
					/**
					 * Sets the value for dttOpenedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttOpenedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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


				///////////////////
				// Member Objects
				///////////////////
				case 'FromObject':
					/**
					 * Sets the value for the Login object referenced by intFrom (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intFrom = null;
						$this->objFromObject = null;
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
							throw new QCallerException('Unable to set an unsaved FromObject for this MarkTo');

						// Update Local Member Variables
						$this->objFromObject = $mixValue;
						$this->intFrom = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ToObject':
					/**
					 * Sets the value for the Login object referenced by intTo (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intTo = null;
						$this->objToObject = null;
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
							throw new QCallerException('Unable to set an unsaved ToObject for this MarkTo');

						// Update Local Member Variables
						$this->objToObject = $mixValue;
						$this->intTo = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DocInOutObject':
					/**
					 * Sets the value for the DocInOut object referenced by intDocInOut (Not Null)
					 * @param DocInOut $mixValue
					 * @return DocInOut
					 */
					if (is_null($mixValue)) {
						$this->intDocInOut = null;
						$this->objDocInOutObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DocInOut object
						try {
							$mixValue = QType::Cast($mixValue, 'DocInOut');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED DocInOut object
						if (is_null($mixValue->IddocInOut))
							throw new QCallerException('Unable to set an unsaved DocInOutObject for this MarkTo');

						// Update Local Member Variables
						$this->objDocInOutObject = $mixValue;
						$this->intDocInOut = $mixValue->IddocInOut;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved RoleObject for this MarkTo');

						// Update Local Member Variables
						$this->objRoleObject = $mixValue;
						$this->intRole = $mixValue->Idrole;

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
			return "mark_to";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[MarkTo::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="MarkTo"><sequence>';
			$strToReturn .= '<element name="IdmarkTo" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FromObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="ToObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="DocInOutObject" type="xsd1:DocInOut"/>';
			$strToReturn .= '<element name="OpenedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="RoleObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('MarkTo', $strComplexTypeArray)) {
				$strComplexTypeArray['MarkTo'] = MarkTo::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				DocInOut::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, MarkTo::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new MarkTo();
			if (property_exists($objSoapObject, 'IdmarkTo'))
				$objToReturn->intIdmarkTo = $objSoapObject->IdmarkTo;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'FromObject')) &&
				($objSoapObject->FromObject))
				$objToReturn->FromObject = Login::GetObjectFromSoapObject($objSoapObject->FromObject);
			if ((property_exists($objSoapObject, 'ToObject')) &&
				($objSoapObject->ToObject))
				$objToReturn->ToObject = Login::GetObjectFromSoapObject($objSoapObject->ToObject);
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if ((property_exists($objSoapObject, 'DocInOutObject')) &&
				($objSoapObject->DocInOutObject))
				$objToReturn->DocInOutObject = DocInOut::GetObjectFromSoapObject($objSoapObject->DocInOutObject);
			if (property_exists($objSoapObject, 'OpenedDate'))
				$objToReturn->dttOpenedDate = new QDateTime($objSoapObject->OpenedDate);
			if ((property_exists($objSoapObject, 'RoleObject')) &&
				($objSoapObject->RoleObject))
				$objToReturn->RoleObject = Role::GetObjectFromSoapObject($objSoapObject->RoleObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, MarkTo::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objFromObject)
				$objObject->objFromObject = Login::GetSoapObjectFromObject($objObject->objFromObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFrom = null;
			if ($objObject->objToObject)
				$objObject->objToObject = Login::GetSoapObjectFromObject($objObject->objToObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTo = null;
			if ($objObject->objDocInOutObject)
				$objObject->objDocInOutObject = DocInOut::GetSoapObjectFromObject($objObject->objDocInOutObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDocInOut = null;
			if ($objObject->dttOpenedDate)
				$objObject->dttOpenedDate = $objObject->dttOpenedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objRoleObject)
				$objObject->objRoleObject = Role::GetSoapObjectFromObject($objObject->objRoleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRole = null;
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
			$iArray['IdmarkTo'] = $this->intIdmarkTo;
			$iArray['Date'] = $this->dttDate;
			$iArray['From'] = $this->intFrom;
			$iArray['To'] = $this->intTo;
			$iArray['Note'] = $this->strNote;
			$iArray['DocInOut'] = $this->intDocInOut;
			$iArray['OpenedDate'] = $this->dttOpenedDate;
			$iArray['Role'] = $this->intRole;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdmarkTo ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdmarkTo
     * @property-read QQNode $Date
     * @property-read QQNode $From
     * @property-read QQNodeLogin $FromObject
     * @property-read QQNode $To
     * @property-read QQNodeLogin $ToObject
     * @property-read QQNode $Note
     * @property-read QQNode $DocInOut
     * @property-read QQNodeDocInOut $DocInOutObject
     * @property-read QQNode $OpenedDate
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeMarkTo extends QQNode {
		protected $strTableName = 'mark_to';
		protected $strPrimaryKey = 'idmark_to';
		protected $strClassName = 'MarkTo';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmarkTo':
					return new QQNode('idmark_to', 'IdmarkTo', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'From':
					return new QQNode('from', 'From', 'Integer', $this);
				case 'FromObject':
					return new QQNodeLogin('from', 'FromObject', 'Integer', $this);
				case 'To':
					return new QQNode('to', 'To', 'Integer', $this);
				case 'ToObject':
					return new QQNodeLogin('to', 'ToObject', 'Integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);
				case 'DocInOut':
					return new QQNode('doc_in_out', 'DocInOut', 'Integer', $this);
				case 'DocInOutObject':
					return new QQNodeDocInOut('doc_in_out', 'DocInOutObject', 'Integer', $this);
				case 'OpenedDate':
					return new QQNode('opened_date', 'OpenedDate', 'DateTime', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'Integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idmark_to', 'IdmarkTo', 'Integer', $this);
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
     * @property-read QQNode $IdmarkTo
     * @property-read QQNode $Date
     * @property-read QQNode $From
     * @property-read QQNodeLogin $FromObject
     * @property-read QQNode $To
     * @property-read QQNodeLogin $ToObject
     * @property-read QQNode $Note
     * @property-read QQNode $DocInOut
     * @property-read QQNodeDocInOut $DocInOutObject
     * @property-read QQNode $OpenedDate
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeMarkTo extends QQReverseReferenceNode {
		protected $strTableName = 'mark_to';
		protected $strPrimaryKey = 'idmark_to';
		protected $strClassName = 'MarkTo';
		public function __get($strName) {
			switch ($strName) {
				case 'IdmarkTo':
					return new QQNode('idmark_to', 'IdmarkTo', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'From':
					return new QQNode('from', 'From', 'integer', $this);
				case 'FromObject':
					return new QQNodeLogin('from', 'FromObject', 'integer', $this);
				case 'To':
					return new QQNode('to', 'To', 'integer', $this);
				case 'ToObject':
					return new QQNodeLogin('to', 'ToObject', 'integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'DocInOut':
					return new QQNode('doc_in_out', 'DocInOut', 'integer', $this);
				case 'DocInOutObject':
					return new QQNodeDocInOut('doc_in_out', 'DocInOutObject', 'integer', $this);
				case 'OpenedDate':
					return new QQNode('opened_date', 'OpenedDate', 'QDateTime', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idmark_to', 'IdmarkTo', 'integer', $this);
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
