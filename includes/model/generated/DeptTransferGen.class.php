<?php
	/**
	 * The abstract DeptTransferGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the DeptTransfer subclass which
	 * extends this DeptTransferGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the DeptTransfer class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IddeptTransfer the value for intIddeptTransfer (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate 
	 * @property integer $Item the value for intItem 
	 * @property integer $FromDept the value for intFromDept 
	 * @property integer $ToDept the value for intToDept 
	 * @property integer $Qty the value for intQty 
	 * @property string $Description the value for strDescription 
	 * @property integer $Serials the value for intSerials 
	 * @property integer $AcceptedBy the value for intAcceptedBy 
	 * @property QDateTime $AcceptedDate the value for dttAcceptedDate 
	 * @property boolean $Return the value for blnReturn 
	 * @property LedgerDetails $ItemObject the value for the LedgerDetails object referenced by intItem 
	 * @property Role $FromDeptObject the value for the Role object referenced by intFromDept 
	 * @property Role $ToDeptObject the value for the Role object referenced by intToDept 
	 * @property Serials $SerialsObject the value for the Serials object referenced by intSerials 
	 * @property Ledger $AcceptedByObject the value for the Ledger object referenced by intAcceptedBy 
	 * @property-read TempTransfer $_TempTransferAsId the value for the private _objTempTransferAsId (Read-Only) if set due to an expansion on the temp_transfer.iddept_transfer reverse relationship
	 * @property-read TempTransfer[] $_TempTransferAsIdArray the value for the private _objTempTransferAsIdArray (Read-Only) if set due to an ExpandAsArray on the temp_transfer.iddept_transfer reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DeptTransferGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column dept_transfer.iddept_transfer
		 * @var integer intIddeptTransfer
		 */
		protected $intIddeptTransfer;
		const IddeptTransferDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.from_dept
		 * @var integer intFromDept
		 */
		protected $intFromDept;
		const FromDeptDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.to_dept
		 * @var integer intToDept
		 */
		protected $intToDept;
		const ToDeptDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.qty
		 * @var integer intQty
		 */
		protected $intQty;
		const QtyDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.serials
		 * @var integer intSerials
		 */
		protected $intSerials;
		const SerialsDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.accepted_by
		 * @var integer intAcceptedBy
		 */
		protected $intAcceptedBy;
		const AcceptedByDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.accepted_date
		 * @var QDateTime dttAcceptedDate
		 */
		protected $dttAcceptedDate;
		const AcceptedDateDefault = null;


		/**
		 * Protected member variable that maps to the database column dept_transfer.return
		 * @var boolean blnReturn
		 */
		protected $blnReturn;
		const ReturnDefault = null;


		/**
		 * Private member variable that stores a reference to a single TempTransferAsId object
		 * (of type TempTransfer), if this DeptTransfer object was restored with
		 * an expansion on the temp_transfer association table.
		 * @var TempTransfer _objTempTransferAsId;
		 */
		private $_objTempTransferAsId;

		/**
		 * Private member variable that stores a reference to an array of TempTransferAsId objects
		 * (of type TempTransfer[]), if this DeptTransfer object was restored with
		 * an ExpandAsArray on the temp_transfer association table.
		 * @var TempTransfer[] _objTempTransferAsIdArray;
		 */
		private $_objTempTransferAsIdArray = null;

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
		 * in the database column dept_transfer.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column dept_transfer.from_dept.
		 *
		 * NOTE: Always use the FromDeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objFromDeptObject
		 */
		protected $objFromDeptObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column dept_transfer.to_dept.
		 *
		 * NOTE: Always use the ToDeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objToDeptObject
		 */
		protected $objToDeptObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column dept_transfer.serials.
		 *
		 * NOTE: Always use the SerialsObject property getter to correctly retrieve this Serials object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Serials objSerialsObject
		 */
		protected $objSerialsObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column dept_transfer.accepted_by.
		 *
		 * NOTE: Always use the AcceptedByObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objAcceptedByObject
		 */
		protected $objAcceptedByObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIddeptTransfer = DeptTransfer::IddeptTransferDefault;
			$this->dttDate = (DeptTransfer::DateDefault === null)?null:new QDateTime(DeptTransfer::DateDefault);
			$this->intItem = DeptTransfer::ItemDefault;
			$this->intFromDept = DeptTransfer::FromDeptDefault;
			$this->intToDept = DeptTransfer::ToDeptDefault;
			$this->intQty = DeptTransfer::QtyDefault;
			$this->strDescription = DeptTransfer::DescriptionDefault;
			$this->intSerials = DeptTransfer::SerialsDefault;
			$this->intAcceptedBy = DeptTransfer::AcceptedByDefault;
			$this->dttAcceptedDate = (DeptTransfer::AcceptedDateDefault === null)?null:new QDateTime(DeptTransfer::AcceptedDateDefault);
			$this->blnReturn = DeptTransfer::ReturnDefault;
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
		 * Load a DeptTransfer from PK Info
		 * @param integer $intIddeptTransfer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer
		 */
		public static function Load($intIddeptTransfer, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DeptTransfer', $intIddeptTransfer);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = DeptTransfer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DeptTransfer()->IddeptTransfer, $intIddeptTransfer)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all DeptTransfers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call DeptTransfer::QueryArray to perform the LoadAll query
			try {
				return DeptTransfer::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all DeptTransfers
		 * @return int
		 */
		public static function CountAll() {
			// Call DeptTransfer::QueryCount to perform the CountAll query
			return DeptTransfer::QueryCount(QQ::All());
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
			$objDatabase = DeptTransfer::GetDatabase();

			// Create/Build out the QueryBuilder object with DeptTransfer-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'dept_transfer');

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
				DeptTransfer::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('dept_transfer');

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
		 * Static Qcubed Query method to query for a single DeptTransfer object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DeptTransfer the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DeptTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new DeptTransfer object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = DeptTransfer::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return DeptTransfer::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of DeptTransfer objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return DeptTransfer[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DeptTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return DeptTransfer::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = DeptTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of DeptTransfer objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = DeptTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = DeptTransfer::GetDatabase();

			$strQuery = DeptTransfer::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/depttransfer', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = DeptTransfer::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this DeptTransfer
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'dept_transfer';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'iddept_transfer', $strAliasPrefix . 'iddept_transfer');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'iddept_transfer', $strAliasPrefix . 'iddept_transfer');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'from_dept', $strAliasPrefix . 'from_dept');
			    $objBuilder->AddSelectItem($strTableName, 'to_dept', $strAliasPrefix . 'to_dept');
			    $objBuilder->AddSelectItem($strTableName, 'qty', $strAliasPrefix . 'qty');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'serials', $strAliasPrefix . 'serials');
			    $objBuilder->AddSelectItem($strTableName, 'accepted_by', $strAliasPrefix . 'accepted_by');
			    $objBuilder->AddSelectItem($strTableName, 'accepted_date', $strAliasPrefix . 'accepted_date');
			    $objBuilder->AddSelectItem($strTableName, 'return', $strAliasPrefix . 'return');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a DeptTransfer from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this DeptTransfer::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return DeptTransfer
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIddeptTransfer == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'dept_transfer__';


						// Expanding reverse references: TempTransferAsId
						$strAlias = $strAliasPrefix . 'temptransferasid__idtemp_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTempTransferAsIdArray)
								$objPreviousItem->_objTempTransferAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTempTransferAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTempTransferAsIdArray;
								$objChildItem = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTempTransferAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTempTransferAsIdArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'dept_transfer__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the DeptTransfer object
			$objToReturn = new DeptTransfer();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIddeptTransfer = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'from_dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFromDept = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'to_dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intToDept = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'qty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intQty = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'serials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSerials = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'accepted_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAcceptedBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'accepted_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttAcceptedDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'return';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnReturn = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IddeptTransfer != $objPreviousItem->IddeptTransfer) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objTempTransferAsIdArray);
					$cnt = count($objToReturn->_objTempTransferAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTempTransferAsIdArray, $objToReturn->_objTempTransferAsIdArray)) {
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
				$strAliasPrefix = 'dept_transfer__';

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FromDeptObject Early Binding
			$strAlias = $strAliasPrefix . 'from_dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFromDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'from_dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ToDeptObject Early Binding
			$strAlias = $strAliasPrefix . 'to_dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objToDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'to_dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SerialsObject Early Binding
			$strAlias = $strAliasPrefix . 'serials__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSerialsObject = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serials__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AcceptedByObject Early Binding
			$strAlias = $strAliasPrefix . 'accepted_by__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAcceptedByObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'accepted_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for TempTransferAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'temptransferasid__idtemp_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTempTransferAsIdArray)
				$objToReturn->_objTempTransferAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTempTransferAsIdArray[] = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTempTransferAsId = TempTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'temptransferasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of DeptTransfers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return DeptTransfer[]
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
					$objItem = DeptTransfer::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = DeptTransfer::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single DeptTransfer object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return DeptTransfer next row resulting from the query
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
			return DeptTransfer::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single DeptTransfer object,
		 * by IddeptTransfer Index(es)
		 * @param integer $intIddeptTransfer
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer
		*/
		public static function LoadByIddeptTransfer($intIddeptTransfer, $objOptionalClauses = null) {
			return DeptTransfer::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::DeptTransfer()->IddeptTransfer, $intIddeptTransfer)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of DeptTransfer objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call DeptTransfer::QueryArray to perform the LoadArrayByItem query
			try {
				return DeptTransfer::QueryArray(
					QQ::Equal(QQN::DeptTransfer()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DeptTransfers
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call DeptTransfer::QueryCount to perform the CountByItem query
			return DeptTransfer::QueryCount(
				QQ::Equal(QQN::DeptTransfer()->Item, $intItem)
			);
		}

		/**
		 * Load an array of DeptTransfer objects,
		 * by FromDept Index(es)
		 * @param integer $intFromDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public static function LoadArrayByFromDept($intFromDept, $objOptionalClauses = null) {
			// Call DeptTransfer::QueryArray to perform the LoadArrayByFromDept query
			try {
				return DeptTransfer::QueryArray(
					QQ::Equal(QQN::DeptTransfer()->FromDept, $intFromDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DeptTransfers
		 * by FromDept Index(es)
		 * @param integer $intFromDept
		 * @return int
		*/
		public static function CountByFromDept($intFromDept) {
			// Call DeptTransfer::QueryCount to perform the CountByFromDept query
			return DeptTransfer::QueryCount(
				QQ::Equal(QQN::DeptTransfer()->FromDept, $intFromDept)
			);
		}

		/**
		 * Load an array of DeptTransfer objects,
		 * by ToDept Index(es)
		 * @param integer $intToDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public static function LoadArrayByToDept($intToDept, $objOptionalClauses = null) {
			// Call DeptTransfer::QueryArray to perform the LoadArrayByToDept query
			try {
				return DeptTransfer::QueryArray(
					QQ::Equal(QQN::DeptTransfer()->ToDept, $intToDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DeptTransfers
		 * by ToDept Index(es)
		 * @param integer $intToDept
		 * @return int
		*/
		public static function CountByToDept($intToDept) {
			// Call DeptTransfer::QueryCount to perform the CountByToDept query
			return DeptTransfer::QueryCount(
				QQ::Equal(QQN::DeptTransfer()->ToDept, $intToDept)
			);
		}

		/**
		 * Load an array of DeptTransfer objects,
		 * by Serials Index(es)
		 * @param integer $intSerials
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public static function LoadArrayBySerials($intSerials, $objOptionalClauses = null) {
			// Call DeptTransfer::QueryArray to perform the LoadArrayBySerials query
			try {
				return DeptTransfer::QueryArray(
					QQ::Equal(QQN::DeptTransfer()->Serials, $intSerials),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DeptTransfers
		 * by Serials Index(es)
		 * @param integer $intSerials
		 * @return int
		*/
		public static function CountBySerials($intSerials) {
			// Call DeptTransfer::QueryCount to perform the CountBySerials query
			return DeptTransfer::QueryCount(
				QQ::Equal(QQN::DeptTransfer()->Serials, $intSerials)
			);
		}

		/**
		 * Load an array of DeptTransfer objects,
		 * by AcceptedBy Index(es)
		 * @param integer $intAcceptedBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public static function LoadArrayByAcceptedBy($intAcceptedBy, $objOptionalClauses = null) {
			// Call DeptTransfer::QueryArray to perform the LoadArrayByAcceptedBy query
			try {
				return DeptTransfer::QueryArray(
					QQ::Equal(QQN::DeptTransfer()->AcceptedBy, $intAcceptedBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count DeptTransfers
		 * by AcceptedBy Index(es)
		 * @param integer $intAcceptedBy
		 * @return int
		*/
		public static function CountByAcceptedBy($intAcceptedBy) {
			// Call DeptTransfer::QueryCount to perform the CountByAcceptedBy query
			return DeptTransfer::QueryCount(
				QQ::Equal(QQN::DeptTransfer()->AcceptedBy, $intAcceptedBy)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this DeptTransfer
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `dept_transfer` (
							`date`,
							`item`,
							`from_dept`,
							`to_dept`,
							`qty`,
							`description`,
							`serials`,
							`accepted_by`,
							`accepted_date`,
							`return`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->intFromDept) . ',
							' . $objDatabase->SqlVariable($this->intToDept) . ',
							' . $objDatabase->SqlVariable($this->intQty) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->intSerials) . ',
							' . $objDatabase->SqlVariable($this->intAcceptedBy) . ',
							' . $objDatabase->SqlVariable($this->dttAcceptedDate) . ',
							' . $objDatabase->SqlVariable($this->blnReturn) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIddeptTransfer = $objDatabase->InsertId('dept_transfer', 'iddept_transfer');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`dept_transfer`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`from_dept` = ' . $objDatabase->SqlVariable($this->intFromDept) . ',
							`to_dept` = ' . $objDatabase->SqlVariable($this->intToDept) . ',
							`qty` = ' . $objDatabase->SqlVariable($this->intQty) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`serials` = ' . $objDatabase->SqlVariable($this->intSerials) . ',
							`accepted_by` = ' . $objDatabase->SqlVariable($this->intAcceptedBy) . ',
							`accepted_date` = ' . $objDatabase->SqlVariable($this->dttAcceptedDate) . ',
							`return` = ' . $objDatabase->SqlVariable($this->blnReturn) . '
						WHERE
							`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '
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
		 * Delete this DeptTransfer
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this DeptTransfer with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this DeptTransfer ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'DeptTransfer', $this->intIddeptTransfer);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all DeptTransfers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate dept_transfer table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `dept_transfer`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this DeptTransfer from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved DeptTransfer object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = DeptTransfer::Load($this->intIddeptTransfer);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->Item = $objReloaded->Item;
			$this->FromDept = $objReloaded->FromDept;
			$this->ToDept = $objReloaded->ToDept;
			$this->intQty = $objReloaded->intQty;
			$this->strDescription = $objReloaded->strDescription;
			$this->Serials = $objReloaded->Serials;
			$this->AcceptedBy = $objReloaded->AcceptedBy;
			$this->dttAcceptedDate = $objReloaded->dttAcceptedDate;
			$this->blnReturn = $objReloaded->blnReturn;
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
				case 'IddeptTransfer':
					/**
					 * Gets the value for intIddeptTransfer (Read-Only PK)
					 * @return integer
					 */
					return $this->intIddeptTransfer;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Item':
					/**
					 * Gets the value for intItem 
					 * @return integer
					 */
					return $this->intItem;

				case 'FromDept':
					/**
					 * Gets the value for intFromDept 
					 * @return integer
					 */
					return $this->intFromDept;

				case 'ToDept':
					/**
					 * Gets the value for intToDept 
					 * @return integer
					 */
					return $this->intToDept;

				case 'Qty':
					/**
					 * Gets the value for intQty 
					 * @return integer
					 */
					return $this->intQty;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Serials':
					/**
					 * Gets the value for intSerials 
					 * @return integer
					 */
					return $this->intSerials;

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

				case 'Return':
					/**
					 * Gets the value for blnReturn 
					 * @return boolean
					 */
					return $this->blnReturn;


				///////////////////
				// Member Objects
				///////////////////
				case 'ItemObject':
					/**
					 * Gets the value for the LedgerDetails object referenced by intItem 
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

				case 'ToDeptObject':
					/**
					 * Gets the value for the Role object referenced by intToDept 
					 * @return Role
					 */
					try {
						if ((!$this->objToDeptObject) && (!is_null($this->intToDept)))
							$this->objToDeptObject = Role::Load($this->intToDept);
						return $this->objToDeptObject;
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
					 * Gets the value for the Ledger object referenced by intAcceptedBy 
					 * @return Ledger
					 */
					try {
						if ((!$this->objAcceptedByObject) && (!is_null($this->intAcceptedBy)))
							$this->objAcceptedByObject = Ledger::Load($this->intAcceptedBy);
						return $this->objAcceptedByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_TempTransferAsId':
					/**
					 * Gets the value for the private _objTempTransferAsId (Read-Only)
					 * if set due to an expansion on the temp_transfer.iddept_transfer reverse relationship
					 * @return TempTransfer
					 */
					return $this->_objTempTransferAsId;

				case '_TempTransferAsIdArray':
					/**
					 * Gets the value for the private _objTempTransferAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the temp_transfer.iddept_transfer reverse relationship
					 * @return TempTransfer[]
					 */
					return $this->_objTempTransferAsIdArray;


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

				case 'Item':
					/**
					 * Sets the value for intItem 
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

				case 'ToDept':
					/**
					 * Sets the value for intToDept 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objToDeptObject = null;
						return ($this->intToDept = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Qty':
					/**
					 * Sets the value for intQty 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intQty = QType::Cast($mixValue, QType::Integer));
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

				case 'Return':
					/**
					 * Sets the value for blnReturn 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnReturn = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ItemObject':
					/**
					 * Sets the value for the LedgerDetails object referenced by intItem 
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
							throw new QCallerException('Unable to set an unsaved ItemObject for this DeptTransfer');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->IdledgerDetails;

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
							throw new QCallerException('Unable to set an unsaved FromDeptObject for this DeptTransfer');

						// Update Local Member Variables
						$this->objFromDeptObject = $mixValue;
						$this->intFromDept = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ToDeptObject':
					/**
					 * Sets the value for the Role object referenced by intToDept 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intToDept = null;
						$this->objToDeptObject = null;
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
							throw new QCallerException('Unable to set an unsaved ToDeptObject for this DeptTransfer');

						// Update Local Member Variables
						$this->objToDeptObject = $mixValue;
						$this->intToDept = $mixValue->Idrole;

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
							throw new QCallerException('Unable to set an unsaved SerialsObject for this DeptTransfer');

						// Update Local Member Variables
						$this->objSerialsObject = $mixValue;
						$this->intSerials = $mixValue->Idserials;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AcceptedByObject':
					/**
					 * Sets the value for the Ledger object referenced by intAcceptedBy 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intAcceptedBy = null;
						$this->objAcceptedByObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved AcceptedByObject for this DeptTransfer');

						// Update Local Member Variables
						$this->objAcceptedByObject = $mixValue;
						$this->intAcceptedBy = $mixValue->Idledger;

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



		// Related Objects' Methods for TempTransferAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TempTransfersAsId as an array of TempTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempTransfer[]
		*/
		public function GetTempTransferAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIddeptTransfer)))
				return array();

			try {
				return TempTransfer::LoadArrayByIddeptTransfer($this->intIddeptTransfer, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TempTransfersAsId
		 * @return int
		*/
		public function CountTempTransfersAsId() {
			if ((is_null($this->intIddeptTransfer)))
				return 0;

			return TempTransfer::CountByIddeptTransfer($this->intIddeptTransfer);
		}

		/**
		 * Associates a TempTransferAsId
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function AssociateTempTransferAsId(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsId on this unsaved DeptTransfer.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempTransferAsId on this DeptTransfer with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . '
			');
		}

		/**
		 * Unassociates a TempTransferAsId
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function UnassociateTempTransferAsId(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsId on this unsaved DeptTransfer.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsId on this DeptTransfer with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`iddept_transfer` = null
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '
			');
		}

		/**
		 * Unassociates all TempTransfersAsId
		 * @return void
		*/
		public function UnassociateAllTempTransfersAsId() {
			if ((is_null($this->intIddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsId on this unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`temp_transfer`
				SET
					`iddept_transfer` = null
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '
			');
		}

		/**
		 * Deletes an associated TempTransferAsId
		 * @param TempTransfer $objTempTransfer
		 * @return void
		*/
		public function DeleteAssociatedTempTransferAsId(TempTransfer $objTempTransfer) {
			if ((is_null($this->intIddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsId on this unsaved DeptTransfer.');
			if ((is_null($objTempTransfer->IdtempTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsId on this DeptTransfer with an unsaved TempTransfer.');

			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`idtemp_transfer` = ' . $objDatabase->SqlVariable($objTempTransfer->IdtempTransfer) . ' AND
					`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '
			');
		}

		/**
		 * Deletes all associated TempTransfersAsId
		 * @return void
		*/
		public function DeleteAllTempTransfersAsId() {
			if ((is_null($this->intIddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempTransferAsId on this unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = DeptTransfer::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`temp_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($this->intIddeptTransfer) . '
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
			return "dept_transfer";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[DeptTransfer::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="DeptTransfer"><sequence>';
			$strToReturn .= '<element name="IddeptTransfer" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:LedgerDetails"/>';
			$strToReturn .= '<element name="FromDeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="ToDeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Qty" type="xsd:int"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="SerialsObject" type="xsd1:Serials"/>';
			$strToReturn .= '<element name="AcceptedByObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="AcceptedDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Return" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('DeptTransfer', $strComplexTypeArray)) {
				$strComplexTypeArray['DeptTransfer'] = DeptTransfer::GetSoapComplexTypeXml();
				LedgerDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Serials::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, DeptTransfer::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new DeptTransfer();
			if (property_exists($objSoapObject, 'IddeptTransfer'))
				$objToReturn->intIddeptTransfer = $objSoapObject->IddeptTransfer;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = LedgerDetails::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if ((property_exists($objSoapObject, 'FromDeptObject')) &&
				($objSoapObject->FromDeptObject))
				$objToReturn->FromDeptObject = Role::GetObjectFromSoapObject($objSoapObject->FromDeptObject);
			if ((property_exists($objSoapObject, 'ToDeptObject')) &&
				($objSoapObject->ToDeptObject))
				$objToReturn->ToDeptObject = Role::GetObjectFromSoapObject($objSoapObject->ToDeptObject);
			if (property_exists($objSoapObject, 'Qty'))
				$objToReturn->intQty = $objSoapObject->Qty;
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if ((property_exists($objSoapObject, 'SerialsObject')) &&
				($objSoapObject->SerialsObject))
				$objToReturn->SerialsObject = Serials::GetObjectFromSoapObject($objSoapObject->SerialsObject);
			if ((property_exists($objSoapObject, 'AcceptedByObject')) &&
				($objSoapObject->AcceptedByObject))
				$objToReturn->AcceptedByObject = Ledger::GetObjectFromSoapObject($objSoapObject->AcceptedByObject);
			if (property_exists($objSoapObject, 'AcceptedDate'))
				$objToReturn->dttAcceptedDate = new QDateTime($objSoapObject->AcceptedDate);
			if (property_exists($objSoapObject, 'Return'))
				$objToReturn->blnReturn = $objSoapObject->Return;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, DeptTransfer::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objItemObject)
				$objObject->objItemObject = LedgerDetails::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
			if ($objObject->objFromDeptObject)
				$objObject->objFromDeptObject = Role::GetSoapObjectFromObject($objObject->objFromDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFromDept = null;
			if ($objObject->objToDeptObject)
				$objObject->objToDeptObject = Role::GetSoapObjectFromObject($objObject->objToDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intToDept = null;
			if ($objObject->objSerialsObject)
				$objObject->objSerialsObject = Serials::GetSoapObjectFromObject($objObject->objSerialsObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSerials = null;
			if ($objObject->objAcceptedByObject)
				$objObject->objAcceptedByObject = Ledger::GetSoapObjectFromObject($objObject->objAcceptedByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAcceptedBy = null;
			if ($objObject->dttAcceptedDate)
				$objObject->dttAcceptedDate = $objObject->dttAcceptedDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['IddeptTransfer'] = $this->intIddeptTransfer;
			$iArray['Date'] = $this->dttDate;
			$iArray['Item'] = $this->intItem;
			$iArray['FromDept'] = $this->intFromDept;
			$iArray['ToDept'] = $this->intToDept;
			$iArray['Qty'] = $this->intQty;
			$iArray['Description'] = $this->strDescription;
			$iArray['Serials'] = $this->intSerials;
			$iArray['AcceptedBy'] = $this->intAcceptedBy;
			$iArray['AcceptedDate'] = $this->dttAcceptedDate;
			$iArray['Return'] = $this->blnReturn;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIddeptTransfer ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IddeptTransfer
     * @property-read QQNode $Date
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $FromDept
     * @property-read QQNodeRole $FromDeptObject
     * @property-read QQNode $ToDept
     * @property-read QQNodeRole $ToDeptObject
     * @property-read QQNode $Qty
     * @property-read QQNode $Description
     * @property-read QQNode $Serials
     * @property-read QQNodeSerials $SerialsObject
     * @property-read QQNode $AcceptedBy
     * @property-read QQNodeLedger $AcceptedByObject
     * @property-read QQNode $AcceptedDate
     * @property-read QQNode $Return
     *
     *
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsId

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDeptTransfer extends QQNode {
		protected $strTableName = 'dept_transfer';
		protected $strPrimaryKey = 'iddept_transfer';
		protected $strClassName = 'DeptTransfer';
		public function __get($strName) {
			switch ($strName) {
				case 'IddeptTransfer':
					return new QQNode('iddept_transfer', 'IddeptTransfer', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'Integer', $this);
				case 'FromDept':
					return new QQNode('from_dept', 'FromDept', 'Integer', $this);
				case 'FromDeptObject':
					return new QQNodeRole('from_dept', 'FromDeptObject', 'Integer', $this);
				case 'ToDept':
					return new QQNode('to_dept', 'ToDept', 'Integer', $this);
				case 'ToDeptObject':
					return new QQNodeRole('to_dept', 'ToDeptObject', 'Integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'Integer', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'Blob', $this);
				case 'Serials':
					return new QQNode('serials', 'Serials', 'Integer', $this);
				case 'SerialsObject':
					return new QQNodeSerials('serials', 'SerialsObject', 'Integer', $this);
				case 'AcceptedBy':
					return new QQNode('accepted_by', 'AcceptedBy', 'Integer', $this);
				case 'AcceptedByObject':
					return new QQNodeLedger('accepted_by', 'AcceptedByObject', 'Integer', $this);
				case 'AcceptedDate':
					return new QQNode('accepted_date', 'AcceptedDate', 'Date', $this);
				case 'Return':
					return new QQNode('return', 'Return', 'Bit', $this);
				case 'TempTransferAsId':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferasid', 'reverse_reference', 'iddept_transfer');

				case '_PrimaryKeyNode':
					return new QQNode('iddept_transfer', 'IddeptTransfer', 'Integer', $this);
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
     * @property-read QQNode $IddeptTransfer
     * @property-read QQNode $Date
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $FromDept
     * @property-read QQNodeRole $FromDeptObject
     * @property-read QQNode $ToDept
     * @property-read QQNodeRole $ToDeptObject
     * @property-read QQNode $Qty
     * @property-read QQNode $Description
     * @property-read QQNode $Serials
     * @property-read QQNodeSerials $SerialsObject
     * @property-read QQNode $AcceptedBy
     * @property-read QQNodeLedger $AcceptedByObject
     * @property-read QQNode $AcceptedDate
     * @property-read QQNode $Return
     *
     *
     * @property-read QQReverseReferenceNodeTempTransfer $TempTransferAsId

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDeptTransfer extends QQReverseReferenceNode {
		protected $strTableName = 'dept_transfer';
		protected $strPrimaryKey = 'iddept_transfer';
		protected $strClassName = 'DeptTransfer';
		public function __get($strName) {
			switch ($strName) {
				case 'IddeptTransfer':
					return new QQNode('iddept_transfer', 'IddeptTransfer', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'integer', $this);
				case 'FromDept':
					return new QQNode('from_dept', 'FromDept', 'integer', $this);
				case 'FromDeptObject':
					return new QQNodeRole('from_dept', 'FromDeptObject', 'integer', $this);
				case 'ToDept':
					return new QQNode('to_dept', 'ToDept', 'integer', $this);
				case 'ToDeptObject':
					return new QQNodeRole('to_dept', 'ToDeptObject', 'integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'integer', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Serials':
					return new QQNode('serials', 'Serials', 'integer', $this);
				case 'SerialsObject':
					return new QQNodeSerials('serials', 'SerialsObject', 'integer', $this);
				case 'AcceptedBy':
					return new QQNode('accepted_by', 'AcceptedBy', 'integer', $this);
				case 'AcceptedByObject':
					return new QQNodeLedger('accepted_by', 'AcceptedByObject', 'integer', $this);
				case 'AcceptedDate':
					return new QQNode('accepted_date', 'AcceptedDate', 'QDateTime', $this);
				case 'Return':
					return new QQNode('return', 'Return', 'boolean', $this);
				case 'TempTransferAsId':
					return new QQReverseReferenceNodeTempTransfer($this, 'temptransferasid', 'reverse_reference', 'iddept_transfer');

				case '_PrimaryKeyNode':
					return new QQNode('iddept_transfer', 'IddeptTransfer', 'integer', $this);
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
