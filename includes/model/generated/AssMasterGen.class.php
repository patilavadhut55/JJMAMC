<?php
	/**
	 * The abstract AssMasterGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AssMaster subclass which
	 * extends this AssMasterGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AssMaster class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdassMaster the value for intIdassMaster (Read-Only PK)
	 * @property string $AssName the value for strAssName 
	 * @property string $RegNo the value for strRegNo 
	 * @property QDateTime $RegDate the value for dttRegDate 
	 * @property string $Address the value for strAddress 
	 * @property string $City the value for strCity 
	 * @property string $OfficeBearer the value for strOfficeBearer 
	 * @property QDateTime $EstDate the value for dttEstDate 
	 * @property string $LegalDoc1 the value for strLegalDoc1 
	 * @property string $LegalDoc2 the value for strLegalDoc2 
	 * @property string $MembershipFee the value for strMembershipFee 
	 * @property-read AssMember $_AssMemberAsAss the value for the private _objAssMemberAsAss (Read-Only) if set due to an expansion on the ass_member.ass_id reverse relationship
	 * @property-read AssMember[] $_AssMemberAsAssArray the value for the private _objAssMemberAsAssArray (Read-Only) if set due to an ExpandAsArray on the ass_member.ass_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AssMasterGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column ass_master.idass_master
		 * @var integer intIdassMaster
		 */
		protected $intIdassMaster;
		const IdassMasterDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.ass_name
		 * @var string strAssName
		 */
		protected $strAssName;
		const AssNameMaxLength = 255;
		const AssNameDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.reg_no
		 * @var string strRegNo
		 */
		protected $strRegNo;
		const RegNoDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.reg_date
		 * @var QDateTime dttRegDate
		 */
		protected $dttRegDate;
		const RegDateDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.address
		 * @var string strAddress
		 */
		protected $strAddress;
		const AddressDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 45;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.office_bearer
		 * @var string strOfficeBearer
		 */
		protected $strOfficeBearer;
		const OfficeBearerDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.est_date
		 * @var QDateTime dttEstDate
		 */
		protected $dttEstDate;
		const EstDateDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_master.legal_doc1
		 * @var string strLegalDoc1
		 */
		protected $strLegalDoc1;
		const LegalDoc1Default = null;


		/**
		 * Protected member variable that maps to the database column ass_master.legal_doc2
		 * @var string strLegalDoc2
		 */
		protected $strLegalDoc2;
		const LegalDoc2Default = null;


		/**
		 * Protected member variable that maps to the database column ass_master.membership_fee
		 * @var string strMembershipFee
		 */
		protected $strMembershipFee;
		const MembershipFeeDefault = null;


		/**
		 * Private member variable that stores a reference to a single AssMemberAsAss object
		 * (of type AssMember), if this AssMaster object was restored with
		 * an expansion on the ass_member association table.
		 * @var AssMember _objAssMemberAsAss;
		 */
		private $_objAssMemberAsAss;

		/**
		 * Private member variable that stores a reference to an array of AssMemberAsAss objects
		 * (of type AssMember[]), if this AssMaster object was restored with
		 * an ExpandAsArray on the ass_member association table.
		 * @var AssMember[] _objAssMemberAsAssArray;
		 */
		private $_objAssMemberAsAssArray = null;

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
			$this->intIdassMaster = AssMaster::IdassMasterDefault;
			$this->strAssName = AssMaster::AssNameDefault;
			$this->strRegNo = AssMaster::RegNoDefault;
			$this->dttRegDate = (AssMaster::RegDateDefault === null)?null:new QDateTime(AssMaster::RegDateDefault);
			$this->strAddress = AssMaster::AddressDefault;
			$this->strCity = AssMaster::CityDefault;
			$this->strOfficeBearer = AssMaster::OfficeBearerDefault;
			$this->dttEstDate = (AssMaster::EstDateDefault === null)?null:new QDateTime(AssMaster::EstDateDefault);
			$this->strLegalDoc1 = AssMaster::LegalDoc1Default;
			$this->strLegalDoc2 = AssMaster::LegalDoc2Default;
			$this->strMembershipFee = AssMaster::MembershipFeeDefault;
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
		 * Load a AssMaster from PK Info
		 * @param integer $intIdassMaster
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMaster
		 */
		public static function Load($intIdassMaster, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AssMaster', $intIdassMaster);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AssMaster::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssMaster()->IdassMaster, $intIdassMaster)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AssMasters
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMaster[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AssMaster::QueryArray to perform the LoadAll query
			try {
				return AssMaster::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AssMasters
		 * @return int
		 */
		public static function CountAll() {
			// Call AssMaster::QueryCount to perform the CountAll query
			return AssMaster::QueryCount(QQ::All());
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
			$objDatabase = AssMaster::GetDatabase();

			// Create/Build out the QueryBuilder object with AssMaster-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ass_master');

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
				AssMaster::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('ass_master');

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
		 * Static Qcubed Query method to query for a single AssMaster object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AssMaster the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssMaster::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AssMaster object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AssMaster::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AssMaster::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AssMaster objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AssMaster[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssMaster::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AssMaster::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AssMaster::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AssMaster objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssMaster::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AssMaster::GetDatabase();

			$strQuery = AssMaster::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/assmaster', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AssMaster::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AssMaster
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ass_master';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idass_master', $strAliasPrefix . 'idass_master');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idass_master', $strAliasPrefix . 'idass_master');
			    $objBuilder->AddSelectItem($strTableName, 'ass_name', $strAliasPrefix . 'ass_name');
			    $objBuilder->AddSelectItem($strTableName, 'reg_no', $strAliasPrefix . 'reg_no');
			    $objBuilder->AddSelectItem($strTableName, 'reg_date', $strAliasPrefix . 'reg_date');
			    $objBuilder->AddSelectItem($strTableName, 'address', $strAliasPrefix . 'address');
			    $objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			    $objBuilder->AddSelectItem($strTableName, 'office_bearer', $strAliasPrefix . 'office_bearer');
			    $objBuilder->AddSelectItem($strTableName, 'est_date', $strAliasPrefix . 'est_date');
			    $objBuilder->AddSelectItem($strTableName, 'legal_doc1', $strAliasPrefix . 'legal_doc1');
			    $objBuilder->AddSelectItem($strTableName, 'legal_doc2', $strAliasPrefix . 'legal_doc2');
			    $objBuilder->AddSelectItem($strTableName, 'membership_fee', $strAliasPrefix . 'membership_fee');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AssMaster from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AssMaster::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AssMaster
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idass_master';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdassMaster == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ass_master__';


						// Expanding reverse references: AssMemberAsAss
						$strAlias = $strAliasPrefix . 'assmemberasass__idass_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objAssMemberAsAssArray)
								$objPreviousItem->_objAssMemberAsAssArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objAssMemberAsAssArray)) {
								$objPreviousChildItems = $objPreviousItem->_objAssMemberAsAssArray;
								$objChildItem = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasass__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objAssMemberAsAssArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objAssMemberAsAssArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasass__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ass_master__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AssMaster object
			$objToReturn = new AssMaster();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idass_master';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdassMaster = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ass_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAssName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'reg_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRegNo = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'reg_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttRegDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'address';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'city';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'office_bearer';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOfficeBearer = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'est_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttEstDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'legal_doc1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLegalDoc1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'legal_doc2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLegalDoc2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'membership_fee';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMembershipFee = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdassMaster != $objPreviousItem->IdassMaster) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objAssMemberAsAssArray);
					$cnt = count($objToReturn->_objAssMemberAsAssArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objAssMemberAsAssArray, $objToReturn->_objAssMemberAsAssArray)) {
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
				$strAliasPrefix = 'ass_master__';




			// Check for AssMemberAsAss Virtual Binding
			$strAlias = $strAliasPrefix . 'assmemberasass__idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objAssMemberAsAssArray)
				$objToReturn->_objAssMemberAsAssArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objAssMemberAsAssArray[] = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasass__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objAssMemberAsAss = AssMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'assmemberasass__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AssMasters from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AssMaster[]
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
					$objItem = AssMaster::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AssMaster::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AssMaster object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AssMaster next row resulting from the query
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
			return AssMaster::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AssMaster object,
		 * by IdassMaster Index(es)
		 * @param integer $intIdassMaster
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMaster
		*/
		public static function LoadByIdassMaster($intIdassMaster, $objOptionalClauses = null) {
			return AssMaster::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssMaster()->IdassMaster, $intIdassMaster)
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
		 * Save this AssMaster
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ass_master` (
							`ass_name`,
							`reg_no`,
							`reg_date`,
							`address`,
							`city`,
							`office_bearer`,
							`est_date`,
							`legal_doc1`,
							`legal_doc2`,
							`membership_fee`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strAssName) . ',
							' . $objDatabase->SqlVariable($this->strRegNo) . ',
							' . $objDatabase->SqlVariable($this->dttRegDate) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->strOfficeBearer) . ',
							' . $objDatabase->SqlVariable($this->dttEstDate) . ',
							' . $objDatabase->SqlVariable($this->strLegalDoc1) . ',
							' . $objDatabase->SqlVariable($this->strLegalDoc2) . ',
							' . $objDatabase->SqlVariable($this->strMembershipFee) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdassMaster = $objDatabase->InsertId('ass_master', 'idass_master');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ass_master`
						SET
							`ass_name` = ' . $objDatabase->SqlVariable($this->strAssName) . ',
							`reg_no` = ' . $objDatabase->SqlVariable($this->strRegNo) . ',
							`reg_date` = ' . $objDatabase->SqlVariable($this->dttRegDate) . ',
							`address` = ' . $objDatabase->SqlVariable($this->strAddress) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`office_bearer` = ' . $objDatabase->SqlVariable($this->strOfficeBearer) . ',
							`est_date` = ' . $objDatabase->SqlVariable($this->dttEstDate) . ',
							`legal_doc1` = ' . $objDatabase->SqlVariable($this->strLegalDoc1) . ',
							`legal_doc2` = ' . $objDatabase->SqlVariable($this->strLegalDoc2) . ',
							`membership_fee` = ' . $objDatabase->SqlVariable($this->strMembershipFee) . '
						WHERE
							`idass_master` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '
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
		 * Delete this AssMaster
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdassMaster)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AssMaster with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_master`
				WHERE
					`idass_master` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AssMaster ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AssMaster', $this->intIdassMaster);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AssMasters
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_master`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate ass_master table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ass_master`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AssMaster from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AssMaster object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AssMaster::Load($this->intIdassMaster);

			// Update $this's local variables to match
			$this->strAssName = $objReloaded->strAssName;
			$this->strRegNo = $objReloaded->strRegNo;
			$this->dttRegDate = $objReloaded->dttRegDate;
			$this->strAddress = $objReloaded->strAddress;
			$this->strCity = $objReloaded->strCity;
			$this->strOfficeBearer = $objReloaded->strOfficeBearer;
			$this->dttEstDate = $objReloaded->dttEstDate;
			$this->strLegalDoc1 = $objReloaded->strLegalDoc1;
			$this->strLegalDoc2 = $objReloaded->strLegalDoc2;
			$this->strMembershipFee = $objReloaded->strMembershipFee;
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
				case 'IdassMaster':
					/**
					 * Gets the value for intIdassMaster (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdassMaster;

				case 'AssName':
					/**
					 * Gets the value for strAssName 
					 * @return string
					 */
					return $this->strAssName;

				case 'RegNo':
					/**
					 * Gets the value for strRegNo 
					 * @return string
					 */
					return $this->strRegNo;

				case 'RegDate':
					/**
					 * Gets the value for dttRegDate 
					 * @return QDateTime
					 */
					return $this->dttRegDate;

				case 'Address':
					/**
					 * Gets the value for strAddress 
					 * @return string
					 */
					return $this->strAddress;

				case 'City':
					/**
					 * Gets the value for strCity 
					 * @return string
					 */
					return $this->strCity;

				case 'OfficeBearer':
					/**
					 * Gets the value for strOfficeBearer 
					 * @return string
					 */
					return $this->strOfficeBearer;

				case 'EstDate':
					/**
					 * Gets the value for dttEstDate 
					 * @return QDateTime
					 */
					return $this->dttEstDate;

				case 'LegalDoc1':
					/**
					 * Gets the value for strLegalDoc1 
					 * @return string
					 */
					return $this->strLegalDoc1;

				case 'LegalDoc2':
					/**
					 * Gets the value for strLegalDoc2 
					 * @return string
					 */
					return $this->strLegalDoc2;

				case 'MembershipFee':
					/**
					 * Gets the value for strMembershipFee 
					 * @return string
					 */
					return $this->strMembershipFee;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_AssMemberAsAss':
					/**
					 * Gets the value for the private _objAssMemberAsAss (Read-Only)
					 * if set due to an expansion on the ass_member.ass_id reverse relationship
					 * @return AssMember
					 */
					return $this->_objAssMemberAsAss;

				case '_AssMemberAsAssArray':
					/**
					 * Gets the value for the private _objAssMemberAsAssArray (Read-Only)
					 * if set due to an ExpandAsArray on the ass_member.ass_id reverse relationship
					 * @return AssMember[]
					 */
					return $this->_objAssMemberAsAssArray;


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
				case 'AssName':
					/**
					 * Sets the value for strAssName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAssName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RegNo':
					/**
					 * Sets the value for strRegNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRegNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RegDate':
					/**
					 * Sets the value for dttRegDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttRegDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address':
					/**
					 * Sets the value for strAddress 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddress = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'City':
					/**
					 * Sets the value for strCity 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCity = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OfficeBearer':
					/**
					 * Sets the value for strOfficeBearer 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOfficeBearer = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'EstDate':
					/**
					 * Sets the value for dttEstDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttEstDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LegalDoc1':
					/**
					 * Sets the value for strLegalDoc1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLegalDoc1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LegalDoc2':
					/**
					 * Sets the value for strLegalDoc2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLegalDoc2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MembershipFee':
					/**
					 * Sets the value for strMembershipFee 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMembershipFee = QType::Cast($mixValue, QType::String));
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



		// Related Objects' Methods for AssMemberAsAss
		//-------------------------------------------------------------------

		/**
		 * Gets all associated AssMembersAsAss as an array of AssMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public function GetAssMemberAsAssArray($objOptionalClauses = null) {
			if ((is_null($this->intIdassMaster)))
				return array();

			try {
				return AssMember::LoadArrayByAssId($this->intIdassMaster, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated AssMembersAsAss
		 * @return int
		*/
		public function CountAssMembersAsAss() {
			if ((is_null($this->intIdassMaster)))
				return 0;

			return AssMember::CountByAssId($this->intIdassMaster);
		}

		/**
		 * Associates a AssMemberAsAss
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function AssociateAssMemberAsAss(AssMember $objAssMember) {
			if ((is_null($this->intIdassMaster)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsAss on this unsaved AssMaster.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateAssMemberAsAss on this AssMaster with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`ass_id` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . '
			');
		}

		/**
		 * Unassociates a AssMemberAsAss
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function UnassociateAssMemberAsAss(AssMember $objAssMember) {
			if ((is_null($this->intIdassMaster)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsAss on this unsaved AssMaster.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsAss on this AssMaster with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`ass_id` = null
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`ass_id` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '
			');
		}

		/**
		 * Unassociates all AssMembersAsAss
		 * @return void
		*/
		public function UnassociateAllAssMembersAsAss() {
			if ((is_null($this->intIdassMaster)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsAss on this unsaved AssMaster.');

			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ass_member`
				SET
					`ass_id` = null
				WHERE
					`ass_id` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '
			');
		}

		/**
		 * Deletes an associated AssMemberAsAss
		 * @param AssMember $objAssMember
		 * @return void
		*/
		public function DeleteAssociatedAssMemberAsAss(AssMember $objAssMember) {
			if ((is_null($this->intIdassMaster)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsAss on this unsaved AssMaster.');
			if ((is_null($objAssMember->IdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsAss on this AssMaster with an unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($objAssMember->IdassMember) . ' AND
					`ass_id` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '
			');
		}

		/**
		 * Deletes all associated AssMembersAsAss
		 * @return void
		*/
		public function DeleteAllAssMembersAsAss() {
			if ((is_null($this->intIdassMaster)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateAssMemberAsAss on this unsaved AssMaster.');

			// Get the Database Object for this Class
			$objDatabase = AssMaster::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`ass_id` = ' . $objDatabase->SqlVariable($this->intIdassMaster) . '
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
			return "ass_master";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AssMaster::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AssMaster"><sequence>';
			$strToReturn .= '<element name="IdassMaster" type="xsd:int"/>';
			$strToReturn .= '<element name="AssName" type="xsd:string"/>';
			$strToReturn .= '<element name="RegNo" type="xsd:string"/>';
			$strToReturn .= '<element name="RegDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="OfficeBearer" type="xsd:string"/>';
			$strToReturn .= '<element name="EstDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="LegalDoc1" type="xsd:string"/>';
			$strToReturn .= '<element name="LegalDoc2" type="xsd:string"/>';
			$strToReturn .= '<element name="MembershipFee" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AssMaster', $strComplexTypeArray)) {
				$strComplexTypeArray['AssMaster'] = AssMaster::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AssMaster::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AssMaster();
			if (property_exists($objSoapObject, 'IdassMaster'))
				$objToReturn->intIdassMaster = $objSoapObject->IdassMaster;
			if (property_exists($objSoapObject, 'AssName'))
				$objToReturn->strAssName = $objSoapObject->AssName;
			if (property_exists($objSoapObject, 'RegNo'))
				$objToReturn->strRegNo = $objSoapObject->RegNo;
			if (property_exists($objSoapObject, 'RegDate'))
				$objToReturn->dttRegDate = new QDateTime($objSoapObject->RegDate);
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if (property_exists($objSoapObject, 'OfficeBearer'))
				$objToReturn->strOfficeBearer = $objSoapObject->OfficeBearer;
			if (property_exists($objSoapObject, 'EstDate'))
				$objToReturn->dttEstDate = new QDateTime($objSoapObject->EstDate);
			if (property_exists($objSoapObject, 'LegalDoc1'))
				$objToReturn->strLegalDoc1 = $objSoapObject->LegalDoc1;
			if (property_exists($objSoapObject, 'LegalDoc2'))
				$objToReturn->strLegalDoc2 = $objSoapObject->LegalDoc2;
			if (property_exists($objSoapObject, 'MembershipFee'))
				$objToReturn->strMembershipFee = $objSoapObject->MembershipFee;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AssMaster::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttRegDate)
				$objObject->dttRegDate = $objObject->dttRegDate->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttEstDate)
				$objObject->dttEstDate = $objObject->dttEstDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdassMaster'] = $this->intIdassMaster;
			$iArray['AssName'] = $this->strAssName;
			$iArray['RegNo'] = $this->strRegNo;
			$iArray['RegDate'] = $this->dttRegDate;
			$iArray['Address'] = $this->strAddress;
			$iArray['City'] = $this->strCity;
			$iArray['OfficeBearer'] = $this->strOfficeBearer;
			$iArray['EstDate'] = $this->dttEstDate;
			$iArray['LegalDoc1'] = $this->strLegalDoc1;
			$iArray['LegalDoc2'] = $this->strLegalDoc2;
			$iArray['MembershipFee'] = $this->strMembershipFee;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdassMaster ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdassMaster
     * @property-read QQNode $AssName
     * @property-read QQNode $RegNo
     * @property-read QQNode $RegDate
     * @property-read QQNode $Address
     * @property-read QQNode $City
     * @property-read QQNode $OfficeBearer
     * @property-read QQNode $EstDate
     * @property-read QQNode $LegalDoc1
     * @property-read QQNode $LegalDoc2
     * @property-read QQNode $MembershipFee
     *
     *
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsAss

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAssMaster extends QQNode {
		protected $strTableName = 'ass_master';
		protected $strPrimaryKey = 'idass_master';
		protected $strClassName = 'AssMaster';
		public function __get($strName) {
			switch ($strName) {
				case 'IdassMaster':
					return new QQNode('idass_master', 'IdassMaster', 'Integer', $this);
				case 'AssName':
					return new QQNode('ass_name', 'AssName', 'VarChar', $this);
				case 'RegNo':
					return new QQNode('reg_no', 'RegNo', 'Blob', $this);
				case 'RegDate':
					return new QQNode('reg_date', 'RegDate', 'Date', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'Blob', $this);
				case 'City':
					return new QQNode('city', 'City', 'VarChar', $this);
				case 'OfficeBearer':
					return new QQNode('office_bearer', 'OfficeBearer', 'Blob', $this);
				case 'EstDate':
					return new QQNode('est_date', 'EstDate', 'Date', $this);
				case 'LegalDoc1':
					return new QQNode('legal_doc1', 'LegalDoc1', 'Blob', $this);
				case 'LegalDoc2':
					return new QQNode('legal_doc2', 'LegalDoc2', 'Blob', $this);
				case 'MembershipFee':
					return new QQNode('membership_fee', 'MembershipFee', 'VarChar', $this);
				case 'AssMemberAsAss':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasass', 'reverse_reference', 'ass_id');

				case '_PrimaryKeyNode':
					return new QQNode('idass_master', 'IdassMaster', 'Integer', $this);
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
     * @property-read QQNode $IdassMaster
     * @property-read QQNode $AssName
     * @property-read QQNode $RegNo
     * @property-read QQNode $RegDate
     * @property-read QQNode $Address
     * @property-read QQNode $City
     * @property-read QQNode $OfficeBearer
     * @property-read QQNode $EstDate
     * @property-read QQNode $LegalDoc1
     * @property-read QQNode $LegalDoc2
     * @property-read QQNode $MembershipFee
     *
     *
     * @property-read QQReverseReferenceNodeAssMember $AssMemberAsAss

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAssMaster extends QQReverseReferenceNode {
		protected $strTableName = 'ass_master';
		protected $strPrimaryKey = 'idass_master';
		protected $strClassName = 'AssMaster';
		public function __get($strName) {
			switch ($strName) {
				case 'IdassMaster':
					return new QQNode('idass_master', 'IdassMaster', 'integer', $this);
				case 'AssName':
					return new QQNode('ass_name', 'AssName', 'string', $this);
				case 'RegNo':
					return new QQNode('reg_no', 'RegNo', 'string', $this);
				case 'RegDate':
					return new QQNode('reg_date', 'RegDate', 'QDateTime', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'OfficeBearer':
					return new QQNode('office_bearer', 'OfficeBearer', 'string', $this);
				case 'EstDate':
					return new QQNode('est_date', 'EstDate', 'QDateTime', $this);
				case 'LegalDoc1':
					return new QQNode('legal_doc1', 'LegalDoc1', 'string', $this);
				case 'LegalDoc2':
					return new QQNode('legal_doc2', 'LegalDoc2', 'string', $this);
				case 'MembershipFee':
					return new QQNode('membership_fee', 'MembershipFee', 'string', $this);
				case 'AssMemberAsAss':
					return new QQReverseReferenceNodeAssMember($this, 'assmemberasass', 'reverse_reference', 'ass_id');

				case '_PrimaryKeyNode':
					return new QQNode('idass_master', 'IdassMaster', 'integer', $this);
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
