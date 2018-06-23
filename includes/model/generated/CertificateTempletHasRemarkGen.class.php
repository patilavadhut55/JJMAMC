<?php
	/**
	 * The abstract CertificateTempletHasRemarkGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CertificateTempletHasRemark subclass which
	 * extends this CertificateTempletHasRemarkGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CertificateTempletHasRemark class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $CertificateTempletIdcertificateTemplet the value for intCertificateTempletIdcertificateTemplet (PK)
	 * @property integer $RemarkIdremark the value for intRemarkIdremark (PK)
	 * @property CertificateTemplet $CertificateTempletIdcertificateTempletObject the value for the CertificateTemplet object referenced by intCertificateTempletIdcertificateTemplet (PK)
	 * @property Remark $RemarkIdremarkObject the value for the Remark object referenced by intRemarkIdremark (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CertificateTempletHasRemarkGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK column certificate_templet_has_remark.certificate_templet_idcertificate_templet
		 * @var integer intCertificateTempletIdcertificateTemplet
		 */
		protected $intCertificateTempletIdcertificateTemplet;
		const CertificateTempletIdcertificateTempletDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intCertificateTempletIdcertificateTemplet;
		 */
		protected $__intCertificateTempletIdcertificateTemplet;

		/**
		 * Protected member variable that maps to the database PK column certificate_templet_has_remark.remark_idremark
		 * @var integer intRemarkIdremark
		 */
		protected $intRemarkIdremark;
		const RemarkIdremarkDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intRemarkIdremark;
		 */
		protected $__intRemarkIdremark;

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
		 * in the database column certificate_templet_has_remark.certificate_templet_idcertificate_templet.
		 *
		 * NOTE: Always use the CertificateTempletIdcertificateTempletObject property getter to correctly retrieve this CertificateTemplet object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CertificateTemplet objCertificateTempletIdcertificateTempletObject
		 */
		protected $objCertificateTempletIdcertificateTempletObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column certificate_templet_has_remark.remark_idremark.
		 *
		 * NOTE: Always use the RemarkIdremarkObject property getter to correctly retrieve this Remark object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Remark objRemarkIdremarkObject
		 */
		protected $objRemarkIdremarkObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intCertificateTempletIdcertificateTemplet = CertificateTempletHasRemark::CertificateTempletIdcertificateTempletDefault;
			$this->intRemarkIdremark = CertificateTempletHasRemark::RemarkIdremarkDefault;
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
		 * Load a CertificateTempletHasRemark from PK Info
		 * @param integer $intCertificateTempletIdcertificateTemplet		 * @param integer $intRemarkIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark
		 */
		public static function Load($intCertificateTempletIdcertificateTemplet, $intRemarkIdremark, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CertificateTempletHasRemark', $intCertificateTempletIdcertificateTemplet, $intRemarkIdremark);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = CertificateTempletHasRemark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateTempletHasRemark()->CertificateTempletIdcertificateTemplet, $intCertificateTempletIdcertificateTemplet),
					QQ::Equal(QQN::CertificateTempletHasRemark()->RemarkIdremark, $intRemarkIdremark)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all CertificateTempletHasRemarks
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CertificateTempletHasRemark::QueryArray to perform the LoadAll query
			try {
				return CertificateTempletHasRemark::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CertificateTempletHasRemarks
		 * @return int
		 */
		public static function CountAll() {
			// Call CertificateTempletHasRemark::QueryCount to perform the CountAll query
			return CertificateTempletHasRemark::QueryCount(QQ::All());
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
			$objDatabase = CertificateTempletHasRemark::GetDatabase();

			// Create/Build out the QueryBuilder object with CertificateTempletHasRemark-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'certificate_templet_has_remark');

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
				CertificateTempletHasRemark::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('certificate_templet_has_remark');

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
		 * Static Qcubed Query method to query for a single CertificateTempletHasRemark object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CertificateTempletHasRemark the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateTempletHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new CertificateTempletHasRemark object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CertificateTempletHasRemark::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of CertificateTempletHasRemark objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CertificateTempletHasRemark[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateTempletHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CertificateTempletHasRemark::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CertificateTempletHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of CertificateTempletHasRemark objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateTempletHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CertificateTempletHasRemark::GetDatabase();

			$strQuery = CertificateTempletHasRemark::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/certificatetemplethasremark', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = CertificateTempletHasRemark::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CertificateTempletHasRemark
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'certificate_templet_has_remark';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'certificate_templet_idcertificate_templet', $strAliasPrefix . 'certificate_templet_idcertificate_templet');
			    $objBuilder->AddSelectItem($strTableName, 'remark_idremark', $strAliasPrefix . 'remark_idremark');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'certificate_templet_idcertificate_templet', $strAliasPrefix . 'certificate_templet_idcertificate_templet');
			    $objBuilder->AddSelectItem($strTableName, 'remark_idremark', $strAliasPrefix . 'remark_idremark');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CertificateTempletHasRemark from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CertificateTempletHasRemark::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CertificateTempletHasRemark
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the CertificateTempletHasRemark object
			$objToReturn = new CertificateTempletHasRemark();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'certificate_templet_idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCertificateTempletIdcertificateTemplet = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intCertificateTempletIdcertificateTemplet = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'remark_idremark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRemarkIdremark = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intRemarkIdremark = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->CertificateTempletIdcertificateTemplet != $objPreviousItem->CertificateTempletIdcertificateTemplet) {
						continue;
					}
					if ($objToReturn->RemarkIdremark != $objPreviousItem->RemarkIdremark) {
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
				$strAliasPrefix = 'certificate_templet_has_remark__';

			// Check for CertificateTempletIdcertificateTempletObject Early Binding
			$strAlias = $strAliasPrefix . 'certificate_templet_idcertificate_templet__idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCertificateTempletIdcertificateTempletObject = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificate_templet_idcertificate_templet__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RemarkIdremarkObject Early Binding
			$strAlias = $strAliasPrefix . 'remark_idremark__idremark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRemarkIdremarkObject = Remark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'remark_idremark__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of CertificateTempletHasRemarks from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CertificateTempletHasRemark[]
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
					$objItem = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single CertificateTempletHasRemark object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CertificateTempletHasRemark next row resulting from the query
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
			return CertificateTempletHasRemark::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single CertificateTempletHasRemark object,
		 * by CertificateTempletIdcertificateTemplet, RemarkIdremark Index(es)
		 * @param integer $intCertificateTempletIdcertificateTemplet
		 * @param integer $intRemarkIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark
		*/
		public static function LoadByCertificateTempletIdcertificateTempletRemarkIdremark($intCertificateTempletIdcertificateTemplet, $intRemarkIdremark, $objOptionalClauses = null) {
			return CertificateTempletHasRemark::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateTempletHasRemark()->CertificateTempletIdcertificateTemplet, $intCertificateTempletIdcertificateTemplet),
					QQ::Equal(QQN::CertificateTempletHasRemark()->RemarkIdremark, $intRemarkIdremark)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of CertificateTempletHasRemark objects,
		 * by RemarkIdremark Index(es)
		 * @param integer $intRemarkIdremark
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark[]
		*/
		public static function LoadArrayByRemarkIdremark($intRemarkIdremark, $objOptionalClauses = null) {
			// Call CertificateTempletHasRemark::QueryArray to perform the LoadArrayByRemarkIdremark query
			try {
				return CertificateTempletHasRemark::QueryArray(
					QQ::Equal(QQN::CertificateTempletHasRemark()->RemarkIdremark, $intRemarkIdremark),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CertificateTempletHasRemarks
		 * by RemarkIdremark Index(es)
		 * @param integer $intRemarkIdremark
		 * @return int
		*/
		public static function CountByRemarkIdremark($intRemarkIdremark) {
			// Call CertificateTempletHasRemark::QueryCount to perform the CountByRemarkIdremark query
			return CertificateTempletHasRemark::QueryCount(
				QQ::Equal(QQN::CertificateTempletHasRemark()->RemarkIdremark, $intRemarkIdremark)
			);
		}

		/**
		 * Load an array of CertificateTempletHasRemark objects,
		 * by CertificateTempletIdcertificateTemplet Index(es)
		 * @param integer $intCertificateTempletIdcertificateTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark[]
		*/
		public static function LoadArrayByCertificateTempletIdcertificateTemplet($intCertificateTempletIdcertificateTemplet, $objOptionalClauses = null) {
			// Call CertificateTempletHasRemark::QueryArray to perform the LoadArrayByCertificateTempletIdcertificateTemplet query
			try {
				return CertificateTempletHasRemark::QueryArray(
					QQ::Equal(QQN::CertificateTempletHasRemark()->CertificateTempletIdcertificateTemplet, $intCertificateTempletIdcertificateTemplet),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CertificateTempletHasRemarks
		 * by CertificateTempletIdcertificateTemplet Index(es)
		 * @param integer $intCertificateTempletIdcertificateTemplet
		 * @return int
		*/
		public static function CountByCertificateTempletIdcertificateTemplet($intCertificateTempletIdcertificateTemplet) {
			// Call CertificateTempletHasRemark::QueryCount to perform the CountByCertificateTempletIdcertificateTemplet query
			return CertificateTempletHasRemark::QueryCount(
				QQ::Equal(QQN::CertificateTempletHasRemark()->CertificateTempletIdcertificateTemplet, $intCertificateTempletIdcertificateTemplet)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this CertificateTempletHasRemark
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CertificateTempletHasRemark::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `certificate_templet_has_remark` (
							`certificate_templet_idcertificate_templet`,
							`remark_idremark`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCertificateTempletIdcertificateTemplet) . ',
							' . $objDatabase->SqlVariable($this->intRemarkIdremark) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`certificate_templet_has_remark`
						SET
							`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intCertificateTempletIdcertificateTemplet) . ',
							`remark_idremark` = ' . $objDatabase->SqlVariable($this->intRemarkIdremark) . '
						WHERE
							`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->__intCertificateTempletIdcertificateTemplet) . ' AND 
							`remark_idremark` = ' . $objDatabase->SqlVariable($this->__intRemarkIdremark) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intCertificateTempletIdcertificateTemplet = $this->intCertificateTempletIdcertificateTemplet;
			$this->__intRemarkIdremark = $this->intRemarkIdremark;


			$this->DeleteCache();

			// Return
			return $mixToReturn;
		}

		/**
		 * Delete this CertificateTempletHasRemark
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intCertificateTempletIdcertificateTemplet)) || (is_null($this->intRemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CertificateTempletHasRemark with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTempletHasRemark::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet_has_remark`
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intCertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($this->intRemarkIdremark) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this CertificateTempletHasRemark ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CertificateTempletHasRemark', $this->intCertificateTempletIdcertificateTemplet, $this->intRemarkIdremark);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all CertificateTempletHasRemarks
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CertificateTempletHasRemark::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet_has_remark`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate certificate_templet_has_remark table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CertificateTempletHasRemark::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `certificate_templet_has_remark`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this CertificateTempletHasRemark from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CertificateTempletHasRemark object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = CertificateTempletHasRemark::Load($this->intCertificateTempletIdcertificateTemplet, $this->intRemarkIdremark);

			// Update $this's local variables to match
			$this->CertificateTempletIdcertificateTemplet = $objReloaded->CertificateTempletIdcertificateTemplet;
			$this->__intCertificateTempletIdcertificateTemplet = $this->intCertificateTempletIdcertificateTemplet;
			$this->RemarkIdremark = $objReloaded->RemarkIdremark;
			$this->__intRemarkIdremark = $this->intRemarkIdremark;
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
				case 'CertificateTempletIdcertificateTemplet':
					/**
					 * Gets the value for intCertificateTempletIdcertificateTemplet (PK)
					 * @return integer
					 */
					return $this->intCertificateTempletIdcertificateTemplet;

				case 'RemarkIdremark':
					/**
					 * Gets the value for intRemarkIdremark (PK)
					 * @return integer
					 */
					return $this->intRemarkIdremark;


				///////////////////
				// Member Objects
				///////////////////
				case 'CertificateTempletIdcertificateTempletObject':
					/**
					 * Gets the value for the CertificateTemplet object referenced by intCertificateTempletIdcertificateTemplet (PK)
					 * @return CertificateTemplet
					 */
					try {
						if ((!$this->objCertificateTempletIdcertificateTempletObject) && (!is_null($this->intCertificateTempletIdcertificateTemplet)))
							$this->objCertificateTempletIdcertificateTempletObject = CertificateTemplet::Load($this->intCertificateTempletIdcertificateTemplet);
						return $this->objCertificateTempletIdcertificateTempletObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RemarkIdremarkObject':
					/**
					 * Gets the value for the Remark object referenced by intRemarkIdremark (PK)
					 * @return Remark
					 */
					try {
						if ((!$this->objRemarkIdremarkObject) && (!is_null($this->intRemarkIdremark)))
							$this->objRemarkIdremarkObject = Remark::Load($this->intRemarkIdremark);
						return $this->objRemarkIdremarkObject;
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
				case 'CertificateTempletIdcertificateTemplet':
					/**
					 * Sets the value for intCertificateTempletIdcertificateTemplet (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCertificateTempletIdcertificateTempletObject = null;
						return ($this->intCertificateTempletIdcertificateTemplet = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RemarkIdremark':
					/**
					 * Sets the value for intRemarkIdremark (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRemarkIdremarkObject = null;
						return ($this->intRemarkIdremark = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'CertificateTempletIdcertificateTempletObject':
					/**
					 * Sets the value for the CertificateTemplet object referenced by intCertificateTempletIdcertificateTemplet (PK)
					 * @param CertificateTemplet $mixValue
					 * @return CertificateTemplet
					 */
					if (is_null($mixValue)) {
						$this->intCertificateTempletIdcertificateTemplet = null;
						$this->objCertificateTempletIdcertificateTempletObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CertificateTemplet object
						try {
							$mixValue = QType::Cast($mixValue, 'CertificateTemplet');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CertificateTemplet object
						if (is_null($mixValue->IdcertificateTemplet))
							throw new QCallerException('Unable to set an unsaved CertificateTempletIdcertificateTempletObject for this CertificateTempletHasRemark');

						// Update Local Member Variables
						$this->objCertificateTempletIdcertificateTempletObject = $mixValue;
						$this->intCertificateTempletIdcertificateTemplet = $mixValue->IdcertificateTemplet;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RemarkIdremarkObject':
					/**
					 * Sets the value for the Remark object referenced by intRemarkIdremark (PK)
					 * @param Remark $mixValue
					 * @return Remark
					 */
					if (is_null($mixValue)) {
						$this->intRemarkIdremark = null;
						$this->objRemarkIdremarkObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Remark object
						try {
							$mixValue = QType::Cast($mixValue, 'Remark');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Remark object
						if (is_null($mixValue->Idremark))
							throw new QCallerException('Unable to set an unsaved RemarkIdremarkObject for this CertificateTempletHasRemark');

						// Update Local Member Variables
						$this->objRemarkIdremarkObject = $mixValue;
						$this->intRemarkIdremark = $mixValue->Idremark;

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
			return "certificate_templet_has_remark";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[CertificateTempletHasRemark::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="CertificateTempletHasRemark"><sequence>';
			$strToReturn .= '<element name="CertificateTempletIdcertificateTempletObject" type="xsd1:CertificateTemplet"/>';
			$strToReturn .= '<element name="RemarkIdremarkObject" type="xsd1:Remark"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CertificateTempletHasRemark', $strComplexTypeArray)) {
				$strComplexTypeArray['CertificateTempletHasRemark'] = CertificateTempletHasRemark::GetSoapComplexTypeXml();
				CertificateTemplet::AlterSoapComplexTypeArray($strComplexTypeArray);
				Remark::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CertificateTempletHasRemark::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CertificateTempletHasRemark();
			if ((property_exists($objSoapObject, 'CertificateTempletIdcertificateTempletObject')) &&
				($objSoapObject->CertificateTempletIdcertificateTempletObject))
				$objToReturn->CertificateTempletIdcertificateTempletObject = CertificateTemplet::GetObjectFromSoapObject($objSoapObject->CertificateTempletIdcertificateTempletObject);
			if ((property_exists($objSoapObject, 'RemarkIdremarkObject')) &&
				($objSoapObject->RemarkIdremarkObject))
				$objToReturn->RemarkIdremarkObject = Remark::GetObjectFromSoapObject($objSoapObject->RemarkIdremarkObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CertificateTempletHasRemark::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCertificateTempletIdcertificateTempletObject)
				$objObject->objCertificateTempletIdcertificateTempletObject = CertificateTemplet::GetSoapObjectFromObject($objObject->objCertificateTempletIdcertificateTempletObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCertificateTempletIdcertificateTemplet = null;
			if ($objObject->objRemarkIdremarkObject)
				$objObject->objRemarkIdremarkObject = Remark::GetSoapObjectFromObject($objObject->objRemarkIdremarkObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRemarkIdremark = null;
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
			$iArray['CertificateTempletIdcertificateTemplet'] = $this->intCertificateTempletIdcertificateTemplet;
			$iArray['RemarkIdremark'] = $this->intRemarkIdremark;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  array( $this->intCertificateTempletIdcertificateTemplet,  $this->intRemarkIdremark) ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $CertificateTempletIdcertificateTemplet
     * @property-read QQNodeCertificateTemplet $CertificateTempletIdcertificateTempletObject
     * @property-read QQNode $RemarkIdremark
     * @property-read QQNodeRemark $RemarkIdremarkObject
     *
     *

     * @property-read QQNodeCertificateTemplet $_PrimaryKeyNode
     **/
	class QQNodeCertificateTempletHasRemark extends QQNode {
		protected $strTableName = 'certificate_templet_has_remark';
		protected $strPrimaryKey = 'certificate_templet_idcertificate_templet';
		protected $strClassName = 'CertificateTempletHasRemark';
		public function __get($strName) {
			switch ($strName) {
				case 'CertificateTempletIdcertificateTemplet':
					return new QQNode('certificate_templet_idcertificate_templet', 'CertificateTempletIdcertificateTemplet', 'Integer', $this);
				case 'CertificateTempletIdcertificateTempletObject':
					return new QQNodeCertificateTemplet('certificate_templet_idcertificate_templet', 'CertificateTempletIdcertificateTempletObject', 'Integer', $this);
				case 'RemarkIdremark':
					return new QQNode('remark_idremark', 'RemarkIdremark', 'Integer', $this);
				case 'RemarkIdremarkObject':
					return new QQNodeRemark('remark_idremark', 'RemarkIdremarkObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeCertificateTemplet('certificate_templet_idcertificate_templet', 'CertificateTempletIdcertificateTemplet', 'Integer', $this);
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
     * @property-read QQNode $CertificateTempletIdcertificateTemplet
     * @property-read QQNodeCertificateTemplet $CertificateTempletIdcertificateTempletObject
     * @property-read QQNode $RemarkIdremark
     * @property-read QQNodeRemark $RemarkIdremarkObject
     *
     *

     * @property-read QQNodeCertificateTemplet $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCertificateTempletHasRemark extends QQReverseReferenceNode {
		protected $strTableName = 'certificate_templet_has_remark';
		protected $strPrimaryKey = 'certificate_templet_idcertificate_templet';
		protected $strClassName = 'CertificateTempletHasRemark';
		public function __get($strName) {
			switch ($strName) {
				case 'CertificateTempletIdcertificateTemplet':
					return new QQNode('certificate_templet_idcertificate_templet', 'CertificateTempletIdcertificateTemplet', 'integer', $this);
				case 'CertificateTempletIdcertificateTempletObject':
					return new QQNodeCertificateTemplet('certificate_templet_idcertificate_templet', 'CertificateTempletIdcertificateTempletObject', 'integer', $this);
				case 'RemarkIdremark':
					return new QQNode('remark_idremark', 'RemarkIdremark', 'integer', $this);
				case 'RemarkIdremarkObject':
					return new QQNodeRemark('remark_idremark', 'RemarkIdremarkObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeCertificateTemplet('certificate_templet_idcertificate_templet', 'CertificateTempletIdcertificateTemplet', 'integer', $this);
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
