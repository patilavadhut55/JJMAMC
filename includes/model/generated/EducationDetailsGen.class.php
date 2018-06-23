<?php
	/**
	 * The abstract EducationDetailsGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the EducationDetails subclass which
	 * extends this EducationDetailsGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the EducationDetails class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdeducationDetails the value for intIdeducationDetails (Read-Only PK)
	 * @property integer $Student the value for intStudent (Not Null)
	 * @property integer $PreQualification the value for intPreQualification 
	 * @property string $Institute the value for strInstitute 
	 * @property string $PassingYear the value for strPassingYear 
	 * @property string $Percentage the value for strPercentage 
	 * @property string $OutOf the value for strOutOf 
	 * @property string $Total the value for strTotal 
	 * @property Ledger $StudentObject the value for the Ledger object referenced by intStudent (Not Null)
	 * @property EducationTitle $PreQualificationObject the value for the EducationTitle object referenced by intPreQualification 
	 * @property-read Marks $_MarksAsStudentEducation the value for the private _objMarksAsStudentEducation (Read-Only) if set due to an expansion on the marks.student_education reverse relationship
	 * @property-read Marks[] $_MarksAsStudentEducationArray the value for the private _objMarksAsStudentEducationArray (Read-Only) if set due to an ExpandAsArray on the marks.student_education reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EducationDetailsGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column education_details.ideducation_details
		 * @var integer intIdeducationDetails
		 */
		protected $intIdeducationDetails;
		const IdeducationDetailsDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.student
		 * @var integer intStudent
		 */
		protected $intStudent;
		const StudentDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.pre_qualification
		 * @var integer intPreQualification
		 */
		protected $intPreQualification;
		const PreQualificationDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.institute
		 * @var string strInstitute
		 */
		protected $strInstitute;
		const InstituteMaxLength = 255;
		const InstituteDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.passing_year
		 * @var string strPassingYear
		 */
		protected $strPassingYear;
		const PassingYearMaxLength = 45;
		const PassingYearDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.percentage
		 * @var string strPercentage
		 */
		protected $strPercentage;
		const PercentageDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.out_of
		 * @var string strOutOf
		 */
		protected $strOutOf;
		const OutOfDefault = null;


		/**
		 * Protected member variable that maps to the database column education_details.total
		 * @var string strTotal
		 */
		protected $strTotal;
		const TotalDefault = null;


		/**
		 * Private member variable that stores a reference to a single MarksAsStudentEducation object
		 * (of type Marks), if this EducationDetails object was restored with
		 * an expansion on the marks association table.
		 * @var Marks _objMarksAsStudentEducation;
		 */
		private $_objMarksAsStudentEducation;

		/**
		 * Private member variable that stores a reference to an array of MarksAsStudentEducation objects
		 * (of type Marks[]), if this EducationDetails object was restored with
		 * an ExpandAsArray on the marks association table.
		 * @var Marks[] _objMarksAsStudentEducationArray;
		 */
		private $_objMarksAsStudentEducationArray = null;

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
		 * in the database column education_details.student.
		 *
		 * NOTE: Always use the StudentObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objStudentObject
		 */
		protected $objStudentObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column education_details.pre_qualification.
		 *
		 * NOTE: Always use the PreQualificationObject property getter to correctly retrieve this EducationTitle object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var EducationTitle objPreQualificationObject
		 */
		protected $objPreQualificationObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdeducationDetails = EducationDetails::IdeducationDetailsDefault;
			$this->intStudent = EducationDetails::StudentDefault;
			$this->intPreQualification = EducationDetails::PreQualificationDefault;
			$this->strInstitute = EducationDetails::InstituteDefault;
			$this->strPassingYear = EducationDetails::PassingYearDefault;
			$this->strPercentage = EducationDetails::PercentageDefault;
			$this->strOutOf = EducationDetails::OutOfDefault;
			$this->strTotal = EducationDetails::TotalDefault;
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
		 * Load a EducationDetails from PK Info
		 * @param integer $intIdeducationDetails
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EducationDetails
		 */
		public static function Load($intIdeducationDetails, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'EducationDetails', $intIdeducationDetails);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = EducationDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::EducationDetails()->IdeducationDetails, $intIdeducationDetails)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all EducationDetailses
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EducationDetails[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call EducationDetails::QueryArray to perform the LoadAll query
			try {
				return EducationDetails::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all EducationDetailses
		 * @return int
		 */
		public static function CountAll() {
			// Call EducationDetails::QueryCount to perform the CountAll query
			return EducationDetails::QueryCount(QQ::All());
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
			$objDatabase = EducationDetails::GetDatabase();

			// Create/Build out the QueryBuilder object with EducationDetails-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'education_details');

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
				EducationDetails::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('education_details');

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
		 * Static Qcubed Query method to query for a single EducationDetails object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return EducationDetails the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = EducationDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new EducationDetails object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = EducationDetails::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return EducationDetails::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of EducationDetails objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return EducationDetails[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = EducationDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return EducationDetails::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = EducationDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of EducationDetails objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = EducationDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = EducationDetails::GetDatabase();

			$strQuery = EducationDetails::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/educationdetails', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = EducationDetails::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this EducationDetails
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'education_details';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'ideducation_details', $strAliasPrefix . 'ideducation_details');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'ideducation_details', $strAliasPrefix . 'ideducation_details');
			    $objBuilder->AddSelectItem($strTableName, 'student', $strAliasPrefix . 'student');
			    $objBuilder->AddSelectItem($strTableName, 'pre_qualification', $strAliasPrefix . 'pre_qualification');
			    $objBuilder->AddSelectItem($strTableName, 'institute', $strAliasPrefix . 'institute');
			    $objBuilder->AddSelectItem($strTableName, 'passing_year', $strAliasPrefix . 'passing_year');
			    $objBuilder->AddSelectItem($strTableName, 'percentage', $strAliasPrefix . 'percentage');
			    $objBuilder->AddSelectItem($strTableName, 'out_of', $strAliasPrefix . 'out_of');
			    $objBuilder->AddSelectItem($strTableName, 'total', $strAliasPrefix . 'total');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a EducationDetails from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this EducationDetails::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return EducationDetails
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'ideducation_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdeducationDetails == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'education_details__';


						// Expanding reverse references: MarksAsStudentEducation
						$strAlias = $strAliasPrefix . 'marksasstudenteducation__idmarks';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarksAsStudentEducationArray)
								$objPreviousItem->_objMarksAsStudentEducationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarksAsStudentEducationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarksAsStudentEducationArray;
								$objChildItem = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marksasstudenteducation__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarksAsStudentEducationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarksAsStudentEducationArray[] = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marksasstudenteducation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'education_details__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the EducationDetails object
			$objToReturn = new EducationDetails();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'ideducation_details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdeducationDetails = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'student';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intStudent = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'pre_qualification';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intPreQualification = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'institute';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strInstitute = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'passing_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPassingYear = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'percentage';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPercentage = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'out_of';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOutOf = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'total';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTotal = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdeducationDetails != $objPreviousItem->IdeducationDetails) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objMarksAsStudentEducationArray);
					$cnt = count($objToReturn->_objMarksAsStudentEducationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarksAsStudentEducationArray, $objToReturn->_objMarksAsStudentEducationArray)) {
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
				$strAliasPrefix = 'education_details__';

			// Check for StudentObject Early Binding
			$strAlias = $strAliasPrefix . 'student__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objStudentObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'student__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PreQualificationObject Early Binding
			$strAlias = $strAliasPrefix . 'pre_qualification__ideducation_title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPreQualificationObject = EducationTitle::InstantiateDbRow($objDbRow, $strAliasPrefix . 'pre_qualification__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for MarksAsStudentEducation Virtual Binding
			$strAlias = $strAliasPrefix . 'marksasstudenteducation__idmarks';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarksAsStudentEducationArray)
				$objToReturn->_objMarksAsStudentEducationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarksAsStudentEducationArray[] = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marksasstudenteducation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarksAsStudentEducation = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marksasstudenteducation__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of EducationDetailses from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return EducationDetails[]
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
					$objItem = EducationDetails::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = EducationDetails::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single EducationDetails object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return EducationDetails next row resulting from the query
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
			return EducationDetails::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single EducationDetails object,
		 * by IdeducationDetails Index(es)
		 * @param integer $intIdeducationDetails
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EducationDetails
		*/
		public static function LoadByIdeducationDetails($intIdeducationDetails, $objOptionalClauses = null) {
			return EducationDetails::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::EducationDetails()->IdeducationDetails, $intIdeducationDetails)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of EducationDetails objects,
		 * by Student Index(es)
		 * @param integer $intStudent
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EducationDetails[]
		*/
		public static function LoadArrayByStudent($intStudent, $objOptionalClauses = null) {
			// Call EducationDetails::QueryArray to perform the LoadArrayByStudent query
			try {
				return EducationDetails::QueryArray(
					QQ::Equal(QQN::EducationDetails()->Student, $intStudent),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count EducationDetailses
		 * by Student Index(es)
		 * @param integer $intStudent
		 * @return int
		*/
		public static function CountByStudent($intStudent) {
			// Call EducationDetails::QueryCount to perform the CountByStudent query
			return EducationDetails::QueryCount(
				QQ::Equal(QQN::EducationDetails()->Student, $intStudent)
			);
		}

		/**
		 * Load an array of EducationDetails objects,
		 * by PreQualification Index(es)
		 * @param integer $intPreQualification
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EducationDetails[]
		*/
		public static function LoadArrayByPreQualification($intPreQualification, $objOptionalClauses = null) {
			// Call EducationDetails::QueryArray to perform the LoadArrayByPreQualification query
			try {
				return EducationDetails::QueryArray(
					QQ::Equal(QQN::EducationDetails()->PreQualification, $intPreQualification),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count EducationDetailses
		 * by PreQualification Index(es)
		 * @param integer $intPreQualification
		 * @return int
		*/
		public static function CountByPreQualification($intPreQualification) {
			// Call EducationDetails::QueryCount to perform the CountByPreQualification query
			return EducationDetails::QueryCount(
				QQ::Equal(QQN::EducationDetails()->PreQualification, $intPreQualification)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this EducationDetails
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `education_details` (
							`student`,
							`pre_qualification`,
							`institute`,
							`passing_year`,
							`percentage`,
							`out_of`,
							`total`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intStudent) . ',
							' . $objDatabase->SqlVariable($this->intPreQualification) . ',
							' . $objDatabase->SqlVariable($this->strInstitute) . ',
							' . $objDatabase->SqlVariable($this->strPassingYear) . ',
							' . $objDatabase->SqlVariable($this->strPercentage) . ',
							' . $objDatabase->SqlVariable($this->strOutOf) . ',
							' . $objDatabase->SqlVariable($this->strTotal) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdeducationDetails = $objDatabase->InsertId('education_details', 'ideducation_details');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`education_details`
						SET
							`student` = ' . $objDatabase->SqlVariable($this->intStudent) . ',
							`pre_qualification` = ' . $objDatabase->SqlVariable($this->intPreQualification) . ',
							`institute` = ' . $objDatabase->SqlVariable($this->strInstitute) . ',
							`passing_year` = ' . $objDatabase->SqlVariable($this->strPassingYear) . ',
							`percentage` = ' . $objDatabase->SqlVariable($this->strPercentage) . ',
							`out_of` = ' . $objDatabase->SqlVariable($this->strOutOf) . ',
							`total` = ' . $objDatabase->SqlVariable($this->strTotal) . '
						WHERE
							`ideducation_details` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '
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
		 * Delete this EducationDetails
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this EducationDetails with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education_details`
				WHERE
					`ideducation_details` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this EducationDetails ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'EducationDetails', $this->intIdeducationDetails);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all EducationDetailses
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education_details`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate education_details table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `education_details`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this EducationDetails from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved EducationDetails object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = EducationDetails::Load($this->intIdeducationDetails);

			// Update $this's local variables to match
			$this->Student = $objReloaded->Student;
			$this->PreQualification = $objReloaded->PreQualification;
			$this->strInstitute = $objReloaded->strInstitute;
			$this->strPassingYear = $objReloaded->strPassingYear;
			$this->strPercentage = $objReloaded->strPercentage;
			$this->strOutOf = $objReloaded->strOutOf;
			$this->strTotal = $objReloaded->strTotal;
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
				case 'IdeducationDetails':
					/**
					 * Gets the value for intIdeducationDetails (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdeducationDetails;

				case 'Student':
					/**
					 * Gets the value for intStudent (Not Null)
					 * @return integer
					 */
					return $this->intStudent;

				case 'PreQualification':
					/**
					 * Gets the value for intPreQualification 
					 * @return integer
					 */
					return $this->intPreQualification;

				case 'Institute':
					/**
					 * Gets the value for strInstitute 
					 * @return string
					 */
					return $this->strInstitute;

				case 'PassingYear':
					/**
					 * Gets the value for strPassingYear 
					 * @return string
					 */
					return $this->strPassingYear;

				case 'Percentage':
					/**
					 * Gets the value for strPercentage 
					 * @return string
					 */
					return $this->strPercentage;

				case 'OutOf':
					/**
					 * Gets the value for strOutOf 
					 * @return string
					 */
					return $this->strOutOf;

				case 'Total':
					/**
					 * Gets the value for strTotal 
					 * @return string
					 */
					return $this->strTotal;


				///////////////////
				// Member Objects
				///////////////////
				case 'StudentObject':
					/**
					 * Gets the value for the Ledger object referenced by intStudent (Not Null)
					 * @return Ledger
					 */
					try {
						if ((!$this->objStudentObject) && (!is_null($this->intStudent)))
							$this->objStudentObject = Ledger::Load($this->intStudent);
						return $this->objStudentObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PreQualificationObject':
					/**
					 * Gets the value for the EducationTitle object referenced by intPreQualification 
					 * @return EducationTitle
					 */
					try {
						if ((!$this->objPreQualificationObject) && (!is_null($this->intPreQualification)))
							$this->objPreQualificationObject = EducationTitle::Load($this->intPreQualification);
						return $this->objPreQualificationObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_MarksAsStudentEducation':
					/**
					 * Gets the value for the private _objMarksAsStudentEducation (Read-Only)
					 * if set due to an expansion on the marks.student_education reverse relationship
					 * @return Marks
					 */
					return $this->_objMarksAsStudentEducation;

				case '_MarksAsStudentEducationArray':
					/**
					 * Gets the value for the private _objMarksAsStudentEducationArray (Read-Only)
					 * if set due to an ExpandAsArray on the marks.student_education reverse relationship
					 * @return Marks[]
					 */
					return $this->_objMarksAsStudentEducationArray;


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
				case 'Student':
					/**
					 * Sets the value for intStudent (Not Null)
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

				case 'PreQualification':
					/**
					 * Sets the value for intPreQualification 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPreQualificationObject = null;
						return ($this->intPreQualification = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Institute':
					/**
					 * Sets the value for strInstitute 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strInstitute = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PassingYear':
					/**
					 * Sets the value for strPassingYear 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassingYear = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Percentage':
					/**
					 * Sets the value for strPercentage 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPercentage = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'OutOf':
					/**
					 * Sets the value for strOutOf 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strOutOf = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Total':
					/**
					 * Sets the value for strTotal 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTotal = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'StudentObject':
					/**
					 * Sets the value for the Ledger object referenced by intStudent (Not Null)
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intStudent = null;
						$this->objStudentObject = null;
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
							throw new QCallerException('Unable to set an unsaved StudentObject for this EducationDetails');

						// Update Local Member Variables
						$this->objStudentObject = $mixValue;
						$this->intStudent = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PreQualificationObject':
					/**
					 * Sets the value for the EducationTitle object referenced by intPreQualification 
					 * @param EducationTitle $mixValue
					 * @return EducationTitle
					 */
					if (is_null($mixValue)) {
						$this->intPreQualification = null;
						$this->objPreQualificationObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a EducationTitle object
						try {
							$mixValue = QType::Cast($mixValue, 'EducationTitle');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED EducationTitle object
						if (is_null($mixValue->IdeducationTitle))
							throw new QCallerException('Unable to set an unsaved PreQualificationObject for this EducationDetails');

						// Update Local Member Variables
						$this->objPreQualificationObject = $mixValue;
						$this->intPreQualification = $mixValue->IdeducationTitle;

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



		// Related Objects' Methods for MarksAsStudentEducation
		//-------------------------------------------------------------------

		/**
		 * Gets all associated MarksesAsStudentEducation as an array of Marks objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		*/
		public function GetMarksAsStudentEducationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdeducationDetails)))
				return array();

			try {
				return Marks::LoadArrayByStudentEducation($this->intIdeducationDetails, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated MarksesAsStudentEducation
		 * @return int
		*/
		public function CountMarksesAsStudentEducation() {
			if ((is_null($this->intIdeducationDetails)))
				return 0;

			return Marks::CountByStudentEducation($this->intIdeducationDetails);
		}

		/**
		 * Associates a MarksAsStudentEducation
		 * @param Marks $objMarks
		 * @return void
		*/
		public function AssociateMarksAsStudentEducation(Marks $objMarks) {
			if ((is_null($this->intIdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarksAsStudentEducation on this unsaved EducationDetails.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarksAsStudentEducation on this EducationDetails with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`student_education` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . '
			');
		}

		/**
		 * Unassociates a MarksAsStudentEducation
		 * @param Marks $objMarks
		 * @return void
		*/
		public function UnassociateMarksAsStudentEducation(Marks $objMarks) {
			if ((is_null($this->intIdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarksAsStudentEducation on this unsaved EducationDetails.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarksAsStudentEducation on this EducationDetails with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`student_education` = null
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . ' AND
					`student_education` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '
			');
		}

		/**
		 * Unassociates all MarksesAsStudentEducation
		 * @return void
		*/
		public function UnassociateAllMarksesAsStudentEducation() {
			if ((is_null($this->intIdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarksAsStudentEducation on this unsaved EducationDetails.');

			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`student_education` = null
				WHERE
					`student_education` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '
			');
		}

		/**
		 * Deletes an associated MarksAsStudentEducation
		 * @param Marks $objMarks
		 * @return void
		*/
		public function DeleteAssociatedMarksAsStudentEducation(Marks $objMarks) {
			if ((is_null($this->intIdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarksAsStudentEducation on this unsaved EducationDetails.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarksAsStudentEducation on this EducationDetails with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . ' AND
					`student_education` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '
			');
		}

		/**
		 * Deletes all associated MarksesAsStudentEducation
		 * @return void
		*/
		public function DeleteAllMarksesAsStudentEducation() {
			if ((is_null($this->intIdeducationDetails)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarksAsStudentEducation on this unsaved EducationDetails.');

			// Get the Database Object for this Class
			$objDatabase = EducationDetails::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`student_education` = ' . $objDatabase->SqlVariable($this->intIdeducationDetails) . '
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
			return "education_details";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[EducationDetails::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="EducationDetails"><sequence>';
			$strToReturn .= '<element name="IdeducationDetails" type="xsd:int"/>';
			$strToReturn .= '<element name="StudentObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="PreQualificationObject" type="xsd1:EducationTitle"/>';
			$strToReturn .= '<element name="Institute" type="xsd:string"/>';
			$strToReturn .= '<element name="PassingYear" type="xsd:string"/>';
			$strToReturn .= '<element name="Percentage" type="xsd:string"/>';
			$strToReturn .= '<element name="OutOf" type="xsd:string"/>';
			$strToReturn .= '<element name="Total" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('EducationDetails', $strComplexTypeArray)) {
				$strComplexTypeArray['EducationDetails'] = EducationDetails::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				EducationTitle::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, EducationDetails::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new EducationDetails();
			if (property_exists($objSoapObject, 'IdeducationDetails'))
				$objToReturn->intIdeducationDetails = $objSoapObject->IdeducationDetails;
			if ((property_exists($objSoapObject, 'StudentObject')) &&
				($objSoapObject->StudentObject))
				$objToReturn->StudentObject = Ledger::GetObjectFromSoapObject($objSoapObject->StudentObject);
			if ((property_exists($objSoapObject, 'PreQualificationObject')) &&
				($objSoapObject->PreQualificationObject))
				$objToReturn->PreQualificationObject = EducationTitle::GetObjectFromSoapObject($objSoapObject->PreQualificationObject);
			if (property_exists($objSoapObject, 'Institute'))
				$objToReturn->strInstitute = $objSoapObject->Institute;
			if (property_exists($objSoapObject, 'PassingYear'))
				$objToReturn->strPassingYear = $objSoapObject->PassingYear;
			if (property_exists($objSoapObject, 'Percentage'))
				$objToReturn->strPercentage = $objSoapObject->Percentage;
			if (property_exists($objSoapObject, 'OutOf'))
				$objToReturn->strOutOf = $objSoapObject->OutOf;
			if (property_exists($objSoapObject, 'Total'))
				$objToReturn->strTotal = $objSoapObject->Total;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, EducationDetails::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objStudentObject)
				$objObject->objStudentObject = Ledger::GetSoapObjectFromObject($objObject->objStudentObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intStudent = null;
			if ($objObject->objPreQualificationObject)
				$objObject->objPreQualificationObject = EducationTitle::GetSoapObjectFromObject($objObject->objPreQualificationObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPreQualification = null;
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
			$iArray['IdeducationDetails'] = $this->intIdeducationDetails;
			$iArray['Student'] = $this->intStudent;
			$iArray['PreQualification'] = $this->intPreQualification;
			$iArray['Institute'] = $this->strInstitute;
			$iArray['PassingYear'] = $this->strPassingYear;
			$iArray['Percentage'] = $this->strPercentage;
			$iArray['OutOf'] = $this->strOutOf;
			$iArray['Total'] = $this->strTotal;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdeducationDetails ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdeducationDetails
     * @property-read QQNode $Student
     * @property-read QQNodeLedger $StudentObject
     * @property-read QQNode $PreQualification
     * @property-read QQNodeEducationTitle $PreQualificationObject
     * @property-read QQNode $Institute
     * @property-read QQNode $PassingYear
     * @property-read QQNode $Percentage
     * @property-read QQNode $OutOf
     * @property-read QQNode $Total
     *
     *
     * @property-read QQReverseReferenceNodeMarks $MarksAsStudentEducation

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeEducationDetails extends QQNode {
		protected $strTableName = 'education_details';
		protected $strPrimaryKey = 'ideducation_details';
		protected $strClassName = 'EducationDetails';
		public function __get($strName) {
			switch ($strName) {
				case 'IdeducationDetails':
					return new QQNode('ideducation_details', 'IdeducationDetails', 'Integer', $this);
				case 'Student':
					return new QQNode('student', 'Student', 'Integer', $this);
				case 'StudentObject':
					return new QQNodeLedger('student', 'StudentObject', 'Integer', $this);
				case 'PreQualification':
					return new QQNode('pre_qualification', 'PreQualification', 'Integer', $this);
				case 'PreQualificationObject':
					return new QQNodeEducationTitle('pre_qualification', 'PreQualificationObject', 'Integer', $this);
				case 'Institute':
					return new QQNode('institute', 'Institute', 'VarChar', $this);
				case 'PassingYear':
					return new QQNode('passing_year', 'PassingYear', 'VarChar', $this);
				case 'Percentage':
					return new QQNode('percentage', 'Percentage', 'VarChar', $this);
				case 'OutOf':
					return new QQNode('out_of', 'OutOf', 'VarChar', $this);
				case 'Total':
					return new QQNode('total', 'Total', 'VarChar', $this);
				case 'MarksAsStudentEducation':
					return new QQReverseReferenceNodeMarks($this, 'marksasstudenteducation', 'reverse_reference', 'student_education');

				case '_PrimaryKeyNode':
					return new QQNode('ideducation_details', 'IdeducationDetails', 'Integer', $this);
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
     * @property-read QQNode $IdeducationDetails
     * @property-read QQNode $Student
     * @property-read QQNodeLedger $StudentObject
     * @property-read QQNode $PreQualification
     * @property-read QQNodeEducationTitle $PreQualificationObject
     * @property-read QQNode $Institute
     * @property-read QQNode $PassingYear
     * @property-read QQNode $Percentage
     * @property-read QQNode $OutOf
     * @property-read QQNode $Total
     *
     *
     * @property-read QQReverseReferenceNodeMarks $MarksAsStudentEducation

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeEducationDetails extends QQReverseReferenceNode {
		protected $strTableName = 'education_details';
		protected $strPrimaryKey = 'ideducation_details';
		protected $strClassName = 'EducationDetails';
		public function __get($strName) {
			switch ($strName) {
				case 'IdeducationDetails':
					return new QQNode('ideducation_details', 'IdeducationDetails', 'integer', $this);
				case 'Student':
					return new QQNode('student', 'Student', 'integer', $this);
				case 'StudentObject':
					return new QQNodeLedger('student', 'StudentObject', 'integer', $this);
				case 'PreQualification':
					return new QQNode('pre_qualification', 'PreQualification', 'integer', $this);
				case 'PreQualificationObject':
					return new QQNodeEducationTitle('pre_qualification', 'PreQualificationObject', 'integer', $this);
				case 'Institute':
					return new QQNode('institute', 'Institute', 'string', $this);
				case 'PassingYear':
					return new QQNode('passing_year', 'PassingYear', 'string', $this);
				case 'Percentage':
					return new QQNode('percentage', 'Percentage', 'string', $this);
				case 'OutOf':
					return new QQNode('out_of', 'OutOf', 'string', $this);
				case 'Total':
					return new QQNode('total', 'Total', 'string', $this);
				case 'MarksAsStudentEducation':
					return new QQReverseReferenceNodeMarks($this, 'marksasstudenteducation', 'reverse_reference', 'student_education');

				case '_PrimaryKeyNode':
					return new QQNode('ideducation_details', 'IdeducationDetails', 'integer', $this);
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
