<?php
	/**
	 * The abstract RemarkGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Remark subclass which
	 * extends this RemarkGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Remark class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idremark the value for intIdremark (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property-read AppApprovalHasRemark $_AppApprovalHasRemarkAsId the value for the private _objAppApprovalHasRemarkAsId (Read-Only) if set due to an expansion on the app_approval_has_remark.remark_idremark reverse relationship
	 * @property-read AppApprovalHasRemark[] $_AppApprovalHasRemarkAsIdArray the value for the private _objAppApprovalHasRemarkAsIdArray (Read-Only) if set due to an ExpandAsArray on the app_approval_has_remark.remark_idremark reverse relationship
	 * @property-read CertificateTempletHasRemark $_CertificateTempletHasRemarkAsId the value for the private _objCertificateTempletHasRemarkAsId (Read-Only) if set due to an expansion on the certificate_templet_has_remark.remark_idremark reverse relationship
	 * @property-read CertificateTempletHasRemark[] $_CertificateTempletHasRemarkAsIdArray the value for the private _objCertificateTempletHasRemarkAsIdArray (Read-Only) if set due to an ExpandAsArray on the certificate_templet_has_remark.remark_idremark reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class RemarkGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column remark.idremark
		 * @var integer intIdremark
		 */
		protected $intIdremark;
		const IdremarkDefault = null;


		/**
		 * Protected member variable that maps to the database column remark.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 255;
		const NameDefault = null;


		/**
		 * Private member variable that stores a reference to a single AppApprovalHasRemarkAsId object
		 * (of type AppApprovalHasRemark), if this Remark object was restored with
		 * an expansion on the app_approval_has_remark association table.
		 * @var AppApprovalHasRemark _objAppApprovalHasRemarkAsId;
		 */
		private $_objAppApprovalHasRemarkAsId;

		/**
		 * Private member variable that stores a reference to an array of AppApprovalHasRemarkAsId objects
		 * (of type AppApprovalHasRemark[]), if this Remark object was restored with
		 * an ExpandAsArray on the app_approval_has_remark association table.
		 * @var AppApprovalHasRemark[] _objAppApprovalHasRemarkAsIdArray;
		 */
		private $_objAppApprovalHasRemarkAsIdArray = null;

		/**
		 * Private member variable that stores a reference to a single CertificateTempletHasRemarkAsId object
		 * (of type CertificateTempletHasRemark), if this Remark object was restored with
		 * an expansion on the certificate_templet_has_remark association table.
		 * @var CertificateTempletHasRemark _objCertificateTempletHasRemarkAsId;
		 */
		private $_objCertificateTempletHasRemarkAsId;

		/**
		 * Private member variable that stores a reference to an array of CertificateTempletHasRemarkAsId objects
		 * (of type CertificateTempletHasRemark[]), if this Remark object was restored with
		 * an ExpandAsArray on the certificate_templet_has_remark association table.
		 * @var CertificateTempletHasRemark[] _objCertificateTempletHasRemarkAsIdArray;
		 */
		private $_objCertificateTempletHasRemarkAsIdArray = null;

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
			$this->intIdremark = Remark::IdremarkDefault;
			$this->strName = Remark::NameDefault;
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
		 * Load a Remark from PK Info
		 * @param integer $intIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Remark
		 */
		public static function Load($intIdremark, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Remark', $intIdremark);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Remark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Remark()->Idremark, $intIdremark)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Remarks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Remark[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Remark::QueryArray to perform the LoadAll query
			try {
				return Remark::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Remarks
		 * @return int
		 */
		public static function CountAll() {
			// Call Remark::QueryCount to perform the CountAll query
			return Remark::QueryCount(QQ::All());
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
			$objDatabase = Remark::GetDatabase();

			// Create/Build out the QueryBuilder object with Remark-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'remark');

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
				Remark::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('remark');

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
		 * Static Qcubed Query method to query for a single Remark object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Remark the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Remark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Remark object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Remark::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Remark::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Remark objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Remark[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Remark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Remark::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Remark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Remark objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Remark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Remark::GetDatabase();

			$strQuery = Remark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/remark', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Remark::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Remark
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'remark';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idremark', $strAliasPrefix . 'idremark');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idremark', $strAliasPrefix . 'idremark');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Remark from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Remark::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Remark
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idremark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdremark == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'remark__';


						// Expanding reverse references: AppApprovalHasRemarkAsId
						$strAlias = $strAliasPrefix . 'appapprovalhasremarkasid__app_approval_idapp_approval';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAppApprovalHasRemarkAsIdArray)
								$objPreviousItem->_objAppApprovalHasRemarkAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAppApprovalHasRemarkAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAppApprovalHasRemarkAsIdArray;
								$objChildItem = AppApprovalHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalhasremarkasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAppApprovalHasRemarkAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAppApprovalHasRemarkAsIdArray[] = AppApprovalHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalhasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CertificateTempletHasRemarkAsId
						$strAlias = $strAliasPrefix . 'certificatetemplethasremarkasid__certificate_templet_idcertificate_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCertificateTempletHasRemarkAsIdArray)
								$objPreviousItem->_objCertificateTempletHasRemarkAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCertificateTempletHasRemarkAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCertificateTempletHasRemarkAsIdArray;
								$objChildItem = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCertificateTempletHasRemarkAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCertificateTempletHasRemarkAsIdArray[] = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'remark__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Remark object
			$objToReturn = new Remark();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idremark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdremark = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idremark != $objPreviousItem->Idremark) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAppApprovalHasRemarkAsIdArray);
					$cnt = count($objToReturn->_objAppApprovalHasRemarkAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppApprovalHasRemarkAsIdArray, $objToReturn->_objAppApprovalHasRemarkAsIdArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCertificateTempletHasRemarkAsIdArray);
					$cnt = count($objToReturn->_objCertificateTempletHasRemarkAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCertificateTempletHasRemarkAsIdArray, $objToReturn->_objCertificateTempletHasRemarkAsIdArray)) {
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
				$strAliasPrefix = 'remark__';




			// Check for AppApprovalHasRemarkAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'appapprovalhasremarkasid__app_approval_idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAppApprovalHasRemarkAsIdArray)
				$objToReturn->_objAppApprovalHasRemarkAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAppApprovalHasRemarkAsIdArray[] = AppApprovalHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalhasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAppApprovalHasRemarkAsId = AppApprovalHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'appapprovalhasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CertificateTempletHasRemarkAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'certificatetemplethasremarkasid__certificate_templet_idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCertificateTempletHasRemarkAsIdArray)
				$objToReturn->_objCertificateTempletHasRemarkAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCertificateTempletHasRemarkAsIdArray[] = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCertificateTempletHasRemarkAsId = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Remarks from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Remark[]
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
					$objItem = Remark::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Remark::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Remark object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Remark next row resulting from the query
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
			return Remark::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Remark object,
		 * by Idremark Index(es)
		 * @param integer $intIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Remark
		*/
		public static function LoadByIdremark($intIdremark, $objOptionalClauses = null) {
			return Remark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Remark()->Idremark, $intIdremark)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single Remark object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Remark
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return Remark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Remark()->Name, $strName)
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
		 * Save this Remark
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `remark` (
							`name`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdremark = $objDatabase->InsertId('remark', 'idremark');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`remark`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . '
						WHERE
							`idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
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
		 * Delete this Remark
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Remark with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`remark`
				WHERE
					`idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Remark ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Remark', $this->intIdremark);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Remarks
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`remark`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate remark table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `remark`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Remark from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Remark object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Remark::Load($this->intIdremark);

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
				case 'Idremark':
					/**
					 * Gets the value for intIdremark (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdremark;

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

				case '_AppApprovalHasRemarkAsId':
					/**
					 * Gets the value for the private _objAppApprovalHasRemarkAsId (Read-Only)
					 * if set due to an expansion on the app_approval_has_remark.remark_idremark reverse relationship
					 * @return AppApprovalHasRemark
					 */
					return $this->_objAppApprovalHasRemarkAsId;

				case '_AppApprovalHasRemarkAsIdArray':
					/**
					 * Gets the value for the private _objAppApprovalHasRemarkAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_approval_has_remark.remark_idremark reverse relationship
					 * @return AppApprovalHasRemark[]
					 */
					return $this->_objAppApprovalHasRemarkAsIdArray;

				case '_CertificateTempletHasRemarkAsId':
					/**
					 * Gets the value for the private _objCertificateTempletHasRemarkAsId (Read-Only)
					 * if set due to an expansion on the certificate_templet_has_remark.remark_idremark reverse relationship
					 * @return CertificateTempletHasRemark
					 */
					return $this->_objCertificateTempletHasRemarkAsId;

				case '_CertificateTempletHasRemarkAsIdArray':
					/**
					 * Gets the value for the private _objCertificateTempletHasRemarkAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the certificate_templet_has_remark.remark_idremark reverse relationship
					 * @return CertificateTempletHasRemark[]
					 */
					return $this->_objCertificateTempletHasRemarkAsIdArray;


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



		// Related Objects' Methods for AppApprovalHasRemarkAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppApprovalHasRemarksAsId as an array of AppApprovalHasRemark objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark[]
		*/
		public function GetAppApprovalHasRemarkAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdremark)))
				return array();

			try {
				return AppApprovalHasRemark::LoadArrayByRemarkIdremark($this->intIdremark, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AppApprovalHasRemarksAsId
		 * @return int
		*/
		public function CountAppApprovalHasRemarksAsId() {
			if ((is_null($this->intIdremark)))
				return 0;

			return AppApprovalHasRemark::CountByRemarkIdremark($this->intIdremark);
		}

		/**
		 * Associates a AppApprovalHasRemarkAsId
		 * @param AppApprovalHasRemark $objAppApprovalHasRemark
		 * @return void
		*/
		public function AssociateAppApprovalHasRemarkAsId(AppApprovalHasRemark $objAppApprovalHasRemark) {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalHasRemarkAsId on this unsaved Remark.');
			if ((is_null($objAppApprovalHasRemark->AppApprovalIdappApproval)) || (is_null($objAppApprovalHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalHasRemarkAsId on this Remark with an unsaved AppApprovalHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval_has_remark`
				SET
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->AppApprovalIdappApproval) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->RemarkIdremark) . '
			');
		}

		/**
		 * Unassociates a AppApprovalHasRemarkAsId
		 * @param AppApprovalHasRemark $objAppApprovalHasRemark
		 * @return void
		*/
		public function UnassociateAppApprovalHasRemarkAsId(AppApprovalHasRemark $objAppApprovalHasRemark) {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved Remark.');
			if ((is_null($objAppApprovalHasRemark->AppApprovalIdappApproval)) || (is_null($objAppApprovalHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this Remark with an unsaved AppApprovalHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval_has_remark`
				SET
					`remark_idremark` = null
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->AppApprovalIdappApproval) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->RemarkIdremark) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}

		/**
		 * Unassociates all AppApprovalHasRemarksAsId
		 * @return void
		*/
		public function UnassociateAllAppApprovalHasRemarksAsId() {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved Remark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval_has_remark`
				SET
					`remark_idremark` = null
				WHERE
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}

		/**
		 * Deletes an associated AppApprovalHasRemarkAsId
		 * @param AppApprovalHasRemark $objAppApprovalHasRemark
		 * @return void
		*/
		public function DeleteAssociatedAppApprovalHasRemarkAsId(AppApprovalHasRemark $objAppApprovalHasRemark) {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved Remark.');
			if ((is_null($objAppApprovalHasRemark->AppApprovalIdappApproval)) || (is_null($objAppApprovalHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this Remark with an unsaved AppApprovalHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval_has_remark`
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->AppApprovalIdappApproval) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->RemarkIdremark) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}

		/**
		 * Deletes all associated AppApprovalHasRemarksAsId
		 * @return void
		*/
		public function DeleteAllAppApprovalHasRemarksAsId() {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved Remark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval_has_remark`
				WHERE
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}


		// Related Objects' Methods for CertificateTempletHasRemarkAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CertificateTempletHasRemarksAsId as an array of CertificateTempletHasRemark objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark[]
		*/
		public function GetCertificateTempletHasRemarkAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdremark)))
				return array();

			try {
				return CertificateTempletHasRemark::LoadArrayByRemarkIdremark($this->intIdremark, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CertificateTempletHasRemarksAsId
		 * @return int
		*/
		public function CountCertificateTempletHasRemarksAsId() {
			if ((is_null($this->intIdremark)))
				return 0;

			return CertificateTempletHasRemark::CountByRemarkIdremark($this->intIdremark);
		}

		/**
		 * Associates a CertificateTempletHasRemarkAsId
		 * @param CertificateTempletHasRemark $objCertificateTempletHasRemark
		 * @return void
		*/
		public function AssociateCertificateTempletHasRemarkAsId(CertificateTempletHasRemark $objCertificateTempletHasRemark) {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletHasRemarkAsId on this unsaved Remark.');
			if ((is_null($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet)) || (is_null($objCertificateTempletHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletHasRemarkAsId on this Remark with an unsaved CertificateTempletHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet_has_remark`
				SET
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->RemarkIdremark) . '
			');
		}

		/**
		 * Unassociates a CertificateTempletHasRemarkAsId
		 * @param CertificateTempletHasRemark $objCertificateTempletHasRemark
		 * @return void
		*/
		public function UnassociateCertificateTempletHasRemarkAsId(CertificateTempletHasRemark $objCertificateTempletHasRemark) {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved Remark.');
			if ((is_null($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet)) || (is_null($objCertificateTempletHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this Remark with an unsaved CertificateTempletHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet_has_remark`
				SET
					`remark_idremark` = null
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->RemarkIdremark) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}

		/**
		 * Unassociates all CertificateTempletHasRemarksAsId
		 * @return void
		*/
		public function UnassociateAllCertificateTempletHasRemarksAsId() {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved Remark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet_has_remark`
				SET
					`remark_idremark` = null
				WHERE
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}

		/**
		 * Deletes an associated CertificateTempletHasRemarkAsId
		 * @param CertificateTempletHasRemark $objCertificateTempletHasRemark
		 * @return void
		*/
		public function DeleteAssociatedCertificateTempletHasRemarkAsId(CertificateTempletHasRemark $objCertificateTempletHasRemark) {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved Remark.');
			if ((is_null($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet)) || (is_null($objCertificateTempletHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this Remark with an unsaved CertificateTempletHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet_has_remark`
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->RemarkIdremark) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
			');
		}

		/**
		 * Deletes all associated CertificateTempletHasRemarksAsId
		 * @return void
		*/
		public function DeleteAllCertificateTempletHasRemarksAsId() {
			if ((is_null($this->intIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved Remark.');

			// Get the Database Object for this Class
			$objDatabase = Remark::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet_has_remark`
				WHERE
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intIdremark) . '
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
			return "remark";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Remark::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Remark"><sequence>';
			$strToReturn .= '<element name="Idremark" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Remark', $strComplexTypeArray)) {
				$strComplexTypeArray['Remark'] = Remark::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Remark::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Remark();
			if (property_exists($objSoapObject, 'Idremark'))
				$objToReturn->intIdremark = $objSoapObject->Idremark;
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
				array_push($objArrayToReturn, Remark::GetSoapObjectFromObject($objObject, true));

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
			$iArray['Idremark'] = $this->intIdremark;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdremark ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idremark
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAppApprovalHasRemark $AppApprovalHasRemarkAsId
     * @property-read QQReverseReferenceNodeCertificateTempletHasRemark $CertificateTempletHasRemarkAsId

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeRemark extends QQNode {
		protected $strTableName = 'remark';
		protected $strPrimaryKey = 'idremark';
		protected $strClassName = 'Remark';
		public function __get($strName) {
			switch ($strName) {
				case 'Idremark':
					return new QQNode('idremark', 'Idremark', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'AppApprovalHasRemarkAsId':
					return new QQReverseReferenceNodeAppApprovalHasRemark($this, 'appapprovalhasremarkasid', 'reverse_reference', 'remark_idremark');
				case 'CertificateTempletHasRemarkAsId':
					return new QQReverseReferenceNodeCertificateTempletHasRemark($this, 'certificatetemplethasremarkasid', 'reverse_reference', 'remark_idremark');

				case '_PrimaryKeyNode':
					return new QQNode('idremark', 'Idremark', 'Integer', $this);
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
     * @property-read QQNode $Idremark
     * @property-read QQNode $Name
     *
     *
     * @property-read QQReverseReferenceNodeAppApprovalHasRemark $AppApprovalHasRemarkAsId
     * @property-read QQReverseReferenceNodeCertificateTempletHasRemark $CertificateTempletHasRemarkAsId

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeRemark extends QQReverseReferenceNode {
		protected $strTableName = 'remark';
		protected $strPrimaryKey = 'idremark';
		protected $strClassName = 'Remark';
		public function __get($strName) {
			switch ($strName) {
				case 'Idremark':
					return new QQNode('idremark', 'Idremark', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'AppApprovalHasRemarkAsId':
					return new QQReverseReferenceNodeAppApprovalHasRemark($this, 'appapprovalhasremarkasid', 'reverse_reference', 'remark_idremark');
				case 'CertificateTempletHasRemarkAsId':
					return new QQReverseReferenceNodeCertificateTempletHasRemark($this, 'certificatetemplethasremarkasid', 'reverse_reference', 'remark_idremark');

				case '_PrimaryKeyNode':
					return new QQNode('idremark', 'Idremark', 'integer', $this);
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
