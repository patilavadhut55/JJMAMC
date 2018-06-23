<?php
	/**
	 * The abstract AssMemberGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the AssMember subclass which
	 * extends this AssMemberGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the AssMember class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdassMember the value for intIdassMember (Read-Only PK)
	 * @property integer $Designation the value for intDesignation (Not Null)
	 * @property string $Name the value for strName 
	 * @property integer $MemberId the value for intMemberId 
	 * @property integer $AssId the value for intAssId (Not Null)
	 * @property string $Address1 the value for strAddress1 
	 * @property string $Address2 the value for strAddress2 
	 * @property string $City the value for strCity 
	 * @property integer $State the value for intState 
	 * @property string $Pincode the value for strPincode 
	 * @property string $Email1 the value for strEmail1 
	 * @property string $Email2 the value for strEmail2 
	 * @property string $Phone the value for strPhone 
	 * @property QDateTime $ExitDate the value for dttExitDate 
	 * @property string $Photo the value for strPhoto 
	 * @property string $Ref the value for strRef 
	 * @property AssDesignation $DesignationObject the value for the AssDesignation object referenced by intDesignation (Not Null)
	 * @property RegMember $Member the value for the RegMember object referenced by intMemberId 
	 * @property AssMaster $Ass the value for the AssMaster object referenced by intAssId (Not Null)
	 * @property Place $StateObject the value for the Place object referenced by intState 
	 * @property-read Receipts $_ReceiptsAsMember the value for the private _objReceiptsAsMember (Read-Only) if set due to an expansion on the receipts.member_id reverse relationship
	 * @property-read Receipts[] $_ReceiptsAsMemberArray the value for the private _objReceiptsAsMemberArray (Read-Only) if set due to an ExpandAsArray on the receipts.member_id reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class AssMemberGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column ass_member.idass_member
		 * @var integer intIdassMember
		 */
		protected $intIdassMember;
		const IdassMemberDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.designation
		 * @var integer intDesignation
		 */
		protected $intDesignation;
		const DesignationDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.member_id
		 * @var integer intMemberId
		 */
		protected $intMemberId;
		const MemberIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.ass_id
		 * @var integer intAssId
		 */
		protected $intAssId;
		const AssIdDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.address1
		 * @var string strAddress1
		 */
		protected $strAddress1;
		const Address1Default = null;


		/**
		 * Protected member variable that maps to the database column ass_member.address2
		 * @var string strAddress2
		 */
		protected $strAddress2;
		const Address2Default = null;


		/**
		 * Protected member variable that maps to the database column ass_member.city
		 * @var string strCity
		 */
		protected $strCity;
		const CityMaxLength = 45;
		const CityDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.state
		 * @var integer intState
		 */
		protected $intState;
		const StateDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.pincode
		 * @var string strPincode
		 */
		protected $strPincode;
		const PincodeMaxLength = 45;
		const PincodeDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.email1
		 * @var string strEmail1
		 */
		protected $strEmail1;
		const Email1MaxLength = 255;
		const Email1Default = null;


		/**
		 * Protected member variable that maps to the database column ass_member.email2
		 * @var string strEmail2
		 */
		protected $strEmail2;
		const Email2MaxLength = 255;
		const Email2Default = null;


		/**
		 * Protected member variable that maps to the database column ass_member.phone
		 * @var string strPhone
		 */
		protected $strPhone;
		const PhoneMaxLength = 45;
		const PhoneDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.exit_date
		 * @var QDateTime dttExitDate
		 */
		protected $dttExitDate;
		const ExitDateDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.photo
		 * @var string strPhoto
		 */
		protected $strPhoto;
		const PhotoDefault = null;


		/**
		 * Protected member variable that maps to the database column ass_member.ref
		 * @var string strRef
		 */
		protected $strRef;
		const RefDefault = null;


		/**
		 * Private member variable that stores a reference to a single ReceiptsAsMember object
		 * (of type Receipts), if this AssMember object was restored with
		 * an expansion on the receipts association table.
		 * @var Receipts _objReceiptsAsMember;
		 */
		private $_objReceiptsAsMember;

		/**
		 * Private member variable that stores a reference to an array of ReceiptsAsMember objects
		 * (of type Receipts[]), if this AssMember object was restored with
		 * an ExpandAsArray on the receipts association table.
		 * @var Receipts[] _objReceiptsAsMemberArray;
		 */
		private $_objReceiptsAsMemberArray = null;

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
		 * in the database column ass_member.designation.
		 *
		 * NOTE: Always use the DesignationObject property getter to correctly retrieve this AssDesignation object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AssDesignation objDesignationObject
		 */
		protected $objDesignationObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ass_member.member_id.
		 *
		 * NOTE: Always use the Member property getter to correctly retrieve this RegMember object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var RegMember objMember
		 */
		protected $objMember;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ass_member.ass_id.
		 *
		 * NOTE: Always use the Ass property getter to correctly retrieve this AssMaster object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AssMaster objAss
		 */
		protected $objAss;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ass_member.state.
		 *
		 * NOTE: Always use the StateObject property getter to correctly retrieve this Place object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Place objStateObject
		 */
		protected $objStateObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdassMember = AssMember::IdassMemberDefault;
			$this->intDesignation = AssMember::DesignationDefault;
			$this->strName = AssMember::NameDefault;
			$this->intMemberId = AssMember::MemberIdDefault;
			$this->intAssId = AssMember::AssIdDefault;
			$this->strAddress1 = AssMember::Address1Default;
			$this->strAddress2 = AssMember::Address2Default;
			$this->strCity = AssMember::CityDefault;
			$this->intState = AssMember::StateDefault;
			$this->strPincode = AssMember::PincodeDefault;
			$this->strEmail1 = AssMember::Email1Default;
			$this->strEmail2 = AssMember::Email2Default;
			$this->strPhone = AssMember::PhoneDefault;
			$this->dttExitDate = (AssMember::ExitDateDefault === null)?null:new QDateTime(AssMember::ExitDateDefault);
			$this->strPhoto = AssMember::PhotoDefault;
			$this->strRef = AssMember::RefDefault;
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
		 * Load a AssMember from PK Info
		 * @param integer $intIdassMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember
		 */
		public static function Load($intIdassMember, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AssMember', $intIdassMember);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = AssMember::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssMember()->IdassMember, $intIdassMember)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all AssMembers
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call AssMember::QueryArray to perform the LoadAll query
			try {
				return AssMember::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all AssMembers
		 * @return int
		 */
		public static function CountAll() {
			// Call AssMember::QueryCount to perform the CountAll query
			return AssMember::QueryCount(QQ::All());
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
			$objDatabase = AssMember::GetDatabase();

			// Create/Build out the QueryBuilder object with AssMember-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ass_member');

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
				AssMember::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('ass_member');

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
		 * Static Qcubed Query method to query for a single AssMember object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AssMember the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new AssMember object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = AssMember::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return AssMember::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of AssMember objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return AssMember[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return AssMember::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = AssMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of AssMember objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = AssMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = AssMember::GetDatabase();

			$strQuery = AssMember::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/assmember', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = AssMember::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this AssMember
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ass_member';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idass_member', $strAliasPrefix . 'idass_member');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idass_member', $strAliasPrefix . 'idass_member');
			    $objBuilder->AddSelectItem($strTableName, 'designation', $strAliasPrefix . 'designation');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'member_id', $strAliasPrefix . 'member_id');
			    $objBuilder->AddSelectItem($strTableName, 'ass_id', $strAliasPrefix . 'ass_id');
			    $objBuilder->AddSelectItem($strTableName, 'address1', $strAliasPrefix . 'address1');
			    $objBuilder->AddSelectItem($strTableName, 'address2', $strAliasPrefix . 'address2');
			    $objBuilder->AddSelectItem($strTableName, 'city', $strAliasPrefix . 'city');
			    $objBuilder->AddSelectItem($strTableName, 'state', $strAliasPrefix . 'state');
			    $objBuilder->AddSelectItem($strTableName, 'pincode', $strAliasPrefix . 'pincode');
			    $objBuilder->AddSelectItem($strTableName, 'email1', $strAliasPrefix . 'email1');
			    $objBuilder->AddSelectItem($strTableName, 'email2', $strAliasPrefix . 'email2');
			    $objBuilder->AddSelectItem($strTableName, 'phone', $strAliasPrefix . 'phone');
			    $objBuilder->AddSelectItem($strTableName, 'exit_date', $strAliasPrefix . 'exit_date');
			    $objBuilder->AddSelectItem($strTableName, 'photo', $strAliasPrefix . 'photo');
			    $objBuilder->AddSelectItem($strTableName, 'ref', $strAliasPrefix . 'ref');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a AssMember from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this AssMember::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return AssMember
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdassMember == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ass_member__';


						// Expanding reverse references: ReceiptsAsMember
						$strAlias = $strAliasPrefix . 'receiptsasmember__idreceipts';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objReceiptsAsMemberArray)
								$objPreviousItem->_objReceiptsAsMemberArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objReceiptsAsMemberArray)) {
								$objPreviousChildItems = $objPreviousItem->_objReceiptsAsMemberArray;
								$objChildItem = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receiptsasmember__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objReceiptsAsMemberArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objReceiptsAsMemberArray[] = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receiptsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ass_member__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the AssMember object
			$objToReturn = new AssMember();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idass_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdassMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intDesignation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'member_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMemberId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'ass_id';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAssId = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'address1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress1 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'address2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress2 = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'city';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCity = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'state';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intState = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pincode';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPincode = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email1';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail1 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'email2';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strEmail2 = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'phone';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPhone = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'exit_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttExitDate = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'photo';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPhoto = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'ref';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRef = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdassMember != $objPreviousItem->IdassMember) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objReceiptsAsMemberArray);
					$cnt = count($objToReturn->_objReceiptsAsMemberArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objReceiptsAsMemberArray, $objToReturn->_objReceiptsAsMemberArray)) {
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
				$strAliasPrefix = 'ass_member__';

			// Check for DesignationObject Early Binding
			$strAlias = $strAliasPrefix . 'designation__idass_designation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDesignationObject = AssDesignation::InstantiateDbRow($objDbRow, $strAliasPrefix . 'designation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Member Early Binding
			$strAlias = $strAliasPrefix . 'member_id__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMember = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for Ass Early Binding
			$strAlias = $strAliasPrefix . 'ass_id__idass_master';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAss = AssMaster::InstantiateDbRow($objDbRow, $strAliasPrefix . 'ass_id__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StateObject Early Binding
			$strAlias = $strAliasPrefix . 'state__idplace';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStateObject = Place::InstantiateDbRow($objDbRow, $strAliasPrefix . 'state__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for ReceiptsAsMember Virtual Binding
			$strAlias = $strAliasPrefix . 'receiptsasmember__idreceipts';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objReceiptsAsMemberArray)
				$objToReturn->_objReceiptsAsMemberArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objReceiptsAsMemberArray[] = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receiptsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objReceiptsAsMember = Receipts::InstantiateDbRow($objDbRow, $strAliasPrefix . 'receiptsasmember__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of AssMembers from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return AssMember[]
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
					$objItem = AssMember::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = AssMember::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single AssMember object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return AssMember next row resulting from the query
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
			return AssMember::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single AssMember object,
		 * by IdassMember Index(es)
		 * @param integer $intIdassMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember
		*/
		public static function LoadByIdassMember($intIdassMember, $objOptionalClauses = null) {
			return AssMember::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::AssMember()->IdassMember, $intIdassMember)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of AssMember objects,
		 * by Designation Index(es)
		 * @param integer $intDesignation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public static function LoadArrayByDesignation($intDesignation, $objOptionalClauses = null) {
			// Call AssMember::QueryArray to perform the LoadArrayByDesignation query
			try {
				return AssMember::QueryArray(
					QQ::Equal(QQN::AssMember()->Designation, $intDesignation),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AssMembers
		 * by Designation Index(es)
		 * @param integer $intDesignation
		 * @return int
		*/
		public static function CountByDesignation($intDesignation) {
			// Call AssMember::QueryCount to perform the CountByDesignation query
			return AssMember::QueryCount(
				QQ::Equal(QQN::AssMember()->Designation, $intDesignation)
			);
		}

		/**
		 * Load an array of AssMember objects,
		 * by AssId Index(es)
		 * @param integer $intAssId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public static function LoadArrayByAssId($intAssId, $objOptionalClauses = null) {
			// Call AssMember::QueryArray to perform the LoadArrayByAssId query
			try {
				return AssMember::QueryArray(
					QQ::Equal(QQN::AssMember()->AssId, $intAssId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AssMembers
		 * by AssId Index(es)
		 * @param integer $intAssId
		 * @return int
		*/
		public static function CountByAssId($intAssId) {
			// Call AssMember::QueryCount to perform the CountByAssId query
			return AssMember::QueryCount(
				QQ::Equal(QQN::AssMember()->AssId, $intAssId)
			);
		}

		/**
		 * Load an array of AssMember objects,
		 * by MemberId Index(es)
		 * @param integer $intMemberId
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public static function LoadArrayByMemberId($intMemberId, $objOptionalClauses = null) {
			// Call AssMember::QueryArray to perform the LoadArrayByMemberId query
			try {
				return AssMember::QueryArray(
					QQ::Equal(QQN::AssMember()->MemberId, $intMemberId),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AssMembers
		 * by MemberId Index(es)
		 * @param integer $intMemberId
		 * @return int
		*/
		public static function CountByMemberId($intMemberId) {
			// Call AssMember::QueryCount to perform the CountByMemberId query
			return AssMember::QueryCount(
				QQ::Equal(QQN::AssMember()->MemberId, $intMemberId)
			);
		}

		/**
		 * Load an array of AssMember objects,
		 * by State Index(es)
		 * @param integer $intState
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return AssMember[]
		*/
		public static function LoadArrayByState($intState, $objOptionalClauses = null) {
			// Call AssMember::QueryArray to perform the LoadArrayByState query
			try {
				return AssMember::QueryArray(
					QQ::Equal(QQN::AssMember()->State, $intState),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count AssMembers
		 * by State Index(es)
		 * @param integer $intState
		 * @return int
		*/
		public static function CountByState($intState) {
			// Call AssMember::QueryCount to perform the CountByState query
			return AssMember::QueryCount(
				QQ::Equal(QQN::AssMember()->State, $intState)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this AssMember
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ass_member` (
							`designation`,
							`name`,
							`member_id`,
							`ass_id`,
							`address1`,
							`address2`,
							`city`,
							`state`,
							`pincode`,
							`email1`,
							`email2`,
							`phone`,
							`exit_date`,
							`photo`,
							`ref`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intDesignation) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->intMemberId) . ',
							' . $objDatabase->SqlVariable($this->intAssId) . ',
							' . $objDatabase->SqlVariable($this->strAddress1) . ',
							' . $objDatabase->SqlVariable($this->strAddress2) . ',
							' . $objDatabase->SqlVariable($this->strCity) . ',
							' . $objDatabase->SqlVariable($this->intState) . ',
							' . $objDatabase->SqlVariable($this->strPincode) . ',
							' . $objDatabase->SqlVariable($this->strEmail1) . ',
							' . $objDatabase->SqlVariable($this->strEmail2) . ',
							' . $objDatabase->SqlVariable($this->strPhone) . ',
							' . $objDatabase->SqlVariable($this->dttExitDate) . ',
							' . $objDatabase->SqlVariable($this->strPhoto) . ',
							' . $objDatabase->SqlVariable($this->strRef) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdassMember = $objDatabase->InsertId('ass_member', 'idass_member');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ass_member`
						SET
							`designation` = ' . $objDatabase->SqlVariable($this->intDesignation) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`member_id` = ' . $objDatabase->SqlVariable($this->intMemberId) . ',
							`ass_id` = ' . $objDatabase->SqlVariable($this->intAssId) . ',
							`address1` = ' . $objDatabase->SqlVariable($this->strAddress1) . ',
							`address2` = ' . $objDatabase->SqlVariable($this->strAddress2) . ',
							`city` = ' . $objDatabase->SqlVariable($this->strCity) . ',
							`state` = ' . $objDatabase->SqlVariable($this->intState) . ',
							`pincode` = ' . $objDatabase->SqlVariable($this->strPincode) . ',
							`email1` = ' . $objDatabase->SqlVariable($this->strEmail1) . ',
							`email2` = ' . $objDatabase->SqlVariable($this->strEmail2) . ',
							`phone` = ' . $objDatabase->SqlVariable($this->strPhone) . ',
							`exit_date` = ' . $objDatabase->SqlVariable($this->dttExitDate) . ',
							`photo` = ' . $objDatabase->SqlVariable($this->strPhoto) . ',
							`ref` = ' . $objDatabase->SqlVariable($this->strRef) . '
						WHERE
							`idass_member` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '
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
		 * Delete this AssMember
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdassMember)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this AssMember with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`
				WHERE
					`idass_member` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this AssMember ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'AssMember', $this->intIdassMember);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all AssMembers
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ass_member`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate ass_member table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ass_member`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this AssMember from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved AssMember object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = AssMember::Load($this->intIdassMember);

			// Update $this's local variables to match
			$this->Designation = $objReloaded->Designation;
			$this->strName = $objReloaded->strName;
			$this->MemberId = $objReloaded->MemberId;
			$this->AssId = $objReloaded->AssId;
			$this->strAddress1 = $objReloaded->strAddress1;
			$this->strAddress2 = $objReloaded->strAddress2;
			$this->strCity = $objReloaded->strCity;
			$this->State = $objReloaded->State;
			$this->strPincode = $objReloaded->strPincode;
			$this->strEmail1 = $objReloaded->strEmail1;
			$this->strEmail2 = $objReloaded->strEmail2;
			$this->strPhone = $objReloaded->strPhone;
			$this->dttExitDate = $objReloaded->dttExitDate;
			$this->strPhoto = $objReloaded->strPhoto;
			$this->strRef = $objReloaded->strRef;
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
				case 'IdassMember':
					/**
					 * Gets the value for intIdassMember (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdassMember;

				case 'Designation':
					/**
					 * Gets the value for intDesignation (Not Null)
					 * @return integer
					 */
					return $this->intDesignation;

				case 'Name':
					/**
					 * Gets the value for strName 
					 * @return string
					 */
					return $this->strName;

				case 'MemberId':
					/**
					 * Gets the value for intMemberId 
					 * @return integer
					 */
					return $this->intMemberId;

				case 'AssId':
					/**
					 * Gets the value for intAssId (Not Null)
					 * @return integer
					 */
					return $this->intAssId;

				case 'Address1':
					/**
					 * Gets the value for strAddress1 
					 * @return string
					 */
					return $this->strAddress1;

				case 'Address2':
					/**
					 * Gets the value for strAddress2 
					 * @return string
					 */
					return $this->strAddress2;

				case 'City':
					/**
					 * Gets the value for strCity 
					 * @return string
					 */
					return $this->strCity;

				case 'State':
					/**
					 * Gets the value for intState 
					 * @return integer
					 */
					return $this->intState;

				case 'Pincode':
					/**
					 * Gets the value for strPincode 
					 * @return string
					 */
					return $this->strPincode;

				case 'Email1':
					/**
					 * Gets the value for strEmail1 
					 * @return string
					 */
					return $this->strEmail1;

				case 'Email2':
					/**
					 * Gets the value for strEmail2 
					 * @return string
					 */
					return $this->strEmail2;

				case 'Phone':
					/**
					 * Gets the value for strPhone 
					 * @return string
					 */
					return $this->strPhone;

				case 'ExitDate':
					/**
					 * Gets the value for dttExitDate 
					 * @return QDateTime
					 */
					return $this->dttExitDate;

				case 'Photo':
					/**
					 * Gets the value for strPhoto 
					 * @return string
					 */
					return $this->strPhoto;

				case 'Ref':
					/**
					 * Gets the value for strRef 
					 * @return string
					 */
					return $this->strRef;


				///////////////////
				// Member Objects
				///////////////////
				case 'DesignationObject':
					/**
					 * Gets the value for the AssDesignation object referenced by intDesignation (Not Null)
					 * @return AssDesignation
					 */
					try {
						if ((!$this->objDesignationObject) && (!is_null($this->intDesignation)))
							$this->objDesignationObject = AssDesignation::Load($this->intDesignation);
						return $this->objDesignationObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Member':
					/**
					 * Gets the value for the RegMember object referenced by intMemberId 
					 * @return RegMember
					 */
					try {
						if ((!$this->objMember) && (!is_null($this->intMemberId)))
							$this->objMember = RegMember::Load($this->intMemberId);
						return $this->objMember;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ass':
					/**
					 * Gets the value for the AssMaster object referenced by intAssId (Not Null)
					 * @return AssMaster
					 */
					try {
						if ((!$this->objAss) && (!is_null($this->intAssId)))
							$this->objAss = AssMaster::Load($this->intAssId);
						return $this->objAss;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StateObject':
					/**
					 * Gets the value for the Place object referenced by intState 
					 * @return Place
					 */
					try {
						if ((!$this->objStateObject) && (!is_null($this->intState)))
							$this->objStateObject = Place::Load($this->intState);
						return $this->objStateObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ReceiptsAsMember':
					/**
					 * Gets the value for the private _objReceiptsAsMember (Read-Only)
					 * if set due to an expansion on the receipts.member_id reverse relationship
					 * @return Receipts
					 */
					return $this->_objReceiptsAsMember;

				case '_ReceiptsAsMemberArray':
					/**
					 * Gets the value for the private _objReceiptsAsMemberArray (Read-Only)
					 * if set due to an ExpandAsArray on the receipts.member_id reverse relationship
					 * @return Receipts[]
					 */
					return $this->_objReceiptsAsMemberArray;


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
				case 'Designation':
					/**
					 * Sets the value for intDesignation (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDesignationObject = null;
						return ($this->intDesignation = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Name':
					/**
					 * Sets the value for strName 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
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

				case 'AssId':
					/**
					 * Sets the value for intAssId (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAss = null;
						return ($this->intAssId = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address1':
					/**
					 * Sets the value for strAddress1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddress1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Address2':
					/**
					 * Sets the value for strAddress2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAddress2 = QType::Cast($mixValue, QType::String));
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

				case 'State':
					/**
					 * Sets the value for intState 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStateObject = null;
						return ($this->intState = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Pincode':
					/**
					 * Sets the value for strPincode 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPincode = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email1':
					/**
					 * Sets the value for strEmail1 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail1 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Email2':
					/**
					 * Sets the value for strEmail2 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail2 = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Phone':
					/**
					 * Sets the value for strPhone 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhone = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ExitDate':
					/**
					 * Sets the value for dttExitDate 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttExitDate = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Photo':
					/**
					 * Sets the value for strPhoto 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPhoto = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Ref':
					/**
					 * Sets the value for strRef 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRef = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'DesignationObject':
					/**
					 * Sets the value for the AssDesignation object referenced by intDesignation (Not Null)
					 * @param AssDesignation $mixValue
					 * @return AssDesignation
					 */
					if (is_null($mixValue)) {
						$this->intDesignation = null;
						$this->objDesignationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AssDesignation object
						try {
							$mixValue = QType::Cast($mixValue, 'AssDesignation');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AssDesignation object
						if (is_null($mixValue->IdassDesignation))
							throw new QCallerException('Unable to set an unsaved DesignationObject for this AssMember');

						// Update Local Member Variables
						$this->objDesignationObject = $mixValue;
						$this->intDesignation = $mixValue->IdassDesignation;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Member':
					/**
					 * Sets the value for the RegMember object referenced by intMemberId 
					 * @param RegMember $mixValue
					 * @return RegMember
					 */
					if (is_null($mixValue)) {
						$this->intMemberId = null;
						$this->objMember = null;
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
							throw new QCallerException('Unable to set an unsaved Member for this AssMember');

						// Update Local Member Variables
						$this->objMember = $mixValue;
						$this->intMemberId = $mixValue->IdregMember;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'Ass':
					/**
					 * Sets the value for the AssMaster object referenced by intAssId (Not Null)
					 * @param AssMaster $mixValue
					 * @return AssMaster
					 */
					if (is_null($mixValue)) {
						$this->intAssId = null;
						$this->objAss = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AssMaster object
						try {
							$mixValue = QType::Cast($mixValue, 'AssMaster');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AssMaster object
						if (is_null($mixValue->IdassMaster))
							throw new QCallerException('Unable to set an unsaved Ass for this AssMember');

						// Update Local Member Variables
						$this->objAss = $mixValue;
						$this->intAssId = $mixValue->IdassMaster;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StateObject':
					/**
					 * Sets the value for the Place object referenced by intState 
					 * @param Place $mixValue
					 * @return Place
					 */
					if (is_null($mixValue)) {
						$this->intState = null;
						$this->objStateObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Place object
						try {
							$mixValue = QType::Cast($mixValue, 'Place');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Place object
						if (is_null($mixValue->Idplace))
							throw new QCallerException('Unable to set an unsaved StateObject for this AssMember');

						// Update Local Member Variables
						$this->objStateObject = $mixValue;
						$this->intState = $mixValue->Idplace;

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



		// Related Objects' Methods for ReceiptsAsMember
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ReceiptsesAsMember as an array of Receipts objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Receipts[]
		*/
		public function GetReceiptsAsMemberArray($objOptionalClauses = null) {
			if ((is_null($this->intIdassMember)))
				return array();

			try {
				return Receipts::LoadArrayByMemberId($this->intIdassMember, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ReceiptsesAsMember
		 * @return int
		*/
		public function CountReceiptsesAsMember() {
			if ((is_null($this->intIdassMember)))
				return 0;

			return Receipts::CountByMemberId($this->intIdassMember);
		}

		/**
		 * Associates a ReceiptsAsMember
		 * @param Receipts $objReceipts
		 * @return void
		*/
		public function AssociateReceiptsAsMember(Receipts $objReceipts) {
			if ((is_null($this->intIdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReceiptsAsMember on this unsaved AssMember.');
			if ((is_null($objReceipts->Idreceipts)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateReceiptsAsMember on this AssMember with an unsaved Receipts.');

			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`receipts`
				SET
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($objReceipts->Idreceipts) . '
			');
		}

		/**
		 * Unassociates a ReceiptsAsMember
		 * @param Receipts $objReceipts
		 * @return void
		*/
		public function UnassociateReceiptsAsMember(Receipts $objReceipts) {
			if ((is_null($this->intIdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceiptsAsMember on this unsaved AssMember.');
			if ((is_null($objReceipts->Idreceipts)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceiptsAsMember on this AssMember with an unsaved Receipts.');

			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`receipts`
				SET
					`member_id` = null
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($objReceipts->Idreceipts) . ' AND
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '
			');
		}

		/**
		 * Unassociates all ReceiptsesAsMember
		 * @return void
		*/
		public function UnassociateAllReceiptsesAsMember() {
			if ((is_null($this->intIdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceiptsAsMember on this unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`receipts`
				SET
					`member_id` = null
				WHERE
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '
			');
		}

		/**
		 * Deletes an associated ReceiptsAsMember
		 * @param Receipts $objReceipts
		 * @return void
		*/
		public function DeleteAssociatedReceiptsAsMember(Receipts $objReceipts) {
			if ((is_null($this->intIdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceiptsAsMember on this unsaved AssMember.');
			if ((is_null($objReceipts->Idreceipts)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceiptsAsMember on this AssMember with an unsaved Receipts.');

			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`receipts`
				WHERE
					`idreceipts` = ' . $objDatabase->SqlVariable($objReceipts->Idreceipts) . ' AND
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '
			');
		}

		/**
		 * Deletes all associated ReceiptsesAsMember
		 * @return void
		*/
		public function DeleteAllReceiptsesAsMember() {
			if ((is_null($this->intIdassMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateReceiptsAsMember on this unsaved AssMember.');

			// Get the Database Object for this Class
			$objDatabase = AssMember::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`receipts`
				WHERE
					`member_id` = ' . $objDatabase->SqlVariable($this->intIdassMember) . '
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
			return "ass_member";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[AssMember::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="AssMember"><sequence>';
			$strToReturn .= '<element name="IdassMember" type="xsd:int"/>';
			$strToReturn .= '<element name="DesignationObject" type="xsd1:AssDesignation"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Member" type="xsd1:RegMember"/>';
			$strToReturn .= '<element name="Ass" type="xsd1:AssMaster"/>';
			$strToReturn .= '<element name="Address1" type="xsd:string"/>';
			$strToReturn .= '<element name="Address2" type="xsd:string"/>';
			$strToReturn .= '<element name="City" type="xsd:string"/>';
			$strToReturn .= '<element name="StateObject" type="xsd1:Place"/>';
			$strToReturn .= '<element name="Pincode" type="xsd:string"/>';
			$strToReturn .= '<element name="Email1" type="xsd:string"/>';
			$strToReturn .= '<element name="Email2" type="xsd:string"/>';
			$strToReturn .= '<element name="Phone" type="xsd:string"/>';
			$strToReturn .= '<element name="ExitDate" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Photo" type="xsd:string"/>';
			$strToReturn .= '<element name="Ref" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('AssMember', $strComplexTypeArray)) {
				$strComplexTypeArray['AssMember'] = AssMember::GetSoapComplexTypeXml();
				AssDesignation::AlterSoapComplexTypeArray($strComplexTypeArray);
				RegMember::AlterSoapComplexTypeArray($strComplexTypeArray);
				AssMaster::AlterSoapComplexTypeArray($strComplexTypeArray);
				Place::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, AssMember::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new AssMember();
			if (property_exists($objSoapObject, 'IdassMember'))
				$objToReturn->intIdassMember = $objSoapObject->IdassMember;
			if ((property_exists($objSoapObject, 'DesignationObject')) &&
				($objSoapObject->DesignationObject))
				$objToReturn->DesignationObject = AssDesignation::GetObjectFromSoapObject($objSoapObject->DesignationObject);
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if ((property_exists($objSoapObject, 'Member')) &&
				($objSoapObject->Member))
				$objToReturn->Member = RegMember::GetObjectFromSoapObject($objSoapObject->Member);
			if ((property_exists($objSoapObject, 'Ass')) &&
				($objSoapObject->Ass))
				$objToReturn->Ass = AssMaster::GetObjectFromSoapObject($objSoapObject->Ass);
			if (property_exists($objSoapObject, 'Address1'))
				$objToReturn->strAddress1 = $objSoapObject->Address1;
			if (property_exists($objSoapObject, 'Address2'))
				$objToReturn->strAddress2 = $objSoapObject->Address2;
			if (property_exists($objSoapObject, 'City'))
				$objToReturn->strCity = $objSoapObject->City;
			if ((property_exists($objSoapObject, 'StateObject')) &&
				($objSoapObject->StateObject))
				$objToReturn->StateObject = Place::GetObjectFromSoapObject($objSoapObject->StateObject);
			if (property_exists($objSoapObject, 'Pincode'))
				$objToReturn->strPincode = $objSoapObject->Pincode;
			if (property_exists($objSoapObject, 'Email1'))
				$objToReturn->strEmail1 = $objSoapObject->Email1;
			if (property_exists($objSoapObject, 'Email2'))
				$objToReturn->strEmail2 = $objSoapObject->Email2;
			if (property_exists($objSoapObject, 'Phone'))
				$objToReturn->strPhone = $objSoapObject->Phone;
			if (property_exists($objSoapObject, 'ExitDate'))
				$objToReturn->dttExitDate = new QDateTime($objSoapObject->ExitDate);
			if (property_exists($objSoapObject, 'Photo'))
				$objToReturn->strPhoto = $objSoapObject->Photo;
			if (property_exists($objSoapObject, 'Ref'))
				$objToReturn->strRef = $objSoapObject->Ref;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, AssMember::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objDesignationObject)
				$objObject->objDesignationObject = AssDesignation::GetSoapObjectFromObject($objObject->objDesignationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDesignation = null;
			if ($objObject->objMember)
				$objObject->objMember = RegMember::GetSoapObjectFromObject($objObject->objMember, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMemberId = null;
			if ($objObject->objAss)
				$objObject->objAss = AssMaster::GetSoapObjectFromObject($objObject->objAss, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAssId = null;
			if ($objObject->objStateObject)
				$objObject->objStateObject = Place::GetSoapObjectFromObject($objObject->objStateObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intState = null;
			if ($objObject->dttExitDate)
				$objObject->dttExitDate = $objObject->dttExitDate->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdassMember'] = $this->intIdassMember;
			$iArray['Designation'] = $this->intDesignation;
			$iArray['Name'] = $this->strName;
			$iArray['MemberId'] = $this->intMemberId;
			$iArray['AssId'] = $this->intAssId;
			$iArray['Address1'] = $this->strAddress1;
			$iArray['Address2'] = $this->strAddress2;
			$iArray['City'] = $this->strCity;
			$iArray['State'] = $this->intState;
			$iArray['Pincode'] = $this->strPincode;
			$iArray['Email1'] = $this->strEmail1;
			$iArray['Email2'] = $this->strEmail2;
			$iArray['Phone'] = $this->strPhone;
			$iArray['ExitDate'] = $this->dttExitDate;
			$iArray['Photo'] = $this->strPhoto;
			$iArray['Ref'] = $this->strRef;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdassMember ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdassMember
     * @property-read QQNode $Designation
     * @property-read QQNodeAssDesignation $DesignationObject
     * @property-read QQNode $Name
     * @property-read QQNode $MemberId
     * @property-read QQNodeRegMember $Member
     * @property-read QQNode $AssId
     * @property-read QQNodeAssMaster $Ass
     * @property-read QQNode $Address1
     * @property-read QQNode $Address2
     * @property-read QQNode $City
     * @property-read QQNode $State
     * @property-read QQNodePlace $StateObject
     * @property-read QQNode $Pincode
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $Phone
     * @property-read QQNode $ExitDate
     * @property-read QQNode $Photo
     * @property-read QQNode $Ref
     *
     *
     * @property-read QQReverseReferenceNodeReceipts $ReceiptsAsMember

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeAssMember extends QQNode {
		protected $strTableName = 'ass_member';
		protected $strPrimaryKey = 'idass_member';
		protected $strClassName = 'AssMember';
		public function __get($strName) {
			switch ($strName) {
				case 'IdassMember':
					return new QQNode('idass_member', 'IdassMember', 'Integer', $this);
				case 'Designation':
					return new QQNode('designation', 'Designation', 'Integer', $this);
				case 'DesignationObject':
					return new QQNodeAssDesignation('designation', 'DesignationObject', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'MemberId':
					return new QQNode('member_id', 'MemberId', 'Integer', $this);
				case 'Member':
					return new QQNodeRegMember('member_id', 'Member', 'Integer', $this);
				case 'AssId':
					return new QQNode('ass_id', 'AssId', 'Integer', $this);
				case 'Ass':
					return new QQNodeAssMaster('ass_id', 'Ass', 'Integer', $this);
				case 'Address1':
					return new QQNode('address1', 'Address1', 'Blob', $this);
				case 'Address2':
					return new QQNode('address2', 'Address2', 'Blob', $this);
				case 'City':
					return new QQNode('city', 'City', 'VarChar', $this);
				case 'State':
					return new QQNode('state', 'State', 'Integer', $this);
				case 'StateObject':
					return new QQNodePlace('state', 'StateObject', 'Integer', $this);
				case 'Pincode':
					return new QQNode('pincode', 'Pincode', 'VarChar', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'VarChar', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'VarChar', $this);
				case 'Phone':
					return new QQNode('phone', 'Phone', 'VarChar', $this);
				case 'ExitDate':
					return new QQNode('exit_date', 'ExitDate', 'Date', $this);
				case 'Photo':
					return new QQNode('photo', 'Photo', 'Blob', $this);
				case 'Ref':
					return new QQNode('ref', 'Ref', 'Blob', $this);
				case 'ReceiptsAsMember':
					return new QQReverseReferenceNodeReceipts($this, 'receiptsasmember', 'reverse_reference', 'member_id');

				case '_PrimaryKeyNode':
					return new QQNode('idass_member', 'IdassMember', 'Integer', $this);
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
     * @property-read QQNode $IdassMember
     * @property-read QQNode $Designation
     * @property-read QQNodeAssDesignation $DesignationObject
     * @property-read QQNode $Name
     * @property-read QQNode $MemberId
     * @property-read QQNodeRegMember $Member
     * @property-read QQNode $AssId
     * @property-read QQNodeAssMaster $Ass
     * @property-read QQNode $Address1
     * @property-read QQNode $Address2
     * @property-read QQNode $City
     * @property-read QQNode $State
     * @property-read QQNodePlace $StateObject
     * @property-read QQNode $Pincode
     * @property-read QQNode $Email1
     * @property-read QQNode $Email2
     * @property-read QQNode $Phone
     * @property-read QQNode $ExitDate
     * @property-read QQNode $Photo
     * @property-read QQNode $Ref
     *
     *
     * @property-read QQReverseReferenceNodeReceipts $ReceiptsAsMember

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeAssMember extends QQReverseReferenceNode {
		protected $strTableName = 'ass_member';
		protected $strPrimaryKey = 'idass_member';
		protected $strClassName = 'AssMember';
		public function __get($strName) {
			switch ($strName) {
				case 'IdassMember':
					return new QQNode('idass_member', 'IdassMember', 'integer', $this);
				case 'Designation':
					return new QQNode('designation', 'Designation', 'integer', $this);
				case 'DesignationObject':
					return new QQNodeAssDesignation('designation', 'DesignationObject', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'MemberId':
					return new QQNode('member_id', 'MemberId', 'integer', $this);
				case 'Member':
					return new QQNodeRegMember('member_id', 'Member', 'integer', $this);
				case 'AssId':
					return new QQNode('ass_id', 'AssId', 'integer', $this);
				case 'Ass':
					return new QQNodeAssMaster('ass_id', 'Ass', 'integer', $this);
				case 'Address1':
					return new QQNode('address1', 'Address1', 'string', $this);
				case 'Address2':
					return new QQNode('address2', 'Address2', 'string', $this);
				case 'City':
					return new QQNode('city', 'City', 'string', $this);
				case 'State':
					return new QQNode('state', 'State', 'integer', $this);
				case 'StateObject':
					return new QQNodePlace('state', 'StateObject', 'integer', $this);
				case 'Pincode':
					return new QQNode('pincode', 'Pincode', 'string', $this);
				case 'Email1':
					return new QQNode('email1', 'Email1', 'string', $this);
				case 'Email2':
					return new QQNode('email2', 'Email2', 'string', $this);
				case 'Phone':
					return new QQNode('phone', 'Phone', 'string', $this);
				case 'ExitDate':
					return new QQNode('exit_date', 'ExitDate', 'QDateTime', $this);
				case 'Photo':
					return new QQNode('photo', 'Photo', 'string', $this);
				case 'Ref':
					return new QQNode('ref', 'Ref', 'string', $this);
				case 'ReceiptsAsMember':
					return new QQReverseReferenceNodeReceipts($this, 'receiptsasmember', 'reverse_reference', 'member_id');

				case '_PrimaryKeyNode':
					return new QQNode('idass_member', 'IdassMember', 'integer', $this);
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
