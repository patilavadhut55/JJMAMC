<?php
	/**
	 * The abstract FeesGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Fees subclass which
	 * extends this FeesGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Fees class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdfeesTemplet the value for intIdfeesTemplet (Read-Only PK)
	 * @property integer $Course the value for intCourse 
	 * @property integer $Category the value for intCategory 
	 * @property string $AdmitAmt the value for strAdmitAmt 
	 * @property string $GovAmt the value for strGovAmt 
	 * @property integer $CalenderYear the value for intCalenderYear 
	 * @property integer $AcademicYear the value for intAcademicYear 
	 * @property integer $Fee the value for intFee 
	 * @property integer $Seq the value for intSeq 
	 * @property boolean $OnAdmission the value for blnOnAdmission 
	 * @property boolean $AfterDueDate the value for blnAfterDueDate 
	 * @property integer $Parrent the value for intParrent 
	 * @property Role $CourseObject the value for the Role object referenced by intCourse 
	 * @property FeesConcession $CategoryObject the value for the FeesConcession object referenced by intCategory 
	 * @property CalenderYear $CalenderYearObject the value for the CalenderYear object referenced by intCalenderYear 
	 * @property AcademicYear $AcademicYearObject the value for the AcademicYear object referenced by intAcademicYear 
	 * @property Ledger $FeeObject the value for the Ledger object referenced by intFee 
	 * @property Fees $ParrentObject the value for the Fees object referenced by intParrent 
	 * @property-read Fees $_FeesAsParrent the value for the private _objFeesAsParrent (Read-Only) if set due to an expansion on the fees.parrent reverse relationship
	 * @property-read Fees[] $_FeesAsParrentArray the value for the private _objFeesAsParrentArray (Read-Only) if set due to an ExpandAsArray on the fees.parrent reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FeesGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column fees.idfees_templet
		 * @var integer intIdfeesTemplet
		 */
		protected $intIdfeesTemplet;
		const IdfeesTempletDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.course
		 * @var integer intCourse
		 */
		protected $intCourse;
		const CourseDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.category
		 * @var integer intCategory
		 */
		protected $intCategory;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.admit_amt
		 * @var string strAdmitAmt
		 */
		protected $strAdmitAmt;
		const AdmitAmtDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.gov_amt
		 * @var string strGovAmt
		 */
		protected $strGovAmt;
		const GovAmtDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.calender_year
		 * @var integer intCalenderYear
		 */
		protected $intCalenderYear;
		const CalenderYearDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.academic_year
		 * @var integer intAcademicYear
		 */
		protected $intAcademicYear;
		const AcademicYearDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.fee
		 * @var integer intFee
		 */
		protected $intFee;
		const FeeDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.seq
		 * @var integer intSeq
		 */
		protected $intSeq;
		const SeqDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.on_admission
		 * @var boolean blnOnAdmission
		 */
		protected $blnOnAdmission;
		const OnAdmissionDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.after_due_date
		 * @var boolean blnAfterDueDate
		 */
		protected $blnAfterDueDate;
		const AfterDueDateDefault = null;


		/**
		 * Protected member variable that maps to the database column fees.parrent
		 * @var integer intParrent
		 */
		protected $intParrent;
		const ParrentDefault = null;


		/**
		 * Private member variable that stores a reference to a single FeesAsParrent object
		 * (of type Fees), if this Fees object was restored with
		 * an expansion on the fees association table.
		 * @var Fees _objFeesAsParrent;
		 */
		private $_objFeesAsParrent;

		/**
		 * Private member variable that stores a reference to an array of FeesAsParrent objects
		 * (of type Fees[]), if this Fees object was restored with
		 * an ExpandAsArray on the fees association table.
		 * @var Fees[] _objFeesAsParrentArray;
		 */
		private $_objFeesAsParrentArray = null;

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
		 * in the database column fees.course.
		 *
		 * NOTE: Always use the CourseObject property getter to correctly retrieve this Role object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Role objCourseObject
		 */
		protected $objCourseObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fees.category.
		 *
		 * NOTE: Always use the CategoryObject property getter to correctly retrieve this FeesConcession object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var FeesConcession objCategoryObject
		 */
		protected $objCategoryObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fees.calender_year.
		 *
		 * NOTE: Always use the CalenderYearObject property getter to correctly retrieve this CalenderYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CalenderYear objCalenderYearObject
		 */
		protected $objCalenderYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fees.academic_year.
		 *
		 * NOTE: Always use the AcademicYearObject property getter to correctly retrieve this AcademicYear object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var AcademicYear objAcademicYearObject
		 */
		protected $objAcademicYearObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fees.fee.
		 *
		 * NOTE: Always use the FeeObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objFeeObject
		 */
		protected $objFeeObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column fees.parrent.
		 *
		 * NOTE: Always use the ParrentObject property getter to correctly retrieve this Fees object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fees objParrentObject
		 */
		protected $objParrentObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdfeesTemplet = Fees::IdfeesTempletDefault;
			$this->intCourse = Fees::CourseDefault;
			$this->intCategory = Fees::CategoryDefault;
			$this->strAdmitAmt = Fees::AdmitAmtDefault;
			$this->strGovAmt = Fees::GovAmtDefault;
			$this->intCalenderYear = Fees::CalenderYearDefault;
			$this->intAcademicYear = Fees::AcademicYearDefault;
			$this->intFee = Fees::FeeDefault;
			$this->intSeq = Fees::SeqDefault;
			$this->blnOnAdmission = Fees::OnAdmissionDefault;
			$this->blnAfterDueDate = Fees::AfterDueDateDefault;
			$this->intParrent = Fees::ParrentDefault;
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
		 * Load a Fees from PK Info
		 * @param integer $intIdfeesTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees
		 */
		public static function Load($intIdfeesTemplet, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Fees', $intIdfeesTemplet);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Fees::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Fees()->IdfeesTemplet, $intIdfeesTemplet)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Feeses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Fees::QueryArray to perform the LoadAll query
			try {
				return Fees::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Feeses
		 * @return int
		 */
		public static function CountAll() {
			// Call Fees::QueryCount to perform the CountAll query
			return Fees::QueryCount(QQ::All());
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
			$objDatabase = Fees::GetDatabase();

			// Create/Build out the QueryBuilder object with Fees-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'fees');

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
				Fees::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('fees');

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
		 * Static Qcubed Query method to query for a single Fees object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Fees the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fees::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Fees object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Fees::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Fees::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Fees objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Fees[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fees::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Fees::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Fees::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Fees objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fees::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Fees::GetDatabase();

			$strQuery = Fees::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/fees', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Fees::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Fees
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'fees';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idfees_templet', $strAliasPrefix . 'idfees_templet');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idfees_templet', $strAliasPrefix . 'idfees_templet');
			    $objBuilder->AddSelectItem($strTableName, 'course', $strAliasPrefix . 'course');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'admit_amt', $strAliasPrefix . 'admit_amt');
			    $objBuilder->AddSelectItem($strTableName, 'gov_amt', $strAliasPrefix . 'gov_amt');
			    $objBuilder->AddSelectItem($strTableName, 'calender_year', $strAliasPrefix . 'calender_year');
			    $objBuilder->AddSelectItem($strTableName, 'academic_year', $strAliasPrefix . 'academic_year');
			    $objBuilder->AddSelectItem($strTableName, 'fee', $strAliasPrefix . 'fee');
			    $objBuilder->AddSelectItem($strTableName, 'seq', $strAliasPrefix . 'seq');
			    $objBuilder->AddSelectItem($strTableName, 'on_admission', $strAliasPrefix . 'on_admission');
			    $objBuilder->AddSelectItem($strTableName, 'after_due_date', $strAliasPrefix . 'after_due_date');
			    $objBuilder->AddSelectItem($strTableName, 'parrent', $strAliasPrefix . 'parrent');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Fees from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Fees::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Fees
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdfeesTemplet == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'fees__';


						// Expanding reverse references: FeesAsParrent
						$strAlias = $strAliasPrefix . 'feesasparrent__idfees_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objFeesAsParrentArray)
								$objPreviousItem->_objFeesAsParrentArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFeesAsParrentArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFeesAsParrentArray;
								$objChildItem = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasparrent__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFeesAsParrentArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFeesAsParrentArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'fees__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Fees object
			$objToReturn = new Fees();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdfeesTemplet = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'course';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCourse = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCategory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'admit_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAdmitAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'gov_amt';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGovAmt = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'calender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'academic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intAcademicYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fee';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFee = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'seq';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSeq = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'on_admission';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnOnAdmission = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'after_due_date';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnAfterDueDate = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'parrent';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intParrent = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdfeesTemplet != $objPreviousItem->IdfeesTemplet) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objFeesAsParrentArray);
					$cnt = count($objToReturn->_objFeesAsParrentArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objFeesAsParrentArray, $objToReturn->_objFeesAsParrentArray)) {
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
				$strAliasPrefix = 'fees__';

			// Check for CourseObject Early Binding
			$strAlias = $strAliasPrefix . 'course__idrole';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCourseObject = Role::InstantiateDbRow($objDbRow, $strAliasPrefix . 'course__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CategoryObject Early Binding
			$strAlias = $strAliasPrefix . 'category__idfees_concession';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCategoryObject = FeesConcession::InstantiateDbRow($objDbRow, $strAliasPrefix . 'category__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CalenderYearObject Early Binding
			$strAlias = $strAliasPrefix . 'calender_year__idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCalenderYearObject = CalenderYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'calender_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for AcademicYearObject Early Binding
			$strAlias = $strAliasPrefix . 'academic_year__idacademic_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objAcademicYearObject = AcademicYear::InstantiateDbRow($objDbRow, $strAliasPrefix . 'academic_year__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FeeObject Early Binding
			$strAlias = $strAliasPrefix . 'fee__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFeeObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fee__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for ParrentObject Early Binding
			$strAlias = $strAliasPrefix . 'parrent__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objParrentObject = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'parrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for FeesAsParrent Virtual Binding
			$strAlias = $strAliasPrefix . 'feesasparrent__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objFeesAsParrentArray)
				$objToReturn->_objFeesAsParrentArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objFeesAsParrentArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFeesAsParrent = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'feesasparrent__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Feeses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Fees[]
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
					$objItem = Fees::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Fees::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Fees object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Fees next row resulting from the query
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
			return Fees::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Fees object,
		 * by IdfeesTemplet Index(es)
		 * @param integer $intIdfeesTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees
		*/
		public static function LoadByIdfeesTemplet($intIdfeesTemplet, $objOptionalClauses = null) {
			return Fees::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Fees()->IdfeesTemplet, $intIdfeesTemplet)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Fees objects,
		 * by Fee Index(es)
		 * @param integer $intFee
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public static function LoadArrayByFee($intFee, $objOptionalClauses = null) {
			// Call Fees::QueryArray to perform the LoadArrayByFee query
			try {
				return Fees::QueryArray(
					QQ::Equal(QQN::Fees()->Fee, $intFee),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Feeses
		 * by Fee Index(es)
		 * @param integer $intFee
		 * @return int
		*/
		public static function CountByFee($intFee) {
			// Call Fees::QueryCount to perform the CountByFee query
			return Fees::QueryCount(
				QQ::Equal(QQN::Fees()->Fee, $intFee)
			);
		}

		/**
		 * Load an array of Fees objects,
		 * by AcademicYear Index(es)
		 * @param integer $intAcademicYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public static function LoadArrayByAcademicYear($intAcademicYear, $objOptionalClauses = null) {
			// Call Fees::QueryArray to perform the LoadArrayByAcademicYear query
			try {
				return Fees::QueryArray(
					QQ::Equal(QQN::Fees()->AcademicYear, $intAcademicYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Feeses
		 * by AcademicYear Index(es)
		 * @param integer $intAcademicYear
		 * @return int
		*/
		public static function CountByAcademicYear($intAcademicYear) {
			// Call Fees::QueryCount to perform the CountByAcademicYear query
			return Fees::QueryCount(
				QQ::Equal(QQN::Fees()->AcademicYear, $intAcademicYear)
			);
		}

		/**
		 * Load an array of Fees objects,
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public static function LoadArrayByCalenderYear($intCalenderYear, $objOptionalClauses = null) {
			// Call Fees::QueryArray to perform the LoadArrayByCalenderYear query
			try {
				return Fees::QueryArray(
					QQ::Equal(QQN::Fees()->CalenderYear, $intCalenderYear),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Feeses
		 * by CalenderYear Index(es)
		 * @param integer $intCalenderYear
		 * @return int
		*/
		public static function CountByCalenderYear($intCalenderYear) {
			// Call Fees::QueryCount to perform the CountByCalenderYear query
			return Fees::QueryCount(
				QQ::Equal(QQN::Fees()->CalenderYear, $intCalenderYear)
			);
		}

		/**
		 * Load an array of Fees objects,
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public static function LoadArrayByCategory($intCategory, $objOptionalClauses = null) {
			// Call Fees::QueryArray to perform the LoadArrayByCategory query
			try {
				return Fees::QueryArray(
					QQ::Equal(QQN::Fees()->Category, $intCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Feeses
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @return int
		*/
		public static function CountByCategory($intCategory) {
			// Call Fees::QueryCount to perform the CountByCategory query
			return Fees::QueryCount(
				QQ::Equal(QQN::Fees()->Category, $intCategory)
			);
		}

		/**
		 * Load an array of Fees objects,
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public static function LoadArrayByCourse($intCourse, $objOptionalClauses = null) {
			// Call Fees::QueryArray to perform the LoadArrayByCourse query
			try {
				return Fees::QueryArray(
					QQ::Equal(QQN::Fees()->Course, $intCourse),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Feeses
		 * by Course Index(es)
		 * @param integer $intCourse
		 * @return int
		*/
		public static function CountByCourse($intCourse) {
			// Call Fees::QueryCount to perform the CountByCourse query
			return Fees::QueryCount(
				QQ::Equal(QQN::Fees()->Course, $intCourse)
			);
		}

		/**
		 * Load an array of Fees objects,
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public static function LoadArrayByParrent($intParrent, $objOptionalClauses = null) {
			// Call Fees::QueryArray to perform the LoadArrayByParrent query
			try {
				return Fees::QueryArray(
					QQ::Equal(QQN::Fees()->Parrent, $intParrent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Feeses
		 * by Parrent Index(es)
		 * @param integer $intParrent
		 * @return int
		*/
		public static function CountByParrent($intParrent) {
			// Call Fees::QueryCount to perform the CountByParrent query
			return Fees::QueryCount(
				QQ::Equal(QQN::Fees()->Parrent, $intParrent)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Fees
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `fees` (
							`course`,
							`category`,
							`admit_amt`,
							`gov_amt`,
							`calender_year`,
							`academic_year`,
							`fee`,
							`seq`,
							`on_admission`,
							`after_due_date`,
							`parrent`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCourse) . ',
							' . $objDatabase->SqlVariable($this->intCategory) . ',
							' . $objDatabase->SqlVariable($this->strAdmitAmt) . ',
							' . $objDatabase->SqlVariable($this->strGovAmt) . ',
							' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							' . $objDatabase->SqlVariable($this->intAcademicYear) . ',
							' . $objDatabase->SqlVariable($this->intFee) . ',
							' . $objDatabase->SqlVariable($this->intSeq) . ',
							' . $objDatabase->SqlVariable($this->blnOnAdmission) . ',
							' . $objDatabase->SqlVariable($this->blnAfterDueDate) . ',
							' . $objDatabase->SqlVariable($this->intParrent) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdfeesTemplet = $objDatabase->InsertId('fees', 'idfees_templet');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`fees`
						SET
							`course` = ' . $objDatabase->SqlVariable($this->intCourse) . ',
							`category` = ' . $objDatabase->SqlVariable($this->intCategory) . ',
							`admit_amt` = ' . $objDatabase->SqlVariable($this->strAdmitAmt) . ',
							`gov_amt` = ' . $objDatabase->SqlVariable($this->strGovAmt) . ',
							`calender_year` = ' . $objDatabase->SqlVariable($this->intCalenderYear) . ',
							`academic_year` = ' . $objDatabase->SqlVariable($this->intAcademicYear) . ',
							`fee` = ' . $objDatabase->SqlVariable($this->intFee) . ',
							`seq` = ' . $objDatabase->SqlVariable($this->intSeq) . ',
							`on_admission` = ' . $objDatabase->SqlVariable($this->blnOnAdmission) . ',
							`after_due_date` = ' . $objDatabase->SqlVariable($this->blnAfterDueDate) . ',
							`parrent` = ' . $objDatabase->SqlVariable($this->intParrent) . '
						WHERE
							`idfees_templet` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '
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
		 * Delete this Fees
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Fees with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Fees ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Fees', $this->intIdfeesTemplet);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Feeses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate fees table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `fees`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Fees from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Fees object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Fees::Load($this->intIdfeesTemplet);

			// Update $this's local variables to match
			$this->Course = $objReloaded->Course;
			$this->Category = $objReloaded->Category;
			$this->strAdmitAmt = $objReloaded->strAdmitAmt;
			$this->strGovAmt = $objReloaded->strGovAmt;
			$this->CalenderYear = $objReloaded->CalenderYear;
			$this->AcademicYear = $objReloaded->AcademicYear;
			$this->Fee = $objReloaded->Fee;
			$this->intSeq = $objReloaded->intSeq;
			$this->blnOnAdmission = $objReloaded->blnOnAdmission;
			$this->blnAfterDueDate = $objReloaded->blnAfterDueDate;
			$this->Parrent = $objReloaded->Parrent;
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
				case 'IdfeesTemplet':
					/**
					 * Gets the value for intIdfeesTemplet (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdfeesTemplet;

				case 'Course':
					/**
					 * Gets the value for intCourse 
					 * @return integer
					 */
					return $this->intCourse;

				case 'Category':
					/**
					 * Gets the value for intCategory 
					 * @return integer
					 */
					return $this->intCategory;

				case 'AdmitAmt':
					/**
					 * Gets the value for strAdmitAmt 
					 * @return string
					 */
					return $this->strAdmitAmt;

				case 'GovAmt':
					/**
					 * Gets the value for strGovAmt 
					 * @return string
					 */
					return $this->strGovAmt;

				case 'CalenderYear':
					/**
					 * Gets the value for intCalenderYear 
					 * @return integer
					 */
					return $this->intCalenderYear;

				case 'AcademicYear':
					/**
					 * Gets the value for intAcademicYear 
					 * @return integer
					 */
					return $this->intAcademicYear;

				case 'Fee':
					/**
					 * Gets the value for intFee 
					 * @return integer
					 */
					return $this->intFee;

				case 'Seq':
					/**
					 * Gets the value for intSeq 
					 * @return integer
					 */
					return $this->intSeq;

				case 'OnAdmission':
					/**
					 * Gets the value for blnOnAdmission 
					 * @return boolean
					 */
					return $this->blnOnAdmission;

				case 'AfterDueDate':
					/**
					 * Gets the value for blnAfterDueDate 
					 * @return boolean
					 */
					return $this->blnAfterDueDate;

				case 'Parrent':
					/**
					 * Gets the value for intParrent 
					 * @return integer
					 */
					return $this->intParrent;


				///////////////////
				// Member Objects
				///////////////////
				case 'CourseObject':
					/**
					 * Gets the value for the Role object referenced by intCourse 
					 * @return Role
					 */
					try {
						if ((!$this->objCourseObject) && (!is_null($this->intCourse)))
							$this->objCourseObject = Role::Load($this->intCourse);
						return $this->objCourseObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CategoryObject':
					/**
					 * Gets the value for the FeesConcession object referenced by intCategory 
					 * @return FeesConcession
					 */
					try {
						if ((!$this->objCategoryObject) && (!is_null($this->intCategory)))
							$this->objCategoryObject = FeesConcession::Load($this->intCategory);
						return $this->objCategoryObject;
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

				case 'AcademicYearObject':
					/**
					 * Gets the value for the AcademicYear object referenced by intAcademicYear 
					 * @return AcademicYear
					 */
					try {
						if ((!$this->objAcademicYearObject) && (!is_null($this->intAcademicYear)))
							$this->objAcademicYearObject = AcademicYear::Load($this->intAcademicYear);
						return $this->objAcademicYearObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FeeObject':
					/**
					 * Gets the value for the Ledger object referenced by intFee 
					 * @return Ledger
					 */
					try {
						if ((!$this->objFeeObject) && (!is_null($this->intFee)))
							$this->objFeeObject = Ledger::Load($this->intFee);
						return $this->objFeeObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ParrentObject':
					/**
					 * Gets the value for the Fees object referenced by intParrent 
					 * @return Fees
					 */
					try {
						if ((!$this->objParrentObject) && (!is_null($this->intParrent)))
							$this->objParrentObject = Fees::Load($this->intParrent);
						return $this->objParrentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_FeesAsParrent':
					/**
					 * Gets the value for the private _objFeesAsParrent (Read-Only)
					 * if set due to an expansion on the fees.parrent reverse relationship
					 * @return Fees
					 */
					return $this->_objFeesAsParrent;

				case '_FeesAsParrentArray':
					/**
					 * Gets the value for the private _objFeesAsParrentArray (Read-Only)
					 * if set due to an ExpandAsArray on the fees.parrent reverse relationship
					 * @return Fees[]
					 */
					return $this->_objFeesAsParrentArray;


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
				case 'Course':
					/**
					 * Sets the value for intCourse 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCourseObject = null;
						return ($this->intCourse = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Category':
					/**
					 * Sets the value for intCategory 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objCategoryObject = null;
						return ($this->intCategory = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AdmitAmt':
					/**
					 * Sets the value for strAdmitAmt 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAdmitAmt = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'GovAmt':
					/**
					 * Sets the value for strGovAmt 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGovAmt = QType::Cast($mixValue, QType::String));
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

				case 'AcademicYear':
					/**
					 * Sets the value for intAcademicYear 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objAcademicYearObject = null;
						return ($this->intAcademicYear = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fee':
					/**
					 * Sets the value for intFee 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFeeObject = null;
						return ($this->intFee = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Seq':
					/**
					 * Sets the value for intSeq 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSeq = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OnAdmission':
					/**
					 * Sets the value for blnOnAdmission 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnOnAdmission = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AfterDueDate':
					/**
					 * Sets the value for blnAfterDueDate 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnAfterDueDate = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Parrent':
					/**
					 * Sets the value for intParrent 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objParrentObject = null;
						return ($this->intParrent = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'CourseObject':
					/**
					 * Sets the value for the Role object referenced by intCourse 
					 * @param Role $mixValue
					 * @return Role
					 */
					if (is_null($mixValue)) {
						$this->intCourse = null;
						$this->objCourseObject = null;
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
							throw new QCallerException('Unable to set an unsaved CourseObject for this Fees');

						// Update Local Member Variables
						$this->objCourseObject = $mixValue;
						$this->intCourse = $mixValue->Idrole;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CategoryObject':
					/**
					 * Sets the value for the FeesConcession object referenced by intCategory 
					 * @param FeesConcession $mixValue
					 * @return FeesConcession
					 */
					if (is_null($mixValue)) {
						$this->intCategory = null;
						$this->objCategoryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a FeesConcession object
						try {
							$mixValue = QType::Cast($mixValue, 'FeesConcession');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED FeesConcession object
						if (is_null($mixValue->IdfeesConcession))
							throw new QCallerException('Unable to set an unsaved CategoryObject for this Fees');

						// Update Local Member Variables
						$this->objCategoryObject = $mixValue;
						$this->intCategory = $mixValue->IdfeesConcession;

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
							throw new QCallerException('Unable to set an unsaved CalenderYearObject for this Fees');

						// Update Local Member Variables
						$this->objCalenderYearObject = $mixValue;
						$this->intCalenderYear = $mixValue->IdcalenderYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'AcademicYearObject':
					/**
					 * Sets the value for the AcademicYear object referenced by intAcademicYear 
					 * @param AcademicYear $mixValue
					 * @return AcademicYear
					 */
					if (is_null($mixValue)) {
						$this->intAcademicYear = null;
						$this->objAcademicYearObject = null;
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
							throw new QCallerException('Unable to set an unsaved AcademicYearObject for this Fees');

						// Update Local Member Variables
						$this->objAcademicYearObject = $mixValue;
						$this->intAcademicYear = $mixValue->IdacademicYear;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FeeObject':
					/**
					 * Sets the value for the Ledger object referenced by intFee 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intFee = null;
						$this->objFeeObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Ledger object
						try {
							$mixValue = QType::Cast($mixValue, 'Ledger');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Ledger object
						if (is_null($mixValue->Idledger))
							throw new QCallerException('Unable to set an unsaved FeeObject for this Fees');

						// Update Local Member Variables
						$this->objFeeObject = $mixValue;
						$this->intFee = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'ParrentObject':
					/**
					 * Sets the value for the Fees object referenced by intParrent 
					 * @param Fees $mixValue
					 * @return Fees
					 */
					if (is_null($mixValue)) {
						$this->intParrent = null;
						$this->objParrentObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Fees object
						try {
							$mixValue = QType::Cast($mixValue, 'Fees');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Fees object
						if (is_null($mixValue->IdfeesTemplet))
							throw new QCallerException('Unable to set an unsaved ParrentObject for this Fees');

						// Update Local Member Variables
						$this->objParrentObject = $mixValue;
						$this->intParrent = $mixValue->IdfeesTemplet;

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



		// Related Objects' Methods for FeesAsParrent
		//-------------------------------------------------------------------

		/**
		 * Gets all associated FeesesAsParrent as an array of Fees objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public function GetFeesAsParrentArray($objOptionalClauses = null) {
			if ((is_null($this->intIdfeesTemplet)))
				return array();

			try {
				return Fees::LoadArrayByParrent($this->intIdfeesTemplet, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated FeesesAsParrent
		 * @return int
		*/
		public function CountFeesesAsParrent() {
			if ((is_null($this->intIdfeesTemplet)))
				return 0;

			return Fees::CountByParrent($this->intIdfeesTemplet);
		}

		/**
		 * Associates a FeesAsParrent
		 * @param Fees $objFees
		 * @return void
		*/
		public function AssociateFeesAsParrent(Fees $objFees) {
			if ((is_null($this->intIdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsParrent on this unsaved Fees.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFeesAsParrent on this Fees with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates a FeesAsParrent
		 * @param Fees $objFees
		 * @return void
		*/
		public function UnassociateFeesAsParrent(Fees $objFees) {
			if ((is_null($this->intIdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsParrent on this unsaved Fees.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsParrent on this Fees with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`parrent` = null
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates all FeesesAsParrent
		 * @return void
		*/
		public function UnassociateAllFeesesAsParrent() {
			if ((is_null($this->intIdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsParrent on this unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`parrent` = null
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '
			');
		}

		/**
		 * Deletes an associated FeesAsParrent
		 * @param Fees $objFees
		 * @return void
		*/
		public function DeleteAssociatedFeesAsParrent(Fees $objFees) {
			if ((is_null($this->intIdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsParrent on this unsaved Fees.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsParrent on this Fees with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '
			');
		}

		/**
		 * Deletes all associated FeesesAsParrent
		 * @return void
		*/
		public function DeleteAllFeesesAsParrent() {
			if ((is_null($this->intIdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFeesAsParrent on this unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = Fees::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`parrent` = ' . $objDatabase->SqlVariable($this->intIdfeesTemplet) . '
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
			return "fees";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Fees::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Fees"><sequence>';
			$strToReturn .= '<element name="IdfeesTemplet" type="xsd:int"/>';
			$strToReturn .= '<element name="CourseObject" type="xsd1:Role"/>';
			$strToReturn .= '<element name="CategoryObject" type="xsd1:FeesConcession"/>';
			$strToReturn .= '<element name="AdmitAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="GovAmt" type="xsd:string"/>';
			$strToReturn .= '<element name="CalenderYearObject" type="xsd1:CalenderYear"/>';
			$strToReturn .= '<element name="AcademicYearObject" type="xsd1:AcademicYear"/>';
			$strToReturn .= '<element name="FeeObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="Seq" type="xsd:int"/>';
			$strToReturn .= '<element name="OnAdmission" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AfterDueDate" type="xsd:boolean"/>';
			$strToReturn .= '<element name="ParrentObject" type="xsd1:Fees"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Fees', $strComplexTypeArray)) {
				$strComplexTypeArray['Fees'] = Fees::GetSoapComplexTypeXml();
				Role::AlterSoapComplexTypeArray($strComplexTypeArray);
				FeesConcession::AlterSoapComplexTypeArray($strComplexTypeArray);
				CalenderYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				AcademicYear::AlterSoapComplexTypeArray($strComplexTypeArray);
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				Fees::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Fees::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Fees();
			if (property_exists($objSoapObject, 'IdfeesTemplet'))
				$objToReturn->intIdfeesTemplet = $objSoapObject->IdfeesTemplet;
			if ((property_exists($objSoapObject, 'CourseObject')) &&
				($objSoapObject->CourseObject))
				$objToReturn->CourseObject = Role::GetObjectFromSoapObject($objSoapObject->CourseObject);
			if ((property_exists($objSoapObject, 'CategoryObject')) &&
				($objSoapObject->CategoryObject))
				$objToReturn->CategoryObject = FeesConcession::GetObjectFromSoapObject($objSoapObject->CategoryObject);
			if (property_exists($objSoapObject, 'AdmitAmt'))
				$objToReturn->strAdmitAmt = $objSoapObject->AdmitAmt;
			if (property_exists($objSoapObject, 'GovAmt'))
				$objToReturn->strGovAmt = $objSoapObject->GovAmt;
			if ((property_exists($objSoapObject, 'CalenderYearObject')) &&
				($objSoapObject->CalenderYearObject))
				$objToReturn->CalenderYearObject = CalenderYear::GetObjectFromSoapObject($objSoapObject->CalenderYearObject);
			if ((property_exists($objSoapObject, 'AcademicYearObject')) &&
				($objSoapObject->AcademicYearObject))
				$objToReturn->AcademicYearObject = AcademicYear::GetObjectFromSoapObject($objSoapObject->AcademicYearObject);
			if ((property_exists($objSoapObject, 'FeeObject')) &&
				($objSoapObject->FeeObject))
				$objToReturn->FeeObject = Ledger::GetObjectFromSoapObject($objSoapObject->FeeObject);
			if (property_exists($objSoapObject, 'Seq'))
				$objToReturn->intSeq = $objSoapObject->Seq;
			if (property_exists($objSoapObject, 'OnAdmission'))
				$objToReturn->blnOnAdmission = $objSoapObject->OnAdmission;
			if (property_exists($objSoapObject, 'AfterDueDate'))
				$objToReturn->blnAfterDueDate = $objSoapObject->AfterDueDate;
			if ((property_exists($objSoapObject, 'ParrentObject')) &&
				($objSoapObject->ParrentObject))
				$objToReturn->ParrentObject = Fees::GetObjectFromSoapObject($objSoapObject->ParrentObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Fees::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objCourseObject)
				$objObject->objCourseObject = Role::GetSoapObjectFromObject($objObject->objCourseObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCourse = null;
			if ($objObject->objCategoryObject)
				$objObject->objCategoryObject = FeesConcession::GetSoapObjectFromObject($objObject->objCategoryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCategory = null;
			if ($objObject->objCalenderYearObject)
				$objObject->objCalenderYearObject = CalenderYear::GetSoapObjectFromObject($objObject->objCalenderYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCalenderYear = null;
			if ($objObject->objAcademicYearObject)
				$objObject->objAcademicYearObject = AcademicYear::GetSoapObjectFromObject($objObject->objAcademicYearObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intAcademicYear = null;
			if ($objObject->objFeeObject)
				$objObject->objFeeObject = Ledger::GetSoapObjectFromObject($objObject->objFeeObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFee = null;
			if ($objObject->objParrentObject)
				$objObject->objParrentObject = Fees::GetSoapObjectFromObject($objObject->objParrentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intParrent = null;
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
			$iArray['IdfeesTemplet'] = $this->intIdfeesTemplet;
			$iArray['Course'] = $this->intCourse;
			$iArray['Category'] = $this->intCategory;
			$iArray['AdmitAmt'] = $this->strAdmitAmt;
			$iArray['GovAmt'] = $this->strGovAmt;
			$iArray['CalenderYear'] = $this->intCalenderYear;
			$iArray['AcademicYear'] = $this->intAcademicYear;
			$iArray['Fee'] = $this->intFee;
			$iArray['Seq'] = $this->intSeq;
			$iArray['OnAdmission'] = $this->blnOnAdmission;
			$iArray['AfterDueDate'] = $this->blnAfterDueDate;
			$iArray['Parrent'] = $this->intParrent;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdfeesTemplet ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdfeesTemplet
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $Category
     * @property-read QQNodeFeesConcession $CategoryObject
     * @property-read QQNode $AdmitAmt
     * @property-read QQNode $GovAmt
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $AcademicYear
     * @property-read QQNodeAcademicYear $AcademicYearObject
     * @property-read QQNode $Fee
     * @property-read QQNodeLedger $FeeObject
     * @property-read QQNode $Seq
     * @property-read QQNode $OnAdmission
     * @property-read QQNode $AfterDueDate
     * @property-read QQNode $Parrent
     * @property-read QQNodeFees $ParrentObject
     *
     *
     * @property-read QQReverseReferenceNodeFees $FeesAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeFees extends QQNode {
		protected $strTableName = 'fees';
		protected $strPrimaryKey = 'idfees_templet';
		protected $strClassName = 'Fees';
		public function __get($strName) {
			switch ($strName) {
				case 'IdfeesTemplet':
					return new QQNode('idfees_templet', 'IdfeesTemplet', 'Integer', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'Integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'Integer', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'Integer', $this);
				case 'CategoryObject':
					return new QQNodeFeesConcession('category', 'CategoryObject', 'Integer', $this);
				case 'AdmitAmt':
					return new QQNode('admit_amt', 'AdmitAmt', 'VarChar', $this);
				case 'GovAmt':
					return new QQNode('gov_amt', 'GovAmt', 'VarChar', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'Integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'Integer', $this);
				case 'AcademicYear':
					return new QQNode('academic_year', 'AcademicYear', 'Integer', $this);
				case 'AcademicYearObject':
					return new QQNodeAcademicYear('academic_year', 'AcademicYearObject', 'Integer', $this);
				case 'Fee':
					return new QQNode('fee', 'Fee', 'Integer', $this);
				case 'FeeObject':
					return new QQNodeLedger('fee', 'FeeObject', 'Integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'Integer', $this);
				case 'OnAdmission':
					return new QQNode('on_admission', 'OnAdmission', 'Bit', $this);
				case 'AfterDueDate':
					return new QQNode('after_due_date', 'AfterDueDate', 'Bit', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'Integer', $this);
				case 'ParrentObject':
					return new QQNodeFees('parrent', 'ParrentObject', 'Integer', $this);
				case 'FeesAsParrent':
					return new QQReverseReferenceNodeFees($this, 'feesasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idfees_templet', 'IdfeesTemplet', 'Integer', $this);
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
     * @property-read QQNode $IdfeesTemplet
     * @property-read QQNode $Course
     * @property-read QQNodeRole $CourseObject
     * @property-read QQNode $Category
     * @property-read QQNodeFeesConcession $CategoryObject
     * @property-read QQNode $AdmitAmt
     * @property-read QQNode $GovAmt
     * @property-read QQNode $CalenderYear
     * @property-read QQNodeCalenderYear $CalenderYearObject
     * @property-read QQNode $AcademicYear
     * @property-read QQNodeAcademicYear $AcademicYearObject
     * @property-read QQNode $Fee
     * @property-read QQNodeLedger $FeeObject
     * @property-read QQNode $Seq
     * @property-read QQNode $OnAdmission
     * @property-read QQNode $AfterDueDate
     * @property-read QQNode $Parrent
     * @property-read QQNodeFees $ParrentObject
     *
     *
     * @property-read QQReverseReferenceNodeFees $FeesAsParrent

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeFees extends QQReverseReferenceNode {
		protected $strTableName = 'fees';
		protected $strPrimaryKey = 'idfees_templet';
		protected $strClassName = 'Fees';
		public function __get($strName) {
			switch ($strName) {
				case 'IdfeesTemplet':
					return new QQNode('idfees_templet', 'IdfeesTemplet', 'integer', $this);
				case 'Course':
					return new QQNode('course', 'Course', 'integer', $this);
				case 'CourseObject':
					return new QQNodeRole('course', 'CourseObject', 'integer', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'integer', $this);
				case 'CategoryObject':
					return new QQNodeFeesConcession('category', 'CategoryObject', 'integer', $this);
				case 'AdmitAmt':
					return new QQNode('admit_amt', 'AdmitAmt', 'string', $this);
				case 'GovAmt':
					return new QQNode('gov_amt', 'GovAmt', 'string', $this);
				case 'CalenderYear':
					return new QQNode('calender_year', 'CalenderYear', 'integer', $this);
				case 'CalenderYearObject':
					return new QQNodeCalenderYear('calender_year', 'CalenderYearObject', 'integer', $this);
				case 'AcademicYear':
					return new QQNode('academic_year', 'AcademicYear', 'integer', $this);
				case 'AcademicYearObject':
					return new QQNodeAcademicYear('academic_year', 'AcademicYearObject', 'integer', $this);
				case 'Fee':
					return new QQNode('fee', 'Fee', 'integer', $this);
				case 'FeeObject':
					return new QQNodeLedger('fee', 'FeeObject', 'integer', $this);
				case 'Seq':
					return new QQNode('seq', 'Seq', 'integer', $this);
				case 'OnAdmission':
					return new QQNode('on_admission', 'OnAdmission', 'boolean', $this);
				case 'AfterDueDate':
					return new QQNode('after_due_date', 'AfterDueDate', 'boolean', $this);
				case 'Parrent':
					return new QQNode('parrent', 'Parrent', 'integer', $this);
				case 'ParrentObject':
					return new QQNodeFees('parrent', 'ParrentObject', 'integer', $this);
				case 'FeesAsParrent':
					return new QQReverseReferenceNodeFees($this, 'feesasparrent', 'reverse_reference', 'parrent');

				case '_PrimaryKeyNode':
					return new QQNode('idfees_templet', 'IdfeesTemplet', 'integer', $this);
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
