<?php
	/**
	 * The abstract CertificateGroupGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CertificateGroup subclass which
	 * extends this CertificateGroupGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CertificateGroup class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdcertificateGroup the value for intIdcertificateGroup (Read-Only PK)
	 * @property integer $Code the value for intCode (Not Null)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $MarathiName the value for strMarathiName (Not Null)
	 * @property-read CertificateTemplet $_CertificateTempletAsGroup the value for the private _objCertificateTempletAsGroup (Read-Only) if set due to an expansion on the certificate_templet.group reverse relationship
	 * @property-read CertificateTemplet[] $_CertificateTempletAsGroupArray the value for the private _objCertificateTempletAsGroupArray (Read-Only) if set due to an ExpandAsArray on the certificate_templet.group reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CertificateGroupGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column certificate_group.idcertificate_group
		 * @var integer intIdcertificateGroup
		 */
		protected $intIdcertificateGroup;
		const IdcertificateGroupDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_group.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_group.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_group.marathi_name
		 * @var string strMarathiName
		 */
		protected $strMarathiName;
		const MarathiNameDefault = null;


		/**
		 * Private member variable that stores a reference to a single CertificateTempletAsGroup object
		 * (of type CertificateTemplet), if this CertificateGroup object was restored with
		 * an expansion on the certificate_templet association table.
		 * @var CertificateTemplet _objCertificateTempletAsGroup;
		 */
		private $_objCertificateTempletAsGroup;

		/**
		 * Private member variable that stores a reference to an array of CertificateTempletAsGroup objects
		 * (of type CertificateTemplet[]), if this CertificateGroup object was restored with
		 * an ExpandAsArray on the certificate_templet association table.
		 * @var CertificateTemplet[] _objCertificateTempletAsGroupArray;
		 */
		private $_objCertificateTempletAsGroupArray = null;

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
			$this->intIdcertificateGroup = CertificateGroup::IdcertificateGroupDefault;
			$this->intCode = CertificateGroup::CodeDefault;
			$this->strName = CertificateGroup::NameDefault;
			$this->strMarathiName = CertificateGroup::MarathiNameDefault;
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
		 * Load a CertificateGroup from PK Info
		 * @param integer $intIdcertificateGroup
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateGroup
		 */
		public static function Load($intIdcertificateGroup, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CertificateGroup', $intIdcertificateGroup);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = CertificateGroup::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateGroup()->IdcertificateGroup, $intIdcertificateGroup)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all CertificateGroups
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateGroup[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CertificateGroup::QueryArray to perform the LoadAll query
			try {
				return CertificateGroup::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CertificateGroups
		 * @return int
		 */
		public static function CountAll() {
			// Call CertificateGroup::QueryCount to perform the CountAll query
			return CertificateGroup::QueryCount(QQ::All());
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
			$objDatabase = CertificateGroup::GetDatabase();

			// Create/Build out the QueryBuilder object with CertificateGroup-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'certificate_group');

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
				CertificateGroup::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('certificate_group');

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
		 * Static Qcubed Query method to query for a single CertificateGroup object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CertificateGroup the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateGroup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new CertificateGroup object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CertificateGroup::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CertificateGroup::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of CertificateGroup objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CertificateGroup[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateGroup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CertificateGroup::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CertificateGroup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of CertificateGroup objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateGroup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CertificateGroup::GetDatabase();

			$strQuery = CertificateGroup::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/certificategroup', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = CertificateGroup::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CertificateGroup
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'certificate_group';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idcertificate_group', $strAliasPrefix . 'idcertificate_group');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idcertificate_group', $strAliasPrefix . 'idcertificate_group');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'marathi_name', $strAliasPrefix . 'marathi_name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CertificateGroup from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CertificateGroup::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CertificateGroup
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idcertificate_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdcertificateGroup == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'certificate_group__';


						// Expanding reverse references: CertificateTempletAsGroup
						$strAlias = $strAliasPrefix . 'certificatetempletasgroup__idcertificate_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCertificateTempletAsGroupArray)
								$objPreviousItem->_objCertificateTempletAsGroupArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCertificateTempletAsGroupArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCertificateTempletAsGroupArray;
								$objChildItem = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletasgroup__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCertificateTempletAsGroupArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCertificateTempletAsGroupArray[] = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletasgroup__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'certificate_group__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the CertificateGroup object
			$objToReturn = new CertificateGroup();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idcertificate_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdcertificateGroup = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'marathi_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMarathiName = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdcertificateGroup != $objPreviousItem->IdcertificateGroup) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objCertificateTempletAsGroupArray);
					$cnt = count($objToReturn->_objCertificateTempletAsGroupArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCertificateTempletAsGroupArray, $objToReturn->_objCertificateTempletAsGroupArray)) {
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
				$strAliasPrefix = 'certificate_group__';




			// Check for CertificateTempletAsGroup Virtual Binding
			$strAlias = $strAliasPrefix . 'certificatetempletasgroup__idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCertificateTempletAsGroupArray)
				$objToReturn->_objCertificateTempletAsGroupArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCertificateTempletAsGroupArray[] = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletasgroup__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCertificateTempletAsGroup = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetempletasgroup__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of CertificateGroups from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CertificateGroup[]
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
					$objItem = CertificateGroup::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CertificateGroup::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single CertificateGroup object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CertificateGroup next row resulting from the query
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
			return CertificateGroup::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single CertificateGroup object,
		 * by IdcertificateGroup Index(es)
		 * @param integer $intIdcertificateGroup
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateGroup
		*/
		public static function LoadByIdcertificateGroup($intIdcertificateGroup, $objOptionalClauses = null) {
			return CertificateGroup::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateGroup()->IdcertificateGroup, $intIdcertificateGroup)
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
		 * Save this CertificateGroup
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `certificate_group` (
							`code`,
							`name`,
							`marathi_name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCode) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strMarathiName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdcertificateGroup = $objDatabase->InsertId('certificate_group', 'idcertificate_group');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`certificate_group`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`marathi_name` = ' . $objDatabase->SqlVariable($this->strMarathiName) . '
						WHERE
							`idcertificate_group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '
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
		 * Delete this CertificateGroup
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdcertificateGroup)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CertificateGroup with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_group`
				WHERE
					`idcertificate_group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this CertificateGroup ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CertificateGroup', $this->intIdcertificateGroup);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all CertificateGroups
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_group`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate certificate_group table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `certificate_group`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this CertificateGroup from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CertificateGroup object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = CertificateGroup::Load($this->intIdcertificateGroup);

			// Update $this's local variables to match
			$this->intCode = $objReloaded->intCode;
			$this->strName = $objReloaded->strName;
			$this->strMarathiName = $objReloaded->strMarathiName;
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
				case 'IdcertificateGroup':
					/**
					 * Gets the value for intIdcertificateGroup (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdcertificateGroup;

				case 'Code':
					/**
					 * Gets the value for intCode (Not Null)
					 * @return integer
					 */
					return $this->intCode;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'MarathiName':
					/**
					 * Gets the value for strMarathiName (Not Null)
					 * @return string
					 */
					return $this->strMarathiName;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CertificateTempletAsGroup':
					/**
					 * Gets the value for the private _objCertificateTempletAsGroup (Read-Only)
					 * if set due to an expansion on the certificate_templet.group reverse relationship
					 * @return CertificateTemplet
					 */
					return $this->_objCertificateTempletAsGroup;

				case '_CertificateTempletAsGroupArray':
					/**
					 * Gets the value for the private _objCertificateTempletAsGroupArray (Read-Only)
					 * if set due to an ExpandAsArray on the certificate_templet.group reverse relationship
					 * @return CertificateTemplet[]
					 */
					return $this->_objCertificateTempletAsGroupArray;


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
				case 'Code':
					/**
					 * Sets the value for intCode (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'MarathiName':
					/**
					 * Sets the value for strMarathiName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMarathiName = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for CertificateTempletAsGroup
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CertificateTempletsAsGroup as an array of CertificateTemplet objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet[]
		*/
		public function GetCertificateTempletAsGroupArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcertificateGroup)))
				return array();

			try {
				return CertificateTemplet::LoadArrayByGroup($this->intIdcertificateGroup, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CertificateTempletsAsGroup
		 * @return int
		*/
		public function CountCertificateTempletsAsGroup() {
			if ((is_null($this->intIdcertificateGroup)))
				return 0;

			return CertificateTemplet::CountByGroup($this->intIdcertificateGroup);
		}

		/**
		 * Associates a CertificateTempletAsGroup
		 * @param CertificateTemplet $objCertificateTemplet
		 * @return void
		*/
		public function AssociateCertificateTempletAsGroup(CertificateTemplet $objCertificateTemplet) {
			if ((is_null($this->intIdcertificateGroup)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletAsGroup on this unsaved CertificateGroup.');
			if ((is_null($objCertificateTemplet->IdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletAsGroup on this CertificateGroup with an unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet`
				SET
					`group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTemplet->IdcertificateTemplet) . '
			');
		}

		/**
		 * Unassociates a CertificateTempletAsGroup
		 * @param CertificateTemplet $objCertificateTemplet
		 * @return void
		*/
		public function UnassociateCertificateTempletAsGroup(CertificateTemplet $objCertificateTemplet) {
			if ((is_null($this->intIdcertificateGroup)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsGroup on this unsaved CertificateGroup.');
			if ((is_null($objCertificateTemplet->IdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsGroup on this CertificateGroup with an unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet`
				SET
					`group` = null
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTemplet->IdcertificateTemplet) . ' AND
					`group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '
			');
		}

		/**
		 * Unassociates all CertificateTempletsAsGroup
		 * @return void
		*/
		public function UnassociateAllCertificateTempletsAsGroup() {
			if ((is_null($this->intIdcertificateGroup)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsGroup on this unsaved CertificateGroup.');

			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet`
				SET
					`group` = null
				WHERE
					`group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '
			');
		}

		/**
		 * Deletes an associated CertificateTempletAsGroup
		 * @param CertificateTemplet $objCertificateTemplet
		 * @return void
		*/
		public function DeleteAssociatedCertificateTempletAsGroup(CertificateTemplet $objCertificateTemplet) {
			if ((is_null($this->intIdcertificateGroup)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsGroup on this unsaved CertificateGroup.');
			if ((is_null($objCertificateTemplet->IdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsGroup on this CertificateGroup with an unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet`
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTemplet->IdcertificateTemplet) . ' AND
					`group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '
			');
		}

		/**
		 * Deletes all associated CertificateTempletsAsGroup
		 * @return void
		*/
		public function DeleteAllCertificateTempletsAsGroup() {
			if ((is_null($this->intIdcertificateGroup)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletAsGroup on this unsaved CertificateGroup.');

			// Get the Database Object for this Class
			$objDatabase = CertificateGroup::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet`
				WHERE
					`group` = ' . $objDatabase->SqlVariable($this->intIdcertificateGroup) . '
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
			return "certificate_group";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[CertificateGroup::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="CertificateGroup"><sequence>';
			$strToReturn .= '<element name="IdcertificateGroup" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="MarathiName" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CertificateGroup', $strComplexTypeArray)) {
				$strComplexTypeArray['CertificateGroup'] = CertificateGroup::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CertificateGroup::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CertificateGroup();
			if (property_exists($objSoapObject, 'IdcertificateGroup'))
				$objToReturn->intIdcertificateGroup = $objSoapObject->IdcertificateGroup;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'MarathiName'))
				$objToReturn->strMarathiName = $objSoapObject->MarathiName;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CertificateGroup::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdcertificateGroup'] = $this->intIdcertificateGroup;
			$iArray['Code'] = $this->intCode;
			$iArray['Name'] = $this->strName;
			$iArray['MarathiName'] = $this->strMarathiName;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdcertificateGroup ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdcertificateGroup
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $MarathiName
     *
     *
     * @property-read QQReverseReferenceNodeCertificateTemplet $CertificateTempletAsGroup

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeCertificateGroup extends QQNode {
		protected $strTableName = 'certificate_group';
		protected $strPrimaryKey = 'idcertificate_group';
		protected $strClassName = 'CertificateGroup';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcertificateGroup':
					return new QQNode('idcertificate_group', 'IdcertificateGroup', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'MarathiName':
					return new QQNode('marathi_name', 'MarathiName', 'Blob', $this);
				case 'CertificateTempletAsGroup':
					return new QQReverseReferenceNodeCertificateTemplet($this, 'certificatetempletasgroup', 'reverse_reference', 'group');

				case '_PrimaryKeyNode':
					return new QQNode('idcertificate_group', 'IdcertificateGroup', 'Integer', $this);
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
     * @property-read QQNode $IdcertificateGroup
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $MarathiName
     *
     *
     * @property-read QQReverseReferenceNodeCertificateTemplet $CertificateTempletAsGroup

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCertificateGroup extends QQReverseReferenceNode {
		protected $strTableName = 'certificate_group';
		protected $strPrimaryKey = 'idcertificate_group';
		protected $strClassName = 'CertificateGroup';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcertificateGroup':
					return new QQNode('idcertificate_group', 'IdcertificateGroup', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'MarathiName':
					return new QQNode('marathi_name', 'MarathiName', 'string', $this);
				case 'CertificateTempletAsGroup':
					return new QQReverseReferenceNodeCertificateTemplet($this, 'certificatetempletasgroup', 'reverse_reference', 'group');

				case '_PrimaryKeyNode':
					return new QQNode('idcertificate_group', 'IdcertificateGroup', 'integer', $this);
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
