<?php
	/**
	 * The abstract ReceiptsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Receipts subclass which
	 * extends this ReceiptsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Receipts class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Idreceipts the value for intIdreceipts (Read-Only PK)
	 * @property integer $TransCat the value for intTransCat 
	 * @property integer $MemberId the value for intMemberId 
	 * @property integer $TransMode the value for intTransMode 
	 * @property integer $RegMember the value for intRegMember 
	 * @property string $Desc the value for strDesc 
	 * @property QDateTime $Date the value for dttDate 
	 * @property string $Amount the value for strAmount 
	 * @property ReceiptCat $TransCatObject the value for the ReceiptCat object referenced by intTransCat 
	 * @property AssMember $Member the value for the AssMember object referenced by intMemberId 
	 * @property TransMode $TransModeObject the value for the TransMode object referenced by intTransMode 
	 * @property RegMember $RegMemberObject the value for the RegMember object referenced by intRegMember 
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ReceiptsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column receipts.idreceipts
		 * @var integer intIdreceipts
		 */
		protected $intIdreceipts;
		const IdreceiptsDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.trans_cat
		 * @var integer intTransCat
		 */
		protected $intTransCat;
		const TransCatDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.member_id
		 * @var integer intMemberId
		 */
		protected $intMemberId;
		const MemberIdDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.trans_mode
		 * @var integer intTransMode
		 */
		protected $intTransMode;
		const TransModeDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.reg_member
		 * @var integer intRegMember
		 */
		protected $intRegMember;
		const RegMemberDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.desc
		 * @var string strDesc
		 */
		protected $strDesc;
		const DescMaxLength = 255;
		const DescDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.date
		 * @var QDateTime dttDate
		 */
		protected $dttDate;
		const DateDefault = null;


		/**
		 * Protected member variable that maps to the database column receipts.amount
		 * @var string strAmount
		 */
		protected $strAmount;
		const AmountDefault = null;


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
		 * in the database column receipts.trans_cat.
		 *
		 * NOTE: Always use the TransCatObject property getter to correctly retrieve this ReceiptCat object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var ReceiptCat objTransCatObject
		 */
		protected $objTransCatObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column receipts.member_id.
		 *
		 * NOTE: Always use the Member property getter to correctly retrieve this AssMember object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AssMember objMember
		 */
		protected $objMember;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column receipts.trans_mode.
		 *
		 * NOTE: Always use the TransModeObject property getter to correctly retrieve this TransMode object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TransMode objTransModeObject
		 */
		protected $objTransModeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column receipts.reg_member.
		 *
		 * NOTE: Always use the RegMemberObject property getter to correctly retrieve this RegMember object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var RegMember objRegMemberObject
		 */
		protected $objRegMemberObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdreceipts = Receipts::IdreceiptsDefault;
			$this->intTransCat = Receipts::TransCatDefault;
			$this->intMemberId = Receipts::MemberIdDefault;
			$this->intTransMode = Receipts::TransModeDefault;
			$this->intRegMember = Receipts::RegMemberDefault;
			$this->strDesc = Receipts::DescDefault;
			$this->dttDate = (Receipts::DateDefault === null)?null:new QDateTime(Receipts::DateDefault);
			$this->strAmount = Receipts::AmountDefault;
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
		 * Load a Receipts from PK Info
		 * @param integer $intIdreceipts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts
		 */
		public static function Load($intIdreceipts, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Receipts', $intIdreceipts);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Receipts::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Receipts()->Idreceipts, $intIdreceipts)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Receiptses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Receipts::QueryArray to perform the LoadAll query
			try {
				return Receipts::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Receiptses
		 * @return int
		 */
		public static function CountAll() {
			// Call Receipts::QueryCount to perform the CountAll query
			return Receipts::QueryCount(QQ::All());
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
			$objDatabase = Receipts::GetDatabase();

			// Create/Build out the QueryBuilder object with Receipts-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'receipts');

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
				Receipts::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('receipts');

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
		 * Static Qcubed Query method to query for a single Receipts object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Receipts the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Receipts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Receipts object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Receipts::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Receipts::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Receipts objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Receipts[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Receipts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Receipts::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Receipts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Receipts objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Receipts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Receipts::GetDatabase();

			$strQuery = Receipts::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/receipts', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Receipts::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Receipts
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'receipts';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idreceipts', $strAliasPrefix . 'idreceipts');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idreceipts', $strAliasPrefix . 'idreceipts');
			    $objBuilder->AddSelectItem($strTableName, 'trans_cat', $strAliasPrefix . 'trans_cat');
			    $objBuilder->AddSelectItem($strTableName, 'member_id', $strAliasPrefix . 'member_id');
			    $objBuilder->AddSelectItem($strTableName, 'trans_mode', $strAliasPrefix . 'trans_mode');
			    $objBuilder->AddSelectItem($strTableName, 'reg_member', $strAliasPrefix . 'reg_member');
			    $objBuilder->AddSelectItem($strTableName, 'desc', $strAliasPrefix . 'desc');
			    $objBuilder->AddSelectItem($strTableName, 'date', $strAliasPrefix . 'date');
			    $objBuilder->AddSelectItem($strTableName, 'amount', $strAliasPrefix . 'amount');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Receipts from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Receipts::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Receipts
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Receipts object
			$objToReturn = new Receipts();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idreceipts';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdreceipts = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'trans_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTransCat = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'member_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMemberId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'trans_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTransMode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'reg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRegMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'desc';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDesc = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttDate = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'amount';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAmount = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Idreceipts != $objPreviousItem->Idreceipts) {
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
				$strAliasPrefix = 'receipts__';

			// Check for TransCatObject Early Binding
			$strAlias = $strAliasPrefix . 'trans_cat__idreceipt_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTransCatObject = ReceiptCat::InstantiateDbRow($objDbRow, $strAliasPrefix . 'trans_cat__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Member Early Binding
			$strAlias = $strAliasPrefix . 'member_id__idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMember = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TransModeObject Early Binding
			$strAlias = $strAliasPrefix . 'trans_mode__idtrans_mode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTransModeObject = TransMode::InstantiateDbRow($objDbRow, $strAliasPrefix . 'trans_mode__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for RegMemberObject Early Binding
			$strAlias = $strAliasPrefix . 'reg_member__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRegMemberObject = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'reg_member__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Receiptses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Receipts[]
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
					$objItem = Receipts::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Receipts::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Receipts object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Receipts next row resulting from the query
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
			return Receipts::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Receipts object,
		 * by Idreceipts Index(es)
		 * @param integer $intIdreceipts
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts
		*/
		public static function LoadByIdreceipts($intIdreceipts, $objOptionalClauses = null) {
			return Receipts::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Receipts()->Idreceipts, $intIdreceipts)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Receipts objects,
		 * by TransCat Index(es)
		 * @param integer $intTransCat
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		*/
		public static function LoadArrayByTransCat($intTransCat, $objOptionalClauses = null) {
			// Call Receipts::QueryArray to perform the LoadArrayByTransCat query
			try {
				return Receipts::QueryArray(
					QQ::Equal(QQN::Receipts()->TransCat, $intTransCat),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Receiptses
		 * by TransCat Index(es)
		 * @param integer $intTransCat
		 * @return int
		*/
		public static function CountByTransCat($intTransCat) {
			// Call Receipts::QueryCount to perform the CountByTransCat query
			return Receipts::QueryCount(
				QQ::Equal(QQN::Receipts()->TransCat, $intTransCat)
			);
		}

		/**
		 * Load an array of Receipts objects,
		 * by TransMode Index(es)
		 * @param integer $intTransMode
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		*/
		public static function LoadArrayByTransMode($intTransMode, $objOptionalClauses = null) {
			// Call Receipts::QueryArray to perform the LoadArrayByTransMode query
			try {
				return Receipts::QueryArray(
					QQ::Equal(QQN::Receipts()->TransMode, $intTransMode),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Receiptses
		 * by TransMode Index(es)
		 * @param integer $intTransMode
		 * @return int
		*/
		public static function CountByTransMode($intTransMode) {
			// Call Receipts::QueryCount to perform the CountByTransMode query
			return Receipts::QueryCount(
				QQ::Equal(QQN::Receipts()->TransMode, $intTransMode)
			);
		}

		/**
		 * Load an array of Receipts objects,
		 * by MemberId Index(es)
		 * @param integer $intMemberId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		*/
		public static function LoadArrayByMemberId($intMemberId, $objOptionalClauses = null) {
			// Call Receipts::QueryArray to perform the LoadArrayByMemberId query
			try {
				return Receipts::QueryArray(
					QQ::Equal(QQN::Receipts()->MemberId, $intMemberId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Receiptses
		 * by MemberId Index(es)
		 * @param integer $intMemberId
		 * @return int
		*/
		public static function CountByMemberId($intMemberId) {
			// Call Receipts::QueryCount to perform the CountByMemberId query
			return Receipts::QueryCount(
				QQ::Equal(QQN::Receipts()->MemberId, $intMemberId)
			);
		}

		/**
		 * Load an array of Receipts objects,
		 * by RegMember Index(es)
		 * @param integer $intRegMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		*/
		public static function LoadArrayByRegMember($intRegMember, $objOptionalClauses = null) {
			// Call Receipts::QueryArray to perform the LoadArrayByRegMember query
			try {
				return Receipts::QueryArray(
					QQ::Equal(QQN::Receipts()->RegMember, $intRegMember),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Receiptses
		 * by RegMember Index(es)
		 * @param integer $intRegMember
		 * @return int
		*/
		public static function CountByRegMember($intRegMember) {
			// Call Receipts::QueryCount to perform the CountByRegMember query
			return Receipts::QueryCount(
				QQ::Equal(QQN::Receipts()->RegMember, $intRegMember)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Receipts
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Receipts::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `receipts` (
							`trans_cat`,
							`member_id`,
							`trans_mode`,
							`reg_member`,
							`desc`,
							`date`,
							`amount`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTransCat) . ',
							' . $objDatabase->SqlVariable($this->intMemberId) . ',
							' . $objDatabase->SqlVariable($this->intTransMode) . ',
							' . $objDatabase->SqlVariable($this->intRegMember) . ',
							' . $objDatabase->SqlVariable($this->strDesc) . ',
							' . $objDatabase->SqlVariable($this->dttDate) . ',
							' . $objDatabase->SqlVariable($this->strAmount) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdreceipts = $objDatabase->InsertId('receipts', 'idreceipts');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`receipts`
						SET
							`trans_cat` = ' . $objDatabase->SqlVariable($this->intTransCat) . ',
							`member_id` = ' . $objDatabase->SqlVariable($this->intMemberId) . ',
							`trans_mode` = ' . $objDatabase->SqlVariable($this->intTransMode) . ',
							`reg_member` = ' . $objDatabase->SqlVariable($this->intRegMember) . ',
							`desc` = ' . $objDatabase->SqlVariable($this->strDesc) . ',
							`date` = ' . $objDatabase->SqlVariable($this->dttDate) . ',
							`amount` = ' . $objDatabase->SqlVariable($this->strAmount) . '
						WHERE
							`idreceipts` = ' . $objDatabase->SqlVariable($this->intIdreceipts) . '
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
		 * Delete this Receipts
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdreceipts)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Receipts with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Receipts::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`receipts`
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($this->intIdreceipts) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Receipts ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Receipts', $this->intIdreceipts);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Receiptses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Receipts::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`receipts`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate receipts table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Receipts::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `receipts`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Receipts from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Receipts object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Receipts::Load($this->intIdreceipts);

			// Update $this's local variables to match
			$this->TransCat = $objReloaded->TransCat;
			$this->MemberId = $objReloaded->MemberId;
			$this->TransMode = $objReloaded->TransMode;
			$this->RegMember = $objReloaded->RegMember;
			$this->strDesc = $objReloaded->strDesc;
			$this->dttDate = $objReloaded->dttDate;
			$this->strAmount = $objReloaded->strAmount;
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
				case 'Idreceipts':
					/**
					 * Gets the value for intIdreceipts (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdreceipts;

				case 'TransCat':
					/**
					 * Gets the value for intTransCat 
					 * @return integer
					 */
					return $this->intTransCat;

				case 'MemberId':
					/**
					 * Gets the value for intMemberId 
					 * @return integer
					 */
					return $this->intMemberId;

				case 'TransMode':
					/**
					 * Gets the value for intTransMode 
					 * @return integer
					 */
					return $this->intTransMode;

				case 'RegMember':
					/**
					 * Gets the value for intRegMember 
					 * @return integer
					 */
					return $this->intRegMember;

				case 'Desc':
					/**
					 * Gets the value for strDesc 
					 * @return string
					 */
					return $this->strDesc;

				case 'Date':
					/**
					 * Gets the value for dttDate 
					 * @return QDateTime
					 */
					return $this->dttDate;

				case 'Amount':
					/**
					 * Gets the value for strAmount 
					 * @return string
					 */
					return $this->strAmount;


				///////////////////
				// Member Objects
				///////////////////
				case 'TransCatObject':
					/**
					 * Gets the value for the ReceiptCat object referenced by intTransCat 
					 * @return ReceiptCat
					 */
					try {
						if ((!$this->objTransCatObject) && (!is_null($this->intTransCat)))
							$this->objTransCatObject = ReceiptCat::Load($this->intTransCat);
						return $this->objTransCatObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Member':
					/**
					 * Gets the value for the AssMember object referenced by intMemberId 
					 * @return AssMember
					 */
					try {
						if ((!$this->objMember) && (!is_null($this->intMemberId)))
							$this->objMember = AssMember::Load($this->intMemberId);
						return $this->objMember;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TransModeObject':
					/**
					 * Gets the value for the TransMode object referenced by intTransMode 
					 * @return TransMode
					 */
					try {
						if ((!$this->objTransModeObject) && (!is_null($this->intTransMode)))
							$this->objTransModeObject = TransMode::Load($this->intTransMode);
						return $this->objTransModeObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RegMemberObject':
					/**
					 * Gets the value for the RegMember object referenced by intRegMember 
					 * @return RegMember
					 */
					try {
						if ((!$this->objRegMemberObject) && (!is_null($this->intRegMember)))
							$this->objRegMemberObject = RegMember::Load($this->intRegMember);
						return $this->objRegMemberObject;
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
				case 'TransCat':
					/**
					 * Sets the value for intTransCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTransCatObject = null;
						return ($this->intTransCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MemberId':
					/**
					 * Sets the value for intMemberId 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMember = null;
						return ($this->intMemberId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TransMode':
					/**
					 * Sets the value for intTransMode 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTransModeObject = null;
						return ($this->intTransMode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RegMember':
					/**
					 * Sets the value for intRegMember 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRegMemberObject = null;
						return ($this->intRegMember = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Desc':
					/**
					 * Sets the value for strDesc 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDesc = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'Amount':
					/**
					 * Sets the value for strAmount 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAmount = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'TransCatObject':
					/**
					 * Sets the value for the ReceiptCat object referenced by intTransCat 
					 * @param ReceiptCat $mixValue
					 * @return ReceiptCat
					 */
					if (is_null($mixValue)) {
						$this->intTransCat = null;
						$this->objTransCatObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a ReceiptCat object
						try {
							$mixValue = QType::Cast($mixValue, 'ReceiptCat');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED ReceiptCat object
						if (is_null($mixValue->IdreceiptCat))
							throw new QCallerException('Unable to set an unsaved TransCatObject for this Receipts');

						// Update Local Member Variables
						$this->objTransCatObject = $mixValue;
						$this->intTransCat = $mixValue->IdreceiptCat;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Member':
					/**
					 * Sets the value for the AssMember object referenced by intMemberId 
					 * @param AssMember $mixValue
					 * @return AssMember
					 */
					if (is_null($mixValue)) {
						$this->intMemberId = null;
						$this->objMember = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AssMember object
						try {
							$mixValue = QType::Cast($mixValue, 'AssMember');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AssMember object
						if (is_null($mixValue->IdassMember))
							throw new QCallerException('Unable to set an unsaved Member for this Receipts');

						// Update Local Member Variables
						$this->objMember = $mixValue;
						$this->intMemberId = $mixValue->IdassMember;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TransModeObject':
					/**
					 * Sets the value for the TransMode object referenced by intTransMode 
					 * @param TransMode $mixValue
					 * @return TransMode
					 */
					if (is_null($mixValue)) {
						$this->intTransMode = null;
						$this->objTransModeObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a TransMode object
						try {
							$mixValue = QType::Cast($mixValue, 'TransMode');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED TransMode object
						if (is_null($mixValue->IdtransMode))
							throw new QCallerException('Unable to set an unsaved TransModeObject for this Receipts');

						// Update Local Member Variables
						$this->objTransModeObject = $mixValue;
						$this->intTransMode = $mixValue->IdtransMode;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'RegMemberObject':
					/**
					 * Sets the value for the RegMember object referenced by intRegMember 
					 * @param RegMember $mixValue
					 * @return RegMember
					 */
					if (is_null($mixValue)) {
						$this->intRegMember = null;
						$this->objRegMemberObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a RegMember object
						try {
							$mixValue = QType::Cast($mixValue, 'RegMember');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED RegMember object
						if (is_null($mixValue->IdregMember))
							throw new QCallerException('Unable to set an unsaved RegMemberObject for this Receipts');

						// Update Local Member Variables
						$this->objRegMemberObject = $mixValue;
						$this->intRegMember = $mixValue->IdregMember;

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
			return "receipts";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Receipts::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Receipts"><sequence>';
			$strToReturn .= '<element name="Idreceipts" type="xsd:int"/>';
			$strToReturn .= '<element name="TransCatObject" type="xsd1:ReceiptCat"/>';
			$strToReturn .= '<element name="Member" type="xsd1:AssMember"/>';
			$strToReturn .= '<element name="TransModeObject" type="xsd1:TransMode"/>';
			$strToReturn .= '<element name="RegMemberObject" type="xsd1:RegMember"/>';
			$strToReturn .= '<element name="Desc" type="xsd:string"/>';
			$strToReturn .= '<element name="Date" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Amount" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Receipts', $strComplexTypeArray)) {
				$strComplexTypeArray['Receipts'] = Receipts::GetSoapComplexTypeXml();
				ReceiptCat::AlterSoapComplexTypeArray($strComplexTypeArray);
				AssMember::AlterSoapComplexTypeArray($strComplexTypeArray);
				TransMode::AlterSoapComplexTypeArray($strComplexTypeArray);
				RegMember::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Receipts::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Receipts();
			if (property_exists($objSoapObject, 'Idreceipts'))
				$objToReturn->intIdreceipts = $objSoapObject->Idreceipts;
			if ((property_exists($objSoapObject, 'TransCatObject')) &&
				($objSoapObject->TransCatObject))
				$objToReturn->TransCatObject = ReceiptCat::GetObjectFromSoapObject($objSoapObject->TransCatObject);
			if ((property_exists($objSoapObject, 'Member')) &&
				($objSoapObject->Member))
				$objToReturn->Member = AssMember::GetObjectFromSoapObject($objSoapObject->Member);
			if ((property_exists($objSoapObject, 'TransModeObject')) &&
				($objSoapObject->TransModeObject))
				$objToReturn->TransModeObject = TransMode::GetObjectFromSoapObject($objSoapObject->TransModeObject);
			if ((property_exists($objSoapObject, 'RegMemberObject')) &&
				($objSoapObject->RegMemberObject))
				$objToReturn->RegMemberObject = RegMember::GetObjectFromSoapObject($objSoapObject->RegMemberObject);
			if (property_exists($objSoapObject, 'Desc'))
				$objToReturn->strDesc = $objSoapObject->Desc;
			if (property_exists($objSoapObject, 'Date'))
				$objToReturn->dttDate = new QDateTime($objSoapObject->Date);
			if (property_exists($objSoapObject, 'Amount'))
				$objToReturn->strAmount = $objSoapObject->Amount;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Receipts::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objTransCatObject)
				$objObject->objTransCatObject = ReceiptCat::GetSoapObjectFromObject($objObject->objTransCatObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTransCat = null;
			if ($objObject->objMember)
				$objObject->objMember = AssMember::GetSoapObjectFromObject($objObject->objMember, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMemberId = null;
			if ($objObject->objTransModeObject)
				$objObject->objTransModeObject = TransMode::GetSoapObjectFromObject($objObject->objTransModeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTransMode = null;
			if ($objObject->objRegMemberObject)
				$objObject->objRegMemberObject = RegMember::GetSoapObjectFromObject($objObject->objRegMemberObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRegMember = null;
			if ($objObject->dttDate)
				$objObject->dttDate = $objObject->dttDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['Idreceipts'] = $this->intIdreceipts;
			$iArray['TransCat'] = $this->intTransCat;
			$iArray['MemberId'] = $this->intMemberId;
			$iArray['TransMode'] = $this->intTransMode;
			$iArray['RegMember'] = $this->intRegMember;
			$iArray['Desc'] = $this->strDesc;
			$iArray['Date'] = $this->dttDate;
			$iArray['Amount'] = $this->strAmount;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdreceipts ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Idreceipts
     * @property-read QQNode $TransCat
     * @property-read QQNodeReceiptCat $TransCatObject
     * @property-read QQNode $MemberId
     * @property-read QQNodeAssMember $Member
     * @property-read QQNode $TransMode
     * @property-read QQNodeTransMode $TransModeObject
     * @property-read QQNode $RegMember
     * @property-read QQNodeRegMember $RegMemberObject
     * @property-read QQNode $Desc
     * @property-read QQNode $Date
     * @property-read QQNode $Amount
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeReceipts extends QQNode {
		protected $strTableName = 'receipts';
		protected $strPrimaryKey = 'idreceipts';
		protected $strClassName = 'Receipts';
		public function __get($strName) {
			switch ($strName) {
				case 'Idreceipts':
					return new QQNode('idreceipts', 'Idreceipts', 'Integer', $this);
				case 'TransCat':
					return new QQNode('trans_cat', 'TransCat', 'Integer', $this);
				case 'TransCatObject':
					return new QQNodeReceiptCat('trans_cat', 'TransCatObject', 'Integer', $this);
				case 'MemberId':
					return new QQNode('member_id', 'MemberId', 'Integer', $this);
				case 'Member':
					return new QQNodeAssMember('member_id', 'Member', 'Integer', $this);
				case 'TransMode':
					return new QQNode('trans_mode', 'TransMode', 'Integer', $this);
				case 'TransModeObject':
					return new QQNodeTransMode('trans_mode', 'TransModeObject', 'Integer', $this);
				case 'RegMember':
					return new QQNode('reg_member', 'RegMember', 'Integer', $this);
				case 'RegMemberObject':
					return new QQNodeRegMember('reg_member', 'RegMemberObject', 'Integer', $this);
				case 'Desc':
					return new QQNode('desc', 'Desc', 'VarChar', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'DateTime', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'VarChar', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idreceipts', 'Idreceipts', 'Integer', $this);
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
     * @property-read QQNode $Idreceipts
     * @property-read QQNode $TransCat
     * @property-read QQNodeReceiptCat $TransCatObject
     * @property-read QQNode $MemberId
     * @property-read QQNodeAssMember $Member
     * @property-read QQNode $TransMode
     * @property-read QQNodeTransMode $TransModeObject
     * @property-read QQNode $RegMember
     * @property-read QQNodeRegMember $RegMemberObject
     * @property-read QQNode $Desc
     * @property-read QQNode $Date
     * @property-read QQNode $Amount
     *
     *

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeReceipts extends QQReverseReferenceNode {
		protected $strTableName = 'receipts';
		protected $strPrimaryKey = 'idreceipts';
		protected $strClassName = 'Receipts';
		public function __get($strName) {
			switch ($strName) {
				case 'Idreceipts':
					return new QQNode('idreceipts', 'Idreceipts', 'integer', $this);
				case 'TransCat':
					return new QQNode('trans_cat', 'TransCat', 'integer', $this);
				case 'TransCatObject':
					return new QQNodeReceiptCat('trans_cat', 'TransCatObject', 'integer', $this);
				case 'MemberId':
					return new QQNode('member_id', 'MemberId', 'integer', $this);
				case 'Member':
					return new QQNodeAssMember('member_id', 'Member', 'integer', $this);
				case 'TransMode':
					return new QQNode('trans_mode', 'TransMode', 'integer', $this);
				case 'TransModeObject':
					return new QQNodeTransMode('trans_mode', 'TransModeObject', 'integer', $this);
				case 'RegMember':
					return new QQNode('reg_member', 'RegMember', 'integer', $this);
				case 'RegMemberObject':
					return new QQNodeRegMember('reg_member', 'RegMemberObject', 'integer', $this);
				case 'Desc':
					return new QQNode('desc', 'Desc', 'string', $this);
				case 'Date':
					return new QQNode('date', 'Date', 'QDateTime', $this);
				case 'Amount':
					return new QQNode('amount', 'Amount', 'string', $this);

				case '_PrimaryKeyNode':
					return new QQNode('idreceipts', 'Idreceipts', 'integer', $this);
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
