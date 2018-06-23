<?php
	/**
	 * The abstract NationalityGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Nationality subclass which
	 * extends this NationalityGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Nationality class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idnationality the value for intIdnationality (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property-read Application $_ApplicationAsNatinality the value for the private _objApplicationAsNatinality (Read-Only) if set due to an expansion on the application.natinality reverse relationship
	 * @property-read Application[] $_ApplicationAsNatinalityArray the value for the private _objApplicationAsNatinalityArray (Read-Only) if set due to an ExpandAsArray on the application.natinality reverse relationship
	 * @property-read Profile $_Profile the value for the private _objProfile (Read-Only) if set due to an expansion on the profile.nationality reverse relationship
	 * @property-read Profile[] $_ProfileArray the value for the private _objProfileArray (Read-Only) if set due to an ExpandAsArray on the profile.nationality reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class NationalityGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column nationality.idnationality
		 * @var integer intIdnationality
		 */
		protected $intIdnationality;
		const IdnationalityDefault = null;


		/**
		 * Protected member variable that maps to the database column nationality.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single ApplicationAsNatinality object
		 * (of type Application), if this Nationality object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsNatinality;
		 */
		private $_objApplicationAsNatinality;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsNatinality objects
		 * (of type Application[]), if this Nationality object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsNatinalityArray;
		 */
		private $_objApplicationAsNatinalityArray = null;

		/**
		 * Private member variable that stores a reference to a single Profile object
		 * (of type Profile), if this Nationality object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfile;
		 */
		private $_objProfile;

		/**
		 * Private member variable that stores a reference to an array of Profile objects
		 * (of type Profile[]), if this Nationality object was restored with
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
			$this->intIdnationality = Nationality::IdnationalityDefault;
			$this->strName = Nationality::NameDefault;
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
		 * Load a Nationality from PK Info
		 * @param integer $intIdnationality
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Nationality
		 */
		public static function Load($intIdnationality, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Nationality', $intIdnationality);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Nationality::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Nationality()->Idnationality, $intIdnationality)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Nationalities
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Nationality[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Nationality::QueryArray to perform the LoadAll query
			try {
				return Nationality::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Nationalities
		 * @return int
		 */
		public static function CountAll() {
			// Call Nationality::QueryCount to perform the CountAll query
			return Nationality::QueryCount(QQ::All());
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
			$objDatabase = Nationality::GetDatabase();

			// Create/Build out the QueryBuilder object with Nationality-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'nationality');

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
				Nationality::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('nationality');

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
		 * Static Qcubed Query method to query for a single Nationality object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Nationality the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Nationality::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Nationality object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Nationality::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Nationality::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Nationality objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Nationality[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Nationality::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Nationality::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Nationality::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Nationality objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Nationality::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Nationality::GetDatabase();

			$strQuery = Nationality::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/nationality', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Nationality::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Nationality
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'nationality';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idnationality', $strAliasPrefix . 'idnationality');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idnationality', $strAliasPrefix . 'idnationality');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Nationality from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Nationality::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Nationality
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idnationality';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdnationality == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'nationality__';


						// Expanding reverse references: ApplicationAsNatinality
						$strAlias = $strAliasPrefix . 'applicationasnatinality__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsNatinalityArray)
								$objPreviousItem->_objApplicationAsNatinalityArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsNatinalityArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsNatinalityArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasnatinality__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsNatinalityArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsNatinalityArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasnatinality__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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
						} else if ($strAliasPrefix == 'nationality__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Nationality object
			$objToReturn = new Nationality();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idnationality';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdnationality = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idnationality != $objPreviousItem->Idnationality) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objApplicationAsNatinalityArray);
					$cnt = count($objToReturn->_objApplicationAsNatinalityArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsNatinalityArray, $objToReturn->_objApplicationAsNatinalityArray)) {
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
				$strAliasPrefix = 'nationality__';




			// Check for ApplicationAsNatinality Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasnatinality__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsNatinalityArray)
				$objToReturn->_objApplicationAsNatinalityArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsNatinalityArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasnatinality__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsNatinality = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasnatinality__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
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
		 * Instantiate an array of Nationalities from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Nationality[]
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
					$objItem = Nationality::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Nationality::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Nationality object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Nationality next row resulting from the query
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
			return Nationality::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Nationality object,
		 * by Idnationality Index(es)
		 * @param integer $intIdnationality
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Nationality
		*/
		public static function LoadByIdnationality($intIdnationality, $objOptionalClauses = null) {
			return Nationality::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Nationality()->Idnationality, $intIdnationality)
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
		 * Save this Nationality
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `nationality` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdnationality = $objDatabase->InsertId('nationality', 'idnationality');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`nationality`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idnationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
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
		 * Delete this Nationality
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Nationality with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`nationality`
				WHERE
					`idnationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Nationality ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Nationality', $this->intIdnationality);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Nationalities
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`nationality`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate nationality table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `nationality`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Nationality from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Nationality object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Nationality::Load($this->intIdnationality);

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
				case 'Idnationality':
					/**
					 * Gets the value for intIdnationality (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdnationality;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
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

				case '_ApplicationAsNatinality':
					/**
					 * Gets the value for the private _objApplicationAsNatinality (Read-Only)
					 * if set due to an expansion on the application.natinality reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsNatinality;

				case '_ApplicationAsNatinalityArray':
					/**
					 * Gets the value for the private _objApplicationAsNatinalityArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.natinality reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsNatinalityArray;

				case '_Profile':
					/**
					 * Gets the value for the private _objProfile (Read-Only)
					 * if set due to an expansion on the profile.nationality reverse relationship
					 * @return Profile
					 */
					return $this->_objProfile;

				case '_ProfileArray':
					/**
					 * Gets the value for the private _objProfileArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.nationality reverse relationship
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



		// Related Objects' Methods for ApplicationAsNatinality
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsNatinality as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsNatinalityArray($objOptionalClauses = null) {
			if ((is_null($this->intIdnationality)))
				return array();

			try {
				return Application::LoadArrayByNatinality($this->intIdnationality, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsNatinality
		 * @return int
		*/
		public function CountApplicationsAsNatinality() {
			if ((is_null($this->intIdnationality)))
				return 0;

			return Application::CountByNatinality($this->intIdnationality);
		}

		/**
		 * Associates a ApplicationAsNatinality
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsNatinality(Application $objApplication) {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsNatinality on this unsaved Nationality.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsNatinality on this Nationality with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`natinality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsNatinality
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsNatinality(Application $objApplication) {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsNatinality on this unsaved Nationality.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsNatinality on this Nationality with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`natinality` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`natinality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsNatinality
		 * @return void
		*/
		public function UnassociateAllApplicationsAsNatinality() {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsNatinality on this unsaved Nationality.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`natinality` = null
				WHERE
					`natinality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsNatinality
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsNatinality(Application $objApplication) {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsNatinality on this unsaved Nationality.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsNatinality on this Nationality with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`natinality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsNatinality
		 * @return void
		*/
		public function DeleteAllApplicationsAsNatinality() {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsNatinality on this unsaved Nationality.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`natinality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
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
			if ((is_null($this->intIdnationality)))
				return array();

			try {
				return Profile::LoadArrayByNationality($this->intIdnationality, $objOptionalClauses);
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
			if ((is_null($this->intIdnationality)))
				return 0;

			return Profile::CountByNationality($this->intIdnationality);
		}

		/**
		 * Associates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this unsaved Nationality.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this Nationality with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`nationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
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
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Nationality.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this Nationality with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`nationality` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`nationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
			');
		}

		/**
		 * Unassociates all Profiles
		 * @return void
		*/
		public function UnassociateAllProfiles() {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Nationality.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`nationality` = null
				WHERE
					`nationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
			');
		}

		/**
		 * Deletes an associated Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfile(Profile $objProfile) {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Nationality.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this Nationality with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`nationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
			');
		}

		/**
		 * Deletes all associated Profiles
		 * @return void
		*/
		public function DeleteAllProfiles() {
			if ((is_null($this->intIdnationality)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved Nationality.');

			// Get the Database Object for this Class
			$objDatabase = Nationality::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`nationality` = ' . $objDatabase->SqlVariable($this->intIdnationality) . '
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
			return "nationality";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Nationality::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Nationality"><sequence>';
			$strToReturn .= '<element name="Idnationality" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Nationality', $strComplexTypeArray)) {
				$strComplexTypeArray['Nationality'] = Nationality::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Nationality::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Nationality();
			if (property_exists($objSoapObject, 'Idnationality'))
				$objToReturn->intIdnationality = $objSoapObject->Idnationality;
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
				array_push($objArrayToReturn, Nationality::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Idnationality'] = $this->intIdnationality;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdnationality ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idnationality
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsNatinality
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeNationality extends QQNode {
		protected $strTableName = 'nationality';
		protected $strPrimaryKey = 'idnationality';
		protected $strClassName = 'Nationality';
		public function __get($strName) {
			switch ($strName) {
				case 'Idnationality':
					return new QQNode('idnationality', 'Idnationality', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'ApplicationAsNatinality':
					return new QQReverseReferenceNodeApplication($this, 'applicationasnatinality', 'reverse_reference', 'natinality');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'nationality');

				case '_PrimaryKeyNode':
					return new QQNode('idnationality', 'Idnationality', 'Integer', $this);
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
     * @property-read QQNode $Idnationality
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsNatinality
     * @property-read QQReverseReferenceNodeProfile $Profile

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeNationality extends QQReverseReferenceNode {
		protected $strTableName = 'nationality';
		protected $strPrimaryKey = 'idnationality';
		protected $strClassName = 'Nationality';
		public function __get($strName) {
			switch ($strName) {
				case 'Idnationality':
					return new QQNode('idnationality', 'Idnationality', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'ApplicationAsNatinality':
					return new QQReverseReferenceNodeApplication($this, 'applicationasnatinality', 'reverse_reference', 'natinality');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'nationality');

				case '_PrimaryKeyNode':
					return new QQNode('idnationality', 'Idnationality', 'integer', $this);
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
