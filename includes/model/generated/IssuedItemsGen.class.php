<?php
	/**
	 * The abstract IssuedItemsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the IssuedItems subclass which
	 * extends this IssuedItemsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the IssuedItems class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdissuedItems the value for intIdissuedItems (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate 
	 * @property integer $Member the value for intMember (Not Null)
	 * @property integer $Item the value for intItem (Not Null)
	 * @property integer $Serials the value for intSerials 
	 * @property string $Code the value for strCode 
	 * @property string $Description the value for strDescription 
	 * @property QDateTime $ReturnedDate the value for dttReturnedDate 
	 * @property boolean $ReturnItem the value for blnReturnItem 
	 * @property integer $AcceptedBy the value for intAcceptedBy 
	 * @property QDateTime $AcceptedDate the value for dttAcceptedDate 
	 * @property integer $FromDept the value for intFromDept 
	 * @property Login $MemberObject the value for the Login object referenced by intMember (Not Null)
	 * @property LedgerDetails $ItemObject the value for the LedgerDetails object referenced by intItem (Not Null)
	 * @property Serials $SerialsObject the value for the Serials object referenced by intSerials 
	 * @property Login $AcceptedByObject the value for the Login object referenced by intAcceptedBy 
	 * @property Role $FromDeptObject the value for the Role object referenced by intFromDept 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class IssuedItemsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column issued_items.idissued_items
		 * @var integer intIdissuedItems
		 */
		protected $intIdissuedItems;
		const IdissuedItemsDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.member
		 * @var integer intMember
		 */
		protected $intMember;
		const MemberDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.serials
		 * @var integer intSerials
		 */
		protected $intSerials;
		const SerialsDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 255;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.returned_date
		 * @var QDateTime dttReturnedDate
		 */
		protected $dttReturnedDate;
		const ReturnedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.return_item
		 * @var boolean blnReturnItem
		 */
		protected $blnReturnItem;
		const ReturnItemDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.accepted_by
		 * @var integer intAcceptedBy
		 */
		protected $intAcceptedBy;
		const AcceptedByDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.accepted_date
		 * @var QDateTime dttAcceptedDate
		 */
		protected $dttAcceptedDate;
		const AcceptedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column issued_items.from_dept
		 * @var integer intFromDept
		 */
		protected $intFromDept;
		const FromDeptDefault = null;


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
		 * in the database column issued_items.member.
		 *
		 * NOTE: Always use the MemberObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objMemberObject
		 */
		protected $objMemberObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column issued_items.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column issued_items.serials.
		 *
		 * NOTE: Always use the SerialsObject property getter to correctly retrieve this Serials object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Serials objSerialsObject
		 */
		protected $objSerialsObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column issued_items.accepted_by.
		 *
		 * NOTE: Always use the AcceptedByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objAcceptedByObject
		 */
		protected $objAcceptedByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column issued_items.from_dept.
		 *
		 * NOTE: Always use the FromDeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objFromDeptObject
		 */
		protected $objFromDeptObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdissuedItems = IssuedItems::IdissuedItemsDefault;
			$this->dttDate = (IssuedItems::DateDefault === null)?null:new QDateTime(IssuedItems::DateDefault);
			$this->intMember = IssuedItems::MemberDefault;
			$this->intItem = IssuedItems::ItemDefault;
			$this->intSerials = IssuedItems::SerialsDefault;
			$this->strCode = IssuedItems::CodeDefault;
			$this->strDescription = IssuedItems::DescriptionDefault;
			$this->dttReturnedDate = (IssuedItems::ReturnedDateDefault === null)?null:new QDateTime(IssuedItems::ReturnedDateDefault);
			$this->blnReturnItem = IssuedItems::ReturnItemDefault;
			$this->intAcceptedBy = IssuedItems::AcceptedByDefault;
			$this->dttAcceptedDate = (IssuedItems::AcceptedDateDefault === null)?null:new QDateTime(IssuedItems::AcceptedDateDefault);
			$this->intFromDept = IssuedItems::FromDeptDefault;
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
		 * Load a IssuedItems from PK Info
		 * @param integer $intIdissuedItems
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems
		 */
		public static function Load($intIdissuedItems, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'IssuedItems', $intIdissuedItems);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = IssuedItems::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::IssuedItems()->IdissuedItems, $intIdissuedItems)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all IssuedItemses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call IssuedItems::QueryArray to perform the LoadAll query
			try {
				return IssuedItems::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all IssuedItemses
		 * @return int
		 */
		public static function CountAll() {
			// Call IssuedItems::QueryCount to perform the CountAll query
			return IssuedItems::QueryCount(QQ::All());
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
			$objDatabase = IssuedItems::GetDatabase();

			// Create/Build out the QueryBuilder object with IssuedItems-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'issued_items');

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
				IssuedItems::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('issued_items');

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
		 * Static Qcubed Query method to query for a single IssuedItems object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return IssuedItems the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = IssuedItems::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new IssuedItems object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = IssuedItems::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return IssuedItems::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of IssuedItems objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return IssuedItems[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = IssuedItems::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return IssuedItems::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = IssuedItems::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of IssuedItems objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = IssuedItems::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = IssuedItems::GetDatabase();

			$strQuery = IssuedItems::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/issueditems', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = IssuedItems::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this IssuedItems
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'issued_items';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idissued_items', $strAliasPrefix . 'idissued_items');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idissued_items', $strAliasPrefix . 'idissued_items');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'member', $strAliasPrefix . 'member');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'serials', $strAliasPrefix . 'serials');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'returned_date', $strAliasPrefix . 'returned_date');
			    $objBuilder->AddSelectItem($strTableName, 'return_item', $strAliasPrefix . 'return_item');
			    $objBuilder->AddSelectItem($strTableName, 'accepted_by', $strAliasPrefix . 'accepted_by');
			    $objBuilder->AddSelectItem($strTableName, 'accepted_date', $strAliasPrefix . 'accepted_date');
			    $objBuilder->AddSelectItem($strTableName, 'from_dept', $strAliasPrefix . 'from_dept');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a IssuedItems from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this IssuedItems::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return IssuedItems
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the IssuedItems object
			$objToReturn = new IssuedItems();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idissued_items';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdissuedItems = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'serials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSerials = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'returned_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttReturnedDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'return_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnReturnItem = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'accepted_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAcceptedBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'accepted_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttAcceptedDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'from_dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFromDept = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdissuedItems != $objPreviousItem->IdissuedItems) {
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
				$strAliasPrefix = 'issued_items__';

			// Check for MemberObject Early Binding
			$strAlias = $strAliasPrefix . 'member__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMemberObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SerialsObject Early Binding
			$strAlias = $strAliasPrefix . 'serials__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSerialsObject = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serials__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AcceptedByObject Early Binding
			$strAlias = $strAliasPrefix . 'accepted_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAcceptedByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'accepted_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FromDeptObject Early Binding
			$strAlias = $strAliasPrefix . 'from_dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFromDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'from_dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of IssuedItemses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return IssuedItems[]
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
					$objItem = IssuedItems::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = IssuedItems::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single IssuedItems object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return IssuedItems next row resulting from the query
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
			return IssuedItems::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single IssuedItems object,
		 * by IdissuedItems Index(es)
		 * @param integer $intIdissuedItems
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems
		*/
		public static function LoadByIdissuedItems($intIdissuedItems, $objOptionalClauses = null) {
			return IssuedItems::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::IssuedItems()->IdissuedItems, $intIdissuedItems)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of IssuedItems objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call IssuedItems::QueryArray to perform the LoadArrayByItem query
			try {
				return IssuedItems::QueryArray(
					QQ::Equal(QQN::IssuedItems()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count IssuedItemses
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call IssuedItems::QueryCount to perform the CountByItem query
			return IssuedItems::QueryCount(
				QQ::Equal(QQN::IssuedItems()->Item, $intItem)
			);
		}

		/**
		 * Load an array of IssuedItems objects,
		 * by Member Index(es)
		 * @param integer $intMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public static function LoadArrayByMember($intMember, $objOptionalClauses = null) {
			// Call IssuedItems::QueryArray to perform the LoadArrayByMember query
			try {
				return IssuedItems::QueryArray(
					QQ::Equal(QQN::IssuedItems()->Member, $intMember),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count IssuedItemses
		 * by Member Index(es)
		 * @param integer $intMember
		 * @return int
		*/
		public static function CountByMember($intMember) {
			// Call IssuedItems::QueryCount to perform the CountByMember query
			return IssuedItems::QueryCount(
				QQ::Equal(QQN::IssuedItems()->Member, $intMember)
			);
		}

		/**
		 * Load an array of IssuedItems objects,
		 * by Serials Index(es)
		 * @param integer $intSerials
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public static function LoadArrayBySerials($intSerials, $objOptionalClauses = null) {
			// Call IssuedItems::QueryArray to perform the LoadArrayBySerials query
			try {
				return IssuedItems::QueryArray(
					QQ::Equal(QQN::IssuedItems()->Serials, $intSerials),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count IssuedItemses
		 * by Serials Index(es)
		 * @param integer $intSerials
		 * @return int
		*/
		public static function CountBySerials($intSerials) {
			// Call IssuedItems::QueryCount to perform the CountBySerials query
			return IssuedItems::QueryCount(
				QQ::Equal(QQN::IssuedItems()->Serials, $intSerials)
			);
		}

		/**
		 * Load an array of IssuedItems objects,
		 * by AcceptedBy Index(es)
		 * @param integer $intAcceptedBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public static function LoadArrayByAcceptedBy($intAcceptedBy, $objOptionalClauses = null) {
			// Call IssuedItems::QueryArray to perform the LoadArrayByAcceptedBy query
			try {
				return IssuedItems::QueryArray(
					QQ::Equal(QQN::IssuedItems()->AcceptedBy, $intAcceptedBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count IssuedItemses
		 * by AcceptedBy Index(es)
		 * @param integer $intAcceptedBy
		 * @return int
		*/
		public static function CountByAcceptedBy($intAcceptedBy) {
			// Call IssuedItems::QueryCount to perform the CountByAcceptedBy query
			return IssuedItems::QueryCount(
				QQ::Equal(QQN::IssuedItems()->AcceptedBy, $intAcceptedBy)
			);
		}

		/**
		 * Load an array of IssuedItems objects,
		 * by FromDept Index(es)
		 * @param integer $intFromDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public static function LoadArrayByFromDept($intFromDept, $objOptionalClauses = null) {
			// Call IssuedItems::QueryArray to perform the LoadArrayByFromDept query
			try {
				return IssuedItems::QueryArray(
					QQ::Equal(QQN::IssuedItems()->FromDept, $intFromDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count IssuedItemses
		 * by FromDept Index(es)
		 * @param integer $intFromDept
		 * @return int
		*/
		public static function CountByFromDept($intFromDept) {
			// Call IssuedItems::QueryCount to perform the CountByFromDept query
			return IssuedItems::QueryCount(
				QQ::Equal(QQN::IssuedItems()->FromDept, $intFromDept)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this IssuedItems
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = IssuedItems::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `issued_items` (
							`date`,
							`member`,
							`item`,
							`serials`,
							`code`,
							`description`,
							`returned_date`,
							`return_item`,
							`accepted_by`,
							`accepted_date`,
							`from_dept`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intMember) . ',
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->intSerials) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->dttReturnedDate) . ',
							' . $objDatabase->SqlVariable($this->blnReturnItem) . ',
							' . $objDatabase->SqlVariable($this->intAcceptedBy) . ',
							' . $objDatabase->SqlVariable($this->dttAcceptedDate) . ',
							' . $objDatabase->SqlVariable($this->intFromDept) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdissuedItems = $objDatabase->InsertId('issued_items', 'idissued_items');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`issued_items`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`member` = ' . $objDatabase->SqlVariable($this->intMember) . ',
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`serials` = ' . $objDatabase->SqlVariable($this->intSerials) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`returned_date` = ' . $objDatabase->SqlVariable($this->dttReturnedDate) . ',
							`return_item` = ' . $objDatabase->SqlVariable($this->blnReturnItem) . ',
							`accepted_by` = ' . $objDatabase->SqlVariable($this->intAcceptedBy) . ',
							`accepted_date` = ' . $objDatabase->SqlVariable($this->dttAcceptedDate) . ',
							`from_dept` = ' . $objDatabase->SqlVariable($this->intFromDept) . '
						WHERE
							`idissued_items` = ' . $objDatabase->SqlVariable($this->intIdissuedItems) . '
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
		 * Delete this IssuedItems
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this IssuedItems with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = IssuedItems::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($this->intIdissuedItems) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this IssuedItems ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'IssuedItems', $this->intIdissuedItems);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all IssuedItemses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = IssuedItems::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate issued_items table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = IssuedItems::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `issued_items`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this IssuedItems from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved IssuedItems object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = IssuedItems::Load($this->intIdissuedItems);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->Member = $objReloaded->Member;
			$this->Item = $objReloaded->Item;
			$this->Serials = $objReloaded->Serials;
			$this->strCode = $objReloaded->strCode;
			$this->strDescription = $objReloaded->strDescription;
			$this->dttReturnedDate = $objReloaded->dttReturnedDate;
			$this->blnReturnItem = $objReloaded->blnReturnItem;
			$this->AcceptedBy = $objReloaded->AcceptedBy;
			$this->dttAcceptedDate = $objReloaded->dttAcceptedDate;
			$this->FromDept = $objReloaded->FromDept;
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
				case 'IdissuedItems':
					/**
					 * Gets the value for intIdissuedItems (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdissuedItems;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Member':
					/**
					 * Gets the value for intMember (Not Null)
					 * @return integer
					 */
					return $this->intMember;

				case 'Item':
					/**
					 * Gets the value for intItem (Not Null)
					 * @return integer
					 */
					return $this->intItem;

				case 'Serials':
					/**
					 * Gets the value for intSerials 
					 * @return integer
					 */
					return $this->intSerials;

				case 'Code':
					/**
					 * Gets the value for strCode 
					 * @return string
					 */
					return $this->strCode;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'ReturnedDate':
					/**
					 * Gets the value for dttReturnedDate 
					 * @return QDateTime
					 */
					return $this->dttReturnedDate;

				case 'ReturnItem':
					/**
					 * Gets the value for blnReturnItem 
					 * @return boolean
					 */
					return $this->blnReturnItem;

				case 'AcceptedBy':
					/**
					 * Gets the value for intAcceptedBy 
					 * @return integer
					 */
					return $this->intAcceptedBy;

				case 'AcceptedDate':
					/**
					 * Gets the value for dttAcceptedDate 
					 * @return QDateTime
					 */
					return $this->dttAcceptedDate;

				case 'FromDept':
					/**
					 * Gets the value for intFromDept 
					 * @return integer
					 */
					return $this->intFromDept;


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Gets the value for the Login object referenced by intMember (Not Null)
					 * @return Login
					 */
					try {
						if ((!$this->objMemberObject) && (!is_null($this->intMember)))
							$this->objMemberObject = Login::Load($this->intMember);
						return $this->objMemberObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ItemObject':
					/**
					 * Gets the value for the LedgerDetails object referenced by intItem (Not Null)
					 * @return LedgerDetails
					 */
					try {
						if ((!$this->objItemObject) && (!is_null($this->intItem)))
							$this->objItemObject = LedgerDetails::Load($this->intItem);
						return $this->objItemObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SerialsObject':
					/**
					 * Gets the value for the Serials object referenced by intSerials 
					 * @return Serials
					 */
					try {
						if ((!$this->objSerialsObject) && (!is_null($this->intSerials)))
							$this->objSerialsObject = Serials::Load($this->intSerials);
						return $this->objSerialsObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcceptedByObject':
					/**
					 * Gets the value for the Login object referenced by intAcceptedBy 
					 * @return Login
					 */
					try {
						if ((!$this->objAcceptedByObject) && (!is_null($this->intAcceptedBy)))
							$this->objAcceptedByObject = Login::Load($this->intAcceptedBy);
						return $this->objAcceptedByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromDeptObject':
					/**
					 * Gets the value for the Role object referenced by intFromDept 
					 * @return Role
					 */
					try {
						if ((!$this->objFromDeptObject) && (!is_null($this->intFromDept)))
							$this->objFromDeptObject = Role::Load($this->intFromDept);
						return $this->objFromDeptObject;
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

				case 'Member':
					/**
					 * Sets the value for intMember (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMemberObject = null;
						return ($this->intMember = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Item':
					/**
					 * Sets the value for intItem (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objItemObject = null;
						return ($this->intItem = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Serials':
					/**
					 * Sets the value for intSerials 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSerialsObject = null;
						return ($this->intSerials = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Code':
					/**
					 * Sets the value for strCode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCode = QType::Cast($mixValue, QType::String));
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

				case 'ReturnedDate':
					/**
					 * Sets the value for dttReturnedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttReturnedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ReturnItem':
					/**
					 * Sets the value for blnReturnItem 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnReturnItem = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcceptedBy':
					/**
					 * Sets the value for intAcceptedBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAcceptedByObject = null;
						return ($this->intAcceptedBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AcceptedDate':
					/**
					 * Sets the value for dttAcceptedDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttAcceptedDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromDept':
					/**
					 * Sets the value for intFromDept 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFromDeptObject = null;
						return ($this->intFromDept = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Sets the value for the Login object referenced by intMember (Not Null)
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intMember = null;
						$this->objMemberObject = null;
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
							throw new QCallerException('Unable to set an unsaved MemberObject for this IssuedItems');

						// Update Local Member Variables
						$this->objMemberObject = $mixValue;
						$this->intMember = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ItemObject':
					/**
					 * Sets the value for the LedgerDetails object referenced by intItem (Not Null)
					 * @param LedgerDetails $mixValue
					 * @return LedgerDetails
					 */
					if (is_null($mixValue)) {
						$this->intItem = null;
						$this->objItemObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a LedgerDetails object
						try {
							$mixValue = QType::Cast($mixValue, 'LedgerDetails');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED LedgerDetails object
						if (is_null($mixValue->IdledgerDetails))
							throw new QCallerException('Unable to set an unsaved ItemObject for this IssuedItems');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->IdledgerDetails;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SerialsObject':
					/**
					 * Sets the value for the Serials object referenced by intSerials 
					 * @param Serials $mixValue
					 * @return Serials
					 */
					if (is_null($mixValue)) {
						$this->intSerials = null;
						$this->objSerialsObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Serials object
						try {
							$mixValue = QType::Cast($mixValue, 'Serials');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Serials object
						if (is_null($mixValue->Idserials))
							throw new QCallerException('Unable to set an unsaved SerialsObject for this IssuedItems');

						// Update Local Member Variables
						$this->objSerialsObject = $mixValue;
						$this->intSerials = $mixValue->Idserials;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AcceptedByObject':
					/**
					 * Sets the value for the Login object referenced by intAcceptedBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intAcceptedBy = null;
						$this->objAcceptedByObject = null;
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
							throw new QCallerException('Unable to set an unsaved AcceptedByObject for this IssuedItems');

						// Update Local Member Variables
						$this->objAcceptedByObject = $mixValue;
						$this->intAcceptedBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FromDeptObject':
					/**
					 * Sets the value for the Role object referenced by intFromDept 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intFromDept = null;
						$this->objFromDeptObject = null;
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
							throw new QCallerException('Unable to set an unsaved FromDeptObject for this IssuedItems');

						// Update Local Member Variables
						$this->objFromDeptObject = $mixValue;
						$this->intFromDept = $mixValue->Idrole;

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
			return "issued_items";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[IssuedItems::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="IssuedItems"><sequence>';
			$strToReturn .= '<element name="IdissuedItems" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="MemberObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:LedgerDetails"/>';
			$strToReturn .= '<element name="SerialsObject" type="xsd1:Serials"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="ReturnedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ReturnItem" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AcceptedByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="AcceptedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FromDeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('IssuedItems', $strComplexTypeArray)) {
				$strComplexTypeArray['IssuedItems'] = IssuedItems::GetSoapComplexTypeXml();
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				LedgerDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				Serials::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, IssuedItems::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new IssuedItems();
			if (property_exists($objSoapObject, 'IdissuedItems'))
				$objToReturn->intIdissuedItems = $objSoapObject->IdissuedItems;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'MemberObject')) &&
				($objSoapObject->MemberObject))
				$objToReturn->MemberObject = Login::GetObjectFromSoapObject($objSoapObject->MemberObject);
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = LedgerDetails::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if ((property_exists($objSoapObject, 'SerialsObject')) &&
				($objSoapObject->SerialsObject))
				$objToReturn->SerialsObject = Serials::GetObjectFromSoapObject($objSoapObject->SerialsObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'ReturnedDate'))
				$objToReturn->dttReturnedDate = new QDateTime($objSoapObject->ReturnedDate);
			if (property_exists($objSoapObject, 'ReturnItem'))
				$objToReturn->blnReturnItem = $objSoapObject->ReturnItem;
			if ((property_exists($objSoapObject, 'AcceptedByObject')) &&
				($objSoapObject->AcceptedByObject))
				$objToReturn->AcceptedByObject = Login::GetObjectFromSoapObject($objSoapObject->AcceptedByObject);
			if (property_exists($objSoapObject, 'AcceptedDate'))
				$objToReturn->dttAcceptedDate = new QDateTime($objSoapObject->AcceptedDate);
			if ((property_exists($objSoapObject, 'FromDeptObject')) &&
				($objSoapObject->FromDeptObject))
				$objToReturn->FromDeptObject = Role::GetObjectFromSoapObject($objSoapObject->FromDeptObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, IssuedItems::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objMemberObject)
				$objObject->objMemberObject = Login::GetSoapObjectFromObject($objObject->objMemberObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMember = null;
			if ($objObject->objItemObject)
				$objObject->objItemObject = LedgerDetails::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
			if ($objObject->objSerialsObject)
				$objObject->objSerialsObject = Serials::GetSoapObjectFromObject($objObject->objSerialsObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSerials = null;
			if ($objObject->dttReturnedDate)
				$objObject->dttReturnedDate = $objObject->dttReturnedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objAcceptedByObject)
				$objObject->objAcceptedByObject = Login::GetSoapObjectFromObject($objObject->objAcceptedByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAcceptedBy = null;
			if ($objObject->dttAcceptedDate)
				$objObject->dttAcceptedDate = $objObject->dttAcceptedDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objFromDeptObject)
				$objObject->objFromDeptObject = Role::GetSoapObjectFromObject($objObject->objFromDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFromDept = null;
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
			$iArray['IdissuedItems'] = $this->intIdissuedItems;
			$iArray['Date'] = $this->dttDate;
			$iArray['Member'] = $this->intMember;
			$iArray['Item'] = $this->intItem;
			$iArray['Serials'] = $this->intSerials;
			$iArray['Code'] = $this->strCode;
			$iArray['Description'] = $this->strDescription;
			$iArray['ReturnedDate'] = $this->dttReturnedDate;
			$iArray['ReturnItem'] = $this->blnReturnItem;
			$iArray['AcceptedBy'] = $this->intAcceptedBy;
			$iArray['AcceptedDate'] = $this->dttAcceptedDate;
			$iArray['FromDept'] = $this->intFromDept;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdissuedItems ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdissuedItems
     * @property-read QQNode $Date
     * @property-read QQNode $Member
     * @property-read QQNodeLogin $MemberObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Serials
     * @property-read QQNodeSerials $SerialsObject
     * @property-read QQNode $Code
     * @property-read QQNode $Description
     * @property-read QQNode $ReturnedDate
     * @property-read QQNode $ReturnItem
     * @property-read QQNode $AcceptedBy
     * @property-read QQNodeLogin $AcceptedByObject
     * @property-read QQNode $AcceptedDate
     * @property-read QQNode $FromDept
     * @property-read QQNodeRole $FromDeptObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeIssuedItems extends QQNode {
		protected $strTableName = 'issued_items';
		protected $strPrimaryKey = 'idissued_items';
		protected $strClassName = 'IssuedItems';
		public function __get($strName) {
			switch ($strName) {
				case 'IdissuedItems':
					return new QQNode('idissued_items', 'IdissuedItems', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'Integer', $this);
				case 'MemberObject':
					return new QQNodeLogin('member', 'MemberObject', 'Integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'Integer', $this);
				case 'Serials':
					return new QQNode('serials', 'Serials', 'Integer', $this);
				case 'SerialsObject':
					return new QQNodeSerials('serials', 'SerialsObject', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'ReturnedDate':
					return new QQNode('returned_date', 'ReturnedDate', 'DateTime', $this);
				case 'ReturnItem':
					return new QQNode('return_item', 'ReturnItem', 'Bit', $this);
				case 'AcceptedBy':
					return new QQNode('accepted_by', 'AcceptedBy', 'Integer', $this);
				case 'AcceptedByObject':
					return new QQNodeLogin('accepted_by', 'AcceptedByObject', 'Integer', $this);
				case 'AcceptedDate':
					return new QQNode('accepted_date', 'AcceptedDate', 'Date', $this);
				case 'FromDept':
					return new QQNode('from_dept', 'FromDept', 'Integer', $this);
				case 'FromDeptObject':
					return new QQNodeRole('from_dept', 'FromDeptObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idissued_items', 'IdissuedItems', 'Integer', $this);
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
     * @property-read QQNode $IdissuedItems
     * @property-read QQNode $Date
     * @property-read QQNode $Member
     * @property-read QQNodeLogin $MemberObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Serials
     * @property-read QQNodeSerials $SerialsObject
     * @property-read QQNode $Code
     * @property-read QQNode $Description
     * @property-read QQNode $ReturnedDate
     * @property-read QQNode $ReturnItem
     * @property-read QQNode $AcceptedBy
     * @property-read QQNodeLogin $AcceptedByObject
     * @property-read QQNode $AcceptedDate
     * @property-read QQNode $FromDept
     * @property-read QQNodeRole $FromDeptObject
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeIssuedItems extends QQReverseReferenceNode {
		protected $strTableName = 'issued_items';
		protected $strPrimaryKey = 'idissued_items';
		protected $strClassName = 'IssuedItems';
		public function __get($strName) {
			switch ($strName) {
				case 'IdissuedItems':
					return new QQNode('idissued_items', 'IdissuedItems', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'integer', $this);
				case 'MemberObject':
					return new QQNodeLogin('member', 'MemberObject', 'integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'integer', $this);
				case 'Serials':
					return new QQNode('serials', 'Serials', 'integer', $this);
				case 'SerialsObject':
					return new QQNodeSerials('serials', 'SerialsObject', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'ReturnedDate':
					return new QQNode('returned_date', 'ReturnedDate', 'QDateTime', $this);
				case 'ReturnItem':
					return new QQNode('return_item', 'ReturnItem', 'boolean', $this);
				case 'AcceptedBy':
					return new QQNode('accepted_by', 'AcceptedBy', 'integer', $this);
				case 'AcceptedByObject':
					return new QQNodeLogin('accepted_by', 'AcceptedByObject', 'integer', $this);
				case 'AcceptedDate':
					return new QQNode('accepted_date', 'AcceptedDate', 'QDateTime', $this);
				case 'FromDept':
					return new QQNode('from_dept', 'FromDept', 'integer', $this);
				case 'FromDeptObject':
					return new QQNodeRole('from_dept', 'FromDeptObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idissued_items', 'IdissuedItems', 'integer', $this);
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
