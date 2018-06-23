<?php
	/**
	 * The abstract CertificateTempletGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CertificateTemplet subclass which
	 * extends this CertificateTempletGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CertificateTemplet class.
	 *
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdcertificateTemplet the value for intIdcertificateTemplet (Read-Only PK)
	 * @property integer $Code the value for intCode (Not Null)
	 * @property string $Name the value for strName (Unique)
	 * @property string $Abbrivation the value for strAbbrivation (Not Null)
	 * @property string $Counter the value for strCounter (Not Null)
	 * @property string $ShortName the value for strShortName (Not Null)
	 * @property string $MarathiName the value for strMarathiName (Not Null)
	 * @property integer $Group the value for intGroup (Not Null)
	 * @property string $Fees the value for strFees (Not Null)
	 * @property string $TokenHtml the value for strTokenHtml (Not Null)
	 * @property string $CertificateHtml the value for strCertificateHtml (Not Null)
	 * @property integer $Category the value for intCategory 
	 * @property integer $Resubmission the value for intResubmission 
	 * @property integer $ResubmissionLimit the value for intResubmissionLimit 
	 * @property integer $LeaveCat the value for intLeaveCat 
	 * @property CertificateGroup $GroupObject the value for the CertificateGroup object referenced by intGroup (Not Null)
	 * @property Cast $CategoryObject the value for the Cast object referenced by intCategory 
	 * @property-read Application $_ApplicationAsAppliedFor the value for the private _objApplicationAsAppliedFor (Read-Only) if set due to an expansion on the application.applied_for reverse relationship
	 * @property-read Application[] $_ApplicationAsAppliedForArray the value for the private _objApplicationAsAppliedForArray (Read-Only) if set due to an ExpandAsArray on the application.applied_for reverse relationship
	 * @property-read Approvel $_Approvel the value for the private _objApprovel (Read-Only) if set due to an expansion on the approvel.certificate_templet reverse relationship
	 * @property-read Approvel[] $_ApprovelArray the value for the private _objApprovelArray (Read-Only) if set due to an ExpandAsArray on the approvel.certificate_templet reverse relationship
	 * @property-read CertificateTempletHasRemark $_CertificateTempletHasRemarkAsId the value for the private _objCertificateTempletHasRemarkAsId (Read-Only) if set due to an expansion on the certificate_templet_has_remark.certificate_templet_idcertificate_templet reverse relationship
	 * @property-read CertificateTempletHasRemark[] $_CertificateTempletHasRemarkAsIdArray the value for the private _objCertificateTempletHasRemarkAsIdArray (Read-Only) if set due to an ExpandAsArray on the certificate_templet_has_remark.certificate_templet_idcertificate_templet reverse relationship
	 * @property-read TempletDocuments $_TempletDocuments the value for the private _objTempletDocuments (Read-Only) if set due to an expansion on the templet_documents.certificate_templet reverse relationship
	 * @property-read TempletDocuments[] $_TempletDocumentsArray the value for the private _objTempletDocumentsArray (Read-Only) if set due to an ExpandAsArray on the templet_documents.certificate_templet reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CertificateTempletGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////

		/**
		 * Protected member variable that maps to the database PK Identity column certificate_templet.idcertificate_templet
		 * @var integer intIdcertificateTemplet
		 */
		protected $intIdcertificateTemplet;
		const IdcertificateTempletDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.code
		 * @var integer intCode
		 */
		protected $intCode;
		const CodeDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.name
		 * @var string strName
		 */
		protected $strName;
		const NameMaxLength = 200;
		const NameDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.abbrivation
		 * @var string strAbbrivation
		 */
		protected $strAbbrivation;
		const AbbrivationMaxLength = 45;
		const AbbrivationDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.counter
		 * @var string strCounter
		 */
		protected $strCounter;
		const CounterMaxLength = 45;
		const CounterDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.short_name
		 * @var string strShortName
		 */
		protected $strShortName;
		const ShortNameMaxLength = 45;
		const ShortNameDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.marathi_name
		 * @var string strMarathiName
		 */
		protected $strMarathiName;
		const MarathiNameDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.group
		 * @var integer intGroup
		 */
		protected $intGroup;
		const GroupDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.fees
		 * @var string strFees
		 */
		protected $strFees;
		const FeesDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.token_html
		 * @var string strTokenHtml
		 */
		protected $strTokenHtml;
		const TokenHtmlDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.certificate_html
		 * @var string strCertificateHtml
		 */
		protected $strCertificateHtml;
		const CertificateHtmlDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.category
		 * @var integer intCategory
		 */
		protected $intCategory;
		const CategoryDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.resubmission
		 * @var integer intResubmission
		 */
		protected $intResubmission;
		const ResubmissionDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.resubmission_limit
		 * @var integer intResubmissionLimit
		 */
		protected $intResubmissionLimit;
		const ResubmissionLimitDefault = null;


		/**
		 * Protected member variable that maps to the database column certificate_templet.leave_cat
		 * @var integer intLeaveCat
		 */
		protected $intLeaveCat;
		const LeaveCatDefault = null;


		/**
		 * Private member variable that stores a reference to a single ApplicationAsAppliedFor object
		 * (of type Application), if this CertificateTemplet object was restored with
		 * an expansion on the application association table.
		 * @var Application _objApplicationAsAppliedFor;
		 */
		private $_objApplicationAsAppliedFor;

		/**
		 * Private member variable that stores a reference to an array of ApplicationAsAppliedFor objects
		 * (of type Application[]), if this CertificateTemplet object was restored with
		 * an ExpandAsArray on the application association table.
		 * @var Application[] _objApplicationAsAppliedForArray;
		 */
		private $_objApplicationAsAppliedForArray = null;

		/**
		 * Private member variable that stores a reference to a single Approvel object
		 * (of type Approvel), if this CertificateTemplet object was restored with
		 * an expansion on the approvel association table.
		 * @var Approvel _objApprovel;
		 */
		private $_objApprovel;

		/**
		 * Private member variable that stores a reference to an array of Approvel objects
		 * (of type Approvel[]), if this CertificateTemplet object was restored with
		 * an ExpandAsArray on the approvel association table.
		 * @var Approvel[] _objApprovelArray;
		 */
		private $_objApprovelArray = null;

		/**
		 * Private member variable that stores a reference to a single CertificateTempletHasRemarkAsId object
		 * (of type CertificateTempletHasRemark), if this CertificateTemplet object was restored with
		 * an expansion on the certificate_templet_has_remark association table.
		 * @var CertificateTempletHasRemark _objCertificateTempletHasRemarkAsId;
		 */
		private $_objCertificateTempletHasRemarkAsId;

		/**
		 * Private member variable that stores a reference to an array of CertificateTempletHasRemarkAsId objects
		 * (of type CertificateTempletHasRemark[]), if this CertificateTemplet object was restored with
		 * an ExpandAsArray on the certificate_templet_has_remark association table.
		 * @var CertificateTempletHasRemark[] _objCertificateTempletHasRemarkAsIdArray;
		 */
		private $_objCertificateTempletHasRemarkAsIdArray = null;

		/**
		 * Private member variable that stores a reference to a single TempletDocuments object
		 * (of type TempletDocuments), if this CertificateTemplet object was restored with
		 * an expansion on the templet_documents association table.
		 * @var TempletDocuments _objTempletDocuments;
		 */
		private $_objTempletDocuments;

		/**
		 * Private member variable that stores a reference to an array of TempletDocuments objects
		 * (of type TempletDocuments[]), if this CertificateTemplet object was restored with
		 * an ExpandAsArray on the templet_documents association table.
		 * @var TempletDocuments[] _objTempletDocumentsArray;
		 */
		private $_objTempletDocumentsArray = null;

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
		 * in the database column certificate_templet.group.
		 *
		 * NOTE: Always use the GroupObject property getter to correctly retrieve this CertificateGroup object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var CertificateGroup objGroupObject
		 */
		protected $objGroupObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column certificate_templet.category.
		 *
		 * NOTE: Always use the CategoryObject property getter to correctly retrieve this Cast object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Cast objCategoryObject
		 */
		protected $objCategoryObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdcertificateTemplet = CertificateTemplet::IdcertificateTempletDefault;
			$this->intCode = CertificateTemplet::CodeDefault;
			$this->strName = CertificateTemplet::NameDefault;
			$this->strAbbrivation = CertificateTemplet::AbbrivationDefault;
			$this->strCounter = CertificateTemplet::CounterDefault;
			$this->strShortName = CertificateTemplet::ShortNameDefault;
			$this->strMarathiName = CertificateTemplet::MarathiNameDefault;
			$this->intGroup = CertificateTemplet::GroupDefault;
			$this->strFees = CertificateTemplet::FeesDefault;
			$this->strTokenHtml = CertificateTemplet::TokenHtmlDefault;
			$this->strCertificateHtml = CertificateTemplet::CertificateHtmlDefault;
			$this->intCategory = CertificateTemplet::CategoryDefault;
			$this->intResubmission = CertificateTemplet::ResubmissionDefault;
			$this->intResubmissionLimit = CertificateTemplet::ResubmissionLimitDefault;
			$this->intLeaveCat = CertificateTemplet::LeaveCatDefault;
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
		 * Load a CertificateTemplet from PK Info
		 * @param integer $intIdcertificateTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet
		 */
		public static function Load($intIdcertificateTemplet, $objOptionalClauses = null) {
			$strCacheKey = false;
			if (QApplication::$objCacheProvider && !$objOptionalClauses && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CertificateTemplet', $intIdcertificateTemplet);
				$objCachedObject = QApplication::$objCacheProvider->Get($strCacheKey);
				if ($objCachedObject !== false) {
					return $objCachedObject;
				}
			}
			// Use QuerySingle to Perform the Query
			$objToReturn = CertificateTemplet::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateTemplet()->IdcertificateTemplet, $intIdcertificateTemplet)
				),
				$objOptionalClauses
			);
			if ($strCacheKey !== false) {
				QApplication::$objCacheProvider->Set($strCacheKey, $objToReturn);
			}
			return $objToReturn;
		}

		/**
		 * Load all CertificateTemplets
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CertificateTemplet::QueryArray to perform the LoadAll query
			try {
				return CertificateTemplet::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CertificateTemplets
		 * @return int
		 */
		public static function CountAll() {
			// Call CertificateTemplet::QueryCount to perform the CountAll query
			return CertificateTemplet::QueryCount(QQ::All());
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
			$objDatabase = CertificateTemplet::GetDatabase();

			// Create/Build out the QueryBuilder object with CertificateTemplet-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'certificate_templet');

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
				CertificateTemplet::GetSelectFields($objQueryBuilder, null, QQuery::extractSelectClause($objOptionalClauses));
			}
			$objQueryBuilder->AddFromItem('certificate_templet');

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
		 * Static Qcubed Query method to query for a single CertificateTemplet object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CertificateTemplet the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateTemplet::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query, Get the First Row, and Instantiate a new CertificateTemplet object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);

			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CertificateTemplet::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CertificateTemplet::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of CertificateTemplet objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CertificateTemplet[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateTemplet::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CertificateTemplet::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
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
				$strQuery = CertificateTemplet::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
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
		 * Static Qcubed Query method to query for a count of CertificateTemplet objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CertificateTemplet::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CertificateTemplet::GetDatabase();

			$strQuery = CertificateTemplet::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

			$objCache = new QCache('qquery/certificatetemplet', $strQuery);
			$cacheData = $objCache->GetData();

			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = CertificateTemplet::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}

			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CertificateTemplet
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null, QQSelect $objSelect = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'certificate_templet';
				$strAliasPrefix = '';
			}

            if ($objSelect) {
			    $objBuilder->AddSelectItem($strTableName, 'idcertificate_templet', $strAliasPrefix . 'idcertificate_templet');
                $objSelect->AddSelectItems($objBuilder, $strTableName, $strAliasPrefix);
            } else {
			    $objBuilder->AddSelectItem($strTableName, 'idcertificate_templet', $strAliasPrefix . 'idcertificate_templet');
			    $objBuilder->AddSelectItem($strTableName, 'code', $strAliasPrefix . 'code');
			    $objBuilder->AddSelectItem($strTableName, 'name', $strAliasPrefix . 'name');
			    $objBuilder->AddSelectItem($strTableName, 'abbrivation', $strAliasPrefix . 'abbrivation');
			    $objBuilder->AddSelectItem($strTableName, 'counter', $strAliasPrefix . 'counter');
			    $objBuilder->AddSelectItem($strTableName, 'short_name', $strAliasPrefix . 'short_name');
			    $objBuilder->AddSelectItem($strTableName, 'marathi_name', $strAliasPrefix . 'marathi_name');
			    $objBuilder->AddSelectItem($strTableName, 'group', $strAliasPrefix . 'group');
			    $objBuilder->AddSelectItem($strTableName, 'fees', $strAliasPrefix . 'fees');
			    $objBuilder->AddSelectItem($strTableName, 'token_html', $strAliasPrefix . 'token_html');
			    $objBuilder->AddSelectItem($strTableName, 'certificate_html', $strAliasPrefix . 'certificate_html');
			    $objBuilder->AddSelectItem($strTableName, 'category', $strAliasPrefix . 'category');
			    $objBuilder->AddSelectItem($strTableName, 'resubmission', $strAliasPrefix . 'resubmission');
			    $objBuilder->AddSelectItem($strTableName, 'resubmission_limit', $strAliasPrefix . 'resubmission_limit');
			    $objBuilder->AddSelectItem($strTableName, 'leave_cat', $strAliasPrefix . 'leave_cat');
            }
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CertificateTemplet from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CertificateTemplet::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CertificateTemplet
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objPreviousItem->intIdcertificateTemplet == $objDbRow->GetColumn($strAliasName, 'Integer')) {
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'certificate_templet__';


						// Expanding reverse references: ApplicationAsAppliedFor
						$strAlias = $strAliasPrefix . 'applicationasappliedfor__idapplication';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApplicationAsAppliedForArray)
								$objPreviousItem->_objApplicationAsAppliedForArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApplicationAsAppliedForArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApplicationAsAppliedForArray;
								$objChildItem = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasappliedfor__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApplicationAsAppliedForArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApplicationAsAppliedForArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasappliedfor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: Approvel
						$strAlias = $strAliasPrefix . 'approvel__idapprovel';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objApprovelArray)
								$objPreviousItem->_objApprovelArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objApprovelArray)) {
								$objPreviousChildItems = $objPreviousItem->_objApprovelArray;
								$objChildItem = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvel__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objApprovelArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objApprovelArray[] = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvel__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: CertificateTempletHasRemarkAsId
						$strAlias = $strAliasPrefix . 'certificatetemplethasremarkasid__certificate_templet_idcertificate_templet';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objCertificateTempletHasRemarkAsIdArray)
								$objPreviousItem->_objCertificateTempletHasRemarkAsIdArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCertificateTempletHasRemarkAsIdArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCertificateTempletHasRemarkAsIdArray;
								$objChildItem = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCertificateTempletHasRemarkAsIdArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCertificateTempletHasRemarkAsIdArray[] = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: TempletDocuments
						$strAlias = $strAliasPrefix . 'templetdocuments__idtemplet_documents';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if(null === $objPreviousItem->_objTempletDocumentsArray)
								$objPreviousItem->_objTempletDocumentsArray = array();
							if ($intPreviousChildItemCount = count($objPreviousItem->_objTempletDocumentsArray)) {
								$objPreviousChildItems = $objPreviousItem->_objTempletDocumentsArray;
								$objChildItem = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocuments__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objTempletDocumentsArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objTempletDocumentsArray[] = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocuments__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'certificate_templet__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the CertificateTemplet object
			$objToReturn = new CertificateTemplet();
			$objToReturn->__blnRestored = true;

			$strAlias = $strAliasPrefix . 'idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intIdcertificateTemplet = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'code';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCode = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'abbrivation';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strAbbrivation = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'counter';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCounter = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'short_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strShortName = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'marathi_name';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strMarathiName = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intGroup = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'fees';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strFees = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAlias = $strAliasPrefix . 'token_html';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strTokenHtml = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'certificate_html';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->strCertificateHtml = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAlias = $strAliasPrefix . 'category';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intCategory = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'resubmission';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intResubmission = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'resubmission_limit';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intResubmissionLimit = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAlias = $strAliasPrefix . 'leave_cat';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$objToReturn->intLeaveCat = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdcertificateTemplet != $objPreviousItem->IdcertificateTemplet) {
						continue;
					}
					$prevCnt = count($objPreviousItem->_objApplicationAsAppliedForArray);
					$cnt = count($objToReturn->_objApplicationAsAppliedForArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApplicationAsAppliedForArray, $objToReturn->_objApplicationAsAppliedForArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objApprovelArray);
					$cnt = count($objToReturn->_objApprovelArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objApprovelArray, $objToReturn->_objApprovelArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objCertificateTempletHasRemarkAsIdArray);
					$cnt = count($objToReturn->_objCertificateTempletHasRemarkAsIdArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objCertificateTempletHasRemarkAsIdArray, $objToReturn->_objCertificateTempletHasRemarkAsIdArray)) {
						continue;
					}

					$prevCnt = count($objPreviousItem->_objTempletDocumentsArray);
					$cnt = count($objToReturn->_objTempletDocumentsArray);
					if ($prevCnt != $cnt)
					    continue;
					if ($prevCnt == 0 || $cnt == 0 || !array_diff($objPreviousItem->_objTempletDocumentsArray, $objToReturn->_objTempletDocumentsArray)) {
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
				$strAliasPrefix = 'certificate_templet__';

			// Check for GroupObject Early Binding
			$strAlias = $strAliasPrefix . 'group__idcertificate_group';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objGroupObject = CertificateGroup::InstantiateDbRow($objDbRow, $strAliasPrefix . 'group__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for CategoryObject Early Binding
			$strAlias = $strAliasPrefix . 'category__idcast';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objCategoryObject = Cast::InstantiateDbRow($objDbRow, $strAliasPrefix . 'category__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for ApplicationAsAppliedFor Virtual Binding
			$strAlias = $strAliasPrefix . 'applicationasappliedfor__idapplication';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApplicationAsAppliedForArray)
				$objToReturn->_objApplicationAsAppliedForArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApplicationAsAppliedForArray[] = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasappliedfor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApplicationAsAppliedFor = Application::InstantiateDbRow($objDbRow, $strAliasPrefix . 'applicationasappliedfor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for Approvel Virtual Binding
			$strAlias = $strAliasPrefix . 'approvel__idapprovel';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objApprovelArray)
				$objToReturn->_objApprovelArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objApprovelArray[] = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvel__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objApprovel = Approvel::InstantiateDbRow($objDbRow, $strAliasPrefix . 'approvel__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for CertificateTempletHasRemarkAsId Virtual Binding
			$strAlias = $strAliasPrefix . 'certificatetemplethasremarkasid__certificate_templet_idcertificate_templet';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objCertificateTempletHasRemarkAsIdArray)
				$objToReturn->_objCertificateTempletHasRemarkAsIdArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objCertificateTempletHasRemarkAsIdArray[] = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCertificateTempletHasRemarkAsId = CertificateTempletHasRemark::InstantiateDbRow($objDbRow, $strAliasPrefix . 'certificatetemplethasremarkasid__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for TempletDocuments Virtual Binding
			$strAlias = $strAliasPrefix . 'templetdocuments__idtemplet_documents';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			$blnExpanded = $strExpandAsArrayNodes && array_key_exists($strAlias, $strExpandAsArrayNodes);
			if ($blnExpanded && null === $objToReturn->_objTempletDocumentsArray)
				$objToReturn->_objTempletDocumentsArray = array();
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if ($blnExpanded)
					$objToReturn->_objTempletDocumentsArray[] = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocuments__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objTempletDocuments = TempletDocuments::InstantiateDbRow($objDbRow, $strAliasPrefix . 'templetdocuments__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of CertificateTemplets from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CertificateTemplet[]
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
					$objItem = CertificateTemplet::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CertificateTemplet::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}


		/**
		 * Instantiate a single CertificateTemplet object from a query cursor (e.g. a DB ResultSet).
		 * Cursor is automatically moved to the "next row" of the result set.
		 * Will return NULL if no cursor or if the cursor has no more rows in the resultset.
		 * @param QDatabaseResultBase $objDbResult cursor resource
		 * @return CertificateTemplet next row resulting from the query
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
			return CertificateTemplet::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, null, $strColumnAliasArray);
		}




		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////

		/**
		 * Load a single CertificateTemplet object,
		 * by IdcertificateTemplet Index(es)
		 * @param integer $intIdcertificateTemplet
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet
		*/
		public static function LoadByIdcertificateTemplet($intIdcertificateTemplet, $objOptionalClauses = null) {
			return CertificateTemplet::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateTemplet()->IdcertificateTemplet, $intIdcertificateTemplet)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load a single CertificateTemplet object,
		 * by Name Index(es)
		 * @param string $strName
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet
		*/
		public static function LoadByName($strName, $objOptionalClauses = null) {
			return CertificateTemplet::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CertificateTemplet()->Name, $strName)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load an array of CertificateTemplet objects,
		 * by Group Index(es)
		 * @param integer $intGroup
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet[]
		*/
		public static function LoadArrayByGroup($intGroup, $objOptionalClauses = null) {
			// Call CertificateTemplet::QueryArray to perform the LoadArrayByGroup query
			try {
				return CertificateTemplet::QueryArray(
					QQ::Equal(QQN::CertificateTemplet()->Group, $intGroup),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CertificateTemplets
		 * by Group Index(es)
		 * @param integer $intGroup
		 * @return int
		*/
		public static function CountByGroup($intGroup) {
			// Call CertificateTemplet::QueryCount to perform the CountByGroup query
			return CertificateTemplet::QueryCount(
				QQ::Equal(QQN::CertificateTemplet()->Group, $intGroup)
			);
		}

		/**
		 * Load an array of CertificateTemplet objects,
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTemplet[]
		*/
		public static function LoadArrayByCategory($intCategory, $objOptionalClauses = null) {
			// Call CertificateTemplet::QueryArray to perform the LoadArrayByCategory query
			try {
				return CertificateTemplet::QueryArray(
					QQ::Equal(QQN::CertificateTemplet()->Category, $intCategory),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CertificateTemplets
		 * by Category Index(es)
		 * @param integer $intCategory
		 * @return int
		*/
		public static function CountByCategory($intCategory) {
			// Call CertificateTemplet::QueryCount to perform the CountByCategory query
			return CertificateTemplet::QueryCount(
				QQ::Equal(QQN::CertificateTemplet()->Category, $intCategory)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////





		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this CertificateTemplet
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `certificate_templet` (
							`code`,
							`name`,
							`abbrivation`,
							`counter`,
							`short_name`,
							`marathi_name`,
							`group`,
							`fees`,
							`token_html`,
							`certificate_html`,
							`category`,
							`resubmission`,
							`resubmission_limit`,
							`leave_cat`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intCode) . ',
							' . $objDatabase->SqlVariable($this->strName) . ',
							' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							' . $objDatabase->SqlVariable($this->strCounter) . ',
							' . $objDatabase->SqlVariable($this->strShortName) . ',
							' . $objDatabase->SqlVariable($this->strMarathiName) . ',
							' . $objDatabase->SqlVariable($this->intGroup) . ',
							' . $objDatabase->SqlVariable($this->strFees) . ',
							' . $objDatabase->SqlVariable($this->strTokenHtml) . ',
							' . $objDatabase->SqlVariable($this->strCertificateHtml) . ',
							' . $objDatabase->SqlVariable($this->intCategory) . ',
							' . $objDatabase->SqlVariable($this->intResubmission) . ',
							' . $objDatabase->SqlVariable($this->intResubmissionLimit) . ',
							' . $objDatabase->SqlVariable($this->intLeaveCat) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdcertificateTemplet = $objDatabase->InsertId('certificate_templet', 'idcertificate_templet');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`certificate_templet`
						SET
							`code` = ' . $objDatabase->SqlVariable($this->intCode) . ',
							`name` = ' . $objDatabase->SqlVariable($this->strName) . ',
							`abbrivation` = ' . $objDatabase->SqlVariable($this->strAbbrivation) . ',
							`counter` = ' . $objDatabase->SqlVariable($this->strCounter) . ',
							`short_name` = ' . $objDatabase->SqlVariable($this->strShortName) . ',
							`marathi_name` = ' . $objDatabase->SqlVariable($this->strMarathiName) . ',
							`group` = ' . $objDatabase->SqlVariable($this->intGroup) . ',
							`fees` = ' . $objDatabase->SqlVariable($this->strFees) . ',
							`token_html` = ' . $objDatabase->SqlVariable($this->strTokenHtml) . ',
							`certificate_html` = ' . $objDatabase->SqlVariable($this->strCertificateHtml) . ',
							`category` = ' . $objDatabase->SqlVariable($this->intCategory) . ',
							`resubmission` = ' . $objDatabase->SqlVariable($this->intResubmission) . ',
							`resubmission_limit` = ' . $objDatabase->SqlVariable($this->intResubmissionLimit) . ',
							`leave_cat` = ' . $objDatabase->SqlVariable($this->intLeaveCat) . '
						WHERE
							`idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
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
		 * Delete this CertificateTemplet
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CertificateTemplet with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet`
				WHERE
					`idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '');

			$this->DeleteCache();
		}

        /**
 	     * Delete this CertificateTemplet ONLY from the cache
 		 * @return void
		 */
		public function DeleteCache() {
			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				$strCacheKey = QApplication::$objCacheProvider->CreateKey(QApplication::$Database[1]->Database, 'CertificateTemplet', $this->intIdcertificateTemplet);
				QApplication::$objCacheProvider->Delete($strCacheKey);
			}
		}

		/**
		 * Delete all CertificateTemplets
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Truncate certificate_templet table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `certificate_templet`');

			if (QApplication::$objCacheProvider && QApplication::$Database[1]->Caching) {
				QApplication::$objCacheProvider->DeleteAll();
			}
		}

		/**
		 * Reload this CertificateTemplet from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CertificateTemplet object.');

			$this->DeleteCache();

			// Reload the Object
			$objReloaded = CertificateTemplet::Load($this->intIdcertificateTemplet);

			// Update $this's local variables to match
			$this->intCode = $objReloaded->intCode;
			$this->strName = $objReloaded->strName;
			$this->strAbbrivation = $objReloaded->strAbbrivation;
			$this->strCounter = $objReloaded->strCounter;
			$this->strShortName = $objReloaded->strShortName;
			$this->strMarathiName = $objReloaded->strMarathiName;
			$this->Group = $objReloaded->Group;
			$this->strFees = $objReloaded->strFees;
			$this->strTokenHtml = $objReloaded->strTokenHtml;
			$this->strCertificateHtml = $objReloaded->strCertificateHtml;
			$this->Category = $objReloaded->Category;
			$this->intResubmission = $objReloaded->intResubmission;
			$this->intResubmissionLimit = $objReloaded->intResubmissionLimit;
			$this->intLeaveCat = $objReloaded->intLeaveCat;
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
				case 'IdcertificateTemplet':
					/**
					 * Gets the value for intIdcertificateTemplet (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdcertificateTemplet;

				case 'Code':
					/**
					 * Gets the value for intCode (Not Null)
					 * @return integer
					 */
					return $this->intCode;

				case 'Name':
					/**
					 * Gets the value for strName (Unique)
					 * @return string
					 */
					return $this->strName;

				case 'Abbrivation':
					/**
					 * Gets the value for strAbbrivation (Not Null)
					 * @return string
					 */
					return $this->strAbbrivation;

				case 'Counter':
					/**
					 * Gets the value for strCounter (Not Null)
					 * @return string
					 */
					return $this->strCounter;

				case 'ShortName':
					/**
					 * Gets the value for strShortName (Not Null)
					 * @return string
					 */
					return $this->strShortName;

				case 'MarathiName':
					/**
					 * Gets the value for strMarathiName (Not Null)
					 * @return string
					 */
					return $this->strMarathiName;

				case 'Group':
					/**
					 * Gets the value for intGroup (Not Null)
					 * @return integer
					 */
					return $this->intGroup;

				case 'Fees':
					/**
					 * Gets the value for strFees (Not Null)
					 * @return string
					 */
					return $this->strFees;

				case 'TokenHtml':
					/**
					 * Gets the value for strTokenHtml (Not Null)
					 * @return string
					 */
					return $this->strTokenHtml;

				case 'CertificateHtml':
					/**
					 * Gets the value for strCertificateHtml (Not Null)
					 * @return string
					 */
					return $this->strCertificateHtml;

				case 'Category':
					/**
					 * Gets the value for intCategory 
					 * @return integer
					 */
					return $this->intCategory;

				case 'Resubmission':
					/**
					 * Gets the value for intResubmission 
					 * @return integer
					 */
					return $this->intResubmission;

				case 'ResubmissionLimit':
					/**
					 * Gets the value for intResubmissionLimit 
					 * @return integer
					 */
					return $this->intResubmissionLimit;

				case 'LeaveCat':
					/**
					 * Gets the value for intLeaveCat 
					 * @return integer
					 */
					return $this->intLeaveCat;


				///////////////////
				// Member Objects
				///////////////////
				case 'GroupObject':
					/**
					 * Gets the value for the CertificateGroup object referenced by intGroup (Not Null)
					 * @return CertificateGroup
					 */
					try {
						if ((!$this->objGroupObject) && (!is_null($this->intGroup)))
							$this->objGroupObject = CertificateGroup::Load($this->intGroup);
						return $this->objGroupObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CategoryObject':
					/**
					 * Gets the value for the Cast object referenced by intCategory 
					 * @return Cast
					 */
					try {
						if ((!$this->objCategoryObject) && (!is_null($this->intCategory)))
							$this->objCategoryObject = Cast::Load($this->intCategory);
						return $this->objCategoryObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ApplicationAsAppliedFor':
					/**
					 * Gets the value for the private _objApplicationAsAppliedFor (Read-Only)
					 * if set due to an expansion on the application.applied_for reverse relationship
					 * @return Application
					 */
					return $this->_objApplicationAsAppliedFor;

				case '_ApplicationAsAppliedForArray':
					/**
					 * Gets the value for the private _objApplicationAsAppliedForArray (Read-Only)
					 * if set due to an ExpandAsArray on the application.applied_for reverse relationship
					 * @return Application[]
					 */
					return $this->_objApplicationAsAppliedForArray;

				case '_Approvel':
					/**
					 * Gets the value for the private _objApprovel (Read-Only)
					 * if set due to an expansion on the approvel.certificate_templet reverse relationship
					 * @return Approvel
					 */
					return $this->_objApprovel;

				case '_ApprovelArray':
					/**
					 * Gets the value for the private _objApprovelArray (Read-Only)
					 * if set due to an ExpandAsArray on the approvel.certificate_templet reverse relationship
					 * @return Approvel[]
					 */
					return $this->_objApprovelArray;

				case '_CertificateTempletHasRemarkAsId':
					/**
					 * Gets the value for the private _objCertificateTempletHasRemarkAsId (Read-Only)
					 * if set due to an expansion on the certificate_templet_has_remark.certificate_templet_idcertificate_templet reverse relationship
					 * @return CertificateTempletHasRemark
					 */
					return $this->_objCertificateTempletHasRemarkAsId;

				case '_CertificateTempletHasRemarkAsIdArray':
					/**
					 * Gets the value for the private _objCertificateTempletHasRemarkAsIdArray (Read-Only)
					 * if set due to an ExpandAsArray on the certificate_templet_has_remark.certificate_templet_idcertificate_templet reverse relationship
					 * @return CertificateTempletHasRemark[]
					 */
					return $this->_objCertificateTempletHasRemarkAsIdArray;

				case '_TempletDocuments':
					/**
					 * Gets the value for the private _objTempletDocuments (Read-Only)
					 * if set due to an expansion on the templet_documents.certificate_templet reverse relationship
					 * @return TempletDocuments
					 */
					return $this->_objTempletDocuments;

				case '_TempletDocumentsArray':
					/**
					 * Gets the value for the private _objTempletDocumentsArray (Read-Only)
					 * if set due to an ExpandAsArray on the templet_documents.certificate_templet reverse relationship
					 * @return TempletDocuments[]
					 */
					return $this->_objTempletDocumentsArray;


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
					 * Sets the value for intCode (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intCode = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'Abbrivation':
					/**
					 * Sets the value for strAbbrivation (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strAbbrivation = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Counter':
					/**
					 * Sets the value for strCounter (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCounter = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ShortName':
					/**
					 * Sets the value for strShortName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strShortName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'MarathiName':
					/**
					 * Sets the value for strMarathiName (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMarathiName = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Group':
					/**
					 * Sets the value for intGroup (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objGroupObject = null;
						return ($this->intGroup = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fees':
					/**
					 * Sets the value for strFees (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFees = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'TokenHtml':
					/**
					 * Sets the value for strTokenHtml (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTokenHtml = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CertificateHtml':
					/**
					 * Sets the value for strCertificateHtml (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCertificateHtml = QType::Cast($mixValue, QType::String));
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

				case 'Resubmission':
					/**
					 * Sets the value for intResubmission 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intResubmission = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ResubmissionLimit':
					/**
					 * Sets the value for intResubmissionLimit 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intResubmissionLimit = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LeaveCat':
					/**
					 * Sets the value for intLeaveCat 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intLeaveCat = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'GroupObject':
					/**
					 * Sets the value for the CertificateGroup object referenced by intGroup (Not Null)
					 * @param CertificateGroup $mixValue
					 * @return CertificateGroup
					 */
					if (is_null($mixValue)) {
						$this->intGroup = null;
						$this->objGroupObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a CertificateGroup object
						try {
							$mixValue = QType::Cast($mixValue, 'CertificateGroup');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED CertificateGroup object
						if (is_null($mixValue->IdcertificateGroup))
							throw new QCallerException('Unable to set an unsaved GroupObject for this CertificateTemplet');

						// Update Local Member Variables
						$this->objGroupObject = $mixValue;
						$this->intGroup = $mixValue->IdcertificateGroup;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'CategoryObject':
					/**
					 * Sets the value for the Cast object referenced by intCategory 
					 * @param Cast $mixValue
					 * @return Cast
					 */
					if (is_null($mixValue)) {
						$this->intCategory = null;
						$this->objCategoryObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Cast object
						try {
							$mixValue = QType::Cast($mixValue, 'Cast');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Make sure $mixValue is a SAVED Cast object
						if (is_null($mixValue->Idcast))
							throw new QCallerException('Unable to set an unsaved CategoryObject for this CertificateTemplet');

						// Update Local Member Variables
						$this->objCategoryObject = $mixValue;
						$this->intCategory = $mixValue->Idcast;

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



		// Related Objects' Methods for ApplicationAsAppliedFor
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ApplicationsAsAppliedFor as an array of Application objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Application[]
		*/
		public function GetApplicationAsAppliedForArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcertificateTemplet)))
				return array();

			try {
				return Application::LoadArrayByAppliedFor($this->intIdcertificateTemplet, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ApplicationsAsAppliedFor
		 * @return int
		*/
		public function CountApplicationsAsAppliedFor() {
			if ((is_null($this->intIdcertificateTemplet)))
				return 0;

			return Application::CountByAppliedFor($this->intIdcertificateTemplet);
		}

		/**
		 * Associates a ApplicationAsAppliedFor
		 * @param Application $objApplication
		 * @return void
		*/
		public function AssociateApplicationAsAppliedFor(Application $objApplication) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsAppliedFor on this unsaved CertificateTemplet.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApplicationAsAppliedFor on this CertificateTemplet with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`applied_for` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . '
			');
		}

		/**
		 * Unassociates a ApplicationAsAppliedFor
		 * @param Application $objApplication
		 * @return void
		*/
		public function UnassociateApplicationAsAppliedFor(Application $objApplication) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsAppliedFor on this unsaved CertificateTemplet.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsAppliedFor on this CertificateTemplet with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`applied_for` = null
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`applied_for` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Unassociates all ApplicationsAsAppliedFor
		 * @return void
		*/
		public function UnassociateAllApplicationsAsAppliedFor() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsAppliedFor on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`application`
				SET
					`applied_for` = null
				WHERE
					`applied_for` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes an associated ApplicationAsAppliedFor
		 * @param Application $objApplication
		 * @return void
		*/
		public function DeleteAssociatedApplicationAsAppliedFor(Application $objApplication) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsAppliedFor on this unsaved CertificateTemplet.');
			if ((is_null($objApplication->Idapplication)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsAppliedFor on this CertificateTemplet with an unsaved Application.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`idapplication` = ' . $objDatabase->SqlVariable($objApplication->Idapplication) . ' AND
					`applied_for` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes all associated ApplicationsAsAppliedFor
		 * @return void
		*/
		public function DeleteAllApplicationsAsAppliedFor() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApplicationAsAppliedFor on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`application`
				WHERE
					`applied_for` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}


		// Related Objects' Methods for Approvel
		//-------------------------------------------------------------------

		/**
		 * Gets all associated Approvels as an array of Approvel objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Approvel[]
		*/
		public function GetApprovelArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcertificateTemplet)))
				return array();

			try {
				return Approvel::LoadArrayByCertificateTemplet($this->intIdcertificateTemplet, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated Approvels
		 * @return int
		*/
		public function CountApprovels() {
			if ((is_null($this->intIdcertificateTemplet)))
				return 0;

			return Approvel::CountByCertificateTemplet($this->intIdcertificateTemplet);
		}

		/**
		 * Associates a Approvel
		 * @param Approvel $objApprovel
		 * @return void
		*/
		public function AssociateApprovel(Approvel $objApprovel) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApprovel on this unsaved CertificateTemplet.');
			if ((is_null($objApprovel->Idapprovel)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateApprovel on this CertificateTemplet with an unsaved Approvel.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`approvel`
				SET
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($objApprovel->Idapprovel) . '
			');
		}

		/**
		 * Unassociates a Approvel
		 * @param Approvel $objApprovel
		 * @return void
		*/
		public function UnassociateApprovel(Approvel $objApprovel) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovel on this unsaved CertificateTemplet.');
			if ((is_null($objApprovel->Idapprovel)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovel on this CertificateTemplet with an unsaved Approvel.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`approvel`
				SET
					`certificate_templet` = null
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($objApprovel->Idapprovel) . ' AND
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Unassociates all Approvels
		 * @return void
		*/
		public function UnassociateAllApprovels() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovel on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`approvel`
				SET
					`certificate_templet` = null
				WHERE
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes an associated Approvel
		 * @param Approvel $objApprovel
		 * @return void
		*/
		public function DeleteAssociatedApprovel(Approvel $objApprovel) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovel on this unsaved CertificateTemplet.');
			if ((is_null($objApprovel->Idapprovel)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovel on this CertificateTemplet with an unsaved Approvel.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`approvel`
				WHERE
					`idapprovel` = ' . $objDatabase->SqlVariable($objApprovel->Idapprovel) . ' AND
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes all associated Approvels
		 * @return void
		*/
		public function DeleteAllApprovels() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateApprovel on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`approvel`
				WHERE
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}


		// Related Objects' Methods for CertificateTempletHasRemarkAsId
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CertificateTempletHasRemarksAsId as an array of CertificateTempletHasRemark objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CertificateTempletHasRemark[]
		*/
		public function GetCertificateTempletHasRemarkAsIdArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcertificateTemplet)))
				return array();

			try {
				return CertificateTempletHasRemark::LoadArrayByCertificateTempletIdcertificateTemplet($this->intIdcertificateTemplet, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CertificateTempletHasRemarksAsId
		 * @return int
		*/
		public function CountCertificateTempletHasRemarksAsId() {
			if ((is_null($this->intIdcertificateTemplet)))
				return 0;

			return CertificateTempletHasRemark::CountByCertificateTempletIdcertificateTemplet($this->intIdcertificateTemplet);
		}

		/**
		 * Associates a CertificateTempletHasRemarkAsId
		 * @param CertificateTempletHasRemark $objCertificateTempletHasRemark
		 * @return void
		*/
		public function AssociateCertificateTempletHasRemarkAsId(CertificateTempletHasRemark $objCertificateTempletHasRemark) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletHasRemarkAsId on this unsaved CertificateTemplet.');
			if ((is_null($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet)) || (is_null($objCertificateTempletHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCertificateTempletHasRemarkAsId on this CertificateTemplet with an unsaved CertificateTempletHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet_has_remark`
				SET
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->RemarkIdremark) . '
			');
		}

		/**
		 * Unassociates a CertificateTempletHasRemarkAsId
		 * @param CertificateTempletHasRemark $objCertificateTempletHasRemark
		 * @return void
		*/
		public function UnassociateCertificateTempletHasRemarkAsId(CertificateTempletHasRemark $objCertificateTempletHasRemark) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved CertificateTemplet.');
			if ((is_null($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet)) || (is_null($objCertificateTempletHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this CertificateTemplet with an unsaved CertificateTempletHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet_has_remark`
				SET
					`certificate_templet_idcertificate_templet` = null
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->RemarkIdremark) . ' AND
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Unassociates all CertificateTempletHasRemarksAsId
		 * @return void
		*/
		public function UnassociateAllCertificateTempletHasRemarksAsId() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`certificate_templet_has_remark`
				SET
					`certificate_templet_idcertificate_templet` = null
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes an associated CertificateTempletHasRemarkAsId
		 * @param CertificateTempletHasRemark $objCertificateTempletHasRemark
		 * @return void
		*/
		public function DeleteAssociatedCertificateTempletHasRemarkAsId(CertificateTempletHasRemark $objCertificateTempletHasRemark) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved CertificateTemplet.');
			if ((is_null($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet)) || (is_null($objCertificateTempletHasRemark->RemarkIdremark)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this CertificateTemplet with an unsaved CertificateTempletHasRemark.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet_has_remark`
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->CertificateTempletIdcertificateTemplet) . ' AND
					`remark_idremark` = ' . $objDatabase->SqlVariable($objCertificateTempletHasRemark->RemarkIdremark) . ' AND
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes all associated CertificateTempletHasRemarksAsId
		 * @return void
		*/
		public function DeleteAllCertificateTempletHasRemarksAsId() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCertificateTempletHasRemarkAsId on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`certificate_templet_has_remark`
				WHERE
					`certificate_templet_idcertificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}


		// Related Objects' Methods for TempletDocuments
		//-------------------------------------------------------------------

		/**
		 * Gets all associated TempletDocumentses as an array of TempletDocuments objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TempletDocuments[]
		*/
		public function GetTempletDocumentsArray($objOptionalClauses = null) {
			if ((is_null($this->intIdcertificateTemplet)))
				return array();

			try {
				return TempletDocuments::LoadArrayByCertificateTemplet($this->intIdcertificateTemplet, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated TempletDocumentses
		 * @return int
		*/
		public function CountTempletDocumentses() {
			if ((is_null($this->intIdcertificateTemplet)))
				return 0;

			return TempletDocuments::CountByCertificateTemplet($this->intIdcertificateTemplet);
		}

		/**
		 * Associates a TempletDocuments
		 * @param TempletDocuments $objTempletDocuments
		 * @return void
		*/
		public function AssociateTempletDocuments(TempletDocuments $objTempletDocuments) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempletDocuments on this unsaved CertificateTemplet.');
			if ((is_null($objTempletDocuments->IdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateTempletDocuments on this CertificateTemplet with an unsaved TempletDocuments.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`templet_documents`
				SET
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($objTempletDocuments->IdtempletDocuments) . '
			');
		}

		/**
		 * Unassociates a TempletDocuments
		 * @param TempletDocuments $objTempletDocuments
		 * @return void
		*/
		public function UnassociateTempletDocuments(TempletDocuments $objTempletDocuments) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocuments on this unsaved CertificateTemplet.');
			if ((is_null($objTempletDocuments->IdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocuments on this CertificateTemplet with an unsaved TempletDocuments.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`templet_documents`
				SET
					`certificate_templet` = null
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($objTempletDocuments->IdtempletDocuments) . ' AND
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Unassociates all TempletDocumentses
		 * @return void
		*/
		public function UnassociateAllTempletDocumentses() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocuments on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`templet_documents`
				SET
					`certificate_templet` = null
				WHERE
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes an associated TempletDocuments
		 * @param TempletDocuments $objTempletDocuments
		 * @return void
		*/
		public function DeleteAssociatedTempletDocuments(TempletDocuments $objTempletDocuments) {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocuments on this unsaved CertificateTemplet.');
			if ((is_null($objTempletDocuments->IdtempletDocuments)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocuments on this CertificateTemplet with an unsaved TempletDocuments.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`templet_documents`
				WHERE
					`idtemplet_documents` = ' . $objDatabase->SqlVariable($objTempletDocuments->IdtempletDocuments) . ' AND
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
			');
		}

		/**
		 * Deletes all associated TempletDocumentses
		 * @return void
		*/
		public function DeleteAllTempletDocumentses() {
			if ((is_null($this->intIdcertificateTemplet)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateTempletDocuments on this unsaved CertificateTemplet.');

			// Get the Database Object for this Class
			$objDatabase = CertificateTemplet::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`templet_documents`
				WHERE
					`certificate_templet` = ' . $objDatabase->SqlVariable($this->intIdcertificateTemplet) . '
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
			return "certificate_templet";
		}

		/**
		 * Static method to retrieve the Table name from which this class has been created.
		 * @return string Name of the table from which this class has been created.
		 */
		public static function GetDatabaseName() {
			return QApplication::$Database[CertificateTemplet::GetDatabaseIndex()]->Database;
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
			$strToReturn = '<complexType name="CertificateTemplet"><sequence>';
			$strToReturn .= '<element name="IdcertificateTemplet" type="xsd:int"/>';
			$strToReturn .= '<element name="Code" type="xsd:int"/>';
			$strToReturn .= '<element name="Name" type="xsd:string"/>';
			$strToReturn .= '<element name="Abbrivation" type="xsd:string"/>';
			$strToReturn .= '<element name="Counter" type="xsd:string"/>';
			$strToReturn .= '<element name="ShortName" type="xsd:string"/>';
			$strToReturn .= '<element name="MarathiName" type="xsd:string"/>';
			$strToReturn .= '<element name="GroupObject" type="xsd1:CertificateGroup"/>';
			$strToReturn .= '<element name="Fees" type="xsd:string"/>';
			$strToReturn .= '<element name="TokenHtml" type="xsd:string"/>';
			$strToReturn .= '<element name="CertificateHtml" type="xsd:string"/>';
			$strToReturn .= '<element name="CategoryObject" type="xsd1:Cast"/>';
			$strToReturn .= '<element name="Resubmission" type="xsd:int"/>';
			$strToReturn .= '<element name="ResubmissionLimit" type="xsd:int"/>';
			$strToReturn .= '<element name="LeaveCat" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CertificateTemplet', $strComplexTypeArray)) {
				$strComplexTypeArray['CertificateTemplet'] = CertificateTemplet::GetSoapComplexTypeXml();
				CertificateGroup::AlterSoapComplexTypeArray($strComplexTypeArray);
				Cast::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CertificateTemplet::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CertificateTemplet();
			if (property_exists($objSoapObject, 'IdcertificateTemplet'))
				$objToReturn->intIdcertificateTemplet = $objSoapObject->IdcertificateTemplet;
			if (property_exists($objSoapObject, 'Code'))
				$objToReturn->intCode = $objSoapObject->Code;
			if (property_exists($objSoapObject, 'Name'))
				$objToReturn->strName = $objSoapObject->Name;
			if (property_exists($objSoapObject, 'Abbrivation'))
				$objToReturn->strAbbrivation = $objSoapObject->Abbrivation;
			if (property_exists($objSoapObject, 'Counter'))
				$objToReturn->strCounter = $objSoapObject->Counter;
			if (property_exists($objSoapObject, 'ShortName'))
				$objToReturn->strShortName = $objSoapObject->ShortName;
			if (property_exists($objSoapObject, 'MarathiName'))
				$objToReturn->strMarathiName = $objSoapObject->MarathiName;
			if ((property_exists($objSoapObject, 'GroupObject')) &&
				($objSoapObject->GroupObject))
				$objToReturn->GroupObject = CertificateGroup::GetObjectFromSoapObject($objSoapObject->GroupObject);
			if (property_exists($objSoapObject, 'Fees'))
				$objToReturn->strFees = $objSoapObject->Fees;
			if (property_exists($objSoapObject, 'TokenHtml'))
				$objToReturn->strTokenHtml = $objSoapObject->TokenHtml;
			if (property_exists($objSoapObject, 'CertificateHtml'))
				$objToReturn->strCertificateHtml = $objSoapObject->CertificateHtml;
			if ((property_exists($objSoapObject, 'CategoryObject')) &&
				($objSoapObject->CategoryObject))
				$objToReturn->CategoryObject = Cast::GetObjectFromSoapObject($objSoapObject->CategoryObject);
			if (property_exists($objSoapObject, 'Resubmission'))
				$objToReturn->intResubmission = $objSoapObject->Resubmission;
			if (property_exists($objSoapObject, 'ResubmissionLimit'))
				$objToReturn->intResubmissionLimit = $objSoapObject->ResubmissionLimit;
			if (property_exists($objSoapObject, 'LeaveCat'))
				$objToReturn->intLeaveCat = $objSoapObject->LeaveCat;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CertificateTemplet::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objGroupObject)
				$objObject->objGroupObject = CertificateGroup::GetSoapObjectFromObject($objObject->objGroupObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intGroup = null;
			if ($objObject->objCategoryObject)
				$objObject->objCategoryObject = Cast::GetSoapObjectFromObject($objObject->objCategoryObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intCategory = null;
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
			$iArray['IdcertificateTemplet'] = $this->intIdcertificateTemplet;
			$iArray['Code'] = $this->intCode;
			$iArray['Name'] = $this->strName;
			$iArray['Abbrivation'] = $this->strAbbrivation;
			$iArray['Counter'] = $this->strCounter;
			$iArray['ShortName'] = $this->strShortName;
			$iArray['MarathiName'] = $this->strMarathiName;
			$iArray['Group'] = $this->intGroup;
			$iArray['Fees'] = $this->strFees;
			$iArray['TokenHtml'] = $this->strTokenHtml;
			$iArray['CertificateHtml'] = $this->strCertificateHtml;
			$iArray['Category'] = $this->intCategory;
			$iArray['Resubmission'] = $this->intResubmission;
			$iArray['ResubmissionLimit'] = $this->intResubmissionLimit;
			$iArray['LeaveCat'] = $this->intLeaveCat;
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
			return JavaScriptHelper::toJsObject(array('value' => $this->__toString(), 'id' =>  $this->intIdcertificateTemplet ));
		}



	}



	/////////////////////////////////////
	// ADDITIONAL CLASSES for QCubed QUERY
	/////////////////////////////////////

    /**
     * @uses QQNode
     *
     * @property-read QQNode $IdcertificateTemplet
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $Counter
     * @property-read QQNode $ShortName
     * @property-read QQNode $MarathiName
     * @property-read QQNode $Group
     * @property-read QQNodeCertificateGroup $GroupObject
     * @property-read QQNode $Fees
     * @property-read QQNode $TokenHtml
     * @property-read QQNode $CertificateHtml
     * @property-read QQNode $Category
     * @property-read QQNodeCast $CategoryObject
     * @property-read QQNode $Resubmission
     * @property-read QQNode $ResubmissionLimit
     * @property-read QQNode $LeaveCat
     *
     *
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsAppliedFor
     * @property-read QQReverseReferenceNodeApprovel $Approvel
     * @property-read QQReverseReferenceNodeCertificateTempletHasRemark $CertificateTempletHasRemarkAsId
     * @property-read QQReverseReferenceNodeTempletDocuments $TempletDocuments

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeCertificateTemplet extends QQNode {
		protected $strTableName = 'certificate_templet';
		protected $strPrimaryKey = 'idcertificate_templet';
		protected $strClassName = 'CertificateTemplet';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcertificateTemplet':
					return new QQNode('idcertificate_templet', 'IdcertificateTemplet', 'Integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'Integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'VarChar', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'VarChar', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'VarChar', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'VarChar', $this);
				case 'MarathiName':
					return new QQNode('marathi_name', 'MarathiName', 'Blob', $this);
				case 'Group':
					return new QQNode('group', 'Group', 'Integer', $this);
				case 'GroupObject':
					return new QQNodeCertificateGroup('group', 'GroupObject', 'Integer', $this);
				case 'Fees':
					return new QQNode('fees', 'Fees', 'VarChar', $this);
				case 'TokenHtml':
					return new QQNode('token_html', 'TokenHtml', 'Blob', $this);
				case 'CertificateHtml':
					return new QQNode('certificate_html', 'CertificateHtml', 'Blob', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'Integer', $this);
				case 'CategoryObject':
					return new QQNodeCast('category', 'CategoryObject', 'Integer', $this);
				case 'Resubmission':
					return new QQNode('resubmission', 'Resubmission', 'Integer', $this);
				case 'ResubmissionLimit':
					return new QQNode('resubmission_limit', 'ResubmissionLimit', 'Integer', $this);
				case 'LeaveCat':
					return new QQNode('leave_cat', 'LeaveCat', 'Integer', $this);
				case 'ApplicationAsAppliedFor':
					return new QQReverseReferenceNodeApplication($this, 'applicationasappliedfor', 'reverse_reference', 'applied_for');
				case 'Approvel':
					return new QQReverseReferenceNodeApprovel($this, 'approvel', 'reverse_reference', 'certificate_templet');
				case 'CertificateTempletHasRemarkAsId':
					return new QQReverseReferenceNodeCertificateTempletHasRemark($this, 'certificatetemplethasremarkasid', 'reverse_reference', 'certificate_templet_idcertificate_templet');
				case 'TempletDocuments':
					return new QQReverseReferenceNodeTempletDocuments($this, 'templetdocuments', 'reverse_reference', 'certificate_templet');

				case '_PrimaryKeyNode':
					return new QQNode('idcertificate_templet', 'IdcertificateTemplet', 'Integer', $this);
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
     * @property-read QQNode $IdcertificateTemplet
     * @property-read QQNode $Code
     * @property-read QQNode $Name
     * @property-read QQNode $Abbrivation
     * @property-read QQNode $Counter
     * @property-read QQNode $ShortName
     * @property-read QQNode $MarathiName
     * @property-read QQNode $Group
     * @property-read QQNodeCertificateGroup $GroupObject
     * @property-read QQNode $Fees
     * @property-read QQNode $TokenHtml
     * @property-read QQNode $CertificateHtml
     * @property-read QQNode $Category
     * @property-read QQNodeCast $CategoryObject
     * @property-read QQNode $Resubmission
     * @property-read QQNode $ResubmissionLimit
     * @property-read QQNode $LeaveCat
     *
     *
     * @property-read QQReverseReferenceNodeApplication $ApplicationAsAppliedFor
     * @property-read QQReverseReferenceNodeApprovel $Approvel
     * @property-read QQReverseReferenceNodeCertificateTempletHasRemark $CertificateTempletHasRemarkAsId
     * @property-read QQReverseReferenceNodeTempletDocuments $TempletDocuments

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCertificateTemplet extends QQReverseReferenceNode {
		protected $strTableName = 'certificate_templet';
		protected $strPrimaryKey = 'idcertificate_templet';
		protected $strClassName = 'CertificateTemplet';
		public function __get($strName) {
			switch ($strName) {
				case 'IdcertificateTemplet':
					return new QQNode('idcertificate_templet', 'IdcertificateTemplet', 'integer', $this);
				case 'Code':
					return new QQNode('code', 'Code', 'integer', $this);
				case 'Name':
					return new QQNode('name', 'Name', 'string', $this);
				case 'Abbrivation':
					return new QQNode('abbrivation', 'Abbrivation', 'string', $this);
				case 'Counter':
					return new QQNode('counter', 'Counter', 'string', $this);
				case 'ShortName':
					return new QQNode('short_name', 'ShortName', 'string', $this);
				case 'MarathiName':
					return new QQNode('marathi_name', 'MarathiName', 'string', $this);
				case 'Group':
					return new QQNode('group', 'Group', 'integer', $this);
				case 'GroupObject':
					return new QQNodeCertificateGroup('group', 'GroupObject', 'integer', $this);
				case 'Fees':
					return new QQNode('fees', 'Fees', 'string', $this);
				case 'TokenHtml':
					return new QQNode('token_html', 'TokenHtml', 'string', $this);
				case 'CertificateHtml':
					return new QQNode('certificate_html', 'CertificateHtml', 'string', $this);
				case 'Category':
					return new QQNode('category', 'Category', 'integer', $this);
				case 'CategoryObject':
					return new QQNodeCast('category', 'CategoryObject', 'integer', $this);
				case 'Resubmission':
					return new QQNode('resubmission', 'Resubmission', 'integer', $this);
				case 'ResubmissionLimit':
					return new QQNode('resubmission_limit', 'ResubmissionLimit', 'integer', $this);
				case 'LeaveCat':
					return new QQNode('leave_cat', 'LeaveCat', 'integer', $this);
				case 'ApplicationAsAppliedFor':
					return new QQReverseReferenceNodeApplication($this, 'applicationasappliedfor', 'reverse_reference', 'applied_for');
				case 'Approvel':
					return new QQReverseReferenceNodeApprovel($this, 'approvel', 'reverse_reference', 'certificate_templet');
				case 'CertificateTempletHasRemarkAsId':
					return new QQReverseReferenceNodeCertificateTempletHasRemark($this, 'certificatetemplethasremarkasid', 'reverse_reference', 'certificate_templet_idcertificate_templet');
				case 'TempletDocuments':
					return new QQReverseReferenceNodeTempletDocuments($this, 'templetdocuments', 'reverse_reference', 'certificate_templet');

				case '_PrimaryKeyNode':
					return new QQNode('idcertificate_templet', 'IdcertificateTemplet', 'integer', $this);
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
