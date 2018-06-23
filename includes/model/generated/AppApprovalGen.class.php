<?php
	/**
	 * The abstract AppApprovalGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AppApproval subclass which
	 * extends this AppApprovalGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AppApproval class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdappApproval the value for intIdappApproval (Read-Only PK)
	 * @property QDateTime $Date the value for dttDate 
	 * @property integer $Application the value for intApplication (Not Null)
	 * @property integer $Roll the value for intRoll (Not Null)
	 * @property integer $DecisionBy the value for intDecisionBy 
	 * @property integer $Decision the value for intDecision (Not Null)
	 * @property string $Remark the value for strRemark 
	 * @property integer $Code the value for intCode 
	 * @property boolean $IsFinalAuthority the value for blnIsFinalAuthority 
	 * @property boolean $PreviousApproval the value for blnPreviousApproval 
	 * @property boolean $Canrejected the value for blnCanrejected 
	 * @property Application $ApplicationObject the value for the Application object referenced by intApplication (Not Null)
	 * @property Role $RollObject the value for the Role object referenced by intRoll (Not Null)
	 * @property Login $DecisionByObject the value for the Login object referenced by intDecisionBy 
	 * @property Decision $DecisionObject the value for the Decision object referenced by intDecision (Not Null)
	 * @property-read AppApprovalHasRemark $_AppApprovalHasRemarkAsId the value for the private _objAppApprovalHasRemarkAsId (Read-Only) if set due to an expansion on the app_approval_has_remark.app_approval_idapp_approval reverse relationship
	 * @property-read AppApprovalHasRemark[] $_AppApprovalHasRemarkAsIdArray the value for the private _objAppApprovalHasRemarkAsIdArray (Read-Only) if set due to an ExpandAsArray on the app_approval_has_remark.app_approval_idapp_approval reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AppApprovalGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column app_approval.idapp_approval
		 * @var integer intIdappApproval
		 */
		protected $intIdappApproval;
		const IdappApprovalDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.application
		 * @var integer intApplication
		 */
		protected $intApplication;
		const ApplicationDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.roll
		 * @var integer intRoll
		 */
		protected $intRoll;
		const RollDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.decision_by
		 * @var integer intDecisionBy
		 */
		protected $intDecisionBy;
		const DecisionByDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.decision
		 * @var integer intDecision
		 */
		protected $intDecision;
		const DecisionDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.remark
		 * @var string strRemark
		 */
		protected $strRemark;
		const RemarkDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.is_final_authority
		 * @var boolean blnIsFinalAuthority
		 */
		protected $blnIsFinalAuthority;
		const IsFinalAuthorityDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.previous_approval
		 * @var boolean blnPreviousApproval
		 */
		protected $blnPreviousApproval;
		const PreviousApprovalDefault = null;


		/**
		 * Protected member variable that maps to the database column app_approval.canrejected
		 * @var boolean blnCanrejected
		 */
		protected $blnCanrejected;
		const CanrejectedDefault = null;


		/**
		 * Private member variable that stores a reference to a single AppApprovalHasRemarkAsId object
		 * (of type AppApprovalHasRemark), if this AppApproval object was restored with
		 * an expansion on the app_approval_has_remark association table.
		 * @var AppApprovalHasRemark _objAppApprovalHasRemarkAsId;
		 */
		private $_objAppApprovalHasRemarkAsId;

		/**
		 * Private member variable that stores a reference to an array of AppApprovalHasRemarkAsId objects
		 * (of type AppApprovalHasRemark[]), if this AppApproval object was restored with
		 * an ExpandAsArray on the app_approval_has_remark association table.
		 * @var AppApprovalHasRemark[] _objAppApprovalHasRemarkAsIdArray;
		 */
		private $_objAppApprovalHasRemarkAsIdArray = null;

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
		 * in the database column app_approval.application.
		 *
		 * NOTE: Always use the ApplicationObject property getter to correctly retrieve this Application object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Application objApplicationObject
		 */
		protected $objApplicationObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column app_approval.roll.
		 *
		 * NOTE: Always use the RollObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRollObject
		 */
		protected $objRollObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column app_approval.decision_by.
		 *
		 * NOTE: Always use the DecisionByObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objDecisionByObject
		 */
		protected $objDecisionByObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column app_approval.decision.
		 *
		 * NOTE: Always use the DecisionObject property getter to correctly retrieve this Decision object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Decision objDecisionObject
		 */
		protected $objDecisionObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdappApproval = AppApproval::IdappApprovalDefault;
			$this->dttDate = (AppApproval::DateDefault === null)?null:new QDateTime(AppApproval::DateDefault);
			$this->intApplication = AppApproval::ApplicationDefault;
			$this->intRoll = AppApproval::RollDefault;
			$this->intDecisionBy = AppApproval::DecisionByDefault;
			$this->intDecision = AppApproval::DecisionDefault;
			$this->strRemark = AppApproval::RemarkDefault;
			$this->intCode = AppApproval::CodeDefault;
			$this->blnIsFinalAuthority = AppApproval::IsFinalAuthorityDefault;
			$this->blnPreviousApproval = AppApproval::PreviousApprovalDefault;
			$this->blnCanrejected = AppApproval::CanrejectedDefault;
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
		 * Load a AppApproval from PK Info
		 * @param integer $intIdappApproval
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval
		 */
		public static function Load($intIdappApproval, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppApproval', $intIdappApproval);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AppApproval::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppApproval()->IdappApproval, $intIdappApproval)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AppApprovals
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AppApproval::QueryArray to perform the LoadAll query
			try {
				return AppApproval::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AppApprovals
		 * @return int
		 */
		public static function CountAll() {
			// Call AppApproval::QueryCount to perform the CountAll query
			return AppApproval::QueryCount(QQ::All());
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
			$objDatabase = AppApproval::GetDatabase();

			// Create/Build out the QueryBuilder object with AppApproval-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'app_approval');

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
				AppApproval::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('app_approval');

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
		 * Static Qcubed Query method to query for a single AppApproval object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppApproval the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppApproval::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AppApproval object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AppApproval::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AppApproval::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AppApproval objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AppApproval[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppApproval::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AppApproval::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AppApproval::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AppApproval objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AppApproval::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AppApproval::GetDatabase();

			$strQuery = AppApproval::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/appapproval', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AppApproval::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AppApproval
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'app_approval';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idapp_approval', $strAliasPrefix . 'idapp_approval');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idapp_approval', $strAliasPrefix . 'idapp_approval');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'application', $strAliasPrefix . 'application');
			    $objBuilder->AddSelectItem($strTableName, 'roll', $strAliasPrefix . 'roll');
			    $objBuilder->AddSelectItem($strTableName, 'decision_by', $strAliasPrefix . 'decision_by');
			    $objBuilder->AddSelectItem($strTableName, 'decision', $strAliasPrefix . 'decision');
			    $objBuilder->AddSelectItem($strTableName, 'remark', $strAliasPrefix . 'remark');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'is_final_authority', $strAliasPrefix . 'is_final_authority');
			    $objBuilder->AddSelectItem($strTableName, 'previous_approval', $strAliasPrefix . 'previous_approval');
			    $objBuilder->AddSelectItem($strTableName, 'canrejected', $strAliasPrefix . 'canrejected');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AppApproval from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AppApproval::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AppApproval
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdappApproval == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'app_approval__';


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

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'app_approval__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AppApproval object
			$objToReturn = new AppApproval();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idapp_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdappApproval = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'application';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intApplication = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'roll';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRoll = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'decision_by';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDecisionBy = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'decision';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDecision = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'remark';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRemark = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'is_final_authority';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnIsFinalAuthority = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'previous_approval';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnPreviousApproval = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'canrejected';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCanrejected = $objDbRow->GetColumn($strAliasName, 'Bit');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdappApproval != $objPreviousItem->IdappApproval) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAppApprovalHasRemarkAsIdArray);
					$cnt = count($objToReturn->_objAppApprovalHasRemarkAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAppApprovalHasRemarkAsIdArray, $objToReturn->_objAppApprovalHasRemarkAsIdArray)) {
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
				$strAliasPrefix = 'app_approval__';

			// Check for ApplicationObject Early Binding
			$strAlias = $strAliasPrefix . 'application__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objApplicationObject = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RollObject Early Binding
			$strAlias = $strAliasPrefix . 'roll__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRollObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'roll__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DecisionByObject Early Binding
			$strAlias = $strAliasPrefix . 'decision_by__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDecisionByObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'decision_by__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DecisionObject Early Binding
			$strAlias = $strAliasPrefix . 'decision__iddecision';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDecisionObject = Decision::InstantiateDbRow($objDbRow, $strAliasPrefix . 'decision__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




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

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AppApprovals from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AppApproval[]
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
					$objItem = AppApproval::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AppApproval::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AppApproval object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AppApproval next row resulting from the query
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
			return AppApproval::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AppApproval object,
		 * by IdappApproval Index(es)
		 * @param integer $intIdappApproval
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval
		*/
		public static function LoadByIdappApproval($intIdappApproval, $objOptionalClauses = null) {
			return AppApproval::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AppApproval()->IdappApproval, $intIdappApproval)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of AppApproval objects,
		 * by Decision Index(es)
		 * @param integer $intDecision
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public static function LoadArrayByDecision($intDecision, $objOptionalClauses = null) {
			// Call AppApproval::QueryArray to perform the LoadArrayByDecision query
			try {
				return AppApproval::QueryArray(
					QQ::Equal(QQN::AppApproval()->Decision, $intDecision),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppApprovals
		 * by Decision Index(es)
		 * @param integer $intDecision
		 * @return int
		*/
		public static function CountByDecision($intDecision) {
			// Call AppApproval::QueryCount to perform the CountByDecision query
			return AppApproval::QueryCount(
				QQ::Equal(QQN::AppApproval()->Decision, $intDecision)
			);
		}

		/**
		 * Load an array of AppApproval objects,
		 * by Application Index(es)
		 * @param integer $intApplication
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public static function LoadArrayByApplication($intApplication, $objOptionalClauses = null) {
			// Call AppApproval::QueryArray to perform the LoadArrayByApplication query
			try {
				return AppApproval::QueryArray(
					QQ::Equal(QQN::AppApproval()->Application, $intApplication),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppApprovals
		 * by Application Index(es)
		 * @param integer $intApplication
		 * @return int
		*/
		public static function CountByApplication($intApplication) {
			// Call AppApproval::QueryCount to perform the CountByApplication query
			return AppApproval::QueryCount(
				QQ::Equal(QQN::AppApproval()->Application, $intApplication)
			);
		}

		/**
		 * Load an array of AppApproval objects,
		 * by Roll Index(es)
		 * @param integer $intRoll
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public static function LoadArrayByRoll($intRoll, $objOptionalClauses = null) {
			// Call AppApproval::QueryArray to perform the LoadArrayByRoll query
			try {
				return AppApproval::QueryArray(
					QQ::Equal(QQN::AppApproval()->Roll, $intRoll),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppApprovals
		 * by Roll Index(es)
		 * @param integer $intRoll
		 * @return int
		*/
		public static function CountByRoll($intRoll) {
			// Call AppApproval::QueryCount to perform the CountByRoll query
			return AppApproval::QueryCount(
				QQ::Equal(QQN::AppApproval()->Roll, $intRoll)
			);
		}

		/**
		 * Load an array of AppApproval objects,
		 * by DecisionBy Index(es)
		 * @param integer $intDecisionBy
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApproval[]
		*/
		public static function LoadArrayByDecisionBy($intDecisionBy, $objOptionalClauses = null) {
			// Call AppApproval::QueryArray to perform the LoadArrayByDecisionBy query
			try {
				return AppApproval::QueryArray(
					QQ::Equal(QQN::AppApproval()->DecisionBy, $intDecisionBy),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AppApprovals
		 * by DecisionBy Index(es)
		 * @param integer $intDecisionBy
		 * @return int
		*/
		public static function CountByDecisionBy($intDecisionBy) {
			// Call AppApproval::QueryCount to perform the CountByDecisionBy query
			return AppApproval::QueryCount(
				QQ::Equal(QQN::AppApproval()->DecisionBy, $intDecisionBy)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this AppApproval
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `app_approval` (
							`date`,
							`application`,
							`roll`,
							`decision_by`,
							`decision`,
							`remark`,
							`code`,
							`is_final_authority`,
							`previous_approval`,
							`canrejected`
						) VALUES (
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->intApplication) . ',
							' . $objDatabase->SqlVariable($this->intRoll) . ',
							' . $objDatabase->SqlVariable($this->intDecisionBy) . ',
							' . $objDatabase->SqlVariable($this->intDecision) . ',
							' . $objDatabase->SqlVariable($this->strRemark) . ',
							' . $objDatabase->SqlVariable($this->intCode) . ',
							' . $objDatabase->SqlVariable($this->blnIsFinalAuthority) . ',
							' . $objDatabase->SqlVariable($this->blnPreviousApproval) . ',
							' . $objDatabase->SqlVariable($this->blnCanrejected) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdappApproval = $objDatabase->InsertId('app_approval', 'idapp_approval');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`app_approval`
						SET
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`application` = ' . $objDatabase->SqlVariable($this->intApplication) . ',
							`roll` = ' . $objDatabase->SqlVariable($this->intRoll) . ',
							`decision_by` = ' . $objDatabase->SqlVariable($this->intDecisionBy) . ',
							`decision` = ' . $objDatabase->SqlVariable($this->intDecision) . ',
							`remark` = ' . $objDatabase->SqlVariable($this->strRemark) . ',
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . ',
							`is_final_authority` = ' . $objDatabase->SqlVariable($this->blnIsFinalAuthority) . ',
							`previous_approval` = ' . $objDatabase->SqlVariable($this->blnPreviousApproval) . ',
							`canrejected` = ' . $objDatabase->SqlVariable($this->blnCanrejected) . '
						WHERE
							`idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '
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
		 * Delete this AppApproval
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdappApproval)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AppApproval with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`
				WHERE
					`idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AppApproval ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AppApproval', $this->intIdappApproval);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AppApprovals
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate app_approval table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `app_approval`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AppApproval from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AppApproval object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AppApproval::Load($this->intIdappApproval);

			// Update $this's local variables to match
			$this->dttDate = $objReloaded->dttDate;
			$this->Application = $objReloaded->Application;
			$this->Roll = $objReloaded->Roll;
			$this->DecisionBy = $objReloaded->DecisionBy;
			$this->Decision = $objReloaded->Decision;
			$this->strRemark = $objReloaded->strRemark;
			$this->intCode = $objReloaded->intCode;
			$this->blnIsFinalAuthority = $objReloaded->blnIsFinalAuthority;
			$this->blnPreviousApproval = $objReloaded->blnPreviousApproval;
			$this->blnCanrejected = $objReloaded->blnCanrejected;
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
				case 'IdappApproval':
					/**
					 * Gets the value for intIdappApproval (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdappApproval;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Application':
					/**
					 * Gets the value for intApplication (Not Null)
					 * @return integer
					 */
					return $this->intApplication;

				case 'Roll':
					/**
					 * Gets the value for intRoll (Not Null)
					 * @return integer
					 */
					return $this->intRoll;

				case 'DecisionBy':
					/**
					 * Gets the value for intDecisionBy 
					 * @return integer
					 */
					return $this->intDecisionBy;

				case 'Decision':
					/**
					 * Gets the value for intDecision (Not Null)
					 * @return integer
					 */
					return $this->intDecision;

				case 'Remark':
					/**
					 * Gets the value for strRemark 
					 * @return string
					 */
					return $this->strRemark;

				case 'Code':
					/**
					 * Gets the value for intCode 
					 * @return integer
					 */
					return $this->intCode;

				case 'IsFinalAuthority':
					/**
					 * Gets the value for blnIsFinalAuthority 
					 * @return boolean
					 */
					return $this->blnIsFinalAuthority;

				case 'PreviousApproval':
					/**
					 * Gets the value for blnPreviousApproval 
					 * @return boolean
					 */
					return $this->blnPreviousApproval;

				case 'Canrejected':
					/**
					 * Gets the value for blnCanrejected 
					 * @return boolean
					 */
					return $this->blnCanrejected;


				///////////////////
				// Member Objects
				///////////////////
				case 'ApplicationObject':
					/**
					 * Gets the value for the Application object referenced by intApplication (Not Null)
					 * @return Application
					 */
					try {
						if ((!$this->objApplicationObject) && (!is_null($this->intApplication)))
							$this->objApplicationObject = Application::Load($this->intApplication);
						return $this->objApplicationObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RollObject':
					/**
					 * Gets the value for the Role object referenced by intRoll (Not Null)
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

				case 'DecisionByObject':
					/**
					 * Gets the value for the Login object referenced by intDecisionBy 
					 * @return Login
					 */
					try {
						if ((!$this->objDecisionByObject) && (!is_null($this->intDecisionBy)))
							$this->objDecisionByObject = Login::Load($this->intDecisionBy);
						return $this->objDecisionByObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DecisionObject':
					/**
					 * Gets the value for the Decision object referenced by intDecision (Not Null)
					 * @return Decision
					 */
					try {
						if ((!$this->objDecisionObject) && (!is_null($this->intDecision)))
							$this->objDecisionObject = Decision::Load($this->intDecision);
						return $this->objDecisionObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AppApprovalHasRemarkAsId':
					/**
					 * Gets the value for the private _objAppApprovalHasRemarkAsId (Read-Only)
					 * if set due to an expansion on the app_approval_has_remark.app_approval_idapp_approval reverse relationship
					 * @return AppApprovalHasRemark
					 */
					return $this->_objAppApprovalHasRemarkAsId;

				case '_AppApprovalHasRemarkAsIdArray':
					/**
					 * Gets the value for the private _objAppApprovalHasRemarkAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the app_approval_has_remark.app_approval_idapp_approval reverse relationship
					 * @return AppApprovalHasRemark[]
					 */
					return $this->_objAppApprovalHasRemarkAsIdArray;


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
				case 'Date':
					/**
					 * Sets the value for dttDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Application':
					/**
					 * Sets the value for intApplication (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objApplicationObject = null;
						return ($this->intApplication = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Roll':
					/**
					 * Sets the value for intRoll (Not Null)
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

				case 'DecisionBy':
					/**
					 * Sets the value for intDecisionBy 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDecisionByObject = null;
						return ($this->intDecisionBy = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Decision':
					/**
					 * Sets the value for intDecision (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDecisionObject = null;
						return ($this->intDecision = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Remark':
					/**
					 * Sets the value for strRemark 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRemark = QType::Cast($mixValue, QType::String));
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

				case 'IsFinalAuthority':
					/**
					 * Sets the value for blnIsFinalAuthority 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnIsFinalAuthority = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PreviousApproval':
					/**
					 * Sets the value for blnPreviousApproval 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnPreviousApproval = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Canrejected':
					/**
					 * Sets the value for blnCanrejected 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCanrejected = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'ApplicationObject':
					/**
					 * Sets the value for the Application object referenced by intApplication (Not Null)
					 * @param Application $mixValue
					 * @return Application
					 */
					if (is_null($mixValue)) {
						$this->intApplication = null;
						$this->objApplicationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Application object
						try {
							$mixValue = QType::Cast($mixValue, 'Application');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Application object
						if (is_null($mixValue->Idapplication))
							throw new QCallerException('Unable to set an unsaved ApplicationObject for this AppApproval');

						// Update Local Member Variables
						$this->objApplicationObject = $mixValue;
						$this->intApplication = $mixValue->Idapplication;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RollObject':
					/**
					 * Sets the value for the Role object referenced by intRoll (Not Null)
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
							throw new QCallerException('Unable to set an unsaved RollObject for this AppApproval');

						// Update Local Member Variables
						$this->objRollObject = $mixValue;
						$this->intRoll = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DecisionByObject':
					/**
					 * Sets the value for the Login object referenced by intDecisionBy 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intDecisionBy = null;
						$this->objDecisionByObject = null;
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
							throw new QCallerException('Unable to set an unsaved DecisionByObject for this AppApproval');

						// Update Local Member Variables
						$this->objDecisionByObject = $mixValue;
						$this->intDecisionBy = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DecisionObject':
					/**
					 * Sets the value for the Decision object referenced by intDecision (Not Null)
					 * @param Decision $mixValue
					 * @return Decision
					 */
					if (is_null($mixValue)) {
						$this->intDecision = null;
						$this->objDecisionObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Decision object
						try {
							$mixValue = QType::Cast($mixValue, 'Decision');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Decision object
						if (is_null($mixValue->Iddecision))
							throw new QCallerException('Unable to set an unsaved DecisionObject for this AppApproval');

						// Update Local Member Variables
						$this->objDecisionObject = $mixValue;
						$this->intDecision = $mixValue->Iddecision;

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



		// Related Objects' Methods for AppApprovalHasRemarkAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AppApprovalHasRemarksAsId as an array of AppApprovalHasRemark objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AppApprovalHasRemark[]
		*/
		public function GetAppApprovalHasRemarkAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdappApproval)))
				return array();

			try {
				return AppApprovalHasRemark::LoadArrayByAppApprovalIdappApproval($this->intIdappApproval, $objOptionalClauses);
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
			if ((is_null($this->intIdappApproval)))
				return 0;

			return AppApprovalHasRemark::CountByAppApprovalIdappApproval($this->intIdappApproval);
		}

		/**
		 * Associates a AppApprovalHasRemarkAsId
		 * @param AppApprovalHasRemark $objAppApprovalHasRemark
		 * @return void
		*/
		public function AssociateAppApprovalHasRemarkAsId(AppApprovalHasRemark $objAppApprovalHasRemark) {
			if ((is_null($this->intIdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalHasRemarkAsId on this unsaved AppApproval.');
			if ((is_null($objAppApprovalHasRemark->AppApprovalIdappApproval)) || (is_null($objAppApprovalHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAppApprovalHasRemarkAsId on this AppApproval with an unsaved AppApprovalHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval_has_remark`
				SET
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '
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
			if ((is_null($this->intIdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved AppApproval.');
			if ((is_null($objAppApprovalHasRemark->AppApprovalIdappApproval)) || (is_null($objAppApprovalHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this AppApproval with an unsaved AppApprovalHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval_has_remark`
				SET
					`app_approval_idapp_approval` = null
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->AppApprovalIdappApproval) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->RemarkIdremark) . ' AND
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '
			');
		}

		/**
		 * Unassociates all AppApprovalHasRemarksAsId
		 * @return void
		*/
		public function UnassociateAllAppApprovalHasRemarksAsId() {
			if ((is_null($this->intIdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`app_approval_has_remark`
				SET
					`app_approval_idapp_approval` = null
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '
			');
		}

		/**
		 * Deletes an associated AppApprovalHasRemarkAsId
		 * @param AppApprovalHasRemark $objAppApprovalHasRemark
		 * @return void
		*/
		public function DeleteAssociatedAppApprovalHasRemarkAsId(AppApprovalHasRemark $objAppApprovalHasRemark) {
			if ((is_null($this->intIdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved AppApproval.');
			if ((is_null($objAppApprovalHasRemark->AppApprovalIdappApproval)) || (is_null($objAppApprovalHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this AppApproval with an unsaved AppApprovalHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval_has_remark`
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->AppApprovalIdappApproval) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objAppApprovalHasRemark->RemarkIdremark) . ' AND
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '
			');
		}

		/**
		 * Deletes all associated AppApprovalHasRemarksAsId
		 * @return void
		*/
		public function DeleteAllAppApprovalHasRemarksAsId() {
			if ((is_null($this->intIdappApproval)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAppApprovalHasRemarkAsId on this unsaved AppApproval.');

			// Get the Database Object for this Class
			$objDatabase = AppApproval::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`app_approval_has_remark`
				WHERE
					`app_approval_idapp_approval` = ' . $objDatabase->SqlVariable($this->intIdappApproval) . '
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
			return "app_approval";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AppApproval::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AppApproval"><sequence>';
			$strToReturn .= '<element name="IdappApproval" type="xsd:int"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="ApplicationObject" type="xsd1:Application"/>';
			$strToReturn .= '<element name="RollObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="DecisionByObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="DecisionObject" type="xsd1:Decision"/>';
			$strToReturn .= '<element name="Remark" type="xsd:string"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="IsFinalAuthority" type="xsd:boolean"/>';
			$strToReturn .= '<element name="PreviousApproval" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Canrejected" type="xsd:boolean"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AppApproval', $strComplexTypeArray)) {
				$strComplexTypeArray['AppApproval'] = AppApproval::GetSoapComplexTypeXml();
				Application::AlterSoapComplexTypeArray($strComplexTypeArray);
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				Decision::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AppApproval::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AppApproval();
			if (property_exists($objSoapObject, 'IdappApproval'))
				$objToReturn->intIdappApproval = $objSoapObject->IdappApproval;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if ((property_exists($objSoapObject, 'ApplicationObject')) &&
				($objSoapObject->ApplicationObject))
				$objToReturn->ApplicationObject = Application::GetObjectFromSoapObject($objSoapObject->ApplicationObject);
			if ((property_exists($objSoapObject, 'RollObject')) &&
				($objSoapObject->RollObject))
				$objToReturn->RollObject = Role::GetObjectFromSoapObject($objSoapObject->RollObject);
			if ((property_exists($objSoapObject, 'DecisionByObject')) &&
				($objSoapObject->DecisionByObject))
				$objToReturn->DecisionByObject = Login::GetObjectFromSoapObject($objSoapObject->DecisionByObject);
			if ((property_exists($objSoapObject, 'DecisionObject')) &&
				($objSoapObject->DecisionObject))
				$objToReturn->DecisionObject = Decision::GetObjectFromSoapObject($objSoapObject->DecisionObject);
			if (property_exists($objSoapObject, 'Remark'))
				$objToReturn->strRemark = $objSoapObject->Remark;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'IsFinalAuthority'))
				$objToReturn->blnIsFinalAuthority = $objSoapObject->IsFinalAuthority;
			if (property_exists($objSoapObject, 'PreviousApproval'))
				$objToReturn->blnPreviousApproval = $objSoapObject->PreviousApproval;
			if (property_exists($objSoapObject, 'Canrejected'))
				$objToReturn->blnCanrejected = $objSoapObject->Canrejected;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AppApproval::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->objApplicationObject)
				$objObject->objApplicationObject = Application::GetSoapObjectFromObject($objObject->objApplicationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intApplication = null;
			if ($objObject->objRollObject)
				$objObject->objRollObject = Role::GetSoapObjectFromObject($objObject->objRollObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRoll = null;
			if ($objObject->objDecisionByObject)
				$objObject->objDecisionByObject = Login::GetSoapObjectFromObject($objObject->objDecisionByObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDecisionBy = null;
			if ($objObject->objDecisionObject)
				$objObject->objDecisionObject = Decision::GetSoapObjectFromObject($objObject->objDecisionObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDecision = null;
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
			$iArray['IdappApproval'] = $this->intIdappApproval;
			$iArray['Date'] = $this->dttDate;
			$iArray['Application'] = $this->intApplication;
			$iArray['Roll'] = $this->intRoll;
			$iArray['DecisionBy'] = $this->intDecisionBy;
			$iArray['Decision'] = $this->intDecision;
			$iArray['Remark'] = $this->strRemark;
			$iArray['Code'] = $this->intCode;
			$iArray['IsFinalAuthority'] = $this->blnIsFinalAuthority;
			$iArray['PreviousApproval'] = $this->blnPreviousApproval;
			$iArray['Canrejected'] = $this->blnCanrejected;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdappApproval ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdappApproval
     * @property-read QQNode $Date
     * @property-read QQNode $Application
     * @property-read QQNodeApplication $ApplicationObject
     * @property-read QQNode $Roll
     * @property-read QQNodeRole $RollObject
     * @property-read QQNode $DecisionBy
     * @property-read QQNodeLogin $DecisionByObject
     * @property-read QQNode $Decision
     * @property-read QQNodeDecision $DecisionObject
     * @property-read QQNode $Remark
     * @property-read QQNode $Code
     * @property-read QQNode $IsFinalAuthority
     * @property-read QQNode $PreviousApproval
     * @property-read QQNode $Canrejected
     *
     *
     * @property-read QQReverseReferenceNodeAppApprovalHasRemark $AppApprovalHasRemarkAsId

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAppApproval extends QQNode {
		protected $strTableName = 'app_approval';
		protected $strPrimaryKey = 'idapp_approval';
		protected $strClassName = 'AppApproval';
		public function __get($strName) {
			switch ($strName) {
				case 'IdappApproval':
					return new QQNode('idapp_approval', 'IdappApproval', 'Integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Application':
					return new QQNode('application', 'Application', 'Integer', $this);
				case 'ApplicationObject':
					return new QQNodeApplication('application', 'ApplicationObject', 'Integer', $this);
				case 'Roll':
					return new QQNode('roll', 'Roll', 'Integer', $this);
				case 'RollObject':
					return new QQNodeRole('roll', 'RollObject', 'Integer', $this);
				case 'DecisionBy':
					return new QQNode('decision_by', 'DecisionBy', 'Integer', $this);
				case 'DecisionByObject':
					return new QQNodeLogin('decision_by', 'DecisionByObject', 'Integer', $this);
				case 'Decision':
					return new QQNode('decision', 'Decision', 'Integer', $this);
				case 'DecisionObject':
					return new QQNodeDecision('decision', 'DecisionObject', 'Integer', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'Blob', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'IsFinalAuthority':
					return new QQNode('is_final_authority', 'IsFinalAuthority', 'Bit', $this);
				case 'PreviousApproval':
					return new QQNode('previous_approval', 'PreviousApproval', 'Bit', $this);
				case 'Canrejected':
					return new QQNode('canrejected', 'Canrejected', 'Bit', $this);
				case 'AppApprovalHasRemarkAsId':
					return new QQReverseReferenceNodeAppApprovalHasRemark($this, 'appapprovalhasremarkasid', 'reverse_reference', 'app_approval_idapp_approval');

				case '_PrimaryKeyNode':
					return new QQNode('idapp_approval', 'IdappApproval', 'Integer', $this);
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
     * @property-read QQNode $IdappApproval
     * @property-read QQNode $Date
     * @property-read QQNode $Application
     * @property-read QQNodeApplication $ApplicationObject
     * @property-read QQNode $Roll
     * @property-read QQNodeRole $RollObject
     * @property-read QQNode $DecisionBy
     * @property-read QQNodeLogin $DecisionByObject
     * @property-read QQNode $Decision
     * @property-read QQNodeDecision $DecisionObject
     * @property-read QQNode $Remark
     * @property-read QQNode $Code
     * @property-read QQNode $IsFinalAuthority
     * @property-read QQNode $PreviousApproval
     * @property-read QQNode $Canrejected
     *
     *
     * @property-read QQReverseReferenceNodeAppApprovalHasRemark $AppApprovalHasRemarkAsId

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAppApproval extends QQReverseReferenceNode {
		protected $strTableName = 'app_approval';
		protected $strPrimaryKey = 'idapp_approval';
		protected $strClassName = 'AppApproval';
		public function __get($strName) {
			switch ($strName) {
				case 'IdappApproval':
					return new QQNode('idapp_approval', 'IdappApproval', 'integer', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Application':
					return new QQNode('application', 'Application', 'integer', $this);
				case 'ApplicationObject':
					return new QQNodeApplication('application', 'ApplicationObject', 'integer', $this);
				case 'Roll':
					return new QQNode('roll', 'Roll', 'integer', $this);
				case 'RollObject':
					return new QQNodeRole('roll', 'RollObject', 'integer', $this);
				case 'DecisionBy':
					return new QQNode('decision_by', 'DecisionBy', 'integer', $this);
				case 'DecisionByObject':
					return new QQNodeLogin('decision_by', 'DecisionByObject', 'integer', $this);
				case 'Decision':
					return new QQNode('decision', 'Decision', 'integer', $this);
				case 'DecisionObject':
					return new QQNodeDecision('decision', 'DecisionObject', 'integer', $this);
				case 'Remark':
					return new QQNode('remark', 'Remark', 'string', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'IsFinalAuthority':
					return new QQNode('is_final_authority', 'IsFinalAuthority', 'boolean', $this);
				case 'PreviousApproval':
					return new QQNode('previous_approval', 'PreviousApproval', 'boolean', $this);
				case 'Canrejected':
					return new QQNode('canrejected', 'Canrejected', 'boolean', $this);
				case 'AppApprovalHasRemarkAsId':
					return new QQReverseReferenceNodeAppApprovalHasRemark($this, 'appapprovalhasremarkasid', 'reverse_reference', 'app_approval_idapp_approval');

				case '_PrimaryKeyNode':
					return new QQNode('idapp_approval', 'IdappApproval', 'integer', $this);
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
