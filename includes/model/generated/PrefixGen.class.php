<?php
	/**
	 * The abstract PrefixGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Prefix subclass which
	 * extends this PrefixGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Prefix class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idprefix the value for intIdprefix (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $ShortName the value for strShortName 
	 * @property-read Address $_Address the value for the private _objAddress (Read-Only) if set due to an expansion on the address.prefix reverse relationship
	 * @property-read Address[] $_AddressArray the value for the private _objAddressArray (Read-Only) if set due to an ExpandAsArray on the address.prefix reverse relationship
	 * @property-read Inquiry $_Inquiry the value for the private _objInquiry (Read-Only) if set due to an expansion on the inquiry.prefix reverse relationship
	 * @property-read Inquiry[] $_InquiryArray the value for the private _objInquiryArray (Read-Only) if set due to an ExpandAsArray on the inquiry.prefix reverse relationship
	 * @property-read Profile $_Profile the value for the private _objProfile (Read-Only) if set due to an expansion on the profile.prefix reverse relationship
	 * @property-read Profile[] $_ProfileArray the value for the private _objProfileArray (Read-Only) if set due to an ExpandAsArray on the profile.prefix reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PrefixGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column prefix.idprefix
		 * @var integer intIdprefix
		 */
		protected $intIdprefix;
		const IdprefixDefault = null;


		/**
		 * Protected member variable that maps to the database column prefix.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column prefix.short_name
		 * @var string strShortName
		 */
		protected $strShortName;
		const ShortNameMaxLength = 45;
		const ShortNameDefault = null;


		/**
		 * Private member variable that stores a reference to a single Address object
		 * (of type Address), if this Prefix object was restored with
		 * an expansion on the address association table.
		 * @var Address _objAddress;
		 */
		private $_objAddress;

		/**
		 * Private member variable that stores a reference to an array of Address objects
		 * (of type Address[]), if this Prefix object was restored with
		 * an ExpandAsArray on the address association table.
		 * @var Address[] _objAddressArray;
		 */
		private $_objAddressArray = null;

		/**
		 * Private member variable that stores a reference to a single Inquiry object
		 * (of type Inquiry), if this Prefix object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiry;
		 */
		private $_objInquiry;

		/**
		 * Private member variable that stores a reference to an array of Inquiry objects
		 * (of type Inquiry[]), if this Prefix object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryArray;
		 */
		private $_objInquiryArray = null;

		/**
		 * Private member variable that stores a reference to a single Profile object
		 * (of type Profile), if this Prefix object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfile;
		 */
		private $_objProfile;

		/**
		 * Private member variable that stores a reference to an array of Profile objects
		 * (of type Profile[]), if this Prefix object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileArray;
		 */
		private $_objProfileArray = null;

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
			$this->intIdprefix = Prefix::IdprefixDefault;
			$this->strName = Prefix::NameDefault;
			$this->strShortName = Prefix::ShortNameDefault;
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
		 * Load a Prefix from PK Info
		 * @param integer $intIdprefix
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Prefix
		 */
		public static function Load($intIdprefix, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Prefix', $intIdprefix);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Prefix::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Prefix()->Idprefix, $intIdprefix)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Prefixes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Prefix[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Prefix::QueryArray to perform the LoadAll query
			try {
				return Prefix::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Prefixes
		 * @return int
		 */
		public static function CountAll() {
			// Call Prefix::QueryCount to perform the CountAll query
			return Prefix::QueryCount(QQ::All());
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
			$objDatabase = Prefix::GetDatabase();

			// Create/Build out the QueryBuilder object with Prefix-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'prefix');

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
				Prefix::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('prefix');

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
		 * Static Qcubed Query method to query for a single Prefix object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Prefix the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Prefix::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Prefix object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Prefix::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Prefix::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Prefix objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Prefix[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Prefix::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Prefix::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Prefix::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Prefix objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Prefix::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Prefix::GetDatabase();

			$strQuery = Prefix::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/prefix', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Prefix::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Prefix
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'prefix';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idprefix', $strAliasPrefix . 'idprefix');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idprefix', $strAliasPrefix . 'idprefix');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'short_name', $strAliasPrefix . 'short_name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Prefix from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Prefix::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Prefix
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idprefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdprefix == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'prefix__';


						// Expanding reverse references: Address
						$strAlias = $strAliasPrefix . 'address__idaddress';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAddressArray)
								$objPreviousItem->_objAddressArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAddressArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAddressArray;
								$objChildItem = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAddressArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Inquiry
						$strAlias = $strAliasPrefix . 'inquiry__idinquiry';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objInquiryArray)
								$objPreviousItem->_objInquiryArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objInquiryArray)) {
								$objPreviousChildItems = $objPreviousItem->_objInquiryArray;
								$objChildItem = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiry__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objInquiryArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objInquiryArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Profile
						$strAlias = $strAliasPrefix . 'profile__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileArray)
								$objPreviousItem->_objProfileArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'prefix__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Prefix object
			$objToReturn = new Prefix();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idprefix';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdprefix = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'short_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idprefix != $objPreviousItem->Idprefix) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAddressArray);
					$cnt = count($objToReturn->_objAddressArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAddressArray, $objToReturn->_objAddressArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objInquiryArray);
					$cnt = count($objToReturn->_objInquiryArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objInquiryArray, $objToReturn->_objInquiryArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileArray);
					$cnt = count($objToReturn->_objProfileArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileArray, $objToReturn->_objProfileArray)) {
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
				$strAliasPrefix = 'prefix__';




			// Check for Address Virtual Binding
			$strAlias = $strAliasPrefix . 'address__idaddress';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAddressArray)
				$objToReturn->_objAddressArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAddressArray[] = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAddress = Address::InstantiateDbRow($objDbRow, $strAliasPrefix . 'address__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Inquiry Virtual Binding
			$strAlias = $strAliasPrefix . 'inquiry__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objInquiryArray)
				$objToReturn->_objInquiryArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objInquiryArray[] = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objInquiry = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Profile Virtual Binding
			$strAlias = $strAliasPrefix . 'profile__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileArray)
				$objToReturn->_objProfileArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfile = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Prefixes from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Prefix[]
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
					$objItem = Prefix::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Prefix::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Prefix object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Prefix next row resulting from the query
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
			return Prefix::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Prefix object,
		 * by Idprefix Index(es)
		 * @param integer $intIdprefix
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Prefix
		*/
		public static function LoadByIdprefix($intIdprefix, $objOptionalClauses = null) {
			return Prefix::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Prefix()->Idprefix, $intIdprefix)
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
		 * Save this Prefix
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `prefix` (
							`name`,
							`short_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strShortName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdprefix = $objDatabase->InsertId('prefix', 'idprefix');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`prefix`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`short_name` = ' . $objDatabase->SqlVariable($this->strShortName) . '
						WHERE
							`idprefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
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
		 * Delete this Prefix
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Prefix with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`prefix`
				WHERE
					`idprefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Prefix ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Prefix', $this->intIdprefix);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Prefixes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`prefix`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate prefix table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `prefix`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Prefix from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Prefix object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Prefix::Load($this->intIdprefix);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strShortName = $objReloaded->strShortName;
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
				case 'Idprefix':
					/**
					 * Gets the value for intIdprefix (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdprefix;

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


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Address':
					/**
					 * Gets the value for the private _objAddress (Read-Only)
					 * if set due to an expansion on the address.prefix reverse relationship
					 * @return Address
					 */
					return $this->_objAddress;

				case '_AddressArray':
					/**
					 * Gets the value for the private _objAddressArray (Read-Only)
					 * if set due to an ExpandAsArray on the address.prefix reverse relationship
					 * @return Address[]
					 */
					return $this->_objAddressArray;

				case '_Inquiry':
					/**
					 * Gets the value for the private _objInquiry (Read-Only)
					 * if set due to an expansion on the inquiry.prefix reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiry;

				case '_InquiryArray':
					/**
					 * Gets the value for the private _objInquiryArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.prefix reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryArray;

				case '_Profile':
					/**
					 * Gets the value for the private _objProfile (Read-Only)
					 * if set due to an expansion on the profile.prefix reverse relationship
					 * @return Profile
					 */
					return $this->_objProfile;

				case '_ProfileArray':
					/**
					 * Gets the value for the private _objProfileArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.prefix reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileArray;


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



		// Related Objects' Methods for Address
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Addresses as an array of Address objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Address[]
		*/
		public function GetAddressArray($objOptionalClauses = null) {
			if ((is_null($this->intIdprefix)))
				return array();

			try {
				return Address::LoadArrayByPrefix($this->intIdprefix, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Addresses
		 * @return int
		*/
		public function CountAddresses() {
			if ((is_null($this->intIdprefix)))
				return 0;

			return Address::CountByPrefix($this->intIdprefix);
		}

		/**
		 * Associates a Address
		 * @param Address $objAddress
		 * @return void
		*/
		public function AssociateAddress(Address $objAddress) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this unsaved Prefix.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAddress on this Prefix with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . '
			');
		}

		/**
		 * Unassociates a Address
		 * @param Address $objAddress
		 * @return void
		*/
		public function UnassociateAddress(Address $objAddress) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Prefix.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Prefix with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`prefix` = null
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Unassociates all Addresses
		 * @return void
		*/
		public function UnassociateAllAddresses() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Prefix.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`address`
				SET
					`prefix` = null
				WHERE
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Deletes an associated Address
		 * @param Address $objAddress
		 * @return void
		*/
		public function DeleteAssociatedAddress(Address $objAddress) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Prefix.');
			if ((is_null($objAddress->Idaddress)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this Prefix with an unsaved Address.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`idaddress` = ' . $objDatabase->SqlVariable($objAddress->Idaddress) . ' AND
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Deletes all associated Addresses
		 * @return void
		*/
		public function DeleteAllAddresses() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAddress on this unsaved Prefix.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`address`
				WHERE
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}


		// Related Objects' Methods for Inquiry
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Inquiries as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdprefix)))
				return array();

			try {
				return Inquiry::LoadArrayByPrefix($this->intIdprefix, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Inquiries
		 * @return int
		*/
		public function CountInquiries() {
			if ((is_null($this->intIdprefix)))
				return 0;

			return Inquiry::CountByPrefix($this->intIdprefix);
		}

		/**
		 * Associates a Inquiry
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiry(Inquiry $objInquiry) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiry on this unsaved Prefix.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiry on this Prefix with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . '
			');
		}

		/**
		 * Unassociates a Inquiry
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function UnassociateInquiry(Inquiry $objInquiry) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved Prefix.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this Prefix with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`prefix` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Unassociates all Inquiries
		 * @return void
		*/
		public function UnassociateAllInquiries() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved Prefix.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`prefix` = null
				WHERE
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Deletes an associated Inquiry
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiry(Inquiry $objInquiry) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved Prefix.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this Prefix with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Deletes all associated Inquiries
		 * @return void
		*/
		public function DeleteAllInquiries() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved Prefix.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}


		// Related Objects' Methods for Profile
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Profiles as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileArray($objOptionalClauses = null) {
			if ((is_null($this->intIdprefix)))
				return array();

			try {
				return Profile::LoadArrayByPrefix($this->intIdprefix, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Profiles
		 * @return int
		*/
		public function CountProfiles() {
			if ((is_null($this->intIdprefix)))
				return 0;

			return Profile::CountByPrefix($this->intIdprefix);
		}

		/**
		 * Associates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this unsaved Prefix.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this Prefix with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Prefix.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this Prefix with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`prefix` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Unassociates all Profiles
		 * @return void
		*/
		public function UnassociateAllProfiles() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Prefix.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`prefix` = null
				WHERE
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Deletes an associated Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfile(Profile $objProfile) {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Prefix.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this Prefix with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
			');
		}

		/**
		 * Deletes all associated Profiles
		 * @return void
		*/
		public function DeleteAllProfiles() {
			if ((is_null($this->intIdprefix)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Prefix.');

			// Get the Database Object for this Class
			$objDatabase = Prefix::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`prefix` = ' . $objDatabase->SqlVariable($this->intIdprefix) . '
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
			return "prefix";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Prefix::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Prefix"><sequence>';
			$strToReturn .= '<element name="Idprefix" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="ShortName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Prefix', $strComplexTypeArray)) {
				$strComplexTypeArray['Prefix'] = Prefix::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Prefix::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Prefix();
			if (property_exists($objSoapObject, 'Idprefix'))
				$objToReturn->intIdprefix = $objSoapObject->Idprefix;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'ShortName'))
				$objToReturn->strShortName = $objSoapObject->ShortName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Prefix::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Idprefix'] = $this->intIdprefix;
			$iArray['Name'] = $this->strName;
			$iArray['ShortName'] = $this->strShortName;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdprefix ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idprefix
     * @property-read QQNode $Name
     * @property-read QQNode $ShortName
     *
     *
     * @property-read QQReverseReferenceNodeAddress $Address
     * @property-read QQReverseReferenceNodeInquiry $Inquiry
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePrefix extends QQNode {
		protected $strTableName = 'prefix';
		protected $strPrimaryKey = 'idprefix';
		protected $strClassName = 'Prefix';
		public function __get($strName) {
			switch ($strName) {
				case 'Idprefix':
					return new QQNode('idprefix', 'Idprefix', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'VarChar', $this);
				case 'Address':
					return new QQReverseReferenceNodeAddress($this, 'address', 'reverse_reference', 'prefix');
				case 'Inquiry':
					return new QQReverseReferenceNodeInquiry($this, 'inquiry', 'reverse_reference', 'prefix');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'prefix');

				case '_PrimaryKeyNode':
					return new QQNode('idprefix', 'Idprefix', 'Integer', $this);
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
     * @property-read QQNode $Idprefix
     * @property-read QQNode $Name
     * @property-read QQNode $ShortName
     *
     *
     * @property-read QQReverseReferenceNodeAddress $Address
     * @property-read QQReverseReferenceNodeInquiry $Inquiry
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePrefix extends QQReverseReferenceNode {
		protected $strTableName = 'prefix';
		protected $strPrimaryKey = 'idprefix';
		protected $strClassName = 'Prefix';
		public function __get($strName) {
			switch ($strName) {
				case 'Idprefix':
					return new QQNode('idprefix', 'Idprefix', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'string', $this);
				case 'Address':
					return new QQReverseReferenceNodeAddress($this, 'address', 'reverse_reference', 'prefix');
				case 'Inquiry':
					return new QQReverseReferenceNodeInquiry($this, 'inquiry', 'reverse_reference', 'prefix');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'prefix');

				case '_PrimaryKeyNode':
					return new QQNode('idprefix', 'Idprefix', 'integer', $this);
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
