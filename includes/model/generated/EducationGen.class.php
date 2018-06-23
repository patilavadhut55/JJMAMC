<?php
	/**
	 * The abstract EducationGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Education subclass which
	 * extends this EducationGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Education class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $Ideducation the value for intIdeducation (Read-Only PK)
	 * @property string $Name the value for strName (Not Null)
	 * @property string $Address the value for strAddress 
	 * @property string $Marks the value for strMarks 
	 * @property string $Percentage the value for strPercentage 
	 * @property string $OutOf the value for strOutOf 
	 * @property string $Grade the value for strGrade 
	 * @property QDateTime $YearOfPassing the value for dttYearOfPassing 
	 * @property integer $Member the value for intMember 
	 * @property integer $Title the value for intTitle (Not Null)
	 * @property string $Details the value for strDetails 
	 * @property string $Rollno the value for strRollno 
	 * @property string $SmlNo the value for strSmlNo 
	 * @property integer $Inquiry the value for intInquiry 
	 * @property string $Language the value for strLanguage 
	 * @property string $UniversityPlace the value for strUniversityPlace 
	 * @property Ledger $MemberObject the value for the Ledger object referenced by intMember 
	 * @property EducationTitle $TitleObject the value for the EducationTitle object referenced by intTitle (Not Null)
	 * @property Inquiry $InquiryObject the value for the Inquiry object referenced by intInquiry 
	 * @property-read Marks $_Marks the value for the private _objMarks (Read-Only) if set due to an expansion on the marks.education reverse relationship
	 * @property-read Marks[] $_MarksArray the value for the private _objMarksArray (Read-Only) if set due to an ExpandAsArray on the marks.education reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EducationGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column education.ideducation
		 * @var integer intIdeducation
		 */
		protected $intIdeducation;
		const IdeducationDefault = null;


		/**
		 * Protected member variable that maps to the database column education.name
		 * @var string strName
		 */
		protected $strName;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column education.address
		 * @var string strAddress
		 */
		protected $strAddress;
		const AddressDefault = null;


		/**
		 * Protected member variable that maps to the database column education.marks
		 * @var string strMarks
		 */
		protected $strMarks;
		const MarksDefault = null;


		/**
		 * Protected member variable that maps to the database column education.percentage
		 * @var string strPercentage
		 */
		protected $strPercentage;
		const PercentageDefault = null;


		/**
		 * Protected member variable that maps to the database column education.out_of
		 * @var string strOutOf
		 */
		protected $strOutOf;
		const OutOfDefault = null;


		/**
		 * Protected member variable that maps to the database column education.grade
		 * @var string strGrade
		 */
		protected $strGrade;
		const GradeMaxLength = 10;
		const GradeDefault = null;


		/**
		 * Protected member variable that maps to the database column education.year_of_passing
		 * @var QDateTime dttYearOfPassing
		 */
		protected $dttYearOfPassing;
		const YearOfPassingDefault = null;


		/**
		 * Protected member variable that maps to the database column education.member
		 * @var integer intMember
		 */
		protected $intMember;
		const MemberDefault = null;


		/**
		 * Protected member variable that maps to the database column education.title
		 * @var integer intTitle
		 */
		protected $intTitle;
		const TitleDefault = null;


		/**
		 * Protected member variable that maps to the database column education.details
		 * @var string strDetails
		 */
		protected $strDetails;
		const DetailsDefault = null;


		/**
		 * Protected member variable that maps to the database column education.rollno
		 * @var string strRollno
		 */
		protected $strRollno;
		const RollnoMaxLength = 45;
		const RollnoDefault = null;


		/**
		 * Protected member variable that maps to the database column education.sml_no
		 * @var string strSmlNo
		 */
		protected $strSmlNo;
		const SmlNoMaxLength = 45;
		const SmlNoDefault = null;


		/**
		 * Protected member variable that maps to the database column education.inquiry
		 * @var integer intInquiry
		 */
		protected $intInquiry;
		const InquiryDefault = null;


		/**
		 * Protected member variable that maps to the database column education.language
		 * @var string strLanguage
		 */
		protected $strLanguage;
		const LanguageMaxLength = 45;
		const LanguageDefault = null;


		/**
		 * Protected member variable that maps to the database column education.university_place
		 * @var string strUniversityPlace
		 */
		protected $strUniversityPlace;
		const UniversityPlaceDefault = null;


		/**
		 * Private member variable that stores a reference to a single Marks object
		 * (of type Marks), if this Education object was restored with
		 * an expansion on the marks association table.
		 * @var Marks _objMarks;
		 */
		private $_objMarks;

		/**
		 * Private member variable that stores a reference to an array of Marks objects
		 * (of type Marks[]), if this Education object was restored with
		 * an ExpandAsArray on the marks association table.
		 * @var Marks[] _objMarksArray;
		 */
		private $_objMarksArray = null;

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
		 * in the database column education.member.
		 *
		 * NOTE: Always use the MemberObject property getter to correctly retrieve this Ledger object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Ledger objMemberObject
		 */
		protected $objMemberObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column education.title.
		 *
		 * NOTE: Always use the TitleObject property getter to correctly retrieve this EducationTitle object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var EducationTitle objTitleObject
		 */
		protected $objTitleObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column education.inquiry.
		 *
		 * NOTE: Always use the InquiryObject property getter to correctly retrieve this Inquiry object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Inquiry objInquiryObject
		 */
		protected $objInquiryObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdeducation = Education::IdeducationDefault;
			$this->strName = Education::NameDefault;
			$this->strAddress = Education::AddressDefault;
			$this->strMarks = Education::MarksDefault;
			$this->strPercentage = Education::PercentageDefault;
			$this->strOutOf = Education::OutOfDefault;
			$this->strGrade = Education::GradeDefault;
			$this->dttYearOfPassing = (Education::YearOfPassingDefault === null)?null:new QDateTime(Education::YearOfPassingDefault);
			$this->intMember = Education::MemberDefault;
			$this->intTitle = Education::TitleDefault;
			$this->strDetails = Education::DetailsDefault;
			$this->strRollno = Education::RollnoDefault;
			$this->strSmlNo = Education::SmlNoDefault;
			$this->intInquiry = Education::InquiryDefault;
			$this->strLanguage = Education::LanguageDefault;
			$this->strUniversityPlace = Education::UniversityPlaceDefault;
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
		 * Load a Education from PK Info
		 * @param integer $intIdeducation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education
		 */
		public static function Load($intIdeducation, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Education', $intIdeducation);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = Education::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Education()->Ideducation, $intIdeducation)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all Educations
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Education::QueryArray to perform the LoadAll query
			try {
				return Education::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Educations
		 * @return int
		 */
		public static function CountAll() {
			// Call Education::QueryCount to perform the CountAll query
			return Education::QueryCount(QQ::All());
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
			$objDatabase = Education::GetDatabase();

			// Create/Build out the QueryBuilder object with Education-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'education');

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
				Education::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('education');

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
		 * Static Qcubed Query method to query for a single Education object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Education the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Education::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new Education object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Education::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Education::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Education objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Education[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Education::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Education::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = Education::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of Education objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Education::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Education::GetDatabase();

			$strQuery = Education::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/education', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Education::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Education
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'education';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'ideducation', $strAliasPrefix . 'ideducation');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'ideducation', $strAliasPrefix . 'ideducation');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'address', $strAliasPrefix . 'address');
			    $objBuilder->AddSelectItem($strTableName, 'marks', $strAliasPrefix . 'marks');
			    $objBuilder->AddSelectItem($strTableName, 'percentage', $strAliasPrefix . 'percentage');
			    $objBuilder->AddSelectItem($strTableName, 'out_of', $strAliasPrefix . 'out_of');
			    $objBuilder->AddSelectItem($strTableName, 'grade', $strAliasPrefix . 'grade');
			    $objBuilder->AddSelectItem($strTableName, 'year_of_passing', $strAliasPrefix . 'year_of_passing');
			    $objBuilder->AddSelectItem($strTableName, 'member', $strAliasPrefix . 'member');
			    $objBuilder->AddSelectItem($strTableName, 'title', $strAliasPrefix . 'title');
			    $objBuilder->AddSelectItem($strTableName, 'details', $strAliasPrefix . 'details');
			    $objBuilder->AddSelectItem($strTableName, 'rollno', $strAliasPrefix . 'rollno');
			    $objBuilder->AddSelectItem($strTableName, 'sml_no', $strAliasPrefix . 'sml_no');
			    $objBuilder->AddSelectItem($strTableName, 'inquiry', $strAliasPrefix . 'inquiry');
			    $objBuilder->AddSelectItem($strTableName, 'language', $strAliasPrefix . 'language');
			    $objBuilder->AddSelectItem($strTableName, 'university_place', $strAliasPrefix . 'university_place');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Education from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Education::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Education
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'ideducation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdeducation == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'education__';


						// Expanding reverse references: Marks
						$strAlias = $strAliasPrefix . 'marks__idmarks';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objMarksArray)
								$objPreviousItem->_objMarksArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objMarksArray)) {
								$objPreviousChildItems = $objPreviousItem->_objMarksArray;
								$objChildItem = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objMarksArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objMarksArray[] = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'education__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Education object
			$objToReturn = new Education();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'ideducation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdeducation = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'address';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAddress = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'marks';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMarks = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'percentage';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strPercentage = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'out_of';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strOutOf = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'grade';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strGrade = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'year_of_passing';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttYearOfPassing = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intMember = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intTitle = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'details';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDetails = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'rollno';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strRollno = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'sml_no';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strSmlNo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'inquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intInquiry = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'language';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strLanguage = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'university_place';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strUniversityPlace = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->Ideducation != $objPreviousItem->Ideducation) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objMarksArray);
					$cnt = count($objToReturn->_objMarksArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objMarksArray, $objToReturn->_objMarksArray)) {
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
				$strAliasPrefix = 'education__';

			// Check for MemberObject Early Binding
			$strAlias = $strAliasPrefix . 'member__idledger';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objMemberObject = Ledger::InstantiateDbRow($objDbRow, $strAliasPrefix . 'member__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TitleObject Early Binding
			$strAlias = $strAliasPrefix . 'title__ideducation_title';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTitleObject = EducationTitle::InstantiateDbRow($objDbRow, $strAliasPrefix . 'title__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for InquiryObject Early Binding
			$strAlias = $strAliasPrefix . 'inquiry__idinquiry';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objInquiryObject = Inquiry::InstantiateDbRow($objDbRow, $strAliasPrefix . 'inquiry__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for Marks Virtual Binding
			$strAlias = $strAliasPrefix . 'marks__idmarks';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objMarksArray)
				$objToReturn->_objMarksArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objMarksArray[] = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objMarks = Marks::InstantiateDbRow($objDbRow, $strAliasPrefix . 'marks__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Educations from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Education[]
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
					$objItem = Education::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Education::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single Education object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return Education next row resulting from the query
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
			return Education::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single Education object,
		 * by Ideducation Index(es)
		 * @param integer $intIdeducation
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education
		*/
		public static function LoadByIdeducation($intIdeducation, $objOptionalClauses = null) {
			return Education::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Education()->Ideducation, $intIdeducation)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of Education objects,
		 * by Member Index(es)
		 * @param integer $intMember
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education[]
		*/
		public static function LoadArrayByMember($intMember, $objOptionalClauses = null) {
			// Call Education::QueryArray to perform the LoadArrayByMember query
			try {
				return Education::QueryArray(
					QQ::Equal(QQN::Education()->Member, $intMember),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Educations
		 * by Member Index(es)
		 * @param integer $intMember
		 * @return int
		*/
		public static function CountByMember($intMember) {
			// Call Education::QueryCount to perform the CountByMember query
			return Education::QueryCount(
				QQ::Equal(QQN::Education()->Member, $intMember)
			);
		}

		/**
		 * Load an array of Education objects,
		 * by Title Index(es)
		 * @param integer $intTitle
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education[]
		*/
		public static function LoadArrayByTitle($intTitle, $objOptionalClauses = null) {
			// Call Education::QueryArray to perform the LoadArrayByTitle query
			try {
				return Education::QueryArray(
					QQ::Equal(QQN::Education()->Title, $intTitle),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Educations
		 * by Title Index(es)
		 * @param integer $intTitle
		 * @return int
		*/
		public static function CountByTitle($intTitle) {
			// Call Education::QueryCount to perform the CountByTitle query
			return Education::QueryCount(
				QQ::Equal(QQN::Education()->Title, $intTitle)
			);
		}

		/**
		 * Load an array of Education objects,
		 * by Inquiry Index(es)
		 * @param integer $intInquiry
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Education[]
		*/
		public static function LoadArrayByInquiry($intInquiry, $objOptionalClauses = null) {
			// Call Education::QueryArray to perform the LoadArrayByInquiry query
			try {
				return Education::QueryArray(
					QQ::Equal(QQN::Education()->Inquiry, $intInquiry),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Educations
		 * by Inquiry Index(es)
		 * @param integer $intInquiry
		 * @return int
		*/
		public static function CountByInquiry($intInquiry) {
			// Call Education::QueryCount to perform the CountByInquiry query
			return Education::QueryCount(
				QQ::Equal(QQN::Education()->Inquiry, $intInquiry)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Education
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `education` (
							`name`,
							`address`,
							`marks`,
							`percentage`,
							`out_of`,
							`grade`,
							`year_of_passing`,
							`member`,
							`title`,
							`details`,
							`rollno`,
							`sml_no`,
							`inquiry`,
							`language`,
							`university_place`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strAddress) . ',
							' . $objDatabase->SqlVariable($this->strMarks) . ',
							' . $objDatabase->SqlVariable($this->strPercentage) . ',
							' . $objDatabase->SqlVariable($this->strOutOf) . ',
							' . $objDatabase->SqlVariable($this->strGrade) . ',
							' . $objDatabase->SqlVariable($this->dttYearOfPassing) . ',
							' . $objDatabase->SqlVariable($this->intMember) . ',
							' . $objDatabase->SqlVariable($this->intTitle) . ',
							' . $objDatabase->SqlVariable($this->strDetails) . ',
							' . $objDatabase->SqlVariable($this->strRollno) . ',
							' . $objDatabase->SqlVariable($this->strSmlNo) . ',
							' . $objDatabase->SqlVariable($this->intInquiry) . ',
							' . $objDatabase->SqlVariable($this->strLanguage) . ',
							' . $objDatabase->SqlVariable($this->strUniversityPlace) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdeducation = $objDatabase->InsertId('education', 'ideducation');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`education`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`address` = ' . $objDatabase->SqlVariable($this->strAddress) . ',
							`marks` = ' . $objDatabase->SqlVariable($this->strMarks) . ',
							`percentage` = ' . $objDatabase->SqlVariable($this->strPercentage) . ',
							`out_of` = ' . $objDatabase->SqlVariable($this->strOutOf) . ',
							`grade` = ' . $objDatabase->SqlVariable($this->strGrade) . ',
							`year_of_passing` = ' . $objDatabase->SqlVariable($this->dttYearOfPassing) . ',
							`member` = ' . $objDatabase->SqlVariable($this->intMember) . ',
							`title` = ' . $objDatabase->SqlVariable($this->intTitle) . ',
							`details` = ' . $objDatabase->SqlVariable($this->strDetails) . ',
							`rollno` = ' . $objDatabase->SqlVariable($this->strRollno) . ',
							`sml_no` = ' . $objDatabase->SqlVariable($this->strSmlNo) . ',
							`inquiry` = ' . $objDatabase->SqlVariable($this->intInquiry) . ',
							`language` = ' . $objDatabase->SqlVariable($this->strLanguage) . ',
							`university_place` = ' . $objDatabase->SqlVariable($this->strUniversityPlace) . '
						WHERE
							`ideducation` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '
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
		 * Delete this Education
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdeducation)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Education with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education`
				WHERE
					`ideducation` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this Education ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'Education', $this->intIdeducation);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all Educations
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`education`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate education table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `education`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this Education from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Education object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = Education::Load($this->intIdeducation);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->strAddress = $objReloaded->strAddress;
			$this->strMarks = $objReloaded->strMarks;
			$this->strPercentage = $objReloaded->strPercentage;
			$this->strOutOf = $objReloaded->strOutOf;
			$this->strGrade = $objReloaded->strGrade;
			$this->dttYearOfPassing = $objReloaded->dttYearOfPassing;
			$this->Member = $objReloaded->Member;
			$this->Title = $objReloaded->Title;
			$this->strDetails = $objReloaded->strDetails;
			$this->strRollno = $objReloaded->strRollno;
			$this->strSmlNo = $objReloaded->strSmlNo;
			$this->Inquiry = $objReloaded->Inquiry;
			$this->strLanguage = $objReloaded->strLanguage;
			$this->strUniversityPlace = $objReloaded->strUniversityPlace;
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
				case 'Ideducation':
					/**
					 * Gets the value for intIdeducation (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdeducation;

				case 'Name':
					/**
					 * Gets the value for strName (Not Null)
					 * @return string
					 */
					return $this->strName;

				case 'Address':
					/**
					 * Gets the value for strAddress 
					 * @return string
					 */
					return $this->strAddress;

				case 'Marks':
					/**
					 * Gets the value for strMarks 
					 * @return string
					 */
					return $this->strMarks;

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

				case 'Grade':
					/**
					 * Gets the value for strGrade 
					 * @return string
					 */
					return $this->strGrade;

				case 'YearOfPassing':
					/**
					 * Gets the value for dttYearOfPassing 
					 * @return QDateTime
					 */
					return $this->dttYearOfPassing;

				case 'Member':
					/**
					 * Gets the value for intMember 
					 * @return integer
					 */
					return $this->intMember;

				case 'Title':
					/**
					 * Gets the value for intTitle (Not Null)
					 * @return integer
					 */
					return $this->intTitle;

				case 'Details':
					/**
					 * Gets the value for strDetails 
					 * @return string
					 */
					return $this->strDetails;

				case 'Rollno':
					/**
					 * Gets the value for strRollno 
					 * @return string
					 */
					return $this->strRollno;

				case 'SmlNo':
					/**
					 * Gets the value for strSmlNo 
					 * @return string
					 */
					return $this->strSmlNo;

				case 'Inquiry':
					/**
					 * Gets the value for intInquiry 
					 * @return integer
					 */
					return $this->intInquiry;

				case 'Language':
					/**
					 * Gets the value for strLanguage 
					 * @return string
					 */
					return $this->strLanguage;

				case 'UniversityPlace':
					/**
					 * Gets the value for strUniversityPlace 
					 * @return string
					 */
					return $this->strUniversityPlace;


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Gets the value for the Ledger object referenced by intMember 
					 * @return Ledger
					 */
					try {
						if ((!$this->objMemberObject) && (!is_null($this->intMember)))
							$this->objMemberObject = Ledger::Load($this->intMember);
						return $this->objMemberObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TitleObject':
					/**
					 * Gets the value for the EducationTitle object referenced by intTitle (Not Null)
					 * @return EducationTitle
					 */
					try {
						if ((!$this->objTitleObject) && (!is_null($this->intTitle)))
							$this->objTitleObject = EducationTitle::Load($this->intTitle);
						return $this->objTitleObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'InquiryObject':
					/**
					 * Gets the value for the Inquiry object referenced by intInquiry 
					 * @return Inquiry
					 */
					try {
						if ((!$this->objInquiryObject) && (!is_null($this->intInquiry)))
							$this->objInquiryObject = Inquiry::Load($this->intInquiry);
						return $this->objInquiryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Marks':
					/**
					 * Gets the value for the private _objMarks (Read-Only)
					 * if set due to an expansion on the marks.education reverse relationship
					 * @return Marks
					 */
					return $this->_objMarks;

				case '_MarksArray':
					/**
					 * Gets the value for the private _objMarksArray (Read-Only)
					 * if set due to an ExpandAsArray on the marks.education reverse relationship
					 * @return Marks[]
					 */
					return $this->_objMarksArray;


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
					 * Sets the value for strName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
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

				case 'Marks':
					/**
					 * Sets the value for strMarks 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMarks = QType::Cast($mixValue, QType::String));
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

				case 'Grade':
					/**
					 * Sets the value for strGrade 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strGrade = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'YearOfPassing':
					/**
					 * Sets the value for dttYearOfPassing 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttYearOfPassing = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Member':
					/**
					 * Sets the value for intMember 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objMemberObject = null;
						return ($this->intMember = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Title':
					/**
					 * Sets the value for intTitle (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTitleObject = null;
						return ($this->intTitle = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Details':
					/**
					 * Sets the value for strDetails 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDetails = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Rollno':
					/**
					 * Sets the value for strRollno 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRollno = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SmlNo':
					/**
					 * Sets the value for strSmlNo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSmlNo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Inquiry':
					/**
					 * Sets the value for intInquiry 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objInquiryObject = null;
						return ($this->intInquiry = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Language':
					/**
					 * Sets the value for strLanguage 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLanguage = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'UniversityPlace':
					/**
					 * Sets the value for strUniversityPlace 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUniversityPlace = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'MemberObject':
					/**
					 * Sets the value for the Ledger object referenced by intMember 
					 * @param Ledger $mixValue
					 * @return Ledger
					 */
					if (is_null($mixValue)) {
						$this->intMember = null;
						$this->objMemberObject = null;
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
							throw new QCallerException('Unable to set an unsaved MemberObject for this Education');

						// Update Local Member Variables
						$this->objMemberObject = $mixValue;
						$this->intMember = $mixValue->Idledger;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TitleObject':
					/**
					 * Sets the value for the EducationTitle object referenced by intTitle (Not Null)
					 * @param EducationTitle $mixValue
					 * @return EducationTitle
					 */
					if (is_null($mixValue)) {
						$this->intTitle = null;
						$this->objTitleObject = null;
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
							throw new QCallerException('Unable to set an unsaved TitleObject for this Education');

						// Update Local Member Variables
						$this->objTitleObject = $mixValue;
						$this->intTitle = $mixValue->IdeducationTitle;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'InquiryObject':
					/**
					 * Sets the value for the Inquiry object referenced by intInquiry 
					 * @param Inquiry $mixValue
					 * @return Inquiry
					 */
					if (is_null($mixValue)) {
						$this->intInquiry = null;
						$this->objInquiryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Inquiry object
						try {
							$mixValue = QType::Cast($mixValue, 'Inquiry');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Inquiry object
						if (is_null($mixValue->Idinquiry))
							throw new QCallerException('Unable to set an unsaved InquiryObject for this Education');

						// Update Local Member Variables
						$this->objInquiryObject = $mixValue;
						$this->intInquiry = $mixValue->Idinquiry;

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



		// Related Objects' Methods for Marks
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Markses as an array of Marks objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Marks[]
		*/
		public function GetMarksArray($objOptionalClauses = null) {
			if ((is_null($this->intIdeducation)))
				return array();

			try {
				return Marks::LoadArrayByEducation($this->intIdeducation, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Markses
		 * @return int
		*/
		public function CountMarkses() {
			if ((is_null($this->intIdeducation)))
				return 0;

			return Marks::CountByEducation($this->intIdeducation);
		}

		/**
		 * Associates a Marks
		 * @param Marks $objMarks
		 * @return void
		*/
		public function AssociateMarks(Marks $objMarks) {
			if ((is_null($this->intIdeducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarks on this unsaved Education.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateMarks on this Education with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`education` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . '
			');
		}

		/**
		 * Unassociates a Marks
		 * @param Marks $objMarks
		 * @return void
		*/
		public function UnassociateMarks(Marks $objMarks) {
			if ((is_null($this->intIdeducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Education.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this Education with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`education` = null
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . ' AND
					`education` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '
			');
		}

		/**
		 * Unassociates all Markses
		 * @return void
		*/
		public function UnassociateAllMarkses() {
			if ((is_null($this->intIdeducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`marks`
				SET
					`education` = null
				WHERE
					`education` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '
			');
		}

		/**
		 * Deletes an associated Marks
		 * @param Marks $objMarks
		 * @return void
		*/
		public function DeleteAssociatedMarks(Marks $objMarks) {
			if ((is_null($this->intIdeducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Education.');
			if ((is_null($objMarks->Idmarks)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this Education with an unsaved Marks.');

			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`idmarks` = ' . $objDatabase->SqlVariable($objMarks->Idmarks) . ' AND
					`education` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '
			');
		}

		/**
		 * Deletes all associated Markses
		 * @return void
		*/
		public function DeleteAllMarkses() {
			if ((is_null($this->intIdeducation)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateMarks on this unsaved Education.');

			// Get the Database Object for this Class
			$objDatabase = Education::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`marks`
				WHERE
					`education` = ' . $objDatabase->SqlVariable($this->intIdeducation) . '
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
			return "education";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[Education::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="Education"><sequence>';
			$strToReturn .= '<element name="Ideducation" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Address" type="xsd:string"/>';
			$strToReturn .= '<element name="Marks" type="xsd:string"/>';
			$strToReturn .= '<element name="Percentage" type="xsd:string"/>';
			$strToReturn .= '<element name="OutOf" type="xsd:string"/>';
			$strToReturn .= '<element name="Grade" type="xsd:string"/>';
			$strToReturn .= '<element name="YearOfPassing" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="MemberObject" type="xsd1:Ledger"/>';
			$strToReturn .= '<element name="TitleObject" type="xsd1:EducationTitle"/>';
			$strToReturn .= '<element name="Details" type="xsd:string"/>';
			$strToReturn .= '<element name="Rollno" type="xsd:string"/>';
			$strToReturn .= '<element name="SmlNo" type="xsd:string"/>';
			$strToReturn .= '<element name="InquiryObject" type="xsd1:Inquiry"/>';
			$strToReturn .= '<element name="Language" type="xsd:string"/>';
			$strToReturn .= '<element name="UniversityPlace" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Education', $strComplexTypeArray)) {
				$strComplexTypeArray['Education'] = Education::GetSoapComplexTypeXml();
				Ledger::AlterSoapComplexTypeArray($strComplexTypeArray);
				EducationTitle::AlterSoapComplexTypeArray($strComplexTypeArray);
				Inquiry::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Education::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Education();
			if (property_exists($objSoapObject, 'Ideducation'))
				$objToReturn->intIdeducation = $objSoapObject->Ideducation;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Address'))
				$objToReturn->strAddress = $objSoapObject->Address;
			if (property_exists($objSoapObject, 'Marks'))
				$objToReturn->strMarks = $objSoapObject->Marks;
			if (property_exists($objSoapObject, 'Percentage'))
				$objToReturn->strPercentage = $objSoapObject->Percentage;
			if (property_exists($objSoapObject, 'OutOf'))
				$objToReturn->strOutOf = $objSoapObject->OutOf;
			if (property_exists($objSoapObject, 'Grade'))
				$objToReturn->strGrade = $objSoapObject->Grade;
			if (property_exists($objSoapObject, 'YearOfPassing'))
				$objToReturn->dttYearOfPassing = new QDateTime($objSoapObject->YearOfPassing);
			if ((property_exists($objSoapObject, 'MemberObject')) &&
				($objSoapObject->MemberObject))
				$objToReturn->MemberObject = Ledger::GetObjectFromSoapObject($objSoapObject->MemberObject);
			if ((property_exists($objSoapObject, 'TitleObject')) &&
				($objSoapObject->TitleObject))
				$objToReturn->TitleObject = EducationTitle::GetObjectFromSoapObject($objSoapObject->TitleObject);
			if (property_exists($objSoapObject, 'Details'))
				$objToReturn->strDetails = $objSoapObject->Details;
			if (property_exists($objSoapObject, 'Rollno'))
				$objToReturn->strRollno = $objSoapObject->Rollno;
			if (property_exists($objSoapObject, 'SmlNo'))
				$objToReturn->strSmlNo = $objSoapObject->SmlNo;
			if ((property_exists($objSoapObject, 'InquiryObject')) &&
				($objSoapObject->InquiryObject))
				$objToReturn->InquiryObject = Inquiry::GetObjectFromSoapObject($objSoapObject->InquiryObject);
			if (property_exists($objSoapObject, 'Language'))
				$objToReturn->strLanguage = $objSoapObject->Language;
			if (property_exists($objSoapObject, 'UniversityPlace'))
				$objToReturn->strUniversityPlace = $objSoapObject->UniversityPlace;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Education::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttYearOfPassing)
				$objObject->dttYearOfPassing = $objObject->dttYearOfPassing->qFormat(QDateTime::FormatSoap);
			if ($objObject->objMemberObject)
				$objObject->objMemberObject = Ledger::GetSoapObjectFromObject($objObject->objMemberObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intMember = null;
			if ($objObject->objTitleObject)
				$objObject->objTitleObject = EducationTitle::GetSoapObjectFromObject($objObject->objTitleObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTitle = null;
			if ($objObject->objInquiryObject)
				$objObject->objInquiryObject = Inquiry::GetSoapObjectFromObject($objObject->objInquiryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intInquiry = null;
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
			$iArray['Ideducation'] = $this->intIdeducation;
			$iArray['Name'] = $this->strName;
			$iArray['Address'] = $this->strAddress;
			$iArray['Marks'] = $this->strMarks;
			$iArray['Percentage'] = $this->strPercentage;
			$iArray['OutOf'] = $this->strOutOf;
			$iArray['Grade'] = $this->strGrade;
			$iArray['YearOfPassing'] = $this->dttYearOfPassing;
			$iArray['Member'] = $this->intMember;
			$iArray['Title'] = $this->intTitle;
			$iArray['Details'] = $this->strDetails;
			$iArray['Rollno'] = $this->strRollno;
			$iArray['SmlNo'] = $this->strSmlNo;
			$iArray['Inquiry'] = $this->intInquiry;
			$iArray['Language'] = $this->strLanguage;
			$iArray['UniversityPlace'] = $this->strUniversityPlace;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdeducation ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $Ideducation
     * @property-read QQNode $Name
     * @property-read QQNode $Address
     * @property-read QQNode $Marks
     * @property-read QQNode $Percentage
     * @property-read QQNode $OutOf
     * @property-read QQNode $Grade
     * @property-read QQNode $YearOfPassing
     * @property-read QQNode $Member
     * @property-read QQNodeLedger $MemberObject
     * @property-read QQNode $Title
     * @property-read QQNodeEducationTitle $TitleObject
     * @property-read QQNode $Details
     * @property-read QQNode $Rollno
     * @property-read QQNode $SmlNo
     * @property-read QQNode $Inquiry
     * @property-read QQNodeInquiry $InquiryObject
     * @property-read QQNode $Language
     * @property-read QQNode $UniversityPlace
     *
     *
     * @property-read QQReverseReferenceNodeMarks $Marks

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeEducation extends QQNode {
		protected $strTableName = 'education';
		protected $strPrimaryKey = 'ideducation';
		protected $strClassName = 'Education';
		public function __get($strName) {
			switch ($strName) {
				case 'Ideducation':
					return new QQNode('ideducation', 'Ideducation', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'Blob', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'Blob', $this);
				case 'Marks':
					return new QQNode('marks', 'Marks', 'VarChar', $this);
				case 'Percentage':
					return new QQNode('percentage', 'Percentage', 'VarChar', $this);
				case 'OutOf':
					return new QQNode('out_of', 'OutOf', 'VarChar', $this);
				case 'Grade':
					return new QQNode('grade', 'Grade', 'VarChar', $this);
				case 'YearOfPassing':
					return new QQNode('year_of_passing', 'YearOfPassing', 'Date', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'Integer', $this);
				case 'MemberObject':
					return new QQNodeLedger('member', 'MemberObject', 'Integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'Integer', $this);
				case 'TitleObject':
					return new QQNodeEducationTitle('title', 'TitleObject', 'Integer', $this);
				case 'Details':
					return new QQNode('details', 'Details', 'Blob', $this);
				case 'Rollno':
					return new QQNode('rollno', 'Rollno', 'VarChar', $this);
				case 'SmlNo':
					return new QQNode('sml_no', 'SmlNo', 'VarChar', $this);
				case 'Inquiry':
					return new QQNode('inquiry', 'Inquiry', 'Integer', $this);
				case 'InquiryObject':
					return new QQNodeInquiry('inquiry', 'InquiryObject', 'Integer', $this);
				case 'Language':
					return new QQNode('language', 'Language', 'VarChar', $this);
				case 'UniversityPlace':
					return new QQNode('university_place', 'UniversityPlace', 'Blob', $this);
				case 'Marks':
					return new QQReverseReferenceNodeMarks($this, 'marks', 'reverse_reference', 'education');

				case '_PrimaryKeyNode':
					return new QQNode('ideducation', 'Ideducation', 'Integer', $this);
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
     * @property-read QQNode $Ideducation
     * @property-read QQNode $Name
     * @property-read QQNode $Address
     * @property-read QQNode $Marks
     * @property-read QQNode $Percentage
     * @property-read QQNode $OutOf
     * @property-read QQNode $Grade
     * @property-read QQNode $YearOfPassing
     * @property-read QQNode $Member
     * @property-read QQNodeLedger $MemberObject
     * @property-read QQNode $Title
     * @property-read QQNodeEducationTitle $TitleObject
     * @property-read QQNode $Details
     * @property-read QQNode $Rollno
     * @property-read QQNode $SmlNo
     * @property-read QQNode $Inquiry
     * @property-read QQNodeInquiry $InquiryObject
     * @property-read QQNode $Language
     * @property-read QQNode $UniversityPlace
     *
     *
     * @property-read QQReverseReferenceNodeMarks $Marks

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeEducation extends QQReverseReferenceNode {
		protected $strTableName = 'education';
		protected $strPrimaryKey = 'ideducation';
		protected $strClassName = 'Education';
		public function __get($strName) {
			switch ($strName) {
				case 'Ideducation':
					return new QQNode('ideducation', 'Ideducation', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Address':
					return new QQNode('address', 'Address', 'string', $this);
				case 'Marks':
					return new QQNode('marks', 'Marks', 'string', $this);
				case 'Percentage':
					return new QQNode('percentage', 'Percentage', 'string', $this);
				case 'OutOf':
					return new QQNode('out_of', 'OutOf', 'string', $this);
				case 'Grade':
					return new QQNode('grade', 'Grade', 'string', $this);
				case 'YearOfPassing':
					return new QQNode('year_of_passing', 'YearOfPassing', 'QDateTime', $this);
				case 'Member':
					return new QQNode('member', 'Member', 'integer', $this);
				case 'MemberObject':
					return new QQNodeLedger('member', 'MemberObject', 'integer', $this);
				case 'Title':
					return new QQNode('title', 'Title', 'integer', $this);
				case 'TitleObject':
					return new QQNodeEducationTitle('title', 'TitleObject', 'integer', $this);
				case 'Details':
					return new QQNode('details', 'Details', 'string', $this);
				case 'Rollno':
					return new QQNode('rollno', 'Rollno', 'string', $this);
				case 'SmlNo':
					return new QQNode('sml_no', 'SmlNo', 'string', $this);
				case 'Inquiry':
					return new QQNode('inquiry', 'Inquiry', 'integer', $this);
				case 'InquiryObject':
					return new QQNodeInquiry('inquiry', 'InquiryObject', 'integer', $this);
				case 'Language':
					return new QQNode('language', 'Language', 'string', $this);
				case 'UniversityPlace':
					return new QQNode('university_place', 'UniversityPlace', 'string', $this);
				case 'Marks':
					return new QQReverseReferenceNodeMarks($this, 'marks', 'reverse_reference', 'education');

				case '_PrimaryKeyNode':
					return new QQNode('ideducation', 'Ideducation', 'integer', $this);
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
