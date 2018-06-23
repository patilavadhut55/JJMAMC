<?php
	/**
	 * The abstract AccessionCatGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AccessionCat subclass which
	 * extends this AccessionCatGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AccessionCat class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdaccessionCat the value for intIdaccessionCat (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $ShortName the value for strShortName 
	 * @property string $Note the value for strNote 
	 * @property integer $Code the value for intCode 
	 * @property-read LedgerDetails $_LedgerDetailsAsCategory the value for the private _objLedgerDetailsAsCategory (Read-Only) if set due to an expansion on the ledger_details.category reverse relationship
	 * @property-read LedgerDetails[] $_LedgerDetailsAsCategoryArray the value for the private _objLedgerDetailsAsCategoryArray (Read-Only) if set due to an ExpandAsArray on the ledger_details.category reverse relationship
	 * @property-read Serials $_SerialsAsCategory the value for the private _objSerialsAsCategory (Read-Only) if set due to an expansion on the serials.category reverse relationship
	 * @property-read Serials[] $_SerialsAsCategoryArray the value for the private _objSerialsAsCategoryArray (Read-Only) if set due to an ExpandAsArray on the serials.category reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AccessionCatGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column accession_cat.idaccession_cat
		 * @var integer intIdaccessionCat
		 */
		protected $intIdaccessionCat;
		const IdaccessionCatDefault = null;


		/**
		 * Protected member variable that maps to the database column accession_cat.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column accession_cat.short_name
		 * @var string strShortName
		 */
		protected $strShortName;
		const ShortNameMaxLength = 45;
		const ShortNameDefault = null;


		/**
		 * Protected member variable that maps to the database column accession_cat.note
		 * @var string strNote
		 */
		protected $strNote;
		const NoteMaxLength = 45;
		const NoteDefault = null;


		/**
		 * Protected member variable that maps to the database column accession_cat.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Private member variable that stores a reference to a single LedgerDetailsAsCategory object
		 * (of type LedgerDetails), if this AccessionCat object was restored with
		 * an expansion on the ledger_details association table.
		 * @var LedgerDetails _objLedgerDetailsAsCategory;
		 */
		private $_objLedgerDetailsAsCategory;

		/**
		 * Private member variable that stores a reference to an array of LedgerDetailsAsCategory objects
		 * (of type LedgerDetails[]), if this AccessionCat object was restored with
		 * an ExpandAsArray on the ledger_details association table.
		 * @var LedgerDetails[] _objLedgerDetailsAsCategoryArray;
		 */
		private $_objLedgerDetailsAsCategoryArray = null;

		/**
		 * Private member variable that stores a reference to a single SerialsAsCategory object
		 * (of type Serials), if this AccessionCat object was restored with
		 * an expansion on the serials association table.
		 * @var Serials _objSerialsAsCategory;
		 */
		private $_objSerialsAsCategory;

		/**
		 * Private member variable that stores a reference to an array of SerialsAsCategory objects
		 * (of type Serials[]), if this AccessionCat object was restored with
		 * an ExpandAsArray on the serials association table.
		 * @var Serials[] _objSerialsAsCategoryArray;
		 */
		private $_objSerialsAsCategoryArray = null;

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
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdaccessionCat = AccessionCat::IdaccessionCatDefault;
			$this->strName = AccessionCat::NameDefault;
			$this->strShortName = AccessionCat::ShortNameDefault;
			$this->strNote = AccessionCat::NoteDefault;
			$this->intCode = AccessionCat::CodeDefault;
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
		 * Load a AccessionCat from PK Info
		 * @param integer $intIdaccessionCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AccessionCat
		 */
		public static function Load($intIdaccessionCat, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AccessionCat', $intIdaccessionCat);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AccessionCat::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AccessionCat()->IdaccessionCat, $intIdaccessionCat)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AccessionCats
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AccessionCat[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AccessionCat::QueryArray to perform the LoadAll query
			try {
				return AccessionCat::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AccessionCats
		 * @return int
		 */
		public static function CountAll() {
			// Call AccessionCat::QueryCount to perform the CountAll query
			return AccessionCat::QueryCount(QQ::All());
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
			$objDatabase = AccessionCat::GetDatabase();

			// Create/Build out the QueryBuilder object with AccessionCat-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'accession_cat');

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
				AccessionCat::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('accession_cat');

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
		 * Static Qcubed Query method to query for a single AccessionCat object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AccessionCat the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AccessionCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AccessionCat object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AccessionCat::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AccessionCat::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AccessionCat objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AccessionCat[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AccessionCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AccessionCat::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AccessionCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AccessionCat objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AccessionCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AccessionCat::GetDatabase();

			$strQuery = AccessionCat::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/accessioncat', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AccessionCat::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AccessionCat
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'accession_cat';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idaccession_cat', $strAliasPrefix . 'idaccession_cat');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idaccession_cat', $strAliasPrefix . 'idaccession_cat');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'short_name', $strAliasPrefix . 'short_name');
			    $objBuilder->AddSelectItem($strTableName, 'note', $strAliasPrefix . 'note');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AccessionCat from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AccessionCat::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AccessionCat
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idaccession_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdaccessionCat == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'accession_cat__';


						// Expanding reverse references: LedgerDetailsAsCategory
						$strAlias = $strAliasPrefix . 'ledgerdetailsascategory__idledger_details';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLedgerDetailsAsCategoryArray)
								$objPreviousItem->_objLedgerDetailsAsCategoryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLedgerDetailsAsCategoryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLedgerDetailsAsCategoryArray;
								$objChildItem = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsascategory__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLedgerDetailsAsCategoryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLedgerDetailsAsCategoryArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SerialsAsCategory
						$strAlias = $strAliasPrefix . 'serialsascategory__idserials';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSerialsAsCategoryArray)
								$objPreviousItem->_objSerialsAsCategoryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSerialsAsCategoryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSerialsAsCategoryArray;
								$objChildItem = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsascategory__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSerialsAsCategoryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSerialsAsCategoryArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'accession_cat__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AccessionCat object
			$objToReturn = new AccessionCat();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idaccession_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdaccessionCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'short_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'note';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strNote = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdaccessionCat != $objPreviousItem->IdaccessionCat) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objLedgerDetailsAsCategoryArray);
					$cnt = count($objToReturn->_objLedgerDetailsAsCategoryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLedgerDetailsAsCategoryArray, $objToReturn->_objLedgerDetailsAsCategoryArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSerialsAsCategoryArray);
					$cnt = count($objToReturn->_objSerialsAsCategoryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSerialsAsCategoryArray, $objToReturn->_objSerialsAsCategoryArray)) {
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
				$strAliasPrefix = 'accession_cat__';




			// Check for LedgerDetailsAsCategory Virtual Binding
			$strAlias = $strAliasPrefix . 'ledgerdetailsascategory__idledger_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLedgerDetailsAsCategoryArray)
				$objToReturn->_objLedgerDetailsAsCategoryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLedgerDetailsAsCategoryArray[] = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLedgerDetailsAsCategory = LedgerDetails::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ledgerdetailsascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SerialsAsCategory Virtual Binding
			$strAlias = $strAliasPrefix . 'serialsascategory__idserials';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSerialsAsCategoryArray)
				$objToReturn->_objSerialsAsCategoryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSerialsAsCategoryArray[] = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSerialsAsCategory = Serials::InstantiateDbRow($objDbRow, $strAliasPrefix . 'serialsascategory__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AccessionCats from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AccessionCat[]
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
					$objItem = AccessionCat::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AccessionCat::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AccessionCat object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AccessionCat next row resulting from the query
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
			return AccessionCat::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AccessionCat object,
		 * by IdaccessionCat Index(es)
		 * @param integer $intIdaccessionCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AccessionCat
		*/
		public static function LoadByIdaccessionCat($intIdaccessionCat, $objOptionalClauses = null) {
			return AccessionCat::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AccessionCat()->IdaccessionCat, $intIdaccessionCat)
				),
				$objOptionalClauses
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this AccessionCat
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `accession_cat` (
							`name`,
							`short_name`,
							`note`,
							`code`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strShortName) . ',
							' . $objDatabase->SqlVariable($this->strNote) . ',
							' . $objDatabase->SqlVariable($this->intCode) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdaccessionCat = $objDatabase->InsertId('accession_cat', 'idaccession_cat');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`accession_cat`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`short_name` = ' . $objDatabase->SqlVariable($this->strShortName) . ',
							`note` = ' . $objDatabase->SqlVariable($this->strNote) . ',
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . '
						WHERE
							`idaccession_cat` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
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
		 * Delete this AccessionCat
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AccessionCat with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`accession_cat`
				WHERE
					`idaccession_cat` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AccessionCat ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AccessionCat', $this->intIdaccessionCat);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AccessionCats
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`accession_cat`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate accession_cat table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `accession_cat`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AccessionCat from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AccessionCat object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AccessionCat::Load($this->intIdaccessionCat);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strShortName = $objReloaded->strShortName;
			$this->strNote = $objReloaded->strNote;
			$this->intCode = $objReloaded->intCode;
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
				case 'IdaccessionCat':
					/**
					 * Gets the value for intIdaccessionCat (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdaccessionCat;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'ShortName':
					/**
					 * Gets the value for strShortName 
					 * @return string
					 */
					return $this->strShortName;

				case 'Note':
					/**
					 * Gets the value for strNote 
					 * @return string
					 */
					return $this->strNote;

				case 'Code':
					/**
					 * Gets the value for intCode 
					 * @return integer
					 */
					return $this->intCode;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_LedgerDetailsAsCategory':
					/**
					 * Gets the value for the private _objLedgerDetailsAsCategory (Read-Only)
					 * if set due to an expansion on the ledger_details.category reverse relationship
					 * @return LedgerDetails
					 */
					return $this->_objLedgerDetailsAsCategory;

				case '_LedgerDetailsAsCategoryArray':
					/**
					 * Gets the value for the private _objLedgerDetailsAsCategoryArray (Read-Only)
					 * if set due to an ExpandAsArray on the ledger_details.category reverse relationship
					 * @return LedgerDetails[]
					 */
					return $this->_objLedgerDetailsAsCategoryArray;

				case '_SerialsAsCategory':
					/**
					 * Gets the value for the private _objSerialsAsCategory (Read-Only)
					 * if set due to an expansion on the serials.category reverse relationship
					 * @return Serials
					 */
					return $this->_objSerialsAsCategory;

				case '_SerialsAsCategoryArray':
					/**
					 * Gets the value for the private _objSerialsAsCategoryArray (Read-Only)
					 * if set due to an ExpandAsArray on the serials.category reverse relationship
					 * @return Serials[]
					 */
					return $this->_objSerialsAsCategoryArray;


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
					 * Sets the value for strName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShortName':
					/**
					 * Sets the value for strShortName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShortName = QType::Cast($mixValue, QType::String));
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

				case 'Code':
					/**
					 * Sets the value for intCode 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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



		// Related Objects' Methods for LedgerDetailsAsCategory
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LedgerDetailsesAsCategory as an array of LedgerDetails objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LedgerDetails[]
		*/
		public function GetLedgerDetailsAsCategoryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdaccessionCat)))
				return array();

			try {
				return LedgerDetails::LoadArrayByCategory($this->intIdaccessionCat, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LedgerDetailsesAsCategory
		 * @return int
		*/
		public function CountLedgerDetailsesAsCategory() {
			if ((is_null($this->intIdaccessionCat)))
				return 0;

			return LedgerDetails::CountByCategory($this->intIdaccessionCat);
		}

		/**
		 * Associates a LedgerDetailsAsCategory
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function AssociateLedgerDetailsAsCategory(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsCategory on this unsaved AccessionCat.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLedgerDetailsAsCategory on this AccessionCat with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . '
			');
		}

		/**
		 * Unassociates a LedgerDetailsAsCategory
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function UnassociateLedgerDetailsAsCategory(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsCategory on this unsaved AccessionCat.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsCategory on this AccessionCat with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`category` = null
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}

		/**
		 * Unassociates all LedgerDetailsesAsCategory
		 * @return void
		*/
		public function UnassociateAllLedgerDetailsesAsCategory() {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsCategory on this unsaved AccessionCat.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ledger_details`
				SET
					`category` = null
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}

		/**
		 * Deletes an associated LedgerDetailsAsCategory
		 * @param LedgerDetails $objLedgerDetails
		 * @return void
		*/
		public function DeleteAssociatedLedgerDetailsAsCategory(LedgerDetails $objLedgerDetails) {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsCategory on this unsaved AccessionCat.');
			if ((is_null($objLedgerDetails->IdledgerDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsCategory on this AccessionCat with an unsaved LedgerDetails.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`idledger_details` = ' . $objDatabase->SqlVariable($objLedgerDetails->IdledgerDetails) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}

		/**
		 * Deletes all associated LedgerDetailsesAsCategory
		 * @return void
		*/
		public function DeleteAllLedgerDetailsesAsCategory() {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLedgerDetailsAsCategory on this unsaved AccessionCat.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ledger_details`
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}


		// Related Objects' Methods for SerialsAsCategory
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SerialsesAsCategory as an array of Serials objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Serials[]
		*/
		public function GetSerialsAsCategoryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdaccessionCat)))
				return array();

			try {
				return Serials::LoadArrayByCategory($this->intIdaccessionCat, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SerialsesAsCategory
		 * @return int
		*/
		public function CountSerialsesAsCategory() {
			if ((is_null($this->intIdaccessionCat)))
				return 0;

			return Serials::CountByCategory($this->intIdaccessionCat);
		}

		/**
		 * Associates a SerialsAsCategory
		 * @param Serials $objSerials
		 * @return void
		*/
		public function AssociateSerialsAsCategory(Serials $objSerials) {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsCategory on this unsaved AccessionCat.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSerialsAsCategory on this AccessionCat with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . '
			');
		}

		/**
		 * Unassociates a SerialsAsCategory
		 * @param Serials $objSerials
		 * @return void
		*/
		public function UnassociateSerialsAsCategory(Serials $objSerials) {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsCategory on this unsaved AccessionCat.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsCategory on this AccessionCat with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`category` = null
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}

		/**
		 * Unassociates all SerialsesAsCategory
		 * @return void
		*/
		public function UnassociateAllSerialsesAsCategory() {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsCategory on this unsaved AccessionCat.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`serials`
				SET
					`category` = null
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}

		/**
		 * Deletes an associated SerialsAsCategory
		 * @param Serials $objSerials
		 * @return void
		*/
		public function DeleteAssociatedSerialsAsCategory(Serials $objSerials) {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsCategory on this unsaved AccessionCat.');
			if ((is_null($objSerials->Idserials)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsCategory on this AccessionCat with an unsaved Serials.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`idserials` = ' . $objDatabase->SqlVariable($objSerials->Idserials) . ' AND
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
			');
		}

		/**
		 * Deletes all associated SerialsesAsCategory
		 * @return void
		*/
		public function DeleteAllSerialsesAsCategory() {
			if ((is_null($this->intIdaccessionCat)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSerialsAsCategory on this unsaved AccessionCat.');

			// Get the Database Object for this Class
			$objDatabase = AccessionCat::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`serials`
				WHERE
					`category` = ' . $objDatabase->SqlVariable($this->intIdaccessionCat) . '
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
			return "accession_cat";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AccessionCat::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AccessionCat"><sequence>';
			$strToReturn .= '<element name="IdaccessionCat" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="ShortName" type="xsd:string"/>';
			$strToReturn .= '<element name="Note" type="xsd:string"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AccessionCat', $strComplexTypeArray)) {
				$strComplexTypeArray['AccessionCat'] = AccessionCat::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AccessionCat::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AccessionCat();
			if (property_exists($objSoapObject, 'IdaccessionCat'))
				$objToReturn->intIdaccessionCat = $objSoapObject->IdaccessionCat;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'ShortName'))
				$objToReturn->strShortName = $objSoapObject->ShortName;
			if (property_exists($objSoapObject, 'Note'))
				$objToReturn->strNote = $objSoapObject->Note;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AccessionCat::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
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
			$iArray['IdaccessionCat'] = $this->intIdaccessionCat;
			$iArray['Name'] = $this->strName;
			$iArray['ShortName'] = $this->strShortName;
			$iArray['Note'] = $this->strNote;
			$iArray['Code'] = $this->intCode;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdaccessionCat ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdaccessionCat
     * @property-read QQNode $Name
     * @property-read QQNode $ShortName
     * @property-read QQNode $Note
     * @property-read QQNode $Code
     *
     *
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsCategory
     * @property-read QQReverseReferenceNodeSerials $SerialsAsCategory

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAccessionCat extends QQNode {
		protected $strTableName = 'accession_cat';
		protected $strPrimaryKey = 'idaccession_cat';
		protected $strClassName = 'AccessionCat';
		public function __get($strName) {
			switch ($strName) {
				case 'IdaccessionCat':
					return new QQNode('idaccession_cat', 'IdaccessionCat', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'VarChar', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'VarChar', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'LedgerDetailsAsCategory':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsascategory', 'reverse_reference', 'category');
				case 'SerialsAsCategory':
					return new QQReverseReferenceNodeSerials($this, 'serialsascategory', 'reverse_reference', 'category');

				case '_PrimaryKeyNode':
					return new QQNode('idaccession_cat', 'IdaccessionCat', 'Integer', $this);
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
     * @property-read QQNode $IdaccessionCat
     * @property-read QQNode $Name
     * @property-read QQNode $ShortName
     * @property-read QQNode $Note
     * @property-read QQNode $Code
     *
     *
     * @property-read QQReverseReferenceNodeLedgerDetails $LedgerDetailsAsCategory
     * @property-read QQReverseReferenceNodeSerials $SerialsAsCategory

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAccessionCat extends QQReverseReferenceNode {
		protected $strTableName = 'accession_cat';
		protected $strPrimaryKey = 'idaccession_cat';
		protected $strClassName = 'AccessionCat';
		public function __get($strName) {
			switch ($strName) {
				case 'IdaccessionCat':
					return new QQNode('idaccession_cat', 'IdaccessionCat', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'string', $this);
				case 'Note':
					return new QQNode('note', 'Note', 'string', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'LedgerDetailsAsCategory':
					return new QQReverseReferenceNodeLedgerDetails($this, 'ledgerdetailsascategory', 'reverse_reference', 'category');
				case 'SerialsAsCategory':
					return new QQReverseReferenceNodeSerials($this, 'serialsascategory', 'reverse_reference', 'category');

				case '_PrimaryKeyNode':
					return new QQNode('idaccession_cat', 'IdaccessionCat', 'integer', $this);
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
