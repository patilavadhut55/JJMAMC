<?php
	/**
	 * The abstract IwowGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Iwow subclass which
	 * extends this IwowGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Iwow class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idiwow the value for intIdiwow (Read-Only PK)
	 * @property integer $PoNo the value for intPoNo 
	 * @property integer $Item the value for intItem (Not Null)
	 * @property QDateTime $Date the value for dttDate (Not Null)
	 * @property integer $DataBy the value for intDataBy (Not Null)
	 * @property integer $InspectedBy the value for intInspectedBy 
	 * @property integer $Qty the value for intQty (Not Null)
	 * @property string $Note the value for strNote 
	 * @property integer $FromDepartment the value for intFromDepartment 
	 * @property integer $ToDeparment the value for intToDeparment (Not Null)
	 * @property string $Code the value for strCode (Unique)
	 * @property integer $IwowCat the value for intIwowCat 
	 * @property Voucher $PoNoObject the value for the Voucher object referenced by intPoNo 
	 * @property Ledger $ItemObject the value for the Ledger object referenced by intItem (Not Null)
	 * @property Login $DataByObject the value for the Login object referenced by intDataBy (Not Null)
	 * @property Login $InspectedByObject the value for the Login object referenced by intInspectedBy 
	 * @property Role $FromDepartmentObject the value for the Role object referenced by intFromDepartment 
	 * @property Role $ToDeparmentObject the value for the Role object referenced by intToDeparment (Not Null)
	 * @property IwowCat $IwowCatObject the value for the IwowCat object referenced by intIwowCat 
	 * @property-read PriceHistory $_PriceHistoryAsRef the value for the private _objPriceHistoryAsRef (Read-Only) if set due to an expansion on the price_history.ref_iwow reverse relationship
	 * @property-read PriceHistory[] $_PriceHistoryAsRefArray the value for the private _objPriceHistoryAsRefArray (Read-Only) if set due to an ExpandAsArray on the price_history.ref_iwow reverse relationship
	 * @property-read Serials $_SerialsAsRef the value for the private _objSerialsAsRef (Read-Only) if set due to an expansion on the serials.ref reverse relationship
	 * @property-read Serials[] $_SerialsAsRefArray the value for the private _objSerialsAsRefArray (Read-Only) if set due to an ExpandAsArray on the serials.ref reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class IwowGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column iwow.idiwow
		 * @var integer intIdiwow
		 */
		protected $intIdiwow;
		const IdiwowDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.po_no
		 * @var integer intPoNo
		 */
		protected $intPoNo;
		const PoNoDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.data_by
		 * @var integer intDataBy
		 */
		protected $intDataBy;
		const DataByDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.inspected_by
		 * @var integer intInspectedBy
		 */
		protected $intInspectedBy;
		const InspectedByDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.qty
		 * @var integer intQty
		 */
		protected $intQty;
		const QtyDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.from_department
		 * @var integer intFromDepartment
		 */
		protected $intFromDepartment;
		const FromDepartmentDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.to_deparment
		 * @var integer intToDeparment
		 */
		protected $intToDeparment;
		const ToDeparmentDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column iwow.iwow_cat
		 * @var integer intIwowCat
		 */
		protected $intIwowCat;
		const IwowCatDefault = null;


		/**
		 * Private member variable that stores a reference to a single PriceHistoryAsRef object
		 * (of type PriceHistory), if this Iwow object was restored with
		 * an expansion on the price_history association table.
		 * @var PriceHistory _objPriceHistoryAsRef;
		 */
		private $_objPriceHistoryAsRef;

		/**
		 * Private member variable that stores a reference to an array of PriceHistoryAsRef objects
		 * (of type PriceHistory[]), if this Iwow object was restored with
		 * an ExpandAsArray on the price_history association table.
		 * @var PriceHistory[] _objPriceHistoryAsRefArray;
		 */
		private $_objPriceHistoryAsRefArray = null;

		/**
		 * Private member variable that stores a reference to a single SerialsAsRef object
		 * (of type Serials), if this Iwow object was restored with
		 * an expansion on the serials association table.
		 * @var Serials _objSerialsAsRef;
		 */
		private $_objSerialsAsRef;

		/**
		 * Private member variable that stores a reference to an array of SerialsAsRef objects
		 * (of type Serials[]), if this Iwow object was restored with
		 * an ExpandAsArray on the serials association table.
		 * @var Serials[] _objSerialsAsRefArray;
		 */
		private $_objSerialsAsRefArray = null;

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
		 * in the database column iwow.po_no.
		 *
		 * NOTE: Always use the PoNoObject property getter to correctly retrieve this Voucher object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Voucher objPoNoObject
		 */
		protected $objPoNoObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column iwow.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column iwow.data_by.
		 *
		 * NOTE: Always use the DataByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objDataByObject
		 */
		protected $objDataByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column iwow.inspected_by.
		 *
		 * NOTE: Always use the InspectedByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objInspectedByObject
		 */
		protected $objInspectedByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column iwow.from_department.
		 *
		 * NOTE: Always use the FromDepartmentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objFromDepartmentObject
		 */
		protected $objFromDepartmentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column iwow.to_deparment.
		 *
		 * NOTE: Always use the ToDeparmentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objToDeparmentObject
		 */
		protected $objToDeparmentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column iwow.iwow_cat.
		 *
		 * NOTE: Always use the IwowCatObject property getter to correctly retrieve this IwowCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var IwowCat objIwowCatObject
		 */
		protected $objIwowCatObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdiwow = Iwow::IdiwowDefault;
			$this->intPoNo = Iwow::PoNoDefault;
			$this->intItem = Iwow::ItemDefault;
			$this->dttDate = (Iwow::DateDefault === null)?null:new QDateTime(Iwow::DateDefault);
			$this->intDataBy = Iwow::DataByDefault;
			$this->intInspectedBy = Iwow::InspectedByDefault;
			$this->intQty = Iwow::QtyDefault;
			$this->strNote = Iwow::NoteDefault;
			$this->intFromDepartment = Iwow::FromDepartmentDefault;
			$this->intToDeparment = Iwow::ToDeparmentDefault;
			$this->strCode = Iwow::CodeDefault;
			$this->intIwowCat = Iwow::IwowCatDefault;
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
		 * Load a Iwow from PK Info
		 * @param integer $intIdiwow
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow
		 */
		public static function Load($intIdiwow, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Iwow', $intIdiwow);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Iwow::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Iwow()->Idiwow, $intIdiwow)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Iwows
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Iwow::QueryArray to perform the LoadAll query
			try {
				return Iwow::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Iwows
		 * @return int
		 */
		public static function CountAll() {
			// Call Iwow::QueryCount to perform the CountAll query
			return Iwow::QueryCount(QQ::All());
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
			$objDatabase = Iwow::GetDatabase();

			// Create/Build out the QueryBuilder object with Iwow-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'iwow');

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
				Iwow::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('iwow');

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
		 * Static Qcubed Query method to query for a single Iwow object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Iwow the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Iwow::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Iwow object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Iwow::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Iwow::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Iwow objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Iwow[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Iwow::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Iwow::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Iwow::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Iwow objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Iwow::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Iwow::GetDatabase();

			$strQuery = Iwow::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/iwow', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Iwow::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Iwow
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'iwow';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idiwow', $strAliasPrefix . 'idiwow');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idiwow', $strAliasPrefix . 'idiwow');
			    $objBuilder->AddSelectItem($strTableName, 'po_no', $strAliasPrefix . 'po_no');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'data_by', $strAliasPrefix . 'data_by');
			    $objBuilder->AddSelectItem($strTableName, 'inspected_by', $strAliasPrefix . 'inspected_by');
			    $objBuilder->AddSelectItem($strTableName, 'qty', $strAliasPrefix . 'qty');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
			    $objBuilder->AddSelectItem($strTableName, 'from_department', $strAliasPrefix . 'from_department');
			    $objBuilder->AddSelectItem($strTableName, 'to_deparment', $strAliasPrefix . 'to_deparment');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'iwow_cat', $strAliasPrefix . 'iwow_cat');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Iwow from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Iwow::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Iwow
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdiwow == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'iwow__';


						// Expanding reverse references: PriceHistoryAsRef
						$strAlias = $strAliasPrefix . 'pricehistoryasref__idprice_history';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objPriceHistoryAsRefArray)
								$objPreviousItem->_objPriceHistoryAsRefArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objPriceHistoryAsRefArray)) {
								$objPreviousChildItems = $objPreviousItem->_objPriceHistoryAsRefArray;
								$objChildItem = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasref__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objPriceHistoryAsRefArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objPriceHistoryAsRefArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SerialsAsRef
						$strAlias = $strAliasPrefix . 'serialsasref__idserials';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSerialsAsRefArray)
								$objPreviousItem->_objSerialsAsRefArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSerialsAsRefArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSerialsAsRefArray;
								$objChildItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasref__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSerialsAsRefArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSerialsAsRefArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'iwow__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Iwow object
			$objToReturn = new Iwow();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdiwow = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'po_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPoNo = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'data_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDataBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'inspected_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intInspectedBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'qty';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intQty = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'from_department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFromDepartment = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'to_deparment';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intToDeparment = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'iwow_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIwowCat = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idiwow != $objPreviousItem->Idiwow) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objPriceHistoryAsRefArray);
					$cnt = count($objToReturn->_objPriceHistoryAsRefArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objPriceHistoryAsRefArray, $objToReturn->_objPriceHistoryAsRefArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSerialsAsRefArray);
					$cnt = count($objToReturn->_objSerialsAsRefArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSerialsAsRefArray, $objToReturn->_objSerialsAsRefArray)) {
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
				$strAliasPrefix = 'iwow__';

			// Check for PoNoObject Early Binding
			$strAlias = $strAliasPrefix . 'po_no__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPoNoObject = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'po_no__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DataByObject Early Binding
			$strAlias = $strAliasPrefix . 'data_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDataByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'data_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for InspectedByObject Early Binding
			$strAlias = $strAliasPrefix . 'inspected_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objInspectedByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inspected_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FromDepartmentObject Early Binding
			$strAlias = $strAliasPrefix . 'from_department__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFromDepartmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'from_department__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ToDeparmentObject Early Binding
			$strAlias = $strAliasPrefix . 'to_deparment__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objToDeparmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'to_deparment__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for IwowCatObject Early Binding
			$strAlias = $strAliasPrefix . 'iwow_cat__idiwow_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objIwowCatObject = IwowCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'iwow_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for PriceHistoryAsRef Virtual Binding
			$strAlias = $strAliasPrefix . 'pricehistoryasref__idprice_history';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objPriceHistoryAsRefArray)
				$objToReturn->_objPriceHistoryAsRefArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objPriceHistoryAsRefArray[] = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objPriceHistoryAsRef = PriceHistory::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pricehistoryasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SerialsAsRef Virtual Binding
			$strAlias = $strAliasPrefix . 'serialsasref__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSerialsAsRefArray)
				$objToReturn->_objSerialsAsRefArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSerialsAsRefArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSerialsAsRef = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsasref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Iwows from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Iwow[]
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
					$objItem = Iwow::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Iwow::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Iwow object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Iwow next row resulting from the query
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
			return Iwow::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Iwow object,
		 * by Idiwow Index(es)
		 * @param integer $intIdiwow
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow
		*/
		public static function LoadByIdiwow($intIdiwow, $objOptionalClauses = null) {
			return Iwow::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Iwow()->Idiwow, $intIdiwow)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Iwow object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Iwow::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Iwow()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by PoNo Index(es)
		 * @param integer $intPoNo
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByPoNo($intPoNo, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByPoNo query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->PoNo, $intPoNo),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by PoNo Index(es)
		 * @param integer $intPoNo
		 * @return int
		*/
		public static function CountByPoNo($intPoNo) {
			// Call Iwow::QueryCount to perform the CountByPoNo query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->PoNo, $intPoNo)
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByDataBy($intDataBy, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByDataBy query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->DataBy, $intDataBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by DataBy Index(es)
		 * @param integer $intDataBy
		 * @return int
		*/
		public static function CountByDataBy($intDataBy) {
			// Call Iwow::QueryCount to perform the CountByDataBy query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->DataBy, $intDataBy)
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByItem query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call Iwow::QueryCount to perform the CountByItem query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->Item, $intItem)
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by InspectedBy Index(es)
		 * @param integer $intInspectedBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByInspectedBy($intInspectedBy, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByInspectedBy query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->InspectedBy, $intInspectedBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by InspectedBy Index(es)
		 * @param integer $intInspectedBy
		 * @return int
		*/
		public static function CountByInspectedBy($intInspectedBy) {
			// Call Iwow::QueryCount to perform the CountByInspectedBy query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->InspectedBy, $intInspectedBy)
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by IwowCat Index(es)
		 * @param integer $intIwowCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByIwowCat($intIwowCat, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByIwowCat query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->IwowCat, $intIwowCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by IwowCat Index(es)
		 * @param integer $intIwowCat
		 * @return int
		*/
		public static function CountByIwowCat($intIwowCat) {
			// Call Iwow::QueryCount to perform the CountByIwowCat query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->IwowCat, $intIwowCat)
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by ToDeparment Index(es)
		 * @param integer $intToDeparment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByToDeparment($intToDeparment, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByToDeparment query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->ToDeparment, $intToDeparment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by ToDeparment Index(es)
		 * @param integer $intToDeparment
		 * @return int
		*/
		public static function CountByToDeparment($intToDeparment) {
			// Call Iwow::QueryCount to perform the CountByToDeparment query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->ToDeparment, $intToDeparment)
			);
		}

		/**
		 * Load an array of Iwow objects,
		 * by FromDepartment Index(es)
		 * @param integer $intFromDepartment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Iwow[]
		*/
		public static function LoadArrayByFromDepartment($intFromDepartment, $objOptionalClauses = null) {
			// Call Iwow::QueryArray to perform the LoadArrayByFromDepartment query
			try {
				return Iwow::QueryArray(
					QQ::Equal(QQN::Iwow()->FromDepartment, $intFromDepartment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Iwows
		 * by FromDepartment Index(es)
		 * @param integer $intFromDepartment
		 * @return int
		*/
		public static function CountByFromDepartment($intFromDepartment) {
			// Call Iwow::QueryCount to perform the CountByFromDepartment query
			return Iwow::QueryCount(
				QQ::Equal(QQN::Iwow()->FromDepartment, $intFromDepartment)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Iwow
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `iwow` (
							`po_no`,
							`item`,
							`date`,
							`data_by`,
							`inspected_by`,
							`qty`,
							`note`,
							`from_department`,
							`to_deparment`,
							`code`,
							`iwow_cat`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intPoNo) . ',
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intDataBy) . ',
							' . $objDatabase->SqlVariable($this->intInspectedBy) . ',
							' . $objDatabase->SqlVariable($this->intQty) . ',
							' . $objDatabase->SqlVariable($this->strNote) . ',
							' . $objDatabase->SqlVariable($this->intFromDepartment) . ',
							' . $objDatabase->SqlVariable($this->intToDeparment) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->intIwowCat) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdiwow = $objDatabase->InsertId('iwow', 'idiwow');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`iwow`
						SET
							`po_no` = ' . $objDatabase->SqlVariable($this->intPoNo) . ',
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`data_by` = ' . $objDatabase->SqlVariable($this->intDataBy) . ',
							`inspected_by` = ' . $objDatabase->SqlVariable($this->intInspectedBy) . ',
							`qty` = ' . $objDatabase->SqlVariable($this->intQty) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . ',
							`from_department` = ' . $objDatabase->SqlVariable($this->intFromDepartment) . ',
							`to_deparment` = ' . $objDatabase->SqlVariable($this->intToDeparment) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`iwow_cat` = ' . $objDatabase->SqlVariable($this->intIwowCat) . '
						WHERE
							`idiwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
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
		 * Delete this Iwow
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Iwow with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`
				WHERE
					`idiwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Iwow ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Iwow', $this->intIdiwow);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Iwows
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`iwow`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate iwow table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `iwow`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Iwow from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Iwow object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Iwow::Load($this->intIdiwow);

			// Update $this's local variables to match
			$this->PoNo = $objReloaded->PoNo;
			$this->Item = $objReloaded->Item;
			$this->dttDate = $objReloaded->dttDate;
			$this->DataBy = $objReloaded->DataBy;
			$this->InspectedBy = $objReloaded->InspectedBy;
			$this->intQty = $objReloaded->intQty;
			$this->strNote = $objReloaded->strNote;
			$this->FromDepartment = $objReloaded->FromDepartment;
			$this->ToDeparment = $objReloaded->ToDeparment;
			$this->strCode = $objReloaded->strCode;
			$this->IwowCat = $objReloaded->IwowCat;
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
				case 'Idiwow':
					/**
					 * Gets the value for intIdiwow (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdiwow;

				case 'PoNo':
					/**
					 * Gets the value for intPoNo 
					 * @return integer
					 */
					return $this->intPoNo;

				case 'Item':
					/**
					 * Gets the value for intItem (Not Null)
					 * @return integer
					 */
					return $this->intItem;

				case 'Date':
					/**
					 * Gets the value for dttDate (Not Null)
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'DataBy':
					/**
					 * Gets the value for intDataBy (Not Null)
					 * @return integer
					 */
					return $this->intDataBy;

				case 'InspectedBy':
					/**
					 * Gets the value for intInspectedBy 
					 * @return integer
					 */
					return $this->intInspectedBy;

				case 'Qty':
					/**
					 * Gets the value for intQty (Not Null)
					 * @return integer
					 */
					return $this->intQty;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;

				case 'FromDepartment':
					/**
					 * Gets the value for intFromDepartment 
					 * @return integer
					 */
					return $this->intFromDepartment;

				case 'ToDeparment':
					/**
					 * Gets the value for intToDeparment (Not Null)
					 * @return integer
					 */
					return $this->intToDeparment;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'IwowCat':
					/**
					 * Gets the value for intIwowCat 
					 * @return integer
					 */
					return $this->intIwowCat;


				///////////////////
				// Member Objects
				///////////////////
				case 'PoNoObject':
					/**
					 * Gets the value for the Voucher object referenced by intPoNo 
					 * @return Voucher
					 */
					try {
						if ((!$this->objPoNoObject) && (!is_null($this->intPoNo)))
							$this->objPoNoObject = Voucher::Load($this->intPoNo);
						return $this->objPoNoObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ItemObject':
					/**
					 * Gets the value for the Ledger object referenced by intItem (Not Null)
					 * @return Ledger
					 */
					try {
						if ((!$this->objItemObject) && (!is_null($this->intItem)))
							$this->objItemObject = Ledger::Load($this->intItem);
						return $this->objItemObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DataByObject':
					/**
					 * Gets the value for the Login object referenced by intDataBy (Not Null)
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

				case 'InspectedByObject':
					/**
					 * Gets the value for the Login object referenced by intInspectedBy 
					 * @return Login
					 */
					try {
						if ((!$this->objInspectedByObject) && (!is_null($this->intInspectedBy)))
							$this->objInspectedByObject = Login::Load($this->intInspectedBy);
						return $this->objInspectedByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FromDepartmentObject':
					/**
					 * Gets the value for the Role object referenced by intFromDepartment 
					 * @return Role
					 */
					try {
						if ((!$this->objFromDepartmentObject) && (!is_null($this->intFromDepartment)))
							$this->objFromDepartmentObject = Role::Load($this->intFromDepartment);
						return $this->objFromDepartmentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToDeparmentObject':
					/**
					 * Gets the value for the Role object referenced by intToDeparment (Not Null)
					 * @return Role
					 */
					try {
						if ((!$this->objToDeparmentObject) && (!is_null($this->intToDeparment)))
							$this->objToDeparmentObject = Role::Load($this->intToDeparment);
						return $this->objToDeparmentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IwowCatObject':
					/**
					 * Gets the value for the IwowCat object referenced by intIwowCat 
					 * @return IwowCat
					 */
					try {
						if ((!$this->objIwowCatObject) && (!is_null($this->intIwowCat)))
							$this->objIwowCatObject = IwowCat::Load($this->intIwowCat);
						return $this->objIwowCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_PriceHistoryAsRef':
					/**
					 * Gets the value for the private _objPriceHistoryAsRef (Read-Only)
					 * if set due to an expansion on the price_history.ref_iwow reverse relationship
					 * @return PriceHistory
					 */
					return $this->_objPriceHistoryAsRef;

				case '_PriceHistoryAsRefArray':
					/**
					 * Gets the value for the private _objPriceHistoryAsRefArray (Read-Only)
					 * if set due to an ExpandAsArray on the price_history.ref_iwow reverse relationship
					 * @return PriceHistory[]
					 */
					return $this->_objPriceHistoryAsRefArray;

				case '_SerialsAsRef':
					/**
					 * Gets the value for the private _objSerialsAsRef (Read-Only)
					 * if set due to an expansion on the serials.ref reverse relationship
					 * @return Serials
					 */
					return $this->_objSerialsAsRef;

				case '_SerialsAsRefArray':
					/**
					 * Gets the value for the private _objSerialsAsRefArray (Read-Only)
					 * if set due to an ExpandAsArray on the serials.ref reverse relationship
					 * @return Serials[]
					 */
					return $this->_objSerialsAsRefArray;


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
				case 'PoNo':
					/**
					 * Sets the value for intPoNo 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPoNoObject = null;
						return ($this->intPoNo = QType::Cast($mixValue, QType::Integer));
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

				case 'DataBy':
					/**
					 * Sets the value for intDataBy (Not Null)
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

				case 'InspectedBy':
					/**
					 * Sets the value for intInspectedBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objInspectedByObject = null;
						return ($this->intInspectedBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Qty':
					/**
					 * Sets the value for intQty (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intQty = QType::Cast($mixValue, QType::Integer));
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

				case 'FromDepartment':
					/**
					 * Sets the value for intFromDepartment 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFromDepartmentObject = null;
						return ($this->intFromDepartment = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ToDeparment':
					/**
					 * Sets the value for intToDeparment (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objToDeparmentObject = null;
						return ($this->intToDeparment = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Code':
					/**
					 * Sets the value for strCode (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IwowCat':
					/**
					 * Sets the value for intIwowCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objIwowCatObject = null;
						return ($this->intIwowCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'PoNoObject':
					/**
					 * Sets the value for the Voucher object referenced by intPoNo 
					 * @param Voucher $mixValue
					 * @return Voucher
					 */
					if (is_null($mixValue)) {
						$this->intPoNo = null;
						$this->objPoNoObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Voucher object
						try {
							$mixValue = QType::Cast($mixValue, 'Voucher');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Voucher object
						if (is_null($mixValue->Idvoucher))
							throw new QCallerException('Unable to set an unsaved PoNoObject for this Iwow');

						// Update Local Member Variables
						$this->objPoNoObject = $mixValue;
						$this->intPoNo = $mixValue->Idvoucher;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ItemObject':
					/**
					 * Sets the value for the Ledger object referenced by intItem (Not Null)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intItem = null;
						$this->objItemObject = null;
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
							throw new QCallerException('Unable to set an unsaved ItemObject for this Iwow');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DataByObject':
					/**
					 * Sets the value for the Login object referenced by intDataBy (Not Null)
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
							throw new QCallerException('Unable to set an unsaved DataByObject for this Iwow');

						// Update Local Member Variables
						$this->objDataByObject = $mixValue;
						$this->intDataBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'InspectedByObject':
					/**
					 * Sets the value for the Login object referenced by intInspectedBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intInspectedBy = null;
						$this->objInspectedByObject = null;
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
							throw new QCallerException('Unable to set an unsaved InspectedByObject for this Iwow');

						// Update Local Member Variables
						$this->objInspectedByObject = $mixValue;
						$this->intInspectedBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FromDepartmentObject':
					/**
					 * Sets the value for the Role object referenced by intFromDepartment 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intFromDepartment = null;
						$this->objFromDepartmentObject = null;
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
							throw new QCallerException('Unable to set an unsaved FromDepartmentObject for this Iwow');

						// Update Local Member Variables
						$this->objFromDepartmentObject = $mixValue;
						$this->intFromDepartment = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ToDeparmentObject':
					/**
					 * Sets the value for the Role object referenced by intToDeparment (Not Null)
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intToDeparment = null;
						$this->objToDeparmentObject = null;
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
							throw new QCallerException('Unable to set an unsaved ToDeparmentObject for this Iwow');

						// Update Local Member Variables
						$this->objToDeparmentObject = $mixValue;
						$this->intToDeparment = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'IwowCatObject':
					/**
					 * Sets the value for the IwowCat object referenced by intIwowCat 
					 * @param IwowCat $mixValue
					 * @return IwowCat
					 */
					if (is_null($mixValue)) {
						$this->intIwowCat = null;
						$this->objIwowCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a IwowCat object
						try {
							$mixValue = QType::Cast($mixValue, 'IwowCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED IwowCat object
						if (is_null($mixValue->IdiwowCat))
							throw new QCallerException('Unable to set an unsaved IwowCatObject for this Iwow');

						// Update Local Member Variables
						$this->objIwowCatObject = $mixValue;
						$this->intIwowCat = $mixValue->IdiwowCat;

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



		// Related Objects' Methods for PriceHistoryAsRef
		//-------------------------------------------------------------------

		/**
		 * Gets all associated PriceHistoriesAsRef as an array of PriceHistory objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return PriceHistory[]
		*/
		public function GetPriceHistoryAsRefArray($objOptionalClauses = null) {
			if ((is_null($this->intIdiwow)))
				return array();

			try {
				return PriceHistory::LoadArrayByRefIwow($this->intIdiwow, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated PriceHistoriesAsRef
		 * @return int
		*/
		public function CountPriceHistoriesAsRef() {
			if ((is_null($this->intIdiwow)))
				return 0;

			return PriceHistory::CountByRefIwow($this->intIdiwow);
		}

		/**
		 * Associates a PriceHistoryAsRef
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function AssociatePriceHistoryAsRef(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsRef on this unsaved Iwow.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociatePriceHistoryAsRef on this Iwow with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`ref_iwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . '
			');
		}

		/**
		 * Unassociates a PriceHistoryAsRef
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function UnassociatePriceHistoryAsRef(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRef on this unsaved Iwow.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRef on this Iwow with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`ref_iwow` = null
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`ref_iwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}

		/**
		 * Unassociates all PriceHistoriesAsRef
		 * @return void
		*/
		public function UnassociateAllPriceHistoriesAsRef() {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRef on this unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`price_history`
				SET
					`ref_iwow` = null
				WHERE
					`ref_iwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}

		/**
		 * Deletes an associated PriceHistoryAsRef
		 * @param PriceHistory $objPriceHistory
		 * @return void
		*/
		public function DeleteAssociatedPriceHistoryAsRef(PriceHistory $objPriceHistory) {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRef on this unsaved Iwow.');
			if ((is_null($objPriceHistory->IdpriceHistory)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRef on this Iwow with an unsaved PriceHistory.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`idprice_history` = ' . $objDatabase->SqlVariable($objPriceHistory->IdpriceHistory) . ' AND
					`ref_iwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}

		/**
		 * Deletes all associated PriceHistoriesAsRef
		 * @return void
		*/
		public function DeleteAllPriceHistoriesAsRef() {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociatePriceHistoryAsRef on this unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`price_history`
				WHERE
					`ref_iwow` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}


		// Related Objects' Methods for SerialsAsRef
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SerialsesAsRef as an array of Serials objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public function GetSerialsAsRefArray($objOptionalClauses = null) {
			if ((is_null($this->intIdiwow)))
				return array();

			try {
				return Serials::LoadArrayByRef($this->intIdiwow, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SerialsesAsRef
		 * @return int
		*/
		public function CountSerialsesAsRef() {
			if ((is_null($this->intIdiwow)))
				return 0;

			return Serials::CountByRef($this->intIdiwow);
		}

		/**
		 * Associates a SerialsAsRef
		 * @param Serials $objSerials
		 * @return void
		*/
		public function AssociateSerialsAsRef(Serials $objSerials) {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsRef on this unsaved Iwow.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsRef on this Iwow with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`ref` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . '
			');
		}

		/**
		 * Unassociates a SerialsAsRef
		 * @param Serials $objSerials
		 * @return void
		*/
		public function UnassociateSerialsAsRef(Serials $objSerials) {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRef on this unsaved Iwow.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRef on this Iwow with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`ref` = null
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`ref` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}

		/**
		 * Unassociates all SerialsesAsRef
		 * @return void
		*/
		public function UnassociateAllSerialsesAsRef() {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRef on this unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`ref` = null
				WHERE
					`ref` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}

		/**
		 * Deletes an associated SerialsAsRef
		 * @param Serials $objSerials
		 * @return void
		*/
		public function DeleteAssociatedSerialsAsRef(Serials $objSerials) {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRef on this unsaved Iwow.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRef on this Iwow with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`ref` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
			');
		}

		/**
		 * Deletes all associated SerialsesAsRef
		 * @return void
		*/
		public function DeleteAllSerialsesAsRef() {
			if ((is_null($this->intIdiwow)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsRef on this unsaved Iwow.');

			// Get the Database Object for this Class
			$objDatabase = Iwow::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`ref` = ' . $objDatabase->SqlVariable($this->intIdiwow) . '
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
			return "iwow";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Iwow::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Iwow"><sequence>';
			$strToReturn .= '<element name="Idiwow" type="xsd:int"/>';
			$strToReturn .= '<element name="PoNoObject" type="xsd1:Voucher"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="DataByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="InspectedByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="Qty" type="xsd:int"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="FromDepartmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="ToDeparmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="IwowCatObject" type="xsd1:IwowCat"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Iwow', $strComplexTypeArray)) {
				$strComplexTypeArray['Iwow'] = Iwow::GetSoapComplexTypeXml();
				Voucher::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				IwowCat::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Iwow::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Iwow();
			if (property_exists($objSoapObject, 'Idiwow'))
				$objToReturn->intIdiwow = $objSoapObject->Idiwow;
			if ((property_exists($objSoapObject, 'PoNoObject')) &&
				($objSoapObject->PoNoObject))
				$objToReturn->PoNoObject = Voucher::GetObjectFromSoapObject($objSoapObject->PoNoObject);
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = Ledger::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'DataByObject')) &&
				($objSoapObject->DataByObject))
				$objToReturn->DataByObject = Login::GetObjectFromSoapObject($objSoapObject->DataByObject);
			if ((property_exists($objSoapObject, 'InspectedByObject')) &&
				($objSoapObject->InspectedByObject))
				$objToReturn->InspectedByObject = Login::GetObjectFromSoapObject($objSoapObject->InspectedByObject);
			if (property_exists($objSoapObject, 'Qty'))
				$objToReturn->intQty = $objSoapObject->Qty;
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if ((property_exists($objSoapObject, 'FromDepartmentObject')) &&
				($objSoapObject->FromDepartmentObject))
				$objToReturn->FromDepartmentObject = Role::GetObjectFromSoapObject($objSoapObject->FromDepartmentObject);
			if ((property_exists($objSoapObject, 'ToDeparmentObject')) &&
				($objSoapObject->ToDeparmentObject))
				$objToReturn->ToDeparmentObject = Role::GetObjectFromSoapObject($objSoapObject->ToDeparmentObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if ((property_exists($objSoapObject, 'IwowCatObject')) &&
				($objSoapObject->IwowCatObject))
				$objToReturn->IwowCatObject = IwowCat::GetObjectFromSoapObject($objSoapObject->IwowCatObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Iwow::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPoNoObject)
				$objObject->objPoNoObject = Voucher::GetSoapObjectFromObject($objObject->objPoNoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPoNo = null;
			if ($objObject->objItemObject)
				$objObject->objItemObject = Ledger::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objDataByObject)
				$objObject->objDataByObject = Login::GetSoapObjectFromObject($objObject->objDataByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDataBy = null;
			if ($objObject->objInspectedByObject)
				$objObject->objInspectedByObject = Login::GetSoapObjectFromObject($objObject->objInspectedByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intInspectedBy = null;
			if ($objObject->objFromDepartmentObject)
				$objObject->objFromDepartmentObject = Role::GetSoapObjectFromObject($objObject->objFromDepartmentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFromDepartment = null;
			if ($objObject->objToDeparmentObject)
				$objObject->objToDeparmentObject = Role::GetSoapObjectFromObject($objObject->objToDeparmentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intToDeparment = null;
			if ($objObject->objIwowCatObject)
				$objObject->objIwowCatObject = IwowCat::GetSoapObjectFromObject($objObject->objIwowCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intIwowCat = null;
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
			$iArray['Idiwow'] = $this->intIdiwow;
			$iArray['PoNo'] = $this->intPoNo;
			$iArray['Item'] = $this->intItem;
			$iArray['Date'] = $this->dttDate;
			$iArray['DataBy'] = $this->intDataBy;
			$iArray['InspectedBy'] = $this->intInspectedBy;
			$iArray['Qty'] = $this->intQty;
			$iArray['Note'] = $this->strNote;
			$iArray['FromDepartment'] = $this->intFromDepartment;
			$iArray['ToDeparment'] = $this->intToDeparment;
			$iArray['Code'] = $this->strCode;
			$iArray['IwowCat'] = $this->intIwowCat;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdiwow ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idiwow
     * @property-read QQNode $PoNo
     * @property-read QQNodeVoucher $PoNoObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedger $ItemObject
     * @property-read QQNode $Date
     * @property-read QQNode $DataBy
     * @property-read QQNodeLogin $DataByObject
     * @property-read QQNode $InspectedBy
     * @property-read QQNodeLogin $InspectedByObject
     * @property-read QQNode $Qty
     * @property-read QQNode $Note
     * @property-read QQNode $FromDepartment
     * @property-read QQNodeRole $FromDepartmentObject
     * @property-read QQNode $ToDeparment
     * @property-read QQNodeRole $ToDeparmentObject
     * @property-read QQNode $Code
     * @property-read QQNode $IwowCat
     * @property-read QQNodeIwowCat $IwowCatObject
     *
     *
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsRef
     * @property-read QQReverseReferenceNodeSerials $SerialsAsRef

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeIwow extends QQNode {
		protected $strTableName = 'iwow';
		protected $strPrimaryKey = 'idiwow';
		protected $strClassName = 'Iwow';
		public function __get($strName) {
			switch ($strName) {
				case 'Idiwow':
					return new QQNode('idiwow', 'Idiwow', 'Integer', $this);
				case 'PoNo':
					return new QQNode('po_no', 'PoNo', 'Integer', $this);
				case 'PoNoObject':
					return new QQNodeVoucher('po_no', 'PoNoObject', 'Integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedger('item', 'ItemObject', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'Integer', $this);
				case 'DataByObject':
					return new QQNodeLogin('data_by', 'DataByObject', 'Integer', $this);
				case 'InspectedBy':
					return new QQNode('inspected_by', 'InspectedBy', 'Integer', $this);
				case 'InspectedByObject':
					return new QQNodeLogin('inspected_by', 'InspectedByObject', 'Integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'Integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'Blob', $this);
				case 'FromDepartment':
					return new QQNode('from_department', 'FromDepartment', 'Integer', $this);
				case 'FromDepartmentObject':
					return new QQNodeRole('from_department', 'FromDepartmentObject', 'Integer', $this);
				case 'ToDeparment':
					return new QQNode('to_deparment', 'ToDeparment', 'Integer', $this);
				case 'ToDeparmentObject':
					return new QQNodeRole('to_deparment', 'ToDeparmentObject', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'IwowCat':
					return new QQNode('iwow_cat', 'IwowCat', 'Integer', $this);
				case 'IwowCatObject':
					return new QQNodeIwowCat('iwow_cat', 'IwowCatObject', 'Integer', $this);
				case 'PriceHistoryAsRef':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasref', 'reverse_reference', 'ref_iwow');
				case 'SerialsAsRef':
					return new QQReverseReferenceNodeSerials($this, 'serialsasref', 'reverse_reference', 'ref');

				case '_PrimaryKeyNode':
					return new QQNode('idiwow', 'Idiwow', 'Integer', $this);
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
     * @property-read QQNode $Idiwow
     * @property-read QQNode $PoNo
     * @property-read QQNodeVoucher $PoNoObject
     * @property-read QQNode $Item
     * @property-read QQNodeLedger $ItemObject
     * @property-read QQNode $Date
     * @property-read QQNode $DataBy
     * @property-read QQNodeLogin $DataByObject
     * @property-read QQNode $InspectedBy
     * @property-read QQNodeLogin $InspectedByObject
     * @property-read QQNode $Qty
     * @property-read QQNode $Note
     * @property-read QQNode $FromDepartment
     * @property-read QQNodeRole $FromDepartmentObject
     * @property-read QQNode $ToDeparment
     * @property-read QQNodeRole $ToDeparmentObject
     * @property-read QQNode $Code
     * @property-read QQNode $IwowCat
     * @property-read QQNodeIwowCat $IwowCatObject
     *
     *
     * @property-read QQReverseReferenceNodePriceHistory $PriceHistoryAsRef
     * @property-read QQReverseReferenceNodeSerials $SerialsAsRef

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeIwow extends QQReverseReferenceNode {
		protected $strTableName = 'iwow';
		protected $strPrimaryKey = 'idiwow';
		protected $strClassName = 'Iwow';
		public function __get($strName) {
			switch ($strName) {
				case 'Idiwow':
					return new QQNode('idiwow', 'Idiwow', 'integer', $this);
				case 'PoNo':
					return new QQNode('po_no', 'PoNo', 'integer', $this);
				case 'PoNoObject':
					return new QQNodeVoucher('po_no', 'PoNoObject', 'integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedger('item', 'ItemObject', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'DataBy':
					return new QQNode('data_by', 'DataBy', 'integer', $this);
				case 'DataByObject':
					return new QQNodeLogin('data_by', 'DataByObject', 'integer', $this);
				case 'InspectedBy':
					return new QQNode('inspected_by', 'InspectedBy', 'integer', $this);
				case 'InspectedByObject':
					return new QQNodeLogin('inspected_by', 'InspectedByObject', 'integer', $this);
				case 'Qty':
					return new QQNode('qty', 'Qty', 'integer', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'FromDepartment':
					return new QQNode('from_department', 'FromDepartment', 'integer', $this);
				case 'FromDepartmentObject':
					return new QQNodeRole('from_department', 'FromDepartmentObject', 'integer', $this);
				case 'ToDeparment':
					return new QQNode('to_deparment', 'ToDeparment', 'integer', $this);
				case 'ToDeparmentObject':
					return new QQNodeRole('to_deparment', 'ToDeparmentObject', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'IwowCat':
					return new QQNode('iwow_cat', 'IwowCat', 'integer', $this);
				case 'IwowCatObject':
					return new QQNodeIwowCat('iwow_cat', 'IwowCatObject', 'integer', $this);
				case 'PriceHistoryAsRef':
					return new QQReverseReferenceNodePriceHistory($this, 'pricehistoryasref', 'reverse_reference', 'ref_iwow');
				case 'SerialsAsRef':
					return new QQReverseReferenceNodeSerials($this, 'serialsasref', 'reverse_reference', 'ref');

				case '_PrimaryKeyNode':
					return new QQNode('idiwow', 'Idiwow', 'integer', $this);
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
