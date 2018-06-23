<?php
	/**
	 * The abstract CalenderYearGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CalenderYear subclass which
	 * extends this CalenderYearGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CalenderYear class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdcalenderYear the value for intIdcalenderYear (Read-Only PK)
	 * @property string $Name the value for strName (Unique)
	 * @property QDateTime $From the value for dttFrom (Not Null)
	 * @property QDateTime $To the value for dttTo (Not Null)
	 * @property string $Description the value for strDescription 
	 * @property boolean $Visible the value for blnVisible 
	 * @property boolean $Active the value for blnActive 
	 * @property integer $Sequence the value for intSequence 
	 * @property integer $FeePercentage the value for intFeePercentage 
	 * @property boolean $Approved the value for blnApproved 
	 * @property string $AbbrivationFr the value for strAbbrivationFr 
	 * @property integer $CounterFr the value for intCounterFr 
	 * @property string $AbbrivationMfr the value for strAbbrivationMfr 
	 * @property integer $CounterMfr the value for intCounterMfr 
	 * @property-read Application $_Application the value for the private _objApplication (Read-Only) if set due to an expansion on the application.calender_year reverse relationship
	 * @property-read Application[] $_ApplicationArray the value for the private _objApplicationArray (Read-Only) if set due to an ExpandAsArray on the application.calender_year reverse relationship
	 * @property-read Budget $_BudgetAsAcademicYear the value for the private _objBudgetAsAcademicYear (Read-Only) if set due to an expansion on the budget.academic_year reverse relationship
	 * @property-read Budget[] $_BudgetAsAcademicYearArray the value for the private _objBudgetAsAcademicYearArray (Read-Only) if set due to an ExpandAsArray on the budget.academic_year reverse relationship
	 * @property-read CurrentStatus $_CurrentStatus the value for the private _objCurrentStatus (Read-Only) if set due to an expansion on the current_status.calender_year reverse relationship
	 * @property-read CurrentStatus[] $_CurrentStatusArray the value for the private _objCurrentStatusArray (Read-Only) if set due to an ExpandAsArray on the current_status.calender_year reverse relationship
	 * @property-read Fees $_Fees the value for the private _objFees (Read-Only) if set due to an expansion on the fees.calender_year reverse relationship
	 * @property-read Fees[] $_FeesArray the value for the private _objFeesArray (Read-Only) if set due to an ExpandAsArray on the fees.calender_year reverse relationship
	 * @property-read LoginHasRole $_LoginHasRole the value for the private _objLoginHasRole (Read-Only) if set due to an expansion on the login_has_role.calender_year reverse relationship
	 * @property-read LoginHasRole[] $_LoginHasRoleArray the value for the private _objLoginHasRoleArray (Read-Only) if set due to an ExpandAsArray on the login_has_role.calender_year reverse relationship
	 * @property-read Profile $_Profile the value for the private _objProfile (Read-Only) if set due to an expansion on the profile.calender_year reverse relationship
	 * @property-read Profile[] $_ProfileArray the value for the private _objProfileArray (Read-Only) if set due to an ExpandAsArray on the profile.calender_year reverse relationship
	 * @property-read RegMember $_RegMemberAsBatch the value for the private _objRegMemberAsBatch (Read-Only) if set due to an expansion on the reg_member.batch reverse relationship
	 * @property-read RegMember[] $_RegMemberAsBatchArray the value for the private _objRegMemberAsBatchArray (Read-Only) if set due to an ExpandAsArray on the reg_member.batch reverse relationship
	 * @property-read SubjectTought $_SubjectTought the value for the private _objSubjectTought (Read-Only) if set due to an expansion on the subject_tought.calender_year reverse relationship
	 * @property-read SubjectTought[] $_SubjectToughtArray the value for the private _objSubjectToughtArray (Read-Only) if set due to an ExpandAsArray on the subject_tought.calender_year reverse relationship
	 * @property-read TeachingPlain $_TeachingPlainAsCalendarYear the value for the private _objTeachingPlainAsCalendarYear (Read-Only) if set due to an expansion on the teaching_plain.calendar_year reverse relationship
	 * @property-read TeachingPlain[] $_TeachingPlainAsCalendarYearArray the value for the private _objTeachingPlainAsCalendarYearArray (Read-Only) if set due to an ExpandAsArray on the teaching_plain.calendar_year reverse relationship
	 * @property-read Voucher $_Voucher the value for the private _objVoucher (Read-Only) if set due to an expansion on the voucher.calender_year reverse relationship
	 * @property-read Voucher[] $_VoucherArray the value for the private _objVoucherArray (Read-Only) if set due to an ExpandAsArray on the voucher.calender_year reverse relationship
	 * @property-read YearSubject $_YearSubjectAsCalender the value for the private _objYearSubjectAsCalender (Read-Only) if set due to an expansion on the year_subject.calender reverse relationship
	 * @property-read YearSubject[] $_YearSubjectAsCalenderArray the value for the private _objYearSubjectAsCalenderArray (Read-Only) if set due to an ExpandAsArray on the year_subject.calender reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CalenderYearGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column calender_year.idcalender_year
		 * @var integer intIdcalenderYear
		 */
		protected $intIdcalenderYear;
		const IdcalenderYearDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 45;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.from
		 * @var QDateTime dttFrom
		 */
		protected $dttFrom;
		const FromDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.to
		 * @var QDateTime dttTo
		 */
		protected $dttTo;
		const ToDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.description
		 * @var string strDescription
		 */
		protected $strDescription;
		const DescriptionMaxLength = 45;
		const DescriptionDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.visible
		 * @var boolean blnVisible
		 */
		protected $blnVisible;
		const VisibleDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.active
		 * @var boolean blnActive
		 */
		protected $blnActive;
		const ActiveDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.sequence
		 * @var integer intSequence
		 */
		protected $intSequence;
		const SequenceDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.fee_percentage
		 * @var integer intFeePercentage
		 */
		protected $intFeePercentage;
		const FeePercentageDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.approved
		 * @var boolean blnApproved
		 */
		protected $blnApproved;
		const ApprovedDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.abbrivation_fr
		 * @var string strAbbrivationFr
		 */
		protected $strAbbrivationFr;
		const AbbrivationFrMaxLength = 45;
		const AbbrivationFrDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.counter_fr
		 * @var integer intCounterFr
		 */
		protected $intCounterFr;
		const CounterFrDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.abbrivation_mfr
		 * @var string strAbbrivationMfr
		 */
		protected $strAbbrivationMfr;
		const AbbrivationMfrMaxLength = 45;
		const AbbrivationMfrDefault = null;


		/**
		 * Protected member variable that maps to the database column calender_year.counter_mfr
		 * @var integer intCounterMfr
		 */
		protected $intCounterMfr;
		const CounterMfrDefault = null;


		/**
		 * Private member variable that stores a reference to a single Application object
		 * (of type Application), if this CalenderYear object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplication;
		 */
		private $_objApplication;

		/**
		 * Private member variable that stores a reference to an array of Application objects
		 * (of type Application[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationArray;
		 */
		private $_objApplicationArray = null;

		/**
		 * Private member variable that stores a reference to a single BudgetAsAcademicYear object
		 * (of type Budget), if this CalenderYear object was restored with
		 * an expansion on the budget association table.
		 * @var Budget _objBudgetAsAcademicYear;
		 */
		private $_objBudgetAsAcademicYear;

		/**
		 * Private member variable that stores a reference to an array of BudgetAsAcademicYear objects
		 * (of type Budget[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the budget association table.
		 * @var Budget[] _objBudgetAsAcademicYearArray;
		 */
		private $_objBudgetAsAcademicYearArray = null;

		/**
		 * Private member variable that stores a reference to a single CurrentStatus object
		 * (of type CurrentStatus), if this CalenderYear object was restored with
		 * an expansion on the current_status association table.
		 * @var CurrentStatus _objCurrentStatus;
		 */
		private $_objCurrentStatus;

		/**
		 * Private member variable that stores a reference to an array of CurrentStatus objects
		 * (of type CurrentStatus[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the current_status association table.
		 * @var CurrentStatus[] _objCurrentStatusArray;
		 */
		private $_objCurrentStatusArray = null;

		/**
		 * Private member variable that stores a reference to a single Fees object
		 * (of type Fees), if this CalenderYear object was restored with
		 * an expansion on the fees association table.
		 * @var Fees _objFees;
		 */
		private $_objFees;

		/**
		 * Private member variable that stores a reference to an array of Fees objects
		 * (of type Fees[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the fees association table.
		 * @var Fees[] _objFeesArray;
		 */
		private $_objFeesArray = null;

		/**
		 * Private member variable that stores a reference to a single LoginHasRole object
		 * (of type LoginHasRole), if this CalenderYear object was restored with
		 * an expansion on the login_has_role association table.
		 * @var LoginHasRole _objLoginHasRole;
		 */
		private $_objLoginHasRole;

		/**
		 * Private member variable that stores a reference to an array of LoginHasRole objects
		 * (of type LoginHasRole[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the login_has_role association table.
		 * @var LoginHasRole[] _objLoginHasRoleArray;
		 */
		private $_objLoginHasRoleArray = null;

		/**
		 * Private member variable that stores a reference to a single Profile object
		 * (of type Profile), if this CalenderYear object was restored with
		 * an expansion on the profile association table.
		 * @var Profile _objProfile;
		 */
		private $_objProfile;

		/**
		 * Private member variable that stores a reference to an array of Profile objects
		 * (of type Profile[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the profile association table.
		 * @var Profile[] _objProfileArray;
		 */
		private $_objProfileArray = null;

		/**
		 * Private member variable that stores a reference to a single RegMemberAsBatch object
		 * (of type RegMember), if this CalenderYear object was restored with
		 * an expansion on the reg_member association table.
		 * @var RegMember _objRegMemberAsBatch;
		 */
		private $_objRegMemberAsBatch;

		/**
		 * Private member variable that stores a reference to an array of RegMemberAsBatch objects
		 * (of type RegMember[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the reg_member association table.
		 * @var RegMember[] _objRegMemberAsBatchArray;
		 */
		private $_objRegMemberAsBatchArray = null;

		/**
		 * Private member variable that stores a reference to a single SubjectTought object
		 * (of type SubjectTought), if this CalenderYear object was restored with
		 * an expansion on the subject_tought association table.
		 * @var SubjectTought _objSubjectTought;
		 */
		private $_objSubjectTought;

		/**
		 * Private member variable that stores a reference to an array of SubjectTought objects
		 * (of type SubjectTought[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the subject_tought association table.
		 * @var SubjectTought[] _objSubjectToughtArray;
		 */
		private $_objSubjectToughtArray = null;

		/**
		 * Private member variable that stores a reference to a single TeachingPlainAsCalendarYear object
		 * (of type TeachingPlain), if this CalenderYear object was restored with
		 * an expansion on the teaching_plain association table.
		 * @var TeachingPlain _objTeachingPlainAsCalendarYear;
		 */
		private $_objTeachingPlainAsCalendarYear;

		/**
		 * Private member variable that stores a reference to an array of TeachingPlainAsCalendarYear objects
		 * (of type TeachingPlain[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the teaching_plain association table.
		 * @var TeachingPlain[] _objTeachingPlainAsCalendarYearArray;
		 */
		private $_objTeachingPlainAsCalendarYearArray = null;

		/**
		 * Private member variable that stores a reference to a single Voucher object
		 * (of type Voucher), if this CalenderYear object was restored with
		 * an expansion on the voucher association table.
		 * @var Voucher _objVoucher;
		 */
		private $_objVoucher;

		/**
		 * Private member variable that stores a reference to an array of Voucher objects
		 * (of type Voucher[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the voucher association table.
		 * @var Voucher[] _objVoucherArray;
		 */
		private $_objVoucherArray = null;

		/**
		 * Private member variable that stores a reference to a single YearSubjectAsCalender object
		 * (of type YearSubject), if this CalenderYear object was restored with
		 * an expansion on the year_subject association table.
		 * @var YearSubject _objYearSubjectAsCalender;
		 */
		private $_objYearSubjectAsCalender;

		/**
		 * Private member variable that stores a reference to an array of YearSubjectAsCalender objects
		 * (of type YearSubject[]), if this CalenderYear object was restored with
		 * an ExpandAsArray on the year_subject association table.
		 * @var YearSubject[] _objYearSubjectAsCalenderArray;
		 */
		private $_objYearSubjectAsCalenderArray = null;

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
			$this->intIdcalenderYear = CalenderYear::IdcalenderYearDefault;
			$this->strName = CalenderYear::NameDefault;
			$this->dttFrom = (CalenderYear::FromDefault === null)?null:new QDateTime(CalenderYear::FromDefault);
			$this->dttTo = (CalenderYear::ToDefault === null)?null:new QDateTime(CalenderYear::ToDefault);
			$this->strDescription = CalenderYear::DescriptionDefault;
			$this->blnVisible = CalenderYear::VisibleDefault;
			$this->blnActive = CalenderYear::ActiveDefault;
			$this->intSequence = CalenderYear::SequenceDefault;
			$this->intFeePercentage = CalenderYear::FeePercentageDefault;
			$this->blnApproved = CalenderYear::ApprovedDefault;
			$this->strAbbrivationFr = CalenderYear::AbbrivationFrDefault;
			$this->intCounterFr = CalenderYear::CounterFrDefault;
			$this->strAbbrivationMfr = CalenderYear::AbbrivationMfrDefault;
			$this->intCounterMfr = CalenderYear::CounterMfrDefault;
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
		 * Load a CalenderYear from PK Info
		 * @param integer $intIdcalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CalenderYear
		 */
		public static function Load($intIdcalenderYear, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CalenderYear', $intIdcalenderYear);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = CalenderYear::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CalenderYear()->IdcalenderYear, $intIdcalenderYear)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all CalenderYears
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CalenderYear[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CalenderYear::QueryArray to perform the LoadAll query
			try {
				return CalenderYear::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CalenderYears
		 * @return int
		 */
		public static function CountAll() {
			// Call CalenderYear::QueryCount to perform the CountAll query
			return CalenderYear::QueryCount(QQ::All());
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
			$objDatabase = CalenderYear::GetDatabase();

			// Create/Build out the QueryBuilder object with CalenderYear-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'calender_year');

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
				CalenderYear::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('calender_year');

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
		 * Static Qcubed Query method to query for a single CalenderYear object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CalenderYear the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CalenderYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new CalenderYear object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CalenderYear::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CalenderYear::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of CalenderYear objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CalenderYear[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CalenderYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CalenderYear::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CalenderYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of CalenderYear objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CalenderYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CalenderYear::GetDatabase();

			$strQuery = CalenderYear::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/calenderyear', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = CalenderYear::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CalenderYear
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'calender_year';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idcalender_year', $strAliasPrefix . 'idcalender_year');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idcalender_year', $strAliasPrefix . 'idcalender_year');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'from', $strAliasPrefix . 'from');
			    $objBuilder->AddSelectItem($strTableName, 'to', $strAliasPrefix . 'to');
			    $objBuilder->AddSelectItem($strTableName, 'description', $strAliasPrefix . 'description');
			    $objBuilder->AddSelectItem($strTableName, 'visible', $strAliasPrefix . 'visible');
			    $objBuilder->AddSelectItem($strTableName, 'active', $strAliasPrefix . 'active');
			    $objBuilder->AddSelectItem($strTableName, 'sequence', $strAliasPrefix . 'sequence');
			    $objBuilder->AddSelectItem($strTableName, 'fee_percentage', $strAliasPrefix . 'fee_percentage');
			    $objBuilder->AddSelectItem($strTableName, 'approved', $strAliasPrefix . 'approved');
			    $objBuilder->AddSelectItem($strTableName, 'abbrivation_fr', $strAliasPrefix . 'abbrivation_fr');
			    $objBuilder->AddSelectItem($strTableName, 'counter_fr', $strAliasPrefix . 'counter_fr');
			    $objBuilder->AddSelectItem($strTableName, 'abbrivation_mfr', $strAliasPrefix . 'abbrivation_mfr');
			    $objBuilder->AddSelectItem($strTableName, 'counter_mfr', $strAliasPrefix . 'counter_mfr');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CalenderYear from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CalenderYear::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CalenderYear
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdcalenderYear == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'calender_year__';


						// Expanding reverse references: Application
						$strAlias = $strAliasPrefix . 'application__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationArray)
								$objPreviousItem->_objApplicationArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: BudgetAsAcademicYear
						$strAlias = $strAliasPrefix . 'budgetasacademicyear__idbudget';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objBudgetAsAcademicYearArray)
								$objPreviousItem->_objBudgetAsAcademicYearArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objBudgetAsAcademicYearArray)) {
								$objPreviousChildItems = $objPreviousItem->_objBudgetAsAcademicYearArray;
								$objChildItem = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasacademicyear__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objBudgetAsAcademicYearArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objBudgetAsAcademicYearArray[] = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasacademicyear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CurrentStatus
						$strAlias = $strAliasPrefix . 'currentstatus__idcurrent_status';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCurrentStatusArray)
								$objPreviousItem->_objCurrentStatusArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCurrentStatusArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCurrentStatusArray;
								$objChildItem = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCurrentStatusArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCurrentStatusArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Fees
						$strAlias = $strAliasPrefix . 'fees__idfees_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objFeesArray)
								$objPreviousItem->_objFeesArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objFeesArray)) {
								$objPreviousChildItems = $objPreviousItem->_objFeesArray;
								$objChildItem = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objFeesArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objFeesArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LoginHasRole
						$strAlias = $strAliasPrefix . 'loginhasrole__login_idlogin';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objLoginHasRoleArray)
								$objPreviousItem->_objLoginHasRoleArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLoginHasRoleArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLoginHasRoleArray;
								$objChildItem = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasrole__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLoginHasRoleArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLoginHasRoleArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasrole__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Profile
						$strAlias = $strAliasPrefix . 'profile__idprofile';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objProfileArray)
								$objPreviousItem->_objProfileArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProfileArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProfileArray;
								$objChildItem = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProfileArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProfileArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: RegMemberAsBatch
						$strAlias = $strAliasPrefix . 'regmemberasbatch__idreg_member';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objRegMemberAsBatchArray)
								$objPreviousItem->_objRegMemberAsBatchArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objRegMemberAsBatchArray)) {
								$objPreviousChildItems = $objPreviousItem->_objRegMemberAsBatchArray;
								$objChildItem = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbatch__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objRegMemberAsBatchArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objRegMemberAsBatchArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbatch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: SubjectTought
						$strAlias = $strAliasPrefix . 'subjecttought__idsubject_tought';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objSubjectToughtArray)
								$objPreviousItem->_objSubjectToughtArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objSubjectToughtArray)) {
								$objPreviousChildItems = $objPreviousItem->_objSubjectToughtArray;
								$objChildItem = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objSubjectToughtArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objSubjectToughtArray[] = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TeachingPlainAsCalendarYear
						$strAlias = $strAliasPrefix . 'teachingplainascalendaryear__idteaching_plain';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTeachingPlainAsCalendarYearArray)
								$objPreviousItem->_objTeachingPlainAsCalendarYearArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTeachingPlainAsCalendarYearArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTeachingPlainAsCalendarYearArray;
								$objChildItem = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascalendaryear__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTeachingPlainAsCalendarYearArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTeachingPlainAsCalendarYearArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascalendaryear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Voucher
						$strAlias = $strAliasPrefix . 'voucher__idvoucher';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objVoucherArray)
								$objPreviousItem->_objVoucherArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVoucherArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVoucherArray;
								$objChildItem = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVoucherArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVoucherArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: YearSubjectAsCalender
						$strAlias = $strAliasPrefix . 'yearsubjectascalender__idyear_subject';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objYearSubjectAsCalenderArray)
								$objPreviousItem->_objYearSubjectAsCalenderArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objYearSubjectAsCalenderArray)) {
								$objPreviousChildItems = $objPreviousItem->_objYearSubjectAsCalenderArray;
								$objChildItem = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascalender__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objYearSubjectAsCalenderArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objYearSubjectAsCalenderArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascalender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'calender_year__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the CalenderYear object
			$objToReturn = new CalenderYear();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idcalender_year';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdcalenderYear = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'from';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttFrom = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'to';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->dttTo = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAlias = $strAliasPrefix . 'description';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strDescription = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'visible';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnVisible = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'active';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnActive = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'sequence';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intSequence = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fee_percentage';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intFeePercentage = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'approved';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->blnApproved = $objDbRow->GetColumn($strAliasName, 'Bit');
			$strAlias = $strAliasPrefix . 'abbrivation_fr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAbbrivationFr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'counter_fr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCounterFr = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'abbrivation_mfr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAbbrivationMfr = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'counter_mfr';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCounterMfr = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdcalenderYear != $objPreviousItem->IdcalenderYear) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objApplicationArray);
					$cnt = count($objToReturn->_objApplicationArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationArray, $objToReturn->_objApplicationArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objBudgetAsAcademicYearArray);
					$cnt = count($objToReturn->_objBudgetAsAcademicYearArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objBudgetAsAcademicYearArray, $objToReturn->_objBudgetAsAcademicYearArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCurrentStatusArray);
					$cnt = count($objToReturn->_objCurrentStatusArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCurrentStatusArray, $objToReturn->_objCurrentStatusArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objFeesArray);
					$cnt = count($objToReturn->_objFeesArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objFeesArray, $objToReturn->_objFeesArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objLoginHasRoleArray);
					$cnt = count($objToReturn->_objLoginHasRoleArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objLoginHasRoleArray, $objToReturn->_objLoginHasRoleArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objProfileArray);
					$cnt = count($objToReturn->_objProfileArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objProfileArray, $objToReturn->_objProfileArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objRegMemberAsBatchArray);
					$cnt = count($objToReturn->_objRegMemberAsBatchArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objRegMemberAsBatchArray, $objToReturn->_objRegMemberAsBatchArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objSubjectToughtArray);
					$cnt = count($objToReturn->_objSubjectToughtArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objSubjectToughtArray, $objToReturn->_objSubjectToughtArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTeachingPlainAsCalendarYearArray);
					$cnt = count($objToReturn->_objTeachingPlainAsCalendarYearArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTeachingPlainAsCalendarYearArray, $objToReturn->_objTeachingPlainAsCalendarYearArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objVoucherArray);
					$cnt = count($objToReturn->_objVoucherArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objVoucherArray, $objToReturn->_objVoucherArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objYearSubjectAsCalenderArray);
					$cnt = count($objToReturn->_objYearSubjectAsCalenderArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objYearSubjectAsCalenderArray, $objToReturn->_objYearSubjectAsCalenderArray)) {
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
				$strAliasPrefix = 'calender_year__';




			// Check for Application Virtual Binding
			$strAlias = $strAliasPrefix . 'application__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationArray)
				$objToReturn->_objApplicationArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplication = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'application__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for BudgetAsAcademicYear Virtual Binding
			$strAlias = $strAliasPrefix . 'budgetasacademicyear__idbudget';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objBudgetAsAcademicYearArray)
				$objToReturn->_objBudgetAsAcademicYearArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objBudgetAsAcademicYearArray[] = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasacademicyear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objBudgetAsAcademicYear = Budget::InstantiateDbRow($objDbRow, $strAliasPrefix . 'budgetasacademicyear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CurrentStatus Virtual Binding
			$strAlias = $strAliasPrefix . 'currentstatus__idcurrent_status';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCurrentStatusArray)
				$objToReturn->_objCurrentStatusArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCurrentStatusArray[] = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCurrentStatus = CurrentStatus::InstantiateDbRow($objDbRow, $strAliasPrefix . 'currentstatus__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Fees Virtual Binding
			$strAlias = $strAliasPrefix . 'fees__idfees_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objFeesArray)
				$objToReturn->_objFeesArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objFeesArray[] = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objFees = Fees::InstantiateDbRow($objDbRow, $strAliasPrefix . 'fees__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LoginHasRole Virtual Binding
			$strAlias = $strAliasPrefix . 'loginhasrole__login_idlogin';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objLoginHasRoleArray)
				$objToReturn->_objLoginHasRoleArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objLoginHasRoleArray[] = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasrole__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLoginHasRole = LoginHasRole::InstantiateDbRow($objDbRow, $strAliasPrefix . 'loginhasrole__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Profile Virtual Binding
			$strAlias = $strAliasPrefix . 'profile__idprofile';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objProfileArray)
				$objToReturn->_objProfileArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objProfileArray[] = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProfile = Profile::InstantiateDbRow($objDbRow, $strAliasPrefix . 'profile__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for RegMemberAsBatch Virtual Binding
			$strAlias = $strAliasPrefix . 'regmemberasbatch__idreg_member';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objRegMemberAsBatchArray)
				$objToReturn->_objRegMemberAsBatchArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objRegMemberAsBatchArray[] = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbatch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objRegMemberAsBatch = RegMember::InstantiateDbRow($objDbRow, $strAliasPrefix . 'regmemberasbatch__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for SubjectTought Virtual Binding
			$strAlias = $strAliasPrefix . 'subjecttought__idsubject_tought';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objSubjectToughtArray)
				$objToReturn->_objSubjectToughtArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objSubjectToughtArray[] = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objSubjectTought = SubjectTought::InstantiateDbRow($objDbRow, $strAliasPrefix . 'subjecttought__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TeachingPlainAsCalendarYear Virtual Binding
			$strAlias = $strAliasPrefix . 'teachingplainascalendaryear__idteaching_plain';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTeachingPlainAsCalendarYearArray)
				$objToReturn->_objTeachingPlainAsCalendarYearArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTeachingPlainAsCalendarYearArray[] = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascalendaryear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTeachingPlainAsCalendarYear = TeachingPlain::InstantiateDbRow($objDbRow, $strAliasPrefix . 'teachingplainascalendaryear__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Voucher Virtual Binding
			$strAlias = $strAliasPrefix . 'voucher__idvoucher';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objVoucherArray)
				$objToReturn->_objVoucherArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objVoucherArray[] = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVoucher = Voucher::InstantiateDbRow($objDbRow, $strAliasPrefix . 'voucher__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for YearSubjectAsCalender Virtual Binding
			$strAlias = $strAliasPrefix . 'yearsubjectascalender__idyear_subject';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objYearSubjectAsCalenderArray)
				$objToReturn->_objYearSubjectAsCalenderArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objYearSubjectAsCalenderArray[] = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascalender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objYearSubjectAsCalender = YearSubject::InstantiateDbRow($objDbRow, $strAliasPrefix . 'yearsubjectascalender__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of CalenderYears from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CalenderYear[]
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
					$objItem = CalenderYear::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CalenderYear::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single CalenderYear object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CalenderYear next row resulting from the query
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
			return CalenderYear::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single CalenderYear object,
		 * by IdcalenderYear Index(es)
		 * @param integer $intIdcalenderYear
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CalenderYear
		*/
		public static function LoadByIdcalenderYear($intIdcalenderYear, $objOptionalClauses = null) {
			return CalenderYear::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CalenderYear()->IdcalenderYear, $intIdcalenderYear)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single CalenderYear object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CalenderYear
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return CalenderYear::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CalenderYear()->Name, $strName)
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
		 * Save this CalenderYear
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `calender_year` (
							`name`,
							`from`,
							`to`,
							`description`,
							`visible`,
							`active`,
							`sequence`,
							`fee_percentage`,
							`approved`,
							`abbrivation_fr`,
							`counter_fr`,
							`abbrivation_mfr`,
							`counter_mfr`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->dttFrom) . ',
							' . $objDatabase->SqlVariable($this->dttTo) . ',
							' . $objDatabase->SqlVariable($this->strDescription) . ',
							' . $objDatabase->SqlVariable($this->blnVisible) . ',
							' . $objDatabase->SqlVariable($this->blnActive) . ',
							' . $objDatabase->SqlVariable($this->intSequence) . ',
							' . $objDatabase->SqlVariable($this->intFeePercentage) . ',
							' . $objDatabase->SqlVariable($this->blnApproved) . ',
							' . $objDatabase->SqlVariable($this->strAbbrivationFr) . ',
							' . $objDatabase->SqlVariable($this->intCounterFr) . ',
							' . $objDatabase->SqlVariable($this->strAbbrivationMfr) . ',
							' . $objDatabase->SqlVariable($this->intCounterMfr) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdcalenderYear = $objDatabase->InsertId('calender_year', 'idcalender_year');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`calender_year`
						SET
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`from` = ' . $objDatabase->SqlVariable($this->dttFrom) . ',
							`to` = ' . $objDatabase->SqlVariable($this->dttTo) . ',
							`description` = ' . $objDatabase->SqlVariable($this->strDescription) . ',
							`visible` = ' . $objDatabase->SqlVariable($this->blnVisible) . ',
							`active` = ' . $objDatabase->SqlVariable($this->blnActive) . ',
							`sequence` = ' . $objDatabase->SqlVariable($this->intSequence) . ',
							`fee_percentage` = ' . $objDatabase->SqlVariable($this->intFeePercentage) . ',
							`approved` = ' . $objDatabase->SqlVariable($this->blnApproved) . ',
							`abbrivation_fr` = ' . $objDatabase->SqlVariable($this->strAbbrivationFr) . ',
							`counter_fr` = ' . $objDatabase->SqlVariable($this->intCounterFr) . ',
							`abbrivation_mfr` = ' . $objDatabase->SqlVariable($this->strAbbrivationMfr) . ',
							`counter_mfr` = ' . $objDatabase->SqlVariable($this->intCounterMfr) . '
						WHERE
							`idcalender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
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
		 * Delete this CalenderYear
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CalenderYear with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`calender_year`
				WHERE
					`idcalender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this CalenderYear ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CalenderYear', $this->intIdcalenderYear);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all CalenderYears
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`calender_year`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate calender_year table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `calender_year`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this CalenderYear from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CalenderYear object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = CalenderYear::Load($this->intIdcalenderYear);

			// Update $this's local variables to match
			$this->strName = $objReloaded->strName;
			$this->dttFrom = $objReloaded->dttFrom;
			$this->dttTo = $objReloaded->dttTo;
			$this->strDescription = $objReloaded->strDescription;
			$this->blnVisible = $objReloaded->blnVisible;
			$this->blnActive = $objReloaded->blnActive;
			$this->intSequence = $objReloaded->intSequence;
			$this->intFeePercentage = $objReloaded->intFeePercentage;
			$this->blnApproved = $objReloaded->blnApproved;
			$this->strAbbrivationFr = $objReloaded->strAbbrivationFr;
			$this->intCounterFr = $objReloaded->intCounterFr;
			$this->strAbbrivationMfr = $objReloaded->strAbbrivationMfr;
			$this->intCounterMfr = $objReloaded->intCounterMfr;
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
				case 'IdcalenderYear':
					/**
					 * Gets the value for intIdcalenderYear (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdcalenderYear;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'From':
					/**
					 * Gets the value for dttFrom (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFrom;

				case 'To':
					/**
					 * Gets the value for dttTo (Not Null)
					 * @return QDateTime
					 */
					return $this->dttTo;

				case 'Description':
					/**
					 * Gets the value for strDescription 
					 * @return string
					 */
					return $this->strDescription;

				case 'Visible':
					/**
					 * Gets the value for blnVisible 
					 * @return boolean
					 */
					return $this->blnVisible;

				case 'Active':
					/**
					 * Gets the value for blnActive 
					 * @return boolean
					 */
					return $this->blnActive;

				case 'Sequence':
					/**
					 * Gets the value for intSequence 
					 * @return integer
					 */
					return $this->intSequence;

				case 'FeePercentage':
					/**
					 * Gets the value for intFeePercentage 
					 * @return integer
					 */
					return $this->intFeePercentage;

				case 'Approved':
					/**
					 * Gets the value for blnApproved 
					 * @return boolean
					 */
					return $this->blnApproved;

				case 'AbbrivationFr':
					/**
					 * Gets the value for strAbbrivationFr 
					 * @return string
					 */
					return $this->strAbbrivationFr;

				case 'CounterFr':
					/**
					 * Gets the value for intCounterFr 
					 * @return integer
					 */
					return $this->intCounterFr;

				case 'AbbrivationMfr':
					/**
					 * Gets the value for strAbbrivationMfr 
					 * @return string
					 */
					return $this->strAbbrivationMfr;

				case 'CounterMfr':
					/**
					 * Gets the value for intCounterMfr 
					 * @return integer
					 */
					return $this->intCounterMfr;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_Application':
					/**
					 * Gets the value for the private _objApplication (Read-Only)
					 * if set due to an expansion on the application.calender_year reverse relationship
					 * @return Application
					 */
					return $this->_objApplication;

				case '_ApplicationArray':
					/**
					 * Gets the value for the private _objApplicationArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.calender_year reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationArray;

				case '_BudgetAsAcademicYear':
					/**
					 * Gets the value for the private _objBudgetAsAcademicYear (Read-Only)
					 * if set due to an expansion on the budget.academic_year reverse relationship
					 * @return Budget
					 */
					return $this->_objBudgetAsAcademicYear;

				case '_BudgetAsAcademicYearArray':
					/**
					 * Gets the value for the private _objBudgetAsAcademicYearArray (Read-Only)
					 * if set due to an ExpandAsArray on the budget.academic_year reverse relationship
					 * @return Budget[]
					 */
					return $this->_objBudgetAsAcademicYearArray;

				case '_CurrentStatus':
					/**
					 * Gets the value for the private _objCurrentStatus (Read-Only)
					 * if set due to an expansion on the current_status.calender_year reverse relationship
					 * @return CurrentStatus
					 */
					return $this->_objCurrentStatus;

				case '_CurrentStatusArray':
					/**
					 * Gets the value for the private _objCurrentStatusArray (Read-Only)
					 * if set due to an ExpandAsArray on the current_status.calender_year reverse relationship
					 * @return CurrentStatus[]
					 */
					return $this->_objCurrentStatusArray;

				case '_Fees':
					/**
					 * Gets the value for the private _objFees (Read-Only)
					 * if set due to an expansion on the fees.calender_year reverse relationship
					 * @return Fees
					 */
					return $this->_objFees;

				case '_FeesArray':
					/**
					 * Gets the value for the private _objFeesArray (Read-Only)
					 * if set due to an ExpandAsArray on the fees.calender_year reverse relationship
					 * @return Fees[]
					 */
					return $this->_objFeesArray;

				case '_LoginHasRole':
					/**
					 * Gets the value for the private _objLoginHasRole (Read-Only)
					 * if set due to an expansion on the login_has_role.calender_year reverse relationship
					 * @return LoginHasRole
					 */
					return $this->_objLoginHasRole;

				case '_LoginHasRoleArray':
					/**
					 * Gets the value for the private _objLoginHasRoleArray (Read-Only)
					 * if set due to an ExpandAsArray on the login_has_role.calender_year reverse relationship
					 * @return LoginHasRole[]
					 */
					return $this->_objLoginHasRoleArray;

				case '_Profile':
					/**
					 * Gets the value for the private _objProfile (Read-Only)
					 * if set due to an expansion on the profile.calender_year reverse relationship
					 * @return Profile
					 */
					return $this->_objProfile;

				case '_ProfileArray':
					/**
					 * Gets the value for the private _objProfileArray (Read-Only)
					 * if set due to an ExpandAsArray on the profile.calender_year reverse relationship
					 * @return Profile[]
					 */
					return $this->_objProfileArray;

				case '_RegMemberAsBatch':
					/**
					 * Gets the value for the private _objRegMemberAsBatch (Read-Only)
					 * if set due to an expansion on the reg_member.batch reverse relationship
					 * @return RegMember
					 */
					return $this->_objRegMemberAsBatch;

				case '_RegMemberAsBatchArray':
					/**
					 * Gets the value for the private _objRegMemberAsBatchArray (Read-Only)
					 * if set due to an ExpandAsArray on the reg_member.batch reverse relationship
					 * @return RegMember[]
					 */
					return $this->_objRegMemberAsBatchArray;

				case '_SubjectTought':
					/**
					 * Gets the value for the private _objSubjectTought (Read-Only)
					 * if set due to an expansion on the subject_tought.calender_year reverse relationship
					 * @return SubjectTought
					 */
					return $this->_objSubjectTought;

				case '_SubjectToughtArray':
					/**
					 * Gets the value for the private _objSubjectToughtArray (Read-Only)
					 * if set due to an ExpandAsArray on the subject_tought.calender_year reverse relationship
					 * @return SubjectTought[]
					 */
					return $this->_objSubjectToughtArray;

				case '_TeachingPlainAsCalendarYear':
					/**
					 * Gets the value for the private _objTeachingPlainAsCalendarYear (Read-Only)
					 * if set due to an expansion on the teaching_plain.calendar_year reverse relationship
					 * @return TeachingPlain
					 */
					return $this->_objTeachingPlainAsCalendarYear;

				case '_TeachingPlainAsCalendarYearArray':
					/**
					 * Gets the value for the private _objTeachingPlainAsCalendarYearArray (Read-Only)
					 * if set due to an ExpandAsArray on the teaching_plain.calendar_year reverse relationship
					 * @return TeachingPlain[]
					 */
					return $this->_objTeachingPlainAsCalendarYearArray;

				case '_Voucher':
					/**
					 * Gets the value for the private _objVoucher (Read-Only)
					 * if set due to an expansion on the voucher.calender_year reverse relationship
					 * @return Voucher
					 */
					return $this->_objVoucher;

				case '_VoucherArray':
					/**
					 * Gets the value for the private _objVoucherArray (Read-Only)
					 * if set due to an ExpandAsArray on the voucher.calender_year reverse relationship
					 * @return Voucher[]
					 */
					return $this->_objVoucherArray;

				case '_YearSubjectAsCalender':
					/**
					 * Gets the value for the private _objYearSubjectAsCalender (Read-Only)
					 * if set due to an expansion on the year_subject.calender reverse relationship
					 * @return YearSubject
					 */
					return $this->_objYearSubjectAsCalender;

				case '_YearSubjectAsCalenderArray':
					/**
					 * Gets the value for the private _objYearSubjectAsCalenderArray (Read-Only)
					 * if set due to an ExpandAsArray on the year_subject.calender reverse relationship
					 * @return YearSubject[]
					 */
					return $this->_objYearSubjectAsCalenderArray;


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
					 * Sets the value for strName (Unique)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'From':
					/**
					 * Sets the value for dttFrom (Not Null)
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
					 * Sets the value for dttTo (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttTo = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Description':
					/**
					 * Sets the value for strDescription 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescription = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Visible':
					/**
					 * Sets the value for blnVisible 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnVisible = QType::Cast($mixValue, QType::Boolean));
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

				case 'Sequence':
					/**
					 * Sets the value for intSequence 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intSequence = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FeePercentage':
					/**
					 * Sets the value for intFeePercentage 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intFeePercentage = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Approved':
					/**
					 * Sets the value for blnApproved 
					 * @param boolean $mixValue
					 * @return boolean
					 */
					try {
						return ($this->blnApproved = QType::Cast($mixValue, QType::Boolean));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AbbrivationFr':
					/**
					 * Sets the value for strAbbrivationFr 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAbbrivationFr = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CounterFr':
					/**
					 * Sets the value for intCounterFr 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCounterFr = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AbbrivationMfr':
					/**
					 * Sets the value for strAbbrivationMfr 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAbbrivationMfr = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CounterMfr':
					/**
					 * Sets the value for intCounterMfr 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCounterMfr = QType::Cast($mixValue, QType::Integer));
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



		// Related Objects' Methods for Application
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Applications as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return Application::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Applications
		 * @return int
		*/
		public function CountApplications() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return Application::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a Application
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplication(Application $objApplication) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplication on this unsaved CalenderYear.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplication on this CalenderYear with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a Application
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplication(Application $objApplication) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved CalenderYear.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this CalenderYear with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`calender_year` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all Applications
		 * @return void
		*/
		public function UnassociateAllApplications() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated Application
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplication(Application $objApplication) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved CalenderYear.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this CalenderYear with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated Applications
		 * @return void
		*/
		public function DeleteAllApplications() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplication on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for BudgetAsAcademicYear
		//-------------------------------------------------------------------

		/**
		 * Gets all associated BudgetsAsAcademicYear as an array of Budget objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Budget[]
		*/
		public function GetBudgetAsAcademicYearArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return Budget::LoadArrayByAcademicYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated BudgetsAsAcademicYear
		 * @return int
		*/
		public function CountBudgetsAsAcademicYear() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return Budget::CountByAcademicYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a BudgetAsAcademicYear
		 * @param Budget $objBudget
		 * @return void
		*/
		public function AssociateBudgetAsAcademicYear(Budget $objBudget) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBudgetAsAcademicYear on this unsaved CalenderYear.');
			if ((is_null($objBudget->Idbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateBudgetAsAcademicYear on this CalenderYear with an unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`budget`
				SET
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($objBudget->Idbudget) . '
			');
		}

		/**
		 * Unassociates a BudgetAsAcademicYear
		 * @param Budget $objBudget
		 * @return void
		*/
		public function UnassociateBudgetAsAcademicYear(Budget $objBudget) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsAcademicYear on this unsaved CalenderYear.');
			if ((is_null($objBudget->Idbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsAcademicYear on this CalenderYear with an unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`budget`
				SET
					`academic_year` = null
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($objBudget->Idbudget) . ' AND
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all BudgetsAsAcademicYear
		 * @return void
		*/
		public function UnassociateAllBudgetsAsAcademicYear() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsAcademicYear on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`budget`
				SET
					`academic_year` = null
				WHERE
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated BudgetAsAcademicYear
		 * @param Budget $objBudget
		 * @return void
		*/
		public function DeleteAssociatedBudgetAsAcademicYear(Budget $objBudget) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsAcademicYear on this unsaved CalenderYear.');
			if ((is_null($objBudget->Idbudget)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsAcademicYear on this CalenderYear with an unsaved Budget.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`budget`
				WHERE
					`idbudget` = ' . $objDatabase->SqlVariable($objBudget->Idbudget) . ' AND
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated BudgetsAsAcademicYear
		 * @return void
		*/
		public function DeleteAllBudgetsAsAcademicYear() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateBudgetAsAcademicYear on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`budget`
				WHERE
					`academic_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for CurrentStatus
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CurrentStatuses as an array of CurrentStatus objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CurrentStatus[]
		*/
		public function GetCurrentStatusArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return CurrentStatus::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CurrentStatuses
		 * @return int
		*/
		public function CountCurrentStatuses() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return CurrentStatus::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a CurrentStatus
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function AssociateCurrentStatus(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatus on this unsaved CalenderYear.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCurrentStatus on this CalenderYear with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . '
			');
		}

		/**
		 * Unassociates a CurrentStatus
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function UnassociateCurrentStatus(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved CalenderYear.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this CalenderYear with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`calender_year` = null
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all CurrentStatuses
		 * @return void
		*/
		public function UnassociateAllCurrentStatuses() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`current_status`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated CurrentStatus
		 * @param CurrentStatus $objCurrentStatus
		 * @return void
		*/
		public function DeleteAssociatedCurrentStatus(CurrentStatus $objCurrentStatus) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved CalenderYear.');
			if ((is_null($objCurrentStatus->IdcurrentStatus)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this CalenderYear with an unsaved CurrentStatus.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`idcurrent_status` = ' . $objDatabase->SqlVariable($objCurrentStatus->IdcurrentStatus) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated CurrentStatuses
		 * @return void
		*/
		public function DeleteAllCurrentStatuses() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCurrentStatus on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`current_status`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for Fees
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Feeses as an array of Fees objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fees[]
		*/
		public function GetFeesArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return Fees::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Feeses
		 * @return int
		*/
		public function CountFeeses() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return Fees::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a Fees
		 * @param Fees $objFees
		 * @return void
		*/
		public function AssociateFees(Fees $objFees) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFees on this unsaved CalenderYear.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateFees on this CalenderYear with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . '
			');
		}

		/**
		 * Unassociates a Fees
		 * @param Fees $objFees
		 * @return void
		*/
		public function UnassociateFees(Fees $objFees) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved CalenderYear.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this CalenderYear with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`calender_year` = null
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all Feeses
		 * @return void
		*/
		public function UnassociateAllFeeses() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`fees`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated Fees
		 * @param Fees $objFees
		 * @return void
		*/
		public function DeleteAssociatedFees(Fees $objFees) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved CalenderYear.');
			if ((is_null($objFees->IdfeesTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this CalenderYear with an unsaved Fees.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`idfees_templet` = ' . $objDatabase->SqlVariable($objFees->IdfeesTemplet) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated Feeses
		 * @return void
		*/
		public function DeleteAllFeeses() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateFees on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`fees`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for LoginHasRole
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LoginHasRoles as an array of LoginHasRole objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return LoginHasRole[]
		*/
		public function GetLoginHasRoleArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return LoginHasRole::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LoginHasRoles
		 * @return int
		*/
		public function CountLoginHasRoles() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return LoginHasRole::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a LoginHasRole
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function AssociateLoginHasRole(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRole on this unsaved CalenderYear.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLoginHasRole on this CalenderYear with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . '
			');
		}

		/**
		 * Unassociates a LoginHasRole
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function UnassociateLoginHasRole(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRole on this unsaved CalenderYear.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRole on this CalenderYear with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`calender_year` = null
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all LoginHasRoles
		 * @return void
		*/
		public function UnassociateAllLoginHasRoles() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRole on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`login_has_role`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated LoginHasRole
		 * @param LoginHasRole $objLoginHasRole
		 * @return void
		*/
		public function DeleteAssociatedLoginHasRole(LoginHasRole $objLoginHasRole) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRole on this unsaved CalenderYear.');
			if ((is_null($objLoginHasRole->LoginIdlogin)) || (is_null($objLoginHasRole->RoleIdrole)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRole on this CalenderYear with an unsaved LoginHasRole.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`login_idlogin` = ' . $objDatabase->SqlVariable($objLoginHasRole->LoginIdlogin) . ' AND
					`role_idrole` = ' . $objDatabase->SqlVariable($objLoginHasRole->RoleIdrole) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated LoginHasRoles
		 * @return void
		*/
		public function DeleteAllLoginHasRoles() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLoginHasRole on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`login_has_role`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for Profile
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Profiles as an array of Profile objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Profile[]
		*/
		public function GetProfileArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return Profile::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Profiles
		 * @return int
		*/
		public function CountProfiles() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return Profile::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function AssociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this unsaved CalenderYear.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProfile on this CalenderYear with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . '
			');
		}

		/**
		 * Unassociates a Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function UnassociateProfile(Profile $objProfile) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved CalenderYear.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this CalenderYear with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`calender_year` = null
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all Profiles
		 * @return void
		*/
		public function UnassociateAllProfiles() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`profile`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated Profile
		 * @param Profile $objProfile
		 * @return void
		*/
		public function DeleteAssociatedProfile(Profile $objProfile) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved CalenderYear.');
			if ((is_null($objProfile->Idprofile)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this CalenderYear with an unsaved Profile.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`idprofile` = ' . $objDatabase->SqlVariable($objProfile->Idprofile) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated Profiles
		 * @return void
		*/
		public function DeleteAllProfiles() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProfile on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`profile`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for RegMemberAsBatch
		//-------------------------------------------------------------------

		/**
		 * Gets all associated RegMembersAsBatch as an array of RegMember objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return RegMember[]
		*/
		public function GetRegMemberAsBatchArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return RegMember::LoadArrayByBatch($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated RegMembersAsBatch
		 * @return int
		*/
		public function CountRegMembersAsBatch() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return RegMember::CountByBatch($this->intIdcalenderYear);
		}

		/**
		 * Associates a RegMemberAsBatch
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function AssociateRegMemberAsBatch(RegMember $objRegMember) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsBatch on this unsaved CalenderYear.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateRegMemberAsBatch on this CalenderYear with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`batch` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . '
			');
		}

		/**
		 * Unassociates a RegMemberAsBatch
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function UnassociateRegMemberAsBatch(RegMember $objRegMember) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBatch on this unsaved CalenderYear.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBatch on this CalenderYear with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`batch` = null
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`batch` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all RegMembersAsBatch
		 * @return void
		*/
		public function UnassociateAllRegMembersAsBatch() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBatch on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`reg_member`
				SET
					`batch` = null
				WHERE
					`batch` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated RegMemberAsBatch
		 * @param RegMember $objRegMember
		 * @return void
		*/
		public function DeleteAssociatedRegMemberAsBatch(RegMember $objRegMember) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBatch on this unsaved CalenderYear.');
			if ((is_null($objRegMember->IdregMember)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBatch on this CalenderYear with an unsaved RegMember.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`idreg_member` = ' . $objDatabase->SqlVariable($objRegMember->IdregMember) . ' AND
					`batch` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated RegMembersAsBatch
		 * @return void
		*/
		public function DeleteAllRegMembersAsBatch() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateRegMemberAsBatch on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`reg_member`
				WHERE
					`batch` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for SubjectTought
		//-------------------------------------------------------------------

		/**
		 * Gets all associated SubjectToughts as an array of SubjectTought objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return SubjectTought[]
		*/
		public function GetSubjectToughtArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return SubjectTought::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated SubjectToughts
		 * @return int
		*/
		public function CountSubjectToughts() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return SubjectTought::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function AssociateSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectTought on this unsaved CalenderYear.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateSubjectTought on this CalenderYear with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . '
			');
		}

		/**
		 * Unassociates a SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function UnassociateSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved CalenderYear.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this CalenderYear with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`calender_year` = null
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all SubjectToughts
		 * @return void
		*/
		public function UnassociateAllSubjectToughts() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`subject_tought`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated SubjectTought
		 * @param SubjectTought $objSubjectTought
		 * @return void
		*/
		public function DeleteAssociatedSubjectTought(SubjectTought $objSubjectTought) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved CalenderYear.');
			if ((is_null($objSubjectTought->IdsubjectTought)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this CalenderYear with an unsaved SubjectTought.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`idsubject_tought` = ' . $objDatabase->SqlVariable($objSubjectTought->IdsubjectTought) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated SubjectToughts
		 * @return void
		*/
		public function DeleteAllSubjectToughts() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateSubjectTought on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`subject_tought`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for TeachingPlainAsCalendarYear
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TeachingPlainsAsCalendarYear as an array of TeachingPlain objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TeachingPlain[]
		*/
		public function GetTeachingPlainAsCalendarYearArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return TeachingPlain::LoadArrayByCalendarYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TeachingPlainsAsCalendarYear
		 * @return int
		*/
		public function CountTeachingPlainsAsCalendarYear() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return TeachingPlain::CountByCalendarYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a TeachingPlainAsCalendarYear
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function AssociateTeachingPlainAsCalendarYear(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsCalendarYear on this unsaved CalenderYear.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTeachingPlainAsCalendarYear on this CalenderYear with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`calendar_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . '
			');
		}

		/**
		 * Unassociates a TeachingPlainAsCalendarYear
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function UnassociateTeachingPlainAsCalendarYear(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCalendarYear on this unsaved CalenderYear.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCalendarYear on this CalenderYear with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`calendar_year` = null
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`calendar_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all TeachingPlainsAsCalendarYear
		 * @return void
		*/
		public function UnassociateAllTeachingPlainsAsCalendarYear() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCalendarYear on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`teaching_plain`
				SET
					`calendar_year` = null
				WHERE
					`calendar_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated TeachingPlainAsCalendarYear
		 * @param TeachingPlain $objTeachingPlain
		 * @return void
		*/
		public function DeleteAssociatedTeachingPlainAsCalendarYear(TeachingPlain $objTeachingPlain) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCalendarYear on this unsaved CalenderYear.');
			if ((is_null($objTeachingPlain->IdteachingPlain)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCalendarYear on this CalenderYear with an unsaved TeachingPlain.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`idteaching_plain` = ' . $objDatabase->SqlVariable($objTeachingPlain->IdteachingPlain) . ' AND
					`calendar_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated TeachingPlainsAsCalendarYear
		 * @return void
		*/
		public function DeleteAllTeachingPlainsAsCalendarYear() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTeachingPlainAsCalendarYear on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`teaching_plain`
				WHERE
					`calendar_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for Voucher
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Vouchers as an array of Voucher objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Voucher[]
		*/
		public function GetVoucherArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return Voucher::LoadArrayByCalenderYear($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Vouchers
		 * @return int
		*/
		public function CountVouchers() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return Voucher::CountByCalenderYear($this->intIdcalenderYear);
		}

		/**
		 * Associates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function AssociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this unsaved CalenderYear.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVoucher on this CalenderYear with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . '
			');
		}

		/**
		 * Unassociates a Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function UnassociateVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved CalenderYear.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this CalenderYear with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`calender_year` = null
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all Vouchers
		 * @return void
		*/
		public function UnassociateAllVouchers() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`voucher`
				SET
					`calender_year` = null
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated Voucher
		 * @param Voucher $objVoucher
		 * @return void
		*/
		public function DeleteAssociatedVoucher(Voucher $objVoucher) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved CalenderYear.');
			if ((is_null($objVoucher->Idvoucher)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this CalenderYear with an unsaved Voucher.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`idvoucher` = ' . $objDatabase->SqlVariable($objVoucher->Idvoucher) . ' AND
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated Vouchers
		 * @return void
		*/
		public function DeleteAllVouchers() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVoucher on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`voucher`
				WHERE
					`calender_year` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}


		// Related Objects' Methods for YearSubjectAsCalender
		//-------------------------------------------------------------------

		/**
		 * Gets all associated YearSubjectsAsCalender as an array of YearSubject objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return YearSubject[]
		*/
		public function GetYearSubjectAsCalenderArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcalenderYear)))
				return array();

			try {
				return YearSubject::LoadArrayByCalender($this->intIdcalenderYear, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated YearSubjectsAsCalender
		 * @return int
		*/
		public function CountYearSubjectsAsCalender() {
			if ((is_null($this->intIdcalenderYear)))
				return 0;

			return YearSubject::CountByCalender($this->intIdcalenderYear);
		}

		/**
		 * Associates a YearSubjectAsCalender
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function AssociateYearSubjectAsCalender(YearSubject $objYearSubject) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsCalender on this unsaved CalenderYear.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateYearSubjectAsCalender on this CalenderYear with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`calender` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . '
			');
		}

		/**
		 * Unassociates a YearSubjectAsCalender
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function UnassociateYearSubjectAsCalender(YearSubject $objYearSubject) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCalender on this unsaved CalenderYear.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCalender on this CalenderYear with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`calender` = null
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`calender` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Unassociates all YearSubjectsAsCalender
		 * @return void
		*/
		public function UnassociateAllYearSubjectsAsCalender() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCalender on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`year_subject`
				SET
					`calender` = null
				WHERE
					`calender` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes an associated YearSubjectAsCalender
		 * @param YearSubject $objYearSubject
		 * @return void
		*/
		public function DeleteAssociatedYearSubjectAsCalender(YearSubject $objYearSubject) {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCalender on this unsaved CalenderYear.');
			if ((is_null($objYearSubject->IdyearSubject)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCalender on this CalenderYear with an unsaved YearSubject.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`idyear_subject` = ' . $objDatabase->SqlVariable($objYearSubject->IdyearSubject) . ' AND
					`calender` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
			');
		}

		/**
		 * Deletes all associated YearSubjectsAsCalender
		 * @return void
		*/
		public function DeleteAllYearSubjectsAsCalender() {
			if ((is_null($this->intIdcalenderYear)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateYearSubjectAsCalender on this unsaved CalenderYear.');

			// Get the Database Object for this Class
			$objDatabase = CalenderYear::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`year_subject`
				WHERE
					`calender` = ' . $objDatabase->SqlVariable($this->intIdcalenderYear) . '
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
			return "calender_year";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[CalenderYear::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="CalenderYear"><sequence>';
			$strToReturn .= '<element name="IdcalenderYear" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="From" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="To" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Description" type="xsd:string"/>';
			$strToReturn .= '<element name="Visible" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Active" type="xsd:boolean"/>';
			$strToReturn .= '<element name="Sequence" type="xsd:int"/>';
			$strToReturn .= '<element name="FeePercentage" type="xsd:int"/>';
			$strToReturn .= '<element name="Approved" type="xsd:boolean"/>';
			$strToReturn .= '<element name="AbbrivationFr" type="xsd:string"/>';
			$strToReturn .= '<element name="CounterFr" type="xsd:int"/>';
			$strToReturn .= '<element name="AbbrivationMfr" type="xsd:string"/>';
			$strToReturn .= '<element name="CounterMfr" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CalenderYear', $strComplexTypeArray)) {
				$strComplexTypeArray['CalenderYear'] = CalenderYear::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CalenderYear::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CalenderYear();
			if (property_exists($objSoapObject, 'IdcalenderYear'))
				$objToReturn->intIdcalenderYear = $objSoapObject->IdcalenderYear;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'From'))
				$objToReturn->dttFrom = new QDateTime($objSoapObject->From);
			if (property_exists($objSoapObject, 'To'))
				$objToReturn->dttTo = new QDateTime($objSoapObject->To);
			if (property_exists($objSoapObject, 'Description'))
				$objToReturn->strDescription = $objSoapObject->Description;
			if (property_exists($objSoapObject, 'Visible'))
				$objToReturn->blnVisible = $objSoapObject->Visible;
			if (property_exists($objSoapObject, 'Active'))
				$objToReturn->blnActive = $objSoapObject->Active;
			if (property_exists($objSoapObject, 'Sequence'))
				$objToReturn->intSequence = $objSoapObject->Sequence;
			if (property_exists($objSoapObject, 'FeePercentage'))
				$objToReturn->intFeePercentage = $objSoapObject->FeePercentage;
			if (property_exists($objSoapObject, 'Approved'))
				$objToReturn->blnApproved = $objSoapObject->Approved;
			if (property_exists($objSoapObject, 'AbbrivationFr'))
				$objToReturn->strAbbrivationFr = $objSoapObject->AbbrivationFr;
			if (property_exists($objSoapObject, 'CounterFr'))
				$objToReturn->intCounterFr = $objSoapObject->CounterFr;
			if (property_exists($objSoapObject, 'AbbrivationMfr'))
				$objToReturn->strAbbrivationMfr = $objSoapObject->AbbrivationMfr;
			if (property_exists($objSoapObject, 'CounterMfr'))
				$objToReturn->intCounterMfr = $objSoapObject->CounterMfr;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CalenderYear::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->dttFrom)
				$objObject->dttFrom = $objObject->dttFrom->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttTo)
				$objObject->dttTo = $objObject->dttTo->qFormat(QDateTime::FormatSoap);
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
			$iArray['IdcalenderYear'] = $this->intIdcalenderYear;
			$iArray['Name'] = $this->strName;
			$iArray['From'] = $this->dttFrom;
			$iArray['To'] = $this->dttTo;
			$iArray['Description'] = $this->strDescription;
			$iArray['Visible'] = $this->blnVisible;
			$iArray['Active'] = $this->blnActive;
			$iArray['Sequence'] = $this->intSequence;
			$iArray['FeePercentage'] = $this->intFeePercentage;
			$iArray['Approved'] = $this->blnApproved;
			$iArray['AbbrivationFr'] = $this->strAbbrivationFr;
			$iArray['CounterFr'] = $this->intCounterFr;
			$iArray['AbbrivationMfr'] = $this->strAbbrivationMfr;
			$iArray['CounterMfr'] = $this->intCounterMfr;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdcalenderYear ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdcalenderYear
     * @property-read QQNode $Name
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Description
     * @property-read QQNode $Visible
     * @property-read QQNode $Active
     * @property-read QQNode $Sequence
     * @property-read QQNode $FeePercentage
     * @property-read QQNode $Approved
     * @property-read QQNode $AbbrivationFr
     * @property-read QQNode $CounterFr
     * @property-read QQNode $AbbrivationMfr
     * @property-read QQNode $CounterMfr
     *
     *
     * @property-read QQReverseReferenceNodeApplication $Application
     * @property-read QQReverseReferenceNodeBudget $BudgetAsAcademicYear
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatus
     * @property-read QQReverseReferenceNodeFees $Fees
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRole
     * @property-read QQReverseReferenceNodeProfile $Profile
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsBatch
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectTought
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsCalendarYear
     * @property-read QQReverseReferenceNodeVoucher $Voucher
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsCalender

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeCalenderYear extends QQNode {
		protected $strTableName = 'calender_year';
		protected $strPrimaryKey = 'idcalender_year';
		protected $strClassName = 'CalenderYear';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcalenderYear':
					return new QQNode('idcalender_year', 'IdcalenderYear', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'From':
					return new QQNode('from', 'From', 'Date', $this);
				case 'To':
					return new QQNode('to', 'To', 'Date', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'VarChar', $this);
				case 'Visible':
					return new QQNode('visible', 'Visible', 'Bit', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'Bit', $this);
				case 'Sequence':
					return new QQNode('sequence', 'Sequence', 'Integer', $this);
				case 'FeePercentage':
					return new QQNode('fee_percentage', 'FeePercentage', 'Integer', $this);
				case 'Approved':
					return new QQNode('approved', 'Approved', 'Bit', $this);
				case 'AbbrivationFr':
					return new QQNode('abbrivation_fr', 'AbbrivationFr', 'VarChar', $this);
				case 'CounterFr':
					return new QQNode('counter_fr', 'CounterFr', 'Integer', $this);
				case 'AbbrivationMfr':
					return new QQNode('abbrivation_mfr', 'AbbrivationMfr', 'VarChar', $this);
				case 'CounterMfr':
					return new QQNode('counter_mfr', 'CounterMfr', 'Integer', $this);
				case 'Application':
					return new QQReverseReferenceNodeApplication($this, 'application', 'reverse_reference', 'calender_year');
				case 'BudgetAsAcademicYear':
					return new QQReverseReferenceNodeBudget($this, 'budgetasacademicyear', 'reverse_reference', 'academic_year');
				case 'CurrentStatus':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatus', 'reverse_reference', 'calender_year');
				case 'Fees':
					return new QQReverseReferenceNodeFees($this, 'fees', 'reverse_reference', 'calender_year');
				case 'LoginHasRole':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasrole', 'reverse_reference', 'calender_year');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'calender_year');
				case 'RegMemberAsBatch':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberasbatch', 'reverse_reference', 'batch');
				case 'SubjectTought':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttought', 'reverse_reference', 'calender_year');
				case 'TeachingPlainAsCalendarYear':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainascalendaryear', 'reverse_reference', 'calendar_year');
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'calender_year');
				case 'YearSubjectAsCalender':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectascalender', 'reverse_reference', 'calender');

				case '_PrimaryKeyNode':
					return new QQNode('idcalender_year', 'IdcalenderYear', 'Integer', $this);
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
     * @property-read QQNode $IdcalenderYear
     * @property-read QQNode $Name
     * @property-read QQNode $From
     * @property-read QQNode $To
     * @property-read QQNode $Description
     * @property-read QQNode $Visible
     * @property-read QQNode $Active
     * @property-read QQNode $Sequence
     * @property-read QQNode $FeePercentage
     * @property-read QQNode $Approved
     * @property-read QQNode $AbbrivationFr
     * @property-read QQNode $CounterFr
     * @property-read QQNode $AbbrivationMfr
     * @property-read QQNode $CounterMfr
     *
     *
     * @property-read QQReverseReferenceNodeApplication $Application
     * @property-read QQReverseReferenceNodeBudget $BudgetAsAcademicYear
     * @property-read QQReverseReferenceNodeCurrentStatus $CurrentStatus
     * @property-read QQReverseReferenceNodeFees $Fees
     * @property-read QQReverseReferenceNodeLoginHasRole $LoginHasRole
     * @property-read QQReverseReferenceNodeProfile $Profile
     * @property-read QQReverseReferenceNodeRegMember $RegMemberAsBatch
     * @property-read QQReverseReferenceNodeSubjectTought $SubjectTought
     * @property-read QQReverseReferenceNodeTeachingPlain $TeachingPlainAsCalendarYear
     * @property-read QQReverseReferenceNodeVoucher $Voucher
     * @property-read QQReverseReferenceNodeYearSubject $YearSubjectAsCalender

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCalenderYear extends QQReverseReferenceNode {
		protected $strTableName = 'calender_year';
		protected $strPrimaryKey = 'idcalender_year';
		protected $strClassName = 'CalenderYear';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcalenderYear':
					return new QQNode('idcalender_year', 'IdcalenderYear', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'From':
					return new QQNode('from', 'From', 'QDateTime', $this);
				case 'To':
					return new QQNode('to', 'To', 'QDateTime', $this);
				case 'Description':
					return new QQNode('description', 'Description', 'string', $this);
				case 'Visible':
					return new QQNode('visible', 'Visible', 'boolean', $this);
				case 'Active':
					return new QQNode('active', 'Active', 'boolean', $this);
				case 'Sequence':
					return new QQNode('sequence', 'Sequence', 'integer', $this);
				case 'FeePercentage':
					return new QQNode('fee_percentage', 'FeePercentage', 'integer', $this);
				case 'Approved':
					return new QQNode('approved', 'Approved', 'boolean', $this);
				case 'AbbrivationFr':
					return new QQNode('abbrivation_fr', 'AbbrivationFr', 'string', $this);
				case 'CounterFr':
					return new QQNode('counter_fr', 'CounterFr', 'integer', $this);
				case 'AbbrivationMfr':
					return new QQNode('abbrivation_mfr', 'AbbrivationMfr', 'string', $this);
				case 'CounterMfr':
					return new QQNode('counter_mfr', 'CounterMfr', 'integer', $this);
				case 'Application':
					return new QQReverseReferenceNodeApplication($this, 'application', 'reverse_reference', 'calender_year');
				case 'BudgetAsAcademicYear':
					return new QQReverseReferenceNodeBudget($this, 'budgetasacademicyear', 'reverse_reference', 'academic_year');
				case 'CurrentStatus':
					return new QQReverseReferenceNodeCurrentStatus($this, 'currentstatus', 'reverse_reference', 'calender_year');
				case 'Fees':
					return new QQReverseReferenceNodeFees($this, 'fees', 'reverse_reference', 'calender_year');
				case 'LoginHasRole':
					return new QQReverseReferenceNodeLoginHasRole($this, 'loginhasrole', 'reverse_reference', 'calender_year');
				case 'Profile':
					return new QQReverseReferenceNodeProfile($this, 'profile', 'reverse_reference', 'calender_year');
				case 'RegMemberAsBatch':
					return new QQReverseReferenceNodeRegMember($this, 'regmemberasbatch', 'reverse_reference', 'batch');
				case 'SubjectTought':
					return new QQReverseReferenceNodeSubjectTought($this, 'subjecttought', 'reverse_reference', 'calender_year');
				case 'TeachingPlainAsCalendarYear':
					return new QQReverseReferenceNodeTeachingPlain($this, 'teachingplainascalendaryear', 'reverse_reference', 'calendar_year');
				case 'Voucher':
					return new QQReverseReferenceNodeVoucher($this, 'voucher', 'reverse_reference', 'calender_year');
				case 'YearSubjectAsCalender':
					return new QQReverseReferenceNodeYearSubject($this, 'yearsubjectascalender', 'reverse_reference', 'calender');

				case '_PrimaryKeyNode':
					return new QQNode('idcalender_year', 'IdcalenderYear', 'integer', $this);
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
