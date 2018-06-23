<?php
	/**
	 * The abstract SerialsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Serials subclass which
	 * extends this SerialsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Serials class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idserials the value for intIdserials (Read-Only PK)
	 * @property integer $Item the value for intItem (Not Null)
	 * @property string $Code the value for strCode (Unique)
	 * @property integer $Department the value for intDepartment 
	 * @property integer $BaseDept the value for intBaseDept 
	 * @property boolean $InLibrary the value for blnInLibrary 
	 * @property integer $Category the value for intCategory 
	 * @property integer $Ref the value for intRef 
	 * @property integer $RefVou the value for intRefVou 
	 * @property LedgerDetails $ItemObject the value for the LedgerDetails object referenced by intItem (Not Null)
	 * @property Role $DepartmentObject the value for the Role object referenced by intDepartment 
	 * @property Role $BaseDeptObject the value for the Role object referenced by intBaseDept 
	 * @property AccessionCat $CategoryObject the value for the AccessionCat object referenced by intCategory 
	 * @property Iwow $RefObject the value for the Iwow object referenced by intRef 
	 * @property VoucherHasItem $RefVouObject the value for the VoucherHasItem object referenced by intRefVou 
	 * @property-read DeptTransfer $_DeptTransfer the value for the private _objDeptTransfer (Read-Only) if set due to an expansion on the dept_transfer.serials reverse relationship
	 * @property-read DeptTransfer[] $_DeptTransferArray the value for the private _objDeptTransferArray (Read-Only) if set due to an ExpandAsArray on the dept_transfer.serials reverse relationship
	 * @property-read IssuedItems $_IssuedItems the value for the private _objIssuedItems (Read-Only) if set due to an expansion on the issued_items.serials reverse relationship
	 * @property-read IssuedItems[] $_IssuedItemsArray the value for the private _objIssuedItemsArray (Read-Only) if set due to an ExpandAsArray on the issued_items.serials reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class SerialsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column serials.idserials
		 * @var integer intIdserials
		 */
		protected $intIdserials;
		const IdserialsDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.item
		 * @var integer intItem
		 */
		protected $intItem;
		const ItemDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.code
		 * @var string strCode
		 */
		protected $strCode;
		const CodeMaxLength = 45;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.department
		 * @var integer intDepartment
		 */
		protected $intDepartment;
		const DepartmentDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.base_dept
		 * @var integer intBaseDept
		 */
		protected $intBaseDept;
		const BaseDeptDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.in_library
		 * @var boolean blnInLibrary
		 */
		protected $blnInLibrary;
		const InLibraryDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.category
		 * @var integer intCategory
		 */
		protected $intCategory;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.ref
		 * @var integer intRef
		 */
		protected $intRef;
		const RefDefault = null;


		/**
		 * Protected member variable that maps to the database column serials.ref_vou
		 * @var integer intRefVou
		 */
		protected $intRefVou;
		const RefVouDefault = null;


		/**
		 * Private member variable that stores a reference to a single DeptTransfer object
		 * (of type DeptTransfer), if this Serials object was restored with
		 * an expansion on the dept_transfer association table.
		 * @var DeptTransfer _objDeptTransfer;
		 */
		private $_objDeptTransfer;

		/**
		 * Private member variable that stores a reference to an array of DeptTransfer objects
		 * (of type DeptTransfer[]), if this Serials object was restored with
		 * an ExpandAsArray on the dept_transfer association table.
		 * @var DeptTransfer[] _objDeptTransferArray;
		 */
		private $_objDeptTransferArray = null;

		/**
		 * Private member variable that stores a reference to a single IssuedItems object
		 * (of type IssuedItems), if this Serials object was restored with
		 * an expansion on the issued_items association table.
		 * @var IssuedItems _objIssuedItems;
		 */
		private $_objIssuedItems;

		/**
		 * Private member variable that stores a reference to an array of IssuedItems objects
		 * (of type IssuedItems[]), if this Serials object was restored with
		 * an ExpandAsArray on the issued_items association table.
		 * @var IssuedItems[] _objIssuedItemsArray;
		 */
		private $_objIssuedItemsArray = null;

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
		 * in the database column serials.item.
		 *
		 * NOTE: Always use the ItemObject property getter to correctly retrieve this LedgerDetails object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var LedgerDetails objItemObject
		 */
		protected $objItemObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column serials.department.
		 *
		 * NOTE: Always use the DepartmentObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objDepartmentObject
		 */
		protected $objDepartmentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column serials.base_dept.
		 *
		 * NOTE: Always use the BaseDeptObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objBaseDeptObject
		 */
		protected $objBaseDeptObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column serials.category.
		 *
		 * NOTE: Always use the CategoryObject property getter to correctly retrieve this AccessionCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AccessionCat objCategoryObject
		 */
		protected $objCategoryObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column serials.ref.
		 *
		 * NOTE: Always use the RefObject property getter to correctly retrieve this Iwow object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Iwow objRefObject
		 */
		protected $objRefObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column serials.ref_vou.
		 *
		 * NOTE: Always use the RefVouObject property getter to correctly retrieve this VoucherHasItem object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var VoucherHasItem objRefVouObject
		 */
		protected $objRefVouObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdserials = Serials::IdserialsDefault;
			$this->intItem = Serials::ItemDefault;
			$this->strCode = Serials::CodeDefault;
			$this->intDepartment = Serials::DepartmentDefault;
			$this->intBaseDept = Serials::BaseDeptDefault;
			$this->blnInLibrary = Serials::InLibraryDefault;
			$this->intCategory = Serials::CategoryDefault;
			$this->intRef = Serials::RefDefault;
			$this->intRefVou = Serials::RefVouDefault;
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
		 * Load a Serials from PK Info
		 * @param integer $intIdserials
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials
		 */
		public static function Load($intIdserials, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Serials', $intIdserials);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Serials::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Serials()->Idserials, $intIdserials)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Serialses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Serials::QueryArray to perform the LoadAll query
			try {
				return Serials::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Serialses
		 * @return int
		 */
		public static function CountAll() {
			// Call Serials::QueryCount to perform the CountAll query
			return Serials::QueryCount(QQ::All());
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
			$objDatabase = Serials::GetDatabase();

			// Create/Build out the QueryBuilder object with Serials-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'serials');

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
				Serials::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('serials');

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
		 * Static Qcubed Query method to query for a single Serials object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Serials the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Serials::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Serials object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Serials::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Serials::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Serials objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Serials[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Serials::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Serials::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Serials::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Serials objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Serials::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Serials::GetDatabase();

			$strQuery = Serials::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/serials', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Serials::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Serials
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'serials';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idserials', $strAliasPrefix . 'idserials');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idserials', $strAliasPrefix . 'idserials');
			    $objBuilder->AddSelectItem($strTableName, 'item', $strAliasPrefix . 'item');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'department', $strAliasPrefix . 'department');
			    $objBuilder->AddSelectItem($strTableName, 'base_dept', $strAliasPrefix . 'base_dept');
			    $objBuilder->AddSelectItem($strTableName, 'in_library', $strAliasPrefix . 'in_library');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'ref', $strAliasPrefix . 'ref');
			    $objBuilder->AddSelectItem($strTableName, 'ref_vou', $strAliasPrefix . 'ref_vou');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Serials from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Serials::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Serials
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdserials == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'serials__';


						// Expanding reverse references: DeptTransfer
						$strAlias = $strAliasPrefix . 'depttransfer__iddept_transfer';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objDeptTransferArray)
								$objPreviousItem->_objDeptTransferArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDeptTransferArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDeptTransferArray;
								$objChildItem = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransfer__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDeptTransferArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDeptTransferArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransfer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: IssuedItems
						$strAlias = $strAliasPrefix . 'issueditems__idissued_items';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objIssuedItemsArray)
								$objPreviousItem->_objIssuedItemsArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objIssuedItemsArray)) {
								$objPreviousChildItems = $objPreviousItem->_objIssuedItemsArray;
								$objChildItem = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditems__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objIssuedItemsArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objIssuedItemsArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditems__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'serials__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Serials object
			$objToReturn = new Serials();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdserials = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intItem = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'department';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDepartment = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'base_dept';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intBaseDept = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'in_library';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnInLibrary = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCategory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ref';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRef = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ref_vou';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRefVou = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idserials != $objPreviousItem->Idserials) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objDeptTransferArray);
					$cnt = count($objToReturn->_objDeptTransferArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objDeptTransferArray, $objToReturn->_objDeptTransferArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objIssuedItemsArray);
					$cnt = count($objToReturn->_objIssuedItemsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objIssuedItemsArray, $objToReturn->_objIssuedItemsArray)) {
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
				$strAliasPrefix = 'serials__';

			// Check for ItemObject Early Binding
			$strAlias = $strAliasPrefix . 'item__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objItemObject = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'item__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DepartmentObject Early Binding
			$strAlias = $strAliasPrefix . 'department__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDepartmentObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'department__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for BaseDeptObject Early Binding
			$strAlias = $strAliasPrefix . 'base_dept__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objBaseDeptObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'base_dept__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CategoryObject Early Binding
			$strAlias = $strAliasPrefix . 'category__idaccession_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCategoryObject = AccessionCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'category__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefObject Early Binding
			$strAlias = $strAliasPrefix . 'ref__idiwow';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefObject = Iwow::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RefVouObject Early Binding
			$strAlias = $strAliasPrefix . 'ref_vou__idvoucher_has_item';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRefVouObject = VoucherHasItem::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ref_vou__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for DeptTransfer Virtual Binding
			$strAlias = $strAliasPrefix . 'depttransfer__iddept_transfer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objDeptTransferArray)
				$objToReturn->_objDeptTransferArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objDeptTransferArray[] = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransfer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDeptTransfer = DeptTransfer::InstantiateDbRow($objDbRow, $strAliasPrefix . 'depttransfer__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for IssuedItems Virtual Binding
			$strAlias = $strAliasPrefix . 'issueditems__idissued_items';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objIssuedItemsArray)
				$objToReturn->_objIssuedItemsArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objIssuedItemsArray[] = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditems__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objIssuedItems = IssuedItems::InstantiateDbRow($objDbRow, $strAliasPrefix . 'issueditems__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Serialses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Serials[]
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
					$objItem = Serials::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Serials::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Serials object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Serials next row resulting from the query
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
			return Serials::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Serials object,
		 * by Idserials Index(es)
		 * @param integer $intIdserials
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials
		*/
		public static function LoadByIdserials($intIdserials, $objOptionalClauses = null) {
			return Serials::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Serials()->Idserials, $intIdserials)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Serials object,
		 * by Code Index(es)
		 * @param string $strCode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials
		*/
		public static function LoadByCode($strCode, $objOptionalClauses = null) {
			return Serials::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Serials()->Code, $strCode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Serials objects,
		 * by Item Index(es)
		 * @param integer $intItem
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public static function LoadArrayByItem($intItem, $objOptionalClauses = null) {
			// Call Serials::QueryArray to perform the LoadArrayByItem query
			try {
				return Serials::QueryArray(
					QQ::Equal(QQN::Serials()->Item, $intItem),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Serialses
		 * by Item Index(es)
		 * @param integer $intItem
		 * @return int
		*/
		public static function CountByItem($intItem) {
			// Call Serials::QueryCount to perform the CountByItem query
			return Serials::QueryCount(
				QQ::Equal(QQN::Serials()->Item, $intItem)
			);
		}

		/**
		 * Load an array of Serials objects,
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public static function LoadArrayByDepartment($intDepartment, $objOptionalClauses = null) {
			// Call Serials::QueryArray to perform the LoadArrayByDepartment query
			try {
				return Serials::QueryArray(
					QQ::Equal(QQN::Serials()->Department, $intDepartment),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Serialses
		 * by Department Index(es)
		 * @param integer $intDepartment
		 * @return int
		*/
		public static function CountByDepartment($intDepartment) {
			// Call Serials::QueryCount to perform the CountByDepartment query
			return Serials::QueryCount(
				QQ::Equal(QQN::Serials()->Department, $intDepartment)
			);
		}

		/**
		 * Load an array of Serials objects,
		 * by BaseDept Index(es)
		 * @param integer $intBaseDept
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public static function LoadArrayByBaseDept($intBaseDept, $objOptionalClauses = null) {
			// Call Serials::QueryArray to perform the LoadArrayByBaseDept query
			try {
				return Serials::QueryArray(
					QQ::Equal(QQN::Serials()->BaseDept, $intBaseDept),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Serialses
		 * by BaseDept Index(es)
		 * @param integer $intBaseDept
		 * @return int
		*/
		public static function CountByBaseDept($intBaseDept) {
			// Call Serials::QueryCount to perform the CountByBaseDept query
			return Serials::QueryCount(
				QQ::Equal(QQN::Serials()->BaseDept, $intBaseDept)
			);
		}

		/**
		 * Load an array of Serials objects,
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public static function LoadArrayByCategory($intCategory, $objOptionalClauses = null) {
			// Call Serials::QueryArray to perform the LoadArrayByCategory query
			try {
				return Serials::QueryArray(
					QQ::Equal(QQN::Serials()->Category, $intCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Serialses
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @return int
		*/
		public static function CountByCategory($intCategory) {
			// Call Serials::QueryCount to perform the CountByCategory query
			return Serials::QueryCount(
				QQ::Equal(QQN::Serials()->Category, $intCategory)
			);
		}

		/**
		 * Load an array of Serials objects,
		 * by Ref Index(es)
		 * @param integer $intRef
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public static function LoadArrayByRef($intRef, $objOptionalClauses = null) {
			// Call Serials::QueryArray to perform the LoadArrayByRef query
			try {
				return Serials::QueryArray(
					QQ::Equal(QQN::Serials()->Ref, $intRef),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Serialses
		 * by Ref Index(es)
		 * @param integer $intRef
		 * @return int
		*/
		public static function CountByRef($intRef) {
			// Call Serials::QueryCount to perform the CountByRef query
			return Serials::QueryCount(
				QQ::Equal(QQN::Serials()->Ref, $intRef)
			);
		}

		/**
		 * Load an array of Serials objects,
		 * by RefVou Index(es)
		 * @param integer $intRefVou
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public static function LoadArrayByRefVou($intRefVou, $objOptionalClauses = null) {
			// Call Serials::QueryArray to perform the LoadArrayByRefVou query
			try {
				return Serials::QueryArray(
					QQ::Equal(QQN::Serials()->RefVou, $intRefVou),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Serialses
		 * by RefVou Index(es)
		 * @param integer $intRefVou
		 * @return int
		*/
		public static function CountByRefVou($intRefVou) {
			// Call Serials::QueryCount to perform the CountByRefVou query
			return Serials::QueryCount(
				QQ::Equal(QQN::Serials()->RefVou, $intRefVou)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Serials
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `serials` (
							`item`,
							`code`,
							`department`,
							`base_dept`,
							`in_library`,
							`category`,
							`ref`,
							`ref_vou`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intItem) . ',
							' . $objDatabase->SqlVariable($this->strCode) . ',
							' . $objDatabase->SqlVariable($this->intDepartment) . ',
							' . $objDatabase->SqlVariable($this->intBaseDept) . ',
							' . $objDatabase->SqlVariable($this->blnInLibrary) . ',
							' . $objDatabase->SqlVariable($this->intCategory) . ',
							' . $objDatabase->SqlVariable($this->intRef) . ',
							' . $objDatabase->SqlVariable($this->intRefVou) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdserials = $objDatabase->InsertId('serials', 'idserials');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`serials`
						SET
							`item` = ' . $objDatabase->SqlVariable($this->intItem) . ',
							`code` = ' . $objDatabase->SqlVariable($this->strCode) . ',
							`department` = ' . $objDatabase->SqlVariable($this->intDepartment) . ',
							`base_dept` = ' . $objDatabase->SqlVariable($this->intBaseDept) . ',
							`in_library` = ' . $objDatabase->SqlVariable($this->blnInLibrary) . ',
							`category` = ' . $objDatabase->SqlVariable($this->intCategory) . ',
							`ref` = ' . $objDatabase->SqlVariable($this->intRef) . ',
							`ref_vou` = ' . $objDatabase->SqlVariable($this->intRefVou) . '
						WHERE
							`idserials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
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
		 * Delete this Serials
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Serials with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Serials ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Serials', $this->intIdserials);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Serialses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate serials table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `serials`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Serials from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Serials object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Serials::Load($this->intIdserials);

			// Update $this's local variables to match
			$this->Item = $objReloaded->Item;
			$this->strCode = $objReloaded->strCode;
			$this->Department = $objReloaded->Department;
			$this->BaseDept = $objReloaded->BaseDept;
			$this->blnInLibrary = $objReloaded->blnInLibrary;
			$this->Category = $objReloaded->Category;
			$this->Ref = $objReloaded->Ref;
			$this->RefVou = $objReloaded->RefVou;
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
				case 'Idserials':
					/**
					 * Gets the value for intIdserials (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdserials;

				case 'Item':
					/**
					 * Gets the value for intItem (Not Null)
					 * @return integer
					 */
					return $this->intItem;

				case 'Code':
					/**
					 * Gets the value for strCode (Unique)
					 * @return string
					 */
					return $this->strCode;

				case 'Department':
					/**
					 * Gets the value for intDepartment 
					 * @return integer
					 */
					return $this->intDepartment;

				case 'BaseDept':
					/**
					 * Gets the value for intBaseDept 
					 * @return integer
					 */
					return $this->intBaseDept;

				case 'InLibrary':
					/**
					 * Gets the value for blnInLibrary 
					 * @return boolean
					 */
					return $this->blnInLibrary;

				case 'Category':
					/**
					 * Gets the value for intCategory 
					 * @return integer
					 */
					return $this->intCategory;

				case 'Ref':
					/**
					 * Gets the value for intRef 
					 * @return integer
					 */
					return $this->intRef;

				case 'RefVou':
					/**
					 * Gets the value for intRefVou 
					 * @return integer
					 */
					return $this->intRefVou;


				///////////////////
				// Member Objects
				///////////////////
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

				case 'DepartmentObject':
					/**
					 * Gets the value for the Role object referenced by intDepartment 
					 * @return Role
					 */
					try {
						if ((!$this->objDepartmentObject) && (!is_null($this->intDepartment)))
							$this->objDepartmentObject = Role::Load($this->intDepartment);
						return $this->objDepartmentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BaseDeptObject':
					/**
					 * Gets the value for the Role object referenced by intBaseDept 
					 * @return Role
					 */
					try {
						if ((!$this->objBaseDeptObject) && (!is_null($this->intBaseDept)))
							$this->objBaseDeptObject = Role::Load($this->intBaseDept);
						return $this->objBaseDeptObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CategoryObject':
					/**
					 * Gets the value for the AccessionCat object referenced by intCategory 
					 * @return AccessionCat
					 */
					try {
						if ((!$this->objCategoryObject) && (!is_null($this->intCategory)))
							$this->objCategoryObject = AccessionCat::Load($this->intCategory);
						return $this->objCategoryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefObject':
					/**
					 * Gets the value for the Iwow object referenced by intRef 
					 * @return Iwow
					 */
					try {
						if ((!$this->objRefObject) && (!is_null($this->intRef)))
							$this->objRefObject = Iwow::Load($this->intRef);
						return $this->objRefObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefVouObject':
					/**
					 * Gets the value for the VoucherHasItem object referenced by intRefVou 
					 * @return VoucherHasItem
					 */
					try {
						if ((!$this->objRefVouObject) && (!is_null($this->intRefVou)))
							$this->objRefVouObject = VoucherHasItem::Load($this->intRefVou);
						return $this->objRefVouObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DeptTransfer':
					/**
					 * Gets the value for the private _objDeptTransfer (Read-Only)
					 * if set due to an expansion on the dept_transfer.serials reverse relationship
					 * @return DeptTransfer
					 */
					return $this->_objDeptTransfer;

				case '_DeptTransferArray':
					/**
					 * Gets the value for the private _objDeptTransferArray (Read-Only)
					 * if set due to an ExpandAsArray on the dept_transfer.serials reverse relationship
					 * @return DeptTransfer[]
					 */
					return $this->_objDeptTransferArray;

				case '_IssuedItems':
					/**
					 * Gets the value for the private _objIssuedItems (Read-Only)
					 * if set due to an expansion on the issued_items.serials reverse relationship
					 * @return IssuedItems
					 */
					return $this->_objIssuedItems;

				case '_IssuedItemsArray':
					/**
					 * Gets the value for the private _objIssuedItemsArray (Read-Only)
					 * if set due to an ExpandAsArray on the issued_items.serials reverse relationship
					 * @return IssuedItems[]
					 */
					return $this->_objIssuedItemsArray;


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

				case 'Department':
					/**
					 * Sets the value for intDepartment 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDepartmentObject = null;
						return ($this->intDepartment = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'BaseDept':
					/**
					 * Sets the value for intBaseDept 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objBaseDeptObject = null;
						return ($this->intBaseDept = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InLibrary':
					/**
					 * Sets the value for blnInLibrary 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnInLibrary = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Category':
					/**
					 * Sets the value for intCategory 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCategoryObject = null;
						return ($this->intCategory = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ref':
					/**
					 * Sets the value for intRef 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefObject = null;
						return ($this->intRef = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefVou':
					/**
					 * Sets the value for intRefVou 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRefVouObject = null;
						return ($this->intRefVou = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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
							throw new QCallerException('Unable to set an unsaved ItemObject for this Serials');

						// Update Local Member Variables
						$this->objItemObject = $mixValue;
						$this->intItem = $mixValue->IdledgerDetails;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DepartmentObject':
					/**
					 * Sets the value for the Role object referenced by intDepartment 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intDepartment = null;
						$this->objDepartmentObject = null;
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
							throw new QCallerException('Unable to set an unsaved DepartmentObject for this Serials');

						// Update Local Member Variables
						$this->objDepartmentObject = $mixValue;
						$this->intDepartment = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'BaseDeptObject':
					/**
					 * Sets the value for the Role object referenced by intBaseDept 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intBaseDept = null;
						$this->objBaseDeptObject = null;
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
							throw new QCallerException('Unable to set an unsaved BaseDeptObject for this Serials');

						// Update Local Member Variables
						$this->objBaseDeptObject = $mixValue;
						$this->intBaseDept = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CategoryObject':
					/**
					 * Sets the value for the AccessionCat object referenced by intCategory 
					 * @param AccessionCat $mixValue
					 * @return AccessionCat
					 */
					if (is_null($mixValue)) {
						$this->intCategory = null;
						$this->objCategoryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AccessionCat object
						try {
							$mixValue = QType::Cast($mixValue, 'AccessionCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AccessionCat object
						if (is_null($mixValue->IdaccessionCat))
							throw new QCallerException('Unable to set an unsaved CategoryObject for this Serials');

						// Update Local Member Variables
						$this->objCategoryObject = $mixValue;
						$this->intCategory = $mixValue->IdaccessionCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefObject':
					/**
					 * Sets the value for the Iwow object referenced by intRef 
					 * @param Iwow $mixValue
					 * @return Iwow
					 */
					if (is_null($mixValue)) {
						$this->intRef = null;
						$this->objRefObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Iwow object
						try {
							$mixValue = QType::Cast($mixValue, 'Iwow');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Iwow object
						if (is_null($mixValue->Idiwow))
							throw new QCallerException('Unable to set an unsaved RefObject for this Serials');

						// Update Local Member Variables
						$this->objRefObject = $mixValue;
						$this->intRef = $mixValue->Idiwow;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RefVouObject':
					/**
					 * Sets the value for the VoucherHasItem object referenced by intRefVou 
					 * @param VoucherHasItem $mixValue
					 * @return VoucherHasItem
					 */
					if (is_null($mixValue)) {
						$this->intRefVou = null;
						$this->objRefVouObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a VoucherHasItem object
						try {
							$mixValue = QType::Cast($mixValue, 'VoucherHasItem');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED VoucherHasItem object
						if (is_null($mixValue->IdvoucherHasItem))
							throw new QCallerException('Unable to set an unsaved RefVouObject for this Serials');

						// Update Local Member Variables
						$this->objRefVouObject = $mixValue;
						$this->intRefVou = $mixValue->IdvoucherHasItem;

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



		// Related Objects' Methods for DeptTransfer
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DeptTransfers as an array of DeptTransfer objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return DeptTransfer[]
		*/
		public function GetDeptTransferArray($objOptionalClauses = null) {
			if ((is_null($this->intIdserials)))
				return array();

			try {
				return DeptTransfer::LoadArrayBySerials($this->intIdserials, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DeptTransfers
		 * @return int
		*/
		public function CountDeptTransfers() {
			if ((is_null($this->intIdserials)))
				return 0;

			return DeptTransfer::CountBySerials($this->intIdserials);
		}

		/**
		 * Associates a DeptTransfer
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function AssociateDeptTransfer(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransfer on this unsaved Serials.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDeptTransfer on this Serials with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . '
			');
		}

		/**
		 * Unassociates a DeptTransfer
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function UnassociateDeptTransfer(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransfer on this unsaved Serials.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransfer on this Serials with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`serials` = null
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}

		/**
		 * Unassociates all DeptTransfers
		 * @return void
		*/
		public function UnassociateAllDeptTransfers() {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransfer on this unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`dept_transfer`
				SET
					`serials` = null
				WHERE
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}

		/**
		 * Deletes an associated DeptTransfer
		 * @param DeptTransfer $objDeptTransfer
		 * @return void
		*/
		public function DeleteAssociatedDeptTransfer(DeptTransfer $objDeptTransfer) {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransfer on this unsaved Serials.');
			if ((is_null($objDeptTransfer->IddeptTransfer)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransfer on this Serials with an unsaved DeptTransfer.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`iddept_transfer` = ' . $objDatabase->SqlVariable($objDeptTransfer->IddeptTransfer) . ' AND
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}

		/**
		 * Deletes all associated DeptTransfers
		 * @return void
		*/
		public function DeleteAllDeptTransfers() {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDeptTransfer on this unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`dept_transfer`
				WHERE
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}


		// Related Objects' Methods for IssuedItems
		//-------------------------------------------------------------------

		/**
		 * Gets all associated IssuedItemses as an array of IssuedItems objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return IssuedItems[]
		*/
		public function GetIssuedItemsArray($objOptionalClauses = null) {
			if ((is_null($this->intIdserials)))
				return array();

			try {
				return IssuedItems::LoadArrayBySerials($this->intIdserials, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated IssuedItemses
		 * @return int
		*/
		public function CountIssuedItemses() {
			if ((is_null($this->intIdserials)))
				return 0;

			return IssuedItems::CountBySerials($this->intIdserials);
		}

		/**
		 * Associates a IssuedItems
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function AssociateIssuedItems(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItems on this unsaved Serials.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateIssuedItems on this Serials with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . '
			');
		}

		/**
		 * Unassociates a IssuedItems
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function UnassociateIssuedItems(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItems on this unsaved Serials.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItems on this Serials with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`serials` = null
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}

		/**
		 * Unassociates all IssuedItemses
		 * @return void
		*/
		public function UnassociateAllIssuedItemses() {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItems on this unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`issued_items`
				SET
					`serials` = null
				WHERE
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}

		/**
		 * Deletes an associated IssuedItems
		 * @param IssuedItems $objIssuedItems
		 * @return void
		*/
		public function DeleteAssociatedIssuedItems(IssuedItems $objIssuedItems) {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItems on this unsaved Serials.');
			if ((is_null($objIssuedItems->IdissuedItems)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItems on this Serials with an unsaved IssuedItems.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`idissued_items` = ' . $objDatabase->SqlVariable($objIssuedItems->IdissuedItems) . ' AND
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
			');
		}

		/**
		 * Deletes all associated IssuedItemses
		 * @return void
		*/
		public function DeleteAllIssuedItemses() {
			if ((is_null($this->intIdserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateIssuedItems on this unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = Serials::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`issued_items`
				WHERE
					`serials` = ' . $objDatabase->SqlVariable($this->intIdserials) . '
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
			return "serials";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Serials::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Serials"><sequence>';
			$strToReturn .= '<element name="Idserials" type="xsd:int"/>';
			$strToReturn .= '<element name="ItemObject" type="xsd1:LedgerDetails"/>';
			$strToReturn .= '<element name="Code" type="xsd:string"/>';
			$strToReturn .= '<element name="DepartmentObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="BaseDeptObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="InLibrary" type="xsd:boolean"/>';
			$strToReturn .= '<element name="CategoryObject" type="xsd1:AccessionCat"/>';
			$strToReturn .= '<element name="RefObject" type="xsd1:Iwow"/>';
			$strToReturn .= '<element name="RefVouObject" type="xsd1:VoucherHasItem"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Serials', $strComplexTypeArray)) {
				$strComplexTypeArray['Serials'] = Serials::GetSoapComplexTypeXml();
				LedgerDetails::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				AccessionCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				Iwow::AlterSoapComplexTypeArray($strComplexTypeArray);
				VoucherHasItem::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Serials::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Serials();
			if (property_exists($objSoapObject, 'Idserials'))
				$objToReturn->intIdserials = $objSoapObject->Idserials;
			if ((property_exists($objSoapObject, 'ItemObject')) &&
				($objSoapObject->ItemObject))
				$objToReturn->ItemObject = LedgerDetails::GetObjectFromSoapObject($objSoapObject->ItemObject);
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->strCode = $objSoapObject->Code;
			if ((property_exists($objSoapObject, 'DepartmentObject')) &&
				($objSoapObject->DepartmentObject))
				$objToReturn->DepartmentObject = Role::GetObjectFromSoapObject($objSoapObject->DepartmentObject);
			if ((property_exists($objSoapObject, 'BaseDeptObject')) &&
				($objSoapObject->BaseDeptObject))
				$objToReturn->BaseDeptObject = Role::GetObjectFromSoapObject($objSoapObject->BaseDeptObject);
			if (property_exists($objSoapObject, 'InLibrary'))
				$objToReturn->blnInLibrary = $objSoapObject->InLibrary;
			if ((property_exists($objSoapObject, 'CategoryObject')) &&
				($objSoapObject->CategoryObject))
				$objToReturn->CategoryObject = AccessionCat::GetObjectFromSoapObject($objSoapObject->CategoryObject);
			if ((property_exists($objSoapObject, 'RefObject')) &&
				($objSoapObject->RefObject))
				$objToReturn->RefObject = Iwow::GetObjectFromSoapObject($objSoapObject->RefObject);
			if ((property_exists($objSoapObject, 'RefVouObject')) &&
				($objSoapObject->RefVouObject))
				$objToReturn->RefVouObject = VoucherHasItem::GetObjectFromSoapObject($objSoapObject->RefVouObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Serials::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objItemObject)
				$objObject->objItemObject = LedgerDetails::GetSoapObjectFromObject($objObject->objItemObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intItem = null;
			if ($objObject->objDepartmentObject)
				$objObject->objDepartmentObject = Role::GetSoapObjectFromObject($objObject->objDepartmentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDepartment = null;
			if ($objObject->objBaseDeptObject)
				$objObject->objBaseDeptObject = Role::GetSoapObjectFromObject($objObject->objBaseDeptObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intBaseDept = null;
			if ($objObject->objCategoryObject)
				$objObject->objCategoryObject = AccessionCat::GetSoapObjectFromObject($objObject->objCategoryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCategory = null;
			if ($objObject->objRefObject)
				$objObject->objRefObject = Iwow::GetSoapObjectFromObject($objObject->objRefObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRef = null;
			if ($objObject->objRefVouObject)
				$objObject->objRefVouObject = VoucherHasItem::GetSoapObjectFromObject($objObject->objRefVouObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRefVou = null;
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
			$iArray['Idserials'] = $this->intIdserials;
			$iArray['Item'] = $this->intItem;
			$iArray['Code'] = $this->strCode;
			$iArray['Department'] = $this->intDepartment;
			$iArray['BaseDept'] = $this->intBaseDept;
			$iArray['InLibrary'] = $this->blnInLibrary;
			$iArray['Category'] = $this->intCategory;
			$iArray['Ref'] = $this->intRef;
			$iArray['RefVou'] = $this->intRefVou;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdserials ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idserials
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Code
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $BaseDept
     * @property-read QQNodeRole $BaseDeptObject
     * @property-read QQNode $InLibrary
     * @property-read QQNode $Category
     * @property-read QQNodeAccessionCat $CategoryObject
     * @property-read QQNode $Ref
     * @property-read QQNodeIwow $RefObject
     * @property-read QQNode $RefVou
     * @property-read QQNodeVoucherHasItem $RefVouObject
     *
     *
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransfer
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItems

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeSerials extends QQNode {
		protected $strTableName = 'serials';
		protected $strPrimaryKey = 'idserials';
		protected $strClassName = 'Serials';
		public function __get($strName) {
			switch ($strName) {
				case 'Idserials':
					return new QQNode('idserials', 'Idserials', 'Integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'Integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'VarChar', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'Integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'Integer', $this);
				case 'BaseDept':
					return new QQNode('base_dept', 'BaseDept', 'Integer', $this);
				case 'BaseDeptObject':
					return new QQNodeRole('base_dept', 'BaseDeptObject', 'Integer', $this);
				case 'InLibrary':
					return new QQNode('in_library', 'InLibrary', 'Bit', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'Integer', $this);
				case 'CategoryObject':
					return new QQNodeAccessionCat('category', 'CategoryObject', 'Integer', $this);
				case 'Ref':
					return new QQNode('ref', 'Ref', 'Integer', $this);
				case 'RefObject':
					return new QQNodeIwow('ref', 'RefObject', 'Integer', $this);
				case 'RefVou':
					return new QQNode('ref_vou', 'RefVou', 'Integer', $this);
				case 'RefVouObject':
					return new QQNodeVoucherHasItem('ref_vou', 'RefVouObject', 'Integer', $this);
				case 'DeptTransfer':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransfer', 'reverse_reference', 'serials');
				case 'IssuedItems':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditems', 'reverse_reference', 'serials');

				case '_PrimaryKeyNode':
					return new QQNode('idserials', 'Idserials', 'Integer', $this);
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
     * @property-read QQNode $Idserials
     * @property-read QQNode $Item
     * @property-read QQNodeLedgerDetails $ItemObject
     * @property-read QQNode $Code
     * @property-read QQNode $Department
     * @property-read QQNodeRole $DepartmentObject
     * @property-read QQNode $BaseDept
     * @property-read QQNodeRole $BaseDeptObject
     * @property-read QQNode $InLibrary
     * @property-read QQNode $Category
     * @property-read QQNodeAccessionCat $CategoryObject
     * @property-read QQNode $Ref
     * @property-read QQNodeIwow $RefObject
     * @property-read QQNode $RefVou
     * @property-read QQNodeVoucherHasItem $RefVouObject
     *
     *
     * @property-read QQReverseReferenceNodeDeptTransfer $DeptTransfer
     * @property-read QQReverseReferenceNodeIssuedItems $IssuedItems

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeSerials extends QQReverseReferenceNode {
		protected $strTableName = 'serials';
		protected $strPrimaryKey = 'idserials';
		protected $strClassName = 'Serials';
		public function __get($strName) {
			switch ($strName) {
				case 'Idserials':
					return new QQNode('idserials', 'Idserials', 'integer', $this);
				case 'Item':
					return new QQNode('item', 'Item', 'integer', $this);
				case 'ItemObject':
					return new QQNodeLedgerDetails('item', 'ItemObject', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'string', $this);
				case 'Department':
					return new QQNode('department', 'Department', 'integer', $this);
				case 'DepartmentObject':
					return new QQNodeRole('department', 'DepartmentObject', 'integer', $this);
				case 'BaseDept':
					return new QQNode('base_dept', 'BaseDept', 'integer', $this);
				case 'BaseDeptObject':
					return new QQNodeRole('base_dept', 'BaseDeptObject', 'integer', $this);
				case 'InLibrary':
					return new QQNode('in_library', 'InLibrary', 'boolean', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'integer', $this);
				case 'CategoryObject':
					return new QQNodeAccessionCat('category', 'CategoryObject', 'integer', $this);
				case 'Ref':
					return new QQNode('ref', 'Ref', 'integer', $this);
				case 'RefObject':
					return new QQNodeIwow('ref', 'RefObject', 'integer', $this);
				case 'RefVou':
					return new QQNode('ref_vou', 'RefVou', 'integer', $this);
				case 'RefVouObject':
					return new QQNodeVoucherHasItem('ref_vou', 'RefVouObject', 'integer', $this);
				case 'DeptTransfer':
					return new QQReverseReferenceNodeDeptTransfer($this, 'depttransfer', 'reverse_reference', 'serials');
				case 'IssuedItems':
					return new QQReverseReferenceNodeIssuedItems($this, 'issueditems', 'reverse_reference', 'serials');

				case '_PrimaryKeyNode':
					return new QQNode('idserials', 'Idserials', 'integer', $this);
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
