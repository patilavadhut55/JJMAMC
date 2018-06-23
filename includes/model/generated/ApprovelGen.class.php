<?php
	/**
	 * The abstract ApprovelGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Approvel subclass which
	 * extends this ApprovelGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Approvel class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idapprovel the value for intIdapprovel (Read-Only PK)
	 * @property integer $Code the value for intCode 
	 * @property integer $CertificateTemplet the value for intCertificateTemplet 
	 * @property integer $Roll the value for intRoll 
	 * @property integer $Task the value for intTask 
	 * @property integer $IsFinalAuthority the value for intIsFinalAuthority 
	 * @property integer $CanRejected the value for intCanRejected 
	 * @property CertificateTemplet $CertificateTempletObject the value for the CertificateTemplet object referenced by intCertificateTemplet 
	 * @property Role $RollObject the value for the Role object referenced by intRoll 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ApprovelGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column approvel.idapprovel
		 * @var integer intIdapprovel
		 */
		protected $intIdapprovel;
		const IdapprovelDefault = null;


		/**
		 * Protected member variable that maps to the database column approvel.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column approvel.certificate_templet
		 * @var integer intCertificateTemplet
		 */
		protected $intCertificateTemplet;
		const CertificateTempletDefault = null;


		/**
		 * Protected member variable that maps to the database column approvel.roll
		 * @var integer intRoll
		 */
		protected $intRoll;
		const RollDefault = null;


		/**
		 * Protected member variable that maps to the database column approvel.task
		 * @var integer intTask
		 */
		protected $intTask;
		const TaskDefault = null;


		/**
		 * Protected member variable that maps to the database column approvel.is_final_authority
		 * @var integer intIsFinalAuthority
		 */
		protected $intIsFinalAuthority;
		const IsFinalAuthorityDefault = null;


		/**
		 * Protected member variable that maps to the database column approvel.can_rejected
		 * @var integer intCanRejected
		 */
		protected $intCanRejected;
		const CanRejectedDefault = null;


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
		 * in the database column approvel.certificate_templet.
		 *
		 * NOTE: Always use the CertificateTempletObject property getter to correctly retrieve this CertificateTemplet object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CertificateTemplet objCertificateTempletObject
		 */
		protected $objCertificateTempletObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column approvel.roll.
		 *
		 * NOTE: Always use the RollObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRollObject
		 */
		protected $objRollObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdapprovel = Approvel::IdapprovelDefault;
			$this->intCode = Approvel::CodeDefault;
			$this->intCertificateTemplet = Approvel::CertificateTempletDefault;
			$this->intRoll = Approvel::RollDefault;
			$this->intTask = Approvel::TaskDefault;
			$this->intIsFinalAuthority = Approvel::IsFinalAuthorityDefault;
			$this->intCanRejected = Approvel::CanRejectedDefault;
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
		 * Load a Approvel from PK Info
		 * @param integer $intIdapprovel
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel
		 */
		public static function Load($intIdapprovel, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Approvel', $intIdapprovel);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Approvel::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Approvel()->Idapprovel, $intIdapprovel)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Approvels
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Approvel::QueryArray to perform the LoadAll query
			try {
				return Approvel::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Approvels
		 * @return int
		 */
		public static function CountAll() {
			// Call Approvel::QueryCount to perform the CountAll query
			return Approvel::QueryCount(QQ::All());
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
			$objDatabase = Approvel::GetDatabase();

			// Create/Build out the QueryBuilder object with Approvel-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'approvel');

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
				Approvel::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('approvel');

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
		 * Static Qcubed Query method to query for a single Approvel object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Approvel the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Approvel::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Approvel object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Approvel::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Approvel::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Approvel objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Approvel[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Approvel::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Approvel::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Approvel::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Approvel objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Approvel::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Approvel::GetDatabase();

			$strQuery = Approvel::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/approvel', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Approvel::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Approvel
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'approvel';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idapprovel', $strAliasPrefix . 'idapprovel');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idapprovel', $strAliasPrefix . 'idapprovel');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'certificate_templet', $strAliasPrefix . 'certificate_templet');
			    $objBuilder->AddSelectItem($strTableName, 'roll', $strAliasPrefix . 'roll');
			    $objBuilder->AddSelectItem($strTableName, 'task', $strAliasPrefix . 'task');
			    $objBuilder->AddSelectItem($strTableName, 'is_final_authority', $strAliasPrefix . 'is_final_authority');
			    $objBuilder->AddSelectItem($strTableName, 'can_rejected', $strAliasPrefix . 'can_rejected');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Approvel from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Approvel::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Approvel
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Approvel object
			$objToReturn = new Approvel();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idapprovel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdapprovel = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'certificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCertificateTemplet = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'roll';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRoll = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'task';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTask = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'is_final_authority';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIsFinalAuthority = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'can_rejected';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCanRejected = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idapprovel != $objPreviousItem->Idapprovel) {
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
				$strAliasPrefix = 'approvel__';

			// Check for CertificateTempletObject Early Binding
			$strAlias = $strAliasPrefix . 'certificate_templet__idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCertificateTempletObject = CertificateTemplet::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificate_templet__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RollObject Early Binding
			$strAlias = $strAliasPrefix . 'roll__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRollObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Approvels from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Approvel[]
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
					$objItem = Approvel::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Approvel::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Approvel object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Approvel next row resulting from the query
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
			return Approvel::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Approvel object,
		 * by Idapprovel Index(es)
		 * @param integer $intIdapprovel
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel
		*/
		public static function LoadByIdapprovel($intIdapprovel, $objOptionalClauses = null) {
			return Approvel::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Approvel()->Idapprovel, $intIdapprovel)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Approvel objects,
		 * by Roll Index(es)
		 * @param integer $intRoll
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel[]
		*/
		public static function LoadArrayByRoll($intRoll, $objOptionalClauses = null) {
			// Call Approvel::QueryArray to perform the LoadArrayByRoll query
			try {
				return Approvel::QueryArray(
					QQ::Equal(QQN::Approvel()->Roll, $intRoll),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Approvels
		 * by Roll Index(es)
		 * @param integer $intRoll
		 * @return int
		*/
		public static function CountByRoll($intRoll) {
			// Call Approvel::QueryCount to perform the CountByRoll query
			return Approvel::QueryCount(
				QQ::Equal(QQN::Approvel()->Roll, $intRoll)
			);
		}

		/**
		 * Load an array of Approvel objects,
		 * by CertificateTemplet Index(es)
		 * @param integer $intCertificateTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel[]
		*/
		public static function LoadArrayByCertificateTemplet($intCertificateTemplet, $objOptionalClauses = null) {
			// Call Approvel::QueryArray to perform the LoadArrayByCertificateTemplet query
			try {
				return Approvel::QueryArray(
					QQ::Equal(QQN::Approvel()->CertificateTemplet, $intCertificateTemplet),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Approvels
		 * by CertificateTemplet Index(es)
		 * @param integer $intCertificateTemplet
		 * @return int
		*/
		public static function CountByCertificateTemplet($intCertificateTemplet) {
			// Call Approvel::QueryCount to perform the CountByCertificateTemplet query
			return Approvel::QueryCount(
				QQ::Equal(QQN::Approvel()->CertificateTemplet, $intCertificateTemplet)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Approvel
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Approvel::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `approvel` (
							`code`,
							`certificate_templet`,
							`roll`,
							`task`,
							`is_final_authority`,
							`can_rejected`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCode) . ',
							' . $objDatabase->SqlVariable($this->intCertificateTemplet) . ',
							' . $objDatabase->SqlVariable($this->intRoll) . ',
							' . $objDatabase->SqlVariable($this->intTask) . ',
							' . $objDatabase->SqlVariable($this->intIsFinalAuthority) . ',
							' . $objDatabase->SqlVariable($this->intCanRejected) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdapprovel = $objDatabase->InsertId('approvel', 'idapprovel');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`approvel`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . ',
							`certificate_templet` = ' . $objDatabase->SqlVariable($this->intCertificateTemplet) . ',
							`roll` = ' . $objDatabase->SqlVariable($this->intRoll) . ',
							`task` = ' . $objDatabase->SqlVariable($this->intTask) . ',
							`is_final_authority` = ' . $objDatabase->SqlVariable($this->intIsFinalAuthority) . ',
							`can_rejected` = ' . $objDatabase->SqlVariable($this->intCanRejected) . '
						WHERE
							`idapprovel` = ' . $objDatabase->SqlVariable($this->intIdapprovel) . '
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
		 * Delete this Approvel
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdapprovel)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Approvel with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Approvel::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`approvel`
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($this->intIdapprovel) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Approvel ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Approvel', $this->intIdapprovel);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Approvels
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Approvel::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`approvel`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate approvel table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Approvel::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `approvel`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Approvel from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Approvel object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Approvel::Load($this->intIdapprovel);

			// Update $this's local variables to match
			$this->intCode = $objReloaded->intCode;
			$this->CertificateTemplet = $objReloaded->CertificateTemplet;
			$this->Roll = $objReloaded->Roll;
			$this->intTask = $objReloaded->intTask;
			$this->intIsFinalAuthority = $objReloaded->intIsFinalAuthority;
			$this->intCanRejected = $objReloaded->intCanRejected;
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
				case 'Idapprovel':
					/**
					 * Gets the value for intIdapprovel (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdapprovel;

				case 'Code':
					/**
					 * Gets the value for intCode 
					 * @return integer
					 */
					return $this->intCode;

				case 'CertificateTemplet':
					/**
					 * Gets the value for intCertificateTemplet 
					 * @return integer
					 */
					return $this->intCertificateTemplet;

				case 'Roll':
					/**
					 * Gets the value for intRoll 
					 * @return integer
					 */
					return $this->intRoll;

				case 'Task':
					/**
					 * Gets the value for intTask 
					 * @return integer
					 */
					return $this->intTask;

				case 'IsFinalAuthority':
					/**
					 * Gets the value for intIsFinalAuthority 
					 * @return integer
					 */
					return $this->intIsFinalAuthority;

				case 'CanRejected':
					/**
					 * Gets the value for intCanRejected 
					 * @return integer
					 */
					return $this->intCanRejected;


				///////////////////
				// Member Objects
				///////////////////
				case 'CertificateTempletObject':
					/**
					 * Gets the value for the CertificateTemplet object referenced by intCertificateTemplet 
					 * @return CertificateTemplet
					 */
					try {
						if ((!$this->objCertificateTempletObject) && (!is_null($this->intCertificateTemplet)))
							$this->objCertificateTempletObject = CertificateTemplet::Load($this->intCertificateTemplet);
						return $this->objCertificateTempletObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RollObject':
					/**
					 * Gets the value for the Role object referenced by intRoll 
					 * @return Role
					 */
					try {
						if ((!$this->objRollObject) && (!is_null($this->intRoll)))
							$this->objRollObject = Role::Load($this->intRoll);
						return $this->objRollObject;
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

				case 'CertificateTemplet':
					/**
					 * Sets the value for intCertificateTemplet 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCertificateTempletObject = null;
						return ($this->intCertificateTemplet = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Roll':
					/**
					 * Sets the value for intRoll 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRollObject = null;
						return ($this->intRoll = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Task':
					/**
					 * Sets the value for intTask 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intTask = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'IsFinalAuthority':
					/**
					 * Sets the value for intIsFinalAuthority 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intIsFinalAuthority = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CanRejected':
					/**
					 * Sets the value for intCanRejected 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCanRejected = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'CertificateTempletObject':
					/**
					 * Sets the value for the CertificateTemplet object referenced by intCertificateTemplet 
					 * @param CertificateTemplet $mixValue
					 * @return CertificateTemplet
					 */
					if (is_null($mixValue)) {
						$this->intCertificateTemplet = null;
						$this->objCertificateTempletObject = null;
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
							throw new QCallerException('Unable to set an unsaved CertificateTempletObject for this Approvel');

						// Update Local Member Variables
						$this->objCertificateTempletObject = $mixValue;
						$this->intCertificateTemplet = $mixValue->IdcertificateTemplet;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RollObject':
					/**
					 * Sets the value for the Role object referenced by intRoll 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRoll = null;
						$this->objRollObject = null;
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
							throw new QCallerException('Unable to set an unsaved RollObject for this Approvel');

						// Update Local Member Variables
						$this->objRollObject = $mixValue;
						$this->intRoll = $mixValue->Idrole;

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
			return "approvel";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Approvel::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Approvel"><sequence>';
			$strToReturn .= '<element name="Idapprovel" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="CertificateTempletObject" type="xsd1:CertificateTemplet"/>';
			$strToReturn .= '<element name="RollObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="Task" type="xsd:int"/>';
			$strToReturn .= '<element name="IsFinalAuthority" type="xsd:int"/>';
			$strToReturn .= '<element name="CanRejected" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Approvel', $strComplexTypeArray)) {
				$strComplexTypeArray['Approvel'] = Approvel::GetSoapComplexTypeXml();
				CertificateTemplet::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Approvel::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Approvel();
			if (property_exists($objSoapObject, 'Idapprovel'))
				$objToReturn->intIdapprovel = $objSoapObject->Idapprovel;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if ((property_exists($objSoapObject, 'CertificateTempletObject')) &&
				($objSoapObject->CertificateTempletObject))
				$objToReturn->CertificateTempletObject = CertificateTemplet::GetObjectFromSoapObject($objSoapObject->CertificateTempletObject);
			if ((property_exists($objSoapObject, 'RollObject')) &&
				($objSoapObject->RollObject))
				$objToReturn->RollObject = Role::GetObjectFromSoapObject($objSoapObject->RollObject);
			if (property_exists($objSoapObject, 'Task'))
				$objToReturn->intTask = $objSoapObject->Task;
			if (property_exists($objSoapObject, 'IsFinalAuthority'))
				$objToReturn->intIsFinalAuthority = $objSoapObject->IsFinalAuthority;
			if (property_exists($objSoapObject, 'CanRejected'))
				$objToReturn->intCanRejected = $objSoapObject->CanRejected;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Approvel::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCertificateTempletObject)
				$objObject->objCertificateTempletObject = CertificateTemplet::GetSoapObjectFromObject($objObject->objCertificateTempletObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCertificateTemplet = null;
			if ($objObject->objRollObject)
				$objObject->objRollObject = Role::GetSoapObjectFromObject($objObject->objRollObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoll = null;
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
			$iArray['Idapprovel'] = $this->intIdapprovel;
			$iArray['Code'] = $this->intCode;
			$iArray['CertificateTemplet'] = $this->intCertificateTemplet;
			$iArray['Roll'] = $this->intRoll;
			$iArray['Task'] = $this->intTask;
			$iArray['IsFinalAuthority'] = $this->intIsFinalAuthority;
			$iArray['CanRejected'] = $this->intCanRejected;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdapprovel ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idapprovel
     * @property-read QQNode $Code
     * @property-read QQNode $CertificateTemplet
     * @property-read QQNodeCertificateTemplet $CertificateTempletObject
     * @property-read QQNode $Roll
     * @property-read QQNodeRole $RollObject
     * @property-read QQNode $Task
     * @property-read QQNode $IsFinalAuthority
     * @property-read QQNode $CanRejected
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeApprovel extends QQNode {
		protected $strTableName = 'approvel';
		protected $strPrimaryKey = 'idapprovel';
		protected $strClassName = 'Approvel';
		public function __get($strName) {
			switch ($strName) {
				case 'Idapprovel':
					return new QQNode('idapprovel', 'Idapprovel', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'CertificateTemplet':
					return new QQNode('certificate_templet', 'CertificateTemplet', 'Integer', $this);
				case 'CertificateTempletObject':
					return new QQNodeCertificateTemplet('certificate_templet', 'CertificateTempletObject', 'Integer', $this);
				case 'Roll':
					return new QQNode('roll', 'Roll', 'Integer', $this);
				case 'RollObject':
					return new QQNodeRole('roll', 'RollObject', 'Integer', $this);
				case 'Task':
					return new QQNode('task', 'Task', 'Integer', $this);
				case 'IsFinalAuthority':
					return new QQNode('is_final_authority', 'IsFinalAuthority', 'Integer', $this);
				case 'CanRejected':
					return new QQNode('can_rejected', 'CanRejected', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idapprovel', 'Idapprovel', 'Integer', $this);
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
     * @property-read QQNode $Idapprovel
     * @property-read QQNode $Code
     * @property-read QQNode $CertificateTemplet
     * @property-read QQNodeCertificateTemplet $CertificateTempletObject
     * @property-read QQNode $Roll
     * @property-read QQNodeRole $RollObject
     * @property-read QQNode $Task
     * @property-read QQNode $IsFinalAuthority
     * @property-read QQNode $CanRejected
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeApprovel extends QQReverseReferenceNode {
		protected $strTableName = 'approvel';
		protected $strPrimaryKey = 'idapprovel';
		protected $strClassName = 'Approvel';
		public function __get($strName) {
			switch ($strName) {
				case 'Idapprovel':
					return new QQNode('idapprovel', 'Idapprovel', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'CertificateTemplet':
					return new QQNode('certificate_templet', 'CertificateTemplet', 'integer', $this);
				case 'CertificateTempletObject':
					return new QQNodeCertificateTemplet('certificate_templet', 'CertificateTempletObject', 'integer', $this);
				case 'Roll':
					return new QQNode('roll', 'Roll', 'integer', $this);
				case 'RollObject':
					return new QQNodeRole('roll', 'RollObject', 'integer', $this);
				case 'Task':
					return new QQNode('task', 'Task', 'integer', $this);
				case 'IsFinalAuthority':
					return new QQNode('is_final_authority', 'IsFinalAuthority', 'integer', $this);
				case 'CanRejected':
					return new QQNode('can_rejected', 'CanRejected', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idapprovel', 'Idapprovel', 'integer', $this);
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
