<?php
	/**
	 * The abstract AdmissionModeGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AdmissionMode subclass which
	 * extends this AdmissionModeGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AdmissionMode class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdadmissionMode the value for intIdadmissionMode (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property-read Inquiry $_Inquiry the value for the private _objInquiry (Read-Only) if set due to an expansion on the inquiry.admission_mode reverse relationship
	 * @property-read Inquiry[] $_InquiryArray the value for the private _objInquiryArray (Read-Only) if set due to an ExpandAsArray on the inquiry.admission_mode reverse relationship
	 * @property-read Profile $_Profile the value for the private _objProfile (Read-Only) if set due to an expansion on the profile.admission_mode reverse relationship
	 * @property-read Profile[] $_ProfileArray the value for the private _objProfileArray (Read-Only) if set due to an ExpandAsArray on the profile.admission_mode reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AdmissionModeGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column admission_mode.idadmission_mode
		 * @var integer intIdadmissionMode
		 */
		protected $intIdadmissionMode;
		const IdadmissionModeDefault = null;


		/**
		 * Protected member variable that maps to the database column admission_mode.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single Inquiry object
		 * (of type Inquiry), if this AdmissionMode object was restored with
		 * an expansion on the inquiry association table.
		 * @var Inquiry _objInquiry;
		 */
		private $_objInquiry;

		/**
		 * Private member variable that stores a reference to an array of Inquiry objects
		 * (of type Inquiry[]), if this AdmissionMode object was restored with
		 * an ExpandAsArray on the inquiry association table.
		 * @var Inquiry[] _objInquiryArray;
		 */
		private $_objInquiryArray = null;

		/**
		 * Private member variable that stores a reference to a single Profile object
		 * (of type Profile), if this AdmissionMode object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfile;
		 */
		private $_objProfile;

		/**
		 * Private member variable that stores a reference to an array of Profile objects
		 * (of type Profile[]), if this AdmissionMode object was restored with
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
			$this->intIdadmissionMode = AdmissionMode::IdadmissionModeDefault;
			$this->strName = AdmissionMode::NameDefault;
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
		 * Load a AdmissionMode from PK Info
		 * @param integer $intIdadmissionMode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AdmissionMode
		 */
		public static function Load($intIdadmissionMode, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AdmissionMode', $intIdadmissionMode);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AdmissionMode::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AdmissionMode()->IdadmissionMode, $intIdadmissionMode)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AdmissionModes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AdmissionMode[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AdmissionMode::QueryArray to perform the LoadAll query
			try {
				return AdmissionMode::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AdmissionModes
		 * @return int
		 */
		public static function CountAll() {
			// Call AdmissionMode::QueryCount to perform the CountAll query
			return AdmissionMode::QueryCount(QQ::All());
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
			$objDatabase = AdmissionMode::GetDatabase();

			// Create/Build out the QueryBuilder object with AdmissionMode-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'admission_mode');

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
				AdmissionMode::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('admission_mode');

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
		 * Static Qcubed Query method to query for a single AdmissionMode object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AdmissionMode the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AdmissionMode::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AdmissionMode object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AdmissionMode::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AdmissionMode::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AdmissionMode objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AdmissionMode[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AdmissionMode::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AdmissionMode::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AdmissionMode::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AdmissionMode objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AdmissionMode::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AdmissionMode::GetDatabase();

			$strQuery = AdmissionMode::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/admissionmode', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AdmissionMode::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AdmissionMode
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'admission_mode';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idadmission_mode', $strAliasPrefix . 'idadmission_mode');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idadmission_mode', $strAliasPrefix . 'idadmission_mode');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AdmissionMode from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AdmissionMode::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AdmissionMode
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idadmission_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdadmissionMode == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'admission_mode__';


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
						} else if ($strAliasPrefix == 'admission_mode__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AdmissionMode object
			$objToReturn = new AdmissionMode();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idadmission_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdadmissionMode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdadmissionMode != $objPreviousItem->IdadmissionMode) {
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
				$strAliasPrefix = 'admission_mode__';




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
		 * Instantiate an array of AdmissionModes from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AdmissionMode[]
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
					$objItem = AdmissionMode::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AdmissionMode::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AdmissionMode object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AdmissionMode next row resulting from the query
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
			return AdmissionMode::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AdmissionMode object,
		 * by IdadmissionMode Index(es)
		 * @param integer $intIdadmissionMode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AdmissionMode
		*/
		public static function LoadByIdadmissionMode($intIdadmissionMode, $objOptionalClauses = null) {
			return AdmissionMode::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AdmissionMode()->IdadmissionMode, $intIdadmissionMode)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single AdmissionMode object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AdmissionMode
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return AdmissionMode::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AdmissionMode()->Name, $strName)
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
		 * Save this AdmissionMode
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `admission_mode` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdadmissionMode = $objDatabase->InsertId('admission_mode', 'idadmission_mode');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`admission_mode`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idadmission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
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
		 * Delete this AdmissionMode
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AdmissionMode with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`admission_mode`
				WHERE
					`idadmission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AdmissionMode ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AdmissionMode', $this->intIdadmissionMode);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AdmissionModes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`admission_mode`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate admission_mode table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `admission_mode`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AdmissionMode from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AdmissionMode object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AdmissionMode::Load($this->intIdadmissionMode);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
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
				case 'IdadmissionMode':
					/**
					 * Gets the value for intIdadmissionMode (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdadmissionMode;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Inquiry':
					/**
					 * Gets the value for the private _objInquiry (Read-Only)
					 * if set due to an expansion on the inquiry.admission_mode reverse relationship
					 * @return Inquiry
					 */
					return $this->_objInquiry;

				case '_InquiryArray':
					/**
					 * Gets the value for the private _objInquiryArray (Read-Only)
					 * if set due to an ExpandAsArray on the inquiry.admission_mode reverse relationship
					 * @return Inquiry[]
					 */
					return $this->_objInquiryArray;

				case '_Profile':
					/**
					 * Gets the value for the private _objProfile (Read-Only)
					 * if set due to an expansion on the profile.admission_mode reverse relationship
					 * @return Profile
					 */
					return $this->_objProfile;

				case '_ProfileArray':
					/**
					 * Gets the value for the private _objProfileArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.admission_mode reverse relationship
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



		// Related Objects' Methods for Inquiry
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Inquiries as an array of Inquiry objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Inquiry[]
		*/
		public function GetInquiryArray($objOptionalClauses = null) {
			if ((is_null($this->intIdadmissionMode)))
				return array();

			try {
				return Inquiry::LoadArrayByAdmissionMode($this->intIdadmissionMode, $objOptionalClauses);
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
			if ((is_null($this->intIdadmissionMode)))
				return 0;

			return Inquiry::CountByAdmissionMode($this->intIdadmissionMode);
		}

		/**
		 * Associates a Inquiry
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function AssociateInquiry(Inquiry $objInquiry) {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiry on this unsaved AdmissionMode.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateInquiry on this AdmissionMode with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
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
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved AdmissionMode.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this AdmissionMode with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`admission_mode` = null
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
			');
		}

		/**
		 * Unassociates all Inquiries
		 * @return void
		*/
		public function UnassociateAllInquiries() {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved AdmissionMode.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`inquiry`
				SET
					`admission_mode` = null
				WHERE
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
			');
		}

		/**
		 * Deletes an associated Inquiry
		 * @param Inquiry $objInquiry
		 * @return void
		*/
		public function DeleteAssociatedInquiry(Inquiry $objInquiry) {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved AdmissionMode.');
			if ((is_null($objInquiry->Idinquiry)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this AdmissionMode with an unsaved Inquiry.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`idinquiry` = ' . $objDatabase->SqlVariable($objInquiry->Idinquiry) . ' AND
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
			');
		}

		/**
		 * Deletes all associated Inquiries
		 * @return void
		*/
		public function DeleteAllInquiries() {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateInquiry on this unsaved AdmissionMode.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`inquiry`
				WHERE
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
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
			if ((is_null($this->intIdadmissionMode)))
				return array();

			try {
				return Profile::LoadArrayByAdmissionMode($this->intIdadmissionMode, $objOptionalClauses);
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
			if ((is_null($this->intIdadmissionMode)))
				return 0;

			return Profile::CountByAdmissionMode($this->intIdadmissionMode);
		}

		/**
		 * Associates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this unsaved AdmissionMode.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this AdmissionMode with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
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
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved AdmissionMode.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this AdmissionMode with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`admission_mode` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
			');
		}

		/**
		 * Unassociates all Profiles
		 * @return void
		*/
		public function UnassociateAllProfiles() {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved AdmissionMode.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`admission_mode` = null
				WHERE
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
			');
		}

		/**
		 * Deletes an associated Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfile(Profile $objProfile) {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved AdmissionMode.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this AdmissionMode with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
			');
		}

		/**
		 * Deletes all associated Profiles
		 * @return void
		*/
		public function DeleteAllProfiles() {
			if ((is_null($this->intIdadmissionMode)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved AdmissionMode.');

			// Get the Database Object for this Class
			$objDatabase = AdmissionMode::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`admission_mode` = ' . $objDatabase->SqlVariable($this->intIdadmissionMode) . '
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
			return "admission_mode";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AdmissionMode::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AdmissionMode"><sequence>';
			$strToReturn .= '<element name="IdadmissionMode" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AdmissionMode', $strComplexTypeArray)) {
				$strComplexTypeArray['AdmissionMode'] = AdmissionMode::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AdmissionMode::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AdmissionMode();
			if (property_exists($objSoapObject, 'IdadmissionMode'))
				$objToReturn->intIdadmissionMode = $objSoapObject->IdadmissionMode;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AdmissionMode::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdadmissionMode'] = $this->intIdadmissionMode;
			$iArray['Name'] = $this->strName;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdadmissionMode ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdadmissionMode
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeInquiry $Inquiry
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAdmissionMode extends QQNode {
		protected $strTableName = 'admission_mode';
		protected $strPrimaryKey = 'idadmission_mode';
		protected $strClassName = 'AdmissionMode';
		public function __get($strName) {
			switch ($strName) {
				case 'IdadmissionMode':
					return new QQNode('idadmission_mode', 'IdadmissionMode', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Inquiry':
					return new QQReverseReferenceNodeInquiry($this, 'inquiry', 'reverse_reference', 'admission_mode');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'admission_mode');

				case '_PrimaryKeyNode':
					return new QQNode('idadmission_mode', 'IdadmissionMode', 'Integer', $this);
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
     * @property-read QQNode $IdadmissionMode
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeInquiry $Inquiry
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAdmissionMode extends QQReverseReferenceNode {
		protected $strTableName = 'admission_mode';
		protected $strPrimaryKey = 'idadmission_mode';
		protected $strClassName = 'AdmissionMode';
		public function __get($strName) {
			switch ($strName) {
				case 'IdadmissionMode':
					return new QQNode('idadmission_mode', 'IdadmissionMode', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Inquiry':
					return new QQReverseReferenceNodeInquiry($this, 'inquiry', 'reverse_reference', 'admission_mode');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'admission_mode');

				case '_PrimaryKeyNode':
					return new QQNode('idadmission_mode', 'IdadmissionMode', 'integer', $this);
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
