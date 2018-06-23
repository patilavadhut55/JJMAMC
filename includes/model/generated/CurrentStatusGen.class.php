<?php
	/**
	 * The abstract CurrentStatusGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CurrentStatus subclass which
	 * extends this CurrentStatusGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CurrentStatus class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdcurrentStatus the value for intIdcurrentStatus (Read-Only PK)
	 * @property integer $Role the value for intRole 
	 * @property integer $Student the value for intStudent 
	 * @property integer $Semister the value for intSemister 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property QDateTime $From the value for dttFrom 
	 * @property QDateTime $To the value for dttTo 
	 * @property boolean $Active the value for blnActive 
	 * @property string $RollNo the value for strRollNo 
	 * @property boolean $Cancel the value for blnCancel 
	 * @property integer $AdmissionStatus the value for intAdmissionStatus 
	 * @property Role $RoleObject the value for the Role object referenced by intRole 
	 * @property Login $StudentObject the value for the Login object referenced by intStudent 
	 * @property AcademicYear $SemisterObject the value for the AcademicYear object referenced by intSemister 
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property AdmissionStatus $AdmissionStatusObject the value for the AdmissionStatus object referenced by intAdmissionStatus 
	 * @property-read Voucher $_VoucherAsRefStatus the value for the private _objVoucherAsRefStatus (Read-Only) if set due to an expansion on the voucher.ref_status reverse relationship
	 * @property-read Voucher[] $_VoucherAsRefStatusArray the value for the private _objVoucherAsRefStatusArray (Read-Only) if set due to an ExpandAsArray on the voucher.ref_status reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CurrentStatusGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column current_status.idcurrent_status
		 * @var integer intIdcurrentStatus
		 */
		protected $intIdcurrentStatus;
		const IdcurrentStatusDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.role
		 * @var integer intRole
		 */
		protected $intRole;
		const RoleDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.student
		 * @var integer intStudent
		 */
		protected $intStudent;
		const StudentDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.semister
		 * @var integer intSemister
		 */
		protected $intSemister;
		const SemisterDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.from
		 * @var QDateTime dttFrom
		 */
		protected $dttFrom;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.to
		 * @var QDateTime dttTo
		 */
		protected $dttTo;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.roll_no
		 * @var string strRollNo
		 */
		protected $strRollNo;
		const RollNoMaxLength = 45;
		const RollNoDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.cancel
		 * @var boolean blnCancel
		 */
		protected $blnCancel;
		const CancelDefault = null;


		/**
		 * Protected member variable that maps to the database column current_status.admission_status
		 * @var integer intAdmissionStatus
		 */
		protected $intAdmissionStatus;
		const AdmissionStatusDefault = null;


		/**
		 * Private member variable that stores a reference to a single VoucherAsRefStatus object
		 * (of type Voucher), if this CurrentStatus object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucherAsRefStatus;
		 */
		private $_objVoucherAsRefStatus;

		/**
		 * Private member variable that stores a reference to an array of VoucherAsRefStatus objects
		 * (of type Voucher[]), if this CurrentStatus object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherAsRefStatusArray;
		 */
		private $_objVoucherAsRefStatusArray = null;

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
		 * in the database column current_status.role.
		 *
		 * NOTE: Always use the RoleObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objRoleObject
		 */
		protected $objRoleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column current_status.student.
		 *
		 * NOTE: Always use the StudentObject property getter to correctly retrieve this Login object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Login objStudentObject
		 */
		protected $objStudentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column current_status.semister.
		 *
		 * NOTE: Always use the SemisterObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objSemisterObject
		 */
		protected $objSemisterObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column current_status.calender_year.
		 *
		 * NOTE: Always use the CalenderYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalenderYearObject
		 */
		protected $objCalenderYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column current_status.admission_status.
		 *
		 * NOTE: Always use the AdmissionStatusObject property getter to correctly retrieve this AdmissionStatus object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AdmissionStatus objAdmissionStatusObject
		 */
		protected $objAdmissionStatusObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdcurrentStatus = CurrentStatus::IdcurrentStatusDefault;
			$this->intRole = CurrentStatus::RoleDefault;
			$this->intStudent = CurrentStatus::StudentDefault;
			$this->intSemister = CurrentStatus::SemisterDefault;
			$this->intCalenderYear = CurrentStatus::CalenderYearDefault;
			$this->dttFrom = (CurrentStatus::FromDefault === null)?null:new QDateTime(CurrentStatus::FromDefault);
			$this->dttTo = (CurrentStatus::ToDefault === null)?null:new QDateTime(CurrentStatus::ToDefault);
			$this->blnActive = CurrentStatus::ActiveDefault;
			$this->strRollNo = CurrentStatus::RollNoDefault;
			$this->blnCancel = CurrentStatus::CancelDefault;
			$this->intAdmissionStatus = CurrentStatus::AdmissionStatusDefault;
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
		 * Load a CurrentStatus from PK Info
		 * @param integer $intIdcurrentStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus
		 */
		public static function Load($intIdcurrentStatus, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CurrentStatus', $intIdcurrentStatus);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = CurrentStatus::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CurrentStatus()->IdcurrentStatus, $intIdcurrentStatus)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all CurrentStatuses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CurrentStatus::QueryArray to perform the LoadAll query
			try {
				return CurrentStatus::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CurrentStatuses
		 * @return int
		 */
		public static function CountAll() {
			// Call CurrentStatus::QueryCount to perform the CountAll query
			return CurrentStatus::QueryCount(QQ::All());
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
			$objDatabase = CurrentStatus::GetDatabase();

			// Create/Build out the QueryBuilder object with CurrentStatus-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'current_status');

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
				CurrentStatus::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('current_status');

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
		 * Static Qcubed Query method to query for a single CurrentStatus object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CurrentStatus the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CurrentStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new CurrentStatus object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CurrentStatus::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CurrentStatus::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of CurrentStatus objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CurrentStatus[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CurrentStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CurrentStatus::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CurrentStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of CurrentStatus objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CurrentStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CurrentStatus::GetDatabase();

			$strQuery = CurrentStatus::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/currentstatus', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = CurrentStatus::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CurrentStatus
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'current_status';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idcurrent_status', $strAliasPrefix . 'idcurrent_status');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idcurrent_status', $strAliasPrefix . 'idcurrent_status');
			    $objBuilder->AddSelectItem($strTableName, 'role', $strAliasPrefix . 'role');
			    $objBuilder->AddSelectItem($strTableName, 'student', $strAliasPrefix . 'student');
			    $objBuilder->AddSelectItem($strTableName, 'semister', $strAliasPrefix . 'semister');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
			    $objBuilder->AddSelectItem($strTableName, 'roll_no', $strAliasPrefix . 'roll_no');
			    $objBuilder->AddSelectItem($strTableName, 'cancel', $strAliasPrefix . 'cancel');
			    $objBuilder->AddSelectItem($strTableName, 'admission_status', $strAliasPrefix . 'admission_status');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CurrentStatus from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CurrentStatus::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CurrentStatus
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdcurrentStatus == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'current_status__';


						// Expanding reverse references: VoucherAsRefStatus
						$strAlias = $strAliasPrefix . 'voucherasrefstatus__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherAsRefStatusArray)
								$objPreviousItem->_objVoucherAsRefStatusArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherAsRefStatusArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherAsRefStatusArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefstatus__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherAsRefStatusArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherAsRefStatusArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'current_status__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the CurrentStatus object
			$objToReturn = new CurrentStatus();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdcurrentStatus = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'role';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intRole = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'student';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStudent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'semister';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSemister = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFrom = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttTo = $objDbRow->GetColumn($strAliasName, 'DateTime');
			$strAlias = $strAliasPrefix . 'active';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'roll_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRollNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'cancel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnCancel = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'admission_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAdmissionStatus = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdcurrentStatus != $objPreviousItem->IdcurrentStatus) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objVoucherAsRefStatusArray);
					$cnt = count($objToReturn->_objVoucherAsRefStatusArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherAsRefStatusArray, $objToReturn->_objVoucherAsRefStatusArray)) {
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
				$strAliasPrefix = 'current_status__';

			// Check for RoleObject Early Binding
			$strAlias = $strAliasPrefix . 'role__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objRoleObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'role__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for StudentObject Early Binding
			$strAlias = $strAliasPrefix . 'student__idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStudentObject = Login::InstantiateDbRow($objDbRow, $strAliasPrefix . 'student__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for SemisterObject Early Binding
			$strAlias = $strAliasPrefix . 'semister__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objSemisterObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'semister__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AdmissionStatusObject Early Binding
			$strAlias = $strAliasPrefix . 'admission_status__idadmission_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAdmissionStatusObject = AdmissionStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'admission_status__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for VoucherAsRefStatus Virtual Binding
			$strAlias = $strAliasPrefix . 'voucherasrefstatus__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherAsRefStatusArray)
				$objToReturn->_objVoucherAsRefStatusArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherAsRefStatusArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucherAsRefStatus = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucherasrefstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of CurrentStatuses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CurrentStatus[]
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
					$objItem = CurrentStatus::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CurrentStatus::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single CurrentStatus object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CurrentStatus next row resulting from the query
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
			return CurrentStatus::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single CurrentStatus object,
		 * by IdcurrentStatus Index(es)
		 * @param integer $intIdcurrentStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus
		*/
		public static function LoadByIdcurrentStatus($intIdcurrentStatus, $objOptionalClauses = null) {
			return CurrentStatus::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CurrentStatus()->IdcurrentStatus, $intIdcurrentStatus)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of CurrentStatus objects,
		 * by Role Index(es)
		 * @param integer $intRole
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public static function LoadArrayByRole($intRole, $objOptionalClauses = null) {
			// Call CurrentStatus::QueryArray to perform the LoadArrayByRole query
			try {
				return CurrentStatus::QueryArray(
					QQ::Equal(QQN::CurrentStatus()->Role, $intRole),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CurrentStatuses
		 * by Role Index(es)
		 * @param integer $intRole
		 * @return int
		*/
		public static function CountByRole($intRole) {
			// Call CurrentStatus::QueryCount to perform the CountByRole query
			return CurrentStatus::QueryCount(
				QQ::Equal(QQN::CurrentStatus()->Role, $intRole)
			);
		}

		/**
		 * Load an array of CurrentStatus objects,
		 * by Student Index(es)
		 * @param integer $intStudent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public static function LoadArrayByStudent($intStudent, $objOptionalClauses = null) {
			// Call CurrentStatus::QueryArray to perform the LoadArrayByStudent query
			try {
				return CurrentStatus::QueryArray(
					QQ::Equal(QQN::CurrentStatus()->Student, $intStudent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CurrentStatuses
		 * by Student Index(es)
		 * @param integer $intStudent
		 * @return int
		*/
		public static function CountByStudent($intStudent) {
			// Call CurrentStatus::QueryCount to perform the CountByStudent query
			return CurrentStatus::QueryCount(
				QQ::Equal(QQN::CurrentStatus()->Student, $intStudent)
			);
		}

		/**
		 * Load an array of CurrentStatus objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call CurrentStatus::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return CurrentStatus::QueryArray(
					QQ::Equal(QQN::CurrentStatus()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CurrentStatuses
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call CurrentStatus::QueryCount to perform the CountByCalenderYear query
			return CurrentStatus::QueryCount(
				QQ::Equal(QQN::CurrentStatus()->CalenderYear, $intCalenderYear)
			);
		}

		/**
		 * Load an array of CurrentStatus objects,
		 * by Semister Index(es)
		 * @param integer $intSemister
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public static function LoadArrayBySemister($intSemister, $objOptionalClauses = null) {
			// Call CurrentStatus::QueryArray to perform the LoadArrayBySemister query
			try {
				return CurrentStatus::QueryArray(
					QQ::Equal(QQN::CurrentStatus()->Semister, $intSemister),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CurrentStatuses
		 * by Semister Index(es)
		 * @param integer $intSemister
		 * @return int
		*/
		public static function CountBySemister($intSemister) {
			// Call CurrentStatus::QueryCount to perform the CountBySemister query
			return CurrentStatus::QueryCount(
				QQ::Equal(QQN::CurrentStatus()->Semister, $intSemister)
			);
		}

		/**
		 * Load an array of CurrentStatus objects,
		 * by AdmissionStatus Index(es)
		 * @param integer $intAdmissionStatus
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public static function LoadArrayByAdmissionStatus($intAdmissionStatus, $objOptionalClauses = null) {
			// Call CurrentStatus::QueryArray to perform the LoadArrayByAdmissionStatus query
			try {
				return CurrentStatus::QueryArray(
					QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $intAdmissionStatus),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CurrentStatuses
		 * by AdmissionStatus Index(es)
		 * @param integer $intAdmissionStatus
		 * @return int
		*/
		public static function CountByAdmissionStatus($intAdmissionStatus) {
			// Call CurrentStatus::QueryCount to perform the CountByAdmissionStatus query
			return CurrentStatus::QueryCount(
				QQ::Equal(QQN::CurrentStatus()->AdmissionStatus, $intAdmissionStatus)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this CurrentStatus
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `current_status` (
							`role`,
							`student`,
							`semister`,
							`calender_year`,
							`from`,
							`to`,
							`active`,
							`roll_no`,
							`cancel`,
							`admission_status`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intRole) . ',
							' . $objDatabase->SqlVariable($this->intStudent) . ',
							' . $objDatabase->SqlVariable($this->intSemister) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							' . $objDatabase->SqlVariable($this->dttFrom) . ',
							' . $objDatabase->SqlVariable($this->dttTo) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . ',
							' . $objDatabase->SqlVariable($this->strRollNo) . ',
							' . $objDatabase->SqlVariable($this->blnCancel) . ',
							' . $objDatabase->SqlVariable($this->intAdmissionStatus) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdcurrentStatus = $objDatabase->InsertId('current_status', 'idcurrent_status');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`current_status`
						SET
							`role` = ' . $objDatabase->SqlVariable($this->intRole) . ',
							`student` = ' . $objDatabase->SqlVariable($this->intStudent) . ',
							`semister` = ' . $objDatabase->SqlVariable($this->intSemister) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							`from` = ' . $objDatabase->SqlVariable($this->dttFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->dttTo) . ',
							`active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
							`roll_no` = ' . $objDatabase->SqlVariable($this->strRollNo) . ',
							`cancel` = ' . $objDatabase->SqlVariable($this->blnCancel) . ',
							`admission_status` = ' . $objDatabase->SqlVariable($this->intAdmissionStatus) . '
						WHERE
							`idcurrent_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '
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
		 * Delete this CurrentStatus
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CurrentStatus with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this CurrentStatus ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CurrentStatus', $this->intIdcurrentStatus);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all CurrentStatuses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate current_status table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `current_status`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this CurrentStatus from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CurrentStatus object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = CurrentStatus::Load($this->intIdcurrentStatus);

			// Update $this's local variables to match
			$this->Role = $objReloaded->Role;
			$this->Student = $objReloaded->Student;
			$this->Semister = $objReloaded->Semister;
			$this->CalenderYear = $objReloaded->CalenderYear;
			$this->dttFrom = $objReloaded->dttFrom;
			$this->dttTo = $objReloaded->dttTo;
			$this->blnActive = $objReloaded->blnActive;
			$this->strRollNo = $objReloaded->strRollNo;
			$this->blnCancel = $objReloaded->blnCancel;
			$this->AdmissionStatus = $objReloaded->AdmissionStatus;
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
				case 'IdcurrentStatus':
					/**
					 * Gets the value for intIdcurrentStatus (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdcurrentStatus;

				case 'Role':
					/**
					 * Gets the value for intRole 
					 * @return integer
					 */
					return $this->intRole;

				case 'Student':
					/**
					 * Gets the value for intStudent 
					 * @return integer
					 */
					return $this->intStudent;

				case 'Semister':
					/**
					 * Gets the value for intSemister 
					 * @return integer
					 */
					return $this->intSemister;

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;

				case 'From':
					/**
					 * Gets the value for dttFrom 
					 * @return QDateTime
					 */
					return $this->dttFrom;

				case 'To':
					/**
					 * Gets the value for dttTo 
					 * @return QDateTime
					 */
					return $this->dttTo;

				case 'Active':
					/**
					 * Gets the value for blnActive 
					 * @return boolean
					 */
					return $this->blnActive;

				case 'RollNo':
					/**
					 * Gets the value for strRollNo 
					 * @return string
					 */
					return $this->strRollNo;

				case 'Cancel':
					/**
					 * Gets the value for blnCancel 
					 * @return boolean
					 */
					return $this->blnCancel;

				case 'AdmissionStatus':
					/**
					 * Gets the value for intAdmissionStatus 
					 * @return integer
					 */
					return $this->intAdmissionStatus;


				///////////////////
				// Member Objects
				///////////////////
				case 'RoleObject':
					/**
					 * Gets the value for the Role object referenced by intRole 
					 * @return Role
					 */
					try {
						if ((!$this->objRoleObject) && (!is_null($this->intRole)))
							$this->objRoleObject = Role::Load($this->intRole);
						return $this->objRoleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'StudentObject':
					/**
					 * Gets the value for the Login object referenced by intStudent 
					 * @return Login
					 */
					try {
						if ((!$this->objStudentObject) && (!is_null($this->intStudent)))
							$this->objStudentObject = Login::Load($this->intStudent);
						return $this->objStudentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SemisterObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intSemister 
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objSemisterObject) && (!is_null($this->intSemister)))
							$this->objSemisterObject = AcademicYear::Load($this->intSemister);
						return $this->objSemisterObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CalenderYearObject':
					/**
					 * Gets the value for the CalenderYear object referenced by intCalenderYear 
					 * @return CalenderYear
					 */
					try {
						if ((!$this->objCalenderYearObject) && (!is_null($this->intCalenderYear)))
							$this->objCalenderYearObject = CalenderYear::Load($this->intCalenderYear);
						return $this->objCalenderYearObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdmissionStatusObject':
					/**
					 * Gets the value for the AdmissionStatus object referenced by intAdmissionStatus 
					 * @return AdmissionStatus
					 */
					try {
						if ((!$this->objAdmissionStatusObject) && (!is_null($this->intAdmissionStatus)))
							$this->objAdmissionStatusObject = AdmissionStatus::Load($this->intAdmissionStatus);
						return $this->objAdmissionStatusObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_VoucherAsRefStatus':
					/**
					 * Gets the value for the private _objVoucherAsRefStatus (Read-Only)
					 * if set due to an expansion on the voucher.ref_status reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucherAsRefStatus;

				case '_VoucherAsRefStatusArray':
					/**
					 * Gets the value for the private _objVoucherAsRefStatusArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.ref_status reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherAsRefStatusArray;


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
				case 'Role':
					/**
					 * Sets the value for intRole 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objRoleObject = null;
						return ($this->intRole = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Student':
					/**
					 * Sets the value for intStudent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objStudentObject = null;
						return ($this->intStudent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Semister':
					/**
					 * Sets the value for intSemister 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objSemisterObject = null;
						return ($this->intSemister = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CalenderYear':
					/**
					 * Sets the value for intCalenderYear 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCalenderYearObject = null;
						return ($this->intCalenderYear = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'From':
					/**
					 * Sets the value for dttFrom 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFrom = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'To':
					/**
					 * Sets the value for dttTo 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTo = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Active':
					/**
					 * Sets the value for blnActive 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnActive = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RollNo':
					/**
					 * Sets the value for strRollNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRollNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cancel':
					/**
					 * Sets the value for blnCancel 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnCancel = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdmissionStatus':
					/**
					 * Sets the value for intAdmissionStatus 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAdmissionStatusObject = null;
						return ($this->intAdmissionStatus = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'RoleObject':
					/**
					 * Sets the value for the Role object referenced by intRole 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intRole = null;
						$this->objRoleObject = null;
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
							throw new QCallerException('Unable to set an unsaved RoleObject for this CurrentStatus');

						// Update Local Member Variables
						$this->objRoleObject = $mixValue;
						$this->intRole = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'StudentObject':
					/**
					 * Sets the value for the Login object referenced by intStudent 
					 * @param Login $mixValue
					 * @return Login
					 */
					if (is_null($mixValue)) {
						$this->intStudent = null;
						$this->objStudentObject = null;
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
							throw new QCallerException('Unable to set an unsaved StudentObject for this CurrentStatus');

						// Update Local Member Variables
						$this->objStudentObject = $mixValue;
						$this->intStudent = $mixValue->Idlogin;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'SemisterObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intSemister 
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intSemister = null;
						$this->objSemisterObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AcademicYear object
						try {
							$mixValue = QType::Cast($mixValue, 'AcademicYear');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AcademicYear object
						if (is_null($mixValue->IdacademicYear))
							throw new QCallerException('Unable to set an unsaved SemisterObject for this CurrentStatus');

						// Update Local Member Variables
						$this->objSemisterObject = $mixValue;
						$this->intSemister = $mixValue->IdacademicYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CalenderYearObject':
					/**
					 * Sets the value for the CalenderYear object referenced by intCalenderYear 
					 * @param CalenderYear $mixValue
					 * @return CalenderYear
					 */
					if (is_null($mixValue)) {
						$this->intCalenderYear = null;
						$this->objCalenderYearObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CalenderYear object
						try {
							$mixValue = QType::Cast($mixValue, 'CalenderYear');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CalenderYear object
						if (is_null($mixValue->IdcalenderYear))
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this CurrentStatus');

						// Update Local Member Variables
						$this->objCalenderYearObject = $mixValue;
						$this->intCalenderYear = $mixValue->IdcalenderYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AdmissionStatusObject':
					/**
					 * Sets the value for the AdmissionStatus object referenced by intAdmissionStatus 
					 * @param AdmissionStatus $mixValue
					 * @return AdmissionStatus
					 */
					if (is_null($mixValue)) {
						$this->intAdmissionStatus = null;
						$this->objAdmissionStatusObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a AdmissionStatus object
						try {
							$mixValue = QType::Cast($mixValue, 'AdmissionStatus');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED AdmissionStatus object
						if (is_null($mixValue->IdadmissionStatus))
							throw new QCallerException('Unable to set an unsaved AdmissionStatusObject for this CurrentStatus');

						// Update Local Member Variables
						$this->objAdmissionStatusObject = $mixValue;
						$this->intAdmissionStatus = $mixValue->IdadmissionStatus;

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



		// Related Objects' Methods for VoucherAsRefStatus
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VouchersAsRefStatus as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherAsRefStatusArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcurrentStatus)))
				return array();

			try {
				return Voucher::LoadArrayByRefStatus($this->intIdcurrentStatus, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VouchersAsRefStatus
		 * @return int
		*/
		public function CountVouchersAsRefStatus() {
			if ((is_null($this->intIdcurrentStatus)))
				return 0;

			return Voucher::CountByRefStatus($this->intIdcurrentStatus);
		}

		/**
		 * Associates a VoucherAsRefStatus
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucherAsRefStatus(Voucher $objVoucher) {
			if ((is_null($this->intIdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsRefStatus on this unsaved CurrentStatus.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucherAsRefStatus on this CurrentStatus with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`ref_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a VoucherAsRefStatus
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucherAsRefStatus(Voucher $objVoucher) {
			if ((is_null($this->intIdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefStatus on this unsaved CurrentStatus.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefStatus on this CurrentStatus with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`ref_status` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`ref_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '
			');
		}

		/**
		 * Unassociates all VouchersAsRefStatus
		 * @return void
		*/
		public function UnassociateAllVouchersAsRefStatus() {
			if ((is_null($this->intIdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefStatus on this unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`ref_status` = null
				WHERE
					`ref_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '
			');
		}

		/**
		 * Deletes an associated VoucherAsRefStatus
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucherAsRefStatus(Voucher $objVoucher) {
			if ((is_null($this->intIdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefStatus on this unsaved CurrentStatus.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefStatus on this CurrentStatus with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`ref_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '
			');
		}

		/**
		 * Deletes all associated VouchersAsRefStatus
		 * @return void
		*/
		public function DeleteAllVouchersAsRefStatus() {
			if ((is_null($this->intIdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucherAsRefStatus on this unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = CurrentStatus::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`ref_status` = ' . $objDatabase->SqlVariable($this->intIdcurrentStatus) . '
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
			return "current_status";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[CurrentStatus::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="CurrentStatus"><sequence>';
			$strToReturn .= '<element name="IdcurrentStatus" type="xsd:int"/>';
			$strToReturn .= '<element name="RoleObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="StudentObject" type="xsd1:Login"/>';
			$strToReturn .= '<element name="SemisterObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="From" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="To" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="RollNo" type="xsd:string"/>';
			$strToReturn .= '<element name="Cancel" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AdmissionStatusObject" type="xsd1:AdmissionStatus"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CurrentStatus', $strComplexTypeArray)) {
				$strComplexTypeArray['CurrentStatus'] = CurrentStatus::GetSoapComplexTypeXml();
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				Login::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				AdmissionStatus::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CurrentStatus::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CurrentStatus();
			if (property_exists($objSoapObject, 'IdcurrentStatus'))
				$objToReturn->intIdcurrentStatus = $objSoapObject->IdcurrentStatus;
			if ((property_exists($objSoapObject, 'RoleObject')) &&
				($objSoapObject->RoleObject))
				$objToReturn->RoleObject = Role::GetObjectFromSoapObject($objSoapObject->RoleObject);
			if ((property_exists($objSoapObject, 'StudentObject')) &&
				($objSoapObject->StudentObject))
				$objToReturn->StudentObject = Login::GetObjectFromSoapObject($objSoapObject->StudentObject);
			if ((property_exists($objSoapObject, 'SemisterObject')) &&
				($objSoapObject->SemisterObject))
				$objToReturn->SemisterObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->SemisterObject);
			if ((property_exists($objSoapObject, 'CalenderYearObject')) &&
				($objSoapObject->CalenderYearObject))
				$objToReturn->CalenderYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalenderYearObject);
			if (property_exists($objSoapObject, 'From'))
				$objToReturn->dttFrom = new QDateTime($objSoapObject->From);
			if (property_exists($objSoapObject, 'To'))
				$objToReturn->dttTo = new QDateTime($objSoapObject->To);
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->blnActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, 'RollNo'))
				$objToReturn->strRollNo = $objSoapObject->RollNo;
			if (property_exists($objSoapObject, 'Cancel'))
				$objToReturn->blnCancel = $objSoapObject->Cancel;
			if ((property_exists($objSoapObject, 'AdmissionStatusObject')) &&
				($objSoapObject->AdmissionStatusObject))
				$objToReturn->AdmissionStatusObject = AdmissionStatus::GetObjectFromSoapObject($objSoapObject->AdmissionStatusObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CurrentStatus::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objRoleObject)
				$objObject->objRoleObject = Role::GetSoapObjectFromObject($objObject->objRoleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intRole = null;
			if ($objObject->objStudentObject)
				$objObject->objStudentObject = Login::GetSoapObjectFromObject($objObject->objStudentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStudent = null;
			if ($objObject->objSemisterObject)
				$objObject->objSemisterObject = AcademicYear::GetSoapObjectFromObject($objObject->objSemisterObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intSemister = null;
			if ($objObject->objCalenderYearObject)
				$objObject->objCalenderYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalenderYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalenderYear = null;
			if ($objObject->dttFrom)
				$objObject->dttFrom = $objObject->dttFrom->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTo)
				$objObject->dttTo = $objObject->dttTo->qFormat(QDateTime::FormatSoap);
			if ($objObject->objAdmissionStatusObject)
				$objObject->objAdmissionStatusObject = AdmissionStatus::GetSoapObjectFromObject($objObject->objAdmissionStatusObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAdmissionStatus = null;
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
			$iArray['IdcurrentStatus'] = $this->intIdcurrentStatus;
			$iArray['Role'] = $this->intRole;
			$iArray['Student'] = $this->intStudent;
			$iArray['Semister'] = $this->intSemister;
			$iArray['CalenderYear'] = $this->intCalenderYear;
			$iArray['From'] = $this->dttFrom;
			$iArray['To'] = $this->dttTo;
			$iArray['Active'] = $this->blnActive;
			$iArray['RollNo'] = $this->strRollNo;
			$iArray['Cancel'] = $this->blnCancel;
			$iArray['AdmissionStatus'] = $this->intAdmissionStatus;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdcurrentStatus ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdcurrentStatus
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     * @property-read QQNode $Student
     * @property-read QQNodeLogin $StudentObject
     * @property-read QQNode $Semister
     * @property-read QQNodeAcademicYear $SemisterObject
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Active
     * @property-read QQNode $RollNo
     * @property-read QQNode $Cancel
     * @property-read QQNode $AdmissionStatus
     * @property-read QQNodeAdmissionStatus $AdmissionStatusObject
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsRefStatus

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeCurrentStatus extends QQNode {
		protected $strTableName = 'current_status';
		protected $strPrimaryKey = 'idcurrent_status';
		protected $strClassName = 'CurrentStatus';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcurrentStatus':
					return new QQNode('idcurrent_status', 'IdcurrentStatus', 'Integer', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'Integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'Integer', $this);
				case 'Student':
					return new QQNode('student', 'Student', 'Integer', $this);
				case 'StudentObject':
					return new QQNodeLogin('student', 'StudentObject', 'Integer', $this);
				case 'Semister':
					return new QQNode('semister', 'Semister', 'Integer', $this);
				case 'SemisterObject':
					return new QQNodeAcademicYear('semister', 'SemisterObject', 'Integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);
				case 'From':
					return new QQNode('from', 'From', 'DateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'DateTime', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'Bit', $this);
				case 'RollNo':
					return new QQNode('roll_no', 'RollNo', 'VarChar', $this);
				case 'Cancel':
					return new QQNode('cancel', 'Cancel', 'Bit', $this);
				case 'AdmissionStatus':
					return new QQNode('admission_status', 'AdmissionStatus', 'Integer', $this);
				case 'AdmissionStatusObject':
					return new QQNodeAdmissionStatus('admission_status', 'AdmissionStatusObject', 'Integer', $this);
				case 'VoucherAsRefStatus':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasrefstatus', 'reverse_reference', 'ref_status');

				case '_PrimaryKeyNode':
					return new QQNode('idcurrent_status', 'IdcurrentStatus', 'Integer', $this);
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
     * @property-read QQNode $IdcurrentStatus
     * @property-read QQNode $Role
     * @property-read QQNodeRole $RoleObject
     * @property-read QQNode $Student
     * @property-read QQNodeLogin $StudentObject
     * @property-read QQNode $Semister
     * @property-read QQNodeAcademicYear $SemisterObject
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Active
     * @property-read QQNode $RollNo
     * @property-read QQNode $Cancel
     * @property-read QQNode $AdmissionStatus
     * @property-read QQNodeAdmissionStatus $AdmissionStatusObject
     *
     *
     * @property-read QQReverseReferenceNodeVoucher $VoucherAsRefStatus

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCurrentStatus extends QQReverseReferenceNode {
		protected $strTableName = 'current_status';
		protected $strPrimaryKey = 'idcurrent_status';
		protected $strClassName = 'CurrentStatus';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcurrentStatus':
					return new QQNode('idcurrent_status', 'IdcurrentStatus', 'integer', $this);
				case 'Role':
					return new QQNode('role', 'Role', 'integer', $this);
				case 'RoleObject':
					return new QQNodeRole('role', 'RoleObject', 'integer', $this);
				case 'Student':
					return new QQNode('student', 'Student', 'integer', $this);
				case 'StudentObject':
					return new QQNodeLogin('student', 'StudentObject', 'integer', $this);
				case 'Semister':
					return new QQNode('semister', 'Semister', 'integer', $this);
				case 'SemisterObject':
					return new QQNodeAcademicYear('semister', 'SemisterObject', 'integer', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);
				case 'From':
					return new QQNode('from', 'From', 'QDateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'QDateTime', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'boolean', $this);
				case 'RollNo':
					return new QQNode('roll_no', 'RollNo', 'string', $this);
				case 'Cancel':
					return new QQNode('cancel', 'Cancel', 'boolean', $this);
				case 'AdmissionStatus':
					return new QQNode('admission_status', 'AdmissionStatus', 'integer', $this);
				case 'AdmissionStatusObject':
					return new QQNodeAdmissionStatus('admission_status', 'AdmissionStatusObject', 'integer', $this);
				case 'VoucherAsRefStatus':
					return new QQReverseReferenceNodeVoucher($this, 'voucherasrefstatus', 'reverse_reference', 'ref_status');

				case '_PrimaryKeyNode':
					return new QQNode('idcurrent_status', 'IdcurrentStatus', 'integer', $this);
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
